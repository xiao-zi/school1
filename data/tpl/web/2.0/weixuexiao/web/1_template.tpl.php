<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
<div class="panel panel-info">
	<div class="panel-body">
	   <?php  echo $this -> set_tabbar($action1, $schoolid, $_W['role'], $_W['isfounder'], $_W['schooltype']);?>
	</div>
</div>
<ul class="nav nav-tabs">
    <li <?php  if($operation == 'display') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('template', array('op' => 'display', 'schoolid' => $schoolid))?>">前端模板</a></li>
    <li <?php  if($operation == 'display1') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('template', array('op' => 'display1', 'schoolid' => $schoolid))?>">首页按钮</a></li>
    <li <?php  if($operation == 'display3') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('template', array('op' => 'display3', 'schoolid' => $schoolid))?>">底部菜单</a></li>
	<li <?php  if($operation == 'display2') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('template', array('op' => 'display2', 'schoolid' => $schoolid))?>">学生中心</a></li>
	<li <?php  if($operation == 'display4') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('template', array('op' => 'display4', 'schoolid' => $schoolid))?>">教师中心</a></li>
</ul>
 <style>
.cLine {overflow: hidden;padding: 5px 0;color:#000000;}
.alert {padding: 8px 35px 0 10px;text-shadow: none;-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
background-color: #f9edbe;border: 1px solid #f0c36d;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;color: #333333;margin-top: 5px;}
.alert p {margin: 0 0 10px;display: block;}
.alert .bold{font-weight:bold;}
.school_option li:after{content: "";width:9px;height:16px;position:absolute;right:15px;top:15px;background: url(<?php echo MODULE_URL;?>public/mobile/img/right_arrow.png) no-repeat;
background-position: center center;background-size: 9px 16px;}
 </style>
<?php  if($operation == 'display') { ?>
<div class="cLine">
    <div class="alert">
		<p><span class="bold">提醒：</span>模板管理功能仅限公众号主管理员与站长有权查看和编辑</br></p>
    </div>
</div>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
		<div class="panel panel-info"><div class="panel-heading">模板管理</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">顶部颜色</label>
					<div class="col-sm-8">
						<script type="text/javascript">
							$(function(){
								$(".colorpicker").each(function(){
									var elm = this;
									util.colorpicker(elm, function(color){
										$(elm).parent().prev().prev().val(color.toHexString());
										$(elm).parent().prev().css("background-color", color.toHexString());
									});
								});
								$(".colorclean").click(function(){
									$(this).parent().prev().prev().val("");
									$(this).parent().prev().css("background-color", "#FFF");
								});
							});
						</script>
						<div class="row row-fix">
							<div class="col-xs-8 col-sm-8" style="width: 300px;">
								<div class="input-group">
									<input class="form-control" type="text" name="headcolor" placeholder="请选择颜色" value="<?php  if($logo['headcolor']) { ?><?php  echo $logo['headcolor'];?><?php  } else { ?>#06c1ae<?php  } ?>">
									<span class="input-group-addon" style="width:35px;border-left:none;background-color:<?php  if($logo['headcolor']) { ?><?php  echo $logo['headcolor'];?><?php  } else { ?>#06c1ae<?php  } ?>"></span>
									<span class="input-group-btn">
										<button class="btn btn-default colorpicker" type="button">选择颜色 <i class="fa fa-caret-down"></i></button>
										<button class="btn btn-default colorclean" type="button"><span><i class="fa fa-remove"></i></span></button>
									</span>
								</div>
							</div>
						</div>
						<span class="help-block">此设置应用于所有页面顶部固定栏颜色</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">公共模版</label>
					<div class="col-sm-2 col-lg-2">
						 <div class="input-group">
							<input type="text" class="form-control" name="style1" value="<?php  if(!empty($logo['style1'])) { ?><?php  echo $logo['style1'];?><?php  } else { ?>greencom<?php  } ?>" />
							<div class="help-block">无需登录可以查看的页面目</br>录在addons/weixuexiao/template/mobile/</br><span style="color:red;font-weight:bold;font-size:15px;">自定义模版，无特殊开发需求不要更改此项目</span></div>
						 </div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">学生/家长中心</label>
					<div class="col-sm-2 col-lg-2">
						 <div class="input-group">
							<input type="text" class="form-control" name="style2" value="<?php  if(!empty($logo['style2'])) { ?><?php  echo $logo['style2'];?><?php  } else { ?>students<?php  } ?>" />
							<div class="help-block">学生或家长登录才能查看的页面</br>目录在addons/weixuexiao/template/mobile/</br><span style="color:red;font-weight:bold;font-size:15px;">自定义模版，无特殊开发需求不要更改此项目</span></div>
						 </div>
					</div>
					<div class="col-sm-2 col-lg-2" style="margin-left:200px">
						<div class="input-group">
							<select class="form-control" name="userstyle">
								<option value="user" <?php  if($logo['userstyle']== 'user') { ?>selected<?php  } ?>>系统默认</option>
								<option value="newuser" <?php  if($logo['userstyle']== 'newuser') { ?>selected<?php  } ?>>自定义设计</option>
							</select>
							<div class="help-block">此选项用于切换学生家长个人中心页面样式</br>系统默认为旧版个人中心样式</br><span style="color:red;font-weight:bold;font-size:15px;">如选择自定义，点击本页上方学生中心按钮前往设计</span></div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">教师中心</label>
					<div class="col-sm-2 col-lg-2">
						 <div class="input-group">
							<input type="text" class="form-control" name="style3" value="<?php  if(!empty($logo['style3'])) { ?><?php  echo $logo['style3'];?><?php  } else { ?>teacher<?php  } ?>" />
							<div class="help-block">需要教师登录后才能查看的页面</br>目录在addons/weixuexiao/template/mobile/</br><span style="color:red;font-weight:bold;font-size:15px;">自定义模版，无特殊开发需求不要更改此项目</span></div>
						 </div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">班级圈模式</label>
					<div class="col-sm-2 col-lg-2">
						<select class="form-control" name="bjqstyle" id="bjqstyle">
							<option value="old" id="old" <?php  if($logo['bjqstyle']== 'old') { ?>selected<?php  } ?>>校园模式</option>
							<option value="new" id="new" <?php  if($logo['bjqstyle']== 'new') { ?>selected<?php  } ?>>班级模式</option>
						</select>
						<div class="help-block">建议培训机构使用校园模式</div>
					</div>
				</div>
				<?php  if(is_TestFz()) { ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">教师中心模板</label>
					<div class="col-sm-2 col-lg-2">
						<select class="form-control" name="teatemplate">
							<option value="old" <?php  if($schoolset['teatemplate']== 'old') { ?>selected<?php  } ?>>旧模板</option>
							<option value="new" <?php  if($schoolset['teatemplate']== 'new') { ?>selected<?php  } ?>>新模板</option>
						</select>
					 
					</div>
				</div>

				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">学生中心模板</label>
					<div class="col-sm-2 col-lg-2">
						<select class="form-control" name="stutemplate" >
							<option value="old" <?php  if($schoolset['stutemplate']== 'old') { ?>selected<?php  } ?>>旧模板</option>
							<option value="new" <?php  if($schoolset['stutemplate']== 'new') { ?>selected<?php  } ?>>新模板</option>
						</select>
					 
					</div>
				</div>
				<?php  } ?>
				<div class="form-group" id="shteachers" <?php  if($logo['bjqstyle']== 'new') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">选择信息审核人</label>
					<div class="col-sm-8">
						<div class="row row-fix">
							<div class="col-xs-8 col-sm-8" style="width: 800px;">
								<div class="input-group">
									<input id="sh_teacherids" name="sh_teacherids" type="hidden" value="<?php  echo $shteahcers;?>"/>
									<input class="form-control" id="sh_teachers" type="text" value="<?php  echo $sh_tealist;?>"/>
									<span class="input-group-btn">
										<a class="btn btn-primary" href="javascript::;" data-toggle="tooltip" data-placement="top" onclick="xxxz();"><i class="fa fa-anchor"></i> 选择老师</a>
									</span>
								</div>
							</div>
						</div>
						<span class="help-block">选择校园模式下负责审核班级圈内容的老师，班级模式下由各班级管理或班主任审核无需在此处设置</span>
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
<div class="modal fade" style="min-width: 583px!important;" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content" style="border-radius: 20px;">
			<div class="modal-header">
				<h4 class="modal-title" style="text-align:center;color:#333;font-size: 17px;">选择校园模式下负责审核人员</h4>
			</div>
			<div class="modal-body" style="width: 100%;">
				<div class="js-menu-container" ng-controller="MenuCtrl" ng-cloak>
					<div class="panel we7-panel">
						<div class="panel-body system-menu-list">
							<ul class="one">
								<?php  if(is_array($list)) { foreach($list as $menu) { ?>
								<li class="menu-item">
									<div class="table-div table-div-menu" style="padding: 12px 37px;">
										<div class="table-div__item name"><?php  echo $menu['sname'];?></div>
										<div class="table-div__item name"></div>
										<div class="table-div__item action">
											<div class="link-group">
												<a href="javascript:;" class="toggle"></a>
											</div>
										</div>
									</div>
									<ul class="two">
										<li class="menu-item">
											<div class="input-group text-info">
											<?php  if(is_array($menu['alltea'])) { foreach($menu['alltea'] as $r) { ?>
												<label class="checkbox-inline" style="width:80px;margin-left: 10px"><input class="pre idss" data-name="<?php  echo $r['tname'];?>" type="checkbox" value="<?php  echo $r['id'];?>" style="float: none;"/><?php  echo $r['tname'];?></label>
											<?php  } } ?>
											</div>
										</li>
									</ul>
								</li>
								<?php  } } ?>
								<li class="menu-item">
									<div class="table-div table-div-menu" style="padding: 12px 37px;">
										<div class="table-div__item name">未分组(<?php  echo count($list2)?>人)</div>
										<div class="table-div__item name"></div>
										<div class="table-div__item action">
											<div class="link-group">
												<a href="javascript:;" class="toggle"></a>
											</div>
										</div>
									</div>
									<ul class="two">
										<li class="menu-item">
											<div class="input-group text-info">
											<?php  if(is_array($list2)) { foreach($list2 as $row) { ?>
												<label class="checkbox-inline" style="width:80px;margin-left: 10px"><input class="pre idss" data-name="<?php  echo $row['tname'];?>" type="checkbox" value="<?php  echo $row['id'];?>" style="float: none;"/><?php  echo $row['tname'];?></label>
											<?php  } } ?>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<script>
						$('.toggle').click(function () {
							$(this).parent().parent().parent().parent().toggleClass('menu-open')
						})
					</script>
				</div>
				<script type="text/javascript">
					$(function(){
						angular.bootstrap($('.js-menu-container'), ['systemApp']);
					});
				</script>
			</div>
			<div class="modal-footer" style="border-radius: 6px;">
				<input type="submit" onclick="tijiao()" class="btn btn-success" value="确定">
				<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
	$("#bjqstyle").change(function() {
		var bjqstyle = $("#bjqstyle option:selected").attr('value');
		showbox(bjqstyle, function() {
		});
	});
});
function showbox(bjqstyle){
	if(bjqstyle == 'new'){
		$("#shteachers").hide();
	}
	if(bjqstyle == 'old'){
		$("#shteachers").show();
	}
}
function xxxz(){
	$('#Modal3').modal('toggle');
	var chosed = $('#sh_teacherids').val();
	if(chosed.indexOf(',')>= 1){
		var chosedsarr= new Array(); //定义一数组
		choseds= chosed.split(','); //字符分割
		for(var i=0;i<choseds.length;i++){
			if(choseds[i] > 0){
				chosedsarr[i] = parseInt(choseds[i]);
			}
		}
		$(".pre").each(function() {
			var index = $.inArray(parseInt($(this).val()), chosedsarr);
			if(index >= 0){
				$(this).prop("checked",true);
			}else{
				$(this).prop("checked",false);
			}
		});
		console.log(chosedsarr)
	}else{
		$(".pre").each(function() {
			if (parseInt(chosed) == $(this).val()){
				$(this).prop("checked",true);
			}else{
				$(this).prop("checked",false);
			}
		});
	}
}
function tijiao(){
	var all_select_id = '';
	var all_select_text = '';
	var len = $("input:checkbox:checked").length;
	$(".idss").each(function(i) {
		if($(this).is(':checked')){
			if(i == len-1){
				all_select_id += $(this).val();
				all_select_text += $(this).attr("data-name");
			}else{
				all_select_id += $(this).val() + ',';
				all_select_text += $(this).attr("data-name") + ',';
			}
		}
	});
	$("#sh_teacherids").val(all_select_id);
	$("#sh_teachers").val(all_select_text);

$('#Modal3').modal('toggle');
}
</script>
<?php  } else if($operation == 'display1') { ?>
<div class="main">
	<div class="form-group">
		 <a class="btn btn-danger" href="<?php  echo $this->createWebUrl('template', array('op' => 'reset1', 'schoolid' => $schoolid))?>"><i class="fa fa-recycle"></i>一键恢复</a>
	</div>
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
		<div class="panel panel-info"><div class="panel-heading">新模板首页按钮（只对greencom首页模板生效）</div>
			<table class="table table-hover">
				<thead class="navbar-inner">
				<tr>
					<th class="text-center" style="width:50px;">ID</th>
					<th class="text-center" style="width:150px;;">图标</th>
					<th class="text-center" style="width:50px">标题</th>
					<th class="text-center" style="width:300px;">链接</th>
					<th class="text-center" style="width:80px;">位置</th>
					<th class="text-center" style="width:50px;">排序</th>
					<th class="text-right" style="width:130px;">是否显示</th>
				</tr>
				</thead>
				<tbody>
				<?php  if(is_array($icons)) { foreach($icons as $item) { ?>
					<tr>
						<td class="text-center" style="width:50px;"><?php  echo $item['id'];?></td>
						<td class="text-center" style="width:60px;">
								<script type="text/javascript">
									function showImageDialog(elm, opts, options) {
										require(["util"], function(util){
											var btn = $(elm);
											var ipt = btn.parent().prev();
											var val = ipt.val();
											var img = ipt.parent().next().children();
											options = {'global':false,'class_extra':'','direct':true,'multiple':false};
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
											}, null, options);
										});
									}
									function deleteImage(elm){
										require(["jquery"], function($){
											$(elm).prev().attr("src", "./resource/images/nopic.jpg");
											$(elm).parent().prev().find("input").val("");
										});
									}
								</script>
								<div class="input-group ">
									<input type="text" name="iconurl[<?php  echo $item['id'];?>]" value="<?php  echo tomedia($item['icon'])?>" class="form-control" autocomplete="off">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>
									</span>
								</div>
								<div class="input-group " style="margin-top:.5em;">
									<img src="<?php  echo tomedia($item['icon'])?>" onerror="this.src='./resource/images/nopic.jpg'; this.title='图片未找到.'" class="img-responsive img-thumbnail" width="40">建议尺寸为80*80的图片
									<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>
								</div>
						</td>
						<td class="text-center" style="width:50px;">
							<input type="text" class="form-control input-sm" name="iconname[<?php  echo $item['id'];?>]" value="<?php  echo $item['name'];?>" />
						</td>
						<td style="width:300px; white-space:nowrap;overflow: visible">
							<div class="input-group">
								<input type="text" value="<?php  echo $item['url'];?>" id = "url<?php  echo $item['id'];?>" name="url[<?php  echo $item['id'];?>]" class="form-control" autocomplete="off">
								<span class="input-group-btn">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">选择链接 <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="javascript:" data-type="jiaoyu" onclick="showJiaoyuDialog('url<?php  echo $item['id'];?>',1);">微教育菜单</a></li>
										<li><a href="javascript:" data-type="system" onclick="showLinkDialog(this);">系统菜单</a></li>
										<li><a href="javascript:" data-type="page" onclick="pageLinkDialog(this);">微页面</a></li>
										<li><a href="javascript:" data-type="article" onclick="articleLinkDialog(this)">文章及分类</a></li>
										<li><a href="javascript:" data-type="news" onclick="newsLinkDialog(this)">图文回复</a></li>
										<li><a href="javascript:" data-type="map" onclick="mapLinkDialog(this)">一键导航</a></li>
										<li><a href="javascript:" data-type="phone" onclick="phoneLinkDialog(this)">一键拨号</a></li>
									</ul>
								</span>
							</div>
						</td>
						<td class="text-center" style="width:80px;"><?php  if($item['place'] == 1) { ?>首页<?php  } else if($item['place'] == 2) { ?>中部图标<?php  } else if($item['place'] == 3) { ?>魔方<?php  } else if($item['place'] == 4) { ?>下方列表<?php  } ?></td>
						<td class="text-center" style="width:50px;">
							<input type="text" class="form-control input-sm" name="ssort[<?php  echo $item['id'];?>]" value="<?php  echo $item['ssort'];?>" />
						</td>
						<td class="text-right" style="width:130px;">
							<input type="checkbox" value="<?php  echo $item['status'];?>" name="status[]" data-id="<?php  echo $item['id'];?>" <?php  if($item['status'] == 1) { ?>checked<?php  } ?>>
						</td>
					</tr>
				<?php  } } ?>
				</tbody>
			</table>
		</div>
        <div class="form-group col-sm-12">
            <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
	</form>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/link', TEMPLATE_INCLUDEPATH)) : (include template('public/link', TEMPLATE_INCLUDEPATH));?>
