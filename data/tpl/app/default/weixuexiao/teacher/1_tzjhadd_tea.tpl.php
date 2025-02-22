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
	<title><?php  if($operation == 'img') { ?>图片模式周计划<?php  } ?><?php  if($operation == 'word') { ?>手动添加周计划<?php  } ?></title>
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
</style>
<body>
<div class="All">
	<div class="wkplan_timeselect">
		<div class="wkplan_startime pull_left">
			<label>起<input placeholder="请选择时间" type="date" class="laydate-icon" value="<?php  if($palan['start']) { ?><?php  echo date('Y-m-d',$palan['start'])?><?php  } ?>" id="start" /></label>
		</div>
		<div class="wkplan_endtime pull_right">
			<label>止<input placeholder="请选择时间" type="date" class="laydate-icon" value="<?php  if($palan['end']) { ?><?php  echo date('Y-m-d',$palan['end'])?><?php  } ?>" id="end" /></label>
		</div>
	</div>
	<?php  if($operation == 'img') { ?>
	<div class="wkplan_content">
		<div class="wkplan_content_wrap">
			<div class="wkplan_inner">
				<span class="wkplan_add_pic">
					点击添加图片
				</span>
				<div class="wkplan_content_detail" style="opacity:0;display:block">
					<img src="<?php  echo tomedia($palan['picrul'])?>" class="wkplan_picture">
					<div class="change_wkplan_pic" >
						<span>替换照片</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php  } ?>
	<?php  if($operation == 'word') { ?>
	<div style="height: 0.80rem;"></div>
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
		<!-- // 设置-->
		<div class="wkplan_title_master" id="wkplan_title_master">
			<div class="title_set_box">
				<div class="title_set_text">
					<div class="set_title_morning">
						<p>上午</p>
						<ul id="morning">
						</ul>
						<div class="add_item_btn">
							<span>增加活动项</span>
						</div>
					</div>
				</div>
			</div>

			<div class="title_set_box">
				<div class="title_set_text">
					<div class="set_title_morning">
						<p>下午</p>
						<ul id="afternoon">
						</ul>
						<div class="add_item_btn">
							<span>增加活动项</span>
						</div>
					</div>
				</div>
			</div>
			<div style="height: 0.8rem;"></div>
			<div class="wkplan_btn_wrap" class="text_center">
				<div class="cancel_btn wkplan_btn">取消</div>
				<div class="conform_btn wkplan_btn" id="item_conform_btn">确定</div>
			</div>
			<div style="height: 0.8rem;"></div>
		</div>

		<!-- // 具体内容-->
		<div class="wkplan_title_master" id="wkplan_title_detail_master">
			<div class="title_set_box">
				<div class="title_set_text">
					<div class="set_title_morning">
						<ul id="item_detail">
							<li>
								<i class="item_index pull_left">1</i><input type="text" placeholder="填写内容" maxlength="30" class="wk_item_text pull_left"><span class="text_max_length">0/30</span><span class="del_item pull_left"></span>
							</li>
							<li>
								<i class="item_index pull_left">2</i><input type="text" placeholder="填写内容" maxlength="30" class="wk_item_text pull_left"><span class="text_max_length">0/30</span><span class="del_item pull_left"></span>
							</li>
						</ul>
						<div class="add_item_btn">
							<span>填写内容项</span>
						</div>
					</div>
				</div>
			</div>
			<div style="height: 0.8rem;"></div>
			<div class="wkplan_btn_wrap" class="text_center">
				<div class="cancel_btn wkplan_btn">取消</div>
				<div class="conform_btn wkplan_btn" id="content_conform_btn">确定</div>
			</div>
			<div style="height: 0.8rem;"></div>
		</div>

		<div class="master_conform">
			<div class="wk_style_inner">
				<div class="conform_box">
					<p class="conform_text">
					</p>
					<div class="conform_btn_wrap">
						<div class="conform_select">
							<div class="pull_left conform_no text_center">取消</div>
							<div class="pull_right conform_ok text_center">确定</div>
						</div>
						<div class="conform_know text_center">
							我知道了
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
	<div style="height: 0.80rem;"></div>
	<div style="height: 0.80rem;"></div>
	<?php  if($id) { ?>
	<div class="wkplan_footer" id ="bjbox">
		<ul class="wk_style_inner edit">
			<li class="webkit_item del_wkplan">删除</li>
			<li class="webkit_item edit_wkplan"><a id="bianji" class="edit_link" style="display: inline-block; width: 100%; height: 100%; color: #06c1ae">编辑</a></li>
		</ul>
	</div>
	<?php  } else { ?>
	<div class="wkplan_footer">
		<span class="wkset_public wkset_public_default pull_left">保存后群发</span>
		<?php  if($operation == 'word') { ?><span class="pull_left wkplan_table_set" id="wkplan_table_set" style="margin-left:0.4rem">设置</span><?php  } ?>
		<span class="wkplan_send text_center pull_right" style="margin-right:0.4rem">保存</span>
	</div>
	<?php  } ?>
	<div class="wkplan_footer" id ="bcbox" style="display:none">
		<span class="wkset_public wkset_public_default pull_left">保存后群发</span>
		<?php  if($operation == 'word') { ?><span class="pull_left wkplan_table_set" id="wkplan_table_set" style="margin-left:0.4rem">设置</span><?php  } ?>
		<span class="wkplan_send text_center pull_right" style="margin-right:0.4rem">保存</span>
	</div>
	<div class="clear"></div>
</div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<?php  if($operation == 'img') { ?>
<script type="text/javascript">
    //*******************************************************************************************************************************************************//
    //*******************************************************************************************************************************************************//
    //*******************************************************************************************************************************************************//
    //*******************************************************************************************************************************************************//
    //选择图片
    $("#bianji").on("click", function () {
        $("#bjbox").css("display","none");
        $("#bcbox").css("display","block");
    })
    $(".del_wkplan").on("click", function () {
        var ajaxData = {};
        var PlanUid = $("#gpcplanuid").val();
        jConfirm('确定要删除吗？', '周计划', function (r) {
            if (r) {
                $.ajax({
                    url: '<?php  echo $this->createMobileUrl('dongtaiajax', array('weid' => $weid,'schoolid' => $schoolid,'bj_id' => $bj_id,'op' => 'DeleteWeekPlanByPlanUid'))?>',
                    type: 'post',
                    dataType:'json',
                    data: { sPlanUid: PlanUid, sPlanType: "table" },
                    success: function (data) {
                        var JsonResultData = eval(data);
                        jTips(JsonResultData.Result, function () {
                            if (JsonResultData.Status == "1") {
                                location.href = "<?php  echo $this->createMobileUrl('tzjhlist', array('schoolid' => $schoolid), true)?>";
                            }
                        });
                    },
                    error: function () {
                        JTips(JsonResultData.Result);
                    }
                })
            }
        });

    });
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
    $(".wkplan_inner").on("click", function () {
        wx.chooseImage({
            count: 1, // 默认9
            sizeType: ['compressed'], // 可以指定是原图还是压缩图，默认二者都有
            sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
            success: function (res) {
                //ajax_start_loading("上传中");
                var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
                var last_index = localIds.length - 1;
                var last_img_id = localIds[last_index];
                wx.uploadImage({
                    localId: last_img_id, // 需要上传的图片的本地ID，由chooseImage接口获得
                    isShowProgressTips: 1, // 默认为1，显示进度提示
                    success: function (res) {
                        var serverId = res.serverId; // 返回图片的服务器端ID
                        var data = {
                            'serverId': serverId,
                            'PlanUid': PlanUid,
                            'tid': '<?php  echo $it['tid'];?>',
                        };
                        $.ajax({
                            url: '<?php  echo $this->createMobileUrl('dongtaiajax', array('weid' => $weid,'schoolid' => $schoolid,'bj_id' => $bj_id,'op' => 'updatabypic'))?>',
                            type: 'POST',
                            dataType: 'json',
                            data: data,
                            success: function (msg) {
                                // ajax_stop_loading();
                                if (msg.status == 1) {
                                    $(".wkplan_picture").attr('src', msg.data);
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
                                    // $("#recipe_picture").val(msg.data);
                                    jTips("恭喜，周计划上传成功！");
                                }
                                else {
                                    jTips("抱歉，周计划上传失败！");
                                }
                            },
                            error: function () {
                                // ajax_stop_loading();
                                jTips('抱歉，网络异常，请稍后再试。');
                            }
                        });
                    }
                });
            }
        });


    })
    //显示动态
    $(".wkset_public").on("click", function () {

        if ($(this).hasClass("wkset_public_active")) {
            $(this).removeClass("wkset_public_active")
        } else {
            $(this).addClass("wkset_public_active")
        }


    })
    //发送
    $(".wkplan_send").on("click", function () {


        var ajaxData = {};

        ajaxData.StartDate = $("#start").val();//开始时间
        ajaxData.EndDate = $("#end").val();//结束时间
        ajaxData.PlanType = "Image";
        ajaxData.PlanImage = $(".wkplan_picture").attr("src");//图片
        ajaxData.IsPublish = $(".wkset_public").hasClass("wkset_public_active") ? "Y" : "N";//是否显示动态
        //ajaxData.wkplanUid//自己html添加一个隐藏域放进去
        ajaxData.PlanUid = "<?php  echo $PlanUid;?>";
        ajaxData.Type = "0";
        if (ajaxData.StartDate == "") {
            jTips("选择开始时间")
            return false

        } if (ajaxData.EndDate == "") {
            jTips("选择结束时间")
            return false
        }if (ajaxData.PlanImage == '') {
            jTips("请选择图片")
            return false
        }
        if (new Date(ajaxData.StartDate).getTime() > new Date(ajaxData.EndDate).getTime()) {

            jTips("结束时间不能小于开始时间")
            return false
        }
        var JsonData = {};
        JsonData.JSON = JSON.stringify(ajaxData);
        $.ajax({
            url: '<?php  echo $this->createMobileUrl('dongtaiajax', array('weid' => $weid,'schoolid' => $schoolid,'bj_id' => $bj_id,'tid' => $it['tid'],'userid' =>$it['id'], 'op' => 'savedatabypicforplan'))?>',
            type: 'post',
            dataType: "json",
            data: JsonData,
            success: function (data) {
                var JsonData = eval(data);
                jTips(JsonData.Result);
                if (JsonData.Status == "1")
                {
                    location.href = "<?php  echo $this->createMobileUrl('tzjhlist', array('schoolid' => $schoolid), true)?>";
                }
            }, error: function () {

            }
        })
    })

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
    $(".wkplan_edit_cancel ").on("click",function(){
        window.location.href = "<?php  echo $this->createMobileUrl('tzjhlist', array('schoolid' => $schoolid), true)?>";
    })
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
    $(".del_wkplan").on("click", function () {
        var ajaxData = {};
        var PlanUid = $("#gpcplanuid").val();
        jConfirm('确定要删除吗？', '周计划', function (r) {
            if (r) {
                $.ajax({
                    url: '<?php  echo $this->createMobileUrl('dongtaiajax', array('weid' => $weid,'schoolid' => $schoolid,'bj_id' => $bj_id,'op' => 'DeleteWeekPlanByPlanUid'))?>',
                    type: 'post',
                    dataType:'json',
                    data: { sPlanUid: PlanUid, sPlanType: "table" },
                    success: function (data) {
                        var JsonResultData = eval(data);
                        jTips(JsonResultData.Result, function () {
                            if (JsonResultData.Status == "1") {
                                location.href = "<?php  echo $this->createMobileUrl('tzjhlist', array('schoolid' => $schoolid), true)?>";
                            }
                        });
                    },
                    error: function () {
                        JTips(JsonResultData.Result);
                    }
                })
            }
        });

    });
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
            $("title").html("编辑周计划");
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
    //发送
    $(".wkplan_send").on("click", function () {
        var ajaxData = {};
        ajaxData.StartDate = $("#start").val();//开始时间
        ajaxData.EndDate = $("#end").val();//结束时间
        ajaxData.IsPublish = $(".wkset_public").hasClass("wkset_public_active") ? "Y" : "N";//是否显示动态
        ajaxData.PlanUid = $("#hiddenPlanUid").val();//自己html添加一个隐藏域放进去
        //新增上午下午活动项目
        ajaxData.lstPMPlanType = [];
        $(".title_item").each(function () {
            var obj = {};
            var itemName = $(this).find(".wkplan_morning_item p").html();
            obj.ActiveTypeName = itemName;
            if ($(this).parents("ul").attr("id") == 'morning_content') {
                obj.TimeType = 'AM';
            } else {
                obj.TimeType = 'PM';
            }
            obj.ActiveTypeId = $(this).attr("active_id");
            ajaxData.lstPMPlanType.push(obj);

        })
        ajaxData.Type = "0";
        if (ajaxData.StartDate == "") {
            masterShow("选择开始时间", "alert");
            return false

        } if (ajaxData.EndDate == "") {
            masterShow("选择结束时间", "alert");
            // alert("选择结束时间")
            return false
        }
        if (new Date(ajaxData.StartDate).getTime() > new Date(ajaxData.EndDate).getTime()) {
            masterShow("结束时间不能小于开始时间", "alert");
            // alert("结束时间不能小于开始时间")
            return false
        }
        var JsonData = {};
        JsonData.JSON = JSON.stringify(ajaxData);
        $.ajax({
            url: '<?php  echo $this->createMobileUrl('dongtaiajax', array('weid' => $weid,'schoolid' => $schoolid,'bj_id' => $bj_id,'tid' => $it['tid'],'userid' =>$it['id'],'op' =>'SendPlanWeek'))?>',
            type: 'post',
            dataType: "json",
            data: JsonData,
            success: function (data) {
                var JsonResultData = eval(data);
                jTips(JsonResultData.Result);
                if (JsonResultData.Status == "1") {
                    location.href = "<?php  echo $this->createMobileUrl('tzjhlist', array('schoolid' => $schoolid), true)?>";
                } else {
                    jTips(JsonResultData.Result);
                }

            }, error: function () {
            }
        })
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
    // 新增栏目
    $("#wkplan_title_master .add_item_btn").on("click", function () {
        var newItem = $('<li ><i class="item_index pull_left"></i><input type="text" placeholder="活动名称"maxlength="4" class="wk_item_text pull_left"><span class="text_max_length">0/4</span><span class="del_item pull_left" hastext="0"></span></li>');
        $(this).prev().append(newItem);
        //绑定输入文字
        $(".wk_item_text ").bind("input prototypechange", function () {
            $(this).next().html($(this).val().length + "/" + $(this).attr("maxlength"));
        })
        $(this).prev().find("li").each(function () {
            var _this = $(this);
            _this.find("i").html(parseInt(_this.index()) + 1);
        })
        $(".del_item").unbind("click");
        $(".del_item").bind("click", function () {
            var _this = $(this);
            _this.parent().remove();
            $(".item_index").each(function () {
                $(this).html($(this).parent().index() + 1);
            })
        })
    })
    //确定，取消

    $("#wkplan_title_master .conform_btn").on("click", function () {
        var _this = $(this);
        if (_this.hasClass("hasSend")) {
            return false;
        }
        _this.addClass("hasSend");
        var ajaxData = {};
        var ajaxCommitData = {}
        ajaxData.itemMorning = [];
        ajaxData.itemAfternoon = [];
        ajaxCommitData.lstPlanDetail = [];
        var boolTxt = true;
        $("#morning").find("li").each(function () {
            var obj = {};
            var commitData = {};
            commitData.ActiveTypeName = $(this).find(".wk_item_text").val().trim();
            obj.itemName = $(this).find(".wk_item_text").val().trim();
            obj.hasText = $(this).find(".del_item ").attr("hastext");
            obj.contents = $(this).attr("data-content") ? $(this).attr("data-content").split(",") : [];
            obj.activeId = $(this).attr("active_id") ? $(this).attr("active_id") : '';
            commitData.ActiveTypeId = $(this).attr("active_id") ? $(this).attr("active_id") : '';
            commitData.ActiveTypeIcon = "AM";//存储上午还是下午
            if (obj.itemName == '') {

                boolTxt = false;
                masterShow("活动名称不能为空", "alert");
                _this.removeClass("hasSend");
                return false;
            }
            ajaxCommitData.lstPlanDetail.push(commitData);
            ajaxData.itemMorning.push(obj);

        })
        $("#afternoon").find("li").each(function () {
            var obj = {};
            var commitData = {}
            obj.itemName = $(this).find(".wk_item_text").val().trim();
            commitData.ActiveTypeName = $(this).find(".wk_item_text").val().trim();
            commitData.ActiveTypeId = $(this).attr("active_id") ? $(this).attr("active_id") : '';
            obj.hasText = $(this).find(".del_item ").attr("hastext");
            obj.contents = $(this).attr("data-content") ? $(this).attr("data-content").split(",") : [];
            obj.activeId = $(this).attr("active_id") ? $(this).attr("active_id") : '';
            if (obj.itemName == '') {
                boolTxt = false;
                masterShow("活动名称不能为空", "alert");
                _this.removeClass("hasSend");
                return false;
            }
            commitData.ActiveTypeIcon = "PM";
            ajaxCommitData.lstPlanDetail.push(commitData);
            ajaxData.itemAfternoon.push(obj);

        })
        ajaxCommitData.PlanUid = $("#hiddenPlanUid").val();
        ajaxCommitData.weid = $("#weid").val();
        ajaxCommitData.bj_id = $("#bj_id").val();
        ajaxCommitData.schoolid = $("#schoolid").val();
        if (boolTxt == false) {
            masterShow("活动名称不能为空", "alert");
            _this.removeClass("hasSend");
            return false;
        }
        var JsonData = {};
        JsonData.JSON = JSON.stringify(ajaxCommitData);
        // 全部为空
        $.ajax({
            url: '<?php  echo $this->createMobileUrl('dongtaiajax', array('weid' => $weid,'schoolid' => $schoolid,'bj_id' => $bj_id,'op' =>'UpdateTypeByActiveId'))?>',
            type: 'post',
            dataType: "json",
            data: JsonData,
            success: function (data) {
                var JsonResultData = eval(data);
                $("#hiddenPlanUid").val(JsonResultData.PlanUid);
                // alert(JsonResultData.Result);
                _this.removeClass("hasSend");
                if (JsonResultData.Status == "1") {
                    //下面的成功回调
                    var morningTitleStr = '';
                    var afternoonTitleStr = '';
                    var AMActiveId = JsonResultData.AMActiveId.split(",");
                    var PMActiveId = JsonResultData.PMActiveId.split(",");
                    // console.log(ajaxData.itemMorning[0].contents.length);
                    for (var i = 0; i < ajaxData.itemMorning.length; i++) {
                        if (ajaxData.itemMorning[i].hasText == 1 || ajaxData.itemMorning[i].hasText == '1') {
                            var detailStr = '';
                            for (var j = 0; j < ajaxData.itemMorning[i].contents.length; j++) {
                                detailStr += '<p>' + ajaxData.itemMorning[i].contents[j] + '</p>';
                            }
                            morningTitleStr += '<div  class="title_item" active_id="' + AMActiveId[i] + '"><div class="wkplan_morning_item pull_left" ><p >' + ajaxData.itemMorning[i].itemName + '</p></div><div class="wkplan_morning_detail pull_left">' + detailStr + '</div></div>';
                        } else {
                            morningTitleStr += '<div  class="title_item" active_id="' + AMActiveId[i] + '"><div class="wkplan_morning_item pull_left" ><p >' + ajaxData.itemMorning[i].itemName + '</p></div><div class="wkplan_morning_detail pull_left no_content" ></div></div>';
                        }
                    }
                    for (var i = 0; i < ajaxData.itemAfternoon.length; i++) {
                        if (ajaxData.itemAfternoon[i].hasText == 1 || ajaxData.itemAfternoon[i].hasText == '1') {
                            var detailStr = '';
                            for (var j = 0; j < ajaxData.itemAfternoon[i].contents.length; j++) {
                                detailStr += '<p>' + ajaxData.itemAfternoon[i].contents[j] + '</p>';
                            }
                            afternoonTitleStr += '<div  class="title_item" active_id="' + PMActiveId[i] + '"><div class="wkplan_morning_item pull_left" ><p >' + ajaxData.itemAfternoon[i].itemName + '</p></div><div class="wkplan_morning_detail pull_left">' + detailStr + '</div></div>';
                        } else {
                            afternoonTitleStr += '<div  class="title_item" active_id="' + PMActiveId[i] + '"><div class="wkplan_morning_item pull_left" ><p >' + ajaxData.itemAfternoon[i].itemName + '</p></div><div class="wkplan_morning_detail pull_left no_content" ></div></div>';
                        }
                    }
                    $("#morning_content").html(morningTitleStr);
                    $("#after_content").html(afternoonTitleStr);
                    $("#wkplan_title_master").hide();
                    count_height_size();
                    // 重新绑定添加内容事件
                    $(".wkplan_morning_detail").unbind("click");
                    $(".wkplan_morning_detail").bind("click", function () {
                        // 判断是否是加号,如果有内容，则需要把内容带过去  编辑修改 删除;
                        // alert($(this).parent().index())
                        active_uid = $(this).parents(".title_item").attr("active_id");
                        detail_uid = $(this).parents(".title_item").attr("detail_id");
                        // 判断是上午还是下午的记录
                        if ($("#start").val() == '' || $("#end").val() == '') {
                            masterShow("开始或结束时间不能为空", "alert");
                            return false;
                        }
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
                            //$(this).val($(this).val().replace(/\"/g, "").replace(/\;/g, "").replace(/\|/g, "").trim());
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
                        })
                    })
                }
            }, error: function () {
                _this.removeClass("hasSend");
            }
        })
    })

    $(".cancel_btn").on("click", function () {
        $(this).parents(".wkplan_title_master").hide();
        //window.location.reload();
    })
    //设置上午下午的项目
    $("#wkplan_table_set").on("click", function () {
        var itemList = {};
        itemList.morningItem = [];
        itemList.afterItem = [];
        $("#morning_content").find(".wkplan_morning_item").each(function () {
            var obj = {};
            obj.itemName = $(this).find("p").html();
            obj.hasText = $(this).next().find("p").length > 0 ? 1 : 0;
            obj.contents = '';
            obj.activeId = $(this).parent().attr("active_id");
            if (obj.hasText > 0) {
                var arr = [];
                $(this).next().find("p").each(function () {
                    arr.push($(this).html());
                })
                obj.contents = arr.join(",")
            }
            itemList.morningItem.push(obj);
        })

        $("#after_content").find(".wkplan_morning_item").each(function () {
            var obj = {};
            obj.itemName = $(this).find("p").html();
            obj.hasText = $(this).next().find("p").length > 0 ? 1 : 0;
            obj.contents = '';
            obj.activeId = $(this).parent().attr("active_id");
            if (obj.hasText > 0) {
                var arr = [];
                $(this).next().find("p").each(function () {
                    arr.push($(this).html());
                })
                obj.contents = arr.join(",")
            }
            itemList.afterItem.push(obj);
        })
        var morningStr = '';
        var afterStr = '';
        for (var i = 0; i < itemList.morningItem.length; i++) {
            morningStr += '<li active_id="' + itemList.morningItem[i].activeId + '" data-content="' + itemList.morningItem[i].contents + '"><i class="item_index pull_left">' + (i + 1) + '</i><input type="text" placeholder="活动名称"maxlength="4" class="wk_item_text pull_left" value="' + itemList.morningItem[i].itemName + '"><span class="text_max_length">' + itemList.morningItem[i].itemName.length + '/4</span><span class="del_item pull_left" hastext="' + itemList.morningItem[i].hasText + '"></span></li>'
        }
        for (var i = 0; i < itemList.afterItem.length; i++) {
            afterStr += '<li active_id="' + itemList.afterItem[i].activeId + '" data-content="' + itemList.afterItem[i].contents + '"><i class="item_index pull_left">' + (i + 1) + '</i><input type="text" placeholder="活动名称"maxlength="4" class="wk_item_text pull_left" value="' + itemList.afterItem[i].itemName + '"><span class="text_max_length">' + itemList.afterItem[i].itemName.length + '/4</span><span class="del_item pull_left" hastext="' + itemList.afterItem[i].hasText + '"></span></li>'
        }
        $("#morning").html($(morningStr));
        $("#afternoon").html($(afterStr));
        $("#wkplan_title_master").show();
        $(".wk_item_text ").bind("input prototypechange", function () {
            //$(this).val($(this).val().replace(/\"/g, "").replace(/\;/g, "").replace(/\|/g, "").trim());
            $(this).next().html($(this).val().length + "/" + $(this).attr("maxlength"));
        })
        // 初始化 删除按钮
        $(".del_item").on("click", function () {
            var _this = $(this);
            // 判断是否有填写内容;
            if ($(this).parents("ul").find("li").length > 1) {
                if (_this.attr("hastext") == 0 || _this.attr("hastext") == '0') {
                    //无值得时候
                    _this.parent().remove();
                } else {
                    // 弹窗
                    masterShow("确定要删除已填写内容吗？", "select", _this);
                }
                $(".item_index").each(function () {
                    $(this).html($(this).parent().index() + 1);
                })
            } else {
                masterShow("活动项至少需要保留一个", "alert", _this)
            }
        })
    })

    // 新增栏目内容
    $("#wkplan_title_detail_master .add_item_btn").on("click", function () {
        var newItem = $('<li data-contents=""><i class="item_index pull_left"></i><input type="text" placeholder="填写内容" maxlength="30" class="wk_item_text pull_left"><span class="text_max_length">0/30</span><span class="del_item pull_left"></span></li>');
        $(this).prev().append(newItem);
        //绑定输入文字
        $(".wk_item_text ").bind("input prototypechange", function () {
            //$(this).val($(this).val().replace(/\"/g, "").replace(/\;/g, "").replace(/\|/g, "").trim());
            $(this).next().html($(this).val().length + "/" + $(this).attr("maxlength"));

        })
        $(this).prev().find("li").each(function () {
            var _this = $(this);
            _this.find("i").html(parseInt(_this.index()) + 1);
        })
        $(".del_item").unbind("click");
        $(".del_item").bind("click", function () {
            var _this = $(this);
            _this.parent().remove();
            $(".item_index").each(function () {
                $(this).html($(this).parent().index() + 1);
            })
        })
    })
    //确定，取消,具体内容

    $("#wkplan_title_detail_master .conform_btn").on("click", function () {
        var _this = $(this);
        if (_this.hasClass("hasSend")) {
            return false;
        }
        _this.addClass("hasSend");
        var bol = true;
        var ajaxData = {};
        //星期几activeDayIndex (0-4)全局变量     上午下午isMorning(true false)//全局变量
        //itemIndex上午或者下午的第几个
        //是否还需要记录 相对应的活动项
        ajaxData.StartDate = $("#start").val();//开始时间
        ajaxData.EndDate = $("#end").val();//结束时间
        ajaxData.IsPublish = $(".wkset_public").hasClass("wkset_public_active") ? "Y" : "N";//是否显示动态
        ajaxData.WeekDay = parseInt($(".active").index()) + 1;
        ajaxData.TimeType = isMorning == true ? "AM" : "PM";
        ajaxData.PlanType = "Table";
        ajaxData.Type = "0";
        ajaxData.lstPlanDetail = [];
        ajaxData.PlanUid = $("#hiddenPlanUid").val();//自己html添加一个隐藏域放进去
        // var boolTxt = true;
        ajaxData.CurActiveId = active_uid;
        ajaxData.CurActiveName = titleItemName;
        ajaxData.CurDetailUid = detail_uid;
        if ($("#item_detail").find("li").length > 0) {
            $("#item_detail").find("li").each(function () {
                if ($(this).find(".wk_item_text").val() == '') {
                    bol = false;
                }
                var obj = {};
                obj.ActiveDesc = $(this).find(".wk_item_text").val().trim();
                obj.ActiveTypeName = titleItemName;
                obj.DetailUid = detail_uid;
                ajaxData.lstPlanDetail.push(obj);
            })

            if (bol == false) {
                masterShow("活动内容不能为空", "alert");
                _this.removeClass("hasSend");
                return false;
            }
        }

        var JsonData = {};
        JsonData.JSON = JSON.stringify(ajaxData);
        ///  保存数据
        $.ajax({
            url: '<?php  echo $this->createMobileUrl('dongtaiajax', array('schoolid' => $schoolid,'weid' => $weid, 'bj_id' => $bj_id, 'op' => 'SavePlanWeek'))?>',
            type: 'post',
            dataType: "json",
            data: JsonData,
            success: function (data) {
                // 请求成功回调
                console.log(ajaxData.lstPlanDetail);
                var JsonResultData = eval(data);
                jTips(JsonResultData.Result);
                _this.removeClass("hasSend");
                if (JsonResultData.Status == "1") {
                    $("#hiddenPlanUid").val(JsonResultData.PlanUid);
                    $("#hiddenDetailUid").val(JsonResultData.DetailUid);
                    if (ajaxData.lstPlanDetail.length > 0) {
                        var ele = isMorning ? $("#morning_content") : $("#after_content");
                        var pStr = '';
                        for (var i = 0; i < ajaxData.lstPlanDetail.length; i++) {
                            pStr += '<p>' + ajaxData.lstPlanDetail[i].ActiveDesc + '</p>'
                        }
                        ele.find(".title_item").eq(itemIndex).find(".wkplan_morning_detail").html(pStr).removeClass("no_content");
                        ele.find(".title_item").eq(itemIndex).attr("active_id", JsonResultData.ActiveId);
                    } else {
                        var ele = isMorning ? $("#morning_content") : $("#after_content");
                        ele.find(".title_item").eq(itemIndex).find(".wkplan_morning_detail").addClass("no_content").html('');
                        ele.find(".title_item").eq(itemIndex).attr("active_id", JsonResultData.ActiveId);

                    }
                    $("#wkplan_title_detail_master").hide();
                    count_height_size();
                }
            }, error: function () {
                _this.removeClass("hasSend");
            }
        })
    })

    $(".wk_item_text ").bind("input prototypechange", function () {
        //$(this).val($(this).val().replace(/\"/g, "").replace(/\;/g, "").replace(/\|/g, "").trim());
        $(this).next().html($(this).val().length + "/" + $(this).attr("maxlength"));

    })

    //编辑具体内容显示
    $(".wkplan_morning_detail").on("click", function () {
        // 判断是否是加号,如果有内容，则需要把内容带过去  编辑修改 删除;
        // alert($(this).parent().index())
        if ($("#start").val() == '' || $("#end").val() == '') {
            masterShow("开始或结束时间不能为空", "alert");
            return false;
        }
        active_uid = $(this).parents(".title_item").attr("active_id");
        detail_uid = $(this).parents(".title_item").attr("detail_id");
        console.log(detail_uid)
        // 判断是上午还是下午的记录
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
            //$(this).val($(this).val().replace(/\"/g, "").replace(/\;/g, "").replace(/\|/g, "").trim());
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
        })
    })

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
        //删除项目
        $(".conform_ok").bind("click", function () {
            var id = obj.parent().attr("detail_id");
            obj.parent().remove();
            $(".master_conform").hide();
            $(".item_index").each(function () {
                $(this).html($(this).parent().index() + 1);
            });
            $.ajax
            ({
                url: '/1046/WeekPlan/DeletePlanWeekByDetailUid',
                type: 'post',
                dataType: "json",
                data: { DetailUid: id },
                success: function (data) {
                    var JsonResultData = eval(data);
                    jTips(JsonResultData.Result);
                }
            });
        });
        $(".conform_know").bind("click", function () {
            $(".master_conform").hide();
        });
        $(".conform_no").bind("click", function () {
            $(".master_conform").hide();
        });
    }

    function tabChange(data) {
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
                    morningStr += '<div  class="title_item"  detail_id="' + data.lstPlanDetail[i].DetailUid + '" active_id="' + data.lstPlanDetail[i].ActiveTypeId + '"><div class="wkplan_morning_item pull_left" ><p >' + data.lstPlanDetail[i].ActiveTypeName + '</p></div><div class="wkplan_morning_detail pull_left no_content" ></div></div>'
                }
            }
        } else {
            for (var i = 0; i < arrayAM.length; i++) {
                morningStr += '<div  class="title_item"  active_id="' + arrayAM[i].ActiveTypeId + '"><div class="wkplan_morning_item pull_left" ><p >' + arrayAM[i].ActiveTypeName + '</p></div><div class="wkplan_morning_detail pull_left no_content" ></div></div>'
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
                    afternoonStr += '<div  class="title_item"  detail_id="' + data.lstPMPlanDetail[i].DetailUid + '" active_id="' + data.lstPMPlanDetail[i].ActiveTypeId + '"><div class="wkplan_morning_item pull_left" ><p >' + data.lstPMPlanDetail[i].ActiveTypeName + '</p></div><div class="wkplan_morning_detail pull_left no_content" ></div></div>'
                }
            }
        } else {
            for (var i = 0; i < arrayPM.length; i++) {
                afternoonStr += '<div  class="title_item" active_id="' + arrayPM[i].ActiveTypeId + '"><div class="wkplan_morning_item pull_left" ><p >' + arrayPM[i].ActiveTypeName + '</p></div><div class="wkplan_morning_detail pull_left no_content" ></div></div>'
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
                //$(this).val($(this).val().replace(/\"/g, "").replace(/\;/g, "").replace(/\|/g, "").trim());
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