<?php
if (!defined('IN_BOOT')) {
    exit('Access Denied');
}

class index
{
    public function __construct() {
        global $segments;

        $ac = $segments['ac'];

        $this -> lastpage = $_SERVER["HTTP_REFERER"];

        /*$this -> form = new Form($this);
        $this -> Img = Ad_Img :: getInstance();
        $this -> Notice = Ad_Notice :: getInstance();
        $GLOBALS['redis'] = PhpRedis :: getInstance();*/


        $ac = in_array($ac, array('index')) ? $ac : 'error';

        call_user_func(array($this, $ac . 'Func'), $ac);
    }

    public function errorFunc() {
        show_error('THE URL NOT FOUND', 404);
    }

    public function indexFunc()
    {
        $sql = 'select * from cyj.img';
        $GLOBALS['mysql'] = Mysql::getInstance();
        $images = $GLOBALS['mysql']->getAll($sql);
        foreach($images as $key => $item){
            $images[$key]['images'] = json_decode($item['images']);
        }

        $GLOBALS['tpl']->assign('images', $images);
        $GLOBALS['tpl']->display('index/index.tpl');
    }
}

new index();
//The end of file /life/mod/index/index.php
