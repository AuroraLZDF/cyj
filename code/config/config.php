<?php
if (!defined('IN_BOOT')) {
    exit('Access Denied');
}

$_SC = array();
$v = 'online';
include(ROOT . '/config/config.' . $v . '.php');

$_SC['imgpath_replace'] = '{{img}}';
$_SC['dbcharset'] = 'utf8'; //字符集
$_SC['pconnect'] = 0; //是否持续连接

/**
 * cookie
 */// COOKIE前缀
$_SC['cookiepre'] = array(
    'cyj' => 'cyj_'
);

$_SC['cookiedomain'] = '.gzcyj.top'; //COOKIE作用域
$_SC['cookiepath'] = '/'; //COOKIE作用路径
$_SC['cookietime'] = 86400; //COOKIE时间

// 是否开启缓存
$_SC['cache'] = false;
$_SC['hiddenUrl'] = 'index.php?';
//The end of file config.php