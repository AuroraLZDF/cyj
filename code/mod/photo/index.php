
<?php
if (!defined('IN_BOOT')) {
    exit('Access Denied');
}

class index extends AdModel{
    public function __construct()
    {
        global $segments;
        $ac = $segments['ac'];
        $this -> lastpage = $_SERVER["HTTP_REFERER"];

        checkCk();

        $this -> title = '图片';
        $this -> table = "img";
        $this -> fields = array(
            'id|ID' => array('rule' => 'required|trim', 'disable' => true),
            'title|标题' => array('rule' => 'required|trim', 'type' => 'text', 'required' => true),
            //'width|宽度' => array('rule' => 'required', 'type' => 'text', 'disable' => true),
            //'height|高度' => array('rule' => 'required', 'type' => 'text', 'disable' => true),
            'status|状态' => array('rule' => 'required|trim', 'type' => 'select', 'required' => true, 'data' => Oa_Img::$img_status),
            'flag|标识' => array('rule' => 'required|trim', 'type' => 'select', 'required' => true, 'data' => Oa_Img::$product_photo),
            'images|图片' => array('rule' => 'required', 'type' => 'method', 'required' => true, 'tagClass' => 'upload'),
            'create_time|创建时间' => array('rule' => 'required|trim', 'type' => 'text', 'disable' => true),
        );
        $this -> id = array('name' => 'id');
        $this -> order = 'order by id desc';

        $this -> manage = true;
        $this -> create = true;
        $this -> modify = true;
        $this -> delete = true;

        $this -> createUrl = "/photo/index";
        $this -> modifyUrl = "/photo/index";
        $this -> deleteUrl = "/photo/index";
        //$this -> _field = ' id ';
        $this -> where = ' flag=1';

        $this->page = Page::getInstance();

        parent :: __construct();

        $ac = ac_explode($ac);
        $ac = in_array($ac, array('index', 'create', 'modify', 'delete')) ? $ac : 'error';
        call_user_func(array($this, $ac . 'Func'), $ac);
    }

    public function errorFunc(){
        show_error('THE URL NOT FOUND', 404);
    }

    public function createFunc(){
        $param = [];
        param_post([$this->id['name'] => 'INT', 'hashkey' => 'STRING'], '', $param, [$this->id['name'] => 0, 'hashkey' => '']);
        if($param['hashkey']){
            parent::createFunc();
        }

        $GLOBALS['tpl']->assign('sid', authcode(session_id(), 1));
        $GLOBALS['tpl']->display('oa/create.tpl');
    }

    public function modifyFunc(){
        if (!$this->manage || !$this->modify) {
            show_error('访问错误', 404);
        }
        $params = array();
        param_request(array($this->id['name'] => 'INT'), '', $params, array($this->id['name'] => ""));
        if (!$params[$this->id['name']]) {
            show_error('数据不存在', 500);
        }
        $n = $this->id['name'];
        $sql = "select * from $this->table where $n='{$params[$this->id['name']]}'";
        $data = $GLOBALS['mysql']->getOne($sql);
        if (!$data) {
            show_error('数据不存在', 500);
        }

        $images = $data['images'] = json_decode($data['images']);

        $GLOBALS['tpl']->assign("data", $data);
        $GLOBALS['tpl']->assign("images", $images);
        $GLOBALS['tpl']->assign('sid', authcode(session_id(), 1));
        $GLOBALS['tpl']->display('oa/create.tpl');
    }

    public function createBefore(&$info){
        $info['images'] = json_encode($info['images']);
    }

    public function modifyBefore(&$info){
        $info['images'] = json_encode($info['images']);
    }

    public function field_images($v, &$param = array()){
        $GLOBALS['tpl']->assign('data', json_decode($v, 1));
        $GLOBALS['tpl']->assign('id', $param['id']);
        $GLOBALS['tpl']->display('oa/filter/together_show.tpl');
    }
}

new index();