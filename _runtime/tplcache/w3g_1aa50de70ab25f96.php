<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <?php $headtitle=$GLOBALS['ts']['site']['site_name']; ?>
    <title><?php echo $headtitle;?></title>
    <!--<base href="__APP__/" />-->
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="__APP__/css/pure.css">
    <link rel="stylesheet" href="__APP__/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="__APP__/css/pureUI.css?t=1.18">
    <link rel="stylesheet" type="text/css" href="__APP__/css/ts.css"/>
    <!--TS-U function-->
    <script type="text/javascript">
        var SITE_URL  = '<?php echo SITE_URL; ?>';
        //载入函数
        var U = function(url, params) {
            var website = SITE_URL+'/index.php';
            url = url.split('/');
            if(url[0]=='' || url[0]=='@')
                url[0] = APPNAME;
            if (!url[1])
                url[1] = 'Index';
            if (!url[2])
                url[2] = 'index';
            website = website+'?app='+url[0]+'&mod='+url[1]+'&act='+url[2];
            if(params) {
                params = params.join('&');
                website = website + '&' + params;
            }
            return website;
        };
        var _static = '__APP__';
    </script>
    <script src="__APP__/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="__APP__/js/appframework.js"></script>
    <script src="__APP__/js/jquery.tap.min.js"></script>
    <script src="__APP__/js/iscroll.js"></script>
    <script src="__APP__/js/zepto.js"></script>
    <!--script src="__THEME__/js/jquery-1.7.1.min.js?v=<?php echo ($site["sys_version"]); ?>"></script-->
    <!--<script src="__THEME__/js/core.wap.js?v=<?php echo ($site["sys_version"]); ?>"></script>-->

    <!--<script src="__THEME__/js/core.js?v=<?php echo ($site["sys_version"]); ?>"></script>-->

    <!--<script src="__THEME__/js/module.wap.js?v=<?php echo ($site["sys_version"]); ?>"></script>-->

    <!--<script src="__THEME__/js/module.js?v=<?php echo ($site["sys_version"]); ?>"></script>-->

    <!--script src="__THEME__/js/common.js?v=<?php echo ($site["sys_version"]); ?>"></script>
    <script src="__THEME__/js/module.js?v=<?php echo ($site["sys_version"]); ?>"></script>
    <script src="__THEME__/js/core.js?v=<?php echo ($site["sys_version"]); ?>"></script-->
    <!--<script src="__APP__/plugins/af.touchEvents.js"></script>-->
    <!--<script src="__APP__/js/ui.js?t=1.16-dev"></script>-->
    <script src="__APP__/js/ui4jq.js"></script>
    <script src="__APP__/js/basic.js?t=1.03"></script>
    <script src="__APP__/js/app.js?t=1.06-dev"></script>

<script>
/**
 * 全局变量
 */
var SITE_URL  = '<?php echo SITE_URL; ?>';
var UPLOAD_URL= '<?php echo UPLOAD_URL; ?>';
var THEME_URL = '__THEME__';
var APPNAME   = '<?php echo APP_NAME; ?>';
var MID       = '<?php echo $mid; ?>';
var UID       = '<?php echo $uid; ?>';
var initNums  =  '<?php echo $initNums; ?>';
var SYS_VERSION = '<?php echo $site["sys_version"]; ?>'
var ISWAP = 1;
// Js语言变量
var LANG = new Array();
</script>
<?php if(!empty($langJsList)) { ?>
<?php if(is_array($langJsList)): ?><?php $i = 0;?><?php $__LIST__ = $langJsList?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><script src="<?php echo ($vo); ?>?v=<?php echo ($site["sys_version"]); ?>"></script><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
<?php } ?>
<script type="text/javascript" src="__APP__/js/form.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script type="text/javascript" src="__APP__/js/core.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script type="text/javascript" src="__THEME__/js/module.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/js.php?t=js&f=jquery.form.js,common.js,module.js,module.common.js,jwidget_1.0.0.js,jquery.atwho.js,jquery.caret.js,ui.core.js,plugins/core.comment.js,plugins/core.digg.js&v=<?php echo ($site["sys_version"]); ?>.js"></script>
<script src="__THEME__/js/plugins/core.comment.js?v=<?php echo ($site["sys_version"]); ?>"></script>
<script src="__THEME__/js/plugins/core.digg.js?v=<?php echo ($site["sys_version"]); ?>"></script>
</head>
<body>
<div id="wechat_bar" class="hide">
    <div id="wechat_back" class="fa fa-chevron-left"></div>
    <div id="wechat_forward" class="fa fa-chevron-right"></div>
    <div class="fa"></div>
    <div id="wechat_menu" class="fa fa-bars"></div>
