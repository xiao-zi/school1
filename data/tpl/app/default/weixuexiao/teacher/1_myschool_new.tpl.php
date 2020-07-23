<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<?php  include $this->template('hide_url');?>
<html xmlns="http://www.w3.org/1999/xhtml">
<title><?php  echo $school['title'];?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/mGrzxTeacher.css?v=4.80915" />
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/new_yab.css" />
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<?php  include $this->template('port');?>
<style>


.divHeight{ width: 100%; height: 10px; background: #f2f2f2; }
  .aui-head-access{ padding: 12px 15px; position: relative; display: flex; -webkit-box-align: center; align-items: center; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: inherit; background-color: #fff; }
  .aui-head-access-hd{ -webkit-box-flex: 1; flex: 1; font-size: 15px; color: #333333; }
  .aui-grids{ position: relative; overflow: hidden; text-align: center; padding: 1rem 0; background-color: #fff; }
  .aui-grids-item{ width: 33.333%; float: left; position: relative; z-index: 0; padding: 0.4rem 0; font-size: 0.85rem; text-align: center; color: #fff; background-color: #fff; }
  .aui-grids-item span{ text-align: center; width: 100%; display: block; color: #323232; font-size: 1rem; }
  .aui-grids-image a span img{ width: 40px; height: 40px; display: block; border: none; margin: 0 auto; }
  .aui-grids-image a .aui-grids-item-text{ color: #666666; font-size: 0.7rem; margin-top: 0.3rem; padding-top: 4px; }

 .font_icon{width: 15px;margin-top: 6px;margin-left: 7px;margin-right: 2px;}
 .header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); } .header .l { width: 50px; height: 50px; line-height: 50px; color: white; position: absolute; left: 0; top: 0; } .header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; } .header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } .mainColor { background: #06c1ae !important; } .header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
.slide_left_menu_bg.show_menu_bg {display: block;-webkit-animation-name: fadeIn;animation-name: fadeIn;-webkit-animation-duration: 600ms;animation-duration: 600ms;-webkit-animation-fill-mode: both;/* animation-fill-mode: both; */}
.slide_left_menu_bg_other.show_menu_bg {display: block;-webkit-animation-name: fadeIn;animation-name: fadeIn;-webkit-animation-duration: 600ms;animation-duration: 600ms;-webkit-animation-fill-mode: both;/* animation-fill-mode: both; */}
.slide_left_menu_bg {width: 100%;z-index: 998;background: rgba(0, 0, 0, 0.5);position: fixed;min-height: 100%;top: 0;left: 0;zoom: 1;overflow: hidden;display: none;height: 100%;z-index: 1000;overflow-y: scroll;}
.slide_left_menu_bg_other {width: 100%;z-index: 998;background: rgba(0, 0, 0, 0.5);position: fixed;min-height: 100%;top: 0;left: 0;zoom: 1;overflow: hidden;display: none;height: 100%;
z-index: 1000;overflow-y: scroll;display: none;}
.slide_left_menu {width: 50%!important;right: 0;background-color: #fff;z-index: 999;min-height: 100%;position: absolute;}
.slide_left_menu_ul_other {width: 100%;border: 1px solid #ccc;border-left: none;border-right: none;box-sizing: border-box;padding: 0 10px;}
.slide_left_menu_ul_other li {height: 50px;line-height: 50px;border-bottom: 1px solid #ccc;font-size: 16px;width: 100%;box-sizing: border-box;padding: 0 10px 0 10px;overflow: hidden;
position: relative;}
.slide_left_menu_ul_other li.act {background: url(<?php echo OSSURL;?>public/mobile/img/be_choose_icon.png) right center no-repeat;background-size: 16px;background-origin: content-box;-moz-background-origin: content-box;-webkit-background-origin: content-box;}
.slide_left_menu_ul li.act {background: url(<?php echo OSSURL;?>public/mobile/img/be_choose_icon_02.png) right center no-repeat;background-size: 16px;background-origin: content-box;-moz-background-origin: content-box;-webkit-background-origin: content-box;}
.slide_left_menu_ul_other li:last-of-type {border-bottom: none;}
.slide_left_menu_ul_other li .user_img {width: 50px;height: 50px;position: absolute;left: -5px;top: 0;box-sizing: border-box;padding: 10px;}
.slide_left_menu_ul_other li .user_img img {width: 100%;height: 100%;border-radius: 50%;}
.slide_left_menu_ul_other li .change_user {width: 40px;height: 100%;position: absolute;right: 0;top: 0;background: url(<?php echo OSSURL;?>public/mobile/img/be_choose_icon.png) center no-repeat;background-size: 30px;}
.slide_left_menu_til {height: 40px;line-height: 40px;box-sizing: border-box;padding: 0 40px 0 15px;position: relative;font-size: 16px;}
.slide_left_menu_ul {width: 100%;border: 1px solid #ccc;border-left: none;border-right: none;box-sizing: border-box;padding: 0 10px;}
.slide_left_menu_ul li {height: 50px;line-height: 50px;font-size: 16px;width: 100%;box-sizing: border-box;padding: 0 10px 0 50px;overflow: hidden;position: relative;}
.slide_left_menu_ul li .user_img {width: 50px;height: 50px;position: absolute;left: -5px;top: 0;box-sizing: border-box;padding: 10px;}
.slide_left_menu_ul li .user_img img {width: 100%;height: 100%;border-radius: 50%;}
.hederRightBox {width: 21px;height: 100%;display: inline-block;position: absolute;right: 20px;}
.hederRightBox a {width: 100%;height: 21px;display: inline-block;position: absolute;top: 50%;transform: translateY(-50%);-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);}
.weui_switch {font-size: 14px;-webkit-appearance: none;-moz-appearance: none;appearance: none;position: relative;width: 48px;height: 28px;border: 1px solid #DFDFDF;outline: 0;border-radius: 16px;box-sizing: border-box;background: #DFDFDF;vertical-align: middle;float: right;right: 12px;}
.weui_switch:before {content: " ";position: absolute;top: 0;left: 0;width: 46px;height: 26px;border-radius: 15px;background-color: #FDFDFD;-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.weui_switch:after {content: " ";position: absolute;top: 0;left: 0;width: 26px;height: 26px;border-radius: 15px;background-color: #FFFFFF;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
#msg_word {text-align: left;color: #888;line-height: 30px;}
#bg_star{width: 60px;float: left;margin-top: 15px;height: 16px;background: url("<?php echo MODULE_URL;?>public/mobile/img/star_show_gray_blank.png");}
#over_star{height:16px;background:url("<?php echo MODULE_URL;?>public/mobile/img/star_show_gray_full.png") no-repeat;}
.click {width: auto;height: 27px;right: 0;top: 93px;background-color: #ceb750;border-radius: 50px 0 0 50px;z-index: 2; position: fixed;}
.useredits{line-height: 28px;float: right;margin-right: 4px;color:#fff}
.component-panel {position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: 15;background: rgba(0,0,0,.7);}
.component-dialog {position: absolute;top: 30%;left: 50%;-webkit-transform: translateX(-50%) translateY(-50%);transform: translateX(-50%) translateY(-50%);background: #fff;padding: 10px;width: 80%;border-radius: 10px;}
.dialog-order>.component-dialog-title {text-align: center;}
.component-dialog-body {padding: 10px 0 12px;}
.component-dialog-title {font-size: 16px;font-weight: 200;}
.arrange-detail>ol {box-sizing: border-box;}
.form-order>.form-line {margin-bottom: 5px;}
.form-order>.form-line {margin-bottom: 12px;margin-top: 12px;}
.btnthis {height: 30px;background-color: #7bb52d;font: 16px "黑体";text-align: center;color: #fff;cursor: pointer;border-radius:10px}
.div_closd{margin-left:13%; width:30%;color: #fff;background-color: #f1ad31;border-color: #f1ad31;float:left;line-height:30px}
.div_sure{margin-right:13%; width:30%;float:right;line-height:30px}
.ovfHiden{overflow:hidden}
.SelectInRange{text-align:center;text-align-last:center;width:90%;margin:8px;height:30px;border-radius: 3px;}

.Tjiebang{color: #17b056;height: 26px;margin-top: 2px;padding:0 3px;border-radius: 5px;color:rgb(137,144,111);background-color: rgb(250,220,86);width:32px;line-height: 25px;text-align: center ;font-size: 12px;float: left;}
.BjInfoDiv{color:white;height: 26px;line-height: 26px;padding-left:40px;width:calc(100% - 180px);float: left;}
.MyInfo{height: 26px;margin-top: 2px;padding:0 3px;border-radius: 15px;background-color: #ceb750;width:60px;float: right;}
.Kc_Bjlist_span{overflow: hidden;white-space: nowrap;text-overflow:ellipsis;display:block;width:calc(100% - 40px);float: left;height: 26px}
.ProgressDiv{width:100%;height: 40px;border-radius: 20px;background-color: white;display: flex;flex-direction: row;justify-content: space-between}
.ProgressDiv_parent{width:100%;height: 85px;}
.ProgressTitle{height: 40px;line-height: 40px;padding:0 10px;width:60px;color:gray}
.Progress{flex:1;position: relative;border-radius: 10px;overflow: hidden;height: 20px;margin-top: 10px;background-color: rgb(34, 47, 63);}
.Progress>div{width:100%;height: 20px;border-radius:10px;}
.Progress_detail{height: 40px;line-height: 40px;padding:0 10px;width:120px;color:gray;text-align: center}
.tSign{width: 40px; height: 40px;border-radius: 50%; position: absolute; right: 10px; top: 50%; margin-top: -10px;background-color: aqua}
.tSign>div{height: 20px;line-height: 20px;margin-top: 10px;width:40px;text-align: center}

.TripleIconDiv{width:94.99%;height: 90px;margin:5px 2.555%;display:flex;flex-direction: row;justify-content: space-between ;border-radius: 20px ;overflow: hidden;background-color: white;box-shadow: 0px 0px 8px 0px #7d7d7d;}
.linkDiv .linkBox { width: 33%; float: left; text-align: center; background: #fff; padding-top: 15px; padding-bottom: 10px; margin-left: 0.3%; margin-bottom: 2px; border-radius: unset }
</style>
</head>
<body>
	<div class="stuBanner">
		<div class="stuBannerBg">
		</div>
	</div>
	<?php  if($teacher['status'] == 2) { ?>
	<div class="stuBox" style="background-color: rgb(83,176,68);padding:0">
	<?php  } else { ?>
	<div class="stuBox" style="background-color: rgb(234,128,41);padding:0">
	<?php  } ?>
		<div class="stuInfo" style="border-bottom: unset">
			<input type="hidden" id="bigImage" name="bigImage"/>
			<div class="stuHeader" onclick="uploadImg(this);" style="border:2px solid transparent">
				<img alt="头像" src="<?php  if(!empty($teacher['thumb'])) { ?><?php  echo tomedia($teacher['thumb'])?><?php  } else { ?><?php  echo tomedia($school['tpic'])?><?php  } ?>" />	 
			</div>
			<div class="stuInfoCenter" style="width:calc(100% - 160px)">
				<div class="stuName">
					<label class="m_r_10" style="color:white" ><?php  echo $teacher['tname'];?></label>
					<?php  if($teacher['star'] == 0 && $school['is_star'] ==1) { ?>
					<label style="font-size:15px;font-weight: normal;color:white">&nbsp;暂无评分</label>
					
					<?php  } else if($teacher['star'] != 0 && $school['is_star'] ==1) { ?>
					<div id="bg_star" ><!--这里是背景，也就是灰色的星星-->
						<div id="over_star" style="width:30px"></div><!--这里是遮罩，设置宽度以达到评分的效果-->
					</div>
					<label style="font-size:15px;font-weight: normal;color:white">&nbsp;<?php  echo $teacher['star'];?>分</label>
					<?php  } ?>
				</div>
				<div class="stuCampusAndBjname" style="border-bottom:1px solid white;width:60%">
					<span class="campus" style="color:white"><?php  echo $teacher['Ttitle'];?></span>
				</div>
			</div>
			<div class="tSign" onclick="qingjia();">
				<div>打卡</div>
			</div>
		</div>				
		<div class="stuServer" style="height: 30px;padding:0px 0px;border-bottom: unset">
			<div id="jiebang1" class="Tjiebang">解绑</div>
			<div class="BjInfoDiv">
				<?php  if($_W['schooltype']) { ?>			
				<span style="display:block;width:40px;float: left;">课程</span>
				<span class="Kc_Bjlist_span"><?php  echo $kclists_str;?></span>
				<!-- <div onclick="gotokecheng();" class="unbound">查看</div> -->
				<?php  } else { ?>
				<span style="display:block;width:40px;float: left;">班级</span>
				<span class="Kc_Bjlist_span">
					<?php  
						if(is_array($bjlists)) {
							foreach($bjlists as $key => $row){
								if(!in_array($row['bj_id'], $bjlists)){
									$bjlists[] = $row['bj_id'];
									echo($row['bjname']);
									echo('|');
								}
							}
						}else{
							echo('无授课班级');
						}
					?>
				</span>		
				<?php  } ?>	
			</div>
			<div  class="MyInfo" style="height: 26px">
				<img class="font_icon" id="Changesf" src="<?php echo MODULE_URL;?>public/mobile/img/change_image.png"></img><div  style="line-height: 26px; float: right; margin-right: 4px;color:white;" >切换</div>
			</div>
		</div>
	</div>

	<div class="linkDiv" style="margin-top:10px;">	
		<?php  if($teacher['status'] == 2) { ?>
		<div class="ProgressDiv_parent">
				<div class="ProgressDiv">
					<div class="ProgressTitle">月度课消 </div>
					<div class="Progress">
						<div style=" background-color: rgb(110, 228, 182);margin-left: -<?php echo $NowMonthKcBNum ? 100 - $NowMonthKcSNum / $NowMonthKcBNum * 100 : 100 ?>%" ></div>
					</div>
					<div class="Progress_detail"><?php  echo $NowMonthKcSNum;?>/<?php  echo $NowMonthKcBNum;?>(课时)</div>
				</div>
				<div class="ProgressDiv" style="margin-top: 3px">
					<div class="ProgressTitle">月度业绩 </div>
					<div class="Progress">
						<div style=" background-color: rgb(180, 162, 248);margin-left: -<?php echo $monthAllMoney ? 100 - $monthSjMoney / $monthAllMoney * 100 : 100?>%" ></div>
					</div>
					<div class="Progress_detail"><?php  echo $monthSjMoney;?>/<?php  echo $monthAllMoney;?>(元)</div>
				</div>
			</div>
		<?php  } else { ?>
		<div class="ProgressDiv_parent">
			<div class="ProgressDiv">
				<div class="ProgressTitle">本月试听 </div>
				<div class="Progress">
					<div style=" background-color: rgb(110, 228, 182);margin-left: -<?php echo $NowMonthStNum ? 100 - $NowMonthKcStNum / $NowMonthStNum * 100 : 100 ?>%" ></div>
				</div>
				<div class="Progress_detail"><?php  echo $NowMonthKcStNum;?>/<?php  echo $NowMonthStNum;?>(人次)</div>
			</div>
			<div class="ProgressDiv" style="margin-top: 3px">
				<div class="ProgressTitle">本月课时 </div>
				<div class="Progress">
					<div style=" background-color: rgb(180, 162, 248);margin-left: -<?php echo $NowMonthKcBNum ? 100 - $NowMonthKcSNum / $NowMonthKcBNum * 100 : 100 ?>%" ></div>
				</div>
				<div class="Progress_detail"><?php  echo $NowMonthKcSNum;?>/<?php  echo $NowMonthKcBNum;?>(课时)</div>
			</div>
		</div>
		<?php  } ?>

		<div class="TripleIconDiv">
			<?php  if(is_array($TopIconFTea)) { foreach($TopIconFTea as $item) { ?>
			<a href="<?php  echo $item['url'];?>" style="height:90px;width:30vw">
				<div class="linkBox" style="width:100%">
					<div class="linkImg">
						<img alt="" src="<?php  echo tomedia($item['icon'])?>" style="width:35px;">
					</div>			
					<span class="linkName"><?php  echo $item['name'];?></span>	
				</div> 	 
			</a>
			<?php  } } ?>

		</div>

		 

	<div style="margin: 0 2.555%">
		<?php  if(is_array($icontype[0]['hasdata'])) { foreach($icontype[0]['hasdata'] as $key => $row) { ?>
		<?php  if($row['do'] == 'yjfx') { ?>
		<a id="scroll">
		<?php  } else { ?>
		<a href="<?php  echo $row['url'];?>">
		<?php  } ?>
			<div class="linkBox">
				<div class="linkImg">
					<img alt="" src="<?php  echo tomedia($row['icon'])?>" style="width:35px;">
				</div>			
				<span class="linkName"><?php  echo $row['name'];?></span>	
			</div>
		</a>
		<?php  } } ?>	
	</div>
		<div class="cl"></div>
	</div>
<?php  include $this->template('comad');?>
<?php  if($school['copyright']) { ?>
<div style="margin-bottom:30px;text-align: center;line-height: 25px;font-size: 13px;color: #908f8f;"><?php  echo $school['copyright'];?></div>
<?php  } else { ?>
<div style="margin-bottom: 10px"></div>
<?php  } ?>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
<div class="slide_left_menu_bg <?php  if(empty($_GPC['schoolid'])) { ?>show_menu_bg<?php  } ?>">
    <div class="slide_left_menu">
        <div class="slide_left_menu_til">选择学校</div>
        <ul class="slide_left_menu_ul">
		<?php  if(is_array($schoollist)) { foreach($schoollist as $row) { ?>
			<li onclick="isSelect(<?php  echo $row['schoolid'];?>);" <?php  if($schoolid == $row['schoolid']) { ?>class="act"<?php  } ?>>
				<div class="user_img">
					<img src="<?php  if($row['schoolicon']) { ?><?php  echo tomedia($row['schoolicon'])?><?php  } ?>">
				</div>
				<div><?php  echo $row['schoolname'];?></div>
			</li>
		<?php  } } ?>
		</ul>	
    </div>
</div>


<script type="text/javascript">



function qingjia(){
    window.location.href = "<?php  echo $this->createMobileUrl('tcalendar', array('schoolid' => $schoolid), true)?>"
}
 
 
$(function ($) {
		//弹出
	$("#scroll").on('click', function () {
		$('#user_info').show();
	});
	$("#close").on('click', function () {
		$('#user_info').hide();
	});
	//文本框不允许为空---按钮触发
	$("#btn").on('click', function () {
		var bjid = $('#bjid').val();
		if (bjid == '') {
			jTips('请选择发送班级！');
			return false;
		}
		 submitData = {
		 openid :"<?php  echo $openid;?>",
		 schoolid:"<?php  echo $schoolid;?>",
		 weid :"<?php  echo $weid;?>",
		 userid: "<?php  echo $it['id'];?>",
		 tname:"<?php  echo $teacher['tname'];?>",
		 bj_id:$("#bjid").val(),
		}
		jConfirm("确认要发送吗?", "删除确定对话框", function (isConfirm) {
		if (isConfirm) {
			jTips("放学信息群发中~","forever");
			$.post("<?php  echo $this->createMobileUrl('dongtaiajax',array('op'=>'fangxue'))?>",submitData,
				function(data){
					if(data.result){
						jTips(data.msg);
						location.reload();
					}else{
						jTips(data.msg);
					}
				},'json');	
			} else $('#user_info').hide();
		});		
	});	
});

var images = {
	    localId: [],
	    serverId: []
};

function uploadImg(){

	wxChooseImage();
}

/**
 * 微信选择图片
 */
function wxChooseImage(){
	wx.chooseImage({
		success: function (res) {
			images.localId = res.localIds;
			var obj=new Image();
			obj.src=res.localIds[0];
			imagesUploadWx();
		}
	});
};

function imagesUploadWx() {
	      wx.uploadImage({
	        localId: images.localId[0],
	        isShowProgressTips:1,//// 默认为1，显示进度提示
	        success: function (res) {
	        	$("#bigImage").val(res.serverId);
				saveImage();
	        },
	        fail: function (res) {
	          alert(JSON.stringify(res));
	        }
	      });
};

$("#jiebang1").on('click', function () {
	jConfirm("解绑后数据将丢失,确认要解绑吗？", "删除确定对话框", function (isConfirm) {
		if(isConfirm){
			var submitData = {
				openid :"<?php  echo $teacher['openid'];?>",
				schoolid :"<?php  echo $schoolid;?>",
				weid :"<?php  echo $weid;?>",
				tid :"<?php  echo $teacher['id'];?>",
				user :"<?php  echo $it['id'];?>",
			};
				$.post("<?php  echo $this->createMobileUrl('indexajax',array('op'=>'unboundls'))?>",submitData,function(data){
				if(data.result){
					jTips(data.msg);
					window.location.href = "<?php  echo $this->createMobileUrl('bangding', array('schoolid' => $schoolid), true)?>"
				}else{
					jTips(data.msg);
				}
			},'json'); 
		}
	});		
});

function saveImage() {
	jTips("头像上传中，请稍等~");
	var url = "<?php  echo $this->createMobileUrl('indexajax',array('op'=>'changeimgt'))?>";
	var submitData = {
			bigImage:$("#bigImage").val(),
			tid:"<?php  echo $it['tid'];?>",
	};
	$.post(url, submitData, function(data) {
		if (data.result) {
			jTips(data.msg);
			location.reload();
		} else {
			jTips(data.msg);
		}
	},'json');
}
function change_msg() {
	var isPersonal = $("#is_personal").prop('checked')?"Y":"N";	
	var msg_word = $("#is_personal").prop('checked')?"接收家长信息和公开电话":"不接收家长信息和电话";	
	$.ajax({
		url: "<?php  echo $this->createMobileUrl('indexajax',array('op'=>'liaotian'))?>",
		data : {schoolid:"<?php  echo $schoolid;?>",is_allowmsg:isPersonal,userid:"<?php  echo $it['id'];?>",openid:"<?php  echo $openid;?>"},	
		dataType: 'json',
		type: "post",
		success: function (data) {
			if(data.result){
				$('#msg_word').html(msg_word);
				$('.stuHeader').children('img').attr('src',data.newpic)
			}else{
				jTips(data.msg);
			}
		}
	});	
}
</script>
<script>
$(function () {




	<?php  if(empty($_GPC['schoolid'])) { ?>
$("#Changesf").on("click", function(e) {
	e.stopPropagation();
	$(".slide_left_menu_bg").addClass("show_menu_bg");
});
$(".slide_left_menu_bg").on("click", function() {
	$(this).removeClass("show_menu_bg");
});
<?php  } else { ?>
$("#Changesf").on("click", function(e) {
	e.stopPropagation();
	$(".slide_left_menu_bg").addClass("show_menu_bg");
});
$(".slide_left_menu_bg").on("click", function() {
	$(this).removeClass("show_menu_bg");
});
<?php  } ?>

	function getCookie(cookieName){
    var strCookie = document.cookie;
    var arrCookie = strCookie.split("; ");
    for(var i = 0; i < arrCookie.length; i++){
        var arr = arrCookie[i].split("=");
        if(cookieName == arr[0]){
            return arr[1];
        }
    }
    return "";
}
	if(<?php  echo $all;?>)
	{
	 	if(!getCookie("opop")){
	 		jConfirm("您有未完成任务，是否查看?", "删除确定对话框", function (isConfirm) {
				if(isConfirm){
					window.location.href = "<?php  echo $this->createMobileUrl('pointrule', array('schoolid' => $schoolid,'weid'=>$weid,'userid'=>$userid['id'],'op'=>'2'), true)?>";
					
				}
				document.cookie = "opop" + "=" + "lailailai" + "; " + 3*60*60*1000;
			});	
		}
	}
})
function isSelect(schoolid){
	jTips("数据加载中！···");
	location.href = "<?php  echo $this->createMobileUrl('myschool')?>"+ '&schoolid=' + schoolid;
}
	</script>
<?php  include $this->template('newfooter');?>
</html>