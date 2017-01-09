<?php
function dump($var, $echo = true, $label = null, $strict = true)
{
    $label = ($label === null) ? '' : rtrim($label) . ' ';
    if (!$strict) {
        if (ini_get('html_errors')) {
            $output = print_r($var, true);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        } else {
            $output = $label . print_r($var, true);
        }
    } else {
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        if (!extension_loaded('xdebug')) {
            $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        }
    }
    if ($echo) {
        echo($output);
        return null;
    } else
        return $output;
}

function debugShow($data)
{
    if (!empty($_GET['debug'])) {
        var_dump($data);
    }
}

function debugShowExit($data)
{
    if (!empty($_GET['debug'])) {
        var_dump($data);
    }
    exit();
}

function wh_size($_width, $_height, $zwidth, $zheight)
{
    $size = array();
    if ($zwidth <= $_width && $zheight <= $_height) {
        $size['width'] = $zwidth;
        $size['height'] = $zheight;
    } else {
        $r = $zwidth / $_width;
        $t = $zheight / $_height;
        if (intval($t * 100) > intval($r * 100)) {
            $size['height'] = $_height;
            $size['width'] = $zwidth / $t;
        } else {
            $size['width'] = $_width;
            $size['height'] = $zheight / $r;
        }
    }
    return $size;
}

function createSignGame($secretkey, $paramArr)
{
    $sign = $secretkey;
    ksort($paramArr);
    foreach ($paramArr as $key => $val) {
        if ($key != '' && $val != '') {
            $sign .= $key . $val;
        }
    }
    $sign = strtoupper(md5($sign));
    return $sign;
}

function createSign($paramArr)
{
    $sign = WEBKEY;
    ksort($paramArr);
//    var_dump($paramArr);
    foreach ($paramArr as $key => $val) {
        if ($key != '' && $val != '') {
            $sign .= $key . $val;
        }
    }
    $sign = strtoupper(md5($sign));
    return $sign;
}

function hashed($string)
{
    return hash('md5', $string);
}

function mkdirs($dir)
{
    if (!is_dir($dir)) {
        if (!mkdirs(dirname($dir))) {
            return false;
        }
        if (!mkdir($dir, 0777)) {
            return false;
        }
    }
    return true;
}

function show_message_static($mes, $url = '', $code = 1, $func = '', $timeHide = false)
{
    echo json_encode(array('mes' => $mes, 'code' => $code, 'url' => $url, 'func' => $func, 'timeHide' => $timeHide));
}

function show_message($mes, $url = '', $code = 1, $func = '', $timeHide = false)
{
    echo json_encode(array('mes' => $mes, 'code' => $code, 'url' => $url, 'func' => $func, 'timeHide' => $timeHide));
    exit;
}

function show_message_jsonCallBack($mes, $url = '', $code = 1, $func = '', $timeHide = false)
{
    echo $_GET['callback'] . '(' . json_encode(array('mes' => $mes, 'code' => $code, 'url' => $url, 'func' => $func, 'timeHide' => $timeHide)) . ')';
    exit;
}

function log_message($type, $var, $file = '')
{
    $dir = ROOT . '/log/';
    if (!$file) {
        $dir .= date("Y") . '/' . date("m") . '/' . date('d');
        mkdirs($dir);
        $file = $dir . '/' . date("Ymd") . ".log";
    } else {
        $file = $dir . TEMPLATE . '_' . $file . '.log';
    }

    @ $sh = fopen($file, "a");
    $var = "[$type] " . date('Y-m-d H:i:s') . ' : ' . $var . "\n";
    @ fwrite($sh, $var, strlen($var));
    @  fclose($sh);
}

/**
 * SQL 过滤函数
 */
function saddslashes($string)
{
    if (is_array($string)) {
        foreach ($string as $key => $val) {
            $string[$key] = saddslashes($val);
        }
    } else {
        $string = trim(addslashes($string));
    }
    return $string;
}