</div>
<div id="menu">
    <?php if( !isset($_SESSION["mid"])): ?><div class="pure-menu pure-menu-open">
        <ul>
            <li class="pure-menu-selected">
                <a href="<?php echo U('w3g/Public/home');?>">
                    <div class="sidebar-ico sidebar-home"></div>
                    <div>广场</div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('w3g/Public/login');?>">
                    <div class="sidebar-ico sidebar-login"></div>
                    <div>登录</div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('w3g/Public/register');?>">
                    <div class="sidebar-ico sidebar-register"></div>
                    <div>注册帐号</div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('w3g/Public/about');?>">
                    <div class="sidebar-ico sidebar-about"></div>
                    <div>关于我们</div>
                </a>
            </li>
        </ul>
    </div><?php endif; ?>
<?php if(isset($_SESSION["mid"])): ?><?php echo W('UserInformation', array('uid'=>$mid, 'tpl'=>'w3gTop', 'isReturn'=>$isReturn));?>
    <div class="pure-menu pure-menu-open">
        <ul>
            <li <?php if($_GET['mod']=='Public' && $_GET['act'] == 'home'){ ?>class="pure-menu-selected"<?php } ?>>
                <a href="<?php echo U('w3g/Public/home');?>">
                    <div class="sidebar-ico sidebar-home"></div>
                    <div>广场</div>
                </a>
            </li>
            <li <?php if($_GET['mod']=='Index' && ($_GET['act'] == 'all' || $_GET['act'] == 'weibo')){ ?>class="pure-menu-selected"<?php } ?>>
                <a href="<?php echo U('w3g/Index/index');?>">
                    <div class="sidebar-ico sidebar-weibo"></div>
                    <div>朋友圈</div>
                </a>
            </li>
            <li <?php if($_GET['mod']=='Channel'){ ?>class="pure-menu-selected"<?php } ?>>
                <a href="<?php echo U('w3g/Channel/index');?>">
                    <div class="sidebar-ico sidebar-channel"></div>
                    <div>频道</div>
                </a>
            </li>
            <li <?php if($_GET['mod']=='Weiba'){ ?>class="pure-menu-selected"<?php } ?>>
                <a href="<?php echo U('w3g/Weiba/index');?>">
                    <div class="sidebar-ico sidebar-weiba"></div>
                    <div>微吧</div>
                </a>
            </li>
            <li <?php if($_GET['mod']=='People'){ ?>class="pure-menu-selected"<?php } ?>>
            <a href="<?php echo U('w3g/People/index');?>">
                <div class="sidebar-ico sidebar-people"></div>
                <div>找伙伴</div>
            </a>
            </li>
            <li <?php if($_GET['act']=='discover'){ ?>class="pure-menu-selected"<?php } ?>>
            <a href="<?php echo U('w3g/Public/discover');?>">
                <div class="sidebar-ico sidebar-discover"></div>
                <div>发现</div>
            </a>
            </li>
            <li <?php if($_GET['act']=='sign_in'){ ?>class="pure-menu-selected"<?php } ?>>
                <a href="<?php echo U('w3g/Public/sign_in');?>">
                    <div class="sidebar-ico sidebar-signin"></div>
                    <div>签到</div>
                </a>
            </li>
            <li <?php if($_GET['act']=='msgbox'){ ?>class="pure-menu-selected"<?php } ?>>
                <a href="<?php echo U('w3g/Index/msgbox');?>">
                    <div class="sidebar-ico sidebar-message"></div>
                    <div class="sidebar-tips" id="messageSidr">消息<i class="num"></i></div>
                </a>
            </li>
            <li <?php if($_GET['mod']=='Setting'){ ?>class="pure-menu-selected"<?php } ?>>
                <a href="<?php echo U('w3g/Setting/index');?>">
                    <div class="sidebar-ico sidebar-setting"></div>
                    <div>设置</div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('w3g/Public/log_out');?>">
                    <div class="sidebar-ico sidebar-logout"></div>
                    <div>退出</div>
                </a>
            </li>
        </ul>
    </div><?php endif; ?>
</div>
<div id="header">
    <div id="header-buttons">
        <div id="back" class="header-menu-link"></div>
        <div id="messageLink" class="header-menu-link"><a href="<?php echo U('w3g/Index/msgbox');?>"><i class="num"></i></a></div>
        <div id="menuLink" class="header-menu-link"></div>
    </div>
    <h1>
        <!--<?php echo $headtitle;?>-->
        <img src="<?php if($logo) { ?><?php echo ($logo); ?><?php } else { ?>__APP__/img/sys/logo.png<?php } ?>" alt="<?php echo $headtitle;?>">
    </h1>
</div>
<div id="layout">
    <!-- Menu toggle -->
    <!--<a id="menuLink" class="menu-link">-->
        <!-- Hamburger icon -->
        <!--<span></span>-->
    <!--</a>-->
    <div id="main">
