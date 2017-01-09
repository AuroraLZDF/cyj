<?php
if (!isset($_POST["PHPSESSID"])) {
    session_start();
}

@define('IN_BOOT', TRUE);
@define('ROOT', __DIR__);
@define('LOGTIME', 300);//日志产生时间间隔

//error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL & ~E_NOTICE);

date_default_timezone_set("PRC");

$GLOBALS =array();

include ROOT.'/config/config.lang.php';
include ROOT.'/config/config.php';
include ROOT.'/lib/function/core.php';
include ROOT.'/lib/function/common.php';
include ROOT.'/lib/function/array.php';
include ROOT.'/lib/function/date.php';
include ROOT.'/lib/function/http.php';
include ROOT.'/lib/function/parameter.php';
include ROOT.'/lib/function/string.php';
include ROOT.'/lib/smarty/Smarty.class.php';

$magic_quote = get_magic_quotes_gpc();

if(empty($magic_quote)){
    $_GET = saddslashes($_GET);
    $_POST = saddslashes($_POST);
}

$hashKey = hashed('gaozhen&cyj:20161006');

/*自动加载类*/
spl_autoload_register('class_autoload');
//The end of file init.php