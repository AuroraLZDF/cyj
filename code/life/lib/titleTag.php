<?php

//一级菜单
$arrPage = array();
$arrPage[1] = array('id' => 1, 'name' => '系统菜单', 'url' => '/index/index/index', 'parent' => 0, 'preurl' => 'indexindex', 'type' => array(1,4,5,2), 'mark' => '01', 'group' => array(1,2,3,4,5,6,7,8,9),);

$arrPage[3] = array('id' => 3, 'name' => '开发者管理', 'url' => '/dev/index/index', 'parent' => 0, 'preurl' => 'devindex', 'type' => array(1,2,4,5), 'mark' => '03','group' => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18));
$arrPage[4] = array('id' => 4, 'name' => '运营商管理', 'url' => '/operator/index/index', 'parent' => 0, 'preurl' => 'operatorindex', 'type' => array(1,2,4,5), 'mark' => '04','group' => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18));
$arrPage[5] = array('id' => 5, 'name' => '开心玩', 'url' => '/kxw/index/index', 'parent' => 0, 'preurl' => 'kxwindex', 'type' => array(1, 4,5,2), 'mark' => '05','group' => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18));
$arrPage[6] = array('id' => 6, 'name' => '用户中心', 'url' => '/player/index/index', 'parent' => 0, 'preurl' => 'playerindex', 'type' => array(1, 4,5,2), 'mark' => '06','group' => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18));
$arrPage[7] = array('id' => 7, 'name' => '数据中心', 'url' => '/data/recharge/index?status=1', 'parent' => 0, 'preurl' => 'datarecharge', 'type' => array(1, 4,5,2), 'mark' => '07','group' => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18));
$arrPage[8] = array('id' => 8, 'name' => '投放数据', 'url' => '/advertise/index/index', 'parent' => 0, 'preurl' => 'advertiseindex', 'type' => array(1, 4,5,2),
 'mark' => '08','group' => array(1,2,3,4,5,6,7,8,9,10,11));
$arrPage[9] = array('id' => 9, 'name' => '其他', 'url' => '/other/index/index', 'parent' => 0, 'preurl' => 'otherindex', 'type' => array(1, 4,5,2), 'mark' => '09','group' => array(1,2,3,4,5,6,7,8,9,10,));

//二级菜单
/*
系统菜单-子菜单
 */


$arrPage[] = array('id' => '9', 'name' => '首页', 'url' => '/index/index/index', 'parent' => 1, 'preurl' => 'indexindex', 'type' => array(1, 4,5,2), 'mark' => '1.01', 'p_group' => 1, );
$arrPage[] = array('id' => '10', 'name' => '管理员', 'url' => '/user/index/index', 'parent' => 1, 'preurl' => 'userindex', 'type' => array(1), 'mark' => '1.02', 'p_group' => 2, );
$arrPage[] = array('id' => '59', 'name' => '权限模板', 'url' => '/index/right_template/index', 'parent' => 1, 'preurl' => 'indexright_template', 'type' => array(1), 'mark' => '1.11', 'p_group' => 2);
$arrPage[] = array('id' => '11', 'name' => '公告', 'url' => '/user/notice/index', 'parent' => 1, 'preurl' => 'usernotice', 'type' => array(1, 4,5,2), 'mark' => '1.03','p_group' => 3,);
$arrPage[] = array('id' => '12', 'name' => '图片', 'url' => '/user/img/index', 'parent' => 1, 'preurl' => 'userimg', 'type' => array(1, 4,5,2), 'mark' => '1.04', 'p_group' => 4, );
$arrPage[] = array('id' => '13', 'name' => '模拟登陆', 'url' => '/index/simulation', 'parent' => 1, 'preurl' => 'indexsimulation', 'type' => array(1 ,4,5,2), 'target' => true, 'mark' => '1.05', 'p_group' => 5, );
$arrPage[] = array('id' => '15', 'name' => 'redis监控', 'url' => '/index/redis/index', 'parent' => 1, 'preurl' => 'indexredis', 'type' => array(1, 4,5,2), 'mark' => '1.06', 'p_group' => 6,);
$arrPage[] = array('id' => '16', 'name' => '缓存设置', 'url' => '/index/cache/index', 'parent' => 1, 'preurl' => 'indexcache', 'type' => array(1, 4,5,2), 'mark' => '1.07','p_group' => 7,);
$arrPage[] = array('id' => '50', 'name' => 'mysql日志', 'url' => '/index/error/index', 'parent' => 1, 'preurl' => 'indexerror', 'type' => array(1, 4,5,2), 'mark' => '1.08','p_group' => 8, );
$arrPage[] = array('id' => '59', 'name' => '补单日志', 'url' => '/index/forget_charge/index', 'parent' => 1, 'preurl' => 'indexforget_charge', 'type' => array(1, 4,5,2), 'mark' => '1.09', 'p_group' => 8);
$arrPage[] = array('id' => '10', 'name' => '登录日志', 'url' => '/user/loginLog/index', 'parent' => 1, 'preurl' => 'userloginLog', 'type' => array(1), 'mark' => '1.13','p_group' => 8);
$arrPage[] = array('id' => '59', 'name' => 'CDN刷新', 'url' => '/index/refreshFile/index', 'parent' => 1, 'preurl' => 'indexrefreshFile', 'type' => array(1, 4,5,2), 'mark' => '1.10','p_group' => 9, );
$arrPage[] = array('id' => '59', 'name' => 'CDN域名', 'url' => '/index/cdn_list/index', 'parent' => 1, 'preurl' => 'indexcdn_list', 'type' => array(1, 4,5,2), 'mark' => '1.11', 'p_group' => 9);

