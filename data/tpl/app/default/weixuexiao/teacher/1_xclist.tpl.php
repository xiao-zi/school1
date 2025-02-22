<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<title><?php  echo $school['title'];?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<link rel="stylesheet" href="<?php echo MODULE_URL;?>public/mobile/css/weixin.css">
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/mAlbum.css?v=5.00716" />	
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=5.00120" />
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.9"></script>
</head>
<style type="text/css">
.add_link_box{width:100%;position: absolute;left:0;top:60px;bottom:0;z-index: 9999;background-color:rgba(0,0,0,0.5);display: none}
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
.slide_left_menu_ul li {height: 50px;line-height: 50px;/*border-bottom: 1px solid #ccc;*/font-size: 16px;width: 100%;box-sizing: border-box;overflow: hidden;position: relative;}
.hederRightBox {width: 21px;height: 100%;display: inline-block;position: absolute;right: 20px;}
.hederRightBox a {width: 100%;height: 21px;display: inline-block;position: absolute;top: 50%;transform: translateY(-50%);-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);}

.audit_statusNew, .audit_statusPass, .audit_statusPassReject {width: 50px;height: 20px;position: absolute;top: 0;right: 0;font-size: 11px;display: -webkit-box;display: -moz-box;
display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-moz-box-align: center;-ms-flex-align: center;-webkit-align-items: center;align-items: center;
-webkit-box-pack: center;-moz-box-pack: center;-ms-flex-pack: center;-webkit-justify-content: center;justify-content: center;border-top-right-radius: 10px;border-bottom-left-radius: 10px;}
.audit_statusPass {background-color: #cccccc;color: #333333;}
.audit_statusNew {background-color: #ff9f22;color: white;}
</style>
<body>
<div class="slide_left_menu_bg">
	<div class="slide_left_menu">
		<div class="slide_left_menu_til">班级列表</div>
		<ul class="slide_left_menu_ul">	
			<?php  if(is_njzr($teacher['id'])) { ?>
					<?php  if(is_array($bjlists)) { foreach($bjlists as $row) { ?>
						<?php  if(!in_array($row['bj_id'], $bjlists)) { ?>
						<?php  $bjlists[] = $row['bj_id'];?>
							<li onclick="isSelect(<?php  echo $row['bj_id'];?>);" <?php  if($bj_id == $row['bj_id']) { ?>class="act"<?php  } ?>><div><?php  echo $row['bjname'];?></div></li>
						<?php  } ?>
					<?php  } } ?>		
					<?php  if(is_array($mynjlist)) { foreach($mynjlist as $row) { ?>
						<?php  if(is_array($row['bjlist'])) { foreach($row['bjlist'] as $item) { ?>
						<?php  if(!in_array($item['sid'], $bjlists)) { ?>
						<li onclick="isSelect(<?php  echo $item['sid'];?>);" <?php  if($bj_id == $item['sid']) { ?>class="act"<?php  } ?>><div><?php  echo $item['sname'];?></div></li>
						<?php  } ?>
						<?php  } } ?>
					<?php  } } ?>			
			<?php  } else { ?>
				<?php  if($teacher['status'] == 2) { ?>
					<?php  if(is_array($bjlist)) { foreach($bjlist as $row) { ?>
						<li onclick="isSelect(<?php  echo $row['sid'];?>);" <?php  if($bj_id == $row['sid']) { ?>class="act"<?php  } ?>><div><?php  echo $row['sname'];?></div></li>
					<?php  } } ?>
				<?php  } else { ?>
					<?php  if(is_array($bjlists)) { foreach($bjlists as $row) { ?>
						<?php  if(!in_array($row['bj_id'], $bjlists)) { ?>
						<?php  $bjlists[] = $row['bj_id'];?>
							<li onclick="isSelect(<?php  echo $row['bj_id'];?>);" <?php  if($bj_id == $row['bj_id']) { ?>class="act"<?php  } ?>><div><?php  echo $row['bjname'];?></div></li>
						<?php  } ?>
					<?php  } } ?>					
				<?php  } ?>
			<?php  } ?>		
		</ul>
	</div>
</div>
<div class="all">	
	<div class="header mainColor" style="z-index: 10;">
		<div  id="titlebar" class="l"><a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a></div>
		<div class="m"><span style="font-size: 18px"><?php  echo $nowbj['sname'];?>相册</span></div>
		<div class="r">
			<a href="javascript:;" class="choice_baby">
				<img style="height: 30px;margin-top:10px" src="<?php echo OSSURL;?>public/mobile/img/selectMean.png" class="img-responsive">
			</a>
		</div>
	</div>
	<div id="titlebar_bg" class="_header"></div>
	<div class="titleTop" >
		<div class="multiselect" >
			<div id="query_classId" class="sendParam sendParam_wot pr" onclick="showSelectBox('classList')">
				<i class="icon-funnel"></i>
				<span class="sendSelectParamOperBtn pa address f15 c9" closestatus="0" id="classListShow"><?php  echo $nowbj['sname'];?></span>
				<input id="classListValue" name="classListValue" type="hidden" <?php  if(!empty($_GPC['bj_id'])) { ?>value="<?php  echo $_GPC['bj_id'];?>"<?php  } else if(!empty($teacher['bj_id1'])) { ?>value="<?php  echo $bjid1;?>"<?php  } else { ?><?php  } ?>/>
				<span class="sendParamOperBtn pa address f15 c9" closestatus="0"><i class="iconloc fx_icon_background-position float_left"></i></span>
			</div>
		</div>			
		<div class="addBtn qx_01602" >
			<button onclick="up();" class="mainColor btn-default ">上传</a>
		</div>
		<div class="cl"></div>
	</div>	
	<div id="albumList" class="albumList" style="padding-bottom:70px;">
		<div class="albumBox albumBox-left">
			<a href="<?php  echo $this->createMobileUrl('xc', array('schoolid' => $schoolid, 'bj_id' => $bj_id, 'type' => '0'), true)?>">
				<div class="albumCover div-imgMask">
					<img class="img-adaptive" <?php  if(!empty($frist['picurl'])) { ?>src="<?php  echo tomedia($frist['picurl'])?>"<?php  } ?>>
				</div>
				<div class="bg-dark"></div>
				<div class="bg-tint"></div>
				<div class="ablumBottom" ><span class="ablumName">班级圈</span><span class="ablumTotal"><?php  if(!empty($frist['picurl'])) { ?>(<?php  echo $total;?>张)<?php  } else { ?>(0张)<?php  } ?></span></div>
			</a>
		</div>
		<div class="albumBox albumBox-right">
			<a href="<?php  echo $this->createMobileUrl('xc', array('schoolid' => $schoolid, 'bj_id' => $bj_id, 'type' => '2'), true)?>">
				<div class="albumCover div-imgMask">
					<img class="img-adaptive" <?php  if(!empty($cfrist['picurl'])) { ?>src="<?php  echo tomedia($cfrist['picurl'])?>"<?php  } ?>>
				</div>
				<div class="bg-dark"></div>
				<div class="bg-tint"></div>
				<div class="ablumBottom" ><span class="ablumName">公共相册</span><span class="ablumTotal"><?php  if(!empty($cfrist['picurl'])) { ?>(<?php  echo $ctotal;?>张)<?php  } else { ?>(0张)<?php  } ?></span></div>
			</a>
		</div>			
	</div>
</div>
<div class="blackBg"></div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
<input type="hidden" id="basicParameters" value="<?php  echo $this->createMobileUrl('xc', array('schoolid' => $schoolid), true)?>" />
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/PromptBoxUtil.js?v=5.00311"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/scroll_load_news.js?v=1717"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/datetimeUtil.min.js?v=5.00311"></script>
<script>
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
	}
}, 100);
 
