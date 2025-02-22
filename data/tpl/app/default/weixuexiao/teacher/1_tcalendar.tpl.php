<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="format-detection" content="telephone=no">
<title><?php  echo $school['title'];?></title>
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/new_yab1.css?v=1?v=1111" />
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/common.css" />
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<?php  include $this->template('students/candercss');?> 
<style>
.schoolCard{font-size: 15px;color: rgb(16, 16, 16);}
</style>
</head>
<body>
<header>
    <div class="headerContent">  
        <a href="javascript:;" class="select_last_left" onclick="CalendarHandler.CalculateLastMonthDays();">
            <div class="next_right"><</div>
        </a>
        <div class="select_date">
            <a class="selectBtn selectYear"></a>
            <a class="selectBtn selectMonth"></a>
        </div>
        <a href="javascript:;" class="select_next_right" onclick="CalendarHandler.CalculateNextMonthDays();">
            <div class="next_right">></div>
        </a>
    </div>
</header>
<section>
    <div class="conentBox">
        <div class="topInfo">
            <div class="monthTitle">本月出勤</div>
            <div class="monthData">共<span></span>天</div>
        </div>
        <div class="top_bottom"><?php  echo $teacher['tname'];?></div>
    </div>
</section>
<div class="datePickerBox">
    <div id="CalendarMain">
        <div id="context">
            <div class="week">
                <div>日</div>
                <div>一</div>
                <div>二</div>
                <div>三</div>
                <div>四</div>
                <div>五</div>
                <div>六</div>
            </div>
            <div id="center">
                <div id="centerMain">
                    <div id="selectYearDiv"></div>
                    <div id="centerCalendarMain">
                        <div id="Container"></div>
                    </div>
                    <div id="selectMonthDiv"></div>
                </div>
            </div>

        </div>
    </div>

</div>
<footer class="parentsFooter">
    <ul>
	<?php  if($school['is_wxsign'] ==1) { ?>
        <li class="list_li">
            <a href="javascript:;" class="footerItem">
                <div class="item_left">
                    <img src="<?php echo OSSURL;?>public/mobile/img/SignIn.png">

                    <div class="item_leftSignIn">我要签到</div>
                </div>
                <div class="item_right">
                    <div class="item_right_Ico"></div>
                    <div class="item_leftSignIn">微信辅助签到</div>
                </div>
            </a>
        </li>
	<?php  } ?>	
        <li class="list_li">
            <a href="javascript:;" class="footerItem">
                <div class="item_left">
                    <img src="<?php echo OSSURL;?>public/mobile/img/leave_Ico.png">
                    <div class="item_leftSignIn">我要请假</div>
                </div>
                <div class="item_right">
                    <div class="item_right_Ico"></div>
                    <div class="item_leftSignIn">向领导请假</div>
                </div>
            </a>
        </li>
        <li class="list_li">
			<a href="javascript:;" class="footerItem">
				<div class="item_left">
					<img src="<?php echo OSSURL;?>public/mobile/img/leave_record_Ico.png">
					<div class="item_leftSignIn">请假记录</div>
				</div>
				<div class="item_right">
					<div class="item_right_Ico"></div>
					<div class="item_leftSignIn">查看历史考勤记录</div>
				</div>
			</a>
        </li>
	<?php  if($school['is_recordmac'] ==1) { ?>	
        <li class="list_li">
			<a href="javascript:;" class="footerItem">
				<div class="item_left">
					<img src="<?php echo OSSURL;?>public/mobile/img/check_card.png">
					<div class="item_leftSignIn">考勤卡</div>
				</div>
				<div class="item_right">
					<div class="item_right_Ico"></div>
					<div class="item_leftSignIn">查看和绑定考勤卡</div>
				</div>
			</a>
        </li>	
	<?php  } ?>		
    </ul>
</footer>
<!--左边弹窗-->
<!--微信打卡弹窗-->
<div class="wxAlert" style="display: none">
    <div class="popupWxAlertxBox"></div>
    <div class="wxAlertContent">
    </div>
</div>
<!--正常打卡弹窗-->
<div class="commonAlert" style="display: none">
    <div class="popupWxAlertxBox"></div>
    <div class="wxAlertContent" onclick="wxImageShow(this);">
    </div>
</div>

