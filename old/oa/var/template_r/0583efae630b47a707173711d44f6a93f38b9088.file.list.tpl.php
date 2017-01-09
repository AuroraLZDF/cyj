<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-08 13:35:05
         compiled from "F:\www\mycyj\code\oa\tpl\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:223583fde0dcf9762-15308249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0583efae630b47a707173711d44f6a93f38b9088' => 
    array (
      0 => 'F:\\www\\mycyj\\code\\oa\\tpl\\list.tpl',
      1 => 1481175303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223583fde0dcf9762-15308249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_583fde0dd9d884_22500055',
  'variables' => 
  array (
    'title' => 0,
    'create' => 0,
    'segments' => 0,
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
    'modify' => 0,
    'ids' => 0,
    'delete' => 0,
    'str' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583fde0dd9d884_22500055')) {function content_583fde0dd9d884_22500055($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\www\\mycyj\\code\\lib\\smarty\\plugins\\modifier.truncate.php';
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
                                        <?php if ($_smarty_tpl->tpl_vars['create']->value) {?>
                                            <li>
                                                <a href="/<?php echo $_smarty_tpl->tpl_vars['segments']->value['mod'];?>
/<?php echo $_smarty_tpl->tpl_vars['segments']->value['act'];?>
/create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;添加<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            <div class="table-responsive" style="overflow: visible;">
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
                                                <th><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
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
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" alt="" />
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
" style="margin-right: 5px;">
                                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                        </a>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['delete']->value) {?>
                                                        <a href="javascript:;" class="del_btn" ref="/<?php echo $_smarty_tpl->tpl_vars['segments']->value['mod'];?>
/<?php echo $_smarty_tpl->tpl_vars['segments']->value['act'];?>
/delete?<?php echo $_smarty_tpl->tpl_vars['ids']->value['name'];?>
=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['ids']->value['name']];?>
">
                                                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                                                        </a>
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
