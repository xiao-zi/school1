<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php  echo $school['title'];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/mGrzxTeacher.css?v=4.8" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=4.80120" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/pageContent.css?v=4.80120" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/activityNotice.css?v=4.80120" />
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
	<?php  include $this->template('port');?>
</head>
<body>
<div id="titlebar" class="header mainColor">
	<div class="l">
		<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="<?php  echo $this->createMobileUrl('zuoyelist', array('schoolid' => $schoolid,'bj_id'=>$leave['bj_id']), true)?>"></a>
	</div>
	<div class="m">
		<span style="font-size: 18px"><?php  if($schooltype) { ?><?php  echo $kcinfo['name'];?><?php  } else { ?><?php  echo $nowbj['sname'];?><?php  echo $nowkm['sname'];?>作业<?php  } ?></span>   
	</div>
	<div id="headerMenu" class="r">
	</div>
</div>

<div id="titlebar_bg" class="_header"></div>
	<header class="headerTtitle">
		<h3 class="title"><?php  echo $leave['title'];?></h3>
		<div class="queryResult"><img src="<?php echo OSSURL;?>public/mobile/img/headerLeftBg.png" class="img-responsive">
			<span>查看结果</span>
		</div>
	</header>
	<div class="publishInfo">
		<span class="source">发布：<?php  echo $leave['tname'];?></span>
		<span class="time"><?php  echo (date('m-d H:m',$leave['createtime']))?></span>
		<span class="read"></span>	
	</div>
	<?php  if(!empty($leave['anstype'])) { ?>
		<div class="publishInfo">
			<span class="source">允许回答类型：</span>
			<?php  if($anstype['is_txt'] == 1 ) { ?><span class="text_btn">文字</span><?php  } ?>
			<?php  if($anstype['is_img'] == 1 ) { ?><span class="pic_btn">图片</span><?php  } ?>
			<?php  if($anstype['is_audio'] == 1 ) { ?><span class="voice_btn">语音</span><?php  } ?>
			<?php  if($anstype['is_video'] == 1 ) { ?><span class="video_btn">视频</span><?php  } ?>
		</div>
	<?php  } ?>	
	<div class="content">
		<pre id="neirong"><?php  echo htmlspecialchars_decode($leave['content'])?></pre><br/>
		<?php  if($leave['video']) { ?>
			<video id="videocon" controls width="100%"  height="264" poster="<?php  echo tomedia($school['logo']);?>" webkit-playsinline playsinline>
				<source src="<?php  echo tomedia($leave['video'])?>" type='video/mp4' />
				<p class="vjs-no-js">你的浏览器不支持该视频</a></p>
			</video>
		<?php  } ?>
		<?php  if($leave['audio']) { ?>
			<div class="app-audio" style="undefinedanimation:undefined;box-sizing: border-box;">
				<div class="inner" style="text-align: left;position: relative;">
					<div id="audio-music-4" data-reload="false" class="wx audioLeft clearfix" data-src="<?php  echo tomedia($leave['audio'])?>">
						<img style="width: 40px;height: 40px;display: inline-block;" alt="语音头像" class="audioLogo" width="40" height="40" src="<?php  if($thisteacher['thumb']) { ?><?php  echo tomedia($thisteacher['thumb'])?><?php  } else { ?><?php  echo tomedia($school['tpic'])?><?php  } ?>">
						<span class="audioBar js-play" style="display: block; margin: 5px 0;width: 185px; height: 42px;display: inline-block;left: 55px; top: 0; background: url(./resource/images/app/sprite_v5.png) 0 0 no-repeat;background-size: 400px 175px;cursor: pointer;">
							<img style="display:none" src="./resource/images/app/player.gif" class="audioAnimation" data-garbage="true">
							<i style="display: block;margin: 12px 15px;width: 13px;height: 17px;left: 21px;top: 12px;z-index: 2;background: url(./resource/images/app/sprite_v5.png) 0 0 no-repeat;background-size: 400px 175px;background-position: -180px -105px;" class="audioStatic"></i>
							<span style="" class="audioLoading" data-garbage="true"><i class="fa fa-spinner fa-pulse"></i></span>
						</span>
						<span style="position: absolute; font-size: 14px;color: #999;left: 250px;bottom: 5px;" class="audio-time"><?php  echo $leave['audiotime'];?>’</span>
						<div class="js-audio-wx" data-id="audio-music-4" id="jp_jplayer_1" style="width: 0px; height: 0px;">
							<img id="jp_poster_1" style="width: 0px; height: 0px; display: none;">
							<audio id="jp_audio_1" autoplay="autoplay" preload="none" src="<?php  echo tomedia($leave['audio'])?>"></audio>
						</div>
					</div>
				</div>
			</div>				
		<?php  } ?>			
		<?php  if(!empty($picarr['p1'])) { ?><br/><img src="<?php  echo tomedia($picarr['p1']);?>" alt="" /><?php  } ?>
		<?php  if(!empty($picarr['p2'])) { ?><br/><img src="<?php  echo tomedia($picarr['p2']);?>" alt="" /><?php  } ?>
		<?php  if(!empty($picarr['p3'])) { ?><br/><img src="<?php  echo tomedia($picarr['p3']);?>" alt="" /><?php  } ?>
		<?php  if(!empty($picarr['p4'])) { ?><br/><img src="<?php  echo tomedia($picarr['p4']);?>" alt="" /><?php  } ?>
		<?php  if(!empty($picarr['p5'])) { ?><br/><img src="<?php  echo tomedia($picarr['p5']);?>" alt="" /><?php  } ?>
		<?php  if(!empty($picarr['p6'])) { ?><br/><img src="<?php  echo tomedia($picarr['p6']);?>" alt="" /><?php  } ?>
		<?php  if(!empty($picarr['p7'])) { ?><br/><img src="<?php  echo tomedia($picarr['p7']);?>" alt="" /><?php  } ?>
		<?php  if(!empty($picarr['p8'])) { ?><br/><img src="<?php  echo tomedia($picarr['p8']);?>" alt="" /><?php  } ?>
		<?php  if(!empty($picarr['p9'])) { ?><br/><img src="<?php  echo tomedia($picarr['p9']);?>" alt="" /><?php  } ?>	
	</div>
	<?php  if(!empty($ZY_contents)) { ?>
	<div class="questionContent">
		<div class="questionBox">
			<input type="hidden" id="txtQuestionnaireId" value="<?php  echo $leaveid;?>">
			<?php  if(is_array($ZY_contents)) { foreach($ZY_contents as $key => $row) { ?> 
				<?php  if($ZY_contents[$key]['type'] == '1') { ?>
			<div class="question" name="<?php  echo $ZY_contents[$key]['qorder'];?>" tag="a">
				<b><?php  echo $ZY_contents[$key]['qorder'];?>.&nbsp<?php  echo $ZY_contents[$key]['title'];?> </b>
				<?php  if(is_array($ZY_contents[$key]['content'])) { foreach($ZY_contents[$key]['content'] as $keys => $rows) { ?>
				<p class="answerOption">
					<span class="radioOptionsIco">
					<?php  if($ZY_contents[$key]['content'][$keys]['is_answer'] == "Yes") { ?>
						<img src="<?php echo OSSURL;?>public/mobile/img/radioChecked_01.png" alt="图片无法显示" class="img-unresponsive" readonly>
					<?php  } else { ?>
						<img src="<?php echo OSSURL;?>public/mobile/img/radioNochecked_02.png" alt="图片无法显示" class="img-responsive">
					<?php  } ?>
						<input type="radio" name="answerOption_<?php  echo $ZY_contents[$key]['qorder'];?>" tag="<?php  echo $keys;?>">
					</span>
					<?php  echo $ZY_contents[$key]['content'][$keys]['title'];?> 
					<?php  if($ZY_contents[$key]['content'][$keys]['is_answer'] == "Yes") { ?><span style="color:red;">  【正确答案】</span>
					<?php  } ?>
				</p>
				<?php  } } ?>
			</div>
			<?php  } else if($ZY_contents[$key]['type'] == '2') { ?>
			<div class="question" name="<?php  echo $ZY_contents[$key]['qorder'];?>" tag="b">
			<b><?php  echo $ZY_contents[$key]['qorder'];?>.&nbsp<?php  echo $ZY_contents[$key]['title'];?></b>
			<?php  if(is_array($ZY_contents[$key]['content'])) { foreach($ZY_contents[$key]['content'] as $keys => $rows) { ?>
				<p class="answerOption">
					<span class="checkBoxOptionsIco">
					<?php  if($ZY_contents[$key]['content'][$keys]['is_answer'] == "Yes") { ?>
						<img src="<?php echo OSSURL;?>public/mobile/img/checkBoxChecked_01.png" alt="图片无法显示" class="img-responsive" >
					<?php  } else { ?>
						<img src="<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png" alt="图片无法显示" class="img-responsive">
					<?php  } ?>
						<input type="checkbox" name="answerOption_<?php  echo $ZY_contents[$key]['qorder'];?>" tag="<?php  echo $keys;?>">
					</span>
					<?php  echo $ZY_contents[$key]['content'][$keys]['title'];?>
					<?php  if($ZY_contents[$key]['content'][$keys]['is_answer'] == "Yes") { ?><span style="color:red;">  【正确答案】</span>
					<?php  } ?>
				</p>
				<?php  } } ?>
			</div>
			<?php  } else if($ZY_contents[$key]['type'] == '3') { ?>
			<div class="question" name="<?php  echo $ZY_contents[$key]['qorder'];?>" tag="c">
			<b><?php  echo $ZY_contents[$key]['qorder'];?>.&nbsp<?php  echo $ZY_contents[$key]['title'];?></b>
				<p class="answerOption">
					
					<span style="color:red">【答题要点】</span><span style="color:green"><?php  echo $ZY_contents[$key]['content'];?></span>
				</p>
			</div>
			<?php  } ?>
			<?php  } } ?>
		</div>
	</div>
	<?php  } ?>
	<?php  if($leave['anstype']) { ?>
	<div class="commentBox">
		<div class="mobile_comment" >
			<div class="commentTitle">
			    <span class="l">已答学生</span>
			    <span class="r vvv">查看结果</span>
			</div>
			<ul class="commentList">
			    <li class="comment_li">
				<?php  if(is_array($allstud)) { foreach($allstud as $row) { ?>
					<?php  if(CheckIsAsnwered($row['id'],$leaveid)) { ?>
					<a class="headImg" onclick="gotostuanser(<?php  echo $row['id'];?>);">
						<img src="<?php  if($row['icon']) { ?><?php  echo tomedia($row['icon'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?>">
						<span><?php  echo $row['s_name'];?></span>
					</a>
					<?php  } ?>
				<?php  } } ?>		
			    </li>				
			</ul>
		</div>			
	</div>
	<?php  } ?>
	<?php  if($leave['usertype'] == 'send_class' || $leave['usertype'] == 'student') { ?>
	<div class="commentBox">
		<div class="mobile_comment" >
			<div class="commentTitle">
				<span class="l">
					<?php  if($leave['usertype'] == 'send_class') { ?>指定班级<?php  } ?>
					<?php  if($leave['usertype'] == 'student') { ?>指定学生<?php  } ?>
				</span>
				<span class="r vvv">查看详情</span>
			</div>
			<ul class="commentList">
			<?php  if($leave['usertype'] == 'send_class') { ?>
				<?php  if(is_array($arr)) { foreach($arr as $row) { ?>
				<li class="comment_li">
					<span style="margin-left:5px;"><?php  echo $row['name'];?></span></br>							
				</li>
				<?php  } } ?>	
			<?php  } else { ?>
				
				<?php  if(is_array($arr)) { foreach($arr as $row) { ?>
				<li class="comment_li">
					<span style="margin-left:5px;"><?php  echo $row['bjname'];?></span></br>
					<?php  if(is_array($row['stulist'])) { foreach($row['stulist'] as $item) { ?>
					<a class="headImg">
						<img src="<?php  echo $item['icon'];?>">
						<span><?php  echo $item['name'];?></span>
					</a>
					<?php  } } ?>
				</li>	
				<?php  } } ?>		
								
			<?php  } ?>					
			</ul>
		</div>			
	</div>
	<?php  } ?>	
