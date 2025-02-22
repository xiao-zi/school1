<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<title><?php  echo $school['title'];?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/mModifying.css?v=5.12" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=5.10120" />
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/common.css" />
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.9"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/PromptBoxUtil.js?v=4.80309"></script>
<link href="<?php echo OSSURL;?>public/mobile/css/wx_sdk.css?v=062220170310" rel="stylesheet" />
<link href="<?php echo MODULE_URL;?>public/mobile/css/mimax.css" rel="stylesheet" />
<?php  include $this->template('port');?>
<?php  echo register_jssdks();?>
</head>
<style>
#birthday{border:0px solid #c6c6c6;position:relative;display:block;margin-top:3px;margin-left:5px;height:30px;line-height:30px;opacity:1;}
.headerBox {display: inline-block;margin-top: 10px;margin-left: 150px;}
.headerBox .centerHeader img {width: 80px;height: 80px;border-radius: 50%;}
.centerHeader {width: 80px;}
</style>
<body>
<div class="all">	
	<div id="BlackBg" class="BlackBg"></div>
	<div id="titlebar" class="header mainColor">
		<div class="l"><a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a></div>
		<div class="m">
			<span style="font-size: 18px" id="headerTitleName">学生信息审核</span>
		</div>
	</div>
	<div id="titlebar_bg" class="_header"></div>
		<div class="submitInfo">
			<div class="infoBox divSpacing">
				<?php  if($item['icon']) { ?>
				<div class="headerBox">
					<div class="centerHeader">
						<img  src="<?php  echo tomedia($item['icon'])?>" />
					</div>
				</div>
				<?php  } ?>			
				<div class="infoDiv" >
				  <span class="l">状态：</span>
				  <span class="c nameLabel">
					<label><?php  if($item['status'] == 1) { ?>待审核<?php  } else if($item['status'] == 2) { ?>已通过<?php  } else if($item['status'] == 3) { ?>已拒绝<?php  } ?></label>
					<?php  if(!empty($class['cost'])) { ?>
					<label><?php  if($order['status'] == 1) { ?>未付费<?php  } else if($order['status'] == 2) { ?>已付费<?php  } else if($order['status'] == 3) { ?>已退费<?php  } ?></label>
					<?php  } ?>
				  </span>
				  <?php  if($item['status'] == 1 || $item['status'] == 3) { ?>
				  <span onclick="bound();" class="r mainfont qx_00702">通过</span>
				  <span onclick="jujue();" class="t mainfont qx_00702">拒绝</span>
				  <?php  } ?>
				</div>
				<div class="divHr"></div>
				<div class="infoDiv" >
				  <span class="l">姓名：</span>
				  <span class="c">
					<input id="s_name" type="text" class="qx_00703" value="<?php  echo $item['name'];?>"/>
				  </span>
				</div>
				<div class="divHr"></div>
				<div class="infoDiv" >
				  <span class="l">学号：</span>
				  <span class="c">
					<input id="numberid" type="text" class="qx_00703" value="<?php  echo $item['numberid'];?>"/>
				  </span>
				</div>				
				<div class="divHr"></div>
				<div class="infoDiv" >
				  <span class="l">预留手机：</span>
				  <span class="c">
					<input id="mobile" type="text" class="qx_00703" value="<?php  echo $item['mobile'];?>" maxlength="18"/>
				  </span>
				  <span onclick="call(<?php  echo $item['mobile'];?>);"  class="r mainfont qx_00703 phone_00703 ">呼叫</span>
				</div>				
				<div class="divHr"></div>
				<div class="infoDiv" >
				  <span class="l">年级：</span>
				  <span class="c nameLabel">
					<label id="xq_id"><?php  echo $xueqi['sname'];?></label>
				  </span>
				</div>
				<div class="divHr"></div>
				<div class="infoDiv">
				  <span class="l">班级：</span>
				  <span class="c">
					<select id="bj_id" value="" class="qx_00703">
					<?php  if(is_array($bjlist)) { foreach($bjlist as $row) { ?>
						<option value="<?php  echo $row['sid'];?>" <?php  if($class['sid'] == $row['sid']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
					<?php  } } ?>
					</select>				
				  </span>
				</div>			
				<div class="divHr"></div>
				<div class="infoDiv">
				  <span class="l">性别：</span>
				  <span class="c">
					<select id="sex" value="" class="qx_00703">
						<option value="1"<?php  if($item['sex'] == 1) { ?> selected="selected"<?php  } ?>>男</option>
						<option value="2"<?php  if($item['sex'] == 2) { ?> selected="selected"<?php  } ?>>女</option>
					</select>
				  </span>
				</div>
				<div class="divHr"></div>
				<div class="infoDiv">
				  <span class="l">生日：</span>
				  <span class="c">
					<input type="date" id="birthday" class="qx_00703" value="<?php  echo date('Y-m-d', $item['birthday'])?>"/>
				  </span>
				</div>
				<div class="divHr"></div>
				<div class="infoDiv">
				  <span class="l">身份证号：</span>
				  <span class="c">
					<input id="idcard" type="text" class="qx_00703"  minlength="15" maxlength="18" value="<?php  echo $item['idcard'];?>"/>
				  </span>
				</div>
				<div class="divHr"></div>
				<div class="infoDiv">
				  <span class="l">报名者：</span>
				  <span class="c">
					<select id="pard" value="" class="qx_00703">
						<option value="2"<?php  if($item['pard'] == 2) { ?> selected="selected"<?php  } ?>>母亲</option>
						<option value="3"<?php  if($item['pard'] == 3) { ?> selected="selected"<?php  } ?>>父亲</option>
						<option value="4"<?php  if($item['pard'] == 4) { ?> selected="selected"<?php  } ?>>本人</option>
						<option value="5"<?php  if($item['pard'] == 5) { ?> selected="selected"<?php  } ?>>家长</option>
					</select>
				  </span>
				</div>
				<?php  if($school['is_picarr'] == 1) { ?>
						<div class="qx_00703">
						
						<?php  if($picarrSet_out['is_picarr1'] ==1) { ?>
						<div class="headerBox" style="margin-top:unset;margin-left: 15px;">
							<div class="centerHeader">
								<a onclick="wxImageShow(this);" ><img  style="border-radius:unset" id="wxiconpath_1"  src="<?php  echo tomedia($item['picarr1'])?>" /></a>
								<input id="headimg_1" type="hidden" value="" />
								<span><?php  echo $picarrSet_out['picarr1_name'];?></span>
							</div>
						</div>
						<?php  } ?>
						<?php  if($picarrSet_out['is_picarr2'] ==1) { ?>
						<div class="headerBox" style="margin-top:unset;margin-left: 15px;">
							<div class="centerHeader">
								<a onclick="wxImageShow(this);" ><img  style="border-radius:unset" id="wxiconpath_1"  src="<?php  echo tomedia($item['picarr2'])?>" /></a>
								<input id="headimg_2" type="hidden" value="" />
								<span><?php  echo $picarrSet_out['picarr2_name'];?></span>
							</div>
						</div>
						<?php  } ?>
						<?php  if($picarrSet_out['is_picarr3'] ==1) { ?>
						<div class="headerBox" style="margin-top:unset;margin-left: 15px;">
							<div class="centerHeader">
								<a onclick="wxImageShow(this);" ><img  style="border-radius:unset" id="wxiconpath_1"  src="<?php  echo tomedia($item['picarr3'])?>" /></a>
								<input id="headimg_3" type="hidden" value="" />
								<span><?php  echo $picarrSet_out['picarr3_name'];?></span>
							</div>
						</div>
						<?php  } ?>
						<?php  if($picarrSet_out['is_picarr4'] ==1) { ?>
						<div class="headerBox" style="margin-top:unset;margin-left: 15px;">
							<div class="centerHeader">
								<a onclick="wxImageShow(this);" ><img  style="border-radius:unset" id="wxiconpath_1"  src="<?php  echo tomedia($item['picarr4'])?>" /></a>
								<input id="headimg_4" type="hidden" value="" />
								<span><?php  echo $picarrSet_out['picarr4_name'];?></span>
							</div>
						</div>
						<?php  } ?>
						<?php  if($picarrSet_out['is_picarr5'] ==1) { ?>
						<div class="headerBox" style="margin-top:unset;margin-left: 15px;">
							<div class="centerHeader">
								<a onclick="wxImageShow(this);" ><img  style="border-radius:unset" id="wxiconpath_1"  src="<?php  echo tomedia($item['picarr5'])?>" /></a>
								<input id="headimg_5" type="hidden" value="" />
								<span><?php  echo $picarrSet_out['picarr5_name'];?></span>
							</div>
						</div>
						<?php  } ?>
						</div>
						<?php  } ?>	

							<?php  if($school['is_textarr'] == 1) { ?>
						<div class="qx_00703">
						
						<ul>
							<?php  if($textarrSet_out['is_textarr1']) { ?>
							<div class="infoDiv">
								
								<span class="l"><?php  echo $textarrSet_out['textarr1_name'];?></span>
								  <span class="c">
									<input id="textarr1-value" type="text" value="<?php  echo $item['textarr1'];?>" length="<?php  echo $textarrSet_out['textarr1_length'];?>" />
								</span>
							</div>
							<?php  } ?>
							<?php  if($textarrSet_out['is_textarr2']) { ?>
							<div class="infoDiv">
								
								<span class="l"><?php  echo $textarrSet_out['textarr2_name'];?></span>
								<span class="c">
									<input id="textarr2-value" type="text" value="<?php  echo $item['textarr2'];?>" length="<?php  echo $textarrSet_out['textarr2_length'];?>" />
								</span>
							</div>
							<?php  } ?>
							<?php  if($textarrSet_out['is_textarr3']) { ?>
							<div class="infoDiv">
								
								<span class="l"><?php  echo $textarrSet_out['textarr3_name'];?></span>
								<span class="c">
									<input id="textarr3-value" type="text" value="<?php  echo $item['textarr3'];?>" length="<?php  echo $textarrSet_out['textarr3_length'];?>" />
								</span>
							</div>
							<?php  } ?>
							<?php  if($textarrSet_out['is_textarr4']) { ?>
							<div class="infoDiv">
								
								<span class="l"><?php  echo $textarrSet_out['textarr4_name'];?></span>
								<span class="c">
									<input id="textarr4-value" type="text" value="<?php  echo $item['textarr4'];?>" length="<?php  echo $textarrSet_out['textarr4_length'];?>" />
								</span>
							</div>
							<?php  } ?>
							<?php  if($textarrSet_out['is_textarr5']) { ?>
							<div class="infoDiv">
								
								<span class="l"><?php  echo $textarrSet_out['textarr5_name'];?></span>
								<span class="c">
									<input id="textarr5-value" type="text" value="<?php  echo $item['textarr5'];?>" length="<?php  echo $textarrSet_out['textarr5_length'];?>" />
								</span>
							</div>
							<?php  } ?>
							<?php  if($textarrSet_out['is_textarr6']) { ?>
							<div class="infoDiv">
								<span class="l"><?php  echo $textarrSet_out['textarr6_name'];?></span>
								<span class="c">
									<input id="textarr6-value" type="text" value="<?php  echo $item['textarr6'];?>" length="<?php  echo $textarrSet_out['textarr6_length'];?>" />
								</span>
							</div>
							<?php  } ?>
							<?php  if($textarrSet_out['is_textarr7']) { ?>
							<div class="infoDiv">
								
								<span class="l"><?php  echo $textarrSet_out['textarr7_name'];?></span>
								<span class="c">
									<input id="textarr7-value" type="text" value="<?php  echo $item['textarr7'];?>" length="<?php  echo $textarrSet_out['textarr7_length'];?>" />
								</span>
							</div>
							<?php  } ?>
							<?php  if($textarrSet_out['is_textarr8']) { ?>
							<div class="infoDiv">
								
								<span class="l"><?php  echo $textarrSet_out['textarr8_name'];?></span>
								<span class="c">
									<input id="textarr8-value" type="text" value="<?php  echo $item['textarr8'];?>" length="<?php  echo $textarrSet_out['textarr8_length'];?>" />
								</span>
							</div>
							<?php  } ?>
							<?php  if($textarrSet_out['is_textarr9']) { ?>
							<div class="infoDiv">
								
								<span class="l"><?php  echo $textarrSet_out['textarr9_name'];?></span>
								<span class="c">
									<input id="textarr9-value" type="text" value="<?php  echo $item['textarr9'];?>" length="<?php  echo $textarrSet_out['textarr9_length'];?>" />
								</span>
							</div>
							<?php  } ?>
							<?php  if($textarrSet_out['is_textarr10']) { ?>
							<div class="infoDiv">
								
								<span class="l"><?php  echo $textarrSet_out['textarr10_name'];?></span>
								<span class="c">
									<input id="textarr10-value" type="text" value="<?php  echo $item['textarr10'];?>" length="<?php  echo $textarrSet_out['textarr10_length'];?>" />
								</span>
							</div>
							<?php  } ?>							
						
						</ul>
						</div>
						<?php  } ?>			
				<div class="divHr"></div>
				 <?php  if($item['status'] == 1 || $item['status'] == 3) { ?>
				<div class="submitBtn sub_00703">
					<button class="mainColor " onclick="submitStuInfo();">保存修改</button>
				</div>
				 <?php  } ?>
			</div>
	</div>
	<div id="common_progress" class="common_progress_bg"><div class="common_progress"><div class="common_loading"></div><br><span>正在载入...</span></div></div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
<script type="text/javascript">
$(function(){
	<?php  if(!(IsHasQx($tid_global,2000702,2,$schoolid))) { ?>
		$(".qx_00702").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,2000703,2,$schoolid))) { ?>
		$(".qx_00703").attr("disabled","disabled");
		$(".phone_00703").hide();
		$(".sub_00703").hide();
	<?php  } ?>
});
	var WeixinApi = (function () {
	
	return {
        ready           :wxJsBridgeReady,
        imagePreview    :imagePreview
    }; 
	
    "use strict";

    /**
     * 调起微信Native的图片播放组件。
     * 这里必须对参数进行强检测，如果参数不合法，直接会导致微信客户端crash
     *
     * @param {String} curSrc 当前播放的图片地址
     * @param {Array} srcList 图片地址列表
     */
    function imagePreview(curSrc,srcList) {
        if(!curSrc || !srcList || srcList.length == 0) {
            return;
        }
        WeixinJSBridge.invoke('imagePreview', {
            'current' : curSrc,
            'urls' : srcList
        });
    }
	
    /**
     * 当页面加载完毕后执行，使用方法：
     * WeixinApi.ready(function(Api){
     *     // 从这里只用Api即是WeixinApi
     * });
     * @param readyCallback
     */
    function wxJsBridgeReady(readyCallback) {
        if (readyCallback && typeof readyCallback == 'function') {
            var Api = this;
            var wxReadyFunc = function () {
                readyCallback(Api);
            };
            if (typeof window.WeixinJSBridge == "undefined"){
                if (document.addEventListener) {
                    document.addEventListener('WeixinJSBridgeReady', wxReadyFunc, false);
                } else if (document.attachEvent) {
                    document.attachEvent('WeixinJSBridgeReady', wxReadyFunc);
                    document.attachEvent('onWeixinJSBridgeReady', wxReadyFunc);
                }
            }else{
                wxReadyFunc();
            }
        }
    }

    return {
        version         :"2.5",
        ready           :wxJsBridgeReady,
        imagePreview    :imagePreview
    };
})();
<?php 
if (!empty($_W['setting']['remote']['type'])) { 
	$urls = $_W['SITEROOT'].$_W['config']['upload']['attachdir'].'/'; 
	} else {
	$urls = $_W['attachurl'];  
	}
