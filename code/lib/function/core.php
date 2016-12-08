<?php
//框架核心方法

/**
 * 实例化Smarty模版
 * @return Smarty
 */
function tpl_init()
{
    $tpl = new Smarty();

    $tpl->template_dir = ROOT . '/' . TEMPLATE . '/tpl';
    $tpl->compile_dir = ROOT . '/' . TEMPLATE . '/var/template_r';
    $tpl->left_delimiter = '{';
    $tpl->right_delimiter = '}';
    return $tpl;
}

/**
 * 自动加载‘class’文件夹下面的php文件
 * @param $class
 */
function class_autoload($class)
{
    $dir = ROOT . '/class/';
    //$dir = getcwd() . '/class/';

    if (strpos($class, '_') === false) {
        $filename = $dir . $class . '.php';
        if (file_exists($filename)) {
            include $filename;
        }
    } else {
        $infos = explode('_', $class);
        $filename = $dir . implode('/', $infos) . ".php";
        if (file_exists($filename)) {
            include $filename;
        }
    }
}

/**
 * 匹配pathinfo对应的文件路径
 * @param $str
 * @return array
 */
function _explode_segments($str)
{
    $default_name = array('mod' => 'index', 'act' => 'index', 'ac' => 'index');
    $sfile = '';
    $info = explode("&", $str);     //这里的‘&’是在nginx配置文件中追加的(rewrite ^/(.*) /index.php?$1&),最后一个符号
    if ($info[0]) {
        $sfile = $info[0];
        //if ($info[0] == 'index.php') {
        //  $segments[0] = $default_name['mod'];
        // } else {
        foreach (explode('/', $info[0]) as $val) {
            if (strpos($val, '-') !== false) {
                //通过 key - value方式传送参数
                list($p, $v) = explode('-', $val);
                $_GET[$p] = $v;
                continue;
            }
            // Filter segments for security
            $val = trim(_filter_uri($val));
            if ($val != '') {
                $segments[] = $val;
            }
            // unset($_GET[$val]);
            // }
        }
    }

    $default_name['mod'] = $segments[0] ? $segments[0] : $default_name['mod'];
    $default_name['sfile'] = $sfile;
    $default_name['act'] = $segments[1] ? $segments[1] : $default_name['act'];
    $default_name['ac'] = $segments[2] ? $segments[2] : $default_name['ac'];
    $default_name['path'] = '/' . $default_name['mod'] . '/' . $default_name['act'] . '/' . $default_name['ac'];

    return $default_name;
}

/**
 * 过滤一些特殊的字符
 * @param $str
 * @return mixed
 */
function _filter_uri($str)
{
    // Convert programatic characters to entities
    $bad = array('$', '(', ')', '%28', '%29');
    $good = array('&#36;', '&#40;', '&#41;', '&#40;', '&#41;');

    return str_replace($bad, $good, $str);
}

/**
 * 过滤一些特殊字符
 * @param $str
 * @param bool $url_encoded
 * @return mixed
 */
function remove_invisible_characters($str, $url_encoded = true)
{
    $non_displayables = array();
    // every control character except newline (dec 10)
    // carriage return (dec 13), and horizontal tab (dec 09)
    if ($url_encoded) {
        $non_displayables[] = '/%0[0-8bcef]/'; // url encoded 00-08, 11, 12, 14, 15
        $non_displayables[] = '/%1[0-9a-f]/'; // url encoded 16-31
    }

    $non_displayables[] = '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/S'; // 00-08, 11, 12, 14-31, 127

    do {
        $str = preg_replace($non_displayables, '', $str, -1, $count);
    } while ($count);

    return $str;
}