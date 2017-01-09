<?php
if (!defined('IN_BOOT')) {
    exit('Access Denied');
}

class Oa_Img
{
    static $extension = "jpg,gif,png,bmp";
    static $mime = array("image/jpeg", "image/gif", "image/png", "image/bmp", "image/pjpeg", "image/x-png");
    static $zipMime = array("application/zip");
    static $flashMime = array("application/x-shockwave-flash", "flv-application/octet-stream");
    static $videoMime = array("mp4","rm","rmvb","wmv","avi","mp4","3gp","mkv","flv","f4v");

    const IMG_OPEN = 1;
    const IMG_CLOSE = 2;

    static $img_status = [
        self::IMG_OPEN => '正常',
        self::IMG_CLOSE => '关闭',
    ];

    //const PRODUCT_INDEX = 1;
    const PICTURE_MARARY = 1;


    static $product_photo = array(
        //self::PRODUCT_INDEX => '首页主图',
        self::PICTURE_MARARY => '我的幸福时刻',
    );

    static $type_size = array(
        //self::PRODUCT_INDEX => '710_354',
    );

    /**
     * 单例模式
     *
     * @var object
     */
    static private $instance = NULL;

    static function getInstance()
    {
        if (self::$instance == NULL) {
            self::$instance = new self();
        }
        return self::$instance;
    }



}
//The end of file :/code/class/Ad/Img.php