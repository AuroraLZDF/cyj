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
                            <h2>{$title}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        {if $create}
                                            <li>
                                                <a href="{$hiddenUrl}/{$segments.mod}/{$segments.act}/create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;添加{$title}</a>
                                            </li>
                                        {/if}
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
                                        {foreach $fields as $key => $field}
                                            {if !$show[$key]}
                                                <th>{$field}</th>
                                            {/if}
                                        {/foreach}

                                        {if $manage}
                                            <th>操作</th>
                                        {/if}
                                    </tr>
                                    </thead>

                                    <tbody>
                                    {foreach $datas as $key => $data}
                                        <tr class="{if $key % 2 == 0}odd{else}even{/if} pointer">
                                            {foreach $fields as $key => $field}
                                            {if !$show[$key]}
                                            <td>
                                                {if !isset($data[$key])}
                                                    {if $type[$key] == 'method'}
                                                        {$obj->_fields($key, $data[$key], $data)}
                                                    {else}
                                                        -
                                                    {/if}
                                                {else}
                                                    {if $type[$key] == 'method'}
                                                        {$obj->_fields($key, $data[$key], $data)}
                                                    {elseif $type[$key] == 'select'}
                                                        {$d[$key][$data[$key]]}
                                                    {elseif $type[$key] == 'file'}
                                                        {if $data[$key]}
                                                            <img src="{$data[$key]}" alt="" />
                                                        {else}
                                                            -
                                                        {/if}
                                                    {else}
                                                        {$data[$key]|truncate:'32':'...'}
                                                    {/if}
                                                {/if}
                                            </td>
                                            {/if}
                                            {/foreach}
                                            {if $manage}
                                                <td>
                                                    {$obj->_manage($data)}
                                                    {if $modify}
                                                        <a href="{$hiddenUrl}/{$segments.mod}/{$segments.act}/modify/{$ids.name}-{$data[$ids.name]}" style="margin-right: 5px;">
                                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                        </a>
                                                    {/if}
                                                    {if $delete}
                                                        <a href="javascript:;" class="del_btn" ref="{$hiddenUrl}/{$segments.mod}/{$segments.act}/delete/{$ids.name}-{$data[$ids.name]}">
                                                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                                                        </a>
                                                    {/if}
                                                </td>
                                            {/if}
                                        </tr>
                                    {/foreach}
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearfix">{$str}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    {include file='oa/footer.tpl'}