/*
财务管理-子菜单
 */

/*
开发者管理-子菜单
 */
$arrPage[] = array('id' => '15', 'name' => '开发者', 'url' => '/dev/index/index', 'parent' => 3, 'preurl' => 'devindex', 'type' => array(1,2,4,5), 'mark' => '3.01','p_group' => 1,);
$arrPage[] = array('id' => '16', 'name' => '账户认证', 'url' => '/dev/authentifi/index', 'parent' => 3, 'preurl' => 'devauthentifi', 'type' => array(1,2,4,5), 'mark' => '3.02','p_group' => 2,);
$arrPage[] = array('id' => '17', 'name' => '游戏     ', 'url' => '/dev/game/index', 'parent' => 3, 'preurl' => 'devgame', 'type' => array(1,2,4,5), 'mark' => '3.03','p_group' => 3,);
$arrPage[] = array('id' => '17', 'name' => '游戏logo', 'url' => '/dev/gameLogo/index', 'parent' => 3, 'preurl' => 'devgameLogo', 'type' => array(1,2,4,5), 'mark' => '3.04','p_group' => 3,);
$arrPage[] = array('id' => '19', 'name' => '开服管理', 'url' => '/dev/server/index', 'parent' => 3, 'preurl' => 'devserver', 'type' => array(1,2,4,5), 'mark' => '3.06','p_group' => 4,);
$arrPage[] = array('id' => '18', 'name' => '混服游戏 ', 'url' => '/dev/mixed/index', 'parent' => 3, 'preurl' => 'devmixed', 'type' => array(1,2,4,5), 'mark' => '3.05','p_group' => 5,);
$arrPage[] = array('id' => '20', 'name' => '混服管理', 'url' => '/dev/mixedapply/index', 'parent' => 3, 'preurl' => 'devmixedapply', 'type' => array(1, 4,2,5), 'mark' => '3.07','p_group' => 5,);
$arrPage[] = array('id' => '21', 'name' => '文章管理', 'url' => '/dev/article/index', 'parent' => 3, 'preurl' => 'devarticle', 'type' => array(1, 4,2,5), 'mark' => '3.08','p_group' => 6,);
$arrPage[] = array('id' => '42', 'name' => '图片管理', 'url' => '/dev/pic/index', 'parent' => 3, 'preurl' => 'devpic', 'type' => array(1, 4,5,2), 'mark' => '3.09','p_group' => 7,);
$arrPage[] = array('id' => '22', 'name' => '游戏礼包', 'url' => '/dev/giftone/index', 'parent' => 3, 'preurl' => 'devgiftone', 'type' => array(1,2,4,5), 'mark' => '3.10','p_group' => 8,);
$arrPage[] = array('id' => '43', 'name' => '礼包管理', 'url' => '/dev/gifttwo/index', 'parent' => 3, 'preurl' => 'devgifttwo', 'type' => array(1,2,4,5), 'mark' => '3.11','p_group' => 8,);
$arrPage[] = array('id' => '43', 'name' => '卡号管理', 'url' => '/dev/giftcard/index', 'parent' => 3, 'preurl' => 'devgiftcard', 'type' => array(1,2,4,5), 'mark' => '3.12','p_group' => 9,);
$arrPage[] = array('id' => '42', 'name' => '游戏官网', 'url' => '/dev/game_root', 'parent' => 3, 'preurl' => 'devgame_root', 'type' => array(1,2,4,5), 'mark' => '3.13','p_group' => 10,);
$arrPage[] = array('id' => '44', 'name' => '模版管理', 'url' => '/dev/game_templet', 'parent' => 3, 'preurl' => 'devgame_templet', 'type' => array(1,2,4,5), 'mark' => '3.14','p_group' => 10,);
$arrPage[] = array('id' => '47', 'name' => '合服管理', 'url' => '/dev/server_merge', 'parent' => 3, 'preurl' => 'devserver_merge', 'type' => array(1,2,4,5), 'mark' => '3.15','p_group' => 11,);
$arrPage[] = array('id' => '48', 'name' => '参数修正', 'url' => '/dev/server_revise', 'parent' => 3, 'preurl' => 'devserver_revise', 'type' => array(1,2,4,5), 'mark' => '3.16','p_group' => 12,);
$arrPage[] = array('id' => '56', 'name' => '敏感操作', 'url' => '/dev/sensitive_opera', 'parent' => 3, 'preurl' => 'devsensitive_opera', 'type' => array(1,2,4,5), 'mark' => '3.17','p_group' => 13,);
/*
运营商管理-子菜单
 */
