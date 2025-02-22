<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>发布班级照片</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/jquery-emoji.css?v=4.9" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=4.90120" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/comment.css?v=4.9" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/bjqCss.css?v=4.9">
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.9"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/PromptBoxUtil.js?v=4.80309"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/mBjqForm.js?v=4.9"></script>
<?php  include $this->template('port');?>
</head>
<body>
	
<div id="BlackBg" class="BlackBg"></div>
<div id="titlebar" class="header mainColor">
	<div class="l"><a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a></div>
	<div class="m">
		<span style="font-size: 18px">发布照片</span>   
	</div>
</div>
<div id="titlebar_bg" class="_header"></div>

	<div id="fullbg" class="fullbg"></div>
	<div class="xcBody">
		<div class="xcShareBox">
			<div class="r">
				<div id="imageBox" class="imageBox">
				</div>
				<div id="pic" class="pic parent">
					<input type="hidden" id="sendtype" name="sendtype" value="2">				
					<!-- 活动 -->
					<input type="hidden" id="isGhActivity" name="isGhActivity" value="">
					<input type="hidden" id="ghActivityThemeParentid" name="ghActivityThemeParentid" value="">		
				</div>
					<div class="sendParam sendParam_wot pr" onclick="showSelectBox('bjList')">
			            <span class="locationCon address f15" closestatus="0"><i class="iconloc bj_icon_background-position float_left"></i>班级</span>
			            <span class="sendSelectParamOperBtn pa address f15 c9" closestatus="0" id="bjListShow"><?php  echo $bjidname;?></span>
		            	<input id="bjListValue" name="bjListValue" type="hidden" value="<?php  echo $bj_id;?>"/>
			            <span class="sendParamOperBtn pa address f15 c9" closestatus="0"><i class="iconloc fx_icon_background-position float_left"></i></span>
	        		</div>
				<div class="blackBg" onclick="closeBox();"></div>
				<div class="selectList">
					<div class="double" id="bjList">
						<div class="checkAll" onclick="isCheckAll(this);">
							<span name="checkAll" class="le">全选</span>
							<span class="ri"><img alt="check" src="<?php echo OSSURL;?>public/mobile/img/check.png" /></span>
						</div>
						<ul>
							<?php  if(is_array($bjlists)) { foreach($bjlists as $row) { ?>
								<?php  if(!in_array($row['bj_id'], $bjlists)) { ?>
								<?php  $bjlists[] = $row['bj_id'];?>
									<li onclick="isCheck(this);">
										<span name="checkName" class="le"><?php  echo $row['bjname'];?></span>
											<span class="ri">
												<img alt="check" src="<?php echo OSSURL;?>/public/mobile/img/check.png" />
											</span>
										<input type=hidden name="check" value="<?php  echo $row['bj_id'];?>"/>
									</li>
								<?php  } ?>
							<?php  } } ?>
						</ul>
						<div class="btnBox"></div>
						<div class="btn">
							<div class="box">
								<span class="ok" onclick="saveChecked('bjList');">确认</span>
							</div>
							<div class="box">
								<span onclick="closeBox();">取消</span>
							</div>
						</div>
					</div>
					<div class="double" id="stuList">
						<div class="checkAll" onclick="isCheckAll(this);">
							<span name="checkAll" class="le">全选</span>
							<span class="ri"><img alt="check" src="<?php echo OSSURL;?>public/mobile/img/check.png" /></span>
						</div>
						<ul>
							
						</ul>
						<div class="btnBox"></div>
						<div class="btn">
							<div class="box">
								<span class="ok" onclick="saveChecked('stuList');">确认</span>
							</div>
							<div class="box">
								<span onclick="closeBox();">取消</span>
							</div>
						</div>
					</div>
					<div class="single" id="isopen">
						<ul>
							<li class="selected" onclick="isSelect(this);"><span class="le">是</span><input type=hidden name="select" value="1" /></li>
							<li onclick="isSelect(this);"><span class="le">否</span><input type=hidden name="select" value="0" /></li>
						</ul>
					</div>
				</div>
				<div class="sendInfo wot pr">
              		<a href="javascript:sendPhoto();" class="sendBtn brSmall f15 db c2" >发布到相册</a>
              		<a href="javascript:cancel();" class="sendBtn cancelNewBtn brSmall f15 db c2" >取消</a>
				</div>
			</div>
    		<div class="cl"></div>
		</div>
		
	</div>
