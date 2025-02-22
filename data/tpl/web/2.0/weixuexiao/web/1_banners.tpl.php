<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
    <li class="active"><a href="#">平台设置</a></li>
</ul>
 <?php  if($operation == 'post') { ?>   
<div class="main">
	<form action="" method="post" class="form-horizontal form"	enctype="multipart/form-data">
		<div class="panel panel-default">
		<?php  if($_W['isfounder']) { ?>
		    <div class="alert alert-success">
                温馨提示:</br>
				更多平台化设置方法，请参看微教育商业用户群文件视频教程
            </div>	
		<?php  } ?>		
			<div class="panel-heading">	
				<div class="row-fluid">
					<div class="span8 control-group">
						<a class="btn btn-default" href="<?php  echo $this->createWebUrl('banners', array('op' => 'display' ))?>"><i class="fa fa-search"></i>幻灯片</a>
						<a class="btn <?php  if($operation == 'post') { ?>btn-primary <?php  } else { ?>btn-default"<?php  } ?> href="<?php  echo $this->createWebUrl('banners', array('op' => 'post' ))?>"><i class="fa fa-edit"></i>添加幻灯片</a>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">排序</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" name="displayorder" class="form-control" value="<?php  echo $banner['displayorder'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span>幻灯片标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" name="bannername" class="form-control" value="<?php  echo $banner['bannername'];?>" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">幻灯片图片</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_image('thumb', $banner['thumb'])?>

					<div class="help-block">图片最大高度为600，每张图片宽高请设置为相同的宽高！！！</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span>幻灯片链接</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" name="link" class="form-control" value="<?php  echo $banner['link'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">显示时间</label>
                   <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">开始时间:</label>
                     <div class="col-sm-2 col-lg-2">
				        <div class="input-group">
				     <?php  echo tpl_form_field_date('begintime', date('Y-m-d', $banner['begintime']))?>	
                        </div>
				     </div>
                   <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">结束时间:</label>
                     <div class="col-sm-2 col-lg-2">
				        <div class="input-group">
				     <?php  echo tpl_form_field_date('endtime', date('Y-m-d', $banner['endtime']))?>	
                        </div>
				     </div>					 
                </div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2  control-label text-danger">选择学校</label>
					<div class="col-sm-9 col-xs-6">
						<div class="input-group text-info">
							<label class="checkbox-inline"><input type="checkbox" class="check_all" />全选</label>
							<?php  if(is_array($school)) { foreach($school as $uni) { ?>
							<?php  $is = $this->uniarr($uniarr,$uni['id']);?>
									<label for="uni_<?php  echo $uni['id'];?>" class="checkbox-inline"><input id="uni_<?php  echo $uni['id'];?>" type="checkbox" name="arr[]" value="<?php  echo $uni['id'];?>"<?php  if(($is)) { ?>checked="checked"<?php  } ?>> <?php  echo $uni['title'];?></label>
							<?php  } } ?>
						</div>
						<div class="help-block">选择要将此幻灯片展示的学校,可多选</div>
					</div>
				</div>				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否显示</label>
					<div class="col-sm-9 col-xs-12">
						<label class='radio-inline'>
							<input type='radio' name='enabled' value=1' <?php  if($banner['enabled']==1) { ?>checked<?php  } ?> /> 是
						</label>
						<label class='radio-inline'>
							<input type='radio' name='enabled' value=0' <?php  if($banner['enabled']==0) { ?>checked<?php  } ?> /> 否
						</label>
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
</script>
<?php  } else if($operation == 'display') { ?>
<div class="main">
	<div class="panel panel-default">
		<div class="panel-body">
		<?php  if($_W['isfounder']) { ?>
		    <div class="alert alert-success">
                温馨提示:</br>
				更多平台化设置方法，请参看微教育商业用户群文件视频教程
            </div>	
		<?php  } ?>	
            <div class="row" style="margin-left: 15px;">
                <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/ctrl_nave', TEMPLATE_INCLUDEPATH)) : (include template('public/ctrl_nave', TEMPLATE_INCLUDEPATH));?>
            </div>
            <div class="header">
                <h3>平台幻灯片 列表</h3>
            </div>			
			<form method="post" class="form-horizontal" id="formfans">
			<input type="hidden" name="op" value="del" />
				<div class="row-fluid">
					<div class="span8 control-group">
						<a class="btn <?php  if($operation == 'post') { ?>btn-primary <?php  } else { ?>btn-default"<?php  } ?> href="<?php  echo $this->createWebUrl('banners', array('op' => 'post' ))?>"><i class="fa fa-edit"></i>添加幻灯片</a>
					</div>
				</div>			
			<div style="position:relative">
				<div class="panel-body table-responsive">
					<table class="table table-hover" style="position:relative">
					<thead class="navbar-inner">
						<tr>
							<th style="width:30px;">ID</th>
									<th>显示顺序</th>					
									<th>标题</th>
									<th>预览</th>
									<th>连接</th>
									<th>状态</th>
									<th>点击</th>
									<th>时间</th>
									<th >操作</th>
						</tr>
					</thead>
					<tbody>
						<?php  if(is_array($list)) { foreach($list as $banner) { ?>
							<tr>
								<td><?php  echo $banner['id'];?></td>
								<td><?php  echo $banner['displayorder'];?></td>
								<td><?php  echo $banner['bannername'];?></td>
								<td><img src="<?php  echo tomedia($banner['thumb'])?>" width="50"></td>
								<td><?php  echo $banner['link'];?></td>
								<td><?php  if($banner['enabled']) { ?>显示<?php  } else { ?>隐藏<?php  } ?></td>
								<td><?php  echo $banner['click'];?>次</td>
								<td><?php  echo date('Y-m-d',$banner['begintime'])?>至<?php  echo date('Y-m-d',$banner['endtime'])?></td>
								<td style="text-align:left;">
									<a href="<?php  echo $this->createWebUrl('banners', array('op' => 'post', 'id' => $banner['id']))?>" data-toggle="tooltip" data-placement="top"  class="btn btn-default btn-sm manage"><i class="fa fa-edit"></i>修改</a>
									<a href="<?php  echo $this->createWebUrl('banners', array('op' => 'delete', 'id' => $banner['id']))?>" data-toggle="tooltip" data-placement="top"  class="btn btn-default btn-sm manage"><i class="fa fa-del"></i>删除</a> 
								</td>
							</tr>
						<?php  } } ?>
						
					</tbody>
					</table>
				</div>
			</div>
			</form>
			<?php  echo $pager;?>
		</div>
	</div>	
</div>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>