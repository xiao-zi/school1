<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
 <style>
.cLine {overflow: hidden;padding: 5px 0;color:#000000;}
.alert {padding: 8px 35px 0 10px;text-shadow: none;-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);background-color: #f9edbe;border: 1px solid #f0c36d;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;color: #333333;margin-top: 5px;}
.alert p {margin: 0 0 10px;display: block;}
.alert .bold{font-weight:bold;}
.form-control-excel {height: 34px;padding: 6px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);box-shadow: inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
 </style>
<?php  if($operation == 'display') { ?>
<div class="main">
    <div class="panel panel-info">
        <div class="panel-heading">固定课表管理</div>
        <div class="panel-body">
            <form action="./index.php" method="get" class="form-horizontal" role="form">
                <input type="hidden" name="c" value="site" />
                <input type="hidden" name="a" value="entry" />
                <input type="hidden" name="m" value="weixuexiao" />
                <input type="hidden" name="do" value="cook" />
                <input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
                <div class="form-group">
                    <div class="col-sm-2 col-lg-2">                      
                        <a class="btn btn-primary qx_1002" href="<?php  echo $this->createWebUrl('timetable', array('op' => 'post', 'schoolid' => $schoolid))?>"><i class="fa fa-plus"></i> 添加课表</a>
                    </div>
                </div>    
            </form>
        </div>
    </div> 
	<div class="cLine">
		<div class="alert">
			<p>
				<span class="bold">使用方法：</span>选择班级，选择时段，选择科目<br/>
				<strong><font color='red'>特别提醒: 自由设置 自由安排 注意排序，每天1-12节课可填 ，不填则留空，前端只显示填写的</font></strong>
			</p>
		</div>
	</div>	
    <div class="panel panel-default">
        <div class="table-responsive panel-body">
			<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
			<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
			<table class="table table-hover">
				<thead class="navbar-inner">
					<tr>
						<th class='with-checkbox' style="width: 3%;"><input type="checkbox" class="check_all" /></th>
						<th style="width:10%">名称</th>
						<th style="width:15%">班级</th>
						<th style="width:15%;">时间</th>
						<th style="width:8%;">是否显示</th>
						<th  style="text-align:right; width:8%;">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php  if(is_array($list)) { foreach($list as $item) { ?>
					<tr>
						<td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $item['id'];?>"></td>
						<td style="overflow:visible; word-break:break-all; text-overflow:auto;white-space:normal"><?php  echo $item['title'];?></td>
						<td style="overflow:visible; word-break:break-all; text-overflow:auto;white-space:normal"><?php  echo $item['njname'];?>|<?php  echo $item['bjname'];?></td>
						<td style="overflow:visible; word-break:break-all; text-overflow:auto;white-space:normal">
						  <div><span class="label label-info"><?php  echo date('Y-m-d',$item['begintime'])." 至 ".date('Y-m-d',$item['endtime'])?></span></div>                   
						</td>
						<td class="qx_1002"><input  type="checkbox" value="<?php  echo $item['ishow'];?>" name="ishow[]" data-id="<?php  echo $item['id'];?>" <?php  if($item['ishow'] == 1) { ?>checked<?php  } ?> ></td>
							<td class="qx_1002_show" style="display: none;">
							<?php  if($item['ishow'] == 1) { ?>
							<span class="label label-success " >是	</span>
							<?php  } else if($item['ishow'] == 2 ) { ?>
							<span class="label label-danger " >否	</span>
							<?php  } ?>
							</td>	
						
						<td  style="text-align:right;">
							<a class="btn btn-default btn-sm  qx_bj_ck" href="<?php  echo $this->createWebUrl('timetable', array('op' => 'post','schoolid' => $schoolid,'id' => $item['id']))?>" title="编辑"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
							<a class="btn btn-default btn-sm qx_1003" href="<?php  echo $this->createWebUrl('timetable', array('op' => 'delete', 'schoolid' => $schoolid,'id' => $item['id']))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" title="删除"><i class="fa fa-times"></i></a>
						</td>
					</tr>
					<?php  } } ?>
				</tbody>
				<tr>
					<td colspan="10">
						<input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
						<input type="button" class="btn btn-primary qx_1003" name="btndeleteall" value="批量删除" />
					</td>
				</tr>
			</table>
			</form>
        </div>
    </div>
	<?php  echo $pager;?>
</div>
<script type="text/javascript">

    var category = <?php  echo json_encode($children)?>;

$(function(){
    $(".check_all").click(function(){
        var checked = $(this).get(0).checked;
        $("input[type=checkbox]").attr("checked",checked);
    });

    $("input[name=btndeleteall]").click(function(){
        var check = $("input[type=checkbox][class!=check_all]:checked");
        if(check.length < 1){
            alert('请选择要删除的课表!');
            return false;
        }
        if(confirm("确认要删除选择的课表?")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            var url = "<?php  echo $this->createWebUrl('timetable', array('op' => 'deleteall', 'schoolid' => $schoolid))?>";
            $.post(
                url,
                {idArr:id},
                function(data){
                    if(data.result){
					    alert(data.msg);
                        location.reload();
                    }else{
                        alert(data.msg);
                    }
                },'json'
            );
        }
    });

});
require(['jquery', 'util', 'bootstrap.switch'], function($, u){

	$(':checkbox[name="ishow[]"]').bootstrapSwitch();
	$(':checkbox[name="ishow[]"]').on('switchChange.bootstrapSwitch', function(e, state){
		var ishow = this.checked ? 1 : 2;
		var id = $(this).data('id');
		$.post("<?php  echo $this->createWebUrl('timetable', array('op' => 'change','schoolid' => $schoolid))?>", {ishow: ishow, id: id}, function(resp){
			setTimeout(function(){
				//location.reload();
			}, 500)
		});
	});
});

</script>
<!--添加&编辑-->
<?php  } else if($operation == 'post') { ?>
<style>
.template .item{position:relative;display:block;float:left;border:1px #ddd solid;border-radius:5px;background-color:#fff;padding:5px;width:100px;margin:0 20px 20px 0; overflow:hidden;}
.template .title{margin:5px auto;line-height:2em;}
.template .title a{text-decoration:none;}
.template .item img{width:100px;height:100px; cursor:pointer;}
.template .title .fa{display:none}
.template .active .fa.fa-check{display:inline-block;position:absolute;bottom:33px;right:6px;color:#FFF;background:#009CD6;padding:5px;font-size:14px;border-radius:0 0 6px 0;}
.template .fa.fa-times{cursor:pointer;display:inline-block;position:absolute;top:10px;right:6px;color:#D9534F;background:#ffffff;padding:5px;font-size:14px;text-decoration:none;}
.template .fa.fa-times:hover{color:red;}
.template .item-bg{width:100%; height:342px; background:#000; position:absolute; z-index:1; opacity:0.5; margin:-5px 0 0 -5px;}
.template .item-build-div1{position:absolute; z-index:2; margin:-5px 10px 0 5px; width:168px;}
.template .item-build-div2{text-align:center; line-height:30px; padding-top:150px;}
</style>
<div class="panel panel-info">
   <div class="panel-heading"><a class="btn btn-primary" onclick="javascript :history.back(-1);"><i class="fa fa-tasks"></i> 返回列表</a></div>
</div>
<div class="main">
	<div id="Layer2" class="qx_1002_show" style="display:none; background-color: gray;opacity:0.1;position:absolute; width:100%; height:100%; z-index:9999; padding-bottom: 20px; filter:Alpha(opacity=30)" >
	</div>
<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
        <input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
        <div class="panel panel-default">
            <div class="panel-heading">基础设置</div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">课表名称：</label>
                    <div class="col-sm-2 col-lg-2">                     
                         <div class="input-group">                    
                            <input type="text" class="form-control" placeholder="如：3年级一班课程表" name="title" value="<?php  echo $item['title'];?>" />
                         </div>
						 <div class="help-block">课程名称可以为空</div>
                    </div>                
                    <div class="col-sm-2 col-lg-2">
                        <label class="radio-inline">
                            <input type="radio" name="ishow" value="1" <?php  if($item['ishow']==1 || empty($item)) { ?>checked<?php  } ?>>是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="ishow" value="0" <?php  if(isset($item['ishow']) && empty($item['ishow'])) { ?>checked<?php  } ?>>否
                        </label>
                        <div class="help-block">是否启用</div>
                    </div>    
                    </div>                        
                    <div class="form-group">                    
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">开始时间:</label>
                     <div class="col-sm-2 col-lg-2">
                        <div class="input-group">
						<?php  if(!empty($item['begintime'])) { ?><?php  echo tpl_form_field_date('begintime', date('Y-m-d', $item['begintime']))?><?php  } else { ?><?php  echo tpl_form_field_date('begintime', date('Y-m-d', TIMESTAMP))?><?php  } ?>
                        </div>
                     </div>
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">结束时间:</label>
                     <div class="col-sm-2 col-lg-2">
                        <div class="input-group">
						<?php  if(!empty($item['endtime'])) { ?><?php  echo tpl_form_field_date('endtime', date('Y-m-d', $item['endtime']))?><?php  } else { ?><?php  echo tpl_form_field_date('endtime', date('Y-m-d', TIMESTAMP))?><?php  } ?>
                        </div>
                     </div>    
                     </div>
                    <div class="form-group">
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">所属班级</label>
						<div class="col-sm-2 col-lg-2">
								<select style="margin-right:15px;" name="bj_id" class="form-control">
									<option value="0">请选择班级</option>
									<?php  if(is_array($bjlist)) { foreach($bjlist as $it) { ?>
										<option value="<?php  echo $it['sid'];?>" <?php  if($it['sid'] == $item['bj_id']) { ?> selected="selected"<?php  } ?>><?php  echo $it['njname'];?>|<?php  echo $it['sname'];?></option>
									<?php  } } ?>
								</select>
						</div> 					
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">排序</label>
						<div class="col-sm-2 col-lg-2">
							<input type="text" name="sort" value="<?php  echo $item['sort'];?>" id="sort" class="form-control" />
						</div>        
                    </div>
             </div>                                               
        </div>
        <div class="clearfix template">        
            <div class="panel panel-default">    
                <div class="panel-body">
                      <div class="item item-style">
                          <div class="title">
                                <img src="../addons/weixuexiao/public/web/recipe/1.jpg" class="img-rounded" />   
                          </div>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">1</div>
                            <select name="mon_1_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_1_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="mon_1_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_1_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">2</div>
                            <select name="mon_2_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_2_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="mon_2_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_2_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">3</div>
                            <select name="mon_3_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_3_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="mon_3_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_3_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>    
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">4</div>
                            <select name="mon_4_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_4_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="mon_4_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_4_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">5</div>
                            <select name="mon_5_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_5_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="mon_5_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_5_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">6</div>
                            <select name="mon_6_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_6_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="mon_6_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_6_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">7</div>
                            <select name="mon_7_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_7_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="mon_7_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_7_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">8</div>
                            <select name="mon_8_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_8_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="mon_8_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_8_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">9</div>
                            <select name="mon_9_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_9_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="mon_9_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_9_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">10</div>
                            <select name="mon_10_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_10_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="mon_10_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_10_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">11</div>
                            <select name="mon_11_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_11_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="mon_11_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_11_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">12</div>
                            <select name="mon_12_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_12_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="mon_12_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $monarr['mon_12_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>					  
               </div>
            </div>
            <div class="panel panel-default">    
                <div class="panel-body">
                      <div class="item item-style">
                          <div class="title">
                                <img src="../addons/weixuexiao/public/web/recipe/2.jpg" class="img-rounded" />   
                          </div>
                      </div>                
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">1</div>
                            <select name="tus_1_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_1_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="tus_1_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_1_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">2</div>
                            <select name="tus_2_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_2_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="tus_2_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_2_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">3</div>
                            <select name="tus_3_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_3_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="tus_3_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_3_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>    
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">4</div>
                            <select name="tus_4_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_4_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="tus_4_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_4_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">5</div>
                            <select name="tus_5_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_5_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="tus_5_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_5_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">6</div>
                            <select name="tus_6_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_6_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="tus_6_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_6_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">7</div>
                            <select name="tus_7_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_7_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="tus_7_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_7_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">8</div>
                            <select name="tus_8_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_8_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="tus_8_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_8_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">9</div>
                            <select name="tus_9_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_9_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="tus_9_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_9_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">10</div>
                            <select name="tus_10_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_10_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="tus_10_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_10_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">11</div>
                            <select name="tus_11_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_11_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="tus_11_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_11_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">12</div>
                            <select name="tus_12_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_12_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="tus_12_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $tusarr['tus_12_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>                      
               </div>
            </div>
            <div class="panel panel-default">    
                <div class="panel-body">
                      <div class="item item-style">
                          <div class="title">
                                <img src="../addons/weixuexiao/public/web/recipe/3.jpg" class="img-rounded" />   
                          </div>
                      </div>                
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">1</div>
                            <select name="wed_1_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_1_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="wed_1_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_1_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">2</div>
                            <select name="wed_2_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_2_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="wed_2_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_2_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">3</div>
                            <select name="wed_3_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_3_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="wed_3_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_3_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>    
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">4</div>
                            <select name="wed_4_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_4_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="wed_4_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_4_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">5</div>
                            <select name="wed_5_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_5_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="wed_5_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_5_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">6</div>
                            <select name="wed_6_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_6_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="wed_6_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_6_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">7</div>
                            <select name="wed_7_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_7_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="wed_7_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_7_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">8</div>
                            <select name="wed_8_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_8_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="wed_8_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_8_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">9</div>
                            <select name="wed_9_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_9_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="wed_9_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_9_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">10</div>
                            <select name="wed_10_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_10_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="wed_10_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_10_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">11</div>
                            <select name="wed_11_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_11_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="wed_11_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_11_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">12</div>
                            <select name="wed_12_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_12_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="wed_12_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $wedarr['wed_12_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>                    
               </div>
            </div>
            <div class="panel panel-default">    
                <div class="panel-body">
                      <div class="item item-style">
                          <div class="title">
                                <img src="../addons/weixuexiao/public/web/recipe/4.jpg" class="img-rounded" />   
                          </div>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">1</div>
                            <select name="thu_1_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_1_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="thu_1_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_1_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">2</div>
                            <select name="thu_2_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_2_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="thu_2_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_2_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">3</div>
                            <select name="thu_3_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_3_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="thu_3_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_3_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>    
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">4</div>
                            <select name="thu_4_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_4_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="thu_4_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_4_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">5</div>
                            <select name="thu_5_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_5_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="thu_5_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_5_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">6</div>
                            <select name="thu_6_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_6_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="thu_6_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_6_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">7</div>
                            <select name="thu_7_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_7_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="thu_7_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_7_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">8</div>
                            <select name="thu_8_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_8_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="thu_8_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_8_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">9</div>
                            <select name="thu_9_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_9_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="thu_9_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_9_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">10</div>
                            <select name="thu_10_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_10_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="thu_10_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_10_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">11</div>
                            <select name="thu_11_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_11_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="thu_11_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_11_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">12</div>
                            <select name="thu_12_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_12_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="thu_12_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $thuarr['thu_12_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>                     
               </div>
            </div>
            <div class="panel panel-default">    
                <div class="panel-body">
                      <div class="item item-style">
                          <div class="title">
                                <img src="../addons/weixuexiao/public/web/recipe/5.jpg" class="img-rounded" />   
                          </div>
                      </div>                
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">1</div>
                            <select name="fri_1_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_1_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="fri_1_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_1_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">2</div>
                            <select name="fri_2_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_2_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="fri_2_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_2_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">3</div>
                            <select name="fri_3_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_3_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="fri_3_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_3_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>    
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">4</div>
                            <select name="fri_4_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_4_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="fri_4_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_4_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">5</div>
                            <select name="fri_5_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_5_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="fri_5_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_5_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">6</div>
                            <select name="fri_6_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_6_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="fri_6_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_6_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">7</div>
                            <select name="fri_7_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_7_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="fri_7_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_7_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">8</div>
                            <select name="fri_8_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_8_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="fri_8_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_8_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">9</div>
                            <select name="fri_9_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_9_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="fri_9_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_9_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">10</div>
                            <select name="fri_10_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_10_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="fri_10_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_10_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">11</div>
                            <select name="fri_11_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_11_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="fri_11_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_11_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">12</div>
                            <select name="fri_12_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_12_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="fri_12_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $friarr['fri_12_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>                     
               </div>
            </div>    
            <div class="panel panel-default">    
                <div class="panel-body">
                      <div class="item item-style">
                          <div class="title">
                                <img src="../addons/weixuexiao/public/web/recipe/6.jpg" class="img-rounded" />   
                          </div>
                      </div>                
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">1</div>
                            <select name="sat_1_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_1_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sat_1_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_1_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">2</div>
                            <select name="sat_2_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_2_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sat_2_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_2_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">3</div>
                            <select name="sat_3_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_3_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sat_3_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_3_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>    
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">4</div>
                            <select name="sat_4_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_4_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sat_4_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_4_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">5</div>
                            <select name="sat_5_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_5_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sat_5_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_5_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">6</div>
                            <select name="sat_6_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_6_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sat_6_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_6_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">7</div>
                            <select name="sat_7_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_7_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sat_7_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_7_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">8</div>
                            <select name="sat_8_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_8_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sat_8_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_8_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">9</div>
                            <select name="sat_9_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_9_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sat_9_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_9_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">10</div>
                            <select name="sat_10_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_10_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sat_10_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_10_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">11</div>
                            <select name="sat_11_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_11_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sat_11_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_11_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">12</div>
                            <select name="sat_12_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_12_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sat_12_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $satarr['sat_12_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>                   
               </div>
            </div>        
            <div class="panel panel-default">    
                <div class="panel-body">
                      <div class="item item-style">
                          <div class="title">
                                <img src="../addons/weixuexiao/public/web/recipe/7.jpg" class="img-rounded" />   
                          </div>
                      </div>                
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">1</div>
                            <select name="sun_1_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_1_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sun_1_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_1_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">2</div>
                            <select name="sun_2_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_2_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sun_2_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_2_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">3</div>
                            <select name="sun_3_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_3_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sun_3_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_3_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>    
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">4</div>
                            <select name="sun_4_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_4_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sun_4_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_4_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">5</div>
                            <select name="sun_5_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_5_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sun_5_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_5_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">6</div>
                            <select name="sun_6_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_6_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sun_6_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_6_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">7</div>
                            <select name="sun_7_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_7_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sun_7_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_7_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">8</div>
                            <select name="sun_8_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_8_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sun_8_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_8_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">9</div>
                            <select name="sun_9_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_9_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sun_9_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_9_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">10</div>
                            <select name="sun_10_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_10_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sun_10_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_10_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">11</div>
                            <select name="sun_11_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_11_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sun_11_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_11_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>
                      <div class="item item-style">
                            <div style=" height:28px;text-align:center;color:red;font-size:20px;">12</div>
                            <select name="sun_12_sd" class="form-control">
                                <option value="0">请选择时段</option>
								<?php  if(is_array($allsd)) { foreach($allsd as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_12_sd']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                            <select name="sun_12_km" class="form-control">
                                <option value="0">请选择科目</option>
								<?php  if(is_array($allkm)) { foreach($allkm as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $sunarr['sun_12_km']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
                            </select>
                      </div>                    
               </div>
            </div>                
        </div>
        <div class="form-group col-sm-12">
            <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1 qx_1002" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
    </form>
</div> 
<?php  } ?>
<script type="text/javascript">
$(function(){
	<?php  if(!(IsHasQx($tid_global,1001002,1,$schoolid))) { ?>
		$(".qx_1002").hide();
		$(".qx_1002_show").show();
		$(".qx_bj_ck").attr("title","查看");
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001003,1,$schoolid))) { ?>
		$(".qx_1003").hide();
		
	<?php  } ?>
});	
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>