<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="format-detection" content="telephone=no">
<title><?php  echo $school['title'];?></title>
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/idangerous.swiper_new.css?v=1717">
<?php  echo register_jssdks();?>
<link href="<?php echo OSSURL;?>public/mobile/css/wx_sdk.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.10.1.min.js?v=4.9"></script>
</head>
<body>
<?php  include $this->template('bjqcss');?>
<header class="header">
    <div class="headerContent"><?php  if($school['bjqstyle'] =='new') { ?><?php  echo $students['s_name'];?><?php  echo $language['sbjq_title'];?><?php  } else { ?>校园动态<?php  } ?></div>
    <?php  if($school['bjqstyle'] =='new') { ?>
    <div class="hederRightBox">
        <a class="choice_baby">
            <img src="<?php echo OSSURL;?>public/mobile/img/selectMean.png" class="img-responsive">
        </a>
    </div>
	<?php  } ?>
</header>
<?php  if($school['bjqstyle'] =='new') { ?>
<div class="slide_left_menu_bg">
    <div class="slide_left_menu">
        <div class="slide_left_menu_til"><?php  echo $language['sbjq_bdlb'];?></div>
        <ul class="slide_left_menu_ul">
		<?php  if(is_array($user)) { foreach($user as $row) { ?>
			<li <?php  if($it['id'] == $row['id']) { ?>class="act"<?php  } ?> userid="<?php  echo $row['id'];?>" schoolid="<?php  echo $row['schoolid'];?>">
				<div><?php  echo $row['bjname'];?>-<?php  echo $row['s_name'];?></div>
			</li>
		<?php  } } ?>
        </ul>
    </div>
</div>
<?php  } ?>
<div id="container" class="scroller" >
<div style="top:100px;height:100px; line-height:160px;text-align:center; width:100%;">
	<span id="gif"><img style="width:25px;" src="<?php echo OSSURL;?>public/mobile/img/gh_xh_wating.gif"/>&nbsp;努力加载中...</span>
</div> 
<div class="top_head_box3 index_top ">
    <div class="index_img">
        <a><img src="<?php  if($students['icon']) { ?><?php  echo tomedia($students['icon'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?>" class="studentImgError"></a>
    </div>
    <!--个人信息的积分和姓名和等级-->
    <div class="index_username1">
	    <?php  if($school['Is_point'] == 1) { ?>
		<span class="jifenImg"></span>
		<span class="jifen">积分:<?php  echo $students['points'];?></span>
		<?php  } ?>
        <span class="baobaoName"><?php  echo $students['s_name'];?></span>
         <?php  if($school['Is_point'] == 1) { ?>
         <!--调整样式用，勿删-->
        <span class="baobaoName"></span>
        <?php  } ?>
	</div>

</div>
<?php  if($school['bjqstyle'] =='new') { ?>
<?php  if($bjset['is_bjzx'] ==1) { ?>
<div class="myCrowns" style="padding-bottom: 0px;">
	<p><?php  echo $language['sbjq_bjstar'];?></p>
	<div class="_myCrowns">
		<div class="crowns">
			<div class="mydiv">
				<img id="icon1" src="<?php  if($star['icon1']) { ?><?php  echo tomedia($star['icon1'])?><?php  } else { ?><?php  if($bzj) { ?><?php echo OSSURL;?>public/mobile/img/insertImage.png<?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?><?php  } ?>">
			</div>
			<span class="span1">1</span>
			<div class="myname" style="position: relative">
				<span id="name1" class="span2"><?php  echo $star['name1'];?></span>
			</div>
			<div class="myname" style="position: relative;background: none;padding-top: 3px">
				<span id="name1" class="span2" style="color:black;margin-top: 3px"><?php  echo $starname['star_name1'];?></span>
			</div>
		</div>
		<div class="crowns2">
			<div class="mydiv">
				<img id="icon2" src="<?php  if($star['icon2']) { ?><?php  echo tomedia($star['icon2'])?><?php  } else { ?><?php  if($bzj) { ?><?php echo OSSURL;?>public/mobile/img/insertImage.png<?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?><?php  } ?>">
			</div>
			<span class="span1">2</span>
			<div class="myname2" style="position: relative">
				<span id="name2" class="span2"><?php  echo $star['name2'];?></span>
			</div>
			<div class="myname" style="position: relative;background: none;padding-top: 3px">
				<span id="name1" class="span2" style="color:black;margin-top: 3px"><?php  echo $starname['star_name2'];?></span>
			</div>
		</div>
		<div class="crowns3">
			<div class="mydiv">
				<img id="icon3" src="<?php  if($star['icon3']) { ?><?php  echo tomedia($star['icon3'])?><?php  } else { ?><?php  if($bzj) { ?><?php echo OSSURL;?>public/mobile/img/insertImage.png<?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?><?php  } ?>">
			</div>
			<span class="span1">3</span>
			<div class="myname3" style="position: relative">
				<span id="name3" class="span2"><?php  echo $star['name3'];?></span>
			</div>
			<div class="myname" style="position: relative;background: none;padding-top: 3px">
				<span id="name1" class="span2" style="color:black;margin-top: 3px"><?php  echo $starname['star_name3'];?></span>
			</div>
		</div>
		<div class="crowns4">
			<div class="mydiv">
				<img id="icon4" src="<?php  if($star['icon4']) { ?><?php  echo tomedia($star['icon4'])?><?php  } else { ?><?php  if($bzj) { ?><?php echo OSSURL;?>public/mobile/img/insertImage.png<?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?><?php  } ?>">
			</div>
			<span class="span1">4</span>
			<div class="myname4" style="position: relative">
				<span id="name4" class="span2"><?php  echo $star['name4'];?></span>
			</div>
			<div class="myname" style="position: relative;background: none;padding-top: 3px">
				<span id="name1" class="span2" style="color:black;margin-top: 3px"><?php  echo $starname['star_name4'];?></span>
			</div>
		</div>		
	</div>	
</div>
<?php  } else { ?>
<div class="top_height_blank50"></div>
<?php  } ?>
<?php  } ?>
<!--
<a class="new_info_tips3">
	<div class="img">
		<img src="<?php  if($students['icon']) { ?><?php  echo tomedia($students['icon'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?>">
	</div>
	<div class="text">2个未读消息</div>
	<div class="arrow_right_icon"></div>
