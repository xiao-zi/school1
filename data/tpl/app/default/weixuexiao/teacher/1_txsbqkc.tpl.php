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
<style type="text/css">
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); } .header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } .header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } .header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } .mainColor { background: #06c1ae !important; } .header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
 
p img {margin: 10px 0 !important;} 
 
 
</style>
<style>
body {background-color: #f0f0f2 !important;box-sizing: border-box !important;font-size: 14px;}
.topMarign {margin: 0;}
.topMarignOther {margin-top: 15px;}
.topMarignOtherNoFirst {margin-top: 15px;}
.okSignIcontentBox {margin: 15px 0px;}
.conentBox_Other {
width: 100%;
display: -webkit-box; /* 老版本语法: Safari,  iOS, Android browser, older WebKit browsers.  */
display: -moz-box; /* 老版本语法: Firefox (buggy) */
display: -ms-flexbox; /* 混合版本语法: IE 10 */
display: -webkit-flex; /* 新版本语法： Chrome 21+ */
display: flex; /* 新版本语法： Opera 12.1, Firefox 22+ */
/*水平居中*/
/*老版本语法*/
-webkit-box-pack: center;
-moz-box-pack: center;
/*混合版本语法*/
-ms-flex-pack: center;
/*新版本语法*/
-webkit-justify-content: center;
justify-content: center;
}
.mainColor{background:<?php  echo $school['headcolor'];?> !important;}
.PromptBox {position: fixed;z-index: 2000;top: 30%;color: #fff;padding: 13px 20px;font-size: 16px;display:none;}
.topInfoAm {width: 80px;height: 80px;margin-top: 20px;border-radius: 50%;background-color: rgb(239, 250, 243);display: inline-block;box-sizing: border-box;}
.topInfoPm {width: 80px;height: 80px;margin-top: 20px;border-radius: 50%;background-color: rgb(239, 250, 243);display: inline-block;margin-left: 20%;box-sizing: border-box;}
.classmonthTitle {margin-top: 10px;}
.classmonthData {margin-top: 0px;}
.top_bottom {position: absolute;margin: 0;bottom: 10px;left: 50%;transform: translateX(-50%);-webkit-transform: translateX(-50%);-moz-transform: translateX(-50%);-ms-transform: translateX(-50%);-o-transform: translateX(-50%);margin-left: 10px;max-width: 90px;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;}
.contentOuterBox {position: relative;width: 100%;}
.classContentBox, .classContentBoxPm {margin-left: 0;position: absolute;top: 0;left: 10px;transition: all .4s ease-in;padding-bottom:55px;}
.contentBoxMonve {-moz-transform: translateX(-150%);-webkit-transform: translateX(-150%);-ms-transform: translateX(-150%);transform: translateX(-150%);}
.ContentBoxIsShow {display: block;}
.selectItem {background: #ff9f22;}
.titleOther {color: white;}
.selectOtherItem {opacity: .8;}
.colorOther {color: rgb(102, 102, 102) !important;}
.month_Attendence_left {background: url("<?php echo OSSURL;?>public/mobile/img/query_see_Ico.png") no-repeat bottom;background-size: 16px 20px;display: inline-block;width: 20px;height: 18px;display: inline-block;float: left;}
.top_right {width: 85px;height: 25px;position: absolute;right: 0px;top: 10px;background: url("<?php echo OSSURL;?>public/mobile/img/top_right_ico.png") no-repeat center;background-size: 85px 25px;}
 
.headerContent a i {float: left;margin: 20px 0 0 1px;width: 0;height: 0;border-width: 6px 6px 0;border-style: solid;border-color: white transparent transparent;position: absolute;}
 
</style>
<title><?php  echo $school['title'];?></title>
</head>
<div class="header mainColor">
	<div class="l" id="titlebar"><a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a></div>
	<div class="m"><span style="font-size: 18px"><?php  if($kcinfo['OldOrNew'] ==0) { ?>
	        第<?php  echo $ksinfo['nub'];?>课 - <?php  echo $sdinfo['sname'];?>
	        <?php  } else { ?>
	        <?php  echo date("m月d日",$time)?>
	        <?php  } ?></span></div>
	<div class="r">
        
	</div>
</div>
<header class="mainColor">
     
</header>
<section>
    <div class="conentBox_Other">
        <div class="topInfoAm selectItem">
            <div class="classmonthData"><span class="titleOther" id="qdl"><?php  echo $qdl;?></span><span class="unitMonthData titleOther">%</span></div>
            <div class="classmonthTitle titleOther">签到率</div>
        </div>
    </div>
    <?php  if($ksinfo['isxiangqing'] ==1) { ?>
	<a href="<?php  echo $this->createMobileUrl('mykcdetial', array('schoolid' => $schoolid,'id' => $ksid), true)?>" class="monthAttendenceInfo">
		<div class="month_Attendence">
			<span class="month_Attendence_left"></span><span class="month_AttendenceBox">查看课时详情</span>
		</div>
	</a>
	<?php  } ?>
    <div class="top_bottom" style="overflow: auto;max-width:unset" class_id="<?php  echo $nowbj['sid'];?>"><?php  echo $kcinfo['name'];?></div>
</section>
<div class="contentOuterBox">   
		<div class="classContentBox">    
			<div class="contentTop topMarignOtherNo">
				<div class="nullDiv">
					<div class="top_left">
						<span class="signInNotSure">签到未确认</span>
						<span class="signInNotSureNum" id="signInNo"><?php  echo count($NotConfirm)?></span>/次
					</div>
					<?php  if($school['is_wxsign'] ==1) { ?>
					<div class="top_right qx_01405" id="top_rightNoTrue">
						<a href="javascript:;" class="btn_CheckSignIn">
							<div class="signInNotSureInfo ">
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
			<?php  if($NotConfirm) { ?>
			<div class="noSignIcontentBox topMarignOtherNoFirst">
			<?php  if(is_array($NotConfirm)) { foreach($NotConfirm as $row) { ?>
				<div class="noSignItemNotSure"><?php  echo $row['sname'];?></br><?php  echo date('H:i',$row['createtime'])?>
					<div class="tipCheckNotSure waitCell" logid="<?php  echo $row['id'];?>" log_sid = "<?php  echo $row['sid'];?>" log_sname = "<?php  echo $row['sname'];?>" log_time = "<?php  echo date('H:i',$row['createtime'])?>">
						<input type="checkbox" name="selectSignIn" value="<?php  echo $row['id'];?>">
						<img src="<?php echo OSSURL;?>public/mobile/img/sgin_select_ico.png" class="img-responsive isNotSureInfoSelect WaitSign">
					</div>
				</div>
			<?php  } } ?>	
			</div>
			<?php  } ?>	
			<div class="contentTop">
				<div class="nullDiv nullDivOther">
					<div class="top_left">
						<span class="noSignIn">待签</span>
						<span class="noSignInInfo noSignInfoSpan" id="signInNotSureNum"><?php  echo count($NotSign)?></span>
					</div>
					<?php  if($school['is_wxsign'] ==1) { ?>
					<div class="top_right qx_01407" id="top_rightNo">
						<a href="javascript:;" class="btn_SignIn" id="btn_SignInBQ">
							<div class="signInInfo qx_01407">
								<div class="signInDesgn" id="signInDesgnBQ">补签</div>
								<div class="signInDesgnImg">
									<img src="<?php echo OSSURL;?>public/mobile/img/sginInbtnEdit_ico.png" class="img-responsive">
								</div>
							</div>
						</a>
					</div>
					<div class="top_right qx_01406" id="top_rightNoQ" style="right: 100px;">
						<a href="javascript:;" class="btn_SignIn" id="btn_SignInQJ">
							<div class="signInInfo ">
								<div class="signInDesgn" id="signInDesgnQJ">请假</div>
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
				<?php  if(is_array($NotSign)) { foreach($NotSign as $row) { ?>
				<div class="noSignItem"><?php  echo $row['sname'];?>
					<div class="tipCheck" studentid="<?php  echo $row['sid'];?>"  stu_sname="<?php  echo $row['sname'];?>">
						<input type="checkbox" name="selectSignIn" value="">
						<img src="<?php echo OSSURL;?>public/mobile/img/sgin_select_ico.png" class="img-responsive isSelect">
					</div>
				</div>
				<?php  } } ?>
			</div>
			
			<div class="okSignIcontentBox">
				<div class="top_left">
					<span class="noSignIn">已签到</span>
					<span class="noSignInInfo" id="SignNum"><?php  echo $HScount;?></span>/次
				</div>
				<div class="noSignIcontentBox noSignIcontentBoxother signdiv">
				<?php  if(is_array($HasSign)) { foreach($HasSign as $row) { ?>
				<div class="okSignItem" style="line-height:unset"><?php  echo $row['sname'];?></br><?php  echo date('H:i',$row['createtime'])?>
				</div>

						<!--<div class="okSignItem" type="sign" time="<?php  echo date('Y-m-d',$row['createtime'])?>" sid="<?php  echo $row['id'];?>" timetype="1"><?php  echo $row['sname'];?></br><?php  echo date('H:m',$row['createtime'])?></div>-->
					<!--</a>-->
				<?php  } } ?>		
				</div>
			</div>
			<div class="okSignIcontentBox">
				<div class="top_left">
					<span class="noSignIn">请假</span>
					<span class="noSignInInfo" id="LeaveNum"><?php  echo count($HasQJ)?></span>/次
				</div>
				<div class="noSignIcontentBox noSignIcontentBoxother leavediv">
				<?php  if(is_array($HasQJ)) { foreach($HasQJ as $row) { ?>
				<div class="okSignItem" style="line-height:unset"><?php  echo $row['sname'];?></br><?php  echo date('H:i',$row['createtime'])?>
				</div>
					
						<!--<div class="okSignItem" type="sign" time="<?php  echo date('Y-m-d',$row['createtime'])?>" sid="<?php  echo $row['id'];?>" timetype="1"><?php  echo $row['sname'];?></br><?php  echo date('H:m',$row['createtime'])?></div>
					</a>-->
				<?php  } } ?>		
				</div>
			</div>
		</div>
</div>	
 <div class="F_div" style="display:none">
        <div class="F_div_text">扫码</div>
    </div>
<?php  include $this->template('port');?>
<script>
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		<?php  if($kcinfo['OldOrNew'] ==0) { ?>
	    var title = "第<?php  echo $ksinfo['nub'];?>课 - <?php  echo $sdinfo['sname'];?>";
        <?php  } else { ?>
       	var title =' <?php  echo date("m月d日",$time)?>';
        <?php  } ?>
		$(".header").hide();
		$(".mainColor").hide();
		document.title=title;
	}
}, 100);
	$(".F_div").click(function(e) {
	e = window.event;
	e.stopPropagation();
	e.preventDefault();
	wxScanQRCode();
});
    function PageObj() {
        this.isAm = true;
    }
    var pageObj = new PageObj();
    //辅助签到
    function checkIsSign() {
        if ("True" == "True") {
            //上午
            parseInt($('#signInNotSureNum').text(), 10) > 0 ? $('#top_rightNo').show() : $('#top_rightNo').hide();
			parseInt($('#signInNotSureNum').text(), 10) > 0 ? $('#top_rightNoQ').show() : $('#top_rightNoQ').hide();
			<?php  if($_GPC['notOwner'] != 'notOwner') { ?>
				<?php  if(!IsHasQx($tid_global,2001407,2,$schoolid) ) { ?>
					$(".qx_01407").hide();
				<?php  } ?>
			<?php  } ?>
			<?php  if($_GPC['notOwner'] == 'notOwner') { ?>
				<?php  if(!IsHasQx($tid_global,2001508,2,$schoolid) ) { ?>
					$(".qx_01407").hide();
				<?php  } ?>
			<?php  } ?>
        } else {
            $('#top_rightNo').hide();
			$('#top_rightNoQ').hide();
        }
    }

    $(function() {
		<?php  if($_GPC['notOwner'] != 'notOwner') { ?>
			<?php  if(!IsHasQx($tid_global,2001405,2,$schoolid) ) { ?>
				$(".qx_01405").hide();
			<?php  } ?>
			<?php  if(!IsHasQx($tid_global,2001406,2,$schoolid) ) { ?>
				$(".qx_01406").hide();
				
			<?php  } ?>
			<?php  if(!IsHasQx($tid_global,2001407,2,$schoolid) ) { ?>
				$(".qx_01407").hide();
			<?php  } ?>
		<?php  } ?>
		<?php  if($_GPC['notOwner'] == 'notOwner') { ?>
			<?php  if(!IsHasQx($tid_global,2001506,2,$schoolid) ) { ?>
				$(".qx_01405").hide();
			<?php  } ?>
			<?php  if(!IsHasQx($tid_global,2001507,2,$schoolid) ) { ?>
				$(".qx_01406").hide();
				
			<?php  } ?>
			<?php  if(!IsHasQx($tid_global,2001508,2,$schoolid) ) { ?>
				$(".qx_01407").hide();
			<?php  } ?>
		<?php  } ?>
	
        var boxWidth = $(document).width() - 10;
        $('.classContentBox').css('width', boxWidth + 'px');
        $('.classContentBoxPm').css('width', boxWidth + 'px');
		
        checkIsSign();//辅助签到

		parseInt($('#signInNo').text(), 10) > 0 ? $('#top_rightNoTrue').show() : $('#top_rightNoTrue').hide();
		<?php  if($_GPC['notOwner'] != 'notOwner') { ?>
			<?php  if(!IsHasQx($tid_global,2001405,2,$schoolid) ) { ?>
				$(".qx_01405").hide();
			<?php  } ?>
		<?php  } ?>
		<?php  if($_GPC['notOwner'] == 'notOwner') { ?>
			<?php  if(!IsHasQx($tid_global,2001506,2,$schoolid) ) { ?>
				$(".qx_01405").hide();
			<?php  } ?>
		<?php  } ?>
		
       
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

////////////////////// 确认签到  /////////////////////////////

        $('.classContentBox').on('click', '.btn_CheckSignIn', function(e) {
            e = e || window.event;
            e.stopPropagation();

            let waitNum = Number($("#signInNo").text());
            let SignNum = Number($("#SignNum").text());

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
                        $('.WaitSign').each(function(i,val) {
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
                        if (flag) {                                                       //学生课程签到确认
                            $.post("<?php  echo $this->createMobileUrl('kcajax', array('op' => 'xskcqdqr','schoolid' => $schoolid,'weid' => $weid,'qrtid'=>$it['tid']), true)?>", { "logids": logids}, function(data) {
								ajax_stop_loading();
                                    jTips(data.msg, function() {

                                        for (let SignKey of SignArr) {
                                            if(SignKey != undefined) {
                                                AddHtml +=  `<div class="okSignItem" style="line-height:unset">${SignKey['sname']}</br>${SignKey['time']}</div>`;

                                                $(`.waitCell[logid=${SignKey['id']}]`).parent().hide();
                                                waitNum = waitNum - 1;
                                                SignNum = SignNum + 1 ;
                                            }
                                        }
                                        $(".signdiv").append(AddHtml);
                                        $("#signInNo").text(waitNum);
                                        $("#SignNum").text(SignNum);

                                        <?php  if($Allcount != 0 ) { ?>
                                        let qdl = Math.round(SignNum/<?php  echo $Allcount;?>*100, 2);
                                        <?php  } else { ?>
                                        let qdl = 0;
                                        <?php  } ?>
                                            $("#qdl").text(qdl);
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

        ////////////////////// 补签   ///////////////////////////////
        $('.classContentBox').on('click', '#btn_SignInBQ', function(e) {
            e = e || window.event;
            e.stopPropagation();

            let NotSign = Number($("#signInNotSureNum").text());
            let SignNum = Number($("#SignNum").text());

            var num = $('.classContentBox .noSignInfoSpan').text();
            if (!isNaN(num)) {
                if (parseInt(num) <= 0) {
                    return;
                }
            }

            var txt = $(this).find('#signInDesgnBQ').text();
            switch (txt) {
            case "补签":
                $('#signInDesgnBQ').text('提交');
                $('#signInDesgnQJ').text('请假');
                $('.classContentBox .tipCheck').show();
                $('.classContentBox .isSelect').show();
                break;
            default:
                let flag = false;
                let StuUid = "";
                let AddHtml = '';
                jConfirm('提交数据后，不能再修改，是否确定？', '确认对话框', function(r) {
                    if (r) {
						ajax_start_loading("数据提交中，请稍等...");
                        //ajax 提交
                        $('.classContentBox .isSelect').each(function(i,val) {
                            if ($(this).css('display') != 'none') {
                                flag = true;
                                StuUid += $(this).parent().attr("studentid") + ",";
                            }
                        });
                        //可以提交数据
                        if (flag) { 
	                                                                               //学生课程补签
                            $.post("<?php  echo $this->createMobileUrl('kcajax', array('op' => 'xskcbq','schoolid' => $schoolid,'weid' => $weid,'ksid'=>$ksid,'time'=>$time,'qrtid'=>$it['tid'],'kcid'=>$kcid,'OldOrNew'=>$kcinfo['OldOrNew']), true)?>", { "StuUid": StuUid}, function(data) {
	                            ajax_stop_loading();

                                jTips(data.msg);

                                for (let SignKey of data.back_data) {
                                    if(SignKey != undefined) {
                                        AddHtml +=  `<div class="okSignItem" style="line-height:unset">${SignKey['sname']}</br>${SignKey['time']}</div>`;

                                        $(`.tipCheck[studentid=${SignKey['id']}]`).parent().hide();
                                        NotSign = NotSign - 1;
                                        SignNum = SignNum + 1 ;
                                    }
                                }


                                $(".signdiv").append(AddHtml);
                                $("#signInNotSureNum").text(NotSign);
                                $("#SignNum").text(SignNum);

                                <?php  if($Allcount != 0 ) { ?>
                                let qdl = Math.round(SignNum/<?php  echo $Allcount;?>*100, 2);
                                <?php  } else { ?>
                                let qdl = 0;
                                <?php  } ?>
                                    $("#qdl").text(qdl);


                                location.reload();
                               
                            }, 'json');
                        }
                        $('#signInDesgnBQ').text('补签');
                        $('.classContentBox .tipCheck').hide();
                        $('.classContentBox .isSelect').hide();

                    } else {
                        $('#signInDesgnBQ').text('补签');
                        $('.classContentBox .tipCheck').hide();
                        $('.classContentBox .isSelect').hide();
                        return false;
                    }
                });
                    break;
            }
        });


 ////////////////////// 请假  ///////////////////////////////
        $('.classContentBox').on('click', '#btn_SignInQJ', function(e) {
            e = e || window.event;
            e.stopPropagation();



            let NotSign = Number($("#signInNotSureNum").text());
            let LeaveNum = Number($("#LeaveNum").text());
            var num = $('.classContentBox .noSignInfoSpan').text();
            if (!isNaN(num)) {
                if (parseInt(num) <= 0) {
                    return;
                }
            }

            var txt = $(this).find('#signInDesgnQJ').text();
            switch (txt) {
            case "请假":
                $('#signInDesgnQJ').text('提交');
                $('#signInDesgnBQ').text('补签');
                $('.classContentBox .tipCheck').show();
                $('.classContentBox .isSelect').hide();
                //$('.classContentBox .isSelect').removeClass('.isSelect');
                break;
            default:
                var flag = false;
                var StuUid = "";
                let SignArr = [];
                let AddHtml = '';
                jConfirm('提交数据后，不能再修改，是否确定？', '确认对话框', function(r) {
                    if (r) {
						ajax_start_loading("数据提交中，请稍等...");
                        //ajax 提交
                        $('.classContentBox .isSelect').each(function(i,val) {
                            if ($(this).css('display') != 'none') {
                                flag = true;
                                StuUid += $(this).parent().attr("studentid") + ",";
                                SignArr[i] = [];
                                SignArr[i]['sname'] = $(this).parent().attr("stu_sname");
                                SignArr[i]['id'] 	= $(this).parent().attr("studentid");

                            }
                        });

                        //可以提交数据
                        if (flag) { 
	                        //alert(StuUid);
	                        //return;                                                       //学生课程补签
                            $.post("<?php  echo $this->createMobileUrl('kcajax', array('op' => 'sqingjia','schoolid' => $schoolid,'weid' => $weid,'ksid'=>$ksid,'time'=>$time,'qrtid'=>$it['tid'],'kcid'=>$kcid,'OldOrNew'=>$kcinfo['OldOrNew']), true)?>", { "StuUid": StuUid}, function(data) {
	                            ajax_stop_loading();
                                jTips(data.msg, function() {

                                    for (let SignKey of SignArr) {
                                        if(SignKey != undefined) {
                                            AddHtml +=  `<div class="okSignItem" style="line-height:unset">${SignKey['sname']}</br>${data.back_time}</div>`;

                                            $(`.tipCheck[studentid=${SignKey['id']}]`).parent().hide();
                                            NotSign = NotSign - 1;
                                            LeaveNum = LeaveNum + 1 ;
                                        }
                                    }
                                    $(".leavediv").append(AddHtml);
                                    $("#signInNotSureNum").text(NotSign);
                                    $("#LeaveNum").text(LeaveNum);
                                });
                            }, 'json');
                        }
                        $('#signInDesgnQJ').text('请假');
                        $('.classContentBox .tipCheck').hide();
                        $('.classContentBox .isSelect').hide();

                    } else {
                        $('#signInDesgnQJ').text('请假');
                        $('.classContentBox .tipCheck').hide();
                        $('.classContentBox .isSelect').hide();
                        return false;
                    }
                });
                    break;
            }
        });

        
        ////////////////////// 下午补签   ///////////////////////////////
   
        //20161011 修改之前
    });

    // 每天的最早一次和最晚一次的打卡时间；
    
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
</script>
<?php  include $this->template('newfooter');?>