function flag_table($uid, $str, $_flag = 1)
{
    $muid = md5($uid);
    if ($_flag == 1) {
        $flag = substr($muid, 31, 1);
    }
    if ($_flag == 2) {
        $flag = substr($muid, 31, 1) . '_' . substr($muid, 30, 1);
    }
    return $str . $flag;
}

// 10个分表以下的取分表名的方法，默认为4个分表
function flag_table_little($uid, $str, $total = 4)
{
    $muid = $uid % $total;
    return $str . $muid;
}

function webheader($url)
{
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: $url");
    exit();
}

/**
 * 写cookie
 */
function ssetcookie($var, $value, $life = 0)
{
    global $_SC;
    $nowtime = time();
    $life = $life ? ($nowtime + $life) : ($nowtime + $_SC['cookietime']);
    setcookie($_SC['cookiepre'][TEMPLATE] . $var, $value, $life, $_SC['cookiepath'], $_SC['cookiedomain'], $_SERVER['SERVER_PORT'] == 443 ? 1 : 0);
}

/**
 * 写cookie
 */
function qssetcookie($pre, $var, $value, $life = 0)
{
    global $_SC;
    $nowtime = time();
    $life = $life ? ($nowtime + $life) : ($nowtime + $_SC['cookietime']);
    setcookie($pre . $var, $value, $life, $_SC['cookiepath'], $_SC['cookiedomain'], $_SERVER['SERVER_PORT'] == 443 ? 1 : 0);
}

/**
 * 字符串解密加密
 */
function authcode($string, $operation = 'DECODE')
{
    $key = WEBKEY;

    if ($operation == 'DECODE') {
        $string = base64_decode($string);
    }
    $string_len = strlen($string);

    for ($j = $i = 0; $i < $string_len; $i++) {
        $key{$j} ? $j : $j = 0;
        $str .= $string{$i} ^ $key{$j};
        $j++;
    }
    if ($operation != 'DECODE') {
        $str = str_replace('=', '', base64_encode($str));
    }
    return $str;
}

// 检查邮箱格式
function is_email($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    if (6 > utf8_strlen($email) || 64 < utf8_strlen($email)) {
        return false;
    }
    return true;
}

function is_url($url)
{
    return 'http://' == substr($url, 0, 7);
}

// 检查手机格式
function is_phone($phone)
{
    if (!preg_match("/^1[34578][0-9]{9}$/", $phone)) {
        return false;
    }
    return true;
}

// 检查身份证格式
function is_idCard($vStr)
{
    $vCity = array('11', '12', '13', '14', '15', '21', '22',
        '23', '31', '32', '33', '34', '35', '36',
        '37', '41', '42', '43', '44', '45', '46',
        '50', '51', '52', '53', '54', '61', '62',
        '63', '64', '65', '71', '81', '82', '91'
    );

    if (!preg_match('/^([\d]{17}[xX\d]|[\d]{15})$/', $vStr)) return false;

    if (!in_array(substr($vStr, 0, 2), $vCity)) return false;

    $vStr = preg_replace('/[xX]$/i', 'a', $vStr);
    $vLength = strlen($vStr);

    if ($vLength == 18) {
        $vBirthday = substr($vStr, 6, 4) . '-' . substr($vStr, 10, 2) . '-' . substr($vStr, 12, 2);
    } else {
        $vBirthday = '19' . substr($vStr, 6, 2) . '-' . substr($vStr, 8, 2) . '-' . substr($vStr, 10, 2);
    }

    if (date('Y-m-d', strtotime($vBirthday)) != $vBirthday) return false;
    if ($vLength == 18) {
        $vSum = 0;

        for ($i = 17; $i >= 0; $i--) {
            $vSubStr = substr($vStr, 17 - $i, 1);
            $vSum += (pow(2, $i) % 11) * (($vSubStr == 'a') ? 10 : intval($vSubStr, 11));
        }

        if ($vSum % 11 != 1) return false;
    }

    return true;
}

/**
 * 过滤关键字
 *
 * @param unknown_type $info
 * @param unknown_type $infoback
 * @return unknown
 */