<div id="content" class="content">
<div id="list" data-title="分享" data-selected="true" data-footer="none" data-rememberScroll="true" data-load="TS.app.weibo.func.listLoad()">
    <header>
        <div id="header-buttons">

            <div id="messageLink" class="header-menu-link"><a href="<?php echo U('w3g/Index/msgbox');?>"><i class="num"></i></a></div>
<div id="menuLink" class="header-menu-link"></div>
        </div>
        <h1>
            朋友圈
        </h1>
    </header>
    <!-- 主体内容 -->
    <div id="wrapper" data-new="<?php echo ($maxWeioboID); ?>" data-load="<?php echo ($minWeioboID); ?>" data-url="<?php echo U(APP_NAME.'/'.MODULE_NAME.'/'.ACTION_NAME);?>" data-rememberScroll="true">
        <div id="ts-list">
            <div id="pull-down"><i class="icon">&nbsp;</i><span></span></div>
            <div id="weibo-type-nav" class="pure-g row">
                <div class="pure-u-1-3 weibo-type-nav-item active">全部</div>
                <div class="pure-u-1-3 weibo-type-nav-item" onclick="location.href=U('w3g/Index/fri_weibo')">关注</div>
                <div class="pure-u-1-3 weibo-type-nav-item"  onclick="location.href=U('w3g/Index/rec')">推荐</div>
                <div class="pure-u-1-3 ani" id="weibo-type-nav-bar"></div>
            </div>
            <?php $canfeeddel = CheckPermission('core_normal','feed_del');
