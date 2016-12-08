<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-08 13:54:16
         compiled from "F:\www\mycyj\code\life\tpl\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27617583d1a2c4ec553-48835775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efd6cdef5bf2209f88f5c96dab37b97976f3bea6' => 
    array (
      0 => 'F:\\www\\mycyj\\code\\life\\tpl\\index\\index.tpl',
      1 => 1481176454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27617583d1a2c4ec553-48835775',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_583d1a2c513659_73056155',
  'variables' => 
  array (
    'images' => 0,
    'item' => 0,
    'oaUrl' => 0,
    '_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583d1a2c513659_73056155')) {function content_583d1a2c513659_73056155($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="fh5co-offcanvass">
    <?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<header id="fh5co-header" role="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#" class="fh5co-menu-btn js-fh5co-menu-btn">Menu <i class="icon-menu"></i></a>
                <a class="navbar-brand" href="index.html">Hydrogen</a>
            </div>
        </div>
    </div>
</header>
<!-- END .header -->

<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >手机网站模板</a></div>


<div id="fh5co-main">
    <div class="container">

        <div class="row">

            <div id="fh5co-board" data-columns>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <?php  $_smarty_tpl->tpl_vars['_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_item']->_loop = false;
 $_smarty_tpl->tpl_vars['_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_item']->key => $_smarty_tpl->tpl_vars['_item']->value) {
$_smarty_tpl->tpl_vars['_item']->_loop = true;
 $_smarty_tpl->tpl_vars['_key']->value = $_smarty_tpl->tpl_vars['_item']->key;
?>
                    <div class="item">
                        <div class="animate-box">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['oaUrl']->value;
echo $_smarty_tpl->tpl_vars['_item']->value;?>
" class="image-popup fh5co-board-img" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oaUrl']->value;
echo $_smarty_tpl->tpl_vars['_item']->value;?>
" alt="Free HTML5 Bootstrap template"></a>
                        </div>
                        <div class="fh5co-desc"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
                    </div>
                <?php } ?>
            <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
