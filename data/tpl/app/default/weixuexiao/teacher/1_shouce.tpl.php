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
.head_til img{width: 25px;height: 25px;display: inline-block;float: left;border-radius: 40px;}
body {background-color: #E7FAFF;}
.bottom_control_row .prev_btn1 {margin: 15px 5px 15px 35px;float: left;width: 100px;background-color: #e5457f;border-radius: 3px;line-height: 35px;height: 35px;text-align: center;}
.bottom_control_row .prev_btn1 a, .bottom_control_row .next_btn a {color: #fff;}
.bottom_control_row .prev_btn2 {margin: 15px 5px 15px 35px;float: left;width: 100px;background-color: #e5457f;border-radius: 3px;line-height: 35px;height: 35px;text-align: center;}
.bottom_control_row .prev_btn2 a, .bottom_control_row .next_btn a {color: #fff;}
</style>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<?php  include $this->template('port');?>
<title><?php  echo $school['title'];?></title>
</head>
<body>
<div id="titlebar" class="header mainColor">
	<div class="l">
		<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="<?php  echo $this->createMobileUrl('shoucepl', array('schoolid' => $schoolid,'scid' => $scid,'setid' => $setid, 'bj_id' => $student['bj_id']), true)?>">
		</a>
	</div>
	<div class="m">
		<a><span style="font-size: 18px">点评学生</span></a>
	</div>
</div>
<div class="All">
<div id="titlebars" class="top_height_blank"></div>
<div class="manual_main1">
    <div class="manual_visible_box">
        <div class="manual_til_img">
            <img src="<?php  echo tomedia($toppic['top1'])?>" />
        </div>
        <div class="manual_main_box2">
            <div class="head_til"><img src="<?php  if($student['icon']) { ?><?php  echo tomedia($student['icon'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?>">&nbsp;<?php  echo $student['s_name'];?></div>
            <?php  if($_GPC['op'] =='edite') { ?>
				<ul class="manual_baby_situation_ul">
					<?php  if(is_array($list)) { foreach($list as $row) { ?>
						<li>
							<div class="li_block_1"><?php  echo $row['title'];?></div>
							<div class="li_block_2" record_uid="<?php  echo $row['id'];?>">
								<?php  if($row['icon1']) { ?><div class="situation_level1 <?php  if(!$row['iconlevel']) { ?>on<?php  } else { ?><?php  if($row['iconlevel'] ==1) { ?>on<?php  } ?><?php  } ?>" icon_index="1" style="background-image: url(<?php  echo tomedia($row['icon1'])?>);"></div><?php  } ?>
								<?php  if($row['icon2']) { ?><div class="situation_level1 <?php  if($row['iconlevel'] ==2) { ?>on<?php  } ?>" icon_index="2" style="background-image: url(<?php  echo tomedia($row['icon2'])?>);"></div><?php  } ?>
								<?php  if($row['icon3']) { ?><div class="situation_level1 <?php  if($row['iconlevel'] ==3) { ?>on<?php  } ?>" icon_index="3" style="background-image: url(<?php  echo tomedia($row['icon3'])?>);"></div><?php  } ?>
								<?php  if($row['icon4']) { ?><div class="situation_level1 <?php  if($row['iconlevel'] ==4) { ?>on<?php  } ?>" icon_index="4" style="background-image: url(<?php  echo tomedia($row['icon4'])?>);"></div><?php  } ?>
								<?php  if($row['icon5']) { ?><div class="situation_level1 <?php  if($row['iconlevel'] ==5) { ?>on<?php  } ?>" icon_index="5" style="background-image: url(<?php  echo tomedia($row['icon5'])?>);"></div><?php  } ?>
							</div>
						</li>
					<?php  } } ?>	
				</ul>
				<div class="parent_evaluation_box">
					<textarea placeholder="说说学生在校表现" id="eval_text" ><?php  echo $mypl['tword'];?></textarea>
					<div class="blue_btn_1">添加评语</div>
					<div class="clear1"></div>
				</div>
			<?php  } else if($_GPC['op'] =='check') { ?>
				<ul class="manual_baby_situation_ul">
				<?php  if(is_array($list1)) { foreach($list1 as $row) { ?>
					<ul class="manual_baby_situation_ul">
						<li>
							<div class="li_block"><?php  echo $row['title'];?></div>
							<div class="li_block">
								<div class="situation_level1" style="background-image: url(<?php  echo tomedia($row['icon'])?>)"><?php  echo $row['icontitle'];?></div>
							</div>
						</li>               
					</ul>
				<?php  } } ?>
				</ul>		
				<div class="blank"></div>
				<?php  if(is_array($allpl)) { foreach($allpl as $row) { ?>
					<div class="evaluation_box evaluation_box2">
						<div class="evaluation_photo">
							<img src="<?php  if($row['thumb']) { ?><?php  echo tomedia($row['thumb'])?><?php  } else { ?><?php  echo tomedia($school['tpic'])?><?php  } ?>">
						</div>
						<div class=" evaluation_box_text2">
							<div class="evaluation_box_til3"><?php  echo $row['tname'];?></div>
							<div class="time"><?php  echo $row['time'];?>前</div>
						</div>
						<div class="blank"></div>
						<div class="evaluation_box_content"><?php  echo $row['tword'];?><?php  echo $row['jzword'];?></div>
					</div>
				<?php  } } ?>
				<div class="blank"></div>
				<?php  if(!$mypl['tword']) { ?><a href="<?php  echo $this->createMobileUrl('shouce', array('schoolid' => $schoolid,'sid' => $sid,'scid' => $scid,'setid' => $setid, 'op' => 'edite'), true)?>" class="white_btn2 edit-btn" id="add_comment" >我也说两句</a><?php  } ?>
			<?php  } else { ?>
				<ul class="manual_baby_situation_ul">
					<?php  if(is_array($list)) { foreach($list as $row) { ?>
						<li>
							<div class="li_block_1"><?php  echo $row['title'];?></div>
							<div class="li_block_2" record_uid="<?php  echo $row['id'];?>">
								<?php  if($row['icon1']) { ?><div class="situation_level1 on" icon_index="1" style="background-image: url(<?php  echo tomedia($row['icon1'])?>);"></div><?php  } ?>
								<?php  if($row['icon2']) { ?><div class="situation_level1 " icon_index="2" style="background-image: url(<?php  echo tomedia($row['icon2'])?>);"></div><?php  } ?>
								<?php  if($row['icon3']) { ?><div class="situation_level1 " icon_index="3" style="background-image: url(<?php  echo tomedia($row['icon3'])?>);"></div><?php  } ?>
								<?php  if($row['icon4']) { ?><div class="situation_level1 " icon_index="4" style="background-image: url(<?php  echo tomedia($row['icon4'])?>);"></div><?php  } ?>
								<?php  if($row['icon5']) { ?><div class="situation_level1 " icon_index="5" style="background-image: url(<?php  echo tomedia($row['icon5'])?>);"></div><?php  } ?>
							</div>
						</li>
					<?php  } } ?>	
				</ul>
				<div class="parent_evaluation_box">
					<textarea placeholder="说说学生在校表现" id="eval_text" ></textarea>
					<div class="blue_btn_1">添加评语</div>
					<div class="clear1"></div>
				</div>
			<?php  } ?>
            <div class="blank"></div>
            <!-- <div class="evaluation_upload_btn"><img src="http://test.wemeeting.cn/youanbao/static//teacherwap/image/upload_img_icon1.png"></div> -->
            <div class="small_blank"></div>
        </div>
    </div>
<?php  if($_GPC['op'] =='check') { ?>
    <div class="bottom_control_row">
		 <?php  if($_GPC['type'] =='home') { ?>
			<div class="prev_btn2"><a href="<?php  echo $this->createMobileUrl('shouce', array('schoolid' => $schoolid,'sid' => $sid,'scid' => $scid,'setid' => $setid, 'op' => 'check', 'type' => 'school'), true)?>">在校情况</a></div>
		 <?php  } ?>	
		 <?php  if($_GPC['type'] =='school' || !$_GPC['type']) { ?>
			<div class="prev_btn2"><a href="<?php  echo $this->createMobileUrl('shouce', array('schoolid' => $schoolid,'sid' => $sid,'scid' => $scid,'setid' => $setid, 'op' => 'check', 'type' => 'home'), true)?>">在家情况</a></div>		 
		 <?php  } ?>
        <div class="next_btn blue_bg"><a href="<?php  echo $this->createMobileUrl('shouce', array('schoolid' => $schoolid,'sid' => $sid,'scid' => $scid,'setid' => $setid, 'op' => 'edite'), true)?>">修改在校情况</a></div>
    </div>
<?php  } else if($_GPC['op'] =='edite') { ?>
    <div class="bottom_control_row">
            <div class="prev_btn1" type="prev"><a href="javascript:void(0);">保存并发送</a></div>
        <div class="next_btn blue_bg"><a href="javascript:history.go(-1);">返回</a></div>
    </div>
<?php  } else { ?>
    <div class="bottom_control_row">
            <div class="prev_btn" type="prev"><a href="javascript:void(0);">保存,下一个</a></div>
        <div class="next_btn blue_bg"><a href="javascript:history.go(-1);">返回</a></div>
    </div>	
<?php  } ?>	
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
 
var session_comment = "session_comment";
var session_performace = "session_performace";
$('.blue_btn_1').on('click', function () {
	var url = "<?php  echo $this->createMobileUrl('shoucepy', array('schoolid' => $schoolid,'sid' => $sid,'scid' => $scid,'setid' => $setid, 'op' => $op), true)?>";
	var comment_text = $("#eval_text").val();
	var performace_list = $(".manual_baby_situation_ul").html();

	sessionStorage.setItem(session_comment, comment_text);
	sessionStorage.setItem(session_performace, performace_list);
	window.location.href = url;
});

$(function () {
	if (sessionStorage.getItem(session_comment) != null) {
		var comment_text = sessionStorage.getItem(session_comment);
		$("#eval_text").val(comment_text);
		sessionStorage.removeItem(session_comment);
	}
	
	if (sessionStorage.getItem(session_performace) != null) {
		var performace = sessionStorage.getItem(session_performace);
		$(".manual_baby_situation_ul").html(performace);
		sessionStorage.removeItem(session_performace);
	}

});

$(".manual_baby_situation_ul").on("click", ".li_block_2 div", function () {
	$(this).addClass("on").siblings("div").removeClass("on");
})

$(".prev_btn").on("click", function () {
	var comment = iphone_emoji_filter($.trim($("#eval_text").val()));
	var performance = "";
	$(".manual_baby_situation_ul li").each(function () {
		performance += $(this).find(".li_block_2").attr("record_uid") + "_" + $(this).find(".li_block_2 .on").attr("icon_index")+",";
	});
	var type = $(this).attr("type");
	$.ajax({
		url: "<?php  echo $this->createMobileUrl('shouce', array('schoolid' => $schoolid,'op' => 'savedata'), true)?>",
		data: { comment: comment, performance: performance, sid: "<?php  echo $sid;?>", scid: "<?php  echo $scid;?>", setid: "<?php  echo $setid;?>" , tid: "<?php  echo $it['tid'];?>", userid: "<?php  echo $it['id'];?>", weid: "<?php  echo $weid;?>"},
		type: "post",
		dataType:"json",
		success: function (data) {
			jTips(data.info, function () {
				if (data.status == 1) {
				<?php  if($nextid != $lastid) { ?>
					window.location.href = "<?php  echo $this->createMobileUrl('shouce', array('schoolid' => $schoolid,'sid' => $nextid,'scid' => $scid,'setid' => $setid), true)?>";
				<?php  } else { ?>
					window.location.href = "<?php  echo $this->createMobileUrl('shoucepl', array('schoolid' => $schoolid,'scid' => $scid,'setid' => $setid,'bj_id' => $student['bj_id']), true)?>";
				<?php  } ?>
				}
			});
		}
	});
});
$(".prev_btn1").on("click", function () {
	var comment = iphone_emoji_filter($.trim($("#eval_text").val()));
	var performance = "";
	$(".manual_baby_situation_ul li").each(function () {
		performance += $(this).find(".li_block_2").attr("record_uid") + "_" + $(this).find(".li_block_2 .on").attr("icon_index")+",";
	});
	var type = $(this).attr("type");
	$.ajax({
		url: "<?php  echo $this->createMobileUrl('shouce', array('schoolid' => $schoolid,'op' => 'updata'), true)?>",
		data: { comment: comment, performance: performance, sid: "<?php  echo $sid;?>", scid: "<?php  echo $scid;?>", setid: "<?php  echo $setid;?>" , tid: "<?php  echo $it['tid'];?>", userid: "<?php  echo $it['id'];?>", weid: "<?php  echo $weid;?>"},
		type: "post",
		dataType:"json",
		success: function (data) {
			jTips(data.info, function () {
				if (data.status == 1) {
					window.location.href = "<?php  echo $this->createMobileUrl('shoucepl', array('schoolid' => $schoolid,'scid' => $scid,'setid' => $setid,'bj_id' => $student['bj_id']), true)?>";	
				}
			});		
		}
	});
});
</script>
