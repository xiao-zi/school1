<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<?php  include $this->template('hide_url');?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php  echo $school['title'];?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/bindingFormFor.css" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=4.60120" />
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.6"></script>
<?php  echo register_jssdks();?>
<?php  include $this->template('port');?>
<style>
.item-button{position: absolute;right: 0px;border-radius: 5px;border: 1px solid #14c682;bottom: 0px;}
.item-button a{margin: 2px;font-size: 13px;color: #6f6969;}
</style>
</head>
<body>
<div class="all">
	<div class="bangdingForm">
		<div class="bangdingTab">
			<div class="changeTab leftPosition activeTab" onclick="changeTab(this,'parent');"><?php  echo $language['bangding_wxbd_stutitle'];?></div>
			<div class="changeTab rightPosition" onclick="changeTab(this,'teacher');"><?php  echo $language['bangding_wxbd_teatitle'];?></div>
		</div>
		<div class="bangdingBox">
			<div class="headerBox">
				<div class="leftHeader">
					<img id="wxiconpath" alt="" src="<?php  echo tomedia($_W['fans']['tag']['avatar']);?>" />
					<span id="wxname"><?php  echo $_W['fans']['nickname'];?></span>
				</div>
				<div class="linkImg">
					<img alt="" src="<?php echo OSSURL;?>public/mobile/img/ico_linkImg.png" />
				</div>
				<div class="rightHeader">
					<img style="height:80px;" src="<?php echo OSSURL;?>public/mobile/img/default_babyHeader.png" />
					<span><?php  echo $language['bangding_wxbd_stuico'];?></span>
				</div>
			</div>				
			<div id="parentBox" class="changeBox activeBox">
				<ul>
					<li>
						<span class="l"><?php  echo $language['bangding_wxbd_stuname'];?>：</span>
						<span class="r">
							<input id="s_name" type="text" value="" />
						</span>
					</li>
					<?php  if($school['bd_type'] ==1 || $school['bd_type'] ==4 || $school['bd_type'] ==5 || $school['bd_type'] ==7 ) { ?>
					<li>
						<span class="l">手机号码：</span>
						<span class="r">
							<input id="mobile" type="tel" maxlength="11" value="" />
							<?php  if($bdset['sms_SignName'] && $bdset['sms_Code'] && $sms_set['code'] ==1) { ?>
							<div class="item-button" href="javascript:;" id="btn-code">
								<a class="button button-danger" >获取验证码</a>
							</div>	
							<?php  } ?>
						</span>
					</li>
						<?php  if($bdset['sms_SignName'] && $bdset['sms_Code'] && $sms_set['code'] ==1) { ?>
							<li>
								<span class="l">验&nbsp;&nbsp;证&nbsp;&nbsp;码：</span>
								<span class="r">
									<input id="mobilecode" type="tel" maxlength="6" value="" />
								</span>
							</li>
						<?php  } ?>						
					<?php  } ?>
					<?php  if($school['bd_type'] ==2 || $school['bd_type'] ==4 || $school['bd_type'] ==6 || $school['bd_type'] ==7) { ?>
					<li>
						<span class="l">绑&nbsp;&nbsp;定&nbsp;&nbsp;码：</span>
						<span class="r">
							<input id="code" type="text" value="" />
						</span>
					</li>						
					<?php  } ?>
					<?php  if($school['bd_type'] ==3 || $school['bd_type'] ==5 || $school['bd_type'] ==6 || $school['bd_type'] ==7) { ?>
					<li>
						<span class="l">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号：</span>
						<span class="r">
							<input id="xuehao" type="text" value="" />
						</span>
					</li>
					<?php  } ?>
					<li>
						<span class="l"><?php  echo $language['bangding_wxbd_guanxi'];?>：</span>
						<span class="r">
							<label>请选择</label>
								<select id="subjectId">
									<option value="">请选择</option>
									<?php  if(getoauthurl() != 'wxzlh360.com') { ?>
									<option value="2"><?php  echo $language['bangding_wxbd_mq'];?></option>
									<option value="3"><?php  echo $language['bangding_wxbd_fq'];?></option>
									<option value="5"><?php  echo $language['bangding_wxbd_jz'];?></option>
									<?php  } ?>
									<option value="4"><?php  echo $language['bangding_wxbd_br'];?></option>
								</select>
							<i></i>
						</span>
					</li>
					<?php  if(!$bdset['sms_SignName'] && !$bdset['sms_Code'] && $sms_set['code'] !=1) { ?>	
					<li class="no_padding">
						<span class="l"></span>
						<span class="remind">
							<i><img alt="" src="<?php echo OSSURL;?>public/mobile/img/ico_attention.png" /></i>
							<label><?php  echo $language['bangding_bottip'];?></label>
						</span>
					</li>
					<?php  } ?>
				</ul>
				<div class="submitBtn mainColor" onclick="bangDing();">绑定</div>
			</div>
			<div id="teacherBox" class="changeBox">
				<ul>
					<li>
						<span class="l"><?php  echo $language['bangding_wxbd_teaname'];?>：</span>
						<span class="r">
							<input id="tname" type="text" value="" />
						</span>
					</li>
					<li>
						<span class="l">绑&nbsp;&nbsp;定&nbsp;&nbsp;码：</span>
						<span class="r">
							<input id="tcode" type="tel" value="" />
						</span>
					</li>
					<?php  if($sms_set['code'] ==1 && $bdset['sms_SignName'] && $bdset['sms_Code']) { ?>
					<li>
						<span class="l">手机号码：</span>
						<span class="r">
							<input id="tmobile" type="tel" maxlength="11" value="" />
							<div class="item-button">
								<a class="button button-danger" href="javascript:;" id="btn-code1">获取验证码</a>
							</div>
						</span>
					</li>
					<li>
						<span class="l">验&nbsp;&nbsp;证&nbsp;&nbsp;码：</span>
						<span class="r">
							<input id="tmobilecode" type="tel" maxlength="6" value="" />							
						</span>
					</li>
					<?php  } ?>						
				</ul>
				<div class="submitBtn mainColor" onclick="bangDing1();">绑定</div>
			</div>
			
		</div>
	</div>
</div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
<script>
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
	$("#titlebar_bg").hide();
	}
}, 100);
$('input').on('blur', function() {
    var count = 0;
    var screenHeight = window.screen.height;
    var blurInterval = setInterval(function () {
        $('body').css('min-height', (screenHeight-=10)+'px');
        if (count >= 10) {
            clearInterval(blurInterval);
            $('body').css('min-height', '');
        }
        count++;
    }, 10)
});
$('select').change(function() {
    var count = 0;
    var screenHeight = window.screen.height;
    var blurInterval = setInterval(function () {
        $('body').css('min-height', (screenHeight-=10)+'px');
        if (count >= 10) {
            clearInterval(blurInterval);
            $('body').css('min-height', '');
        }
        count++;
    }, 10)
});
</script>
<script type="text/javascript">
var campus = $("#campus").val();
var subjectId = $('#subjectId').val();
$(document).ready(function() {
	$("#subjectId").change(function() {
		changeGx();
	});
});
function changeGx(){
	$("#subjectId").parent().find("label").html($("#subjectId").find("option:selected").text());
}
var $binding_sms = "<?php  echo $sms_set['code'];?>";
if($binding_sms == 1) {
	$('#btn-code').click(function(){
		if($(this).hasClass('disabled')) {
			return false;
		}
		var mobile = $("#mobile").val();
		if($("#mobile").val() == null || $("#mobile").val() == ""){
			jTips("请输入手机号！");
			return;
		}
		<?php  if($oauthurl == "jy.ddcywl.com") { ?>
		if(!$("#mobile").val().match(/^[1-9]\d{9,16}$/)){
			jTips("手机格式不正确！");
			return;
		}
		<?php  } else { ?>
		if(!$("#mobile").val().match(/^(0|86|17951)?(13[0-9]|15[012356789]|16[012356789]|17[0-9]|18[0-9]|19[0-9]|14[57])[0-9]{7,8}$/)){
			jTips("手机格式不正确！");
			return;
		}
		<?php  } ?>
		var $this = $(this);
		$this.addClass("disabled");
		var downcount = 60;
		$this.html(downcount + "秒后重新获取");
		var timer = setInterval(function(){
			downcount--;
			if(downcount <= 0){
				clearInterval(timer);
				$this.html("重新获取验证码");
				$this.removeClass("disabled");
				downcount = 60;
			}else{
				$this.html(downcount + "秒后重新获取");
			}
		}, 1000);
		$.post("<?php  echo $this->createMobileUrl('comajax',array('op'=>'make_code'))?>",{mobile: mobile,weid: "<?php  echo $weid;?>",schoolid: "<?php  echo $schoolid;?>"},function(data){
			if(data.result){
				jTips(data.msg);
			}else{
				jTips(data.msg);
			}
		},'json');
	});
}
if($binding_sms == 1) {
	$('#btn-code1').click(function(){
		if($(this).hasClass('disabled')) {
			return false;
		}
		var tmobile = $("#tmobile").val();
		if($("#tmobile").val() == null || $("#tmobile").val() == ""){
			jTips("请输入手机号！");
			return;
		}
		<?php  if($oauthurl == "jy.ddcywl.com") { ?>
		if(!$("#tmobile").val().match(/^[0-9]\d{9,16}$/)){
			jTips("手机格式不正确！");
			return;
		}
		<?php  } else { ?>
		if(!$("#tmobile").val().match(/^(0|86|17951)?(13[0-9]|15[012356789]|16[012356789]|17[0-9]|18[0-9]|19[0-9]|14[57])[0-9]{7,8}$/)){
			jTips("手机格式不正确！");
			return; 
		}
		<?php  } ?>
		var $this = $(this);
		$this.addClass("disabled");
		var downcount = 60;
		$this.html(downcount + "秒后重新获取");
		var timer = setInterval(function(){
			downcount--;
			if(downcount <= 0){
				clearInterval(timer);
				$this.html("重新获取验证码");
				$this.removeClass("disabled");
				downcount = 60;
			}else{
				$this.html(downcount + "秒后重新获取");
			}
		}, 1000);
		$.post("<?php  echo $this->createMobileUrl('comajax',array('op'=>'make_code'))?>",{mobile: tmobile,weid: "<?php  echo $weid;?>",schoolid: "<?php  echo $schoolid;?>"},function(data){
			if(data.result){
				jTips(data.msg);
			}else{
				jTips(data.msg);
			}
		},'json');
	});
}
function changeTab(obj,tabName){
	$(obj).parent().children().removeClass("activeTab");
	$(obj).addClass("activeTab");
	$("#"+tabName+"Box").parent().find(".changeBox").removeClass("activeBox");
	$("#"+tabName+"Box").addClass("activeBox");
	var bangdingStr = "";
	var imgSrc = "";
	if(tabName == "parent"){
		bangdingStr = "<?php  echo $language['bangding_wxbd_stuico'];?>";
		imgSrc = "../addons/weixuexiao/public/mobile/img/default_babyHeader.png";
	}else if(tabName == "teacher"){
		bangdingStr = "<?php  echo $language['bangding_wxbd_teaico'];?>";
		imgSrc = "../addons/weixuexiao/public/mobile/img/default_school.png";
	}else{
		bangdingStr = "未知绑定";
	}
	$(".rightHeader").find("span").html(bangdingStr);
	$(".rightHeader").find("img").attr("src",imgSrc);
}

