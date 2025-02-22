<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="true" />
<?php  include $this->template('shoucecss');?>
<style type="text/css">
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); }
.header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } 
.header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } 
.header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } 
.mainColor {background:<?php  echo $school['headcolor'];?> !important;}
.header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
body {background-color: #E7FAFF;}
</style>
<title><?php  echo $school['title'];?></title>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<?php  include $this->template('port');?>
</head>
<body>
<div id="titlebar" class="header mainColor">
	<div class="l">
		<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="<?php  echo $this->createMobileUrl('shoucelist', array('schoolid' => $schoolid,'bj_id' => $bj_id), true)?>"></a>
	</div>
	<div class="m">
		<a><span style="font-size: 18px">点评列表</span></a>
	</div>
</div>
<div class="All">
<div id="titlebars" class="top_height_blank"></div>
<div class="manual_student_list">
<div class="manual_student_list_search">
	<input type="text" value="" placeholder="请输入学生姓名" class="search_text">
	<div class="search_btn"></div>
</div>
<div class="blank"></div>
<div class="f_blue un_send_count">未发送</div>
<div class="blank"></div>
<ul class="manual_student_list_ul manual_student_list_ul2 ul_border no_r_p">
<?php  if(is_array($list)) { foreach($list as $row) { ?>
	<li>
	<?php  if(!$row['isdp']) { ?>
			<a href="<?php  echo $this->createMobileUrl('shouce', array('schoolid' => $schoolid,'sid' => $row['id'],'scid' => $scid,'setid' => $setid), true)?>" class="box_box">
	<?php  } else { ?>
		<?php  if(!$row['ispl']) { ?>
			<a href="<?php  echo $this->createMobileUrl('shouce', array('schoolid' => $schoolid,'sid' => $row['id'],'scid' => $scid,'setid' => $setid, 'op' => 'edite'), true)?>" class="box_box">
		<?php  } else { ?>
			<a href="<?php  echo $this->createMobileUrl('shouce', array('schoolid' => $schoolid,'sid' => $row['id'],'scid' => $scid,'setid' => $setid, 'op' => 'check'), true)?>" class="box_box">
		<?php  } ?>
	<?php  } ?>
			<div class="manual_student_photo">
				<img src="<?php  if($row['icon']) { ?><?php  echo tomedia($row['icon'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?>">
			</div>
			<div class="manual_student_name box_flex1"><?php  echo $row['s_name'];?></div>
			<?php  if(!$row['isdp']) { ?>
				<div id="wdp" class="manual_student_btn_unedit">点评</div>
			<?php  } else { ?>
				<?php  if(!$row['ispl']) { ?>
				<div class="f_blue manual_student_btn_edit">未评论</div>
				<?php  } else { ?>
				<div class="manual_student_btn_edit">已评论</div>
				<?php  } ?>
			<?php  } ?>
			</a>
	</li>
<?php  } } ?>	
</ul>
<div class="blank"></div>
<div class="notice" style="">
	还有<span class="f_red"></span>人未点评
</div>   
<div class="top_height_blank"></div>
<?php  include $this->template('newfooter');?>
</div>
<div class="clear"></div>
</div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>

<script>
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		$("#titlebars").hide();
		document.title="点评学生"; 
	}
}, 100);
if(window.__wxjs_environment === 'miniprogram'){
	
}
	$(".search_text").on("input propertychange", function () {
		var search_text = $.trim($(this).val());
		if (search_text == '') {
			$(".manual_student_list_ul li").show();
		} else {
			$(".manual_student_list_ul li").each(function () {
				if ($(this).find(".manual_student_name").text().indexOf(search_text) != -1) {
					$(this).show();
				} else {
					$(this).hide();
				}
			})
		}
	});
	$(function () {
		//alert($(".box_box").length);
		$(".un_send_count").text("未发送"+$(".manual_student_btn_unedit").length+"人,对学生进行点评保存后即可发送");
		$(".f_red").text($(".manual_student_btn_unedit").length);
		if ($(".manual_student_list_ul2 li").length == 0)
		{
			$(".manual_student_list_ul2").hide();
		}
	});
</script>
