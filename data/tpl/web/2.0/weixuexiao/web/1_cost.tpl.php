<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<?php  if($operation == 'display') { ?>

<div class="main">
<style>	
.form-control-excel {height: 34px;padding: 6px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);box-shadow: inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-primary, .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-primary {
    color: #fff;
    background: #a0053b;
}
</style>
    <div class="panel panel-info">
        <div class="panel-heading">缴费管理</div>
        <div class="panel-body">
            <form action="./index.php" method="get" class="form-horizontal" role="form">
                <input type="hidden" name="c" value="site" />
                <input type="hidden" name="a" value="entry" />
                <input type="hidden" name="m" value="weixuexiao" />
                <input type="hidden" name="do" value="cost" />
				<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="width: 100px;">按名称</label>
                    <div class="col-sm-2 col-lg-2">
                        <input class="form-control" name="name" id="" type="text" value="<?php  echo $_GPC['name'];?>">
                    </div>
                    <div class="col-sm-2 col-lg-2">
                        <button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
                    </div>	
                    <div class="col-sm-2 col-lg-2">  
						<a class="btn btn-primary qx_2002" href="<?php  echo $this->createWebUrl('cost', array('op' => 'post', 'schoolid' => $schoolid))?>"><i class="fa fa-plus"></i> 添加项目</a>
						<a class="btn btn-primary" href="javascript:location.reload()"><i class="fa fa-refresh"></i>刷新</a>
					</div>	
					<div class="col-sm-2 col-lg-2">	
						<a class="btn btn-success qx_2101" href="<?php  echo $this->createWebUrl('payall', array('op' => 'display', 'schoolid' => $schoolid))?>">缴费总揽</a>
                    </div>					
				</div>			
            </form>
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
							<th style="width:8%">项目名称</th>
							<th class="qx_2002" style="width:6%">是否启用</th>
							<th style="width:6%;">金额</th>
							<th style="width:5%;">适用班级</th>
							<th style="width:15%;">关联功能</th>
							<th style="width:8%;">时间限制</th>
							<th style="width:8%;">指定时间范围</th>
							<th style="width:8%;">描述</th>
							<th style="width:8%;">已付人数</th>
							<th class="qx_e_d" style="text-align:right; width:10%;">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php  if(is_array($list)) { foreach($list as $item) { ?>
						<tr>
							<td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $item['id'];?>"></td>
							<td><a href="<?php  echo $this->createWebUrl('cost', array('op' => 'post', 'id' => $item['id'], 'schoolid' =>  $schoolid))?>" title="管理">
								<img src="<?php  echo tomedia($item['icon'])?>" onerror="this.src='./resource/images/nopic.jpg';" width="60px;" style="border-radius: 3px;">
								<br/><?php  echo $item['name'];?></a>
							</td>
							<td class="qx_2002"><input type="checkbox" value="<?php  echo $item['is_on'];?>" name="is_on" data-id="<?php  echo $item['id'];?>" <?php  if($item['is_on'] == 1) { ?>checked<?php  } ?>></td>
							<td><?php  echo $item['cost'];?></td>	
							<td>
								<?php  if(empty($item['bj_id'])) { ?>
									<span class="label label-danger">未关联</span>
								<?php  } else { ?>
									<span class="label label-success">已关联</span></br>
									<?php  if(!$_W['schooltype']) { ?>
									<div class="btn btn-info btn-sm" title="查看各班缴费情况" href="javascript::;" data-toggle="tooltip" data-placement="top" onclick="show_bj_pay(<?php  echo $item['id'];?>);">缴费详情</div>
									<?php  } ?>
								<?php  } ?>
							</td>
							<td><?php  if(!empty($item['displayorder'])) { ?><?php  echo $item['displayorder'];?><?php  } else { ?><span class="label label-danger">不关联</span><?php  } ?></td>	
							<td>
							<?php  if($item['is_time'] ==2) { ?>
								<?php  echo $item['dataline'];?>天
							<?php  } else { ?>
								<span class="label label-danger">未启用</span>
							<?php  } ?>	
							</td>
							<td>
							<?php  if($item['is_time'] ==1) { ?>
								<span class="label label-info">开始</span>&nbsp;<?php  echo date('Y-m-d', $item['starttime'])?></br></br>
								<span class="label label-info">结束</span>&nbsp;<?php  echo date('Y-m-d', $item['endtime'])?>
							<?php  } else { ?>
								<span class="label label-danger">未启用</span>
							<?php  } ?>	
							</td>	
							<td>
								<?php  if(!empty($item['description'])) { ?><span class="label label-success">有收费介绍</span><?php  } else { ?><span class="label label-danger">无介绍</span><?php  } ?>                       
							</td>							
							<td>
								<span class="label label-success"><?php  echo $item['ordercount'];?>人</span>
								<a class="btn btn-default btn-sm qx_2101" href="<?php  echo $this->createWebUrl('payall', array('op' => 'display', 'obid' => $item['id'], 'schoolid' =>  $schoolid))?>" title="查看"><i class="fa fa-qrcode">&nbsp;查看</i></a>
							</td>
							<td class="qx_e_d" style="text-align:right;">
								<a class="btn btn-info btn-sm qx_2002" href="<?php  echo $this->createWebUrl('cost', array('op' => 'clearorder', 'id' => $item['id'], 'schoolid' =>  $schoolid))?>" onclick="return confirm('此操作不可恢复，确认清空所有订单？');return false;" title="删除"><i class="fa fa-trash-o">清空订单</i></a>
								<a class="btn btn-default btn-sm qx_2002" href="<?php  echo $this->createWebUrl('cost', array('id' => $item['id'], 'op' => 'post', 'schoolid' => $schoolid))?>" title="编辑"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a class="btn btn-default btn-sm qx_2003" href="<?php  echo $this->createWebUrl('cost', array('id' => $item['id'], 'op' => 'delete', 'schoolid' => $schoolid))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" title="删除"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php  } } ?>
					</tbody>
					<tr>
						<td colspan="10">
							<input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
							<input type="button" class="btn btn-primary qx_2003" name="btndeleteall" value="批量删除" />
						</td>
					</tr>
				</table>
			<?php  echo $pager;?>
			</form>
        </div>
    </div>
</div>
<style>
.now_porint{width: 13px;padding-right: 2px;}
.suc_icon{width: 13px;padding-right: 2px;}
.text_new{white-space: nowrap;overflow: hidden; text-overflow: ellipsis;margin: 3px;}
.modal-title{text-align:center;color:#333;font-size: 17px;}
.modal-left{width:47%;float:left;max-height: 400px;}
.modal-right{width:47%;float:left;margin-left: 30px;max-height: 400px;}
.group_left{padding: 20px;text-align:left;border-radius: 6px;background: #acefdf59;}
.group_right{padding: 20px;text-align:left;border-radius: 6px;background: #ca193c14;}
.conent_load{width: 25px; height: 29px; display: inline-block; background: url(<?php echo MODULE_URL;?>public/mobile/img/gh_xh_wating.gif) no-repeat center center / 25px 29px;}
.qxbq{float:right;font-size:10px;margin-top: -5px;}
.qxqx{float:right;font-size:10px;margin-top: -5px;}
.iconss{font-size:10px}
</style>
<div class="modal fade" style="min-width: 600px!important;" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content" style="border-radius: 20px;">
			<div class="modal-header">
				<h4 class="modal-title" style="text-align:center;color:#333;font-size: 17px;">各班缴费情况</h4>
			</div>
			<input id="nowcost" type="hidden" value="">
			<div class="modal-body" style="width: 100%;">
				<div class="js-menu-container" ng-controller="MenuCtrl" ng-cloak>
					<div class="panel we7-panel">
						<div class="panel-body system-menu-list">
							<ul class="one">
							</ul>
						</div>
					</div>
				</div>
				<script type="text/javascript">
					$(function(){
						angular.bootstrap($('.js-menu-container'), ['systemApp']);
					});
				</script>
			</div>
			<div class="modal-footer" style="border-radius: 6px;">
				<input type="submit" onclick="tijiao('txff')" class="btn btn-info" value="提醒付费">
				<input type="submit" onclick="tijiao('make')" class="btn btn-success" value="生成订单">
				<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" style="min-width: 300px!important;" id="Modal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog" style="top: 241px!important;">
		<div class="modal-content" style="border-radius: 20px;">
			<div class="modal-header">
				<h4 class="modal-title" style="text-align:center;color:#333;font-size: 17px;">提示</h4>
			</div>
			<div class="modal-body" style="width: 100%;">
				<div class="modal-body" style="width: 100%;text-align:center"><div class="conent_load asdasww"></div>请勿关闭本窗口，数据较多，请耐心等待....</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
var suc_icon = "<?php echo OSSURL;?>public/mobile/img/icon-checked.png";
var err_icon = "<?php echo OSSURL;?>public/mobile/img/yellowfork.png";
function show_bj_pay(costid){
	$('#Modal3').modal('toggle');
	let nowcost = $("#nowcost").val();
	if(nowcost != costid){
		$('.one').empty();
		let loadcont = "<div class='modal-body' style='width: 100%;text-align:center'><div class='conent_load'></div>拼命加载中....</div>"
		$('.one').html(loadcont);//加载动画
		$("#nowcost").val(costid);
		$.ajax({
			url: "<?php  echo $this->createWebUrl('indexajax',array('op'=>'getclassbyarr','schoolid'=>$schoolid))?>"+"&costid="+costid,
			type: "POST",
			dataType: "html",
			success: function (res) {
				$('.conent_load').hide();
				$('.one').html(res);
			}
		});
	}
}
function tijiao(type){
	var all_select_id = '';
	var len = $("input:checkbox:checked").length;
	$(".idss").each(function(i) {
		if($(this).is(':checked')){
			if(i == len-1){
				all_select_id += $(this).val();
			}else{
				all_select_id += $(this).val() + ',';
			}
		}
	});
	if(all_select_id == '' || all_select_id == null){
		alert("请选择学生！");
		return false;
	}else{
		$('#Modal').modal('toggle');
		$('.asdasww').show();
		let nowcost = $("#nowcost").val();
		$("#Modal3").css("position","initial");
		var data = {
			type:type,
			costid:nowcost,
			all_select_id:all_select_id
		}
		$.ajax({
			url: "<?php  echo $this->createWebUrl('indexajax',array('op'=>'makeorder','schoolid'=>$schoolid))?>",
			type: "POST",
			data:data,
			dataType: "json",
			success: function (res) {
				alert(res.msg);
				$('.asdasww').hide();
				$('#Modal').modal('toggle');
				$("#Modal3").css("position","fixed");
			},
			error: function (res) {
				alert("网络错误");
				$('.asdasww').hide();
				$('#Modal').modal('toggle');
				$("#Modal3").css("position","fixed");
			}
		});
	}
}
$(function(){
	var e_d = 2 ;
	<?php  if((!(IsHasQx($tid_global,1002002,1,$schoolid)))) { ?>
		$(".qx_2002").hide();
		e_d = e_d - 1 ;
	<?php  } ?>
	<?php  if((!(IsHasQx($tid_global,1002101,1,$schoolid)))) { ?>
		$(".qx_2101").hide();
	<?php  } ?>
	<?php  if((!(IsHasQx($tid_global,1002003,1,$schoolid)))) { ?>
		$(".qx_2003").hide();
		e_d = e_d - 1 ;
	<?php  } ?>
	if(e_d == 0){
		$(".qx_e_d").hide();
	}

    $(".check_all").click(function(){
        var checked = $(this).get(0).checked;
        $("input[type=checkbox]").attr("checked",checked);
    });

    $("input[name=btndeleteall]").click(function(){
        var check = $("input[type=checkbox][class!=check_all]:checked");
        if(check.length < 1){
            alert('请选择要删除的项目!');
            return false;
        }
        if(confirm("确认要删除选择的项目?")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            var url = "<?php  echo $this->createWebUrl('cost', array('op' => 'deleteall', 'schoolid' => $schoolid))?>";
            $.post(
                url,
                {idArr:id},
                function(data){
                    alert(data.error);
                    alert('操作成功!');
                },'json'
            );
        }
    });

});
</script>
<script type="text/javascript">
require(['jquery', 'util', 'bootstrap.switch'], function($, u){
	$(':checkbox[name="is_on"]').bootstrapSwitch();
	$(':checkbox[name="is_on"]').on('switchChange.bootstrapSwitch', function(e, state){
		var is_on = this.checked ? 1 : 2;
		var id = $(this).data('id');
		$.post("<?php  echo $this->createWebUrl('cost', array('op' => 'change', 'schoolid' => $schoolid))?>", {is_on: is_on, id: id}, function(resp){
			setTimeout(function(){
				//location.reload();
			}, 500)
		});
	});
});
</script>
<?php  } else if($operation == 'post') { ?>
<div class="panel panel-info">
   <div class="panel-heading"><a class="btn btn-primary" onclick="javascript :history.back(-1);"><i class="fa fa-tasks"></i> 返回</a></div>
</div>
<div class="main">
<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
		<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
        <div class="panel panel-default">
            <div class="panel-heading">
                添加项目
            </div>
            <div class="panel-body">
                <div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">项目名称</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" name="name" class="form-control" value="<?php  echo $item['name'];?>" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">图标</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('icon', $item['icon'])?>
                    </div>
					<div class="help-block">必须为方正图标</div>
                </div>				
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">缴费金额</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" name="cost" class="form-control" value="<?php  echo $item['cost'];?>" />
                        </div>
                    </div>
				</div>	
				<?php  if($_W['isfounder'] || $_W['role'] == 'owner') { ?>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">付费至：</label>
                    <div class="col-sm-2 col-lg-2">
                         <div class="input-group">
							<select class="form-control" name="payweid" id="payweid">
								<option value="0">请选择收款账户</option>
								<?php  if(is_array($payweid)) { foreach($payweid as $row) { ?>
								<option value="<?php  echo $row['uniacid'];?>" <?php  if($item['payweid']==$row['uniacid']) { ?>selected<?php  } ?>><?php  echo $row['name'];?></option>
								<?php  } } ?>
							</select>
							<div class="help-block">付费至指定公众号设置的支付方式内，不设置这付费至当前公众号</div>
                         </div>
				    </div>
                </div>
				<?php  } else { ?>
					<input type="hidden" name="payweid" value="<?php  echo $item['payweid'];?>">	
				<?php  } ?>
				<?php  if($logo['is_printer'] ==1) { ?>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">打印订单</label>
					<label class="radio-inline">
						<input type="radio" name="is_print" value="1" <?php  if($item['is_print']==1) { ?>checked="true"<?php  } ?> id="credit4">是
					</label>
					<label class="radio-inline">
						<input type="radio" name="is_print" value="2" <?php  if($item['is_print']==2 || empty($item['is_print'])) { ?>checked="true"<?php  } ?> id="credit5">否
					</label>
					<div class="help-block"></div>
                </div>
				<div id="credit-status4" <?php  if($item['is_print'] == 1) { ?>style="display:block"<?php  } else { ?>style="display:none"<?php  } ?>>
					<div class="form-group">
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">打印机</label>
						<div class="col-sm-9 col-xs-6">
							<div class="input-group text-info">
								<?php  if(is_array($printers)) { foreach($printers as $uni) { ?>
								<?php  $is = $this->uniarr($nowprints,$uni['id']);?>
										<label for="uni_<?php  echo $uni['id'];?>" class="checkbox-inline"><input id="uni_<?php  echo $uni['id'];?>" type="checkbox" name="printarr[]" value="<?php  echo $uni['id'];?>"<?php  if(($is)) { ?>checked="checked"<?php  } ?>> <?php  echo $uni['name'];?>（<?php  echo $printer_name[$uni['type']]['text'];?>）</label>
								<?php  } } ?>
							</div>
							<div class="help-block">选择本类缴费项目打印设备</div>
						</div>
					</div>	
				</div>
				<?php  } ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">选择班级</label>
					<div class="col-sm-9 col-xs-6">
						<div class="input-group text-info">
							<label class="checkbox-inline"><input type="checkbox" class="check_all" />全选</label>
							<?php  if(is_array($banji)) { foreach($banji as $uni) { ?>
							<?php  $is = $this->uniarr($uniarr,$uni['sid']);?>
									<label for="uni_<?php  echo $uni['sid'];?>" class="checkbox-inline"><input id="uni_<?php  echo $uni['sid'];?>" type="checkbox" name="arr[]" value="<?php  echo $uni['sid'];?>"<?php  if(($is)) { ?>checked="checked"<?php  } ?>> <?php  echo $uni['sname'];?></label>
							<?php  } } ?>
						</div>
						<div class="help-block">选择要将次项目应用到的班级</div>
					</div>
				</div>
				<div class="form-group">
                   <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">关联功能</label>
                        <label class="radio-inline">
                            <input type="radio" name="is_sys" value="1" <?php  if($item['is_sys']==1) { ?>checked="true"<?php  } ?> id="credit1">是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="is_sys" value="2" <?php  if($item['is_sys']==2 || empty($item['is_sys'])) { ?>checked="true"<?php  } ?> id="credit0">否
                        </label>
                        <div class="help-block"></div>
                </div>
				<div id="credit-status1" <?php  if($item['is_sys'] == 1) { ?>style="display:block"<?php  } else { ?>style="display:none"<?php  } ?>>
					<div class="form-group">
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">关联功能</label>
						<div class="input-group">
							<select class="form-control" style="margin-right:15px;" name="about" class="form-control">
								<option value="0">请选择功能</option>
								<?php  if(is_array($gongneng)) { foreach($gongneng as $row) { ?>
								<option value="<?php  echo $row['id'];?>" <?php  if($item['about'] == $row['id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['displayorder'];?></option>
								<?php  } } ?>
							</select>
						</div>
					</div>	
				</div>
				<div class="form-group">
                   <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">计时方式</label>
                        <label class="radio-inline">
                            <input type="radio" name="is_time" value="1" <?php  if($item['is_time']==1) { ?>checked="true"<?php  } ?> id="credit3">固定范围
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="is_time" value="2" <?php  if($item['is_time']==2 || empty($item['is_time'])) { ?>checked="true"<?php  } ?> id="credit2">倒计时
                        </label>
						<div class="help-block">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;设置时间范围可限定本缴费关联的功能在本时间区间有效，也可以代表本缴费项目的时间区间如：书本费 2016年3月5日-2016年6月28日</div>
                        <div class="help-block">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;如：基础功能使用费 2016年3月5日-2016年6月28日，到期后关联的功能将无法使用，需创建新的付费项目</div>
						<div class="help-block">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;使用范围方法,开始时间必须为设置当天,或之前,用户付费后在付费的当天开始计时，时间到期后，用户下次登录会自动生成新改新项目的未付订单</div>
                </div>	
				<div id="credit-status2" <?php  if($item['is_time'] == 1) { ?>style="display:block"<?php  } else { ?>style="display:none"<?php  } ?>>	
					<div class="form-group">
					   <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;"></label>
					   <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">开始时间:</label>
						 <div class="col-sm-2 col-lg-2">
							<div class="input-group">
						 <?php  if(!empty($item['starttime'])) { ?><?php  echo tpl_form_field_date('starttime', date('Y-m-d', $item['starttime']))?><?php  } else { ?><?php  echo tpl_form_field_date('starttime', date('Y-m-d', TIMESTAMP))?><?php  } ?>
							</div>
						 </div>
					   <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">结束时间:</label>
						 <div class="col-sm-2 col-lg-2">
							<div class="input-group">					 
						<?php  if(!empty($item['endtime'])) { ?><?php  echo tpl_form_field_date('endtime', date('Y-m-d', $item['endtime']))?><?php  } else { ?><?php  echo tpl_form_field_date('endtime', date('Y-m-d', TIMESTAMP))?><?php  } ?>						 
							</div>
						 </div>					 
					</div>
				</div>	
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">时间长度</label>
					<div class="col-sm-9">
						<div class="input-group">
							<input type="text" name="dataline" class="form-control" value="<?php  echo $item['dataline'];?>" />
						</div>
						<div class="help-block">按天计算</div>
						<div class="help-block">设置了时间范围后，此设置将无效，如果没设置，此付费项目将按付费时间开始计算，到期后关联的功能将无法使用，需创建新的付费项目，或直接修改此值</div>
					</div>
				</div>	
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">缴费说明</label>
					<div class="col-sm-8 col-xs-12">
						   <?php  echo tpl_ueditor('description', $item['description']);?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">排序</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" name="displayorder" class="form-control" value="<?php  echo $item['displayorder'];?>" />
                        </div>
						<div class="help-block">数值越大排序越靠前</div>
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
<script type="text/javascript">
    $(".check_all").click(function(){
        var checked = $(this).get(0).checked;
        $("input[type=checkbox]").attr("checked",checked);
    });
	$('#credit1').click(function(){
		$('#credit-status1').show();
	});
	$('#credit0').click(function(){
		$('#credit-status1').hide();
	});
	$('#credit3').click(function(){
		$('#credit-status2').show();
	});
	$('#credit2').click(function(){
		$('#credit-status2').hide();
	});	
	$('#credit4').click(function(){
		$('#credit-status4').show();
	});
	$('#credit5').click(function(){
		$('#credit-status4').hide();
	});
</script>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>