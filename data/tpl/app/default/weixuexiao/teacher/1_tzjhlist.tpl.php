<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="true" />
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/hb.js?v=1027"></script>
<link href="<?php echo OSSURL;?>public/mobile/css/weekplan_index.css?v=10271025" rel="stylesheet" />
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<style type="text/css">
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); }
.header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } 
.header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } 
.header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } 
.mainColor {background:<?php  echo $school['headcolor'];?> !important;}
.header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
.header .m a i {float: left;margin: 23px 0 0 5px;width: 0;height: 0;border-width: 6px 6px 0;border-style: solid;border-color: white transparent transparent;position: absolute;}
.selectList {position: fixed;left: 0;right: 0;top: 0;bottom: 0;-webkit-box-sizing: border-box;box-sizing: border-box;background-color: rgba(0,0,0,.53);text-align: center;z-index: 30;font-size: 20px;    color: #fe6700;}
.selectList .single {position: absolute;left: 6%;right: 6%;top: 35%;padding: 0 20px;background-color: #fff;padding-bottom: 33px;padding-top: 10px;}
.selectList ul {width: 100%;height: auto;overflow: auto;}
.selectList ul li {height: 50px;line-height: 50px;border-bottom: 1px solid #e9e9e9;padding: 0 10px;}
.selectList ul li span.ri {height: 50px;line-height: 50px;font-size: 16px;}
.wkplan_add span{display: inline-block;height:0.9rem;padding-left: 0.52rem;background: url(<?php echo OSSURL;?>public/mobile/img/new_add.png) no-repeat;background-size: 0.31rem 0.31rem;background-position:left center;	font-size: 0.28rem;	color:#ff9f22;}
#start,#end{width:2rem;height:0.5rem;border: none;outline: none;background: url(<?php echo OSSURL;?>public/mobile/img/down_arrow.png) no-repeat;background-size: 0.16rem 0.08rem;background-position: 1.65rem center;		background-color: #f0f0f2;margin-left: 0.1rem;border-radius: 0.25rem 0.25rem 0.25rem 0.25rem;padding-left: 0.1rem;color:#666;box-sizing: border-box;line-height: 0.5rem;font-size: 0.28rem;}
.wkset_public_default{background: url(<?php echo OSSURL;?>public/mobile/img/check_box.png) no-repeat;background-size: 0.28rem 0.28rem;background-position: 0.4rem center;}
.wkset_public_active{background: url(<?php echo OSSURL;?>public/mobile/img/check_box_active.png) no-repeat;background-size: 0.28rem 0.28rem;background-position: 0.4rem center;}
.wkplan_add_pic{display: inline-block;padding-left:0.6rem;height:0.4rem;font-size: 0.3rem;background: url(<?php echo OSSURL;?>public/mobile/img/new_add_pic.png) no-repeat;background-size: 0.42rem 0.42rem;background-position: left center;color:#06c1ae;}
.change_wkplan_pic span{padding-left: 0.45rem;background: url(<?php echo OSSURL;?>public/mobile/img/change_image.png) no-repeat;background-position: left center;background-size: 0.35rem 0.35rem;font-size: 0.30rem;}
.slider_prev{position: absolute;left:0.2rem;top:0.22rem;width: 0.4rem;height:0.36rem;background: url(<?php echo OSSURL;?>public/mobile/img/slider_left_arrow.png) no-repeat;background-size: 0.2rem 0.36rem;background-position: left center;}
.slider_next{position: absolute;right:0.2rem;top:0.22rem;width: 0.4rem;height:0.36rem;background: url(<?php echo OSSURL;?>public/mobile/img/slider_right_arrow.png) no-repeat;background-size: 0.2rem 0.36rem;background-position: right center;}
.wkplan_table_set span{padding-left: 0.4rem;background: url(<?php echo OSSURL;?>public/mobile/img/weekplan_set.png) no-repeat;background-size: 0.3rem 0.3rem;background-position: left center;font-size: 0.3rem;}
.del_item{display: inline-block;width: 0.7rem;height:0.8rem;background: url(<?php echo OSSURL;?>public/mobile/img/wkplan_del.png) no-repeat;background-size: 0.42rem 0.42rem;background-position: right center;}
.add_item_btn span{color:#06c1ae;padding-left: 0.52rem;background: url(<?php echo OSSURL;?>public/mobile/img/new_add_pic.png) no-repeat;display: inline-block;line-height: 0.8rem;background-size: 0.32rem 0.32rem;background-position: left center;font-size: 0.26rem;}
.no_content{height:1.76rem;background:url(<?php echo OSSURL;?>public/mobile/img/new_add_pic.png) no-repeat;background-size: 0.32rem 0.32rem;background-position: center center;}
.wkplan_list li{/*border-left: 0.01rem solid #06c1ae;*/background: url(<?php echo OSSURL;?>public/mobile/img/right_arrow.png) no-repeat;background-size: 0.18rem 0.3rem;background-position: 6rem center;color:#333;
position: relative;padding-left: 0.4rem;}
.wkplan_list li.active:after{content: '';width: 0.6rem;height:0.32rem;background: url(<?php echo OSSURL;?>public/mobile/img/weekplan_now.png) no-repeat;background-size: 100% 100%;background-position: center center;
position: absolute;left:-0.3rem;top:50%;margin-top: -0.2rem;z-index: 5;text-align: center;}
.wk_del{height: 0.42rem;width: 0.42rem;position: absolute;background:url(<?php echo OSSURL;?>public/mobile/img/wkplan_del.png) no-repeat;background-size: 100% 100%;background-position: center center;top:0;right:0.18rem;}
.wd{background-color: #ff635b; border: 1px solid #ff635b; color: #fff; border-radius: 3px;font-size: 12px; height: 16px;line-height: 14px;padding: 1px 2px;margin: 0 1px;}
.bjz{background-color: #ECA164; border: 1px solid #ECA164; color: #fff; border-radius: 3px;font-size: 12px; height: 16px;line-height: 14px;padding: 1px 2px;margin: 0 1px;}
</style>
<?php  include $this->template('port');?>
<title><?php  echo $school['title'];?></title>
</head>
<body>
<div class="header mainColor">
	<div class="l" id="titlebar">
		<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="<?php  echo $this->createMobileUrl('myschool', array('schoolid' => $schoolid), true)?>"></a>
	</div>
	<div class="m">
		<a id="showbjlist">
			<span style="font-size: 18px"><?php  echo $bjidname['sname'];?></span>
			<i></i>
		</a>
	</div>
</div>
<div class="All">  
	<div style="height:50px;"></div>
	<div class="wkplan_head">
		<img src="<?php echo OSSURL;?>public/mobile/img/weekplan_banner.png?v=10271027" />
		<div class="wkplan_class text_center">
			<p><?php  echo $bjidname['sname'];?></p>
			<span>周计划</span>
		</div>
	</div>
	<div class="wkplan_list_wrap">
		<ul class="wkplan_list">
		<?php  if(is_array($weekplanlist)) { foreach($weekplanlist as $row) { ?>
			<?php  if($row['start']<TIMESTAMP && $row['end']>TIMESTAMP) { ?>
			<li class ="active">
				<?php  } else { ?>
			<li>
			<?php  } ?>
				<a href="<?php  echo $this->createMobileUrl('tzjhadd', array('schoolid' => $schoolid,'id' => $row['planuid'],'bj_id' => $row['bj_id'],'op' => $row['type']), true)?>">
				(<?php  echo date('Y年', $row['start'])?>) <?php  echo date('m月d日', $row['start'])?>-<?php  echo date('m月d日', $row['end'])?>
				<?php  if($row['is_on'] ==2) { ?>
					<span class="wd" style="color:#fff;">显示中</span>
					<?php  } ?>
				<?php  if($row['is_on'] ==1) { ?>
					<span class="bjz" style="color:#fff;">编辑中</span>
					<?php  } ?>
				</a>
			</li>                              
		<?php  } } ?>
		</ul>
	</div>
	<div class="wk_style">
		<div class="wk_style_inner">
			<div class="wk_box">
				<div class="wk_box_title text_center">选择类型<span class="wk_del"></span></div>
				<div class="wk_box_content text_center">
					<a href="<?php  echo $this->createMobileUrl('tzjhadd', array('schoolid' => $schoolid,'op' => 'img','bj_id' => $bj_id), true)?>" class="wk_style_kind">
						<img src="<?php echo OSSURL;?>public/mobile/img/weekplan_photo.png?v=1027" />
					</a>
					<div class="wk_blank50"></div>
					<a href="<?php  echo $this->createMobileUrl('tzjhadd', array('schoolid' => $schoolid,'op' => 'word','bj_id' => $bj_id), true)?>" class="wk_style_kind">
						<img src="<?php echo OSSURL;?>public/mobile/img/weekplan_write.png?v=1027" />
					</a>
				</div>

			</div>
		</div>
	</div>
	<div class="wk_blank90"></div>
	<div class="wkplan_add text_center qx_00902">
		<span>新增周计划</span>
	</div>
	<div class="selectList" id="selectList" style="z-index:100000;display:none;">
		<div class="single" style="border-radius: 10px;">
			<ul>
				<span style="color:#444;">切换班级</span>
			<?php  if(is_array($bjlist)) { foreach($bjlist as $row) { ?>
				<li onclick="isSelect(<?php  echo $row['sid'];?>);"><span class="ri"><?php  echo $row['sname'];?></span></li>
			<?php  } } ?>
				<?php  if(is_showgkk()) { ?>
				<li onclick="isSelect(-1);"><span class="ri">教师周计划</span></li>
				<?php  } ?>
			</ul>
		</div>
	</div>
	<div class="clear"></div>
</div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<script type="text/javascript">
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").css("display","none");
	}
}, 100);
 
 $(function () {
 	<?php  if($bj_id != -1) { ?>

		<?php  if(!(IsHasQx($tid_global,2000902,2,$schoolid))) { ?>
			$(".qx_00902").hide();
		<?php  } ?>
	<?php  } else if($bj_id == -1) { ?>
		<?php  if(!(IsHasQx($tid_global,2000912,2,$schoolid))) { ?>
		$(".qx_00902").hide();
		<?php  } ?>

	<?php  } ?>
 });
	<?php  if(!(!(IsHasQx($tid_global,2000901,2,$schoolid)) && IsHasQx($tid_global,2000911,2,$schoolid))) { ?>
		$("#showbjlist").on('click', function () {
            $('#selectList').show();
		});
	<?php  } ?>
        $(".wkplan_add").on("click", function () {
            $(".wk_style").show();

        })
        $(".wk_del").on("click", function () {
            $(".wk_style").hide();
        })
	function isSelect(bjid){
		jTips("数据加载中！···");
		location.href = "<?php  echo $this->createMobileUrl('tzjhlist', array('schoolid' => $schoolid), true)?>"+ '&bj_id=' + bjid;
	}		
</script>
