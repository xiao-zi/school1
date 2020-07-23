<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/activityNotice1.css?v=4.80120" />
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="no" />
<meta name="format-detection" content="telephone=no" />
 <meta name="HandheldFriendly" content="true" />
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/hb.js"></script>
<?php  include $this->template('bjqcss');?>
<style type="text/css">
.add_link_box{width:100%;position: absolute;left:0;top:60px;bottom:0;z-index: 9999;background-color:rgba(0,0,0,0.5);display: none}
.add_link_info_wrap{padding:0 10px;margin:0 auto;display: -webkit-box;-webkit-box-orient:vertical;-webkit-box-pack: center;-webkit-box-align: center;height:100%;}
.my_add_link_inner{width: 100%;height:190px;background-color: #fff;border-radius: 10px;padding: 10px 0;}
.my_add_link_inner h3{text-align: center;color:#666;}
.add_link_wrap{height:35px;line-height: 35px;overflow: hidden;padding: 10px; }
.my_link_title{width:80px;float: left;}
.my_add_link_txt{height:35px;line-height: 35px;box-sizing: border-box;width:70%;outline: none;border:1px solid #dcdcdc;border-radius: 3px;float:left;}
.add_link_btn_wrap{padding: 10px;overflow:hidden;}
.add_link_btn_sure{float: left;width:40%;height: 35px;line-height: 35px;background: #e5457f;font-size: 16px;border-radius: 5px; color: #fff;border:none;padding: 0;margin:0 5%;outline: none;}
#add_link_btn_cancel{background: #30c6e1;}
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); } .header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } .header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } .header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } .mainColor { background: #06c1ae !important; } .header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
.jiantou{background: url(<?php echo OSSURL;?>public/mobile/img/partent_ico77.png) no-repeat left;background-size: 7px 10px;}
.option_list_ul1 .jiantou2{background: url(<?php echo OSSURL;?>public/mobile/img/fy_partent_ico.png) no-repeat left;background-size: 11px 8px;background-position-y: 15px;}
.JobLeaderBox {height: 20px;background: #ff6665;color: white;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-moz-box-align: center;-ms-flex-align: center;-webkit-align-items: center;align-items: center;font-size: 11px;margin-left: 5px;padding: 0 4px;border-radius: 5px;}
.option_list_ul2 li{background:url(<?php echo OSSURL;?>/public/mobile/img/check_icon_off.png) no-repeat right center;background-size: 20px;}
.option_list_ul li {background:url(<?php echo OSSURL;?>/public/mobile/img/check_icon_off.png) no-repeat right center;background-size: 20px;}
.option_title2 {background:url(<?php echo OSSURL;?>/public/mobile/img/check_icon_off.png) no-repeat right center;background-size: 20px;}
.option_title {background:url(<?php echo OSSURL;?>/public/mobile/img/check_icon_off.png) no-repeat right center;background-size: 20px;}
</style>
<link href="<?php echo OSSURL;?>public/mobile/css/wx_sdk.css" rel="stylesheet" />
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.10.1.min.js?v=4.9"></script>
<?php  include $this->template('port');?>
<title><?php  echo $school['title'];?></title>
</head>
<body>
<div id="titlebar" class="header mainColor">
	<div class="l"><a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a></div>
	<div class="m">
		<span style="font-size: 18px">发布作业</span>   
	</div>
</div>    
<div id="titlebar_bg" class="top_head_blank"></div>
<div class="feedback_box">
    <div class="blank"></div>
    <div class="feedback_title_box">
        <div class="feedback_title feedback_title_teacher" id="feedback_title" select_id=''>请选择班级或学生</div>
        <select id="master_select_box">
			<option value="">请选择</option>
            <option value="send_class">指定班级</option>
            <option value="student">指定学生个人</option>
        </select>
    </div>
	<?php  if(!$schooltype) { ?>
	<div class="blank"></div>
	<div class="feedback_title_box">
        <select class="feedback_title" id="km_id">
			<option value="">请选择科目</option>
			<?php  if(is_array($bjlist)) { foreach($bjlist as $item) { ?>
				<?php  if(!in_array($item['km_id'], $bjlist)) { ?>
				<?php  $bjlist[] = $item['km_id'];?>
					<option value="<?php  echo $item['km_id'];?>"><?php  echo $item['kmname'];?></option>
				<?php  } ?>
			<?php  } } ?>	
        </select>
    </div>
	<?php  } ?>	
	<div class="blank"></div>
	<div class="feedback_title_box">
		<div class="textBox">
			<input style="border:none;width: 100%;overflow: hidden;" id="title" type="text" placeholder="作业标题...">
        </div>
	</div>	
    <div class="blank"></div>
    <div class="feedback_content_box">
        <!-- 日志内容 -->
        <textarea class="feedback_content" id="feedback_content" maxlength="100000" placeholder="请输入文字"></textarea>
        <div class="clear1"></div>
        <!-- 视频列表  -->
        <ul class="media_list">
        </ul>
        <div class="clear1"></div>
        <!-- 音频列表  -->
        <ul class="video_list">
        </ul>
        <div class="clear1"></div>
        <!-- 图片列表  -->
        <ul class="pic_list" id="pic_list">
        </ul>
        <div class="clear1"></div>
    </div>
    <div class="blank"></div>
    <div class="weui_cell_ft" style="text-align:left;">
        <span>需要回答&nbsp;</span>
        <input id="is_personal" class="weui_switch" type="checkbox" value="0"/>
        <input id="is_txt" type="hidden" value="0">
    	<span class="answer_type" style="display:none">
		   <span class="checkBoxOptionsIco" style="margin-left: 5px;">
				<img src="<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png" alt="图片无法显示" class="img-responsive">
				<input id="is_img" class="answer_checkbox" type="checkbox"  value="0">
			</span>
			<span style="margin-right: 5px;">图片</span>
		 	<span class="checkBoxOptionsIco" style="margin-left: 5px;">
				<img src="<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png" alt="图片无法显示" class="img-responsive">
				<input id="is_audio" class="answer_checkbox" type="checkbox"  value="0">
			</span>
			<span style="margin-right: 5px;">语音</span>
			 <span class="checkBoxOptionsIco" style="margin-left: 5px;">
				<img src="<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png" alt="图片无法显示" class="img-responsive">
				<input id="is_video" class="answer_checkbox" type="checkbox"  value="0">
			</span>
			<span style="margin-right: 5px;">视频</span>
		</span>
    </div>
    <div class="weui_cell_ft" style="text-align:left;margin-top: 10px;">
        <span>允许评论&nbsp;</span>
        <input id="is_pl" class="weui_switch" type="checkbox" value="0"/>
		<span class="is_see" style="display:none">
			<span class="isseeword" style="margin-left: 5px;">所有人可见</span>
			<input id="is_see" class="weui_switch" type="checkbox" value="0"/>
		</span>
    </div>
    <div class="topic_bottom">
        <div class="add_expression_btn dialog_showFace"></div>
        <div class="add_pic_btn"></div>
        <?php  if($school['is_fbvocie'] ==1) { ?><div class="add_video_btn"></div><?php  } ?>
        <?php  if($school['is_fbnew'] ==1) { ?><div class="add_video_btn2"></div><?php  } ?>
        <div class="topic_send_btn">提交</div>
    </div>
</div>

<!-- 表情框 -->
<div class="faceBox faceBox_fixed">
    <div class="faceBox_main">
        <ul id="faceImg">
        </ul>
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
<!-- /表情框 -->

<!-- 录音弹出框 -->
<div class="blank" style="height: 50px;"></div>
<div class="babysay_bg">
    <div class="say_time_box">
        <div class="say_time_level"></div>
    </div>
    <div class="babysay_box">
        <div class="say_btn1 record_btn"></div>

        <div class="say_tips1">点击话筒开始录音吧</div>
        <div class="say_tips2">时长不超过<span class="pink_f">60</span>秒</div>

    </div>
</div>

<!--收藏夹start  -->
<div class="select_type_bg">
    <div class="media_upload_tips" style="display: none; line-height: 20px; position: fixed; bottom: 180px; left: 0; width: 100%; box-sizing: border-box; padding: 10px; color: #eee; font-size: 12px; text-align: center;">温馨提醒：为了保证您上传视频的速度，使用安卓手机用户拍摄视频请先通过 录像里面的设置功能将 录像的分辨率调低。视频文件大小不宜超过3mb。</div>
    <div class="local_audio_btn"  style="bottom:61px;" >录音</div>

    <div class="local_img_btn">本地图片</div>
    <!-- <div class="web_img_btn" >从收藏夹选择图片</div> -->
    <div id="local_media_btn" class="local_media_btn">
        <div id="local_media_btn2" style="position: relative; width: 100%; text-align: center; height: 50px;">本地视频</div>
    </div>
    <!-- <div class="web_media_btn" >从收藏夹选择视频</div> -->
    <div class="select_type_cancel">取消</div>
</div>
<div class="video_bg">
    <div class="close_video_btn">关闭</div>
</div>
<div id="select_option_box" class="new_diary_list6">
    <div id="search_option_box" class="search_option_box">
        <input class="seachBox" type="text" placeholder="搜索" />
        <div class="search_option_btn"></div>
    </div>
    <div class="option_li_box option_li_box3"></div>
    <div class="option_li_box2"></div>
    <div class="option_li_box option_li_box1 staff"></div>
    <div class="option_li_box option_li_box4 staff_jsfz"></div>	
</div>
<!-- 收藏夹end -->
 <input type="hidden" id="session_visit_sign" value="0" />
 <input id="isopen" type="hidden" value="<?php  echo $school['isopen'];?>" />
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<script src="<?php echo MODULE_URL;?>public/mobile/js/idangerous.swiper.min.js?v=1717"></script>

<script src="<?php echo OSSURL;?>public/mobile/js/common.js?v=1717"></script>

<script type="text/javascript">
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		$("#titlebar_bg").hide();
		document.title="发布作业";
	}
}, 100);
 
	$(".checkBoxOptionsIco").click(function() {
		var value = $(this).children("img").attr("src");
		if (value == "<?php echo OSSURL;?>public/mobile/img/checkBoxChecked_01.png") {
			$(this).children("img").attr("src", "<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png");
			$(this).children("input").removeAttr("checked");
			$(this).children("input").attr("value", "0");
		} else {
			$(this).children("img").attr("src", "<?php echo OSSURL;?>public/mobile/img/checkBoxChecked_01.png");
			$(this).children("input").attr("checked", "checked");
			$(this).children("input").attr("value", "1");
		}
	});
