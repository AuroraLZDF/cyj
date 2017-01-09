<?php
if (!defined('IN_BOOT')) {
    exit('Access Denied');
}

$_SC['life'] = array(
    'db' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => 'root',
        'dbname' => 'cyj',
    ),
    'sdb' => array(
        array(
            'host' => '127.0.0.1',
            'username' => 'root',
            'password' => 'root',
            'dbname' => 'cyj',
        )
    )
);
$_SC['oa'] = array(
    'db' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => 'root',
        'dbname' => 'cyj',
    ),
    'sdb' => array(
        array(
            'host' => '127.0.0.1',
            'username' => 'root',
            'password' => 'root',
            'dbname' => 'cyj',
        )
    )
);

/*ftp*/
$_SC['ftp_host'] = '192.168.1.249';    //ftp地址
$_SC['ftp_user'] = 'root';            //ftp帐号
$_SC['ftp_pass'] = 'haiyunyx';    //ftp密码
$_SC['ftp_port'] = '21';                //ftp端口

/*redis*/
/*$_SC['redis_cachehost'] = '192.168.1.249';
$_SC['redis_cacheport'] = 6379;
$_SC['redis_passport'] = '8a21544ffb';*/


$_SC['default'] = 'http://web.cyj.com';
$_SC['oaUrl'] = 'http://oa.cyj.com';
$_SC['imgpath'] = 'http://img.kaixinwan.com/';
//The end of file config.local.php