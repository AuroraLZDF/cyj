<div style="position: relative;">
    <a href='javascript:;' ref='{$images}' id="image_{$param.id}" style='color: red;'>详情</a>
    <div id="imgDiv_{$param.id}" style="background-color: #fff;border: 1px solid green;display: none;padding: 10px;border-radius: 5px;position: absolute;left: 60px;top: -20px;max-height: 300px;overflow: auto;background: #fff;z-index: 99;">
        {foreach $images as $key => $item}
            <p>{$item}</p>
        {/foreach}
    </div>
    <script type="text/javascript">
        var id = '{$param.id}';
        $(function(){
            $('#image_' + id).mouseover(function(){
                $('#imgDiv_' + id).show();
            }).mouseout(function(){
                $('#imgDiv_' + id).hide();
            });
        });
    </script>
</div>