<script type="text/javascript">
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		$("#titlebar_bg").hide();
		document.title="发布照片";
	}
}, 100);
 
var PB = new PromptBox();

function cancel(){
	history.go(-1);
}
var WXChooseImageCount = 9;
var oss = '<?php echo OSSURL;?>';
var images = {
	    localId: [],
	    serverId: []
};
createImageBox();
/**
 * 判断显示、创建、隐藏视频框
 */
function showVedioBox(videoUrl,thumbnailUrl){
	//隐藏表情
	$("#emojiBox,#emojiOpen").hide();
	$("#emojiClose").show();
	//隐藏图片选择
	$("#imageBox,#imageOpen").hide();
	$("#imageClose").show();
	(document.getElementById("vedioBoxBody") && $("#vedioBox,#vedioOpen,#vedioClose").toggle())||createVedioBox(vedioUrl,thumbnailUrl);
}


/**
 * 创建imageBox
 */
function createImageBox(){
	$("#imageBox,#imageOpen,#imageClose").toggle();
	var imageBox= new Array();
	imageBox.push('<div id="imageBoxBody"><div id="DivFixedPosition"></div><div class="imagePage"><div class="imageTotalBox"><img alt="image" id="addImages" onclick="wxChooseImage()" src="'+oss+'public/mobile/img/insertImage.png" class="addImages"><div class="imageTotal">(0/9)</div></div></div>');
	$("#imageBox").html(imageBox.join(''));
	/*showThumbnail();*/
}

/**
 * 创建videoBox
 */
function createVedioBox(vedioUrl,thumbnailUrl){
	$("#vedioBox,#vedioOpen,#vedioClose").toggle();
	var vedioBox= new Array();
	if(thumbnailUrl!=null && thumbnailUrl!='' && thumbnailUrl!='null' && thumbnailUrl!=undefined){
		vedioBox.push('<div id="videoBoxBody"><video style="width:100%;height:200" poster="'+thumbnailUrl+'@50q.jpg" preload="none" controls="controls"><source src="'+vedioUrl+'?avthumb/mp4" type="video/mp4"></video></div>');
	}else{
		vedioBox.push('<div id="videoBoxBody"><video style="width:100%;height:200" preload="none" controls="controls"><source src="'+vedioUrl+'?avthumb/mp4" type="video/mp4"></video></div>');
	}
	$("#vedioBox").html(vedioBox.join(''));
	/*showThumbnail();*/
}

/**
 * 新增图片
 */
function addImages(base64){
	var DivFixedPosition = document.getElementById("DivFixedPosition");
	var imageBoxBody = document.getElementById("imageBoxBody");
	var imagePage = document.createElement("div");
	imagePage.setAttribute("class","imagePage");
	imageBoxBody.insertBefore(imagePage,DivFixedPosition);
	$(imagePage).html('<img alt="image" src="'+base64+'"  class="boxImages baseUploadImg"><span class="deleteImage" style= "background: url(http://weimeizhanoss.oss-cn-shenzhen.aliyuncs.com/public/mobile/img/deleteImage.png); background-size: 100%;display: inline;float: right;height: 25%;position: absolute;right: 0px;width: 25%;z-index: 4;" onclick="deleteImage(this)"></span>');
	setImageHeight();
	imagesTotal()
}

/**
 * 新增图片
 */
function loadImages(id,url){
	var DivFixedPosition = document.getElementById("DivFixedPosition");
	var imageBoxBody = document.getElementById("imageBoxBody");
	var imagePage = document.createElement("div");
	imagePage.setAttribute("class","imagePage");
	imageBoxBody.insertBefore(imagePage,DivFixedPosition);
	$(imagePage).html('<img alt="image" src="'+url+'" id='+id+'  class="boxImages wxUploadImg"><span class="deleteImage" style= "background: url(http://weimeizhanoss.oss-cn-shenzhen.aliyuncs.com/public/mobile/img/deleteImage.png); background-size: 100%;display: inline;float: right;height: 25%;position: absolute;right: 0px;width: 25%;z-index: 4;" onclick="deleteImage(this)"></span>');
	setImageHeight();
	imagesTotal()
}