</a>-->
<!--积分计算的前四名学生-->
<!-- <div class="top_height_blank50"></div> -->
<div class="empty_content_data">
    <img src="<?php echo OSSURL;?>public/mobile/img/new_empty_icon3.png" />
    <div class="text">别让这里空着哟</div>
</div>
<?php  if($list) { ?>
<ul class="new_diary_list3">
<?php  if(is_array($list)) { foreach($list as $item) { ?>
	<li time="<?php  echo date('Y-m-d H:i:s', $item['createtime'])?>">
        <div class="user_img">
            <img src="<?php  echo tomedia($item['avatar'])?>" class="studentImgError">
        </div>
        <div class="user_content" style="padding-bottom:10px;">
            <div class="user_info" style="color: #2B779C;font-weight:600;"><?php  echo $item['shername'];?>
                <?php  if($item['msgtype'] ==1) { ?><span class="diary_tag_other">图文</span>&nbsp;&nbsp;&nbsp;<?php  } ?>
				<?php  if($item['msgtype'] ==2) { ?><span class="diary_tag_life">语音</span>&nbsp;&nbsp;&nbsp;<?php  } ?>
				<?php  if($item['msgtype'] ==3) { ?><span class="diary_tag_notify">视频</span>&nbsp;&nbsp;&nbsp;<?php  } ?>
				<?php  if($item['msgtype'] ==4) { ?><span class="diary_tag_activity">分享</span>&nbsp;&nbsp;&nbsp;<?php  } ?>
				<?php  if($item['msgtype'] ==5) { ?><span class="diary_tag_work">多媒体</span>&nbsp;&nbsp;&nbsp;<?php  } ?>
				<?php  if($item['isopen'] == 1) { ?><span style="color: #9C2B44;font-weight:400;float: right;" class="shenhe_btn" diaryid="<?php  echo $item['id'];?>">未审核</span><?php  } ?>
            </div>
            <div class="user_text">
                <div class="inside_user_text"><?php  echo $item['content'];?><?php  echo $item['linkdesc'];?><?php  if($item['link']) { ?><a href="<?php  echo $item['link'];?>"><?php  echo $item['linkdesc'];?></a><?php  } ?></div>
            </div>			
            <div class="show_all_btn"></div>
			<ul class="user_img_list3">
				<?php  if(!empty($item['picurl'])) { ?>
					<?php  if(is_array($item['picurl'])) { foreach($item['picurl'] as $row) { ?>	
						<li style="height: 275.306px;">
							<img img_path="<?php  echo tomedia($row['picurl'])?>" src="<?php  echo tomedia($row['picurl'])?>">
						</li>
					<?php  } } ?>
				<?php  } ?>
				<?php  if(!empty($item['audio'])) { ?>
				<li class="no_image_tag3" style="height: 275.306px;">
					<div class="li_radio3" style="background-image:url(<?php  echo tomedia($item['avatar'])?>);">
						<div class="icon"></div>
						<audio class="sound1" width="320" height="240" src="<?php  echo tomedia($item['audio'])?>"  diary_id="<?php  echo $item['id'];?>" style="display: none; opacity: 0;">
							<source src="<?php  echo tomedia($item['audio'])?>" type="video/mp4" id="<?php  echo $item['id'];?>">
							亲，你的手机不支持微信语音播放，这个真没办法！
						</audio>
					</div>
				</li>				
				<?php  } ?>				
				<?php  if(!empty($item['video'])) { ?>
				<li class="no_image_tag3" style="height: 275.306px;">
					<div class="li_video3" video_url="<?php  echo tomedia($item['video'])?>" isreport="N" style="background-image:url(<?php  if($item['videoimg']) { ?><?php  echo tomedia($item['videoimg'])?><?php  } else { ?><?php echo OSSURL;?>public/mobile/img/videoicon.png<?php  } ?>);">
						<div class="icon"></div>
					</div>					
				</li>					
				<?php  } ?>
			</ul>
            <div class="clear1"></div>
            <div class="other_info_box3">
                <span class="time"><?php  echo $item['time'];?>前</span>
				<?php  if($it['uid'] == $item['uid']) { ?><span class="delete_btn" diaryid="<?php  echo $item['id'];?>">删除</span><?php  } ?>
				<?php  if($item['is_private'] =='N') { ?>
				<div class="other_control_icon" div_width="130" diary_id="<?php  echo $item['id'];?>" reply_user="<?php  echo $item['shername'];?>" comment_id="" type="subject_reply">
					<span class="comment_btn" diary_id="<?php  echo $item['id'];?>" reply_user="<?php  echo $item['shername'];?>" comment_id="" type="subject_reply"></span>
				</div>
				<?php  } ?>
				<div class="other_control_icon_praise" div_width="130" diary_id="<?php  echo $item['id'];?>" <?php  if($item['isdianz']) { ?>style="background: url('<?php echo OSSURL;?>public/mobile/img/icon_okpraise.png') 50% 50% / 16px no-repeat;"<?php  } else { ?>style="background: url('<?php echo OSSURL;?>public/mobile/img/icon_nopraise.png') 50% 50% / 16px no-repeat;"<?php  } ?>></div>
            </div>         
            <div class="bottomLine"></div>
			<?php  if(!empty($item['zname'])) { ?>
            <div class="praiseBox">
				<?php  if(is_array($item['zname'])) { foreach($item['zname'] as $row1) { ?>
					<span style="color:#2B779C;" class="praiseContent" user_id="<?php  echo $row1['uid'];?>"><?php  echo $row1['zname'];?></span> 
				<?php  } } ?>
            </div>
			<?php  } else { ?>
            <div class="praiseBox"></div>			
			<?php  } ?>
            <div class="comment_box3" style="display:block;">
				<ul class="comment_list3" style="">
				<li style="padding: 0px 0px 0px 3px;"></li>
				<?php  if(is_array($item['contents'])) { foreach($item['contents'] as $row2) { ?>
					<li diary_id="<?php  echo $item['id'];?>" reply_user="<?php  echo $row2['shername'];?>" comment_id="<?php  echo $row2['id'];?>" <?php  if($row2['uid'] !=$fan['uid']) { ?>is_mine="false"<?php  } else { ?>is_mine="ture"<?php  } ?> type="comment_reply">
						<div class="comment_content">
							<div class="text">
								<span class="user_name"><?php  echo $row2['shername'];?></span><?php  if($row2['uid'] !=$item['uid']) { ?>回复<span class="user_name"><?php  echo $row2['hftoname'];?></span><?php  } ?><span>：</span><?php  echo $row2['content'];?>
							</div>
						</div>
					</li>
				<?php  } } ?>
				</ul>
            </div>
        </div> 
        <div class="reply_box_div"></div>
        <div class="reply_face_div"></div>
    </li>
<?php  } } ?>	
</ul>
<?php  } ?>
</div>
<a href="<?php  echo $this->createMobileUrl('sbjqfabu', array('schoolid' => $schoolid), true)?>" class="F_div" style="z-index: 2;right: 20px; margin-bottom: 90px; display: block"><div class="F_div_text"><?php  echo $language['sbjq_fabu'];?></div></a>
<div class="top_height_blank50"></div>
<?php  include $this->template('port');?>
<div class="bottom_comment_box3 hidden" style="padding: 0 0 0 8px; border: 1px solid #dedee0; box-sizing: border-box; padding-right: 90px; height: 30px; line-height: 30px;">
    <div class="face_icon3 dialog_showFace" style="margin-left: 0; height: 30px; width: 30px; background-size: 20px; position: absolute; right: 58px; top: 0; left: auto;"></div>
    <input id="comment_input" class="comment_input_box3" type="text" placeholder="回复：" diary_id="" comment_id="" comment_type="" reply_user="" style="border-radius: 0; border: none; font-size: 12px; padding: 0; line-height: 30px;">
    <div class="send_comment_btn3" style="line-height: 30px; top: 0; right: -2px;">评论</div>
