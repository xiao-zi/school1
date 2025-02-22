<?php defined('IN_IA') or exit('Access Denied');?><!--正文导航-->
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="format-detection" content="telephone=no">
<style>
	body > a:first-child,body > a:first-child img{ width: 0px !important; height: 0px !important; overflow: hidden; position: absolute}
	body{padding-bottom: 0 !important;}
</style>
<title><?php  echo $language['title'];?></title>
<link rel="stylesheet" href="<?php echo MODULE_URL;?>public/mobile/css/reset.css">
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.6"></script>
<?php  include $this->template('port');?>
</head>
<body>
<style>
.order_sum li > span{ float:left; padding-left: 24px; background: url(<?php echo OSSURL;?>public/mobile/img/user-uc.png) no-repeat center left; background-size: 19px;}
.order_sum li > span.click{ background-image: url(<?php echo OSSURL;?>public/mobile/img/user-c.png);}
.unpay_li{ position: relative; padding: 10px 23px 10px 39px; margin-top: 10px; background-color: #fff; border-top:1px solid #ccc;border-bottom:1px solid #ccc; background:#fff url(<?php echo OSSURL;?>public/mobile/img/user-uc.png) no-repeat 10px center; background-size: 19px; color: #828282;}
.unpay_li.click{counter-increment:item;background-image: url(<?php echo OSSURL;?>public/mobile/img/user-c.png);counter-increment:item;}
</style>
    <div id="wrap" class="user_order">
        <header id="header">
            <ul class="order">
				<li class="order_li all_g"><a href="javascript:void(0)"><?php  echo $language['user_qb'];?></a></li>
                <li class="order_li no_g"><a href="javascript:void(0)" <?php  if($rest != 0) { ?>value = "<?php  echo $rest;?>"<?php  } ?> id="no_g"><?php  echo $language['user_djf'];?></a></li>
                <li class="order_li yes_g"><a href="javascript:void(0)"><?php  echo $language['user_yjf'];?></a></li>
                <li class="order_li cancel_g"><a href="javascript:void(0)"><?php  echo $language['user_ytf'];?></a></li>
            </ul>			
        </header>
        <section id="order_list">
            <!-- 全部 -->
            <section class="order_all all_g">
				<?php  if(!empty($list)) { ?>
				    <?php  if(is_array($list)) { foreach($list as $item) { ?>
						<?php  if($item['type'] ==1) { ?>
							<?php  if($item['kcname']) { ?>
							<a href="<?php  if($item['status'] == 2) { ?><?php  echo $this->createMobileUrl('mykcinfo', array('id' => $item['kcid'], 'schoolid' =>$schoolid), true)?><?php  } else { ?><?php  echo $this->createMobileUrl('kcinfo', array('id' => $item['kcid'], 'schoolid' =>$schoolid), true)?><?php  } ?>">
								<dl class="order_cnt">
									<dt><div style="background-image:url(<?php  echo tomedia($item['ticon']);?>)"></div><?php  echo $item['tname'];?></dt>
									<dd><?php  echo $item['kcname'];?><?php  if($item['ksnum']) { ?>【含<?php  echo $item['ksnum'];?>课时】<?php  } ?></dd>
									<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
									<dd>课程开始:<?php  echo date('Y-m-d',$item['kcstart'])?></dd>
									<dd>课程结束:<?php  echo date('Y-m-d',$item['kcend'])?></dd>
									<dd>下单人:<?php  echo $item['pard'];?></dd>
									<dd>付费时间:<?php  if(empty($item['paytime'])) { ?>未付费<?php  } else { ?><?php  echo date('Y-m-d H:i:s',$item['paytime'])?><?php  } ?></dd>
									<!-- 三种状态分别是order_ready、order_unready、order_over -->
									<?php  if($item['kcstart']>TIMESTAMP) { ?>
									<!-- 未开课 -->
									<div class="order_static order_unready"></div>
									<?php  } ?>
									<?php  if($item['kcstart'] < TIMESTAMP && TIMESTAMP < $item['kcend']) { ?>
									<!-- 授课中 -->
									<div class="order_static order_ready"></div>
									<?php  } ?>
									<?php  if(TIMESTAMP > $item['kcend']) { ?>
									<!-- 已结课 -->
									<div class="order_static order_over"></div>
									<?php  } ?>
									<?php  if($item['status'] == 1) { ?>
									<div class="order_static1 order_unready1"></div>
									<?php  } else if($item['status'] == 2) { ?>
									<div class="order_static1 order_ready1"></div>
									<?php  } else if($item['status'] == 3) { ?>
									<div class="order_static1 order_ok1"></div>
									<?php  } ?>
								</dl>
							</a>
							<?php  } ?>
						<?php  } ?>
						<?php  if($item['type'] ==3) { ?>
						<?php  if($item['obname']) { ?>
							<?php  if($item['is_time'] == 1) { ?>
								<a href="<?php  echo $this->createMobileUrl('obinfo', array('id' => $item['costid'], 'schoolid' =>$schoolid), true)?>">
									<dl class="order_cnt">
										<dt><div style="background-image:url(<?php  echo tomedia($item['obicon']);?>)"></div><?php  echo $school['title'];?></dt>
										<dd><?php  echo $item['obname'];?></dd>
										<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
										<dd>有效时间范围</dd>
										<dd>开始:<?php  echo date('Y-m-d',$item['obstart'])?></dd>
										<dd>截至:<?php  echo date('Y-m-d',$item['obend'])?></dd>
										<dd>下单人:<?php  echo $item['pard'];?></dd>
										<dd>付费时间:<?php  if(empty($item['paytime'])) { ?>未付费<?php  } else { ?><?php  echo date('Y-m-d H:i:s',$item['paytime'])?><?php  } ?></dd>									
										<?php  if($item['status'] == 1) { ?>
										<div class="order_static1 order_unready1"></div>
										<?php  } else if($item['status'] == 2) { ?>
										<div class="order_static1 order_ready1"></div>
										<?php  } else if($item['status'] == 3) { ?>
										<div class="order_static1 order_ok1"></div>
										<?php  } ?>
									</dl>
								</a>
							<?php  } else { ?>
								<?php  $time = $item['obtime'] * 86400; $times = $time + $item['paytime']; $rest = $times - TIMESTAMP; $restday = floor($rest/86400);?>
								<a <?php  if($restday < 0 && $item['status'] ==2) { ?><?php  if($item['xufeitype']==2) { ?>onclick="gopay(<?php  echo $item['id'];?>);"<?php  } ?><?php  } else { ?>href="<?php  echo $this->createMobileUrl('obinfo', array('id' => $item['costid'], 'schoolid' =>$schoolid), true)?>"<?php  } ?>>
									<dl class="order_cnt">
										<dt><div style="background-image:url(<?php  echo tomedia($item['obicon']);?>)"></div><?php  echo $school['title'];?></dt>
										<dd><?php  echo $item['obname'];?></dd>
										<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>		
										<dd>付费时间:<?php  if(empty($item['paytime'])) { ?>未付费<?php  } else { ?><?php  echo date('Y-m-d H:i:s',$item['paytime'])?><?php  } ?></dd>	
										<dd>下单人:<?php  echo $item['pard'];?></dd>	
										<dd>剩余时间:<?php  if($restday > 0) { ?><?php  echo $restday;?>天<?php  } else { ?>已到期<?php  } ?></dd>
											<?php  if($restday < 0 && $item['status'] ==2) { ?>
												<?php  if($item['xufeitype']==2) { ?>
												<div class="order_static order_xufei"></div>
												<?php  } ?>
											<?php  } ?>										
										<?php  if($item['status'] == 1) { ?>
										<div class="order_static1 order_unready1"></div>
										<?php  } else if($item['status'] == 2) { ?>
										<div class="order_static1 order_ready1"></div>
										<?php  } else if($item['status'] == 3) { ?>
										<div class="order_static1 order_ok1"></div>
										<?php  } ?>
									</dl>
								</a>
							<?php  } ?>
						<?php  } ?>	
						<?php  } ?>
						<?php  if($item['type'] ==4) { ?>	
						<a href="#">
							<dl class="order_cnt">
								<dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div><?php  echo $school['title'];?></dt>
								<dd>报名费</dd>
								<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
								<dd>付费时间:<?php  if(empty($item['paytime'])) { ?>未付费<?php  } else { ?><?php  echo date('Y-m-d H:i:s',$item['paytime'])?><?php  } ?></dd>
								<dd>下单人:<?php  echo $item['pard'];?></dd>
								<?php  if($item['status'] == 1) { ?>
								<div class="order_static1 order_unready1"></div>
								<?php  } else if($item['status'] == 2) { ?>
								<div class="order_static1 order_ready1"></div>
								<?php  } else if($item['status'] == 3) { ?>
								<div class="order_static1 order_ok1"></div>
								<?php  } ?>
							</dl>
						</a>							
						<?php  } ?>
						<?php  if($item['type'] ==5) { ?>	
						<a href="#">
							<dl class="order_cnt">
								<dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div><?php  echo $school['title'];?></dt>
								<dd>考勤卡费</dd>
								<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
								<dd>付费时间:<?php  if(empty($item['paytime'])) { ?>未付费<?php  } else { ?><?php  echo date('Y-m-d H:i:s',$item['paytime'])?><?php  } ?></dd>
								<dd>下单人:<?php  echo $item['pard'];?></dd>
								<?php  if($item['status'] == 1) { ?>
								<div class="order_static1 order_unready1"></div>
								<?php  } else if($item['status'] == 2) { ?>
								<div class="order_static1 order_ready1"></div>
								<?php  } else if($item['status'] == 3) { ?>
								<div class="order_static1 order_ok1"></div>
								<?php  } ?>
							</dl>
						</a>
						<?php  } ?>
						<?php  if($item['type'] ==7) { ?>	
						<?php  $time = $item['vodtime'] * 86400; $times = $time + $item['paytime']; $rest = $times - TIMESTAMP; $restday = floor($rest/86400);?>
						<a href="#">
							<dl class="order_cnt">
								<dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div><?php  echo $school['title'];?></dt>
								<dd><?php  echo $item['vodname'];?></dd>
								<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
								<dd>付费时间:<?php  if(empty($item['paytime'])) { ?>未付费<?php  } else { ?><?php  echo date('Y-m-d H:i:s',$item['paytime'])?><?php  } ?></dd>
								<dd>剩余时间:<?php  if($restday > 0) { ?><?php  echo $restday;?>天<?php  } else { ?>已到期<?php  } ?></dd>
								<dd>下单人:<?php  echo $item['pard'];?></dd>
									<?php  if($item['vodtype'] == 'all') { ?><dd>购买类型:全家共享</dd><?php  } ?>
									<?php  if($item['vodtype'] == 'one') { ?><dd>购买类型:本人观看</dd><?php  } ?>									
								<?php  if($item['status'] == 1) { ?>
								<div class="order_static1 order_unready1"></div>
								<?php  } else if($item['status'] == 2) { ?>
								<div class="order_static1 order_ready1"></div>
								<?php  } else if($item['status'] == 3) { ?>
								<div class="order_static1 order_ok1"></div>
								<?php  } ?>
							</dl>
						</a>
						<?php  } ?>
						<?php  if($item['type'] == 8) { ?>	
						<a href="#">
							<dl class="order_cnt">
								<dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div><?php  echo $school['title'];?></dt>
								<dd>充值<?php  echo $item['chongzhi'];?>元</dd>
								<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
								<dd>付费时间:<?php  if(empty($item['paytime'])) { ?>未付费<?php  } else { ?><?php  echo date('Y-m-d H:i:s',$item['paytime'])?><?php  } ?></dd>
								<dd>下单人:<?php  echo $item['pard'];?></dd>
								<?php  if($item['status'] == 1) { ?>
								<div class="order_static1 order_unready1"></div>
								<?php  } else if($item['status'] == 2) { ?>
								<div class="order_static1 order_ready1"></div>
								<?php  } else if($item['status'] == 3) { ?>
								<div class="order_static1 order_ok1"></div>
								<?php  } ?>
							</dl>
						</a>
						<?php  } ?>
						<?php  if($item['type'] == 9) { ?>	
						<a href="#">
							<dl class="order_cnt">
								<dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div><?php  echo $school['title'];?></dt>
								<dd>充电桩充次:<?php  echo $item['ksnum'];?>次</dd>
								<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
								<dd>付费时间:<?php  if(empty($item['paytime'])) { ?>未付费<?php  } else { ?><?php  echo date('Y-m-d H:i:s',$item['paytime'])?><?php  } ?></dd>
								<dd>下单人:<?php  echo $item['pard'];?></dd>
								<?php  if($item['status'] == 1) { ?>
								<div class="order_static1 order_unready1"></div>
								<?php  } else if($item['status'] == 2) { ?>
								<div class="order_static1 order_ready1"></div>
								<?php  } else if($item['status'] == 3) { ?>
								<div class="order_static1 order_ok1"></div>
								<?php  } ?>
							</dl>
						</a>
						<?php  } ?>
												
					<?php  } } ?>	
				<?php  } else { ?>	
					<section class="order_null" style="z-index:999;">
							<p>您还没任何已缴费项目哦~</p>
					</section>
				<?php  } ?>				
            </section>
            <!-- 待缴费 -->
            <section class="order_unpay no_g">
			        <?php  if(is_array($list)) { foreach($list as $item) { ?>
					<?php  if($item['status'] == 1) { ?>
						<?php  if($item['type'] == 1) { ?>
						<?php  if($item['kcname']) { ?>
                        <div class="">
                            <dl class="unpay_li" val="<?php  echo $item['id'];?>" cose="<?php  echo $item['cose'];?>">
                                <dt><div style="background-image:url(<?php  echo tomedia($item['ticon']);?>)"></div><?php  echo $item['tname'];?></dt>
                                <dd><?php  echo $item['kcname'];?><?php  if($item['ksnum']) { ?>【含<?php  echo $item['ksnum'];?>课时】<?php  } ?></dd>
                                <!-- value中是剩余名额 -->
								<?php  $datas = pdo_fetchcolumn("select count(*) FROM ".tablename('wx_school_order')." WHERE kcid = '".$item['id']."' And status = 2 "); $rest = $item['minge'] - $datas - $item['yibao'];?>
                                <dd value="<?php  if($rest > 0) { ?><?php  echo $rest;?>个名额<?php  } else { ?>0个名额<?php  } ?>"><?php  echo $item['cose'];?></dd>
								<dd>下单人:<?php  echo $item['pard'];?></dd>
                                <dd>开始:<?php  echo date('Y-m-d',$item['kcstart'])?></dd>
                                <dd>结束:<?php  echo date('Y-m-d',$item['kcend'])?></dd>
                                <input type="hidden" value="<?php  echo $item['id'];?>" class="coupon_cid"/>
                                <div class="order_close" style="background-image:url(<?php echo OSSURL;?>public/mobile/img/mask_close.png)"></div>
                            </dl>
                            <!-- <p class="order_time">请于<?php  echo date('Y年m月d日',$item['kcstart'])?>之前缴费哦~</p> -->
                            <div class="mask"></div>
                        </div>
						<?php  } ?>
						<?php  } else if($item['type'] == 5) { ?>
                        <div class="">
                            <dl class="unpay_li" val="<?php  echo $item['id'];?>" cose="<?php  echo $item['cose'];?>">
                                <dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div><?php  echo $school['title'];?></dt>
                                <dd>考勤卡费</dd>
                                <!-- value中是剩余名额 -->
								<dd><?php  echo $item['cose'];?>元</dd>
								<dd>下单人:<?php  echo $item['pard'];?></dd>
								<?php  if($card['cardtime'] ==1) { ?>
								<dd>续费时长:<?php  echo $card['endtime1'];?>天</dd>
								<?php  } else { ?>
								<dd>有效时间:至<?php  echo date('Y年m月d日',$card['endtime2'])?></dd>
								<?php  } ?>
                                <input type="hidden" value="<?php  echo $item['id'];?>" class="coupon_cid"/>
                                <div class="order_close" style="background-image:url(<?php echo OSSURL;?>public/mobile/img/mask_close.png)"></div>
                            </dl>
                            <p class="order_time"><?php  if($card['cardtime'] ==1) { ?>续费后可以使本功能延长<?php  echo $card['endtime1'];?>天<?php  } else { ?>续费后可以使本功能至<?php  echo date('Y年m月d日',$card['endtime2'])?><?php  } ?></p>
                            <div class="mask"></div>
                        </div>					
						<?php  } else if($item['type'] == 7) { ?>
							<?php  if($item['vodname']) { ?>
							<div class="">
								<dl class="unpay_li" val="<?php  echo $item['id'];?>" cose="<?php  echo $item['cose'];?>">
									<dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div><?php  echo $school['title'];?></dt>
									<dd><?php  echo $item['vodname'];?></dd>
									<!-- value中是剩余名额 -->
									<dd><?php  echo $item['cose'];?>元</dd>
									<dd>下单人:<?php  echo $item['pard'];?></dd>
									<?php  if($item['vodtype'] == 'all') { ?><dd>购买类型:全家共享</dd><?php  } ?>
									<?php  if($item['vodtype'] == 'one') { ?><dd>购买类型:本人观看</dd><?php  } ?>									
									<dd>购买时长:<?php  echo $item['vodtime'];?>天</dd>
									<input type="hidden" value="<?php  echo $item['id'];?>" class="coupon_cid"/>
									<div class="order_close" style="background-image:url(<?php echo OSSURL;?>public/mobile/img/mask_close.png)"></div>
								</dl>
								<p class="order_time">购买后可以使用本功能<?php  echo $item['vodtime'];?>天</p>
								<div class="mask"></div>
							</div>
							<?php  } ?>
						<?php  } else if($item['type'] == 8) { ?>
							<div class="">
                            <dl class="unpay_li" val="<?php  echo $item['id'];?>" cose="<?php  echo $item['cose'];?>">
                                <dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div><?php  echo $school['title'];?></dt>
                                <dd>充值<?php  echo $item['chongzhi'];?>元</dd>
                                <!-- value中是剩余名额 -->
								<dd><?php  echo $item['cose'];?>元</dd>
								<dd>下单人:<?php  echo $item['pard'];?></dd>
								
								<dd>下单时间:<?php  echo date('Y年m月d日',$item['createtime'])?></dd>
								
                                <input type="hidden" value="<?php  echo $item['id'];?>" class="coupon_cid"/>
                                <div class="order_close" style="background-image:url(<?php echo OSSURL;?>public/mobile/img/mask_close.png)"></div>
                            </dl>
                          
                            <div class="mask"></div>
                        </div>
						<?php  } else if($item['type'] == 9) { ?>
							<div class="">
                            <dl class="unpay_li" val="<?php  echo $item['id'];?>" cose="<?php  echo $item['cose'];?>">
                                <dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div><?php  echo $school['title'];?></dt>
                                <dd>充电桩充次：<?php  echo $item['ksnum'];?>次</dd>
                                <!-- value中是剩余名额 -->
								<dd><?php  echo $item['cose'];?>元</dd>
								<dd>下单人:<?php  echo $item['pard'];?></dd>
								
								<dd>下单时间:<?php  echo date('Y年m月d日',$item['createtime'])?></dd>
								
                                <input type="hidden" value="<?php  echo $item['id'];?>" class="coupon_cid"/>
                                <div class="order_close" style="background-image:url(<?php echo OSSURL;?>public/mobile/img/mask_close.png)"></div>
                            </dl>
                          
                            <div class="mask"></div>
                        </div>
								
						<?php  } else { ?>
							<?php  if($item['ob_ison'] == 1 && $item['obname']) { ?>
							<div class="">
								<dl class="unpay_li" val="<?php  echo $item['id'];?>" cose="<?php  echo $item['cose'];?>">
									<dt><div style="background-image:url(<?php  echo tomedia($item['obicon']);?>)"></div><?php  echo $school['title'];?></dt>
									<dd><?php  echo $item['obname'];?></dd>			
									<dd><?php  echo $item['cose'];?></dd>
									<dd>下单人:<?php  echo $item['pard'];?></dd>
										<?php  if($item['is_time'] == 1) { ?>
										<dd>有效时间范围</dd>
										<dd>开始:<?php  echo date('Y-m-d',$item['obstart'])?></dd>
										<dd>截至:<?php  echo date('Y-m-d',$item['obend'])?></dd>
										<?php  } else { ?>								
										<dd>有效时长:<?php  echo $item['obtime'];?>天</dd>
										<?php  } ?>
									<input type="hidden" value="<?php  echo $item['id'];?>" class="coupon_cid"/>                                
								</dl>
								<!-- <p class="order_time">请于<?php  echo date('Y年m月d日',$item['obstart'])?>之前缴费哦~</p> -->
								<div class="mask"></div>
							</div>
							<?php  } ?>
						<?php  } ?>
					<?php  } ?>	
					<?php  } } ?>	
                <ul class="order_sum">
                    <li><span id="quanxuan">全选</span>未付（<b></b>个)</li>
                    <li><div class="btn" <?php  if(empty($userinfo['name']) || empty($userinfo['name'])) { ?>onclick="Sigeup()"<?php  } else { ?>id="jiesuan"<?php  } ?>>去结算</div></li>
                </ul>
            </section>
            <!-- 已缴费 -->
            <section class="order_payed yes_g">
			        <?php  if(!empty($list)) { ?>
			            <?php  if(is_array($list)) { foreach($list as $item) { ?>
							<?php  if($item['status'] == 2) { ?>
								<?php  if($item['type'] == 1) { ?>
								<?php  if($item['kcname']) { ?>
								<a href="<?php  echo $this->createMobileUrl('mykcinfo', array('id' => $item['kcid'], 'schoolid' =>$schoolid), true)?>">
									<dl class="order_cnt">
										<dt><div style="background-image:url(<?php  echo tomedia($item['ticon']);?>)"></div><?php  echo $item['tname'];?></dt>
										<dd><?php  echo $item['kcname'];?><?php  if($item['ksnum']) { ?>【含<?php  echo $item['ksnum'];?>课时】<?php  } ?></dd>
										<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
										<dd>开始:<?php  echo date('Y-m-d',$item['kcstart'])?></dd>
										<dd>结束:<?php  echo date('Y-m-d',$item['kcend'])?></dd>
										<!-- 三种状态分别是order_ready、order_unready、order_over -->
										<?php  if($item['kcstart']>TIMESTAMP) { ?>
										<!-- 未开课 -->
										<div class="order_static order_unready"></div>
										<?php  } ?>
										<?php  if($item['kcstart'] < TIMESTAMP && TIMESTAMP < $item['kcend']) { ?>
										<!-- 授课中 -->
										<div class="order_static order_ready"></div>
										<?php  } ?>
										<?php  if(TIMESTAMP > $item['kcend']) { ?>
										<!-- 已结课 -->
										<div class="order_static order_over"></div>
										<?php  } ?>
										<?php  if($item['status'] == 1) { ?>
										<div class="order_static1 order_unready1"></div>
										<?php  } else if($item['status'] == 2) { ?>
										<div class="order_static1 order_ready1"></div>
										<?php  } else if($item['status'] == 3) { ?>
										<div class="order_static1 order_ok1"></div>
										<?php  } ?>
									</dl>
								</a>
								<?php  } ?>
								<?php  } else if($item['type'] == 5) { ?>
								<a>
									<dl class="order_cnt">
										<dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div><?php  echo $school['title'];?></dt>
										<dd>考勤卡费</dd>
										<!-- value中是剩余名额 -->
										<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
										<dd>付费时间:<?php  echo date('Y-m-d H:i:s',$item['paytime'])?></dd>
										<?php  if($item['status'] == 1) { ?>
										<div class="order_static1 order_unready1"></div>
										<?php  } else if($item['status'] == 2) { ?>
										<div class="order_static1 order_ready1"></div>
										<?php  } else if($item['status'] == 3) { ?>
										<div class="order_static1 order_ok1"></div>
										<?php  } ?>
									</dl>
								</a>
								<?php  } else if($item['type'] == 7) { ?>
								<a>
									<dl class="order_cnt">
										<dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div><?php  echo $school['title'];?></dt>
										<dd><?php  echo $item['vodname'];?></dd>
										<!-- value中是剩余名额 -->	
										<dd><?php  echo $item['cose'];?>元</dd>
										<dd>下单人:<?php  echo $item['pard'];?></dd>
									<?php  if($item['vodtype'] == 'all') { ?><dd>购买类型:全家共享</dd><?php  } ?>
									<?php  if($item['vodtype'] == 'one') { ?><dd>购买类型:本人观看</dd><?php  } ?>										
										<dd>购买时长:<?php  echo $item['vodtime'];?>天</dd>
										<input type="hidden" value="<?php  echo $item['id'];?>" class="coupon_cid"/>
										<div class="order_close" style="background-image:url(<?php echo OSSURL;?>public/mobile/img/mask_close.png)"></div>
									</dl>
									<p class="order_time">购买后可以使用本功能<?php  echo $item['vodtime'];?>天</p>
									<div class="mask"></div>									
								</a>
								<?php  } else if($item['type'] == 8) { ?>
								<a>
									<dl class="order_cnt">
										<dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div><?php  echo $school['title'];?></dt>
										<dd>充值<?php  echo $item['chongzhi'];?>元</dd>
										<!-- value中是剩余名额 -->
										<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
										<dd>付费时间:<?php  echo date('Y-m-d H:i:s',$item['paytime'])?></dd>
										<?php  if($item['status'] == 1) { ?>
										<div class="order_static1 order_unready1"></div>
										<?php  } else if($item['status'] == 2) { ?>
										<div class="order_static1 order_ready1"></div>
										<?php  } else if($item['status'] == 3) { ?>
										<div class="order_static1 order_ok1"></div>
										<?php  } ?>
									</dl>
								</a>
								<?php  } else if($item['type'] == 9) { ?>
								<a>
									<dl class="order_cnt">
										<dt><div style="background-image:url(<?php  echo tomedia($school['logo']);?>)"></div><?php  echo $school['title'];?></dt>
										<dd>充电桩充次：<?php  echo $item['ksnum'];?>次</dd>
										<!-- value中是剩余名额 -->
										<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
										<dd>付费时间:<?php  echo date('Y-m-d H:i:s',$item['paytime'])?></dd>
										<?php  if($item['status'] == 1) { ?>
										<div class="order_static1 order_unready1"></div>
										<?php  } else if($item['status'] == 2) { ?>
										<div class="order_static1 order_ready1"></div>
										<?php  } else if($item['status'] == 3) { ?>
										<div class="order_static1 order_ok1"></div>
										<?php  } ?>
									</dl>
								</a>
								
								<?php  } else { ?>
								<?php  if($item['obname']) { ?>
									<?php  if($item['is_time'] == 1) { ?>
										<a href="<?php  echo $this->createMobileUrl('obinfo', array('id' => $item['costid'], 'schoolid' =>$schoolid), true)?>">
											<dl class="order_cnt">
												<dt><div style="background-image:url(<?php  echo tomedia($item['obicon']);?>)"></div><?php  echo $school['title'];?></dt>
												<dd><?php  echo $item['obname'];?></dd>
												<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
												<dd>有效时间范围</dd>
												<dd>开始:<?php  echo date('Y-m-d',$item['obstart'])?></dd>
												<dd>截至:<?php  echo date('Y-m-d',$item['obend'])?></dd>
												<dd>付费时间:<?php  if(empty($item['paytime'])) { ?>未付费<?php  } else { ?><?php  echo date('Y-m-d H:i:s',$item['paytime'])?><?php  } ?></dd>									
												<?php  if($item['status'] == 1) { ?>
												<div class="order_static1 order_unready1"></div>
												<?php  } else if($item['status'] == 2) { ?>
												<div class="order_static1 order_ready1"></div>
												<?php  } else if($item['status'] == 3) { ?>
												<div class="order_static1 order_ok1"></div>
												<?php  } ?>
											</dl>
										</a>
								    <?php  } else { ?>
										<?php  $time = $item['obtime'] * 86400; $times = $time + $item['paytime']; $rest = $times - TIMESTAMP; $restday = floor($rest/86400);?>
										<a <?php  if($restday < 0) { ?><?php  if($item['xufeitype']==2) { ?>onclick="gopay(<?php  echo $item['id'];?>);"<?php  } ?><?php  } else { ?>href="<?php  echo $this->createMobileUrl('obinfo', array('id' => $item['costid'], 'schoolid' =>$schoolid), true)?>"<?php  } ?>>
											<dl class="order_cnt">
												<dt><div style="background-image:url(<?php  echo tomedia($item['obicon']);?>)"></div><?php  echo $school['title'];?></dt>
												<dd><?php  echo $item['obname'];?></dd>
												<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>	
												<dd>付费时间:<?php  echo date('Y-m-d H:i:s',$item['paytime'])?></dd>									
												<dd>剩余时间:<?php  if($restday > 0) { ?><?php  echo $restday;?>天<?php  } else { ?>已到期<?php  } ?></dd>
												<?php  if($restday < 0) { ?>
													<?php  if($item['xufeitype']==2) { ?>
													<div class="order_static order_xufei"></div>
													<?php  } ?>
												<?php  } ?>									
												<?php  if($item['status'] == 1) { ?>
												<div class="order_static1 order_unready1"></div>
												<?php  } else if($item['status'] == 2) { ?>
												<div class="order_static1 order_ready1"></div>
												<?php  } else if($item['status'] == 3) { ?>
												<div class="order_static1 order_ok1"></div>
												<?php  } ?>
											</dl>
										</a>
									<?php  } ?>
								<?php  } ?>	
								<?php  } ?>
							<?php  } ?>	
						<?php  } } ?>				
					<?php  } else { ?>	
						<section class="order_null">
								<p>您还没任何未缴项目哦~</p>
						</section>
					<?php  } ?>
            </section>
            <!-- 已退费 -->
            <section class="order_refund cancel_g">                                   
			        <?php  if(!empty($list)) { ?>
			            <?php  if(is_array($list)) { foreach($list as $item) { ?>
							<?php  if($item['status'] == 3) { ?>
								<?php  if($item['type'] == 1) { ?>
								<a href="<?php  echo $this->createMobileUrl('kcinfo', array('id' => $item['kcid'], 'schoolid' =>$schoolid), true)?>">
									<dl class="order_cnt">
										<dt><div style="background-image:url(<?php  echo tomedia($item['ticon']);?>)"></div><?php  echo $item['tname'];?></dt>
										<dd><?php  echo $item['kcname'];?><?php  if($item['ksnum']) { ?>【含<?php  echo $item['ksnum'];?>课时】<?php  } ?></dd>
										<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
										<dd>开始:<?php  echo date('Y-m-d',$item['kcstart'])?></dd>
										<dd>结束:<?php  echo date('Y-m-d',$item['kcend'])?></dd>
										<!-- 三种状态分别是order_ready、order_unready、order_over -->
										<?php  if($item['kcstart']>TIMESTAMP) { ?>
										<!-- 未开课 -->
										<div class="order_static order_unready"></div>
										<?php  } ?>
										<?php  if($item['kcstart'] < TIMESTAMP && TIMESTAMP < $item['kcend']) { ?>
										<!-- 授课中 -->
										<div class="order_static order_ready"></div>
										<?php  } ?>
										<?php  if(TIMESTAMP > $item['kcend']) { ?>
										<!-- 已结课 -->
										<div class="order_static order_over"></div>
										<?php  } ?>
										<?php  if($item['status'] == 1) { ?>
										<div class="order_static1 order_unready1"></div>
										<?php  } else if($item['status'] == 2) { ?>
										<div class="order_static1 order_ready1"></div>
										<?php  } else if($item['status'] == 3) { ?>
										<div class="order_static1 order_ok1"></div>
										<?php  } ?>
									</dl>
								</a>
								<?php  } else if($item['type'] == 9) { ?>
								<a href="<?php  echo $this->createMobileUrl('obinfo', array('id' => $item['costid'], 'schoolid' =>$schoolid), true)?>">
									<dl class="order_cnt">
										<dt><div style="background-image:url(<?php  echo tomedia($item['obicon']);?>)"></div></dt>
										<dd>充电桩充次：<?php  echo $item['ksnum'];?>次</dd>
										<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
										<dd>退费时间:<?php  if(!empty($item['tuitime'])) { ?><?php  echo date('Y-m-d H:i:s',$item['tuitime'])?><?php  } ?></dd>
										<?php  if($item['status'] == 1) { ?>
										<div class="order_static1 order_unready1"></div>
										<?php  } else if($item['status'] == 2) { ?>
										<div class="order_static1 order_ready1"></div>
										<?php  } else if($item['status'] == 3) { ?>
										<div class="order_static1 order_ok1"></div>
										<?php  } ?>
									</dl>
								</a>
								<?php  } else { ?>
								<a href="<?php  echo $this->createMobileUrl('obinfo', array('id' => $item['costid'], 'schoolid' =>$schoolid), true)?>">
									<dl class="order_cnt">
										<dt><div style="background-image:url(<?php  echo tomedia($item['obicon']);?>)"></div></dt>
										<dd><?php  echo $item['obname'];?></dd>
										<dd>金额:<?php  echo $item['cose'];?>元&nbsp;订单号:<?php  echo $item['id'];?></dd>
										<dd>退费时间:<?php  if(!empty($item['tuitime'])) { ?><?php  echo date('Y-m-d H:i:s',$item['tuitime'])?><?php  } ?></dd>
										<?php  if($item['status'] == 1) { ?>
										<div class="order_static1 order_unready1"></div>
										<?php  } else if($item['status'] == 2) { ?>
										<div class="order_static1 order_ready1"></div>
										<?php  } else if($item['status'] == 3) { ?>
										<div class="order_static1 order_ok1"></div>
										<?php  } ?>
									</dl>
								</a>
								<?php  } ?>
							<?php  } ?>	
						<?php  } } ?>					
					<?php  } else { ?>	
						<section class="order_null">
							<p>您还没任何退费项目哦~</p>
						</section>
					<?php  } ?>
            </section>			
        </section>
        <div id="mask" style="display:none;background:;">
            <div class="dialoge" id="delete" style="display:none;">
                <div class="dialoge_close"></div>
                <h1>请问您确定要删除吗？</h1>
                <a class="dialoge_close" href="javascript:void(0)">取消</a>
                <a class="dialoge_ture" href="javascript:void(0)">确定</a>
            </div>
            <div class="dialoge" id="dialoge_inf" style="display:none">
                <div class="dialog_close"></div>
                <span><?php  echo $language['jstip1'];?></span>        		
            </div>
        </div>		
    </div>
    <div class="user_info" id="user_info" style="display:none;">
	   <div style="border-radius: 5%;">
            <ul>
				<p><?php  echo $language['jstip2'];?></p>
                    <li class="user_name">
                        <input type="text" placeholder="请输入您的姓名" name ="name" id="name" value="<?php  if(!empty($userinfo['name'])) { ?><?php  echo $userinfo['name'];?><?php  } ?>">
                        真实姓名
                    </li>
                    <li class="user_name">
                        <input type="text" placeholder="请输入您的手机号" name ="mobile" id="mobile" value="<?php  if(!empty($userinfo['mobile'])) { ?><?php  echo $userinfo['mobile'];?><?php  } ?>">
                        手机号
                    </li>
					<li class="user_name"><?php  echo $language['jstip3'];?>
						<select id="is_allowmsg">
							<option value="1">允许</option>
							<option value="2">拒绝</option>
						</select>
					</li>					
                     <div class="btn" onclick="Tijiao();">提交</div>
            </ul>
					<span id="close" onclick="Close();">×</span>
	   </div>
    </div>	
	<input id="userid" name="userid" type="hidden" value="<?php  echo $it['id'];?>">
	<input id="umobile" name="umobile" type="hidden" value="<?php  echo $userinfo['mobile'];?>">
	<input id="uname" name="uname" type="hidden" value="<?php  echo $userinfo['name'];?>">	
	<?php  include $this->template('footer');?> 
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>

