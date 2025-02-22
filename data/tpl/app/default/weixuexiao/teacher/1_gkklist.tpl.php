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
.slide_left_menu_ul li {height: 50px;line-height: 50px;/*border-bottom: 1px solid #ccc;*/font-size: 16px;width: 100%;box-sizing: border-box;padding: 0 10px 0 10px;overflow: hidden;
position: relative;}
.hederRightBox {width: 21px;height: 100%;display: inline-block;position: absolute;right: 20px;}
.hederRightBox a {width: 100%;height: 21px;display: inline-block;position: absolute;top: 50%;transform: translateY(-50%);-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);}
.btnXGBox {top: 52%;width: 40px;height: 28px;background-color: #0db15c;border-radius: 13%;font-size: 16px;color: #fff;text-align: center;position: absolute;right: 12px;font-weight: bold;line-height: 28px;transform: translateY(-50%);-webkit-transform: translateY(-50%);-moz-box-shadow: 2px 2px 5px #333333;-webkit-box-shadow: 2px 2px 5px #333333;box-shadow: 2px 2px 5px #716e6e;}
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

<title><?php  echo $school['title'];?></title>
</head>
<body>

<div class="header mainColor" id="titlebar">
	<div class="m">
		<a><span style="font-size: 18px">公开课列表</span></a>
	</div>

	<div class="r">
		<a href="javascript:;" class="choice_baby">
			<img style="height: 30px;margin-top:10px" src="<?php echo OSSURL;?>public/mobile/img/selectMean.png" class="img-responsive">
		</a>
	</div>

</div>
<div id="titlebar_bg" class="top_height_blank"></div>



<div class="All">
	<div class="listContent">
		<?php  if(is_array($gkklist)) { foreach($gkklist as $v) { ?>
		<li class="main" time="<?php  echo $v['createtime'];?>" id="<?php  echo $v['id'];?>" style="display: block;">
			<div class="tongzhi">
				<span class="tongzhiTitle"><?php  echo $v['name'];?></span>
				<span class="common_audit_status"><?php  echo $v['ydrs'];?></span>
				<?php  if($v['starttime'] >TIMESTAMP) { ?>
				<div class="audit_statusNot">未开始</div>
				<?php  } else if($v['starttime'] <=TIMESTAMP && $v['endtime'] > TIMESTAMP ) { ?>
				<div class="audit_statusIn">进行中</div>
				<?php  } else if($v['endtime'] < TIMESTAMP) { ?>
				<div class="audit_statusOver">已结束</div>
				<?php  } ?>
			</div>
			<div class="cutting"></div>
			<div class="notifyTopBox" style="height:auto">
				<div class="notifyTopLeft">
					<img src="<?php  echo tomedia($v['kmicon'])?>" class="teacherImgError" />
				</div>
				<div class="notifyTopRight">
					<div class="notifyTopRightTopBox">
						<span class="teacherInfo">主讲人：<?php  echo $v['tname'];?></span>
						<div class="JobLeaderBox"><?php  echo $v['kmname'];?></div>
					</div>
					<div class="notifyTopRightTopBox">
						<span class="teacherInfo">创建人：<?php  echo $v['createtname'];?></span>
					</div>
					<p class="notifyCreateTime"><?php  echo $v['nianji'];?>/<?php  echo $v['banji'];?></p>
					<p class="notifyCreateTime"><?php  echo(date("Y-m-d H:i", $v['starttime']))?> 至<?php  echo(date("Y-m-d H:i", $v['endtime']))?></p>
				</div>

			</div>
			<div class="main_text" style="max-height: 60px; line-height: 20px; overflow: hidden;"><?php  echo $v['dagang'];?></div>
		</li>
		<?php  } } ?>	
	</div>
	<div class="clear"></div>
	<div class="clear"></div>
	<div class="clear"></div>


	<div class="slide_left_menu_bg">
		<div class="slide_left_menu">
			<div class="slide_left_menu_til">班级列表</div>
			<ul class="slide_left_menu_ul">
				<li onclick="GetGkk(1);" <?php  if($gettype == 'all') { ?>class="act"<?php  } ?>><div>所有公开课</div></li>
				<li onclick="GetGkk(2);" <?php  if($gettype == 'my') { ?>class="act"<?php  } ?>><div>我的公开课</div></li>
			</ul>
		</div>
	</div>



	<div class="F_div" onclick="gotocjgkk()" style="top: 230px;z-index:500">
        <div class="F_div_text" style="margin-top: 10px;">创建公开课   </div>
    </div>
</div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<script src="<?php echo OSSURL;?>public/mobile/js/common.js?v=1717"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/scroll_load_news.js?v=1717"></script>

<script type="text/javascript">
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
	}
}, 100);


function gotopingjia(id){
    e = window.event;
    e.stopPropagation();
    e.preventDefault();
    location.href = "<?php  echo $this->createMobileUrl('gkkpingjia', array('schoolid' => $schoolid,'op'=>'edite'), true)?>"+ '&gkkid=' + id + '&weid=' + <?php  echo $weid;?>;

}


