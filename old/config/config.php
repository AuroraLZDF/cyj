<?php
if (!defined('IN_BOOT')) {
    exit('Access Denied');
}

$_SC = array();
$v = 'local';
include(ROOT . '/config/config.' . $v . '.php');

$_SC['imgpath_replace'] = '{{img}}';
$_SC['dbcharset'] = 'utf8'; //字符集
$_SC['pconnect'] = 0; //是否持续连接

/**
 * cookie
 */// COOKIE前缀
$_SC['cookiepre'] = array(
    'life' => 'life_',
    'oa' => 'oa_'
);

$_SC['cookiedomain'] = '.cyj.com'; //COOKIE作用域
$_SC['cookiepath'] = '/'; //COOKIE作用路径
$_SC['cookietime'] = 86400; //COOKIE时间

// 是否开启缓存
$_SC['cache'] = false;
//The end of file config.php