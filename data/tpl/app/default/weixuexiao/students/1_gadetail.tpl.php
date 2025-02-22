<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="true">
<title>活动详情</title>
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/wxIndexnew.css?v=4.920329" />
<link href="<?php echo OSSURL;?>public/mobile/css/new_index.css?v=062220170218" rel="stylesheet">
<link href="<?php echo OSSURL;?>public/mobile/css/j_alert.css?v=062220161108" rel="stylesheet">
<link href="<?php echo OSSURL;?>public/mobile/css/coinmall_index.css?v=0622" rel="stylesheet">
<link href="<?php echo OSSURL;?>public/mobile/css/pageContent.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=4.80120" />
<link rel="stylesheet" href="<?php echo MODULE_URL;?>public/mobile/css/weixin.css">
	<?php  echo register_jssdks();?>
<script src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.10.2.min.js?v=0622"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/swipe.js"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/banner.js"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/hb.js?v=0622"></script>
<?php  include $this->template('port');?>
<style type="text/css" media="screen" id="test">
	.selectList {position: fixed;left: 0;right: 0;top: 0;bottom: 0;-webkit-box-sizing: border-box;box-sizing: border-box;background-color: rgba(0,0,0,.53);
text-align: center;z-index: 30;font-size: 20px;color: #fe6700;}
.selectList .single {position: absolute;left: 6%;right: 6%;top: 5%;padding: 0 20px;background-color: #fff;padding-bottom: 33px;padding-top: 10px;}
.selectList ul {width: 100%;height: auto;overflow: auto;}
.selectList ul li {height: 50px;line-height: 50px;border-bottom: 1px solid #e9e9e9;padding: 0 10px;}
.selectList ul li span.le {height: 50px;line-height: 50px;float: left;font-size: 16px;}
.selectList ul li span.ri {float: right;height: 50px;line-height: 50px;font-size: 16px;}
.allsignup{
	background-color: #de4206 !important;
    height: 17px !important;
    width: 40px !important;
    padding: 2px !important;
    border-radius: 5px !important;
    line-height: 16px !important;
    margin-right: 5px !important;
    color: #fff !important;
}
.signcost{
	background-color: #088f9c !important;
    height: 17px !important;
    width: 40px !important;
    padding: 2px !important;
    border-radius: 5px !important;
    line-height: 16px !important;
    margin-right: 5px !important;
    color: #fff !important;
}
	.mainColor{background:<?php  echo $school['headcolor'];?> !important}}
	.user_info_wrap {
	  padding: 0.3rem;
	  background-color: #fff;
	  font-size: 0.26rem;
	  color: #333;
	  margin-bottom: 0.2rem; 
	}
	.user_info_wrap .user_info {line-height: 0.5rem; }
	.user_info_wrap .user_phone {margin-left: 0.2rem; }
	.user_info_wrap .user_address {
	    color: #666;
	    padding-right: 0.2rem;
	    background: url(<?php echo OSSURL;?>public/mobile/img/arrow_right.png) no-repeat;
	    background-size: 0.16rem 0.3rem;
	    background-position: right center; 
	}

	.goods_info_wrap .goods_send_address:after {
	      content: '';
	      width: 0.2rem;
	      height: 0.2rem;
	      position: absolute;
	      top: 0.35rem;
	      right: 0;
	      background: url(<?php echo OSSURL;?>public/mobile/img/arrow_right_pay.png) no-repeat;
	      background-size: 0.16rem 0.3rem;
	      background-position: right center;
	      font-size: 0.20rem; 
	}

	.goods_info_wrap .goods_send_address {
	    height: 0.9rem;
	    line-height: 0.9rem;
	    padding-left: 0.48rem;
	    color: #666;
	    background: url(<?php echo OSSURL;?>public/mobile/img/pays_fault.png) no-repeat;
	    background-size: 0.32rem 0.32rem;
	    background-position: 0 center;
	    position: relative;
	    font-size: 0.28rem; 
	    overflow:hidden;
	    text-overflow:ellipsis;
	    word-break:keep-all;/* 不换行 */
	    white-space:nowrap;/* 不换*/
	}
</style>
</head>
<body style="">
	<div id="titlebar" class="header mainColor">
		<div class="l">
			<?php  if($_GPC['op'] == 'signup') { ?>
			<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="<?php  echo $this->createMobileUrl('galist' , array('op' => 'signup' ,'userid'=>$userid,'schoolid'=>$schoolid), true)?>"></a>
			<?php  } else if($_GPC['op'] == 'sendmsg') { ?>
			<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="<?php  echo $this->createMobileUrl('galist' , array('schoolid'=>$schoolid), true)?>"></a>
			<?php  } else { ?>
			<a class="backOff" style="background:url(<?php echo OSSURL;?>public/mobile/img/ic_arrow_left_48px_white.svg) no-repeat;background-size: 55% 55%;background-position: 50%;" href="javascript:history.go(-1);"></a>
			<?php  } ?>
		</div>
		<div class="m">
			<span style="font-size: 18px">集体活动详情</span>   
		</div>
		<div class="r"></div>
	</div>
	<div id="titlebar_bg" class="top_head_blank" style="height: 50px !important"></div>
	<?php  if(!empty($groupac)) { ?>
	<div class="goods_img_wrap">
	    <div class="showPic">
		    <div id="banner_box" class="box_swipe" style="  max-width: 640px;  margin: 0 auto;  margin-bottom: 0px;">
				<ul id="bheight">
				  <?php  if(is_array($imgarr)) { foreach($imgarr as $mid => $banner) { ?>
					<li height="100%">
						<a><img src="<?php  echo toimage($banner)?>" alt=" "   style="max-height:600px;" />
						</a>
						
					</li>
				  <?php  } } ?>
				</ul>
		        <ol>
		        <?php  if(is_array($imgarr)) { foreach($imgarr as $slideNum => $banner) { ?>
		            <li<?php  if($slideNum == 0) { ?> class="on"<?php  } ?>></li>
		        <?php  } } ?>
		        </ol>
		    </div>
		</div>
	</div>
<div style="height: 0.2rem; background-color: #ffffff; font-size: 0"></div>
	<div class="goods_info_wrap">
	    <div class="goods_info_title">
	        <strong style="color:#E53333;font-size:18px;line-height:27px;text-align:center;white-space:normal;"><?php  echo $groupac['title'];?><br>
	</strong>
	        
	    </div>
	    
	</div>
	
	<div class="goods_info_wrap">
	     <div class="goods_info_price">
	      <strong style="color:#1336ef;font-size:15px;line-height:27px;text-align:center;white-space:normal;">报名相关：</strong>
	    </div>
	   
	    <div class="goods_info_price">
		    <div class="goods_info_price">
	         
	        <?php  if($groupac['cost']) { ?>
	        报名费：￥ <?php  echo $groupac['cost'];?>
	        <?php  } else { ?>
	         <span class="signcost">无报名费</span>
	        <?php  } ?>
	    </div>
	    <div class="goods_info_price">
	       <?php  if($groupac['isall'] == 1) { ?>
	      <span class="allsignup">全校可报</span>
	       <?php  } else { ?>
	       限制报名班级：</br>
	       <?php  if(is_array($bjnamearr)) { foreach($bjnamearr as $row => $v) { ?>
				<?php  echo $v;?>/
				<?php  } } ?>
	       
	       <?php  } ?>
	    </div>
	    <div class="goods_info_price">
	      <strong style="color:#1336ef;font-size:15px;line-height:27px;text-align:center;white-space:normal;">活动介绍：</strong>
	    </div>
	        <strong style="color:#E53333;font-size:18px;line-height:27px;text-align:center;white-space:normal;">
		        <?php  echo htmlspecialchars_decode($groupac['content'])?>
	</strong><br>
	        
	    </div>
	</div>
	<div class="blank_100"></div>
	<div class="footer_wrap">
    <div>
	    <?php  if($groupac['starttime'] > time() ) { ?>
		    <?php  if($_GPC['op'] =='signup') { ?>
			    <?php  if(empty($checksign) ) { ?>
		        <button id="sure_change" class="sure_change">我要报名</button>
		        <?php  } else { ?>
				 <button  class="sure_change" style="background-color: #ce3d06;">已报名</button>
		        <?php  } ?>
	        <?php  } else { ?>
	         	<button id="sure_change" class="sure_change">我要报名</button>
	         <?php  } ?>
	        
	    <?php  } else if($groupac['starttime'] <= time() ) { ?>
	     <button  class="sure_change" style="background-color: #7e828a;">不可报名</button>
	    <?php  } ?>
	    
    </div>
</div>
<?php  } else if(empty($groupac)) { ?>
		<div class="goods_info_wrap">
	    <div class="goods_info_title">
	        <strong style="color:#E53333;font-size:18px;line-height:27px;text-align:center;white-space:normal;">该集体活动不存在或者已删除<br>
	</strong>
	        
	    </div>
	    
	</div>
	<?php  } ?>

<!--完善联系方式-->
<div class="user_info" id="user_info" style="display:none;">
	   <div style="border-radius: 5%;">
			<ul>
				<p>完善联系方式</p>
				<li class="user_name">
					<input type="text" placeholder="请输入您的姓名" name ="name" id="name" value="<?php  if(!empty($userinfo['name'])) { ?><?php  echo $userinfo['name'];?><?php  } ?>">
					真实姓名
				</li>
				<li class="user_name">
					<input type="text" placeholder="请输入您的手机号" name ="mobile" id="mobile" value="<?php  if(!empty($userinfo['mobile'])) { ?><?php  echo $userinfo['mobile'];?><?php  } ?>">
					手机号
				</li>
				<li class="user_name">是否接收其他学生或家长的信息
					<select id="is_allowmsg">
						<option value="2" <?php  if($it['is_allowmsg'] ==2) { ?>selected="selected"<?php  } ?>>允许</option>
						<option value="1" <?php  if($it['is_allowmsg'] ==1) { ?>selected="selected"<?php  } ?>>拒绝</option>
					</select>
				</li>				
				<div class="btn" onclick="Tijiao();">提交</div>
			</ul>
			<span id="close" onclick="Close();">×</span>
	   </div>
    </div>
<!--切换学生-->
    <div class="selectList" id="selectList" style="z-index:100000;display:none;">
	<div class="single" style="z-index:100000;border-radius: 5%;">
		<ul>
			<span style="color:#444;">切换学生</span>
		<?php  if(is_array($user)) { foreach($user as $row) { ?>
			<li onclick="isSelect(<?php  echo $row['id'];?>,<?php  echo $row['schoolid'];?>);"><span class="le"><?php  echo $row['bjname'];?></span><span class="ri"><?php  echo $row['s_name'];?></span></li>
		<?php  } } ?>	
		</ul>
	</div>
</div>
<script>
	function isSelect(userid,schoolid){
		$("#selectList").hide();
		
	$.ajax({
		url: "<?php  echo $this->createMobileUrl('comajax', array('op' => 'gasignup','gaid' => $gaid,'weid'=>$weid), true)?>",
		type: "post",
		data: {
			userid: userid,
			schoolid:schoolid,
		},
		success: function (data) {
			var data1 = JSON.parse(data);
			console.log(data1);
			jTips(data1.msg);
			if(data1.result == true)
			{window.location.href = "<?php  echo $this->createMobileUrl('gadetail' , array('op' => 'signup'), true)?>"+ '&gaid=' + data1.gaid + '&schoolid=' + data1.schoolid + '&userid=' + data1.userid;}

		},
		fail:function(){
			jTips("报名失败");
		}
	});
	
	
	
}
setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		//$("#titlebar").hide();
		//$("#titlebar_bg").hide();
	}
}, 100);

	function addclick(id){
	$.ajax({
		url: "<?php  echo $this->createMobileUrl('indexajax', array('op' => 'addclickmall','goodsid' => $goodsid), true)?>",
		type: "post",
		data: {
			id: id
		},
		success: function (data) {

		}
	});
}
    $(function () {
        $("#sure_change").click(function () {
	        <?php  if($_GPC['op'] != 'signup') { ?>
	        $("#selectList").show();
	        <?php  } else { ?>
			$.ajax({
					url: "<?php  echo $this->createMobileUrl('comajax', array('op' => 'gasignup','gaid' => $gaid,'weid'=>$weid), true)?>",
					type: "post",
					data: {
						userid: <?php  echo $userid;?>,
						schoolid:<?php  echo $schoolid;?>,
					},
					success: function (data) {
						var data1 = JSON.parse(data);
						console.log(data1);
						jTips(data1.msg);
						if(data1.result == true)
						{window.location.href = "<?php  echo $this->createMobileUrl('gadetail' , array('op' => 'signup'), true)?>"+ '&gaid=' + data1.gaid + '&schoolid=' + data1.schoolid + '&userid=' + data1.userid;}

					},
					fail:function(){
						jTips("报名失败");
					}
				});
	        
	        <?php  } ?>
	        

	        
	        return;
         
        
        });
    });
</script>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body></html>