<?php
if (!defined('IN_BOOT')) {
    exit('Access Denied');
}

$_SC['life'] = array(
    'db' => array(
        'host' => '192.168.1.249',
        'username' => 'root',
        'password' => '',
        'dbname' => 'cyj',
    ),
    'sdb' => array(
        array(
            'host' => '192.168.1.249',
            'username' => 'root',
            'password' => '',
            'dbname' => 'cyj',
        )
    )
);
$_SC['oa'] = array(
    'db' => array(
        'host' => '192.168.1.249',
        'username' => 'root',
        'password' => '',
        'dbname' => 'cyj',
    ),
    'sdb' => array(
        array(
            'host' => '192.168.1.249',
            'username' => 'root',
            'password' => '',
            'dbname' => 'cyj',
        )
    )
);

/*ftp*/
/*$_SC['ftp_host'] = '192.168.1.249';    //ftp地址
$_SC['ftp_user'] = 'root';            //ftp帐号
$_SC['ftp_pass'] = 'cyj';    //ftp密码
$_SC['ftp_port'] = '21';    //ftp端口*/

/*redis*/
/*$_SC['redis_cachehost'] = '192.168.1.249';
$_SC['redis_cacheport'] = 6379;
$_SC['redis_passport'] = '8a21544ffb';*/


$_SC['default'] = 'http://local.cyj.com';
$_SC['imgpath'] = 'http://img.cyj.com';
//The end of file config.online.php