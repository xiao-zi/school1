<?php defined('IN_IA') or exit('Access Denied');?><script type="text/javascript"> 
var kcteamid = <?php  echo $lastid['id'];?>;
var kcteamids = kcteamid + 23;
var kcteampic = 0;
	$('#kcteam').click(function(){
		kcteampic++;
		kcteamids++;
		
		var imgurlss = "url"+kcteamids;
		var imgurls = "'"+imgurlss+"'";
		var htmls1ss = '<div id="iconeditor'+kcteamids+'" class="editor needhidden" style="top: 10px;">'+
					'	<div class="ng-scope">'+
					' 		<div class="arrow-left"></div>'+
					'		<div class="app-header-setting">'+
					'			<div class="app-header-setting-inner">'+
					'				<div class="panel panel-default">'+
					'					<div class="panel-body form-horizontal">'+
					'						<input type="hidden" name="type['+kcteamids+']" value="2" />'+
					'						<input type="hidden" name="place['+kcteamids+']" value="23" />'+
					'						<div class="form-group">'+
					'							<label class="col-xs-3 control-label"><span class="red">*</span>课程名称['+kcteampic+']</label>'+
					'							<div class="col-xs-9">'+
					'								<input type="text" id="btnname'+kcteamids+'" name="btnname['+kcteamids+']" onkeyup="SwapTxt1('+kcteamids+')" placeholder="请输入课程名称" value=" " class="form-control ng-pristine ng-untouched ng-valid input_this">'+
					'							</div>'+
					'						</div>'+										
					'						<div class="form-group ng-scope">'+
					'							<label class="control-label col-xs-3">链接地址</label>'+
					'							<div class="col-xs-9">'+
					'							<div class="ng-isolate-scope">'+
					'								<div class="dropdown link">'+
					'									<div class="input-group">'+
					'										<input type="text" value="" id = "url'+kcteamids+'" name="url['+kcteamids+']" class="form-control" autocomplete="off">'+
					'												<span class="input-group-btn">'+
					'													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">选择链接 <span class="caret"></span></button>'+
					'													<ul class="dropdown-menu">'+
					'														<li><a href="javascript:" data-type="jiaoyu" onclick="showJiaoyuDialog('+imgurls+',2);">微教育菜单</a></li>'+
					'														<li><a href="javascript:" data-type="system" onclick="showLinkDialog(this);">系统菜单</a></li>'+
					'														<li><a href="javascript:" data-type="page" onclick="pageLinkDialog(this);">微页面</a></li>'+
					'														<li><a href="javascript:" data-type="article" onclick="articleLinkDialog(this)">文章及分类</a></li>'+
					'														<li><a href="javascript:" data-type="tcourse" onclick="tcourseLinkDialog(this)">课程</a></li>'+
					'													</ul>'+
					'												</span>	'+
					'									</div>'+
					'								</div>'+
					'							</div>'+
					'							</div>'+
					'						</div>'+									
					'						<div class="form-group">'+
					'							<label class="control-label col-xs-3"><span class="red">*</span>图片</label>'+
					'							<div class="col-xs-9">'+
					'								<div class="input-group ">'+
					'									<input type="text" name="iconpics['+kcteamids+']" id="iconpics'+kcteamids+'" class="form-control" autocomplete="off" filename="" url="">'+
					'									<span class="input-group-btn">'+
					'										<button class="btn btn-default" type="button" data_id="mofang'+kcteamids+'" onclick="showImageDialogmfs(this);">选择图片</button>'+
					'									</span>'+
					'								</div>'+
					'								<div class="input-group " style="margin-top:.5em;">'+
					'									<img id="imgsrc_this'+kcteamids+'" src="./resource/images/nopic.jpg" onerror="" class="img-responsive img-thumbnail" width="150">'+
					'									<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>'+
					'								</div>'+
					'								<span class="help-block">推荐尺寸180*100左右,长方形图标</span>'+
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