<script type="text/javascript">
require(['jquery', 'util', 'bootstrap.switch'], function($, u){
	$(':checkbox[name="status[]"]').bootstrapSwitch();
	$(':checkbox[name="status[]"]').on('switchChange.bootstrapSwitch', function(e, state){
		var status = this.checked ? 1 : 2;
		var id = $(this).attr('data-id');
		$.post("<?php  echo $this->createWebUrl('template', array('op' => 'change','schoolid' => $schoolid))?>", {id: id,status: status}, function(resp){
			setTimeout(function(){
			}, 500)
		});
	});
});
</script>
</div>
<?php  } else if($operation == 'display4') { ?>
<section class="grid-demo123">
</section>
<link href="<?php echo MODULE_URL;?>public/web/css/app.css" rel="stylesheet">
<style>
.deleteImage {background: url(<?php echo OSSURL;?>public/mobile/img/deleteImage.png); background-size: 20px;display: inline;float: ;right:-8px;height: 20px;position: absolute;width: 20px;z-index: 4;top: 0px;}
.deleteImages {background: url(<?php echo OSSURL;?>public/mobile/img/deleteImage.png); background-size: 20px;display: inline;float: ;right:0px;height: 20px;position: absolute;width: 20px;z-index: 4;top: 0px;}
.item:hover {cursor:pointer; overflow:hidden;background-color: #e0e6e6;color:#e0e6e6;box-sizing: border-box;}
.mofang:hover {background-color: #e0e6e6 !important;color:#e0e6e6 !important;}
.parent_weekPlan:hover {background-color: #e0e6e6 !important;color:#e0e6e6;}
.item:not([selected]) .deleteImage{display:none!important;}
.item:not([pinned]):hover .deleteImage{display:inherit!important;}
.mofang:not([selected]) .deleteImages{display:none!important;}
.mofang:not([pinned]):hover .deleteImages{display:inherit!important;}
.parent_weekPlan:not([selected]) .deleteImage{display:none!important;}
.parent_weekPlan:not([pinned]):hover .deleteImage{display:inherit!important;}
.parent_notify{padding: 12px 0 12px 25px;background:url(<?php echo MODULE_URL;?>public/mobile/img/parent_notify_icon.png) no-repeat #fff;background-size:19px 15px;background-position:15px center;color:#999;border-top: 1px solid #f0f0f2;margin-bottom: 10px;text-indent: 1em;}
.app .app-preview .app-header{height:70px; background:url('../web/resource/images/app/iphone_head.png') center center no-repeat;}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/parent_index.css">
<div class="cLine">
    <div class="alert">
    <p><span class="bold">提醒：</span>某些功能自定义名称在这里选中后前端将以此页面为准，后端菜单为自定义命名</br>

    </p>
    </div>
</div>
<div class="form-group">
	<a class="btn btn-danger" href="<?php  echo $this->createWebUrl('template', array('op' => 'reset4', 'schoolid' => $schoolid))?>"><i class="fa fa-recycle"></i>一键恢复</a>
	<?php  if($is_newest == false) { ?>
	<a class="btn btn-success" href="<?php  echo $this->createWebUrl('template', array('op' => 'newadd_tea', 'schoolid' => $schoolid,'missed_icon'=>$missed_icon))?>"><i class="fa fa-bullseye"></i>检查新增</a>
	<?php  } ?>

	<?php  if(is_TestFz()) { ?>
		<?php  if($schoolset['teatemplate'] == 'new') { ?>
			<?php  if($_GPC['is_master'] == 'is_master') { ?>
			<a class="btn btn-info" href="<?php  echo $this->createWebUrl('template', array('op' => 'display4', 'schoolid' => $schoolid))?>">切换为老师</a>
			<?php  } else { ?>
			<a class="btn btn-info" href="<?php  echo $this->createWebUrl('template', array('op' => 'display4', 'schoolid' => $schoolid,'is_master'=>'is_master'))?>">切换为校长</a>
			<?php  } ?>
		<?php  } ?>
	<?php  } ?>
</div>

<div class="form-group">

</div>
<div class="main" style="box-shadow:unset;background:unset;">

<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">


		<div class="app clearfix">
			<div class="app-preview">
				<div class="app-header"></div>
				<!-- TODO: 定制判断 -->
				<?php  if(is_TestFz()) { ?>
					<!-- TODO: 新旧，普通老师还是校长 -->
					<?php  if($schoolset['teatemplate'] == 'new') { ?>
						<?php  if($_GPC['is_master'] == 'is_master') { ?>
						<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/newpage_t_new_master', TEMPLATE_INCLUDEPATH)) : (include template('public/newpage_t_new_master', TEMPLATE_INCLUDEPATH));?>
						<?php  } else { ?>
						<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/newpage_t_new', TEMPLATE_INCLUDEPATH)) : (include template('public/newpage_t_new', TEMPLATE_INCLUDEPATH));?>
						<?php  } ?>
					<?php  } else { ?>
						<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/newpage_t', TEMPLATE_INCLUDEPATH)) : (include template('public/newpage_t', TEMPLATE_INCLUDEPATH));?>
					<?php  } ?>
				<?php  } else { ?>
				<!-- template 'public/newpage_t_new'  -->
				<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/newpage_t', TEMPLATE_INCLUDEPATH)) : (include template('public/newpage_t', TEMPLATE_INCLUDEPATH));?>
				<?php  } ?>

				<div class="app-region">
					<div class="arrow-top"></div>
					<div class="panel panel-default">
						<div class="panel-body">
							<h4 style="min-height:10px;padding-top: 5px;" class="text-center">新增组件</h4>
							<ul class="app-add-filed clearfix" style="padding-top: 5px;">
								<li class="ng-scope"><a id="newtype" style="min-width:70px;" class="btn btn-primary ng-binding">新增分类</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="app-side">
				<!-- template 'public/diychoose_t_new' -->
				<!-- TODO: 定制判断 -->
				<?php  if(is_TestFz()) { ?>
				<?php  if($schoolset['teatemplate'] == 'new') { ?>

				<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/diychoose_t_new', TEMPLATE_INCLUDEPATH)) : (include template('public/diychoose_t_new', TEMPLATE_INCLUDEPATH));?>

				<?php  } else { ?>
				<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/diychoose_t', TEMPLATE_INCLUDEPATH)) : (include template('public/diychoose_t', TEMPLATE_INCLUDEPATH));?>
				<?php  } ?>
				<!-- TODO: 新旧 -->
				<?php  } else { ?>
				<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/diychoose_t', TEMPLATE_INCLUDEPATH)) : (include template('public/diychoose_t', TEMPLATE_INCLUDEPATH));?>
				<?php  } ?>
				<?php  if(is_array($icontype)) { foreach($icontype as $row) { ?>	
				<div id="iconeditor<?php  echo $row['id'];?>" class="editor1" style="top: 50px !important; display: none;">
					<span class="deleteImage" title="删除" onclick="delicontype(<?php  echo $row['id'];?>)"></span>
					<div class="ng-scope">
						<div class="app-header-setting">
							<div class="arrow-left"></div>
							<div class="app-header-setting-inner">
								<div class="panel panel-default">
									<div class="panel-body form-horizontal">
										<input type="hidden" name="place[<?php  echo $row['id'];?>]" value="<?php  echo $row['place'];?>" />
										<input type="hidden" name="type[<?php  echo $row['id'];?>]" value="1" />
										<div class="form-group">
											<label class="col-xs-3 control-label"><span class="red">*</span>排序</label>
											<div class="col-xs-9">
												<input type="text" placeholder="<?php  echo $row['ssort'];?>" id="ssort<?php  echo $row['id'];?>" name="ssort[<?php  echo $row['id'];?>]" value="<?php  echo $row['ssort'];?>" class="form-control ng-pristine ng-untouched ng-valid">
											</div>
										</div>	
										<div class="form-group">
											<label class="col-xs-3 control-label"><span class="red">*</span>分类名称</label>
											<div class="col-xs-9">
												<input type="text" placeholder="<?php  echo $row['title'];?>" id="icontypetitle<?php  echo $row['id'];?>" name="icontypetitle[<?php  echo $row['id'];?>]" value="<?php  echo $row['title'];?>" class="form-control ng-pristine ng-untouched ng-valid">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>		
				</div>
				<?php  } } ?>
			</div>
			
			<div class="shop-preview col-xs-12 col-sm-9 col-lg-10">
				<div class="text-center alert alert-warning"  style="padding: 25px;height:60px;margin-bottom: 10px;border: 1px solid transparent;    border-radius: 4px;">
					<input style="top: -10px;" type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
					<input type="hidden" name="weid" value="<?php  echo $weid;?>" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
			</div>
		</div>
</form>

</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/typelist_t', TEMPLATE_INCLUDEPATH)) : (include template('public/typelist_t', TEMPLATE_INCLUDEPATH));?>
</body>

<script>
function delicontype(id){
	$.post("<?php  echo $this->createWebUrl('template', array('op' => 'delicontype','schoolid' => $schoolid))?>", {id: id}, function(resp){
		if(resp.result == true){
			$("#iconeditor"+id).remove();
		}
	},'json');
}
</script>
<?php  } else if($operation == 'display2') { ?>
<link href="<?php echo MODULE_URL;?>public/web/css/app.css" rel="stylesheet">
<style>
.deleteImage {background: url(<?php echo OSSURL;?>public/mobile/img/deleteImage.png); background-size: 20px;display: inline;float: ;right:-8px;height: 20px;position: absolute;width: 20px;z-index: 4;top: 0px;}
.deleteImages {background: url(<?php echo OSSURL;?>public/mobile/img/deleteImage.png); background-size: 20px;display: inline;float: ;right:0px;height: 20px;position: absolute;width: 20px;z-index: 4;top: 0px;}
.item:hover {cursor:pointer; overflow:hidden;background-color: #e0e6e6;color:#e0e6e6;box-sizing: border-box;}
.mofang:hover {background-color: #e0e6e6 !important;color:#e0e6e6 !important;}
.parent_weekPlan:hover {background-color: #e0e6e6 !important;color:#e0e6e6;}
.item:not([selected]) .deleteImage{display:none!important;}
.item:not([pinned]):hover .deleteImage{display:inherit!important;}
.mofang:not([selected]) .deleteImages{display:none!important;}
.mofang:not([pinned]):hover .deleteImages{display:inherit!important;}
.parent_weekPlan:not([selected]) .deleteImage{display:none!important;}
.parent_weekPlan:not([pinned]):hover .deleteImage{display:inherit!important;}
.parent_notify{padding: 12px 0 12px 25px;background:url(<?php echo MODULE_URL;?>public/mobile/img/parent_notify_icon.png) no-repeat #fff;background-size:19px 15px;background-position:15px center;color:#999;border-top: 1px solid #f0f0f2;margin-bottom: 10px;text-indent: 1em;}
.app .app-preview .app-header{height:70px; background:url('../web/resource/images/app/iphone_head.png') center center no-repeat;}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/parent_index.css">
<div class="cLine">
    <div class="alert">
    <p><span class="bold">提醒：</span>某些功能自定义名称在这里选中后前端将以此页面为准，后端菜单为自定义命名，如实时画面系统等</br>
   <strong><font color='red'>特别提醒: 当你在前端学生家长个人中心启用自定义模板的时候才能使用本自定模板!</font></strong></br>
   <strong><font style="color:#641DBF;">本页涉及到的教育菜单链接需要实现开启相应功能后才可使用，否则仅仅这里设置后无效，例如考勤功能等</font></strong>
    </p>
    </div>
</div>
<div class="form-group">
	<a class="btn btn-danger" href="<?php  echo $this->createWebUrl('template', array('op' => 'reset2', 'schoolid' => $schoolid))?>"><i class="fa fa-recycle"></i>一键恢复</a>
</div>
<div class="main">

<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">


		<div class="app clearfix">
			<div class="app-preview">
				<div class="app-header"></div>
				<!-- template 'public/newpage' -->


				<?php  if(is_TestFz()) { ?>
					<?php  if($schoolset['stutemplate'] == 'new') { ?>
						<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/newpage_new', TEMPLATE_INCLUDEPATH)) : (include template('public/newpage_new', TEMPLATE_INCLUDEPATH));?>
					<?php  } else { ?>
						<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/newpage', TEMPLATE_INCLUDEPATH)) : (include template('public/newpage', TEMPLATE_INCLUDEPATH));?>
					<?php  } ?>
				<?php  } else { ?>
					<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/newpage', TEMPLATE_INCLUDEPATH)) : (include template('public/newpage', TEMPLATE_INCLUDEPATH));?>
				<?php  } ?>

				
				<div class="app-region">
					<div class="arrow-top"></div>
					<div class="panel panel-default">
						<div class="panel-body">
							<h4 style="min-height:10px;padding-top: 5px;" class="text-center">新增组件</h4>
							<ul class="app-add-filed clearfix" style="padding-top: 5px;">
								<li class="ng-scope"><a id="top" style="min-width:70px;" class="btn btn-primary ng-binding">顶部图标</a></li>
								<li class="ng-scope"><a id="mof" style="min-width:70px;" class="btn btn-primary ng-binding">魔方组件</a></li>
								<li class="ng-scope"><a id="dibu" style="min-width:70px;" class="btn btn-primary ng-binding">底部列表</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="app-side">
					<!-- diychose -->
				<?php  if(is_TestFz()) { ?>
				<?php  if($schoolset['stutemplate'] == 'new') { ?>
					<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/diychoose_new', TEMPLATE_INCLUDEPATH)) : (include template('public/diychoose_new', TEMPLATE_INCLUDEPATH));?>
				<?php  } else { ?>
					<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/diychose', TEMPLATE_INCLUDEPATH)) : (include template('public/diychose', TEMPLATE_INCLUDEPATH));?>
				<?php  } ?>
			<?php  } else { ?>
				<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/diychose', TEMPLATE_INCLUDEPATH)) : (include template('public/diychose', TEMPLATE_INCLUDEPATH));?>
			<?php  } ?>


			</div>
			<div class="shop-preview col-xs-12 col-sm-9 col-lg-10">
				<div class="text-center alert alert-warning"  style="padding: 25px;height:60px;margin-bottom: 10px;border: 1px solid transparent;    border-radius: 4px;">
					<input style="top: -10px;" type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
					<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
					<input type="hidden" name="weid" value="<?php  echo $weid;?>" />
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
				</div>
			</div>
		</div>
</form>
<script type="text/javascript">
$('input:radio[name="topType"]').change(function(){
	var type =  $('input:radio[name="topType"]:checked').val();
	if(type == 1){
		$("#pureColor").show();
		$("#topImage").hide();
		var topColor = $('input[name="topColor"]').val();
		$(".head").css("background",topColor);

	}else if(type == 2){
		$("#pureColor").hide();
		$("#topImage").show();
		var topImg = $('input[name="top_image"]').val();
		$(".head").css("background","url("+topImg+")");
		$(".head").css("background-size","100% auto");
	}

})
$('input[name="topColor"]').change(function(){
		var topColor = $('input[name="topColor"]').val();
		$(".input-group-addon").css("background-color", topColor);
		$(".head").css("background",topColor);
})
function deleteclass(elm,id,type) {
	if(type == 1){
		$(elm).parent().parent().parent().remove();
		$("#iconeditor"+id).remove();
	}
	if(type == 2){
		$(elm).parent().remove();
		$("#iconeditor"+id).remove();
	}
	if(type == 3){
		$(elm).parent().remove();
		$("#iconeditor"+id).remove();
	}
}
function del(elm,id,type) {
	var id = id;
	var truthBeTold = window.confirm('确认要删除已保存的按钮吗 ?');
	var url = "<?php  echo $this->createWebUrl('template',array('op'=>'delclass','schoolid' => $schoolid))?>";
	var submitData = {
			id:id,
	};
	if (truthBeTold) {
		$.post(url, submitData, function(data) {
			if (data.result) {
				if(type == 1){
					$(elm).parent().parent().parent().remove();
					$("#iconeditor"+id).remove();
				}
				if(type == 2){
					$(elm).parent().remove();
					$("#iconeditor"+id).remove();
				}
				if(type == 3){
					$(elm).parent().remove();
					$("#iconeditor"+id).remove();
				}
			}else{
			   alert(data.msg);
			}
		},'json');
	}
}

$(document).on('click', '.delmf', function(){
	$(this).parent().remove();
	return false;
});
var imgruls = "<?php echo MODULE_URL;?>public/mobile/img/";
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/toplist', TEMPLATE_INCLUDEPATH)) : (include template('public/toplist', TEMPLATE_INCLUDEPATH));?>
<!-- template 'public/mflist' -->
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/mflist_new', TEMPLATE_INCLUDEPATH)) : (include template('public/mflist_new', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/dblist', TEMPLATE_INCLUDEPATH)) : (include template('public/dblist', TEMPLATE_INCLUDEPATH));?>
<script type="text/javascript">
		//处理临时增加的右侧显示
		$(document).ready(function() {
			$(".editor").hide();

		});
		function shouweditor(id) {
			$(".editor").hide();
			$("#iconeditor"+id).show();
		}
		//结束处理

require(['jquery', 'util', 'bootstrap.switch'], function($, u){
	$(':checkbox[name="status[]"]').bootstrapSwitch();
	$(':checkbox[name="status[]"]').on('switchChange.bootstrapSwitch', function(e, state){
		var status = this.checked ? 1 : 2;
		var id = $(this).attr('data-id');
		$.post("<?php  echo $this->createWebUrl('template', array('op' => 'change','schoolid' => $schoolid))?>", {id: id,status: status}, function(resp){
			setTimeout(function(){
			}, 500)
		});
	});
});
</script>
<script type="text/javascript">
function SwapTxt(btn)  {
	if(btn){
		var txt = document.getElementById("btnname"+btn).value;
		document.getElementById("iconname"+btn).innerHTML=txt;
		document.getElementById("btnname"+btn).value=txt;
	}
}
function SwapTxt1(btn)  {
	  if(btn){
		  var txt = document.getElementById("btnname"+btn).value;
		  document.getElementById("iconname"+btn).innerHTML=txt;
		  document.getElementById("btnname"+btn).value=txt;
	  }
}
function SwapTxt2(btn)  {
	  if(btn){
		  var txt = document.getElementById("mfbzs"+btn).value;
		  document.getElementById("mfbz"+btn).innerHTML=txt;
		  document.getElementById("mfbzs"+btn).value=txt;
	  }
}
function SwapTxt3(btn)  {
	  if(btn){
		  var txt = document.getElementById("lbnames"+btn).value;
		  document.getElementById("lbname"+btn).innerHTML=txt;
		  document.getElementById("lbnames"+btn).value=txt;
	  }
}
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/link', TEMPLATE_INCLUDEPATH)) : (include template('public/link', TEMPLATE_INCLUDEPATH));?>
</div>
<?php  } else if($operation == 'display3') { ?>
<div class="main">
	<div class="form-group">
		  <a class="btn btn-danger" href="<?php  echo $this->createWebUrl('template', array('op' => 'reset', 'schoolid' => $schoolid))?>"><i class="fa fa-recycle"></i>一键恢复</a>
		  <a class="btn btn-danger" href="<?php  echo $this->createWebUrl('template', array('op' => 'reset_centerbtn', 'schoolid' => $schoolid))?>"><i class="fa fa-recycle"></i>恢复中心按钮</a>
		  <a class="btn btn-primary" href="javascript:location.reload()"><i class="fa fa-refresh"></i> 刷新</a>
	</div>
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
		<div class="panel panel-info"><div class="panel-heading" style="color: #161819;background-color: #ffffff;">学生/家长中心</div>
			<table class="table table-hover">
				<thead class="navbar-inner">
					<tr>
						<th class="text-center" style="width:50px;">ID</th>
						<th class="text-center" style="width:100px;;">图标</th>
						<th class="text-center" style="width:100px;;">选中后</th>
						<th class="text-center" style="width:50px">标题</th>
						<th class="text-center" style="width:50px">选中字体颜色</th>
						<th class="text-center" style="width:200px;">链接</th>
						<th class="text-center" style="width:80px;">位置</th>
						<th class="text-center" style="width:50px;">排序</th>
						<th class="text-right" style="width:130px;">是否显示</th>
					</tr>
				</thead>
				<tbody>
				<?php  if(is_array($icons1)) { foreach($icons1 as $item) { ?>
					<input type="hidden" name="place[<?php  echo $item['id'];?>]" value="6" />
					<tr>
						<td class="text-center" style="width:50px;"><?php  echo $item['id'];?></td>
						<td class="text-center" style="width:60px;">
								<script type="text/javascript">
									function showImageDialog(elm, opts, options) {
										require(["util"], function(util){
											var btn = $(elm);
											var ipt = btn.parent().prev();
											var val = ipt.val();
											var img = ipt.parent().next().children();
											options = {'global':false,'class_extra':'','direct':true,'multiple':false};
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
											}, null, options);
										});
									}
									function deleteImage(elm){
										require(["jquery"], function($){
											$(elm).prev().attr("src", "./resource/images/nopic.jpg");
											$(elm).parent().prev().find("input").val("");
										});
									}
								</script>
								<div class="input-group ">
									<input type="text" name="iconurl[<?php  echo $item['id'];?>]" value="<?php  echo tomedia($item['icon'])?>" class="form-control" autocomplete="off">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>
									</span>
								</div>
								<div class="input-group " style="margin-top:.5em;">
									<img src="<?php  echo tomedia($item['icon'])?>" onerror="this.src='./resource/images/nopic.jpg'; this.title='图片未找到.'" class="img-responsive img-thumbnail" width="40">建议尺寸为37*45
									<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>
								</div>
						</td>
						<td class="text-center" style="width:60px;">
								<script type="text/javascript">
									function showImageDialog(elm, opts, options) {
										require(["util"], function(util){
											var btn = $(elm);
											var ipt = btn.parent().prev();
											var val = ipt.val();
											var img = ipt.parent().next().children();
											options = {'global':false,'class_extra':'','direct':true,'multiple':false};
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
											}, null, options);
										});
									}
									function deleteImage(elm){
										require(["jquery"], function($){
											$(elm).prev().attr("src", "./resource/images/nopic.jpg");
											$(elm).parent().prev().find("input").val("");
										});
									}
								</script>
								<div class="input-group ">
									<input type="text" name="iconurl2[<?php  echo $item['id'];?>]" value="<?php  echo tomedia($item['icon2'])?>" class="form-control" autocomplete="off">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>
									</span>
								</div>
								<div class="input-group " style="margin-top:.5em;">
									<img src="<?php  echo tomedia($item['icon2'])?>" onerror="this.src='./resource/images/nopic.jpg'; this.title='图片未找到.'" class="img-responsive img-thumbnail" width="40">建议尺寸为37*45
									<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>
								</div>
						</td>
						<td class="text-center" style="width:50px;">
							<input type="text" class="form-control input-sm" name="iconname[<?php  echo $item['id'];?>]" value="<?php  echo $item['name'];?>" />
						</td>
						<td class="text-center" style="width:100px;">
							<div class="input-group">
								<div class="ng-isolate-scope">
									<div class="input-group">
										<input type="hidden" name="bzcolor[<?php  echo $item['id'];?>]" value="<?php  echo $item['color'];?>">
										<span class="input-group-addon" style="width: 35px; border-left: none; background-color: <?php  echo $item['color'];?>;"></span>
										<span class="input-group-btn">
										<button class="btn btn-default colorpicker<?php  echo $item['id'];?>" type="button">选择颜色
											<i class="fa fa-caret-down"></i>
										</button>
										<button class="btn btn-default colorclean" type="button">
											<span><i class="fa fa-remove"></i></span>
										</button>
										</span>
									</div>
								</div>
							</div>
							<script type="text/javascript">
								require(["jquery", "util"], function($, util){
									$(function(){
										$(".colorpicker<?php  echo $item['id'];?>").each(function(){
											var elm = this;
											util.colorpicker(elm, function(color){
												$(elm).parent().prev().prev().val(color.toHexString());
												$(elm).parent().prev().css("background-color", color.toHexString());
												$("#iconname<?php  echo $item['id'];?>").css("color",color.toHexString());
											});
										});
										$(".colorclean").click(function(){
											$(this).parent().prev().prev().val("");
											$(this).parent().prev().css("background-color", "#FFF");
											$("#iconname<?php  echo $item['id'];?>").css("color", "#FFF");
										});
									});
								});
							</script>
						</td>
						<td style="width:200px; white-space:nowrap;overflow: visible">
							<div class="input-group">
								<input type="text" value="<?php  echo $item['url'];?>" id = "url<?php  echo $item['id'];?>" name="url[<?php  echo $item['id'];?>]" class="form-control" autocomplete="off">
								<input type="hidden" name="dos[<?php  echo $item['id'];?>]" id = "dos<?php  echo $item['id'];?>" value="<?php  echo $item['do'];?>">
								<span class="input-group-btn">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">选择链接 <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="javascript:" data-type="jiaoyu" onclick="showJiaoyuDialog('url<?php  echo $item['id'];?>',3,'dos<?php  echo $item['id'];?>');">微教育菜单</a></li>
										<li><a href="javascript:" data-type="system" onclick="showLinkDialog(this);">系统菜单</a></li>
										<li><a href="javascript:" data-type="page" onclick="pageLinkDialog(this);">微页面</a></li>
										<li><a href="javascript:" data-type="article" onclick="articleLinkDialog(this)">文章及分类</a></li>
										<li><a href="javascript:" data-type="news" onclick="newsLinkDialog(this)">图文回复</a></li>
										<li><a href="javascript:" data-type="map" onclick="mapLinkDialog(this)">一键导航</a></li>
										<li><a href="javascript:" data-type="phone" onclick="phoneLinkDialog(this)">一键拨号</a></li>
									</ul>
								</span>
							</div>
						</td>
						<td class="text-center" style="width:80px;"><span class="label label-success">底部</span></td>
						<td class="text-center" style="width:50px;">
							<input type="hidden" name="ssort[<?php  echo $item['id'];?>]" value="<?php  echo $item['ssort'];?>" />
							<span class="label label-info"><?php  if($item['ssort'] ==4) { ?>3<?php  } else if($item['ssort']==5) { ?>4<?php  } else { ?><?php  echo $item['ssort'];?><?php  } ?></span>
						</td>
						<td class="text-right" style="width:130px;">
							<input type="checkbox" value="<?php  echo $item['status'];?>" name="status[]" data-id="<?php  echo $item['id'];?>" <?php  if($item['status'] == 1) { ?>checked<?php  } ?>>
						</td>
					</tr>
				<?php  } } ?>
				</tbody>
			</table>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading" style="color: #161819;background-color: #ffffff;">弹框 学生/家长中心&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="<?php  if($icons22) { ?>1<?php  } else { ?>2<?php  } ?>" name="icons22[]" <?php  if($icons22) { ?>checked<?php  } ?>></div>
			<table class="table table-hover">
				<thead class="navbar-inner">
				<tr>
					<th class="text-center" style="width:50px;">ID</th>
					<th class="text-center" style="width:150px;;">图标</th>
					<th class="text-center" style="width:50px">标题</th>
					<th class="text-center" style="width:50px">背景颜色</th>
					<th class="text-center" style="width:200px;">链接</th>
					<th class="text-center" style="width:80px;">位置</th>
					<th class="text-center" style="width:50px;">排序</th>
					<th class="text-right" style="width:130px;">是否显示</th>
				</tr>
				</thead>
				<tbody>
					<!--中心按钮-->
					<input type="hidden" name="place[<?php  echo $icons_10['id'];?>]" value="10" />
					<tr>
						<td class="text-center" style="width:50px;"><?php  echo $icons_10['id'];?></td>
						<td class="text-center" style="width:60px;">
								<script type="text/javascript">
									function showImageDialog(elm, opts, options) {
										require(["util"], function(util){
											var btn = $(elm);
											var ipt = btn.parent().prev();
											var val = ipt.val();
											var img = ipt.parent().next().children();
											options = {'global':false,'class_extra':'','direct':true,'multiple':false};
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
											}, null, options);
										});
									}
									function deleteImage(elm){
										require(["jquery"], function($){
											$(elm).prev().attr("src", "./resource/images/nopic.jpg");
											$(elm).parent().prev().find("input").val("");
										});
									}
								</script>
								<div class="input-group ">
									<input type="text" name="iconurl[<?php  echo $icons_10['id'];?>]" value="<?php  echo tomedia($icons_10['icon'])?>" class="form-control" autocomplete="off">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>
									</span>
								</div>
								<div class="input-group " style="margin-top:.5em;">
									<img src="<?php  echo tomedia($icons_10['icon'])?>" onerror="this.src='./resource/images/nopic.jpg'; this.title='图片未找到.'" class="img-responsive img-thumbnail" width="40">建议尺寸为35*35的图片
									<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>
								</div>
						</td>
						<td class="text-center" style="width:50px;">
							<input type="text" class="form-control input-sm" name="iconname[<?php  echo $icons_10['id'];?>]" value="<?php  echo $icons_10['name'];?>" />
						</td>
						<td class="text-center" style="width:100px;">
							<div class="input-group">
								<div class="ng-isolate-scope">
									<div class="input-group">
										<input type="hidden" name="bzcolor[<?php  echo $icons_10['id'];?>]" value="<?php  echo $icons_10['color'];?>">
										<span class="input-group-addon" style="width: 35px; border-left: none; background-color: <?php  echo $icons_10['color'];?>;"></span>
										<span class="input-group-btn">
										<button class="btn btn-default colorpicker<?php  echo $icons_10['id'];?>" type="button">选择颜色
											<i class="fa fa-caret-down"></i>
										</button>
										<button class="btn btn-default colorclean" type="button">
											<span><i class="fa fa-remove"></i></span>
										</button>
										</span>
									</div>
								</div>
							</div>
							<script type="text/javascript">
								require(["jquery", "util"], function($, util){
									$(function(){
										$(".colorpicker<?php  echo $icons_10['id'];?>").each(function(){
											var elm = this;
											util.colorpicker(elm, function(color){
												$(elm).parent().prev().prev().val(color.toHexString());
												$(elm).parent().prev().css("background-color", color.toHexString());
												$("#iconname<?php  echo $icons_10['id'];?>").css("color",color.toHexString());
											});
										});
										$(".colorclean").click(function(){
											$(this).parent().prev().prev().val("");
											$(this).parent().prev().css("background-color", "#FFF");
											$("#iconname<?php  echo $icons_10['id'];?>").css("color", "#FFF");
										});
									});
								});
							</script>
						</td>
						<td></td>
						<td class="text-center" style="width:80px;"><span class="label label-primary">中心按钮</span></td>
						<td class="text-center" style="width:50px;">
						</td>
						<td class="text-right" style="width:130px;">
							<span class="label label-warning">必选</span>
						</td>
					</tr>
				<?php  if(is_array($icons2)) { foreach($icons2 as $item) { ?>
					<input type="hidden" name="place[<?php  echo $item['id'];?>]" value="7" />
					<tr>
						<td class="text-center" style="width:50px;"><?php  echo $item['id'];?></td>
						<td class="text-center" style="width:60px;">
								<script type="text/javascript">
									function showImageDialog(elm, opts, options) {
										require(["util"], function(util){
											var btn = $(elm);
											var ipt = btn.parent().prev();
											var val = ipt.val();
											var img = ipt.parent().next().children();
											options = {'global':false,'class_extra':'','direct':true,'multiple':false};
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
											}, null, options);
										});
									}
									function deleteImage(elm){
										require(["jquery"], function($){
											$(elm).prev().attr("src", "./resource/images/nopic.jpg");
											$(elm).parent().prev().find("input").val("");
										});
									}
								</script>
								<div class="input-group ">
									<input type="text" name="iconurl[<?php  echo $item['id'];?>]" value="<?php  echo tomedia($item['icon'])?>" class="form-control" autocomplete="off">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>
									</span>
								</div>
								<div class="input-group " style="margin-top:.5em;">
									<img src="<?php  echo tomedia($item['icon'])?>" onerror="this.src='./resource/images/nopic.jpg'; this.title='图片未找到.'" class="img-responsive img-thumbnail" width="40">建议尺寸为80*80的图片
									<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>
								</div>
						</td>
						<td class="text-center" style="width:50px;">
							<input type="text" class="form-control input-sm" name="iconname[<?php  echo $item['id'];?>]" value="<?php  echo $item['name'];?>" />
						</td>
						<td class="text-center" style="width:100px;">
							<div class="input-group">
								<div class="ng-isolate-scope">
									<div class="input-group">
										<input type="hidden" name="bzcolor[<?php  echo $item['id'];?>]" value="<?php  echo $item['color'];?>">
										<span class="input-group-addon" style="width: 35px; border-left: none; background-color: <?php  echo $item['color'];?>;"></span>
										<span class="input-group-btn">
										<button class="btn btn-default colorpicker<?php  echo $item['id'];?>" type="button">选择颜色
											<i class="fa fa-caret-down"></i>
										</button>
										<button class="btn btn-default colorclean" type="button">
											<span><i class="fa fa-remove"></i></span>
										</button>
										</span>
									</div>
								</div>
							</div>
							<script type="text/javascript">
								require(["jquery", "util"], function($, util){
									$(function(){
										$(".colorpicker<?php  echo $item['id'];?>").each(function(){
											var elm = this;
											util.colorpicker(elm, function(color){
												$(elm).parent().prev().prev().val(color.toHexString());
												$(elm).parent().prev().css("background-color", color.toHexString());
												$("#iconname<?php  echo $item['id'];?>").css("color",color.toHexString());
											});
										});
										$(".colorclean").click(function(){
											$(this).parent().prev().prev().val("");
											$(this).parent().prev().css("background-color", "#FFF");
											$("#iconname<?php  echo $item['id'];?>").css("color", "#FFF");
										});
									});
								});
							</script>
						</td>
						<td style="width:300px; white-space:nowrap;overflow: visible">
							<div class="input-group">
								<input type="text" value="<?php  echo $item['url'];?>" id = "url<?php  echo $item['id'];?>" name="url[<?php  echo $item['id'];?>]" class="form-control" autocomplete="off">
								<input type="hidden" name="dos[<?php  echo $item['id'];?>]" id = "dos<?php  echo $item['id'];?>" value="<?php  echo $item['do'];?>">
								<span class="input-group-btn">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">选择链接 <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="javascript:" data-type="jiaoyu" onclick="showJiaoyuDialog('url<?php  echo $item['id'];?>',3,'dos<?php  echo $item['id'];?>');">微教育菜单</a></li>
										<li><a href="javascript:" data-type="system" onclick="showLinkDialog(this);">系统菜单</a></li>
										<li><a href="javascript:" data-type="page" onclick="pageLinkDialog(this);">微页面</a></li>
										<li><a href="javascript:" data-type="article" onclick="articleLinkDialog(this)">文章及分类</a></li>
										<li><a href="javascript:" data-type="news" onclick="newsLinkDialog(this)">图文回复</a></li>
										<li><a href="javascript:" data-type="map" onclick="mapLinkDialog(this)">一键导航</a></li>
										<li><a href="javascript:" data-type="phone" onclick="phoneLinkDialog(this)">一键拨号</a></li>
									</ul>
								</span>
							</div>
						</td>
						<td class="text-center" style="width:80px;"><span class="label label-danger">弹框</span></td>
						<td class="text-center" style="width:50px;">
							<input type="text" class="form-control input-sm" name="ssort[<?php  echo $item['id'];?>]" value="<?php  echo $item['ssort'];?>" />
						</td>
						<td class="text-right" style="width:130px;">
						<?php  if($item['ssort'] == 4) { ?>
							<input type="checkbox" value="<?php  echo $item['status'];?>" name="status[]" data-id="<?php  echo $item['id'];?>" <?php  if($item['status'] == 1) { ?>checked<?php  } ?>>
						<?php  } else { ?>
							<span class="label label-warning">必选</span>
						<?php  } ?>
						</td>
					</tr>
				<?php  } } ?>
				</tbody>
			</table>
		</div>
		<div class="panel panel-info"><div class="panel-heading" style="color: #161819;background-color: #ffffff;">教师中心</div>
			<table class="table table-hover">
				<thead class="navbar-inner">
					<tr>
						<th class="text-center" style="width:50px;">ID</th>
						<th class="text-center" style="width:100px;;">图标</th>
						<th class="text-center" style="width:100px;;">选中后</th>
						<th class="text-center" style="width:50px">标题</th>
						<th class="text-center" style="width:50px">选中字体颜色</th>
						<th class="text-center" style="width:200px;">链接</th>
						<th class="text-center" style="width:80px;">位置</th>
						<th class="text-center" style="width:50px;">排序</th>
						<th class="text-right" style="width:130px;">是否显示</th>
					</tr>
				</thead>
				<tbody>

				<?php  if(is_array($icons3)) { foreach($icons3 as $item) { ?>
					<input type="hidden" name="place[<?php  echo $item['id'];?>]" value="8" />
					<tr>
						<td class="text-center" style="width:50px;"><?php  echo $item['id'];?></td>
						<td class="text-center" style="width:60px;">
								<script type="text/javascript">
									function showImageDialog(elm, opts, options) {
										require(["util"], function(util){
											var btn = $(elm);
											var ipt = btn.parent().prev();
											var val = ipt.val();
											var img = ipt.parent().next().children();
											options = {'global':false,'class_extra':'','direct':true,'multiple':false};
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
											}, null, options);
										});
									}
									function deleteImage(elm){
										require(["jquery"], function($){
											$(elm).prev().attr("src", "./resource/images/nopic.jpg");
											$(elm).parent().prev().find("input").val("");
										});
									}
								</script>
								<div class="input-group ">
									<input type="text" name="iconurl[<?php  echo $item['id'];?>]" value="<?php  echo tomedia($item['icon'])?>" class="form-control" autocomplete="off">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>
									</span>
								</div>
								<div class="input-group " style="margin-top:.5em;">
									<img src="<?php  echo tomedia($item['icon'])?>" onerror="this.src='./resource/images/nopic.jpg'; this.title='图片未找到.'" class="img-responsive img-thumbnail" width="40">建议尺寸为37*45
									<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>
								</div>
						</td>
						<td class="text-center" style="width:60px;">
								<script type="text/javascript">
									function showImageDialog(elm, opts, options) {
										require(["util"], function(util){
											var btn = $(elm);
											var ipt = btn.parent().prev();
											var val = ipt.val();
											var img = ipt.parent().next().children();
											options = {'global':false,'class_extra':'','direct':true,'multiple':false};
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
											}, null, options);
										});
									}
									function deleteImage(elm){
										require(["jquery"], function($){
											$(elm).prev().attr("src", "./resource/images/nopic.jpg");
											$(elm).parent().prev().find("input").val("");
										});
									}
								</script>
								<div class="input-group ">
									<input type="text" name="iconurl2[<?php  echo $item['id'];?>]" value="<?php  echo tomedia($item['icon2'])?>" class="form-control" autocomplete="off">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>
									</span>
								</div>
								<div class="input-group " style="margin-top:.5em;">
									<img src="<?php  echo tomedia($item['icon2'])?>" onerror="this.src='./resource/images/nopic.jpg'; this.title='图片未找到.'" class="img-responsive img-thumbnail" width="40">建议尺寸为37*45
									<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>
								</div>
						</td>
						<td class="text-center" style="width:50px;">
							<input type="text" class="form-control input-sm" name="iconname[<?php  echo $item['id'];?>]" value="<?php  echo $item['name'];?>" />
						</td>
						<td class="text-center" style="width:100px;">
							<div class="input-group">
								<div class="ng-isolate-scope">
									<div class="input-group">
										<input type="hidden" name="bzcolor[<?php  echo $item['id'];?>]" value="<?php  echo $item['color'];?>">
										<span class="input-group-addon" style="width: 35px; border-left: none; background-color: <?php  echo $item['color'];?>;"></span>
										<span class="input-group-btn">
										<button class="btn btn-default colorpicker<?php  echo $item['id'];?>" type="button">选择颜色
											<i class="fa fa-caret-down"></i>
										</button>
										<button class="btn btn-default colorclean" type="button">
											<span><i class="fa fa-remove"></i></span>
										</button>
										</span>
									</div>
								</div>
							</div>
							<script type="text/javascript">
								require(["jquery", "util"], function($, util){
									$(function(){
										$(".colorpicker<?php  echo $item['id'];?>").each(function(){
											var elm = this;
											util.colorpicker(elm, function(color){
												$(elm).parent().prev().prev().val(color.toHexString());
												$(elm).parent().prev().css("background-color", color.toHexString());
												$("#iconname<?php  echo $item['id'];?>").css("color",color.toHexString());
											});
										});
										$(".colorclean").click(function(){
											$(this).parent().prev().prev().val("");
											$(this).parent().prev().css("background-color", "#FFF");
											$("#iconname<?php  echo $item['id'];?>").css("color", "#FFF");
										});
									});
								});
							</script>
						</td>
						<td style="width:200px; white-space:nowrap;overflow: visible">
							<div class="input-group">
								<input type="text" value="<?php  echo $item['url'];?>" id = "url<?php  echo $item['id'];?>" name="url[<?php  echo $item['id'];?>]" class="form-control" autocomplete="off">
								<input type="hidden" name="dos[<?php  echo $item['id'];?>]" id = "dos<?php  echo $item['id'];?>" value="<?php  echo $item['do'];?>">
								<span class="input-group-btn">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">选择链接 <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="javascript:" data-type="jiaoyu" onclick="showJiaoyuDialog('url<?php  echo $item['id'];?>',4,'dos<?php  echo $item['id'];?>');">微教育菜单</a></li>
										<li><a href="javascript:" data-type="system" onclick="showLinkDialog(this);">系统菜单</a></li>
										<li><a href="javascript:" data-type="page" onclick="pageLinkDialog(this);">微页面</a></li>
										<li><a href="javascript:" data-type="article" onclick="articleLinkDialog(this)">文章及分类</a></li>
										<li><a href="javascript:" data-type="news" onclick="newsLinkDialog(this)">图文回复</a></li>
										<li><a href="javascript:" data-type="map" onclick="mapLinkDialog(this)">一键导航</a></li>
										<li><a href="javascript:" data-type="phone" onclick="phoneLinkDialog(this)">一键拨号</a></li>
									</ul>
								</span>
							</div>
						</td>
						<td class="text-center" style="width:80px;"><span class="label label-success">底部</span></td>
						<td class="text-center" style="width:50px;">
							<input type="hidden" name="ssort[<?php  echo $item['id'];?>]" value="<?php  echo $item['ssort'];?>" />
							<span class="label label-info"><?php  if($item['ssort'] ==4) { ?>3<?php  } else if($item['ssort']==5) { ?>4<?php  } else { ?><?php  echo $item['ssort'];?><?php  } ?></span>
						</td>
						<td class="text-right" style="width:130px;">
							<input type="checkbox" value="<?php  echo $item['status'];?>" name="status[]" data-id="<?php  echo $item['id'];?>" <?php  if($item['status'] == 1) { ?>checked<?php  } ?>>
						</td>
					</tr>
				<?php  } } ?>
				</tbody>
			</table>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading" style="color: #161819;background-color: #ffffff;">弹框 教师中心&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="<?php  if($icons44) { ?>1<?php  } else { ?>2<?php  } ?>" name="icons44[]" <?php  if($icons44) { ?>checked<?php  } ?>></div>
			<table class="table table-hover">
				<thead class="navbar-inner">
				<tr>
					<th class="text-center" style="width:50px;">ID</th>
					<th class="text-center" style="width:150px;;">图标</th>
					<th class="text-center" style="width:50px">标题</th>
					<th class="text-center" style="width:50px">背景颜色</th>
					<th class="text-center" style="width:200px;">链接</th>
					<th class="text-center" style="width:80px;">位置</th>
					<th class="text-center" style="width:50px;">排序</th>
					<th class="text-right" style="width:130px;">是否显示</th>
				</tr>
				</thead>
				<tbody>
					<!--中心按钮-->
					<input type="hidden" name="place[<?php  echo $icons_11['id'];?>]" value="11" />
					<tr>
						<td class="text-center" style="width:50px;"><?php  echo $icons_11['id'];?></td>
						<td class="text-center" style="width:60px;">
								<script type="text/javascript">
									function showImageDialog(elm, opts, options) {
										require(["util"], function(util){
											var btn = $(elm);
											var ipt = btn.parent().prev();
											var val = ipt.val();
											var img = ipt.parent().next().children();
											options = {'global':false,'class_extra':'','direct':true,'multiple':false};
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
											}, null, options);
										});
									}
									function deleteImage(elm){
										require(["jquery"], function($){
											$(elm).prev().attr("src", "./resource/images/nopic.jpg");
											$(elm).parent().prev().find("input").val("");
										});
									}
								</script>
								<div class="input-group ">
									<input type="text" name="iconurl[<?php  echo $icons_11['id'];?>]" value="<?php  echo tomedia($icons_11['icon'])?>" class="form-control" autocomplete="off">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>
									</span>
								</div>
								<div class="input-group " style="margin-top:.5em;">
									<img src="<?php  echo tomedia($icons_11['icon'])?>" onerror="this.src='./resource/images/nopic.jpg'; this.title='图片未找到.'" class="img-responsive img-thumbnail" width="40">建议尺寸为35*35的图片
									<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>
								</div>
						</td>
						<td class="text-center" style="width:50px;">
							<input type="text" class="form-control input-sm" name="iconname[<?php  echo $icons_11['id'];?>]" value="<?php  echo $icons_11['name'];?>" />
						</td>
						<td class="text-center" style="width:100px;">
							<div class="input-group">
								<div class="ng-isolate-scope">
									<div class="input-group">
										<input type="hidden" name="bzcolor[<?php  echo $icons_11['id'];?>]" value="<?php  echo $icons_11['color'];?>">
										<span class="input-group-addon" style="width: 35px; border-left: none; background-color: <?php  echo $icons_11['color'];?>;"></span>
										<span class="input-group-btn">
										<button class="btn btn-default colorpicker<?php  echo $icons_11['id'];?>" type="button">选择颜色
											<i class="fa fa-caret-down"></i>
										</button>
										<button class="btn btn-default colorclean" type="button">
											<span><i class="fa fa-remove"></i></span>
										</button>
										</span>
									</div>
								</div>
							</div>
							<script type="text/javascript">
								require(["jquery", "util"], function($, util){
									$(function(){
										$(".colorpicker<?php  echo $icons_11['id'];?>").each(function(){
											var elm = this;
											util.colorpicker(elm, function(color){
												$(elm).parent().prev().prev().val(color.toHexString());
												$(elm).parent().prev().css("background-color", color.toHexString());
												$("#iconname<?php  echo $icons_11['id'];?>").css("color",color.toHexString());
											});
										});
										$(".colorclean").click(function(){
											$(this).parent().prev().prev().val("");
											$(this).parent().prev().css("background-color", "#FFF");
											$("#iconname<?php  echo $icons_11['id'];?>").css("color", "#FFF");
										});
									});
								});
							</script>
						</td>
						<td></td>
						<td class="text-center" style="width:80px;"><span class="label label-primary">中心按钮</span></td>
						<td class="text-center" style="width:50px;">
						</td>
						<td class="text-right" style="width:130px;">
							<span class="label label-warning">必选</span>
						</td>
					</tr>
				<?php  if(is_array($icons4)) { foreach($icons4 as $item) { ?>
					<input type="hidden" name="place[<?php  echo $item['id'];?>]" value="9" />
					<tr>
						<td class="text-center" style="width:50px;"><?php  echo $item['id'];?></td>
						<td class="text-center" style="width:60px;">
								<script type="text/javascript">
									function showImageDialog(elm, opts, options) {
										require(["util"], function(util){
											var btn = $(elm);
											var ipt = btn.parent().prev();
											var val = ipt.val();
											var img = ipt.parent().next().children();
											options = {'global':false,'class_extra':'','direct':true,'multiple':false};
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
											}, null, options);
										});
									}
									function deleteImage(elm){
										require(["jquery"], function($){
											$(elm).prev().attr("src", "./resource/images/nopic.jpg");
											$(elm).parent().prev().find("input").val("");
										});
									}
								</script>
								<div class="input-group ">
									<input type="text" name="iconurl[<?php  echo $item['id'];?>]" value="<?php  echo tomedia($item['icon'])?>" class="form-control" autocomplete="off">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>
									</span>
								</div>
								<div class="input-group " style="margin-top:.5em;">
									<img src="<?php  echo tomedia($item['icon'])?>" onerror="this.src='./resource/images/nopic.jpg'; this.title='图片未找到.'" class="img-responsive img-thumbnail" width="40">建议尺寸为80*80的图片
									<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>
								</div>
						</td>
						<td class="text-center" style="width:50px;">
							<input type="text" class="form-control input-sm" name="iconname[<?php  echo $item['id'];?>]" value="<?php  echo $item['name'];?>" />
						</td>
						<td class="text-center" style="width:100px;">
							<div class="input-group">
								<div class="ng-isolate-scope">
									<div class="input-group">
										<input type="hidden" name="bzcolor[<?php  echo $item['id'];?>]" value="<?php  echo $item['color'];?>">
										<span class="input-group-addon" style="width: 35px; border-left: none; background-color: <?php  echo $item['color'];?>;"></span>
										<span class="input-group-btn">
										<button class="btn btn-default colorpicker<?php  echo $item['id'];?>" type="button">选择颜色
											<i class="fa fa-caret-down"></i>
										</button>
										<button class="btn btn-default colorclean" type="button">
											<span><i class="fa fa-remove"></i></span>
										</button>
										</span>
									</div>
								</div>
							</div>
							<script type="text/javascript">
								require(["jquery", "util"], function($, util){
									$(function(){
										$(".colorpicker<?php  echo $item['id'];?>").each(function(){
											var elm = this;
											util.colorpicker(elm, function(color){
												$(elm).parent().prev().prev().val(color.toHexString());
												$(elm).parent().prev().css("background-color", color.toHexString());
												$("#iconname<?php  echo $item['id'];?>").css("color",color.toHexString());
											});
										});
										$(".colorclean").click(function(){
											$(this).parent().prev().prev().val("");
											$(this).parent().prev().css("background-color", "#FFF");
											$("#iconname<?php  echo $item['id'];?>").css("color", "#FFF");
										});
									});
								});
							</script>
						</td>
						<td style="width:300px; white-space:nowrap;overflow: visible">
							<div class="input-group">
								<input type="text" value="<?php  echo $item['url'];?>" id = "url<?php  echo $item['id'];?>" name="url[<?php  echo $item['id'];?>]" class="form-control" autocomplete="off">
								<input type="hidden" name="dos[<?php  echo $item['id'];?>]" id = "dos<?php  echo $item['id'];?>" value="<?php  echo $item['do'];?>">
								<span class="input-group-btn">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">选择链接 <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="javascript:" data-type="jiaoyu" onclick="showJiaoyuDialog('url<?php  echo $item['id'];?>',4,'dos<?php  echo $item['id'];?>');">微教育菜单</a></li>
										<li><a href="javascript:" data-type="system" onclick="showLinkDialog(this);">系统菜单</a></li>
										<li><a href="javascript:" data-type="page" onclick="pageLinkDialog(this);">微页面</a></li>
										<li><a href="javascript:" data-type="article" onclick="articleLinkDialog(this)">文章及分类</a></li>
										<li><a href="javascript:" data-type="news" onclick="newsLinkDialog(this)">图文回复</a></li>
										<li><a href="javascript:" data-type="map" onclick="mapLinkDialog(this)">一键导航</a></li>
										<li><a href="javascript:" data-type="phone" onclick="phoneLinkDialog(this)">一键拨号</a></li>
									</ul>
								</span>
							</div>
						</td>
						<td class="text-center" style="width:80px;"><span class="label label-danger">弹框</span></td>
						<td class="text-center" style="width:50px;">
							<input type="text" class="form-control input-sm" name="ssort[<?php  echo $item['id'];?>]" value="<?php  echo $item['ssort'];?>" />
						</td>
						<td class="text-right" style="width:130px;">
						<?php  if($item['ssort'] == 4) { ?>
							<input type="checkbox" value="<?php  echo $item['status'];?>" name="status[]" data-id="<?php  echo $item['id'];?>" <?php  if($item['status'] == 1) { ?>checked<?php  } ?>>
						<?php  } else { ?>
							<span class="label label-warning">必选</span>
						<?php  } ?>
						</td>
					</tr>
				<?php  } } ?>
				</tbody>
			</table>
		</div>
        <div class="form-group col-sm-12">
            <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
	</form>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/link', TEMPLATE_INCLUDEPATH)) : (include template('public/link', TEMPLATE_INCLUDEPATH));?>
