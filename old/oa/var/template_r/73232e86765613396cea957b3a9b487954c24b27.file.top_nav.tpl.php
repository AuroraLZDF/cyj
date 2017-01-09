<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-01 10:54:22
         compiled from "F:\www\mycyj\code\oa\tpl\top_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21783583e3f201d2615-07960091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73232e86765613396cea957b3a9b487954c24b27' => 
    array (
      0 => 'F:\\www\\mycyj\\code\\oa\\tpl\\top_nav.tpl',
      1 => 1480560824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21783583e3f201d2615-07960091',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_583e3f201d6498_29672689',
  'variables' => 
  array (
    'auser' => 0,
    'imgpath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583e3f201d6498_29672689')) {function content_583e3f201d6498_29672689($_smarty_tpl) {?><div class="nav_menu">
    <nav>
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php if ($_smarty_tpl->tpl_vars['auser']->value['avatar']) {
echo $_smarty_tpl->tpl_vars['imgpath']->value;
echo $_smarty_tpl->tpl_vars['auser']->value['avatar'];
} else { ?>/images/user.png<?php }?>" alt=""><?php if ($_smarty_tpl->tpl_vars['auser']->value['username']) {
echo $_smarty_tpl->tpl_vars['auser']->value['username'];
} else { ?>Guest<?php }?>
                    <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> 个人中心</a></li>
                    <li>
                        <a href="javascript:;">
                            <span class="badge bg-red pull-right"><?php if ($_smarty_tpl->tpl_vars['auser']->value['progress']) {
echo $_smarty_tpl->tpl_vars['auser']->value['progress'];
} else { ?>0<?php }?>%</span>
                            <span>设置</span>
                        </a>
                    </li>
                    <li><a href="javascript:;"> 帮助</a></li>
                    <li><a href="/user/index/logout"><i class="fa fa-sign-out pull-right"></i> 退出</a></li>
                </ul>
            </li>

            <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                        <a>
                            <span class="image"><img src="/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span class="image"><img src="/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span class="image"><img src="/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span class="image"><img src="/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                        </a>
                    </li>
                    <li>
                        <div class="text-center">
                            <a>
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div><?php }} ?>
