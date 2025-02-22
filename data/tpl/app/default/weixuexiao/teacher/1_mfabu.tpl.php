<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<title><?php  echo $school['title'];?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/mKtdt.css?v=4.85" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/jquery-emoji.css?v=4.85" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=4.80120" />
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/PromptBoxUtil.js?v=4.80309"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/jquery.emoji.js?v=4.8"></script>
<?php  include $this->template('port');?>
</head>
<body>
<div class="all allBg">
<div id="BlackBg" class="BlackBg"></div>
<div id="titlebar" class="header mainColor">
	<div class="l"><a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a></div>
	<div class="m">
		<span style="font-size: 18px">发布动态、通知</span>   
	</div>
	<div class="r">
		<a href="#my-menu"></a>
	</div>
</div>
<div id="titlebar_bg" class="_header"></div>	
	  <div id="fullbg" class="fullbg"></div>
		  	<div class="sendInfo wot pr">
              <a href="javascript:cancel();" class="sendBtn cancelNewBtn f15 db c2" >取消</a>
              <a href="javascript:sendPhoto();" class="sendBtn  f15 db c2" >发布</a>
		    </div>
		      <div class="textBox">
			    <span class="r">
				  <input id="title" type="text" placeholder="文章标题...">
			    </span>
			  </div>
		      <div class="textInfo">
			    <textarea id="content" type="text" name="content" cols rows placeholder="详细内容..."></textarea>
			  </div>
			  <div id="imageBox" class="imageBox">
			  </div>
			<div id="pic" class="pic parent"></div>
			<div class="blackBg" onclick="closeBox();"></div>
			<div class="selectList">
			  <div class="single" id="bjList">
				<ul>
                    <li onclick="isSelect(this);"><span class="le">全体师生</span><input type=hidden value="1" /></li>
					<li onclick="isSelect(this);"><span class="le">全体教师</span><input type=hidden value="2" /></li>
					<li onclick="isSelect(this);"><span class="le">学生和家长</span><input type=hidden value="3" /></li>
	            </ul> 
			  </div>
		    </div>
		    <div class="sendParam sendParam_wot pr" onclick="showSelectBox('bjList')" >
			  <span class="locationCon address f15" closestatus="0">
			      <i class="iconloc bj_icon_background-position float_left"></i>用户组
			  </span>
			  <span class="sendSelectParamOperBtn pa address f15 c9" closestatus="0" id="bjListShow"></span>
		      <input id="bjListValue" name="bjListValue" type="hidden">
			  <span class="sendParamOperBtn pa address f15 c9" closestatus="0">
			       <i class="iconloc fx_icon_background-position float_left"></i>
			  </span>
	        </div>
</div>
<!-- yinru -->
<script type="text/javascript">
/**
 * 课堂动态新增页面
 */
var PB = new PromptBox();

function cancel(){
	history.go(-1);
}
$(function(){
	createImageBox();
 });

