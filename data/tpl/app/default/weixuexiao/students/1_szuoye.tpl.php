<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<title><?php  echo $school['title'];?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/mGrzxTeacher.css?v=4.8" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/pageContent.css?v=4.80120" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=4.80120" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/activityNotice.css?v=4.80120" />
<link href="<?php echo OSSURL;?>public/mobile/css/wx_sdk.css" rel="stylesheet" />
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.10.2.min.js?v=4.9"></script>
<?php  include $this->template('port');?>
<?php  include $this->template('bjqcss');?>
</head>
<style>
.answerSpan{font-size: 15px;margin-top: 10px;}
.topic_send_btn1 {position: absolute;right: 10px;width: 80px;height: 35px;line-height: 35px;background: #e5457f;font-size: 16px;border-radius: 5px;color: #fff;text-align: center;position: absolute;right: 10px;}
</style>
<body>
<div id="titlebar" class="header mainColor">
	<div class="l"><a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a></div>
	<div class="m">
     <span style="font-size: 18px"><?php  echo $nowbj['sname'];?><?php  echo $nowkm['sname'];?><?php  echo $language['szuoye_title'];?></span>
	</div>
</div>
<div id="titlebar_bg" class="_header"></div>
<input type="hidden"  id="hide_sid"  value="<?php  echo $it['sid'];?>">
<input type="hidden"  id="hide_tid"  value="<?php  echo $it['tid'];?>">
<input type="hidden"  id="hide_schoolid"  value="<?php  echo $schoolid;?>">
<input type="hidden"  id="hide_weid"  value="<?php  echo $weid;?>">
<input type="hidden" id="txtQuestionnaireId" value="<?php  echo $leaveid;?>">
<input type="hidden"  id="bj_id"  value="<?php  echo $leave['bj_id'];?>">
<input type="hidden"  id="km_id"  value="<?php  echo $leave['km_id'];?>">
		<div class="title"><?php  echo $leave['title'];?></div>		
		<div class="publishInfo">
			<span class="source">发布：<?php  echo $leave['tname'];?></span>
			<span class="time"><?php  echo (date('m-d H:m',$leave['createtime']))?></span>
			<span class="read"></span>		
		</div>
		<div class="content parent">
			<pre id="neirong"><?php  echo htmlspecialchars_decode($leave['content'])?></pre><br/>
			<!--视频-->
			<?php  if($leave['video']) { ?>
			<video id="videocon" controls width="100%"  height="264" poster="<?php  echo tomedia($leave['videopic']);?>" webkit-playsinline playsinline>
				<source src="<?php  echo tomedia($leave['video'])?>" type='video/mp4' />
				<p class="vjs-no-js">你的浏览器不支持该视频</a></p>
			</video>
			<?php  } ?>
			<!--音频-->
			<?php  if($leave['audio']) { ?>
				<div class="app-audio" style="undefinedanimation:undefined;box-sizing: border-box;">
					<div class="inner" style="text-align: left;position: relative;">
						<div id="audio-music-4" data-reload="false" class="wx audioLeft clearfix" data-src="<?php  echo tomedia($leave['audio'])?>">
							<img style="width: 40px;height: 40px;display: inline-block;" alt="语音头像" class="audioLogo" width="40" height="40" src="<?php  if($thisteacher['thumb']) { ?><?php  echo tomedia($thisteacher['thumb'])?><?php  } else { ?><?php  echo tomedia($school['tpic'])?><?php  } ?>">
							<span id="tzuoye" class="audioBar js-play" style="display: block; margin: 5px 0;width: 185px; height: 42px;display: inline-block;left: 55px; top: 0; background: url(./resource/images/app/sprite_v5.png) 0 0 no-repeat;background-size: 400px 175px;cursor: pointer;">
								<img style="display:none" src="./resource/images/app/player.gif" class="audioAnimation" data-garbage="true">
								<i style="display: block;margin: 12px 15px;width: 13px;height: 17px;left: 21px;top: 12px;z-index: 2;background: url(./resource/images/app/sprite_v5.png) 0 0 no-repeat;background-size: 400px 175px;background-position: -180px -105px;" class="audioStatic"></i>
								<span style="" class="audioLoading" data-garbage="true"><i class="fa fa-spinner fa-pulse"></i></span>
							</span>
							<span style="position: absolute; font-size: 14px;color: #999;left: 250px;bottom: 5px;" class="audio-time"><?php  echo $leave['audiotime'];?>’</span>
							<div class="js-audio-wx" data-id="audio-music-4" id="jp_jplayer_1" style="width: 0px; height: 0px;">
								<img id="jp_poster_1" style="width: 0px; height: 0px; display: none;">
								<audio id="jp_audio_1" preload="none" src="<?php  echo tomedia($leave['audio'])?>"></audio>
							</div>
						</div>
					</div>
				</div>				
			<?php  } ?>

			<!--图片-->
			<?php  if(!empty($picarr['p1'])) { ?><img src="<?php  echo tomedia($picarr['p1']);?>" alt="" /><?php  } ?>
			<?php  if(!empty($picarr['p2'])) { ?></br><img src="<?php  echo tomedia($picarr['p2']);?>" alt="" /><?php  } ?>
			<?php  if(!empty($picarr['p3'])) { ?></br><img src="<?php  echo tomedia($picarr['p3']);?>" alt="" /><?php  } ?>
			<?php  if(!empty($picarr['p4'])) { ?></br><img src="<?php  echo tomedia($picarr['p4']);?>" alt="" /><?php  } ?>
			<?php  if(!empty($picarr['p5'])) { ?></br><img src="<?php  echo tomedia($picarr['p5']);?>" alt="" /><?php  } ?>
			<?php  if(!empty($picarr['p6'])) { ?></br><img src="<?php  echo tomedia($picarr['p6']);?>" alt="" /><?php  } ?>
			<?php  if(!empty($picarr['p7'])) { ?></br><img src="<?php  echo tomedia($picarr['p7']);?>" alt="" /><?php  } ?>
			<?php  if(!empty($picarr['p8'])) { ?></br><img src="<?php  echo tomedia($picarr['p8']);?>" alt="" /><?php  } ?>
			<?php  if(!empty($picarr['p9'])) { ?></br><img src="<?php  echo tomedia($picarr['p9']);?>" alt="" /><?php  } ?>
		</div>	
		<?php  if(!empty($leave['anstype'])) { ?>
			<?php  if(!empty($testBB['MyAnswer'])) { ?>
			<span style="color:red"><?php  echo $language['szuoye_wordtips1'];?></span></br>
			<span style="color:blue"><?php  echo $language['szuoye_wordtips2'];?>：</span>
				<div class="content parent">
								<pre id="neirong"><?php  echo htmlspecialchars_decode($testBB['MyAnswer']['text'])?></pre><br/>
			<!--视频-->
						<?php  if($testBB['MyAnswer']['video']) { ?>
						<video id="videocon" controls width="100%"  height="264" poster="<?php  echo tomedia($school['logo']);?>" webkit-playsinline playsinline>
							<source src="<?php  echo tomedia($testBB['MyAnswer']['video'])?>" type='video/mp4' />
							<p class="vjs-no-js">你的浏览器不支持该视频</a></p>
						</video>
						<?php  } ?>
						<!--音频-->
						<?php  if($testBB['MyAnswer']['audio']) { ?>
							<div class="app-audio" style="undefinedanimation:undefined;box-sizing: border-box;">
								<div class="inner" style="text-align: left;position: relative;">
									<div id="audio-music-3" data-reload="false" class="wx audioLeft clearfix" data-src="<?php  echo tomedia($testBB['MyAnswer']['audio'])?>">
										<img style="width: 40px;height: 40px;display: inline-block;" alt="语音头像" class="audioLogo" width="40" height="40" src="<?php  if($student['icon']) { ?><?php  echo tomedia($student['icon'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?>">
										<span id="stuhuida" class="audioBar js-play" style="display: block; margin: 5px 0;width: 185px; height: 42px;display: inline-block;left: 55px; top: 0; background: url(./resource/images/app/sprite_v5.png) 0 0 no-repeat;background-size: 400px 175px;cursor: pointer;">
											<img style="display:none" src="./resource/images/app/player.gif" class="audioAnimation" data-garbage="true">
											<i style="display: block;margin: 12px 15px;width: 13px;height: 17px;left: 21px;top: 12px;z-index: 2;background: url(./resource/images/app/sprite_v5.png) 0 0 no-repeat;background-size: 400px 175px;background-position: -180px -105px;" class="audioStatic"></i>
											<span style="" class="audioLoading" data-garbage="true"><i class="fa fa-spinner fa-pulse"></i></span>
										</span>
										<span style="position: absolute; font-size: 14px;color: #999;left: 250px;bottom: 5px;" class="audio-time"><?php  echo $testBB['MyAnswer']['audiotime'];?>’</span>
										<div class="js-audio-wx" data-id="audio-music-3" id="jp_jplayer_3" style="width: 0px; height: 0px;">
											<img id="jp_poster_3" style="width: 0px; height: 0px; display: none;">
											<audio id="jp_audio_3"  preload="none" src="<?php  echo tomedia($testBB['MyAnswer']['audio'])?>"></audio>
										</div>
									</div>
								</div>
							</div>				
						<?php  } ?>

						<!--图片-->
						<?php  if(!empty($testBB['MyAnswer']['picarr']['p1'])) { ?><img src="<?php  echo tomedia($testBB['MyAnswer']['picarr']['p1']);?>" alt="" /><?php  } ?>
						<?php  if(!empty($testBB['MyAnswer']['picarr']['p2'])) { ?></br><img src="<?php  echo tomedia($testBB['MyAnswer']['picarr']['p2']);?>" alt="" /><?php  } ?>
						<?php  if(!empty($testBB['MyAnswer']['picarr']['p3'])) { ?></br><img src="<?php  echo tomedia($testBB['MyAnswer']['picarr']['p3']);?>" alt="" /><?php  } ?>
						<?php  if(!empty($testBB['MyAnswer']['picarr']['p4'])) { ?></br><img src="<?php  echo tomedia($testBB['MyAnswer']['picarr']['p4']);?>" alt="" /><?php  } ?>
						<?php  if(!empty($testBB['MyAnswer']['picarr']['p5'])) { ?></br><img src="<?php  echo tomedia($testBB['MyAnswer']['picarr']['p5']);?>" alt="" /><?php  } ?>
						<?php  if(!empty($testBB['MyAnswer']['picarr']['p6'])) { ?></br><img src="<?php  echo tomedia($testBB['MyAnswer']['picarr']['p6']);?>" alt="" /><?php  } ?>
						<?php  if(!empty($testBB['MyAnswer']['picarr']['p7'])) { ?></br><img src="<?php  echo tomedia($testBB['MyAnswer']['picarr']['p7']);?>" alt="" /><?php  } ?>
						<?php  if(!empty($testBB['MyAnswer']['picarr']['p8'])) { ?></br><img src="<?php  echo tomedia($testBB['MyAnswer']['picarr']['p8']);?>" alt="" /><?php  } ?>
						<?php  if(!empty($testBB['MyAnswer']['picarr']['p9'])) { ?></br><img src="<?php  echo tomedia($testBB['MyAnswer']['picarr']['p9']);?>" alt="" /><?php  } ?>

				</div>	
			<?php  } ?>
		<?php  } ?>
<?php  if(is_showgkk()) { ?>
					<?php  if(!empty($teaPy_p)) { ?>
					</br><span style="font-size:15px;color:blue"><?php  echo $teaPy['tname'];?><?php  echo $language['szuoye_lspy'];?></span></br><span class="answerSpan " style="color:#D2691E">&nbsp;<?php  echo $teaPy_p['content'];?></span>
					<?php  } ?>
			<?php  } else { ?>
	<?php  if(!empty($remark)) { ?>
	<div class="content">
		<p style="color:blue"><?php  echo $language['szuoye_lspy'];?></p>
		<p id="neirong"><?php  echo htmlspecialchars_decode($remark['content'])?></p><br/>
		<?php  if($remark['video']) { ?>
			<video id="videocon" controls width="100%"  height="264" poster="<?php  echo tomedia($school['logo']);?>" webkit-playsinline playsinline>
				<source src="<?php  echo tomedia($remark['video'])?>" type='video/mp4' />
				<p class="vjs-no-js">你的浏览器不支持该视频</a></p>
			</video>
		<?php  } ?>
		<?php  if($remark['audio']) { ?>
			<div class="app-audio" style="undefinedanimation:undefined;box-sizing: border-box;">
				<div class="inner" style="text-align: left;position: relative;">
					<div id="audio-music-4" data-reload="false" class="wx audioLeft clearfix" data-src="<?php  echo tomedia($remark['audio'])?>">
						<img style="width: 40px;height: 40px;display: inline-block;" alt="语音头像" class="audioLogo" width="40" height="40" src="<?php  if($student['icon']) { ?><?php  echo tomedia($student['icon'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?>">
						<span id="forstu" class="audioBar js-play forstu" style="display: block; margin: 5px 0;width: 185px; height: 42px;display: inline-block;left: 55px; top: 0; background: url(./resource/images/app/sprite_v5.png) 0 0 no-repeat;background-size: 400px 175px;cursor: pointer;">
							<img style="display:none" src="./resource/images/app/player.gif" class="audioAnimation" data-garbage="true">
							<i style="display: block;margin: 12px 15px;width: 13px;height: 17px;left: 21px;top: 12px;z-index: 2;background: url(./resource/images/app/sprite_v5.png) 0 0 no-repeat;background-size: 400px 175px;background-position: -180px -105px;" class="audioStatic"></i>
							<span style="" class="audioLoading" data-garbage="true"><i class="fa fa-spinner fa-pulse"></i></span>
						</span>
						<span style="position: absolute; font-size: 14px;color: #999;left: 250px;bottom: 5px;" class="audio-time"><?php  echo $remark['audiotime'];?>’</span>
						<div class="js-audio-wx" data-id="audio-music-4" id="jp_jplayer_1" style="width: 0px; height: 0px;">
							<img id="jp_poster_1" style="width: 0px; height: 0px; display: none;">
							<audio id="jp_audio_2"  preload="none" src="<?php  echo tomedia($remark['audio'])?>"></audio>
						</div>
					</div>
				</div>
			</div>
		<?php  } ?>
	</div>
	<?php  } ?>		
				<?php  } ?>
		<!--电脑端发布的单选多选式作业-->
		<?php  if(!empty($ZY_contents)) { ?>
		<div class="questionContent">
			<div class="questionBox">
				 
					  <?php  if(!empty($testAA)) { ?><span style="color:red;padding-left: 10px;"> <?php  echo $language['szuoye_wordtips1'];?></span></br></br>
<span style="color:blue;padding-left: 10px;"><?php  echo $language['szuoye_wordtips2'];?>：</span>
					  <?php  } ?>
				<?php  if(is_array($ZY_contents)) { foreach($ZY_contents as $key => $row) { ?>
				 
					<!--单选题-->
					 <?php  if($ZY_contents[$key]['type'] == '1') { ?>
					 
					 <div class="question" name="<?php  echo $ZY_contents[$key]['qorder'];?>" tag="a"> <?php  echo $ZY_contents[$key]['qorder'];?>.&nbsp<?php  echo $ZY_contents[$key]['title'];?>
					 <?php  if(is_array($ZY_contents[$key]['content'])) { foreach($ZY_contents[$key]['content'] as $keys => $rows) { ?>
				
						 <?php  if($testAA[$ZY_contents[$key]['qorder']] == $keys ) { ?>
						 	 <p class="answerOption"><span class="radioOptionsIco" readonly>
						  <img src="<?php echo OSSURL;?>public/mobile/img/radioChecked_01.png" alt="图片无法显示" class="img-unresponsive" readonly>
							  <?php  } else { ?>
							   <p class="answerOption"><span class="radioOptionsIco">
                                        <img src="<?php echo OSSURL;?>public/mobile/img/radioNochecked_02.png" alt="图片无法显示" class="img-responsive">
	                                        <?php  } ?>
                                        <input type="radio" name="answerOption_<?php  echo $ZY_contents[$key]['qorder'];?>" tag="<?php  echo $keys;?>">
                                    </span>
<?php  echo $ZY_contents[$key]['content'][$keys]['title'];?> <?php  if(((!empty($testAA))&&($ZY_contents[$key]['content'][$keys]['is_answer'] == "Yes"))) { ?><span style="color:red;">  【答案】</span><?php  } ?>
                                    
                                    </p>
					<?php  } } ?>
					</div>
					<!--多选题-->
					<?php  } else if($ZY_contents[$key]['type'] == '2') { ?>
					<div class="question" name="<?php  echo $ZY_contents[$key]['qorder'];?>" tag="b">
						 <?php  echo $ZY_contents[$key]['qorder'];?>.&nbsp<?php  echo $ZY_contents[$key]['title'];?>
					 <?php  if(is_array($ZY_contents[$key]['content'])) { foreach($ZY_contents[$key]['content'] as $keys => $rows) { ?>


 <p class="answerOption">
					<span class="checkBoxOptionsIco">
						
	<?php  if(is_array($testAA[$ZY_contents[$key]['qorder']]) && in_array($keys, $testAA[$ZY_contents[$key]['qorder']]) ) { ?>
					 <img src="<?php echo OSSURL;?>public/mobile/img/checkBoxChecked_01.png" alt="图片无法显示" class="img-responsive">
				<?php  } else { ?>
									<img src="<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png" alt="图片无法显示" class="img-responsive">	<?php  } ?>
										
									<input type="checkbox" name="answerOption_<?php  echo $ZY_contents[$key]['qorder'];?>" tag="<?php  echo $keys;?>">
								</span>
<?php  echo $ZY_contents[$key]['content'][$keys]['title'];?><?php  if(((!empty($testAA))&&($ZY_contents[$key]['content'][$keys]['is_answer'] == "Yes"))) { ?><span style="color:red;">  【答案】</span><?php  } ?>

				</p>
				
				<?php  } } ?>
				</div>
				<!--问答题-->
					<?php  } else if($ZY_contents[$key]['type'] == '3') { ?>
					<div class="question" name="<?php  echo $ZY_contents[$key]['qorder'];?>" tag="c">
						<b> <?php  echo $ZY_contents[$key]['qorder'];?>.&nbsp<?php  echo $ZY_contents[$key]['title'];?></b>
					<p class="answerOption">
					<?php  if(!empty($testAA[$ZY_contents[$key]['qorder']]) ) { ?>
					<span style="font-size:15px;color:blue"> &nbsp;你的回答：</span><span class="answerSpan "><?php  echo $testAA[$ZY_contents[$key]['qorder']];?></span>
					</br>
					<span style="font-size:15px;color:red">【答题要点】</span>
					<?php  if(!empty($ZY_contents[$key]['content'])) { ?>
					<span style="font-size:15px;color:green"><?php  echo $ZY_contents[$key]['content'];?></span>
					<?php  } else { ?>
					<span style="font-size:15px;color:green">略</span>
					<?php  } ?>
					<?php  if(is_showgkk()) { ?>
					<?php  if(!empty($teaPy)) { ?>
					</br><span style="font-size:15px;color:blue"><?php  echo $teaPy['tname'];?><?php  echo $language['szuoye_lspy'];?></span></br><span class="answerSpan " style="color:#D2691E">&nbsp;<?php  echo $teaPy[$ZY_contents[$key]['qorder']];?></span>
					<?php  } ?>
					<?php  } ?>
					
							
							<?php  } else { ?>
							<textarea name="txtAnswerOption" cols="3" rows="4" placeholder="请回答。。。。。。" tag="b65f7ee0-2b6c-4e75-935c-2a56aa88d400" ></textarea>
							<?php  } ?>
						</p>
					</div>
					<?php  } ?>
					
					 
					 <?php  } } ?>
					 <?php  if(empty($testAA)) { ?>
					 <button type="button" id="btSubmit">提交</button>
					 <?php  } ?>
				</div>
				</div>
				<?php  } ?>
				<?php  if(!empty($leave['anstype'])) { ?>
				<?php  if(empty($testBB['MyAnswer'])) { ?>
<div class="feedback_box">
	<div class="blank"></div>
	<div class="feedback_content_box">
		<!-- 日志内容 -->
		<textarea class="feedback_content" id="feedback_content" maxlength="100000" placeholder="请输入文字"></textarea>
		<div class="clear1"></div>
		<!-- 视频列表 -->
		<ul class="media_list"></ul>
		<div class="clear1"></div>
		<!-- 音频列表 -->
		<ul class="video_list"></ul>
		<div class="clear1"></div>
		<!-- 图片列表 -->
		<ul class="pic_list" id="pic_list"></ul>
		<div class="clear1"></div>
	</div>
</div>

<div class="topic_bottom" style="position: static;">
	<?php  if($anstype['is_img'] == 1) { ?><div class="add_pic_btn"></div><?php  } ?>
	<?php  if($school['is_fbvocie'] ==1) { ?><?php  if($anstype['is_audio'] == 1) { ?><div class="add_video_btn"></div><?php  } ?><?php  } ?>
	<?php  if($school['is_fbnew'] ==1) { ?><?php  if($anstype['is_video'] == 1) { ?><div class="add_video_btn2"></div><?php  } ?><?php  } ?>
	<div class="topic_send_btn1" style="margin-top: 4px;">提交</div>
</div>
<?php  } ?>

    <!-- 录音弹出框 -->
<div class="blank" style="height: 50px;"></div>
<div class="babysay_bg">
    <div class="say_time_box">
        <div class="say_time_level"></div>
    </div>
    <div class="babysay_box">
        <div class="say_btn1 record_btn"></div>

        <div class="say_tips1">点击话筒开始录音吧</div>
        <div class="say_tips2">时长不超过<span class="pink_f">60</span>秒</div>

    </div>
</div>

<!--收藏夹start  -->
<div class="select_type_bg">
    <div class="media_upload_tips" style="display: none; line-height: 20px; position: fixed; bottom: 180px; left: 0; width: 100%; box-sizing: border-box; padding: 10px; color: #eee; font-size: 12px; text-align: center;">温馨提醒：为了保证您上传视频的速度，使用安卓手机用户拍摄视频请先通过 录像里面的设置功能将 录像的分辨率调低。视频文件大小不宜超过3mb。</div>
    <div class="local_audio_btn"  style="bottom:61px;" >录音</div>

    <div class="local_img_btn">本地图片</div>
    <!-- <div class="web_img_btn" >从收藏夹选择图片</div> -->
    <div id="local_media_btn" class="local_media_btn">
        <div id="local_media_btn2" style="position: relative; width: 100%; text-align: center; height: 50px;">本地视频</div>
    </div>
    <!-- <div class="web_media_btn" >从收藏夹选择视频</div> -->
    <div class="select_type_cancel">取消</div>
</div>
<div class="video_bg">
    <div class="close_video_btn">关闭</div>
</div>
<!-- 收藏夹end -->
 <input type="hidden" id="session_visit_sign" value="0" />
 <input id="isopen" type="hidden" value="<?php  echo $school['isopen'];?>" />
<?php  } ?>
<div class="commentBox">
	<div class="mobile_comment" >
		<div class="commentTitle">
			<span class="l"><?php  echo $language['szuoye_ydxs'];?></span>
		</div>
		<ul class="commentList">
			<li class="comment_li">
			<?php  if(is_array($allstud)) { foreach($allstud as $row) { ?>
				<?php  if(CheckIsAsnwered($row['id'],$leaveid)) { ?>
				<a class="headImg">
					<img src="<?php  if($row['icon']) { ?><?php  echo tomedia($row['icon'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?>">
					<span><?php  echo $row['s_name'];?></span>
				</a>
				<?php  } ?>
			<?php  } } ?>		
			</li>				
		</ul>
	</div>			
</div>
<?php  include $this->template('comtool/notice_commont');?>
<?php  include $this->template('comad');?>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
<script src="<?php echo OSSURL;?>public/mobile/js/common.js?v=1717"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/faceMap.js?v=5.61" type="text/javascript"></script>
<script type="text/javascript">
var ROOT_URL = "<?php echo OSSURL;?>";
var MODULE_URL = "<?php echo MODULE_URL;?>";
//此段代码有问题
/*$("input,textarea,select").blur(function(){
	document.body.scrollTop = document.documentElement.scrollTop = 0;
});*/
</script>
<script>var face_img_base_url = ROOT_URL + "public/mobile/img/";</script>
<script src="<?php echo OSSURL;?>public/mobile/js/wxUpload_v0.3.js?v=1717"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/favorite.js?v=1717"></script>
<script type="text/javascript">
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		$("#titlebar_bg").hide();
		document.title="<?php  echo $language['szuoye_title'];?>";
	}
}, 100);
 
