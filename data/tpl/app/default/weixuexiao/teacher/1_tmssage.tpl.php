<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<?php  if(is_showgkk()) { ?>
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
.common_list_imgtext6 li a .icon_text .right_arrow_icon {width: 30px;height: 44px;position: absolute;right: 0;top: 0;
background: url(<?php echo MODULE_URL;?>public/mobile/img/right_arrow.png) no-repeat center;background-size: 9px 15px;}
.my_unseInfo_right {float: right;display: inline-block;background: url(<?php echo MODULE_URL;?>public/mobile/img/right_arrow.png) no-repeat center;
width: 30px;height: 100%;background-size: 9px 15px;}
.user_info {position: fixed;left: 0;right: 0;top: 0;bottom: 0;-webkit-box-sizing: border-box;box-sizing: border-box;background-color: rgba(0,0,0,.53);
text-align: center;z-index: 9999;font-size: 20px;color: #fe6700;}
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
.weui_switch {font-size: 14px;-webkit-appearance: none;-moz-appearance: none;appearance: none;position: relative;width: 48px;height: 28px;border: 1px solid #DFDFDF;outline: 0;border-radius: 16px;box-sizing: border-box;background: #DFDFDF;vertical-align: middle;float: right;top: 8px;right: 12px;}
.weui_switch:before {content: " ";position: absolute;top: 0;left: 0;width: 46px;height: 26px;border-radius: 15px;background-color: #FDFDFD;-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.weui_switch:after {content: " ";position: absolute;top: 0;left: 0;width: 26px;height: 26px;border-radius: 15px;background-color: #FFFFFF;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.icon_text >span {text-align: right;color: #888;line-height: 30px;margin-left: 47px;}
</style>
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
		<a >
		   <span style="font-size: 18px">职工请假</span>

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
					<span class="vacation_title">申请人:</span><span class="vacation_mom vacation_left"><?php  echo $row['tname'];?></span>
					<div class="left_dotsVacation"></div>
				</div>
				<div class="vacationItem">
					<span class="vacation_time">开始时间:</span><span class="vacation_time vacation_left"><?php  echo date('Y-m-d H:i:s',$row['startime1'])?></span>
					<div class="left_dotsVacation"></div>
				</div>
				<div class="vacationItem">
					<span class="vacation_time">结束时间:</span><span class="vacation_time vacation_left"><?php  echo date('Y-m-d H:i:s',$row['endtime1'])?></span>
					<div class="left_dotsVacation"></div>
				</div>
				<div class="vacationItem">
					<span class="vacation_title">类型:</span><span class="vacation_title vacation_left"><?php  echo $row['type'];?></span>
					<div class="left_dotsVacation"></div>
				</div>
				<?php  if(is_showgkk()) { ?>
		<div class="vacationItem">
			<span class="vacation_title">调课类型:</span><span class="vacation_title vacation_left">
				<?php  if($row['tktype'] == 0) { ?>
				无课
				<?php  } else if($row['tktype'] == 1) { ?>
				自主调课
				<?php  } else if($row['tktype'] == 2) { ?>
				教务处调课
				<?php  } ?>
				</span>
			<div class="left_dotsVacation"></div>
		</div>
		<?php  } ?>
				<div class="vacationItem vacationItemOther">
					<span class="vacation_title">原因:</span><span class="vacation_title vacation_titleOther"><?php  echo $row['conet'];?></span>
					<div class="left_dotsVacation left_dotsVacationOther"></div>
				</div>
				<!--老师回复-->
				<!--if 未处理-->
				<?php  if($row['status'] == 0) { ?>
				<div class="teachReplyBox">
					<div class="teachReplyTitleBox qx_01002_show">回复:<div class="lectBorderLine"></div></div>
					<div class="teachReplyInfo qx_01002_show">
						<em>&#9670;</em>
						<span class="teachTop">&#9670;</span>
						<textarea class="txtArea" rows="4"> </textarea>
					</div>
					<div class="teachReplyBottom">
						<span class="vacation_time otherTime">申请时间:</span><span class="vacation_time vacation_left otherTime"><?php  echo date('Y-m-d H:i:s',$row['createtime'])?></span>
					</div>
					<div class="left_teachReply"></div>
					<div class="teachReplyLeftLine"></div>
					<div class="teachReplyLeftCircle"></div>
				</div>
				<!--endif未处理，else年级主任同意，待校长同意-->
				<?php  } else if($row['status'] == 3 ) { ?>
				<div class="teachReplyBox">
					<div class="teachReplyToptBox">
						<div class="teachReplyLeftBox">
							<img src="<?php  if($row['njzricon']) { ?><?php  echo tomedia($row['njzricon'])?><?php  } else { ?><?php  echo tomedia($schol['tpic'])?><?php  } ?>" class="img-responsive">
						</div>
						<div class="teachReplyRightTitle">
							<span class="teachReplyName">年级主任：<?php  echo $row['njzrtname'];?>【已批准】</span>
							<span class="teachReplyTitle_Time"><?php  echo date('Y-m-d H:i:s',$row['njzrcltime'])?></span>
						</div>
					</div>
					<?php  if(!empty($row['njzryj'])) { ?>
					<div class="teachReplyInfo">
						<?php  echo $row['njzryj'];?>
					</div>
					<?php  } ?>
					<!--如果当前教师为校长-->
					<?php  if($isxz['status'] == 2) { ?>
					<div class="teachReplyTitleBox qx_01002_show">回复:<div class="lectBorderLine"></div></div>
					<div class="teachReplyInfo qx_01002_show">
						<em>&#9670;</em>
						<span class="teachTop">&#9670;</span>
						<textarea class="txtArea" rows="4"> </textarea>
					</div>
					<?php  } ?>
					<div class="teachReplyBottom">
						<span class="vacation_time otherTime">申请时间:</span><span class="vacation_time vacation_left otherTime"><?php  echo date('Y-m-d H:i:s',$row['createtime'])?></span>
					</div>
					<div class="left_teachReply"></div>
					<div class="teachReplyLeftLine"></div>
					<div class="teachReplyLeftCircle"></div>
				</div>
				<!--endif年级主任同意待校长审批，if已最终同意或拒绝-->
				<?php  } else { ?>
				<div class="teachReplyBox">

					<!--if 已最终同意-->
					<?php  if($row['status'] == 1 || $row['status'] == 2 ) { ?>
					<!--if经过了年级主任审批-->
					<!--显示年级主任的审批意见-->
					<?php  if(!empty($row['tonjzrid']) && $row['tozxid'] != 0 ) { ?>
					<div class="teachReplyToptBox">
						<div class="teachReplyLeftBox">
							<img src="<?php  if($row['njzricon']) { ?><?php  echo tomedia($row['njzricon'])?><?php  } else { ?><?php  echo tomedia($schol['tpic'])?><?php  } ?>" class="img-responsive">
						</div>
						<div class="teachReplyRightTitle">
							<span class="teachReplyName">年级主任：<?php  echo $row['njzrtname'];?>【已批准】</span>

						</div>
					</div>
					<div class="teachReplyInfo">
						<textarea class="txtArea" rows="4" readonly="readonly"><?php  echo $row['njzryj'];?></textarea>

					</div>
					<?php  } ?>
					<!--endif经过了年级主任审批-->
					<?php  } ?>
					<!--endif 已最终同意-->

					<!--显示最终审批意见-->
					<?php  if($row['reconet']) { ?>
					<div class="teachReplyToptBox">
						<div class="teachReplyLeftBox">
							<img src="<?php  if($row['clicon']) { ?><?php  echo tomedia($row['clicon'])?><?php  } else { ?><?php  echo tomedia($schol['tpic'])?><?php  } ?>" class="img-responsive">
						</div>
						<div class="teachReplyRightTitle">
							<span class="teachReplyName">
								<?php  if(IsHasQx($row['cltid'],'shjsqj',2,$schoolid) && !is_xz($row['cltid'])) { ?>
								教导处：
								<?php  } else if(is_xz($row['cltid']) && !empty($row['toxztid'])) { ?>
								校长:
								<?php  } else if(is_xz($row['cltid']) && empty($row['toxztid'])) { ?>
								教导处：
								<?php  } ?>
								<?php  echo $row['cltname'];?>
								</span>
							<span class="teachReplyTitle_Time"><?php  echo date('Y-m-d H:i:s',$row['cltime'])?></span>
						</div>
					</div>
					<div class="teachReplyInfo">
						<em>&#9670;</em>
						<span class="teachTop">&#9670;</span>
						<textarea class="txtArea" rows="4" readonly="readonly"><?php  echo $row['reconet'];?></textarea>
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
				<!--endif已最终同意或拒绝-->

				<!--状态显示-->
				<?php  if($row['status'] == 0 || $row['status'] == 3 ) { ?>
				<div class="statusTip">
					<div class="statusTipTop statusTipTop_disapprove">待批</div>
					<div class="tip_approve_down tip_approve_down__disapprove"></div>
				</div>
				<?php  } else if($row['status'] == 2) { ?>
				<div class="statusTip">
					<div class="statusTipTop ">拒绝</div>
					<div class="tip_approve_down "></div>
				</div>
				<?php  } else if($row['status'] == 1) { ?>
				<div class="statusTip">
					<div class="statusTipTop" style="background-color:#3ba1dc;border-bottom-color:#3ba1dc">批准</div>
					<div class="tip_approve_down" style="border-top-color:#3ba1dc"></div>
				</div>
				<?php  } ?>
				<!--结束状态显示-->

				<div class="signin_leftBox"></div>
				<!--if待处理-->
				<?php  if($row['status'] == 0 ||  $row['status'] == 3 ) { ?>
				<!--	if 是年级主任  且 不是校长  且 状态为初始待审批（未经过年级主任审批）-->
				<?php  if(in_array($isxz['fz_id'],$fzarr) && $isxz['status'] != 2 && $row['status'] == 0 ) { ?>
				<div  class="vacationItem vacationItemBtn qx_01002_show">
					<a href="javascript:;" class="refuse">
						<div class="btn_refuse teacher_leave_but" agree-type="disagree" tk-id="<?php  echo $row['tktype'];?>" data-id="<?php  echo $row['id'];?>">拒绝</div>
					</a>
					<a href="javascript:;" class="approve">
						<div class="btn_approve teacher_leave_but" agree-type="njzragree" tk-id="<?php  echo $row['tktype'];?>" data-id="<?php  echo $row['id'];?>">批准</div>
					</a>
				</div>

					<!--endif是年级主任  且 不是校长  且 状态为初始待审批（未经过年级主任审批) , if 是校长-->
				<?php  } else if($isxz['status'] == 2) { ?>
					<div class="vacationItem vacationItemBtn qx_01002_show">
						<a href="javascript:;" class="refuse">
							<div class="btn_refuse teacher_leave_but" agree-type="disagree" tk-id="<?php  echo $row['tktype'];?>" data-id="<?php  echo $row['id'];?>">拒绝</div>
						</a>
						<a href="javascript:;" class="approve">
							<div class="btn_approve teacher_leave_but" agree-type="agree" tk-id="<?php  echo $row['tktype'];?>" data-id="<?php  echo $row['id'];?>">批准</div>
						</a>
					</div>
				<?php  } ?>
				<!--end if 是校长-->
				<?php  } ?>
				<!--end if 待审批-->
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
<div class="clear"></div>
</div>
<div class="user_info" id="user_info" style="display:none;">
   <div style="border-radius: 5%;">
		<ul>
			<p style="font-size:18px">选择抄送对象</p>

			<li class="user_name">
			<input id="leave_id" name="leave_id" data_id="0" type="hidden">
			<input id="njzrcontent" name="njzrcontent" data_id="0" type="hidden">
				<span>选择抄送对象</span>
				<select class="select" name="select" id="totid" >
			     	<option value="">选择收件人</option>
					<?php  if(is_array($xzlist)) { foreach($xzlist as $row) { ?>
		         	<option value="<?php  echo $row['id'];?>"><?php  echo $row['tname'];?></option>
					<?php  } } ?>
		     	</select>
		     	<span>选择调课状态</span>
		     	<select class="select" name="tiaoke" id="tiaoke" >

		         	<option value="0"  >无课</option>
		         	<option value="1"  >自主调课</option>
					<option value="2" >教务处调课</option>
						</select>
			</li>
		</ul>
		<div class="close_pupop_c">
			<div id="tijiao1" class="close_pupop_button close_pupop_button_1 float_l">确定</div>
			<div id="close" class="close_pupop_button close_pupop_button_2 float_l">取消</div>
		</div>
   </div>
</div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<script>
	$("#close").on('click', function () {
	$('#user_info').hide();
});

$("#tijiao1").on('click', function () {
	var leaveid = $('#leave_id').attr('data_id');
	var toxztid =  $('#totid').val();
	var tktype =  $('#tiaoke').val();
	var njzrcontent = $('#njzrcontent').val();

	if(!toxztid)
	{
		jTips("请选择抄送对象");


	}else{


	data = {
		leaveid:leaveid,
		toxztid:toxztid,
		njzrcontent:njzrcontent,
		schoolid:<?php  echo $schoolid;?>,
		weid:<?php  echo $weid;?>,
		tktype:tktype
	}
	$.post("<?php  echo $this->createMobileUrl('indexajax',array('op'=>'njzragree'))?>",data,
		function(data){
			if(data.result){
				jTips(data.info);
				location.reload();
			}else{
				jTips(data.info);
				location.reload();
			}
		},'json');
		}

});

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
				$(".alert_msg").text("您确定要批准该老师的请假吗？");
					$("#popup_leave").css("display", "block");
			} else if(agreetype == 'njzragree'){
				$('#user_info').show();
				var id = $(self).attr("data-id");
				var tkid = $(self).attr("tk-id");
				var content = $(self).parent().parent().siblings().find(".txtArea").val().trim();
				$('#leave_id').attr('data_id',id);
				//alert(tkid);
				 $("#tiaoke").val(tkid);


				$('#njzrcontent').val(content);
			}else{
				$(".alert_msg").text("您确定要拒绝该老师的请假吗？");
					$("#popup_leave").css("display", "block");
			}

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
						if (msg.status == '1') {
							jTips(msg.info, function() {
								window.location.reload();
							});
						}
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
<?php  } else { ?>
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=4.80120" />
<style>
.ttt{width: 94%;margin-left: 3%;margin-top: 10px;margin-bottom: 15px;border-radius:10px;border:1px solid #efefef;box-shadow:2px 2px 10px #c1c1c1;}
.attendance{height: 70px;}
.r1{float: left;height: 70px;margin-top: 5px;text-align: center;width: 34%;}
.m1{border-width: 1px;width: 30%;text-align: center;float: left;height: 70px;margin-top: 5px;}
.l1{float: left;height: 70px;margin-top: 5px;width: 34%;text-align: center;}
.t div.t1, div.t2, div.t3 {width: 100%;height: 34px;line-height: 40px;font-size:16px;font-weight:bold}
.bb{height:1px;background:#efefef}
</style>

<html xmlns="http://www.w3.org/1999/xhtml">
<title><?php  echo $school['title'];?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/mMessageList.css?v=4.80219" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=4.80120" />
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
</head>
<body>
<div class="all">
	<?php  if(is_showpf()) { ?>
	<div class="ttt">
		<div class="attendance">
			<div class="r1">
				<div class="t">
					<div class="t1">今日请假</div>
					<div id="num1"><?php  echo $leave_today;?>人</div>
				</div>
			</div>
			<div class="m1">
				<div class="t">
					<div class="t2">本周请假</div>
					<div id="num2"><?php  echo $leave_week;?>人</div>
				</div>
			</div>
			<div class="l1">
				<a id="showhistory">
					<div class="t">
						<div class="t3">本月请假</div>
						<div id="num3"><?php  echo $leave_month;?>人</div>
					</div>
				</a>
			</div>
		</div>
		<div class="bb"></div>
		<div class="bbv" onclick="gotoall();" style="text-align:center;color:gray;height:30px">
			<span style="line-height:25px">点击查看汇总信息>></span>
		</div>
	</div>
	<?php  } ?>
		<!-- 我的消息 start -->

		<div id= "myMessage"class="tab">
		<?php  if(in_array($isxz['fz_id'],$fzarr)) { ?>
		<?php  if(is_array($leave)) { foreach($leave as $item) { ?>
		<ul>
	        <a class="qx_01002" href="<?php  echo $this->createMobileUrl('tmcomet', array('schoolid' => $schoolid, 'id' => $item['id']), true)?>">
			    <li class="messageItem">
			      <div class="avatar">
                      <img class="l" src="<?php  if($item['icon']) { ?><?php  echo tomedia($item['icon'])?><?php  } else { ?><?php  echo tomedia($school['tpic'])?><?php  } ?>" alt="头像">
					  <?php  if($item['status'] == 0) { ?>
		              <div class="unread l"></div>
					  <?php  } else { ?>
                      <div class="l"></div>
					  <?php  } ?>
			      </div>
				  <input id="leaveid" type="hidden" value="<?php  echo $item['id'];?>" />
			      <div class="msgBody">
			         <div class="msgHeader">
			         <div class="msgTitle">
					 |<?php  echo $item['tname'];?>|老师的请假申请
					 <?php  if($item['status'] == 1) { ?>
					 <span style="color:blue;font-weight:bold">【已同意】</span>
					 <?php  } else if($item['status'] == 2) { ?>
					  <span style="color:red;font-weight:bold">【已拒绝】</span>

					 <?php  } ?>
					 </div>
			      </div>
		             <div class="msgContent"><?php  echo $item['conet'];?></div>
		             <div class="msgSender l"><?php  echo $teacher[$item['tid']]['tname'];?></div>
			         <div class="msgTime l"><?php  echo (date('Y-m-d H:m:s',$item['createtime']))?></div>
			      </div>
			   </li>
			</a>
        </ul>
		<?php  } } ?>
		<?php  } ?>
		</div>

		<!-- 我的消息 end -->

		<div style="display:none;" id="oWindow" class="mainColor PromptBox"></div>
	</div>

<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
<?php  include $this->template('newfooter');?>
<!-- Json处理工具 -->
</html>
<script>

function gotoall() {
	location.href = "<?php  echo $this->createMobileUrl('tqingjiaall',array('schoolid'=>$schoolid))?>";
};



setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		$("#titlebar_bg").hide();
		document.title="职工请假记录";
	}
}, 100);

</script>
<?php  } ?>
<script>
$(function(){
	<?php  if(!IsHasQx($tid_global,2001002,2,$schoolid) ) { ?>
		$(".qx_01002_show").hide();
		$(".qx_01002").attr("href","#");
	<?php  } ?>
});
</script>