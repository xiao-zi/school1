<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
    <div class="panel panel-info">
        <div class="panel-body">
          <?php  echo $this -> set_tabbar($action1, $schoolid, $_W['role'], $_W['isfounder'], $_W['schooltype']);?>
        </div>
    </div>
<ul class="nav nav-tabs">
    <li class="qx_edit <?php  if($operation == 'post') { ?>active<?php  } ?>"><a href="<?php  echo $this->createWebUrl('tscoreobject', array('op' => 'post', 'schoolid' => $schoolid))?>">添加项目</a></li>
    <li <?php  if($operation == 'display') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('tscoreobject', array('op' => 'display', 'schoolid' => $schoolid))?>">项目管理</a></li>
</ul>
 <style> 
 .cLine { overflow: hidden; padding: 5px 0; color:#000000; } .alert { padding: 8px 35px 0 10px; text-shadow: none; -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); -moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); background-color: #f9edbe; border: 1px solid #f0c36d; -webkit-border-radius: 2px; -moz-border-radius: 2px; border-radius: 2px; color: #333333; margin-top: 5px; } .alert p { margin: 0 0 10px; display: block; } .alert .bold{ font-weight:bold; }

.col-sm-2{text-align:right !important;line-height:30px}
.levelPa{padding: 3px 4px !important}

 </style>
<div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>    
	填写项目名称并分配管理组。</br>
   <strong><font color='red'>特别提醒: 当你删除该项目的时候,该项目下相关的所有数据都会被删除,请谨慎操作!以免丢失数据!</font></strong>
    </p>
    </div>
</div>
<?php  if($operation == 'post') { ?>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <input type="hidden" name="parentid" value="<?php  echo $parent['id'];?>" />
		<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />		
       
        <div class="panel panel-default">
            <div class="panel-heading">项目管理</div>
            <div class="panel-body">
				<div id="custom-url">
				<?php  if(!empty($sid)) { ?>
					<input type="hidden" name="old" value="111" />
					<div class="form-group">
						<label class="col-sm-2" style="width:5%">排序</label>
						<div class="col-sm-2 col-lg-2">
							<input type="text" name="ssort" placeholder="排序" class="form-control" value="<?php  echo $theobject['ssort'];?>" />
						</div>
						
						<label class="col-sm-2" style="width:8%">项目名称</label>
						<div class="col-sm-2 col-lg-2" style="width:10%">
							<input type="text" name="catename" placeholder="项目名称" class="form-control" value="<?php  echo $theobject['sname'];?>" />
						</div>
						<label class="col-sm-2" style="width:8%">上级项目</label>
						<div class="col-sm-2 col-lg-2" style="width:10%">
							<select  name="teapa" id="teapa_old"  class="form-control pa_object">
							<option value="0" fz-id="-999" >无上级项目</option>
                            <?php  if(is_array($scoreOb)) { foreach($scoreOb as $row) { ?>
							<?php  if($row['sid'] != $sid) { ?>
                            <option value="<?php  echo $row['sid'];?>" fz-name="<?php  echo $row['fzname'];?>" fz-id="<?php  echo $row['Obfzid'];?>" <?php  if($theobject['parentid'] == $row['sid']) { ?> selected="selected"<?php  } ?> ><?php  echo $row['sname'];?></option>
							<?php  } ?>
                            <?php  } } ?>
							</select>
						</div>
						<label class="col-sm-2" style="width:8%">管理教师组</label>
						<div class="col-sm-2 col-lg-2 tea_select" style="width:10%">
							<select style="margin-right:15px;" name="teafenzu" id="teafenzu" class="form-control">
                            <?php  if(is_array($jsfz)) { foreach($jsfz as $row) { ?>
                            <option value="<?php  echo $row['sid'];?>" <?php  if($theobject['fzid'] == $row['sid']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
                            <?php  } } ?>
							</select>
						</div>
						<label class="col-sm-2" style="width:8%">项目图标</label>
					<div class="input-group">
						<?php  echo tpl_form_field_image('icon', $theobject['icon'])?>
						<div class="help-block">显示在前端部分位置,留空则显示学校LOGO</div>
					</div>
					</div>
				<?php  } else { ?>
					<input type="hidden" name="new[]" value="111" />
					<div class="form-group">
						<label class="col-sm-2" style="width:5%">排序</label>
						<div class="col-sm-2 col-lg-2">
							<input type="text" name="ssort_new[]" placeholder="排序" class="form-control" value="" />
						</div>
						
						<label class="col-sm-2" style="width:8%">项目名称</label>
						<div class="col-sm-2 col-lg-2" style="width:10%">
							<input type="text" name="catename_new[]" placeholder="项目名称" class="form-control" value="" />
						</div>
						
						<label class="col-sm-2" style="width:8%">上级项目</label>
						<div class="col-sm-2 col-lg-2" style="width:10%">
							<select  name="teapa_new[]"  class="form-control pa_object">
							<option value="0" fz-id="-999">无上级项目</option>
                            <?php  if(is_array($scoreOb)) { foreach($scoreOb as $row) { ?>
                            <option value="<?php  echo $row['sid'];?>" fz-name="<?php  echo $row['fzname'];?>" fz-id="<?php  echo $row['Obfzid'];?>" ><?php  echo $row['sname'];?></option>
                            <?php  } } ?>
							</select>
						</div>
						
						<label class="col-sm-2" style="width:8%">管理教师组</label>
						<div class="col-sm-2 col-lg-2 tea_select" style="width:10%">
							<select  name="teafenzu_new[]"  class="form-control">
                            <?php  if(is_array($jsfz)) { foreach($jsfz as $row) { ?>
                            <option value="<?php  echo $row['sid'];?>" ><?php  echo $row['sname'];?></option>
                            <?php  } } ?>
							</select>
						</div>
						
						<label class="col-sm-2" style="width:8%">项目图标</label>
						<div class="input-group">
							<script type="text/javascript">
								function showImageDialog(elm, opts, options) {
									require(["util"], function(util){
										var btn = $(elm);
										var ipt = btn.parent().prev();
										var val = ipt.val();
										var img = ipt.parent().next().children();
										options = {'global':false,'class_extra':'','direct':true,'multiple':false,'fileSizeLimit':5120000};
										util.image(val, function(url){
											if(url.url){
												if(img.length > 0){
													img.get(0).src = url.url;
												}
												ipt.val(url.attachment);
												ipt.attr("filename",url.filename);
												ipt.attr("url",url.url);
											}
											if(url.media_id){
												if(img.length > 0){
													img.get(0).src = "";
												}
												ipt.val(url.media_id);
											}
										}, options);
									});
								}
								function deleteImage(elm){
									$(elm).prev().attr("src", "./resource/images/nopic.jpg");
									$(elm).parent().prev().find("input").val("");
								}
							</script>
							<div class="input-group ">
								<input type="text" name="icon_new[]" value="" class="form-control" autocomplete="off" >
								<span class="input-group-btn">
									<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>
								</span>
							</div>
							<div class="input-group " style="margin-top:.5em;">
								<img src="./resource/images/nopic.jpg" onerror="this.src='./resource/images/nopic.jpg'; this.title='图片未找到.'" class="img-responsive img-thumbnail"  width="150" />
								<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>
							</div>
							<div class="help-block">显示在前端部分位置,留空则显示学校LOGO</div>
						</div>
					</div>				
				<?php  } ?>	
                </div>	
				<div class="clearfix template"> 
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
						<div class="col-sm-9 col-xs-12">
							<a href="javascript:;" id="custom-url-add"><i class="fa fa-plus-circle"></i> 添加项目</a>
						</div>
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
	$('#custom-url-add').click(function(){
	var html =  '<div class="form-group">'+
				'	<input type="hidden" name="new[]" value="111" />	'+
				'	<label class="col-sm-2" style="width:5%">排序</label>'+
				'	<div class="col-sm-2 col-lg-2">'+
				'		<input type="text" name="ssort_new[]" placeholder="排序" class="form-control" value="" />'+
				'	</div>'+
				'	<label class="col-sm-2" style="width:8%">项目名称</label>'+
				'	<div class="col-sm-2 col-lg-2" style="width:10%">'+
				'		<input type="text" name="catename_new[]" placeholder="项目名称" class="form-control" value="" />'+
				'	</div>'+
				
				
				'	<label class="col-sm-2" style="width:8%">上级项目</label>'+
				'	<div class="col-sm-2 col-lg-2" style="width:10%">'+
				'		<select style="margin-right:15px;" name="teapa_new[]"  class="form-control pa_object">'+
				'		<option value="0" fz-id="-999" >无上级项目</option>'+
						<?php  if(is_array($scoreOb)) { foreach($scoreOb as $row) { ?>
				'		<option value="<?php  echo $row['sid'];?>" fz-name="<?php  echo $row['fzname'];?>" fz-id="<?php  echo $row['Obfzid'];?>" ><?php  echo $row['sname'];?></option>'+
						<?php  } } ?>
				'		</select>'+
				'	</div>'+
				
				'	<label class="col-sm-2" style="width:8%">管理教师组</label>'+
				'	<div class="col-sm-2 col-lg-2 tea_select" style="width:10%">'+
				'		<select style="margin-right:15px;" name="teafenzu_new[]" id="teafenzu" class="form-control">'+
						<?php  if(is_array($jsfz)) { foreach($jsfz as $row) { ?>
				'		<option value="<?php  echo $row['sid'];?>" ><?php  echo $row['sname'];?></option>'+
						<?php  } } ?>
				'		</select>'+
				'	</div>'+
				
				'	<label class="col-sm-2" style="width:8%">项目图标</label>'+
				'	<div class="input-group">'+
				'		<div class="input-group">'+
				'			<input type="text" name="icon_new[]" value="" class="form-control" autocomplete="off" >'+
				'			<span class="input-group-btn">'+
				'				<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>'+
				'   			<a style="margin-left: 30px;" href="javascript:;" class="custom-url-del"><i class="fa fa-times-circle"></i></a>'+
				'			</span>'+
				'		</div>'+
				'		<div class="input-group " style="margin-top:.5em;">'+
				'			<img src="./resource/images/nopic.jpg" onerror="this.src=\'./resource/images/nopic.jpg\'; this.title=\'图片未找到.\'" class="img-responsive img-thumbnail"  width="150" />'+
				'			<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>'+
				'		</div>'+
				'		<div class="help-block">显示在前端部分位置,留空则显示学校LOGO</div>'+
				'	</div>'+
				'</div>';
			;
	$('#custom-url').append(html);
});
$(document).on('click', '.custom-url-del', function(){
	$(this).parent().parent().parent().parent().remove();
	return false;
});	

$(document).on('change', 'select.pa_object', function(){
	var fz_id = $(this).find("option:selected").attr("fz-id");
	if(fz_id > 0){
		var fzname = $(this).find("option:selected").attr("fz-name");
		var only_html = '<option value="'+fz_id+'" >'+fzname+'</option>';
		$(this).parent().parent().find("div.tea_select").find("select").html(only_html);
	}else{
		var html_this = <?php  if(is_array($jsfz)) { foreach($jsfz as $row) { ?>
						'		<option value="<?php  echo $row['sid'];?>" ><?php  echo $row['sname'];?></option>'+
						<?php  } } ?>
						'';
		$(this).parent().parent().find("div.tea_select").find("select").html(html_this);
	}
});	


<?php  if(!empty($sid)) { ?>
	$(function(){
		var fz_id = $("#teapa_old").find("option:selected").attr("fz-id");
		if(fz_id > 0){
			var fzname = $("#teapa_old").find("option:selected").attr("fz-name");
			var only_html = '<option value="'+fz_id+'" >'+fzname+'</option>';
			$("#teapa_old").parent().parent().find("div.tea_select").find("select").html(only_html);
		}else{
			var html_this = <?php  if(is_array($jsfz)) { foreach($jsfz as $row) { ?>
							'		<option value="<?php  echo $row['sid'];?>" ><?php  echo $row['sname'];?></option>'+
							<?php  } } ?>
							'';
			$("#teapa_old").parent().parent().find("div.tea_select").find("select").html(html_this);
		}
	});
<?php  } ?>
</script>
<?php  } else if($operation == 'display') { ?>
<div class="main">
    <div class="panel panel-default">
        <div class="panel-body">
            <a class="btn btn-primary" href="javascript:location.reload()"><i class="fa fa-refresh"></i>刷新</a>
        </div>
    </div>
    <div class="panel panel-default">
        <form action="" method="post" class="form-horizontal form" >
            <input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
            <div class="table-responsive panel-body">
                <table class="table table-hover">
                    <thead class="navbar-inner">
                    <tr>
					    <th style="width:100px;">序号</th>
                        <th>项目图标</th>
						<th>项目名称</th>
						<th>上级项目</th>
						<th>管理教师组</th>
                        <th class="qx_e_d" style="text-align:right;">编辑/删除</th>
                    </tr>
                    </thead>
                    <tbody id="level-list">
						<?php  if(is_array($tscoreobject)) { foreach($tscoreobject as $row) { ?>
						<tr>
							<td><div class="type-parent"><?php  echo $row['sid'];?></div></td>
							 <td><img style="width:50px;height:50px;border-radius:50%;" src="<?php  if(!empty($row['icon'])) { ?><?php  echo tomedia($row['icon'])?><?php  } else { ?><?php  echo tomedia($logo['logo'])?><?php  } ?>" width="50"  style="border-radius: 3px;" /></td>
							<td>
							<?php  echo $row['sname'];?><br/>
							<?php  if($row['Paname']) { ?>
							<span class="label label-primary levelPa">二级项目</span>
							<?php  } else { ?>
							<span class="label label-info levelPa">一级项目</span>
							<?php  } ?>
							
							</td>
							<td>
							<?php  if($row['Paname']) { ?>
							<span class="label label-success"><?php  echo $row['Paname'];?></span>
							<?php  } else { ?>
							<span class="label label-danger">无上级项目</span>
							<?php  } ?>

							</td>
							<td>
							<?php  if($row['fzname']) { ?>
							<span class="label label-warning"><?php  echo $row['fzname'];?></span>
							<?php  } else { ?>
							<span class="label label-danger">未分配</span>
							<?php  } ?>
							</td>
							<td class="qx_e_d" style="text-align:right;"><a class="btn btn-default btn-sm qx_edit" href="<?php  echo $this->createWebUrl('tscoreobject', array('op' => 'post', 'sid' => $row['sid'], 'schoolid' => $schoolid))?>" title="编辑"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a class="btn btn-default btn-sm qx_delete" href="<?php  echo $this->createWebUrl('tscoreobject', array('op' => 'delete', 'sid' => $row['sid'], 'schoolid' => $schoolid))?>" onclick="return confirm('确认删除此项目吗？');return false;" title="删除"><i class="fa fa-times"></i></a></td>
						</tr>
						<?php  } } ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <?php  echo $pager;?>
</div>
<script type="text/javascript">
$(document).ready(function() {
	var e_d = 2 ;
	<?php  if(!(IsHasQx($tid_global,1000292,1,$schoolid))) { ?>
		$(".qx_edit").hide();
		e_d = e_d - 1 ;
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000293,1,$schoolid))) { ?>
		$(".qx_delete").hide();
		e_d = e_d - 1 ;
	<?php  } ?>
	if(e_d == 0){
		$(".qx_e_d").hide();
	}
});	
</script>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>