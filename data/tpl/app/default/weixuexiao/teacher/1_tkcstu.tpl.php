<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="true" />
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/new_yab1.css?v=1?v=1111" />
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.10.1.min.js?v=4.9"></script>
<?php  echo register_jssdks();?>
<style type="text/css">
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); } .header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } .header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } .header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } .mainColor { background: #06c1ae !important; } .header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
.add_link_box{
width:100%;position: absolute;left:0;top:60px;bottom:0;z-index: 9999;background-color:rgba(0,0,0,0.5);display: none}
.add_link_info_wrap{padding:0 10px;margin:0 auto;display: -webkit-box;-webkit-box-orient:vertical;-webkit-box-pack: center;-webkit-box-align: center;height:100%;}
.my_add_link_inner{width: 100%;height:190px;background-color: #fff;border-radius: 10px;padding: 10px 0;}
.my_add_link_inner h3{text-align: center;color:#666;}
.add_link_wrap{height:35px;line-height: 35px;overflow: hidden;padding: 10px; }
.my_link_title {width: 80px;float: left;color: #666666;}
.my_add_link_txt{height:35px;line-height: 35px;box-sizing: border-box;width:70%;outline: none;border:1px solid #dcdcdc;border-radius: 3px;float:left;}
.add_link_btn_wrap{padding: 10px;overflow:hidden;}
.add_link_btn_sure {float: left;width: 40%;height: 35px;line-height: 35px;background: #06c1ae;font-size: 16px;border-radius: 20px;color: #fff;border: none;padding: 0;margin: 0 5%;outline: none;}
#add_link_btn_cancel {background: #ffb24e;}
.link_title {text-align: center;color: #333333;font-size: 16px;margin-top: 2px;}
.main {margin: 10px 10px;box-shadow: 0px 0px 0px rgba(0,0,0,0);background: #FFF;padding: 0;border-radius: 10px;padding-bottom: 10px;}
.main_text a {cursor: pointer !important;text-decoration: underline !important;color: #0094ff;}
.main img {margin-top: 0px;}
.common_no_audit_status {background-color: initial;}
.baby_diary_img_list {margin-left: 5px;margin-top: 5px;padding-bottom: 10px;}
.baby_diary_img_listOther {margin-left: 0;margin-top: 10px;padding-left: 12px;}
.baby_diary_img_list li {width: 32.5%;height: 70px;overflow: hidden;box-sizing: border-box;padding: 2px;float: left;margin: 0;}
.notifyImgItem {width: 30.5% !important;position: relative;}
.btn_closeImg {position: absolute;width: 10px;top: 0;right: 4px;}
.F_div {right: 30px;bottom:75px}
.F_divs {left: 30px;bottom:75px;width: 60px;height: 60px;background: #ff6665;box-shadow: 1px 1px 2px 0px #909090;border-radius: 50px;position: fixed;}
.baby_diary_img_listOther {padding-left: 10px;border-bottom: 1px solid #f0f0f2;}
#notifyContent {padding: 10px;background-color: white;border: 1px solid #f0f0f2;}
.main_text p, .main_text a {display: inline-block;}
.main, .linkDataUrl {cursor: pointer !important;}
.linkDataUrl {text-decoration: underline !important;}
.pv-img {position: relative;}
.imgDesc {position: absolute;right: 15px;height: 20px;line-height: 20px;font-size: 16px;color: white;text-align: right;z-index: 99;}
p img {margin: 10px 0 !important;} 
.slide_left_menu_bg.show_menu_bg {display: block;-webkit-animation-name: fadeIn;animation-name: fadeIn;-webkit-animation-duration: 600ms;animation-duration: 600ms;-webkit-animation-fill-mode: both;/* animation-fill-mode: both; */}
.slide_left_menu_bg_other.show_menu_bg {display: block;-webkit-animation-name: fadeIn;animation-name: fadeIn;-webkit-animation-duration: 600ms;animation-duration: 600ms;-webkit-animation-fill-mode: both;/* animation-fill-mode: both; */}
.slide_left_menu_bg {width: 100%;z-index: 998;background: rgba(0, 0, 0, 0.5);position: fixed;min-height: 100%;top: 0;left: 0;zoom: 1;overflow: hidden;display: none;height: 100%;z-index: 1000;overflow-y: scroll;}
.slide_left_menu_bg_other {width: 100%;z-index: 998;background: rgba(0, 0, 0, 0.5);position: fixed;min-height: 100%;top: 0;left: 0;zoom: 1;overflow: hidden;display: none;height: 100%;
z-index: 1000;overflow-y: scroll;display: none;}
.slide_left_menu {width: 50%!important;right: 0;background-color: #fff;z-index: 999;min-height: 100%;position: absolute;}
.slide_left_menu_ul_other {width: 100%;border: 1px solid #ccc;border-left: none;border-right: none;box-sizing: border-box;padding: 0 10px;}
.slide_left_menu_ul_other li {height: 50px;line-height: 50px;border-bottom: 1px solid #ccc;font-size: 16px;width: 100%;box-sizing: border-box;padding: 0 10px 0 10px;overflow: hidden;
position: relative;}
.slide_left_menu_ul_other li.act {background: url(<?php echo OSSURL;?>public/mobile/img/be_choose_icon.png) right center no-repeat;background-size: 16px;background-origin: content-box;-moz-background-origin: content-box;-webkit-background-origin: content-box;}
.slide_left_menu_ul li.act {background: url(<?php echo OSSURL;?>public/mobile/img/be_choose_icon_02.png) right center no-repeat;background-size: 16px;background-origin: content-box;-moz-background-origin: content-box;-webkit-background-origin: content-box;}
.slide_left_menu_ul_other li:last-of-type {border-bottom: none;}
.slide_left_menu_ul_other li .user_img {width: 50px;height: 50px;position: absolute;left: -5px;top: 0;box-sizing: border-box;padding: 10px;}
.slide_left_menu_ul_other li .user_img img {width: 100%;height: 100%;border-radius: 50%;}
.slide_left_menu_ul_other li .change_user {width: 40px;height: 100%;position: absolute;right: 0;top: 0;background: url(<?php echo OSSURL;?>public/mobile/img/be_choose_icon.png) center no-repeat;background-size: 30px;}
.slide_left_menu_til {height: 40px;line-height: 40px;box-sizing: border-box;padding: 0 40px 0 15px;position: relative;font-size: 16px;}
.slide_left_menu_ul {width: 100%;border: 1px solid #ccc;border-left: none;border-right: none;box-sizing: border-box;padding: 0 10px;}
.slide_left_menu_ul li {height: 50px;line-height: 50px;/*border-bottom: 1px solid #ccc;*/font-size: 16px;width: 100%;box-sizing: border-box;padding: 0 10px 0 50px;overflow: hidden;
position: relative;}
.hederRightBox {width: 21px;height: 100%;display: inline-block;position: absolute;right: 20px;}
.hederRightBox a {width: 100%;height: 21px;display: inline-block;position: absolute;top: 50%;transform: translateY(-50%);-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);}
.audit_statusNew, .audit_statusPass, .audit_statusPassReject {width: 50px;height: 20px;position: absolute;top: 0;right: 0;font-size: 11px;display: -webkit-box;display: -moz-box;
display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-moz-box-align: center;-ms-flex-align: center;-webkit-align-items: center;align-items: center;
-webkit-box-pack: center;-moz-box-pack: center;-ms-flex-pack: center;-webkit-justify-content: center;justify-content: center;border-top-right-radius: 10px;border-bottom-left-radius: 10px;}
.audit_statusPass {background-color: #cccccc;color: #333333;}
.audit_statusNew {background-color: #ff9f22;color: white;}
.wexintip {height: 20px;width: 20px;background: url(<?php echo OSSURL;?>public/mobile/img/weixinicon.png) right center no-repeat;align-items: center;background-size: 16px;}
.boytip {height: 20px;width: 20px;background: url(<?php echo OSSURL;?>public/mobile/img/boy_icon.png) right center no-repeat;align-items: center;background-size: 16px;}
.girltip {height: 20px;width: 20px;background: url(<?php echo OSSURL;?>public/mobile/img/girl_icon.png) right center no-repeat;align-items: center;background-size: 16px;}
.pard2 {height: 20px;background: #ff9f22;color: white;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-moz-box-align: center;-ms-flex-align: center;-webkit-align-items: center;align-items: center;font-size: 11px;margin-left: 5px;padding: 0 4px;border-radius: 5px;}
.pard3 {height: 20px;background: #199fbf;color: white;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-moz-box-align: center;-ms-flex-align: center;-webkit-align-items: center;align-items: center;font-size: 11px;margin-left: 5px;padding: 0 4px;border-radius: 5px;}
.pard4 {height: 20px;background: #31a914;color: white;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-moz-box-align: center;-ms-flex-align: center;-webkit-align-items: center;align-items: center;font-size: 11px;margin-left: 5px;padding: 0 4px;border-radius: 5px;}
.pard5 {height: 20px;background: #da7f1f;color: white;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-moz-box-align: center;-ms-flex-align: center;-webkit-align-items: center;align-items: center;font-size: 11px;margin-left: 5px;padding: 0 4px;border-radius: 5px;}
.erwei {width: 15.5px;height: 15px;position: absolute;top: 90%;right: 35px;transform: translateY(-50%);-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);}
.btnEditBox {top: 90%;right: 61px;}
.btnDeleteBox {top: 90%;}
.erwei>img {position: absolute;top: 0;left: 0;right: 0;bottom: 0;width: 15px;}
#attendance {width: 94%;border-radius: 3%;height: 80px;margin-left: 3%;float: left;background: white;}
#attendance .r1, .m1, .l1 {float: left;height: 70px;width: 30%;margin-top: 5px;}
#attendance div {text-align: center;}
.t div.t1, div.t2, div.t3 {width: 100%;height: 34px;line-height: 40px;}
#num1, #num2, #num3 {font-size: 22px;}
#num1 {color: #14C682;}
#attendance .m1 {border-width: 1px;	width: 35%;}
#attendance .r1, .m1, .l1 {float: left;height: 70px;margin-top: 5px;}
.t .t3 {color: #14C682;}
.user_name {text-align: left;color: #666;font-size: 14px;width: 100%;}
.btn {height: 44px;display: block;background-color: #7bb52d;font: 20px "黑体";text-align: center;color: #fff;cursor: pointer;}
.user_name > input {    display: block;width: 100%;border-radius: 3px;height: 34px;padding: 0 10px;margin-bottom: 10px;border: 1px solid #e4dede;/* -webkit-box-sizing: border-box; */box-sizing: border-box;}
.user_name > select {display: block;width: 100%;height: 34px;border-radius: 3px;padding: 0 10px;margin-bottom: 10px;border: 1px solid #ccc;-webkit-box-sizing: border-box;
box-sizing: border-box;text-align: left;color: #666;font-size: 14px;}
.close_pupop_c {width: 200px; margin: 0 auto;}
.close_pupop_button {width: 90px;height: 30px;border-radius: 5px;line-height: 30px;font-size: 16px;text-align: center;}
.close_pupop_button_1 {background: #e74580;color: #fff;}
.close_pupop_button_2 {background: #56c454;color: #fff;margin-left: 20px;}
.user_name > input {    display: block;width: 100%;border-radius: 3px;height: 34px;padding: 0 10px;margin-bottom: 10px;border: 1px solid #e4dede;/* -webkit-box-sizing: border-box; */box-sizing: border-box;}
.user_name > select {display: block;width: 100%;height: 34px;border-radius: 3px;padding: 0 10px;margin-bottom: 10px;border: 1px solid #ccc;-webkit-box-sizing: border-box;
box-sizing: border-box;text-align: left;color: #666;font-size: 14px;}
.head_buy1 {position: relative;height: 100px;}
.head_buy1 .head_img1{height: 100px;text-align: center;}
.head_buy1 .head_img1>img{height: 100px;}
.famiyls {width: 100%;text-align: left;color: #666;display: inline-flex;border-bottom:1px solid #e9e9e9;margin-top: 20px;}
.left{width: 50%;float: left;display: flex;}
.left_img>img{height: 36px; margin-top: -16px;border-radius: 50%;}
.left_pard{text-align: center;}
.left_name{line-height: 36px;padding: 5px;}
.right{width: 50%;float: right;}
.right>span{line-height: 43px; margin-left: 10px;float: left;}
.weui_switch {font-size: 14px;-webkit-appearance: none;-moz-appearance: none;appearance: none;position: relative;width: 48px;height: 28px;border: 1px solid #DFDFDF;outline: 0;border-radius: 16px;box-sizing: border-box;background: #DFDFDF;vertical-align: middle;float: right;top: 8px;right: 12px;}
.weui_switch:before {content: " ";position: absolute;top: 0;left: 0;width: 46px;height: 26px;border-radius: 15px;background-color: #FDFDFD;-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.weui_switch:after {content: " ";position: absolute;top: 0;left: 0;width: 26px;height: 26px;border-radius: 15px;background-color: #FFFFFF;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.manual_student_list_search {padding: 10px;box-sizing: border-box;width: 98%;margin-top: 62px;margin-bottom: 8px;left: 5px;height: 42px;border: 1px solid #d4d4d4;position: relative;background-color: #fff;border-radius: 6px;}
.manual_student_list_search .search_text {border: none;height: 22px;line-height: 22px;font-size: 14px;box-sizing: border-box;width: 100%;padding-right: 30px;}
.manual_student_list_search .search_btn {width: 22px;height: 22px;background: url(<?php echo OSSURL;?>public/mobile/img/manual_search_icon.png) no-repeat center;background-size: 22px;position: absolute;right: 10px;
top: 10px;}
</style>
<?php  include $this->template('port');?>
<title><?php  echo $school['title'];?></title>
<div id="BlackBg" class="BlackBg"></div>
<div class="header mainColor">
	<div id="titlebar" class="l"><a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a></div>
	<div class="m"><a><span style="font-size: 18px"><?php  echo $kc['name'];?>学生列表</span></a></div>

</div>
<div style="margin-top: 62px;">
	
</div>

</head>
<body>
<div class="All">       
	<div class="top_head_blank" style="height:0px"></div>	
	<div class="listContent">
		<div id="shousuo"></div>
		<?php  if(is_array($leave)) { foreach($leave as $v) { ?>
		<li class="main" time="<?php  echo $v['id'];?>" id="<?php  echo $v['id'];?>" style="display: block;">
			<div class="cutting"></div>
			<div class="notifyTopBox">
				<div class="notifyTopLeft">
					<img src="<?php  if($v['icon']) { ?><?php  echo tomedia($v['icon'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?>" class="teacherImgError" />
				</div>
				<div class="erwei" id="erwei<?php  echo $v['id'];?>">
				<?php  if($ertype && $v['qrcode_id']) { ?>
					<img src="<?php echo OSSURL;?>public/mobile/img/20180317214727.png" class="img-responsive">
				<?php  } ?>
				</div>
							
				<div class="notifyTopRight">
					<div class="notifyTopRightTopBox">
						<?php  if($v['sex'] == 1) { ?><div class="boytip"></div><?php  } ?>
						<?php  if($v['sex'] == 2) { ?><div class="girltip"></div><?php  } ?>
						<span class="teacherInfo"><?php  echo $v['s_name'];?></span>
						<?php  if($v['pard']) { ?><div class="wexintip"></div><?php  } ?>

					</div>
					<p class="notifyCreateTime"><?php  echo $v['banji'];?>&nbsp;&nbsp;&nbsp;<?php  if($v['numberid']) { ?><span class="notifyCreateTime">学号:<?php  echo $v['numberid'];?></span><?php  } ?></p>
					
					<span class="teacherInfo" style="color:#da7131;">已签：<span style="color:blue"><?php  echo $v['yq'];?></span>课时</span>	
						<span class="teacherInfo" style="color:#da7131;">总共：<span style="color:blue"><?php  echo $v['buy'];?></span>课时</span>
						<span class="teacherInfo" style="color:#da7131;">剩余：<span style="color:blue"><?php  echo $v['rest'];?></span>课时</span>	
				</div>
			</div>
		</li>
		<?php  } } ?>	
	</div>
<div class="clear"></div>
<div class="clear"></div>
<div class="clear"></div>	
	

</div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<script src="<?php echo OSSURL;?>public/mobile/js/scroll_load_news.js?v=1717"></script>
<script type="text/javascript">
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		//$("#titlebar").hide();
	}
}, 100);

// 底部加载更多
new Scroll_load({
	"limit": "0",
	"pageSize": 10,
	"ajax_switch": true,
	"ul_box": ".listContent",
	"li_item": ".listContent .main",
	"ajax_url": "<?php  echo $this->createMobileUrl('tkcstu', array('schoolid' => $schoolid, 'kcid' => $kcid), true)?>",
	"page_name": "teacher_notify",
	"after_ajax": function () {
		
	}
}).load_init();


</script>
<?php  include $this->template('newfooter');?> 