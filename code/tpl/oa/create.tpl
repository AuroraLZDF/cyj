{include file='oa/header.tpl'}
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            {include file='oa/left_menu.tpl'}
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            {include file='oa/top_nav.tpl'}
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>您当前的位置: <small>{$title}{if $segments.ac=='create'}添加{else}修改{/if}</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="{$hiddenUrl}/{$segments.mod}/{$segments.act}/create" method="POST" class="form-horizontal formAjax">

                                {foreach from=$fields item=field key=key}

                                    {if !$disable[$key]}
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">{$field}</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                {if $type[$key]=='select'}
                                                    <select class="form-control" name="{$key}">
                                                        {foreach from=$d[$key] item=i key=key1}
                                                            <option value="{$key1}" {if $data[$key]==$key1} selected {/if}>{$i}</option>
                                                        {/foreach}
                                                    </select>
                                                {elseif $type[$key]=='textarea'}
                                                    <textarea name="{$key}" class="form-control" rows="3">{$data[$key]}</textarea>
                                                {elseif $tagClass[$key] == 'upload'}
                                                    <div class="dropzone_img" style="margin-top: 20px;margin-bottom:20px;">
                                                        <p class="tips1 tipother">上传截图：<span>请上传1-7张截图。</span></p>
                                                        <div class="upload-cs2">
                                                            <p class="screen_err" style="display: none; color: red;"></p>
                                                            <div id="myId" class="dropzone" style=" border:1px dashed #ccc;"></div>
                                                            <button type="button" class="btn btn-info btn-sm" id="upload" style="width: 66px;">上传</button>
                                                        </div>
                                                    </div>
                                                {else}
                                                    <input class="form-control" type="{$type[$key]}" name="{$key}" {if $data}value="{$data[$key]}"{/if}
                                                            {if $style[$key]}style="{$style[$key]}"{/if} placeholder='{$tips[$key]}' {if $required[$key]}required="required"{/if}>
                                                {/if}
                                            </div>
                                        </div>
                                    {/if}
                                {/foreach}
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        {if $data}
                                            <input type="hidden" name="{$ids.name}" value="{$data[$ids.name]}" />
                                        {/if}
                                        <input type="hidden" name="hashkey" value="{$hashkey}">
                                        <button type="button" class="btn btn-primary" onclick="location.href='{$lastPage}'" >Cancel</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{include file='oa/footer.tpl'}
        <script type="text/javascript">
            var sid = '{$sid}';
            //var imgpath = '{$imgpath}';
            var imgpath = '';

            var arr = [];
            {foreach $images as $key => $item}
            arr[{$key}] = '{$item}';
            {/foreach}

            {literal}
            //上传文件
            var screen_img = arr[0] ? arr : '';
            if (screen_img) {
                $('.dropzone_img').show();
                dropZoneShow(screen_img, imgpath, $("#myId"));
            }

            Dropzone.autoDiscover = false;

            $("div#myId").dropzone({
                url: hiddenUrl + "/upload/index/gameScreen/",
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
            {/literal}
        </script>