?>
var ALI_URL = "<?php  echo $urls;?>";
var ALI_URL_VIEDO = "<?php  echo $urls;?>";
	function wxImageShow(node){
	var srcList = new Array();
	var watermark='';
	var imgs = $(node).closest('.parent').find("img");	
	var curSrc = $(node).find("img")[0]['src'].split("@");
	//alert(curSrc);
	var curImgIndex=0;
	for(i=0;i<imgs.length;i++){
		var imgsrc = imgs[i]['src'].split("@");
		if(imgsrc.length>1){
			if(imgsrc[1].split("watermark").length>1){
				srcList.push(imgsrc[0].replace(ALI_URL,ALI_URL_VIEDO)+'@watermark'+imgsrc[1].split("watermark")[1]);
				watermark = '@watermark'+imgsrc[1].split("watermark")[1];
			}else{
				srcList.push(imgsrc[0].replace(ALI_URL,ALI_URL_VIEDO));
			}
		}else{
			srcList.push(imgsrc[0]);
		}
		if(curSrc[0]==imgsrc[0]){
			curImgIndex=i;
		}
	}
	//curSrc[0]=curSrc[0]+watermark;
	//alert(curSrc);
	wx.previewImage({
				current: curSrc[0], // 当前显示图片的http链接
				urls: curSrc // 需要预览的图片http链接列表
			});
	//WeixinApi.imagePreview(curSrc[0].replace(ALI_URL,ALI_URL_VIEDO), curSrc);
}
	function showImg(e){
			if ($(this).attr("data-flag") == "table") {
				location.href = $(this).parents(".user_info").find(".other_info_box3 a").attr("href");
				return false;
			}
			var this_img = e.src;
			wx.previewImage({
				current: this_img, // 当前显示图片的http链接
				urls: this_img // 需要预览的图片http链接列表
			});
	}
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		$("#titlebar_bg").hide();
		document.title="学生信息审核";
	}
}, 100);

