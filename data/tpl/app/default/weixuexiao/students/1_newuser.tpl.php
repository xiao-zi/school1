<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<?php  include $this->template('hide_url');?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="no">
	<meta name="format-detection" content="telephone=no">
	<title><?php  echo $school['title'];?></title>
	<?php  echo register_jssdks();?>
	<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/new_yab.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/parent_index.css">
	<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.6"></script>
	<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/jquery.reveal.js"></script>
</head>
<style>
.ovfHiden{overflow:hidden;overflow-y:hidden;position:fixed; }
.parent_notify{padding: 12px 0 12px 25px;background:url(<?php echo MODULE_URL;?>public/mobile/img/parent_notify_icon.png) no-repeat #fff;background-size:19px 15px;background-position:15px center;color:#999;margin-bottom: 10px;text-indent: 1em;}
.school_option li:after{content: "";width:9px;height:16px;position:absolute;right:15px;top:15px;background: url(<?php echo MODULE_URL;?>public/mobile/img/right_arrow.png) no-repeat;background-position: center center;background-size: 9px 16px;}
.head {position: relative;width: 100%;<?php  if($stutop['status'] == 0) { ?>background: #1071b7;<?php  } else if($stutop['status'] == 1 ) { ?>background: <?php  echo $stutop['color'];?>;<?php  } else if($stutop['status'] == 2) { ?>background:url(<?php  echo tomedia($stutop['icon'])?>);<?php  } ?>background-size: 100% auto;-moz-background-size: 100% auto;-webkit-background-size: 100% 100%;}
.head .ptool {float: right;display: inline-block;text-decoration: none;height: 50px;line-height: 42px;width: 50px;text-align: center;font-weight: bold;}
.head .pdetail {height: 120px;padding: 30px 0 0 20px;-webkit-box-sizing: border-box;}
.head .pdetail .img-circle {float: left;width: 74px;height: 86px;overflow: hidden;margin-right: 10px;}
.head .pdetail .img-circle img {border-radius: 50%; width: 66px; margin-left: 5px; margin-top: 5px; height: 66px;}
.head .pdetail .img-circle span {font-size: 14px;line-height: 10px;padding-left: 5px;color: #E8ECF1;font-weight: bolder;}
.head .pdetail .pull-left span.name {font-size: 16px;display: inline-block;max-width: 150px;height: 18px;line-height: 21px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;word-break: keep-all;margin-top: 11px;}
.head .pdetail .pull-left span {display: block;color: #FFF;line-height: 22px;}
.head .pdetail .pull-left span.type {font-size: 12px;}
.head .head-nav {height: 50px;line-height: 20px;padding-top: 7px;}
.head .head-nav .head-nav-list:first-child {background: none;}
.head .head-nav .head-nav-list > span {font-weight: bold;display: block;font-size: 14px;}
.head .head-nav .head-nav-list {display: inline-block;float: left;text-decoration: none;color: #FFF;width: 50%;text-align: center;font-size: 16px;background: -webkit-gradient(linear, 0 0, 0 100, from(rgba(255,255,255,0.5)), to(rgba(255,255,255,0.5)) ) no-repeat left center;-webkit-background-size: 1px 75%;}
.user {font-size: 15px;color: #666; margin-top: -10px;  width: 90%;  margin-left: 5%;}
.order {height: 45px;}
.order_li {float: left;height: 40px;text-align: center;line-height: 39px;background-color: #fff;width: 25%;-webkit-box-sizing: border-box;box-sizing: border-box;}
.selectList {position: fixed;left: 0;right: 0;top: 0;bottom: 0;-webkit-box-sizing: border-box;box-sizing: border-box;background-color: rgba(0,0,0,.53);
text-align: center;z-index: 30;font-size: 20px;color: #fe6700;}
.selectList .single {position: absolute;left: 6%;right: 6%;top: 5%;padding: 0 20px;background-color: #fff;padding-bottom: 15px;padding-top: 10px;}
.selectList ul {width: 100%;height: auto;overflow: auto;}
.selectList ul li {height: 50px;line-height: 50px;border-bottom: 1px solid #e9e9e9;padding: 5px 10px;margin-top:5px;background:#efefef;border-radius: 10px}
.selectList ul li span.le {height: 50px;line-height: 50px;float: left;font-size: 16px;}
.selectList ul li span.ri {float: right;height: 50px;line-height: 50px;font-size: 16px;}
.bubbling_wrap {position: relative;margin: 0 auto;width: 55px;height: 55px;}
.item a img {width: 55px;height: 55px;margin: 0 auto;}
.order_li> a[value]::after {display: inline-block;left: -webkit-calc( 100% - 8px );left: calc( 100% - 8px );top: 6px;content: attr(value);font-size: 12px;line-height: 16px;padding: 0 5px;height: 16px;-webkit-border-radius: 8px;border-radius: 8px;background-color: #dd1f1f;color: #fff;-webkit-transform: scale(.8);transform: scale(.8);}
.user_info {position: fixed;left: 0;right: 0;top: 0;bottom: 0;-webkit-box-sizing: border-box;box-sizing: border-box;background-color: rgba(0,0,0,.53);
text-align: center;z-index: 9999;font-size: 20px;color: #fe6700;}
.user_info>div {position: absolute;left: 6%;right: 6%;top: 200px;padding: 0 20px;background-color: #fff;padding-bottom: 33px;padding-top: 10px;}
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
.sfqh{border: 1px solid #f4f4f9;border-radius:8px;font-size: 14px;color: #333;padding: 0px 2px 0px 2px;background-color: #fff;}
.click {width: auto;height: 27px;right: 0;top: 93px;background-color: #ceb750;border-radius: 50px 0 0 50px;z-index: 2; position: fixed;}
.font_icon{width: 15px;margin-top: 6px;margin-left: 7px;margin-right: 2px;}
.useredits{line-height: 28px;float: right;margin-right: 4px;color:#fff}
.pull-left{border-radius: 12px;width: 93%;height: 81px; background: rgba(0,0,0,0.2);}
.cashbag{width: 100%;height: 60px;margin-bottom: 10px;position: relative;background-color: #fff;padding: 10px 0 0 0px;}
.left_bag{width: 21%;float: left;text-align: center;margin-left: 25px;}
.center_bag{float: left;margin-top: 10px;margin-left: 19px;<?php  if($school['Is_point'] == 1) { ?>width: 32%;<?php  } else { ?>width: 50%;<?php  } ?>}
.right_bag{float: left;margin-top: 13px;<?php  if($school['is_chongzhi'] == 1) { ?>width: 32%;<?php  } else { ?>width: 50%;<?php  } ?>}
.stuimg{ border-radius: 50%;margin-left:1px;margin-right:5px;width: 50px; height: 50px;float: left;}
.stutext{float: left;width: 70%;}
.stutitle{max-width:100%;height: 25px; line-height: 25px; font-size: 14px; color:gray; float: left; overflow: hidden; text-overflow:ellipsis;white-space: nowrap}
.boytip {height: 20px;width: 22px; float:left; background: url(<?php echo OSSURL;?>public/mobile/img/boy_icon.png) right center no-repeat;align-items: center;background-size: 16px;}
.girltip {height: 20px;width: 22px; float:left; background: url(<?php echo OSSURL;?>public/mobile/img/girl_icon.png) right center no-repeat;align-items: center;background-size: 16px;}
.pard2 {line-height: 20px; height: 20px;background: #ff9f22;color: white;display:flex;border-radius: 5px; width: 30px;float:left;padding-left: 5px;padding-right: 3px;margin-left: 5px;}
.reveal-modal-bg {position: fixed;height: 100%;width: 100%;background: #000;background: rgba(0,0,0,.8);z-index: 100;display: none;top: 0;left: 0; }

</style>
<body >
<div class="all">
<a class="click" id="Changesf" style="top:55px">
	<img class="font_icon" src="<?php echo MODULE_URL;?>public/mobile/img/change_image.png"></img><div class="useredits"><?php  echo $language['user_qh'];?></div>
</a>
<a class="click" href="<?php  echo $this->createMobileUrl('useredit', array('schoolid' => $schoolid), true)?>">
	<img class="font_icon" src="<?php echo MODULE_URL;?>public/mobile/img/evaluation_edit_icon.png"></img><div class="useredits"><?php  echo $language['user_grzx'];?></div>
</a>
<div class="head" <?php  if($school['is_shoufei'] == 1) { ?>style="height: 200px;"<?php  } ?>>
<div class="pdetail">
	<input type="hidden" id="bigImage" name="bigImage"/>
	<div class="img-circle" onclick="uploadImg(this);">
		<img src="<?php  if(!empty($students['icon'])) { ?><?php  echo tomedia($students['icon'])?><?php  } else { ?><?php  echo tomedia($school['spic'])?><?php  } ?>">
	</div>
	<div class="pull-left">
		<span class="name"><?php  echo $_W['fans']['nickname'];?></span>
		<span class="type"><?php  echo $language['user_sf'];?>:<?php  echo $pard;?> </span>
		<span class="type"><?php  echo $language['user_xm'];?>:<?php  if(!empty($it['realname'])) { ?><?php  echo $it['realname'];?><?php  } else if(!empty($item['realname'])) { ?><?php  echo $item['realname'];?><?php  } ?></span>
	</div>
</div>
<div class="head-nav">
	<a class="head-nav-list"><?php  echo $language['user_bj'];?><span><?php  echo $mybanji['sname'];?></span></a>
	<a class="head-nav-list"><?php  echo $language['user_xs'];?><span><?php  echo $students['s_name'];?></span><img style="margin-top: -17px;position: absolute;margin-left: 23px;"class="font_icon" src="<?php echo OSSURL;?>public/mobile/img/ico_<?php  if($students['sex'] == 1) { ?>boy<?php  } ?><?php  if($students['sex'] == 0) { ?>girl<?php  } ?>.png"></img></a>
</div>
<?php  if($school['is_shoufei'] == 1) { ?>
<section class="user" style="margin-top: -27px;">
	<ul class="order" style="padding-top: 19px;">
		<li style="border-radius: 9px 0 0 0;" class="order_li"><a href="<?php  echo $this->createMobileUrl('order', array('schoolid' => $schoolid, 'op' => 'all_g'), true)?>"><?php  echo $language['user_qb'];?></a></li>
		<li class="order_li"><a href="<?php  echo $this->createMobileUrl('order', array('schoolid' => $schoolid, 'op' => 'no_g'), true)?>" <?php  if($rest != 0) { ?>value = "<?php  echo $rest;?>"<?php  } ?>><?php  echo $language['user_djf'];?></a></li>
		<li class="order_li"><a href="<?php  echo $this->createMobileUrl('order', array('schoolid' => $schoolid, 'op' => 'yes_g'), true)?>"><?php  echo $language['user_yjf'];?></a></li>
		<li style="border-radius: 0 9px 0 0;" class="order_li"><a href="<?php  echo $this->createMobileUrl('order', array('schoolid' => $schoolid, 'op' => 'cancel_g'), true)?>"><?php  echo $language['user_ytf'];?></a></li>
	</ul>
</section>
<?php  } ?>
</div>
<?php  if($school['is_chongzhi'] == 1) { ?>
<div class="cashbag">
	<div class="left_bag">
		<img class="bagimg" src="<?php echo MODULE_URL;?>public/mobile/img/parents_accountinfo.png" style="width: 24px;margin-top: 9px;">
		<div><?php  echo $language['user_xsqb'];?></div>
	</div>
	<?php  if($school['is_chongzhi'] == 1) { ?>
	<div class="center_bag" onclick="goto_yuecostlog();">
		<div style="text-align: center;font-size: 20px;color: #de7434;">￥<?php  echo $all_yue;?></div>
		<div style="text-align: center;">
			<img class="sm_bagimg" src="<?php echo MODULE_URL;?>public/mobile/img/cash_pay.png" style="width: 12px;">
			<span><?php  echo $language['user_ye'];?></span>
		</div>
	</div>
	<?php  } ?>
	<?php  if($school['Is_point'] == 1) { ?>
	<div class="right_bag">
		<div style="font-size: 20px;text-align: center;color: #de7434;"><?php  echo $students['points'];?></div>
		<div style="text-align: center;">
			<img class="sm_bagimg" src="<?php echo MODULE_URL;?>public/mobile/img/jifen.png" style="width: 12px;">
			<span><?php  echo $language['user_jf'];?></span>
		</div>
	</div>
	<?php  } ?>
</div>
<?php  } ?>
<div class="banner">
	<ul class="item_list">
		<?php  if(is_array($icons1)) { foreach($icons1 as $row) { ?>
		<li class="item">
			<a <?php  if($row['salfcard']) { ?>onclick="salfcard(<?php  echo $it['sid'];?>)"<?php  } else { ?>href="<?php  echo $row['url'];?>"<?php  } ?>>
				<div class="bubbling_wrap">
					<img src="<?php  echo tomedia($row['icon'])?>">
					<?php  if($row['ismassges']) { ?><?php  if($row['shengyu'] > 0) { ?><span class="tips_bubbling"><?php  echo $row['shengyu'];?><span><?php  } ?><?php  } ?>
				</div>
				<p style="font-size: 12px; color: #666"><?php  echo $row['name'];?></p>
			</a>
		</li>
		<?php  } } ?>
	</ul>
</div>
<div class="parent_notify" style="margin: 0;">
	<p style="height: 16px; font-size: 12px; line-height: 14px;color: #999999">
		<a style="color:#999;font-size:12px"><?php  echo $language['user_tz'];?></a>
		<marquee behavior="scroll" scrollamount="4" direction="left" width="80%">
			<?php  echo $school['gonggao'];?>
		</marquee>
	</p>
</div>
<div style="margin-bottom: 10px"></div>
<div class="parent_option">
	<?php  if(is_array($icons2)) { foreach($icons2 as $row) { ?>
	<a <?php  if($row['salfcard']) { ?>onclick="salfcard(<?php  echo $it['sid'];?>)"<?php  } else { ?>href="<?php  echo $row['url'];?>"<?php  } ?> style="background: url(<?php  echo tomedia($row['icon'])?>) no-repeat;   background-size: 38px 40px;background-position: 90% center;">
		<h3 style="font-size: 16px;color:<?php  echo $row['color'];?>"><?php  echo $row['name'];?></h3>
		<p style="color: #999; font-size: 11px" class="pull_left"><?php  echo $row['beizhu'];?></p>
	</a>
	<?php  } } ?>
</div>
<div class="school_option">
	<ul class="school_option_list">
		<?php  if(is_array($icons3)) { foreach($icons3 as $row) { ?>
		<li style="background: url(<?php  echo tomedia($row['icon'])?>) no-repeat;background-size: 17px 15px;background-position: 15px center;" class="parent_weekPlan">
			<a style="color: #666; display: block" <?php  if($row['salfcard']) { ?>onclick="salfcard(<?php  echo $it['sid'];?>)"<?php  } else { ?>href="<?php  echo $row['url'];?>"<?php  } ?>><?php  echo $row['name'];?></a>
		</li>
		<?php  } } ?>
	</ul>
</div>
<div class="top_height_blank70"></div>
<div class="user_info" id="user_info" style="<?php  if($it['realname'] && $it['mobile']) { ?>display:none;<?php  } ?>">
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
<?php  if($school['copyright']) { ?>
<div style="margin-bottom:30px;text-align: center;line-height: 25px;font-size: 13px;color: #908f8f;"><?php  echo $school['copyright'];?></div>
<?php  } else { ?>
<div style="margin-bottom: 10px"></div>
<?php  } ?>
<?php  include $this->template('port');?>
<?php  include $this->template('footer');?>
</div>

<div class="selectList" id="selectList" style="z-index:100000;display:none;">
	<div class="single" style="z-index:100000;border-radius: 5%;">
		<ul>
			<span style="color:#444;font-size: 16px;line-height: 30px;height: 30px;font-weight: bold"><?php  echo $language['user_qhxs'];?></span>
			<div style="overflow-x: hidden;overflow-y: auto;max-height:360px;">
			<?php  if(is_array($user)) { foreach($user as $row) { ?>
			<li onclick="isSelect(<?php  echo $row['id'];?>,<?php  echo $row['schoolid'];?>);">
				<img src="<?php  echo tomedia($row['icon'])?>" class="stuimg">
				<div class="stutext">
					<div class="stutitle">
						<div style="float:left;">姓名：<?php  echo $row['s_name'];?></div><?php  if($row['sex'] == 1) { ?><div class="boytip"></div><?php  } ?><?php  if($row['sex'] == 0) { ?><div class="girltip"></div><?php  } ?>&nbsp;&nbsp;<div class="pard2"><?php  echo $row['pard'];?></div>
					</div>
					<div class="stutitle">班级：<?php  echo $row['bjname'];?></div>
				</div>

			</li>
			<?php  } } ?>
			</div>
		</ul>
	</div>
</div>
<script type="text/javascript">
	$("input,textarea,select").blur(function(){
		document.body.scrollTop = document.documentElement.scrollTop = 0;
	});
    $("#close").on('click', function () {
        $('#user_info').hide();
    });
    $("#tijiao1").on('click', function () {
        var name = $("#name").val();
        var mobile = $("#mobile").val();
        data = {
            schoolid:"<?php  echo $schoolid;?>",
            name:name,
            mobile:mobile,
            userid:"<?php  echo $it['id'];?>",
            'json':''
        }
        reg=/^(0|86|17951)?(13[0-9]|15[012356789]|16[012356789]|17[0-9]|18[0-9]|19[0-9]|14[57])[0-9]{7,8}$/;
        if (name == "" || name == undefined || name == null) {
            jTips('请输入您的姓名！');
            return false;
        }
        if (mobile == "" || mobile == undefined || mobile == null || !reg.test(mobile)) {
            jTips('手机号有误或为空！');
            return false;
        }
		jConfirm("确认提交吗？", "对话框", function (isConfirm) {
			if(isConfirm){
				$.post("<?php  echo $this->createMobileUrl('indexajax',array('op'=>'useredit'))?>",data,
					function(data){
						if(data.result){
							jTips(data.msg);
							$('#user_info').hide();
						}else{
							jTips(data.msg);
						}
					},'json');
			}else{
				$('#user_info').hide();
			}
		});
    });
    function isSelect(userid,schoolid){
        location.href = "<?php  echo $this->createMobileUrl('user')?>"+ '&userid=' + userid + '&schoolid=' + schoolid;
        location.href = reload();
    }
    function goto_yuecostlog(){
        location.href = "<?php  echo $this->createMobileUrl('yuecostlog',array('userid'=>$it['id'],'schoolid'=>$schoolid))?>";
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
    var images = {
        localId: [],
        serverId: []
    };

    function uploadImg(){

        wxChooseImage();
    }
	function salfcard(sid) {
		$.ajax({
			url: "<?php  echo $this->createMobileUrl('comajax', array('op' => 'SalfCard','schoolid' => $schoolid), true)?>",
			type: "post",
			dataType:'json',
			data: {
				sid: sid,
				name: "<?php  echo $students['s_name'];?>"
			},
			success: function (data) {
				if(data.result){
					location.href = data.goto
				}else{
					jTips(data.msg)
				}
			}
		});
	}
    $("#Changesf").on('click', function () {
        $('html,body').addClass('ovfHiden');
        $('#selectList').show();
    });

    $("#selectList").on('click', function () {
        $('#selectList').hide();
        $('html,body').removeClass('ovfHiden');
    });
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

    function saveImage() {
       // jTips("头像上传中，请稍等~","forever");
	   ajax_start_loading("头像上传中，请稍等...");
        var url = "<?php  echo $this->createMobileUrl('indexajax',array('op'=>'changeimg'))?>";
        var submitData = {
            bigImage:$("#bigImage").val(),
            sid:"<?php  echo $it['sid'];?>",
        };
        $.post(url, submitData, function(data) {
			ajax_stop_loading();
            if (data.result) {
				var newpic = data.newpic
				$('.img-circle').children().attr('src',newpic)
                jTips(data.msg);
            } else {
                jTips(data.msg);
            }
        },'json');
    }
</script>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>