function showSelectBox(obj){
	if($("#"+obj).find("ul").children().length > 0){
		$(".selectList").css("display","block");
		$(".blackBg").css("display","block");
		$("#"+obj).css("display","block");
		var height = 0;
		if($("#"+obj).attr("class") == "double"){
			$("#"+obj).css("height",$(".selectList").height());
			$("#"+obj).find("ul").css("height",$(".selectList").height()-50);
			var objList;
			if($("#"+obj+"Value").val() != ""){
				objList = $("#"+obj+"Value").val().split(",");
				var liList = $("#"+obj).find("li");
				for (var j = 0; j < liList.length; j++) {
					for (var i = 0; i < objList.length; i++) {
						if(objList[i] == liList.eq(j).find("input[type=hidden]").val()){
							liList.eq(j).find("img").attr("alt","checked");
							liList.eq(j).find("img").attr("src",ctx+"/static/styles/bjq/img/checked.png");
							liList.eq(j).find("input[type=hidden]").attr("name","checked");
							liList.eq(j).find("span[class=le]").attr("name","checkedName");
							break;
						}else{
							liList.eq(j).find("img").attr("alt","check");
							liList.eq(j).find("img").attr("src",ctx+"/static/styles/bjq/img/check.png");
							liList.eq(j).find("input[type=hidden]").attr("name","check");
							liList.eq(j).find("span[class=le]").attr("name","checkName");
						}
					}
				}
			}else{
				$("#"+obj).find("img").attr("alt","check");
				$("#"+obj).find("img").attr("src",ctx+"/static/styles/bjq/img/check.png");
				$("#"+obj).find("input[type=hidden]").attr("name","check");
				$("#"+obj).find("span[class=le]").attr("name","checkName");
			}
		}else{
			$("#"+obj).css("height",$(".selectList").height());
			$("#"+obj).find("ul").css("height",$(".selectList").height());
		}
		$(".selectList").css("margin-top",-$("#"+obj).parent().height()/2);	
	}
}

function closeBox(){
	$(".selectList").css("display","none");
	$(".blackBg").css("display","none");
	$(".single").css("display","none");
	$(".double").css("display","none");
	$(".double").css("height","auto");
	$(".double").find("ul").css("height","auto");
}

function isSelect(obj){
	$(obj).parent().children().removeAttr("class");
	$(obj).parent().find("span[class=le]").attr("name","selectName");
	$(obj).parent().find("input[type=hidden]").attr("name","select");
	$(obj).attr("class","selected");
	$(obj).find("span[class=le]").attr("name","selectedName");
	$(obj).find("input[type=hidden]").attr("name","selected");
	saveSelected(obj);
	closeBox();
}

function saveSelected(obj){
	var boxName = $(obj).parent().parent().attr("id");
	var selectedName = $(obj).find("span[class=le][name=selectedName]");
	var selectedValue = $(obj).find("input[type=hidden][name=selected]");
	$("#"+boxName+"Show").html(selectedName.html());
	$("#"+boxName+"Value").val(selectedValue.val());
}

function sendPhoto(){
	var content = $("#content").val();
	var title = $("#title").val();
//	var photoUrlArray = new Array();
//	$(".boxImages").each(function() {
//		if($(this).hasClass("baseUploadImg")){
//			photoUrlArray.push($(this).attr("src"));
//		}
//	});
	if(title=='' || title.length>30){
		jTips("标题必填，且字数小于30字！");
		return false;
	}
	if(content==''){
		jTips("文字内容不能为空");
		return false;
	}
	var bjid =  $("#bjListValue").val(); 
	if(bjid == undefined || bjid == null || bjid == "" ){
		jTips("请选择接受用户组！");
		return false;
	}
	var photoUrls = images.serverId.join(',');
	jConfirm("确定发布?", "删除确定对话框", function (isConfirm) {
		if (isConfirm) {
			PB.prompt("信息发布中，请勿关闭本页面~","forever");
			var submitData = {
				weid:"<?php  echo $weid;?>",
				bj_id : bjid,   //用户组
				openid : "<?php  echo $openid;?>",
				schoolid : "<?php  echo $schoolid;?>",
				title : title,
				content : content,
				userid : "<?php  echo $it['id'];?>",
				tid:"<?php  echo $it['tid'];?>",
				tname:"<?php  echo $teacher['tname'];?>",
				photoUrls : photoUrls,
			};
			$.post("<?php  echo $this->createMobileUrl('dongtaiajax',array('op'=>'mfabu'))?>",submitData,function(data){

				if(data.result){
					jTips(data.msg);
					location.href = "<?php  echo $this->createMobileUrl('mnoticelist', array('schoolid' => $schoolid), true)?>";
				}else{
					jTips(data.msg);
				}
			},'json'); 		
		}
	});
}
</script>
<?php  include $this->template('newfooter');?>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>