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
<title>订单支付</title>
<link rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/reset.css">
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=4.80120" />
<link href="<?php echo MODULE_URL;?>public/mobile/css/bootstrap.min.css" rel="stylesheet">
<style>	
#bodyhidden {position: fixed;z-index: 10000;top: 0;width: 100%;height: 100%;background: rgba(0, 0, 0, .15);display: -webkit-box;display: -webkit-flex;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-flex-flow: column;-webkit-flex-direction: column;-ms-flex-direction: column;flex-direction: column;-webkit-transition-property: opacity;-webkit-transition-duration: 100ms;-webkit-backface-visibility: hidden;background: rgba(0, 0, 0, 0.7);}
</style>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>		
<?php  echo register_jssdks();?>
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

                        <?php  if($kc1['type'] ==6) { ?>
                        <div class="quan_box click">
                            <a href="#" style="display:block">
                                <dl class="quan_list">
                                    <dt><div style="background-image:url(<?php  echo tomedia($imgarr['0']);?>)"></div></dt>
                                    <dd><?php  echo $good['title'];?></dd>
                                     
                                    <dd>￥<?php  echo $kc1['cose'];?></dd>
                                    <dd>数量：<?php  echo $morder['count'];?></dd>
									
                                </dl>
                            </a>
                           
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
                            <a href="">同意在线收费协议</a>
                        </p>
						<p style="padding-bottom:10px;"></p>									
                        <div onclick="zhifu();" id="gopay"><a style="text-decoration:none;color:#fff;">立即支付</a></div>
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
					<h4 class="modal-title">支付方式</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<div class="panel">
							<div class="clearfix" style="padding-top:10px;font-size: 100%;">
								<p style="font-size: 16px;">订单编号 :<span class="pull-right"><?php  echo $od1;?></span></p>
								<p style="font-size: 16px;">收款学校 :<span class="pull-right"><?php  echo $school['title'];?></span></p>
								<p style="font-size: 16px;"><strong style="color:red">支付金额 :<span class="pull-right" id="votefee">￥<?php  echo $kc1['cose'];?> 元</span></strong></p>

							</div>
						</div>
					</div>				
					<div class="form-group">
						<div class="" style="text-align: center;">
							<?php  if(!empty($setting['payment']['wechat']['switch'])) { ?>
							<div class="pay-btn" id="wechat-panel">
								<form action="<?php  echo $this->createMobileUrl('cash', array('paytype'=> 'wechat', 'u_uniacid'=> $uniacid))?>" method="post">
									<input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
									<input type="hidden" name="encrypt_code" value="" />
									<input type="hidden" name="card_id" value="<?php  echo base64_encode($card_id);?>" />
									<input type="hidden" name="coupon_id" value="" />
									<button class="btn btn-success btn-block col-sm-12" disabled="disabled" type="submit" id="wBtn" value="wechat">微信支付(必须使用微信内置浏览器)</button>
								</form>
							</div>
							
							<?php  } ?>
							<?php  if(!empty($setting['payment']['alipay']['switch'])) { ?>
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
							<?php  if(!empty($setting['payment']['credit']['switch'])) { ?>
							<div class="pay-btn" id="credit-panel">
								<form action="<?php  echo $this->createMobileUrl('cash', array('paytype'=> 'credit', 'u_uniacid'=> $uniacid))?>" method="post">
									<input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
									<input type="hidden" name="encrypt_code" value="" />
									<input type="hidden" name="card_id" value="<?php  echo base64_encode($card_id);?>" />
									<input type="hidden" name="coupon_id" value="" />
									<button class="btn btn-primary btn-block col-sm-12" type="submit" value="credit">余额支付 （余额支付当前 <?php  echo sprintf('%.2f', $credtis[$setting['creditbehaviors']['currency']]);?>元)</button>
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
		<?php  if(!empty($setting['payment']['wechat']['switch'])) { ?>
			document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
				$('#wBtn').removeAttr('disabled');
				$('#wBtn').html('微信支付');
			},true);
			<?php  } ?>
	var flag = $("#flag").val();	
	if (flag == 2) {
		if (cache == "" || cache == null) {
			 $('#pay').modal('show');
			 $("#bodyhidden").show();
		}
	}
});
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
	if(window.__wxjs_environment === 'miniprogram'){
		wx.miniProgram.navigateTo({url: '../payment/payment?orderid=<?php  echo $od1;?>&cose=<?php  echo $cose;?>&nowweid=<?php  echo $weid;?>&schoolid=<?php  echo $schoolid;?>&do=getorder'})
	}else{
		$('#pay').modal('show');
		$("#bodyhidden").show();
	}
}
$("#pay").click(function(){
	$("#bodyhidden").hide();
});

	
</script>
</html>