$arrPage[] = array('id' => '23', 'name' => '运营者', 'url' => '/operator/index/index', 'parent' => 4, 'preurl' => 'operatorindex', 'type' => array(1,2,4,5), 'mark' => '4.01','p_group' => 1,);
$arrPage[] = array('id' => '25', 'name' => '充值订单管理', 'url' => '/operator/operatorRecharge/index', 'parent' => 4, 'preurl' => 'operatoroperatorRecharge', 'type' => array(1,2,4,5), 'mark' => '4.24','p_group' => 1);
$arrPage[] = array('id' => '24', 'name' => '账户认证', 'url' => '/operator/authentifi/index', 'parent' => 4, 'preurl' => 'operatorauthentifi', 'type' => array(1,2,4,5), 'mark' => '4.02','p_group' => 2,);
$arrPage[] = array('id' => '25', 'name' => '充值方式', 'url' => '/operator/paymethod/index', 'parent' => 4, 'preurl' => 'operatorpaymethod', 'type' => array(1,2,4,5), 'mark' => '4.03','p_group' => 3,);
$arrPage[] = array('id' => '43', 'name' => '推广员', 'url' => '/operator/promotor', 'parent' => 4, 'preurl' => 'operatorpromotor', 'type' => array(1,2,4,5), 'mark' => '4.04','p_group' => 4,);
$arrPage[] = array('id' => '44', 'name' => '推广员分成', 'url' => '/operator/promote_detail', 'parent' => 4, 'preurl' => 'operatorpromote_detail', 'type' => array(1,2,4,5), 'mark' => '4.05','p_group' => 4,);
$arrPage[] = array('id' => '44', 'name' => '推广链接', 'url' => '/operator/promotelink', 'parent' => 4, 'preurl' => 'operatorpromotelink', 'type' => array(1,2,4,5), 'mark' => '4.06','p_group' => 4,);
$arrPage[] = array('id' => '54', 'name' => '链接查询 ', 'url' => '/operator/linkSearch', 'parent' => 4, 'preurl' => 'operatorlinkSearch', 'type' => array(1,2,4,5), 'mark' => '4.07','p_group' => 4,);
$arrPage[] = array('id' => '28', 'name' => '推广模版', 'url' => '/operator/promote/index', 'parent' => 4, 'preurl' => 'operatorpromote', 'type' => array(1,2,4,5), 'mark' => '4.08','p_group' => 4,);
$arrPage[] = array('id' => '57', 'name' => '敏感操作', 'url' => '/operator/sensitive_opera', 'parent' => 4, 'preurl' => 'operatorsensitive_opera', 'type' => array(1,2,4,5), 'mark' => '4.09','p_group' => 5,);
$arrPage[] = array('id' => '25', 'name' => '首充管理', 'url' => '/operator/payfirst/index', 'parent' => 4, 'preurl' => 'operatorpayfirst', 'type' => array(1,2,4,5), 'mark' => '4.10','p_group' => 6,);
$arrPage[] = array('id' => '25', 'name' => '内充管理', 'url' => '/operator/payinner/index', 'parent' => 4, 'preurl' => 'operatorpayinner', 'type' => array(1,2,4,5), 'mark' => '4.11','p_group' => 6,);
$arrPage[] = array('id' => '25', 'name' => '游戏分成', 'url' => '/operator/gameDivide/index', 'parent' => 4, 'preurl' => 'operatorgameDivide', 'type' => array(1,2,4,5), 'mark' => '4.12','p_group' => 7,);
$arrPage[] = array('id' => '25', 'name' => '玩家补充', 'url' => '/operator/user/index', 'parent' => 4, 'preurl' => 'operatoruser', 'type' => array(1,2,4,5), 'mark' => '4.13','p_group' => 8,);
$arrPage[] = array('id' => '25', 'name' => 'cpl合作商', 'url' => '/operator/cplCustomers/index', 'parent' => 4, 'preurl' => 'operatorcplCustomers', 'type' => array(1,2,4,5), 'mark' => '4.14','p_group' => 9,);
$arrPage[] = array('id' => '25', 'name' => 'cpl合 作', 'url' => '/operator/cpl/index', 'parent' => 4, 'preurl' => 'operatorcpl', 'type' => array(1,2,4,5), 'mark' => '4.15','p_group' => 9,);
$arrPage[] = array('id' => '25', 'name' => 'cpl合作管理', 'url' => '/operator/cplManager/index', 'parent' => 4, 'preurl' => 'operatorcplManager', 'type' => array(1,2,4,5), 'mark' => '4.16','p_group' => 9,);
//$arrPage[] = array('id' => '25', 'name' => 'cpl导出 |', 'url' => '/operator/cplExport/index', 'parent' => 4, 'preurl' => 'operatorcplExport', 'type' => array(1,2,4,5), 'mark' => '4.17');
$arrPage[] = array('id' => '25', 'name' => 'cpl数据', 'url' => '/operator/cpldata/index', 'parent' => 4, 'preurl' => 'operatorcpldata', 'type' => array(1,2,4,5), 'mark' => '4.18','p_group' => 9,);
$arrPage[] = array('id' => '26', 'name' => '综合营销cpl', 'url' => '/operator/marketCpl/index', 'parent' => 4, 'preurl' => 'operatormarketCpl', 'type' => array(1,2,4,5), 'mark' => '4.24','p_group' => 10);
$arrPage[] = array('id' => '28', 'name' => 'cpl综合营销管理', 'url' => '/operator/marketCplManager/index', 'parent' => 4, 'preurl' => 'operatormarketCplManager', 'type' => array(1,2,4,5), 'mark' => '4.25','p_group' => 10);