$adminfeeddel = CheckPermission('core_admin','feed_del'); ?>
<?php if(is_array($weibolist)): ?><?php $i = 0;?><?php $__LIST__ = $weibolist?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$feed): ?><?php ++$i;?><?php $mod = ($i % 2 )?><div id="weibo_detail-<?php echo ($feed["feed_id"]); ?>" class="row">
        <div id="weibo-detail-<?php echo ($feed["feed_id"]); ?>" class="microblog-item ts-listen" data-listen="weibo-detail-<?php echo ($feed["feed_id"]); ?>" data-id="<?php echo ($feed["feed_id"]); ?>">
        	
            <!-- header -->
            <div class="media m-i-header">
                <div class="pull-left m-i-h-avatar ts-listen" data-listen="weibo-userpage-<?php echo ($feed["uid"]); ?>">
                    <img class="media-object m-i-h-a-img" src="<?php echo ($feed["avatar_small"]); ?>">
                    <?php if($feed['user_gicon']): ?><a href="javascript:;" title="<?php echo ($feed['user_gicon']['user_group_name']); ?>" class="group_icon_only"><img alt="<?php echo ($feed['user_gicon']['user_group_name']); ?>" src="<?php echo ($feed['user_gicon']['user_group_icon_url']); ?>" ></a><?php endif; ?>
                </div>
                <div class="media-body m-i-h-info ts-listen" data-listen="weibo-userpage-<?php echo ($feed["uid"]); ?>">
                    <div class="m-i-h-i-l-name"><?php echo ($feed["uname"]); ?></div>
                    <div class="m-i-h-i-l-description"><?php echo (friendlydate($feed['publish_time'])); ?>&nbsp;&nbsp;<?php echo ($feed["from"]); ?>&nbsp;&nbsp;<?php if($adminfeeddel || ($feed['uid'] == $GLOBALS['ts']['mid'] && $canfeeddel)): ?><a href="javascript:;" class="m-i-h-i-l-del ts-listen" data-listen="weibo-list2del-<?php echo ($feed["feed_id"]); ?>"><?php echo L('PUBLIC_STREAM_DELETE');?></a><?php endif; ?></div>
                </div>
                <div class="m-i-h-right"></div>
            </div>
            <!-- body -->
            <div class="m-i-body">
                <p class="m-i-b-p" id="m-i-b-p-<?php echo ($feed["feed_id"]); ?>"><?php echo ($feed['content']); ?></p>
            </div>
        </div>
                <?php switch($feed['type']){
                        case 'postimage':
                            switch(count($feed['attach'])){
                                case 1:
                                    $img_class='m-i-b-p-100';
                                    break;
                                case 2:
                                    $img_class='m-i-b-p-50';
                                    break;
                                case 4:
                                    $img_class='m-i-b-p-50';
                                    break;
                                default:
                                    $img_class='m-i-b-p';
                                    break;
                            }
                            echo '<div class="'.$img_class.' ts-listen" data-listen="weibo-detial-'.$feed['feed_id'].'">';
                            foreach($feed['attach'] as $k => $v){
                                //dump($v);
                                if((count($feed['attach']) == 4) || (count($feed['attach']) == 2)){
                                    echo '<img src="'.$v['attach_middle_box'].'" alt="" class="ts-listen" data-listen="weibo-pic-view" data-src="'.$v['attach_url'].'" data-index="'.$k.'"/>';
                                }elseif(count($feed['attach']) == 1){
                                    echo '<img src="'.$v['attach_middle'].'" alt="" class="ts-listen" data-listen="weibo-pic-view" data-src="'.$v['attach_url'].'" data-index="'.$k.'"/>';
                                } else {
                                    echo '<img src="'.$v['attach_small'].'" alt="" class="ts-listen" data-listen="weibo-pic-view" data-src="'.$v['attach_url'].'" data-index="'.$k.'"/>';
                                }
                            }
                            echo '</div>';
                            break;
                        case 'repost':
                            $more = '';
                            if($attachCount > 1) {
                                $more = '<span class="pic-more">'.$attachCount.'photos</span>';
                            }
                            if($feed['transpond_data']['attach'] > 0 && $feed['transpond_data']['type'] == 'postimage'){
                                echo '<div id="repost-'.$feed[feed_id].'" class="m-i-b-p m-i-b-p-repost ts-listen" style="padding:0;" data-listen="weibo-detail-'.$feed['api_source']['feed_id'].'"><img class="m-i-b-r-p" style="height:100%;float:left;width:33.3333%;max-width:33.3333%;" src="'.$feed['transpond_data']['attach'][0]['attach_small'].'" /><div style="float:right;width: 63%;margin-left: 3.6666%;"><div class="m-i-h-i-l-name" style="font-size:14px;color:#7e7e7e">'.$feed['transpond_data']['uname'].' <span style="font-size:12px;color:#9a9a9a">'.FriendlyDate($feed['transpond_data']['publish_time']).'</span></div><p style="margin:0;font-size:1em;color:#9a9a9a;padding-right:5px;overflow:hidden; height:66px;line-height:22px;">'.getShort($feed['transpond_data']['feed_content'],40).'</p></div></div>';
                            } elseif($feed['transpond_data']['attach'] > 0 && $feed['transpond_data']['type'] == 'postfile') {
                                echo '<div id="repost-'.$feed[feed_id].'" style="display:block;background:none;padding:0" class="m-i-b-p m-i-b-p-repost ts-listen" data-listen="weibo-detail-'.$feed['api_source']['feed_id'].'">';
                                for($i=0;$i<count($feed['api_source']['attach']);$i++){ ?>
                                    <a href="<?php echo U('widget/Upload/down', array('attach_id'=>$feed['api_source']['attach'][$i]['attach_id']));?>" target="_blank" class="downloadbox">
                                        <div class="pure-g">
                                            <div class="d-name pure-u-3-4">
                                                <?php echo ($feed['transpond_data']['attach'][$i]['attach_name']); ?>
                                                <span><?php echo ($feed['transpond_data']['attach'][$i]['size']); ?></span>
                                            </div>
                                            <div class="pure-u-1-4">
                                                <span class="fa fa-download"></span>
                                            </div>
                                        </div>
                                    </a>
                                <?php }
                                echo   '</div>';
                            } else {
                                echo '<div id="repost-'.$feed[feed_id].'" class="m-i-b-p m-i-b-p-repost ts-listen" style="display:block" data-listen="weibo-detail-'.$feed['api_source']['feed_id'].'"><span>'.$feed['transpond_data']['uname'].'</span>: '.$feed['transpond_data']['content'].'</div>';
                            }
                            break;
                        case 'repost-removed':
                            echo '<div id="repost-'.$feed[feed_id].'" class="m-i-b-p  m-i-b-p-repost"><span class="ts-listen" data-listen="weibo-userpage-'.$feed['transpond_data']['uid'].'">'.$feed['transpond_data']['uname'].'</span>: 这条分享不幸被删除了...</div>';
                            break;
                        case 'weiba_repost':
                        echo '<p id="repost-'.$feed[feed_id].'" class="m-i-b-p  m-i-b-p-repost">转载自<span class="ts-listen" data-listen="weibo-weibapage-'.$feed['api_source']['feed_id'].'">'.$feed['api_source']['weiba_name'].'</span><font class="ts-listen" data-listen="weibo-weibadetail-'.$feed['api_source']['source_id'].'">'.$feed['api_source']['title'].'</font><p>';
                            break;
                        case 'weiba_repost-removed':
                            echo '<p id="repost-'.$feed[feed_id].'" class="m-i-b-p  m-i-b-p-repost">原帖子已删除<p>';
                            break;
                        case 'postfile':
                            echo '<div style="padding:0 0.75em; margin:0 0 0.75em 3.25em">';
                            for($i=0;$i<count($feed['attach']);$i++){
                                //dump($feed['attach'][$i]); ?>
                                <a href="<?php echo U('widget/Upload/down', array('attach_id'=>$feed['attach'][$i]['attach_id']));?>" target="_blank" class="downloadbox">
                                    <div class="pure-g">
                                        <div class="d-name pure-u-3-4">
                                            <?php echo ($feed['attach'][$i]['attach_name']); ?>
                                            <span><?php echo ($feed['attach'][$i]['size']); ?></span>
                                        </div>
                                        <div class="pure-u-1-4">
                                            <span class="fa fa-download"></span>
                                        </div>
                                    </div>
                                </a>
                                <?php }
                            echo '</div>';
                            break;
                        case 'repost-postfile':
                            echo '<div style="padding:0 0.75em;">';
                            for($i=0;$i<count($feed['api_source']['attach']);$i++){ ?>
                            <a href="<?php echo U('widget/Upload/down', array('attach_id'=>$feed['api_source']['attach'][$i]['attach_id']));?>" target="_blank" class="downloadbox">
                                <div class="pure-g">
                                    <div class="d-name pure-u-3-4">
                                        <?php echo ($feed['transpond_data']['attach'][$i]['attach_name']); ?>
                                        <span><?php echo ($feed['transpond_data']['attach'][$i]['size']); ?></span>
                                    </div>
                                    <div class="pure-u-1-4">
                                        <span class="fa fa-download"></span>
                                    </div>
                                </div>
                            </a>
                            <?php //var_dump($feed['api_source']['attach'][$i]);
                            }
                            echo '</div>';
                            break;
                        case 'postvideo':
                            if(preg_match("/(thinksns.com)/i", $feed['flashvar'])){
                                echo '<div class="m-i-b-p-video-box ts-listen" data-video="'.$feed['flashvar'].'" data-listen="weibo-video-view">';
                                echo '<div class="playico fa fa-play"></div>';
                                echo '<img src="'.$feed['flashimg'].'" alt="video" class="m-i-b-p-video-img"/>';
                                echo '</div>';
                            }
                            break;
                        case 'repost-postvideo':
                            echo '<div id="repost-'.$feed[feed_id].'" class="m-i-b-p m-i-b-p-repost"><span>'.$feed['transpond_data']['uname'].'</span>: '.$feed['transpond_data']['content'];
                                if(preg_match("/(thinksns.com)/i", $feed['transpond_data']['flashvar'])){
                                echo '<div class="m-i-b-p-video-box ts-listen" data-video="'.$feed['transpond_data']['flashvar'].'" data-listen="weibo-video-view">';
                                echo '<div class="playico fa fa-play"></div>';
                                echo '<img src="'.$feed['transpond_data']['flashimg'].'" alt="video" class="m-i-b-p-video-img"/>';
                                echo '</div>';
                                }
                            echo '</div>';
                            break;
                        default:
                            //dump($feed['type']);
                            break;
                    } ?>

        <div id="m-i-footer-<?php echo ($feed["feed_id"]); ?>" class="m-i-footer">
            <div class="pure-g" data-uname="<?php echo ($feed["uname"]); ?>" data-uid="<?php echo ($feed["uid"]); ?>">
                <div class="pure-u-1-4 ts-textcenter ts-listen" data-listen="weibo-list2retweet-<?php echo ($feed["feed_id"]); ?>" data-share="1" data-origin="<?php echo ($feed["cancomment"]); ?>" data-repost="<?php echo ($feed['repost']); ?>">
                    <div class="weibo-item-btn weibo-item-btn-retweet"></div>
                    <?php if(($feed["repost_count"])  !=  "0"): ?><span class="ts-number"><?php echo ($feed['repost_count']); ?></span><?php endif; ?>
                </div>
                <?php if(($feed["comment_count"])  !=  "0"): ?><div class="pure-u-1-4 ts-textcenter ts-listen"  data-listen="weibo-detail-<?php echo ($feed["feed_id"]); ?>" data-share="1" data-origin="<?php echo ($feed["cancomment"]); ?>" data-curorigin="<?php echo ($feed["cancomment_current"]); ?>" data-repost="<?php echo ($feed['repost']); ?>">
                    <div class="weibo-item-btn weibo-item-btn-reply"></div>
                    <span class="ts-number"><?php echo ($feed['comment_count']); ?></span>
                </div>
                <?php else: ?>
                    <div class="pure-u-1-4 ts-textcenter ts-listen" data-listen="weibo-list2reply-<?php echo ($feed["feed_id"]); ?>" data-share="1" data-origin="<?php echo ($feed["cancomment"]); ?>" data-curorigin="<?php echo ($feed["cancomment_current"]); ?>" data-repost="<?php echo ($feed['repost']); ?>">
                        <div class="weibo-item-btn weibo-item-btn-reply"></div>
                        <!-- <span class="ts-number"><?php echo ($feed['comment_count']); ?></span> -->
                    </div><?php endif; ?>
                <?php if($feed['is_digg']==1){
                        $purelight='pure-light';
                    }else{
                        $purelight='';
                    } ?>
                <div class="pure-u-1-4 ts-textcenter ts-listen <?php echo ($purelight); ?>" data-listen="weibo-list2digg-<?php echo ($feed["feed_id"]); ?>" data-isdig="<?php echo ($feed['is_digg']); ?>">
                    <div class="weibo-item-btn weibo-item-btn-like"></div>
                    <span class="ts-number" <?php if(($feed["digg_count"])  ==  "0"): ?>style="display:none;"<?php endif; ?>><?php echo ($feed['digg_count']); ?></span>
                </div>
                <?php if($feed['favorited']==1){
                    $fa_star='fa-star';
                    $purelight='pure-light';
                    }else{
                    $fa_star='fa-star-o';
                    $purelight='';
                    } ?>
                <div class="pure-u-1-4 ts-textcenter ts-listen <?php echo ($purelight); ?>" data-listen="weibo-list2favorite-<?php echo ($feed["feed_id"]); ?>" data-isstar="<?php echo ($feed['favorited']); ?>" data-type="<?php echo ($feed["app_row_table"]); ?>">
                    <div class="weibo-item-btn weibo-item-btn-star"></div>
                </div>
            </div>
        </div>
        <div class="ts-bottom-line"></div>
    </div><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
            <div id="pull-up"><i class="icon">&nbsp;</i><span>正在加载...</span></div>
        </div>
    </div>
