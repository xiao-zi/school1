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
.header .m a i {float: left;margin: 23px 0 0 5px;width: 0;height: 0;border-width: 6px 6px 0;border-style: solid;border-color: white transparent transparent;position: absolute;}
.selectList {position: fixed;left: 0;right: 0;top: 0;bottom: 0;-webkit-box-sizing: border-box;box-sizing: border-box;background-color: rgba(0,0,0,.53);text-align: center;z-index: 30;font-size: 20px;    color: #fe6700;}
.selectList .single {position: absolute;left: 6%;right: 6%;top: 35%;padding: 0 20px;background-color: #fff;padding-bottom: 33px;padding-top: 10px;}
.selectList ul {width: 100%;height: auto;overflow: auto;}
.selectList ul li {height: 50px;line-height: 50px;border-bottom: 1px solid #e9e9e9;padding: 0 10px;}
.selectList ul li span.ri {height: 50px;line-height: 50px;font-size: 16px;}
body {background-color: #E7FAFF;}
#wd{background-color: #ff635b; border: 1px solid #ff635b; color: #fff; border-radius: 3px;font-size: 12px; height: 16px;line-height: 14px;padding: 1px 2px;margin: 0 1px;}
#del{background-color: #D81818; border: 1px solid #D81818; color: #fff; border-radius: 5px;font-size: 12px; height: 16px;line-height: 14px;padding: 1px 2px;margin: 0 1px;}
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
.slide_left_menu_ul li {height: 50px;line-height: 50px;/*border-bottom: 1px solid #ccc;*/font-size: 16px;width: 100%;box-sizing: border-box;padding: 0 10px 0 50px;overflow: hidden;position: relative;}
.manual_bottom {height: 45px;line-height: 45px;background: #FFF;position: relative;width: 100%;z-index: 10;border-top: solid 1px #d9d9d9;border-bottom: solid 1px #d9d9d9;border-left: solid 1px #d9d9d9;border-right: solid 1px #d9d9d9;}
</style>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<title><?php  echo $school['title'];?></title>
<?php  include $this->template('port');?>
</head>
<body>
<div class="header mainColor">
	<div class="l" id="titlebar">
		<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a>
	</div>
	<div class="m"><a><span style="font-size: 18px"><?php  echo $nowbj['sname'];?></span></a></div>
	<div class="r">
        <a href="javascript:;" class="choice_baby">
            <img style="height: 30px;margin-top:10px" src="<?php echo OSSURL;?>public/mobile/img/selectMean.png" class="img-responsive">
        </a>
	</div>	
</div>
<div class="top_height_blank"></div>
<div class=" manual_list">
<div class="manual_student_list_search">
	<input type="text" value="" placeholder="请输入<?php  echo $school['shoucename'];?>关键字" class="search_text">
	<div class="search_btn"></div>
</div>
<div class="blank"></div>
<div class="manual_bottom qx_00802-3">
    <div class="float_left mb_cell mb_l qx_00802">创建在校表现</div>
    <div class="float_left mb_cell mb_r qx_00803">评语库管理</div>
</div>
<div class="blank"></div>
    <ul class="manual_list_ul">
	<?php  if(is_array($list)) { foreach($list as $row) { ?>
		<li style="border-radius: 3%;">
			<a class="li_text" href="<?php  echo $this->createMobileUrl('shoucepl', array('schoolid' => $schoolid,'scid' => $row['id'],'setid' => $row['setid'],'bj_id' => $row['bj_id']), true)?>">
				<div class="li_img">
					<img src="<?php  echo tomedia($row['icon'])?>" style="border-radius:5%;">
				</div>
				<div class="til1"><?php  echo $row['title'];?></div>
				<div class="til1"><?php  echo $row['bjname'];?>&nbsp;<?php  echo $row['xqname'];?></div>
				<div class="til2 til_time"><?php  echo date('Y.m.d',$row['starttime'])?> - <?php  echo date('Y.m.d',$row['endtime'])?></div>
				<div class="small_blank"><?php  echo $row['kcnmae'];?></div>
				<div class="til3">
					<span class='f_red' id="wd"><?php  if($row['sendtype'] ==1) { ?>未发送<?php  } ?><?php  if($row['sendtype'] ==2) { ?>部分发送<?php  } ?><?php  if($row['sendtype'] ==3) { ?>全部已发<?php  } ?></span>
				</div>
			</a>
			<a>
				<div class="til3 " style="position:absolute; right:0px; bottom:15px; line-height:22px; width:80px; text-align:center; z-index:2; color:#888;">
					<?php  if($row['tid'] ==$it['tid'] || $njzr || $teacher['status'] ==2) { ?><span class="delete_btn" id="del" contactid="<?php  echo $row['id'];?>" msg_type ="contact_record">删除</span><?php  } ?>
				</div>
			</a>
			<div class="clear1"></div>
		</li>
	<?php  } } ?>	
    </ul>
</div>
<div class="clear"></div>
<div class="slide_left_menu_bg">
	<div class="slide_left_menu">
		<div class="slide_left_menu_til">班级列表</div>
		<ul class="slide_left_menu_ul">
		<?php  if(is_njzr($teachers['id'])) { ?>
			<?php  if($bjlists) { ?>
				<?php  if(is_array($bjlists)) { foreach($bjlists as $row) { ?>
					<?php  if(!in_array($row['bj_id'], $bjlists)) { ?>
					<?php  $bjlists[] = $row['bj_id'];?>
						<li onclick="isSelect(<?php  echo $row['bj_id'];?>);" <?php  if($bj_id == $row['bj_id']) { ?>class="act"<?php  } ?>><div><?php  echo $row['bjname'];?></div></li>
					<?php  } ?>
				<?php  } } ?>	
			<?php  } ?>		
				<?php  if(is_array($mynjlist)) { foreach($mynjlist as $row) { ?>
					<?php  if($bjlists) { ?>
						<?php  if(is_array($row['bjlist'])) { foreach($row['bjlist'] as $item) { ?>
							<?php  if(!in_array($item['sid'], $bjlists)) { ?>
								<li onclick="isSelect(<?php  echo $item['sid'];?>);" <?php  if($bj_id == $item['sid']) { ?>class="act"<?php  } ?>><div><?php  echo $item['sname'];?></div></li>
							<?php  } ?>
						<?php  } } ?>
					<?php  } else { ?>
						<?php  if(is_array($row['bjlist'])) { foreach($row['bjlist'] as $item) { ?>
							<li onclick="isSelect(<?php  echo $item['sid'];?>);" <?php  if($bj_id == $item['sid']) { ?>class="act"<?php  } ?>><div><?php  echo $item['sname'];?></div></li>
						<?php  } } ?>				
					<?php  } ?>
				<?php  } } ?>			
		<?php  } else { ?>
			<?php  if($teachers['status'] == 2) { ?>
				<?php  if(is_array($bjlist)) { foreach($bjlist as $row) { ?>
					<li onclick="isSelect(<?php  echo $row['sid'];?>);" <?php  if($bj_id == $row['sid']) { ?>class="act"<?php  } ?>><div><?php  echo $row['sname'];?></div></li>
				<?php  } } ?>
			<?php  } else { ?>
				<?php  if(is_array($bjlists)) { foreach($bjlists as $row) { ?>
					<?php  if(!in_array($row['bj_id'], $bjlists)) { ?>
					<?php  $bjlists[] = $row['bj_id'];?>
						<li onclick="isSelect(<?php  echo $row['bj_id'];?>);" <?php  if($bj_id == $row['bj_id']) { ?>class="act"<?php  } ?>><div><?php  echo $row['bjname'];?></div></li>
					<?php  } ?>
				<?php  } } ?>					
			<?php  } ?>
		<?php  } ?>
		</ul>
	</div>
</div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<script>
	setTimeout(function() {
		if(window.__wxjs_environment === 'miniprogram'){
			$("#titlebar").hide();
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
	var ee = 2 ;
		<?php  if(!(IsHasQx($tid_global,2000802,2,$schoolid))) { ?>
			$(".qx_00802").hide();
			ee--;
		<?php  } ?>
		<?php  if(!(IsHasQx($tid_global,2000803,2,$schoolid))) { ?>
			$(".qx_00803").hide();
			ee--;
		<?php  } ?>
		if(ee == 0){
				$(".qx_00802-3").hide();
		}
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
	});
	function isSelect(bjid){
		jTips("数据加载中！···");
		location.href = "<?php  echo $this->createMobileUrl('shoucelist', array('schoolid' => $schoolid), true)?>"+ '&bj_id=' + bjid;
	} 
	$("#showbjlist").on('click', function () {
		$('#selectList').show();
	});
	$(".mb_l").on("click", function () {
		window.location.href = "<?php  echo $this->createMobileUrl('shouceadd', array('schoolid' => $schoolid), true)?>";
	});

	$(".mb_r").on("click", function () {
		window.location.href = "<?php  echo $this->createMobileUrl('shoucepygl', array('schoolid' => $schoolid), true)?>";
	});

	$(".search_text").on("input propertychange", function () {
		var search_text = $.trim($(this).val());
		if (search_text == '') {
			$(".manual_list_ul li").show();
		} else {
			$(".manual_list_ul li").each(function () {
				if ($(this).find(".til1").text().indexOf(search_text) != -1) {
					$(this).show();
				} else {
					$(this).hide();
				}
			})
		}
	});	
	// 点击删除日志图标
	$(".manual_list_ul").on("click", ".delete_btn", function (event) {
		event.stopPropagation();
		event.preventDefault();
		var $this = $(this);
		var msgType = $this.attr("msg_type");
		if (msgType == "contact_record") {
			jConfirm("确认要删除吗？删除后所有资料将丢失", "删除确定对话框", function (isConfirm) {
				if (isConfirm) {
					$.ajax({
						url: "<?php  echo $this->createMobileUrl('shoucelist', array('schoolid' => $schoolid,'op' => 'del'), true)?>",
						type: "post",
						dataType: "json",
						data: {
							"id": $this.attr("contactid"),
							"tid": "<?php  echo $it['tid'];?>"
						},
						success: function (data) {
							jTips(data.info, function () {
								if (data.status == 1) {
									//  clear_page_session("parent_diary_baby");
									//location.href = "/1046/Manual";
									$this.closest('li').remove();
								}
							});
						}
					});
				}
			});
		}
	})

</script>
<?php  include $this->template('newfooter');?>