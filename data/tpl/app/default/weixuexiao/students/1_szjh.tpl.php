<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="true" />
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/hb.js?v=1027"></script>
<link href="<?php echo OSSURL;?>public/mobile/css/j_alert.css" rel="stylesheet" />
<?php  echo register_jssdks();?>
<link href="<?php echo OSSURL;?>public/mobile/css/weekplan_index.css?v=1027" rel="stylesheet" />
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<link href="<?php echo OSSURL;?>public/mobile/js/common.js?v=1027" rel="stylesheet" />
<?php  include $this->template('port');?>
<title><?php  echo $school['title'];?></title>
</head>
<style type="text/css">
.wkplan_add span{display: inline-block;height:0.9rem;padding-left: 0.52rem;background: url(<?php echo OSSURL;?>public/mobile/img/new_add.png) no-repeat;background-size: 0.31rem 0.31rem;background-position:left center;	font-size: 0.28rem;	color:#ff9f22;}
#start,#end{width:2.6rem;height:0.5rem;border: none;outline: none;background: url(<?php echo OSSURL;?>public/mobile/img/down_arrow.png) no-repeat;background-size: 0.16rem 0.08rem;background-position: 1.65rem center;		background-color: #f0f0f2;margin-left: 0.1rem;border-radius: 0.25rem 0.25rem 0.25rem 0.25rem;padding-left: 0.1rem;color:#666;box-sizing: border-box;line-height: 0.5rem;font-size: 0.28rem;}
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
.my_big_img{width: 100%;height:100%;position: fixed;top:0;bottom: 0;left:0;z-index:999;background-color:#000;}
.big_img_wrap{width: 100%; height: 100%;display: -webkit-box;-webkit-box-align: center;-webkit-box-pack: center;-webkit-box-orient:vertical;}
.wkplan_morning_detail{min-height: 1.76rem; }
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); }
.header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } 
.header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } 
.header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } 
.mainColor { background: #06c1ae !important; } 
.header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
.header .m a i {float: left;margin: 23px 0 0 5px;width: 0;height: 0;border-width: 6px 6px 0;border-style: solid;border-color: white transparent transparent;position: absolute;}
</style>
<body>
<div class="All">
<div class="header mainColor" id="titlebar">
	<div class="l">
		<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a>
	</div>
	<div class="m">
		<a id="showbjlist">
			<span style="font-size: 18px"><?php  echo date('m月d日',$palan['start'])?>-<?php  echo date('m月d日',$palan['end'])?></span>
		</a>
	</div>
</div>	
<?php  if($operation == 'img') { ?>
	<div class="wkplan_content">
		<div class="wkplan_content_wrap">
			<div class="wkplan_inner">
				<div class="wkplan_content_detail" style="opacity:0;display:block">
					<img onclick="wxImageShow(this)" src="<?php  echo tomedia($palan['picrul'])?>" class="wkplan_picture"/>					
				</div>				
			</div>
		</div>
	</div>	
<?php  } ?>	
<?php  if($operation == 'word') { ?>
<div id="titlebar_bg" style="height: 0.80rem;"></div>
<div class="wk_blank50"></div>
<div class="wkplan_content_table">
    <ul class="wkplan_tab">
        <li class="active">一</li>
        <li>二</li>
        <li>三</li>
        <li>四</li>
        <li>五</li>
    </ul>
    <div class="wkplan_day_detail">
		<div class="wkplan_morning">
			<div class="wkplan_daily" style="overflow: hidden;">
				<div class="wkplan_morning_title pull_left">
					<span>上午</span>
				</div>
				<div class="wkplan_morning_content pull_left" id="morning_content">
						<div class="title_item" active_id="morning_activity">
							<div class="wkplan_morning_item pull_left" active_type_id="morning_activity">
								<p>晨间活动</p>
							</div>
							<div class="wkplan_morning_detail pull_left no_content">
							</div>
						</div>
						<div class="title_item" active_id="teach_activity">
							<div class="wkplan_morning_item pull_left" active_type_id="teach_activity">
								<p>教学活动</p>
							</div>
							<div class="wkplan_morning_detail pull_left no_content">
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="wkplan_morning">
			<div class="wkplan_daily" style="overflow: hidden;">
				<div class="wkplan_morning_title pull_left">
					<span>下午</span>
				</div>
				<div class="wkplan_morning_content pull_left" id="after_content">
						<div class="title_item" active_id="out_activity">
							<div class="wkplan_morning_item pull_left" active_type_id="out_activity">
								<p>户外活动</p>

							</div>
							<div class="wkplan_morning_detail pull_left no_content">
							</div>
						</div>
						<div class="title_item" active_id="game_activity">
							<div class="wkplan_morning_item pull_left" active_type_id="game_activity">
								<p>游戏活动</p>

							</div>
							<div class="wkplan_morning_detail pull_left no_content">
							</div>
						</div>
				</div>
			</div>
		</div>
    </div>
</div>
<?php  } ?>
<input type="hidden" id="hiddenPlanUid" value="<?php  echo $PlanUid;?>" />
<input type="hidden" id="weid" value="<?php  echo $weid;?>" />
<input type="hidden" id="schoolid" value="<?php  echo $schoolid;?>" />
<input type="hidden" id="bj_id" value="<?php  echo $bj_id;?>" />
<input type="hidden" id="hiddenDetailUid" />
<input type="hidden" id="gpcplanuid" value="<?php  echo $id;?>" />
<input type="hidden" id="picurl" value="<?php  if($palan['picrul']) { ?><?php  echo tomedia($palan['picrul'])?><?php  } ?>" />
<div class="clear"></div>
<div style="height: 0.80rem;"></div>
<div class="clear"></div>
<div class="clear"></div>
 <?php  include $this->template('footer');?> 	
</div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<?php  if($operation == 'img') { ?>
 <script type="text/javascript">

		var picurl = $("#picurl").val();
		if (picurl != ""){
			$(function ($) {
				$(".wkplan_picture").attr('src', picurl);
				// 新增  不固定图片宽高  根据比例,这个后面我来写
				$(".wkplan_add_pic").hide();
				var pw = $(".wkplan_content_wrap").width();
				var ph = $(".wkplan_content_wrap").height();
				  console.log(pw + "/" + ph)
				var timer=null;
				clearInterval(timer);
				var cw=0;
				var ch=0;
				setInterval(function(){
					 cw= $(".wkplan_picture").width();
					 ch= $(".wkplan_picture").height();
					if(cw>0&&ch>0)
					{
						clearInterval(timer);
						 if (pw / ph > cw / ch) {
							$(".wkplan_picture").css({
								height: ph - 20 + 'px'
							})

						} else {
							$(".wkplan_picture").css({
								width: pw + 'px'
							})
						}
						$(".wkplan_content_detail").css({
							opacity:'1'
						});
						
					}
				},40)
			});		
		}		
		var PlanUid = $("#hiddenPlanUid").val();

        function masterShow(desc, type, obj) {
            $(".conform_text").html(desc);
            $(".master_conform").show();
            if (type == 'alert') {
                $(".conform_select").hide();
                $(".conform_know").show();
            } else {
                $(".conform_select").show();
                $(".conform_know").hide();
            }

            $(".conform_ok").bind("click", function () {
                obj.parent().remove();
                $(".master_conform").hide();

                $(".item_index").each(function () {
                    $(this).html($(this).parent().index() + 1);
                })


            });
            $(".conform_know").bind("click", function () {

                $(".master_conform").hide();

            });
            $(".conform_no").bind("click", function () {

                $(".master_conform").hide();

            });
        }
	var WeixinApi = (function () {
		return {
			imagePreview    :imagePreview
		}; 
		"use strict";
		/**
		 * 调起微信Native的图片播放组件。
		 * 这里必须对参数进行强检测，如果参数不合法，直接会导致微信客户端crash
		 *
		 * @param {String} curSrc 当前播放的图片地址
		 * @param {Array} srcList 图片地址列表
		 */
		function imagePreview(curSrc,srcList) {
			if(!curSrc || !srcList || srcList.length == 0) {
				return;
			}
			WeixinJSBridge.invoke('imagePreview', {
				'current' : curSrc,
				'urls' : srcList
			});
		}
		return {
			version         :"2.5",
			ready           :wxJsBridgeReady,
			imagePreview    :imagePreview
		};
	})();
	function wxImageShow(elm){
		let srcList = new Array();
		let src = $(elm).attr('src');
		srcList.push(src);
		WeixinApi.imagePreview(src, srcList);
	}	
</script>
<?php  } ?>
<?php  if($operation == 'word') { ?>
<script type="text/javascript">
 //*******************************************************************************************************************************************************//
  //*******************************************************************************************************************************************************//
   //*******************************************************************************************************************************************************//
    //*******************************************************************************************************************************************************//
        var arrayAM = [];
        var arrayPM = [];
        var detail_uid = '';
        var active_uid = '';

        arrayAM = [{"ActiveTypeName":"晨间活动","ActiveTypeId":"morning_activity"},{"ActiveTypeName":"教学活动","ActiveTypeId":"teach_activity"}]


        arrayPM = [{"ActiveTypeName":"户外活动","ActiveTypeId":"out_activity"},{"ActiveTypeName":"游戏活动","ActiveTypeId":"game_activity"}]

        $("#bianji").on("click", function () {
           $("#bjbox").css("display","none");
		   $("#bcbox").css("display","block");
        })
		
		var gpcplanuid = $("#gpcplanuid").val();
		if (gpcplanuid != ""){
			$(function ($) {
				if ($(this).hasClass("active") == false) {
					$(this).siblings().removeClass("active");
					$(this).addClass("active");
				}
				var ajaxData = {};
				var WeekDay = parseInt($(".wkplan_tab .active").index()) + 1;
				var sPlanUid = $("#hiddenPlanUid").val();
				$.ajax({
					url: '<?php  echo $this->createMobileUrl('dongtaiajax', array('weid' => $weid,'schoolid' => $schoolid,'bj_id' => $bj_id,'op' => 'GetDetailByWeekDay'))?>',
					type: 'post',
					dataType: "json",
					data: { sPlanUid: gpcplanuid, nWeekDay: 1 },
					success: function (data) {
						var JsonResultData = eval(data);
						tabChange(JsonResultData)
					},
					error: function () {

					}

				});
			});		
		}	
        function count_height_size() {

            $(".wkplan_morning_item ").each(function () {

                var _this = $(this);
                $(this).css({
                    height: _this.next().height(),
                    lineHeight: _this.next().height() + 'px'
                })

            })
            $(".wkplan_morning_title").each(function () {
                var _this = $(this);
                $(this).css({
                    height: _this.next().height(),
                    lineHeight: _this.next().height() + 'px'
                })
            })
            // $(".wkplan_morning_detail").each(function(){

            //     var length=$(this).find("p").length;
            //     if(length>0&&length<4)
            //     {
            //         $(this).find("p").css({
            //             lineHeight:($(this).height()*0.88)/length+'px'
            //         })
            //     }
            // })


        }
        $(function () {
            count_height_size();
        }
        )




        // 记录操作的item内容和是属于上午还是下午

        var isMorning = true;//true上午，false下午
        var itemIndex;//上午或者下午的第几个
        var activeDayIndex;//星期几 0开始 0-4
        var titleItemName;//对应修改的itemname

        $(function () {

            if ($("#start").val() != '') {
                $("title").html($school['title']);
            }
        })


        //显示动态
        $(".wkset_public").on("click", function () {
            if ($(this).hasClass("wkset_public_active")) {
                $(this).removeClass("wkset_public_active")
            } else {
                $(this).addClass("wkset_public_active")
            }
        })
        // 日期tab切换，还需判断是否有值
        $(".wkplan_tab li").on("click", function () {

            if ($("#start").val() == " " || $("#end").val() == " ") {

                masterShow("请先选择时间", 'alert');
                return false


            }
            if ($(this).hasClass("active") == false) {
                $(this).siblings().removeClass("active");
                $(this).addClass("active");
            }
            var ajaxData = {};
            var WeekDay = parseInt($(".wkplan_tab .active").index()) + 1;
            var sPlanUid = $("#hiddenPlanUid").val();
            $.ajax({
                url: '<?php  echo $this->createMobileUrl('dongtaiajax', array('weid' => $weid,'schoolid' => $schoolid,'bj_id' => $bj_id,'op' => 'GetDetailByWeekDay'))?>',
                type: 'post',
                dataType: "json",
                data: { sPlanUid: sPlanUid, nWeekDay: WeekDay },
                success: function (data) {
                    var JsonResultData = eval(data);
                    tabChange(JsonResultData)
                },
                error: function () {

                }

            });
        });

        function masterShow(desc, type, obj) {
            $(".conform_text").html(desc);
            $(".master_conform").show();
            if (type == 'alert') {
                $(".conform_select").hide();
                $(".conform_know").show();
            } else {
                $(".conform_select").show();
                $(".conform_know").hide();
            }
            $(".conform_know").bind("click", function () {

                $(".master_conform").hide();

            });
            $(".conform_no").bind("click", function () {

                $(".master_conform").hide();

            });


        }
		
        function tabChange(data) {


            console.log(data)

            var morningStr = '';
            var afternoonStr = '';
            if (data.lstPlanDetail.length > 0) {
                for (var i = 0; i < data.lstPlanDetail.length; i++) {
                    if (data.lstPlanDetail[i].ActiveDesc != "") {
                        var Content = data.lstPlanDetail[i].ActiveDesc.split("\\n");
                        if (Content.length > 0) {
                            var contentStr = '';
                            for (var j = 0; j < Content.length; j++) {
                                if (Content[j] != '') {
                                    contentStr += '<p>' + Content[j] + '</p>'
                                }
                            }
                            morningStr += '<div  class="title_item" detail_id="' + data.lstPlanDetail[i].DetailUid + '" active_id="' + data.lstPlanDetail[i].ActiveTypeId + '"><div class="wkplan_morning_item pull_left" ><p >' + data.lstPlanDetail[i].ActiveTypeName + '</p></div><div class="wkplan_morning_detail pull_left">' + contentStr + '</div></div>'

                        }
                    } else {
                        morningStr += '<div  class="title_item" active_id="' + data.lstPlanDetail[i].ActiveTypeId + '"><div class="wkplan_morning_item pull_left" ><p >' + data.lstPlanDetail[i].ActiveTypeName + '</p></div><div class="wkplan_morning_detail pull_left" >&nbsp;&nbsp;无</div></div>'
                    }
                }

            } else {
				
                for (var i = 0; i < arrayAM.length; i++) {
                    morningStr += '<div  class="title_item" active_id="' + arrayAM[i].ActiveTypeId + '"><div class="wkplan_morning_item pull_left" ><p >' + arrayAM[i].ActiveTypeName + '</p></div><div class="wkplan_morning_detail pull_left" >&nbsp;&nbsp;无</div></div>'

                }



            }			
            if (data.lstPMPlanDetail.length > 0) {
                for (var i = 0; i < data.lstPMPlanDetail.length; i++) {
                    if (data.lstPMPlanDetail[i].ActiveDesc != "") {
                        var Content = data.lstPMPlanDetail[i].ActiveDesc.split("\\n");
                        if (Content.length > 0) {
                            var contentStr = '';
                            for (var j = 0; j < Content.length; j++) {
                                if (Content[j] != '') {
                                    contentStr += '<p>' + Content[j] + '</p>'
                                }
                            }
                            afternoonStr += '<div  class="title_item"  detail_id="' + data.lstPMPlanDetail[i].DetailUid + '" active_id="' + data.lstPMPlanDetail[i].ActiveTypeId + '"><div class="wkplan_morning_item pull_left" ><p >' + data.lstPMPlanDetail[i].ActiveTypeName + '</p></div><div class="wkplan_morning_detail pull_left">' + contentStr + '</div></div>'

                        }
                    } else {
                        afternoonStr += '<div  class="title_item" active_id="' + data.lstPMPlanDetail[i].ActiveTypeId + '"><div class="wkplan_morning_item pull_left" ><p >' + data.lstPMPlanDetail[i].ActiveTypeName + '</p></div><div class="wkplan_morning_detail pull_left" >&nbsp;&nbsp;无</div></div>'
                    }


                }

            } else {
                for (var i = 0; i < arrayPM.length; i++) {
                    afternoonStr += '<div  class="title_item" active_id="' + arrayPM[i].ActiveTypeId + '"><div class="wkplan_morning_item pull_left" ><p >' + arrayPM[i].ActiveTypeName + '</p></div><div class="wkplan_morning_detail pull_left" >&nbsp;&nbsp;无</div></div>'

                }

            }





            $("#morning_content").html(morningStr);
            $("#after_content").html(afternoonStr);
            count_height_size();


            // 重新绑定添加内容事件
            $(".wkplan_morning_detail").unbind("click");
            $(".wkplan_morning_detail").bind("click", function () {
                // 判断是否是加号,如果有内容，则需要把内容带过去  编辑修改 删除;
                // alert($(this).parent().index())

                // 判断是上午还是下午的记录

                if ($("#start").val() == '' || $("#end").val() == '') {
                    masterShow("开始或结束时间不能为空", "alert");
                    return false;
                }
                detail_uid = $(this).parents(".title_item").attr("detail_id");
                active_uid = $(this).parents(".title_item").attr("active_id");
                if ($(this).parents(".wkplan_morning_content").attr("id") == 'morning_content') {
                    isMorning = true;
                    itemIndex = $(this).parent().index();
                    titleItemName = $(this).prev().find("p").html().trim();
                    activeDayIndex = $(".wkplan_tab").find(".active").index();


                } else {
                    isMorning = false;
                    itemIndex = $(this).parent().index();
                    titleItemName = $(this).prev().find("p").html().trim();
                    activeDayIndex = $(".wkplan_tab").find(".active").index();

                }


                if ($(this).hasClass("no_content")) {
                    var initStr = '<li ><i class="item_index pull_left">1</i><input type="text" placeholder="填写内容" maxlength="30" class="wk_item_text pull_left"><span class="text_max_length">0/30</span><span class="del_item pull_left"></span></li><li><i  class="item_index pull_left">2</i><input type="text" placeholder="填写内容" maxlength="30" class="wk_item_text pull_left"><span class="text_max_length">0/30</span><span class="del_item pull_left"></span></li>';
                    $("#item_detail").html(initStr);
                    $("#wkplan_title_detail_master").show();

                } else {
                    var contentList = [];
                    $(this).find("p").each(function () {
                        contentList.push($(this).html().trim());
                    })

                    var str = '';
                    for (var i = 0; i < contentList.length; i++) {
                        str += '<li ><i class="item_index pull_left">' + (i + 1) + '</i><input type="text" placeholder="填写内容" maxlength="30" class="wk_item_text pull_left" value="' + contentList[i] + '"><span class="text_max_length">' + contentList[i].length + '/30</span><span class="del_item pull_left"></span></li>'
                    }
                    $("#item_detail").html(str);
                    $("#wkplan_title_detail_master").show();
                }

                //绑定input
                $(".wk_item_text ").bind("input prototypechange", function () {
                    $(this).val($(this).val().replace(/\"/g, "").replace(/\;/g, "").replace(/\|/g, "").trim());
                    $(this).next().html($(this).val().length + "/" + $(this).attr("maxlength"));

                })
                //删除
                $(".del_item").unbind("click");
                $(".del_item").bind("click", function () {
                    var _this = $(this);

                    _this.parent().remove();

                    $(".item_index").each(function () {
                        $(this).html($(this).parent().index() + 1);
                    })

                });

            });
        }


        $(".wkplan_edit_cancel ").on("click", function () {

            window.location.href = "<?php  echo $this->createMobileUrl('tzjhlist', array('schoolid' => $schoolid), true)?>";

         })

</script>
<?php  } ?>
 <script type="text/javascript">
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		$("#titlebar_bg").hide();
		document.title="<?php  echo date('m月d日',$palan['start'])?>-<?php  echo date('m月d日',$palan['end'])?>";
	}
}, 100);


</script>