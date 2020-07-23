<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="true" />
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/new_yab1.css?v=1?v=1111" />
<link href="<?php echo OSSURL;?>public/mobile/css/common.css" rel="stylesheet" />
<link href="<?php echo OSSURL;?>public/mobile/css/idangerous.swiper.css?v=0622" rel="stylesheet" />
<link href="<?php echo OSSURL;?>public/mobile/css/countCss.css?v=062220160928" rel="stylesheet" charset="gb2312" />
<?php  echo register_jssdks();?>
<style>
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); } .header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } .header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } .header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } .mainColor { background: #06c1ae !important; } .header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
.day_div .last_day {background: url(<?php echo OSSURL;?>public/mobile/img/top_left_01.png) no-repeat center;background-size: 12px;height: 40px;width: 30px;position: absolute;left: 0px;top: 0px;z-index: 2;}
.day_div .next_day {background: url(<?php echo OSSURL;?>public/mobile/img/top_right_01.png) no-repeat center;background-size: 12px;height: 40px;width: 30px;position: absolute;right: 0px;top: 0px;
z-index: 2;}
.icon_btn_call {width: 50px;height: 55px;background: url(<?php echo OSSURL;?>public/mobile/img/partent_ico_phone.png) no-repeat center !important;background-size: 20px !important;}
.common_til2 a {background: url(<?php echo OSSURL;?>public/mobile/img/partent_ico66.png) no-repeat left;background-size: 7px 10px;padding-left: 18px;display: block;width: auto;height: 100%;line-height: 44px;}
.common_til2 a.downIcoClass {background: url(<?php echo OSSURL;?>public/mobile/img/partent_ico6.png) no-repeat left;background-size: 10px 7px;padding-left: 18px;display: block;}
</style>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<?php  include $this->template('port');?>
<title><?php  echo $school['title'];?></title>  
</head>
<body>
<div class="All">
	<div id="titlebar" class="header mainColor">
		<div class="l"><a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a></div>
		<div class="m"><a><span style="font-size: 18px">结果统计</span></a></div>
		<div class="r"></div>
	</div>
	<main>
		<section>
			<!-- 顶部-->
			<div class="day_div">
				<div class="last_day left_btn">&nbsp;</div>
				<div id="head_container" class="head_container">
					<div class="swiper-container">
						<div class="swiper-wrapper">
						</div>
						<div class="pagination"></div>
					</div>
				</div>
				<div class="next_day right_btn">&nbsp;</div>
			</div>
		</section>
		<section class="contentBox">
			<div class="contentinfo">
				<div id="container" style="width: 100%; height: 400px"></div>
			</div>
		</section>
		<div class="footerBoxForIndex" style="margin-bottom:55px;">
			<p class="footerBoxBox">总发送<span><?php  echo $Zong;?></span>人，其中<span class="footerInfo"><?php  echo $WeiDu;?></span>人未读 </p>&nbsp;&nbsp;<a href="javascript:;" class="queryDetails">查看详情</a>
		</div>
	</main>
    <div class="clear"></div>
</div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<script src="<?php echo OSSURL;?>public/mobile/js/common.js?v=062220161020"></script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/highcharts.js?v=0622"></script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/idangerous.swiper.min.js?v=0622"></script>
<script type="text/javascript">
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		$("#head_container").css("margin-top","5px");
		document.title="结果统计"; 
	}
}, 100);
 