$arrPage[] = array('id' => '25', 'name' => '综合营销订单', 'url' => '/operator/marketOrder/index', 'parent' => 4, 'preurl' => 'operatormarketOrder', 'type' => array(1,2,4,5), 'mark' => '4.19','p_group' => 11,);
$arrPage[] = array('id' => '25', 'name' => '平均价格', 'url' => '/operator/averagePrice/index', 'parent' => 4, 'preurl' => 'operatoraveragePrice', 'type' => array(1,2,4,5), 'mark' => '4.20','p_group' => 11);
$arrPage[] = array('id' => '25', 'name' => '综合营销推广', 'url' => '/operator/marketPromote/index', 'parent' => 4, 'preurl' => 'operatormarketPromote', 'type' => array(1,2,4,5), 'mark' => '4.21','p_group' => 11);
$arrPage[] = array('id' => '25', 'name' => '默认运营商', 'url' => '/operator/marketd_operator/index', 'parent' => 4, 'preurl' => 'operatormarketd_operator', 'type' => array(1,2,4,5), 'mark' => '4.22','p_group' => 11);
$arrPage[] = array('id' => '25', 'name' => '补量管理', 'url' => '/operator/marketAdd/index', 'parent' => 4, 'preurl' => 'operatormarketAdd', 'type' => array(1,2,4,5), 'mark' => '4.23','p_group' => 11);
$arrPage[] = array('id' => '25', 'name' => '综合营销注册查询', 'url' => '/operator/marketRegister/index', 'parent' => 4, 'preurl' => 'operatormarketRegister', 'type' => array(1,2,4,5), 'mark' => '4.25','p_group' => 11);
$arrPage[] = array('id' => '25', 'name' => '综合营销充值查询', 'url' => '/operator/marketRecharge/index', 'parent' => 4, 'preurl' => 'operatormarketRecharge', 'type' => array(1,2,4,5), 'mark' => '4.26','p_group' => 11);


/*
开心玩-子菜单
 */