function isWordMask($info, $infoback = false)
{
    global $_SC;
    $maskfalg = true;
    $maskword = file(ROOT . "/lib/mask_word.txt");
    if ($infoback) {
        foreach ($maskword as $v) {
            if (strpos($info, trim($v)) !== false) {
                $keyw = utf8_strlen(trim($v));
                $str = "";
                for ($i = 0; $i < $keyw; $i++) {
                    $str .= "*";
                }
                $info = str_replace(trim($v), $str, $info);
            }
        }
        return $info;
        exit;
    } else {
        foreach ($maskword as $v) {
            if (strpos($info, trim($v)) !== false) {
                $maskfalg = false;
                break;
            }
        }
        return $maskfalg;
        exit;
    }
}

// utf_8 文字裁字
function utf8_substr($str, $start, $length)
{
    return mb_substr($str, $start, $length, 'UTF-8');
}

// utf_8 文字计数
function utf8_strlen($str)
{
    return mb_strlen($str, 'UTF-8');
}

// 获取在线IP
function getonlineip()
{
    if ($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"]) {
        $ip = $HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"];
    } elseif ($HTTP_SERVER_VARS["HTTP_CLIENT_IP"]) {
        $ip = $HTTP_SERVER_VARS["HTTP_CLIENT_IP"];
    } elseif ($HTTP_SERVER_VARS["REMOTE_ADDR"]) {
        $ip = $HTTP_SERVER_VARS["REMOTE_ADDR"];
    } elseif (getenv("HTTP_X_FORWARDED_FOR")) {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    } elseif (getenv("HTTP_CLIENT_IP")) {
        $ip = getenv("HTTP_CLIENT_IP");
    } elseif (getenv("REMOTE_ADDR")) {
        $ip = getenv("REMOTE_ADDR");
    } else {
        $ip = "Unknown";
    }
    return $ip;
}

//通过在线IP获取省市地理位置
function getIpLookup($ip = '')
{
    if (empty($ip)) {
        $ip = GetIp();
    }
    $res = @file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip);
    if (empty($res)) {
        return false;
    }
    $jsonMatches = array();
    preg_match('#\{.+?\}#', $res, $jsonMatches);
    if (!isset($jsonMatches[0])) {
        return false;
    }
    $json = json_decode($jsonMatches[0], true);
    if (isset($json['ret']) && $json['ret'] == 1) {
        $json['ip'] = $ip;
        unset($json['ret']);
    } else {
        return false;
    }
    return $json;
}

function generateHtmlByCURL($url)
{
    $ch = curl_init();
    $timeout = 1000;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
    $handles = curl_exec($ch);
    curl_close($ch);
    return $handles;
}

function show_error($message, $status_code = 500, $template = 'error_general')
{
    $h = set_status_header($status_code);
    $message = implode(' ', (!is_array($message)) ? array($message) : $message);

    $GLOBALS['tpl']->assign('code', $status_code);
    $GLOBALS['tpl']->assign('heading', $h);
    $GLOBALS['tpl']->assign('message', $message);
    if ($status_code == 404) {
        $GLOBALS['tpl']->display("errors/error_404.tpl");
    } else {
        $GLOBALS['tpl']->display("errors/$template.tpl");
    }

    exit;
}

function assert_show_error($file, $line, $code, $desc = null)
{
    if ($_GET['errorMsg']) {
        var_dump($file, $line, $code, $desc);
    }
    show_error($desc);
}


function set_status_header($code = 200, $text = '')
{
    $stati = array(200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',

        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        307 => 'Temporary Redirect',

        400 => 'Bad Request',
        401 => 'Unauthorized',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Request Entity Too Large',
        414 => 'Request-URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Requested Range Not Satisfiable',
        417 => 'Expectation Failed',

        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported'
    );

    if ($code == '' OR !is_numeric($code)) {
        show_error('Status codes must be numeric', 500);
    }

    if (isset($stati[$code]) AND $text == '') {
        $text = $stati[$code];
    }

    if ($text == '') {
        show_error('No status text available.  Please check your status code number or supply your own message text.', 500);
    }

    $server_protocol = (isset($_SERVER['SERVER_PROTOCOL'])) ? $_SERVER['SERVER_PROTOCOL'] : false;

    if (substr(php_sapi_name(), 0, 3) == 'cgi') {
        return "Status: {$code} {$text}";
    } elseif ($server_protocol == 'HTTP/1.1' OR $server_protocol == 'HTTP/1.0') {
        return $server_protocol . " {$code} {$text}";
    } else {
        return "HTTP/1.1 {$code} {$text}";
    }
}

