<?php
if(!defined('IN_BOOT')) {
	exit('Access Denied');
}
function checkCk()
{
    if (intval($GLOBALS["user"]["uid"]) <= 0) {
        webheader("/login/index/quit");
        exit;
    }
    if (strlen($GLOBALS["user"]["username"]) <= 0) {
        webheader("/login/index/quit");
        exit;
    }

    if ($GLOBALS["user"]["username"] != $GLOBALS["uinfo"]['username']) {
        webheader("/login/index/quit");
        exit;
    }
    if ($GLOBALS["user"]["pwd"] != $GLOBALS["uinfo"]['pwd']) {
        webheader("/login/index/quit");
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




?>