/**
 * 计算图片数量
 */
function imagesTotal(){
	$(".imageTotal").html('('+$(".deleteImage").length+'/9)');
	$(".imageTotal").length<9 && $(".imageTotal").show();
	$(".deleteImage").length!= 0 && $(".addImages").show();
	$(".deleteImage").length==9 && $(".addImages,.imageTotal").hide();
}

/**
 * 删除图片
 * @param span
 */
function deleteImage(span){
	//todo删除图片
	var deleteNode = span.parentNode;
	var arrayIndex = $.inArray($(span.parentNode).find('img').attr("src"),images.localId)
	images.localId.splice(arrayIndex,1);
	images.serverId.splice(arrayIndex,1);
	deleteNode.parentNode.removeChild(span.parentNode);
	imagesTotal();
}

/**
 * 找出某个值在数组中的下标位置
 * @param data
 * @param key
 * @returns
 */
function cruelSearch(data,key)
{
  re = new RegExp(key,[""]);
  return (data.replace(re,"┢").replace(/[^|┢]/g,"")).indexOf("┢");
}

/**
 * 微信选择图片
 */
function wxChooseImage(){
		wx.chooseImage({
			count: WXChooseImageCount,
			sizeType: ['compressed'],
			success: function (res) {
				setTimeout(function(){
					images.localId = images.localId.concat(res.localIds);
					imagesUploadWx(res.localIds);
				},1000)
			}
		});
};
		  
function imagesUploadWx(localIds) {
	var i = 0, length = localIds.length;
    PB.prompt("开始上传照片","forever");
	function upload() {
	      wx.uploadImage({
	        localId: localIds[i],
	        isShowProgressTips:0,//// 默认为1，显示进度提示
	        success: function (res) {
	        	setTimeout(function(){
	        		addImages(localIds[i]);
	  	          i++;
//	  	          alert("已完成上传 "+(i)+"/"+length);
	  	          PB.prompt("已完成上传 "+(i)+"/"+length,"forever");
	  	          images.serverId.push(res.serverId);
	  	          if($(".deleteImage").length==9){
	  	        	  PB.prompt("上传图片最多9张！")
	  	        	  return;
	  	          }
	  	          if (i < length) {
	  	            upload();
	  	          }
	  	          if(i==length){
	  	        	  PB.prompt("已完成上传");
	  	          }
	        	},1000)
	        },
	        fail: function (res) {
	          alert(JSON.stringify(res));
	        }
	      });
	    }
	upload();
};

/**
 * 设置图片的高
 */
function setImageHeight(){
	var imageWidth = $(".boxImages")[0].offsetWidth;
	$(".boxImages").height(imageWidth);
}
function sendPhoto(){

	var bjids =  $("#bjListValue").val(); 
	if(bjids == undefined || bjids == null || bjids == "" ){
		jTips("请选择班级！");
		return false;
	}

	var photoUrls = images.serverId.join(',');
	if(photoUrls == undefined || photoUrls == null || photoUrls == "" ){
		jTips("请选择照片！");
		return false;
	}	
	jConfirm("确定发布？", "删除确定对话框", function (isConfirm) {	
		if (isConfirm) {
			PB.prompt("信息发布中，请稍等~","forever");
			var submitData = {
				weid:"<?php  echo $weid;?>",
				bj_id : bjids,
				userid : "<?php  echo $it['id'];?>",
				sid : "<?php  echo $students['id'];?>",
				openid : "<?php  echo $openid;?>",
				schoolid : "<?php  echo $schoolid;?>",
				uid:"<?php  echo $fan['uid'];?>",
				photoUrls : photoUrls,
			};
			$.post("<?php  echo $this->createMobileUrl('dongtaiajax',array('op'=>'xcfb'))?>",submitData,function(data){
				if(data.result){
					jTips(data.msg);
					history.go(-1);
				}else{
					jTips(data.msg);
				}
			},'json'); 		
		}
	}); 	
}
</script>	
<?php  include $this->template('newfooter');?>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>