</div>
        <!--sys-->
        <!--new weibo panel-->
        <div id="new-weibo" data-title="发分享"  data-footer="none" class="panel TS-post-panel">
            <header>
                <div id="header-buttons">
                    <div class="header-menu-link" id="hmp-cancel">
                        <a class="ts-listen" data-listen="weibo-goback-true">取消</a>
                    </div>
                    <div class="header-menu-link" id="hmp-send">
                        <a class="ts-listen sendBtn disable fc4" data-listen="weibo-dopost-true">发送</a>
                    </div>
                </div>
                <h1 style="text-align:center;padding-left:0;">
                    发分享
                </h1>
            </header>
            <iframe src="<?php echo U('w3g/Index/ajax_iframe');?>" id="ajax_iframe"></iframe>
            <div class="pure-form send_box">
                <textarea name="new-webo-content" id="new-weibo-textarea" oninput="TS.app.weibo.listen.checknums(true, this, '', true);" onpropertychange="TS.app.weibo.listen.checknums(true, this, '', true);" class="ts-textarea ts-listen" rows="4" placeholder="这一刻，我想说......" data-listen="weibo-checknums-true"><?php if($topics['topic_name']){echo '#'.$topics['topic_name'].'#';} ?></textarea>
                <div model-node="numsLeft" class="num"><?php echo ($initNums); ?></div>
            </div>
            <div class="ts-footer">
                <!-- 图片 --><a class="icon imgbutton ts-listen" data-listen="weibo-upload-img" data-for="ts-upload-img-box" id="new-weibo-upload"><i class="fa-btn fa-btn-picture"></i></a>
                <!-- @ --><a class="icon atbutton ts-listen" data-listen="weibo-atwho-show" data-for="new-weibo-textarea"><i class="fa-btn fa-btn-at"></i></a>
                <!-- 话题 --><a class="icon topicbutton ts-listen" data-listen="weibo-topic-show" data-for="new-weibo-textarea"><i class="fa-btn fa-btn-topic"></i></a>
                <!-- 表情 --><a class="icon facelistbutton ts-listen" data-listen="weibo-facelist-show"><i class="fa-btn fa-btn-smile"></i></a>
                <!-- <a class="icon pure-button pure-button-primary ts-listen" data-listen="weibo-dopost-true">发送</a> -->
            </div>
            <div id="ts-upload-img-box"></div>
        </div>
        <!--频道分享-->
        <div id="new-channel-weibo" data-title="发分享"  data-footer="none" class="panel TS-post-panel">
            <header>
                <div id="header-buttons">
                    <div class="header-menu-link" id="hmp-cancel">
                        <a class="ts-listen" data-listen="weibo-goback-true">取消</a>
                    </div>
                    <div class="header-menu-link" id="hmp-send">
                        <a class="ts-listen sendBtn disable fc4" data-listen="weibo-feedpost-<?php echo ($cid); ?>">发送</a>
                    </div>
                </div>
                <h1 style="text-align:center;padding-left:0;">
                    发分享
                </h1>
            </header>
            <iframe src="<?php echo U('w3g/Index/ajax_iframe_channel');?>" id="ajax_iframe_channel"></iframe>
            <div class="pure-form send_box">
                <p class="channel_type">投稿到－<?php echo ($cate["title"]); ?></p>
                <textarea name="new-webo-content" id="new-channel-textarea" class="ts-textarea ts-listen" rows="4" placeholder="这一刻，我想说......" data-listen="weibo-checknums-true"></textarea>
                <div model-node="numsLeft" class="num"><?php echo ($initNums); ?></div>
            </div>
            <div class="ts-footer">
                <!-- 图片 --><a class="icon imgbutton ts-listen" data-listen="weibo-upload-img" data-for="ts-upload-img-box_channel" id="new-weibo-upload"><i class="fa-btn fa-btn-picture"></i></a>
                <!-- @ --><a class="icon atbutton ts-listen" data-listen="weibo-atwho-show" data-for="new-channel-textarea"><i class="fa-btn fa-btn-at"></i></a>
                <!-- 话题 --><a class="icon topicbutton ts-listen" data-listen="weibo-topic-show" data-for="new-channel-textarea"><i class="fa-btn fa-btn-topic"></i></a>
                <!-- 表情 --><a class="icon facelistbutton ts-listen" data-listen="weibo-facelist-show"><i class="fa-btn fa-btn-smile"></i></a>
                <!-- <a class="icon pure-button pure-button-primary ts-listen" data-listen="weibo-dopost-true">发送</a> -->
            </div>
            <div id="ts-upload-img-box_channel"></div>
        </div>
        <!--reply panel-->
        <div id="reply" data-title="发评论" data-footer="none" class="panel TS-post-panel" data-load="focus">
            <header>
                <div id="header-buttons">
                    <div class="header-menu-link" id="hmp-cancel">
                        <a class="ts-listen" data-listen="weibo-goback-true">取消</a>
                    </div>
                    <div class="header-menu-link" id="hmp-send">
                        <a id="ts-reply-submit" class="ts-listen sendBtn disable fc4" data-listen="weibo-doreply-list">发送</a>
                    </div>
                </div>
                <h1 style="text-align:center;padding-left:0;">
                    发评论
                </h1>
            </header>
            <div class="pure-form send_box">
                <textarea name="reply-content" id="reply-textarea" class="ts-textarea ts-listen" rows="4" placeholder="写评论......" data-listen="weibo-checknums-true"></textarea>
                <div model-node="numsLeft" class="num"><?php echo ($initNums); ?></div>
                <div class="ckb">
                        
                    <label id="toShare"><input type="checkbox" class="checkbox" id="ifShareFeed_reply" name="ifShareFeed" value="1"><?php echo L('PUBLIC_SHARETO_STREAM');?></label>
                    
                    
                    <label id="toOrigin" style="display: none;"><input type="checkbox" class="checkbox" id="comment_old_reply" name="comment_old" value="1" />同时评论给原文作者</label>
                    
                </div>
            </div>
            <div class="ts-footer">
                <a class="icon facelistbutton ts-listen" data-listen="weibo-facelist-show"><i class="fa-btn fa-btn-smile"></i></a>
                <!-- <a id="ts-reply-submit" class="icon pure-button pure-button-primary ts-listen" data-listen="weibo-doreply-list">发送</a> -->
            </div>
        </div>

        <!--reply panel-->
        <div id="replyD" data-title="发评论" data-footer="none" class="panel TS-post-panel" data-load="focus">
            <header>
                <div id="header-buttons">
                    <div class="header-menu-link" id="hmp-cancel">
                        <a class="ts-listen" data-listen="weibo-goback-true">取消</a>
                    </div>
                    <div class="header-menu-link" id="hmp-send">
                        <a id="ts-reply-submit" class="ts-listen sendBtn disable fc4" data-listen="weibo-doreply2reply-list">发送</a>
                    </div>
                </div>
                <h1 style="text-align:center;padding-left:0;">
                    发评论
                </h1>
            </header>
            <div class="pure-form send_box">
                <textarea name="reply-content" id="reply-textareaD" class="ts-textarea ts-listen" rows="4" placeholder="写评论......" data-listen="weibo-checknums-true"></textarea>
                <div model-node="numsLeft" class="num"><?php echo ($initNums); ?></div>
                <div class="ckb">
                        
                    <label><input type="checkbox" class="checkbox" id="ifShareFeed_replyD" name="ifShareFeed" value="1"><?php echo L('PUBLIC_SHARETO_STREAM');?></label>
                    
                    
                    <label><input type="checkbox" class="checkbox" id="comment_old_replyD" name="comment_old" value="1" />同时评论给原文作者</label>
                    
                </div>
            </div>
            <div class="ts-footer">
                <a class="icon facelistbutton ts-listen" data-listen="weibo-facelist-show"><i class="fa-btn fa-btn-smile"></i></a>
                <!-- <a id="ts-reply-submit" class="icon pure-button pure-button-primary ts-listen" data-listen="weibo-doreply-list">发送</a> -->
            </div>
        </div>
        
        <!--retweet panel-->
        <div id="retweet" data-title="转发分享" data-footer="none" class="panel TS-post-panel">
            <header>
                <div id="header-buttons">
                    <div class="header-menu-link" id="hmp-cancel">
                        <a class="ts-listen" data-listen="weibo-goback-true">取消</a>
                    </div>
                    <div class="header-menu-link" id="hmp-send">
                        <a class="ts-listen sendBtn disable fc4" data-listen="weibo-doretweet-list">发送</a>
                    </div>
                </div>
                <h1 style="text-align:center;padding-left:0;">
                    转发分享
                </h1>
            </header>
            <div class="pure-form send_box">
                <textarea name="retweet-content" id="retweet-textarea" class="ts-textarea ts-listen" rows="4" placeholder="你想说点什么......" data-listen="weibo-checknums-true"></textarea>
                <div model-node="numsLeft" class="num"><?php echo ($initNums); ?></div>
                <div class="ckb">

                    <label><input type="checkbox" class="checkbox" id="comment_old_retweet" name="comment_old" value='1'>同时作为给<font id="towho">原作者</font>的评论发布</label>
                    
                </div>
            </div>
            <div class="ts-footer">
                <a class="icon facelistbutton ts-listen" data-listen="weibo-facelist-show"><i class="fa-btn fa-btn-smile"></i></a>
                <!-- <a class="icon pure-button pure-button-primary ts-listen" data-listen="weibo-doretweet-list">发送</a> -->
            </div>
        </div>

        <!--pic panel-->
        <div id="pic" data-title="图片预览" data-footer="none" class="panel TS-post-panel" data-footer="none" data-load="TS.app.weibo.func.picViewInit();">
            <div id="pic-view"></div>
            <div id="pic-footer">
                <div id="pic-footer-left" class="fa fa-angle-left ts-listen" data-listen="weibo-picview-prev"></div>
                <div id="pic-footer-center">
                    <span id="pic-footer-now">0</span>
                    /
                    <span id="pic-footer-all">0</span>
                </div>
                <div id="pic-footer-right" class="fa fa-angle-right ts-listen" data-listen="weibo-picview-next"></div>
            </div>
        </div>

        <!--video panel-->
        <div id="video" data-title="视频" data-footer="none" class="panel" data-footer="none" data-load="TS.app.weibo.func.videViewInit();" data-unload="$('#videoview').html('');">
            <div id="videoview"></div>
        </div>

        <!--message panel-->
        <div id="new-message" data-title="发私信" data-footer="none" class="panel" data-footer="none" data-load="TS.app.weibo.func.newMessage.bind();" data-unload="TS.app.weibo.func.newMessage.unbind();">
            <div class="pure-form pure-g">
                <div class="new-message-input">
                    <input class="pure-input-1" id="new-message-reciver" type="text" placeholder="收件人"></input>
                    <div id="msg-userlist">
                        <!-- <div class="msg-userlist-item">hello,world.</div> -->
                    </div>
                </div>
                <div class="new-message-input"><textarea class="pure-input-1" id="new-message-content" placeholder="私信内容..." name="content"></textarea></div>
                <div class="new-message-input"><button class="pure-button pure-button-primary pure-u-1" id="new-message-send" type="button">发送</button></div>
            </div>
        </div>

