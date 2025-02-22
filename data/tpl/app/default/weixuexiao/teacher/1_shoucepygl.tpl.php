<?php defined('IN_IA') or exit('Access Denied');?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="true" />
<?php  include $this->template('shoucecss');?>
<style>
body {background-color: #E7FAFF;}
.ir_cell_text {flex: 1;order: 1;line-height: 20px;font-size: 14px;padding-right: 15px;}
.ir_cell_img {order: 2;width: 25px;height: 10px;margin-right: 0px;background: url(<?php echo OSSURL;?>public/mobile/img/manual_to_icon_d.png) no-repeat;background-size: 20px;background-position: 5px 0px;position: absolute;right: 5px;top: 15px;}
.ir_cell_class {display: flex;}
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); }
.header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } 
.header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } 
.header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } 
.mainColor {background:<?php  echo $school['headcolor'];?> !important;}
.header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
</style>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<?php  include $this->template('port');?>
<title><?php  echo $school['title'];?></title>
</head>
<body>
<div id="titlebar" class="header mainColor">
	<div class="l">
		<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a>
	</div>
	<div class="m">
		<a><span style="font-size: 18px">管理评语库</span></a>
	</div>
</div>
<div class="All">
<div id="titlebars" class="top_height_blank"></div>
<div class="insert_remark">
    <div class="manual_student_list_search" style="margin-bottom: 10px;">
        <input type="text" value="" placeholder="请输入评语关键字" class="search_text" />
        <div class="search_btn"></div>
    </div>
    <div class='comment_group'>
		<?php  if(is_array($list)) { foreach($list as $row) { ?>
            <div class="ir_cell">
                <div class="ir_cell_class">
                    <div class='ir_cell_text'>
                        <?php  echo $row['title'];?>                   
                    </div>
                    <div class='ir_cell_img'></div>
                </div>
                <div class="ir_cell_img_popup">
                    <div class='comment_edit' record_uid="<?php  echo $row['id'];?>">编辑</div>
                    <div class='comment_del' record_uid="<?php  echo $row['id'];?>">删除</div>
                </div>
            </div>
		<?php  } } ?>	
    </div>
</div>
<div class="h_50px"></div>

<div class="manual_bottom">
    <div class="float_left mb_cell mb_l">添加评语</div>
    <div class="float_left mb_cell mb_r">返回列表</div>
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
		document.title="管理评语库"; 
	}
}, 100);
 
	$("#add_comment_btn").on('click', function () {
		window.location.href = "/1046/Manual/AddCommentLib";
	});

	$(".ir_cell_img").click(function () {
		var disp = $(this).closest(".ir_cell").find(".ir_cell_img_popup").css("display");
		$(".ir_cell_img_popup").css("display","none");
		if (disp == "none") {
			$(this).closest(".ir_cell").find(".ir_cell_img_popup").css("display", "block");
		} else {
			$(this).closest(".ir_cell").find(".ir_cell_img_popup").css("display", "none");
		}
	});

	//////修改跳转
	$(".comment_group").on('click', '.comment_edit', function () {
		var record_uid = $(this).attr('record_uid');
		var comment_text = $.trim($(this).parent().parent().find(".ir_cell_text").text());
		var url = "<?php  echo $this->createMobileUrl('shoucepyglad', array('schoolid' => $schoolid), true)?>";
		window.location.href = url + "&record_uid=" + record_uid + "&comment_text=" + comment_text;
	});

	$(".mb_l").on('click', function () {
		var url = "<?php  echo $this->createMobileUrl('shoucepyglad', array('schoolid' => $schoolid), true)?>";
		window.location.href = url;
	});

	$(".mb_r").on('click', function () {
		var url = "<?php  echo $this->createMobileUrl('shoucelist', array('schoolid' => $schoolid), true)?>";
		window.location.href = url;
	});

	/////搜索功能
	$(".search_text").on('input propertychange', function () {
		var search_text = $.trim($(".search_text").val());
		if ($.trim(search_text) == '') {
			$(".comment_group .ir_cell").show();
		} else {
			$(".comment_group .ir_cell").each(function () {
				if ($.trim($(this).find('.ir_cell_text').text()).indexOf(search_text) != -1) {
					$(this).show();
				} else {
					$(this).hide();
				}
			});
		}
	});

	/////删除评语
	$(".comment_group").on('click', '.comment_del', function () {
		var id = $(this).attr('record_uid');
		var obj = this;
		$(this).closest('.ir_cell_img_popup').hide();
		jConfirm("确认删除这条评语？", "提示", function (r) {
			if (r) {
				$.ajax({
					url: "<?php  echo $this->createMobileUrl('shoucepygl', array('schoolid' => $schoolid,'op' => 'del'), true)?>",
					data: { sRecordUid: id,tid: "<?php  echo $it['tid'];?>" },
					type: "post",
					success: function (data) { }
				});
				$(obj).parents('.ir_cell').hide();
			} else {
				return false;
			}
		})
	});

	$(function () {
		$('body').on('click', function (e) {
			if ($(e.target).closest(".ir_cell_img").length == 0) {
				$(".ir_cell_img_popup").hide();
			}
		})
	})

</script>
