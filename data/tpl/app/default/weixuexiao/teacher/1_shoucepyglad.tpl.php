<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
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
	<div class="add_remark">
		<textarea id='comment_text' placeholder="请输入要评价的评语！"><?php  if($_GPC['comment_text']) { ?><?php  echo $_GPC['comment_text'];?><?php  } ?></textarea>
		<div class="add_remark_buttom" record_uid ="<?php  if($_GPC['record_uid']) { ?><?php  echo $_GPC['record_uid'];?><?php  } ?>">提交</div>
	</div>
	<div class='deal_comment'></div>
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

	$(function () {
		$(".add_remark_buttom").on("click", function () {
			var comment_text = $.trim($("#comment_text").val());
			// 1. 这里先做校验文本框不能为空
			if (comment_text == "") {
				jTips("内容不能为空！");
				return;
			}

			// 2.敏感词检查
			var sensitive_words = "非法|不合法|三聚氰胺|色情|法轮功|涉黄|吸毒|邪教|台独|藏独|伊斯兰教|鸡巴|妓女|枪毙|强暴|艾滋病|性交|3P|恐怖分子|自慰|约炮|肛交|毒品|";
			var filter = sensitive_words.split('|');
			for (var i = 0; i < filter.length; i++) {
				var filter_word = filter[i].trim();

				if (filter_word == "")
					continue;

				if (comment_text.indexOf(filter_word) > -1) {
					jTips("请遵守国家法律法规，请勿发布暴力、谣言、色情等言论。内容含有非法词语：" + filter_word);
					return;
				}
			}

			comment_text = iphone_emoji_filter(comment_text);

			var record_uid = $(this).attr("record_uid");

			$.ajax({
				url: "<?php  echo $this->createMobileUrl('shoucepyglad', array('schoolid' => $schoolid,'op' => 'add'), true)?>",
				data: { CommentText: comment_text, RecordUid: record_uid , Tid: "<?php  echo $it['tid'];?>"},
				type: "post",
				dataType: "json",
				success: function (data) {
					jTips(data.info, function () {
						if (data.status == 1) {
							location.href = "<?php  echo $this->createMobileUrl('shoucepygl', array('schoolid' => $schoolid), true)?>";
						}
					});
				}
			});
		});
	})
</script>