<!--微信请假弹窗-->
<div class="vacationAlert" style="display: none">
    <div class="popupWxAlertxBox"></div>
    <div class="wxAlertContent">
        <div class="vacationInfo">
            <span class="popup_title mom popup_titleInfo">微信请假:</span><span class="popup_title mom name"></span>

            <div class="left_dotsVacation"></div>
        </div>

        <div class="vacationInfo">
            <div class="popup_time vacationLeft">
                <span class="popup_time_info">开始时间:</span><span class="popup_time_info start"></span>
            </div>
            <div class="left_dotsVacation "></div>
        </div>

        <div class="vacationInfo">
            <div class="popup_time vacationLeft">
                <span class="popup_time_info">结束时间:</span><span class="popup_time_info end"></span>
            </div>
            <div class="left_dotsVacation"></div>
        </div>

        <div class="vacationInfo">
            <span class="popup_title mom popup_titleInfo">原因:</span><span class="popup_title mom reason"></span>

            <div class="left_dotsVacation"></div>
        </div>

        <div class="vacationInfo">
            <div class="popup_time vacationLeft">
                <span class="popup_time_info ">申请时间:</span><span class="popup_time_info apply"></span>
            </div>
            <div class="left_dotsVacation"></div>
        </div>


    </div>
</div>
<input id="flag" value="1" type="hidden">
<input id="nowtime" value="<?php  echo date('Y-m-d',TIMESTAMP)?>" type="hidden">
<?php  include $this->template('port');?> 
<script type="text/javascript">
var flag = $("#flag").val();
if (flag == 1){
	var nowtime = $("#nowtime").val();
	GetAttendData(nowtime);
}else{
	$("#flag").val("");
}
//设置标注
function setTip(vacation, absent, signIn, rest) {
var date = [];
//清空
$('.tipBox').text('').removeClass('signin').css('display', 'none');
$('.dateBox').removeClass('sginTip').removeClass('leaveTip').removeClass('absentTip');

if ($(".dayItem").length >= 2) {
	$('.dayItem:last-child .item').each(function (index, obj) {

		date.push($(this));
	});

} else {
	$('.item').each(function (index, obj) {
		date.push($(this));
	});
}

if (checkSet()) {
	$(date).each(function (index, obj) {

		if (signIn.indexOf(parseInt($(this).find('.dateBox').text())) != -1) {
			$(this).find('.tipBox').text('签');
			$(this).find('.tipBox').addClass('signin');
			$(this).find('.tipBox').css('display', 'none');
			$(this).find('.dateBox').addClass('sginTip');
		}
		if (absent.indexOf(parseInt($(this).find('.dateBox').text())) != -1) {
			$(this).find('.tipBox').text('缺');
			$(this).find('.tipBox').css('display', 'none');

			$(this).find('.dateBox').addClass('absentTip');
		}


	});
}

//公休日
$(date).each(function (index, obj) {

	if (vacation.indexOf(parseInt($(this).find('.dateBox').text())) != -1) {
		$(this).find('.tipBox').text('假');
		$(this).find('.tipBox').css('display', 'none');
		$(this).find('.dateBox').addClass('leaveTip');
	}

	if (rest.indexOf(parseInt($(this).find('.dateBox').text())) != -1) {
		$(this).find('.tipBox').text('休');
		$(this).find('.tipBox').addClass('signin');
		$(this).find('.tipBox').css('display', 'block');
	}



});
setCurrentDay(date);
}



//设置当前日期
function setCurrentDay(dateItem) {
var date = new Date();
var year = $(".selectYear").text().substring(0, 4);
var month = $(".selectMonth").text().substring(0, 2);
var tempMonth = parseInt(month);
var tempYear = parseInt(year);
var date = new Date();
var currentYear = date.getFullYear();
var currentMonth = date.getMonth() + 1;
var day = date.getDate();
if (tempYear == currentYear && tempMonth == currentMonth) {
	var dayItem = $('.item .dateBox').text();
	$(dateItem).each(function (index, obj) {
		if ($(this).find('.dateBox').text() == day) {
			$(this).find('.outSide').css('display', 'block');
		}
	});
}
}

///////////////////////////    初始化 考勤数据 //////////////////////////////////
function initAttendData(array) {
var vacation = []; //请假
var absent = []; //缺
var signIn = []; //微信签
var rest = []; //休
if (array != null && array.length > 0) {
	for (var i = 0; i < array.length; i++) {
		var type = array[i]["Type"];
		var date = array[i]["Date"];
		//微信签到
		if (type == "wx" || type == "card") {
			signIn.push(date);
		}
			//缺课
		else if (type == "skip") {
			absent.push(date);
		}
			//请假
		else if (type == "leave") {
			vacation.push(date);
		}
		if (type == "holiday") {
			rest.push(date);
		}
	}
}
setTip(vacation, absent, signIn, rest);
}