<script>
var userid =  $("#userid").val(); 
$(function() {
 WeixinJSHideAllNonBaseMenuItem();	
 $('.all_g').remove('select');
 $('.no_g').remove('select');
 $('.yes_g').remove('select');
 $('.cancel_g').remove('select');
	var select_div = '<?php  echo $_GPC['op'];?>';
	if (select_div == '') {
		select_div = 'no_g';
	}
	$("." + select_div).addClass('select');

	if ($('.unpay_li').length == '0') {
	   $('.order_sum').hide();
	}
});
function gopay(id){
	var submitData = {
				weid:"<?php  echo $weid;?>",
				schoolid:"<?php  echo $schoolid;?>",
				openid:"<?php  echo $openid;?>",
				id:id,
	};
	jConfirm("确认续费？", "确定对话框", function (isConfirm) {
		if(isConfirm){
			$.post("<?php  echo $this->createMobileUrl('payajax',array('op'=>'xufeiob'))?>",submitData, function(data) {
				if (data.result) {
					location.href = data.msg;
				} else {
					jTips(data.msg);
				}
			},'json');
		}
	});	
} 
$(function() { 
	var ua = navigator.userAgent.toLowerCase();
	var browserType = '';
	if (ua.match(/MicroMessenger/i) == "micromessenger") {
		browserType = "touchstart";
	}else if(ua.indexOf('iphone') > -1 || ua.indexOf('Android') > -1 || ua.indexOf('Linux') > -1 || ua.indexOf('Mac') > -1){
		browserType = "touchstart";
	}else{
		browserType = "click";
	}
	$('#jiesuan').bind('click', function() {
		var arr = new Array();
		var cosearr = new Array();
		var j = 0;
		for (var i = 0; i < $('.unpay_li').length; i++) {
			if ($('.unpay_li').eq(i).hasClass('click')) {
				arr[j] = $('.unpay_li').eq(i).attr('val');
				cosearr[j] = $('.unpay_li').eq(i).attr('cose');
				j++;
			}
		}
		var str = arr.join(',');
		var cose = cosearr.join(',');
		if (str == '') {
			jTips('请先选择结算项目！');
			return false;
		}
		if (j++ > 1) {
			jTips('抱歉,为了资金安全,请逐个订单支付！');
			return false;
		}
		if(window.__wxjs_environment === 'miniprogram'){
			
			<?php  if($school['is_chongzhi'] == 1 && $kc1['type'] != 8) { ?>
				window.location.href = "<?php  echo $this->createMobileUrl('gopay', array('schoolid' => $schoolid),true)?>" + "&str=" + str;
			<?php  } else { ?>
			var nowweid = "<?php  echo $weid;?>";
			var schoolid = "<?php  echo $schoolid;?>";
			wx.miniProgram.navigateTo({url: '../payment/payment?orderid='+ str + "&cose=" + cose +"&do=order&nowweid=" + nowweid + "&schoolid=" + schoolid})
			<?php  } ?>
		}else{
			window.location.href = "<?php  echo $this->createMobileUrl('gopay', array('schoolid' => $schoolid),true)?>" + "&str=" + str;
		}
	});
});
//删除
function deleteClass(cid, stuid) {
	var submitData = {
				schoolid : "<?php  echo $schoolid;?>",
				weid     : "<?php  echo $_W['uniacid'];?>",
				openid   : "<?php  echo $openid;?>",
				uid      : "<?php  echo $fan['uid'];?>",
				kcid     : cid,
				sid      : stuid
	};
	$.post("<?php  echo $this->createMobileUrl('payajax',array('op'=>'deleteclass'))?>",submitData, function(data) {
		if (data.result) {
			var val = $('#no_g').attr('value');
			$('#no_g').attr('value', val - 1);
			$('#mask').hide();
		} else {
			$('#mask').show();
			$('#dialoge_inf').html('<span>' + data.msg + '</span>');
			$('#dialoge_inf').show();
		}
	},'json');

}
$(document).ready(function(e) {
	$(".order > li").bind("click", function() {
		if ($(this).hasClass("select"))
			return;
		var _index = $(this).index();
		$(this).addClass("select").siblings(".select").removeClass("select");
		$("#order_list > section").eq(_index).addClass("select").siblings(".select").removeClass("select");
	})
	var _list = 0;
	
	var ua = navigator.userAgent.toLowerCase();
	var browserType = '';
	if (ua.match(/MicroMessenger/i) == "micromessenger") {
		browserType = "touchstart";
	}else if(ua.indexOf('iphone') > -1 || ua.indexOf('Android') > -1 || ua.indexOf('Linux') > -1 || ua.indexOf('Mac') > -1){
		browserType = "touchstart";
	}else{
		browserType = "click";
	}
	
	$(document).bind('touchstart', function() {
		if (event.target.id == "mask") {
			$(".dialoge").hide();
			$("#mask").hide();
		}
		if (event.target.className == "dialoge_close") {
			$(".dialoge").hide();
			$("#mask").hide();
		}
		if (event.target.className == "dialoge_ture") {
			var cid = $('.coupon_cid').eq(_list).val();
			var stuid = '<?php  echo $item['sid'];?>';
			deleteClass(cid, stuid);
			$(".dialoge").hide();
			$("#mask").hide();
			$(".order_unpay > div").eq(_list).remove()
		}

	})
	$(".unpay_li").bind('click', function() {
		$(this).toggleClass("click");
		var unpay_flag = true;
		for (var i = 0; i < $('.unpay_li').length; i++) {
			if (!$('.unpay_li').eq(i).hasClass('click')) {
				unpay_flag = false;
			}
		}
		if (unpay_flag) {
			$('#quanxuan').addClass('click');
		} else {
			$('#quanxuan').removeClass('click');
		}
	})
	$(".order_sum span").bind('click', function() {
		if ($(this).hasClass("click")) {
			$(this).removeClass("click");
			$(".order_unpay .unpay_li").removeClass("click");
		} else {
			$(this).addClass("click");
			for (var j = 0; j < $('.unpay_li').length; j++) {
				if (!$('.unpay_li').eq(j).parent().hasClass('delete')) {
					$('.unpay_li').eq(j).addClass("click");
				}
			}
		}
	})
	$(".order_close").bind('click', function() {
		$("#mask").show();
		$(".dialoge#delete").show();
		_list = $(event.target).index(".order_close");
		event.stopPropagation();
	})

});
function Tijiao() {			
				
		var name = $("#name").val();
		var mobile = $("#mobile").val();
		var is_allowmsg = $("#is_allowmsg").val();
		reg=/^(0|86|17951)?(13[0-9]|15[012356789]|17[0-9]|18[0-9]|14[57])[0-9]{8}$/;
		if (name == "" || name == undefined || name == null) { 
		jTips('请输入您的姓名！');
		return false;
		}
		if (is_allowmsg == "" || is_allowmsg == undefined || is_allowmsg == null) { 
		jTips("<?php  echo $language['jstip4'];?>");
		return false;
		}		
		if (mobile == "" || mobile == undefined || mobile == null || !reg.test(mobile)) {
		jTips('手机号有误或为空！');
		return false;
		} else {
			var	submitData = {
				schoolid:"<?php  echo $schoolid;?>",
				name:name,
				userid:userid,
				is_allowmsg:is_allowmsg,
				mobile:mobile
				};
			$.post("<?php  echo $this->createMobileUrl('indexajax',array('op'=>'useredit'))?>",submitData,function(data){

				if(data.result){
					jTips(data.msg);
					location.reload();
				}else{
					jTips(data.msg);	
				}
			},'json');
		}
}	
function Sigeup() {
	$('#user_info').show();
}
function Close(){
   $('#user_info').hide();
}
function WeixinJSHideAllNonBaseMenuItem(){
	if (typeof wx != "undefined"){
		wx.ready(function () {
			wx.hideAllNonBaseMenuItem();
		});
	}
}
</script>

</html>