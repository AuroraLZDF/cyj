<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-26 09:58:56
         compiled from "F:\www\angular\code\tpl\oa\left_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16058586075937252d3-40620349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8da60a1f21982dafbee9f25f0df71bbc7eefa652' => 
    array (
      0 => 'F:\\www\\angular\\code\\tpl\\oa\\left_menu.tpl',
      1 => 1482717536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16058586075937252d3-40620349',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58607593803d87_48346682',
  'variables' => 
  array (
    'hiddenUrl' => 0,
    'auser' => 0,
    'imgpath' => 0,
    'Menu' => 0,
    'prePath' => 0,
    'item' => 0,
    'subMenus' => 0,
    '_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58607593803d87_48346682')) {function content_58607593803d87_48346682($_smarty_tpl) {?><div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="<?php echo $_smarty_tpl->tpl_vars['hiddenUrl']->value;?>
/index/index/index" class="site_title"><i class="fa fa-paw"></i> <span>Love My CYJ!</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile">
        <div class="profile_pic">
            <img src="<?php if ($_smarty_tpl->tpl_vars['auser']->value['avatar']) {
echo $_smarty_tpl->tpl_vars['imgpath']->value;
echo $_smarty_tpl->tpl_vars['auser']->value['avatar'];
} else { ?>/images/user.png<?php }?>" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <h2><?php if ($_smarty_tpl->tpl_vars['auser']->value['username']) {
echo $_smarty_tpl->tpl_vars['auser']->value['username'];
} else { ?>Guest<?php }?></h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->

    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>导航菜单</h3>
            <ul class="nav side-menu">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <li <?php if (in_array($_smarty_tpl->tpl_vars['prePath']->value,$_smarty_tpl->tpl_vars['item']->value['children'])) {?>class="active"<?php }?>><a><i class="fa <?php if ($_smarty_tpl->tpl_vars['item']->value['class']) {
echo $_smarty_tpl->tpl_vars['item']->value['class'];
} else { ?>fa-home<?php }?>"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <?php  $_smarty_tpl->tpl_vars['_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['subMenus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_item']->key => $_smarty_tpl->tpl_vars['_item']->value) {
$_smarty_tpl->tpl_vars['_item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['_item']->key;
?>
                                <?php if ($_smarty_tpl->tpl_vars['_item']->value['parent']==$_smarty_tpl->tpl_vars['item']->value['id']) {?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['prePath']->value==$_smarty_tpl->tpl_vars['_item']->value['preurl']) {?>class="current-page"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_item']->value['name'];?>
</a></li>
                                <?php }?>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>
<?php echo '<script'; ?>
>
    $(function(){
        if($('li.active')[0]){
            $('li.active').children('ul.child_menu').show();
        }
    });
<?php echo '</script'; ?>
><?php }} ?>
