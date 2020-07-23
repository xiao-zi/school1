<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link type="text/css" rel="stylesheet" href="https://manger.daren007.com/web/resource/components/switch/bootstrap-switch.min.css?v=2018020415">
<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />

 <style>
	 .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-primary, .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-primary {color: #fff;background: #a0053b;}

.cLine {
    overflow: hidden;
    padding: 5px 0;
  color:#000000;
}
.alert {
padding: 8px 35px 0 10px;
text-shadow: none;
-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
background-color: #f9edbe;
border: 1px solid #f0c36d;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
color: #333333;
margin-top: 5px;
}
.alert p {
margin: 0 0 10px;
display: block;
}
.alert .bold{
font-weight:bold;
}
 </style>

<?php  if($operation == 'post') { ?>
<div class="panel panel-info">
    <div class="panel-heading"><a class="btn btn-primary" onclick="javascript :history.back(-1);"><i class="fa fa-tasks"></i> 返回家政家教列表</a></div>
</div>
<div class="cLine">
    <div class="alert">
    <p><span class="bold">说明：</span>
  
    </p>
    </div>
</div>
<div class="main">
	<form action="" method="post" class="form-horizontal form"	enctype="multipart/form-data">
		<div class="panel panel-default">
			<div class="panel-body" >
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span>项目名称</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" name="gtitle" class="form-control" value="<?php  echo $item1['title'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span>排序:</label>
                     <div class="col-sm-2 col-lg-2">
				        <div class="input-group">
						<input type="text" name="gsort" class="form-control" value="<?php  echo $item1['ssort'];?>" />
                        </div>
				    </div>
			    </div>
			     <div class="form-group">
				     <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span>项目类型:</label>
				     <div class="col-sm-9 col-lg-2" style="width: 20%">
							<select style="margin-right:15px;" name="gctype" class="form-control">
								<option value="">请选择项目类型</option>
								<option value="2" <?php  if($item1['type'] == 2 ) { ?> selected="selected"<?php  } ?>>家政服务</option>
								<option value="3" <?php  if($item1['type'] == 3 ) { ?> selected="selected"<?php  } ?>>家教服务</option>
							</select>	
							</div>								
					</div>
			    <div class="form-group">

					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span>起止时间：</label>
                     <div class="col-sm-9 col-lg-2" >
						<?php  echo tpl_form_field_daterange('timerange', array('start' => date('Y-m-d', $starttime ), 'end' => date('Y-m-d', $endtime)));?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span>项目缩略图</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_image('thumb', $item1['thumb'])?>

					<div class="help-block">缩略图建议尺寸：90像素 * 70像素</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span>项目描述</label>
					<div class="col-sm-9">
				   		<?php  echo tpl_ueditor('content', $item1['content']);?>
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
<?php  } else if($operation == 'display') { ?>
<div class="panel panel-info">
	<div class="panel-heading">筛选</div>
	<div class="panel-body">
		
         <div class="col-sm-2 col-lg-2">						
						<a class="btn btn-default qx_1802" href="<?php  echo $this->createWebUrl('houseorder', array('op' => 'post', 'schoolid' => $schoolid))?>" ><i class="fa fa-qrcode">&nbsp;&nbsp;添加家政家教项目</i></a>
                    </div>	   
                
                    <form accept-charset="UTF-8" action="./index.php" class="form-horizontal" id="diandanbao/table_search" method="get" role="form">
                        <div style="margin:0;padding:0;display:inline">
                        <input name="utf8" type="hidden" value="✓"></div>
                        <input type="hidden" name="c" value="site" />
                        <input type="hidden" name="a" value="entry" />
                        <input type="hidden" name="m" value="weixuexiao" />
                        <input type="hidden" name="do" value="houseorder" />
						<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
                        
				 <div class="form-group">

				</div>
				 <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-1 control-label">项目类型</label>
                   	<div class="col-sm-2 col-lg-2">
						<select style="margin-right:15px;" name="gctype" class="form-control">
							<option value="">按项目类型搜索</option>
							<option value="2" <?php  if($_GPC['gctype'] == 2 ) { ?> selected="selected"<?php  } ?>>家政服务</option>
							<option value="3" <?php  if($_GPC['gctype'] == 3 ) { ?> selected="selected"<?php  } ?>>家教服务</option>
						</select>	
					</div>	
				
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="width: 100px;">按活动名称</label>
                    <div class="col-sm-2 col-lg-2">
                        <input class="form-control" name="group_name" id="" type="text" value="<?php  echo $_GPC['group_name'];?>">
                    </div>
                	<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="width: 100px;">按起止时间范围</label>
					<div class="col-sm-2 col-lg-2">
						<?php  echo tpl_form_field_daterange('searchtime', array('start' => date('Y-m-d', $searchStime), 'end' => date('Y-m-d', $searchEtime)));?>
					</div>

					 <div class="col-sm-2 col-lg-2" style="margin-left: 55px;">
                        <button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
                    </div>
                    			
				</div>	
				

				<div class="form-group">
				

					</div>
                    </form>
               
            
	</div>
</div>
<div class="cLine">
    <div class="alert">
    <p><span class="bold">说明：</span>
  
    </p>
    </div>
</div>

<div class="panel panel-default">
	<div class="table-responsive panel-body">
		<table class="table">
			<thead>
				<tr>
					<th style="width:50px">排序</th>
					<th>缩略图</th>
					<th>标题</th>
					<th>服务类型</th>
					<th >服务起止时间</th>
					<th >预约人数</th>
					<th class="qx_1804">查看预约情况</th>
					 
					<th class="qx_e_d" style="text-align:right;">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $item) { ?>
				<tr>
					<td><span><?php  echo $item['ssort'];?></span></td>
					<td><img src="<?php  echo tomedia($item['thumb'])?>" width="50"></td>
					<td>
						<?php  echo $item['title'];?>
					</td>
					
					<td>
						<?php  if($item['type'] == 2) { ?>
						<span class="label label-danger">家政服务</span>
						<?php  } else if($item['type'] == 3) { ?>
						<span class="label label-info">家教服务</span>
						<?php  } ?>
					</td>					
					<td>
						<span class="label label-info"><?php  echo date('Y-m-d',$item['starttime'])." 至 ".date('Y-m-d',$item['endtime'])?></span>
					</td>
					<td>
						<span class="label label-info"><?php  echo $item['signcount'];?></span>
					</td>
					<td class="qx_1804" style="overflow:visible; word-break:break-all; text-overflow:auto;white-space:normal"><?php  if($item['signcount'] != 0) { ?> <a class="btn btn-success btn-sm"  title="查看预约情况" href="<?php  echo $this->createWebUrl('horecord', array('gaid' => $item['id'], 'op' => 'display', 'schoolid' => $schoolid))?>" >&nbsp;&nbsp;查看预约情况</i></a><?php  } else { ?><span class="label label-danger">暂无预约</span><?php  } ?></td>
					
					<td class="qx_e_d" style="text-align:right;">
						<a class="btn btn-default btn-sm qx_1802" href="<?php  echo $this->createWebUrl('houseorder', array('id' => $item['id'], 'op' => 'post', 'schoolid' => $schoolid))?>" title="编辑"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a class="btn btn-default btn-sm qx_1803" href="<?php  echo $this->createWebUrl('houseorder', array('id' => $item['id'], 'op' => 'delete', 'schoolid' => $schoolid))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" title="删除"><i class="fa fa-times"></i></a>
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
		</table>
	</div>
</div>
<?php  echo $pager;?>
<?php  } ?>
<script type="text/javascript">
$(function(){
	var e_d = 2 ;
	<?php  if((!(IsHasQx($tid_global,1001802,1,$schoolid)))) { ?>
		$(".qx_1802").hide();
		e_d = e_d - 1 ;
	<?php  } ?>
	<?php  if((!(IsHasQx($tid_global,1001804,1,$schoolid)))) { ?>
		$(".qx_1804").hide();
	<?php  } ?>
	<?php  if((!(IsHasQx($tid_global,1001803,1,$schoolid)))) { ?>
		$(".qx_1803").hide();
		e_d = e_d - 1 ;
	<?php  } ?>
	if(e_d == 0){
		$(".qx_e_d").hide();
	}
});
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>