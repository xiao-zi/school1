<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="true" />  
<?php  include $this->template('shoucecss');?>
<?php  include $this->template('bjqcss');?>
<style type="text/css">
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); }
.header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } 
.header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } 
.header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } 
.mainColor {background:<?php  echo $school['headcolor'];?> !important;}
.header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
body {background-color: #E7FAFF;}
.feedback_title_box {position: relative;border: none;height: 36px;line-height: 16px;padding: 10px;box-sizing: border-box;width: 100%;border-radius: 5px;background-color: #F2F2F2;border: 1px solid #ddd;}
.feedback_title.feedback_title_teacher { background: url(<?php echo OSSURL;?>public/mobile/img/select_down_icon2.png) no-repeat right center;background-size: 16px;-webkit-appearance: none;width: 100%;padding-right: 20px;box-sizing: border-box;border: none;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;}
</style>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<?php  include $this->template('port');?>
<title><?php  echo $school['title'];?></title>
</head>
<body>
<div class="All">
<div id="titlebar" class="header mainColor">
	<div class="l">
		<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a>
	</div>
	<div class="m">
		<a><span style="font-size: 18px">新建公开课</span></a>
	</div>
</div>
<div id="titlebars" class="top_height_blank"></div>
<div class=" manual_list">

    <div class="manual_main_box">
        <div class="title_l">创建公开课</div>
        <div class="blank"></div>
        <div class="input_text_1">
            <input id="manual_title" name="manual_title" type="text" placeholder="请输入标题...">
        </div>
         <div class="blank"></div>
        <div class="feedback_title_box">
			<select class="feedback_title feedback_title_teacher" id="tid">
				<option value="">请选择授课老师</option>
			<?php  if(is_array($teachers)) { foreach($teachers as $row) { ?>	
				<option value="<?php  echo $row['id'];?>" <?php  if($tid == $row['id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['tname'];?></option>
			<?php  } } ?>				
			</select>
		</div>
		<div class="blank"></div>
		<div class="feedback_title_box">
			<select class="feedback_title feedback_title_teacher" id="xqid">
				<option value="">请选择年级</option>
			<?php  if(is_array($xueqi)) { foreach($xueqi as $row) { ?>	
				<option value="<?php  echo $row['sid'];?>"><?php  echo $row['sname'];?></option>
			<?php  } } ?>				
			</select>
		</div>
		<div class="blank"></div>
		<div class="feedback_title_box">
			<select class="feedback_title feedback_title_teacher" id="bjid">
				<option value="">请选择班级</option>
			<?php  if(is_array($bj)) { foreach($bj as $row) { ?>	
				<option value="<?php  echo $row['sid'];?>"><?php  echo $row['sname'];?></option>
			<?php  } } ?>				
			</select>
		</div>
		<div class="blank"></div>
		<div class="feedback_title_box">
			<select class="feedback_title feedback_title_teacher" id="kmid">
				<option value="">请选择科目</option>
				<?php  if(is_array($km)) { foreach($km as $row) { ?>			
				<option value="<?php  echo $row['sid'];?>"><?php  echo $row['sname'];?></option>
				<?php  } } ?>				
			</select>
		</div>
		<div class="blank"></div>
		<div class="">上课地址</div>
        <div class="input_text_1">
            <input id="addr" name="addr" type="text" placeholder="请输入地址...">
        </div>
        <div class="blank"></div>
         <div >
            <span> 上课日期 </span>
        </div>
        <div class="input_text_1 start_time">
            <input id="gkkdate" type="date" value="" placeholder="上课日期...">
        </div>
        <div class="blank"></div>
        <div >
            <span> 开始时间 </span>
        </div>
        <div class="input_text_1 end_time">
            <input id="start_time" type="time" value="" placeholder="开始时间...">
        </div>
        <div class="blank"></div>
        <div >
            <span> 结束时间 </span>
        </div>
        <div class="input_text_1 end_time">
            <input id="end_time" type="time" value="" placeholder="结束时间...">
        </div>
          <div class="blank"></div>
     <div class="weui_cell_ft" style="text-align: left;">
        <span>是否开启评价&nbsp;</span>
        <input id="is_personal" class="weui_switch" type="checkbox" value="1"/>
        
    	
    </div>
    <div id="pjbz_box"  style="display: none;">
        <div class="blank"></div>
        <div class="">选择评价标准</div>
        <div class="feedback_title_box">
        <select class="feedback_title feedback_title_teacher" id="pjbz">
				<option value="">请选择评价规则</option>
				<?php  if(is_array($gkkpjbz)) { foreach($gkkpjbz as $row) { ?>			
				<option value="<?php  echo $row['id'];?>"><?php  echo $row['title'];?></option>
				<?php  } } ?>				
			</select>
			</div>
			</div>
			<div class="blank"></div>
        <div>
            <textarea cols="3" rows="4" style="width: 97%;margin-top: 0px;border: 1px solid #CCCCCC;border-radius: .1rem;resize: none;" id="dagang" name="dagang" type="text" placeholder="请输入大纲..."></textarea>
        </div>
       
        <div class="blank"></div>
        <div class="blue_add_btn">创建</div>
    </div>
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
	}
}, 100);
 
	$(function () {

		$("#is_personal").on("change", function () {
			if(	$("#is_personal").is(':checked')){
				$("#pjbz_box").show();
				$("#is_personal").attr("value","0");
				//console.log("checked");
			}else{
				$("#pjbz_box").hide();
				$("#is_personal").attr("value","1");
				
				
			
				//console.log("not checked");
			}
			if (window.localStorage) {
				localStorage.setItem("yab_parent_diary_personal", $("#is_personal").prop('checked') ? "Y" :"N");
			}
		});

		$("#xqid").change(function() {
		var type = 4;
		var cityId = $("#xqid option:selected").attr('value');
		changeGrade(cityId,type, function() {
		});
	});	

function changeGrade(gradeId, type, __result) {
	
	//$('#njidid').val(gradeId);
	
	var schoolid = "<?php  echo $schoolid;?>";
	var classlevel = [];
	//获取班次
	$.post("<?php  echo $this->createMobileUrl('indexajax',array('op'=>'getbjlist'))?>", {'gradeId': gradeId, 'schoolid': schoolid}, function(data) {
	
		data = JSON.parse(data);
		classlevel = data.bjlist;
		
		var html = '';
		html += '<select id="bj_id"><option value="">请选择班级</option>';
		if (classlevel != '') {
			for (var i in classlevel) {
				html += '<option value="' + classlevel[i].sid + '">' + classlevel[i].sname + '</option>';
			}
		}
		
		$('#bjid').html(html);
	});

}

		
		

		$('.blue_add_btn').on('click', function () {
			var title = $.trim($('#manual_title').val());
			var start_time = $('#start_time').val();
			var end_time = $('#end_time').val();
			var gkkdate = $('#gkkdate').val();
			var bj_id = $('#bjid').val();
			var km_id = $('#kmid').val();
			var nj_id = $('#xqid').val();
			var addr =$.trim($('#addr').val());
			var is_pj =$('#is_personal').val(); 
			var dagang =$.trim($('#dagang').val());
			var pjbz = $('#pjbz').val();
			var ssort = $('#ssort').val();
			var tid = $('#tid').val(); ;
			
			var starttime = gkkdate +' '+ start_time ;
			var endtime = gkkdate +' '+ end_time ;
				console.log(pjbz);
				starttime= starttime.replace(/-/g, '/');  
				endtime = endtime.replace(/-/g, '/');  
				var timestamp_start = Date.parse(new Date(starttime));
				timestamp_start = timestamp_start / 1000;
				var timestamp_end = Date.parse(new Date(endtime));
				timestamp_end = timestamp_end / 1000;
				var chabie = timestamp_end - timestamp_start;

				
			
			if (title == '') {
				jTips('标题不能为空');
				return;
			}

			// 2.敏感词检查
			var sensitive_words = "非法|不合法|三聚氰胺|色情|法轮功|涉黄|吸毒|邪教|台独|藏独|伊斯兰教|鸡巴|妓女|枪毙|强暴|艾滋病|性交|3P|恐怖分子|自慰|约炮|肛交|毒品|";
			var filter = sensitive_words.split('|');
			for (var i = 0; i < filter.length; i++) {
				var filter_word = filter[i].trim();

				if (filter_word == "")
					continue;
				if (title.indexOf(filter_word) > -1) {
					jTips("请遵守国家法律法规，请勿发布暴力、谣言、色情等言论。手册标题含有非法词语：" + filter_word);
					return;
				}
			}
			
			if (start_time == '') {
				jTips('开始时间不能为空', function () {
					return;
				});
			} else if (end_time == '') {
				jTips('结束时间不能为空', function () {
					return;
				});
			} else if (bj_id == '') {
				jTips('必须选择班级', function () {
					return;
				});				
			} else if (bj_id == '') {
				jTips('必须选择班级', function () {
					return;
				});				
			}else if (nj_id == '') {
				jTips('必须选择年级', function () {
					return;
				});				
			}else if (km_id == '') {
				jTips('必须选择科目', function () {
					return;
				});				
			} else if (chabie <= 1800) {
				jTips('抱歉，课程持续时间不能小于半小时', function () {
					return;
				});
			} else {
				//创建联系手册
				jConfirm('提交创建后不可修改，是否确认提交？', '确认对话框', function (r){
	       	 if(r){
				$.ajax({
					url: "<?php  echo $this->createMobileUrl('gkkadd', array('schoolid' => $schoolid,'op' => 'add'), true)?>",
					data: { 'ssort':ssort, 'title': title,'tid': tid,'starttime': timestamp_start, 'endtime': timestamp_end, 'gkkdate': gkkdate, 'bj_id': bj_id, 'km_id': km_id,'nj_id': nj_id,'addr': addr,'is_pj': is_pj, 'dagang': dagang, 'pjbz': pjbz},
					dataType: 'json',
					type: 'post',
					success: function (data) {
						// jTips(data.info, function () {
						// 	if (data.status == 1) {
						// 	location.href = "<?php  echo $this->createMobileUrl('gkklist', array('schoolid' => $schoolid), true)?>";
						// 	}
						// });
					},
				});
				}else{
			return false;
		}});
			}
		});
	})

</script>
