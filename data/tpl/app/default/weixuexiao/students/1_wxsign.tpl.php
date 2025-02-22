<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="no" />
<meta name="format-detection" content="telephone=no" />
<meta name="HandheldFriendly" content="true" />
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/new_yab1.css?v=1?v=1111" />
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/common.css" />
<style type="text/css">
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); } .header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } .header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } .header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } .mainColor { background: #06c1ae !important; } .header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
.wd{background-color: #ff635b; border: 1px solid #ff635b; color: #fff; border-radius: 3px;font-size: 12px; height: 16px;line-height: 14px;padding: 1px 2px;margin: 0 1px;}
.signin_section {display: block;margin: 10px;width: auto;background-color: white;border-radius: 10px;position: relative;height: 186px;margin-top:70px;}
.signin_vacationInfo {position: relative;padding: 10px;margin: 0px 0 0px 18px;}
.signin_vacationInfo .signin_mom {color: rgb(34, 34, 34) !important;font-size: 14px;}
.signin_popup_titleInfo {font-size: 14px;}
.signin_mom .signin_sectioncolor: rgb(34, 34, 34);margin-left: 3px;}
.signin_popup_title {font-size: 16px;color: rgb(102, 102, 102);}
.signin_left_dotsVacation {position: absolute;width: 10px;height: 10px;background-color: rgb(51, 189, 97);border-radius: 50%;left: -5px;top: 50%;transform: translateY(-50%);-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);}
.signin_popup_time {font-size: 12px;color: rgb(140, 140, 140);}
.signin_popup_time {margin-left: 3px;}
.signin_vacationInfo:last-child {padding-bottom: 40px;}
.signin_leftBox {position: absolute;border-left: 1px solid rgb(51, 189, 97);left: 18px;top: 15px;height: 120px;}
.needSignin {position: absolute;top: 150px;left: 25%;transform: translateX(-25%);-webkit-transform: translateX(-25%);-moz-transform: translateX(-25%);-ms-transform: translateX(-25%);-o-transform: translateX(-25%);color: white;background-color: rgb(255, 102, 101);width: 120px;height: 30px;border-radius: 15px;display: inline-block;text-align: center;line-height: 30px;font-size: 14px;}
.btnBack {position: fixed;right: 0.76rem;bottom: 1rem;width: 1.2rem;height: 1.2rem;background-color: rgb(51, 189, 97);text-align: center;line-height: 1.2rem;border-radius: 50% 50%;color: white !important;
font-size: 0.3rem;}
.needSignin.awitAffirm {background-color: rgb(153, 153, 153);}
.needSignin1 {position: absolute;top: 150px;right: 5%;transform: translateX(-25%);-webkit-transform: translateX(-25%);-moz-transform: translateX(-25%);-ms-transform: translateX(-25%);-o-transform: translateX(-25%);color: white;background-color: rgb(230, 137, 26);width: 120px;height: 30px;border-radius: 15px;display: inline-block;text-align: center;line-height: 30px;font-size: 14px;}
/*没有内容*/
.noContent {position: absolute;top: 0;left: 0;width: 100%;}
.noContent1 {position: absolute;top: 0;left: 0;width: 100%;}
</style> 
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<?php  include $this->template('port');?>
<title><?php  echo $school['title'];?></title>
</head>
<body>
<div class="header mainColor">
	<div class="l">
		<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);">
		</a>
	</div>
	<div class="m">
	   <span style="font-size: 18px"><?php  echo $language['wxsign_title'];?></span>   
	</div>
</div>
<section class="signin_section">
	<div class="signin_vacationInfo">
		<span class="signin_popup_title signin_mom signin_popup_titleInfo">今天:</span>
		<span class="signin_popup_title signin_mom signin_popup_titleInfo" id="todayDate"></span>
		<div class="signin_left_dotsVacation"></div>
	</div>
	<div class="signin_vacationInfo">
		<span class="signin_popup_title signin_mom signin_popup_titleInfo">时间:</span>
		<span class="signin_popup_title signin_mom signin_popup_titleInfo" id="todayTime"></span>
		<div class="signin_left_dotsVacation"></div>
	</div>
	<div class="signin_vacationInfo">
		<span class="signin_popup_time"><?php  echo $language['wxsign_tip'];?></span>
		<div class="signin_left_dotsVacation"></div>
	</div>
	<div class="signin_leftBox"></div>
	<a href="javascript:;" id="signin" class="needSignin"><?php  echo $language['wxsign_dxqd'];?></a>
	<a href="javascript:;" id="signin1" class="needSignin1"><?php  echo $language['wxsign_lxqd'];?></a> 
