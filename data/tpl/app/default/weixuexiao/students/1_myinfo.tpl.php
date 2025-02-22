<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta content="telephone=no" name="format-detection" /> 
<link rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/resetnew.css">
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/new_yab.css" />
<style>
body > a:first-child,body > a:first-child img{ width: 0px !important; height: 0px !important; overflow: hidden; position: absolute}
body{padding-bottom: 0 !important;}
.F_div {width: 60px;height: 60px;background:#ff6665; box-shadow: 1px 1px 2px 0px #909090;border-radius: 50px;position: fixed;bottom: 30px;right: 60px;}
.F_div_text {margin: 16px 0 0 0px;color: #FFF;font-size: 16px;text-align: center;}
.reveal-modal-bg {position: fixed;height: 100%;width: 100%;background: #000;background: rgba(0,0,0,.8);z-index: 100;display: none;top: 0;left: 0; }
.reveal-modal {visibility: hidden;top: 30px; left: 2%;right:2%;background: #fff ;position: absolute;z-index: 101;    padding: 25px 18px 38px;-moz-border-radius: 5px;-webkit-border-radius: 5px;order-radius: 5px;
-moz-box-shadow: 0 0 10px rgba(0,0,0,.4);-webkit-box-shadow: 0 0 10px rgba(0,0,0,.4);-box-shadow: 0 0 10px rgba(0,0,0,.4);}
.reveal-modal.small 		{ width: 200px; margin-left: -140px;}
.reveal-modal.medium 		{ width: 400px; margin-left: -240px;}
.reveal-modal.large 		{ width: 600px; margin-left: -340px;}
.reveal-modal.xlarge 		{ width: 800px; margin-left: -440px;}
.head_buy {position: relative;height: 90px;border-bottom: 1px solid #c3b9b9;}
.head_buy .head_img{position: relative; width: 30%; height: 80px; float: left; cursor: pointer;float: left;text-align: center;vertical-align: middle; background-color: #eee; background-size: contain;    background-repeat: no-repeat;background-position: 50% 50%;}
.head_buy1 {position: relative;height: 243px;}
.head_buy1 .head_img1{position: relative;width: 98%;height: 243px;float: left;cursor: pointer;float: left;text-align: center;vertical-align: middle;background-size: contain;background-repeat: no-repeat;background-position: 50% 50%;}
.head_buy .head_right {width: 68%;float: right;}
.head_buy .head_right .vodname{font-size: 16px;font-weight: bold;}
.head_buy .head_right .vodsd{font-size: 13px;color: #888181;}
.buy_info { position: relative;margin-top: 18px;width: 100%; height: 63px;border-bottom: 1px dashed #c3b9b9;}
.buy_info .buy_left {width: 55%;float: left;}
.buy_info .buy_left .pirce{font-size: 13px;}
.buy_info .buy_left .pirce>span{font-size: 22px;color:red;font-weight: bold;}
.buy_info .buy_right {width: 35%;float: right;}
.buy_info .buy_right .buy_btn{width: 80%;height: 37px;vertical-align: middle;text-align: center;line-height: 35px;color: #fff;border-radius: 8px;background-color: #10c178;margin-left: 18px;}
.buy_info .buy_right .back{background-color: #b5afaf;}
.common_list_imgtext6 li a .icon_text .right_arrow_icon {width: 30px;height: 44px;position: absolute;top: 0;background: url(<?php echo MODULE_URL;?>public/mobile/img/right_arrow.png) no-repeat center;background-size: 9px 15px;}
.common_list_imgtext6 li a .icon_text .right_arrow_text {height: 44px;position: absolute;right: 5px;top: 0;}
.common_list_imgtext6 li a .icon img {width: 25px;height: 25px;background-color: #dee0e0;border-radius: 50%;}
.my_unseInfo_right {float: right;display: inline-block;background: url(<?php echo MODULE_URL;?>public/mobile/img/right_arrow.png) no-repeat center;
width: 30px;height: 100%;background-size: 9px 15px;}
.user_name {text-align: left;color: #666;font-size: 14px;}
.btn {height: 44px;display: block;background-color: #7bb52d;font: 20px "黑体";text-align: center;color: #fff;cursor: pointer;}
.user_name > input {    display: block;width: 100%;border-radius: 3px;height: 34px;padding: 0 10px;margin-bottom: 10px;border: 1px solid #e4dede;/* -webkit-box-sizing: border-box; */box-sizing: border-box;}
.user_name > select {display: block;width: 100%;height: 34px;border-radius: 3px;padding: 0 10px;margin-bottom: 10px;border: 1px solid #ccc;-webkit-box-sizing: border-box;
box-sizing: border-box;text-align: left;color: #666;font-size: 14px;}
.close_pupop_c {width: 200px; margin: 0 auto;}
.close_pupop_button {width: 90px;height: 30px;border-radius: 5px;line-height: 30px;font-size: 16px;text-align: center;}
.close_pupop_button_1 {background: #e74580;color: #fff;}
.close_pupop_button_2 {background: #56c454;color: #fff;margin-left: 20px;}
.weui_switch {font-size: 14px;-webkit-appearance: none;-moz-appearance: none;appearance: none;position: relative;width: 48px;height: 28px;border: 1px solid #DFDFDF;outline: 0;border-radius: 16px;box-sizing: border-box;background: #DFDFDF;vertical-align: middle;float: right;top: 8px;right: 12px;}
.weui_switch:before {content: " ";position: absolute;top: 0;left: 0;width: 46px;height: 26px;border-radius: 15px;background-color: #FDFDFD;-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.weui_switch:after {content: " ";position: absolute;top: 0;left: 0;width: 26px;height: 26px;border-radius: 15px;background-color: #FFFFFF;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.icon_text >span {text-align: right;color: #888;line-height: 30px;margin-left: 47px;}
</style>
<meta id="viewport" name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>学生信息</title>
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.9"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/jquery.reveal.js"></script>
</head>
<?php  include $this->template('port');?>
<body>
	<input type="hidden" id="bigImage" name="bigImage"/>
    <div id="wrap" class="user_inf" style="padding-bottom:1px;">
        <dl>
            <dt onclick="uploadImg(this);">
            <label>头像&nbsp;点击修改</label>
                 <span  class="potot" style="background-image:url(<?php  if(!empty($students['icon'])) { ?><?php  echo toimage($students['icon'])?><?php  } else { ?><?php echo OSSURL;?>public/mobile/img/mask_bg2.png<?php  } ?>)"></span>
            </dt>
        </dl>
    </div>	
	<ul class="common_list_imgtext6">
		<div class="common_list_imgtext6GroupBox class_li">
			<li>
				<a>
					<div class="icon">
						<img src="<?php echo MODULE_URL;?>public/mobile/img/59ddef4d7a25b_19.png">
					</div>
					<div class="icon_text">
						<?php  echo $language['myinfo_xsxm'];?><div class="right_arrow_text"><?php  echo $students['s_name'];?></div>
					</div>
				</a>
			</li>
			<div class="li_line"></div>
			<?php  if($school['is_stuewcode'] ==1) { ?>
			<li>
				<a data-reveal-id="myModal1">
					<div class="icon">
						<img src="<?php echo MODULE_URL;?>public/mobile/img/59df389b137bb_31.png">
					</div>
					<div class="icon_text">
						<?php  echo $language['myinfo_xsew'];?>
						<div class="right_arrow_text" id="codetxet">
							<img style="padding-right: 62px;width: 23px;" src="<?php  echo tomedia($qrinfo['show_url'])?>"><?php  if($overtime) { ?>点击查看<?php  } else { ?>已过期,重新获取<?php  } ?>
						</div>
					</div>
				</a>
			</li>
			<div class="li_line"></div>
			<?php  } ?>
			<?php  if($students['numberid']) { ?>
			<li>
				<a>
					<div class="icon">
						<img src="<?php echo MODULE_URL;?>public/mobile/img/59ddef4d7a25b_18.png">
					</div>
					<div class="icon_text">
						<?php  echo $language['myinfo_xsxh'];?><div class="right_arrow_text"><?php  echo $students['numberid'];?></div>
					</div>
				</a>
			</li>
			<div class="li_line"></div>
			<?php  } ?>
			<li>
				<a>
					<div class="icon">
						<img src="<?php echo MODULE_URL;?>public/mobile/img/59ddef4d7a25b_88.png">
					</div>
					<div class="icon_text">
						性别<div class="right_arrow_text"><?php  if($students['sex'] ==1) { ?>男<?php  } ?><?php  if($students['sex'] ==2) { ?>女<?php  } ?></div>
					</div>
				</a>
			</li>
			<div class="li_line"></div>
			<li>
				<a>
					<div class="icon">
						<img src="<?php echo MODULE_URL;?>public/mobile/img/59ddef4d7a25b_49.png">
					</div>
					<div class="icon_text">
						<?php  echo $language['myinfo_xsbj'];?><div class="right_arrow_text">
							<?php  if(!empty($bjlist)) { ?>
								<?php  if(is_array($bjlist)) { foreach($bjlist as $row) { ?>
									<?php  echo $row['bjname'];?>
								<?php  } } ?>
							<?php  } else { ?>
								<?php  echo $nowbj['sname'];?>
							<?php  } ?>
							</div>
					</div>
				</a>
			</li>
			<div class="li_line"></div>
			<li>
				<a>
					<div class="icon">
						<img src="<?php echo MODULE_URL;?>public/mobile/img/59ddef4d7a25b_09.png">
					</div>
					<div class="icon_text">
						<?php  echo $language['myinfo_bmyldh'];?><div class="right_arrow_text"><?php  echo $students['mobile'];?></div>
					</div>
				</a>
			</li>
			<div class="li_line"></div>
			<li>
				<a>
					<div class="icon">
						<img src="<?php echo MODULE_URL;?>public/mobile/img/59ddef4d7a25b_70.png">
					</div>
					<div class="icon_text">
						<?php  echo $language['myinfo_jtzz'];?><div class="right_arrow_text"><?php  if($students['area_addr']) { ?><?php  echo $students['area_addr'];?><?php  } else { ?>未填写<?php  } ?></div>
					</div>
				</a>
			</li>
			<div class="li_line"></div>
			<?php  if($school['Is_point']) { ?>
			<li>
				<a>
					<div class="icon">
						<img src="<?php echo MODULE_URL;?>public/mobile/img/59ddef4d7a25b_80.png">
					</div>
					<div class="icon_text">
						<?php  echo $language['myinfo_jf'];?><div class="right_arrow_text"><?php  if($students['points']) { ?><?php  echo $students['points'];?><?php  } else { ?>0<?php  } ?></div>
					</div>
				</a>
			</li>
			<div class="li_line"></div>		
			<?php  } ?>	
		</div>
	</ul>
	<a data-reveal-id="myModal" id="F_div" class="F_div" style="z-index: 2;right: 20px; margin-bottom: 50px; display: block">
		<div class="F_div_text">修改</div>
	</a>
	<div id="myModal" class="reveal-modal">
		<ul>
			<li class="user_name">
				<input type="text" placeholder="<?php  echo $language['myinfo_xsxm'];?>" name ="name" id="name" value="<?php  echo $students['s_name'];?>">
			</li>
			<li class="user_name">
				<input type="text" placeholder="<?php  echo $language['myinfo_bmyldh'];?>" name ="mobile" id="mobile" value="<?php  echo $students['mobile'];?>">
			</li>
			<li class="user_name">
				<select class="feedback_title" id="sex">
					<option value="1" <?php  if($students['sex'] == 1) { ?> selected = "selected" <?php  } ?>>男</option>
					<option value="2" <?php  if($students['sex'] == 2) { ?> selected = "selected" <?php  } ?>>女</option>
				</select>
			</li>
			<?php  if($students['numberid']) { ?>
			<li class="user_name">
				<input type="text" placeholder="<?php  echo $language['myinfo_xsxh'];?>" name ="numberid" id="numberid" value="<?php  echo $students['numberid'];?>">
			</li>
			<?php  } ?>	
			<li class="user_name">
				<input type="text" placeholder="<?php  echo $language['myinfo_jtzz'];?>" name ="addr" id="addr" value="<?php  echo $students['area_addr'];?>">
			</li>			
		</ul>
		<div class="close_pupop_c">
			<div id="tijiao1" class="close_pupop_button close_pupop_button_1 float_l">确定</div>
			<div id="close" class="close-reveal-modal close_pupop_button close_pupop_button_2 float_l">取消</div>
		</div>
	</div>	
	<div id="myModal1" class="reveal-modal">
		<div class="head_buy1" id="ewcode">
			<div class="head_img1"><img src="<?php  if($overtime) { ?><?php  echo tomedia($qrinfo['show_url'])?><?php  } else { ?><?php  } ?>"></div>
		</div>
		<div class="buy_info">
			<div class="buy_left">
				<div class="pirce">长按可保存二维</div>
				<div class="pirce"><?php  echo $language['myinfo_ewtip'];?></div>
				<div class="pirce">过期后可重新生成</div>
			</div>
			<div class="buy_right">
				<div id="setbtn" class="buy_btn<?php  if($overtime) { ?> back close-reveal-modal<?php  } ?>" <?php  if(!$overtime) { ?>onclick="creatqr(<?php  echo $students['id'];?>);"<?php  } ?>><?php  if($students['qrcode_id']) { ?><?php  if($overtime) { ?><?php  echo $restday;?>天后失效<?php  } else { ?>重新生成<?php  } ?><?php  } else { ?>获取二维码<?php  } ?></div>	
			</div>
		</div>		
	</div>
	<?php  include $this->template('footer');?>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
<script>
WeixinJSHideAllNonBaseMenuItem();
/**微信隐藏工具条**/
function WeixinJSHideAllNonBaseMenuItem(){
	if (typeof wx != "undefined"){
		wx.ready(function () {
			
			wx.hideAllNonBaseMenuItem();
		});
	}
}
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
function creatqr(id){
	var id = id;
	$.post("<?php  echo $this->createMobileUrl('comajax', array('op' => 'get_user_qr'))?>",{id:id,schoolid:'<?php  echo $schoolid;?>'}, function(data){
		if(data.result){
			var html = '<div class="head_img1"><img src="'+data['qrimg']+'"></div>';	
			var html2 = '<img style="padding-right: 62px;width: 23px;" src="'+data['qrimg']+'">点击查看'
			jTips(data.msg);
			$("#setbtn").hide();
			$("#ewcode").empty();
			$("#codetxet").empty();
			$("#ewcode").append(html);
			$("#codetxet").append(html2);			
		}else{
			jTips(data.msg);	
		}
	},'json');	 
}
$("#tijiao1").on('click', function () {
	var name = $("#name").val();
	var sex = $("#sex").val();
	var addr = $("#addr").val();
	var mobile = $("#mobile").val();
	var numberid = $("#numberid").val();
	var submitData = {
		sid:"<?php  echo $students['id'];?>",
		schoolid:"<?php  echo $schoolid;?>",
		name:name,
		numberid:numberid,
		mobile:mobile,
		sex:sex,
		addr:addr
	};

	reg=/^(0|86|17951)?(13[0-9]|15[012356789]|17[0-9]|18[0-9]|14[57])[0-9]{8}$/;	
	if (name == "" || name == undefined || name == null) {
		jTips('请输入<?php  echo $language['myinfo_xsxm'];?>！');
		return false;
	}
	if (mobile == "" || mobile == undefined || mobile == null || !reg.test(mobile)) {
		jTips('手机号有误或为空！');
		return false;
	}
	
	jConfirm("确认修改信息吗?", "删除确定对话框", function (isConfirm) {
		if(isConfirm){
			$.post("<?php  echo $this->createMobileUrl('comajax',array('op'=>'reset_stuinfo'))?>",submitData,function(data){
				if(data.result){
					jTips(data.msg);
					location.reload();
				}else{
					jTips(data.msg);
				}
			},'json'); 	
		}else {
			$("#close").click();
		}
	}); 	
});
function saveImage() {
	var url = "<?php  echo $this->createMobileUrl('indexajax',array('op'=>'changeimg'))?>";
	var submitData = {
			bigImage:$("#bigImage").val(),
			sid:"<?php  echo $it['sid'];?>",
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
</script>
</html>