$arrPage[] = array('id' => '26', 'name' => '网友推荐', 'url' => '/kxw/index/index', 'parent' => 5, 'preurl' => 'kxwindex', 'type' => array(1,2,4,5), 'mark' => '5.01' ,'p_group' => 1,);
$arrPage[] = array('id' => '34', 'name' => '轮播设置', 'url' => '/kxw/rock', 'parent' => 5, 'preurl' => 'kxwrock', 'type' => array(1,2,4,5), 'mark' => '5.02','p_group' => 2,);
$arrPage[] = array('id' => '35', 'name' => '今日推荐', 'url' => '/kxw/today', 'parent' => 5, 'preurl' => 'kxwtoday', 'type' => array(1,2,4,5), 'mark' => '5.03','p_group' => 3,);
$arrPage[] = array('id' => '36', 'name' => '本周推荐', 'url' => '/kxw/week', 'parent' => 5, 'preurl' => 'kxwweek', 'type' => array(1,2,4,5), 'mark' => '5.04','p_group' => 3,);
$arrPage[] = array('id' => '37', 'name' => '猜你喜欢(游)', 'url' => '/kxw/likegame', 'parent' => 5, 'preurl' => 'kxwlikegame', 'type' => array(1,2,4,5), 'mark' => '5.05','p_group' => 4,);
$arrPage[] = array('id' => '37', 'name' => '猜你喜欢(活) ', 'url' => '/kxw/likeact', 'parent' => 5, 'preurl' => 'kxwlikeact', 'type' => array(1,2,4,5), 'mark' => '5.06','p_group' => 4,);
$arrPage[] = array('id' => '41', 'name' => '活动大厅', 'url' => '/kxw/activity/', 'parent' => 5, 'preurl' => 'kxwactivity', 'type' => array(1,2,4,5), 'mark' => '5.07','p_group' => 5,);
$arrPage[] = array('id' => '38', 'name' => '友情链接', 'url' => '/kxw/friendlylink/index', 'parent' => 5, 'preurl' => 'kxwfriendlylink', 'type' => array(1,2,4,5), 'mark' => '5.08','p_group' => 6,);
$arrPage[] = array('id' => '45', 'name' => '推荐游戏', 'url' => '/kxw/recgame', 'parent' => 5, 'preurl' => 'kxwrecgame', 'type' => array(1,2,4,5), 'mark' => '5.09','p_group' => 7,);
$arrPage[] = array('id' => '47', 'name' => '(未)推荐游戏', 'url' => '/kxw/opengame', 'parent' => 5, 'preurl' => 'kxwopengame', 'type' => array(1,2,4,5), 'mark' => '5.10','p_group' => 7,);
$arrPage[] = array('id' => '47', 'name' => '(未)游戏图片', 'url' => '/kxw/img', 'parent' => 5, 'preurl' => 'kxwimg', 'type' => array(1,2,4,5), 'mark' => '5.11','p_group' => 8,);
$arrPage[] = array('id' => '46', 'name' => '搜索关键字', 'url' => '/kxw/keyword', 'parent' => 5, 'preurl' => 'kxwkeyword', 'type' => array(1,2,4,5), 'mark' => '5.12','p_group' => 9,);
$arrPage[] = array('id' => '46', 'name' => '更多游戏推荐', 'url' => '/kxw/moregame_recommend', 'parent' => 5, 'preurl' => 'kxwmoregame_recommend', 'type' => array(1,2,4,5), 'mark' => '5.13','p_group' => 10,);
$arrPage[] = array('id' => '48', 'name' => '热门游戏 ', 'url' => '/kxw/hot_game', 'parent' => 5, 'preurl' => 'kxwhot_game', 'type' => array(1,2,4,5), 'mark' => '5.13','p_group' => 11,);
$arrPage[] = array('id' => '47', 'name' => '微信图片', 'url' => '/kxw/weixin', 'parent' => 5, 'preurl' => 'kxwweixin', 'type' => array(1,2,4,5), 'mark' => '5.11','p_group' => 12,);
$arrPage[] = array('id' => '48', 'name' => '玩家风采', 'url' => '/kxw/playerStyle', 'parent' => 5, 'preurl' => 'kxwplayerStyle', 'type' => array(1,2,4,5), 'mark' => '5.12','p_group' => 13,);
$arrPage[] = array('id' => '49', 'name' => '官网弹出', 'url' => '/kxw/gameRoot_pic', 'parent' => 5, 'preurl' => 'kxwgameRoot_pic', 'type' => array(1,2,4,5), 'mark' => '5.14','p_group' => 14,);
$arrPage[] = array('id' => '49', 'name' => '首页Flash', 'url' => '/kxw/indexFlash', 'parent' => 5, 'preurl' => 'kxwindexFlash', 'type' => array(1,2,4,5), 'mark' => '5.15','p_group' => 15,);

/*
用户中心-子菜单
 */