<script type="text/javascript">
require(['jquery', 'util', 'bootstrap.switch'], function($, u){
	$(':checkbox[name="status[]"]').bootstrapSwitch();
	$(':checkbox[name="status[]"]').on('switchChange.bootstrapSwitch', function(e, state){
		var status = this.checked ? 1 : 2;
		var id = $(this).attr('data-id');
		$.post("<?php  echo $this->createWebUrl('template', array('op' => 'change','schoolid' => $schoolid))?>", {id: id,status: status}, function(resp){
			setTimeout(function(){
			}, 500)
		});
	});
	$(':checkbox[name="icons22[]"]').bootstrapSwitch();
	$(':checkbox[name="icons22[]"]').on('switchChange.bootstrapSwitch', function(e, state){
		var status = this.checked ? 1 : 2;
		$.post("<?php  echo $this->createWebUrl('template', array('op' => 'icons22','schoolid' => $schoolid))?>", {status: status}, function(resp){
			setTimeout(function(){
			}, 500)
		});
	});
	$(':checkbox[name="icons44[]"]').bootstrapSwitch();
	$(':checkbox[name="icons44[]"]').on('switchChange.bootstrapSwitch', function(e, state){
		var status = this.checked ? 1 : 2;
		$.post("<?php  echo $this->createWebUrl('template', array('op' => 'icons44','schoolid' => $schoolid))?>", {status: status}, function(resp){
			setTimeout(function(){
			}, 500)
		});
	});
});
</script>
</div>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/common', TEMPLATE_INCLUDEPATH)) : (include template('web/common', TEMPLATE_INCLUDEPATH));?>
