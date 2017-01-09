<?php
defined('TEMPLATE') or define('TEMPLATE', 'cyj');

include_once __DIR__.'/init.php';
include_once __DIR__ . '/lib/func.php';

$GLOBALS['tpl'] = tpl_init();
$GLOBALS['tpl']->assign("imgpath",  $_SC['imgpath']);
$GLOBALS['mysql'] = Mysql::getInstance();

$prelength = strlen($_SC['cookiepre'][TEMPLATE]);

foreach($_COOKIE as $key => $val) {
    if(substr($key, 0, $prelength) == $_SC['cookiepre'][TEMPLATE]){
        $_SCOOKIE[(substr($key, $prelength))] = empty($magic_quote) ? saddslashes($val) : $val;
    }
}

list($uid, $username, $pwd) = explode("/t", authcode($_SCOOKIE["uinfo"]));

$GLOBALS["user"]["uid"] = $uid;
$GLOBALS["user"]["username"] = $username;
$GLOBALS["user"]["pwd"] = $pwd;
$GLOBALS['tpl']->assign("auid",      $GLOBALS["user"]["uid"]);
$GLOBALS['tpl']->assign("ausername", $GLOBALS["user"]["username"]);

$query_string = remove_invisible_characters($_SERVER['QUERY_STRING']);

$segments = _explode_segments($query_string);

$file_path = "mod/" . $segments['mod'] . "/" . $segments['act'] . ".php";

$lastPage = $_SERVER["HTTP_REFERER"];

include 'lib/titleTag.php';

$GLOBALS['tpl']->assign("hashKey", $hashKey);
$GLOBALS['tpl']->assign('lastPage', $lastPage);
$GLOBALS['tpl']->assign('segments', $segments);
$GLOBALS['tpl']->assign('hiddenUrl', $_SC['hiddenUrl']);


if(file_exists($file_path)) {
    include_once($file_path);
} else {
    show_error('THE URL NOT FOUND', 404);
}
//The end of file index.php