$arrPage[] = array('id' => '27', 'name' => '玩家账户', 'url' => '/player/index/index', 'parent' => 6, 'preurl' => 'playerindex', 'type' => array(1,2,4,5), 'mark' => '6.01','p_group' => 1,);
$arrPage[] = array('id' => '33', 'name' => '玩家资料', 'url' => '/player/info/index', 'parent' => 6, 'preurl' => 'playerinfo', 'type' => array(1,2,4,5), 'mark' => '6.02','p_group' => 1,);
$arrPage[] = array('id' => '53', 'name' => '玩家角色', 'url' => '/player/role/index', 'parent' => 6, 'preurl' => 'playerrole', 'type' => array(1,2,4,5), 'mark' => '6.07','p_group' => 1,);
$arrPage[] = array('id' => '29', 'name' => '帐号安全', 'url' => '/player/security/index', 'parent' => 6, 'preurl' => 'playersecurity', 'type' => array(1,2,4,5), 'mark' => '6.03','p_group' => 2,);
$arrPage[] = array('id' => '30', 'name' => '消息管理', 'url' => '/player/message/index', 'parent' => 6, 'preurl' => 'playermessage', 'type' => array(1,2,4,5), 'mark' => '6.04','p_group' => 3,);
$arrPage[] = array('id' => '31', 'name' => '开心币日志', 'url' => '/player/coins/index', 'parent' => 6, 'preurl' => 'playercoins', 'type' => array(1,2,4,5), 'mark' => '6.05','p_group' => 4,);
$arrPage[] = array('id' => '32', 'name' => '积分日志', 'url' => '/player/points/index', 'parent' => 6, 'preurl' => 'playerpoints', 'type' => array(1,2,4,5), 'mark' => '6.06','p_group' => 5,);
$arrPage[] = array('id' => '33', 'name' => '热门搜索', 'url' => '/player/hotsearch/index', 'parent' => 6, 'preurl' => 'playerhotsearch', 'type' => array(1,2,4,5), 'mark' => '6.08','p_group' => 6,);
$arrPage[] = array('id' => '39', 'name' => '活动 ', 'url' => '/player/activity/index', 'parent' => 6, 'preurl' => 'playeractivity', 'type' => array(1,2,4,5), 'mark' => '6.09','p_group' => 7,);
$arrPage[] = array('id' => '40', 'name' => '客服问答', 'url' => '/player/customer/index', 'parent' => 6, 'preurl' => 'playercustomer', 'type' => array(1,2,4,5), 'mark' => '6.10','p_group' => 8,);
$arrPage[] = array('id' => '42', 'name' => '登录日志', 'url' => '/player/log/index', 'parent' => 6, 'preurl' => 'playerlog', 'type' => array(1,2,4,5), 'mark' => '6.11','p_group' => 9,);
$arrPage[] = array('id' => '42', 'name' => '系统赠送', 'url' => '/player/largess/index', 'parent' => 6, 'preurl' => 'playerlargess', 'type' => array(1,2,4,5), 'mark' => '6.12','p_group' => 10,);


//数据中心-子菜单
$arrPage[] = array('id' => '48', 'name' => '充值管理', 'url' => '/data/recharge/index?status=1', 'parent' => 7, 'preurl' => 'datarecharge', 'type' => array(1,2,4,5), 'mark' => '7.01','p_group' => 1,);
$arrPage[] = array('id' => '49', 'name' => '(开)数据', 'url' => '/data/devDetails/', 'parent' => 7, 'preurl' => 'datadevDetails', 'type' => array(1,2,4,5), 'mark' => '7.02','p_group' => 2,);
$arrPage[] = array('id' => '51', 'name' => '(开)月报', 'url' => '/data/devMonth/', 'parent' => 7, 'preurl' => 'datadevMonth', 'type' => array(1,2,4,5), 'mark' => '7.04','p_group' => 2,);
$arrPage[] = array('id' => '54', 'name' => '(开)各服数据', 'url' => '/data/devserverDetails/', 'parent' => 7, 'preurl' => 'datadevserverDetails', 'type' => array(1,2,4,5), 'mark' => '7.06','p_group' => 2,);

$arrPage[] = array('id' => '50', 'name' => '(运)数据', 'url' => '/data/operDetails/', 'parent' => 7, 'preurl' => 'dataoperDetails', 'type' => array(1,2,4,5), 'mark' => '7.03','p_group' => 3,);
$arrPage[] = array('id' => '52', 'name' => '(运)月报', 'url' => '/data/operMonth/', 'parent' => 7, 'preurl' => 'dataoperMonth', 'type' => array(1,2,4,5), 'mark' => '7.05','p_group' => 3,);
$arrPage[] = array('id' => '55', 'name' => '(运)各服数据', 'url' => '/data/operserverDetails/', 'parent' => 7, 'preurl' => 'dataoperserverDetails', 'type' => array(1,2,4,5), 'mark' => '7.07','p_group' => 3,);