</script>

<?php  if(empty($testAA)) { ?>
<script>

	var hasSubmit = 'False';
	var hasObject = 'True';

	$(".radioOptionsIco").click(function () {
		var value = $(this).children("img").attr("src");
		if (value == "<?php echo OSSURL;?>public/mobile/img/radioChecked_01.png") {
			$(this).children("img").attr("src", "<?php echo OSSURL;?>public/mobile/img/radioNochecked_02.png");
			$(this).children("input").removeAttr("checked");
		} else {
			$(this).children("img").attr("src", "<?php echo OSSURL;?>public/mobile/img/radioChecked_01.png");
			$(this).children("input").attr("checked", "checked");
			$(this).parent().siblings(".answerOption").find(".radioOptionsIco").children("img").attr("src", "<?php echo OSSURL;?>public/mobile/img/radioNochecked_02.png");
			$(this).parent().siblings(".answerOption").find(".radioOptionsIco").children("input").removeAttr("checked");
		}
	});
	
	$(".checkBoxOptionsIco").click(function() {
		var value = $(this).children("img").attr("src");
		if (value == "<?php echo OSSURL;?>public/mobile/img/checkBoxChecked_01.png") {
			$(this).children("img").attr("src", "<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png");
			$(this).children("input").removeAttr("checked");
		} else {
			$(this).children("img").attr("src", "<?php echo OSSURL;?>public/mobile/img/checkBoxChecked_01.png");
			$(this).children("input").attr("checked", "checked");
		}
	});

	$(".btnTrue").click(function () {
		$(".popUpBox").css("display", "none");
		if (hasObject == "True" && hasSubmit == "True") {
			btnSubmit();
		}
	});
	
	$(".btnFalse").click(function () {
		location.href = "/1046/Notify";
		$(".popUpBox").css("display", "none");
	});
	
	$(".queryResult").on("click", function() {
		location.href = "/1046/Questionnaire/QueStatistics?sQuestionUid=" + $("#txtQuestionnaireId").val();
	});

	$("#btSubmit").click(function () {
		if (hasObject == "False" || hasSubmit == "True") {
			$(".popUpBox").css("display", "block");
		}
		else {
			btnSubmit();
		}
	});
        //提交
	function btnSubmit() {
		var zy_sid             = $("#hide_sid").val();
		var zy_tid             = $("#hide_tid").val();
		var zy_weid            = $("#hide_weid").val();
		var zy_schoolid        = $("#hide_schoolid").val();
		var txtQuestionnaireId = $("#txtQuestionnaireId").val();

		var txtItemJson = "";
		var d = 0;
		$(".questionContent").find('.question').each(function () {
			d++;
			var txtQueId = $(this).attr("name");
			var txtQueType = $(this).attr("tag");
			//问答题
			if (txtQueType == "c") {
				var txtQueAnswerId = $(this).find("[name=txtAnswerOption]").attr("tag");
				var txtAnserContent = $(this).find('[name=txtAnswerOption]').val();
				
				if( txtAnserContent.indexOf('"') != -1 )
				{
				    txtAnserContent1 = txtAnserContent.replace(/"/g,"“");
				}else{
					txtAnserContent1 = txtAnserContent ;
				}
				//alert(txtAnserContent1);
				if (txtAnserContent != "") {
                        txtItemJson += "{\"tmid\":\"" + txtQueId + "\",\"type\":\"" + txtQueType + "\",\"huida\":\"" + txtAnserContent1 + "\"},";
				}
			} else {
				var radioObj = $(this).find("[name=answerOption_" + txtQueId + "]");
				for (var j = 0; j < radioObj.length; j++) {
					if (radioObj[j].checked) {
						var txtQueAnswerId = $(radioObj[j]).attr("tag");
                            txtItemJson += "{\"tmid\":\"" + txtQueId +  "\",\"type\":\"" + txtQueType + "\",\"huida\":\"" + txtQueAnswerId + "\"},";
					}
				}

			}

		});
        if (txtItemJson != "") {
            txtItemJson = "[" + txtItemJson.substr(0, txtItemJson.length - 1) + "]";
        } else {
            jTips("还没填写任何内容！不能提交哦");
            return false;
        }
		    jConfirm('提交回答后不可修改，是否确认提交？', '确认对话框', function (r){
	        if(r){
		$.post("<?php  echo $this->createMobileUrl('indexajax',array('op'=>'tjzy'))?>",{"tid":zy_tid, "sid":zy_sid,"weid":zy_weid,"schoolid":zy_schoolid,"userid":<?php  echo $userid;?>, "txtQuestionnaireId": txtQuestionnaireId, "txtItemJson": txtItemJson, hasSubmit: hasSubmit },function(data){
					if(data.result){
						jTips(data.info);
						window.location.href = "<?php  echo $this->createMobileUrl('szuoyelist', array('schoolid' => $schoolid), true)?>"
					}else{
						jTips(data.info);
						window.location.href = "<?php  echo $this->createMobileUrl('szuoyelist', array('schoolid' => $schoolid), true)?>"
					}
		},'json');}else{
			return false;
		}});
	};
</script>
<?php  } ?>
<script>
<?php  if($leave['audio'] || $testBB['MyAnswer']['audio']) { ?>
$(function () {
	//背景音乐播放
	$("#stuhuida").on("touchstart", function (e) {
		var myaudio = document.getElementById("jp_audio_3");
		e.stopPropagation();
		if ($(this).hasClass("on")) {
			myaudio.pause();
		} else {
			myaudio.play();
		}
	});
	$("#tzuoye").on("touchstart", function (e) {
		var myaudio = document.getElementById("jp_audio_1");
		e.stopPropagation();
		if ($(this).hasClass("on")) {
			myaudio.pause();
		} else {
			myaudio.play();
		}
	});
});
<?php  } ?>
$(function() {
    $(".content").find("img").each(function(){
        let src = $(this).attr("src");
        srcList.push(src);
        $(this).attr("onclick","wxImageShow('"+src+"');");
    });
    WeixinJSHideAllNonBaseMenuItem();
		
});
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


$("#forstu").on("touchstart", function (e) {
	var myaudio1 = document.getElementById("jp_audio_2");
	e.stopPropagation();
	if ($(this).hasClass("on")) {
		myaudio1.pause();
	} else {
		myaudio1.play();
	}
});
</script>
<script>

    $(function () {
        if (window.localStorage) {
            //@---获取下拉多选缓存值
            var diary_type = localStorage.getItem("yab_parent_diary_type");
            if (diary_type != "" && diary_type != null && diary_type != "null") {
                $("#feedback_item").find("option[value='" + diary_type + "']").attr("selected", true);
            }
            //@---获取私密缓存值
            var diary_personal = localStorage.getItem("yab_parent_diary_personal");
            if (diary_personal != "" && diary_personal != null && diary_personal != "null" && diary_personal == "Y") {
                $("#is_personal").prop("checked", true);
                $("#is_personal").attr("value", "1");
                $("#is_txt").attr("value","1");
                $(".answer_type").show();
            }
            // 获取标题文本缓存值
            var diary_title = localStorage.getItem("yab_parent_diary_title");
            if (diary_title != "" && diary_title != null && diary_title != "null") {
                $("#title").val(diary_title);
            }
            // 获取日志文本缓存值
            var diary_content = localStorage.getItem("yab_parent_diary_content");
            if (diary_content != "" && diary_content != null && diary_content != "null") {
                $("#feedback_content").val(diary_content);
            }
        }

        //@---保存输入文本内容
        $("#title").bind('input propertychange', function () {
            if (window.localStorage) {
                localStorage.setItem("yab_parent_diary_title", $("#title").val());
            }
        });
        $("#feedback_content").bind('input propertychange', function () {
            if (window.localStorage) {
                localStorage.setItem("yab_parent_diary_content", $("#feedback_content").val());
            }
        });
        $("#faceImg").on('click', '.faceBox_item', function () {
            if (window.localStorage) {
                localStorage.setItem("yab_parent_diary_content", $("#feedback_content").val());
            }
        });
        //@---保存私密内容
        $("#is_personal").on("change", function () {
            if(	$("#is_personal").is(':checked')){
                $(".answer_type").show();
                $("#is_txt").attr("value","1");
                $("#is_personal").attr("value","1");
                //console.log("checked");
            }else{
                $(".answer_type").hide();
                $("#is_personal").attr("value","0");

                $("#is_img").attr("value","0");
                $("#is_audio").attr("value","0");
                $("#is_video").attr("value","0");

                $("#is_img").removeAttr("checked");
                $("#is_audio").removeAttr("checked");
                $("#is_video").removeAttr("checked");

                $("#is_img").parent(".checkBoxOptionsIco").children("img").attr("src","<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png");
                $("#is_audio").parent(".checkBoxOptionsIco").children("img").attr("src","<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png");
                $("#is_video").parent(".checkBoxOptionsIco").children("img").attr("src","<?php echo OSSURL;?>public/mobile/img/checkBoxNochecked_02.png");
                //console.log("not checked");
            }
            if (window.localStorage) {
                localStorage.setItem("yab_parent_diary_personal", $("#is_personal").prop('checked') ? "Y" :"N");
            }
        });









        //@---保存下拉多选内容
        $("#feedback_item").on("change", function () {
            if (window.localStorage) {
                localStorage.setItem("yab_parent_diary_type", $(this).val());
            }
        });


        //点击上传视频按钮
        $('.add_video_btn2').one('click', function () {
            //run_video_init();
        });

        //点击隐藏录音框
        $(".babysay_bg").on("click", function (e) {
            $(this).hide();
        });

        //点击选择表情
        $("#feedback_content ,#feedback_content_til").on("touchstart", function (e) {
            e.stopPropagation();
            $(".faceBox").css("display", "none");
        });

        //删除已选视频
        $('.media_list').on('click', '.del_btn', function (e) {
            e.stopPropagation();
            $(this).closest('.vod_li').remove();
            $('.add_video_btn2').one('click', function () {
                //run_video_init();
                $('#fileUpload').click();
            });

        })

        var submit_wxsdkSendData = true;
        var choose_img_params = {
            choose_img_btn: ".local_img_btn",
            upload_btn: ".topic_send_btn1", //提交按钮
            img_showlist: ".pic_list", //图片显示的列表
            record_btn: ".record_btn",
            video_btn: ".video_btn",
            video_list: ".video_list",
            del_video_btn: "delete_voice_btn",
            img_max_length: 9,
            video_max_length: 1,
            upload_img_url: "<?php  echo $this->createMobileUrl('bjqajax',array('op'=>'donwimg'))?>",     //图片的url
            upload_video_url: "<?php  echo $this->createMobileUrl('bjqajax',array('op'=>'donwvioce'))?>",   //音频的url
            wxsdkcheckForm: function () {
                // 1.这里先做校验文本框不能为空


                var bj_id = $.trim($("#bj_id").val());
                if (bj_id == "") {
                    jAlert("选择班级");
                    return false;
                }
                var km_id = $.trim($("#km_id").val());
                if (km_id == "") {
                    jAlert("选择科目");
                    return false;
                }
                var is_txt   = $("#is_txt").val();
                var is_img   = $("#is_img").val();
                var is_audio = $("#is_audio").val();
                var is_video = $("#is_video").val();
                var is_personal = $("#is_personal").val();

                var diary_content = $.trim($("#feedback_content").val());

                if (diary_content.replace(/(#)[0-9a-zA-Z\u4e00-\u9fa5]{0,255}(#)/g, '$1$2').replace(/[#]/g, "") == "") {
                    jAlert("请先输入正文内容");
                    return false;
                }

                <?php  $word = $this->GetSensitiveWord($weid) ?>
                // 2.敏感词检查
                var sensitive_words = "<?php  echo $word;?>";
                var filter = sensitive_words.split('|');
                for (var i = 0; i < filter.length; i++) {
                    var filter_word = filter[i].trim();

                    if (filter_word == "")
                        continue;

                    if (diary_content.indexOf(filter_word) > -1) {
                        jAlert("请遵守国家法律法规，请勿发布暴力、谣言、色情等言论。正文内容含有非法词语：" + filter_word);

                        return false;
                    }
                }

                // 验证成功
                return true;
            },
            wxsdkSendData: function (imgServerid, videoServerid, videoTime, media_receiveid) {
                if (submit_wxsdkSendData) {
                    submit_wxsdkSendData = false;
                    // var content = iphone_emoji_filter($("#feedback_content").val());
                    var url = "<?php  echo $this->createMobileUrl('dongtaiajax',array('op'=>'zhuida'))?>";
                    var type = $('#feedback_item').val();
                    var isPersonal = $("#is_personal").prop('checked')?"Y":"N";

                    var content = iphone_emoji_filter($("#feedback_content").val().replace(/(#)[0-9a-zA-Z\u4e00-\u9fa5]{0,255}(#)/g,'$1$2').replace(/[#]/g,""));
                    // var content = iphone_emoji_filter($("#feedback_content").val());

                    var link_title = $("#link_title").attr("data-linktitle");
                    var link_address = $("#link_address").attr("data-linkaddress");

                    var receiveid = [];
                    var receivetime = 0;

                    $(".pic_list li").not(".sdk_img_li").each(function () {
                        receiveid.push($(this).children("img").attr("receive_id"));
                    });
                    $(".video_list li").not(".sdk_voice_li").each(function () {
                        receiveid.push($(this).children("audio").attr("receive_id"));
                    });
                    $(".media_list li").each(function () {
                        receiveid.push($(this).children(".favorites_play_icon").attr("receive_id"));
                        receivetime = $(this).children("audio").attr("receive_time");
                    });
                    var favourite_mediaid = '';
                    if ($('.media_list li').not('.vod_li').length > 0) {
                        favourite_mediaid = $('.media_list li').children(".favorites_play_icon").attr("receive_id");
                    }
                    var data = {
                        weid:"<?php  echo $weid;?>",
                        openid : "<?php  echo $openid;?>",
                        schoolid : "<?php  echo $schoolid;?>",
                        uid:"<?php  echo $userid;?>",
                        tid:"<?php  echo $it['tid'];?>",
                        sid: $("#hide_sid").val(),
                        zyid : $("#txtQuestionnaireId").val(),
                        bj_id : $("#bj_id").val(),
                        km_id : $("#km_id").val(),
                        contentCategory: type,
                        content: content,
                        photoUrls: imgServerid,
                        audioServerid: videoServerid,
                        audioTime: videoTime,
                        receiveid: receiveid,
                        receivetime: receivetime,
                        videoMediaId: media_receiveid,
                        favourVideoMediaId: favourite_mediaid,


                    }
                    //jAlert("zheli");
                    ajax_upload(url, data, this);
                }
            }
        };
        $.wx_upload = $.extend($.wx_upload, choose_img_params);
        $.wx_upload.init();
        wx.ready(function () {
            wx.hideAllNonBaseMenuItem();
            wx.onVoicePlayEnd({
                complete: function (res) {
                    $.wx_upload.wxsdkonVoicePlayEnd(res.localId);
                }
            });
            wx.onVoiceRecordEnd({
                success: function (res) {
                    jTips("超过1分钟!");
                    $.wx_upload.wxsdkonVoiceRecordEnd(res.localId);
                }
            });
        });
        wx.error(function (res) {
            console.log(res);
            jTips("签名校验失败!");
        });
    });


    function ajax_upload(url, data, self) {
        $.ajax({
            url: url,
            data: data,
            type: "POST",
            dataType: "json",
            success: function (result) {
                //提交后 隐藏加载层
                self.hideLoadingMsg();
                jTips(result.msg, function () {
                    if (result.status == 1) {
                        //clear_page_session("parent_diary_baby");
                        var bj_id = $("#bj_id").val();
                        localStorage.removeItem("yab_parent_diary_type");//清除本地存储
                        localStorage.removeItem("yab_parent_diary_title");
                        localStorage.removeItem("yab_parent_diary_personal");
                        localStorage.removeItem("yab_parent_diary_content");

                        location.href = "<?php  echo $this->createMobileUrl('szuoyelist', array('schoolid' => $schoolid))?>";
                    } else {
                        $.wx_upload.success_img_arr = [];
                        $.wx_upload.fail_local_img_arr = [];
                        $.wx_upload.fail_server_img_arr = [];
                        $.wx_upload.success_video_arr = [];
                        $.wx_upload.fail_local_video_arr = [];
                        $.wx_upload.fail_server_video_arr = [];
                    }
                });

            },
            error: function () {
                //提交后 隐藏加载层
                self.hideLoadingMsg();
                $.wx_upload.success_img_arr = [];
                $.wx_upload.fail_local_img_arr = [];
                $.wx_upload.fail_server_img_arr = [];
                $.wx_upload.success_video_arr = [];
                $.wx_upload.fail_local_video_arr = [];
                $.wx_upload.fail_server_video_arr = [];
                jTips("非常抱歉，出现了点小问题，可以尝试刷新重试！");
            },
        });
    };
</script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/aliyun-upload-sdk/aliyun-upload-sdk-1.5.0.min.js"></script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/aliyun-upload-sdk/lib/es6-promise.min.js"></script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/aliyun-upload-sdk/lib/aliyun-oss-sdk-5.3.1.min.js"></script>
<div class="upload">
  <div>
	<input type="file" id="fileUpload" style="position:absolute;top:0;left:0;">
	<label class="status" style="display:none">上传状态: <span id="status"></span></label>
  </div>
  <div class="upload-type" style="display:none">
	上传方式一, 使用 UploadAuth 上传:
	<button id="authUpload" >开始上传</button>
	<span></span>
  </div>
</div>
<script>
    $(document).ready(function () {
      /** 
       * 创建一个上传对象
       * 使用 UploadAuth 上传方式
       */
      function createUploader () {
        var uploader = new AliyunUpload.Vod({
          timeout: 60000,
          partSize: 1048576,
          parallel:  5,
          retryCount:  3,
          retryDuration: 2,
          region: 'cn-shanghai',
          userId: 1494184150208356,
          // 添加文件成功
          addFileSuccess: function (uploadInfo) {
            console.log('addFileSuccess')
            //$('#authUpload').attr('disabled', false)
            $('#resumeUpload').attr('disabled', false)
            $('#status').text('添加文件成功, 等待上传...')
            console.log("addFileSuccess: " + uploadInfo.file.name)
			var _media_list = '<li class="vod_li"><div class="favorites_play_icon" ></div><img src="' + ROOT_URL + "public/mobile/img/wait_check_bg.png" + '"><div class="del_btn" vod_id="' + uploadInfo.videoId + '"></div></li>';
			$(".media_list").html(_media_list);
			$.wx_upload.hideLoadingMsg();
          },
          // 开始上传
          onUploadstarted: function (uploadInfo) {
			if (!uploadInfo.videoId) {
				  <?php  if($school['bjqstyle'] =='new') { ?>
					let description = "班级圈视频";
					let tag = $("#bj_id").find("option:selected").text();
				  <?php  } else { ?>
					let description = "校园动态视频";
					let tag = "校园圈";
				  <?php  } ?>
				  var createUrl = "<?php  echo $this->createMobileUrl('bjqajax',array('op'=>'CreateAliUploadVideo','schoolid'=> $schoolid))?>" + "&title=<?php  echo $teachers['tname'];?>老师"  + "&filename=" + uploadInfo.file.name + "&description="+description+"&tag="+tag+"&coverurl="
				  $.get(createUrl, function (data) {
					var uploadAuth = data.UploadAuth
					var uploadAddress = data.UploadAddress
					var videoId = data.VideoId
					uploader.setUploadAuthAndAddress(uploadInfo, uploadAuth, uploadAddress,videoId)
				  }, 'json')
				  $('#progress_text').text('开始上传视频...');
				  
				  console.log(uploadInfo);
				  console.log("文件开始上传  onUploadStarted:" + uploadInfo.file.name + ", endpoint:" + uploadInfo.endpoint + ", bucket:" + uploadInfo.bucket + ", object:" + uploadInfo.object)
            } else {
				  var refreshUrl = "<?php  echo $this->createMobileUrl('bjqajax',array('op'=>'CreateAliUploadVideo','schoolid'=> $schoolid))?>&VideoId=" + uploadInfo.videoId
				  $.get(refreshUrl, function (data) {
					var uploadAuth = data.UploadAuth
					var uploadAddress = data.UploadAddress
					var videoId = data.VideoId
					uploader.setUploadAuthAndAddress(uploadInfo, uploadAuth, uploadAddress,videoId)
				  }, 'json')
            }
          },
          // 文件上传成功
          onUploadSucceed: function (uploadInfo) {
		  
			//$('#aliyun_progress').hide();
			//$('#aliyun_progress_bg').hide();
			
			$('#progress_text').text('处理视频中...');
            $.wx_upload.success_media_id = uploadInfo.videoId;
			console.log($.wx_upload);
			//$.wx_upload.hideLoadingMsg();
			 if ($.wx_upload.fail_local_img_arr.length > 0 || $.wx_upload.fail_server_img_arr.length > 0 || $.wx_upload.fail_local_video_arr.length > 0 || $.wx_upload.fail_server_video_arr.length > 0) {
				$.wx_upload.showErrorMsg();
			} else {
				$.wx_upload.wxsdkSendData($.wx_upload.success_img_arr, $.wx_upload.success_video_arr, $.wx_upload.video_time, uploadInfo.videoId);
			}
			console.log(uploadInfo);
            console.log("文件上传成功  onUploadSucceed: " + uploadInfo.file.name + ", videoid:" + uploadInfo.videoId + ", bucket:" + uploadInfo.bucket + ", object:" + uploadInfo.object)
            $('#status').text('文件上传成功!')
          },
          // 文件上传失败
          onUploadFailed: function (uploadInfo, code, message) {
            console.log("文件上传失败  onUploadFailed: file:" + uploadInfo.file.name + ",code:" + code + ", message:" + message)
            $('#status').text('文件上传失败!')
          },
          // 取消文件上传
          onUploadCanceled: function (uploadInfo, code, message) {
            console.log("文件上传已暂停  Canceled file: " + uploadInfo.file.name + ", code: " + code + ", message:" + message)
            $('#status').text('文件上传已暂停!')
          },
          // 文件上传进度，单位：字节, 可以在这个函数中拿到上传进度并显示在页面上
          onUploadProgress: function (uploadInfo, totalSize, progress) {
            console.log("文件上传中   onUploadProgress:file:" + uploadInfo.file.name + ", fileSize:" + totalSize + ", percent:" + Math.ceil(progress * 100) + "%")
            var progressPercent = Math.ceil(progress * 100)
            //$('#auth-progress').text(progressPercent)
            //$('#status').text('文件上传中...')
			$.wx_upload.showLoadingMsg();
			if (progressPercent) {
				$('#progress_text').text('视频上传' + progressPercent + "%");
			}
          },
          // 上传凭证超时
          onUploadTokenExpired: function (uploadInfo) {
            $('#status').text('文件上传超时!')

            let refreshUrl = "<?php  echo $this->createMobileUrl('bjqajax',array('op'=>'CreateAliUploadVideo','schoolid'=> $schoolid))?>&VideoId=" + uploadInfo.videoId
            $.get(refreshUrl, function (data) {
              var uploadAuth = data.UploadAuth
              uploader.resumeUploadWithAuth(uploadAuth)
              console.log('upload expired and resume upload with uploadauth ' + uploadAuth)
            }, 'json')
          },
          // 全部文件上传结束
          onUploadEnd: function (uploadInfo) {
            $('#status').text('文件上传完毕!')
            console.log('文件上传完毕!')
          }
        })
        return uploader
      }

      var uploader = null
	$('#local_media_btn2').on('click', function () {
		$('#fileUpload').click();
	})

      $('#fileUpload').on('change', function (e) {
        var file = e.target.files[0]
        if (!file) {
          alert("请先选择需要上传的文件!")
          return
        }
        var Title = file.name
        var userData = '{"Vod":{}}'
        if (uploader) {
          uploader.stopUpload()
          $('#auth-progress').text('0')
          $('#status').text("")
        }
        uploader = createUploader()
        console.log(uploader)
        uploader.addFile(file, null, null, null, userData)
        $('#pauseUpload').attr('disabled', true)
        $('#resumeUpload').attr('disabled', true)
      })
      $('#authUpload').on('click', function () {
        if (uploader !== null) {
          uploader.startUpload()
          $('#pauseUpload').attr('disabled', false)
        }
      })
      // 暂停上传
      $('#pauseUpload').on('click', function () {
        if (uploader !== null) {
          uploader.stopUpload()
          $('#resumeUpload').attr('disabled', false)
          $('#pauseUpload').attr('disabled', true)
        }
      })
      $('#resumeUpload').on('click', function () {
        if (uploader !== null) {
          uploader.startUpload()
          $('#resumeUpload').attr('disabled', true)
          $('#pauseUpload').attr('disabled', false)
        }
      })

    })

</script>
</html>