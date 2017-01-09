<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-26 09:55:23
         compiled from "F:\www\angular\code\tpl\oa\filter\photo\field_images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8195860788b1fab76-16644434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb1646a3a847b60f8dc741b52fbdd4b8ccfd779c' => 
    array (
      0 => 'F:\\www\\angular\\code\\tpl\\oa\\filter\\photo\\field_images.tpl',
      1 => 1481102855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8195860788b1fab76-16644434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images' => 0,
    'param' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5860788b26c018_86875218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5860788b26c018_86875218')) {function content_5860788b26c018_86875218($_smarty_tpl) {?><div style="position: relative;">
    <a href='javascript:;' ref='<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
' id="image_<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
" style='color: red;'>详情</a>
    <div id="imgDiv_<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
" style="background-color: #fff;border: 1px solid green;display: none;padding: 10px;border-radius: 5px;position: absolute;left: 60px;top: -20px;max-height: 300px;overflow: auto;background: #fff;z-index: 99;">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <p><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</p>
        <?php } ?>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
        var id = '<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
';
        $(function(){
            $('#image_' + id).mouseover(function(){
                $('#imgDiv_' + id).show();
            }).mouseout(function(){
                $('#imgDiv_' + id).hide();
            });
        });
    <?php echo '</script'; ?>
>
</div>
<?php }} ?>
