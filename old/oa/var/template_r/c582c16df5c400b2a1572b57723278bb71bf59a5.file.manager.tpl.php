<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-01 16:20:32
         compiled from "F:\www\mycyj\code\oa\tpl\index\manager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25070583f94f978e857-42895490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c582c16df5c400b2a1572b57723278bb71bf59a5' => 
    array (
      0 => 'F:\\www\\mycyj\\code\\oa\\tpl\\index\\manager.tpl',
      1 => 1480580431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25070583f94f978e857-42895490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_583f94f97c91e4_82464868',
  'variables' => 
  array (
    'title' => 0,
    'fields' => 0,
    'key' => 0,
    'show' => 0,
    'field' => 0,
    'manage' => 0,
    'datas' => 0,
    'data' => 0,
    'type' => 0,
    'obj' => 0,
    'd' => 0,
    'imgpath' => 0,
    'modify' => 0,
    'segments' => 0,
    'ids' => 0,
    'delete' => 0,
    'str' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583f94f97c91e4_82464868')) {function content_583f94f97c91e4_82464868($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\www\\mycyj\\code\\lib\\smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <?php echo $_smarty_tpl->getSubTemplate ('left_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <?php echo $_smarty_tpl->getSubTemplate ('top_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">
                                        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
                                            <?php if (!$_smarty_tpl->tpl_vars['show']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                                <th height="33"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</th>
                                            <?php }?>
                                        <?php } ?>

                                        <?php if ($_smarty_tpl->tpl_vars['manage']->value) {?>
                                            <th>操作</th>
                                        <?php }?>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
                                        <tr class="<?php if ($_smarty_tpl->tpl_vars['key']->value%2==0) {?>odd<?php } else { ?>even<?php }?> pointer">
                                            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
                                            <?php if (!$_smarty_tpl->tpl_vars['show']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                            <td>
                                                <?php if (!isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['type']->value[$_smarty_tpl->tpl_vars['key']->value]=='method') {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['obj']->value->_fields($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value],$_smarty_tpl->tpl_vars['data']->value);?>

                                                    <?php } else { ?>
                                                        -
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['type']->value[$_smarty_tpl->tpl_vars['key']->value]=='method') {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['obj']->value->_fields($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value],$_smarty_tpl->tpl_vars['data']->value);?>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value[$_smarty_tpl->tpl_vars['key']->value]=='select') {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value]];?>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value[$_smarty_tpl->tpl_vars['key']->value]=='file') {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['imgpath']->value;
echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" height="30"/>
                                                        <?php } else { ?>
                                                            -
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value],'32','...');?>

                                                    <?php }?>
                                                <?php }?>
                                            </td>
                                            <?php }?>
                                            <?php } ?>
                                            <?php if ($_smarty_tpl->tpl_vars['manage']->value) {?>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['obj']->value->_manage($_smarty_tpl->tpl_vars['data']->value);?>

                                                    <?php if ($_smarty_tpl->tpl_vars['modify']->value) {?>
                                                        <a href="/<?php echo $_smarty_tpl->tpl_vars['segments']->value['mod'];?>
/<?php echo $_smarty_tpl->tpl_vars['segments']->value['act'];?>
/modify?<?php echo $_smarty_tpl->tpl_vars['ids']->value['name'];?>
=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['ids']->value['name']];?>
">修改</a>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['delete']->value) {?>
                                                        <a href="javascript:;" onclick="if (confirm('亲，你真的要删除我嘛~')) { location.href = '/<?php echo $_smarty_tpl->tpl_vars['segments']->value['mod'];?>
/<?php echo $_smarty_tpl->tpl_vars['segments']->value['act'];?>
/delete?<?php echo $_smarty_tpl->tpl_vars['ids']->value['name'];?>
=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['ids']->value['name']];?>
'; };">删除</a>
                                                    <?php }?>
                                                </td>
                                            <?php }?>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['str']->value;?>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
