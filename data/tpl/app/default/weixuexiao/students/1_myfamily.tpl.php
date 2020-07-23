<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="no" />
<meta name="format-detection" content="telephone=no" />
<meta name="HandheldFriendly" content="true" />
<link rel="stylesheet" type="text/css" href="<?php echo MODULE_URL;?>public/mobile/css/myfamily.css" />
<?php  echo register_jssdks();?>
<style type="text/css">
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); }
.header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } 
.header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } 
.header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } 
.mainColor { background: #06c1ae !important; } 
.header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
.header .m a i {float: left;margin: 23px 0 0 5px;width: 0;height: 0;border-width: 6px 6px 0;border-style: solid;border-color: white transparent transparent;position: absolute;}		
</style>
<title><?php  echo $school['title'];?></title>
</head>
<body>
<div id="titlebar" class="header mainColor">
	<div class="l">
		<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a>
	</div>
	<div class="m">
		<a id="Changesf">
			<span style="font-size: 18px">已经绑定的家人</span>
		</a>
	</div>
</div> 
<div class="my_family" id="titlebar_bg">
    <div class="my_family_p">
        <a>
            <div class="add_child"><?php  echo $language['myfamily_dqxs'];?></div>
        </a>
        <div class="p_head_pir">
            <a href="<?php  echo $this->createMobileUrl('myinfo', array('schoolid' => $schoolid, 'id' => $userss), true)?>">
                <img src="<?php  if(!empty($students['icon'])) { ?><?php  echo toimage($students['icon'])?><?php  } else { ?><?php echo OSSURL;?>public/mobile/img/mask_bg2.png<?php  } ?>" />
                
            </a>
        </div>
        <div class="child_name"><?php  echo $students['s_name'];?> <span><?php  echo $mybanji['sname'];?></span></div>
        <div class="class_name"><?php  echo $school['title'];?></div>
    </div>
</div>
<?php  if(is_array($myfamily)) { foreach($myfamily as $item) { ?>
<a style="display: block; zoom: 1; overflow: auto;">
	<div class="family_head">
		<div class="family_head_pir float_left">
			<img src="<?php  echo toimage($item['icon'])?>" />
		</div>
		<div class="family_head_text ">
			<div class="family_text family_name">
				<span><?php  if($item['realname']) { ?><?php  echo $item['realname'];?><?php  } else { ?><?php  echo $item['nickname'];?><?php  } ?></span><?php  if($item['guanxi']) { ?>(<?php  echo $item['guanxi'];?>)<?php  } ?>
			</div>
			<div class=" family_text family_phone">手机:<?php  if($item['mobile']) { ?><?php  echo $item['mobile'];?><?php  } else { ?>未填写<?php  } ?></div>
		</div>
		<div class="clear"></div>
	</div>
</a>
<?php  } } ?>
<div style="height: 100px;"></div>
<?php  include $this->template('footer');?>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<script type="text/javascript">
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		$("#titlebar_bg").css("margin-top","5px");
		document.title="我的家庭";
	}
}, 100);

</script>
<script>
WeixinJSHideAllNonBaseMenuItem();
/**微信隐藏工具条**/
function WeixinJSHideAllNonBaseMenuItem(){
	if (typeof wx != "undefined"){
		wx.ready(function () {
			
			wx.hideAllNonBaseMenuItem();
		});
	}
}
</script>