// 生成四位随字母加数字字符串
function fourRandomCode()
{
    $chars_array = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
    $charsLen = count($chars_array) - 1;
    $outputStr = "";
    for ($i = 0; $i < 4; $i++) {
        $outputStr .= $chars_array[mt_rand(0, $charsLen)];
    }

    return $outputStr;
}

/** 生成指定长度随机数字字符串
 * @param $length
 * @return string
 */
function ranNumCode($length)
{
    $chars_array = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
    $charsLen = count($chars_array) - 1;
    $outputStr = "";
    for ($i = 0; $i < $length; $i++) {
        $outputStr .= $chars_array[mt_rand(0, $charsLen)];
    }
    return $outputStr;
}

/**生成指定长度随机字母字符串
 * @param $length
 * @return string
 */
function ranCharCode($length)
{
    $chars_array = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
    $charsLen = count($chars_array) - 1;
    $outputStr = "";
    for ($i = 0; $i < $length; $i++) {
        $outputStr .= $chars_array[mt_rand(0, $charsLen)];
    }
    return $outputStr;
}

// 删除字符串中所有空格
function trimall($str)
{
    $qian = array(" ", "　", "\t", "\n", "\r");
    $hou = array("", "", "", "", "");
    return str_replace($qian, $hou, $str);
}

// 截取中文字符串
function m_substr($string, $len)
{
    if (mb_strlen($string) > $len) {
        return mb_substr($string, 0, $len, 'utf-8') . "...";
    } else {
        return $string;
    }
}

// 邮件发送模版
function sendEmailModel($username, $title, $code, $url)
{
    global $_SC;
    /*$sql = "select src from kxwadmin.img where flag=19";
    $img = $GLOBALS['mysql']->getResult($sql);*/

    return "<div style='background: #f4f4f3 none repeat scroll 0 0; height: 600px;padding-left: 10px;padding-top: 40px;width: 100%;'>
                <div style='border: 1px solid #aaa;height: 456px;margin-bottom: 33px;width: 600px;'>
                    <div style='background: #fff none repeat scroll 0 0; color: #000; height: 225px; padding: 25px 25px 0;'>
                        <div style='overflow: hidden'>
                            <img src='{$_SC['imgpath']}email-bg.png' style='float:left;margin:26px 0;' />
                            <h2 style='float: left; padding-left:4px'>{$title}</h2>
                        </div>
                        <p style='font-size: 14px;line-height: 1em;margin-bottom: 10px;margin-top: 0;text-align: left;'><span style='color: #f40;'>{$username}</span>，您好！</p>
                        <p style='font-size: 16px;line-height: 1em;margin-top: 0;text-align: left;'>您的{$title}为：</p>
                        <span style='color: #f40;display: block;font-size: 18px;line-height: 56px;'>{$code}</span>
                        <p style='font-size: 14px;line-height: 1em;margin-bottom: 10px;margin-top: 0;text-align: left;'>30分钟内输入有效。</p>
                    </div>
                    <div style='background: #e7e7e7 none repeat scroll 0 0;height: 181px;padding: 25px 0 0 25px;'>
                        <div style='height: 81px;margin-bottom: 32px;width: 290px;'><img src='{$_SC['imgpath']}email-logo.png' /></div>
                        <p style='color: #a9a9a9;font-size: 12px;line-height: 1em;margin-bottom: 14px;margin-top: 0;text-align: left;'>如果您在使用中有任何的疑问和建议，欢迎联系您的 <a href='{$url}' style='color: #f40;text-decoration: none;'>专属客服</a></p>
                        <p style='color: #a9a9a9;font-size: 12px;line-height: 1em;margin-bottom: 14px;margin-top: 0;text-align: left;'>苏州游创空间网络科技有限公司</p>
                    </div>
                </div>
                <p style='color: #a9a9a9;font-size: 12px;line-height: 1.5em;margin-top: 0;text-align: left;'>联系电话：0512-68838882    QQ：545544360</p>
                <p style='color: #a9a9a9;font-size: 12px;line-height: 1.5em;margin-top: 0;text-align: left;'>这是一封自动发送的邮件，请勿回复</p>
        </div>";
}

