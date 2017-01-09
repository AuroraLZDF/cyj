<?php
class index extends AdModel
{
    public function __construct()
    {
        global $segments;
        $ac = $segments['ac'];
        $this -> lastpage = $_SERVER["HTTP_REFERER"];

        checkCk();

        $this -> title = '管理员';
        $this -> table = "user";
        $this -> fields = array(
            'uid|UID' => array('rule' => 'required|trim', 'disable' => true),
            'username|登录名' => array('rule' => 'required|trim|callback_check_name', 'type' => 'text', 'required' => true),
            'password|密码' => array('rule' => 'required|trim', 'type' => 'text', 'required' => true),
            'phone|手机号' => array('rule' => 'trim'),
            'type|类型' => array('rule' => 'required|trim', 'type' => 'select', 'required' => true, 'data' => Oa_User::$admin_type),
            'status|状态' => array('rule' => 'required|trim', 'type' => 'select', 'required' => true, 'data' => Oa_User::$admin_status),
            'create_time|创建时间' => array('rule' => 'required|trim', 'type' => 'text', 'disable' => true),
        );
        $this -> id = array('name' => 'uid');
        $this -> order = 'order by uid desc';

        $this -> manage = true;
        $this -> create = true;
        $this -> modify = true;
        $this -> delete = true;

        $this -> createUrl = "/user/manager/index";
        $this -> modifyUrl = "/user/manager/index";
        $this -> deleteUrl = "/user/manager/index";
        //$this -> _field = ' uid ';
        $this -> where = ' 1';

        $this->page = Page::getInstance();

        parent :: __construct();

        $ac = ac_explode($ac);
        $ac = in_array($ac, array('index', 'create', 'modify', 'delete')) ? $ac : 'error';

        call_user_func(array($this, $ac . 'Func'), $ac);
    }

    public function errorFunc(){
        show_error('THE URL NOT FOUND', 404);
    }

    public function indexFunc(){
        $param = [];
        param_post(['page' => 'INT', 'username' => 'STRING'], '', $param, ['page' => 0, 'username' => '']);
        $page = $param['page'];
        unset($param['page']);

        if ($this -> where) {
            $this -> where = ' WHERE ' . $this -> where;
        }
        $fd = $this -> _field ? '* ,' . $this -> _field : '*';

        $sql = "SELECT COUNT(0) FROM " . $this->table . ' ' . $this -> where;
        $count = $GLOBALS['mysql']->getResult($sql);

        $this->page->setPageSize($page, $this->limit, $position, $allpage, $count);
        $str .= $this->page->getPagePlate($page, $allpage, $this->url . '/', $param);

        $sql = "SELECT $fd FROM " . $this -> table . "  " . $this -> where ." $this->order LIMIT $position, " . $this->limit;
        $datas = $GLOBALS['mysql']->getAll($sql);

        $GLOBALS['tpl']->assign('str', $str);
        $GLOBALS['tpl']->assign('datas', $datas);
        $GLOBALS['tpl']->display('oa/list.tpl');
    }

    public function createFunc(){
        $param = [];
        param_post([$this->id['name'] => 'INT', 'hashkey' => 'STRING'], '', $param, [$this->id['name'] => 0, 'hashkey' => '']);

        if($param['hashkey']){
            parent::createFunc();
            exit;
        }

        $GLOBALS['tpl']->display('oa/create.tpl');
    }

    public function modifyFunc(){
        parent::modifyFunc();
    }

    function check_name($name){
        $sql = "select uid from " . $this->table . " where username='{$name}'";
        $uid = $GLOBALS['mysql']->getResult($sql);
        if($uid){
            if($uid != $_POST['uid']){
                $this->form->set_message('check_name', '该管理员账号已存在！');
                return false;
            }
        }
        return true;
    }

    public function createBefore(&$infos)
    {
        $infos['password'] = md5($infos['password']);
    }

    public function modifyBefore(&$infos)
    {
        $infos['password'] = md5($infos['password']);
    }

    public function deleteFunc(){
        parent::deleteFunc();
    }
}

new index();