<?php defined('IN_IA') or exit('Access Denied');?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php  echo $school['title'];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/mAlbumForm.css?v=5.00716" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=5.00120" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/swiper.min.css?v=5.0" />
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.9"></script>
</head>
<body>
<!-- Swiper -->
<style>
.swiper-slide{text-align:center;background:#000;display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;-webkit-align-items:center;align-items:center;}
.header{background:<?php  echo $school['headcolor'];?> !important;}
</style>
<div class="swiper-container" style="display:none">
    <div class="swiper-wrapper">
        <div class="swiper-slide"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
<div class="all">
<div id="BlackBg" class="BlackBg"></div>
<div id="titlebar" class="header mainColor">
	<div class="l"><a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a></div>
	<div class="m"><span style="font-size: 18px">相册图片</span></div>
</div>
<div id="titlebar_bg" class="_header"></div>
		<div class="album-title">
			<div class="album-title-left">
				<span class="album-name"><?php  echo $name['s_name'];?></span>
				<span class="album-total"><?php  if($type ==1) { ?><?php  echo $total;?>张<?php  } else if($type ==0) { ?>班级圈相册<?php  } else if($type ==2) { ?>由本班老师上传<?php  } ?></span>
			</div>
			<?php  if($scsid == $it['sid']) { ?>
			<div class="album-title-right">
				<button id="albumButton" class="album-button">管理</button>
			</div>	
			<?php  } ?>	
			<div class="cl"></div>
		</div>
		<?php  if($type != 2) { ?>
		<div class="album-info">
			<span class="album-time">最后更新 : <span id="albumLastTime"><?php  echo date('Y-m-d',$last['createtime'])?></span></span>
		</div>
		<?php  } ?>
		<div id="albumBox" class="album-box parent"></div>
		<div class="cl" style="padding-bottom: 30px;"></div>
		<div class="album-bottom" style="z-index:999;">
			<button id="albumDelBtn" class="album-btn album-del-btn">删除</button>
			<div class="album-all-btn">全选<span id="albumAllBtn" class="image-all-check"></span></div>
		</div>
	</div>
<input type="hidden" id="scsid" value="<?php  echo $scsid;?>" />
<input type="hidden" id="sid" value="<?php  echo $it['sid'];?>" />
<input type="hidden" id="param_tagid" value="0" />
<input type="hidden" id="dellimg" value="<?php  echo $this->createMobileUrl('dongtaiajax', array('schoolid' => $schoolid, 'op' => 'dellimg'))?>" />
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/PromptBoxUtil.js?v=5.00311"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/swiper.jquery.min.js?v=5.0"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/imageUtil.js?v=5.00111"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/datetimeUtil.min.js?v=5.00311"></script>
<script type="text/javascript">
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		$("#titlebar_bg").hide();
		document.title="相册图片";
	}
}, 100);

</script>
<script>
	var sxc = '<?php  echo  $this->createMobileUrl('sxc', array('schoolid' => $schoolid, 'getalist' => 1, 'type' => $_GPC['type'], 'sid' => $_GPC['sid'], 'bj_id' => $_GPC['bj_id'] ))?>';
	var PB = new PromptBox();
	var dateTimesUtil = new dateTime();

var mySwiper;
WeixinJSHideAllNonBaseMenuItem();
/**微信隐藏工具条**/
function WeixinJSHideAllNonBaseMenuItem(){
	if (typeof wx != "undefined"){
		wx.ready(function () {
			
			wx.hideAllNonBaseMenuItem();
		});
	}
}
function arrIndex(item, arr) {
    if (arr.indexOf) {
        index = arr.indexOf(item);
    } else {
        for (var i = 0; i < arr.length; i++) {
            if (arr[i] == item) {
                return i;
            }
        }
    }
    return index;
}
function wxImageShow(node){
	var srcList = new Array();
	var imgs = $(node).closest('.parent').find("img");
	var curSrc = $(node).find("img")[0]['src'].split("@");
	var curImgIndex=0;
	for(i=0;i<imgs.length;i++){
		var imgsrc = imgs[i]['src'].split("@");
		
			srcList.push(imgsrc[0]);
		
		if(curSrc[0]==imgsrc[0]){
			curImgIndex=i;
		}
	}
		console.log(mySwiper);
		if ($(".swiper-container").length > 0) {
			$(".swiper-container").css("display", "block");
			mySwiper = new Swiper('.swiper-container', {
			    pagination: '.swiper-pagination',
			    paginationClickable: true,
			    spaceBetween: 30,
			});
			mySwiper.removeAllSlides();// 移除所有slides
			
			var maxWidth = document.body.clientWidth;
			var maxHeight = document.body.clientHeight;
			var scale = maxWidth / maxHeight;
			
			for (var i = 0; i < srcList.length; i++) {
				var theImage = new Image();
				theImage.src = srcList[i];
				var style;
				if (theImage.width / theImage.height > scale) {
					style = "width:100%;";
				} else {
					style = "height:100%;";
				}
				mySwiper.appendSlide('<div class="swiper-slide" onclick="hideSwiper();"><img style="' + style + '" src="' + srcList[i] + '"/></div>');// 添加slide到slides的结尾 , 可以是HTML元素或slide数组
			}
			var curIndex = arrIndex(curSrc[0], srcList);
			mySwiper.slideTo(curIndex, 0, false);// 切换到当前slide
			$(window).scrollTop(0);
			document.body.style.overflow = 'hidden';
		}
	
}

function hideSwiper() {
	mySwiper.destroy(true, true);
	$(".swiper-container").css("display", "none");
	document.body.style.overflow = 'visible';
}
</script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/tokenfield.min.js"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/mAlbumForm.js?v=5.00813"></script>
</html>