<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="{$hiddenUrl}/index/index/index" class="site_title"><i class="fa fa-paw"></i> <span>Love My CYJ!</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile">
        <div class="profile_pic">
            <img src="{if $auser.avatar}{$imgpath}{$auser.avatar}{else}/images/user.png{/if}" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <h2>{if $auser.username}{$auser.username}{else}Guest{/if}</h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->

    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>导航菜单</h3>
            <ul class="nav side-menu">
                {foreach $Menu as $key => $item}
                    <li {if in_array($prePath, $item.children)}class="active"{/if}><a><i class="fa {if $item.class}{$item.class}{else}fa-home{/if}"></i>{$item.name}<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            {foreach $subMenus as $key => $_item}
                                {if $_item.parent == $item.id}
                                    <li {if $prePath == $_item.preurl }class="current-page"{/if}><a href="{$_item.url}">{$_item.name}</a></li>
                                {/if}
                            {/foreach}
                        </ul>
                    </li>
                {/foreach}
            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>
<script>
    $(function(){
        if($('li.active')[0]){
            $('li.active').children('ul.child_menu').show();
        }
    });
</script>