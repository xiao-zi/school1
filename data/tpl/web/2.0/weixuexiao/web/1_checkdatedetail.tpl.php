<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>

<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
 
 <style>
 ul{margin-top: 0 !important;}
.cLine {overflow: hidden;padding: 5px 0;color:#000000;}
.alert {padding: 8px 35px 0 10px;text-shadow: none;-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);background-color: #f9edbe;border: 1px solid #f0c36d;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;color: #333333;margin-top: 5px;}
.alert p {margin: 0 0 10px;display: block;}
.alert .bold{font-weight:bold;}
.checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
     margin-top: 4px; 
}
.cen_year {
font-size: 30px !important;
color:black !important;

}
.popover {z-index:99999 !important;}
/*寒假 */
.fullYearPicker table td.win_holi {
	background:#DDDDFF;
}
/*暑假*/
.fullYearPicker table td.sum_holi {
	background:#f59592;
}
/*调休日的样式 */
.fullYearPicker table td.tradeday {
	background:#CEFFCE !important;
}
/*调课日的样式*/
.fullYearPicker table td.lawday {
	background:#FFC78E !important;
}

 </style>
<div class="cLine">
    <div class="alert">
    <p><span class="bold">注意：</span>
   寒暑假设置方法:拖选时间区间，弹出框选择寒假/暑假，不可跨年份设置。
   <strong><font color='red'>同一年份寒假区间与暑假区间各一个，重复设置以最近一次为准。</font></strong></br>
   单击单个日期设置特殊休假/特殊上课。同一天最多支持设置五个进出时段。

    </p>
    </div>
</div>
<div class="panel panel-info">
   <div class="panel-heading" style="background-color: #179786;"><a class="btn btn-primary" onclick="javascript :history.back(-1);"><i class="fa fa-tasks"></i> 返回</a></div>