<?php  include $this->template('comtool/notice_commont');?>
<?php  include $this->template('comad');?>
<?php  include $this->template('newfooter');?>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
<script src="<?php echo OSSURL;?>public/mobile/js/faceMap.js?v=5.61" type="text/javascript"></script>
<?php  include $this->template('port');?>
<script>
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		$("#titlebar_bg").hide();
		document.title="<?php  echo $nowbj['sname'];?><?php  echo $nowkm['sname'];?>作业";
	}
}, 100);
 
$(".queryResult").on("click", function() {
	<?php  if(!empty($ZY_contents)) { ?>
		window.location.href = "<?php  echo $this->createMobileUrl('questatistics', array('schoolid' => $schoolid,'leaveid'=>$leaveid), true)?>"
	<?php  } else if(!empty($leave['anstype'])) { ?>
		window.location.href = "<?php  echo $this->createMobileUrl('rehomework', array('schoolid' => $schoolid,'bj_id' => $leave['bj_id'],'noticeid'=>$leaveid), true)?>"
	<?php  } else { ?>
		showCheckBox();
	<?php  } ?>
});
$(".vvv").on("click", function() {
	gotodetail();
});
function gotostuanser(sid){
	<?php  if(!empty($ZY_contents)) { ?>
		window.location.href = "<?php  echo $this->createMobileUrl('rehomework', array('schoolid' => $schoolid,'bj_id' => $leave['bj_id'],'noticeid'=>$leaveid), true)?>"+"&sid="+sid
	<?php  } else if(!empty($leave['anstype'])) { ?>
		window.location.href = "<?php  echo $this->createMobileUrl('rehomework', array('schoolid' => $schoolid,'bj_id' => $leave['bj_id'],'noticeid'=>$leaveid), true)?>"+"&sid="+sid
	<?php  } else { ?>
		showCheckBox();
	<?php  } ?>
}
function gotodetail(){
	<?php  if(!empty($ZY_contents)) { ?>
		window.location.href = "<?php  echo $this->createMobileUrl('rehomework', array('schoolid' => $schoolid,'bj_id' => $leave['bj_id'],'noticeid'=>$leaveid), true)?>"
	<?php  } else if(!empty($leave['anstype'])) { ?>
		window.location.href = "<?php  echo $this->createMobileUrl('rehomework', array('schoolid' => $schoolid,'bj_id' => $leave['bj_id'],'noticeid'=>$leaveid), true)?>"
	<?php  } else { ?>
		showCheckBox();
	<?php  } ?>
}
icon_replace($("#neirong"));
function showCheckBox(){
    window.location.href = "<?php  echo $this->createMobileUrl('recod', array('schoolid' => $schoolid,'noticeid'=>$leave['id']), true)?>"
}
WeixinJSHideAllNonBaseMenuItem();
/**微信隐藏工具条**/
function WeixinJSHideAllNonBaseMenuItem(){
	if (typeof wx != "undefined"){
		wx.ready(function () {
			
			wx.hideAllNonBaseMenuItem();
		});
	}
}



    var WeixinApi = (function () {
        return {
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
        return {
            version         :"2.5",
            ready           :wxJsBridgeReady,
            imagePreview    :imagePreview
        };
    })();

    var srcList = new Array();


    function wxImageShow(src){
        WeixinApi.imagePreview(src, srcList);
    }



$(function () {

	//给图片添加点击放大功能
    $(".content").find("img").each(function(){
        let src = $(this).attr("src");
        srcList.push(src);
        $(this).attr("onclick","wxImageShow('"+src+"');");
    });

	//背景音乐播放
	var myaudio = document.getElementById("jp_audio_1");
	//myaudio.play();
	$(".audioBar").on("touchstart", function (e) {
		e.stopPropagation();
		if ($(this).hasClass("on")) {
			myaudio.pause();
		} else {
			myaudio.play();
		}
	});
});	
</script>
</html>