// 邮件发送模版
function sendEmailModelWeb($username, $title, $code, $url)
{
    global $_SC;
    /* $sql = "select src from kxwadmin.img where flag=19";
     $img = $GLOBALS['mysql']->getResult($sql);*/

    return "<div style='background: #f4f4f3 none repeat scroll 0 0; height: 600px;padding-left: 10px;padding-top: 40px;width: 100%;'>
                <div style='border: 1px solid #aaa;height: 456px;margin-bottom: 33px;width: 600px;'>
                    <div style='background: #fff none repeat scroll 0 0; color: #000; height: 225px; padding: 25px 25px 0;'>
                        <div style='overflow: hidden'>
                            <img src='{$_SC['imgpath']}email-bg.png' style='float:left;margin:26px 0;' />
                            <h2 style='float: left; padding-left:4px'>{$title}</h2>
                        </div>
                        <p style='font-size: 14px;line-height: 1em;margin-bottom: 10px;margin-top: 0;text-align: left;'><span style='color: #f40;'>{$username}</span>，您好！</p>
                        <p style='font-size: 16px;line-height: 1em;margin-top: 0;text-align: left;'>您的{$title}为：</p>
                        <span style='color: #f40;display: block;font-size: 18px;line-height: 56px;'>{$code}</span>
                        <p style='font-size: 14px;line-height: 1em;margin-bottom: 10px;margin-top: 0;text-align: left;'>30分钟内输入有效。</p>
                    </div>
                    <div style='background: #e7e7e7 none repeat scroll 0 0;height: 181px;padding: 25px 0 0 25px;'>
                        <div style='height: 81px;margin-bottom: 32px;width: 290px;'><img src='{$_SC['imgpath']}email-logo.png' /></div>
                        <p style='color: #a9a9a9;font-size: 12px;line-height: 1em;margin-bottom: 14px;margin-top: 0;text-align: left;'>如果您在游戏过程中有任何的疑问和建议，欢迎联系<a href='{$url}' style='color: #f40;text-decoration: none;'>客服</a></p>
                        <p style='color: #a9a9a9;font-size: 12px;line-height: 1em;margin-bottom: 14px;margin-top: 0;text-align: left;'>Copyright @ 2015 - 2015 kxwan.com All Rights Reserved</p>
                    </div>
                </div>
                <p style='color: #a9a9a9;font-size: 12px;line-height: 1.5em;margin-top: 0;text-align: left;'>这是一封自动发送的邮件，请勿回复</p>
        </div>";
}

/*
 * UTF-8网页
 * 反转义JS的escape()方法转义的字符串
 * */
function unescape($str)
{
    $ret = '';
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] == '%' && $str[$i + 1] == 'u') {
            $val = hexdec(substr($str, $i + 2, 4));
            if ($val < 0x7f) $ret .= chr($val);
            else if ($val < 0x800) $ret .= chr(0xc0 | ($val >> 6)) . chr(0x80 | ($val & 0x3f));
            else $ret .= chr(0xe0 | ($val >> 12)) . chr(0x80 | (($val >> 6) & 0x3f)) . chr(0x80 | ($val & 0x3f));
            $i += 5;
        } else if ($str[$i] == '%') {
            $ret .= urldecode(substr($str, $i, 3));
            $i += 2;
        } else $ret .= $str[$i];
    }
    return $ret;
}


