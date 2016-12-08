<?php
if (!defined('IN_BOOT')) {
    exit('Access Denied');
}

/**
 * 分页类
 *
 * @author wanxiaokuo <wanxiaokuo.1985@163.com>
 * @copyright 2006-2010 leshu.com
 *
 */
class Page
{
    public function __construct()
    {

    }

    var $count = 0;
    var $limit = 0;
    /**
     * 单例模式
     *
     * @var object
     */
    static private $instance = NULL;

    static function getInstance()
    {
        if (self::$instance == NULL) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * 分页验证
     *
     * @param integer $page
     * @param integer $pagesize
     * @param integer $position
     * @param integer $allpage
     * @param integer $count
     */
    public function setPageSize(&$page, $pagesize, &$position, &$allpage, $count)
    {
        if (intval($page) <= 0) {
            $page = 1;
        }
        $allpage = ceil($count / $pagesize);
        if ($allpage <= 0) {
            $allpage = 1;
        }
        if ($page > $allpage) {
            $page = $allpage;
        }
        $position = ($page - 1) * $pagesize;
        $this->count = $count ? $count : 0;
        $this->limit = $pagesize;
    }

    /**
     * php 分页形式
     *
     * @param integer $page
     * @param integer $pagecount
     * @param string $url
     * @param array $param
     * @return string
     */
    public function getPagePlate($page, $pagecount, $url, $param)
    {

        $str = '';
        if ($page >= 1) {
            if (is_array($param)) {
                foreach ($param as $key => $value) {
                    $url .= "&" . $key . "=" . urlencode($value);
                }
            }
            //每行展示rowcount个
            $rowcount = 5;
            $row = ceil($pagecount / $rowcount);
            $nowrow = intval($page / $rowcount);
            if ($nowrow <= 1) {//小于等于1
                if ($nowrow == 1) {
                    if (intval($page % $rowcount) > 0) {
                        $nowrow = 2;
                    } else {
                        $nowrow = 1;
                    }
                } else {
                    $nowrow = 1;
                }
            } else {
                if (intval($page % $rowcount) != 0) {
                    $nowrow = $nowrow + 1;
                }
            }

            $position = ($nowrow - 1) * $rowcount + 1;
            $end = intval($position + $rowcount);
            if ($end > $pagecount) {
                $end = $pagecount + 1;
            }


            $str .= '<div class="row"><div class="col-sm-5"><div class="dataTables_info" id="datatable-keytable_info" style="padding-top: 8px;white-space: nowrap;" role="status" aria-live="polite">共 ' . $this->count . ' 条信息  每页显示 ' . $this->limit . ' 条</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable-keytable_paginate"><ul class="pagination" style="margin:2px;">';


            $str .= '<li class="paginate_button previous disabled" id="datatable-keytable_previous"><a href="' . $url . '&page=1" aria-controls="datatable-keytable" data-dt-idx="0" tabindex="0">首页</a></li><li class="paginate_button"><a href="' . $url . '&page=' . ($page - 1) . '" aria-controls="datatable-keytable" data-dt-idx="1" tabindex="0">上一页</a></li>';


            for ($i = $position; $i < $end; $i++) {
                if ($i == $page) {

                    $str .= '<li class="paginate_button active"><a href="javascript:;" aria-controls="datatable-keytable" data-dt-idx="1" tabindex="0">' . $i . '</a></li>';
                } else {

                    $str .= '<li class="paginate_button "><a href="' . $url . '&page=' . $i . '" aria-controls="datatable-keytable" data-dt-idx="6" tabindex="0">' . $i . '</a></li>';
                }
            }

            $str .= '<li class="paginate_button "><a href="' . $url . '&page=' . ($page + 1) . '" aria-controls="datatable-keytable" data-dt-idx="6" tabindex="0">下一页</a></li><li class="paginate_button next" id="datatable-keytable_next"><a href="' . $url . '&page=' . $pagecount . '" aria-controls="datatable-keytable" data-dt-idx="7" tabindex="0">尾页</a></li>';

            $str .= '</ul></div></div></div>';
        }
        return $str;
    }
}

//The end of file :/class/Page.php