function submitStuInfo() {
	jConfirm("确认修改学生信息？", "删除确定对话框", function (isConfirm) {
		if(isConfirm){
			ajax_start_loading("处理中...");
			var submitData = {
				id : "<?php  echo $item['id'];?>",
				schoolid :"<?php  echo $schoolid;?>",
				openid :"<?php  echo $openid;?>",
				weid :"<?php  echo $weid;?>",
				sex : $("#sex").val(),
				numberid : $("#numberid").val(),
				s_name : $("#s_name").val(),
				idcard : $("#idcard").val(),
				njid : "<?php  echo $item['nj_id'];?>",
				bjid : $("#bj_id").val(),
				mobile : $("#mobile").val(),
				birthday : $("#birthday").val(),
				pard : $("#pard").val(),
				textarr1:$("#textarr1-value").val(),
				textarr2:$("#textarr2-value").val(),
				textarr3:$("#textarr3-value").val(),
				textarr4:$("#textarr4-value").val(),
				textarr5:$("#textarr5-value").val(),
				textarr6:$("#textarr6-value").val(),
				textarr7:$("#textarr7-value").val(),
				textarr8:$("#textarr8-value").val(),
				textarr9:$("#textarr9-value").val(),
				textarr10:$("#textarr10-value").val(),
			};
			$.post("<?php  echo $this->createMobileUrl('indexajax',array('op'=>'xgxsinfo'))?>",submitData,function(data){
				ajax_stop_loading();
				if(data.result){
					jTips(data.msg);
					location.reload();
				}else{
					jTips(data.msg);
				}
			},'json'); 
		}
	});
}
function bound(){
	jConfirm("确认通过学生报名申请？", "删除确定对话框", function (isConfirm) {
		if(isConfirm){
		ajax_start_loading("处理中...");
			var submitData = {
				id : "<?php  echo $item['id'];?>",
				openid :"<?php  echo $openid;?>",
			};
			$.post("<?php  echo $this->createMobileUrl('indexajax',array('op'=>'tgsq'))?>",submitData,function(data){
			ajax_stop_loading();
				if(data.result){
					jTips(data.msg);
					location.reload();
				}else{
					jTips(data.msg);
				}
			},'json'); 
		}
	});
}
function jujue(){
	jConfirm("确认拒绝该申请？", "删除确定对话框", function (isConfirm) {
		if(isConfirm){
			var submitData = {
				id : "<?php  echo $item['id'];?>",
				openid :"<?php  echo $openid;?>",
			};
			$.post("<?php  echo $this->createMobileUrl('indexajax',array('op'=>'jjsq'))?>",submitData,function(data){
				if(data.result){
					jTips(data.msg);
					location.reload();
				}else{
					jTips(data.msg);
				}
			},'json'); 
		}
	});	
}
function call(mobile){
window.location.href = "tel:"+mobile;
}
</script>
<?php  include $this->template('newfooter');?>
</html>