function placeholderPic(){
    var w = document.documentElement.offsetWidth||document.body.offsetWidth;
    document.documentElement.style.fontSize=(w/750)*100+'px';
}
placeholderPic();
window.onresize=function(){
    placeholderPic();
}
	var sQuestionUid = '<?php  echo $leaveid;?>';

	//配色方案
	var pageObj = [
		['#06c1ae'],
		['#06c1ae', '#ff9f22'],
		['#06c1ae', '#ff6665', '#ff9f22'],
		['#06c1ae', '#ff6665', '#33bd61', '#ff9f22'],
		['#06c1ae', '#ff6665', '#33bd61', '#ff9f22', '#ff7298'],
		['#06c1ae', '#ff6665', '#33bd61', '#ff9f22', '#ff7298', '#52b3ff'],
		['#06c1ae', '#ff6665', '#33bd61', '#ff9f22', '#ff7298', '#52b3ff', '#e4d354', '#8085e8', '#8d4653', '#91e8e1'],
	];
	var chartObj;

	function showPie(question_content, question_data, txtpageObj) {
		chartObj = new Highcharts.Chart(
			{
				chart: {
					renderTo: "container",
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie',
				},
				colors: txtpageObj,
				credits: {
					enabled: false // 禁用版权信息
				},
				//图列
				legend: {
					enabled: true,
					symbolWidth:10,
					symbolHeight: 10,
					y: -50
				   
				},

				title: {
					style: {
						color: '#333333',
						//fontWeight: 'bold',
						y: 100,
						fontSize: '16px'
					},
					y: 25,
					text: question_content,
					useHTML:true,
				},
				//提示框
				tooltip: {
					enabled: false,
					pointFormat: '{series.name}:{point.percentage:.1f}%'
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						events: {
							click: function (e) {
								//                            location.href = "www.baidu.com?a=1&b=1";
								  // window.open('123.aspx?type='+e.point.type+'&id='+e.point.tid);
								    console.log(e.point);
								location.href = "<?php  echo $this->createMobileUrl('questionnaire',array('schoolid'=>$schoolid,'leaveid'=>$leaveid))?>" +"&content=" + e.point.content + "&id=" + e.point.id + "&tmid=" + e.point.tmid;
							}
						},
						//百分比
						dataLabels: {
							enabled: true,
							color: '#666666',
							//format: '{point.name}:{point.percentage:.1f} %'
							format: '{point.percentage:.1f} %',
							style: {
								fontWeight: 'normal'
							}
						},
						//禁用图列点击事件
						point: {
							events: {
								legendItemClick: function (e) {
								    console.log(e.target);
								   // window.alert(e);
								location.href = "<?php  echo $this->createMobileUrl('questionnaire',array('schoolid'=>$schoolid,'leaveid'=>$leaveid))?>" + "&id=" + e.target.id + "&tmid=" + e.target.tmid;
								return false;

								}
							}
						},
						showInLegend: true
					}
				},
				series: [
					{
						type: 'pie',
						name: '',
						data: question_data
					}
				]
			}
		);

		//var data = [{ 'name': 'demo', 'y': 22, 'content': 'hh', 'id': '111' }, { 'name': '1', 'y': 3, 'content': 'bb', 'id': '333' }, { 'name': '1', 'y': 66, 'content': 'aa', 'id': '222' }];
		chartObj.series[0].setData(question_data);
	}
	//获取数据
	function getData() {
		var sListOrder = $(".active_diet").attr("title_value").toString();
			//sListOrder++;
			ajax_start_loading("载入中...");
		$.ajax({
			url: "<?php  echo $this->createMobileUrl('indexajax',array('op'=>'GetQueStisticsData'))?>",
			type: "post",
			dataType: "json",
			data: { "sQuestionUid": sQuestionUid, "sListOrder": sListOrder ,"schoolid":<?php  echo $schoolid;?>,"weid":<?php  echo $weid;?> },
			success: function (data) {
				ajax_stop_loading();
				var sResultJson = eval(data);
				CountLittle = sResultJson[0].XuanXiangCount;
				//console.log(sResultJson);
			
				//答题数
				if (sResultJson[0].question_data.length != 0) {

					if (sResultJson[0].question_type == 'c') {
						$('#container').empty();

						var questionTitle = $("<p class='questionTitle'></p>");
						var elementBox = $("<div class='txtInfoBox'></div>");
						

						questionTitle.append(sResultJson[0].question_content);//title

						var temp = sResultJson[0].question_data;

						for (var i = 0; i < temp.length; i++) {
							var creatorName = temp[i].creator_name;//姓名
							var contentTxt = temp[i].answer_content;//内容
							
							var elementItem = $('<div class="contentItem"></div>');
							var elementCreatorName = $('<div class="creatorName"></div>');
							var elementContentTxt = $('<div class="contentTxt"></div>');


							elementCreatorName.append(creatorName);//姓名
							elementContentTxt.append(contentTxt);//内容

							elementItem.append(elementCreatorName);
							elementItem.append(elementContentTxt);

							//item
							elementBox.append(elementItem);
						}

						$('#container').addClass('containerForTxt');
						$('.contentBox').addClass('contentBoxOther');

						$('#container').append(questionTitle);//问题标题
						$('#container').append(elementBox);

					} else {
						cssRest();
						$('#container').removeClass('containerOther');
						if (sResultJson[0].question_data.length > 6) {

							showPie(sResultJson[0].question_content, sResultJson[0].question_data, pageObj[6]);
						} else {

							showPie(sResultJson[0].question_content, sResultJson[0].question_data, pageObj[sResultJson[0].question_data.length - 1]);
						}
						
					}
				   
				} else {
					$('#container').empty();
					cssRest();
					$('.imgBox').remove();
					var element = $("<div class='imgBox'><img src='<?php echo OSSURL;?>public/mobile/img/sginNoContent.png' class='img-responsive'/><p>问题还没有数据哦！！！</p></div>");
					$('#container').addClass('containerOther').append(element);

				}


			}
		});
	}

	function cssRest() {
	   
		$('#container').removeClass('containerForTxt');
		$('.contentBox').removeClass('contentBoxOther');
	}
	//获取点击内容
	function getLegendContent() {

	}

	$(function () {
		Highcharts.setOptions({
			global: {
				useUTC: false
			}
		});


		$(".swiper-slide").each(function (i, item) {

		});

		//点击题目
		$(".swiper-container").on("click", ".swiper-slide", function (e) {
			e.stopPropagation();
		});

		$(".left_btn").on("click", function () {
			mySwiper.swipePrev();
			setActive_diet("pre");
		});
		$(".right_btn").on("click", function () {
			mySwiper.swipeNext();
			setActive_diet("next");
		});

		function setActive_diet(type, index) {
			switch (type) {
				case "next":
					var $current = $('.active_diet').parent('.swiper-slide').next();
					$($current).children('.title_swiper').addClass('active_diet');
					$($current).siblings().children('.title_swiper').removeClass('active_diet');
					break;
				case "pre":
					var $current = $('.active_diet').parent('.swiper-slide').prev();
					$($current).children('.title_swiper').addClass('active_diet');
					$($current).siblings().children('.title_swiper').removeClass('active_diet');
					break;
				case "click":
					var $current = $('.swiper-slide').eq(index);
					$($current).children('.title_swiper').addClass('active_diet');
					$($current).siblings().children('.title_swiper').removeClass('active_diet');

					//                    chartObj.series[0].setData(json.list);//数据填充到highcharts上面

					break;
				default:
					break;
			}
			getData();
		}

		var mySwiper = new Swiper('.swiper-container', {
			useCSS3Transforms: true,
			pagination: '.pagination',
			paginationClickable: true,
			centeredSlides: true,
			slidesPerView: 3,
			initialSlide: 4,
			freeModeFluid: true,
			onSlideClick: function (swiper) {
				//console.log(swiper);
				//console.log(mySwiper.activeIndex);
				mySwiper.swipeTo(swiper.clickedSlideIndex);
				setActive_diet("click", swiper.clickedSlideIndex);
			}
		});

		var sQuestionCount = parseInt(<?php  echo $countOfTm;?>);
		//初始化题目选项
		for (var i = 0; i < sQuestionCount; i++) {
			var t = i+1;
			var sTilteMess = "第" +(i+1) +"题"  ;
			if (i == 0) {
				var newSlide = mySwiper.createSlide('<div class="title_swiper active_diet" title_value="' + i + '">' + sTilteMess + '</div>', 'swiper-slide ');
				newSlide.append();
			} else {
				var newSlide = mySwiper.createSlide('<div class="title_swiper" title_value="' + i + '">' + sTilteMess + '</div>', 'swiper-slide ');
				newSlide.append();
			}
		}
		getData();

		$(".queryDetails").on("click", function () {
			location.href = "<?php  echo $this->createMobileUrl('recod', array('schoolid' => $schoolid,'noticeid'=>$leave['id']), true)?>";
		})
	})
</script>
<?php  include $this->template('newfooter');?> 
