<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="no" />
<meta name="format-detection" content="telephone=no" />
<meta name="HandheldFriendly" content="true" />
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/hb.js?v=1111"></script>
<link href="<?php echo OSSURL;?>public/mobile/css/new_yab.css?v=11111009" rel="stylesheet" />
<link href="<?php echo OSSURL;?>public/mobile/css/baby_video.css" rel="stylesheet" />
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<?php  include $this->template('port');?>
<style type="text/css">
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); }
.header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } 
.header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } 
.header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } 
.mainColor { background: #06c1ae !important; } 
.header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
.header .m a i {float: left;margin: 23px 0 0 5px;width: 0;height: 0;border-width: 6px 6px 0;border-style: solid;border-color: white transparent transparent;position: absolute;}
.baby_video_list > li > a .video_box .v_play_icon{background: url(<?php echo OSSURL;?>public/mobile/img/bv_play_icon.png) no-repeat center; background-size: 46px; width: 50px; height: 50px; z-index: 2; left: 50%; top: 35px; position: absolute; margin-left: -25px; }
.control_box_li .praise_btn_icon{  height: 36px; background: url(<?php echo OSSURL;?>public/mobile/img/bv_praise_icon2.png) no-repeat left center; background-size: 16px; display: inline-block; padding-left: 24px; font-size: 16px; color: #aaaaaa; }
.control_box_li .praise_btn_icon.act{background: url(<?php echo OSSURL;?>public/mobile/img/bv_praise_icon.png) no-repeat left center; background-size: 16px; }
.control_box_li .comment_btn_icon{ height: 36px; background: url(<?php echo OSSURL;?>public/mobile/img/bv_comment_icon.png) no-repeat left center; background-size: 16px; display: inline-block; padding-left: 24px; font-size: 16px; color: #aaaaaa; }
.control_box_li .share_btn_icon{ height: 36px; background: url(<?php echo OSSURL;?>public/mobile/img/bv_share_icon.png) no-repeat left center; background-size: 12px; display: inline-block; padding-left: 20px; font-size: 16px; color: #aaaaaa; }
.control_box_li .more_btn_icon{  height: 36px; background: url(<?php echo OSSURL;?>public/mobile/img/bv_more_icon.png) no-repeat left center; background-size: 16px; display: inline-block; padding-left: 24px; font-size: 16px; color: #aaaaaa; }
.control_box_li .more_btn_icon a{ display: inline-block; height: 36px; color: #aaaaaa;}
.control_box_li .see_btn_icon{  height: 36px; background: url(<?php echo OSSURL;?>public/mobile/img/look_icon.png) no-repeat left center; background-size: 16px; display: inline-block; padding-left: 24px; font-size: 16px; color: #aaaaaa; }
.control_box_li .see_btn_icon a{ display: inline-block; height: 36px; color: #aaaaaa;}
.bv_comment_list .comment_li .reply_btn{ display: inline-block; padding-left:20px; line-height: 20px; height: 20px; background: url(<?php echo OSSURL;?>public/mobile/img/bv_reply_icon.png) no-repeat left center; background-size: 16px; font-size: 14px; color: #e5457f; float: right;}
.bv_comment_list .comment_li .sec_comment_li .reply_btn{ display: inline-block; padding-left:20px; line-height: 20px; height: 20px; background: url(<?php echo OSSURL;?>public/mobile/img/bv_reply_icon.png) no-repeat left center; background-size: 16px; font-size: 14px; color: #e5457f; float: right; }
.bv_info_list li a .text .like_icon{ width: 20px; height: 20px; background: url(<?php echo OSSURL;?>public/mobile/img/like_icon3_1.png) no-repeat center; background-size: 16px;}
.other_video_list li a .video_content .video_other_info{ font-size: 12px; color: #000; line-height: 16px; padding-left: 30px; background: url(<?php echo OSSURL;?>public/mobile/img/bv_play_icon.png) no-repeat left center; background-size: 16px;}
.empty_video{ height: 250px; width: 100%; background: url("<?php echo MODULE_URL;?>public/mobile/img/empty_video.png") no-repeat center; background-size: 180px; }
.empty_video_2{ height: 190px; width: 100%; background: url("<?php echo MODULE_URL;?>public/mobile/img/empty_video.png") no-repeat center; background-size: 180px; }
.selectList{position:fixed; left:0; right:0; top:0; bottom:0;-webkit-box-sizing:border-box; box-sizing:border-box; background-color:rgba(0,0,0,.53); text-align:center; z-index:30;font-size:20px;color:#fe6700;}
.selectList .single{ position:absolute; left:6%; right:6%; top:35%; padding: 0 20px; background-color:#fff; padding-bottom:33px; padding-top: 10px;}
.selectList ul{width:100%;height:auto;overflow:auto;}
.selectList ul li{height:50px;line-height:50px;border-bottom:1px solid #e9e9e9;padding:0 10px;}
.selectList ul li.selected{border-left:5px solid #ffc74e;}
.selectList ul li span.le{height:50px;line-height:50px;float:left;font-size:16px;}
.selectList ul li span.ri{float:right;height:50px;line-height:50px;font-size:16px;}
.click {width: auto;height: 27px;right: 0;top: 15px;background-color: #ceb750;border-radius: 50px 0 0 50px;z-index: 2; position: fixed;}
.useredits{line-height: 28px;float: right;margin-right: 4px;color:#fff}
.font_icon{width: 15px;margin-top: 6px;margin-left: 7px;margin-right: 2px;}
</style>
<title><?php  echo $mybj['sname'];?></title>
</head>
<body> 
<div>
<a class="click">
	<img class="font_icon" src="<?php echo MODULE_URL;?>public/mobile/img/evaluation_edit_icon.png"></img><div class="useredits">切换班级</div>
</a>
<?php  if($mybj['video'] || $list) { ?>
	<ul class="baby_video_list" style="margin-top:10px;">
	<?php  if(is_array($list)) { foreach($list as $row) { ?>
		<?php  if($row['videotype'] == 2 || $row['bj_id'] == $nowbj) { ?>
			<li>
				<a href="<?php  echo $this->createMobileUrl('tcamera', array('schoolid' => $schoolid, 'bj_id' =>$nowbj, 'id'=> $row['id']), true)?>">
					<div class="til"><?php  echo $row['name'];?></div>
					<div class="blank"></div>
					<div class="video_box">
						<img src="<?php  echo tomedia($row['videopic'])?>">
						<div class="v_play_icon"></div>
					</div>
				</a>
				<div class="control_box">
					<div class="control_box_li">
					<?php  if($row['isdz']) { ?><div class="praise_btn_icon act"><?php  echo $row['dianzan'];?></div><?php  } else { ?><div class="praise_btn_icon"><?php  echo $row['dianzan'];?></div><?php  } ?>
					</div>
					<div class="control_box_li">
						<div class="comment_btn_icon"><?php  echo $row['plsl'];?></div>
					</div>
					<div class="control_box_li">
						<div class="see_btn_icon"><?php  echo $row['click'];?></div>
					</div>
				</div>			
			</li>
		<?php  } else { ?>
			<?php  if(is_array($row['myvideo'])) { foreach($row['myvideo'] as $item) { ?>
			<?php  if($item == $nowbj) { ?>
			<li>
				<a href="<?php  echo $this->createMobileUrl('tcamera', array('schoolid' => $schoolid, 'bj_id' =>$nowbj, 'id'=> $row['id']), true)?>">
					<div class="til"><?php  echo $row['name'];?></div>
					<div class="blank"></div>
					<div class="video_box">
						<img src="<?php  echo tomedia($row['videopic'])?>">
						<div class="v_play_icon"></div>
					</div>
				</a>
				<div class="control_box">
					<div class="control_box_li">
					<?php  if($row['isdz']) { ?><div class="praise_btn_icon act"><?php  echo $row['dianzan'];?></div><?php  } else { ?><div class="praise_btn_icon"><?php  echo $row['dianzan'];?></div><?php  } ?>
					</div>
					<div class="control_box_li">
						<div class="comment_btn_icon"><?php  echo $row['plsl'];?></div>
					</div>
					<div class="control_box_li">
						<div class="see_btn_icon"><?php  echo $row['click'];?></div>
					</div>
				</div>
			</li>
			<?php  } ?>
			<?php  } } ?>
		<?php  } ?>
	<?php  } } ?>	
	</ul>
<?php  } else { ?>
<ul class="empty_video" style="margin-top: 60px;"><ul>
<?php  } ?>	
<div class="slide_left_menu_bg">
    <div class="slide_left_menu">
        <div class="slide_left_menu_til">切换列表</div>
        <ul class="slide_left_menu_ul">
		<?php  if(is_array($allkclist)) { foreach($allkclist as $row) { ?>
			<li onclick="isSelect(<?php  echo $row['sid'];?>,<?php  echo $schoolid;?>);" <?php  if($nowbj == $row['sid']) { ?>class="act"<?php  } ?>>
				<div><?php  echo $row['sname'];?></div>
			</li>
		<?php  } } ?>
		</ul>	
    </div>
</div>
</div>
<script>
WeixinJSHideAllNonBaseMenuItem();
/**微信隐藏工具条**/
function WeixinJSHideAllNonBaseMenuItem(){
	if (typeof wx != "undefined"){
		wx.ready(function () {
			
			wx.hideAllNonBaseMenuItem();
		});
	}
}
function isSelect(bj_id,schoolid){
	location.href = "<?php  echo $this->createMobileUrl('tallcamera')?>"+ '&bj_id=' + bj_id + '&schoolid=' + schoolid;
	location.href = reload();
}

$(".click").on("click", function(e) {
	e.stopPropagation();
	$(".slide_left_menu_bg").addClass("show_menu_bg");
});
$(".slide_left_menu_bg").on("click", function() {
	$(this).removeClass("show_menu_bg");
});

</script>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
 <?php  include $this->template('newfooter');?> 
</html>