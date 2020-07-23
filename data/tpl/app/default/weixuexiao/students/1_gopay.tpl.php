<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta content="telephone=no" name="format-detection" /> 
<style>
	body > a:first-child,body > a:first-child img{ width: 0px !important; height: 0px !important; overflow: hidden; position: absolute}
	body{padding-bottom: 0 !important;}
</style>
<meta id="viewport" name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title><?php  echo $language['title'];?></title>
<link rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/reset.css">
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=4.80120" />
<link href="<?php echo MODULE_URL;?>public/mobile/css/bootstrap.min.css" rel="stylesheet">
<style>	
#bodyhidden {position: fixed;z-index: 10000;top: 0;width: 100%;height: 100%;background: rgba(0, 0, 0, .15);display: -webkit-box;display: -webkit-flex;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-flex-flow: column;-webkit-flex-direction: column;-ms-flex-direction: column;flex-direction: column;-webkit-transition-property: opacity;-webkit-transition-duration: 100ms;-webkit-backface-visibility: hidden;background: rgba(0, 0, 0, 0.7);}
</style>
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.9"></script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/PromptBoxUtil.js?v=4.80309"></script>
<style>
.black_overlay{
z-index:1001;
}
</style>
</head>
<body>
    <div id="wrap" class="user_cost">
        <!-- 修改开始 -->
        <section id="cost_list">
            <section class="uncost select">
			       <?php  if(!empty($kc1)) { ?>
						<?php  if($kc1['type'] ==1) { ?>
                        <div class="quan_box click">
                            <a href="#" style="display:block">
                                <dl class="quan_list">
                                    <dt><div style="background-image:url(<?php  echo tomedia($teacher[$kecheng[$kc1['kcid']]['tid']]['thumb']);?>)"></div><?php  echo $teacher[$kecheng[$kc1['kcid']]['tid']]['tname'];?></dt>
                                    <dd><?php  echo $kecheng[$kc1['kcid']]['name'];?><?php  if($kc1['ksnum']) { ?>【含<?php  echo $kc1['ksnum'];?>课时】<?php  } ?></dd>
                                    <dd>￥<?php  echo $kecheng[$kc1['kcid']]['cose'];?></dd>
                                    <?php  if($dy) { ?>
                                    <dd>抵用积分：<?php  echo $kc1['spoint'];?></dd>
                                    <?php  } ?>
                                    <!--<dd><?php  echo $kecheng[$kc1['kcid']]['adrr'];?></dd>-->
                                    <dd>开始:<?php  echo date('Y-m-d',$kecheng[$kc1['kcid']]['start'])?></dd>
                                    <dd>结束:<?php  echo date('Y-m-d',$kecheng[$kc1['kcid']]['end'])?></dd>
                                </dl>
                            </a>
                            <p>请于<?php  echo date('Y年m月d日',$kecheng[$kc1['kcid']]['start'])?>之前缴费哦~</p>
                        </div>
						<?php  } else if($kc1['type'] ==4) { ?>
                        <div class="quan_box click">
                            <a href="#" style="display:block">
                                <dl class="quan_list">
                                    <dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div></dt>
                                    <dd>报名费</dd>
                                    <dd>￥<?php  echo $kc1['cose'];?></dd>
									<dd><?php  echo $school['title'];?></dd>
                                </dl>
                            </a>
                            <p>请于您尽快缴费哦~</p>
                        </div>
						<?php  } else if($kc1['type'] ==5) { ?>
                        <div class="quan_box click">
                            <a href="#" style="display:block">
                                <dl class="quan_list">
                                    <dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div></dt>
                                    <dd>考勤卡费</dd>
									<?php  if($card['cardtime'] ==1) { ?>
									<dd>续费时长:<?php  echo $card['endtime1'];?>天</dd>
									<?php  } else { ?>
									<dd>有效时间:至<?php  echo date('Y-m-d',$card['endtime2'])?></dd>
									<?php  } ?>
                                    <dd>￥<?php  echo $kc1['cose'];?></dd>
									<dd><?php  echo $school['title'];?></dd>
                                </dl>
                            </a>
                            <p>请于您尽快缴费哦~</p>
                        </div>
                        <?php  } else if($kc1['type'] ==6) { ?>
                        <div class="quan_box click">
                            <a href="#" style="display:block">
                                <dl class="quan_list">
                                    <dt><div style="background-image:url(<?php  echo tomedia($good['thumb']);?>)"></div></dt>
                                    <dd><?php  echo $good['title'];?></dd>
                                    <dd>￥<?php  echo $kc1['cose'];?></dd>
									
                                </dl>
                            </a>
                            <p>请于<?php  echo date('Y年m月d日',$cost[$kc1['costid']]['starttime'])?>之前缴费哦~</p>
                        </div>
                        <?php  } else if($kc1['type'] ==7) { ?>
                        <div class="quan_box click">
                            <a href="#" style="display:block">
                                <dl class="quan_list">
                                    <dt><div style="background-image:url(<?php  echo tomedia($vod['videopic']);?>)"></div></dt>
                                    <dd><?php  echo $vod['name'];?></dd>
                                    <dd>￥<?php  echo $kc1['cose'];?></dd>
                                </dl>
                            </a>
                            <p>请尽快付费哦~</p>
                        </div>	
                         <?php  } else if($kc1['type'] ==8) { ?>
                         <div class="quan_box click">
                            <a href="#" style="display:block">
                                <dl class="quan_list">
                                    <dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div></dt>
                                    <dd>充值<?php  echo $taocan['chongzhi'];?>元</dd>
                                    <dd>￥<?php  echo $kc1['cose'];?></dd>							
									
                                </dl>
                            </a>
                            <!-- <p>请于<?php  echo date('Y年m月d日',$cost[$kc1['costid']]['starttime'])?>之前缴费哦~</p> -->
                        </div>
						<?php  } else if($kc1['type'] ==9) { ?>
                         <div class="quan_box click">
                            <a href="#" style="display:block">
                                <dl class="quan_list">
                                    <dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div></dt>
                                    <dd>充电桩充次：<?php  echo $kc1['ksnum'];?>次</dd>
                                    <dd>￥<?php  echo $kc1['cose'];?></dd>							
									
                                </dl>
                            </a>
                            <p>请于<?php  echo date('Y年m月d日',$cost[$kc1['costid']]['starttime'])?>之前缴费哦~</p>
                        </div>						
						<?php  } else if($kc1['type'] ==3) { ?>
                        <div class="quan_box click">
                            <a href="#" style="display:block">
                                <dl class="quan_list">
                                    <dt><div style="background-image:url(<?php  echo tomedia($cost[$kc1['costid']]['icon']);?>)"></div></dt>
                                    <dd><?php  echo $cost[$kc1['costid']]['name'];?></dd>
                                    <dd>￥<?php  echo $cost[$kc1['costid']]['cost'];?></dd>
									<?php  if($cost[$kc1['costid']]['is_time'] == 1) { ?>
									<dd>有效时间范围:</dd>
                                    <dd>开始:<?php  echo date('Y-m-d',$cost[$kc1['costid']]['starttime'])?></dd>
                                    <dd>截至:<?php  echo date('Y-m-d',$cost[$kc1['costid']]['endtime'])?></dd>
									<?php  } else { ?>								
									<dd>有效时长:<?php  echo $cost[$kc1['costid']]['dataline'];?>天</dd>
									<?php  } ?>
                                </dl>
                            </a>
                            <p>请于<?php  echo date('Y年m月d日',$cost[$kc1['costid']]['starttime'])?>之前缴费哦~</p>
                        </div>						
						<?php  } ?>
                   	<?php  } ?>					
                <article style="z-index:99;margin-top:100px;" id = "gao">
                    <header>
                        <h3>应付费总计</h3>
                    </header>
                    <ul>
					    <?php  $cose = $kc1['cose']+$kc2['cose']+$kc3['cose']+$kc4['cose']+$kc5['cose'];?>	
                        <li>应付金额：<span class='orange' id="lastPrice">￥<?php  echo $cose;?></span></li>
                    </ul>
                    <footer>
                        <p>
                            <input type="checkbox" id="ensure" class="check_ok" checked="checked">
                            <a href=""><?php  echo $language['tyxiy'];?></a>
                        </p>
						<p style="padding-bottom:10px;"></p>									
                        <div onclick="zhifu();" id="gopay"><a style="text-decoration:none;color:#fff;"><?php  echo $language['ljzf'];?></a></div>
                    </footer>
                </article>
            </section>
        </section>
    </div>
	<div class="modal fade" id="pay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="  margin-top: 60px;    z-index: 11111;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title"><?php  echo $language['zffs'];?></h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<div class="panel">
							<div class="clearfix" style="padding-top:10px;font-size: 100%;">
								<p style="font-size: 16px;"><?php  echo $language['ddbh'];?> :<span class="pull-right"><?php  echo $od1;?></span></p>
								<p style="font-size: 16px;"><?php  echo $language['skxx'];?> :<span class="pull-right"><?php  echo $school['title'];?></span></p>
								<p style="font-size: 16px;"><strong style="color:red"><?php  echo $language['zfje'];?> :<span class="pull-right" id="votefee">￥<?php  echo $kc1['cose'];?> 元</span></strong></p>

							</div>
						</div>
					</div>				
					<div class="form-group">
						<div class="" style="text-align: center;">
							<?php  if(!empty($setting['payment']['wechat']['switch'])) { ?>
							<div class="pay-btn" id="wechat-panel">
								<form id="myform" action="<?php  echo $this->createMobileUrl('cash', array('paytype'=> 'wechat', 'u_uniacid'=> $uniacid))?>" method="post">
									<input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
									<input type="hidden" name="encrypt_code" value="" />
									<input type="hidden" name="card_id" value="<?php  echo base64_encode($card_id);?>" />
									<input type="hidden" name="coupon_id" value="" />
									<button class="btn btn-success btn-block col-sm-12" disabled="disabled" type="button" id="wBtn"  onclick="submitForm()" value="wechat">微信支付(加载失败,请刷新本页)</button>
								</form>
							</div>
							<?php  } ?>
							<?php  if(!empty($setting['payment']['alipay']['switch']) || !empty($setting['payment']['alipay']['pay_switch'])) { ?>
							<div class="pay-btn" id="alipay-panel">
								<form action="<?php  echo $this->createMobileUrl('cash', array('paytype'=> 'alipay', 'u_uniacid'=> $uniacid))?>" method="post">
									<input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
									<input type="hidden" name="encrypt_code" value="" />
									<input type="hidden" name="card_id" value="<?php  echo base64_encode($card_id);?>" />
									<input type="hidden" name="coupon_id" value="" />
									<button class="btn btn-warning btn-block col-sm-12" type="submit" name="alipay">支付宝支付</button>
								</form>
							</div>
							<?php  } ?>

							<?php  if($setting['payment']['unionpay']['switch']) { ?>
							<div class="pay-btn" id="unionpay-panel">
								<form action="<?php  echo $this->createMobileUrl('cash', array('paytype'=> 'unionpay', 'u_uniacid'=> $uniacid))?>" method="post">
									<input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
									<input type="hidden" name="encrypt_code" value="" />
									<input type="hidden" name="card_id" value="<?php  echo base64_encode($card_id);?>" />
									<input type="hidden" name="coupon_id" value="" />
									<button class="btn btn-default btn-block col-sm-12" type="submit" name="unionpay">银联支付</button>
								</form>
							</div>
							<?php  } ?>

							<?php  if($setting['payment']['baifubao']['switch']) { ?>
							<div class="pay-btn" id="baifubao-panel">
								<form action="<?php  echo $this->createMobileUrl('cash', array('paytype'=> 'baifubao', 'u_uniacid'=> $uniacid))?>" method="post">
									<input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
									<input type="hidden" name="encrypt_code" value="" />
									<input type="hidden" name="card_id" value="<?php  echo base64_encode($card_id);?>" />
									<input type="hidden" name="coupon_id" value="" />
									<button class="btn btn-danger btn-block col-sm-12" type="submit" name="baifubao">百度钱包支付</button>
								</form>
							</div>
							<?php  } ?>
							
							
							<?php  if($school['is_chongzhi'] == 1 && $kc1['type'] != 8) { ?>
								<div class="pay-btn" id="yuE_zhifu" style="margin-top: 10px;">
								<form action="<?php  echo $this->createMobileUrl('cash', array('paytype'=> 'chongzhi', 'u_uniacid'=> $uniacid))?>"  method="post">
									<input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
									<input type="hidden" name="encrypt_code" value="" />
									<input type="hidden" name="sid" value="<?php  echo $students['id'];?>">
									<input type="hidden" name="s_yuE" value="<?php  echo $students['chongzhi'];?>">
									<input type="hidden" name="card_id" value="<?php  echo base64_encode($card_id);?>" />
									<input type="hidden" name="coupon_id" value="" />
									
									<?php  if($students['chongzhi'] < $kc1['cose']) { ?>
									<span class="btn btn-primary btn-block col-sm-12" style="background-color:gray;border-color: gray;">余额不足 （当前余额 <?php  echo $students['chongzhi'];?>元)</span>
									<?php  } else if($students['chongzhi'] >= $kc1['cose']) { ?>
									<button class="btn btn-primary btn-block col-sm-12" type="submit" value="credit">余额支付 （当前余额 <?php  echo $students['chongzhi'];?>元)</button>
									<?php  } ?>
								</form>
							</div>
							<?php  } ?>
						</div>
					</div>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<div class="modal fade bs-example-modal-sm" id="subsribe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="  margin-top: 60px;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">本订单您已付费</h4>
				</div>
				<div class="modal-body">
					<div class="alert alert-warning text-center" role="alert">已付费订单请勿重复付费<img src="../addons/weixuexiao/public/mobile/img/sucess.png" class="img-rounded" style="width:100%;" /></div>
					<div class="alert alert-info" role="alert"><a href="<?php  echo $this->createMobileUrl('order', array('schoolid' => $schoolid), true)?>" class="btn btn-info" style='color:#fff;width:100%'>返回订单</a></div>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->	
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
<!--微信支付相关-->
<div id="bodyhidden" style="display: none;"></div>
<input id="flag" value="<?php  echo $flag;?>" type="hidden">
<script>
var PB = new PromptBox();
$(function ($) {
	var flag = $("#flag").val();	
	if (flag == 2) {
		if (cache == "" || cache == null) {
			 $('#pay').modal('show');
			 $("#bodyhidden").show();
		}
	}
});

