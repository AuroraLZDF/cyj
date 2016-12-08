{include file='heading.tpl'}
<body class="theme-red">
<!-- tmp/header -->
{include file='tmp/header.tpl'}
<!-- #end tmp/header -->

<!-- tmp/leftmenu -->
{include file='tmp/leftmenu.tpl'}
<!-- #end tmp/leftmenu -->

<section class="content">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>{$data.title}</h2>
                </div>
                <div class="body">{$data.content}</div>
            </div>
        </div>
    </div>


</section>

{include file='footing.tpl'}