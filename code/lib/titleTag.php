<?php

//一级菜单
$Menu = $subMenus = [];

$Menu = [
    [
        'id' => 1,
        'name' => 'Home',
        'mod' => array('index', 'user'),
        'url' => '',
        'parent' => 0,
        'preurl' => 'indexindex',
        'type' => [],
        'mark' => '',
        'group' => [],
        'subgroup' => array(2, 3),
        'children' => ['oaindex', 'usermanager'],
        'class' => 'fa-home'
    ],
    [
        'id' => 2,
        'name' => 'Picture',
        'mod' => array('index', 'images'),
        'url' => '',
        'parent' => 0,
        'preurl' => '',
        'type' => [],
        'mark' => '',
        'group' => [],
        'subgroup' => array(4, 5),
        'children' => ['photoindex', 'photomanager'],
        'class' => 'fa-image'
    ],
];

//二级菜单
$subMenus = [
    ['id' => 2, 'name' => '首页', 'url' => '/oa/index/index', 'parent' => 1, 'preurl' => 'oaindex'],
    ['id' => 3, 'name' => '管理员', 'url' => '/user/manager/index', 'parent' => 1, 'preurl' => 'usermanager'],
    ['id' => 4, 'name' => '图片管理', 'url' => '/photo/index/index', 'parent' => 2, 'preurl' => 'photoindex'],
];

foreach($subMenus as $key => $item){
    $subMenus[$key]['url'] = $_SC['hiddenUrl'] . $item['url'];
}

$prePath = $segments['mod'] . $segments['act'];

$GLOBALS['tpl']->assign('Menu', $Menu);
$GLOBALS['tpl']->assign('subMenus', $subMenus);
$GLOBALS['tpl']->assign('prePath', $prePath);
//The end of file :/lib/titleTag.php