//获取状态数据
function GetAttendData(time) {
	$.ajax({
		url: "<?php  echo $this->createMobileUrl('dongtaiajax', array('op' => 'GetAttendDataforTeacher','schoolid' => $schoolid), true)?>",
		type: "post",
		data: {
			sDate: time,
			tid: "<?php  echo $it['tid'];?>",
			schoolid: "<?php  echo $schoolid;?>"
		},
		success: function (data) {
			var dt = eval("(" + data + ")");
			var count = dt.AttendanceCount;
			$(".monthData").find("span").text(count);
			var lstAttendInfo = dt.lstAttendInfo;
			initAttendData(lstAttendInfo);

		}
	});
}

//获取公休日
function GetHolidayData(time) {
$.ajax({
	url: "/1046/AttendCalendar/GetHoliday",
	type: "post",
	dataType: "html",
	data: {
		sDate: time
	},
	success: function (data) {
		var dt = eval("(" + data + ")");
		//var lstAttendInfo = dt.lstAttendInfo;
		setHolidayDataTip(dt);

	}
});
}

//获取补班
function GetOverTime(time) {
$.ajax({
	url: "/1046/AttendCalendar/GetOverTime",
	type: "post",
	dataType: "html",
	data: {
		sDate: time
	},
	success: function (data) {
		var dt = eval("(" + data + ")");

		setOverTimeTip(dt);

	}
});
}

//设置补班
function setOverTimeTip(holidayData) {
var date = [];
if ($(".dayItem").length >= 2) {
	$('.dayItem:last-child .item').each(function (index, obj) {
		date.push($(this));
	});
} else {
	$('.item').each(function (index, obj) {
		date.push($(this));
	});
}

$(date).each(function (index, obj) {
	if (holidayData.indexOf(parseInt($(this).find('.dateBox').text())) != -1) {
		$(this).find('.tipBox').text('签');
		$(this).find('.tipBox').addClass('signin');
	}
});
}


//设置公休日
function setHolidayDataTip(holidayData) {
var date = [];
if ($(".dayItem").length >= 2) {
	$('.dayItem:last-child .item').each(function (index, obj) {
		date.push($(this));
	});
} else {
	$('.item').each(function (index, obj) {
		date.push($(this));
	});
}

$(date).each(function (index, obj) {
	if (holidayData.indexOf(parseInt($(this).find('.dateBox').text())) != -1) {
		$(this).find('.tipBox').text('休');
		$(this).find('.tipBox').addClass('signin');
	}
});
}


//检查是否允许设置标注
function checkSet(e) {
var year = $(".selectYear").text().substring(0, 4);
var month = $(".selectMonth").text().substring(0, 2);
var tempMonth = parseInt(month);
var tempYear = parseInt(year);
var date = new Date();
var currentYear = date.getFullYear();
var currentMonth = date.getMonth() + 1;
var day = date.getDate();

if (tempYear > currentYear) {
	return false;
}
if (tempYear == currentYear && tempMonth > currentMonth) {
	return false;
}

return true;
};

//检查日期是否允许点击，并且弹出框
function checkClick(e, obj) {
var year = $(".selectYear").text().substring(0, 4);
var month = $(".selectMonth").text().substring(0, 2);
var tempMonth = parseInt(month);
var tempYear = parseInt(year);
var date = new Date();
var currentYear = date.getFullYear();
var currentMonth = date.getMonth() + 1;
var day = date.getDate();

if (tempYear > currentYear) {
	e.preventDefault();
	return false;

} else {
	if (tempYear == currentYear && tempMonth > currentMonth) {

		e.preventDefault();
		return false;
	}
	if (tempYear == currentYear && tempMonth == currentMonth) {
		var tempDay = parseInt($(obj).find('.dateBox').text());
		if (tempDay > day) {
			e.preventDefault();
			return false;
		}
	}
}

return true;
};

//设置选中边框
function setClickDate(obj) {
if ($(obj).find('.dateBox').text() != '999') {
	$('.outSide').css('display', '');
	$('.outSide').removeClass('currentItemOutSide');
	$(obj).find('.outSide').css('display', 'inline-block');
}

}