var ROOT_URL = "<?php echo OSSURL;?>";
var MODULE_URL = "<?php echo MODULE_URL;?>";
$("input,textarea,select").blur(function(){
	document.body.scrollTop = document.documentElement.scrollTop = 0;
});
</script>
<script src="<?php echo OSSURL;?>public/mobile/js/faceMap.js?v=5.61"></script>
<script>var face_img_base_url = ROOT_URL + "public/mobile/img/";</script>
<script src="<?php echo OSSURL;?>public/mobile/js/wxUpload_v0.3.js?v=1717"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/openDialog_v1.3.js?v=1717"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/favorite.js?v=1717"></script>
<script type="text/javascript">
	$(function () {
		if (window.localStorage) {
			//@---获取下拉多选缓存值
			var diary_type = localStorage.getItem("yab_parent_diary_type");
			if (diary_type != "" && diary_type != null && diary_type != "null") {
				$("#km_id").find("option[value='" + diary_type + "']").attr("selected", true);
			}
			//@---获取私密缓存值
			var diary_personal = localStorage.getItem("yab_parent_diary_personal");
			if (diary_personal != "" && diary_personal != null && diary_personal != "null" && diary_personal == "Y") {
				$("#is_personal").prop("checked", true);
				$("#is_personal").attr("value", "1");
				$("#is_txt").attr("value","1");
				$(".answer_type").show();
			}
			// 获取标题文本缓存值
			var diary_title = localStorage.getItem("yab_parent_diary_title");
			if (diary_title != "" && diary_title != null && diary_title != "null") {
				$("#title").val(diary_title);
			}			
			// 获取日志文本缓存值
			var diary_content = localStorage.getItem("yab_parent_diary_content");
			if (diary_content != "" && diary_content != null && diary_content != "null") {
				$("#feedback_content").val(diary_content);
			}
		}
            //判断浏览器信息
            var android_nav = /android/i.test(navigator.userAgent);
            var ios_nav = /ios | iPhone | iPad/i.test(navigator.userAgent);

            var bottom_div;

            if ($('.topic_bottom').length > 0) {
                bottom_div = $('.topic_bottom');
            }
            if (ios_nav && typeof (bottom_div) != 'undefined') {

                $("input[type=text],textarea,select").on("focus", function() {
                    var self = this;
                    bottom_div.hide();
                    self.scrollIntoView();
                }).on("blur", function() {
                    window.setTimeout(function() {
                        if (document.activeElement.nodeName != 'TEXTAREA' && document.activeElement.nodeName != 'INPUT') {
                            bottom_div.show();
                        }

                    }, 50)
                })
            }
            if (!ios_nav) {
                //这里只针对校长的点击选择框做处理
                $("#master_select_box").on("change", function() {
                    //$("#feedback_title").attr("select_id", '').text('');
                    $("#select_option_box").hide();
                    if ($(this).val() == "allstu") {
                        $(".feedback_title").text($(this).find(":selected").text());
                    } else {
						$("#select_option_box").show();
						if ($(this).val() == "student") {
							$(".option_li_box1").removeClass("show");
							$(".option_li_box3").removeClass("show");
							$(".option_li_box4").removeClass("show");
							$(".option_li_box2").addClass("show");
							$(".header").hide();
							getnotice_user('student');
						} else if ($(this).val() == "send_class") {
							$(".option_li_box2").removeClass("show");
							$(".option_li_box1").removeClass("show");
							$(".option_li_box4").removeClass("show");
							$(".option_li_box3").addClass("show");
							$(".header").hide();
							getnotice_user('send_class');
						}
                    }

                });
            } else { //
                //这里只针对校长的点击选择框做处理
                $("#master_select_box").on("blur", function() {
                    //$("#feedback_title").attr("select_id", '').text('');
                    $("#select_option_box").hide();
                    if ($(this).val() == "allstu") {
                        $(".feedback_title").text($(this).find(":selected").text());
                    } else {
						$("#select_option_box").show();
						if ($(this).val() == "student") {
							$(".option_li_box1").removeClass("show");
							$(".option_li_box3").removeClass("show");
							$(".option_li_box4").removeClass("show");
							$(".option_li_box2").addClass("show");
							$(".header").hide();
							getnotice_user('student');
						} else if ($(this).val() == "send_class") {
							$(".option_li_box2").removeClass("show");
							$(".option_li_box1").removeClass("show");
							$(".option_li_box4").removeClass("show");
							$(".option_li_box3").addClass("show");
							$(".header").hide();
							getnotice_user('send_class');
						}
                    }
                });
            }
		
            //校长选择学生处理 start
            $(".new_diary_list6").on("click",".option_list_ul1 .list", function() {
				if ($(this).hasClass("jiantou")) {
					$(this).removeClass("jiantou");
					 $(this).addClass("jiantou2");
				}else{
					$(this).removeClass("jiantou2");
					 $(this).addClass("jiantou");
				}
                $(this).siblings("li").children(".sec_ul_box").removeClass("show");
                if ($(this).children(".sec_ul_box").hasClass("show")) {
                    $(this).children(".sec_ul_box").removeClass("show");
                } else {
                    $(this).children(".sec_ul_box").addClass("show");
                }
            });
			$(".new_diary_list6").on("click",".option_list_ul1 .option_list_ul2 li", function(e) {
                e.stopPropagation();
                e.preventDefault();
                if ($(this).hasClass("check")) {
                    $(this).removeClass("check");
                } else {
                    $(this).addClass("check");
                }
            });

            //点击全选
			$(".new_diary_list6").on("click",".option_title2", function(e) {
                e.stopPropagation();
                e.preventDefault();
                if ($(this).hasClass("check_all")) {
                    $(this).removeClass("check_all");
                    $(this).next("ul").find(".show").removeClass("check");
                } else {
                    $(this).addClass("check_all");
                    $(this).next("ul").find(".show").addClass("check");
                }
            });
			$(".new_diary_list6").on("click",".option_title3", function(e) {
                e.stopPropagation();
                e.preventDefault();
                if ($(this).hasClass("check_all")) {
                    $(this).removeClass("check_all");
                    $(this).next("ul").find(".show").removeClass("check");
                } else {
                    $(this).addClass("check_all");
                    $(this).next("ul").find(".show").addClass("check");
                }
            });
            //校长选择学生处理end

			$(".new_diary_list6").on("click",".option_list_ul li", function() {
                if ($(this).hasClass("check")) {
                    $(this).removeClass("check");
                } else {
                    $(this).addClass("check");
                }
            });

            $(".new_diary_list6").on("input propertychange",".seachBox", function() {
                var input_text = $.trim($(this).val());
				if ($("#master_select_box").val() == 'student') {
					$(".sec_ul_box").removeClass("show");
                    $(".option_list_ul1 li").each(function() {
                        if ($(this).find(".name2").text().indexOf(input_text) >= 0) {
							$(this).addClass("show");
                            $(this).addClass("show").closest(".sec_ul_box").addClass("show");
                        } else {
                            $(this).removeClass("show");
                        }
                    });
				}
				if ($("#master_select_box").val() == 'send_class') {
                    $(".option_list_ul li").each(function() {
                        if ($(this).children(".name").text().indexOf(input_text) >= 0) {
                            $(this).addClass("show");
                        } else {
                            $(this).removeClass("show");
                        }
                    });
				}
            });
            $('#search_option_box input').on('focus', function() {
                $('.search_option_btn').addClass('search_option_btn_Other');
            });
            $('#search_option_box input').on('blur', function () {
                $('.search_option_btn').removeClass('search_option_btn_Other');
            });

            //确认按钮2 student
			$(".new_diary_list6").on("click",".sure_btn2", function() {
				var data_send = new Object();
                var all_select_text = '';
                var all_select_id = '';
				var classid = '';
                $(".option_list_ul2 li.check").each(function(index) {
                    all_select_text += $(this).find(".name").text() + ';';
					classid = $(this).parent().parent().parent().attr("class_id");
					if( data_send && data_send.hasOwnProperty(classid) ){	
					}else{
						data_send[classid] = '';
					}
					data_send[classid] += $(this).attr("u_id") + ',';
                });
				console.log(data_send);
				all_select_id =  JSON.stringify(data_send);
                if (all_select_id != "") {
                    $("#feedback_title").attr("select_id", all_select_id).text(all_select_text);
                    //@通知对象---获取选择全校文本内容
                    if (window.localStorage) {
                        localStorage.setItem("yab_leader_notify_recipient_select_id", all_select_id);
                        localStorage.setItem("yab_leader_notify_recipient_text", all_select_text);
                    }
                }
                $("#select_option_box").hide();
				if(window.__wxjs_environment === 'miniprogram'){
					$(".header").hide();
				}else{
					$(".header").show();
				}
            });
            //确认按钮   send_class
			$(".new_diary_list6").on("click",".sure_btn3", function() {
                //$("#feedback_title").attr("select_id",'').text('');
                var all_select_text = '';
                var all_select_id = '';
                $(".option_list_ul_class li.check").each(function() {
                    all_select_text += $(this).children(".name").text() + ';';
                    all_select_id += $(this).attr("u_id") + ',';
                });
                if (all_select_id) {
                    $("#feedback_title").attr("select_id", all_select_id).text(all_select_text);

                    //@通知对象---获取选择全校文本内容
                    if (window.localStorage) {
                        localStorage.setItem("yab_leader_notify_recipient_select_id", all_select_id);
                        localStorage.setItem("yab_leader_notify_recipient_text", all_select_text);
                    }
                }
                $("#select_option_box").hide();
				if(window.__wxjs_environment === 'miniprogram'){
					$(".header").hide();
				}else{
					$(".header").show();
				}
            });

            //点击全选
			$(".new_diary_list6").on("click",".option_title", function() {
                if ($(this).hasClass("check_all")) {
                    $(this).removeClass("check_all");
                    $(".option_list_ul .show").removeClass("check");
                } else {
                    $(this).addClass("check_all");
                    $(".option_list_ul .show").addClass("check");
                }

            });
		//@---保存输入文本内容
		$("#title").bind('input propertychange', function () {
			if (window.localStorage) {
				localStorage.setItem("yab_parent_diary_title", $("#title").val());
			}
		});		
		$("#feedback_content").bind('input propertychange', function () {
			if (window.localStorage) {
				localStorage.setItem("yab_parent_diary_content", $("#feedback_content").val());
			}
		});
		$("#faceImg").on('click', '.faceBox_item', function () {
			if (window.localStorage) {
				localStorage.setItem("yab_parent_diary_content", $("#feedback_content").val());
			}
		});
		//@---保存私密内容
		$("#is_personal").on("change", function () {
			if(	$("#is_personal").is(':checked')){
				$(".answer_type").show();
				$("#is_txt").attr("value","1");
				$("#is_personal").attr("value","1");
				//console.log("checked");
			}else{
				$(".answer_type").hide();
				$("#is_personal").attr("value","0");
				
				$("#is_img").attr("value","0");
				$("#is_audio").attr("value","0");
				$("#is_video").attr("value","0");
				
				$("#is_img").removeAttr("checked");
				$("#is_audio").removeAttr("checked");
				$("#is_video").removeAttr("checked");
				
				$("#is_img").parent(".checkBoxOptionsIco").children("img").attr("src","<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png");
				$("#is_audio").parent(".checkBoxOptionsIco").children("img").attr("src","<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png");
				$("#is_video").parent(".checkBoxOptionsIco").children("img").attr("src","<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png");
				//console.log("not checked");
			}
			if (window.localStorage) {
				localStorage.setItem("yab_parent_diary_personal", $("#is_personal").prop('checked') ? "Y" :"N");
			}
		});
		//处理评论按钮事件
		$("#is_pl").on("change", function () {
			if(	$("#is_pl").is(':checked')){
				$(".is_see").show(200);
			}else{
				$(".is_see").hide();
			}
		});
		$("#is_see").on("change", function () {
			if(	$("#is_see").is(':checked')){
				$(".isseeword").text('仅自己可见');
			}else{
				$(".isseeword").text('所有人可见');
			}
		});
		//@---保存下拉多选内容
		$("#km_id").on("change", function () {
			if (window.localStorage) {
				localStorage.setItem("yab_parent_diary_type", $(this).val());
			}
			if($("#km_id").val() != ''){
				var kmname = $(this).find(":selected").text();
				var today = "<?php  echo $nowday;?>"+kmname+'作业';
				$("#title").val(today);
			}
		});
		
		//点击上传视频按钮
		$('.add_video_btn2').one('click', function () {
			//run_video_init();
		});

		//点击隐藏录音框
		$(".babysay_bg").on("click", function (e) {
			$(this).hide();
		});

		//点击选择表情
		$("#feedback_content ,#feedback_content_til").on("touchstart", function (e) {
			e.stopPropagation();
			$(".faceBox").css("display", "none");
		});

		//删除已选视频
		$('.media_list').on('click', '.del_btn', function (e) {
			e.stopPropagation();
			$(this).closest('.vod_li').remove();
			$('.add_video_btn2').one('click', function () {
				//run_video_init();
				$('#fileUpload').click();
			});

		})

		var submit_wxsdkSendData = true;
		var choose_img_params = {
			choose_img_btn: ".local_img_btn",
			upload_btn: ".topic_send_btn", //提交按钮
			img_showlist: ".pic_list", //图片显示的列表
			record_btn: ".record_btn",
			video_btn: ".video_btn",
			video_list: ".video_list",
			del_video_btn: "delete_voice_btn",
			img_max_length: 9,
			video_max_length: 1,
			upload_img_url: "<?php  echo $this->createMobileUrl('bjqajax',array('op'=>'donwimg'))?>",     //图片的url
			upload_video_url: "<?php  echo $this->createMobileUrl('bjqajax',array('op'=>'donwvioce'))?>",   //音频的url
			wxsdkcheckForm: function () {
				// 1.这里先做校验文本框不能为空
				var typessss = $("#master_select_box").find(":selected").val();	
				if (typessss == "send_class" || typessss == "student") {
					var typedatasss = $('#feedback_title').attr('select_id');
					if(typedatasss == '' || typedatasss == null){
						jAlert('请选择发送对象');
						return false;
					}
				}
				<?php  if(!$schooltype) { ?>
				var km_id = $.trim($("#km_id").val());
				if (km_id == "") {
					jAlert("选择科目");
					return false;
				}
				<?php  } ?>
				var title = $.trim($("#title").val());
				if (title.replace(/(#)[0-9a-zA-Z\u4e00-\u9fa5]{0,255}(#)/g, '$1$2').replace(/[#]/g, "") == "") {
					jAlert("请先输入标题");
					return false;
				}

				var is_txt   = $("#is_txt").val();
				var is_img   = $("#is_img").val();
				var is_audio = $("#is_audio").val();
				var is_video = $("#is_video").val();
				var is_personal = $("#is_personal").val();
			
				var diary_content = $.trim($("#feedback_content").val());

				if (diary_content.replace(/(#)[0-9a-zA-Z\u4e00-\u9fa5]{0,255}(#)/g, '$1$2').replace(/[#]/g, "") == "") {
					jAlert("请先输入正文内容");
					return false;
				}

				<?php  $word = $this->GetSensitiveWord($weid) ?>
				// 2.敏感词检查
				var sensitive_words = "<?php  echo $word;?>";
				var filter = sensitive_words.split('|');
				for (var i = 0; i < filter.length; i++) {
					var filter_word = filter[i].trim();

					if (filter_word == "")
						continue;

					if (diary_content.indexOf(filter_word) > -1) {
						jAlert("请遵守国家法律法规，请勿发布暴力、谣言、色情等言论。正文内容含有非法词语：" + filter_word);

						return false;
					}
				}

				// 验证成功
				return true;
			},
			wxsdkSendData: function (imgServerid, videoServerid, videoTime, media_receiveid) {
				if (submit_wxsdkSendData) {
					submit_wxsdkSendData = false;
					// var content = iphone_emoji_filter($("#feedback_content").val());
					var url = "<?php  echo $this->createMobileUrl('dongtaiajax',array('op'=>'zfabu'))?>";
					var type = $("#master_select_box").find(":selected").val();
                    var typedata = $('#feedback_title').attr('select_id');
					var isPersonal = $("#is_personal").prop('checked')?"Y":"N";
					var is_pl = $("#is_pl").prop('checked')?"Y":"N";
					var is_see = $("#is_see").prop('checked')?"Y":"N";

					//var content = iphone_emoji_filter($("#feedback_content").val().replace(/(#)[0-9a-zA-Z\u4e00-\u9fa5]{0,255}(#)/g,'$1$2').replace(/[#]/g,""));
					var content = $("#feedback_content").val();

					var link_title = $("#link_title").attr("data-linktitle");
					var link_address = $("#link_address").attr("data-linkaddress");

					var receiveid = [];
					var receivetime = 0;

					$(".pic_list li").not(".sdk_img_li").each(function () {
						receiveid.push($(this).children("img").attr("receive_id"));
					});
					$(".video_list li").not(".sdk_voice_li").each(function () {
						receiveid.push($(this).children("audio").attr("receive_id"));
					});
					$(".media_list li").each(function () {
						receiveid.push($(this).children(".favorites_play_icon").attr("receive_id"));
						receivetime = $(this).children("audio").attr("receive_time");
					});
					var favourite_mediaid = '';
					if ($('.media_list li').not('.vod_li').length > 0) {
						favourite_mediaid = $('.media_list li').children(".favorites_play_icon").attr("receive_id");
					}
					var data = {
						weid:"<?php  echo $weid;?>",
						openid : "<?php  echo $openid;?>",
						schoolid : "<?php  echo $schoolid;?>",
						schooltype:"<?php  echo $schooltype;?>",
						userid: "<?php  echo $it['id'];?>",
						uid:"<?php  echo $fan['uid'];?>",
						tid:"<?php  echo $it['tid'];?>",
						tname:"<?php  echo $teachers['tname'];?>",
						km_id : $("#km_id").val(),
						title : $("#title").val(),
						is_txt: $("#is_txt").val(),
						is_img: $("#is_img").val(),
						is_audio: $("#is_audio").val(),
						is_video: $("#is_video").val(),
						type: type,
						datas: typedata,
						content: content,
						photoUrls: imgServerid,
						audioServerid: videoServerid,
						audioTime: videoTime,
						receiveid: receiveid,
						receivetime: receivetime,
						videoMediaId: media_receiveid,
						favourVideoMediaId: favourite_mediaid,
						is_private: isPersonal,
						is_pl: is_pl,
						is_see: is_see,
						linkDesc:link_title,
						linkAddress: link_address
					}
					$(".topic_send_btn").hide();
					ajax_upload(url, data, this);
				}
			}
		};
		$.wx_upload = $.extend($.wx_upload, choose_img_params);
		$.wx_upload.init();
		wx.ready(function () {
			wx.hideAllNonBaseMenuItem();
			wx.onVoicePlayEnd({
				complete: function (res) {
					$.wx_upload.wxsdkonVoicePlayEnd(res.localId);
				}
			});
			wx.onVoiceRecordEnd({
				success: function (res) {
					jTips("超过1分钟!");
					$.wx_upload.wxsdkonVoiceRecordEnd(res.localId);
				}
			});
		});
		wx.error(function (res) {
			console.log(res);
			jTips("签名校验失败!");
		});
	});
	function getnotice_user(type) {
		ajax_start_loading('加载中...');
		$.ajax({
			url: "<?php  echo $this->createMobileUrl('dongtaiajax', array('schoolid' => $schoolid))?>",
			type: "post",
			dataType: "html",
			data: {
				schooltype:"<?php  echo $schooltype;?>",
				op: 'get_noticebjtz',
				tid:"<?php  echo $it['tid'];?>",
				type: type
			},
			success: function (data) {
				if ($.trim(data)) {
					ajax_stop_loading();
					if(type == "student"){
						$('.option_li_box2').empty();
						$('.option_li_box2').append(data);
					}
					if(type == "send_class"){
						$('.option_li_box3').empty();
						$('.option_li_box3').append(data);
					}
				}else{
					jTips("非常抱歉，出现了点小问题，可以尝试刷新重试！");
					ajax_stop_loading();
				}
			}		
		});			
	}

	function ajax_upload(url, data, self) {
		$.ajax({
			url: url,
			data: data,
			type: "POST",
			dataType: "json",
			success: function (result) {
				//提交后 隐藏加载层
				self.hideLoadingMsg();
				if (result.status == 1) {
					var page = 1;
					var total = result.total;
					var bjarr = result.bjarr;
					var stuarr = result.stuarr;
					var noticeidarr = result.noticeidarr;
					ajax_start_loading(result.msg);
					ajax_stop_loading();
					upload_pro(page,noticeidarr,bjarr,stuarr,total, this);
				} else {
					$.wx_upload.success_img_arr = [];
					$.wx_upload.fail_local_img_arr = [];
					$.wx_upload.fail_server_img_arr = [];
					$.wx_upload.success_video_arr = [];
					$.wx_upload.fail_local_video_arr = [];
					$.wx_upload.fail_server_video_arr = [];
				}
			},
			error: function () {
				//提交后 隐藏加载层
				self.hideLoadingMsg();
				$.wx_upload.success_img_arr = [];
				$.wx_upload.fail_local_img_arr = [];
				$.wx_upload.fail_server_img_arr = [];
				$.wx_upload.success_video_arr = [];
				$.wx_upload.fail_local_video_arr = [];
				$.wx_upload.fail_server_video_arr = [];
				$(".topic_send_btn").show();
				jTips("非常抱歉，出现了点小问题，可以尝试刷新重试！");
			},
		});
	};

	function upload_pro(page,noticeidarr,bjarr,stuarr,total, self) {
		var prodata = {
			weid:"<?php  echo $weid;?>",
			schoolid : "<?php  echo $schoolid;?>",
			total:total,
			tname:"<?php  echo $teachers['tname'];?>",
			schooltype:"<?php  echo $schooltype;?>",
			usertype:$("#master_select_box").find(":selected").val(),
			noticeidarr:noticeidarr,
			bjarr:bjarr,
			stuarr:stuarr,
			page:page
		}					
		$.ajax({
			url: "<?php  echo $this->createMobileUrl('dongtaiajax', array('schoolid' => $schoolid,'op' => 'znotpro'))?>",
			data: prodata,
			type: "POST",
			dataType: "json",
			success: function (result) {
				//提交后 隐藏加载层
				if (result.status == 1) {
					var page = result.page;
					var pro = result.pro;
					ajax_start_loading(pro);
					upload_pro(page, noticeidarr,bjarr,stuarr,total, this);
				}
				if (result.status == 2) {
					ajax_stop_loading();
					jTips("全部发送完成");
					localStorage.removeItem("yab_parent_diary_type");//清除本地存储
					localStorage.removeItem("yab_parent_diary_title");
					localStorage.removeItem("yab_parent_diary_personal");
					localStorage.removeItem("yab_parent_diary_content");
					location.href = "<?php  echo $this->createMobileUrl('zuoyelist', array('schoolid' => $schoolid))?>";
				}				
			},
			error: function () {
				//提交后 隐藏加载层
				self.hideLoadingMsg();
				jTips("非常抱歉，出现了点小问题，可以尝试刷新重试！");
			},
		});
	};	
</script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/aliyun-upload-sdk/aliyun-upload-sdk-1.5.0.min.js"></script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/aliyun-upload-sdk/lib/es6-promise.min.js"></script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/aliyun-upload-sdk/lib/aliyun-oss-sdk-5.3.1.min.js"></script>
<div class="upload">
  <div>
	<input type="file" id="fileUpload" style="position:absolute;top:0;left:0;">
	<label class="status" style="display:none">上传状态: <span id="status"></span></label>
  </div>
  <div class="upload-type" style="display:none">
	上传方式一, 使用 UploadAuth 上传:
	<button id="authUpload" >开始上传</button>
	<span></span>
  </div>
</div>
<script>
    $(document).ready(function () {
      /** 
       * 创建一个上传对象
       * 使用 UploadAuth 上传方式
       */
      function createUploader () {
        var uploader = new AliyunUpload.Vod({
          timeout: 60000,
          partSize: 1048576,
          parallel:  5,
          retryCount:  3,
          retryDuration: 2,
          region: 'cn-shanghai',
          userId: 1494184150208356,
          // 添加文件成功
          addFileSuccess: function (uploadInfo) {
            console.log('addFileSuccess')
            //$('#authUpload').attr('disabled', false)
            $('#resumeUpload').attr('disabled', false)
            $('#status').text('添加文件成功, 等待上传...')
            console.log("addFileSuccess: " + uploadInfo.file.name)
			var _media_list = '<li class="vod_li"><div class="favorites_play_icon" ></div><img src="' + ROOT_URL + "public/mobile/img/wait_check_bg.png" + '"><div class="del_btn" vod_id="' + uploadInfo.videoId + '"></div></li>';
			$(".media_list").html(_media_list);
			$.wx_upload.hideLoadingMsg();
          },
          // 开始上传
          onUploadstarted: function (uploadInfo) {
			if (!uploadInfo.videoId) {
				  var createUrl = "<?php  echo $this->createMobileUrl('bjqajax',array('op'=>'CreateAliUploadVideo','schoolid'=> $schoolid))?>" + "&title=<?php  echo $teachers['tname'];?>老师"  + "&filename=" + uploadInfo.file.name + "&description=作业"+"&tag=作业&coverurl="
				  $.get(createUrl, function (data) {
					var uploadAuth = data.UploadAuth
					var uploadAddress = data.UploadAddress
					var videoId = data.VideoId
					uploader.setUploadAuthAndAddress(uploadInfo, uploadAuth, uploadAddress,videoId)
				  }, 'json')
				  $('#progress_text').text('开始上传视频...');
				  
				  console.log(uploadInfo);
				  console.log("文件开始上传  onUploadStarted:" + uploadInfo.file.name + ", endpoint:" + uploadInfo.endpoint + ", bucket:" + uploadInfo.bucket + ", object:" + uploadInfo.object)
            } else {
				  var refreshUrl = "<?php  echo $this->createMobileUrl('bjqajax',array('op'=>'CreateAliUploadVideo','schoolid'=> $schoolid))?>&VideoId=" + uploadInfo.videoId
				  $.get(refreshUrl, function (data) {
					var uploadAuth = data.UploadAuth
					var uploadAddress = data.UploadAddress
					var videoId = data.VideoId
					uploader.setUploadAuthAndAddress(uploadInfo, uploadAuth, uploadAddress,videoId)
				  }, 'json')
            }
          },
          // 文件上传成功
          onUploadSucceed: function (uploadInfo) {		
			$('#progress_text').text('处理视频中...');
            $.wx_upload.success_media_id = uploadInfo.videoId;
			console.log($.wx_upload);
			//$.wx_upload.hideLoadingMsg();
			 if ($.wx_upload.fail_local_img_arr.length > 0 || $.wx_upload.fail_server_img_arr.length > 0 || $.wx_upload.fail_local_video_arr.length > 0 || $.wx_upload.fail_server_video_arr.length > 0) {
				$.wx_upload.showErrorMsg();
			} else {
				$.wx_upload.wxsdkSendData($.wx_upload.success_img_arr, $.wx_upload.success_video_arr, $.wx_upload.video_time, uploadInfo.videoId);
			}
			console.log(uploadInfo);
            console.log("文件上传成功  onUploadSucceed: " + uploadInfo.file.name + ", videoid:" + uploadInfo.videoId + ", bucket:" + uploadInfo.bucket + ", object:" + uploadInfo.object)
            $('#status').text('文件上传成功!')
          },
          // 文件上传失败
          onUploadFailed: function (uploadInfo, code, message) {
            console.log("文件上传失败  onUploadFailed: file:" + uploadInfo.file.name + ",code:" + code + ", message:" + message)
            $('#status').text('文件上传失败!')
          },
          // 取消文件上传
          onUploadCanceled: function (uploadInfo, code, message) {
            console.log("文件上传已暂停  Canceled file: " + uploadInfo.file.name + ", code: " + code + ", message:" + message)
            $('#status').text('文件上传已暂停!')
          },
          // 文件上传进度，单位：字节, 可以在这个函数中拿到上传进度并显示在页面上
          onUploadProgress: function (uploadInfo, totalSize, progress) {
            console.log("文件上传中   onUploadProgress:file:" + uploadInfo.file.name + ", fileSize:" + totalSize + ", percent:" + Math.ceil(progress * 100) + "%")
            var progressPercent = Math.ceil(progress * 100)
            //$('#auth-progress').text(progressPercent)
            //$('#status').text('文件上传中...')
			$.wx_upload.showLoadingMsg();
			if (progressPercent) {
				$('#progress_text').text('视频上传' + progressPercent + "%");
			}
          },
          // 上传凭证超时
          onUploadTokenExpired: function (uploadInfo) {
            $('#status').text('文件上传超时!')

            let refreshUrl = "<?php  echo $this->createMobileUrl('bjqajax',array('op'=>'CreateAliUploadVideo','schoolid'=> $schoolid))?>&VideoId=" + uploadInfo.videoId
            $.get(refreshUrl, function (data) {
              var uploadAuth = data.UploadAuth
              uploader.resumeUploadWithAuth(uploadAuth)
              console.log('upload expired and resume upload with uploadauth ' + uploadAuth)
            }, 'json')
          },
          // 全部文件上传结束
          onUploadEnd: function (uploadInfo) {
            $('#status').text('文件上传完毕!')
            console.log('文件上传完毕!')
          }
        })
        return uploader
      }

      var uploader = null
	$('#local_media_btn2').on('click', function () {
		$('#fileUpload').click();
	})

      $('#fileUpload').on('change', function (e) {
        var file = e.target.files[0]
        if (!file) {
          alert("请先选择需要上传的文件!")
          return
        }

        <?php  if(Keep_sk77()) { ?>
        let LimitFileSize = Number(<?php  echo $videolimit;?>) * 1048576;
        let NowFileSize = file.size
        if(NowFileSize > LimitFileSize && LimitFileSize != 0 ){
            alert(`超出限制大小，作业上传视频大小不得大于<?php  echo $videolimit;?>MB`)
            return
        }
        console.log(NowFileSize)
        <?php  } ?>
        var Title = file.name
        var userData = '{"Vod":{}}'
        if (uploader) {
          uploader.stopUpload()
          $('#auth-progress').text('0')
          $('#status').text("")
        }
        uploader = createUploader()
        console.log(uploader)
        uploader.addFile(file, null, null, null, userData)
        $('#pauseUpload').attr('disabled', true)
        $('#resumeUpload').attr('disabled', true)
      })
      $('#authUpload').on('click', function () {
        if (uploader !== null) {
          uploader.startUpload()
          $('#pauseUpload').attr('disabled', false)
        }
      })
      // 暂停上传
      $('#pauseUpload').on('click', function () {
        if (uploader !== null) {
          uploader.stopUpload()
          $('#resumeUpload').attr('disabled', false)
          $('#pauseUpload').attr('disabled', true)
        }
      })
      $('#resumeUpload').on('click', function () {
        if (uploader !== null) {
          uploader.startUpload()
          $('#resumeUpload').attr('disabled', true)
          $('#pauseUpload').attr('disabled', false)
        }
      })

    })
</script>