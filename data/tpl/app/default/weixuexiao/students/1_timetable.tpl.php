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
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/idangerous.swiper.min.js"></script>
<style type="text/css">
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); }
.header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } 
.header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } 
.header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } 
.mainColor { background: #06c1ae !important; } 
.header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
.header .m a i {float: left;margin: 23px 0 0 5px;width: 0;height: 0;border-width: 6px 6px 0;border-style: solid;border-color: white transparent transparent;position: absolute;}
.food_menu_list tr td:first-child {background-color: transparent;width: 5px;background: url(<?php echo OSSURL;?>public/mobile/img/week_diet_p3.png) repeat-y;background-size: 6px;border-bottom: 0;border-top: 0;}
.food_menu_list tr td:last-child {background-color: transparent;width: 6px;background: url(<?php echo OSSURL;?>public/mobile/img/week_diet_p4.png) repeat-y;background-size: 6px;border-bottom: 0;border-top: 0;}
.day_div .last_day {background: url(<?php echo OSSURL;?>public/mobile/img/last_day.png) no-repeat center;background-size: 12px;height: 40px;width: 30px;position: absolute;left: 0px;top: 0px;z-index: 2;background-color: #fff;}
.day_div .next_day {background: url(<?php echo OSSURL;?>public/mobile/img/next_day.png) no-repeat center;background-size: 12px;height: 40px;width: 30px;position: absolute;right: 0px;top: 0px;z-index: 2;background-color: #fff;}
.food_menu_list tr td:nth-child(2) {width: 100px;text-align: center;vertical-align: middle;}
.food_img_box {width: 100px;border-right: 1px solid #e5e5e5;text-align: center;margin: 10px 0;}
</style> 
<link rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/idangerous.swiper.css">

<link href="<?php echo OSSURL;?>public/mobile/css/imagebig.css" rel="stylesheet" type="text/css" />
<title><?php  echo $school['title'];?></title>
</head>
<body>
 <div id="titlebar" class="header mainColor">
	<div class="l">
		<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a>
	</div>
	<div class="m">
		<a id="Changesf">
			<span style="font-size: 18px">课程表</span>
		</a>
	</div>
</div>
<div class="weekly_diet">
    <div class="day_div">
        <div class="last_day left_btn">&nbsp;</div>
        <!--<div class="in_day">
                  <ul>
                     <li>10月21日</li>
                     <li>10月22日</li>
                     <li>10月23日</li>
                  </ul>
              </div>-->
        <div class="head_container" id="head_container">
            <!-- <div class="left_btn">《</div>
                <div class="right_btn">》</div>-->
            <div class="swiper-container">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="title_swiper" time_str=""></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="title_swiper" time_str=""></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="title_swiper" time_str=""></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="title_swiper" time_str=""></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="title_swiper active_diet" time_str=""></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="title_swiper" time_str=""></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="title_swiper" time_str=""></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="title_swiper" time_str=""></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="title_swiper" time_str=""></div>
                    </div>
                </div>

                <div class="pagination"></div>
            </div>
        </div>
        <div class="next_day right_btn">&nbsp;</div>
    </div>
    <!--选择时日-->
<div class="weekly_diet_date">  
    <div class="content_p10">
		<table class="food_menu_list" id="Boxs">
			<?php  if($sd_1) { ?>
			<tr>
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" src="<?php  if($km_1['icon']) { ?><?php  echo tomedia($km_1['icon'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>">
						<div class="food_img_text"><?php  echo $km_1['sname'];?></div>
					</div>
				</td>
				<td class="food_name_box"><?php  echo $sd_1['sname'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $km_1['sname'];?></td>
				<td></td>
			</tr>
			<?php  } ?>
			<?php  if($sd_2) { ?>
			<tr>
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" src="<?php  if($km_2['icon']) { ?><?php  echo tomedia($km_2['icon'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>">
						<div class="food_img_text"><?php  echo $km_2['sname'];?></div>
					</div>
				</td>
				<td class="food_name_box"><?php  echo $sd_2['sname'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $km_2['sname'];?></td>
				<td></td>
			</tr>
			<?php  } ?>
			<?php  if($sd_3) { ?>
			<tr>
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" src="<?php  if($km_3['icon']) { ?><?php  echo tomedia($km_3['icon'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>">
						<div class="food_img_text"><?php  echo $km_3['sname'];?></div>
					</div>
				</td>
				<td class="food_name_box"><?php  echo $sd_3['sname'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $km_3['sname'];?></td>
				<td></td>
			</tr>
			<?php  } ?>
			<?php  if($sd_4) { ?>
			<tr>
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" src="<?php  if($km_4['icon']) { ?><?php  echo tomedia($km_4['icon'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>">
						<div class="food_img_text"><?php  echo $km_4['sname'];?></div>
					</div>
				</td>
				<td class="food_name_box"><?php  echo $sd_4['sname'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $km_4['sname'];?></td>
				<td></td>
			</tr>
			<?php  } ?>
			<?php  if($sd_5) { ?>
			<tr>
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" src="<?php  if($km_5['icon']) { ?><?php  echo tomedia($km_5['icon'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>">
						<div class="food_img_text"><?php  echo $km_5['sname'];?></div>
					</div>
				</td>
				<td class="food_name_box"><?php  echo $sd_5['sname'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $km_5['sname'];?></td>
				<td></td>
			</tr>
			<?php  } ?>
			<?php  if($sd_6) { ?>
			<tr>
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" src="<?php  if($km_6['icon']) { ?><?php  echo tomedia($km_6['icon'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>">
						<div class="food_img_text"><?php  echo $km_6['sname'];?></div>
					</div>
				</td>
				<td class="food_name_box"><?php  echo $sd_6['sname'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $km_6['sname'];?></td>
				<td></td>
			</tr>
			<?php  } ?>
			<?php  if($sd_7) { ?>
			<tr>
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" src="<?php  if($km_7['icon']) { ?><?php  echo tomedia($km_7['icon'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>">
						<div class="food_img_text"><?php  echo $km_7['sname'];?></div>
					</div>
				</td>
				<td class="food_name_box"><?php  echo $sd_7['sname'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $km_7['sname'];?></td>
				<td></td>
			</tr>
			<?php  } ?>
			<?php  if($sd_8) { ?>
			<tr>
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" src="<?php  if($km_8['icon']) { ?><?php  echo tomedia($km_8['icon'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>">
						<div class="food_img_text"><?php  echo $km_8['sname'];?></div>
					</div>
				</td>
				<td class="food_name_box"><?php  echo $sd_8['sname'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $km_8['sname'];?></td>
				<td></td>
			</tr>
			<?php  } ?>
			<?php  if($sd_9) { ?>
			<tr>
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" src="<?php  if($km_9['icon']) { ?><?php  echo tomedia($km_9['icon'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>">
						<div class="food_img_text"><?php  echo $km_9['sname'];?></div>
					</div>
				</td>
				<td class="food_name_box"><?php  echo $sd_9['sname'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $km_9['sname'];?></td>
				<td></td>
			</tr>
			<?php  } ?>
			<?php  if($sd_10) { ?>
			<tr>
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" src="<?php  if($km_10['icon']) { ?><?php  echo tomedia($km_10['icon'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>">
						<div class="food_img_text"><?php  echo $km_10['sname'];?></div>
					</div>
				</td>
				<td class="food_name_box"><?php  echo $sd_10['sname'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $km_10['sname'];?></td>
				<td></td>
			</tr>
			<?php  } ?>
			<?php  if($sd_11) { ?>
			<tr>
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" src="<?php  if($km_11['icon']) { ?><?php  echo tomedia($km_11['icon'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>">
						<div class="food_img_text"><?php  echo $km_11['sname'];?></div>
					</div>
				</td>
				<td class="food_name_box"><?php  echo $sd_11['sname'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $km_11['sname'];?></td>
				<td></td>
			</tr>
			<?php  } ?>	
			<?php  if($sd_12) { ?>
			<tr>
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" src="<?php  if($km_12['icon']) { ?><?php  echo tomedia($km_12['icon'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>">
						<div class="food_img_text"><?php  echo $km_12['sname'];?></div>
					</div>
				</td>
				<td class="food_name_box"><?php  echo $sd_12['sname'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $km_12['sname'];?></td>
				<td></td>
			</tr>
			<?php  } ?>			
		</table>
		<table class="food_menu_list" id="Box" style="display:none;">
			<tr id ="Box1" style="display:none;">
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" id ="aa" src="">
						<div class="food_img_text" id ="aaa"></div>
					</div>
				</td>
				<td class="food_name_box" id ="a"></td>
				<td></td>
			</tr>
			<tr id ="Box2" style="display:none;">
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" id ="bb" src="">
						<div class="food_img_text" id ="bbb"></div>
					</div>
				</td>
				<td class="food_name_box" id ="b"></td>
				<td></td>
			</tr>			
			<tr id ="Box3" style="display:none;">
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" id ="cc" src="">
						<div class="food_img_text" id ="ccc"></div>
					</div>
				</td>
				<td class="food_name_box" id ="c"></td>
				<td></td>
			</tr>		
			<tr id ="Box4" style="display:none;">
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" id ="dd" src="">
						<div class="food_img_text" id ="ddd"></div>
					</div>
				</td>
				<td class="food_name_box" id ="d"></td>
				<td></td>
			</tr>		
			<tr id ="Box5" style="display:none;">
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" id ="ee" src="">
						<div class="food_img_text" id ="eee"></div>
					</div>
				</td>
				<td class="food_name_box" id ="e"></td>
				<td></td>
			</tr>
			<tr id ="Box6" style="display:none;">
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" id ="ff" src="">
						<div class="food_img_text" id ="fff"></div>
					</div>
				</td>
				<td class="food_name_box" id ="f"></td>
				<td></td>
			</tr>
			<tr id ="Box7" style="display:none;">
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" id ="gg" src="">
						<div class="food_img_text" id ="ggg"></div>
					</div>
				</td>
				<td class="food_name_box" id ="g"></td>
				<td></td>
			</tr>
			<tr id ="Box8" style="display:none;">
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" id ="hh" src="">
						<div class="food_img_text" id ="hhh"></div>
					</div>
				</td>
				<td class="food_name_box" id ="h"></td>
				<td></td>
			</tr>
			<tr id ="Box9" style="display:none;">
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" id ="ii" src="">
						<div class="food_img_text" id ="iii"></div>
					</div>
				</td>
				<td class="food_name_box" id ="i"></td>
				<td></td>
			</tr>
			<tr id ="Box10" style="display:none;">
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" id ="jj" src="">
						<div class="food_img_text" id ="jjj"></div>
					</div>
				</td>
				<td class="food_name_box" id ="j"></td>
				<td></td>
			</tr>
			<tr id ="Box11" style="display:none;">
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" id ="kk" src="">
						<div class="food_img_text" id ="kkk"></div>
					</div>
				</td>
				<td class="food_name_box" id ="k"></td>
				<td></td>
			</tr>
			<tr id ="Box12" style="display:none;">
				<td></td>
				<td>
					<div class="food_img_box">
						<img class="food_img_icon" id ="ll" src="">
						<div class="food_img_text" id ="lll"></div>
					</div>
				</td>
				<td class="food_name_box" id ="l"></td>
				<td></td>
			</tr>			
		</table>
		<?php  if(empty($cook)) { ?>
		<div class="nothing_date" id="no2">
			<img src="<?php echo OSSURL;?>public/mobile/img/nothing_kcbiao.png">
		</div>
		<?php  } ?>
		<div class="nothing_date" id="no2" style="display:none;">
			<img src="<?php echo OSSURL;?>public/mobile/img/nothing_jrwpk.png">
		</div>		
	</div>
</div>
</div>
<input type="hidden" id="session_visit_sign" value="0" />
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
<script>
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		$("#head_container").css("margin-top","5px");
	}
}, 100);
</script>
<script>

   

    //图片放大
    $(function () {

        // 图片横滑初始化
        $(".weekly_diet_date").on('click', '.enlarge_img img', function (e) {
            //e.stopPropagation();
            var isHaveGif = false;
            var pics = [],
                picClass = []; //图片样式

            $(this).parent().find("img").each(function (e, i) {

                pics.push($(i).attr('src'));
                picClass.push($(i).attr('class'));
                //如果列表包含GIF图片，不使用微信的看图
                if ($(i).attr('src').indexOf('_GIF') != -1) {
                    isHaveGif = true;
                };
            });

            //手Q图片放大
            if (!$('#imageView')[0]) {
                $('body').append('<div id="imageView" class="slide-view" style="display:none;"></div>');
            }
            var index = 0;
            //确定当前查看的图片是第几张
            if (pics.length > 1) {
                var imgSrc = $(this).find('img').attr('src');
                for (var i = 0; i < pics.length; i++) {

                    if (imgSrc == pics[i]) {
                        index = i;
                        break;
                    }
                }
            }
            ImageView.init(pics, index, null, picClass);
        })

    })


    $(function () {
        //sta_fct()
        var n_d = new Date();

        var time_str1 = n_d.getTime();
        var n_d_start = new Date();
        // alert(n_d_start.getDate());
        var str_start_t = time_str1 - 86400000 * 4;
        var str_end_t = time_str1 + 86400000 * 4;
        var str_d = new Date();
        var str_month = "";
        var str_day = "";
        var time_str_start = time_str1 - 86400000 * 4;
        n_d_start.setTime(time_str_start);
        var dayNames = new Array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六");
        //这里初始化一开始的几个时间值
        $(".swiper-slide").each(function (i, item) {

            var year = n_d_start.getYear();
            var month = n_d_start.getMonth() + 1;
            var day = n_d_start.getDate();
            var week = dayNames[n_d_start.getDay()];

            $(this).children(".title_swiper").html(month + "月" + day + "日").attr("time_str", time_str_start);
            if (i == 4) {
                $(this).children(".title_swiper").html("<div  style=' height:16px; line-height:16px;'>" + week + "</div><div  style=' height:16px; line-height:16px;'>" + month + "月" + day + "日</div>").attr("time_str", time_str_start);
            }
            //html.push();
            time_str_start += 86400000;
            n_d_start.setTime(time_str_start);
        })

        //这里监听每个日期的点击事件
        $(".swiper-container").on("click", ".swiper-slide", function (e) {
            //e.stopPropagation();
            $(".active_diet").text($(".active_diet").text().substring(3));

            $(this).siblings().children(".title_swiper").removeClass("active_diet");
            $(this).children(".title_swiper").addClass("active_diet");
            var click_day = new Date();
            click_day.setTime($(".active_diet").attr("time_str"));
            var click_week = dayNames[click_day.getDay()];
            var click_text = $(".active_diet").text();
            $(".active_diet").html("<div  style=' height:16px; line-height:16px;'>" + click_week + "</div><div  style=' height:16px; line-height:16px;'>" + click_text + "</div>");
            $("#Boxs").hide();
			$("#Box").hide();
			$("#no1").hide();
			$("#no2").hide();
            //ajax返回日期滑动时候数据加载;
            return_text = function (obj) {
                var str = '';
                $.each(obj, function (i, item) {
                    alert(i);
                    str += '<div class="diet_date_mell"><div id="food_div" class="food_div"><img src="__STATIC__/image/week_diet_p' + i + '.png" /></div><div class="food_text">' + item + '</div></div>';
                })
                return str;
            }
			var ROOT_URL = "<?php  echo $urls;?>";
			var SCHOOL_LOGO = "<?php  echo tomedia($school['logo'])?>";
            //var studentid = $("#studentid").val();
            var time = $(".active_diet").attr("time_str").toString().substring(0, 10);
			
            $.ajax({
                url: "<?php  echo $this->createMobileUrl('indexajax',array('op'=>'getkcbiao'))?>",
                type: "post",
                dataType: "json",
                data: { "time": time,"schoolid": "<?php  echo $schoolid;?>","bj_id": "<?php  echo $student['bj_id'];?>" },
                success: function (data) {
                    //$(".weekly_diet_date").html(data);
					var temp = eval(data);
					if(temp.info == 1){
						$("#Box").show();
						if(temp.data.km_1_name){
							$("#Box1").show();
							if(temp.data.km_1_pic){
								var picurl1 = ROOT_URL + temp.data.km_1_pic;
							}else{
								var picurl1 = SCHOOL_LOGO;
							}
							$("#aa").attr('src',picurl1);
							$("#a").html(temp.data.sd_1);
							$("#aaa").html(temp.data.km_1_name);
						}else{
							$("#Box1").hide();
						}
						if(temp.data.km_2_name){
							$("#Box2").show();
							if(temp.data.km_2_pic){
								var picurl2 = ROOT_URL + temp.data.km_2_pic;
							}else{
								var picurl2 = SCHOOL_LOGO;
							}
							$("#bb").attr('src',picurl2);
							$("#b").html(temp.data.sd_2);
							$("#bbb").html(temp.data.km_2_name);
						}else{
							$("#Box2").hide();
						}
						if(temp.data.km_3_name){
							$("#Box3").show();
							if(temp.data.km_3_pic){
								var picurl3 = ROOT_URL + temp.data.km_3_pic;
							}else{
								var picurl3 = SCHOOL_LOGO;
							}
							$("#cc").attr('src',picurl3);
							$("#c").html(temp.data.sd_3);
							$("#ccc").html(temp.data.km_3_name);
						}else{
							$("#Box3").hide();
						}
						if(temp.data.km_4_name){
							$("#Box4").show();
							if(temp.data.km_4_pic){
								var picurl4 = ROOT_URL + temp.data.km_4_pic;
							}else{
								var picurl4 = SCHOOL_LOGO;
							}
							$("#dd").attr('src',picurl4);
							$("#d").html(temp.data.sd_4);
							$("#ddd").html(temp.data.km_4_name);
						}else{
							$("#Box4").hide();
						}
						if(temp.data.km_5_name){
							$("#Box5").show();
							if(temp.data.km_5_pic){
								var picurl5 = ROOT_URL + temp.data.km_5_pic;
							}else{
								var picurl5 = SCHOOL_LOGO;
							}
							$("#ee").attr('src',picurl5);
							$("#e").html(temp.data.sd_5);
							$("#eee").html(temp.data.km_5_name);
						}else{
							$("#Box5").hide();
						}
						if(temp.data.km_6_name){
							$("#Box6").show();
							if(temp.data.km_6_pic){
								var picurl6 = ROOT_URL + temp.data.km_6_pic;
							}else{
								var picurl6 = SCHOOL_LOGO;
							}
							$("#ff").attr('src',picurl6);
							$("#f").html(temp.data.sd_6);
							$("#fff").html(temp.data.km_6_name);
						}else{
							$("#Box6").hide();
						}
						if(temp.data.km_7_name){
							$("#Box7").show();
							if(temp.data.km_7_pic){
								var picurl7 = ROOT_URL + temp.data.km_7_pic;
							}else{
								var picurl7 = SCHOOL_LOGO;
							}
							$("#gg").attr('src',picurl7);
							$("#g").html(temp.data.sd_7);
							$("#ggg").html(temp.data.km_7_name);
						}else{
							$("#Box7").hide();
						}
						if(temp.data.km_8_name){
							$("#Box8").show();
							if(temp.data.km_8_pic){
								var picurl8 = ROOT_URL + temp.data.km_8_pic;
							}else{
								var picurl8 = SCHOOL_LOGO;
							}
							$("#hh").attr('src',picurl8);
							$("#h").html(temp.data.sd_8);
							$("#hhh").html(temp.data.km_8_name);
						}else{
							$("#Box8").hide();
						}
						if(temp.data.km_9_name){
							$("#Box9").show();
							if(temp.data.km_9_pic){
								var picurl9 = ROOT_URL + temp.data.km_9_pic;
							}else{
								var picurl9 = SCHOOL_LOGO;
							}
							$("#ii").attr('src',picurl9);
							$("#i").html(temp.data.sd_9);
							$("#iii").html(temp.data.km_9_name);
						}else{
							$("#Box9").hide();
						}
						if(temp.data.km_10_name){
							$("#Box10").show();
							if(temp.data.km_10_pic){
								var picurl10 = ROOT_URL + temp.data.km_10_pic;
							}else{
								var picurl10 = SCHOOL_LOGO;
							}
							$("#jj").attr('src',picurl10);
							$("#j").html(temp.data.sd_10);
							$("#jjj").html(temp.data.km_10_name);
						}else{
							$("#Box10").hide();
						}
						if(temp.data.km_11_name){
							$("#Box11").show();
							if(temp.data.km_11_pic){
								var picurl11 = ROOT_URL + temp.data.km_11_pic;
							}else{
								var picurl11 = SCHOOL_LOGO;
							}
							$("#kk").attr('src',picurl11);
							$("#k").html(temp.data.sd_11);
							$("#kkk").html(temp.data.km_11_name);
						}else{
							$("#Box11").hide();
						}	
						if(temp.data.km_12_name){
							$("#Box12").show();
							if(temp.data.km_12_pic){
								var picurl12 = ROOT_URL + temp.data.km_12_pic;
							}else{
								var picurl12 = SCHOOL_LOGO;
							}
							$("#ll").attr('src',picurl12);
							$("#l").html(temp.data.sd_12);
							$("#lll").html(temp.data.km_12_name);
						}else{
							$("#Box12").hide();
						}						
					}else{
						$("#no2").show();
					}
                }

            })

        })
        $(".left_btn").on("click", function () {
            mySwiper.swipePrev();

        })
        $(".right_btn").on("click", function () {
            mySwiper.swipeNext();

        })

        var start = 1;
        var end = 9;
        var mySwiper = new Swiper('.swiper-container', {
            useCSS3Transforms: true,
            pagination: '.pagination',
            paginationClickable: true,
            centeredSlides: true,
            slidesPerView: 3,
            initialSlide: 4,
            freeModeFluid: true,
            onSlideChangeEnd: function () {
                //alert(mySwiper.slides.length);
                //alert(mySwiper.activeIndex);
                var all_length = mySwiper.slides.length;
                var active_index = mySwiper.activeIndex;
                //console.log(active_index);
                //这里判断是不是滚到左边倒数第3个以下，是就触发加载另外5个日期
                if (active_index < 3) {

                    for (var i = 0; i < 4; i++) {
                        start--;
                        str_start_t -= 86400000;
                        str_d.setTime(str_start_t);
                        str_month = str_d.getMonth() + 1;
                        str_day = str_d.getDate();
                        //mySwiper.prependSlide('<div class="title_swiper">Slide '+ start +'</div>','swiper-slide '+randomColor()+'-slide');
                        var newSlide = mySwiper.createSlide('<div class="title_swiper" time_str="' + str_start_t + '">' + str_month + '月' + str_day + '日' + '</div>', 'swiper-slide ');
                        newSlide.prepend();
                        //mySwiper.swipeNext();
                    }
                    mySwiper.swipeTo(active_index + 4, 0, false);

                } else if (active_index > all_length - 4) {   //这里判断是不是滚到右边倒数第3个以下，是就触发加载另外5个日期

                    for (var i = 0; i < 4; i++) {
                        end++;
                        str_end_t += 86400000;
                        str_d.setTime(str_end_t);
                        str_month = str_d.getMonth() + 1;
                        str_day = str_d.getDate();
                        //mySwiper.appendSlide('<div class="title_swiper">Slide '+ end +'</div>','swiper-slide '+randomColor()+'-slide');
                        var newSlide = mySwiper.createSlide('<div class="title_swiper" time_str="' + str_end_t + '">' + str_month + '月' + str_day + '日' + '</div>', 'swiper-slide ');
                        newSlide.append();
                    }

                }

            },
            onSlideClick: function (swiper) {
                //console.log(swiper);
                //console.log(mySwiper.activeIndex);
                mySwiper.swipeTo(swiper.clickedSlideIndex);
            }
        });


    })
</script>
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
</script>
 <?php  include $this->template('footer');?> 