</div>
<?php  if($operation == 'post') { ?>

<div class="main">
<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
		<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
        <div class="panel panel-default">
            <div class="panel-heading">编辑时间安排</div>
            <div class="panel-body">
				
			    <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;"  >安排名称：</label>
                    <div class="col-sm-9">                       
                            <input type="text" class="form-control" name="name" value="<?php  echo $item['name'];?>" required="required" oninvalid="setCustomValidity('日期安排名称不能为空！');" oninput="setCustomValidity('');"/>
                    </div>
                </div>
				<div class="form-group">
	                <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">周五设置：</label>
                    <div class="col-sm-2 col-lg-2">
                        <label class="radio-inline">
                            <input type="radio" name="fridayset" value="1" <?php  if($item['friday']==1) { ?>checked<?php  } ?>>是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="fridayset" value="0" <?php  if($item['friday']==0) { ?>checked<?php  } ?>>否
                        </label>
                        <div class="help-block">周五单独设置</div>
                    </div>
				</div>	
				<div class="form-group">
	                <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">周六设置：</label>
                    <div class="col-sm-2 col-lg-2">
                        <label class="radio-inline">
                            <input type="radio" name="saturdayset" value="1" <?php  if($item['saturday']==1) { ?>checked<?php  } ?>>上课
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="saturdayset" value="0" <?php  if($item['saturday']==0) { ?>checked<?php  } ?>>放假
                        </label>
                        <div class="help-block">周六上课还是放假</div>
                    </div>
				</div>
				<div class="form-group">
	                <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">周日设置：</label>
                    <div class="col-sm-2 col-lg-2">
                        <label class="radio-inline">
                            <input type="radio" name="sundayset" value="1" <?php  if($item['sunday']==1) { ?>checked<?php  } ?>>上课
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sundayset" value="0" <?php  if($item['sunday']==0) { ?>checked<?php  } ?>>放假
                        </label>
                        <div class="help-block">周日上课还是放假</div>
                    </div>
				</div>
				<!--  <div class="form-group">
	               <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">法定假日:</label>
					<div class="col-sm-9 col-xs-6">
						<div class="input-group text-info">
                            <label  class="checkbox-inline" style="width:10%;margin-left: 10px"><input type="checkbox" name="holidayarr[]"  value="1"  style="float: none;" <?php  if(($is)) { ?>checked="checked"<?php  } ?>> <?php  echo $row['tname'];?></label>                        
						</div>
						<div class="help-block">选择授课老师，最多五个</div>
					</div>
				</div> -->
				<div class="form-group">
					 <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">选择班级：</label>
					<div class="col-sm-9 col-xs-6">
						<div class="input-group text-info">
							<?php  if(is_array($banji)) { foreach($banji as $uni) { ?>
									<label for="uni_<?php  echo $uni['sid'];?>" class="checkbox-inline" style="width:140px;margin-left: 10px"><input id="uni_<?php  echo $uni['sid'];?>" type="checkbox" name="arr[]" value="<?php  echo $uni['sid'];?>"<?php  if(($id && $uni['datesetid'] == $id)) { ?>checked="checked"<?php  } ?> <?php  if(($id && $uni['datesetid'] != 0 && $uni['datesetid'] !=$id) || (empty($id) && $uni['datesetid'] != 0  ) ) { ?>disabled="disabled"<?php  } ?>> <?php  echo $uni['sname'];?></label>
							<?php  } } ?>
						</div>
						<div class="help-block">选择本安排适用的班级,若班级已指定安排则不可选</div>
					</div>
				</div>
				
               			
             </div>											   
		</div>
        <div class="form-group col-sm-12">
            <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
    </form>
</div>	
<script>

$(document).on('click', '.custom-url-del', function(){
	$(this).parent().parent().remove();
	return false;
});	
$(document).on('click', '.btn-default', function(){
	var t = $(this).parents().children();
	var want = t.find('input[class*=sxword]');
	var selectdiv = t.find('select[class*=select]');
	
	var tname = want.val();
	want.hide();
	selectdiv.show();
	
	var schoolid = "<?php  echo $schoolid;?>";
	var classlevel = [];
	html1 += '<select id="schoolid"><option value="">请选择老师</option>';
	if(tname != ''){
		$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'getallteacher'))?>", {'tname': tname,schoolid:schoolid}, function(data) {
				data = JSON.parse(data);
			if(data.result == true){	
				classlevel = data.teachcers;		
				var html = '';
				if (classlevel != '') {
					for (var i in classlevel) {
						html += '<option value="' + classlevel[i].id + '">' + classlevel[i].tname + '</option>';
					}
				}
				selectdiv.html(html);
			}else{
				selectdiv.hide();
				want.show();
				alert(data.msg);
			}
		});	
	}else{
		var html1 = ''+
								<?php  if(is_array($allls)) { foreach($allls as $it) { ?>
				'					<option value="<?php  echo $it['id'];?>"><?php  echo $it['tname'];?></option>'+
								<?php  } } ?>
				'';
		selectdiv.html(html1);
	}
});	
</script>
<?php  } else if($operation == 'display') { ?>



<div class="main">
	<link rel="stylesheet" type="text/css" href="<?php echo MODULE_URL;?>public/web/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo MODULE_URL;?>public/web/css/calendar.css">
	<link rel="stylesheet" href="<?php echo MODULE_URL;?>public/web/css/amazeui.min.css">
 
	<div id="div1"></div>

	<!--录入信息口-->
	<div class="am-modal am-modal-no-btn  hd_info_modal" tabindex="-1" id="calendar-modal-1">
		<div class="am-modal-dialog radius">
			<div class="am-modal-hd"><span id="modaltitle">编辑</span>
			  <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
			</div>
			<div class="am-modal-bd">
				<div class="am-margin-sm">
					<form action="" class="am-form am-form-inline">
						<div class="hd-work-type">
							<div class="hd-work-block">
								<label class="hd-type-label" >类型:</label>
								<div class="hd-type-select">
									<select data-am-selected class="am-u-sm-10" id="hd-type-option">
										<option value="win_holi" >寒假</option>
										<option value="sum_holi" >暑假</option>
										<option value="lawday"   >上课（特殊设置）</option>
										<option value="tradeday" >调休</option>
									</select>
								</div>
							</div>
							<div class="stone"></div>
						</div>
						<div class="hd-work-date">
							<div class="hd-work-block">
								<label for="hd-start-date" class="am-form-label">时间:</label>
								<div class="am-form-group am-form-icon">
									<input id="hd-start-date" type="text" class="am-form-field" placeholder="开始日期" readonly required>
								</div>
						  </div>
							<div class="hd-work-block">
								<label for="hd-end-date" class="am-form-label endtime">至</label>
								<div class="am-form-group am-form-icon endtime">
									<input id="hd-end-date" type="text" class="am-form-field" placeholder="结束日期"  readonly required>
								</div>
							</div>
						</div>
						<div class="hd-work-date time_show" style="display:none">
							<div class="hd-work-block">
								<label for="hd-start-date" class="am-form-label">时段1:</label>
								<div class="am-form-group am-form-icon" readonly>
									<?php  echo tpl_form_field_clock('start_time1','00:00')?>
								</div>
							</div>
							<div class="hd-work-block">
								<label for="hd-end-date" class="am-form-label ">至</label>
								<div class="am-form-group am-form-icon ">
									<?php  echo tpl_form_field_clock('end_time1','00:00')?>
								</div>
							</div>
						</div>
						<div class="hd-work-date time_show" style="display:none">
							<div class="hd-work-block">
								<label for="hd-start-date" class="am-form-label">时段2:</label>
								<div class="am-form-group am-form-icon">
									<?php  echo tpl_form_field_clock('start_time2','00:00')?>
								</div>
							</div>
							<div class="hd-work-block">
								<label for="hd-end-date" class="am-form-label ">至</label>
								<div class="am-form-group am-form-icon ">
									<?php  echo tpl_form_field_clock('end_time2','00:00')?>
								</div>
							</div>
						</div>
						<div class="hd-work-date time_show" style="display:none">
							<div class="hd-work-block">
								<label for="hd-start-date" class="am-form-label">时段3:</label>
								<div class="am-form-group am-form-icon">
									<?php  echo tpl_form_field_clock('start_time3','00:00')?>
								</div>
							</div>
							<div class="hd-work-block">
								<label for="hd-end-date" class="am-form-label ">至</label>
								<div class="am-form-group am-form-icon ">
									<?php  echo tpl_form_field_clock('end_time3','00:00')?>
								</div>
							</div>
						</div>
						<div class="hd-work-date time_show" style="display:none">
							<div class="hd-work-block">
								<label for="hd-start-date" class="am-form-label">时段4:</label>
								<div class="am-form-group am-form-icon">
									<?php  echo tpl_form_field_clock('start_time4','00:00')?>
								</div>
							</div>
							<div class="hd-work-block">
								<label for="hd-end-date" class="am-form-label ">至</label>
								<div class="am-form-group am-form-icon ">
									<?php  echo tpl_form_field_clock('end_time4','00:00')?>
								</div>
							</div>
						</div>
						<div class="hd-work-date time_show" style="display:none">
							<div class="hd-work-block">
								<label for="hd-start-date" class="am-form-label">时段5:</label>
								<div class="am-form-group am-form-icon">
									<?php  echo tpl_form_field_clock('start_time5','00:00')?>
								</div>
							</div>
							<div class="hd-work-block">
								<label for="hd-end-date" class="am-form-label ">至</label>
								<div class="am-form-group am-form-icon ">
									<?php  echo tpl_form_field_clock('end_time5','00:00')?>
								</div>
							</div>
						</div>
						<div class="hd-work-btns">
							<button type="button" class="am-btn am-btn-secondary" id="calendar_confirm_btn">添加</button>
							<button type="button" class="am-btn am-btn-default" onClick="close_modal();">取消</button>
						</div>
						<div class="stone"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

 
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/web/js/calendar.js"></script>

<script type="text/javascript">

$(function(){
	$("input[class='form-control']").attr("readonly","readonly");
});


	/*初始化日历*/
	loading_calendar("div1","cn");
	
	/*弹出框“添加”按钮点击事件*/
	$("#calendar_confirm_btn").click(function(){
		var start_date=$("#hd-start-date").val();
		start_date=start_date.split("-")[1]+"-"+start_date.split("-")[2];
		var end_date=$("#hd-end-date").val();
		end_date=end_date.split("-")[1]+"-"+end_date.split("-")[2];
		
		var m_type=$("#hd-type-option").val();
		//若为寒暑假，则用ajax方法往数据库里写入。
		var year=$("#cen_year").text();
		if(m_type == 'win_holi' || m_type=='sum_holi' ){
			
			var start = year + '-' +start_date;
			var end =  year + '-' +end_date;
			var data = {
				year:year,
				start:start,
				end:end,
				m_type:m_type
			};
	
		};
		//特殊设置上课
		if(m_type == 'lawday' ){
			var date_this = year + '-' +start_date;
			var start_time1 = $("input[name='start_time1']").val();
			var end_time1 	= $("input[name='end_time1']").val();
			var start_time2 = $("input[name='start_time2']").val();
			var end_time2 	= $("input[name='end_time2']").val();
			var start_time3 = $("input[name='start_time3']").val();
			var end_time3 	= $("input[name='end_time3']").val();
			var start_time4 = $("input[name='start_time4']").val();
			var end_time4 	= $("input[name='end_time4']").val();
			var start_time5 = $("input[name='start_time5']").val();
			var end_time5 	= $("input[name='end_time5']").val();
			var checkOut = 0 ;
			var checkRe = 0 ;
			//开始结束时间检查
			
			if(start_time1 == '00:00' && end_time1 == '00:00' && start_time2 == '00:00' && end_time2 == '00:00' && start_time3 == '00:00' && end_time3 == '00:00' && start_time4 == '00:00' && end_time4 == '00:00' && start_time5 == '00:00' && end_time5 == '00:00'){
				alert("请至少设置一个时段的开始与结束时间！！！");
				return;
			}
			
			if(start_time1 > end_time1 || start_time2 > end_time2 || start_time3 > end_time3 || start_time4 > end_time4 || start_time5 > end_time5 ){
				checkOut = 1 ;
			}
		
			if(checkOut == 1){
				alert("时段开始时间必须小于结束时间！！");
				return;
			}
			console.log(start_time1);
			console.log(start_time2);
			console.log(end_time1);
			console.log(end_time2);

			
			if(start_time1 != '00:00' && end_time1 != '00:00' ){
				//时段1区间检查
				if((start_time1 >= start_time2 && start_time1 <= end_time2) || (end_time1 >= start_time2 && end_time1 <= end_time2) ){
					checkRe = 1 ;
				}
				if((start_time1 >= start_time3 && start_time1 <= end_time3) || (end_time1 >= start_time3 && end_time1 <= end_time3) ){
					checkRe = 1 ;
				}
				if((start_time1 >= start_time4 && start_time1 <= end_time4) || (end_time1 >= start_time4 && end_time1 <= end_time4) ){
					checkRe = 1 ;
				}
				if((start_time1 >= start_time5 && start_time1 <= end_time5) || (end_time1 >= start_time5 && end_time1 <= end_time5) ){
					checkRe = 1 ;
				}
			}
			console.log(checkRe);

			if(start_time2 != '00:00' && end_time2 != '00:00' && start_time2 != null && end_time2 != null ){
				//alert("adas");
				//return;
				//时段2区间检查
				if((start_time2 >= start_time1 && start_time2 <= end_time1) || (end_time2 >= start_time1 && end_time2 <= end_time1) ){
					checkRe = 1 ;
				}
				if((start_time2 >= start_time3 && start_time2 <= end_time3) || (end_time2 >= start_time3 && end_time2 <= end_time3) ){
					checkRe = 1 ;
				}
				if((start_time2 >= start_time4 && start_time2 <= end_time4) || (end_time2 >= start_time4 && end_time2 <= end_time4) ){
					checkRe = 1 ;
				}
				if((start_time2 >= start_time5 && start_time2 <= end_time5) || (end_time2 >= start_time5 && end_time2 <= end_time5) ){
					checkRe = 1 ;
				}
			}
			
			if(start_time3 != '00:00' && end_time3 != '00:00' && start_time3 != null && end_time3 != null ){
				//时段3区间检查
				if((start_time3 >= start_time1 && start_time3 <= end_time1) || (end_time3 >= start_time1 && end_time3 <= end_time1) ){
					checkRe = 1 ;
				}
				if((start_time3 >= start_time2 && start_time3 <= end_time2) || (end_time3 >= start_time2 && end_time3 <= end_time2) ){
					checkRe = 1 ;
				}
				if((start_time3 >= start_time4 && start_time3 <= end_time4) || (end_time3 >= start_time4 && end_time3 <= end_time4) ){
					checkRe = 1 ;
				}
				if((start_time3 >= start_time5 && start_time3 <= end_time5) || (end_time3 >= start_time5 && end_time3 <= end_time5) ){
					checkRe = 1 ;
				}
			}
			
			if(start_time4 != '00:00' && end_time4 != '00:00' && start_time4 != null && end_time4 != null ){
				//时段4区间检查
				if((start_time4 >= start_time1 && start_time4 <= end_time1) || (end_time4 >= start_time1 && end_time4 <= end_time1) ){
					checkRe = 1 ;
				}
				if((start_time4 >= start_time2 && start_time4 <= end_time2) || (end_time4 >= start_time2 && end_time4 <= end_time2) ){
					checkRe = 1 ;
				}
				if((start_time4 >= start_time3 && start_time4 <= end_time3) || (end_time4 >= start_time3 && end_time4 <= end_time3) ){
					checkRe = 1 ;
				}
				if((start_time4 >= start_time5 && start_time4 <= end_time5) || (end_time4 >= start_time5 && end_time4 <= end_time5) ){
					checkRe = 1 ;
				}
			}
			
			if(start_time5 !='00:00' && start_time5 !=null  && end_time5 != '00:00' && end_time5 != null ){
				//时段5区间检查
				if((start_time5 >= start_time1 && start_time5 <= end_time1) || (end_time5 >= start_time1 && end_time5 <= end_time1) ){
					checkRe = 1 ;
				}
				if((start_time5 >= start_time2 && start_time5 <= end_time2) || (end_time5 >= start_time2 && end_time5 <= end_time2) ){
					checkRe = 1 ;
				}
				if((start_time5 >= start_time3 && start_time5 <= end_time3) || (end_time5 >= start_time3 && end_time5 <= end_time3) ){
					checkRe = 1 ;
				}
				if((start_time5 >= start_time4 && start_time5 <= end_time4) || (end_time5 >= start_time4 && end_time5 <= end_time4) ){
					checkRe = 1 ;
				}
			}
			
			if(checkRe == 1){
				alert("时段区间有冲突！！");
				return;
			}
			var data={
				year		: year,
				date_this	: date_this,
				start_time1 : start_time1 ,
				end_time1 	: end_time1 ,
				start_time2 : start_time2 ,
				end_time2 	: end_time2 ,	
				start_time3 : start_time3 ,
				end_time3 	: end_time3 ,	
				start_time4 : start_time4 ,
				end_time4 	: end_time4 ,	
				start_time5 : start_time5 ,
				end_time5 	: end_time5 ,
				m_type		: m_type				
			};
		};
		
		if(m_type == 'tradeday' || m_type == 'workday' ){
			var date_this = year + '-' +start_date;
			var data={
				year		: year,
				date_this	: date_this,
				m_type		: m_type				
			};
		}
		
		$.post("<?php  echo $this->createWebUrl('indexajax', array('op' => 			'setcheckdate','schoolid'=>$schoolid,'weid'=>$weid,'checkdatesetid'=>$checkdatesetid))?>",data, function(data){
		if(data.result == false){
		alert(data.msg);
		return;
		}
			console.log(data.msg);
			},
		'json');
		
		/*drap_select(start_date,end_date,"workday");*/
		drap_select(start_date,end_date,m_type);
		close_modal();
	});
	
	
	$("#hd-type-option").change(function(){
		var m_type=$(this).val();
		if(m_type == 'lawday'){
			$(".time_show").show();

		}else{
			$(".time_show").hide();
		}
	});
	
	
	function getDateStr(td) {
		//console.log("----"+td.parentNode.parentNode.rows[0].cells[0].getAttribute('index')+"-"+ td.innerHTML);
		return td.parentNode.parentNode.rows[0].cells[0].getAttribute('index')+"-"+ td.innerHTML;
	}
	
	
	/*拖拽选中  */
	function drap_select(start,end,new_class){
		var max=60;//当天数要选择到最后一天取一个大于所以月份的值
		/* console.log("选择:"+start+","+end); */
		//清除选中单元格的样式
		$(".month-container .selected").removeClass("selected");
		var start_month=parseInt(start.split("-")[0]);
		var start_day=parseInt(start.split("-")[1]);
		var end_month=parseInt(end.split("-")[0]);
		var end_day=parseInt(end.split("-")[1]);
		/* console.log("start_month:"+start_month);
		console.log("start_day:"+start_day);
		console.log("end_month:"+end_month);
		console.log("end_day:"+end_day); */
		
		if(new_class == 'win_holi'){
			$("td.win_holi").addClass("workday");
			$("td.win_holi").removeClass("win_holi");
		}
		if(new_class == 'sum_holi'){
			$("td.sum_holi").addClass("workday");
			$("td.sum_holi").removeClass("sum_holi");
		}
		if(start_month==end_month){
			if(start_day<end_day){
				select_month(start_month, start_day, end_day,new_class);
			}else{
				select_month(start_month, end_day, start_day,new_class);
			}
		}else if(start_month<end_month){
			select_month(start_month, start_day, max,new_class);
			for(var i=start_month+1;i<end_month;i++){
				select_month(i, 1, max,new_class);
			}
			select_month(end_month, 1, end_day,new_class);
		}else if(start_month>end_month){
			select_month(start_month, 1, start_day,new_class);
			for(var i=end_month+1;i<start_month;i++){
				select_month(i, 1, max,new_class);
			}
			select_month(end_month, end_day, max,new_class);
		}
		
	}
	
	/*监听拖拽事件*/
	function day_drap_listen(){
		var is_drap=0;
		var start_date="";
		var end_date="";
		$(".fullYearPicker .picker table td").mousedown(function(event){
			/*判断是左键才触发  */
			if(event.button==0&&($(this).html()!="&nbsp;")){
				is_drap=1;
				start_date=getDateStr($(this)[0]);
				/*console.log("开始值:"+start_date); */
			}
		});
		$(".fullYearPicker .picker table td").mouseup(function(event){
			/*判断是左键才触发  */
			if(event.button==0&&($(this).html()!="&nbsp;")){
				is_drap=0;
				end_date=getDateStr($(this)[0]);
				/* console.log("结束值:"+end_date); */
				if(checkDate(start_date, end_date)){
					open_modal(start_date, end_date);
				}else{
					open_modal(end_date, start_date);
				}
			}
		});
		$(".fullYearPicker .picker table td").mouseover(function(){
			var day=$(this).html();
			if(is_drap==1&&day!="&nbsp;"){
				var min_date=getDateStr($(this)[0]);
				drap_select(start_date,min_date,"selected");
				/*console.log("拖拽中:"+min_date); */
			}
		});
	}
	
	
	/*按月加载样式*/
	function select_month(month,start,end,new_class){
		month=month-1;
		$(".fullYearPicker .picker .month-container:eq("+month+") td").each(function(){
			var num=$(this).text();
			if(num>=start&&num<=end){
				 //$(this).addClass("selected"); 
				if(new_class != null){
					$(this).addClass(new_class);
					if(new_class == 'win_holi' || new_class == 'sum_holi' ){
						$(this).removeClass("workday");
					}
					if(new_class == 'workday' && $(this).hasClass("lawday")){
						$(this).removeClass("lawday");
					}
					if(new_class == 'workday' && $(this).hasClass("tradeday")){
						$(this).removeClass("tradeday");
					}
					if(new_class == 'tradeday' && $(this).hasClass("workday")){
						$(this).removeClass("workday");
					}
					if(new_class == 'tradeday' && $(this).hasClass("lawday")){
						$(this).removeClass("lawday");
					}
					if(new_class == 'lawday' && $(this).hasClass("workday")){
						$(this).removeClass("workday");
					}
					if(new_class == 'lawday' && $(this).hasClass("tradeday")){
						$(this).removeClass("tradeday");
					}
					if(new_class == 'workday' && ($(this).hasClass("win_holi") || $(this).hasClass("sum_holi"))){
						$(this).removeClass("workday");
					}
				}
			}
		});
		
	}
	
	
	function changeHandle(){
		m=0;
		change();
		
	}
	
	//设置开始日期和结束日期
	function setDateInfo(start_date,end_date){
		$("#hd-start-date").val( start_date);
		$("#hd-end-date").val(end_date);
		var m_type=$("#hd-type-option").val(); 
		if(start_date == end_date){
			$(".endtime").hide();
			$("#modaltitle").html("设置当日");	
			var year=$("#cen_year").text();
			var data={
				year		: year,
				start_date	: start_date,	
			};
			$.post("<?php  echo $this->createWebUrl('indexajax', array('op' => 			'getdatesetinfo','schoolid'=>$schoolid,'weid'=>$weid,'checkdatesetid'=>$checkdatesetid))?>",data, function(data){
				var type = data.type;
				if(type == 5 ){
					var dateset = data.getall;
					if(dateset != null){
						for ( var k = 0; k <dateset.length; k++){
							var i = k + 1 ;
							if(dateset[k].start != 0 || dateset[k].start != null){
								$("input[name='start_time"+i+"']").val(dateset[k].start);
							}
							if(dateset[k].end != 0 || dateset[k].end != null){
								$("input[name='end_time"+i+"']").val(dateset[k].end);
							}
						}
					}
					var html =   '<option value="workday" >正常设置</option>' 
						+ '<option value="tradeday" > 放假 </option>' 
						+ '<option value="lawday"  selected="selected"  >上课（特殊设置）</option>';
					$("#hd-type-option").html(html);
				}else if(type == 6 ){
					$("input[name='start_time1']").val('00:00');
					$("input[name='end_time1']").val('00:00');
					$("input[name='start_time2']").val('00:00');
					$("input[name='end_time2']").val('00:00');
					$("input[name='start_time3']").val('00:00');
					$("input[name='end_time3']").val('00:00');
					$("input[name='start_time4']").val('00:00');
					$("input[name='end_time4']").val('00:00');
					$("input[name='start_time5']").val('00:00');
					$("input[name='end_time5']").val('00:00');
					var html =   '<option value="workday" >正常设置</option>' 
						+ '<option value="tradeday"  selected="selected"  > 放假 </option>' 
						+ '<option value="lawday"  >上课（特殊设置）</option>';
					$("#hd-type-option").html(html);
				}else{
					$("input[name='start_time1']").val('00:00');
					$("input[name='end_time1']").val('00:00');
					$("input[name='start_time2']").val('00:00');
					$("input[name='end_time2']").val('00:00');
					$("input[name='start_time3']").val('00:00');
					$("input[name='end_time3']").val('00:00');
					$("input[name='start_time4']").val('00:00');
					$("input[name='end_time4']").val('00:00');
					$("input[name='start_time5']").val('00:00');
					$("input[name='end_time5']").val('00:00');
					var html =   '<option value="workday" >正常设置</option>' 
						+ '<option value="tradeday"  selected="selected"  > 放假 </option>' 
						+ '<option value="lawday"  >上课（特殊设置）</option>';
					$("#hd-type-option").html(html);
				
				}
			},
		'json');
				
		}else{ 
			$(".endtime").show();
			$(".time_show").hide();
				var html =   '<option value="win_holi" >寒假</option>'
							+'<option value="sum_holi" >暑假</option>';
			$("#hd-type-option").html(html);
			$("#modaltitle").html("设置时间段");	
		}
	}
	
	
	function open_modal(start_date,end_date){
		var year=$("#cen_year").text();
		start_date=year+"-"+start_date;
		end_date=year+"-"+end_date;
		if(start_date!=null){
			setDateInfo(start_date,end_date);
		}
		
		$("#calendar-modal-1").modal();
		$(".month-container .selected").removeClass("selected");
	}
	

	
	/*改变年份*/
	function renderYear(year, el, disabledDay, value) {
		el.find('td').unbind();
		var s = '', values = ',' + value.join(',') + ',';
		for (var i = 1; i <= 12; i++)
			s += renderMonth(year, i, false, disabledDay, values);
			s+="<div class='date_clear'></div>";
		el
				.find('div.picker')
				.html(s)
				.find('td')
				.click(/*单击日期单元格*/
						/* 
						function() {
							if (!/disabled|empty/g.test(this.className))
								$(this).toggleClass('selected');
							if (this.className.indexOf('empty') == -1
									&& typeof el.data('config').cellClick == 'function')
								el
										.data('config')
										.cellClick(
												getDateStr(this),
												this.className
														.indexOf('disabled') != -1);
						} */);
		changeHandle();
		day_drap_listen();
		
	}
		/*根据日期判断大小 开始值小于结束值返回true  */
	function checkDate(start, end){
		var rs=false;
		var start_month=parseInt(start.split("-")[0]);
		var start_day=parseInt(start.split("-")[1]);
		var end_month=parseInt(end.split("-")[0]);
		var end_day=parseInt(end.split("-")[1]);
		if(start_month==end_month){
			if(start_day<end_day){
				rs=true;
			}
		}else if(start_month<end_month){
			rs=true;
		}
		return rs;
	}
	
	/*按月*/
	function renderMonth(year, month, clear, disabledDay, values) {
		var d = new Date(year, month - 1, 1), s = "<div class='month-container'>"+'<table cellpadding="3" cellspacing="1" border="0"'
				+ (clear ? ' class="right"' : '')
				+ '>'
				+ '<tr><th colspan="7" class="head"  index="'+month+'">' /* + year + '年'  */
				+month_arry[month-1] 
				+ '</th></tr>'
				+ '<tr><th class="weekend">'+week_arry[0]+'</th><th>'+week_arry[1]+'</th><th>'+week_arry[2]+'</th><th>'+week_arry[3]+'</th><th>'+week_arry[4]+'</th><th>'+week_arry[5]+'</th><th class="weekend">'+week_arry[6]+'</th></tr>';
		var dMonth = month - 1;
		var firstDay = d.getDay(), hit = false;
		s += '<tr>';
		for (var i = 0; i < 7; i++)
			if (firstDay == i || hit) {
				s += '<td'
						+ tdClass(i, disabledDay, true, values, year
								+ '-' + month + '-' + d.getDate())
						+'id="'+ year + '-' + month + '-' +d.getDate()+'" >' + d.getDate() + '</td>';
				d.setDate(d.getDate() + 1);
				hit = true;
			} else
				s += '<td' + tdClass(i, disabledDay, false)
						+ '>&nbsp;</td>';
		s += '</tr>';
		for (var i = 0; i < 5; i++) {
			s += '<tr>';
			for (var j = 0; j < 7; j++) {
				s += '<td'
						+ tdClass(j, disabledDay,
								d.getMonth() == dMonth, values, year
										+ '-' + month + '-'
										+ d.getDate())
						+'id="'+ year + '-' + month + '-' +d.getDate()+'" >' 
						+ (d.getMonth() == dMonth ? d.getDate()
								: '&nbsp;') + '</td>';
				d.setDate(d.getDate() + 1);
			}
			s += '</tr>';
		}
		return s + '</table></div>' + (clear ? '<br>' : '');
	}
	
	
	function change(){
		var obj=$(aim_div);
		var m_obj=$(".fullYearPicker .month-container");
		var width=obj.width();
		var class_width="month-width-";
		n=parseInt(width/200);
		if(n==5)n=4;
		if(n>6)n=6;
		
		if(n!=m){
			m_obj.removeClass(class_width+m);
			m_obj.addClass(class_width+n);
			m=n;
		}
		
	};
	
	//切换年份时执行
	/*js上色渲染函数*/
	function tdClass(i, disabledDay, sameMonth, values, dateStr) {
		var cls = i == 0 || i == 6 ? 'weekend' : '';
		if (disabledDay && disabledDay.indexOf(i) != -1)
			cls += (cls ? ' ' : '') + 'disabled';
		if (!sameMonth){
			cls += (cls ? ' ' : '') + 'empty';
		}else{
			cls += (cls ? ' ' : '') + 'able_day workday';
		}
		if (sameMonth && values && cls.indexOf('disabled') == -1
				&& values.indexOf(',' + dateStr + ',') != -1)
			cls += (cls ? ' ' : '') + 'selected';
		return cls == '' ? '' : ' class="' + cls + '"' +'id="' + dateStr +'" ' ;
	}
	
	function gettest(){
		$("#2018-9-30").addClass("test");
	};
	
	function GetHoli(){
		var year = $("#cen_year").text();
		$.post("<?php  echo $this->createWebUrl('indexajax', array('op' => 			'getcheckholi','schoolid'=>$schoolid,'weid'=>$weid,'checkdatesetid'=>$checkdatesetid))?>",{year:year}, function(data){
				arr_sum = data.sum;
				arr_win = data.win;
				arr_tradeday = data.tradeday;
				arr_lawday = data.lawday;
				console.log(data);
				if(arr_sum != null){
					for ( var i = 0; i <arr_sum.length; i++){
						$("#"+arr_sum[i]).removeClass("workday");
						$("#"+arr_sum[i]).addClass("sum_holi");
					}
				}
				if(arr_win != null){
					for ( var k = 0; k <arr_win.length; k++){
						$("#"+arr_win[k]).removeClass("workday");
						$("#"+arr_win[k]).addClass("win_holi");
					}
				}
				if(arr_tradeday != null){
					for ( var k = 0; k <arr_tradeday.length; k++){
						$("#"+arr_tradeday[k].date).removeClass("workday");
						$("#"+arr_tradeday[k].date).addClass("tradeday");
					}
				}
				if(arr_lawday != null){
					for ( var k = 0; k <arr_lawday.length; k++){
						$("#"+arr_lawday[k].date).removeClass("workday");
						$("#"+arr_lawday[k].date).addClass("lawday");
					}
				}
			},
		'json');
	
	}
	
</script>




 
<?php  } ?>
