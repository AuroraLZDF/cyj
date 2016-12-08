{include file='header.tpl'}

<div id="fh5co-offcanvass">
    {include file='menu.tpl'}
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
            {foreach $images as $key => $item}
                {foreach $item.images as $_key => $_item}
                    <div class="item">
                        <div class="animate-box">
                            <a href="{$oaUrl}{$_item}" class="image-popup fh5co-board-img" title="{$item.title}"><img src="{$oaUrl}{$_item}" alt="Free HTML5 Bootstrap template"></a>
                        </div>
                        <div class="fh5co-desc">{$item.content}</div>
                    </div>
                {/foreach}
            {/foreach}
            </div>
        </div>
    </div>
</div>

{include file='footer.tpl'}
