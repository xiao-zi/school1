<?php defined('IN_IA') or exit('Access Denied');?><script type="text/javascript"> 
var topid = <?php  echo $lastid['id'];?>;
var divid = topid + 1;
	$('#top').click(function(){
		divid++;
		//alert ("iconpic"+divid);
		var html =  '<li class="item" onclick="shouweditor('+divid+')" id="icon'+divid+'">'+
					'	<a>'+
					'		<div class="bubbling_wrap">'+
					'			<img id="iconpic'+divid+'" src="'+imgruls+'parent_sign.png">'+
					'			<span class="deleteImage"  title="删除" onclick="deleteclass(this,'+divid+',1)"></span>'+
					'		</div>'+
					'		<p id ="iconname'+divid+'" style="font-size: 12px; color: #666">新按钮</p>'+
					'	</a>'+
					'</li>';	
				;
		$('.item_list').append(html);
		var imgurlss = "url"+divid;
		var imgurls = "'"+imgurlss+"'";
		var htmls = '<div id="iconeditor'+divid+'" class="editor" style="">'+
					'		<div class="ng-scope">'+
					'			<div class="app-header-setting">'+
					'				<div class="arrow-left"></div>'+
					'				<div class="app-header-setting-inner">'+
					'					<div class="panel panel-default">'+
					'						<div class="panel-body form-horizontal">'+
					'							<input type="hidden" name="type['+divid+']" value="2" />'+
					'							<input type="hidden" name="place['+divid+']" value="3" />'+				
					'							<div class="form-group">'+
					'								<label class="col-xs-3 control-label"><span class="red">*</span>显示状态</label>'+
					'								<div class="col-xs-9">'+
					'									<input type="checkbox" value="1" name="status['+divid+']" checked>'+
					'									<span class="help-block">新增按钮默认显示，修改请提交后再次编辑</span>'+
					'								</div>'+
					'							</div>'+
					'							<div class="form-group">'+
					'								<label class="col-xs-3 control-label"><span class="red">*</span>按钮名称</label>'+
					'								<div class="col-xs-9">'+
					'									<input type="text" id="btnname'+divid+'" name="btnname['+divid+']" onkeyup="SwapTxt('+divid+')" placeholder="按钮名称" value="新按钮" class="form-control ng-pristine ng-untouched ng-valid">'+
					'								</div>'+
					'							</div>'+
					'							<div class="form-group ng-scope">'+
					'								<label class="control-label col-xs-3">链接地址</label>'+
					'								<div class="col-xs-9">'+
					'								<div class="ng-isolate-scope">'+
					'									<div class="dropdown link">'+
					'										<div class="input-group">'+
					'											<input type="text" value="" id = "url'+divid+'" name="url['+divid+']" class="form-control" autocomplete="off">'+
					'												<span class="input-group-btn">'+
					'													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">选择链接 <span class="caret"></span></button>'+
					'													<ul class="dropdown-menu">'+
					'														<li><a href="javascript:" data-type="jiaoyu" onclick="showJiaoyuDialog('+imgurls+',2);">微教育菜单</a></li>'+
					'														<li><a href="javascript:" data-type="system" onclick="showLinkDialog(this);">系统菜单</a></li>'+
					'														<li><a href="javascript:" data-type="page" onclick="pageLinkDialog(this);">微页面</a></li>'+
					'														<li><a href="javascript:" data-type="article" onclick="articleLinkDialog(this)">文章及分类</a></li>'+
					'														<li><a href="javascript:" data-type="news" onclick="newsLinkDialog(this)">图文回复</a></li>'+
					'														<li><a href="javascript:" data-type="map" onclick="mapLinkDialog(this)">一键导航</a></li>'+
					'														<li><a href="javascript:" data-type="phone" onclick="phoneLinkDialog(this)">一键拨号</a></li>'+
					'													</ul>'+
					'												</span>	'+
					'										</div>'+
					'									</div>'+
					'								</div>'+
					'								</div>'+
					'							</div>'+
					'							<div class="form-group">'+
					'								<label class="control-label col-xs-3"><span class="red">*</span>图标</label>'+
					'								<div class="col-xs-9">'+
					'									<div class="input-group ">'+
					'										<input type="text" name="iconpics['+divid+']" id="iconpics'+divid+'" value="'+imgruls+'parent_sign.png" class="form-control" autocomplete="off" filename="" url="">'+
					'										<span class="input-group-btn">'+
					'											<button class="btn btn-default" data_id="iconpic'+divid+'" type="button" onclick="showImageDialogss(this);">选择图片</button>'+
					'										</span>'+
					'									</div>'+
					'									<div class="input-group " style="margin-top:.5em;">'+
					'										<img src="'+imgruls+'parent_sign.png" onerror="" class="img-responsive img-thumbnail" width="150">'+
					'										<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>'+
					'									</div>'+
					'									<span class="help-block">推荐尺寸45*45左右,正方形图标</span>'+
					'								</div>'+
					'							</div>'+
					'						</div>'+
					'					</div>'+
					'				</div>'+
					'			</div>'+
					'		</div>'+
					'	</div>';	
				;
		$('.app-side').append(htmls);			
	});
</script> 