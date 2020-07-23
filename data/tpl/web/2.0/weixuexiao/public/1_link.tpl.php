<?php defined('IN_IA') or exit('Access Denied');?>	<div class="modal fade" id="Jiaoyu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="  margin-top: 60px;    z-index: 11111;">
		<div class="modal-dialog" style="height: 680px; overflow-y: auto;">
			<div class="modal-content" style="padding: 15px">
				<style type="text/css">
				.link-browser ul li{width: 120px; }
				.list-group .list-group-item a{color:#428bca;}
				.link-browser .page-header, .link-modal .page-header{margin:25px 0 10px;}
				.link-browser .page-header:first-child, .link-modal .page-header:first-of-type{margin-top:0;}
				.link-browser div.btn, .link-modal div.btn{min-width:100px; text-align:center; margin:5px 2px;}
				</style>
				<div class="modal-content">
				<div class="link-browser">
				</div>
				<div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">取消</button></div>
				</div>
				<!-- /.modal-content -->
			</div>
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- 课程选择 -->
	<div class="modal fade" style="min-width: 583px!important;" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
		<div class="modal-dialog">
			<input type="hidden" id="btnname" value="">
			<input type="hidden" id="url" value="">
			<input type="hidden" id="iconpics" value="">
			<input type="hidden" id="imgsrc_this" value="">
			<div class="modal-content" style="border-radius: 20px;">
				<div class="modal-header">
					<h4 class="modal-title" style="text-align:center;color:#333;font-size: 17px;">选择课程</h4>
				</div>
				<div class="modal-body" style="width: 100%;">
					<div class="js-menu-container" ng-controller="MenuCtrl" ng-cloak>
						<div class="panel we7-panel">
							<div class="panel-body system-menu-list">
								<ul class="one">
									<?php  if(is_array($tcourse)) { foreach($tcourse as $v) { ?>
									<li class="menu-item">
										<div class="input-group text-info">
											<button class="btn btn-default" onclick="kcchose(<?php  echo $v['id'];?>,'<?php  echo $v['name'];?>','<?php  echo $v['bigimg'];?>')"><?php  echo $v['name'];?></button>
										</div>
									</li>
									<?php  } } ?>
								</ul>
							</div>
						</div>
					</div>
					<script type="text/javascript">
					function kcchose(id,name,bigimg){
						<!-- 链接地址拼接 -->
						hrefs = "<?php  echo $this->createMobileUrl('kcinfo', array('schoolid'=>$schoolid), true)?>" + "&id="+ id;
						<!-- 图片的绝对路径拼接 -->
						let imgsrc = "<?php  echo $_W['siteroot'];?><?php  echo $_W['config']['upload']['attachdir'];?>/"+bigimg;
						<!-- 获取课程名称的id -->
						let btnname = $("#btnname").val();
						<!-- 获取url的id -->
						let url = $("#url").val();
						<!-- 获取图片填写text的id -->
						let iconpics = $("#iconpics").val();
						<!-- 获取图片img的id -->
						let imgsrc_this = $("#imgsrc_this").val();
						console.log(imgsrc_this);
						$("#"+btnname).val(name);
						$("#"+url).val(hrefs);
						$("#"+iconpics).val(bigimg);
						$("#"+imgsrc_this).attr('src',imgsrc);
						$('#Modal3').modal('toggle');
					}
					</script>
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

	<!-- 名师选择 -->
	<div class="modal fade" style="min-width: 583px!important;" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
		<div class="modal-dialog">
			<input type="hidden" id="tname" value="">
			<input type="hidden" id="url" value="">
			<div class="modal-content" style="border-radius: 20px;">
				<div class="modal-header">
					<h4 class="modal-title" style="text-align:center;color:#333;font-size: 17px;">选择老师</h4>
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
										<?php  if(is_array($menu['alltea'])) { foreach($menu['alltea'] as $r) { ?>
										<button class="btn btn-default" onclick="kcteacher(<?php  echo $r['id'];?>,'<?php  echo $r['tname'];?>')"><?php  echo $r['tname'];?></button>
										<?php  } } ?>
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
											<button class="btn btn-default" onclick="kcteacher(<?php  echo $row['id'];?>,'<?php  echo $row['tname'];?>')"><?php  echo $row['tname'];?></button>
											<?php  } } ?>
											</div>
										</li>
									</ul>
								</li>
							</ul>
							</div>
						</div>
					</div>
					<script type="text/javascript">
					function kcteacher(id,tname){
						<!-- 链接地址拼接 -->
						hrefs = "https://manger.daren007.com/app/index.php?i="+"<?php  echo $weid;?>" + "&c=entry&m=weixuexiao" + "&do=" + 'tcinfo' + "&schoolid=" + "<?php  echo $schoolid;?>&tid="+ id;
						console.log(hrefs);
						<!-- 获取课程名称的id -->
						let btnname = $("#tname").val();
						<!-- 获取url的id -->
						let url = $("#url").val();
						$("#"+btnname).val(tname);
						$("#"+url).val(hrefs);
						$('#Modal4').modal('toggle');
					}

					</script>

					<script type="text/javascript">
						$(function(){
//							angular.bootstrap($('.js-menu-container'), ['systemApp']);
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

<script type="text/javascript">
function showJiaoyuDialog(urlid,type,dosid) {
	 $('#Jiaoyu').modal('show');
	 $("#bodyhidden").show();
	$('#Jiaoyu').find(".link-browser").children().remove();
	var urlid = urlid;
	var types = type;
	var dosid = dosid;
	var alertHtml = "";
		if (types ==1) {
            alertHtml += "<div class=\"page-header\">";
            alertHtml += "<h4><i class=\"fa fa-folder-open-o\"></i>公共前端</h4>";
            alertHtml += "</div>";
            alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('detail','" + urlid + "');\" title=\"首页\">首页</div>";
            alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('user','" + urlid + "');\" title=\"个人中心\">个人中心</div>";
            alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('jianjie','" + urlid + "');\" title=\"学校简介\">学校简介</div>";
            alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('bangding','" + urlid + "');\" title=\"微信绑定\">微信绑定</div>";
            alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('cooklist','" + urlid + "');\" title=\"食谱\">食谱</div>";
            alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('kc','" + urlid + "');\" title=\"课程列表\">课程列表</div>";
            alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('signup','" + urlid + "');\" title=\"在线报名\">在线报名</div>";
            alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('zhaosheng','" + urlid + "');\" title=\"招生简章\">招生简章</div>";
            alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('teachers','" + urlid + "');\" title=\"教师风采\">教师风采</div>";
            alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('myschool','" + urlid + "');\" title=\"教师中心\">教师中心</div>";
            alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('galist1','" + urlid + "');\" title=\"集体活动\">集体活动</div>";
            alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('horder','" + urlid + "');\" title=\"家政家教\">家政家教</div>";
            alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('goodstemp','" + urlid + "');\" title=\"商城\">商城</div>";
			<?php  if(vis()) { ?>
            alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks_hook('hookviscom','visitors','" + urlid + "');\" title=\"访客预约\">访客预约</div>";
			<?php  } ?>
			<?php  if($sale) { ?>
			 alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks_hook('hookcom','onlinekc','" + urlid + "');\" title=\"自定义课程列表\">自定义课程列表</div>";
			<?php  } ?>
		}else if (types ==3){
			alertHtml += "<div class=\"page-header\">";
			alertHtml += "<h4><i class=\"fa fa-folder-open-o\"></i>底部链接-学生家长端</h4>";
			alertHtml += "</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('detail','"+urlid+"','"+dosid+"');\" title=\"首页\">本校首页</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('sbjq','" + urlid + "','"+dosid+"');\" title=\"班级圈\">班级圈</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('callbook','" + urlid + "','"+dosid+"');\" title=\"通讯录\">通讯录</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('user','" + urlid + "','"+dosid+"');\" title=\"个人中心\">个人中心</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('xsqj','"+urlid+"','"+dosid+"');\" title=\"请假\">请假</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('slylist','" + urlid + "','"+dosid+"');\" title=\"留言列表\">留言列表</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('sbjqfabu','" + urlid + "','"+dosid+"');\" title=\"发班级圈\">发班级圈</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('sxcfb','"+urlid+"','"+dosid+"');\" title=\"发布照片\">发布照片</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('sclistforxs','" + urlid + "','"+dosid+"');\" title=\"在校表现\">在校表现</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('szjhlist','" + urlid + "','"+dosid+"');\" title=\"周计划\">周计划</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('allcamera','" + urlid + "','"+dosid+"');\" title=\"校园视频\">校园视频</div>";
			<?php  if($sale) { ?>
			 alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks_hook('hookcom','onlinekc','" + urlid + "');\" title=\"自定义课程列表\">自定义课程列表</div>";
			<?php  } ?>
		}else if (types ==4){
			alertHtml += "<div class=\"page-header\">";
			alertHtml += "<h4><i class=\"fa fa-folder-open-o\"></i>底部链接-教师端</h4>";
			alertHtml += "</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('detail','"+urlid+"','"+dosid+"');\" title=\"首页\">本校首页</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('bjq','" + urlid + "','"+dosid+"');\" title=\"班级圈\">班级圈</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('tongxunlu','" + urlid + "','"+dosid+"');\" title=\"通讯录\">通讯录</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('myschool','" + urlid + "','"+dosid+"');\" title=\"个人中心\">个人中心</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('qingjia','"+urlid+"','"+dosid+"');\" title=\"请假\">请假</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('zfabu','" + urlid + "','"+dosid+"');\" title=\"发布作业\">发布作业</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('fabu','" + urlid + "','"+dosid+"');\" title=\"发班级通知\">发班级通知</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('bjqfabu','"+urlid+"','"+dosid+"');\" title=\"发班级圈\">发班级圈</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('xcfb','" + urlid + "','"+dosid+"');\" title=\"发布照片\">发布照片</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('tzjhlist','" + urlid + "','"+dosid+"');\" title=\"周计划\">周计划</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('tmycourse','" + urlid + "','"+dosid+"');\" title=\"我的课程\">我的课程</div>";
			<?php  if($sale) { ?>
			 alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks_hook('hookcom','onlinekc','" + urlid + "');\" title=\"自定义课程列表\">自定义课程列表</div>";
			<?php  } ?>
		}else{
			alertHtml += "<div class=\"page-header\">";
			alertHtml += "<h4><i class=\"fa fa-folder-open-o\"></i>家长端</h4>";
			alertHtml += "</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('allcamera','" + urlid + "');\" title=\"实时画面\">实时画面</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('checkcard','" + urlid + "');\" title=\"考勤卡\">考勤卡</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('calendar','" + urlid + "');\" title=\"考勤记录\">考勤记录</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('callbook','" + urlid + "');\" title=\"通讯录\">通讯录</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('chaxun','" + urlid + "');\" title=\"成绩\">成绩</div>";
			//alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('jiaoliu','" + urlid + "');\" title=\"对话班主任\">对话班主任</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('slylist','" + urlid + "');\" title=\"消息留言\">消息留言</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('myinfo','" + urlid + "');\" title=\"学生基本信息\">学生基本信息</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('myclass','" + urlid + "');\" title=\"已报课程\">已报课程</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('mytecher','" + urlid + "');\" title=\"我的老师\">我的老师</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('order','" + urlid + "');\" title=\"缴费中心\">缴费中心</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('sbjq','" + urlid + "');\" title=\"学生班级圈\">学生班级圈</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('sbjqfabu','" + urlid + "');\" title=\"发布班级圈\">发布班级圈</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('sxclist','" + urlid + "');\" title=\"相册\">相册</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('snoticelist','" + urlid + "');\" title=\"通知\">通知</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('szjhlist','" + urlid + "');\" title=\"周计划\">周计划</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('szuoyelist','" + urlid + "');\" title=\"作业\">作业</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('sxcfb','" + urlid + "');\" title=\"发布照片\">发布照片</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('xsqj','" + urlid + "');\" title=\"学生请假\">学生请假</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('sclistforxs','" + urlid + "');\" title=\"在校表现\">在校表现</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('wxsign','" + urlid + "');\" title=\"签到\">微信进离校签到</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('leavelist','" + urlid + "');\" title=\"请假记录\">请假记录</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('useredit','" + urlid + "');\" title=\"个人设置\">个人设置</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('myfamily','" + urlid + "');\" title=\"我的家庭\">我的家庭</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('timetable','" + urlid + "');\" title=\"一周课表\">一周课表</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('schoolbus','" + urlid + "');\" title=\"校车轨迹\">校车轨迹</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('syzxx','" + urlid + "');\" title=\"校长信箱\">校长信箱</div>";
			<?php  if(is_showgkk()) { ?>
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('sgkkpjjl','" + urlid + "');\" title=\"评价的公开课\">评价的公开课</div>";
			<?php  } ?>
			<?php  if(anhui()) { ?>
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('salfcard','" + urlid + "');\" title=\"学生安全\">学生安全</div>";
			<?php  } ?>
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('galist2','" + urlid + "');\" title=\"集体活动\">集体活动</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('shrecord','" + urlid + "');\" title=\"家政家教预约记录\">家政家教预约记录</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('sgoodslist','" + urlid + "');\" title=\"商城\">商城</div>";
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('chongzhi','" + urlid + "');\" title=\"充值\">充值</div>";
			<?php  if(is_showpf()) { ?>
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('smyscore','" + urlid + "');\" title=\"我的评分\">我的评分</div>";
			<?php  } ?>
			<?php  if($sale) { ?>
			 alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks_hook('hookcom','onlinekc','" + urlid + "');\" title=\"自定义课程列表\">自定义课程列表</div>";
			 alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('mysaleinfo1','" + urlid + "');\" title=\"我的团购\">我的团购</div>";
			 alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('mysaleinfo2','" + urlid + "');\" title=\"我的助力\">我的助力</div>";
			<?php  } ?>
			<?php  if(is_TestFz()) { ?>
			alertHtml += "<div class=\"btn btn-default\" onclick=\"clicklinks('mysharelist','" + urlid + "');\" title=\"好友体验\">好友体验</div>";
			<?php  } ?>

		}
	$('#Jiaoyu').find(".link-browser").append(alertHtml);
}
	$("#Jiaoyu").click(function(){
		$("#bodyhidden").hide();
	});

	function clicklinks(href, urlid, dosid) {
		var urlid = urlid;
		var href = href;
		var dosid = dosid;
		var ipt = $("#"+urlid);
			if (ipt){
				if(href == 'galist1'){
					hrefs = "./index.php?i="+"<?php  echo $weid;?>" + "&c=entry&m=weixuexiao" + "&do=galist&schoolid=" + "<?php  echo $schoolid;?>";
				}else if(href == 'galist2'){
					hrefs = "./index.php?i="+"<?php  echo $weid;?>" + "&c=entry&m=weixuexiao" + "&do=galist&op=signup&schoolid=" + "<?php  echo $schoolid;?>";
				}else if(href == 'mysaleinfo1'){
					hrefs = "./index.php?i="+"<?php  echo $weid;?>" + "&c=entry&m=weixuexiao" + "&do=mysaleinfo&op=tuan&schoolid=" + "<?php  echo $schoolid;?>";
				}else if(href == 'mysaleinfo2'){
					hrefs = "./index.php?i="+"<?php  echo $weid;?>" + "&c=entry&m=weixuexiao" + "&do=mysaleinfo&op=zhuli&schoolid=" + "<?php  echo $schoolid;?>";
				}else{
					hrefs = "./index.php?i="+"<?php  echo $weid;?>" + "&c=entry&m=weixuexiao" + "&do=" + href + "&schoolid=" + "<?php  echo $schoolid;?>";
				}
				$("#"+urlid).val(hrefs);
				$("#"+dosid).val(href);
				$('#Jiaoyu').modal('hide');
			}
	}

	function clicklinks_hook(hookhref,href, urlid, dosid) {
		var urlid = urlid;
		var href = href;
		var dosid = dosid;
		var ipt = $("#"+urlid);
		if (ipt){
			if(href == 'galist1')
			{
				hrefs = "./index.php?i="+"<?php  echo $weid;?>" + "&c=entry&m=weixuexiao" + "&do=galist&schoolid=" + "<?php  echo $schoolid;?>";
			}else if(href == 'galist2'){
				hrefs = "./index.php?i="+"<?php  echo $weid;?>" + "&c=entry&m=weixuexiao" + "&do=galist&op=signup&schoolid=" + "<?php  echo $schoolid;?>";
			}else{
				hrefs = "./index.php?i="+"<?php  echo $weid;?>" + "&c=entry&m=weixuexiao" + "&do=" + hookhref +"&goto=" + href + "&schoolid=" + "<?php  echo $schoolid;?>";
			}

			$("#"+urlid).val(hrefs);
			$("#"+dosid).val(href);
			$('#Jiaoyu').modal('hide');
		}
	}
</script>

<script>
	$('.toggle').click(function () {
		$(this).parent().parent().parent().parent().toggleClass('menu-open')
	})
</script>
<script type="text/javascript">
	function showLinkDialog(elm) {
		require(["util","jquery"], function(u, $){
			var ipt = $(elm).parent().parent().parent().prev();
			u.linkBrowser(function(href){
				var multiid = "3";
				if (multiid) {
					href = /(&)?t=/.test(href) ? href : href + "&t=" + multiid;
				}
				ipt.val(href);
			});
		});
	}
	function newsLinkDialog(elm, page) {
		require(["util","jquery"], function(u, $){
			var ipt = $(elm).parent().parent().parent().prev();
			u.newsBrowser(function(href, page){
				if (page != "" && page != undefined) {
					newsLinkDialog(elm, page);
					return false;
				}
				var multiid = "3";
				if (multiid) {
					href = /(&)?t=/.test(href) ? href : href + "&t=" + multiid;
				}
				ipt.val(href);
			}, page);
		});
	}
	function pageLinkDialog(elm, page) {
		require(["util","jquery"], function(u, $){
			var ipt = $(elm).parent().parent().parent().prev();
			u.pageBrowser(function(href, page){
				if (page != "" && page != undefined) {
					pageLinkDialog(elm, page);
					return false;
				}
				var multiid = "3";
				if (multiid) {
					href = /(&)?t=/.test(href) ? href : href + "&t=" + multiid;
				}
				ipt.val(href);
			}, page);
		});
	}
	function articleLinkDialog(elm, page) {
		require(["util","jquery"], function(u, $){
			var ipt = $(elm).parent().parent().parent().prev();
			u.articleBrowser(function(href, page){
				if (page != "" && page != undefined) {
					articleLinkDialog(elm, page);
					return false;
				}
				var multiid = "3";
				if (multiid) {
					href = /(&)?t=/.test(href) ? href : href + "&t=" + multiid;
				}
				ipt.val(href);
			}, page);
		});
	}
	function phoneLinkDialog(elm, page) {
		require(["util","jquery"], function(u, $){
			var ipt = $(elm).parent().parent().parent().prev();
			u.phoneBrowser(function(href, page){
				if (page != "" && page != undefined) {
					phoneLinkDialog(elm, page);
					return false;
				}
				ipt.val(href);
			}, page);
		});
	}
	function mapLinkDialog(elm) {
		require(["util","jquery"], function(u, $){
			var ipt = $(elm).parent().parent().parent().prev();
			u.map(elm, function(val){
				var href = 'https://api.map.baidu.com/marker?location='+val.lat+','+val.lng+'&output=html&src=we7';
				var multiid = "3";
				if (multiid) {
					href = /(&)?t=/.test(href) ? href : href + "&t=" + multiid;
				}
				ipt.val(href);
			});
		});
	}

	function tcourseLinkDialog(e){
	    let btnname = $(e).parent().parent().parent().parent().parent().parent().parent().parent().prev().children().find("input").attr("id");
	    let iconpics = $(e).parent().parent().parent().parent().parent().parent().parent().parent().next().children().find("input").attr("id");
	    let imgsrc_this = $(e).parent().parent().parent().parent().parent().parent().parent().parent().next().children().find("img").attr("id");
		let url = $(e).parent().parent().parent().siblings().attr('id');
		$("#btnname").val(btnname);//获取到原来名称的id
	    $("#url").val(url);//获取到原来url的id
	    $("#iconpics").val(iconpics);//获取到原来图片的id
	    $("#imgsrc_this").val(imgsrc_this);//获取到原来图片的id
		$('#Modal3').modal('toggle');
	}

	function teacherLinkDialog(e){
	    let tname = $(e).parent().parent().parent().parent().parent().parent().parent().parent().prev().prev().children().find("input").attr("id");
		let url = $(e).parent().parent().parent().siblings().attr('id');
		$("#url").val(url);//获取到原来url的id
		$("#tname").val(tname);//获取到原来名称的id
		$('#Modal4').modal('toggle');
	}
</script>

