<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no,email=no" name="format-detection">
<meta name="App-Config" content="fullscreen=yes,useHistoryState=yes,transition=yes">
<script src="<?php echo OSSURL;?>public/mobile/js/hb.js"></script>
<link href="<?php echo OSSURL;?>public/mobile/css/Teacher_AttendCalendar.css" rel="stylesheet" />
<link href="<?php echo OSSURL;?>public/mobile/css/common.css?v=112420160902" rel="stylesheet" />
<script src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<style>
body {background-color: #f0f0f2 !important;box-sizing: border-box !important;font-size: 14px;} .topMarign {margin: 0;} .topMarignOther {margin-top: 15px;} .topMarignOtherNoFirst {margin-top: 15px;} .okSignIcontentBox {margin: 15px 0px;} .conentBox_Other { width: 100%; display: -webkit-box; /* 老版本语法: Safari,  iOS, Android browser, older WebKit browsers.  */ display: -moz-box; /* 老版本语法: Firefox (buggy) */ display: -ms-flexbox; /* 混合版本语法: IE 10 */ display: -webkit-flex; /* 新版本语法： Chrome 21+ */ display: flex; /* 新版本语法： Opera 12.1, Firefox 22+ */ /*水平居中*/ /*老版本语法*/ -webkit-box-pack: center; -moz-box-pack: center; /*混合版本语法*/ -ms-flex-pack: center; /*新版本语法*/ -webkit-justify-content: center; justify-content: center; } .mainColor{background:<?php  echo $school['headcolor'];?> !important;} .PromptBox {position: fixed;z-index: 2000;top: 30%;color: #fff;padding: 13px 20px;font-size: 16px;display:none;} .topInfoAm {width: 80px;height: 80px;margin-top: 20px;border-radius: 50%;background-color: rgb(239, 250, 243);display: inline-block;box-sizing: border-box;} .topInfoPm {width: 80px;height: 80px;margin-top: 20px;border-radius: 50%;background-color: rgb(239, 250, 243);display: inline-block;margin-left: 20%;box-sizing: border-box;} .classmonthTitle {margin-top: 10px;} .classmonthData {margin-top: 0px;} .top_bottom {position: absolute;margin: 0;bottom: 10px;left: 50%;transform: translateX(-50%);-webkit-transform: translateX(-50%);-moz-transform: translateX(-50%);-ms-transform: translateX(-50%);-o-transform: translateX(-50%);margin-left: 10px;max-width: 90px;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;} .contentOuterBox {position: relative;width: 100%;} .classContentBox, .classContentBoxPm {margin-left: 0;position: absolute;top: 0;left: 10px;transition: all .4s ease-in;padding-bottom:55px;} .contentBoxMonve {-moz-transform: translateX(-150%);-webkit-transform: translateX(-150%);-ms-transform: translateX(-150%);transform: translateX(-150%);} .ContentBoxIsShow {display: block;} .selectItem {background: #ff9f22;} .titleOther {color: white;} .selectOtherItem {opacity: .8;} .colorOther {color: rgb(102, 102, 102) !important;} .month_Attendence_left {background: url("<?php echo OSSURL;?>public/mobile/img/query_see_Ico.png") no-repeat bottom;background-size: 16px 20px;display: inline-block;width: 20px;height: 18px;display: inline-block;float: left;} .top_right {width: 85px;height: 25px;position: absolute;right: 0px;top: 10px;background: url("<?php echo OSSURL;?>public/mobile/img/top_right_ico.png") no-repeat center;background-size: 85px 25px;} .slide_left_menu_ul li.act {background: url(<?php echo OSSURL;?>public/mobile/img/be_choose_icon_02.png) right center no-repeat;background-size: 16px;background-origin: content-box;-moz-background-origin: content-box;-webkit-background-origin: content-box;} .headerContent a i {float: left;margin: 20px 0 0 1px;width: 0;height: 0;border-width: 6px 6px 0;border-style: solid;border-color: white transparent transparent;position: absolute;} .user_info{position:fixed; left:0; right:0; top:0; bottom:0;-webkit-box-sizing:border-box; box-sizing:border-box; background-color:rgba(0,0,0,.53); text-align:center; z-index:9999;font-size:20px;color:#fe6700;} .user_info>div{ position:absolute; left:6%; right:6%; top:45px; padding: 0 20px; background-color:#fff; padding-bottom:33px; padding-top: 10px;} .user_name{ text-align: left; color:#666; font-size: 14px;} .user_name > select{ display:block;width:100%;height:44px; padding: 0 10px; margin-bottom: 10px; border:1px solid #ccc;-webkit-box-sizing: border-box; box-sizing: border-box;text-align: left; color:#666; font-size: 14px;} .user_name > input{display: block;width:100%;height:44px; padding: 0 10px; margin-bottom: 10px; border:1px solid #ccc;-webkit-box-sizing: border-box; box-sizing: border-box;} .user_name > input::-webkit-input-placeholder{ color: #666;font:15px "黑体";} .user_info>div>span{display:inline-block;width:30px;height:30px;background:#fff;font-size:24px;color:#aaa;-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;border-radius:100%;line-height:30px;	text-align:center;position:absolute;top:-15px;right:-15px;font-family:宋体b8b\4f53;cursor:default;}  .component-panel {position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: 15;background: rgba(0,0,0,.7);} .component-dialog {position: absolute;top: 30%;left: 50%;-webkit-transform: translateX(-50%) translateY(-50%);transform: translateX(-50%) translateY(-50%);background: #fff;padding: 10px;width: 80%;border-radius: 10px;} .dialog-order>.component-dialog-title {text-align: center;} .component-dialog-body {padding: 10px 0 12px;} .component-dialog-title {font-size: 16px;font-weight: 200;} .arrange-detail>ol {box-sizing: border-box;} .form-order>.form-line {margin-bottom: 5px;} .form-order>.form-line {margin-bottom: 12px;margin-top: 12px;} .btnthis {height: 30px;background-color: #7bb52d;font: 16px "黑体";text-align: center;color: #fff;cursor: pointer;border-radius:10px} .div_closd{margin-left:13%; width:30%;color: #fff;background-color: #f1ad31;border-color: #f1ad31;float:left;line-height:30px} .div_sure{margin-right:13%; width:30%;float:right;line-height:30px} .ovfHiden{overflow:hidden} .SelectInRange{text-align:center;text-align-last:center;width:90%;margin:8px;height:30px;border-radius: 3px;} .checkBoxOptionsIco { display: inline-block; width: 13px; position: relative; top: 1px; margin-right: 4px; } .weui_cell_ft { text-align: right; color: #888; line-height: 30px; } .answer_checkbox { position: absolute; display: block; width: inherit; height: .4rem; top: 0; left: 0; opacity: 0; }
.send_select_span{width:40%;display:inline-block;line-height: 30px;margin-left: 5px}
.click {width: auto;height: 40px;right: 0;top: 93px;background-color: #ceb750;border-radius: 50px 0 0 50px;z-index: 2; position: fixed;}
.font_icon{width: 15px;margin-top: 12px;margin-left: 7px;margin-right: 2px;}
.useredits{line-height: 15px;float: right;margin-right: 4px;color:#fff;width:44px;margin-top: 5px}
</style>
<title><?php  echo $school['title'];?></title>
</head>

<?php  if(is_showap()) { ?>
<?php  if($IsShowCheckDetail == true) { ?>
<a class="click" id="GoToDetail" style="top:70px">
    <img class="font_icon" src="<?php echo MODULE_URL;?>public/mobile/img/change_image.png"></img><div class="useredits">查看详细记录</div>
</a>
<?php  } ?>
<?php  } ?>
<a class="click" id="GoToDetail" style="top:70px">
	<img class="font_icon" src="<?php echo MODULE_URL;?>public/mobile/img/change_image.png"></img><div class="useredits">查看详细记录</div>
</a>
<header class="mainColor">
	<div class="hederRightBox" style="left:5px">
		<a href="javascript:;" id="set_send">
			<img src="<?php echo OSSURL;?>public/mobile/img/set_icon_round.png" class="img-responsive">
		</a>
	</div>
    <div class="headerContent">
        <div class="select_date"><?php  if($time) { ?><?php  echo $time;?><?php  } else { ?><?php  echo date('Y-m-d',time())?><?php  } ?></div>
        <a id="showdate" class="select_next_right">
            <i></i>
        </a>
    </div>
    <div class="hederRightBox">
        <a href="javascript:;" class="choice_baby">
            <img src="<?php echo OSSURL;?>public/mobile/img/selectMean.png" class="img-responsive">
        </a>
    </div>
</header>
<section>
    <div class="conentBox_Other">
        <div class="topInfoAm selectItem">
            <div class="classmonthData"><span class="titleOther" id="dxl"><?php  echo $jxl;?></span><span class="unitMonthData titleOther">%</span></div>
            <div class="classmonthTitle titleOther">到校出勤率</div>
        </div>
        <div class="topInfoPm selectOtherItem">
            <div class="classmonthData colorOther"><span id="lxl"><?php  echo $lxl;?></span><span class="unitMonthData">%</span></div>
            <div class="classmonthTitle">离校出勤率</div>
        </div>
    </div>
    <a href="javascript:;">
        <div class="week_Attendence">
            <span class="week_AttendenceBox">本班级总人数:</span>
            <span class="Attendencecontent"><?php  echo $snum;?>人</span>
        </div>
    </a>
	<a href="<?php  echo $this->createMobileUrl('sign', array('schoolid' => $schoolid,'bj_id' => $bj_id,'time' => $time), true)?>" class="monthAttendenceInfo qx_00604">
		<div class="month_Attendence">
			<span class="month_Attendence_left"></span><span class="month_AttendenceBox">查看学生考勤</span>
		</div>
	</a>
    <div class="top_bottom" class_id="<?php  echo $nowbj['sid'];?>"><?php  echo $nowbj['sname'];?></div>
</section>
<div class="contentOuterBox">   
		<div class="classContentBox">    
			<div class="contentTop topMarignOtherNo">
				<div class="nullDiv">
					<div class="top_left">
						<span class="signInNotSure">签到未确认</span>
						<span class="signInNotSureNum" id="signInNo"><?php  echo $qdams;?></span>
					</div>
					<?php  if($school['is_wxsign'] ==1) { ?>
					<div class="top_right qx_00603" id="top_rightNoTrue">
						<a href="javascript:;" class="btn_CheckSignIn">
							<div class="signInNotSureInfo">
								<div class="signInNotSureDesgn">确认</div>
								<div class="signInDesgnImg">
									<img src="<?php echo OSSURL;?>public/mobile/img/sginInbtnEdit_ico.png" class="img-responsive">
								</div>
							</div>
						</a>
					</div> 
					<?php  } ?>	
				</div>
			</div>
			<?php  if($qdwqram) { ?>
			<div class="noSignIcontentBox topMarignOtherNoFirst">
			<?php  if(is_array($qdwqram)) { foreach($qdwqram as $row) { ?>
				<div class="noSignItemNotSure"><?php  echo $row['s_name'];?></br><?php  echo date('H:m',$row['createtime'])?>
					<div class="tipCheckNotSure" logid="<?php  echo $row['id'];?>" log_sname = "<?php  echo $row['s_name'];?>" log_time = "<?php  echo date('H:m',$row['createtime'])?>" log_sid = "<?php  echo $row['sid'];?>">
						<input type="checkbox" name="selectSignIn" value="<?php  echo $row['id'];?>">
						<img src="<?php echo OSSURL;?>public/mobile/img/sgin_select_ico.png" class="img-responsive isNotSureInfoSelect">
					</div>
				</div>
			<?php  } } ?>	
			</div>
			<?php  } ?>	
			<div class="contentTop">
				<div class="nullDiv nullDivOther">
					<div class="top_left">
						<span class="noSignIn">未签到</span>
						<span class="noSignInInfo noSignInfoSpan" id="signInNotSureNum"><?php  echo $wqdnum;?></span>
					</div>
					<?php  if($school['is_wxsign'] ==1) { ?>
					<div class="top_right qx_00602" id="top_rightNo">
						<a href="javascript:;" class="btn_SignIn">                      
							<div class="signInInfo">
								<div class="signInDesgn">补签</div>
								<div class="signInDesgnImg">
									<img src="<?php echo OSSURL;?>public/mobile/img/sginInbtnEdit_ico.png" class="img-responsive">
								</div>
							</div>
						</a>
					</div>
					<?php  } ?>
				</div>
			</div>
			<div class="noSignIcontentBox topMarign topMarignOther">
				<?php  if(is_array($students)) { foreach($students as $row) { ?>
				<?php  if(!$row['ischeck']) { ?>
					<div class="noSignItem"><?php  echo $row['s_name'];?>
						<div class="tipCheck" studentid="<?php  echo $row['id'];?>" stu_sname = "<?php  echo $row['s_name'];?>" >
							<input type="checkbox" name="selectSignIn" value="">
							<img src="<?php echo OSSURL;?>public/mobile/img/sgin_select_ico.png" class="img-responsive isSelect">
						</div>
					</div>
				<?php  } ?>
				<?php  } } ?>
			</div>
			<div class="okSignIcontentBox">
				<div class="top_left">
					<span class="noSignIn">已签到</span>
					<span class="noSignInInfo signedam"><?php  echo $yqdnum;?></span>
				</div>
				<div class="noSignIcontentBox noSignIcontentBoxother am_signed">
				<?php  if(is_array($students)) { foreach($students as $row) { ?>
					<?php  if($row['ischeck']) { ?>
					<a href="javascript:;">
						<div class="okSignItem" type="sign" time="<?php  echo date('Y-m-d',$row['amtime'])?>" sid="<?php  echo $row['id'];?>" timetype="1"><?php  echo $row['s_name'];?></div>
					</a>
					<?php  } ?>
				<?php  } } ?>		
				</div>
			</div>
		</div>
		<div class="classContentBoxPm" style="display: none">    
			<div class="contentTop topMarignOtherNo">
				<div class="nullDiv">
					<div class="top_left">
						<span class="signInNotSure">签到未确认</span>
						<span class="signInNotSureNum" id="signInNoPm"><?php  echo $qdamspm;?></span>

					</div>
					<?php  if($school['is_wxsign'] ==1) { ?>
					<div class="top_right qx_00603" id="top_rightNoTruePm">
						<a href="javascript:;" class="btn_CheckSignIn">
							<div class="signInNotSureInfo">
								<div class="signInNotSureDesgn">确认</div>
								<div class="signInDesgnImg">
									<img src="<?php echo OSSURL;?>public/mobile/img/sginInbtnEdit_ico.png" class="img-responsive">
								</div>
							</div>
						</a>
					</div>
					<?php  } ?>	
				</div>
			</div>
			<?php  if($qdwqrpm) { ?>
			<div class="noSignIcontentBox topMarignOtherNoFirst">
			<?php  if(is_array($qdwqrpm)) { foreach($qdwqrpm as $row) { ?>
				<div class="noSignItemNotSure"><?php  echo $row['s_name'];?></br><?php  echo date('H:m',$row['createtime'])?>
					<div class="tipCheckNotSure" logidpm="<?php  echo $row['id'];?>" logpm_sname = "<?php  echo $row['s_name'];?>" logpm_time = "<?php  echo date('H:m',$row['createtime'])?>"  logpm_sid = "<?php  echo $row['sid'];?>" >
						<input type="checkbox" name="selectSignIn" value="<?php  echo $row['id'];?>">
						<img src="<?php echo OSSURL;?>public/mobile/img/sgin_select_ico.png" class="img-responsive isNotSureInfoSelect">
					</div>
				</div>
			<?php  } } ?>	
			</div>
			<?php  } ?>
			<div class="contentTop">
				<div class="nullDiv nullDivOther">
					<div class="top_left">
						<span class="noSignIn ">未签到</span>
						<span class="noSignInInfo noSignInfoSpan" id="signInNotSureNumPm"><?php  echo $wqdnumpm;?></span>
					</div>
					<?php  if($school['is_wxsign'] ==1) { ?>
					<div class="top_right qx_00602" id="top_rightNoPm">
						<a href="javascript:;" class="btn_SignIn">
							<div class="signInInfo">
								<div class="signInDesgn">补签</div>
								<div class="signInDesgnImg">
									<img src="<?php echo OSSURL;?>public/mobile/img/sginInbtnEdit_ico.png" class="img-responsive">
								</div>
							</div>
						</a>
					</div>
					<?php  } ?>
				</div>
			</div>
			<div class="noSignIcontentBox topMarign topMarignOther">
			<?php  if(is_array($students)) { foreach($students as $row) { ?>
				<?php  if(!$row['ischeckpm']) { ?>
				<div class="noSignItem"><?php  echo $row['s_name'];?>
					<div class="tipCheck" studentidpm="<?php  echo $row['id'];?>" stu_sname = "<?php  echo $row['s_name'];?>">
						<input type="checkbox" name="selectSignIn" value="">
						<img src="<?php echo OSSURL;?>public/mobile/img/sgin_select_ico.png" class="img-responsive isSelect">
					</div>
				</div>
				<?php  } ?>
			<?php  } } ?>	
			</div>
			<div class="okSignIcontentBox">
				<div class="top_left">
					<span class="noSignIn">已签到</span>
					<span class="noSignInInfo signedpm"><?php  echo $yqdnumpm;?></span>
				</div>
				<div class="noSignIcontentBox noSignIcontentBoxother pm_signed " style="padding-bottom:55px">
				<?php  if(is_array($students)) { foreach($students as $row) { ?>
					<?php  if($row['ischeckpm']) { ?>
					<a href="javascript:;">
						<div class="okSignItem" type="sign" time="<?php  echo date('Y-m-d',$row['pmtime'])?>" sid="<?php  echo $row['id'];?>" timetype="2"><?php  echo $row['s_name'];?></div>
					</a>
					<?php  } ?>
				<?php  } } ?>				
				</div>
			</div>			
		</div>
</div>	
<!--正常打卡弹窗-->
<div class="commonAlert" style="display: none">
    <div class="popupWxAlertxBox"></div>
    <div class="wxAlertContent">
        <div class="schoolBox">
            <div class="schoolCard">到校打卡</div>
            <div class="schoolCardTime">时间：2016年7月20日 07：20：10</div>
            <div class="schoolCardCardImg">
                <img src="<?php echo OSSURL;?>public/mobile/img/school_card_Ico.png" class="img-responsive">
            </div>
        </div>
    </div>
</div>
<!--左边弹窗-->
<div class="slide_left_menu_bg">
    <div class="slide_left_menu">
        <div class="slide_left_menu_til">班级列表</div>
        <ul class="slide_left_menu_ul">
			<?php  if(is_njzr($teachers['id'])) { ?>
					<?php  if($bjlist) { ?>
						<?php  if(is_array($bjlist)) { foreach($bjlist as $row) { ?>
							<?php  $bjlists[] = $row['sid'];?>
							<li classid="<?php  echo $row['sid'];?>" <?php  if($bj_id == $row['sid']) { ?>class="act"<?php  } ?>><div><?php  echo $row['sname'];?></div></li>
						<?php  } } ?>	
					<?php  } ?>		
					<?php  if(is_array($mynjlist)) { foreach($mynjlist as $row) { ?>
						<?php  if($bjlist) { ?>
							<?php  if(is_array($row['bjlist'])) { foreach($row['bjlist'] as $item) { ?>
							<?php  if(!in_array($item['sid'], $bjlists)) { ?>
							<li classid="<?php  echo $item['sid'];?>" <?php  if($bj_id == $item['sid']) { ?>class="act"<?php  } ?>><div><?php  echo $item['sname'];?></div></li>
							<?php  } ?>
							<?php  } } ?>
						<?php  } else { ?>
							<?php  if(is_array($row['bjlist'])) { foreach($row['bjlist'] as $item) { ?>
							<li classid="<?php  echo $item['sid'];?>" <?php  if($bj_id == $item['sid']) { ?>class="act"<?php  } ?>><div><?php  echo $item['sname'];?></div></li>
							<?php  } } ?>
						<?php  } ?>
					<?php  } } ?>			
			<?php  } else { ?>
				<?php  if($teachers['status'] == 2) { ?>
					<?php  if(is_array($bjlist)) { foreach($bjlist as $row) { ?>
						<li classid="<?php  echo $row['sid'];?>" <?php  if($bj_id == $row['sid']) { ?>class="act"<?php  } ?>><div><?php  echo $row['sname'];?></div></li>
					<?php  } } ?>
				<?php  } else { ?>
					<?php  if(is_array($bjlist)) { foreach($bjlist as $row) { ?>
						<li classid="<?php  echo $row['sid'];?>" <?php  if($bj_id == $row['sid']) { ?>class="act"<?php  } ?>><div><?php  echo $row['sname'];?></div></li>
					<?php  } } ?>					
				<?php  } ?>
			<?php  } ?>		
        </ul>
    </div>
</div>
<div class="user_info" id="user_info" style="display:none;">
   <div style="border-radius: 10px;">
		<ul>
			<p>查看历史记录</p>				
			<li class="user_name">
			  选择日期
				<input type="date" name ="time" id="time" value="">
			</li>						
			<div class="btn" id="bdax" style="list-style: none;padding-top: 30px;">提交</div>
		</ul>
		<span id="clos">×</span>
   </div>
</div>




<div class="component-panel" id="date_range" style="display:none" >
	<div class="mask"></div>
	<div class="component-dialog dialog-order"  id="detail_range" style="box-sizing: border-box;display:none">
		<div class="component-dialog-title">修改考勤消息推送对象</div>
		<div class="component-dialog-body">
			<form class="form-order" novalidate="novalidate">
				<div class="form-line" style="left: 20px;position: relative;">
					<span class="send_select_span">
						<span class="checkBoxOptionsIco" style="margin-left: 5px;">
							<img src="<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png" alt="图片无法显示" class="img-responsive checkimg">
							<input id="sned_students" class="answer_checkbox" type="checkbox"  value="0">
						</span>
						<span style="margin-right: 5px;">学生本人</span>
					</span>
					<span class="send_select_span">
						<span class="checkBoxOptionsIco" style="margin-left: 5px;">
							<img src="<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png" alt="图片无法显示" class="img-responsive checkimg">
							<input id="sned_parents" class="answer_checkbox" type="checkbox"  value="0">
						</span>
						<span style="margin-right: 5px;">学生家长</span>
					</span>
					<br/>
					<span class="send_select_span">
						<span class="checkBoxOptionsIco" style="margin-left: 5px;">
							<img src="<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png" alt="图片无法显示" class="img-responsive checkimg">
							<input id="send_head_teacher" class="answer_checkbox" type="checkbox"  value="0">
						</span>
						<span style="margin-right: 5px;">班主任</span>
					</span>
					<span class="send_select_span">
						<span class="checkBoxOptionsIco" style="margin-left: 5px;">
							<img  src="<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png" alt="图片无法显示" class="img-responsive checkimg">
							<input id="send_rest_teacher" class="answer_checkbox" type="checkbox"  value="0">
						</span>
						<span style="margin-right: 5px;">授课老师</span>
					</span>
				</div>
				<div class="form-line">
					<div class="input-wrapper" style="border:none;">
						<span style="padding: 8px;color: red">若全未勾选，则采用学校默认设置</span></br>

					</div>
				</div>
				<div class="form-line">
					<div class="input-wrapper" style="border:none;height:10px"></div>
				</div>

				<div class="component-dialog-footer">
					<div type="button" class="btn-default btnthis div_closd"  onclick="closed()" >取消</div>
					<div type="button" class="btn-primary btnthis div_sure"   data-opttype="yes" onclick="set_send_set()">确定</div>
				</div>
				<div class="form-line">
					<div class="input-wrapper" style="border:none;height:20px"></div>
				</div>
			</form>
		</div>
		<div class="component-dialog-footer"></div>
	</div>
</div>

<?php  include $this->template('port');?>
<script>
$(function(){
    $("#GoToDetail").click(function(){
        window.location.href = "<?php  echo $this->createMobileUrl('tallstuchecklog',array('op'=>'display','schoolid'=>$schoolid))?>"
    })
})

    function closed(){

        let is_stu = $("#sned_students").prop('checked')?1:0;
        let is_pare = $("#sned_parents").prop('checked')?1:0;
        let is_ht = $("#send_head_teacher").prop('checked')?1:0;
        let is_rt = $("#send_rest_teacher").prop('checked')?1:0;

        clear_all();
        $('html,body').removeClass('ovfHiden');
        $("#detail_range").slideUp(100);
        $("#date_range").hide();


    };

function clear_all() {
	$(".checkimg").attr("src","<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png")
}


    function set_send_set(){

        let is_stu = $("#sned_students").prop('checked')?1:0;
        let is_pare = $("#sned_parents").prop('checked')?1:0;
        let is_ht = $("#send_head_teacher").prop('checked')?1:0;
        let is_rt = $("#send_rest_teacher").prop('checked')?1:0;

        var submitData = {
            schoolid :"<?php  echo $schoolid;?>",
            weid :"<?php  echo $weid;?>",
            bjid:<?php  echo $bj_id;?>,
            is_stu:is_stu,
            is_pare:is_pare,
            is_ht:is_ht,
            is_rt:is_rt,
        };



        $.ajax({
            url: "<?php  echo $this->createMobileUrl('techerajax',array('op'=>'set_bj_send_set'))?>",
            data: submitData,
            type: "POST",
            dataType: "json",
            success: function (data) {
                console.log(data);
				jTips(data.msg);
                clear_all();
                $('html,body').removeClass('ovfHiden');
                $("#detail_range").slideUp();
                $("#date_range").hide();
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest.status);
                console.log(XMLHttpRequest.readyState);
                console.log(textStatus);
                clear_all();
                $('html,body').removeClass('ovfHiden');
                $("#detail_range").slideUp(100);
                $("#date_range").hide();

            },
        });


    };


	$(function () {


		$("#set_send").on('click',function(){

            var submitData = {
                schoolid :"<?php  echo $schoolid;?>",
                weid :"<?php  echo $weid;?>",
                bjid:<?php  echo $bj_id;?>,
            };
            $.ajax({
                url: "<?php  echo $this->createMobileUrl('techerajax',array('op'=>'get_bj_send_set'))?>",
                data: submitData,
                type: "POST",
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    let is_stu  = jQuery.inArray( "students", data );
                    let is_pare = jQuery.inArray( "parents", data );
                    let is_ht   = jQuery.inArray( "head_teacher", data );
                    let is_rt   = jQuery.inArray( "rest_teacher", data );
                    // $("#old_plate_num").val(data.data);
                    console.log(is_stu);
                    console.log(is_pare);
                    console.log(is_ht);
                    console.log(is_rt);
                    if(is_stu != -1){
				   		$("#sned_students").parent().children("img").attr("src","<?php echo OSSURL;?>public/mobile/img/checkBoxChecked_01.png");
						$("#sned_students").attr("checked",'true');
					}
                    if(is_pare != -1){
                        $("#sned_parents").parent().children("img").attr("src","<?php echo OSSURL;?>public/mobile/img/checkBoxChecked_01.png");
                        $("#sned_parents").attr("checked",'true');
                    }
                    if(is_ht != -1){
                        $("#send_head_teacher").parent().children("img").attr("src","<?php echo OSSURL;?>public/mobile/img/checkBoxChecked_01.png");
                        $("#send_head_teacher").attr("checked",'true');
                    }
                    if(is_rt != -1){
                        $("#send_rest_teacher").parent().children("img").attr("src","<?php echo OSSURL;?>public/mobile/img/checkBoxChecked_01.png");
                        $("#send_rest_teacher").attr("checked",'true');
                    }

                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    console.log(XMLHttpRequest.status);
                    console.log(XMLHttpRequest.readyState);
                    console.log(textStatus);

                },
            });
            $('body').addClass('ovfHiden');
            $('#date_range').show();
            $("#detail_range").slideDown('fast');
    	});



		$("#showdate").on('click', function () {
            $('#user_info').show();
		});	
		$("#clos").on('click', function () {
            $('#user_info').hide();
		});
		$("#bdax").on('click', function () {
			var time = $("#time").val();
			var class_id = $(".top_bottom").attr("class_id");
			if (time == "" || time == undefined || time == null) {
            jTips('请选择日期！');
            return false;
			}
			location.href = "<?php  echo $this->createMobileUrl('signlist', array('schoolid' => $schoolid), true)?>" + '&time=' + time + "&bj_id=" + class_id;
		});		
	});
    function PageObj() {
        this.isAm = true;
    }

    var pageObj = new PageObj();
    //am

    $('.topInfoAm').click(function () {
        checkIsSign();
        checkParentsIsSign();

        pageObj.isAm = true;

        $('.classmonthData').removeClass('colorOther');
        $('.topInfoPm .classmonthData').addClass('colorOther');

        $(this).addClass('selectItem').removeClass('selectOtherItem');
        $('.topInfoPm').removeClass('selectItem').addClass('selectOtherItem');
        $('.topInfoPm').find('span').removeClass('titleOther');
        $('.topInfoPm').find('.classmonthTitle').removeClass('titleOther');

        $(this).find('span').addClass('titleOther');
        $(this).find('.classmonthTitle').addClass('titleOther');



        $('.classContentBoxPm').addClass('contentBoxMonve');

        setTimeout(function () {
            $('.classContentBox').show();

            $('.classContentBoxPm').hide().removeClass('contentBoxMonve');
        }, 350);



    });

    //pm
    $('.topInfoPm').click(function () {

        checkIsSign();

        checkParentsIsSign();

        pageObj.isAm = false;

        $('.classmonthData').removeClass('colorOther');
        $('.topInfoAm .classmonthData').addClass('colorOther');

        $(this).addClass('selectItem').removeClass('selectOtherItem');;
        $('.topInfoAm').removeClass('selectItem').addClass('selectOtherItem');
        $('.topInfoAm').find('span').removeClass('titleOther');
        $('.topInfoAm').find('.classmonthTitle').removeClass('titleOther');


        $(this).find('span').addClass('titleOther');
        $(this).find('.classmonthTitle').addClass('titleOther');

        $('.classContentBox').addClass('contentBoxMonve');

        setTimeout(function () {
            $('.classContentBoxPm').show();

            $('.classContentBox').hide().removeClass('contentBoxMonve');

        }, 350);

        // $('.classContentBox').hide();
    });
    function resetContent() {
        $('.classContentBox').removeClass('contentBoxMonve');
        $('.classContentBoxPm').removeClass('contentBoxMonve');
    }
    //获取时间

    //辅助签到
    function checkIsSign() {

        if ("True" == "True") {

            //上午
            parseInt($('#signInNotSureNum').text(), 10) > 0 ? $('#top_rightNo').show() : $('#top_rightNo').hide();
            //   parseInt($('#signInNo').text(), 10) > 0 ? $('#top_rightNoTrue').show() : $('#top_rightNoTrue').hide();

            //下午
            //    parseInt($('#signInNoPm').text(), 10) > 0 ? $('#top_rightNoTruePm').show() : $('#top_rightNoTruePm').hide();
            parseInt($('#signInNotSureNumPm').text(), 10) > 0 ? $('#top_rightNoPm').show() : $('#top_rightNoPm').hide();
			<?php  if(!(IsHasQx($tid_global,2000602,2,$schoolid))) { ?>
				$(".qx_00602").hide();
			<?php  } ?>
        } else {
            $('#top_rightNo').hide();
            $('#top_rightNoPm').hide();

            // $('#top_rightNoTrue').hide();
           // $('#top_rightNoTruePm').hide();
          
            
        }
    }

    //家长签到功能
    function checkParentsIsSign() {
        //am
        parseInt($('#signInNo').text(), 10) > 0 ? $('#top_rightNoTrue').show() : $('#top_rightNoTrue').hide();
		
        //pm
        parseInt($('#signInNoPm').text(), 10) > 0 ? $('#top_rightNoTruePm').show() : $('#top_rightNoTruePm').hide();
			<?php  if(!(IsHasQx($tid_global,2000603,2,$schoolid))) { ?>
				$(".qx_00603").hide();
			<?php  } ?>
    }

    $(function() {
	
		<?php  if(!(IsHasQx($tid_global,2000602,2,$schoolid))) { ?>
			$(".qx_00602").hide();
		<?php  } ?>
		<?php  if(!(IsHasQx($tid_global,2000603,2,$schoolid))) { ?>
			$(".qx_00603").hide();
		<?php  } ?>
		<?php  if(!(IsHasQx($tid_global,2000604,2,$schoolid))) { ?>
			$(".qx_00604").hide();
		<?php  } ?>
        var boxWidth = $(document).width() - 10;
        $('.classContentBox').css('width', boxWidth + 'px');
        $('.classContentBoxPm').css('width', boxWidth + 'px');

        checkIsSign();//辅助签到

        checkParentsIsSign();//家长签到功能
        //未签到 选择
        $('.noSignItem').on('click', function(e) {
            e.stopPropagation();
            var type = $(this).find('.img-responsive').css('display');
            if (type == 'none') {
                $(this).find('.img-responsive').show();
            } else {
                $(this).find('.img-responsive').hide();
            }
        }); 

        //签到待确认 选择
        $('.noSignItemNotSure').on('click', function(e) {
            e.stopPropagation();
            var type = $(this).find('.img-responsive').css('display');
            if (type == 'none') {
                $(this).find('.img-responsive').show();
            } else {
                $(this).find('.img-responsive').hide();
            }
        });

        $(".choice_baby").on("click", function(e) {
            e.stopPropagation();
            $(".slide_left_menu_bg").addClass("show_menu_bg");
        });
        $(".slide_left_menu_bg").on("click", function() {
            $(this).removeClass("show_menu_bg");
        });

        //切换
        $(".slide_left_menu_ul").on("click", "li", function() {
            if (!$(this).hasClass('act')) {
                $(".slide_left_menu_ul .act").removeClass("act");
                $(this).addClass("act");
                //这里做$.ajax({})处理切换学生-------
				var classid = $(".act").attr("classid");			
                location.href = "<?php  echo $this->createMobileUrl('signlist', array('schoolid' => $schoolid,'time' => $time), true)?>" + "&bj_id=" + classid;
            }

        });
////////////////////// 上午确认签到  /////////////////////////////

        $('.classContentBox').on('click', '.btn_CheckSignIn', function(e) {
            e = e || window.event;
            e.stopPropagation();


            let waitNum = Number($("#signInNo").text());
            let SignNum = Number($(".signedam").text());

            var num = $('.classContentBox .signInNotSureNum').text();
            if (!isNaN(num)) {
                if (parseInt(num) <= 0) {
                    return;
                }
            }
            e.stopPropagation();
            var txt = $(this).find('.signInNotSureDesgn').text();
            switch (txt) {
            case "确认":
                $('.classContentBox .signInNotSureDesgn').text('提交');
                $('.classContentBox .tipCheckNotSure').show();
                $('.classContentBox .isNotSureInfoSelect').show();
                break;
            default:
                var flag = false;
                var logids = "";
                let SignArr = [];
				let AddHtml = '';
                jConfirm('提交数据后，不能再修改，是否确定？', '确认对话框', function(r) {
                    if (r) {
						ajax_start_loading("数据提交中，请稍等...");
                        //ajax 提交
                        $('.classContentBox .isNotSureInfoSelect').each(function(i,val) {
                            if ($(this).css('display') != 'none') {
                                flag = true;
                                logids += $(this).parent().attr("logid") + ",";
                                SignArr[i] = [];
                                SignArr[i]['sname'] = $(this).parent().attr("log_sname");
                                SignArr[i]['time']  = $(this).parent().attr("log_time");
                                SignArr[i]['id'] 	= $(this).parent().attr("logid");
                                SignArr[i]['sid']	= $(this).parent().attr("log_sid");
                            }
                        });
                        //可以提交数据
                        if (flag) {
                            $.post("<?php  echo $this->createMobileUrl('dongtaiajax', array('op' => 'fzqdqr','schoolid' => $schoolid,'weid' => $weid), true)?>", { "logids": logids,"userid":"<?php  echo $it['id'];?>"}, function(msg) {
								ajax_stop_loading();
                                    jTips(msg.info, function() {
                                        for (let SignKey of SignArr) {
                                            if(SignKey != undefined) {
                                                AddHtml += ` <a href="javascript:;">
                                                <div class="okSignItem" type="sign" time="${SignKey['time']}" sid="${SignKey['log_sid']}" timetype="1">${SignKey['sname']}</div>
                                                </a>`;
                                                $(`.tipCheckNotSure[logid=${SignKey['id']}]`).parent().hide();
                                                waitNum = waitNum - 1;
                                                SignNum = SignNum + 1 ;
                                            }
                                        }
                                        $(".am_signed").append(AddHtml);
                                        $("#signInNo").text(waitNum);
                                        $(".signedam").text(SignNum);
										<?php  if($snum != 0 ) { ?>
                                        	let dxl = Math.round(SignNum/<?php  echo $snum;?>*100, 2);
										<?php  } else { ?>
                                        	let dxl = 0;
										<?php  } ?>
                                        $("#dxl").text(dxl);
                                    });
                                }, 'json');
                            }
                        } else {
                            $('.classContentBox .signInNotSureDesgn').text('确认');
                            $('.classContentBox .tipCheckNotSure').hide();
                            $('.classContentBox .isNotSureInfoSelect').hide();
                            return false;
                        }
                    });
                    break;
            }
        });

////////////////////// 下午确认签到  /////////////////////////////

        $('.classContentBoxPm').on('click', '.btn_CheckSignIn', function(e) {
            e = e || window.event;
            e.stopPropagation();

            let waitNum = Number($("#signInNopm").text());
            let SignNum = Number($(".signedpm").text());

            var num = $('.classContentBoxPm .signInNotSureNum').text();
            if (!isNaN(num)) {
                if (parseInt(num) <= 0) {
                    return;
                }
            }
            e.stopPropagation();
            var txt = $(this).find('.signInNotSureDesgn').text();
            switch (txt) {
            case "确认":
                $('.classContentBoxPm .signInNotSureDesgn').text('提交');
                $('.classContentBoxPm .tipCheckNotSure').show();
                $('.classContentBoxPm .isNotSureInfoSelect').show();
                break;
            default:
                var flag = false;
				var logids = "";
                let SignArr = [];
                let AddHtml = '';
                jConfirm('提交数据后，不能再修改，是否确定？', '确认对话框', function(r) {
                    if (r) {
						ajax_start_loading("数据提交中，请稍等...");
                        //ajax 提交
                        $('.classContentBoxPm .isNotSureInfoSelect').each(function(i,val) {
                            if ($(this).css('display') != 'none') {
                                flag = true;
                                logids += $(this).parent().attr("logidpm") + ",";
                                SignArr[i] = [];
                                SignArr[i]['sname'] = $(this).parent().attr("logpm_sname");
                                SignArr[i]['time']  = $(this).parent().attr("log_time");
                                SignArr[i]['id'] 	= $(this).parent().attr("logidpm");
                                SignArr[i]['sid']	= $(this).parent().attr("logpm_sid");
                            }
                        });
                        //可以提交数据
                        if (flag) {
                            $.post("<?php  echo $this->createMobileUrl('dongtaiajax', array('op' => 'fzqdqr','schoolid' => $schoolid,'weid' => $weid), true)?>", { "logids": logids,"userid":"<?php  echo $it['id'];?>"}, function(msg) {
								ajax_stop_loading();
                                    jTips(msg.info, function() {

                                        for (let SignKey of SignArr) {
                                            if(SignKey != undefined) {

                                                AddHtml += ` <a href="javascript:;">
                                                <div class="okSignItem" type="sign" time="${SignKey['time']}" sid="${SignKey['log_sid']}" timetype="2">${SignKey['sname']}</div>
                                                </a>`;
                                                $(`.tipCheckNotSure[logidpm=${SignKey['id']}]`).parent().hide();
                                                waitNum = waitNum - 1;
                                                SignNum = SignNum + 1 ;
                                            }
                                        }
                                        $(".pm_signed").append(AddHtml);
                                        $("#signInNopm").text(waitNum);
                                        $(".signedpm").text(SignNum);
                                        <?php  if($snum != 0 ) { ?>
                                        	let lxl = Math.round(SignNum/<?php  echo $snum;?>*100, 2);
                                        <?php  } else { ?>
                                       	 	let lxl = 0;
                                        <?php  } ?>
                                            $("#lxl").text(lxl);
                                       // location.reload();
                                    });
                                }, 'json');
                            }
                        } else {
                            $('.classContentBoxPm .signInNotSureDesgn').text('确认');
                            $('.classContentBoxPm .tipCheckNotSure').hide();
                            $('.classContentBoxPm .isNotSureInfoSelect').hide();
                            return false;
                        }
                    });
                    break;
            }
        });
        ////////////////////// 上午补签   ///////////////////////////////
        $('.classContentBox').on('click', '.btn_SignIn', function(e) {
            e = e || window.event;
            e.stopPropagation();

            var num = $('.classContentBox .noSignInfoSpan').text();
            if (!isNaN(num)) {
                if (parseInt(num) <= 0) {
                    return;
                }
            }
            let NotSignNum = Number($("#signInNotSureNum").text());
            let SignNum = Number($(".signedam").text());
            var txt = $(this).find('.signInDesgn').text();
            switch (txt) {
            case "补签":
                $('.classContentBox .signInDesgn').text('提交');
                $('.classContentBox .tipCheck').show();
                $('.classContentBox .isSelect').show();
                break;
            default:
                var flag = false;
                var StuUid = "";
				let StuArr = [];
				let AddHtml = '';
                jConfirm('提交数据后，不能再修改，是否确定？', '确认对话框', function(r) {
                    if (r) {
						ajax_start_loading("数据提交中，请稍等...");
                        //ajax 提交
                        $('.classContentBox .isSelect').each(function(i,val) {
                            if ($(this).css('display') != 'none') {
                                flag = true;
                                StuUid += $(this).parent().attr("studentid") + ",";
                                StuArr[i] = [];
                                StuArr[i]['sname'] = $(this).parent().attr("stu_sname");
                                StuArr[i]['id'] = $(this).parent().attr("studentid");
                            }
                        });

                        //可以提交数据
                        if (flag) {
                            var sTimeType = 1;
							var Time = "<?php  echo $time;?>";
                            $.post("<?php  echo $this->createMobileUrl('dongtaiajax', array('op' => 'fzqd','bj_id' => $bj_id,'schoolid' => $schoolid,'weid' => $weid), true)?>", { "sids": StuUid, "userid":"<?php  echo $it['id'];?>","tid": "<?php  echo $it['tid'];?>","TimeType": sTimeType , "Time": Time}, function(msg) {
                                ajax_stop_loading();
                                jTips(msg.info, function() {
                                    console.log(StuArr);

                                    for (let StuKey of StuArr) {
                                        console.log(StuKey);
										if(StuKey != undefined){
											AddHtml += ` <a href="javascript:;">
													<div class="okSignItem" type="sign" time="${msg.nowtime}" sid="${StuKey.id}" timetype="1">${StuKey.sname}</div>
													</a>`;
											$(`.tipCheck[studentid=${StuKey.id}]`).parent().hide();
                                            NotSignNum = NotSignNum - 1;
                                            SignNum = SignNum + 1 ;
                                        }
                                    }
                                    $(".am_signed").append(AddHtml);
                                    $("#signInNotSureNum").text(NotSignNum);
                                    $(".signedam").text(SignNum);
                                    <?php  if($snum != 0 ) { ?>
                                   	 	let dxl = Math.round(SignNum/<?php  echo $snum;?>*100, 2);
                                    <?php  } else { ?>
                                    	let dxl = 0;
                                    <?php  } ?>
									$("#dxl").text(dxl);

                                   // location.reload();
                                });
                            }, 'json');
                        }
                        $('.classContentBox .signInDesgn').text('补签');
                        $('.classContentBox .tipCheck').hide();
                        $('.classContentBox .isSelect').hide();

                    } else {
                        $('.classContentBox .signInDesgn').text('补签');
                        $('.classContentBox .tipCheck').hide();
                        $('.classContentBox .isSelect').hide();
                        return false;
                    }
                });
                    break;
            }
        });

        ////////////////////// 下午补签   ///////////////////////////////
        $('.classContentBoxPm').on('click', '.btn_SignIn', function(e) {
            e = e || window.event;
            e.stopPropagation();
            let NotSignNum = Number($("#signInNotSureNumPm").text());
            let SignNum = Number($(".signedpm").text());
            var num = $('.classContentBoxPm .noSignInfoSpan').text();
            if (!isNaN(num)) {
                if (parseInt(num) <= 0) {
                    return;
                }
            }

            var txt = $(this).find('.signInDesgn').text();
            switch (txt) {
            case "补签":
                $('.classContentBoxPm .signInDesgn').text('提交');
                $('.classContentBoxPm .tipCheck').show();
                $('.classContentBoxPm .isSelect').show();
                break;
            default:
                var flag = false;
                var StuUidpm = "";
                let StuArr = [];
                let AddHtml = '';
                jConfirm('提交数据后，不能再修改，是否确定？', '确认对话框', function(r) {
                    if (r) {
						ajax_start_loading("数据提交中，请稍等...");
                        //ajax 提交
                        $('.classContentBoxPm .isSelect').each(function(i,val) {
                            if ($(this).css('display') != 'none') {
                                flag = true;
                                StuUidpm += $(this).parent().attr("studentidpm") + ",";
                                StuArr[i] = [];
                                StuArr[i]['sname'] = $(this).parent().attr("stu_sname");
                                StuArr[i]['id'] = $(this).parent().attr("studentidpm");
                            }
                        });
                        //可以提交数据
                        if (flag) {
                            var sTimeType = 2;
							var Time = "<?php  echo $time;?>";
                            $.post("<?php  echo $this->createMobileUrl('dongtaiajax', array('op' => 'fzqd','bj_id' => $bj_id,'schoolid' => $schoolid), true)?>", { "sids": StuUidpm, "userid":"<?php  echo $it['id'];?>","tid": "<?php  echo $it['tid'];?>", "TimeType": sTimeType , "Time": Time}, function(msg) {
							ajax_stop_loading();
                                jTips(msg.info, function() {

                                    for (let StuKey of StuArr) {

                                        if(StuKey != undefined) {
                                            AddHtml += ` <a href="javascript:;">
                                                <div class="okSignItem" type="sign" time="${msg.nowtime}" sid="${StuKey['id']}" timetype="1">${StuKey['sname']}</div>
                                                </a>`;
                                            $(`.tipCheck[studentidpm=${StuKey['id']}]`).parent().hide();
                                            NotSignNum = NotSignNum - 1;
                                            SignNum = SignNum + 1 ;
                                        }
                                    }
                                    $(".pm_signed").append(AddHtml);
                                    $("#signInNotSureNumPm").text(NotSignNum);
                                    $(".signedpm").text(SignNum);
                                    <?php  if($snum != 0 ) { ?>
                                    let lxl = Math.round(SignNum/<?php  echo $snum;?>*100, 2);
                                    <?php  } else { ?>
                                    let lxl = 0;
                                    <?php  } ?>
                                        $("#lxl").text(lxl);



                                    //location.reload();
                                });
                            }, 'json');
                        }
                        $('.classContentBoxPm .signInDesgn').text('补签');
                        $('.classContentBoxPm .tipCheck').hide();
                        $('.classContentBoxPm .isSelect').hide();

                    } else {

                        $('.classContentBoxPm .signInDesgn').text('补签');
                        $('.classContentBoxPm .tipCheck').hide();
                        $('.classContentBoxPm .isSelect').hide();
                        return false;
                    }
                });


                    break;
            }
        });
        //20161011 修改之前
    });

    // 每天的最早一次和最晚一次的打卡时间；
    $('.okSignIcontentBox').on('click', '.okSignItem', function () {
        //ajax
        var stu_uid = $(this).attr("sid");
        var time = $(this).attr("time");
		var sid = $(this).attr("sid");
        var timeType = "1";
        if (!pageObj.isAm) {
            timeType = "2";
        }
        $.ajax({
            // pageObj.isAm  上午
            url: "<?php  echo $this->createMobileUrl('dongtaiajax', array('op' => 'checklogbyid','bj_id' => $bj_id,'schoolid' => $schoolid), true)?>",
            type: "post",
            dataType: "html",
            data: {
                time: time,
                sid: stu_uid,
                timeType: timeType
            },
            success: function (data) {
                var dt = eval(data);
                console.log(dt);
                $('.commonAlert').find(".wxAlertContent").children().remove();
                var alertHtml = "";
                for (var i = 0; i < dt.length; i++) {
                    var url = dt[i].Url;
					var url2 = dt[i].Url2;
                    var type = dt[i].Type;
                    if (type == "card") {
                        alertHtml += "<div class=\"schoolBox\">";
                        alertHtml += "<div class=\"schoolCard\">接送人:" + dt[i].Name + "</div>";
                        alertHtml += "<div class=\"schoolCardTime\">时间：" + dt[i].Time + "</div>";
                        alertHtml += "<div class=\"schoolCardCardImg\"><img src=\"" + url + "\" class=\"img-responsive\"></div>";
						alertHtml += "<div class=\"schoolCardCardImg\"><img src=\"" + url2 + "\" class=\"img-responsive\"></div>";
                        alertHtml += "</div>";
                    } else {
                        alertHtml += "<div class=\"schoolBox\">";
                        alertHtml += "<div class=\"schoolCard\">微信签到:" + dt[i].Name + "</div>";
                        alertHtml += "<div class=\"schoolCardTime\">签到时间：" + dt[i].Time + "</div>"
                        alertHtml += "</div>";
                    }
                }
                $('.commonAlert').find(".wxAlertContent").append(alertHtml);
                $('.commonAlert').show();
                setbodyNoscroll();
            }
        });
    });

    //屏蔽滚动
    function setbodyNoscroll() {
        $('html').css({
            "height": "100%",
            "overflow": "hidden"
        });
        $('body').css({
            "height": "100%",
            "overflow": "hidden"
        });
    }

    //蒙版隐藏
    $('.commonAlert').on("click", function () {
        $('html').css({
            "height": "auto",
            "overflow": "visible"
        });
        $('body').css({
            "height": "auto",
            "overflow": "visible"
        });
        $(this).hide();
    });



        $(".checkBoxOptionsIco").click(function() {
            var value = $(this).children("img").attr("src");
            if (value == "<?php echo OSSURL;?>public/mobile/img/checkBoxChecked_01.png") {
                $(this).children("img").attr("src", "<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png");
                $(this).children("input").removeAttr("checked");
                $(this).children("input").attr("value", "0");
            } else {
                $(this).children("img").attr("src", "<?php echo OSSURL;?>public/mobile/img/checkBoxChecked_01.png");
                $(this).children("input").attr("checked", "checked");
                $(this).children("input").attr("value", "1");
            }
        });

</script>
<?php  include $this->template('newfooter');?>