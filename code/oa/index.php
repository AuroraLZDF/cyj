<?php
defined('TEMPLATE') or define('TEMPLATE', 'oa');

include_once dirname(dirname(__FILE__)).'/start.php';
include_once 'lib/func.php';

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
$GLOBALS["user"]["password"] = $pwd;
$GLOBALS['tpl']->assign("auser", $GLOBALS["user"]);

$query_string = remove_invisible_characters($_SERVER['QUERY_STRING']);

$segments = _explode_segments($query_string);

$file_path = "mod/" . $segments['mod'] . "/" . $segments['act'] . ".php";

$lastPage = $_SERVER["HTTP_REFERER"];

$hashKey = hashed('gaozhen&cyj:20161006');

include 'lib/titleTag.php';

$GLOBALS['tpl']->assign("hashKey", $hashKey);
$GLOBALS['tpl']->assign('lastPage', $lastPage);
$GLOBALS['tpl']->assign('segments', $segments);


if(file_exists($file_path)) {
    include_once($file_path);
} else {
    show_error('THE URL NOT FOUND', 404);
}
//The end of file index.php