</div>
<!-- 表情框 -->
<div class="faceBox faceBox_fixed">
    <div class="faceBox_main">
        <ul id="faceImg"></ul>
    </div>
    <div class="number">
        <ul id="faceNum">
            <li class="active">1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
        </ul>
    </div>
</div>
<div class="del_comment_bg">
    <div class="del_comment_btn" comment_id="" diary_id="">
        删除评论
    </div>
</div>
<div class="video_bg">
    <div class="close_video_btn">关闭</div>
</div>
<!-- 举报 -->
<div class="report_bg">
    <div class="report_title">请选择举报原因：</div>
    <ul class="report_ul">
        <li class="act">诈骗</li>
        <li>色情</li>
        <li>政治谣言</li>
        <li>常识性谣言</li>
        <li>诱导分享</li>
        <li>恶意营销</li>
        <li>隐私信息收集</li>
        <li>抄袭</li>
        <li>其他侵权类（冒名、抄袭、诽谤）</li>
        <li>违规</li>
    </ul>
    <div class="blank"></div>
    <div class="report_submit_btn">提交</div>
    <div class="report_cancel_btn">取消</div>
</div>
<script src="<?php echo OSSURL;?>public/mobile/js/faceMap.js?v=5.61" type="text/javascript"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/common.js?v=1717"></script>
<script>var ROOT_URL = "<?php echo OSSURL;?>public/mobile/img";</script>    
<script>
	var face_img_base_url = ROOT_URL;
