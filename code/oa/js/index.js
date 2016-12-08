

$(function(){
    //默认ajax-form提交
    $('.formAjax').submit(function () {
        var method = $(this).attr('method');
        var action = $(this).attr('action');

        if (action.indexOf('?') === -1) {
            action = action + '?_t=' + Math.random();
        } else {
            action = action + '&_t=' + Math.random();
        }

        $.ajax({
            type: method.toLowerCase(),
            url: action,
            data: $(this).serialize(),   //输出序列化表单值的结果
            cache: false,
            dataType: 'json',
            success: function (data) {
                if (data.func) {
                    code = data.code;
                    mes = data.mes;
                    eval(data.func + "()");
                    return false;
                }
                if (data.code == 1) {
                    if (data.timeHide) {
                        showTimeHide($("#success_layer"), $('#success_mes'), data.mes);
                    } else {
                        $('#success_mes').html(data.mes);
                        $("#success_layer, .modal-backdrop").show();
                    }
                    if (data.url) {
                        showTimelocal(data.url);
                    }
                }
                if (data.code == 2) {
                    if (data.timeHide) {
                        showTimeHide($("#error_layer"), $('#error_mes'), data.mes);
                    } else {
                        $('#error_mes').html(data.mes);
                        $("#error_layer, .modal-backdrop").show();
                    }
                }
            },
            error: function () {
                $('#error_mes').html('网络错误，请查看网络');
                $("#error_layer, .modal-backdrop").show();
            }
        });

        //禁止默认submit事件继续提交
        return false;
    });

    //删除按钮
    $('.del_btn').click(function(){
        var url = $(this).attr('ref');
        $('#warning_link').attr('href', url);
        $('#warning_layer, .modal-backdrop').show();
    });

    //关闭按钮
    $('.btn_close').click(function(){
        $(this).parents('.demo_layer').hide();
        $('.modal-backdrop').hide();
    });


});

function dropZoneShow(screen_img, imgpath, obj){
    var html = '';

    for(var i = 0; i < screen_img.length; i++){
        html +=
            '<div class="dz-preview dz-processing dz-image-preview dz-complete">' +
            '<div class="dz-image"><img data-dz-thumbnail alt="screenshot_2.png" src="' + imgpath + screen_img[i] + '" width="120" height="120" ></div>' +
            '<div class="dz-size"></div>' +
            '<div class="dz-filename"></div>' +
            '<a class="dz-remove" href="javascript:undefined;" data-dz-remove></a>' +
            '<input type="hidden" name="images[]" id="imgurl0" value="' + screen_img[i] + '">' +
            '</div>';
    }
    obj.children(".dz-default").hide();
    obj.append(html);
}

function screenPic(url, width, height) {
    var html =
        '<input type="hidden" name="images[]" value="' + url + '">' +
        '<input type="hidden" name="width[]" value="' + width + '">' +
        '<input type="hidden" name="height[]" value="' + height + '"> ';
    return html;
}