<!--pureUI panel-->

    </div><!--content-->
</div><!--main-->
        <script>
            (function(){
                TS.cache.profile = {
                    uid:'<?php echo ($profile["uid"]); ?>',
                    uname:'<?php echo ($profile["uname"]); ?>',
                    email:'<?php echo ($profile["email"]); ?>',
                    avatar_original:'<?php echo ($profile["avatar_original"]); ?>',
                    avatar_small:'<?php echo ($profile["avatar_small"]); ?>'
                };
//                $(document).on("touchmove",".pic-view-img",function(e){
//                        console.log(e);
//                });
            })();

        </script>

</div>
    <div class="postentry">
        <?php if(MODULE_NAME == 'Index' && in_array(ACTION_NAME,array('index','rec','fri_weibo','doSearch'))){ ?>
            <a href="#new-weibo" id="postentry">&nbsp;</a>
        <?php }elseif(MODULE_NAME == 'Channel'){ ?>
            <a href="#new-channel-weibo" id="postentry">&nbsp;</a>
        <?php }elseif(MODULE_NAME == 'Weiba'){ ?>
            <?php if(ACTION_NAME == 'postDetail'){ ?>
            <a href="<?php echo U('w3g/Weiba/reply', array('post_id'=>intval($_GET['post_id'])));?>" id="postentry">&nbsp;</a>
            <?php }elseif(!in_array(ACTION_NAME, array('reply', 'post'))){ ?>
            <a href="<?php echo U('w3g/Weiba/post', array('weiba_id'=>intval($_GET['weiba_id'])));?>" id="postentry">&nbsp;</a>
            <?php } ?>
        <?php } ?>
    </div>
    <div id="pure-shadow"></div>
    <div id="footer"></div>
    <div id="custom"></div>
</body>
</html>