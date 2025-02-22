<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no,email=no" name="format-detection">
<meta name="App-Config" content="fullscreen=yes,useHistoryState=yes,transition=yes">
<script src="<?php echo OSSURL;?>public/mobile/js/hb.js"></script>
<link href="<?php echo OSSURL;?>public/mobile/css/Teacher_AttendCalendar.css" rel="stylesheet" />
<link href="<?php echo OSSURL;?>public/mobile/css/common.css?v=112420160902" rel="stylesheet" />
<script src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<style>
body {background-color: #f0f0f2 !important;box-sizing: border-box !important;font-size: 14px;}
.topMarign {margin: 0;}
.topMarignOther {margin-top: 15px;}
.topMarignOtherNoFirst {margin-top: 15px;}
.okSignIcontentBox {margin: 15px 0px;}
.conentBox_Other {
width: 100%;
display: -webkit-box; /* 老版本语法: Safari,  iOS, Android browser, older WebKit browsers.  */
display: -moz-box; /* 老版本语法: Firefox (buggy) */
display: -ms-flexbox; /* 混合版本语法: IE 10 */
display: -webkit-flex; /* 新版本语法： Chrome 21+ */
display: flex; /* 新版本语法： Opera 12.1, Firefox 22+ */
/*水平居中*/
/*老版本语法*/
-webkit-box-pack: center;
-moz-box-pack: center;
/*混合版本语法*/
-ms-flex-pack: center;
/*新版本语法*/
-webkit-justify-content: center;
justify-content: center;
}
.mainColor{background:<?php  echo $school['headcolor'];?> !important;}
.PromptBox {position: fixed;z-index: 2000;top: 30%;color: #fff;padding: 13px 20px;font-size: 16px;display:none;}
.topInfoAm {width: 80px;height: 80px;margin-top: 20px;border-radius: 50%;background-color: rgb(239, 250, 243);display: inline-block;box-sizing: border-box;}
.topInfoPm {width: 80px;height: 80px;margin-top: 20px;border-radius: 50%;background-color: rgb(239, 250, 243);display: inline-block;margin-left: 20%;box-sizing: border-box;}
.classmonthTitle {margin-top: 10px;}
.classmonthData {margin-top: 0px;}
.top_bottom {position: absolute;margin: 0;bottom: 10px;left: 50%;transform: translateX(-50%);-webkit-transform: translateX(-50%);-moz-transform: translateX(-50%);-ms-transform: translateX(-50%);-o-transform: translateX(-50%);margin-left: 10px;max-width: 90px;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;}


.contentBoxMonve {-moz-transform: translateX(-150%);-webkit-transform: translateX(-150%);-ms-transform: translateX(-150%);transform: translateX(-150%);}
.ContentBoxIsShow {display: block;}
.selectItem {background: #ff9f22;}
.titleOther {color: white;}
.selectOtherItem {opacity: .8;}
.colorOther {color: rgb(102, 102, 102) !important;}
.month_Attendence_left {background: url("<?php echo OSSURL;?>public/mobile/img/query_see_Ico.png") no-repeat bottom;background-size: 16px 20px;display: inline-block;width: 20px;height: 18px;display: inline-block;float: left;}
.top_right {width: 85px;height: 25px;position: absolute;right: 0px;top: 10px;background: url("<?php echo OSSURL;?>public/mobile/img/top_right_ico.png") no-repeat center;background-size: 85px 25px;}

.slide_left_menu_ul li.act {background: url(<?php echo OSSURL;?>public/mobile/img/be_choose_icon_02.png) right center no-repeat !important;background-size: 16px;background-origin: content-box;-moz-background-origin: content-box;-webkit-background-origin: content-box;}
.headerContent a i {float: left;margin: 20px 0 0 1px;width: 0;height: 0;border-width: 6px 6px 0;border-style: solid;border-color: white transparent transparent;position: absolute;}
.user_info{position:fixed; left:0; right:0; top:0; bottom:0;-webkit-box-sizing:border-box; box-sizing:border-box; background-color:rgba(0,0,0,.53); text-align:center; z-index:9999;font-size:20px;color:#fe6700;}
.user_info>div{ position:absolute; left:6%; right:6%; top:45px; padding: 0 20px; background-color:#fff; padding-bottom:33px; padding-top: 10px;}
.slide_left_menu_ul li .user_img {width: 50px;height: 50px;position: absolute;left: -5px;top: 0;box-sizing: border-box;padding: 10px;}
.slide_left_menu_ul li .user_img img {width: 100%;height: 100%;border-radius: 50%;}
.user_name{ text-align: left; color:#666; font-size: 14px;}
.user_name > select{ display:block;width:100%;height:44px; padding: 0 10px; margin-bottom: 10px; border:1px solid #ccc;-webkit-box-sizing: border-box; box-sizing: border-box;text-align: left; color:#666; font-size: 14px;}
.user_name > input{display: block;width:100%;height:44px; padding: 0 10px; margin-bottom: 10px; border:1px solid #ccc;-webkit-box-sizing: border-box; box-sizing: border-box;}
.user_name > input::-webkit-input-placeholder{ color: #666;font:15px "黑体";}
.user_info>div>span{display:inline-block;width:30px;height:30px;background:#fff;font-size:24px;color:#aaa;-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;border-radius:100%;line-height:30px;	text-align:center;position:absolute;top:-15px;right:-15px;font-family:宋体b8b\4f53;cursor:default;}
.teacherImgError{
	margin-top:2px;
	width: 50%;
    height: 80%;
    border-radius: 50%;}
</style>
<title><?php  echo $school['title'];?></title>
</head>
<header class="mainColor">
	<?php  if($_GPC['mananger'] == 'mananger') { ?>
	<div class="hederRightBox" style="left:20px;">
        <a href="<?php  echo $this->createMobileUrl('tscoreall', array('schoolid' => $schoolid,'score_time'=>$score_near_time), true)?>" class="choice_baby">
            <img src="<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg" class="img-responsive" style="height:21px">
        </a>
    </div>
	<?php  } else { ?>
	<div class="hederRightBox" style="left:20px;">
        <a href="<?php  echo $this->createMobileUrl('myschool', array('schoolid' => $schoolid), true)?>" class="choice_baby">
            <img src="<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg" class="img-responsive" style="height:21px">
        </a>
    </div>
	<?php  } ?>
    <div class="headerContent">
        <div class="select_date"><?php  echo $xueqi['sname'];?></div>
        <a id="showdate" class="select_next_right">
            <i></i>
        </a>
    </div>
	
    <div class="hederRightBox">
        <a href="javascript:;" class="choice_baby" id="choose">
            <img src="<?php echo OSSURL;?>public/mobile/img/selectMean.png" class="img-responsive">
        </a>
    </div>

</header>
<section>
    <div class="conentBox">
        <div class="topInfo">
            <div class="classmonthData" style="padding-top: 25px;"><span><?php  echo $numOfStu;?></span><span class="unitMonthData">人</span></div>
            <div class="classmonthTitle">已评人数</div>
        </div>

    </div>

    <div class="top_bottom" style="margin-left: 0px;" class_id="<?php  echo $nowbj['sid'];?>"><?php  echo $bjinfo['sname'];?></div>
</section>
<div class="contentOuterBox">
	<div class="classContentBox">
		<div class="contentTop topMarignOtherNo">
			<div class="nullDiv">
				<div class="top_left">
					<span class="signInNotSure">具体评分</span>
				</div>
				
			</div>
		</div>
		<div class="classDataBox">
			<div class="titleBox">
				<div class="titleItem " style="width: 20%;">学生</div>
				<div class="titleItem " style="width: 20%;">学期总分</div>
				<div class="titleItem "	style="width: 20%;">班级排名</div>
				<div class="titleItem " style="width: 20%;">年级排名</div>
				<div class="titleItem " style="width: 20%;">查看详情</div>
				
			</div>
			
			<div class="classDateContentBox">
				<?php  if(is_array($score_list)) { foreach($score_list as $row_d) { ?>
				<div class="contentRecord">
					<div class="contentItem " style="width: 20%;" ><?php  echo $row_d['stuinfo']['s_name'];?></div>
					<div class="contentItem " style="width: 20%;"><?php  echo $row_d['all_score'];?></div>
					<div class="contentItem " style="width: 20%;"><?php  echo $row_d['bj_rank'];?></div>
					<div class="contentItem " style="width: 20%;"><?php  echo $row_d['nj_rank'];?></div>
					<div class="contentItem " style="width: 20%;">
						<a>
							<div class="btn_seeSgin" onclick="show_detail(<?php  echo $row_d['sid'];?>)">点击查看</div>
						</a>
					</div>
				</div>
				<?php  } } ?>
			</div>
		</div> 
	</div>
	
	
</div>
<div style="height: 10px;"></div>	
<!--正常打卡弹窗-->

<!--左边弹窗-->
<div class="slide_left_menu_bg">
    <div class="slide_left_menu">
        <div class="slide_left_menu_til">班级列表</div>
        <ul class="slide_left_menu_ul">
		<?php  if(is_array($bjlists)) { foreach($bjlists as $row) { ?>
			<li onclick="isSelect(<?php  echo $row['sid'];?>);" <?php  if($bj_id == $row['sid']) { ?> class="act"<?php  } ?>>
				<div><?php  echo $row['old_sname'];?></div>
			</li>
		<?php  } } ?>					
		
        </ul>
    </div>
</div>


<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/new_yab1.css?v=1?v=1111" />
<div class="popUpBox" id="detail_score" style="display:none">
		<div class="trackMatte"></div>
		<div class="popContentBox">
			<input type="hidden" id="sid" value="" />
			<input type="hidden" id="ertype" value="<?php  if($ertype) { ?>1<?php  } else { ?>2<?php  } ?>" />
			<div class="poptitle" id="xueqi_name">评分详情</div>
			<div class="poptitle" id="sname">评分详情</div>
			<div class="classDataBox">
				<div class="titleBox">
					<div class="titleItem " style="width: 25%;">评分时间</div>
					<div class="titleItem " style="width: 25%;">得分情况</div>
					<div class="titleItem "	style="width: 25%;">班级排名</div>
					<div class="titleItem " style="width: 25%;">年级排名</div>
				</div>
				
				<div class="classDateContentBox" id="detail_detail">

				</div>
				<div class="sectionContBox">
					<div class="btnBox">
						<div class="btnCancel">关闭</div>
					</div>
				</div>
			</div> 
		</div>
	</div>	

<div class="user_info" id="user_info" style="display:none;">
   <div style="border-radius: 10px;">
		<ul>
			<p>查看历史评分记录</p>				
			<li class="user_name">
			  <select name="this_xueqi" id="this_xueqi" class="form-control">
					<option value="">请选择学期</option>
					<?php  if(is_array($xq_list)) { foreach($xq_list as $row) { ?>
					<option value="<?php  echo $row['sid'];?>" ><?php  echo $row['sname'];?></option>
					<?php  } } ?>
				</select>
			
			</li>						
			<div class="btn" id="bdax" style="list-style: none;padding-top: 30px;">提交</div>
		</ul>
		<span id="clos">×</span>
   </div>
</div>
<?php  include $this->template('port');?>
<script>
	$(function ($) {
	
	   $("#choose").on("click", function(e) {
            e.stopPropagation();
            $(".slide_left_menu_bg").addClass("show_menu_bg");
        });
        $(".slide_left_menu_bg").on("click", function() {
            $(this).removeClass("show_menu_bg");
        });

	
	
		$("#showdate").on('click', function () {
            $('#user_info').show();
		});	
		$("#clos").on('click', function () {
            $('#user_info').hide();
		});
		$("#bdax").on('click', function () {
			var this_xueqi = $("#this_xueqi").val();
			if (this_xueqi == "" || this_xueqi == undefined || this_xueqi == null) {
				jTips("请选择学期");
				return false;
			}
			location.href = "<?php  echo $this->createMobileUrl('tstuscore', array('schoolid' => $schoolid,'bj_id'=>$bj_id), true)?>" + '&this_xueqi=' + this_xueqi ;
		});		
	});
   
   
	function show_detail(sid){
		var this_xueqi = '<?php  echo $this_xueqi;?>';
		$.ajax({
			url: "<?php  echo $this->createMobileUrl('comajax',array('op'=>'get_stu_score'))?>",
			data: {sid:sid,this_xueqi:this_xueqi,schoolid:"<?php  echo $schoolid;?>"},	
			dataType: 'json',
			type: "post",
			success: function (data) {
				var html = '';
				 for(var item in data.data){
					html += '<div class="contentRecord">';
					html += '<div class="contentItem " style="width: 25%;" >'+data.data[item].time_out +'</div>';
					html += '<div class="contentItem " style="width: 25%;" >'+data.data[item].score +'</div>';
					html += '<div class="contentItem " style="width: 25%;" >'+data.data[item].bj_rank +'</div>';
					html += '<div class="contentItem " style="width: 25%;" >'+data.data[item].nj_rank +'</div>';
					html += '</div>';
 				 }
				 $("#xueqi_name").html(data.xueqiname);
				  $("#sname").html(data.sname+"评分情况");
				 $("#detail_detail").html(html);
				 $("#detail_score").show();

			}
		});
   
   
	}
   
   function isSelect(bj_id){
		var this_xueqi = '<?php  echo $this_xueqi;?>';
		location.href = "<?php  echo $this->createMobileUrl('tstuscore', array('schoolid' => $schoolid), true)?>" + '&this_xueqi=' + this_xueqi + '&bj_id=' + bj_id  ;
   }
   
	$('.btnCancel').click(function() {
		$('#detail_score').hide();
	});
   
   
</script>
<?php  include $this->template('newfooter');?>