function get_zip_originalsize($filename, $path)
{
    //先判断待解压的文件是否存在
    if (!file_exists($filename)) {
        //die("文件 $filename 不存在！");
        return false;
    }
    //打开压缩包
    $resource = zip_open($filename);
    $i = 1;
    $files = array();

    //遍历读取压缩包里面的一个个文件
    while ($dir_resource = zip_read($resource)) {
        //如果能打开则继续
        if (zip_entry_open($resource, $dir_resource)) {
            //获取当前项目的名称,即压缩包里面当前对应的文件名
            $file_name = $path . zip_entry_name($dir_resource);
            $files[] = zip_entry_name($dir_resource);
            //以最后一个“/”分割,再用字符串截取出路径部分
            $file_path = substr($file_name, 0, strrpos($file_name, "/"));
            //如果路径不存在，则创建一个目录，true表示可以创建多级目录
            if (!is_dir($file_path)) {
                mkdirs($file_path);
            }
            //如果不是目录，则写入文件
            if (!is_dir($file_name)) {
                //读取这个文件
                $file_size = zip_entry_filesize($dir_resource);
                //最大读取6M，如果文件过大，跳过解压，继续下一个
                if ($file_size < (1024 * 1024 * 6)) {
                    $file_content = zip_entry_read($dir_resource, $file_size);
                    file_put_contents($file_name, $file_content);
                } else {
                    //echo "<p> ".$i++." 此文件已被跳过，原因：文件过大， -> ".$file_name." </p>";
                    return false;
                }
            }
            //关闭当前
            zip_entry_close($dir_resource);
        }
    }
    //关闭压缩包
    zip_close($resource);
    return $files;
}


function deldir($dir)
{
    //先删除目录下的文件：
    $dh = opendir($dir);
    while ($file = readdir($dh)) {
        if ($file != "." && $file != "..") {
            $fullpath = $dir . "/" . $file;
            if (!is_dir($fullpath)) {
                unlink($fullpath);
            } else {
                deldir($fullpath);
            }
        }
    }
    closedir($dh);
    //删除当前文件夹：
    if (rmdir($dir)) {
        return true;
    } else {
        return false;
    }
}


function array2urlparam($data = array())
{
    if (is_array($data) && count($data)) {
        foreach ($data as $k1 => $v1) {
            $urlparams[] = $k1 . '=' . $v1;
        }
        return $urlparams;
    }
    return array();
}


function attachString($_arr)
{
    //业务范围|运营者id|游戏id|服务器id|链接id|素材id|推广员id|attach|渠道|营销订单
    //work|yuid||gid|server_id|linkid|mid|proid|attach|q|order_id
    //work=>1,2,3 (1=>指定服推广， 2=>cps推广， 3=>其他)
    //yuid=>整形
    $arr = array();
    $arr['work'] = intval($_arr['work']);
    $arr['yuid'] = intval($_arr['yuid']);
    $arr['gid'] = intval($_arr['gid']);
    $arr['server_id'] = intval($_arr['server_id']);
    $arr['linkid'] = intval($_arr['linkid']);
    $arr['mid'] = intval($_arr['mid']);
    $arr['proid'] = intval($_arr['proid']);
    $arr['attach'] = trim($_arr['attach']);
    $arr['q'] = intval($_arr['q']);
    $arr['order_id'] = trim($_arr['order_id']);
    $str = $arr['work'] . "|" . $arr['yuid'] . "|" . $arr['gid'] . '|' . $arr['server_id'] . '|' . $arr['linkid'] . "|" . $arr['mid'] . "|" . $arr['proid'] . "|" . $arr['attach'] . '|' . $arr['q'] . '|' . $arr['order_id'];
    return authcode($str, 1);
}