function checkpingjia(id){
    e = window.event;
    e.stopPropagation();
    e.preventDefault();
    location.href = "<?php  echo $this->createMobileUrl('gkkpingjia', array('schoolid' => $schoolid,'op'=>'check','checktype'=>'myown'), true)?>"+ '&gkkid=' + id + '&weid=' + <?php  echo $weid;?>;

}


	$(".choice_baby").on("click", function(e) {
		e.stopPropagation();
		$(".slide_left_menu_bg").addClass("show_menu_bg");
	});
	$(".slide_left_menu_bg").on("click", function() {
		$(this).removeClass("show_menu_bg");
	});
	$(function ($) {
		$("#showbjlist").on('click', function () {
            $('#selectList').show();
		});
		$("#showhistory").on('click', function () {
            $('#user_info').show();
		});	
		$("#clos").on('click', function () {
            $('#user_info').hide();
		});		
		$("#BlackBg").on('click', function () {
            $('#user_info').hide();
			$('#selectList').hide();
		});				
	});
	function isSelect(bjid){
		jTips("数据加载中！···");
		location.href = "<?php  echo $this->createMobileUrl('gkklist', array('schoolid' => $schoolid), true)?>"+ '&bj_id=' + bjid;
	}

	function gotocjgkk(){
		
		location.href = "<?php  echo $this->createMobileUrl('gkkadd', array('schoolid' => $schoolid), true)?>"+ '&tid=' + <?php  echo $teachers['id'];?> + '&weid=' + <?php  echo $weid;?>;
	}
	function GetGkk(type){
		jTips("数据加载中！···");
		if(type == 1){
            location.href = "<?php  echo $this->createMobileUrl('gkklist', array('schoolid' => $schoolid,'gettype' => 'all'), true)?>";
        }else if(type == 2){
            location.href = "<?php  echo $this->createMobileUrl('gkklist', array('schoolid' => $schoolid,'gettype' => 'my'), true)?>";
        }

	}
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




	function itemEdit(id, e) {
		e = window.event;
		e.stopPropagation();
		e.preventDefault();
		edit_notice(this, e);

	}
	//加载通知内容
	function edit_notice(obj, e) {
		e = window.event;
		e.stopPropagation();
		arrayImg = [];
		var id = $(obj).closest('.main').attr('id');

		$('.popUpBox').show();
		$('html,body').addClass('popNoscroll');

		var ajaxData = {};
		ajaxData.id = id;
		$.ajax({
			type: "POST",
			url: "/1046/Notify/GetAuditThrough",
			dataType: "json",
			data: ajaxData,
			success: function(msg) {
				if (msg.status == "1") {
					var notifyID = msg.info.NotifyUid;
					var notifyType = msg.info.NotifyTitle;
					var notifyContent = msg.info.NotifyContent;

					$("#notifyID").val(notifyID);
					$("#notifyType").val(notifyType);
					$("#notifyContent").html(notifyContent);
					change_line("#notifyContent");
					icon_replace($("#notifyContent"));

					var imageList = msg.info.ImageList;
					if (imageList.length > 0) {
						var list = "";
						for (var i = 0; i < imageList.length; i++) {
							var mediaImgID = imageList[i].MediaUid;
							var mediaIcon = imageList[i].MediaIcon;
							var mediaFile = imageList[i].MediaFile;

							list += "<li class='notifyImgItem'>" + "<img id=" + mediaImgID + " class='notify_popup_img'  src=" + mediaIcon + " path=" + mediaFile + "><div class='btn_closeImg' onclick=imgDelete($(this))><img src='../../Content/images/btn_notifylose.png' class='img-responsive' /></div>" + "</li>";
						}
						$(".baby_diary_img_listOther").html(list);

					}
					imgIni();
				} else {
					jTips(msg.info);
				}

			},
			error: function(error) {
				jTips("获取通知内容失败！");
			}
		});
	}

	function imgIni() {
		$('#notifyContent').find('img').not('.face_icon').css('width', '100%');
	}

// 底部加载更多
	new Scroll_load({
		"limit": "0",
		"pageSize": 10,
		"ajax_switch": true,
		"ul_box": ".listContent",
		"li_item": ".listContent .main",
		<?php  if($getMy) { ?>
		"ajax_url": "<?php  echo $this->createMobileUrl('gkklist', array('schoolid' => $schoolid, 'getMy' => $getMy), true)?>",
		<?php  } else { ?>
		"ajax_url": "<?php  echo $this->createMobileUrl('gkklist', array('schoolid' => $schoolid, 'bj_id' => $bj_id), true)?>",
		<?php  } ?>
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
				window.location.href = "<?php  echo $this->createMobileUrl('gkkdetail', array('schoolid' => $schoolid))?>"+ '&gkkid=' + notifyUid;
			} 
		});
		
	  
	});
</script>



<?php  include $this->template('newfooter');?> 