<?php defined('IN_IA') or exit('Access Denied');?><script type="text/javascript"> 
var mfid = <?php  echo $lastid['id'];?>;
var divids = mfid + 40;
	$('#mof').click(function(){
		divids++;
		//alert ("iconpic"+divid);
		var htmls =	'<a class="mofang" id="mofang'+divids+'" onclick="shouweditor('+divids+')" style="background: url('+imgruls+'parent_contact.png) no-repeat;background-size:38px 40px;background-position: 90% center;">'+
					'				<span class="deleteImages"  title="删除" onclick="deleteclass(this,'+divids+',2)"></span>'+
					'				<h3 id ="iconname'+divids+'" style="font-size: 16px;">魔方按钮</h3>'+
					'				<p id ="mfbz'+divids+'" style="color:#999;font-size:11px" class="pull_left">底部小字</p>'+
					'</a>';
				;



		var htmls = `
		
			<a class="mofang" id="mofang${divids}" style="text-align: center" onclick="shouweditor(${divids})">
				<span class="deleteImages"  title="删除" onclick="del(this,${divids},2)"></span>
				<div style="width:40px;margin:0 calc(50% - 20px);margin-bottom: 15px ;background: url(${imgruls}parent_contact.png) no-repeat;height:40px;background-size:100% 100%;" ></div>
				<span id ="iconname${divids}"  style="font-size: 14px;color:gray">魔方按钮</span>
			</a>
		`;
		$('.parent_option').append(htmls);
		var imgurlss = "url"+divids;
		var imgurls = "'"+imgurlss+"'";
		var htmls1ss = '<div id="iconeditor'+divids+'" class="editor" style="top:200px">'+
					'	<div class="ng-scope">'+
					'		<div class="app-header-setting">'+
					'			<div class="arrow-left"></div>'+
					'			<div class="app-header-setting-inner">'+
					'				<div class="panel panel-default">'+
					'					<div class="panel-body form-horizontal">'+
					'						<input type="hidden" name="type['+divids+']" value="2" />'+
					'						<input type="hidden" name="place['+divids+']" value="4" />'+						
					'						<div class="form-group">'+
					'  						    <label class="col-xs-3 control-label"><span class="red">*</span>显示状态</label>'+
					'							<div class="col-xs-9">'+
					'									<input type="checkbox" value="1" name="status['+divids+']" checked>'+
					'									<span class="help-block">新增按钮默认显示，修改请提交后再次编辑</span>'+
					'							</div>'+
					'						</div>'+
					'						<div class="form-group">'+
					'							<label class="col-xs-3 control-label"><span class="red">*</span>按钮名称</label>'+
					'							<div class="col-xs-9">'+
					'								<input type="text" id="btnname'+divids+'" name="btnname['+divids+']" onkeyup="SwapTxt1('+divids+')" placeholder="按钮名称" value="魔方按钮" class="form-control ng-pristine ng-untouched ng-valid">'+
					'							</div>'+
					'						</div>'+																	
					'						<div class="form-group ng-scope">'+
					'							<label class="control-label col-xs-3">链接地址</label>'+
					'							<div class="col-xs-9">'+
					'							<div class="ng-isolate-scope">'+
					'								<div class="dropdown link">'+
					'									<div class="input-group">'+
					'										<input type="text" value="" id = "url'+divids+'" name="url['+divids+']" class="form-control" autocomplete="off">'+
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
					'									</div>'+
					'								</div>'+
					'							</div>'+
					'							</div>'+
					'						</div>'+									
					'						<div class="form-group">'+
					'							<label class="control-label col-xs-3"><span class="red">*</span>图标</label>'+
					'							<div class="col-xs-9">'+
					'								<div class="input-group ">'+
					'									<input type="text" name="iconpics['+divids+']" id="iconpics'+divids+'" value="'+imgruls+'parent_contact.png" class="form-control" autocomplete="off" filename="" url="">'+
					'									<span class="input-group-btn">'+
					'										<button class="btn btn-default" type="button" data_id="mofang'+divids+'" onclick="showImageDialogmfs_new(this);">选择图片</button>'+
					'									</span>'+
					'								</div>'+
					'								<div class="input-group " style="margin-top:.5em;">'+
					'									<img src="'+imgruls+'parent_contact.png" onerror="" class="img-responsive img-thumbnail" width="150">'+
					'									<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>'+
					'								</div>'+
					'								<span class="help-block">推荐尺寸45*45左右,正方形图标</span>'+
					'							</div>'+
					'						</div>'+
					'					</div>'+
					'				</div>'+
					'			</div>'+
					'		</div>'+
					'	</div>'+
					'	</div>';	
				;
		$('.app-side').append(htmls1ss);			
	});
</script> 