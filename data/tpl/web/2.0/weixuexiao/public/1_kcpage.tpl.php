<?php defined('IN_IA') or exit('Access Denied');?><style>
.parent_notify{padding: 12px 0 12px 25px;background:url(<?php echo MODULE_URL;?>public/mobile/img/parent_notify_icon.png) no-repeat #fff;background-size:19px 15px;background-position:15px center;color:#999;border-top: 1px solid #f0f0f2;margin-bottom: 10px;text-indent: 1em;}
.school_option li:after{content: "";width:9px;height:16px;position:absolute;right:15px;top:15px;background: url(<?php echo MODULE_URL;?>public/mobile/img/right_arrow.png) no-repeat;background-position: center center;background-size: 9px 16px;}
.head {position: relative;width: 100%;<?php  if($stutop['status'] == 0 || $stutop['status'] == 1 || $stutop['status'] == 2) { ?>background: url(<?php  echo tomedia($stutop['icon'])?>);<?php  } ?>background-size: 100% auto;-moz-background-size: 100% auto;-webkit-background-size: 100% auto;}
.head .pdetail {height: 120px;padding: 30px 0 0 20px;-webkit-box-sizing: border-box;}
.head .pdetail .img-circle {float: left;width: 66px;height: 86px;overflow: hidden;margin-right: 10px;}
.head .pdetail .img-circle img {border-radius: 50%;width: 66px;height: 66px;}
.head .pdetail .img-circle span {font-size: 14px;line-height: 10px;padding-left: 5px;color: #E8ECF1;font-weight: bolder;}
.head .pdetail .pull-left span.name {font-size: 20px;display: inline-block;max-width: 150px;height: 25px;line-height: 25px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;word-break: keep-all;}
.head .pdetail .pull-left span {display: block;color: #FFF;line-height: 20px;}
.head .pdetail .pull-left span.type {font-size: 14px;}
/**顶部滑动课程**/
.kcbox_xlkc{ position: relative; width: 100%; height: auto; background-color: #f0f0f2; margin-top: 5px; } .kcbox_xlkc .title_box{padding-bottom: 9px;background-color: #fff;} .title_box .title_text{font-size: 14px; font-weight: bold;margin-left: 9px; padding-top: 9px;} .xlkc_box{width: 100%; overflow: hidden; overflow-x: scroll; display: inline-flex; position: relative; padding-bottom: 5px; white-space: nowrap;} .childrenBox{ width: 100%; height: 100%; } .kcboxs{width: 40%;float: left;padding: 4px;margin: 6px;height: 186px;background-color: #fff;} .cutImgOutBox{position: relative;} .cutImgOutBox .cImg{ width: 100%; height: 106px;} .kc_name{ width: 100%; max-height: 32px; height: 32px; overflow: hidden; } .kc_name_content{font-size: 12px;} .zhuliclass{ float:right; } .zlheader{ width: 17px; border-radius: 17px; margin-left: -13px; } .fans_box{ width: 100%; margin-top: 5px; height: 23px; } .fans_text_title{ font-size: 11px; color: #8c8787; float: left; } .pay_cose{ font-size: 12px; font-weight: bold; color: red; float: left; }	

/**4宫格课程**/
.kcbox_top{ width: 100%; height: auto; background-color: #fff; } .title_box{  } .title_box .title_text{font-size: 14px; font-weight: bold;margin-left: 9px; padding-top: 9px;} .childrenBox{ width: 100%; height: 100%; } .mofang{width: 50%;float: left;padding: 2%;background-color: #fff;} .cutImgOutBox{position: relative;} .cutImgOutBox .cImg{ width: 100%; } .kc_name{ width: 160px; max-height: 32px; height: 32px; overflow: hidden; } .kc_name_content{font-size: 12px;} .zhuliclass{ float:right; } .zlheader{ width: 17px; border-radius: 17px; margin-left: -13px; } .fans_box{ width: 100%; margin-top: 5px; height: 23px; } .fans_text_title{ font-size: 11px; color: #8c8787; float: left; } .pay_cose{ font-size: 12px; font-weight: bold; color: red; float: left; }
.xlkc_img{width: 58%;}
/**魔方**/
.kcbox_mfkc{ position: relative; width: 100%; height: 213px; background-color: #f0f0f2; display: inline-flex;margin-top: 7px;} .left_mfkc{ width: 40%; height: 213px; } .mf_left_img{ width: 100%; height: 213px; } .mf_left_img .left_img{ width: inherit; height: inherit; } .right_mfkc{ width: 60%; height: 213px; margin-left: 1px; } .mf_right_img{ width: 100%; height: 106px; overflow-x: hidden; } .mf_right_img .right_img{ width: inherit; height: auto; position: relative; }
/**团购抢购标签 列表**/
.label-danger{display: inline-block;padding: 2px 5px 3px;;font-size: 12px;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: 3px;}
.class_over{background-color: rgb(222, 220, 220);opacity: 0.5;} .marks{ position: absolute; top: 0; left: 34%; background-repeat: no-repeat; background-position: 0 0; background-size: contain; background-color: transparent; } .mark{ position: absolute; top: 5px; left: 5px; background-repeat: no-repeat; background-position: 0 0; background-size: contain; background-color: transparent; } .marks.class_over_tip{ width: 152px; height: 89px; background-image: url(<?php echo MODULE_URL;?>public/mobile/img/class_overr.png); } .mark.mark_rush{ width: 50%; height: 40px; background-image:url(<?php echo MODULE_URL;?>public/mobile/img/mark-rush.png) } .mark.mark_group{ width: 50%; height: 40px; background-image:url(<?php echo MODULE_URL;?>public/mobile/img/mark-group.png) }
/**团购抢购标签 顶部推荐**/
.markr{ position: absolute; top: 0px; right: 0px; background-repeat: no-repeat; background-position: 0 0; background-size: contain; background-color: transparent; }  .markr.mark_rush{ width: 35%; height: 100%; background-image:url(<?php echo MODULE_URL;?>public/mobile/img/mark-rushr.png) } .markr.mark_group{ width: 35%; height:100%; background-image:url(<?php echo MODULE_URL;?>public/mobile/img/mark-groupr.png) }
/**名师**/
.teachers_box{ width: 100%; height: 100%; position: absolute; margin-top: 7px; background-color: #fff;}
.tea_box_title { width: 100%; text-align: center; padding: 14px; font-size: 17px; }
.tea_box_list{ width: 100%; position: relative; }
.tea_box{ list-style: none; width: 50%; float: left; text-align: center; background-color: #fff; padding-bottom: 13px; }
.header_box{ width: 51px; height: 51px; margin-left: 35%; margin-top: 12px; border-radius: 50px; background-color: #fff; border: 1px solid #dad6d6; }
.header_box .header_img{ width: 45px; border-radius: 50%; margin-top: 2px; }
.tea_name{ font-size: 13px; }
.tea_info{ font-size: 12px; color: #908d8d; }
.school_box{ width: 100%; }
.school_box .school_img{ width: 50%; }
.text_614 { border-left: 1px solid rgba(236, 238, 241, 1); width: 1px; height: 115px; position: absolute; margin-top: 18px; }
.text_615 { border-top: 1px solid rgba(236, 238, 241, 1); width: 115px; height: 1px; position: absolute; margin-left: 10%; }
</style>
<div class="app-content only-one-page" style="margin-top: 24px;">
	<!--若只有一个页面，就给app-content添加class: only-one-page; 内部样式定义它的高度：height: 1136px * N-->
	<div class="modules">
		<div>
			<div class="head">
				<div class="pdetail"  id="stuhead">
				</div> 
				<script type="text/javascript">						
					$(document).ready(function() {
						$("#stutop").hide();
					});
					$("#stuhead").click(function(){
						$(".editor").hide();
						$("#stutop").show();
					});
				</script>
			</div>
		</div>
		<div class="tuijian">
			<!-- 精品课程开始 -->
			<div class="banner">				
				<div class="parent_notify" style="padding: 12px 0 12px 35px; margin: 0;">
					<p style="height: 16px; font-size: 12px; color: #999999">
						<a style="color:#999;font-size:12px" style="display:block;color:#999">精品课程</a>
					</p>
				</div>
				<div style="margin-bottom: 10px"></div>
				<div class="parent_option">
				<!-- 精品课程 -->
				<?php  if(is_array($jpkc)) { foreach($jpkc as $row) { ?>
					<div class="childrenBox">
						<div class="mofang" id="mofang<?php  echo $row['id'];?>" onclick="shouweditor(<?php  echo $row['id'];?>)">
							<div class="childrenBox">
								<div class="imageC">
									<div class="cutImgOutBox">
										<img class="cImg" src="<?php  echo tomedia($row['icon'])?>">
										<span class="deleteImages"  title="删除" onclick="del(this,<?php  echo $row['id'];?>,21)"></span>
									</div>
								</div>
								<div class="kc_name">
									<p class="kc_name_content"><?php  echo $row['name'];?></p>
								</div>
								<div class="fans_box">
									<span class="zhuliclass">
										<img class="zlheader" src="<?php  echo $_W['siteroot'];?><?php  echo $_W['config']['upload']['attachdir'];?>/images/weixuexiao/img/iRJHJnR939C6YC8nrn4598Pnnh0n1J.jpg">
										<img class="zlheader" src="<?php  echo $_W['siteroot'];?><?php  echo $_W['config']['upload']['attachdir'];?>/images/weixuexiao/img/MBeaDvXMtV8aOA8BXV4was878RvRmT.jpg">
										<img class="zlheader" src="<?php  echo $_W['siteroot'];?><?php  echo $_W['config']['upload']['attachdir'];?>/images/weixuexiao/img/ZAyrZFSmdydMLsMGYRT5y77aL5IDF3.jpg">
										<img class="zlheader" src="<?php  echo $_W['siteroot'];?><?php  echo $_W['config']['upload']['attachdir'];?>/images/weixuexiao/img/jFTNVvV1UvuR1AhAUTYUYRTyV11X5F.jpg">
										<img class="zlheader" src="<?php  echo $_W['siteroot'];?><?php  echo $_W['config']['upload']['attachdir'];?>/images/weixuexiao/img/egW7zriT2d8qZQJWzI49itSDsj468J.jpg">
									</span>
									<p class="fans_text_title">6865人学过</p>
								</div>
								<div class="pay">
									<p class="pay_cose">￥149.00</p>
								</div>
							</div>
						</div>
					</div>	
					<script type="text/javascript">
						$(document).ready(function() {
							$("#iconeditor<?php  echo $row['id'];?>").hide();
						});
						$("#mofang<?php  echo $row['id'];?>").click(function(){
							$(".editor").hide();
							$("#iconeditor<?php  echo $row['id'];?>").show();
						});
					</script>
				<?php  } } ?>	
				<div class="clear"></div>
				</div>
			</div>
			<!-- 精品课程结束 -->
			
			<div class="clear"></div>
			
			<!-- 中部推荐内容开始 -->
			<div class="kcbox_mfkc">
				<?php  if($kccommend['0']) { ?>
				<div class="left_mfkc" onclick="shouweditor(<?php  echo $kccommend[0]['id'];?>)">
					<div class="mf_left_img mofang_two">
						<img class="left_img" src="<?php  echo tomedia($kccommend[0]['icon'])?>">
						<span class="deleteImages_two"  title="删除" onclick="del(this,<?php  echo $kccommend[0]['id'];?>,22)"></span>
					</div>
				</div>	
				<?php  } ?>
				<div class="right_mfkc" >
					<?php  if($kccommend['1']) { ?>
					<div class="mf_right_img mofang_three" onclick="shouweditor(<?php  echo $kccommend[1]['id'];?>)">
						<img class="right_img" src="<?php  echo tomedia($kccommend[1]['icon'])?>">
						<span class="deleteImages_three"  title="删除" onclick="del(this,<?php  echo $kccommend[1]['id'];?>,22)"></span>
					</div>
					<?php  } ?>
					<?php  if($kccommend['2']) { ?>
					<div class="mf_right_img mofang_four" onclick="shouweditor(<?php  echo $kccommend[2]['id'];?>)">
						<img class="right_img" src="<?php  echo tomedia($kccommend[2]['icon'])?>">
						<span class="deleteImages_four"  title="删除" onclick="del(this,<?php  echo $kccommend[2]['id'];?>,22)"></span>
					</div>
					<?php  } ?>
				</div>
			</div>
			<!-- 中部推荐内容结束 -->
			
			<div class="clear"></div>
			
			<!-- 推荐团购开始 -->
			<div class="kcbox_xlkc">
				<div class="title_box"><p class="title_text">推荐团购</p></div>
				<div class="xlkc_box">
					<?php  if(is_array($kcteam)) { foreach($kcteam as $row) { ?>
					<div class="kcboxs mofang" id="mofang<?php  echo $row['id'];?>" onclick="shouweditor(<?php  echo $row['id'];?>)">
						<div class="childrenBox">
							<div class="imageC">
								<div class="cutImgOutBox">
									<img class="cImg" src="<?php  echo tomedia($row['icon'])?>">
									<span class="deleteImages"  title="删除" onclick="del(this,<?php  echo $row['id'];?>,21)"></span>
									<div class="mark_rush markr text_center"></div>
								</div>
							</div>
							<div class="kc_name">
								<p class="kc_name_content"><?php  echo $row['name'];?></p>
							</div>
							<div class="fans_box">
								<span class="zhuliclass">
									<img class="zlheader" src="<?php  echo $_W['siteroot'];?><?php  echo $_W['config']['upload']['attachdir'];?>/images/weixuexiao/img/iRJHJnR939C6YC8nrn4598Pnnh0n1J.jpg">
									<img class="zlheader" src="<?php  echo $_W['siteroot'];?><?php  echo $_W['config']['upload']['attachdir'];?>/images/weixuexiao/img/MBeaDvXMtV8aOA8BXV4was878RvRmT.jpg">
									<img class="zlheader" src="<?php  echo $_W['siteroot'];?><?php  echo $_W['config']['upload']['attachdir'];?>/images/weixuexiao/img/ZAyrZFSmdydMLsMGYRT5y77aL5IDF3.jpg">
									<img class="zlheader" src="<?php  echo $_W['siteroot'];?><?php  echo $_W['config']['upload']['attachdir'];?>/images/weixuexiao/img/jFTNVvV1UvuR1AhAUTYUYRTyV11X5F.jpg">
									<img class="zlheader" src="<?php  echo $_W['siteroot'];?><?php  echo $_W['config']['upload']['attachdir'];?>/images/weixuexiao/img/egW7zriT2d8qZQJWzI49itSDsj468J.jpg">
								</span>
								<p class="fans_text_title">6865人学过</p>
							</div>
							<div class="pay">
								<p class="pay_cose">￥149.00</p>
							</div>
						</div>
					</div>
					<?php  } } ?>
				</div>
			</div>
			<!-- 推荐团购结束-->
		</div>
		
		<!-- 名师推荐开始 -->
		<div class="teacher" style="display:none">
			<div class="teachers_box">
				<div class="tea_box_title">名师推荐</div>
				<div class="tea_box_list">
					<?php  $kccount = count($kcteacher);?>
					<?php  if(is_array($kcteacher)) { foreach($kcteacher as $index => $row) { ?>
					<li class="tea_box mofang_ms" onclick="shouweditor(<?php  echo $row['id'];?>)">
						<div class="text_614"></div>
						<div class="header_box">
							<span class="deleteImage_ms"  title="删除" onclick="del(this,<?php  echo $row['id'];?>,24)"></span>
							<img class="header_img" src="<?php  echo tomedia($row['icon'])?>" style="height:45px;">
						</div>
						<div class="tea_name"><?php  echo $row['name'];?></div>
						<div class="tea_info"><?php  echo $row['beizhu'];?></div>
						<div class="school_box">
							<img class="school_img" src="<?php  echo tomedia($row['icon2'])?>" style="height:37.76px;">
						</div>
						<?php  if(($kccount-2) > $index) { ?>
						<div class="text_615"></div>
						<?php  } ?>
					</li>
					<?php  } } ?>
				</div>
			</div>
		</div>
		<!-- 名师推荐结束-->
	</div>
</div>