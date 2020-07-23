<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="format-detection" content="telephone=no">
<title><?php  echo $school['title'];?></title>
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/new_yab.css?v=4.8" />
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/PromptBoxUtil.js?v=4.80309"></script>
<?php  include $this->template('port');?>
<style type="text/css">
.common_til2 a {background: url(<?php echo OSSURL;?>public/mobile/img/partent_ico77.png) no-repeat left;background-size: 7px 10px; padding-left: 18px; display: block;width: auto; height: 100%; line-height: 44px;    /*margin-left: 10px;*/}.common_til2 a.downIcoClass {background: url(<?php echo OSSURL;?>public/mobile/img/fy_partent_ico.png) no-repeat left; background-size: 10px 7px; padding-left: 18px;display: block;}.icon_btn_contact { width: 40px;  height: 55px; background: url(<?php echo OSSURL;?>public/mobile/img/partent_ico_message.png) no-repeat center; background-size: 20px;}
.icon_btn_contact2 { width: 50px; height: 50px; background: url(<?php echo OSSURL;?>public/mobile/img/new_contact_icon3.png) no-repeat center; background-size: 20px;}
.icon_btn_call {width: 40px;height: 55px;background: url(<?php echo OSSURL;?>public/mobile/img/partent_ico_phone.png) no-repeat center;background-size: 20px;}
.icon_btn_call2 {width: 50px;height: 50px;background: url(<?php echo OSSURL;?>public/mobile/img/new_calling_icon3.png) no-repeat center;background-size: 20px;}
.new_no_data_icon {display: none;background: url(<?php echo OSSURL;?>public/mobile/img/no_media_icon.png) no-repeat center;width: 100px;height: 140px;background-size: 100px;margin: 30px auto;}
.praiseContent:first-child {background: url(<?php echo OSSURL;?>public/mobile/img/icon_okpraise.png) no-repeat no-repeat;background-size: 12px;padding-left: 18px;background-position: left center;}
.new_search_option_box .search_option_btn span{background: url(<?php echo OSSURL;?>public/mobile/img/new_search_icon2.png) no-repeat left;background-size: 15px 15px;padding-left: 25px;font-size: 14px;color: #999999;}
#popup_message { padding: 10px 10px; } #popup_prompt { border: 1px solid #ccc; background: #f2f2f2; color: #2b2b2b; padding-left: 2px; } .common_box1 { /*margin: 10px 0;*/ border-left: 0; border-right: 0; border-bottom: 1px solid #d9d9d9; } .input_size_tips { color: #aaa; font-weight: normal; } .common_box1 .common_list_imgtext2 .no_bottom { border-bottom: 0; } .common_list_imgtext2 li .icon_text .info { width: 100px; } .joeBoxA { color: #6B6565; } .contentBg { background-color: white; width: 100%; height: 100%; } .icon_text:last-child { border: none; } li .icon_text:nth-child(n-1) { border-bottom: 1px solid #d9d9d9; } .common_list_imgtext2 li:last-child { border-bottom: 0px solid #d9d9d9; } .loading_wrap{ position: fixed; top:0; bottom:0; width:100%; left:0; background-color: #fff; z-index:9999; } .ajax_loading{ display: box; display: -webkit-box; -webkit-box-orient: vertical; -webkit-box-pack: center; -webkit-box-align: center; width: 100%; height:100%; } /*拒绝*/ .icon_btn_refuse { width: 45px; height: 25px; background-color: #ff6665; border-radius: 20px; line-height: 25px; font-size: 14px; color: #fff; text-align: center; margin: 15px 5px; vertical-align: middle; } .icon_btn_sure { width: 45px; height: 25px; background-color: #33bd61; border-radius: 20px; line-height: 25px; font-size: 14px; color: #fff; text-align: center; margin: 15px 5px; vertical-align: middle; } .icon_btn_add { width: 45px; height: 25px; background-color: #f8f8f8; border: 1px solid #cccccc; border-radius: 20px; line-height: 25px; font-size: 12px; color: #333333; text-align: center; margin: 15px 10px; vertical-align: middle; } .btn_boxOther { right: 15px !important; } .icon_textOther { padding-right: 10px!important; } .infoOther { text-align: right !important; width: 50px !important; font-size: 13px!important; } .icon_btn_wait { font-size: 12px !important; text-align: right; margin: 12.5px 10px; } .common_list_imgtext2 li .icon_text .name { max-width: 170px; text-overflow: ellipsis; white-space: nowrap; overflow: hidden; } .common_list_imgtext2 li .icon_text { padding-right: 0; } .header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); } .header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } .header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } .header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } .mainColor { background: #06c1ae !important; } .header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
#msg_word {text-align: right;color: #888;line-height: 30px;margin-left: 47px;}
#info_word {margin-left:24px;text-align: left;color: #888;font-size: 14px;}
.runad{ position: absolute; width: 10px; height: 10px; border-radius: 50%; background-color: #1cbf9f;  content: "";margin-left:9px;margin-top:5px;}
</style>
</head>
<body>
<div id="ADVtips" class="ADVtips">
    <div class="ADVtips_title"><?php  echo $language['callbook_xxsz'];?></div>
	<span id="msg_word"><?php  if($it['is_allowmsg'] == 2) { ?>接收聊天信息<?php  } else { ?>不接收聊天信息<?php  } ?>&nbsp;&nbsp;&nbsp;</span>
    <div class="switch  scale03 <?php  if($it['is_allowmsg'] == 2) { ?>switch_off<?php  } else { ?>switch_on<?php  } ?>">
        <div class="switch_push">
            <div class="switch_round"></div>
        </div>
    </div>
</div>
<i class="runad"></i><span id="info_word"><?php  echo $language['callbook_tip'];?></span>
<div class="new_search_option_box">
    <input type="text" />
    <div class="search_option_btn"><span>搜索</span></div>
</div>
<div class="empty_data new_no_data_icon"></div>
<?php  include $this->template('face');?>
<div class="contentBg">
	<input id="wlzyid" type="hidden">
	<div class="teacher_box" count="11">
		<?php  if($IsOpenDh['is_teatostu'] == 1) { ?>
		<div count="<?php  echo $masterCount;?>" name="<?php  echo $language['callbook_xz'];?>">
			<div class="common_til2">
				<a href="###" class="joeBoxA" onclick="openShutManager(this,'<?php  echo $language['callbook_xz'];?>','<?php  echo $language['callbook_xz'];?>（<?php  echo $masterCount;?>人）','<?php  echo $language['callbook_xz'];?>（<?php  echo $masterCount;?>人）')"><?php  echo $language['callbook_xz'];?>（<?php  echo $masterCount;?>人）</a>
			</div>
			<div class="common_box1" style="">
				<div class="main_box2" style="padding:0 0; display:block;"  id="<?php  echo $language['callbook_xz'];?>">
					<ul class="common_list_imgtext2">
					<?php  if(is_array($master)) { foreach($master as $item) { ?>
						<li style="padding-left: 70px;">
							<div class="icon" style="height: 55px; padding: 10px 0 10px 15px;">
								<img src="<?php  if(!empty($item['thumb'])) { ?><?php  echo tomedia($item['thumb'])?><?php  } else { ?><?php  echo tomedia($school['tpic'])?><?php  } ?>" />
							</div>
							<div class="icon_text" style="height: 55px; line-height: 55px;">
								<div class="name">
									<?php  echo $item['tname'];?>（<?php  echo $item['Ttitle'];?>）
								</div>
							</div>
							<?php  if(!empty($item['userid']) && $item['is_allowmsg'] == 2) { ?>
							<div class="btn_contact">
								<a onclick="showReplyBox(<?php  echo $item['userid'];?>);" class="icon_btn_contact"></a>
							</div>
							<?php  } ?>
							<?php  if(!empty($item['mobile']) && $item['is_allowmsg'] == 2) { ?>
							<div class="btn_box">
								<a href="tel:<?php  echo $item['mobile'];?>" class="icon_btn_call"></a>
							</div>
							<?php  } ?>
						</li>
					<?php  } } ?>	
					</ul>
				</div>
			</div>
		</div>		
		<div count="<?php  echo $masterCount1;?>" name="<?php  echo $language['callbook_njgl'];?>">
			<div class="common_til2">
				<a href="###" class="joeBoxA" onclick="openShutManager(this,'<?php  echo $language['callbook_njgl'];?>','<?php  echo $language['callbook_njgl'];?>（<?php  echo $masterCount1;?>人）','<?php  echo $language['callbook_njgl'];?>（<?php  echo $masterCount1;?>人）')"><?php  echo $language['callbook_njgl'];?>（<?php  echo $masterCount1;?>人）</a>
			</div>
			<div class="common_box1" style="">
				<div class="main_box2" style="padding:0 0; display:block;"  id="<?php  echo $language['callbook_njgl'];?>">
					<ul class="common_list_imgtext2">
					<?php  if(is_array($master1)) { foreach($master1 as $item) { ?>
						<li style="padding-left: 70px;">
							<div class="icon" style="height: 55px; padding: 10px 0 10px 15px;">
								<img src="<?php  if(!empty($item['thumb'])) { ?><?php  echo tomedia($item['thumb'])?><?php  } else { ?><?php  echo tomedia($school['tpic'])?><?php  } ?>" />
							</div>
							<div class="icon_text" style="height: 55px; line-height: 55px;">
								<div class="name">
									<?php  echo $item['tname'];?>（<?php  echo $item['sname'];?>）
								</div>
							</div>
							<?php  if($item['id'] != $it['tid']) { ?>
								<?php  if(!empty($item['userid'])) { ?>
								<div class="btn_contact">
									<a onclick="showReplyBox(<?php  echo $item['userid'];?>);" class="icon_btn_contact"></a>
								</div>
								<?php  } ?>
								<?php  if(!empty($item['mobile'])) { ?>
								<div class="btn_box">
									<a href="tel:<?php  echo $item['mobile'];?>" class="icon_btn_call"></a>
								</div>
								<?php  } ?>
							<?php  } ?>
						</li> 	
					<?php  } } ?>			
					</ul>
				</div>
			</div>
		</div>
		<div count="<?php  echo $masterCount2;?>" name="<?php  echo $language['callbook_wdlsm'];?>">
			<div class="common_til2">
				<a href="###" class="joeBoxA" onclick="openShutManager(this,'<?php  echo $language['callbook_wdlsm'];?>','<?php  echo $language['callbook_wdlsm'];?>（<?php  echo $masterCount2;?>人）','<?php  echo $language['callbook_wdlsm'];?>（<?php  echo $masterCount2;?>人）')"><?php  echo $language['callbook_wdlsm'];?>（<?php  echo $masterCount2;?>人）</a>
			</div>
			<div class="common_box1" style="">
				<div class="main_box2" style="padding:0 0; display:none;"  id="<?php  echo $language['callbook_wdlsm'];?>">
					<ul class="common_list_imgtext2">
					<?php  if(is_array($master2)) { foreach($master2 as $item) { ?>
						<li style="padding-left: 60px;">
							<div class="icon" style="height: 55px; padding: 10px 0 10px 15px;">
								<img src="<?php  if(!empty($item['thumb'])) { ?><?php  echo tomedia($item['thumb'])?><?php  } else { ?><?php  echo tomedia($school['tpic'])?><?php  } ?>" />
							</div>
							<div class="icon_text" style="height: 55px; line-height: 55px;">
								<div class="name" style="font-size: 12px !important;">
								<?php  if($schooltype) { ?>
									<?php  echo $item['tname'];?><?php  if($item['kmname']) { ?>（<?php  echo $item['kmname'];?>）<?php  } ?>
								<?php  } else { ?>
									<?php  echo $item['tname'];?><?php  if($item['kmname']) { ?>（<?php  echo $item['kmname'];?>）<?php  } ?>(<?php  if(is_array($item['kemu'])) { foreach($item['kemu'] as $v) { ?> <?php  echo $v['kemus'];?> <?php  } } ?>)(<?php  echo $item['Ttitle'];?>)
								<?php  } ?>
								</div>
							</div>
							<?php  if(!empty($item['userid']) && $item['is_allowmsg'] == 2) { ?>
							<div class="btn_contact"  style="right: 40px !important;">
								<a onclick="showReplyBox(<?php  echo $item['userid'];?>);" class="icon_btn_contact"></a>
							</div>
							<?php  } ?>
							<?php  if(!empty($item['mobile']) && $item['is_allowmsg'] == 2) { ?>
							<div class="btn_box">
								<a href="tel:<?php  echo $item['mobile'];?>" class="icon_btn_call"></a>
							</div>
							<?php  } ?>
						</li> 
					<?php  } } ?>			
					</ul>
				</div>
			</div>
		</div>
		<?php  } ?>
		<?php  if($IsOpenDh['is_stutostu'] == 1) { ?>
			<?php  if($schooltype) { ?>
				<?php  if(is_array($stupardlist)) { foreach($stupardlist as $row_s) { ?>
					<div count="<?php  echo $row_s['bj1count'];?>" name="<?php  echo $row_s['bj']['sname'];?>">
						<div class="common_til2">
							<a href="###" class="joeBoxA" onclick="openShutManager(this,'<?php  echo $row_s['bj']['sname'];?>','<?php  echo $row_s['bj']['sname'];?>（<?php  echo $row_s['bj1count'];?>人）','<?php  echo $row_s['bj']['sname'];?>（<?php  echo $row_s['bj1count'];?>人）')"><?php  echo $row_s['bj']['sname'];?>（<?php  echo $row_s['bj1count'];?>人）</a>
						</div>
						<div class="common_box1" style="">
							<div class="main_box2" style="padding:0 0; display:none;"  id="<?php  echo $row_s['bj']['sname'];?>">
								<ul class="common_list_imgtext2">
								<?php  if(is_array($row_s['xs1'])) { foreach($row_s['xs1'] as $vue) { ?>
									<?php  if(is_array($vue['sid'])) { foreach($vue['sid'] as $item) { ?>
									<li style="padding-left: 70px;">
										<div class="icon" style="height: 55px; padding: 10px 0 10px 15px;">
											<img src="<?php  if($item['pard'] !=4) { ?><?php  if(!empty($item['avatar'])) { ?><?php  echo tomedia($item['avatar'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?><?php  } else { ?><?php  if(!empty($vue['icon'])) { ?><?php  echo tomedia($vue['icon'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?><?php  } ?>" />
										</div>
										<div class="icon_text" style="height: 55px; line-height: 55px;">
											<div class="name">
												<?php  echo $vue['s_name'];?><?php  if($item['pard'] ==2) { ?>（妈妈&nbsp;<?php  echo $item['realname'];?>）<?php  } ?><?php  if($item['pard'] ==3) { ?>（爸爸&nbsp;<?php  echo $item['realname'];?>）<?php  } ?><?php  if($item['pard'] ==5) { ?>（家长&nbsp;<?php  echo $item['realname'];?>）<?php  } ?>
											</div>
										</div>
										<?php  if($item['sid'] != $it['sid']) { ?>
										<?php  if(!empty($item['id']) && $item['is_allowmsg'] ==2) { ?>
										<div class="btn_contact">
											<a onclick="showReplyBox(<?php  echo $item['id'];?>);" class="icon_btn_contact"></a>
										</div>
										<?php  } ?>
										<?php  } ?>
										<!-- <?php  if(!empty($userinfo['mobile'])) { ?>
										<div class="btn_box">
											<a href="tel:<?php  echo $userinfo['mobile'];?>" class="icon_btn_call"></a>
										</div>
										<?php  } ?> -->
									</li> 
									<?php  } } ?>	
								<?php  } } ?>	
								</ul>
							</div>
						</div>
					</div>
				<?php  } } ?>
			<?php  } else if(!$schooltype) { ?>
				<?php  if(!empty($student['bj_id'])) { ?>
					<div count="<?php  echo $bj1count;?>" name="<?php  echo $bj['sname'];?>">
						<div class="common_til2">
							<a href="###" class="joeBoxA" onclick="openShutManager(this,'<?php  echo $bj['sname'];?>','<?php  echo $bj['sname'];?>（<?php  echo $bj1count;?>人）','<?php  echo $bj['sname'];?>（<?php  echo $bj1count;?>人）')"><?php  echo $bj['sname'];?>（<?php  echo $bj1count;?>人）</a>
						</div>
						<div class="common_box1" style="">
							<div class="main_box2" style="padding:0 0; display:none;"  id="<?php  echo $bj['sname'];?>">
								<ul class="common_list_imgtext2">
								<?php  if(is_array($xs1)) { foreach($xs1 as $vue) { ?>
									<?php  if(is_array($vue['sid'])) { foreach($vue['sid'] as $item) { ?>
									<li style="padding-left: 70px;">
										<div class="icon" style="height: 55px; padding: 10px 0 10px 15px;">
											<img src="<?php  if($item['pard'] !=4) { ?><?php  if(!empty($item['avatar'])) { ?><?php  echo tomedia($item['avatar'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?><?php  } else { ?><?php  if(!empty($vue['icon'])) { ?><?php  echo tomedia($vue['icon'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?><?php  } ?>" />
										</div>
										<div class="icon_text" style="height: 55px; line-height: 55px;">
											<div class="name">
												<?php  echo $vue['s_name'];?><?php  if($item['pard'] ==2) { ?>（妈妈&nbsp;<?php  echo $item['realname'];?>）<?php  } ?><?php  if($item['pard'] ==3) { ?>（爸爸&nbsp;<?php  echo $item['realname'];?>）<?php  } ?><?php  if($item['pard'] ==5) { ?>（家长&nbsp;<?php  echo $item['realname'];?>）<?php  } ?>
											</div>
										</div>
										<?php  if($item['sid'] != $it['sid']) { ?>
										<?php  if(!empty($item['id']) && $item['is_allowmsg'] ==2) { ?>
										<div class="btn_contact">
											<a onclick="showReplyBox(<?php  echo $item['id'];?>);" class="icon_btn_contact"></a>
										</div>
										<?php  } ?>
										<?php  } ?>
										<!-- <?php  if(!empty($userinfo['mobile'])) { ?>
										<div class="btn_box">
											<a href="tel:<?php  echo $userinfo['mobile'];?>" class="icon_btn_call"></a>
										</div>
										<?php  } ?> -->
									</li> 
									<?php  } } ?>	
								<?php  } } ?>	
								</ul>
							</div>
						</div>
					</div>
				<?php  } ?>
			<?php  } ?>
		<?php  } ?>

	</div>
</div>
<div class="top_height_blank50"></div>    
<script>
var PB = new PromptBox();
$(function () {

	$('.main_box2').each(function (idx, obj) {
		if ($(this).css('display') == 'block') {
			$(this).parent('.common_box1').prev('.common_til2').children('a').addClass('downIcoClass');
		}
	})

	$(".common_til2 a").click(function () {
		$(this).toggleClass("downIcoClass", 1000);
		return false;
	});




$('.new_search_option_box input').focus(
   function () {
	   $('.search_option_btn').hide();
});

$('.new_search_option_box input').blur(
	function (){
		$('.search_option_btn').show();
	});
});

$('.search_option_btn').click(
	function () {
		$('.new_search_option_box input').focus();
		$(this).hide();
 })
function openShutManager(oSourceObj, oTargetObj, oOpenTip, oShutTip) {
	var sourceObj = typeof oSourceObj == "string" ? document.getElementById(oSourceObj) : oSourceObj;
	var targetObj = typeof oTargetObj == "string" ? document.getElementById(oTargetObj) : oTargetObj;
	var openTip = oOpenTip || "";
	var shutTip = oShutTip || "";
	if (targetObj.style.display != "none") {
		targetObj.style.display = "none";
		if (openTip && shutTip) {
			sourceObj.innerHTML = shutTip;
		}
	} else {
		targetObj.style.display = "block";
		if (openTip && shutTip) {
			sourceObj.innerHTML = openTip;
		}
	}
}
$(function () {

	if ($('.teacher_box').children().length == 0 && $('.kindred_box').children().length == 0) {
		$('.new_search_option_box').hide();
		$('.empty_data').show();
	}

	$('.new_search_option_box input').on('input propertychange', function () {
		var input_text = $.trim($(this).val());
		var teacher_box = $('.teacher_box');
		var kindred_box = $('.kindred_box');
		var empty_box = $('.empty_data');
		empty_box.hide();

		$(".common_list_imgtext2 li").each(function () {
			$(this).removeClass("hidden");
		})

		if (input_text == '') {
			$(".common_til2").each(function () {
				var parent = $(this).parent();
				var sName = parent.attr("name");
				var sCount = parent.attr("count");
				var sId = parent.find(".main_box2").attr("id");
				$(this).find('.joeBoxA').remove();
				$(this).html("<a href='###' class='joeBoxA' onclick=\"openShutManager(this,'" + sId + "','" + sName + "（" + sCount + "人）','" + sName + "（" + sCount + "人）')\">" + sName + "（" + sCount + "人）</a>");
				$(this).show();
			})
			$(".common_box1").each(function () {
				$(this).show();
				$(this).find(".main_box2").hide();
			})
		} else {//对整个li找匹配项，有则显示，无则隐藏
			$(".common_list_imgtext2 li").each(function () {
				if ($(this).find(".name").text().indexOf(input_text) >= 0) {
					$(this).removeClass("hidden");
				} else {
					$(this).addClass("hidden");
				}
			})

			$(".main_box2").each(function () {
				var sId = $(this).attr('id');
				var parent = $(this).parent().parent();
				var sCount = parent.attr('count');
				var sName = parent.attr('name');
				var common_til2 = parent.find(".common_til2");//老师、园长、家长菜单
				var common_box1 = parent.find(".common_box1");//老师、园长、家长详情
				var sHidden = $(this).find('li.hidden').length;
				var sLess = sCount - sHidden;//匹配的人数
				common_til2.find('.joeBoxA').remove();
				if (sLess > 0) {
					common_til2.html("<a href='###' class='joeBoxA' onclick=\"openShutManager(this,'" + sId + "','" + sName + "（" + sLess + "人）','" + sName + "（" + sLess + "人）')\">" + sName + "（" + sLess + "人）</a>");
					common_til2.show();
					common_box1.show();
					$(this).show();
				}
				else {
					common_til2.html("<a href='###' class='joeBoxA' onclick=\"openShutManager(this,'" + sId + "','" + sName + "（" + sCount + "人）','" + sName + "（" + sCount + "人）')\">" + sName + "（" + sCount + "人）</a>");
					common_til2.hide();
					common_box1.hide();
					$(this).hide();
				}
			});

			var teacher_length = $('.teacher_box li.hidden').length;//老师端不匹配数
			var kindred_length = $('.kindred_box li.hidden').length;//家长端不匹配数
			if ((teacher_length == teacher_box.attr('count')) && (kindred_length == kindred_box.attr('count'))) {
				empty_box.show();
			}
		}
	});
})
function saveReplyMsg(){
    var content = $("#content_txt").val();
	var touserid = $("#wlzyid").val();
	if (content == "" || content == undefined || content == null) {
        jAlert('内容不能为空哦！');
        return false;
	}
	jConfirm("确认发送本消息吗？", "确定对话框", function (isConfirm) {
		if(isConfirm){
			var submitData = {
				openid :"<?php  echo $openid;?>",
				schoolid :"<?php  echo $schoolid;?>",
				weid :"<?php  echo $weid;?>",
				touserid :touserid,
				userid :"<?php  echo $it['id'];?>",
				content : content,
			};
		    $.post("<?php  echo $this->createMobileUrl('dongtaiajax',array('op'=>'savely'))?>",submitData,function(data){
		        if(data.result){
		            PB.prompt(data.msg);
		   			closeReplyBox();
					window.location.href = "<?php  echo $this->createMobileUrl('slylist', array('schoolid' => $schoolid), true)?>"
		        }else{
		            PB.prompt(data.msg);
					closeReplyBox();
		        }
		    },'json'); 
		}
	});
}
$(document).ready(function () {

	$(".switch").click(function () {
		if ($(".switch_on").size() <= 0) {
			$(".switch").addClass('switch_on');
			$(".switch").removeClass('switch_off');
			//后端处理
			ifpush("N");
		}
		else {
			$(".switch").removeClass('switch_on');
			$(".switch").addClass('switch_off');
			//后端处理
			ifpush("Y");
		}
	});
});

function ifpush(type) {
	if(type == "Y"){
		var msg_word = "接受聊天信息&nbsp;&nbsp;&nbsp;";
	}else{
		var msg_word = "不接受聊天信息&nbsp;&nbsp;&nbsp;";
	}
	$.ajax({
		url: "<?php  echo $this->createMobileUrl('indexajax',array('op'=>'liaotian'))?>",
		data : {schoolid:"<?php  echo $schoolid;?>",is_allowmsg:type,userid:"<?php  echo $it['id'];?>",openid:"<?php  echo $openid;?>"},	
		dataType: 'json',
		success: function (datas) {
			if(datas.result){
				$('#msg_word').html(msg_word);
				jTips(datas.msg);
			}else{
				jTips(datas.msg);
			}
		}
	});
}
</script> 
<?php  include $this->template('footer');?>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
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