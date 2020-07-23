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
<?php  include $this->template('port');?>
<style>
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
.teachReplyInfo .teachTop {margin-top: -14px;color: rgb(248, 248, 248);position: absolute;}
/*左边线条*/
.teachReplyLeftLine {position: absolute;left: -15px;top: -34px;height: 32px;}
/*左边圆*/
.teachReplyLeftCircle {position: absolute;width: 10px;height: 10px;border-left: 1px solid #06c1ae;left: -20px;top: 8px;border-radius: 50%;background-color: #06c1ae;}
/*右边提示*/
.statusTip {position: absolute;width: 40px;height: 42px;right: 0;top: 0;}
.statusTipTop {width: 100%;height: 22px;font-size: 12px;color: white;background-color: rgb(255, 102, 101);line-height: 22px;text-align: center;border-bottom: 1px solid rgb(255, 131, 130);}
.tip_approve_down {width: 0;height: 0;border-left: 20px solid transparent;border-right: 20px solid transparent;border-top: 20px solid rgb(255, 102, 101);}
/*不批准提示*/
.statusTipTop_disapprove {background-color: rgb(153, 153, 153);text-align: center;border-bottom: 1px solid rgb(172, 172, 172);}
.tip_approve_down__disapprove {border-top: 20px solid rgb(153, 153, 153);}
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
		<a id="showbjlist">
		   <span style="font-size: 18px"><?php  echo $bjidname['sname'];?></span> 
		   <i></i>
	   </a>
	</div>
</div>
<div class="All">
<div class="list">
    <div class="listContent" style="margin-top: 15px">
        <div class="leave" style="padding: 0">
		<?php  if(is_array($leave)) { foreach($leave as $row) { ?>
			<section class="vacationRecord_section">
				<div class="vacationItem">
					<span class="vacation_title">申请人:</span><span class="vacation_mom vacation_left"><?php  echo $row['s_name'];?><?php  echo $row['guanxi'];?></span>

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
				</div>
				<!--老师回复-->
				<?php  if($row['status'] == 0) { ?>
				<div class="teachReplyBox qx_00402">
					<div class="teachReplyTitleBox">回复:<div class="lectBorderLine"></div></div>
					<div class="teachReplyInfo">
						<em>&#9670;</em>
						<span class="teachTop">&#9670;</span>
						<textarea class="txtArea " rows="4"> </textarea>
					</div>
				</div>
				<?php  } else { ?>
				<div class="teachReplyBox">
					<div class="teachReplyToptBox">
						<div class="teachReplyLeftBox">
							<img src="<?php  if($row['thumb']) { ?><?php  echo tomedia($row['thumb'])?><?php  } else { ?><?php  echo tomedia($schol['tpic'])?><?php  } ?>" class="img-responsive">
						</div>
						<div class="teachReplyRightTitle">
							<span class="teachReplyName"><?php  echo $row['tname'];?>-老师</span>
							<span class="teachReplyTitle_Time"><?php  echo date('Y-m-d H:i:s',$row['cltime'])?></span>
						</div>
					</div>
					<?php  if($row['reconet']) { ?>					
					<div class="teachReplyTitleBox">回复: <div class="lectBorderLine"></div></div>
					<div class="teachReplyInfo">
						<em>&#9670;</em>
						<span class="teachTop">&#9670;</span>
						<textarea class="txtArea" rows="4" readonly="readonly"><?php  echo $row['reconet'];?></textarea>
					</div>
					<?php  } ?>
				<?php  } ?>
					<div class="teachReplyBottom">
						<span class="vacation_time otherTime">申请时间:</span><span class="vacation_time vacation_left otherTime"><?php  echo date('Y-m-d H:i:s',$row['createtime'])?></span>
					</div>
					<div class="left_teachReply"></div>
					<div class="teachReplyLeftLine"></div>
					<div class="teachReplyLeftCircle"></div>
				</div>
				
				<?php  if($row['status'] == 0) { ?>				
				<div class="statusTip">
					<div class="statusTipTop statusTipTop_disapprove">待批</div>
					<div class="tip_approve_down tip_approve_down__disapprove"></div>
				</div>
				<?php  } else if($row['status'] == 2) { ?>
				<div class="statusTip">
					<div class="statusTipTop statusTipTop_disapprove">拒绝</div>
					<div class="tip_approve_down tip_approve_down__disapprove"></div>
				</div>
				<?php  } else { ?>
				<div class="statusTip">
					<div class="statusTipTop">批准</div>
					<div class="tip_approve_down"></div>
				</div>				
				<?php  } ?>
				<div class="signin_leftBox"></div>
				<?php  if($row['status'] == 0) { ?>
				<div class="vacationItem vacationItemBtn">
					<a href="javascript:;" class="refuse">
						<div class="btn_refuse teacher_leave_but qx_00402" agree-type="disagree" data-id="<?php  echo $row['id'];?>">拒绝</div>
					</a>
					<a href="javascript:;" class="approve">
						<div class="btn_approve teacher_leave_but qx_00402" agree-type="agree" data-id="<?php  echo $row['id'];?>">批准</div>
					</a>
				</div>
				<?php  } ?>
			</section>
		<?php  } } ?>	
        </div>
    </div>
</div>
<!------------提示框-------------!-->
<div id="popup_leave" class="popup_leave">
    <div class="popup_leave_div">
        <div style="font-size: 14px;color:#111111" class="alert_msg">操作后将无法修改，您确定要拒绝学生的请假吗？</div>
        <div class="popup_leave_input">
            <div class="popup_leave_button popup_leave_button_left">
                <input class=" popup_leave_coloer_1 click_close" type="button" value="确定" data-index="1" />
            </div>
            <div class="popup_leave_button">
                <input class=" popup_leave_coloer_2 click_close" type="button" value="取消" data-index="0" />
            </div>
        </div>
    </div>
</div>
<div class="selectList" id="selectList" style="z-index:100000;display:none;">
	<div class="single" style="border-radius: 10px;">
		<ul>
			<span style="color:#444;">切换班级</span>
		<?php  if(is_array($bjlist)) { foreach($bjlist as $row) { ?>
			<li onclick="isSelect(<?php  echo $row['sid'];?>);"><span class="ri"><?php  echo $row['sname'];?></span></li>
		<?php  } } ?>
		</ul>
	</div>
</div>
<div class="clear"></div>
</div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<script>
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		document.title="学生请假记录";
	}
}, 100);
 
	window.onload = function() {
		
		//高度  signin_leftBox

		$('.vacationRecord_section').each(function (index, obj) {

			$scHeight = $(this).height();
			$(this).find('.signin_leftBox').css('height', $scHeight - 110);
		 
		});
	}
	var PB = new PromptBox();
	$(function() {

	
			<?php  if(!(IsHasQx($tid_global,2000402,2,$schoolid))) { ?>
				$(".qx_00402").hide();
			<?php  } ?>

		// 底部加载更多
		// new Scroll_load({
		// 	'limit': '0',
		// 	'pageSize': 10,
		// 	'ajax_switch': true,
		// 	'ul_box': '.leave',
		// 	'li_item': '.leave .leave_main',
		// 	'ajax_url': '/1046/Leave/LeaveList',
		// 	'page_name': 'teacher_ask_for_leave',
		// 	'after_ajax': function() {
		// 	}
		// }).load_init();

		var self;
		var agreetype;


		//请假处理
		$(".listContent").on("click", ".teacher_leave_but", function() {
			self = this;
			agreetype = $(self).attr("agree-type");
			if (agreetype == 'agree') {
				$(".alert_msg").text("您确定要批准学生的请假吗？");
			} else {
				$(".alert_msg").text("您确定要拒绝学生的请假吗？");
			}
			$("#popup_leave").css("display", "block");
		});

		$(".popup_leave_button .click_close").click(function() {
			is_sure = $(this).attr('data-index');
			if (is_sure == '1') {
				var id = $(self).attr("data-id");
				var content = $(self).parent().parent().siblings().find(".txtArea").val().trim();
				content = iphone_emoji_filter(content);
				PB.prompt("数据提交中，请稍等~","forever");
				$.ajax({
					type: "POST",
					dataType: 'json',
					url: "<?php  echo $this->createMobileUrl('indexajax',array('op'=>'sagree'))?>",
					data: { id: id, content: content, agreetype: agreetype, openid :"<?php  echo $openid;?>",schoolid :"<?php  echo $schoolid;?>",weid :"<?php  echo $weid;?>",tid :"<?php  echo $it['tid'];?>",userid:"<?php  echo $it['id'];?>",tname :"<?php  echo $teachers['tname'];?>"},
					success: function(msg) {
						// if (msg.status == '1') {
						// 	jTips(msg.info, function() {
						// 		window.location.reload();
						// 	});
						// }
					},
				});
			}
			$("#popup_leave").css("display", "none");
		});

	});
</script>
<script type="text/javascript">
		$("#showbjlist").on('click', function () {
            $('#selectList').show();
		});

        $(".wkplan_add").on("click", function () {
            $(".wk_style").show();

        })
        $(".wk_del").on("click", function () {
            $(".wk_style").hide();
        })
	function isSelect(bjid){
		jTips("数据加载中！···");
		location.href = "<?php  echo $this->createMobileUrl('smssage', array('schoolid' => $schoolid), true)?>"+ '&bj_id=' + bjid;
	}		
</script>
<?php  include $this->template('newfooter');?>