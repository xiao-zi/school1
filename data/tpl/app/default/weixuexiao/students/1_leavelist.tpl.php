<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="no" />
<meta name="format-detection" content="telephone=no" />
<meta name="HandheldFriendly" content="true" />
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/hb.js?v=1111"></script>
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/new_yab1.css?v=1?v=1111" />
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/mobiscroll.custom.js"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/scroll_load.js"></script>
<?php  include $this->template('port');?>
<style>
body {font-family: initial;}
.vacationRecord_section {display: block;margin: 10px;width: auto;background-color: white;border-radius: 10px;position: relative;padding-top: 10px;padding-bottom: 10px;}
.vacationRecord_section:nth-child(1) {margin-top: 70px;}
.vacationItem {position: relative;padding: 0px 0 0 15px;margin: 0px 0 0px 20px;height: 32px;border-left: 1px solid rgb(51, 189, 97);display: -webkit-box; display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-moz-box-align: center;-ms-flex-align: center;-webkit-align-items: center;align-items: center;}
.vacationItem:first-child {margin: 5px 0 0px 20px;}
.vacationItem:last-child {margin-bottom: 2px;}
.vacation_title {font-size: 14px;color: rgb(34, 34, 34);}
.vacation_mom {font-size: 14px;color: rgb(51, 189, 97);}
.vacation_left {padding-left: 3px;}
.vacation_time {font-size: 12px;color: rgb(102, 102, 102);}
.left_dotsVacation {position: absolute;width: 10px;height: 10px;background-color: rgb(51, 189, 97);border-radius: 50%;left: -5px;top: 50%;transform: translateY(-50%);-webkit-transform: translateY(-50%);
-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);}
/*老师回复*/
.teachReplyBox {margin: 10px 0 0px 35px;position: relative;}
.teachReplyInfo {width: 6rem;height: auto;display: block;background-color: rgb(248, 248, 248);border: 1px solid rgb(238, 238, 238);border-radius: 5px;margin-bottom: 5px;position: relative;margin-top: .36rem;}
.teachReplyInfo::after {content: "";display: block;height: 0;clear: both;visibility: hidden;}
.teachReplyLeftBox {width: 0.7rem;height: 0.7rem;border-radius: 50%;display: inline-block;float: left;}
.teachReplyRightBox {display: inline-block;height: 100%;float: left;width: 95%;}
.teachReplyRightTitle {display: inline-block;height: 35px;padding-left: 5px;}
.teachReplyRightDescribe {display: inline-block;margin-top: 0.3rem;margin-bottom: 0.3rem;margin-left: 0.3rem;}
.teachReplyName {font-size: 14px;color: rgb(102, 102, 102);display: block;margin-top: 2px;}
.teachReplyTitle_Time {font-size: 12px;color: rgb(153, 153, 153);}
.teachReplyRightDescribeInfo {font-size: 14px;}
.teachReplyBottom {padding-bottom: 10px;height: auto;}
/*三角形*/
.teachReplyInfo em, .teachReplyInfo .teachTop {display: block;width: 30px;height: 16px;font-size: 30px;overflow: hidden;_position: relative;margin-left: 0px;}
.teachReplyInfo em {margin-top: -16px;color: rgb(238, 238, 238);font-style: normal;}
.teachReplyInfo .teachTop {margin-top: -14px;color: rgb(248, 248, 248);}
/*左边线条*/
.teachReplyLeftLine {position: absolute;border-left: 1px solid rgb(51, 189, 97);left: -15px;top: -10px;height: .8rem;}
/*左边圆*/
.teachReplyLeftCircle {position: absolute;width: 10px;height: 10px;border-left: 1px solid rgb(51, 189, 97);left: -20px;top: .2rem;border-radius: 50%;background-color: rgb(51, 189, 97);}
/*右边提示*/
.statusTip {position: absolute;width: 40px;height: 42px;right: 0;top: 0;}
.statusTipTop {width: 100%;height: 22px;font-size: 12px;color: white;background-color: rgb(255, 102, 101);line-height: 22px;text-align: center;border-bottom: 1px solid rgb(255,131,130);}
.tip_approve_down {width: 0;height: 0;border-left: 20px solid transparent;border-right: 20px solid transparent;border-top: 20px solid rgb(255, 102, 101);}
/*不批准提示*/
.statusTipTop_disapprove {background-color: rgb(153, 153, 153);text-align: center;border-bottom: 1px solid rgb(172,172,172);}
.tip_approve_down__disapprove {border-top: 20px solid rgb(153, 153, 153);}
.otherTime {color: rgb(153,153,153);}
.noContent {position: absolute;width: 50%;left: 50%;top: 50%;transform: translate(-50%,-50%);-webkit-transform: translate(-50%,-50%);-moz-transform: translate(-50%,-50%);-ms-transform: translate(-50%,-50%);-o-transform: translate(-50%,-50%);}
.noContent p {text-align: center;margin-top: 35px;}
.img-responsive {display: block;width: 35px;border-radius: 50%;height: 35px;}
.pInfo {left: 50%;top: 70%;transform: translate(-50%,-50%);-webkit-transform: translate(-50%,-50%);-moz-transform: translate(-50%,-50%);-ms-transform: translate(-50%,-50%);-o-transform: translate(-50%,-50%);position: absolute;width: 100%;text-align: center;}
.vacationItemOther {height: auto;-webkit-box-align: flex-start;-moz-box-align: flex-start;-ms-flex-align: flex-start;-webkit-align-items: flex-start;align-items: flex-start;padding-bottom: 6px;padding-top: 6px;border: none;}
.vacation_titleOther {max-width: 80%;padding-left: 3px;line-height: 18px;}
.left_dotsVacationOther {top: 15px;border: none;}
.borderLine {position: absolute;border-left: 1px solid rgb(51, 189, 97);left: -1px;top: -3px;height: 35px;}
.teachReplyToptBox {height: .7rem;}
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); }
.header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } 
.header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } 
.header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } 
.mainColor { background: #06c1ae !important; } 
.header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
</style>
<title><?php  echo $school['title'];?></title>
</head>
<body> 
<!-- 请假记录列表 -->
<?php  if(is_array($xsqj)) { foreach($xsqj as $row) { ?>
	<section id="titlebar_bg" class="vacationRecord_section" <?php  if($row['key'] ==1) { ?>style="margin-top:10px;"<?php  } ?>>
		<div class="vacationItem">
			<span class="vacation_title"><?php  echo $language['leavelist_dxqd'];?>:</span><span class="vacation_mom vacation_left"><?php  echo $student['s_name'];?><?php  echo $row['guanxi'];?></span>
			<div class="left_dotsVacation"></div>
		</div>
		<div class="vacationItem">
			<span class="vacation_time">开始时间:</span><span class="vacation_time vacation_left"><?php  if($row['startime']) { ?><?php  echo $row['startime'];?><?php  } else { ?><?php  echo date('Y-m-d H:i:s',$row['startime1'])?><?php  } ?></span>
			<div class="left_dotsVacation"></div>
		</div>
		<div class="vacationItem">
			<span class="vacation_time">结束时间:</span><span class="vacation_time vacation_left"><?php  if($row['endtime']) { ?><?php  echo $row['endtime'];?><?php  } else { ?><?php  echo date('Y-m-d H:i:s',$row['endtime1'])?><?php  } ?></span>
			<div class="left_dotsVacation"></div>
		</div>
		<div class="vacationItem">
			<span class="vacation_title">类型:</span><span class="vacation_title vacation_left"><?php  echo $row['type'];?></span>
			<div class="left_dotsVacation"></div>
		</div>
		<div class="vacationItem vacationItemOther">
			<span class="vacation_title">原因:</span><span class="vacation_title vacation_titleOther"><?php  echo $row['conet'];?></span>
			<div class="left_dotsVacation left_dotsVacationOther"></div>
			<div class="borderLine"></div>
		</div>
		<?php  if($row['status'] >0) { ?>
			<div class="teachReplyBox">
				<div class="teachReplyToptBox">
					<div class="teachReplyLeftBox">
						<img src="<?php  if($row['thumb']) { ?><?php  echo tomedia($row['thumb'])?><?php  } else { ?><?php  echo tomedia($schol['tpic'])?><?php  } ?>" class="img-responsive">
					</div>
					<div class="teachReplyRightTitle">
						<span class="teachReplyName"><?php  echo $row['tname'];?>-<?php  echo $language['leavelist_tip'];?></span>
						<span class="teachReplyTitle_Time"><?php  echo date('Y-m-d H:i:s',$row['cltime'])?></span>
					</div>
				</div>
				<?php  if($row['reconet']) { ?>
				<div class="teachReplyInfo">
					<em>&#9670;</em>
					<span class="teachTop">&#9670;</span>				
					<div class="teachReplyRightBox">				
						<div class="teachReplyRightDescribe">
							<span class="teachReplyRightDescribeInfo"><?php  echo $row['reconet'];?></span>
						</div>
					</div>
				</div>
				<?php  } ?>
				<div class="teachReplyBottom">
					<span class="vacation_time otherTime">申请时间:</span><span class="vacation_time vacation_left otherTime"><?php  echo date('Y-m-d H:i:s',$row['createtime'])?></span>
				</div>
				<div class="left_teachReply"></div>
				<div class="teachReplyLeftLine"></div>
				<div class="teachReplyLeftCircle"></div>
			</div>
		<?php  } ?>	
			<?php  if($row['status'] ==1) { ?>
			<div class="statusTip">
				<div class="statusTipTop">批准</div>
				<div class="tip_approve_down"></div>
			</div>
			<?php  } else if($row['status'] ==2) { ?>
			<div class="statusTip">
				<div class="statusTipTop_disapprove">拒绝</div>
				<div class="tip_approve_down tip_approve_down__disapprove"></div>
			</div>	
			<?php  } else { ?>
			<div class="statusTip">
				<div class="statusTipTop_disapprove">待批</div>
				<div class="tip_approve_down tip_approve_down__disapprove"></div>
			</div>				
			<?php  } ?>
	</section>
<?php  } } ?>	
<input type="hidden" id="session_visit_sign" value="0" />
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<script type="text/javascript">
	$(function () {
		$('.vacationRecord_section').each(function () {

			if ($(this).find('.teachReplyBox')) {
				$(this).find('.vacationItemOther').css('border-left', '1px solid rgb(51, 189, 97)');
			}
		});
		// 底部加载更多
		//new Scroll_load({
		//	'limit': '0',
		//	'pageSize': 10,
		//	'ajax_switch': true,
		//	'ul_box': '.ask_for_leave_main',
		//	'li_item': '.ask_for_leave_main .leave_main',
		//	'ajax_url': '/1046/AttendCalendar/LeaveList',
		//	'page_name': 'parent_ask_for_leave',
		//	'after_ajax': function () {
		//	}
		//}).load_init();
	});
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
<?php  include $this->template('footer');?> 