$arrPage[] = array('id' => '56', 'name' => '(运)推广玩家', 'url' => '/data/workDetails/', 'parent' => 7, 'preurl' => 'dataworkDetails', 'type' => array(1,2,4,5), 'mark' => '7.08','p_group' => 3,);
$arrPage[] = array('id' => '56', 'name' => '游戏总充值', 'url' => '/data/rechargeGame/', 'parent' => 7, 'preurl' => 'datarechargeGame', 'type' => array(1,2,4,5), 'mark' => '7.09','p_group' => 4,);
$arrPage[] = array('id' => '56', 'name' => '游戏区服充值', 'url' => '/data/rechargeServer/', 'parent' => 7, 'preurl' => 'datarechargeServer', 'type' => array(1,2,4,5), 'mark' => '7.10','p_group' => 4,);
$arrPage[] = array('id' => '56', 'name' => '游戏区服日报', 'url' => '/data/serverDaily/', 'parent' => 7, 'preurl' => 'dataserverDaily', 'type' => array(1,2,4,5), 'mark' => '7.11','p_group' => 4,);
/*$arrPage[] = array('id' => '56', 'name' => '游戏区服月报 |', 'url' => '/data/serverMonth/', 'parent' => 7, 'preurl' => 'dataserverMonth', 'type' => array(1,2,4,5), 'mark' => '7.12');
$arrPage[] = array('id' => '56', 'name' => '游戏区服年报 |', 'url' => '/data/serverYear/', 'parent' => 7, 'preurl' => 'dataserverYear', 'type' => array(1,2,4,5), 'mark' => '7.13');*/
$arrPage[] = array('id' => '57', 'name' => '日报', 'url' => '/data/dailyreport/', 'parent' => 7, 'preurl' => 'datadailyreport', 'type' => array(1,2,4,5), 'mark' => '7.14','p_group' => 5,);
$arrPage[] = array('id' => '57', 'name' => '月报', 'url' => '/data/monthReport/', 'parent' => 7, 'preurl' => 'datamonthReport', 'type' => array(1,2,4,5), 'mark' => '7.15','p_group' => 5,);
$arrPage[] = array('id' => '57', 'name' => '年报', 'url' => '/data/yearReport/', 'parent' => 7, 'preurl' => 'datayearReport', 'type' => array(1,2,4,5), 'mark' => '7.16','p_group' => 5,);
$arrPage[] = array('id' => '57', 'name' => '渠道充值', 'url' => '/data/payDetail', 'parent' => 7, 'preurl' => 'datapayDetail', 'type' => array(1,2,4,5), 'mark' => '7.17','p_group' => 6,);

/*
投放数据-子菜单
 */
$arrPage[] = array('id' => '57', 'name' => '投放展示', 'url' => '/advertise/index/index', 'parent' => 8, 'preurl' => 'advertiseindex', 'type' => array(1,2,4,5), 'mark' => '8.01','p_group' => 1,  );
$arrPage[] = array('id' => '58', 'name' => '投放点击', 'url' => '/advertise/click/index', 'parent' => 8, 'preurl' => 'advertiseclick', 'type' => array(1,2,4,5), 'mark' => '8.02','p_group' => 2,  );
$arrPage[] = array('id' => '59', 'name' => '投放游戏', 'url' => '/advertise/game/index', 'parent' => 8, 'preurl' => 'advertisegame', 'type' => array(1,2,4,5), 'mark' => '8.03','p_group' => 3,  );
$arrPage[] = array('id' => '60', 'name' => '投放服务器', 'url' => '/advertise/server/index', 'parent' => 8, 'preurl' => 'advertiseserver', 'type' => array(1,2,4,5), 'mark' => '8.04','p_group' => 4,);
$arrPage[] = array('id' => '61', 'name' => '投放类别', 'url' => '/advertise/work/index', 'parent' => 8, 'preurl' => 'advertisework', 'type' => array(1,2,4,5), 'mark' => '8.05','p_group' => 5,);
$arrPage[] = array('id' => '62', 'name' => '投放素材', 'url' => '/advertise/material/index', 'parent' => 8, 'preurl' => 'advertisematerial', 'type' => array(1,2,4,5), 'mark' => '8.06','p_group' => 6,);
$arrPage[] = array('id' => '63', 'name' => '投放链接', 'url' => '/advertise/link/index', 'parent' => 8, 'preurl' => 'advertiselink', 'type' => array(1,2,4,5), 'mark' => '8.07','p_group' => 7,);
$arrPage[] = array('id' => '64', 'name' => '投放推广员', 'url' => '/advertise/promote/index', 'parent' => 8, 'preurl' => 'advertisepromote', 'type' => array(1,2,4,5), 'mark' => '8.08','p_group' => 8,);
$arrPage[] = array('id' => '65', 'name' => '投放运营商', 'url' => '/advertise/operator/index', 'parent' => 8, 'preurl' => 'advertiseoperator', 'type' => array(1,2,4,5), 'mark' => '8.09','p_group' => 9,);
$arrPage[] = array('id' => '65', 'name' => '来源统计', 'url' => '/advertise/fromref/index', 'parent' => 8, 'preurl' => 'advertisefromref', 'type' => array(1,2,4,5), 'mark' => '8.10','p_group' => 10,);
/*
 其他
 */

