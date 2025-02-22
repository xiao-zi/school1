<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="true" />
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/hb.js?v=1124"></script>
<link href="<?php echo OSSURL;?>public/mobile/css/new_yab.css?v=112420161108" rel="stylesheet" />
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/PromptBoxUtil.js?v=4.81022"></script>
<?php  echo register_jssdks();?>
<?php  include $this->template('port');?>
<style>
	.textareacss{width: 100%;
    outline: 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    font-size: 14px;
    resize: none;}
.user_info {position: fixed;left: 0;right: 0;top: 0;bottom: 0;-webkit-box-sizing: border-box;box-sizing: border-box;background-color: rgba(0,0,0,.53);text-align: center;z-index: 9999;font-size: 20px;color: #fe6700;}
.user_info>div {position: absolute;left: 6%;right: 6%;top: 90px;padding: 0 20px;background-color: #fff;padding-bottom: 33px;padding-top: 10px;}
.user_name {text-align: left;color: #666;font-size: 14px;}
.btn {height: 44px;display: block;background-color: #7bb52d;font: 20px "黑体";text-align: center;color: #fff;cursor: pointer;}
.user_info>div>span {display: inline-block;width: 30px;height: 30px;background: #fff;font-size: 24px;color: #aaa;-webkit-border-radius: 100%;-moz-border-radius: 100%;-o-border-radius: 100%;border-radius: 100%;line-height: 30px;text-align: center;position: absolute;top: -15px;right: -15px;
font-family: 宋体b8b\4f53;cursor: default;}
.user_name > input {display: block;width: 100%;border-radius: 3px;height: 44px;padding: 0 10px;margin-bottom: 10px;border: 1px solid #ccc;-webkit-box-sizing: border-box;box-sizing: border-box;}
.user_name > select {display: block;width: 100%;height: 44px;border-radius: 3px;padding: 0 10px;margin-bottom: 10px;border: 1px solid #ccc;-webkit-box-sizing: border-box;
box-sizing: border-box;text-align: left;color: #666;font-size: 14px;}
.close_pupop_c {width: 200px; margin: 0 auto;}
.close_pupop_button {width: 90px;height: 30px;border-radius: 5px;line-height: 30px;font-size: 16px;text-align: center;}
.close_pupop_button_1 {background: #e74580;color: #fff;}
.close_pupop_button_2 {background: #56c454;color: #fff;margin-left: 20px;}
.icon_text >span {text-align: right;color: #888;line-height: 30px;margin-left: 47px;}
body {font-family: initial;}
.mainColor{background:#06c1ae !important;}
.PromptBox {position: fixed;z-index: 2000;top: 30%;color: #fff;padding: 13px 20px;font-size: 16px;display:none;}
.vacationRecord_section {display: block;margin: 10px;width: auto;background-color: white;border-radius: 10px;position: relative;padding-top: 10px;padding-bottom: 10px;}
.vacationItem {position: relative;padding: 0px 0 0 15px;margin: 0px 0 0px 20px;height: 32px;display: -webkit-box;display: -moz-box;display: -ms-flexbox; display: -webkit-flex; display: flex; 
-webkit-box-align: center;-moz-box-align: center;-ms-flex-align: center;-webkit-align-items: center;align-items: center;border-left: 1px solid #06c1ae;}
.vacationItemBtn {border: none;}
.vacationItem:first-child {margin: 5px 0 0px 20px;}
.vacationItem:last-child {margin-bottom: 2px;}
.vacation_title {font-size: 14px;color: rgb(34, 34, 34);}
.vacation_mom {font-size: 14px;color: #06c1ae;}
.vacation_left {padding-left: 3px;}
.vacation_time {font-size: 12px;color: rgb(102, 102, 102);}
.left_dotsVacation {position: absolute;width: 10px;height: 10px;background-color: #06c1ae;border-radius: 50%;left: -5px;top: 50%;transform: translateY(-50%);-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);}
/*老师回复*/
.teachReplyBox {margin: 10px 0 0px 35px;position: relative;}
.teachReplyLeftBox {width: 0.7rem;height: 0.7rem;border-radius: 50%;display: inline-block;float: left;}
.teachReplyRightTitle {display: inline-block;height: 35px;padding-left: 5px;}
.teachReplyName {font-size: 14px;color: rgb(102, 102, 102);display: block;margin-top: 2px;}
.teachReplyBottom {padding-bottom: 10px;height: auto;}
/*左边线条*/
.teachReplyLeftLine {position: absolute;left: -15px;top: -34px;height: 32px;}
/*左边圆*/
.teachReplyLeftCircle {position: absolute;width: 10px;height: 10px;border-left: 1px solid #06c1ae;left: -20px;top: 8px;border-radius: 50%;background-color: #06c1ae;}
/*右边提示*/
.statusTip {position: absolute;width: 40px;height: 42px;right: 0;top: 0;}
.statusTipTop {width: 100%;height: 22px;font-size: 12px;color: white;background-color: rgb(255, 102, 101);line-height: 22px;text-align: center;border-bottom: 1px solid rgb(255, 131, 130);}
.tip_approve_down {width: 0;height: 0;border-left: 20px solid transparent;border-right: 20px solid transparent;border-top: 20px solid rgb(255, 102, 101);}
/*待接受*/
.statusTipTop_wait {background-color: rgb(153, 153, 153);text-align: center;border-bottom: 1px solid rgb(172, 172, 172);}
.tip_approve_down__wait {border-top: 20px solid rgb(153, 153, 153);}
/*拒绝*/
.statusTipTop_disapprove {background-color: #6f403d;text-align: center;border-bottom: 1px solid #6f403d;}
.tip_approve_down__disapprove {border-top: 20px solid #6f403d;}
/*接受*/
.statusTipTop_approve {background-color: #ff9f22;text-align: center;border-bottom: 1px solid #ff9f22;}
.tip_approve_down__approve {border-top: 20px solid #ff9f22;}
/*完成*/
.statusTipTop_finish {background-color: #06c1ae;text-align: center;border-bottom: 1px solid #06c1ae;}
.tip_approve_down__finish {border-top: 20px solid #06c1ae;}
/*转交*/
.statusTipTop_deliver {background-color: #079dd6;text-align: center;border-bottom: 1px solid #079dd6;}
.tip_approve_down__deliver {border-top: 20px solid #079dd6;}
/*进行中*/
.statusTipTop_indeal {background-color: #ff6665;text-align: center;border-bottom: 1px solid #ff6665;}
.tip_approve_down__indeal {border-top: 20px solid #ff6665;}

.otherTime {color: rgb(153, 153, 153);}
.vacationRecord_section:first-child {margin-top: 10px;}
.signin_leftBox {position: absolute;}
.txtArea {width: 95%;height: 100%;border: none;background-color: #f8f8f8;padding: 5px;resize: none;border-radius: 10px;overflow: hidden;text-overflow: ellipsis;white-space: normal;overflow-y: scroll;}
.txtArea::-webkit-scrollbar {display: none;}
.refuse, .approve {width: 75px;height: 30px;color: white;text-align: center;line-height: 30px;font-size: 14px;border-radius: 25px;position: absolute;cursor: pointer;}
.refuse {background-color: #ff9f22;left: 1rem;}
.approve {background-color: #06c1ae;right: 1rem;}
.vacationItem > a {width: 75px;height: 30px;color: white;}
.vacation_titleOther {max-width: 80%;padding-left: 3px;line-height: 18px;}
.vacationItemOther {height: auto;-webkit-box-align: flex-start;-moz-box-align: flex-start;-ms-flex-align: flex-start;-webkit-align-items: flex-start;align-items: flex-start;padding-bottom: 5px;padding-top: 5px;}
.left_dotsVacationOther {top: 12px;}
.teachReplyTitleBox {padding-top: 5px;position: relative;}
.lectBorderLine {position: absolute;border-left: 1px solid #06c1ae;left: -15px;top: 0px;height: 16px;}
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); }
.header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } 
.header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } 
.header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } 
.mainColor { background: #06c1ae !important; } 
.header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
.header .m a i {float: left;margin: 23px 0 0 5px;width: 0;height: 0;border-width: 6px 6px 0;border-style: solid;border-color: white transparent transparent;position: absolute;}
.img-responsive {display: block;width: 35px;border-radius: 50%;height: 35px;}
.selectList {position: fixed;left: 0;right: 0;top: 0;bottom: 0;-webkit-box-sizing: border-box;box-sizing: border-box;background-color: rgba(0,0,0,.53);text-align: center;z-index: 30;font-size: 20px;    color: #fe6700;}
.selectList .single {position: absolute;left: 6%;right: 6%;top: 35%;padding: 0 20px;background-color: #fff;padding-bottom: 33px;padding-top: 10px;}
.selectList ul {width: 100%;height: auto;overflow: auto;}
.selectList ul li {height: 50px;line-height: 50px;border-bottom: 1px solid #e9e9e9;padding: 0 10px;}
.selectList ul li span.ri {height: 50px;line-height: 50px;font-size: 16px;}
.F_div {right: 30px;bottom: 75px;width: 60px;height: 60px;background: #ff6665;box-shadow: 1px 1px 2px 0px #909090;border-radius: 50px;position: fixed;}
</style>
<title><?php  echo $school['title'];?></title>
</head>
<body>
<div class="header mainColor">
	<div class="l" id="titlebar">
		<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);">
		</a>
	</div>
	<div class="m">
		<a >
		   <span style="font-size: 18px"><?php  echo $language['syzxx_title'];?></span> 
	   </a>
	</div>
</div>
<div class="All">
	<div class="list">
	    <div class="listContent" style="margin-top: 15px">
			<?php  if(is_array($leave)) { foreach($leave as $row) { ?>
				<section class="vacationRecord_section" time="<?php  echo $row['createtime'];?>">
					<div class="vacationItem vacationItemOther">
						<span class="vacation_title">发送人:</span><span class="vacation_mom vacation_left"><?php  echo $row['sname'];?></span>
						<div class="left_dotsVacation"></div>
					</div>
					<div class="vacationItem vacationItemOther">
						<span class="vacation_title">留言内容:</span>
						<div class="left_dotsVacation"></div>
					</div>
					<div class="vacationItem vacationItemOther">
						<span class="vacation_title"><?php  echo $row['beizhu'];?></span>
					</div>
					<?php  if(!empty($row['huifu'])) { ?>
					<div class="vacationItem vacationItemOther">
						<span class="vacation_title">校长回复:</span>
						<div class="left_dotsVacation"></div>
					</div>
					<div class="vacationItem vacationItemOther">
						<span class="vacation_title"><?php  echo $row['huifu'];?></span>
					</div>
					<?php  } ?>
					
					
					<!--第一人-->
					<div class="teachReplyBox" >
						<div class="teachReplyToptBox">
							<div class="teachReplyLeftBox">
								<img src="<?php  if($row['thumb']) { ?><?php  echo tomedia($row['thumb'])?><?php  } else { ?><?php  echo tomedia($schol['tpic'])?><?php  } ?>" class="img-responsive">
							</div>
							<div class="teachReplyRightTitle">
								<span class="teachReplyName">
									接收人：<?php  echo $row['tname'];?>
								</span>
							</div>
						</div>
						<div class="left_teachReply"></div>
						<div class="teachReplyLeftLine"></div>
						<div class="teachReplyLeftCircle"></div>
					</div>
					<!--被转发者-->
				

					<div class="teachReplyBox">
						<div class="teachReplyBottom">
							<span class="vacation_time otherTime">留言时间:</span><span class="vacation_time vacation_left otherTime"><?php  echo date('Y-m-d H:i:s',$row['createtime'])?></span>
						</div>
					</div>
					<!--状态显示-->
					<div class="statusTip">	
					<!--初始状态-->
					<?php  if(empty($row['huifu'])) { ?>
						<div class="statusTipTop statusTipTop_wait">待回复</div>
						<div class="tip_approve_down tip_approve_down__wait"></div>
					<!--第一人拒绝-->
					<?php  } else { ?>
						<div class="statusTipTop statusTipTop_finish">已回复</div>
						<div class="tip_approve_down tip_approve_down__finish"></div>
					<?php  } ?>
					</div>
					<!--结束状态显示-->
					<div class="signin_leftBox"></div>
		 			<div class="vacationItem vacationItemBtn">
				 	<!--初始状态-->
				 	
		 			</div>
				</section>
			<?php  } } ?>	
	    </div>
	</div>
	<!------------提示框，动态显示而非直接加载-------------!-->
	
	<div class="clear"></div>
</div>
	<div class="F_div"  onclick="createtodo();">
	    <div style="margin: 10px 0 0 0px;" class="F_div_text">新的</br>留言</div>
	</div>


<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<script src="<?php echo OSSURL;?>public/mobile/js/common.js?v=1717"></script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/scroll_todo.js?v=1717"></script>
<script>
function createtodo(){
		location.href = "<?php  echo $this->createMobileUrl('yzxx', array('schoolid' => $schoolid), true)?>";
	}

	setTimeout(function() {
		if(window.__wxjs_environment === 'miniprogram'){
			$("#titlebar").hide();
			document.title="校长信箱";
		}
	}, 100);
 
	window.onload = function() {
		//高度  signin_leftBox
		$('.vacationRecord_section').each(function (index, obj) {
			$scHeight = $(this).height();
			$(this).find('.signin_leftBox').css('height', $scHeight - 110);
		});
	}
	function get_index(){
		var bbb = $(".listContent .vacationRecord_section").length;
		return bbb;
	}
	
	var PB = new PromptBox();
	$(function() {
		new Scroll_load({
			"limit": "0",
			"pageSize": 10,
			"ajax_switch": true,
			"ul_box": ".listContent",
			"li_index": $(".listContent .vacationRecord_section").length,
			"li_item": ".listContent .vacationRecord_section",
			"ajax_url": "<?php  echo $this->createMobileUrl('syzxx', array('schoolid' => $schoolid,'op'=>'scroll'), true)?>",
			"page_name": "teacher_notify",
			"after_ajax": function () { }
		}).load_init();

		var self;        //全局变量，主要用于传递todoid
		var agreetype;	 //全局变量，主要用于传递操作类型
		var status;
		//请假处理
	


	});
</script>
<?php  include $this->template('footer');?>