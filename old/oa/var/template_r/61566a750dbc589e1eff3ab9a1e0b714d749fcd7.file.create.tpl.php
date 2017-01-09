<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-07 16:33:22
         compiled from "F:\www\mycyj\code\oa\tpl\create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25895583ff182ef0fe2-50337188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61566a750dbc589e1eff3ab9a1e0b714d749fcd7' => 
    array (
      0 => 'F:\\www\\mycyj\\code\\oa\\tpl\\create.tpl',
      1 => 1481099601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25895583ff182ef0fe2-50337188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_583ff182f1fde8_39833583',
  'variables' => 
  array (
    'title' => 0,
    'segments' => 0,
    'fields' => 0,
    'key' => 0,
    'disable' => 0,
    'field' => 0,
    'type' => 0,
    'd' => 0,
    'key1' => 0,
    'data' => 0,
    'i' => 0,
    'tagClass' => 0,
    'style' => 0,
    'tips' => 0,
    'required' => 0,
    'ids' => 0,
    'hashkey' => 0,
    'lastPage' => 0,
    'sid' => 0,
    'imgpath' => 0,
    'images' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ff182f1fde8_39833583')) {function content_583ff182f1fde8_39833583($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                            <h2>您当前的位置: <small><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['segments']->value['ac']=='create') {?>添加<?php } else { ?>修改<?php }?></small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="/<?php echo $_smarty_tpl->tpl_vars['segments']->value['mod'];?>
/<?php echo $_smarty_tpl->tpl_vars['segments']->value['act'];?>
/create" method="POST" class="form-horizontal formAjax">

                                <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['field']->key;
?>

                                    <?php if (!$_smarty_tpl->tpl_vars['disable']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <?php if ($_smarty_tpl->tpl_vars['type']->value[$_smarty_tpl->tpl_vars['key']->value]=='select') {?>
                                                    <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['key']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key1']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value]==$_smarty_tpl->tpl_vars['key1']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                                        <?php } ?>
                                                    </select>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value[$_smarty_tpl->tpl_vars['key']->value]=='textarea') {?>
                                                    <textarea name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</textarea>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['tagClass']->value[$_smarty_tpl->tpl_vars['key']->value]=='upload') {?>
                                                    <div class="dropzone_img" style="margin-top: 20px;margin-bottom:20px;">
                                                        <p class="tips1 tipother">上传截图：<span>请上传1-7张截图。</span></p>
                                                        <div class="upload-cs2">
                                                            <p class="screen_err" style="display: none; color: red;"></p>
                                                            <div id="myId" class="dropzone" style=" border:1px dashed #ccc;"></div>
                                                            <button type="button" class="btn btn-info btn-sm" id="upload" style="width: 66px;">上传</button>
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <input class="form-control" type="<?php echo $_smarty_tpl->tpl_vars['type']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"<?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>style="<?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"<?php }?> placeholder='<?php echo $_smarty_tpl->tpl_vars['tips']->value[$_smarty_tpl->tpl_vars['key']->value];?>
' <?php if ($_smarty_tpl->tpl_vars['required']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>required="required"<?php }?>>
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php } ?>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
                                            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['ids']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['ids']->value['name']];?>
" />
                                        <?php }?>
                                        <input type="hidden" name="hashkey" value="<?php echo $_smarty_tpl->tpl_vars['hashkey']->value;?>
">
                                        <button type="button" class="btn btn-primary" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['lastPage']->value;?>
'" >Cancel</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo '<script'; ?>
 type="text/javascript">
            var sid = '<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
';
            //var imgpath = '<?php echo $_smarty_tpl->tpl_vars['imgpath']->value;?>
';
            var imgpath = '';

            var arr = [];
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            arr[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
] = '<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
';
            <?php } ?>

            
            //上传文件
            var screen_img = arr[0] ? arr : '';
            if (screen_img) {
                $('.dropzone_img').show();
                dropZoneShow(screen_img, imgpath, $("#myId"));
            }

            Dropzone.autoDiscover = false;

            $("div#myId").dropzone({
                url: "/upload/index/gameScreen/",
                addRemoveLinks: true,
                dictRemoveFile: '',
                //thumbnailWidth: '100',
                //thumbnailHeight: '180',
                clickable: $('#upload')[0],
                dictCancelUpload: '',
                acceptedFiles: 'image/*',
                params: {
                    PHPSESSID: sid,
                },
                maxFiles: 7,   //最多上传7张
                maxfilesexceeded: function (file) {
                    this.removeFile(file);
                    fnTimeCountDown($(".screen_err"), '一次最多允许上传 7 张图片');
                    return false;
                },
                //autoProcessQueue:false,
                init: function () {
                    this.on("dragover", function (data) {
                        if (!$(data.target).hasClass('dropzone')) {
                            $(data.target).parents('.dz-preview').css({border: '1px solid'})
                            this.sub = $(data.target).parents('.dz-preview');
                        }
                    });

                    this.on("dragend", function (data) {
                        $('.dz-preview').css({border: 'none'});
                        var tagr = $(data.target).parents('.dz-preview');
                        if (!this.sub || !tagr) {
                            return;
                        }

                        if (tagr.index() < this.sub.index()) {
                            tagr.insertAfter(this.sub[0]);
                        } else if (tagr.index() > this.sub.index()) {
                            tagr.insertBefore(this.sub[0]);
                        }

                        this.sub = null;
                    });

                    this.on("dragleave", function (data) {
                        if (!$(data.target).hasClass('dropzone')) {
                            $(data.target).parents('.dz-preview').css({border: 'none'});
                            this.sub = null;
                        }
                    });

                    this.on("addedfile", function (file) {
                        if ($('.dz-preview').length > 7) {
                            this.removeFile(file);
                            fnTimeCountDown($(".screen_err"), '一次最多允许上传 7 张图片');
                        }
                        return false;
                    });

                },
                success: function (file, data) {
                    var json = eval("(" + data + ")");
                    if (json.code == 1) {
                        var html = screenPic(json.url, json.width, json.height);
                        $(file.previewTemplate).append(html);
                    } else if (json.code == 2) {
                        //delete
                        fnTimeCountDown($(".screen_err"), '上传图片尺寸不符合要求');
                        this.removeFile(file);
                    }

                }
            });

            /*删除截屏图片*/
            $("a.dz-remove").click(function () {
                if ($(this).parent()[0]) {
                    console.log(parent);
                    $(this).parent().remove();
                }
            });
            
        <?php echo '</script'; ?>
>
<?php }} ?>