$(function () {
var array = []

CalendarHandler.initialize();

popInitialize(); //蒙版初始化
initAttendData(array);
//setTip();//设置提示
$(".choice_baby").on("click", function (e) {
	e.stopPropagation();
	$(".slide_left_menu_bg").addClass("show_menu_bg");
});
$(".slide_left_menu_bg").on("click", function () {
	$(this).removeClass("show_menu_bg");
});
//日期点击
$('.datePickerBox').on('click', '.item', function (e) {
	if (checkClick(e, $(this))) {
		if ($(this).find('.dateBox').hasClass('weekBox') && $(this).find('.tipBox') == '') {
			setClickDate($(this));
			return;
		} else {
			$('.outSide').css('display', '');
			$('.outSide').removeClass('currentItemOutSide');
			$(this).find('.outSide').css('display', 'inline-block');

			var day = $(this).find('.dateBox').text();
			var year = $(".selectYear").text().substring(0, 4);
			var month = $(".selectMonth").text().substring(0, 2);
			if (day < 10)
				day = "0" + day;
			time = year + "-" + month + "-" + day;
			var sType = $(this).find('.tipBox').text();
			ajax_start_loading("载入中...");
			switch (sType) {
				case "签":
					$.ajax({
						url: "<?php  echo $this->createMobileUrl('dongtaiajax', array('op' => 'checklogbyid','schoolid' => $schoolid), true)?>",
						type: "post",
						dataType: "html",
						data: {
							time: time,
							tid: "<?php  echo $it['tid'];?>"
						},						
						success: function (data) {
							ajax_stop_loading();
							var dt = eval(data);
							$('.commonAlert').find(".wxAlertContent").children().remove();
							var alertHtml = "";
							for (var i = 0; i < dt.length; i++) {
								var url = dt[i].Url;
								var type = dt[i].Type;
								var url2 = dt[i].Url2;
								if (type == "card") {
									if (!url2){
										alertHtml += "<div class=\"schoolBox\">";
										alertHtml += "<div class=\"schoolCard\">刷卡:" + dt[i].Name + "</div>";
										alertHtml += "<div class=\"schoolCardTime\">时间：" + dt[i].Time + "</div>";
										alertHtml += "<div class=\"schoolCardCardImg\"><img src=\"" + url + "\" class=\"img-responsive\"></div>"
										alertHtml += "</div>";
									}else{
										alertHtml += "<div class=\"schoolBox\">";
										alertHtml += "<div class=\"schoolCard\">刷卡:" + dt[i].Name + "</div>";
										alertHtml += "<div class=\"schoolCardTime\">时间：" + dt[i].Time + "</div>";
										alertHtml += "<div class=\"schoolCardCardImg\"><img src=\"" + url + "\" class=\"img-responsive\"></div>"
										alertHtml += "<div class=\"schoolCardCardImg\"><img src=\"" + url2 + "\" class=\"img-responsive\"></div>"
										alertHtml += "</div>";									
									}
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

					break;
				case "假":
					$.ajax({
						url: "<?php  echo $this->createMobileUrl('dongtaiajax', array('op' => 'qingjialog','bj_id' => $student['bj_id'],'schoolid' => $schoolid), true)?>",
						type: "post",
						dataType: "html",
						data: {
							time: time,
							tid: "<?php  echo $it['tid'];?>"
						},
						success: function (data) {
							ajax_stop_loading();
							var dt = eval("(" + data + ")");
							$(".vacationAlert").find(".vacationInfo").find(".name").html(dt.ParentName);
							$(".vacationAlert").find(".vacationInfo").find(".start").html(dt.StartTime);
							$(".vacationAlert").find(".vacationInfo").find(".end").html(dt.EndTime);
							$(".vacationAlert").find(".vacationInfo").find(".reason").html(dt.LeaveContent);
							$(".vacationAlert").find(".vacationInfo").find(".apply").html(dt.CreateTime);
							$('.vacationAlert').show();
							setbodyNoscroll();
						}
					});
					break;
				case "缺":
				ajax_stop_loading();
					break;
					//                    无标注：正常打卡
				case "休":
				ajax_stop_loading();
					break;
				default:
				ajax_stop_loading();
					break;
			}
		}
	} else {
		setClickDate($(this));
		return;

	}
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
$('.wxAlert,.vacationAlert,.commonAlert').on("click", function () {
	$('html').css({
		"height": "auto",
		"overflow": "visible"
	});
	$('body').css({
		"height": "auto",
		"overflow": "visible"
	});
	$(this).hide();
})
});

//蒙版初始化
function popInitialize() {
var width = $(window).width();
var height = $(window).height();
$('.popupWxAlertxBox').css({ 'width': width, 'height': height }); //微信打开弹窗
}

$('.parentsFooter').on('click', '.footerItem', function () {
var type = $(this).find('.item_left .item_leftSignIn').text();
switch (type) {

	case "我要签到":
		if ("True" == "True") {
			if ("True" == "True") {
				window.location.href = "<?php  echo $this->createMobileUrl('wxsignforteacher', array('schoolid' => $schoolid), true)?>";
			} else {
				jTips("未开启签到功能！");
			}
		} else {
			jTips("你已是毕业生，无须签到！");
		}
		break;
	case "我要请假":
		window.location.href = "<?php  echo $this->createMobileUrl('qingjia', array('schoolid' => $schoolid), true)?>";
		break;
	case "请假记录":
		window.location.href = "<?php  echo $this->createMobileUrl('leavelistforteacher', array('schoolid' => $schoolid), true)?>";
		break;
	case "考勤卡":
		window.location.href = "<?php  echo $this->createMobileUrl('checkcardforteacher', array('schoolid' => $schoolid), true)?>";
		break;		
	default:
		break;
}

});


var CalendarHandler = {
currentYear: 0,
currentMonth: 0,
isRunning: false,
showYearStart: 2009,
tag: 0,
initialize: function () {
	$calendarItem = this.CreateCalendar(0, 0, 0);
	$("#Container").append($calendarItem);


	$("#selectYearDiv").css("width", $("#context").width() + "px");
	$("#selectMonthDiv").css("width", $("#context").width() + "px");
	$("#centerCalendarMain").css("width", $("#context").width() + "px");


	$("#Container").css("height", "0px").css("width", "0px").css("margin-left", $("#context").width() / 2 + "px").css("margin-top", ($("#context").height() - 30) / 2 + "px");
	$("#Container").animate({
		width: $("#context").width() + "px",
		height: ($("#context").height() - 30) * 2 + "px",
		marginLeft: "0px",
		marginTop: "0px"
	}, 300, function () {
		$calendarItem.css("visibility", "visible");
	});
	$(".dayItem").css("width", $("#context").width() + "px");
	var itemPaddintTop = $(".dayItem").height() / 6;
	$(".item").css({
		"width": $(".week").width() / 7 + "px",
		"line-height": itemPaddintTop + "px",
		"height": itemPaddintTop + "px"
	});
	//            $(".currentItem>a").css("margin-left", ($(".item").width() - 25) / 2 + "px").css("margin-top", ($(".item").height() - 25) / 2 + "px");
	$(".week>div").css("width", $(".week").width() / 7 + "px");
	this.CSS();
},
CreateSelectYear: function (showYearStart) {
	CalendarHandler.showYearStart = showYearStart;
	$(".currentDay").show();
	$("#selectYearDiv").children().remove();
	var yearindex = 0;
	for (var i = showYearStart; i < showYearStart + 12; i++) {
		yearindex++;
		if (i == showYearStart) {
			$last = $("<div>往前</div>");
			$("#selectYearDiv").append($last);
			$last.click(function () {
				CalendarHandler.CreateSelectYear(CalendarHandler.showYearStart - 10);
			});
			continue;
		}
		if (i == showYearStart + 11) {
			$next = $("<div>往后</div>");
			$("#selectYearDiv").append($next);
			$next.click(function () {
				CalendarHandler.CreateSelectYear(CalendarHandler.showYearStart + 10);
			});
			continue;
		}

		if (i == this.currentYear) {
			$yearItem = $("<div class=\"currentYearSd\" id=\"" + yearindex + "\">" + i + "</div>")

		} else {
			$yearItem = $("<div id=\"" + yearindex + "\">" + i + "</div>");
		}
		$("#selectYearDiv").append($yearItem);

		$yearItem.click(function () {
			$calendarItem = CalendarHandler.CreateCalendar(Number($(this).html()), 1, 1);
			$("#Container").append($calendarItem);
			CalendarHandler.CSS();
			CalendarHandler.isRunning = true;
			$($("#Container").find(".dayItem")[0]).animate({
				height: "0px"
			}, 300, function () {
				$(this).remove();
				CalendarHandler.isRunning = false;
			});
			$("#centerMain").animate({
				marginLeft: -$("#center").width() + "px"
			}, 500);
		});
		if (yearindex == 1 || yearindex == 5 || yearindex == 9) $("#selectYearDiv").find("#" + yearindex).css("border-left-color", "#fff");
		if (yearindex == 4 || yearindex == 8 || yearindex == 12) $("#selectYearDiv").find("#" + yearindex).css("border-right-color", "#fff");

	}
	$("#selectYearDiv>div").css("width", ($("#center").width() - 4) / 4 + "px").css("line-height", ($("#center").height() - 4) / 3 + "px");
	$("#centerMain").animate({
		marginLeft: "0px"
	}, 300);
},
CreateSelectMonth: function () {
	$(".currentDay").show();
	$("#selectMonthDiv").children().remove();
	for (var i = 1; i < 13; i++) {
		if (i == this.currentMonth) $monthItem = $("<div class=\"currentMontSd\" id=\"" + i + "\">" + i + "月</div>");
		else $monthItem = $("<div id=\"" + i + "\">" + i + "月</div>");
		$("#selectMonthDiv").append($monthItem);
		$monthItem.click(function () {
			$calendarItem = CalendarHandler.CreateCalendar(CalendarHandler.currentYear, Number($(this).attr("id")), 1);
			$("#Container").append($calendarItem);
			CalendarHandler.CSS()
			CalendarHandler.isRunning = true;
			$($("#Container").find(".dayItem")[0]).animate({
				height: "0px"
			}, 300, function () {
				$(this).remove();
				CalendarHandler.isRunning = false;
			});
			$("#centerMain").animate({
				marginLeft: -$("#center").width() + "px"
			}, 500);
		});
		if (i == 1 || i == 5 || i == 9) $("#selectMonthDiv").find("#" + i).css("border-left-color", "#fff");
		if (i == 4 || i == 8 || i == 12) $("#selectMonthDiv").find("#" + i).css("border-right-color", "#fff");
	}
	$("#selectMonthDiv>div").css("width", ($("#center").width() - 4) / 4 + "px").css("line-height", ($("#center").height() - 4) / 3 + "px");
	$("#centerMain").animate({
		marginLeft: -$("#center").width() * 2 + "px"
	}, 300);
},
IsRuiYear: function (aDate) {
	return (0 == aDate % 4 && (aDate % 100 != 0 || aDate % 400 == 0));
},
CalculateWeek: function (y, m, d) {
	var arr = "7123456".split("");
	with (document.all) {
		var vYear = parseInt(y, 10);
		var vMonth = parseInt(m, 10);
		var vDay = parseInt(d, 10);
	}
	var week = arr[new Date(y, m - 1, vDay).getDay()];
	return week;
},
CalculateMonthDays: function (m, y) {
	var mDay = 0;
	if (m == 0 || m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
		mDay = 31;
	} else {
		if (m == 2) {
			//判断是否为润年
			var isRn = this.IsRuiYear(y);
			if (isRn == true) {
				mDay = 29;
			} else {
				mDay = 28;
			}
		} else {
			mDay = 30;
		}
	}
	return mDay;
},
CreateCalendar: function (y, m, d) {
	$dayItem = $("<div class=\"dayItem\"></div>");
	$borderLine = $("<div class=\"borderLine\"></div>");
	//获取当前月份的天数
	var nowDate = new Date();
	if (y == nowDate.getFullYear() && m == nowDate.getMonth() + 1 || (y == 0 && m == 0))
		$(".currentDay").hide();
	var nowYear = y == 0 ? nowDate.getFullYear() : y;
	this.currentYear = nowYear;
	var nowMonth = m == 0 ? nowDate.getMonth() + 1 : m;
	this.currentMonth = nowMonth;
	var nowDay = d == 0 ? nowDate.getDate() : d;
	$(".selectYear").html(nowYear + "年");
	nowMonth = nowMonth > 9 ? nowMonth : '0' + nowMonth;
	$(".selectMonth").html(nowMonth + "月");
	//获取年-月-天数
	var nowDaysNub = this.CalculateMonthDays(nowMonth, nowYear);
	//获取当月第一天是星期几

	var nowWeek = parseInt(this.CalculateWeek(nowYear, nowMonth, 1));
	console.log(nowWeek);

	//获取上个月的天数
	var t = -1;
	//根据某月第一天是周几 生成几个空格
	switch (nowWeek) {
		case 1:
			for (var i = 0; i < 1; i++) {
				t++;
				$dayItem.append("<a class=\"item lastItem\"><div class='dateBox weekBox'>" + 999 + "</div><div class='outSide'></div></a>");
			}
			break;
		case 2:
			for (var i = 0; i < 2; i++) {
				t++;
				$dayItem.append("<a class=\"item lastItem\"><div class='dateBox weekBox'>" + 999 + "</div><div class='outSide'></div></a>");
			}
			break;
		case 3:
			for (var i = 0; i < 3; i++) {
				t++;
				$dayItem.append("<a class=\"item lastItem\"><div class='dateBox weekBox'>" + 999 + "</div><div class='outSide'></div></a>");
			}
			break;
		case 4:
			for (var i = 0; i < 4; i++) {
				t++;
				$dayItem.append("<a class=\"item lastItem\"><div class='dateBox weekBox'>" + 999 + "</div><div class='outSide'></div></a>");
			}
			break;
		case 5:
			for (var i = 0; i < 5; i++) {
				t++;
				$dayItem.append("<a class=\"item lastItem\"><div class='dateBox weekBox'>" + 999 + "</div><div class='outSide'></div></a>");
			}
			break;
		case 6:
			for (var i = 0; i < 6; i++) {
				t++;
				$dayItem.append("<a class=\"item lastItem\"><div class='dateBox weekBox'>" + 999 + "</div><div class='outSide'></div></a>");
			}
			break;
		case 7:
			//no thing
			break;
	}
	//生成当月的日期
	for (var i = 0; i < nowDaysNub; i++) {
		t++;
		if (t % 7 == 0) {
			$dayItem.append("<div class=\"borderLine\"></div>");
		}
		if (i == (nowDay - 1)) {
			var week = parseInt(this.CalculateWeek(nowYear, nowMonth, i + 1));
			if (week == 6 || week == 7) {
				$dayItem.append("<a class=\"item\"><div class='dateBox weekBox'>" + (i + 1) + "</div><div class='outSide'></div><div class='tipBox'></div></a>");
			} else {
				$dayItem.append("<a class=\"item\"><div class='dateBox'>" + (i + 1) + "</div><div class='outSide'></div><div class='tipBox'></div></a>");
			}

		} else {
			var week = parseInt(this.CalculateWeek(nowYear, nowMonth, i + 1));
			if (week == 6 || week == 7) {
				$dayItem.append("<a class=\"item\"><div class='dateBox weekBox'>" + (i + 1) + "</div><div class='outSide'></div><div class='tipBox'></div></a>");
			} else {
				$dayItem.append("<a class=\"item\"><div class='dateBox'>" + (i + 1) + "</div><div class='outSide'></div><div class='tipBox'></div></a>");
			}

		}

	}
	$dayItem.append("<div class=\"borderLine\"></div>");
	$dayItem.append("<div class='bottomBoxNav'><div class='itemBox'><span class='itemDots'></span><span class='itemNav'>签到</span></div><div class='itemBox'><span class='itemDotsQx'></span><span class='itemNav'>缺席</span></div><div class='itemBox'><span class='itemDotsQj'></span><span class='itemNav'>请假</span></div></div>");

	console.log($dayItem);
	return $dayItem;
},
CSS: function () {
	$(".dayItem").css("width", $("#context").width() + "px");
	var itemPaddintTop = ($(".dayItem").height() - 5) / 6;
	$(".item").css({
		"width": $(".week").width() / 7 + "px",
		"line-height": 50 + "px",
		"height": 50 + "px"
	});
	//   $(".currentItem>a").css("margin-left", ($(".item").width() - 25) / 2 + "px").css("margin-top", ($(".item").height() - 25) / 2 + "px");
},
CalculateNextMonthDays: function () {
	if (this.isRunning == false) {
		$(".currentDay").show();
		var m = this.currentMonth == 12 ? 1 : this.currentMonth + 1;
		var y = this.currentMonth == 12 ? (this.currentYear + 1) : this.currentYear;
		var d = 0;
		var nowDate = new Date();
		if (y == nowDate.getFullYear() && m == nowDate.getMonth() + 1) d = nowDate.getDate();
		else d = 1;
		$calendarItem = this.CreateCalendar(y, m, d);
		$("#Container").append($calendarItem);
		var year = $(".selectYear").text().substring(0, 4);
		var month = $(".selectMonth").text().substring(0, 2);
		var time = year + "-" + month + "-01";

		//补班
		//GetOverTime(time);
		GetAttendData(time);
		//GetHolidayData(time);
		this.CSS();
		this.isRunning = true;
		$($("#Container").find(".dayItem")[0]).animate({
			height: "0px"
		}, 300, function () {


			$(this).remove();
			CalendarHandler.isRunning = false;
		});
	}
},
CalculateLastMonthDays: function () {
	if (this.isRunning == false) {
		$(".currentDay").show();
		var nowDate = new Date();
		var m = this.currentMonth == 1 ? 12 : this.currentMonth - 1;
		var y = this.currentMonth == 1 ? (this.currentYear - 1) : this.currentYear;
		var d = 0;

		if (y == nowDate.getFullYear() && m == nowDate.getMonth() + 1) d = nowDate.getDate();
		else d = 1;
		$calendarItem = this.CreateCalendar(y, m, d);
		$("#Container").append($calendarItem);

		var year = $(".selectYear").text().substring(0, 4);
		var month = $(".selectMonth").text().substring(0, 2);
		var time = year + "-" + month + "-01";

		GetAttendData(time);
		//补班
		//GetOverTime(time);
		//setTip();
		var itemPaddintTop = $(".dayItem").height() / 6;
		this.CSS();
		this.isRunning = true;


		$($("#Container").find(".dayItem")[0]).animate({
			height: "0px"
		}, 300, function () {
			$(this).remove();
			CalendarHandler.isRunning = false;
		});
	}
},
CreateCurrentCalendar: function () {
	if (this.isRunning == false) {
		$(".currentDay").hide();
		$calendarItem = this.CreateCalendar(0, 0, 0);
		$("#Container").append($calendarItem);
		this.isRunning = true;
		$($("#Container").find(".dayItem")[0]).animate({
			height: "0px"
		}, 300, function () {
			$(this).remove();
			CalendarHandler.isRunning = false;
		});
		this.CSS();
		$("#centerMain").animate({
			marginLeft: -$("#center").width() + "px"
		}, 500);
	}
},

}
</script>
<script>
var ALI_URL = "<?php  echo $urls;?>";
var ALI_URL_VIEDO = "<?php  echo $urls;?>";
var WeixinApi = (function () {
	return {
        imagePreview    :imagePreview
    }; 
	
    "use strict";

    /**
     * 调起微信Native的图片播放组件。
     * 这里必须对参数进行强检测，如果参数不合法，直接会导致微信客户端crash
     *
     * @param {String} curSrc 当前播放的图片地址
     * @param {Array} srcList 图片地址列表
     */
    function imagePreview(curSrc,srcList) {
        if(!curSrc || !srcList || srcList.length == 0) {
            return;
        }
        WeixinJSBridge.invoke('imagePreview', {
            'current' : curSrc,
            'urls' : srcList
        });
    }
	
    return {
        version         :"2.5",
        imagePreview    :imagePreview
    };
})();

function wxImageShow(node){
	var srcList = new Array();
	var watermark='';
	var imgs = $(node).closest('.wxAlertContent').find("img");
	var curSrc = $(node).find("img")[0]['src'].split("@");
	
	var curImgIndex=0;
	for(i=0;i<imgs.length;i++){
		var imgsrc = imgs[i]['src'].split("@");
		if(imgsrc.length>1){
			if(imgsrc[1].split("watermark").length>1){
				srcList.push(imgsrc[0].replace(ALI_URL,ALI_URL_VIEDO)+'@watermark'+imgsrc[1].split("watermark")[1]);
				watermark = '@watermark'+imgsrc[1].split("watermark")[1];
			}else{
				srcList.push(imgsrc[0].replace(ALI_URL,ALI_URL_VIEDO));
			}
		}else{
			srcList.push(imgsrc[0]);
		}
		if(curSrc[0]==imgsrc[0]){
			curImgIndex=i;
		}
	}
	curSrc[0]=curSrc[0]+watermark;

	WeixinApi.imagePreview(curSrc[0].replace(ALI_URL,ALI_URL_VIEDO), srcList);
}
</script>
<?php  include $this->template('newfooter');?> 
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>

