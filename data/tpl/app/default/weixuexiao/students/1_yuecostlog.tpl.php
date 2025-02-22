<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no,email=no" name="format-detection">
<meta name="App-Config" content="fullscreen=yes,useHistoryState=yes,transition=yes">
<script src="<?php echo OSSURL;?>public/mobile/js/hb.js"></script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<link href="<?php echo OSSURL;?>public/mobile/css/new_yab1.css?v=112420161108" rel="stylesheet" />
<?php  echo register_jssdks();?>

<style>
.F_div {right: 30px;bottom:75px} section {width: 100%;height: 150px;background-color: rgb(6, 193, 174);position: relative;} .conentBox {width: 50%;height: 100%;position: absolute;left: 50%;-webkit-transform: translateX(-50%);-moz-transform: translateX(-50%);-ms-transform: translateX(-50%);-o-transform: translateX(-50%);} .main {margin: 10px 10px;box-shadow: 0px 0px 0px rgba(0,0,0,0);background: #FFF;padding: 0;border-radius: 10px;padding-bottom: 10px;} body {background-color: #f0f0f2 !important;box-sizing: border-box !important;font-size: 14px;} .topMarign {margin: 0;} .topMarignOther {margin-top: 15px;} .topMarignOtherNoFirst {margin-top: 15px;} .okSignIcontentBox {margin: 15px 0px;} .conentBox_Other { width: 100%; display: -webkit-box; /* 老版本语法: Safari,  iOS, Android browser, older WebKit browsers.  */ display: -moz-box; /* 老版本语法: Firefox (buggy) */ display: -ms-flexbox; /* 混合版本语法: IE 10 */ display: -webkit-flex; /* 新版本语法： Chrome 21+ */ display: flex; /* 新版本语法： Opera 12.1, Firefox 22+ */ /*水平居中*/ /*老版本语法*/ -webkit-box-pack: center; -moz-box-pack: center; /*混合版本语法*/ -ms-flex-pack: center; /*新版本语法*/ -webkit-justify-content: center; justify-content: center; } .mainColor{background:<?php  echo $school['headcolor'];?> !important;} .PromptBox {position: fixed;z-index: 2000;top: 30%;color: #fff;padding: 13px 20px;font-size: 16px;display:none;} .topInfoAm {width: 80px;height: 80px;margin-top: 20px;border-radius: 50%;background-color: rgb(239, 250, 243);display: inline-block;box-sizing: border-box;} .topInfoPm {width: 80px;height: 80px;margin-top: 20px;border-radius: 50%;background-color: rgb(239, 250, 243);display: inline-block;margin-left: 20%;box-sizing: border-box;} .classmonthTitle {margin-top: 10px;} .classmonthData {margin-top: 0px;color:white;text-align: center;} .top_bottom {position: absolute;margin: 0;bottom: 10px;left: 50%;transform: translateX(-50%);-webkit-transform: translateX(-50%);-moz-transform: translateX(-50%);-ms-transform: translateX(-50%);-o-transform: translateX(-50%);margin-left: 10px;max-width: 90px;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;} .has_show_over{background-color: #f0f0f2;} .jzz_div .jzz {width:80px} .contentBoxMonve {-moz-transform: translateX(-150%);-webkit-transform: translateX(-150%);-ms-transform: translateX(-150%);transform: translateX(-150%);} .ContentBoxIsShow {display: block;} .selectItem {background: #ff9f22;} .titleOther {color: white;} .selectOtherItem {opacity: .8;} .colorOther {color: rgb(102, 102, 102) !important;} .month_Attendence_left {background: url("<?php echo OSSURL;?>public/mobile/img/query_see_Ico.png") no-repeat bottom;background-size: 16px 20px;display: inline-block;width: 20px;height: 18px;display: inline-block;float: left;} .top_right {width: 85px;height: 25px;position: absolute;right: 0px;top: 10px;background: url("<?php echo OSSURL;?>public/mobile/img/top_right_ico.png") no-repeat center;background-size: 85px 25px;} .slide_left_menu_ul li.act {background: url(<?php echo OSSURL;?>public/mobile/img/be_choose_icon_02.png) right center no-repeat;background-size: 16px;background-origin: content-box;-moz-background-origin: content-box;-webkit-background-origin: content-box;} .headerContent a i {float: left;margin: 20px 0 0 1px;width: 0;height: 0;border-width: 6px 6px 0;border-style: solid;border-color: white transparent transparent;position: absolute;} .user_info{position:fixed; left:0; right:0; top:0; bottom:0;-webkit-box-sizing:border-box; box-sizing:border-box; background-color:rgba(0,0,0,.53); text-align:center; z-index:9999;font-size:20px;color:#fe6700;} .user_info>div{ position:absolute; left:6%; right:6%; top:45px; padding: 0 20px; background-color:#fff; padding-bottom:33px; padding-top: 10px;} .user_name{ text-align: left; color:#666; font-size: 14px;} .user_name > select{ display:block;width:100%;height:44px; padding: 0 10px; margin-bottom: 10px; border:1px solid #ccc;-webkit-box-sizing: border-box; box-sizing: border-box;text-align: left; color:#666; font-size: 14px;} .user_name > input{display: block;width:100%;height:44px; padding: 0 10px; margin-bottom: 10px; border:1px solid #ccc;-webkit-box-sizing: border-box; box-sizing: border-box;} .user_name > input::-webkit-input-placeholder{ color: #666;font:15px "黑体";} .user_info>div>span{display:inline-block;width:30px;height:30px;background:#fff;font-size:24px;color:#aaa;-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;border-radius:100%;line-height:30px;	text-align:center;position:absolute;top:-15px;right:-15px;font-family:宋体b8b\4f53;cursor:default;} .teacherImgError{ margin-top:2px; width: 50%; height: 80%; border-radius: 50%;} .ActInfo { font-size: 15px; color: #000000; margin-left:5px; } .notifyTopLeft { border-radius: 50%; margin-left: 10px; width: 70px; height: 50px; position: absolute; right:10px; text-align: center;  } .notifyTopLeft1 { border-radius: 50%; margin-left: 10px; width: 50px; height: 50px; position: absolute; right:80px; text-align: right;  } .notifyText{ text-align: left; font-size:18px; position: relative; top: 50%; transform: translateY(-50%);  }  .notifyText1{ text-align: right; font-size:18px; position: relative; top: 50%; transform: translateY(-50%); padding-right: 10px; } .notifyTime{  font-size:14px; color: gray; margin-left:5px;  } .notifyTimeM{ font-size:14px; color: red; margin-left:5px;  } .notifyTimeF{ font-size:14px; color: blue; margin-left:5px;  } /*.main {  box-shadow:none; background:none; padding-bottom: 1px; display: block; margin: 1px 1px 1px 1px; }*/ reset.css:11 d .change a:before{ content: ""; width:20px; height:20px; margin-right:8px; display:inline-block; background:url(<?php echo OSSURL;?>public/mobile/img/score_02_spirit.png); background-size:141px; vertical-align:middle; }
.name {position: absolute;font-size: 18px; display: inline-block; max-width: 150px; height: 18px; line-height: 18px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; word-break: keep-all; margin-top: 7px; } .type { position: absolute; color: #7b7676;font-size: 13px; display: inline-block; max-width: 150px; height: 18px; line-height: 21px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; word-break: keep-all; margin-top: 28px; } .head_student{width: 100%;height: auto;padding-bottom: 10px;position: absolute;padding-top: 9px;background-color: #fff;} .stuimg{width: 16%;margin-left: 15px;float: left;} .stuimg img{width: 50px;border-radius: 50%;} .pull-center{float: left;width: 40%;} .pull-left{float: right;width: 29%;}
.zzc{ width: 70px; height: 15px; float: right; right: 0; background-color: rgba(76, 222, 153, 0.39); border-radius: 50px 0 0 50px; } .useredits { line-height: 15px;font-size: 11px; float: right; margin-right: 4px; color: #11b161; } .font_icon { width: 13px; margin-left: 7px; margin-right: 2px; } .cash_box{ position: absolute; width: 100%; height: auto; padding-bottom: 14px; padding-top: 7px; margin-top: 78px; background-color: #fff; } .box-head{width: 100%;height: 42px;padding-bottom: 14px; border-bottom: 1px solid #f5f0f0;} .box-head-left{width: 50%;float: left;padding-top: 4px;} .allyue_left{color: #827f7f;position: absolute;margin-left: 13px;} .nub{position: absolute;margin-top: 18px;color: #444;font-size: 21px;margin-left: 10px;} .box-head-right{padding-top: 5px;width: 50%;float: right;} .allyue{color: #827f7f;float: right;right: 13px;position: absolute;} .nub_right{ float: right; position: absolute; margin-top: 18px; right: 14px; font-size: 21px; color: #7d7c7c; } .center-box{list-style: none;} .cash_box_details{width: 49%; float: left; height: auto; padding-top: 12px; margin-top: -1px;} .cash_title{margin-left: 11px;font-size: 15px;margin-top: 3px;} .cash_number{ color: #827f7f; margin-left: 9px; margin-top: 9px; margin-bottom: 6px;}
.sm_tips{font-size: 10px;}.inchage{position: absolute;left: calc( 37% - 8px );top: 106px;font-size: 11px;width: 30px;text-align: center;padding-left: 5px;padding-right: 5px;padding-bottom: 2px;padding-top: 2px;
border-radius: 10px;border: 1px solid #438da2;background-color: #a9e1f1;}
.reveal-modal-bg {position: fixed;height: 100%;width: 100%;background: #000;background: rgba(0,0,0,.8);z-index: 100;display: none;top: 0;left: 0; }
.reveal-modal {visibility: hidden;top: 50%; background: #fff ;position: absolute;z-index: 101;    padding: 25px 18px 38px;-moz-border-radius: 5px;-webkit-border-radius: 5px;order-radius: 5px;
-moz-box-shadow: 0 0 10px rgba(0,0,0,.4);-webkit-box-shadow: 0 0 10px rgba(0,0,0,.4);-box-shadow: 0 0 10px rgba(0,0,0,.4);}
.component-panel {position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: 12;background: rgba(0,0,0,.7);}
.component-dialog {position: absolute;top: 30%;left: 50%;-webkit-transform: translateX(-50%) translateY(-50%);transform: translateX(-50%) translateY(-50%);background: #fff;padding: 10px;width: 80%;border-radius: 10px;}
.dialog-order>.component-dialog-title {text-align: center;}
.component-dialog-body {padding: 10px 0 12px;}
.component-dialog-title {font-size: 16px;font-weight: 200;}
.arrange-detail>ol {box-sizing: border-box;}
.form-order>.form-line {margin-bottom: 5px;}
.form-order>.form-line {margin-bottom: 12px;margin-top: 12px;}
.gw_num{padding-right:.8px;margin-right:15%;float:right;border: 1px solid #dbdbdb;width: 50%;line-height: 23px;overflow: hidden;display:inline}
.gw_num em{display: block;height: 23px;width: 26px;line-height:23px; float: left;color: #7A7979;border-right: 1px solid #dbdbdb;text-align: center;cursor: pointer;}
.gw_num .num1{display: block;float: left;text-align: center;width: 52px;height:23px;font-style: normal;font-size: 14px;line-height: 23px;border: 0;}
.gw_num em.jia{float: right;border-right: 0;border-left: 1px solid #dbdbdb;}
.btnthis {height: 30px;background-color: #7bb52d;font: 16px "黑体";text-align: center;color: #fff;cursor: pointer;border-radius:10px}
.div_closd{margin-left:13%; width:30%;color: #fff;background-color: #f1ad31;border-color: #f1ad31;float:left;line-height:30px}
.div_sure{margin-right:13%; width:30%;float:right;line-height:30px}
.ovfHiden{overflow:hidden}
</style>
<title><?php  echo $school['title'];?></title>
</head>
<div class="head_student">
	<div class="stuimg"><img src="<?php  if($student['icon']) { ?><?php  echo tomedia($student['icon'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>"></div>
	<div class="pull-center">
		<span class="name"><?php  echo $student['s_name'];?></span>
		<span class="type"><?php  echo $bj_name;?></span>
	</div>
	<div class="pull-left">
		<div class="zzc"><img class="font_icon" src="<?php echo OSSURL;?>public/mobile/img/ico_<?php  if($student['sex'] == 1) { ?>boy<?php  } ?><?php  if($student['sex'] == 0) { ?>girl<?php  } ?>.png"><div class="useredits">走读生</div></div>
	</div>
</div>
<div class="cash_box">
	<div class="box-head">
		<div class="box-head-left">
			<span class="allyue_left">总余额(元)</span>
			<span class="nub"><?php  echo $all_yue;?></span>
		</div>
		<div class="box-head-right">
			<span class="allyue">本月消费</span>
			<span class="nub_right"><?php  echo $ThisMonthAllCost;?></span>
		</div>
	</div>
	<div class="center-box" style="width: 100%;">
		<li class="cash_box_details" style="">
			<div class="cash_title">现金余额</div>
			<div class="cash_number"><?php  echo $student['chongzhi'];?> </div>
			<div class="inchage" onclick="chongzhi();">充值</div>
		</li>
		<?php  if($school['is_buzhu'] == 1) { ?>
		<li class="cash_box_details" style="border-bottom: 1px solid #f5f0f0;border-left: 1px solid #f5f0f0;">
			<div class="cash_title">补助金余额</div>
			<div class="cash_number"><?php  echo $buzhu;?>
				 
			</div>
		</li>
		<?php  } ?>
		<li class="cash_box_details" style="<?php  if($school['is_buzhu'] == 1) { ?>border-top: 1px solid #f5f0f0;border-right: 1px solid #f5f0f0;<?php  } else { ?>border-bottom: 1px solid #f5f0f0;border-left: 1px solid #f5f0f0;<?php  } ?> <?php  if($chargesetinfo['is_charge'] == 0) { ?>display:none<?php  } ?>">
			<div class="cash_title">可用充电次数</div>
			<div class="cash_number" style="width:calc(75% + 24px )">
				<?php  echo $student['chargenum'];?>次 
				<a class="inchage" style="top: 190px;float:right;position:unset;color:black"  onclick="BuyCharge();">充值</a>
			</div>
			
		</li>
	
		<li class="cash_box_details" style="<?php  if($school['is_buzhu'] == 0 && $chargesetinfo['is_charge'] == 0) { ?> border-left: 1px solid #f5f0f0; <?php  } else if(($school['is_buzhu'] == 1 || $chargesetinfo['is_charge'] == 1) && ($school['is_buzhu'] != $chargesetinfo['is_charge'] )) { ?>border-top: 1px solid #f5f0f0;border-right: 1px solid #f5f0f0;<?php  } else { ?>border-top: 1px solid #f5f0f0;<?php  } ?> <?php  if($school['Is_point'] == 0) { ?>display:none<?php  } ?>">
			<div class="cash_title">积分余额</div>
			<div class="cash_number"><?php  echo $student['points'];?></div>
		</li>
	
		
		<li class="cash_box_details" style="display:none">
			<div class="cash_title">分红余额</div>
			<div class="cash_number">1000</div>
		</li>
	</div>
</div>
<div class="blank" style="height:325px"></div>
<div class="head_box">
	<ul class="head_title">
		<li class="act" id="xfjl"><a>消费记录</a></li>
		<li class="" id="srjl"><a>充值记录</a></li>
	</ul>
	<div class="blank"></div>
</div>
<div class="All">
	<div class="listContent">
	<?php  if(is_array($loglist)) { foreach($loglist as $item) { ?>
		<li class="main" time="<?php  echo $item['createtime'];?>" id="<?php  echo $item['id'];?>" style="display: block;margin: 1px 10px 1px 10px;">
			<div class="cutting"></div>
			<div class="notifyTopBox">
				<div class="notifyTopLeft1">
					<?php  if($item['cost_type'] == 2) { ?>
					 <p class="notifyText1" style="color:red">-</p>
					<?php  } else if($item['cost_type'] == 1) { ?>
					 <p class="notifyText1" style="color:green">+</p>
					<?php  } ?>
				</div>
				<div class="notifyTopLeft">
				<?php  if($item['cost_type'] == 2) { ?>
				 <p class="notifyText" style="color:red"><?php  if($item['yue_type'] == 3) { ?><?php  echo intval($item['cost'])?> 次<?php  } else { ?><?php  echo $item['cost'];?><?php  } ?></p>
				<?php  } else if($item['cost_type'] == 1) { ?>
				 <p class="notifyText" style="color:green"><?php  if($item['yue_type'] == 3) { ?><?php  echo intval($item['cost'])?> 次<?php  } else { ?><?php  echo $item['cost'];?><?php  } ?></p>
				<?php  } ?>
				</div>
				<div class="notifyTopRight">
					<div class="notifyTopRightTopBox">
						<span class="ActInfo">
						<?php  if($item['on_offline'] == 1) { ?>
						线上
						<?php  } else if($item['on_offline'] == 2) { ?>
						线下
						<?php  } ?>
						<?php  if($item['cost_type'] == 1) { ?>
						充值
						<?php  } else if($item['cost_type'] == 2) { ?>
						消费
						<?php  } ?>
						-
						<?php  if($item['yue_type'] == 1) { ?>
						补助余额
						<?php  } else if($item['yue_type'] == 2) { ?>
						普通余额
						<?php  } else if($item['yue_type'] == 3) { ?>
						充电桩
						<?php  } ?>
						</span>
					</div>
					<p class="notifyTime"><?php  echo date("Y-m-d H:i:s",$item['costtime'])?></p>
				</div>
			</div>
		</li>
	<?php  } } ?>
	</div>
</div>
<input type="hidden" id="noticeytpe" value="">
<div style="height: 10px;"></div>
<!--正常打卡弹窗-->

<!--充值次数-->
<div class="component-panel" id="charge_buy" style="display:none;">
		<div class="mask"></div>
		<div class="component-dialog dialog-order" style="box-sizing: border-box;">
			<div class="component-dialog-title">充值次数</div>
			<div class="component-dialog-body">
				<form class="form-order" novalidate="novalidate">
					<div class="form-line">
						<div class="input-wrapper" style="border:none;">
							<span style="padding: 8px;">充值价格:</span>
							<span style="font-weight:bold;color:#0ec78b">￥<?php  echo $chargesetinfo['price_once'];?></span><span>/次</span>
						</div>
					</div>
					<div class="form-line">
						<div class="input-wrapper" style="border:none;">
							<span style="padding: 8px;">最低限购:</span>
							<span style="font-weight:bold;color:#ff0200"><?php  echo $chargesetinfo['min_num'];?></span><span>次</span>
						</div>
					</div>
					<div class="form-line">
						<span style="padding:8px;">充值次数:</span>
						<div class="gw_num">
							<em class="jian">-</em>
							<input type="number" min="<?php  echo $chargesetinfo['min_num'];?>" max=" " class="num1" id="NumOfBuy" name="NumOfBuy" value="<?php  echo $chargesetinfo['min_num'];?>"/>
							<em class="jia">+</em>
						</div>
					</div>
					<div class="form-line" style="margin-top:16px">
						<div class="input-wrapper" style="border:none;">
							<span style="padding: 8px;">总计支付:</span>
							<span style="font-weight:bold;color:red" id="all_cost"><?php  echo $first_cost;?></span><span>元</span>
						</div>
					</div>
					<div class="form-line">
						<div class="input-wrapper" style="border:none;height:10px"></div>
					</div>

					<div class="component-dialog-footer">
						<div type="button" class="btn-default btnthis div_closd"  onclick="closed()" >取消</div>
						<div type="button" class="btn-primary btnthis div_sure"   data-opttype="yes" onclick="charge_buy_ajax()">确定</div>
					</div>
					<div class="form-line">
						<div class="input-wrapper" style="border:none;height:20px"></div>
					</div>
				</form>
			</div>
			<div class="component-dialog-footer"></div>
		</div>
	</div>

<script src="<?php echo OSSURL;?>public/mobile/js/common.js?v=1717"></script>
<script src="<?php echo OSSURL;?>public/mobile/js/scroll_load_yuelog.js?v=1717"></script>
<?php  include $this->template('port');?>
<script>
var scroll_load_obj = null;
var IS_NEW = false;
	function chongzhi(){
		location.href = "<?php  echo $this->createMobileUrl('chongzhi', array('schoolid' => $schoolid), true)?>";
	}
	function closed(){
	$('html,body').removeClass('ovfHiden');
		$("#charge_buy").hide();
	};
	function BuyCharge(){
	$('html,body').addClass('ovfHiden');
		$("#charge_buy").show();
	};

	function charge_buy_ajax(){
		var buy_num = $("#NumOfBuy").val();
		var price_1000 = Number(<?php  echo $chargesetinfo['price_once'];?>)*1000;
		var all_cost =Number(Number(buy_num)*price_1000/1000);
		
		$.ajax({ 
			url: "<?php  echo $this->createMobileUrl('payajax', array('op' => 'buy_charge'), true)?>",
			type: "post",
			dataType: "json",
			data: {
				weid: <?php  echo $weid;?>,
				schoolid:<?php  echo $schoolid;?>,
				buy_num:buy_num,
				sid:<?php  echo $it['sid'];?>,
				userid:<?php  echo $it['id'];?>,
				allcost:all_cost,
			},
			success: function (data) {
				console.log(data);
				jTips(data.msg);
				if(data.result == true){
					var url  = "<?php  echo $this->createMobileUrl('order', array('schoolid' => $schoolid,'user'=>$it['id']), true)?>";
					window.location.href = url;
				}
			}
		});
		
	
	}

//加的效果
	$(".jia").click(function(){
		var n=$(this).prev().val();
		var num=Number(n)+1;
		if(num==0){ return;}
		$(this).prev().val(num);
		var price_1000 = Number(<?php  echo $chargesetinfo['price_once'];?>)*1000;
		var all_cost =Number(Number(num)*price_1000/1000);
		$("#all_cost").text(all_cost);
	});
	//实时监听数量
	$(".num1").blur(function(){
		var count = $(this).val();
		if(count < Number(<?php  echo $chargesetinfo['min_num'];?>))
		{
			alert("抱歉，不能低于最低充次数");
			$(this).val(Number(<?php  echo $chargesetinfo['min_num'];?>));
			$("#all_cost").text(<?php  echo $first_cost;?>);
		}else{
			var price_1000 = Number(<?php  echo $chargesetinfo['price_once'];?>)*1000;
			var all_cost =Number(Number(count)*price_1000/1000);
			$("#all_cost").text(all_cost);
		}
	});
	//减的效果
	$(".jian").click(function(){
		var n=$(this).next().val();
		var num=parseInt(n)-1;
		if(num==0){ return}
		else if(num < Number(<?php  echo $chargesetinfo['min_num'];?>)){
			alert("抱歉，不能低于最低充次数");
			$(this).prev().val(n);
			return;
		}
		$(this).next().val(num);
		var price_1000 = Number(<?php  echo $chargesetinfo['price_once'];?>)*1000;
		var all_cost =Number(Number(num)*price_1000/1000);
		$("#all_cost").text(all_cost);
	});



new Scroll_load({
	"limit": "0",
	"pageSize": 10,
	"ajax_switch": true,
	"ul_box": ".listContent",

	"li_item": ".listContent .main",
	"ajax_url": "<?php  echo $this->createMobileUrl('yuecostlog', array('schoolid' => $schoolid,'more'=>'more'), true)?>",
	"page_name": "teacher_notify",
	"after_ajax": function () {

	}
}).load_init();

$("#xfjl").click(function () {
    IS_NEW = true;
	$(window).on("scroll", scroll_fun);
    scroll_load_obj.ajax_switch = true;
	$("#srjl").attr("class"," ");
	$(this).attr("class","act");
	$("#noticeytpe").val(2);
	$('.listContent').empty();
	$.ajax({
		url: "<?php  echo $this->createMobileUrl('yuecostlog', array('schoolid' => $schoolid,'change'=>'change'), true)?>",
		type: "post",
		dataType: "html",
		data: { "noticeytpe": 2},
		success: function (data) {
			$(".listContent").append(data);
            scroll_load_obj.ajax_switch = true;
			$(window).on("scroll", scroll_fun);
            console.log(scroll_load_obj.ajax_switch);
		}
	})
    console.log(scroll_load_obj.ajax_switch);
});
$("#srjl").click(function () {
    IS_NEW = true;
	$(window).on("scroll", scroll_fun);
    scroll_load_obj.ajax_switch = true;
	$("#xfjl").attr("class"," ");
	$(this).attr("class","act");
	$('.listContent').empty();
	$("#noticeytpe").val(1);
 	$.ajax({
		url: "<?php  echo $this->createMobileUrl('yuecostlog', array('schoolid' => $schoolid,'change'=>'change'), true)?>",
		type: "post",
		dataType: "html",
		data: { "noticeytpe": 1},
		success: function (data) {
			$(".listContent").append(data);
            scroll_load_obj.ajax_switch = true;
            $(window).on("scroll", scroll_fun);
            console.log(scroll_load_obj.ajax_switch);
		}
	})
	console.log(scroll_load_obj.ajax_switch);
});

</script>
<?php  include $this->template('footer');?>