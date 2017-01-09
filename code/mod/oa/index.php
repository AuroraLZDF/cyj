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
        $this -> lastpage = $_SERVER["HTTP_REFERER"];

        checkCk();

        $ac = ac_explode($ac);
        $ac = in_array($ac, array('index')) ? $ac : 'error';
        call_user_func(array($this, $ac . 'Func'), $ac);
    }

    public function errorFunc(){
        show_error('THE URL NOT FOUND', 404);
    }

    public function indexFunc()
    {
        $GLOBALS['tpl']->display('oa/index/index.tpl');
    }
}

new index();
//The end