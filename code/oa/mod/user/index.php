<?php
if (!defined('IN_BOOT')) {
    exit('Access Denied');
}

class index
{
    public function __construct()
    {
        global $segments;
        $ac = $segments['ac'];
        $this->lastpage = $_SERVER["HTTP_REFERER"];
        $this->form = new Form(this);

        $ac = in_array($ac, array('index', 'login', 'logout')) ? $ac : 'error';
        call_user_func(array($this, $ac . 'Func'), $ac);
    }

    public function errorFunc()
    {
        show_error('THE URL NOT FOUND', 404);
    }

    public function loginFunc()
    {
        $param = array();
        param_post(array('hashKey' => 'STRING'), '', $param, array('hashKey' => ''));

        if (!$param['hashKey']) {
            $GLOBALS['tpl']->display('user/login.tpl');
        } else {
            $rules = array(
                'username|账号' => 'required|trim',
                'password|账号' => 'required|trim',
            );
            $this->form->set_rules($rules);
            if ($this->form->run() === false) {
                show_message($this->form->error_string(), '', 2);
            }
            $info = $this->form->get_validation_data();

            $sql = "select * from user where username='{$info['username']}'";
            $result = $GLOBALS['mysql']->getOne($sql);

            if ($result['password'] !== md5($info['password'])) {
                show_error('密码错误，请重新输入', 500);
            }

            $uinfo = $result['uid'] . "/t" . $result['username'] . '/t' . $result['password'] . '/t' . $result['type'];
            ssetcookie('uinfo', authcode($uinfo, 'ENCODE'));

            $ip = getonlineip();
            $sql = "insert into login_log (`uid`,`ip`) values ('{$result['id']}', '{$ip}')";
            $GLOBALS['mysql']->execute($sql);

            webheader('/index/index/index');
        }
    }

    public function logoutFunc()
    {
        ssetcookie('uinfo', '', 0);
        webheader('/user/index/login');
    }
}

new index();