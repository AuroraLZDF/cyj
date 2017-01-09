<?php
if(!defined('IN_BOOT')) {
	exit('Access Denied');
}

function checkCk()
{
    if (intval($GLOBALS["user"]["uid"]) <= 0) {
        webheader("/user/index/logout");
        exit;
    }
    if (strlen($GLOBALS["user"]["username"]) <= 0) {
        webheader("/user/index/logout");
        exit;
    }

    $GLOBALS['mysql'] = Mysql::getInstance();
    $sql = 'SELECT * FROM user WHERE uid=' . $GLOBALS["user"]["uid"] . ' and status=' . Oa_User::ADMIN_TYPE;
    $GLOBALS["uinfo"] = $GLOBALS['mysql']->getOne($sql);

    if ($GLOBALS["user"]["username"] != $GLOBALS["uinfo"]['username']) {
        webheader("/user/index/logout");
        exit;
    }
    if ($GLOBALS["user"]["password"] != $GLOBALS["uinfo"]['password']) {
        webheader("/user/index/logout");
        exit;
    }
}

function _unix_get_process_id ( $script, $bin )
{
	exec ( "ps -ef | grep '$script'", $output );

	$procIds = array ();
	while ( list ( $opKey, $opItem ) = @each ( $output ) )
	{
		if ( strstr ( $opItem, "$bin $script" ) )
		{
			preg_match ( "/^[^ ]+[ ]+([0-9]+).*$/", $opItem, $pregMatch );
			array_push ( $procIds, $pregMatch[1] );
		}
	}
	return $procIds;
}
//The end of file :/lib/func.php