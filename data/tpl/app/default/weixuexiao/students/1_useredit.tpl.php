<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="format-detection" content="telephone=no">
<title>个人中心</title>
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/new_yab.css" />
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
</head>
<style>
/**按钮点击特效**/
.mb_marsk:hover{ -webkit-mask:-webkit-linear-gradient(rgba(0, 0, 0, 0.53),rgba(0, 0, 0, 0.53),rgba(0, 0, 0, 0.53),rgba(0, 0, 0, 0.53))}
.common_list_imgtext6 li a .icon_text .right_arrow_icon {width: 30px;height: 44px;position: absolute;right: 0;top: 0;
background: url(<?php echo MODULE_URL;?>public/mobile/img/right_arrow.png) no-repeat center;background-size: 9px 15px;}
.my_unseInfo_right {float: right;display: inline-block;background: url(<?php echo MODULE_URL;?>public/mobile/img/right_arrow.png) no-repeat center;
width: 30px;height: 100%;background-size: 9px 15px;}
.user_info {position: fixed;left: 0;right: 0;top: 0;bottom: 0;-webkit-box-sizing: border-box;box-sizing: border-box;background-color: rgba(0,0,0,.53);
text-align: center;z-index: 9999;font-size: 20px;color: #fe6700;}
.user_info>div {position: absolute;left: 6%;right: 6%;top: 45px;padding: 0 20px;background-color: #fff;padding-bottom: 33px;padding-top: 10px;}
.user_name {text-align: left;color: #666;font-size: 14px;}
.btn {height: 44px;display: block;background-color: #7bb52d;font: 20px "黑体";text-align: center;color: #fff;cursor: pointer;}
.user_info>div>span {display: inline-block;width: 30px;height: 30px;background: #fff;font-size: 24px;color: #aaa;-webkit-border-radius: 100%;-moz-border-radius: 100%;-o-border-radius: 100%;border-radius: 100%;line-height: 30px;text-align: center;position: absolute;top: -15px;right: -15px;
font-family: 宋体b8b\4f53;cursor: default;}
.user_name > input {display: block;width: 100%;border-radius: 3px;height: 44px;padding: 0 10px;margin-bottom: 10px;border: 1px solid #ccc;-webkit-box-sizing: border-box;box-sizing: border-box;}
.user_name > select {display: block;width: 100%;height: 44px;border-radius: 3px;padding: 0 10px;margin-bottom: 10px;border: 1px solid #ccc;-webkit-box-sizing: border-box;
box-sizing: border-box;text-align: left;color: #666;font-size: 14px;}
.close_pupop_c {width: 200px; margin: 0 auto;}
.close_pupop_button {width: 90px;height: 30px;border-radius: 5px;line-height: 30px;font-size: 16px;text-align: center;}
.close_pupop_button_1 {background: #e74580;color: #fff;}
.close_pupop_button_2 {background: #56c454;color: #fff;margin-left: 20px;}
.weui_switch {font-size: 14px;-webkit-appearance: none;-moz-appearance: none;appearance: none;position: relative;width: 48px;height: 28px;border: 1px solid #DFDFDF;outline: 0;border-radius: 16px;box-sizing: border-box;background: #DFDFDF;vertical-align: middle;float: right;top: 8px;right: 12px;}
.weui_switch:before {content: " ";position: absolute;top: 0;left: 0;width: 46px;height: 26px;border-radius: 15px;background-color: #FDFDFD;-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.weui_switch:after {content: " ";position: absolute;top: 0;left: 0;width: 26px;height: 26px;border-radius: 15px;background-color: #FFFFFF;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.icon_text >span {text-align: right;color: #888;line-height: 30px;margin-left: 47px;}
.aui-head-access { padding: 6px 10px; position: relative; display: -webkit-box; display: -webkit-flex; display: flex; -webkit-box-align: center; -webkit-align-items: center; align-items: center; background-color: white; margin-top: 9px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: inherit; } .aui-head-access-hd { -webkit-box-flex: 1; -webkit-flex: 1; flex: 1; font-size: 13px; color: #333333; } .aui-grids { position: relative; overflow: hidden; background-color: white; text-align: center; } .aui-grids { position: relative; overflow: hidden; padding: 13px  0; } .aui-grids-item { width: 33.333%; float: left; position: relative; z-index: 0; padding: 5 0; font-size: 11rem; text-align: center; color: #fff; } .aui-grids-item span { text-align: center; width: 100%; display: block; color: #323232; font-size: 9px; } .aui-grids-image a span img { width: 40px; height: 40px; display: block; border: none; margin: 0 auto; } .aui-grids-image a .aui-grids-item-text { color: #666666; font-size: 12px; margin-top: 5px; }
.out{ text-align: center;background: #ef6c6c;}
</style>
<?php  include $this->template('port');?>
<body>
<div class="top_head_my">
    <a id="scroll">
        <div class="my_img">
            <img src="<?php  echo tomedia($_W['fans']['tag']['avatar']);?>">
        </div>
        <div class="my_unseInfo">
            <div class="my_unseInfoName"><?php  echo $it['realname'];?></div>
            <div class="my_unseInfoDescribe"><?php  echo $it['mobile'];?></div>
        </div>
        <div class="my_unseInfo_right"></div>
    </a>
</div>
<?php  if($_W['schooltype']) { ?>
<div class="aui-head-access">
	<div class="aui-head-access-hd">我的活动</div>
</div>
<div class="aui-grids aui-grids-image">
	<a href="<?php  echo $this->createMobileUrl('mysaleinfo', array('op'=>'tuan','schoolid'=> $schoolid))?>" class="aui-grids-item">
		<span class="mb_marsk">
			<img src="<?php echo OSSURL;?>public/mobile/img/tuanapp.png" alt="">
		</span>
		<span class="aui-grids-item-text">团购订单</span>
	</a>
	<a href="<?php  echo $this->createMobileUrl('mysaleinfo', array('op'=>'zhuli','schoolid'=> $schoolid))?>" class="aui-grids-item">
		<span class="mb_marsk">
			<img src="<?php echo OSSURL;?>public/mobile/img/zhuliapp.png" alt="">
		</span>
		<span class="aui-grids-item-text">助力订单</span>
	</a>
	<!-- <a href="<?php  echo $this->createMobileUrl('mysaleinfo', array('op'=>'tuig','schoolid'=> $schoolid))?>" class="aui-grids-item"> -->
		<!-- <span class="mb_marsk"> -->
			<!-- <img src="<?php echo OSSURL;?>public/mobile/img/icon-item005.png" alt=""> -->
		<!-- </span> -->
		<!-- <span class="aui-grids-item-text">我的推广</span> -->
	<!-- </a> -->
</div>
<?php  } ?>
<div class="aui-head-access">
    <div class="aui-head-access-hd">我的活动</div>
</div>
<div class="aui-grids aui-grids-image">
    <a href="<?php  echo $this->createMobileUrl('mysaleinfo', array('op'=>'tuan','schoolid'=> $schoolid))?>" class="aui-grids-item">
		<span class="mb_marsk">
			<img src="<?php echo OSSURL;?>public/mobile/img/tuanapp.png" alt="">
		</span>
        <span class="aui-grids-item-text">团购订单</span>
    </a>
    <a href="<?php  echo $this->createMobileUrl('mysaleinfo', array('op'=>'zhuli','schoolid'=> $schoolid))?>" class="aui-grids-item">
		<span class="mb_marsk">
			<img src="<?php echo OSSURL;?>public/mobile/img/zhuliapp.png" alt="">
		</span>
        <span class="aui-grids-item-text">助力订单</span>
    </a>
     <a href="<?php  echo $this->createMobileUrl('mysaleinfo', array('op'=>'tuig','schoolid'=> $schoolid))?>" class="aui-grids-item">
     <span class="mb_marsk">
     <img src="<?php echo OSSURL;?>public/mobile/img/icon-item005.png" alt="">
     </span>
     <span class="aui-grids-item-text">我的推广</span>
     </a>
</div>
<ul class="common_list_imgtext6">
    <div class="common_list_imgtext6GroupBox class_li">
        <li>
            <a>
                <div class="icon">
                    <img src="<?php echo MODULE_URL;?>public/mobile/img/parents_accountinfo.png">
                </div>
                <div class="icon_text">
                    <?php  echo $language['useredit_ltsz'];?><span id="msg_word"><?php  if($it['is_allowmsg'] == 2) { ?>接收聊天信息<?php  } else { ?>不接收聊天信息<?php  } ?>&nbsp;</span><input <?php  if($it['is_allowmsg'] == 2) { ?>checked<?php  } ?> id="is_personal" class="weui_switch" type="checkbox" onclick="change_msg();"/>
                </div>
            </a>
        </li>		
        <div class="li_line"></div>
        <li>
            <a class="mb_marsk" href="<?php  echo $this->createMobileUrl('myfamily', array('schoolid' => $schoolid, 'id' => $userss), true)?>">
                <div class="icon">
                    <img src="<?php echo MODULE_URL;?>public/mobile/img/parents_myHome.png">
                </div>
                <div class="icon_text">
                    <?php  echo $language['useredit_wdjt'];?><div class="right_arrow_icon"></div>
                </div>
            </a>
        </li>
		 <div class="li_line"></div>
        <?php  if(is_showpf()) { ?>
		<li>
            <a class="mb_marsk" href="<?php  echo $this->createMobileUrl('stuinfocard', array('schoolid' => $schoolid, 'id' => $userss), true)?>">
                <div class="icon">
                    <img src="<?php echo MODULE_URL;?>public/mobile/img/59ddef4d7a25b_47.png">
                </div>
                <div class="icon_text">
                    详细信息<div class="right_arrow_icon"></div>
                </div>
            </a>
        </li>
        <div class="li_line"></div>

        <?php  } ?>
        <div class="li_line"></div>
        <li>
            <a class="mb_marsk" href="javascript:;" onclick="cancel_wx_bind()">
                <div class="icon">
                    <img src="<?php echo MODULE_URL;?>public/mobile/img/parents_qxbd.png">
                </div>
                <div class="icon_text">
                     <?php  echo $language['useredit_qxwxbd'];?><div class="right_arrow_icon"></div>
                </div>
            </a>
        </li>
    </div>
</ul>
<ul class="common_list_imgtext6">
    <div class="common_list_imgtext6GroupBox class_li">
        <li>
            <a class="mb_marsk" onclick="out()">
                <div class="icon_text out" style="font-size: 15px; color: #fff;">退出登录</div>
            </a>
        </li>
    </div>
</ul>
<div class="blank"></div>
<div class="user_info" id="user_info" style="display:none;">
   <div style="border-radius: 5%;">
		<ul>
			<p>请完善您的联系方式</p>
			<li class="user_name">
			真实姓名
				<input type="text" placeholder="请输入您的姓名" name ="name" id="name" value="<?php  if(!empty($it['realname'])) { ?><?php  echo $it['realname'];?><?php  } ?>">
			</li>
			<li class="user_name">
			  手机号
				<input type="text" placeholder="请输入您的手机号" name ="mobile" id="mobile" value="<?php  if(!empty($it['mobile'])) { ?><?php  echo $it['mobile'];?><?php  } ?>">
			</li>
		</ul>
		<div class="close_pupop_c">
			<div id="tijiao1" class="close_pupop_button close_pupop_button_1 float_l">确定</div>
			<div id="close" class="close_pupop_button close_pupop_button_2 float_l">取消</div>
		</div>
   </div>
</div>
<div class="user_info" id="user_info1" style="display:none;">
   <div style="border-radius: 5%;">
		<ul>
			<p>聊天设置</p>
			<li class="user_name">是否接收其他学生或家长的信息
				<select id="is_allowmsg">
					<option value="2" <?php  if($it['is_allowmsg'] ==2) { ?>selected="selected"<?php  } ?>>允许</option>
					<option value="1" <?php  if($it['is_allowmsg'] ==1) { ?>selected="selected"<?php  } ?>>拒绝</option>
				</select>
			</li>	
		</ul>
		<div class="close_pupop_c">
			<div id="tijiao2" class="close_pupop_button close_pupop_button_1 float_l">确定</div>
			<div id="close1" class="close_pupop_button close_pupop_button_2 float_l">取消</div>
		</div>
   </div>
</div>
<div class="top_height_blank70"></div>
<script>
//退出
function out(){
	jConfirm('确认退出此用户吗？', '确认对话框', function (r) {
		if (r) {
			location.href = "<?php  echo $this->createMobileUrl('useredit',array('schoolid'=> $schoolid,'op'=> 'out'))?>";
		}else{
			return false;
		}
	})
}
$("#scroll").on('click', function () {
	$('#user_info').show();
});
$("#close").on('click', function () {
	$('#user_info').hide();
});
$("#tijiao1").on('click', function () {
	var userid =  $("#userid").val(); 
	var name = $("#name").val();
	var mobile = $("#mobile").val();
	var truthBeTold = window.confirm('确认要修改吗?'); 
	 data = {
		schoolid:"<?php  echo $schoolid;?>",
		name:name,
		mobile:mobile,
		userid:"<?php  echo $it['id'];?>",
		'json':''
	}

	reg=/^(0|86|17951)?(13[0-9]|15[012356789]|17[0-9]|18[0-9]|14[57])[0-9]{8}$/;	
	if (name == "" || name == undefined || name == null) {
		jTips('请输入您的姓名！');
		return false;
	}
	if (mobile == "" || mobile == undefined || mobile == null || !reg.test(mobile)) {
		jTips('手机号有误或为空！');
		return false;
	}
	
	if (truthBeTold) {

	$.post("<?php  echo $this->createMobileUrl('indexajax',array('op'=>'useredit'))?>",data,
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
function change_msg() {
	var isPersonal = $("#is_personal").prop('checked')?"Y":"N";	
	var msg_word = $("#is_personal").prop('checked')?"接收聊天信息":"不接收聊天信息";	
	$.ajax({
		url: "<?php  echo $this->createMobileUrl('indexajax',array('op'=>'liaotian'))?>",
		data : {schoolid:"<?php  echo $schoolid;?>",is_allowmsg:isPersonal,userid:"<?php  echo $it['id'];?>",openid:"<?php  echo $openid;?>"},	
		dataType: 'json',
		type: "post",
		success: function (data) {
			if(data.result){
				$('#msg_word').html(msg_word);
				jTips(data.msg);
			}else{
				jTips(data.msg);
			}
		}
	});	
}
function cancel_wx_bind() {
	jConfirm('取消绑定后，本微信号将需要重新绑定学生，是否确定？', '确认对话框', function (r) {
		if (r) {
			$.ajax({
				url: "<?php  echo $this->createMobileUrl('indexajax',array('op'=>'jzjb'))?>",
				data: {sid: "<?php  echo $it['sid'];?>", userid: "<?php  echo $it['id'];?>", weid: "<?php  echo $weid;?>", schoolid: "<?php  echo $schoolid;?>", pard: "<?php  echo $it['pard'];?>", openid: "<?php  echo $openid;?>"},	
				dataType: 'json',
				type: "post",
				success: function (data) {
					jTips(data.msg, function () {
						if(data.result){
							location.href = "<?php  echo $this->createMobileUrl('bangding',array('schoolid'=> $schoolid))?>";
						}
						return true;
					});
				}
			});
		} else {
			return false;
		}
	})
}
</script>  
<?php  include $this->template('footer');?>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
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
</script>