</section>
<?php  if($list) { ?>
<section class="signin_section" style="margin-top:10px;height:auto;">
	<div class="signin_vacationInfo">
		<span class="signin_popup_title signin_mom signin_popup_titleInfo"><?php  echo $language['wxsign_jrqdjl'];?></span>
		<span class="signin_popup_title signin_mom signin_popup_titleInfo" id="todayDate"></span>
		<div class="signin_left_dotsVacation"></div>
	</div>
	<?php  if(is_array($list)) { foreach($list as $row) { ?>
		<div class="signin_vacationInfo">
			<span class="signin_popup_title signin_mom signin_popup_titleInfo"><?php  if($row['leixing'] ==1) { ?><?php  echo $language['wxsign_dx'];?><?php  } else { ?><?php  echo $language['wxsign_lx'];?><?php  } ?>:</span>
			<span class="signin_popup_title signin_mom signin_popup_titleInfo"><?php  echo date('H:i:s',$row['createtime'])?>&nbsp;&nbsp;<?php  if($row['isconfirm'] ==1) { ?><?php  echo $language['wxsign_lsyqr'];?><img style="width:15px" src="<?php echo OSSURL;?>public/mobile/img/be_choose_icon_02.png"><?php  } else { ?>等待确认<?php  } ?></span>
			<div class="signin_left_dotsVacation"></div>
		</div>
	<?php  } } ?>
	<div class="signin_leftBox" style="height: auto;"></div> 
</section>
<?php  } ?>
<input type="hidden" id="session_visit_sign" value="0" />
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<script src="<?php echo OSSURL;?>public/mobile/js/common.js?v=1111"></script>
<script>
    function PageObj() {

    }
    window.addEventListener('load', loadHand, false);
    //loading
    function loadHand() {
        checkCliarTimeOut();
    }

    function checkCliarTimeOut() {
        if ($('.needSignin').hasClass('awitAffirm')) {
            if (timeCheck) {
                clearTimeout(timeCheck);
            }
        }
    }
	
    function checkCliarTimeOu1t() {
        if ($('.needSignin1').hasClass('awitAffirm')) {
            if (timeCheck) {
                clearTimeout(timeCheck);
            }
        }
    }	
	
    $('.signin_section').on('click', '.needSignin', function (e) {
        e = e || window.event;

        //签到
        $.ajax({
            url: "<?php  echo $this->createMobileUrl('dongtaiajax', array('op' => 'CheckSign','schoolid' => $schoolid), true)?>",
                dataType: 'json',
				data: {
					sid: "<?php  echo $it['sid'];?>",
					type: 1,
					schoolid: "<?php  echo $schoolid;?>"
				},				
                type: 'post',
                success: function (data) {
					$('#signin1').hide();
                    if (data.status == 1) {
                        jConfirm('您已经在今天' + data.data + '<?php  echo $language['wxsign_jstipjx'];?>', '确认对话框', function (r) {
                            if (r) {
                                do_signin();
                            }else{
								location.href = "<?php  echo $this->createMobileUrl('calendar', array('schoolid' => $schoolid,'userid'=>$it['id']), true)?>";
							}
                        });
                    } else if (data.status == 0) {
                        jTips(data.info);
                    } else {
                        do_signin();
                    }
                }
            });

        if (!$(this).hasClass('awitAffirm')) {
            $(this).addClass('awitAffirm');
            $(this).text('<?php  echo $language['wxsign_ddlsqr'];?>');
        } else {

            e.stopPropagation();
            e.preventDefault();
        }
        checkCliarTimeOut();
    })
    $('.signin_section').on('click', '.needSignin1', function (e) {
        e = e || window.event;

        //签到
        $.ajax({
            url: "<?php  echo $this->createMobileUrl('dongtaiajax', array('op' => 'CheckSign','schoolid' => $schoolid), true)?>",
                dataType: 'json',
				data: {
					sid: "<?php  echo $it['sid'];?>",
					type: 2,
					schoolid: "<?php  echo $schoolid;?>"
				},				
                type: 'post',
                success: function (data) {
					$('#signin').hide();
                    if (data.status == 1) {
                        jConfirm('您已经在今天' + data.data + '<?php  echo $language['wxsign_jstiplx'];?>', '确认对话框', function (r) {
                            if (r) {
                                do_signin1();
                            }else{
								location.href = "<?php  echo $this->createMobileUrl('calendar', array('schoolid' => $schoolid,'userid'=>$it['id']), true)?>";
							}
                        });
                    } else if (data.status == 0) {
                        jTips(data.info);
                    } else {
                        do_signin1();
                    }
                }
            });

        if (!$(this).hasClass('awitAffirm')) {
            $(this).addClass('awitAffirm');
            $(this).text('<?php  echo $language['wxsign_ddlsqr'];?>');
        } else {

            e.stopPropagation();
            e.preventDefault();
        }
        checkCliarTimeOut1();
    })	
    $(function () {
            setFormatDate('年', '月', '日', '周');

            if ("wait" == "normal") {
                $(".needSignin").addClass('awitAffirm');
                $(".needSignin").text('<?php  echo $language['wxsign_ddlsqr'];?>');
        }


    });
    $(function () {
            setFormatDate('年', '月', '日', '周');

            if ("wait" == "normal") {
                $(".needSignin1").addClass('awitAffirm');
                $(".needSignin1").text('<?php  echo $language['wxsign_ddlsqr'];?>');
        }


    });	

    function do_signin() {
		data = {
			sid: "<?php  echo $it['sid'];?>",
			schoolid: "<?php  echo $schoolid;?>",
			bj_id: "<?php  echo $student['bj_id'];?>",
			type: 1,
			pard: "<?php  echo $it['pard'];?>"
		}		
        $.post("<?php  echo $this->createMobileUrl('dongtaiajax', array('op' => 'DoSign','schoolid' => $schoolid), true)?>", data, function (data) {
            if (data.status == 1) {
                if ("wait" == data.data) {
					jTips(data.info);
                    $(".needSignin").addClass('awitAffirm');
                    $(".needSignin").text('<?php  echo $language['wxsign_ddlsqr'];?>');
                } else {
                    jTips(data.info, function () {
                        location.href = "<?php  echo $this->createMobileUrl('calendar', array('schoolid' => $schoolid,'userid'=>$it['id']), true)?>";
                    });
                }
            } else {
                jTips(data.info);
                $(".needSignin").removeClass("awitAffirm");
                $(".needSignin").text('我要签到');
            }
        }, 'json');
    }

    function do_signin1() {
		data = {
			sid: "<?php  echo $it['sid'];?>",
			schoolid: "<?php  echo $schoolid;?>",
			bj_id: "<?php  echo $student['bj_id'];?>",
			type: 2,
			pard: "<?php  echo $it['pard'];?>"
		}		
        $.post("<?php  echo $this->createMobileUrl('dongtaiajax', array('op' => 'DoSign','schoolid' => $schoolid), true)?>", data, function (data) {
            if (data.status == 1) {
                if ("wait" == data.data) {
					jTips(data.info);
                    $(".needSignin1").addClass('awitAffirm');
                    $(".needSignin1").text('<?php  echo $language['wxsign_ddlsqr'];?>');
                } else {
                    jTips(data.info, function () {
                        location.href = "<?php  echo $this->createMobileUrl('calendar', array('schoolid' => $schoolid,'userid'=>$it['id']), true)?>";
                    });
                }
            } else {
                jTips(data.info);
                $(".needSignin1").removeClass("awitAffirm");
                $(".needSignin1").text('我要签到');
            }
        }, 'json');
    }
    function setFormatDate(str1, str2, str3, str4) {
        var date = new Date();
        var seperatorY = str1;
        var seperatorM = str2;
        var seperatorD = str3;
        var seperator = str4;//冒号
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        if (month >= 1 && month <= 9) {
            month = "0" + month;
        }
        if (strDate >= 0 && strDate <= 9) {
            strDate = "0" + strDate;
        }
        var weeek = getDateTimeWeek(date);

        var currentDate = date.getFullYear() + seperatorY + month + seperatorM + strDate + seperatorD + " " + str4 + weeek;
        var temp = date.getMinutes();
        if (temp >= 1 && temp <= 9) {
            temp = "0" + temp;
        }
        var currentTime = date.getHours() + '时' + temp + '分';
        //        console.log(currentDate);
        //        console.log(currentTime);
        document.querySelector('#todayDate').innerHTML = currentDate;
        document.querySelector('#todayTime').innerHTML = currentTime;
        timeCheck = setTimeout('setFormatDate("年","月","日","周")', '10000');
    }

    //week
    function getDateTimeWeek(date) {
        var mydate = date;
        var week = ['日', '一', '二', '三', '四', '五', '六'];
        var partStr = '';
        return partStr = week[mydate.getDay()];
    }

    $('.signin_section').on('click', '.btnBack', function () {
        window.location.href = "Parents_Index.html";
    });

</script>
<?php  include $this->template('footer');?> 