</script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/idangerous.swiper.min.js?v=1717"></script>
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
<?php  if(empty($_GPC['schoolid'])) { ?>
$(".slide_left_menu_bg").addClass("show_menu_bg");
<?php  } ?>
$(".choice_baby").on("click", function(e) {
	//e.stopPropagation();
	//显示右侧绑定学生列表 （lee 0722）
	$(".slide_left_menu_bg").addClass("show_menu_bg");
});
$(".slide_left_menu_bg").on("click", function() {
	$(this).removeClass("show_menu_bg");
});
$(".slide_left_menu_ul").on("click", "li", function() {
	//右侧绑定的学生li的动作  （lee 0722）
	if (!$(this).hasClass('act')) {
		//如果点击的 li 没有 act,则把有 act 的 li 去掉 act,当前 li 加上 act （lee 0722）
		$(".slide_left_menu_ul .act").removeClass("act");
		$(this).addClass("act");
		//返回带 act 的 li 的 userid 以及 schoolid （lee 0722）
		var userid = $(".act").attr("userid");
		var schoolid = $(".act").attr("schoolid");
		location.href = "<?php  echo $this->createMobileUrl('sbjq')?>" + "&schoolid=" + schoolid + '&userid=' + userid;
	}
});
//???????????????  （lee 0722）
	$(function () {
		var scroll_height = localStorage.getItem("new_info_tips3");
		if (scroll_height == "0") {
			$(".new_info_tips3").hide();
			localStorage.removeItem("new_info_tips3");
		}
	});

	//没有用到？调试用的？ （lee 0722）
	function change_line(obj) {
		$(obj).each(function () {
			console.log($(this));
			//   $(this).html($(this).html().trim().replace(/\n/g, "</br>"));
		});
	}


	function countImgHeight(thumbLi) {
		$(thumbLi).css("height", $(thumbLi).parent().width() * 0.3333);
		//显示 全文 收起按钮
		$('.inside_user_text').each(function () {
			var $this = $(this);
			if ($this.height() > $this.parent().height()) {
				$this.parent().next('.show_all_btn').show().text('全文');
			}
		});
	}
	icon_replace($(".user_text")); // 替换表情
	icon_replace($(".comment_content .text")); // 替换评论表情
	//   change_line(".inside_user_text");

	//无内容时显示默认图
	if ($('.new_diary_list3 li').length == 0) {
		$('.empty_content_data').show();
	}