WeixinJSHideAllNonBaseMenuItem();
/**微信隐藏工具条**/
function WeixinJSHideAllNonBaseMenuItem(){
	if (typeof wx != "undefined"){
		wx.ready(function () {
			
			wx.hideAllNonBaseMenuItem();
		});
	}
}
$(".choice_baby").on("click", function(e) {
	e.stopPropagation();
	$(".slide_left_menu_bg").addClass("show_menu_bg");
});
	$(".slide_left_menu_bg").on("click", function() {
		$(this).removeClass("show_menu_bg");
	});
var sxclisturl = '<?php  echo  $this->createMobileUrl('xclist', array('schoolid' => $schoolid, 'getalist' => 1, 'bj_id' => $bj_id))?>';
var PB = new PromptBox();
var dateTimesUtil = new dateTime();
//var JsonsUtil = new JsonUtil();
function up() {
window.location.href = "<?php  echo $this->createMobileUrl('xcfb', array('schoolid' => $schoolid), true)?>";
}	
var oss = "https://weimeizhan.oss-cn-shenzhen.aliyuncs.com";	

function showSelectBox(obj){
	if($("#"+obj).find("ul").children().length > 0){
		$(".selectList").css("display","block");
		$(".blackBg").css("display","block");
		$("#"+obj).css("display","block");
		var height = 0;
		$(".selectList").css("margin-top",-$("#"+obj).parent().height()/2);	
		$("#"+obj).css("height",$(".selectList").height());
		$("#"+obj).find("ul").css("height",$(".selectList").height()-50);
	}
}

function closeBox(){
	$(".selectList").css("display","none");
	$(".blackBg").css("display","none");
	$(".single").css("display","none");
	$(".double").css("display","none");
	$(".double").css("height","auto");
	$(".double").find("ul").css("height","auto");
}
function isSelect(bjid){
	location.href = "<?php  echo $this->createMobileUrl('xclist', array('schoolid' => $schoolid), true)?>"+ '&bj_id=' + bjid;
}
$(function () {
	<?php  if(!IsHasQx($tid_global,2001602,2,$schoolid) ) { ?>
		$(".qx_01602").hide();
	<?php  } ?>
	});
</script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/smAlbum.js?v=5.0"></script>
<?php  include $this->template('newfooter');?>
</html>