function attachDeString($str)
{
    //业务范围|运营者id|游戏id|服务器id|链接id|素材id|推广员id|attach|渠道|营销订单
    //work|yuid||gid|server_id|linkid|mid|proid|attach|q|order_id
    //work=>1,2,3 (1=>指定服推广， 2=>cps推广， 3=>其他)
    //yuid=>整形
    $arr = $_arr = array();
    $arr = explode('|', authcode($str));
    $_arr['work'] = intval($arr[0]);
    $_arr['yuid'] = intval($arr[1]);
    $_arr['gid'] = intval($arr[2]);
    $_arr['server_id'] = intval($arr[3]);
    $_arr['linkid'] = intval($arr[4]);
    $_arr['mid'] = intval($arr[5]);
    $_arr['proid'] = intval($arr[6]);
    $_arr['attach'] = trim($arr[7]);
    $_arr['q'] = intval($arr[8]);
    $_arr['order_id'] = trim($arr[9]);
    return $_arr;

}

function send_system_notice($uid, $type, $options = array())
{
    $time = date("Y-m-d H:i:s");
    $status = '2';
    if (is_array($options)) {
        //$time=$options['time'];
        //$status=$options['status'];
        $title = $GLOBALS['system_notice'][$type][0];
        $content = $GLOBALS['system_notice'][$type][1];
        foreach ($options as $k1 => $v1) {
            $index = $k1 + 1;
            $content = str_replace("{{{$index}}}", $v1, $content);
        }
    }
    $sql = "insert into kaixinwan.notice (uid,title,content,time,status) values ('{$uid}','{$title}','{$content}','{$time}','{$status}')";
    $GLOBALS['mysql'] = Mysql::getInstance();
    return $GLOBALS['mysql']->insert($sql);
}

function isID($value)
{
    return is_numeric($value) && (intval($value) > 0);
}

/** 概率计算函数
 * @param $proArr
 * @return int|string
 */
function get_rand($proArr)
{
    $result = '';
    //概率数组的总概率精度
    $proSum = array_sum($proArr);
    //概率数组循环
    foreach ($proArr as $key => $proCur) {
        $randNum = mt_rand(1, $proSum);
        if ($randNum <= $proCur) {
            $result = $key;
            break;
        } else {
            $proSum -= $proCur;
        }
    }
    unset ($proArr);
    return $result;
}

/** 创建GUID字符串
 * @return string
 */
function create_guid()
{
    $charid = strtoupper(md5(uniqid(mt_rand(), true)));
    $hyphen = chr(45);// "-"
    $uuid = substr($charid, 0, 8) . $hyphen
        . substr($charid, 8, 4) . $hyphen
        . substr($charid, 12, 4) . $hyphen
        . substr($charid, 16, 4) . $hyphen
        . substr($charid, 20, 12);
    return $uuid;
}

/*
功能：补位函数
str:原字符串
type：类型，0为后补，1为前补
len：新字符串长度
msg：填补字符
*/
function dispRepair($str, $len, $msg, $type = '1')
{
    $length = $len - strlen($str);
    if ($length < 1) return $str;
    if ($type == 1) {
        $str = str_repeat($msg, $length) . $str;
    } else {
        $str .= str_repeat($msg, $length);
    }
    return $str;
}

/** 判断两个数组是否完全相等
 * @param $arr1
 * @param $arr2
 * @return bool
 */
function isSameArray($arr1, $arr2)
{
    if (count($arr1) != count($arr2)) {
        return false;
    }

    foreach ($arr1 as $k => $v) {

        if (is_array($v) && is_array($arr2[$k])) {
            if (!isSameArray($v, $arr2[$k])) {
                return false;
            }
        }

        if (!isset($arr2[$k])) {
            return false;
        }

        if ($arr2[$k] != $v) {
            return false;
        }
    }

    return true;
}

/** 计算两个日期相差天数（根据需要，修改日期前后顺序）
 * @param $day1 date()型
 * @param $day2 date()型
 * @return int
 */
function diffBetweenTwoDays($day1, $day2)
{
    $second1 = strtotime($day1);
    $second2 = strtotime($day2);
    if ($second1 < $second2) {
        $tmp = $second2;
        $second2 = $second1;
        $second1 = $tmp;
    }
    return intval(($second1 - $second2) / 86400);
}

?>