function submitForm(){
	if(window.__wxjs_environment === 'miniprogram'){
		wx.miniProgram.navigateTo({url: '../payment/payment?orderid=<?php  echo $od1;?>&cose=<?php  echo $kc1['cose'];?>&nowweid=<?php  echo $weid;?>&schoolid=<?php  echo $schoolid;?>&do=sgetorder'})
	}else{
		document.getElementById('myform').submit();  
	}
}
WeixinJSHideAllNonBaseMenuItem();
function WeixinJSHideAllNonBaseMenuItem(){
	if (typeof wx != "undefined"){
		wx.ready(function () {			
			wx.hideMenuItems({
				menuList: ['menuItem:share:appMessage','menuItem:share:timeline','menuItem:share:qq','menuItem:share:weiboApp','menuItem:favorite','menuItem:share:QZone'] 
			});
		});
	}
}
function zhifu() {
	<?php  if(!$enough) { ?>
		alert("您的剩余积分不足，无法支付");
		return;
	<?php  } ?>
	if(window.__wxjs_environment === 'miniprogram'){
		<?php  if($school['is_chongzhi'] == 1 && $kc1['type'] != 8) { ?>
		$('#pay').modal('show');
		$("#bodyhidden").show();
		<?php  } else { ?>
		wx.miniProgram.navigateTo({url: '../payment/payment?orderid=<?php  echo $od1;?>&cose=<?php  echo $kc1['cose'];?>&nowweid=<?php  echo $weid;?>&schoolid=<?php  echo $schoolid;?>&do=<?php  echo $dos;?>'})
		<?php  } ?>
		
	}else{
		$('#pay').modal('show');
		$("#bodyhidden").show();
	}
}
$("#pay").click(function(){
	$("#bodyhidden").hide();
});

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	$('#wBtn').removeAttr('disabled');
	$('#wBtn').html('微信支付');
});

	
</script>
</html>