$arrPage[] = array('id' => '57', 'name' => '账户认证', 'url' => '/other/index/index', 'parent' => 9, 'preurl' => 'otherindex', 'type' => array(1,2,4,5), 'mark' => '9.01','p_group' => 1,);
$arrPage[] = array('id' => '57', 'name' => '推广页管理', 'url' => '/other/promote_list/index', 'parent' => 9, 'preurl' => 'otherpromote_list', 'type' => array(1,2,4,5), 'mark' => '9.02','p_group' => 2,);
$arrPage[] = array('id' => '80', 'name' => '推广页基板', 'url' => '/other/promote_manage/index', 'parent' => 9, 'preurl' => 'otherpromote_manage', 'type' => array(1,2,4,5), 'mark' => '9.03','p_group' => 3,);
$arrPage[] = array('id' => '80', 'name' => '推广游戏排行榜', 'url' => '/other/promote_rec/index', 'parent' => 9, 'preurl' => 'otherpromote_rec', 'type' => array(1,2,4,5), 'mark' => '9.04','p_group' => 4,);
$arrPage[] = array('id' => '80', 'name' => '最新开服列表', 'url' => '/other/promote_server/index', 'parent' => 9, 'preurl' => 'otherpromote_server', 'type' => array(1,2,4,5), 'mark' => '9.05','p_group' => 5,);
$arrPage[] = array('id' => '85', 'name' => '(论)flash素材', 'url' => '/other/bbs_flash/index', 'parent' => 9, 'preurl' => 'otherbbs_flash', 'type' => array(1,2,4,5,), 'mark' => '9.06','p_group' => 6,);
$arrPage[] = array('id' => '60', 'name' => '(论)轮播图片', 'url' => '/index/bbs/index', 'parent' => 9, 'preurl' => 'indexbbs', 'type' => array(1, 4,5,2), 'mark' => '1.12','p_group' => 7,);
$arrPage[] = array('id' => '60', 'name' => '聚享游兑换记录', 'url' => '/other/jxy_exchange/index', 'parent' => 9, 'preurl' => 'otherjxy_exchange', 'type' => array(1, 4,5,2), 'mark' => '1.12','p_group' => 8,);
$arrPage[] = array('id' => '60', 'name' => '用户登陆统计', 'url' => '/other/statistic_loginuser/index', 'parent' => 9, 'preurl' => 'otherstatistic_loginuser', 'type' => array(1, 4,5,2), 'mark' => '1.12','p_group' => 9,);


/*
没过滤之前赋值，并去除管理员和权限模板这两个菜单,
 */
$powerPage = $arrPage;
unset($powerPage[11]);
unset($powerPage[12]);

$GLOBALS['tpl']->assign('firstArrPage', $powerPage);

$prePath = $segments['mod'] . $segments['act'];



if($segments['mod']!="login"){
     $permission = json_decode($GLOBALS['uinfo']['permission'], true)?json_decode($GLOBALS['uinfo']['permission'], true):array();
     // 不管有没有其他权限都设定首页显示的权限
        $show_array[] = "01";
        $show_array[] = "1.01";
        $modify_array = array();
        foreach ($permission as $key => $value) {
             if($value&&is_array($value)){
                $show_array[] = $key;
                //只要主菜单被选中，那么就显示主菜单，因为主菜单默认是index页面
                $show_array[] = strval($key+0.01);
                foreach ($value as $k => $v) {
                    if($k!= strval($key+0.01)){
                          $show_array[] = $k;
                    }

                	$modify_right = explode('|',$v)[1];
                	if($modify_right){
                		$modify_array[] = $k;
                	}

            }
        }
    }

    $prePath = $segments['mod'] . $segments['act'];
    foreach ($arrPage as $key => $value) {
        $fullUrl = explode('/', $value['url']);
        $expUrl = $fullUrl[1] . $fullUrl[2];
        $modify_list[$value['preurl']] = $value['mark'];
        $value['type'] = $value['type'] ? $value['type'] : array();
        $show_array = $show_array ? $show_array : array();

        if ((!in_array($GLOBALS['uinfo']['type'], $value['type']) || !in_array($value['mark'], $show_array))&&intval($GLOBALS['uinfo']['type']) != 1) {

            unset($arrPage[$key]);
        }
        if ($expUrl == $prePath && !in_array($GLOBALS['uinfo']['type'], $value['type'])&&intval($GLOBALS['uinfo']['type']) != 1) {
            show_error('对不起你没有权限访问');
        }
    }

        if (!in_array($modify_list[$prePath], $show_array)&&intval($GLOBALS['uinfo']['type']) != 1&&$segments['act']!="script"&&($prePath!="uploadindex")) {
            show_error('对不起你没有权限访问');
        }




    $GLOBALS['modify_list'] = $modify_list;
    $GLOBALS['modify_array'] = $modify_array;
}


    function check_modify($mod,$act,$ac,$modify_list,$modify_array){
    	    if($ac!="index"&&intval($GLOBALS['uinfo']['type']) !==1&&$mod!="login"){
			    $url = $mod.$act;
			    $right = $modify_list[$url];
			   if(!in_array($right, $modify_array)&&$url!="indexscript"&&$url!="uploadindex"){
			        show_error('对不起你没有权限修改');
		        }
            }
    }

    check_modify($segments['mod'], $segments['act'], $segments['ac'], $GLOBALS['modify_list'], $GLOBALS['modify_array']);

$GLOBALS['tpl']->assign('arrPage', $arrPage);
$GLOBALS['tpl']->assign('prePath', $prePath);

?>