</script>
<script src="<?php echo OSSURL;?>public/mobile/js/new_iscroll.js?v=1717"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/openDialog_for_newpage_v1.4.js?v=1717"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/scroll_load_news.js?v=1717"></script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/uploaderh5.mod.js?v=1717"></script>
<script>
	common_ajax_callback = false;
	slide({container:"#container",next: function (e) {
		//松手之后执行逻辑,ajax请求数据，数据返回后隐藏加载中提示
		var that = this;
		var lasttime = $('.new_diary_list3').children('li').first().attr('time');
		$.ajax({
			url: "<?php  echo $this->createMobileUrl('sbjq', array('schoolid' => $schoolid, 'bj_id' => $bj_id ))?>",
			type: "post",
			dataType: "html",
			data: {
				lasttime: lasttime
			},
			success: function (data) {
				if ($.trim(data)) {
					that.back.call();
					$('.new_diary_list3').prepend(data);
					icon_replace($(".user_text")); // 替换表情
					icon_replace($(".comment_content .text")); // 替换评论表情
					// img_big(); // 图片放大
					countImgHeight(".user_img_list3 li");
					//   change_line(".inside_user_text");

					$(".inside_user_text span").css({
						lineHeight: 24 + 'px'
					});					
				}else{
					setTimeout(function () {
						that.back.call();
					}, 1000);
				}
			}		
		});		

	}});	

	$(function () {
		$(".inside_user_text span").css({
			lineHeight: 24 + 'px'
		})
		countImgHeight(".user_img_list3 li");

		//add by suxinyong
		localStorage.removeItem("yab_teacher_notread_html");//清除本地存储未读数目列表内容

		//分类赛选
		


		//$('.top_head_box3 .index_img').on('click', function (e) {
		//    e.stopPropagation();
		//    e.preventDefault();
		//})
		$('.search_icon').on('click', function (e) {
			e.stopPropagation();
		});

		//显示 收起内容
		$('.new_diary_list3').on('click', '.show_all_btn', function () {
			var $this = $(this);
			//找到与它上邻的带有.user_text的元素 并 在class 中添加  show_all （lee 0722）
			$this.prev('.user_text').toggleClass('show_all');
			if ($this.text() == '全文') {
				$this.text('收起');
			} else {
				$this.text('全文');
			}
		});

		// 点击删除日志图标
		$(".new_diary_list3").on("click", ".delete_btn", function (event) {
			event.stopPropagation();
			event.preventDefault();
			var $this = $(this);
			jConfirm("确认要删除该日志吗？", "删除确定对话框", function (isConfirm) {
				if (isConfirm) {
					$.ajax({
						url: "<?php  echo $this->createMobileUrl('bjqajax', array('op' => 'delbjq'))?>",
						type: "post",
						dataType: "json",
						data: {
							id: $this.attr("diaryid"),
							schoolid:"<?php  echo $schoolid;?>",
							weid:"<?php  echo $weid;?>",
						},
						success: function (data) {
							jTips(data.msg, function () {
								if (data.result) {
									//clear_page_session("parent_diary_baby");
									$this.closest('li').remove();
								}
							});
						}
					});
				}
			});
		});
		
		// 底部加载更多
		new Scroll_load({
			"limit": "0",
			"pageSize": 10,
			"ajax_switch": true,
			"ul_box": ".new_diary_list3",
			"li_item": ".new_diary_list3 > li",
			"ajax_url": "<?php  echo $this->createMobileUrl('sbjq', array('schoolid' => $schoolid, 'bj_id' => $bj_id ))?>",
			"page_name": "parent_home_index",
			"after_ajax": function () {
				//image_bind_error_event(); // 图片错误处理
				icon_replace($(".user_text")); // 替换表情
				icon_replace($(".comment_content .text")); // 替换评论表情
				// img_big(); // 图片放大
				countImgHeight(".user_img_list3 li");
				//   change_line(".inside_user_text");

				$(".inside_user_text span").css({
					lineHeight: 24 + 'px'
				});

			}
		}).load_init();


		//播放视频
		$(".new_diary_list3").on("click", ".li_video3", function (e) {
			e.stopPropagation();
			e.preventDefault();
			var video_url = $(this).attr("video_url");
			var isreport = $(this).attr('isreport');
			$(".video_bg").append('<video src="' + video_url + '" controls="controls" webkit-playsinline playsinline>您的浏览器不支持 video 标签。</video>');
			$(".video_bg").show();
			$(".video_bg").children("video").index(0).currentTime = 0.0;
			if (isreport == "Y") {
				$('.report_btn').addClass('has_report_video_btn').text('已举报').off('click');

			} else if (isreport == "N") {
				//$('.report_btn').addClass('report_video_btn').attr('mediauid', $(this).attr('mediauid')).attr('businessid', $(this).attr('businessid')).text('举报').on('click', report_fun);
			}
		});

		$(".close_video_btn").on("click", function (e) {
			e.stopPropagation();
			e.preventDefault();
			$(".video_bg").hide();
			$(".video_bg").children("video")[0].pause();
			$(".video_bg").children("video")[0].currentTime = 0;
			$(".video_bg").children("video").remove();

		});

		//语音播放
        var now_play_video_index = '-1';

        $(".new_diary_list3").on('click', '.li_radio3', function (e) {

            e.stopPropagation();
            e.preventDefault();
            var obj = $(this);
            var jq_obj = obj.children('.sound1');
            var dom_obj = jq_obj[0];
			document.addEventListener("WeixinJSBridgeReady", function () {
				dom_obj.muted = true;
				dom_obj.load();
				dom_obj.play();
				dom_obj.pause();
				dom_obj.muted=false;
			},false);
            if (obj.hasClass("video_stop")) {
                dom_obj.pause();
                dom_obj.currentTime = 0.0;
                obj.removeClass("video_stop");
                now_play_video_index = '-1';
            } else {
                if (now_play_video_index != '-1' && now_play_video_index != obj.index()) {
                    var now_play_li = $(".li_radio3").eq(now_play_video_index);
                    var now_play_obj = now_play_li.children('.sound1')[0];
                    now_play_obj.pause();
                    now_play_obj.currentTime = 0.0;
                    now_play_li.removeClass("video_stop");
                    now_play_video_index = '-1';
                }
                dom_obj.play();
                obj.addClass("video_stop");
                now_play_video_index = obj.index();
                dom_obj.addEventListener('ended', function () {
                    dom_obj.currentTime = 0.0;
                    obj.removeClass("video_stop");
                    now_play_video_index = '-1';
                }, false);
            }
        });

		//预览图片
		$(".new_diary_list3").on("click", ".user_img_list3 li", function (e) {

			if ($(this).attr("data-flag") == "table") {
				location.href = $(this).parents(".user_info").find(".other_info_box3 a").attr("href");
				return false;
			}
			var this_img = $(this).children('img').attr('img_path');
			var this_img_arr = [];
			$(this).parent('.user_img_list3').children('li').each(function () {
				this_img_arr.push($(this).children('img').attr('img_path'));
			})
			wx.previewImage({
				current: this_img, // 当前显示图片的http链接
				urls: this_img_arr // 需要预览的图片http链接列表
			});
		});

		// 点击回复评论
		$(".new_diary_list3").on("click", ".comment_list3 li", function (e) {
			e.stopPropagation();
			e.preventDefault();
			var replyUserInfo = $(this).attr("reply_user");
			var diary_id = $(this).attr("diary_id");
			var comment_id = $(this).attr("comment_id");
			var is_mine = $(this).attr("is_mine");

			if (is_mine == "false") {
				$(".new_bottom_menu3").hide();

				$('.reply_box_div').hide();
				$('.reply_face_div').hide();
				$('.faceBox').hide();
				var this_reply_box = $(this).closest('.user_content').parent().find('.reply_box_div');
				if (this_reply_box.children('.bottom_comment_box3').length == 0) {
					$('#comment_input').val('');
				}
				this_reply_box.append($('.bottom_comment_box3')).show();
				$('.bottom_comment_box3').show();

				$("#comment_input").val("").attr("placeholder", "回复" + replyUserInfo + "：").attr("comment_type", "comment_reply").attr("diary_id", diary_id).attr("comment_id", comment_id).attr("reply_user", replyUserInfo);
				//$(".bottom_comment_box3").show().css({ "position": "relative" });
				$("#comment_input").focus();

				//window.setTimeout(function () {
				//    $('.bottom_comment_box3').css({ "position": "fixed" });
				//}, 400)

			} else {
				$(".del_comment_bg").show();
				$(".del_comment_btn").attr("comment_id", comment_id).attr("diary_id", diary_id);
			}
		});


		//删除自己发表的评论回复
		$(".del_comment_btn").on("click", function (e) {
			e.stopPropagation();
			e.preventDefault();
			var diary_id = $(this).attr("diary_id");
			var comment_id = $(this).attr("comment_id");
			var this_comment_li = $(".comment_list3 li[diary_id=" + diary_id + "][comment_id=" + comment_id + "]");
			var this_comment_li_parent = this_comment_li.closest('.comment_box3');
			$(".del_comment_bg").hide();
			this_comment_li.remove();
			if (this_comment_li_parent.find('.comment_list3 li').length == 0) {
				this_comment_li_parent.find('.like_box_3').addClass('noborder');
				if (this_comment_li_parent.find('.like_box_3:hidden').length > 0) {
					this_comment_li_parent.hide();
				}

			}
			$.ajax({
				url: "<?php  echo $this->createMobileUrl('bjqajax', array('op' => 'delmyhf'))?>",
				type: "post",
				dataType: "json",
				data: {
					id: comment_id,
					schoolid: "<?php  echo $schoolid;?>",
				},
				success: function (data) { }
			});
		});

		$(".del_comment_bg").on("click", function () {
			$(this).hide();
		});

		// 点击回复主题
		$(".new_diary_list3").on("click", ".comment_btn", function (e) {
			e.stopPropagation();
			e.preventDefault();
			var replyUserInfo = $(this).attr("reply_user");
			var diary_id = $(this).attr("diary_id");
			var comment_id = $(this).attr("comment_id");
			$(".new_bottom_menu3").hide();
			//$(".bottom_comment_box3").show().css({ "position": "relative" });
			$(this).closest(".other_control_box").hide();

			$('.reply_box_div').hide();
			$('.reply_face_div').hide();
			$('.faceBox').hide();
			var this_reply_box = $(this).closest('li').find('.reply_box_div');
			if (this_reply_box.children('.bottom_comment_box3').length == 0) {
				$('#comment_input').val('');
			}
			this_reply_box.append($('.bottom_comment_box3')).show();
			$('.bottom_comment_box3').show();
			$(this).closest('.other_control_box').hide();

			$("#comment_input").val("").attr("placeholder", "回复" + replyUserInfo + "：").attr("comment_type", "subject_reply").attr("diary_id", diary_id).attr("comment_id", comment_id).attr("reply_user", replyUserInfo).focus();
		});


		function changePraiseIco($praisBox, $currentObj) {

			<!-- if ($praisBox == null || $praisBox == undefined) { -->
				<!-- console.log("结构异常！"); -->
				<!-- return; -->
			<!-- } -->
			var $icoCss = $currentObj;
			var img_url = $icoCss.css("background");

			if (img_url.toString().indexOf("icon_okpraise") > 0) {
				$icoCss.css("background", "url(<?php echo OSSURL;?>public/mobile/img/icon_nopraise.png) no-repeat center");
				$icoCss.css("background-size", " 16px");

				$praisBox.children("span").each(function (idx, obj) {
					if ($(this).attr("user_id") == "<?php  echo $fan['uid'];?>") {
						$(this).remove();
					}
				});
			}
			if (img_url.toString().indexOf("icon_nopraise") > 0) {
				$icoCss.css("background", "url(<?php echo OSSURL;?>public/mobile/img/icon_okpraise.png) no-repeat center");
				$icoCss.css("background-size", " 16px");

				$praisBox.append('<span class="praiseContent" user_id="<?php  echo $fan['uid'];?>"><?php  echo $students['s_name'];?><?php  echo $shenfen;?></span>');
			}
		}

		//下划线

		if (!$(".comment_list3").children().length > 0) {
			$(".bottomLine").css("display", "block");

		}
		//点击提交保存评论
		var com_winHeight = window.innerHeight || document.documentElement.clientHeight || 0;
		$(".send_comment_btn3").on("click", function (e) {
			e.stopPropagation();
			e.preventDefault();
			var comment_input = $("#comment_input");
			var comment_context = $.trim($("#comment_input").val());

			// 1.校验文本框不能为空
			if (comment_context == '') {
				jTips('请输入内容！');
				return;
			}

			<?php  $word = $this->GetSensitiveWord($weid) ?>
				// 2.敏感词检查
				var sensitive_words = "<?php  echo $word;?>";
			var filter = sensitive_words.split('|');
			for (var i = 0; i < filter.length; i++) {
				var filter_word = filter[i].trim();

				if (filter_word == "")
					continue;

				if (comment_context.indexOf(filter_word) > -1) {
					jTips("请遵守国家法律法规，请勿发布暴力、谣言、色情等言论。内容含有非法词语：" + filter_word);
					return false;
				}
			}

			//comment_context = iphone_emoji_filter(comment_context);
			var face_map_url = ROOT_URL + "/face/";
			var comment_context_change = comment_context.replace(/\[([^\]]+)\]/g, function (a, b) {
				return "<img class='face_icon' src='" + face_map_url + objMap[b] + ".gif'>";
			});
			var reply_user = $("#comment_input").attr("reply_user");
			var diary_id = $("#comment_input").attr("diary_id");
			var common_type = $("#comment_input").attr("comment_type");
			var comment_id = $("#comment_input").attr("comment_id");
			var parent_div = $(".comment_btn[diary_id=" + diary_id + "]").closest(".user_content");
			$('.faceBox').hide();
			$('.reply_box_div').hide();
			var comment_sumit_tag = true;
			if (comment_sumit_tag) {
				comment_sumit_tag = false;
				$.ajax({
					url: "<?php  echo $this->createMobileUrl('bjqajax', array('op' => 'huifu'))?>",
					type: "post",
					dataType: "json",
					data: {
						weid: "<?php  echo $weid;?>",
						schoolid: "<?php  echo $schoolid;?>",
						uid: "<?php  echo $fan['uid'];?>",
						sherid: diary_id,
						content: comment_context,
						plid: comment_id,
						uid: "<?php  echo $fan['uid'];?>",
						userid:"<?php  echo $it['id'];?>",
						hftoname: reply_user,
						shername: "<?php  echo $students['s_name'];?><?php  echo $shenfen;?>",
						openid:"<?php  echo $openid;?>",
					},
					success: function (data) {
						if(data.result){
							if (common_type == "comment_reply") {
								parent_div.find(".comment_list3").show().append('<li diary_id="' + diary_id + '" reply_user="<?php  echo $students['s_name'];?><?php  echo $shenfen;?>" comment_id="' + data.id + '" is_mine="true" type="comment_reply"><div class="comment_content"><div class="text"><span class="user_name"><?php  echo $students['s_name'];?><?php  echo $shenfen;?></span>回复<span class="user_name">' + reply_user + "</span><span>：</span>" + comment_context_change + "</div></div></li>");
							} else {
								parent_div.find(".comment_list3").show().append('<li diary_id="' + diary_id + '" reply_user="<?php  echo $students['s_name'];?><?php  echo $shenfen;?>" comment_id="' + data.id + '" is_mine="true" type="comment_reply"><div class="comment_content"><div class="text"><span class="user_name"><?php  echo $students['s_name'];?><?php  echo $shenfen;?></span><span>：</span>' + comment_context_change + '</div></div></li>');
							}
							parent_div.find(".comment_box3").show();
							parent_div.find('.like_box_3').removeClass('noborder');

							$(".new_bottom_menu3").show();
							$(".bottom_comment_box3").hide();
							comment_sumit_tag = true;
							//var top = 0;
							var new_li_top = parent_div.find(".comment_list3 ").children('li:last-child').offset().top - com_winHeight + 85;
							if (new_li_top > 0) {
								$(window).scrollTop(new_li_top);
							}
						}else{
							jTips(data.msg);
						}	
					},
					error: function () {
						comment_sumit_tag = true;
					}
				});
			}

		});

		$("body").on("click", function (e) {
			if ($(e.target).closest(".comment_btn").length == 0 && $(e.target).closest(".comment_list3").length == 0 && $(e.target).closest(".bottom_comment_box3").length == 0 && $(e.target).closest(".faceBox").length == 0) {
				$(".new_bottom_menu3").show();
				$(".bottom_comment_box3").hide();
				$('.reply_box_div').hide();
			}

			if ($(e.target).closest(".other_control_box").length == 0) {
				$(".other_control_box").hide();
			}

			if ($(e.target).closest('.faceBox ').length == 0 && $(e.target).closest('.face_icon3 ').length == 0) {
				$('.faceBox').hide();
			}
		});

		document.getElementById("comment_input").addEventListener("touchstart", function (e) {
			e.stopPropagation();
			$(".faceBox").css("display", "none");

		})

		$(".new_diary_list3").on("click", ".other_control_icon", function (e) {
			e.stopPropagation();
			e.preventDefault();
			var replyUserInfo = $(this).attr("reply_user");
			var diary_id = $(this).attr("diary_id");
			var comment_id = $(this).attr("comment_id");
			$(".new_bottom_menu3").hide();
			//$(".bottom_comment_box3").show().css({ "position": "relative" });
			//$(this).closest(".other_control_box").hide();
			//$('.reply_box_div').hide();
			//$(this).parents("user_content").next().show();
			//$('.reply_face_div').hide();
			//$('.faceBox').hide();

			$('.reply_box_div').hide();
			$('.reply_face_div').hide();
			$('.faceBox').hide();
			$(this).parents("user_content").next().show();

			var this_reply_box = $(this).closest('li').find('.reply_box_div');
			if (this_reply_box.children('.bottom_comment_box3').length == 0) {
				$('#comment_input').val('');
			}
			this_reply_box.append($('.bottom_comment_box3')).show();
			$('.bottom_comment_box3').show();
			$(this).closest('.other_control_box').hide();

			$("#comment_input").val("").attr("placeholder", "回复" + replyUserInfo + "：").attr("comment_type", "subject_reply").attr("diary_id", diary_id).attr("comment_id", comment_id).attr("reply_user", replyUserInfo).focus();

		});


		// 日志点赞
		$(".new_diary_list3").on("click", ".other_control_icon_praise", function (e) {

			var $this = $(this);

			var $praisBox;

			$(this).parents('.other_info_box3').siblings().each(
				function (idx, obj) {
					if ($(this).attr("class") == "praiseBox") {
						$praisBox = $(this);
						return false;
					}
				});

			$.ajax({
				url: "<?php  echo $this->createMobileUrl('bjqajax', array('op' => 'dianzan'))?>",
				type: "post",
				dataType: "json",
				data: {
					sherid: $this.attr("diary_id"),
					weid: "<?php  echo $weid;?>",
					schoolid: "<?php  echo $schoolid;?>",
					uid: "<?php  echo $_W['member']['uid'];?>",
					userid:"<?php  echo $it['id'];?>",
					zname: "<?php  echo $students['s_name'];?><?php  echo $shenfen;?>"					
				},
				success: function (data) {
					if (data.result) {
						changePraiseIco($praisBox, $this);

					}
					else {
						alert(data.info);
					}
				}
			});
		});

	});

	//举报视频
	function report_fun() {
		$('.report_bg').show();
		$('.video_box').hide();
		$('.video_bg video').hide();
	}

	$(function () {


		$('.report_ul li').on('click', function () {
			if (!$(this).hasClass('act')) {
				$('.report_ul .act').removeClass('act');
				$(this).addClass('act');
			}
		});
		$('.report_cancel_btn').on('click', function () {
			$('.video_box').show();
			$('.report_bg').hide();
			$('.video_bg video').show();
		});
		$('.report_submit_btn').on('click', function () {

			$.post('/1046/Diary/Report', { 'businessid': $('.report_btn').attr("businessid"), 'mediaid': $('.report_btn').attr("mediauid"), 'content': $('.report_ul .act').text() }, function (data) {

				$('.video_box').show();
				$('.report_bg').hide();
				$('.report_btn').addClass('has_report_video_btn').text('已举报').removeClass('report_video_btn').off('click');
				jTips('举报信息已提交，我们会尽快处理您的举报。');
			});
		});

	});
</script>
<?php  include $this->template('footer');?>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>