function bangDing(){
	var activeBoxID = $(".bangdingBox").find(".activeBox").attr("id");
	if(activeBoxID == "parentBox"){
		if($("#s_name").val() == null || $("#s_name").val() == ""){
			jTips("<?php  echo $language['bangding_wxbd_stuname'];?>不能为空！");
			return;
		}
 		<?php  if($school['bd_type'] ==1 || $school['bd_type'] ==4 || $school['bd_type'] ==5 || $school['bd_type'] ==7) { ?>
		if($("#mobile").val() == null || $("#mobile").val() == ""){
			jTips("手机号码不能为空！");
			return;
		}
		<?php  if($oauthurl == "jy.ddcywl.com") { ?>
		if(!$("#mobile").val().match(/^[0-9]\d{9,16}$/)){
			jTips("手机格式不正确！");
			return;
		}
		<?php  } else { ?>
		if(!$("#mobile").val().match(/^(0|86|17951)?(13[0-9]|15[012356789]|16[012356789]|17[0-9]|18[0-9]|19[0-9]|14[57])[0-9]{7,8}$/)){
			jTips("手机格式不正确！");
			return;
		}
		<?php  } ?>
		<?php  if($sms_set['code'] ==1 && $bdset['sms_SignName'] && $bdset['sms_Code']) { ?>
		if($("#mobilecode").val() == null || $("#mobilecode").val() == ""){
			jTips("请输入手机验证码");
			return;
		}
		<?php  } ?>		
		<?php  } ?>
		<?php  if($school['bd_type'] ==2 || $school['bd_type'] ==4 || $school['bd_type'] ==6 || $school['bd_type'] ==7) { ?>
		if($("#code").val() == null || $("#code").val() == ""){
			jTips("绑定码不能为空");
			return;
		}
		<?php  } ?>
		<?php  if($school['bd_type'] ==3 || $school['bd_type'] ==5 || $school['bd_type'] ==6 || $school['bd_type'] ==7) { ?>
		if($("#xuehao").val() == null || $("#xuehao").val() == ""){
			jTips("学号不能为空");
			return;
		}
		<?php  } ?>
		if($("#subjectId").val() == null || $("#subjectId").val() == ""){
			jTips("请选择关系！");
			return;
		}	
	}
	jConfirm("确认绑定？", "删除确定对话框", function (isConfirm) {
		if(isConfirm){
			var submitData = {
				openid :"<?php  echo $openid;?>",
				schoolid :"<?php  echo $schoolid;?>",
				weid :"<?php  echo $weid;?>",
				uid :"<?php  echo $_W['member']['uid'];?>",
				s_name : $("#s_name").val(),
				subjectId : $("#subjectId").val(),  //关系
				mobile : $("#mobile").val(),
				code : $("#code").val(),
				mobilecode : $("#mobilecode").val(),
				xuehao : $("#xuehao").val(),
			};
				$.post("<?php  echo $this->createMobileUrl('indexajax',array('op'=>'bdxs'))?>",submitData,function(data){
				if(data.result){
					jTips(data.msg);
					window.location.href = "<?php  echo $this->createMobileUrl('user', array('schoolid' => $schoolid), true)?>"
				}else{
					jTips(data.msg);
				}
			},'json'); 
		}
	});
}

		
function bangDing1(){
	var activeBoxID = $(".bangdingBox").find(".activeBox").attr("id");
    if(activeBoxID == "teacherBox"){
		if($("#tname").val() == null || $("#tname").val() == ""){
			jTips("<?php  echo $language['bangding_wxbd_teaname'];?>不能为空！");
			return;
		}
		if($("#tcode").val() == null || $("#tcode").val() == ""){
			jTips("绑定码不能为空！");
			return;
		}
		<?php  if($sms_set['code'] ==1 && $bdset['sms_SignName'] && $bdset['sms_Code']) { ?>
		if($("#tmobile").val() == null || $("#tmobile").val() == ""){
			jTips("手机号不能为空！");
			return;
		}
		if($("#tmobilecode").val() == null || $("#tmobilecode").val() == ""){
			jTips("请填写验证码");
			return;
		}
		<?php  } ?>	
	}
	jConfirm("确认绑定？", "删除确定对话框", function (isConfirm) {
		if(isConfirm){
			var submitData = {
				openid :"<?php  echo $openid;?>",
				schoolid :"<?php  echo $schoolid;?>",
				weid :"<?php  echo $weid;?>",
				uid :"<?php  echo $_W['member']['uid'];?>",
				tname : $("#tname").val(),
				code : $("#tcode").val(),
				mobile : $("#tmobile").val(),
				mobilecode : $("#tmobilecode").val(),
			};
			$.post("<?php  echo $this->createMobileUrl('indexajax', array('op' => 'bdls'))?>",submitData,function(data){
						if(data.result){
							jTips(data.msg);
							window.location.href = "<?php  echo $this->createMobileUrl('myschool', array('schoolid' => $schoolid), true)?>"
						}else{
							jTips(data.msg);
						}
			},'json');	
		} 
	}); 	
}
</script>
<?php  include $this->template('footer');?>
</html>