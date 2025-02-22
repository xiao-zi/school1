<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php  echo $school['title'];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/kqtjCss.css?v=5.1"/>
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=4.80120" />
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.9"></script>
<?php  include $this->template('port');?>
<style>
.slide_left_menu_bg.show_menu_bg {display: block;-webkit-animation-name: fadeIn;animation-name: fadeIn;-webkit-animation-duration: 600ms;animation-duration: 600ms;-webkit-animation-fill-mode: both;/* animation-fill-mode: both; */}
.slide_left_menu_bg_other.show_menu_bg {display: block;-webkit-animation-name: fadeIn;animation-name: fadeIn;-webkit-animation-duration: 600ms;animation-duration: 600ms;-webkit-animation-fill-mode: both;/* animation-fill-mode: both; */}
.slide_left_menu_bg {width: 100%;z-index: 998;background: rgba(0, 0, 0, 0.5);position: fixed;min-height: 100%;top: 0;left: 0;zoom: 1;overflow: hidden;display: none;height: 100%;z-index: 1000;overflow-y: scroll;}
.slide_left_menu_bg_other {width: 100%;z-index: 998;background: rgba(0, 0, 0, 0.5);position: fixed;min-height: 100%;top: 0;left: 0;zoom: 1;overflow: hidden;display: none;height: 100%;
z-index: 1000;overflow-y: scroll;display: none;}
.slide_left_menu {width: 50%!important;right: 0;background-color: #fff;z-index: 999;min-height: 100%;position: absolute;}
.slide_left_menu_ul_other {width: 100%;border: 1px solid #ccc;border-left: none;border-right: none;box-sizing: border-box;padding: 0 10px;}
.slide_left_menu_ul_other li {height: 50px;line-height: 50px;border-bottom: 1px solid #ccc;font-size: 16px;width: 100%;box-sizing: border-box;padding: 0 10px 0 10px;overflow: hidden;
position: relative;}
.slide_left_menu_ul_other li.act {background: url(<?php echo OSSURL;?>public/mobile/img/be_choose_icon.png) right center no-repeat;background-size: 16px;background-origin: content-box;-moz-background-origin: content-box;-webkit-background-origin: content-box;}
.slide_left_menu_ul li.act {background: url(<?php echo OSSURL;?>public/mobile/img/be_choose_icon_02.png) right center no-repeat;background-size: 16px;background-origin: content-box;-moz-background-origin: content-box;-webkit-background-origin: content-box;}
.slide_left_menu_ul_other li:last-of-type {border-bottom: none;}
.slide_left_menu_ul_other li .user_img {width: 50px;height: 50px;position: absolute;left: -5px;top: 0;box-sizing: border-box;padding: 10px;}
.slide_left_menu_ul_other li .user_img img {width: 100%;height: 100%;border-radius: 50%;}
.slide_left_menu_ul_other li .change_user {width: 40px;height: 100%;position: absolute;right: 0;top: 0;background: url(<?php echo OSSURL;?>public/mobile/img/be_choose_icon.png) center no-repeat;background-size: 30px;}
.slide_left_menu_til {height: 40px;line-height: 40px;box-sizing: border-box;padding: 0 40px 0 15px;position: relative;font-size: 16px;}
.slide_left_menu_ul {width: 100%;border: 1px solid #ccc;border-left: none;border-right: none;box-sizing: border-box;padding: 0 10px;}
.slide_left_menu_ul li {height: 50px;line-height: 50px;/*border-bottom: 1px solid #ccc;*/font-size: 16px;width: 100%;box-sizing: border-box;padding: 0 10px 0 50px;overflow: hidden;
position: relative;}
.hederRightBox {width: 21px;height: 100%;display: inline-block;position: absolute;right: 20px;}
.hederRightBox a {width: 100%;height: 21px;display: inline-block;position: absolute;top: 50%;transform: translateY(-50%);-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);}
</style>
</head>
<body id="kqtjbody">
<div id="titlebar" class="header mainColor">
	<div class="l"><a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a></div>
	<div class="m"><a><span style="font-size: 18px"><?php  if($user['status'] == 2) { ?>全校职工<?php  } else { ?><?php  echo $bjidname['sname'];?><?php  } ?></span></a></div>
	<?php  if($user['status'] == 3) { ?>
	<div class="r">
        <a href="javascript:;" class="choice_baby">
            <img style="height: 30px;margin-top:10px" src="<?php echo OSSURL;?>public/mobile/img/selectMean.png" class="img-responsive">
        </a>
	</div>
	<?php  } ?>
</div>
<div id="titlebar_bg" class="_header"></div>
	<div id="attendance">
		<div class="r1">
			<div class="t">
				<div class="t1"><?php  if($user['status'] == 2) { ?>全校职工<?php  } else { ?>本年级职工<?php  } ?></div>
				<div id="num1"><?php  echo $snum;?>人</div>
			</div>
		</div>
		<div class="m1">
			<div class="t">
				<div class="t2">打卡人数</div>
				<div id="num2"><?php  echo $notrowcount;?></div>
			</div>
		</div>
		<div class="l1">
			<a id="showhistory">
				<div class="t">
					<div class="t3">日期</div>
					<div id="num3"><?php  echo date('m月d日',$starttime)?></div>
				</div>
			</a>
		</div>
	</div>
	<ul id="table-responsive">	
		<li class="thead">
			<ul>
				<li class="li1">教师</li>
				<li class="li2">考勤</li>
				<li class="li3">进校</li>
				<li class="li4">离校</li>
				<li class="li5">异常</li>
			</ul>
		</li>                                                                                                									
		<li class="tbody">
		<?php  if($user['status'] == 2) { ?>
			<?php  if(is_array($teacher)) { foreach($teacher as $item) { ?>
				<?php  if($item['id']%2 == 0) { ?>
				<li class="li" style="background-color: rgb(244, 244, 244);">
				<?php  } else { ?>
				<li class="li" style="background-color: white;">
				<?php  } ?>
					<ul>
						<li class="li1"><?php  echo $item['tname'];?></li>
						<li class="li2"><span style="<?php  if(!empty($item['ischeck'])) { ?>background-color:#06c1ae;color:white;border-radius:5px;<?php  } ?>"><?php  if(!empty($item['ischeck'])) { ?>已打卡<?php  } else { ?>未打卡<?php  } ?></span></li>
						<li class="li3"><?php  echo $item['jxnum'];?>次</li>
						<li class="li4"><?php  echo $item['lxnum'];?>次</li>
						<li class="li5" style="<?php  if($item['ycnum']!=0) { ?>background-color:#06c1ae;color:white;border-radius:5px;<?php  } ?>"><?php  echo $item['ycnum'];?>次</li>
					</ul>		
				</li>
			<?php  } } ?>
		<?php  } ?>
		<?php  if($user['status'] == 3) { ?>
			<?php  if(is_array($teacher)) { foreach($teacher as $item) { ?>
			<?php  if(in_array($item['id'],$allls)) { ?>
				<?php  if($item['id']%2 == 0) { ?>
				<li class="li" style="background-color: rgb(244, 244, 244);">
				<?php  } else { ?>
				<li class="li" style="background-color: white;">
				<?php  } ?>
					<ul>
						<li class="li1"><?php  echo $item['tname'];?></li>
						<li class="li2"><span style="<?php  if(!empty($item['ischeck'])) { ?>background-color:#06c1ae;color:white;border-radius:5px;<?php  } ?>"><?php  if(!empty($item['ischeck'])) { ?>已打卡<?php  } else { ?>未打卡<?php  } ?></span></li>
						<li class="li3"><?php  echo $item['jxnum'];?>次</li>
						<li class="li4"><?php  echo $item['lxnum'];?>次</li>
						<li class="li5" style="<?php  if($item['ycnum']!=0) { ?>background-color:#06c1ae;color:white;border-radius:5px;<?php  } ?>"><?php  echo $item['ycnum'];?>次</li>
					</ul>		
				</li>
			<?php  } ?>	
			<?php  } } ?>
		<?php  } ?>		
		<li class="tfoot"></li>
		<li class="overDiv" style="margin-bottom:60px"></li>
	</ul>
	<!--左边弹窗-->
	<div class="slide_left_menu_bg">
		<div class="slide_left_menu">
			<div class="slide_left_menu_til">年级列表</div>
			<ul class="slide_left_menu_ul">
			<?php  if(is_array($njlist)) { foreach($njlist as $row) { ?>
				<li onclick="isSelect(<?php  echo $row['sid'];?>);"<?php  if($_GPC['nj_id'] == $row['sid']) { ?>class="act"<?php  } ?>>
					<div><?php  echo $row['sname'];?></div>
				</li>
			<?php  } } ?>	
			</ul>
		</div>
	</div>	
	<div class="user_info" id="user_info" style="display:none;">
	   <div>
			<ul>
				<p>查看历史记录</p>	
				<li class="user_name">
				  选择日期
					<input type="date" name ="time" id="time" value="">
				</li>						
				<div class="btn" id="bdax">提交</div>
			</ul>
			<span id="clos">×</span>
	   </div>
    </div>	
<script type="text/javascript">
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		$("#titlebar_bg").hide();
		$("#table-responsive").css("margin-top","0px");
		document.title="职工考勤(当日)";
	}
}, 100);

        $(".choice_baby").on("click", function(e) {
            e.stopPropagation();
            $(".slide_left_menu_bg").addClass("show_menu_bg");
        });
        $(".slide_left_menu_bg").on("click", function() {
            $(this).removeClass("show_menu_bg");
        });
	$(function ($) {
		$("#showbjlist").on('click', function () {
            $('#selectList').show();
		});
		$("#showhistory").on('click', function () {
            $('#user_info').show();
		});	
		$("#clos").on('click', function () {
            $('#user_info').hide();
		});		
		$("#BlackBg").on('click', function () {
            $('#user_info').hide();
			$('#selectList').hide();
		});			
		$("#bdax").on('click', function () {
			var time = $("#time").val();
			if (time == "" || time == undefined || time == null) {
            jTips('请选择日期！');
            return false;
			}
			location.href = "<?php  echo $this->createMobileUrl('jschecklog', array('schoolid' => $schoolid,'nj_id' => $nj_id), true)?>"+ '&time=' + time;	
		});		
	});
	function isSelect(bjid){
		jTips("数据加载中！···");
		location.href = "<?php  echo $this->createMobileUrl('jschecklog', array('schoolid' => $schoolid), true)?>"+ '&nj_id=' + bjid;
	}	
</script>	
<?php  include $this->template('newfooter');?>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>