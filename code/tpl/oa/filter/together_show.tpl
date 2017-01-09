<style type="text/css">
    table.tab {
        text-align: center;
    }

    table.tab thead tr {
        height: 30px;
        line-height: 30px;
    }

    table.tab tr {
        height: 40px;
        line-height: 40px;
    }

    #name{$id} {
        position: relative;
        margin: 0;
        padding: 0;
    }

    #div_nwame{$id} {
        background-color: #fff;
        border: 1px solid green;
        display: none;
        padding: 10px;
        border-radius: 5px;
        position: absolute;
        left: 60px;
        top: -20px;
        max-height: 300px;
        overflow: auto;
        background: #fff;
        z-index: 99;
        width: 800px;
    }

    #div_nwame{$id} tr td {
        padding: 0px 5px;
    }

    #name{$id} {
        text-decoration: none;
    }
</style>
<div id="name{$id}">
    <a href="javascript:void(0);" style="color:red;" class="exam{$id}">查看详情</a>
    <div id="div_nwame{$id}">
        <table class="tab" style="{$style}">
            <thead>
            <tr style="line-height:150%;white-space:nowrap;">
                {foreach $data as $key => $val}
                    <td>{$key}</td>
                {/foreach}
            </tr>
            </thead>
            <tr style="line-height:150%">
                {foreach $data as $key => $val}
                    <td>{if !$val} - {else}<img src="{$val}" alt="" style="width: 100px;height: 100px;">{/if}</td>
                {/foreach}
            </tr>
        </table>

    </div>
</div>
<script type="text/javascript">
    $("#name{$id}").parent("td").mouseenter(function (event) {
        //首先判断tr中是否只有一个标题，如果只有一个标题说明是内容展示，那么下面的内容应该缩进然后居左
        var title_num = $("#div_nwame{$id} thead>tr>td").length;
        if (title_num == 1) {
            var content = $("#div_nwame{$id} .tab tr:last");
            content.css('text-align', 'left').css('text-indent', '2em');
        }
        //先让内层的div显示,否则下面获取的table自适应宽度为0,是为下面的获取table的宽度做准备；
        $("#div_nwame{$id}").show();
        //设置内层div的宽度为table的自适应宽度
        var tableW = $("#div_nwame{$id} .tab").width();    //table的自适应宽度，根据内容多少得到的
        $("#div_nwame{$id}").width(tableW);
        //设置弹窗的位置偏移量，通过设置left实现
        var div_nw = $("#name{$id}").width();
        var a_w = $(".exam{$id}").width();
        var off_x = div_nw / 2 + a_w / 2 + 5;   //计算偏移量
        $("#div_nwame{$id}").css('left', off_x);
        //通过当前鼠标位置和table的长度计算，如果 (当前位置x + table宽度) > 窗口的宽度，则让他在左侧显示,默认是右侧
        window_w = $(window).width();  //窗口的大小，准确的说应该叫视口
        x = event.pageX;               //当前鼠标的x坐标,
        if (x + tableW + div_nw > window_w) {   //如果  (当前位置x + table宽度) > 窗口的宽度  此处坐标x的判断我取了极限位置
            off_xn = -tableW + (div_nw - a_w) / 2 - 30;   //重新设置偏移量让它在左边显示
            $("#div_nwame{$id}").css('left', off_xn);
        }
        //通过当前鼠标位置和table的高度计算，如果(当前位置y + table高度) > 窗口的高度，则让他在上侧显示,默认是右下侧
        window_h = $(window).height();
        var div_nh = $("#name{$id}").height();
        y = event.pageY;
        var tableH = $("#div_nwame{$id} .tab").height();
        //首先判断展示窗是否有滚动条,因为css中我设置了最大height为200，所以如果小于300就没有滚动条,展示窗的height即为默认的height，如果大于300就有滚动条，他的height就是设置的最大height 即300
        if (tableH < 300) {
            tableH = tableH;
        } else {
            tableH = 300;
        }
        if (y + tableH + div_nh > window_h) {
            off_yn = -tableH + 20;
            $("#div_nwame{$id}").css('top', off_yn);  //重新设置偏移量让它在上边显示
        }
        $("#div_nwame{$id}").show();
    }).mouseleave(function () {
        $("#div_nwame{$id}").hide();
    });
</script>

