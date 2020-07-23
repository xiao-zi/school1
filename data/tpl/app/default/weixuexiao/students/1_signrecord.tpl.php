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
 
.hederRightBox {width: 21px;height: 100%;display: inline-block;position: absolute;right: 20px;}
.hederRightBox a {width: 100%;height: 21px;display: inline-block;position: absolute;top: 50%;transform: translateY(-50%);-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);}

.audit_statusOver,.audit_statusIn, .audit_statusNot, .audit_statusPassReject {width: 50px;height: 20px;position: absolute;top: 0;right: 0;font-size: 11px;display: -webkit-box;display: -moz-box;
display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-moz-box-align: center;-ms-flex-align: center;-webkit-align-items: center;align-items: center;
-webkit-box-pack: center;-moz-box-pack: center;-ms-flex-pack: center;-webkit-justify-content: center;justify-content: center;border-top-right-radius: 10px;border-bottom-left-radius: 10px;}
.audit_statusNot {background-color: #cccccc;color: #333333;}
.audit_statusIn {background-color: #ff9f22;color: white;}
.audit_statusOver {background-color: #ff6665;color: white;}
</style>
<?php  include $this->template('port');?>
<?php  include $this->template('face');?>
<div id="BlackBg" class="BlackBg"></div>
<div class="header mainColor" id="mainColor">
	<div id="titlebar" class="l">
		
		<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a>
		</div>
	<div class="m"><a><span style="font-size: 18px">活动报名记录</span></a></div>
	
</div>
<title><?php  echo $school['title'];?></title>
</head>
<body>
<div class="All">       
	<div class="top_head_blank" id="top_head_blank"></div>
	<div class="listContent">
		<?php  if(is_array($list)) { foreach($list as $v) { ?>
		<li class="main" time="<?php  echo $v['createtime'];?>" id="<?php  echo $v['gaid'];?>" style="display: block;">
			<div class="tongzhi">
				<span class="tongzhiTitle"><?php  echo $v['gatitle'];?></span>
					<?php  if($v['gastarttime'] >TIMESTAMP) { ?>
					<div class="audit_statusNot">未开始</div>
					<?php  } else if($v['gastarttime'] <=TIMESTAMP && $v['gaendtime'] > TIMESTAMP ) { ?>
					<div class="audit_statusIn">进行中</div>
					<?php  } else if($v['gaendtime'] < TIMESTAMP) { ?>
					<div class="audit_statusOver">已结束</div>
					<?php  } ?>
				
			</div>
			<div class="cutting"></div>
			<div class="notifyTopBox" style="margin-top: 18px;">
				<div class="notifyTopLeft">
					<img src="<?php  if(!empty($v['sicon'])) { ?><?php  echo tomedia($v['sicon'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?>" class="teacherImgError" />
				
				</div>
				<div class="notifyTopRight">
					
					<div class="notifyTopRightTopBox">
						
						<div class="JobLeaderBox"><?php  echo $v['sname'];?></div>
						<div class="JobLeaderBox" style="background: #3c5ac7;"><?php  echo $v['bjname'];?></div>
						</div>
						<div class="notifyTopRightTopBox">
						报名人：
						<div class="JobLeaderBox" style="background: #3cc79a;"><?php  echo $v['pard'];?>-<?php  echo $v['username'];?></div>
					</div>
					 <p class="notifyCreateTime"> </p>
					<p class="notifyCreateTime">报名时间：<?php  echo(date("Y-m-d h:i:s", $v['createtime']))?></p>
				</div>
			</div>
			<div class="main_text" style="max-height: 60px; line-height: 20px; overflow: hidden;"> </div>
		</li>
		<?php  } } ?>	
	</div>
<div class="clear"></div>
<div class="clear"></div>
<div class="clear"></div>	
<?php  if($_GPC['op'] == signup) { ?>
	  <div class="F_div" onclick="mysign();">
        <div class="F_div_text" style="margin: 10px 0 0 0px;">我的报名记录</div>
    </div>	
    <?php  } ?>
	

</div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<script src="<?php echo OSSURL;?>public/mobile/js/common.js?v=1717"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/scroll_load_news.js?v=1717"></script>

<script type="text/javascript">
	function mysign(){
		location.href = "<?php  echo $this->createMobileUrl('signrecord', array('schoolid' => $schoolid,'userid'=>$userid), true)?>";
	}
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#mainColor").hide();
		$("#top_head_blank").hide();
		document.title="活动报名记录";

	}
}, 100);
 

	String.prototype.Trim = function() {
		return this.replace(/(^\s*)|(\s*$)/g, "");
	}
	function strConvertHtml() {
		$('.main_text').each(function (index, obj) {

			var contentStr = $(this).text();

			if (checkHtml(contentStr)) {
			   
				contentStr = contentStr.replace('<br>', '<br/>').Trim();
				contentStr = contentStr.replace('/\n/g', '<br/>').Trim();
		  
				$(this).html(contentStr);
			  
			} else {
				var tempStr = $(this).html();
				
				$(this).html(tempStr);
			}
		});
	  
	}

	function checkHtml(htmlStr) {
		var reg = /<[^>]+>/g;
		return reg.test(htmlStr);
	}

	$('.btn_closeImg').click(function() {
		$(this).parent('.notifyImgItem ').remove();
	});

	var arrayImg = [];




	 
	//加载通知内容
 

	 

// 底部加载更多
	new Scroll_load({
		"limit": "0",
		"pageSize": 10,
		"ajax_switch": true,
		"ul_box": ".listContent",
		"li_item": ".listContent .main",
		"ajax_url": "<?php  echo $this->createMobileUrl('signrecord', array('schoolid' => $schoolid, 'userid' => $it['id']), true)?>",
		"page_name": "teacher_notify",
		"after_ajax": function () {
			icon_replace($(".main_text")); // 替换表情
			img_big(); // 图片放大
			change_line(".main_text");
			strConvertHtml();
		}
	}).load_init();

	function img_big() {
		$(".baby_diary_img_list li").css("height", $(".baby_diary_img_list").width() * 0.25);

	}
 




	function change_line(obj) {
		$(obj).each(function () {
			console.log($(this));
			//$(this).html($(this).html().trim().replace(/\n/g, "</br>"));
			$(this).html($(this).html().trim().replace(/\n/g, ""));
		});
	}

	$(function () {
		change_line(".main_text");
		icon_replace($(".main_text"));
		img_big();
	   strConvertHtml();

		$('.linkDataUrl').click(function (e) {
			e = e || window.event;
			e.stopPropagation();
		});

		$('body').on('click',  '.main', function(e) {
			if (!$(e.target).parent().is('.notifyImgItem')) {
				e = e || window.event;
				e.stopPropagation();
				var notifyUid = $(this).attr('id');
				<?php  if(!empty($userid)) { ?>
				window.location.href = "<?php  echo $this->createMobileUrl('gadetail', array('schoolid' => $schoolid,'op'=>'signup','userid'=>$userid ))?>"+ '&gaid=' + notifyUid;
				<?php  } else { ?>
				window.location.href = "<?php  echo $this->createMobileUrl('gadetail', array('schoolid' => $schoolid ))?>"+ '&gaid=' + notifyUid;
				<?php  } ?>
			} 
		});
		
	  
	});
</script>



<?php  include $this->template('footer');?> 