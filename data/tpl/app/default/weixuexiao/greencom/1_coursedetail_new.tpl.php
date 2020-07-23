<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<title><?php  echo $school['title'];?></title>
<link rel="stylesheet" href="<?php echo MODULE_URL;?>public/mobile/css/newCourseDetail.css?v=<?php  echo date('Ymd',TIMESTAMP)?>">
<?php  echo register_jssdks();?>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.10.1.min.js?v=4.9"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/jquery.reveal.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo OSSURL;?>public/mobile/css/common.css" />
<?php  include $this->template('port');?>
<style>
#scrollDiv{top:10px; width: 60%; height: 30px; border-radius: 30px; line-height: 30px;z-index:3; overflow: hidden; margin-left: 19px; margin-top: 19px; position: fixed; color: #fff; background-color: rgba(68, 68, 68, 0.63); }
#scrollDiv li{height:30px; cursor:pointer;list-style:none}
.goum_img{width:30px;height:30px;border-radius:30px;float: left;}
.popUpBox {position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;animation-name: popFadeIn;-webkit-animation-name: popFadeIn;-ms-animation-name: popFadeIn;-moz-animation-name: popFadeIn;-o-animation-name: popFadeIn;-webkit-animation-duration: 600ms;animation-duration: 600ms;-webkit-animation-fill-mode: both;z-index: 100;}
.popUpBoxOut {animation-name: popFadeOut;-webkit-animation-name: popFadeOut;-ms-animation-name: popFadeOut;-moz-animation-name: popFadeOut;-o-animation-name: popFadeOut;-webkit-animation-duration: 600ms;animation-duration: 600ms;-webkit-animation-fill-mode: both;}
.trackMatte {position: absolute;width: 100%;height: 100vh;top: 0;left: 0;right: 0;bottom: 0;background-color: black;opacity: .5;}
.popContentBox {position: absolute;width: 80%;margin-left: 10%;max-height: 80%;top: 50%;transform: translateY(-50%);-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);z-index: 101;background-color: white;border-radius: 10px;overflow-y: scroll;overflow-x: hidden;}
.poptitle {width: 100%;font-size: 16px;color: #333333;text-align: center;padding: 5px 0;}
.sectionContBox {margin: 10px;}
.btnBox {
display: -webkit-box; /* 老版本语法: Safari,  iOS, Android browser, older WebKit browsers.  */
display: -moz-box; /* 老版本语法: Firefox (buggy) */
display: -ms-flexbox; /* 混合版本语法: IE 10 */
display: -webkit-flex; /* 新版本语法： Chrome 21+ */
display: flex; /* 新版本语法： Opera 12.1, Firefox 22+ */
margin: 20px 0;
}
.btnPass, .btnCancel {width: 100px;height: 31px;font-size: 14px;color: white;text-align: center;line-height: 31px; 	    border-radius: 20px;}
.btnCancel {background: #ff9f22;margin-left: auto;margin-right: 10px;}
.btnPass { background: #06c1ae;margin-left: 12px; }
.user_name {text-align: left;color: #666;font-size: 14px;width: 100%;}
.btn {height: 44px;display: block;background-color: #7bb52d;font: 20px "黑体";text-align: center;color: #fff;cursor: pointer;}
.user_name > input {display: block;width: 100%;border-radius: 3px;height: 34px;padding: 0 10px;margin-bottom: 10px;border: 1px solid #e4dede;box-sizing: border-box;}
.user_name > select {display: block;width: 100%;height: 34px;border-radius: 3px;padding: 0 10px;margin-bottom: 10px;border: 1px solid #ccc;-webkit-box-sizing: border-box;box-sizing: border-box;text-align: left;color: #666;font-size: 14px;}
.close_pupop_c {width: 200px; margin: 0 auto;}
.close_pupop_button {width: 90px;height: 30px;border-radius: 5px;line-height: 30px;font-size: 16px;text-align: center;} 	.close_pupop_button_1 {background: #e74580;color: #fff;}
.close_pupop_button_2 {background: #56c454;color: #fff;margin-left: 20px;}
.user_name > input {display: block;width: 100%;border-radius: 3px;height: 34px;padding: 0 10px;margin-bottom: 10px;border: 1px solid #e4dede;box-sizing: border-box;}
.user_name > select {display: block;width: 100%;height: 34px;border-radius: 3px;padding: 0 10px;margin-bottom: 10px;border: 1px solid #ccc;-webkit-box-sizing: border-box;box-sizing: border-box;text-align: left;color: #666;font-size: 14px;}
.weui_switch {font-size: 14px; -webkit-appearance: none;-moz-appearance: none;appearance: none;position: relative;width: 48px !important; height: 28px;border: 1px solid #DFDFDF;outline: 0;border-radius: 16px;box-sizing: border-box;background: #DFDFDF;vertical-align: middle;}
.weui_switch:before {content: " ";position: absolute;top: 0;left: 0;width: 46px;height: 26px;border-radius: 15px;background-color: #FDFDFD;-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.weui_switch:after {content: " ";position: absolute;top: 0;left: 0;width: 26px;height: 26px;border-radius: 15px;background-color: #FFFFFF;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.weui_switch:checked {border-color: #06c1ae;background-color: #06c1ae;}
.weui_switch:checked:before {-webkit-transform: scale(0);transform: scale(0);}
.weui_switch:checked:after {-webkit-transform: translateX(20px);transform: translateX(20px);}
/*顶部弹出css*/
.reveal-modal-bg {position: fixed;height: 100%;width: 100%;background: #000;background: rgba(0,0,0,.8);z-index: 100;display: none;top: 0;left: 0; }
.reveal-modal {visibility: hidden;top: 100px; left: 2%;right:2%;background: #fff ;position: absolute;z-index: 101;    padding: 25px 18px 38px;-moz-border-radius: 5px;-webkit-border-radius: 5px;order-radius: 5px; 	-moz-box-shadow: 0 0 10px rgba(0,0,0,.4);-webkit-box-shadow: 0 0 10px rgba(0,0,0,.4);-box-shadow: 0 0 10px rgba(0,0,0,.4);}
.reveal-modal.small{ width: 200px; margin-left: -140px;}
.reveal-modal.medium{ width: 400px; margin-left: -240px;}
.reveal-modal.large{ width: 600px; margin-left: -340px;}
.reveal-modal.xlarge{ width: 800px; margin-left: -440px;}
.reveal-modal .close-reveal-modal {font-size: 22px;line-height: .5;position: absolute;top: 8px;right: 11px;color: #aaa;text-shadow: 0 -1px 1px rbga(0,0,0,.6);font-weight: bold;cursor: pointer;}
/*身份选择css*/
.single {text-align: center;z-index: 30;font-size: 20px;color: #fe6700;position: absolute;left: 6%;right: 6%;top: 5%;padding: 0 20px;background-color: #fff;padding-bottom: 33px;padding-top: 10px;}
.single ul {width: 100%;height: auto;overflow: auto;}
.single ul li {height: 50px;line-height: 50px;border-bottom: 1px solid #e9e9e9;padding: 0 10px;}
.single ul li span.le {height: 50px;line-height: 50px;float: left;font-size: 16px;}
.single ul li span.ri {float: right;height: 50px;line-height: 50px;font-size: 16px;}
/*头部css*/ 	.top_head_blank {clear: both;height: 50px;}
.label-danger{display: inline-block;padding: .2em .6em .3em;font-size: 75%;font-weight: bold;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: .25em;}
.form-order>.form-line {margin-bottom: 0.5rem;}
.overflow-text{ display: block; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; opacity:0; clear: both; padding:0 10px; border-radius: 10px; box-sizing: border-box; max-width: 100%; color:#fff; animation:colorchange 3s infinite alternate; -webkit-animation:colorchange 3s infinite alternate; }
@keyframes colorchange{ 0%{ color:red; } 50%{ color:green; } 100%{ color:#6993f9; } }
.font_icon{width: 15px;margin-top: 2px;margin-left: 0px;margin-right: 1px;border-radius: 50%;}
</style>
</head>
<body>
	<script>
		window.onpageshow = function(event) {
		    if (event.persisted) {
		        window.location.reload()
		    }
		};
	</script>
	<div class="main">
		<div>
			<div class="slider" style="height: 20.6rem;">
				<img data-src="<?php  echo tomedia($item['bigimg'])?>" src="<?php  if($item['bigimg']) { ?><?php  echo tomedia($item['bigimg'])?><?php  } else { ?><?php  echo tomedia($school['thumb'])?><?php  } ?>">
			</div>
			<?php  if($item['is_dm'] == 1) { ?>
			<div id="scrollDiv"><!--弹幕盒子-->
				<ul>
					<?php  if(is_array($dm)) { foreach($dm as $row) { ?>
					<li><img class="goum_img" src="<?php  echo $row['icon'];?>"/><?php  echo $row['text'];?></li>
					<?php  } } ?>
				</ul>
			</div>
			<?php  } ?>
			<ol class="summary">
				<li>
					<h2 class="summary-name"><?php  echo $item['name'];?><span>(共<?php  echo $item['AllNum'];?>次课)</span></h2>
				</li>
				<li>
					<div class="summary-price">
						<?php  if(!empty($item['RePrice'])) { ?>
						￥&nbsp;<span>首次购买</span><em><span><?php  echo $item['cose'];?></span></em>&nbsp;<span>包含<?php  echo $item['FirstNum'];?></span>课时</br>
						￥&nbsp;<span>续购课程</span><em><span><?php  echo $item['RePrice'];?>/</span>课</em>&nbsp;<span>最低<?php  echo $item['ReNum'];?></span>课时起续
						<?php  } else { ?>
						￥&nbsp;<span>课程总价：</span><em><span><?php  echo $item['cose'];?></span></em>
						<?php  } ?>
					</div>
				</li>
				<li>
					<div class="summary-numbers">
						<div class="icon-people"><?php  echo $item['minge'];?>人班<span>（已报<?php  echo $item['yb'];?>人）</span>
					</div>
				</li>
				<li>
					<div class="icon-clock">上课时间：</br><span style="margin-left: 1.8rem;"><?php  echo date("Y年m月d日",$item['start'])?>至<?php  echo date("Y年m月d日",$item['end'])?></span></div>
				</li>
				<li>
					<div class="icon-location-o">地址：<span style="margin-left: 1.2rem;"><?php  echo $school['address'];?><?php  echo $item['address'];?></span></div>
				</li>
				</div>
			</ol>
		</div>
		<div class="teachers"><strong><?php  echo $language['kcinfo_scls'];?></strong>
			<ul>
				<?php  if(is_array($tid_array)) { foreach($tid_array as $row) { ?>
				<li>
					<img src="<?php  if(!empty($row['thumb'])) { ?><?php  echo tomedia($row['thumb'])?><?php  } else { ?><?php  echo tomedia($school['tpic'])?><?php  } ?>">
					<strong><?php  echo $row['tname'];?></strong>
					<a href="<?php  echo $this->createMobileUrl('tcinfo', array('schoolid' => $schoolid, 'tid' => $row['tid']), true)?>">老师详情</a>
				</li>
				<?php  } } ?>
			</ul>
		</div>
		<div class="detail">
			<strong><?php  echo $language['kcinfo_kcjs'];?></strong>
			<div class="detail-detail">
				<?php  echo htmlspecialchars_decode($item['dagang'])?>
			</div>
		</div>
		<?php  if($item['OldOrNew'] == 0 ) { ?>
		<div class="arrange"><strong>上课安排</strong>
			<div class="arrange-detail">
				<p></p>
				<ol class="collapsed">
					<?php  if(is_array($list)) { foreach($list as $rowbiao) { ?>
					<li><em>第<?php  echo $rowbiao['nub'];?>节</em>
						<p><?php  echo date("m月d日",$rowbiao['date'])?>&nbsp;周<?php  echo $rowbiao['week'];?>&nbsp;<?php  echo $category[$rowbiao['sd_id']]['sname'];?></p>
					</li>
					<?php  } } ?>
				</ol><em id="showall" style="color:#06c1ae !important">查看全部安排</em>
			</div>
		</div>
		<?php  } ?>
		<div class="org"><strong><?php  echo $language['kcinfo_xxxx'];?></strong>
			<div class="org-detail">
				<img src="<?php  echo tomedia($school['logo'])?>">
				<h3><?php  echo $school['title'];?></h3>
				<p><?php  echo htmlspecialchars_decode($school['content'])?></p>
				<a href="<?php  echo $this->createMobileUrl('jianjie', array('schoolid' => $schoolid), true)?>"></a>
			</div>
		</div>
		<div class="relateds" style="margin-bottom: 5rem;"><strong><?php  echo $language['kcinfo_xxqtkc'];?></strong>
			<ol>
				<?php  if(is_array($others)) { foreach($others as $rowO) { ?>
				<li>
					<img src="<?php  if(!empty($rowO['thumb'])) { ?><?php  echo tomedia($rowO['thumb'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>"><strong><?php  echo $rowO['name'];?></strong>
					<div><?php  echo $rowO['minge'];?>人班</div>
					<?php  if($rowO['OldOrNew'] == 1) { ?>
					<em class="icon icon-rmb"><?php  echo $rowO['cose'];?>/首购</em>
					<?php  } else { ?>
					<em class="icon icon-rmb"><?php  echo $rowO['cose'];?></em>
					<?php  } ?>
					<a href="<?php  echo $this->createMobileUrl('kcinfo', array('id' => $rowO['id'],'schoolid' =>$schoolid), true)?>">查看详情</a>
				</li>
				<?php  } } ?>
			</ol>
		</div>
		<table class="buy" cellspacing="0">
			<tbody>
				<tr>
					<td class="buy-kefu action-makeorder"><i class="icon icon-kefu">预约咨询</i>
					</td>
					<td class="buy-tel"><a class="icon icon-tel-o" style="word-wrap:break-word;line-height: 3.2rem;" href="tel:<?php  echo $school['tel'];?>">电话咨询</a>
					</td>
					<?php  if($item['end'] <TIMESTAMP) { ?>
					<td class="buy-do" style="background: gray"><span style="background-color: gray;"class="label label-danger">已结课</span>
					</td>
				 	<?php  } else { ?>
				 	<td class="buy-do">
					 	<?php  if(!empty($myAllStudent)) { ?>
						 <a  data-reveal-id="selectList"  >立即报名</a>
				 		<?php  } else { ?>
				 		<a  onclick="bangding()"  >绑定学生</a>
				 		<?php  } ?>
					</td>
				 	<?php  } ?>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="single reveal-modal"  id="selectList" style="z-index:101;border-radius: 5%;">
		<ul>
			<span style="color:#444;">选择身份</span>
			<?php  if(is_array($myAllStudent)) { foreach($myAllStudent as $key => $row) { ?>
			<a><li onclick="show_checkSigeup(<?php  echo $row['id'];?>,<?php  echo $row['sid'];?>,'<?php  echo $row['bjname'];?>','<?php  echo $row['s_name'];?>',<?php  echo $row['points'];?>);"><span class="le"><?php  echo $row['bjname'];?></span><span class="ri"><?php  echo $row['s_name'];?></span></li></a>
			<?php  } } ?>
		</ul>
	</div>
	<!--轮转图片-->
	<div class="toast">
		<div class="toast-content black">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="64" height="64" fill="white">
				<circle cx="16" cy="3" r="0">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(45 16 16)" cx="16" cy="3" r="0">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.125s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(90 16 16)" cx="16" cy="3" r="0.353429">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.25s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(135 16 16)" cx="16" cy="3" r="1.40146">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.375s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(180 16 16)" cx="16" cy="3" r="2.99992">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.5s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(225 16 16)" cx="16" cy="3" r="2.37809">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.625s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(270 16 16)" cx="16" cy="3" r="1.07234">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.75s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(315 16 16)" cx="16" cy="3" r="0">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.875s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(180 16 16)" cx="16" cy="3" r="2.99992">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.5s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
			</svg>
		</div>
	</div>
	<!--未支付订单-->
	<div class="component-panel" id="HasOrder" style="display:none;z-index:103">
		<div class="component-dialog dialog-order">
			<div class="component-dialog-title" style="font-size:20px">当前学生存在未支付订单,是否前往支付？</div>
			<div class="component-dialog-body">
				<form class="form-order" novalidate="novalidate">
					<input type="hidden" name="HasOrderId" id="HasOrderId" value="" />
					<input type="hidden" name="TempStuId"  id="TempStuId" value="" />
					<div class="component-dialog-footer">
						<a type="button" class="btn-default btn" style=" display: inline-block;margin-left: 4%; width:42%;color: #fff;background-color: #f1ad31;border-color: #f1ad31;height:30px;font-size:16px;line-height:10px;padding-left: 2px;" onclick="closed_HasOrder()" >取消并删除</a>
						<button type="button" class="btn-primary btn"  style="display: inline-block;width:40%;margin-left: 10%; background-color: #06c1ae;border-color: #06c1ae;height:30px;font-size:16px;line-height:10px;padding-left: 6px" data-opttype="yes" onclick="GoTo_HasOrder()">前往支付</button>
					</div>
				</form>
			</div>
			<div class="component-dialog-footer"></div>
		</div>
	</div>
	<!--积分抵用-->
	<div class="component-panel" id="syjf" style="display:block;z-index:103">
		<div class="component-dialog dialog-order">
			<div class="component-dialog-title">课程报名</div>
			<div class="component-dialog-body">
				<form class="form-order" novalidate="novalidate">
					<div class="form-line">
						<div class="input-wrapper" style="border:none;">
							<span>报名学生:</span>
							<span id="StuName">默认</span>
						</div>
					</div>
					<div class="form-line">
						<div class="input-wrapper" style="border:none;">
							<span>拥有积分:</span>
							<span id="StuPoint">默认</span>
						</div>
					</div>
					<div class="form-line" >
						<div class="input-wrapper" style="border:none;">
							<span>抵用比例:</span>
							<?php  if($item['Point2Cost'] !=0) { ?>
							<span><span style="font-weight:bold;color:#ff0200"><?php  echo $item['Point2Cost'];?></span>积分/1元</span>
							<?php  } else { ?>
							<span id="StuPoint">不可抵用</span>
							<?php  } ?>
						</div>
					</div>
					<div class="form-line" >
						<div class="input-wrapper" style="border:none;">
						   	<span>是否抵用</span>
        					<input id="is_p2c" class="weui_switch" type="checkbox" value="0"/>
        					<input id="is_p2c_value" type="hidden" value="0">
						</div>
					</div>

					<div class="form-line is_show" style="display: none">
						<div class="input-wrapper" style="border:none;">
							<span>最低抵用:</span>
							<?php  if($item['MinPoint'] !=0) { ?>
							<span><span style="font-weight:bold;color:#ff0200"><?php  echo $item['MinPoint'];?></span>积分</span>
							<?php  } else { ?>
							<span>无限制</span>
							<?php  } ?>
						</div>
					</div>
					<div class="form-line is_show" style="display: none">
						<div class="input-wrapper" style="border:none;">
							<span>最高抵用:</span>
							<?php  if($item['MaxPoint'] !=0) { ?>
							<span><span style="font-weight:bold;color:#ff0200"><?php  echo $item['MaxPoint'];?></span>积分</span>
							<?php  } else { ?>
							<span>无限制</span>
							<?php  } ?>
						</div>
					</div>
					<div class="form-line is_show" style="display: none">
						<div class="input-wrapper" style="border:none;">
							<span>抵用积分:</span>
							<input type="number" placeholder="请输入抵用积分" id="PointNum" name="PointNum"  required="">
						</div>
					</div>
					<div class="form-line">
						<div class="input-wrapper" style="border:none;"></div>
					</div>
					<input type="hidden" name="sid" id="jfdy_sid" value="0">
					<input type="hidden" name="id" id="jfdy_id" value="0">
					<input type="hidden" name="spoint" id="jfdy_spoint" value="0">
					<div class="component-dialog-footer">
						<a type="button" class="btn-default btn" style=" display: inline-block;margin-left: 4%; width:30%;color: #fff;background-color: #f1ad31;border-color: #f1ad31;" onclick="closed_jf()" >取消</a>
						<button type="button" class="btn-primary btn"  style="display: inline-block;width:30%;margin-left: 18%; background-color: #06c1ae;border-color: #06c1ae;" data-opttype="yes" onclick="jfdy_ajax()">确定</button>
					</div>
				</form>
			</div>
			<div class="component-dialog-footer"></div>
		</div>
	</div>
	<!--预约试听-->
	<div class="component-panel" id="yyst" style="display:none;z-index: 999;">
		<div class="mask"></div>
		<div class="component-dialog dialog-order">
			<div class="component-dialog-title">预约试听</div>
			<div class="component-dialog-body">
				<form class="form-order">
					<div class="form-line">
						<div class="input-wrapper">
							<input type="text" placeholder="学生姓名" id="order_name" name="order_name" >
						</div>
					</div>
					<div class="form-line">
						<div class="input-wrapper">
							<input type="tel" placeholder="手机号码" id="order_mobile" name="order_mobile">
						</div>
					</div>
					<div class="form-line">
						<div class="input-wrapper">
							<textarea  placeholder="留言,50个字以内" id="order_beizhu" name="order_beizhu" ></textarea>
						</div>
					</div>
					<div class="component-dialog-footer">
						<a type="button" class="btn-default btn" style=" display: inline-block;margin-left: 4%; width:40%;color: #fff;background-color: #f1ad31;border-color: #f1ad31;" onclick="closed()" >取消</a>
						<button type="button" class="btn-primary btn"  style=" display: inline-block;
background-color: #06c1ae;border-color: #06c1ae;width:40%;margin-left: 8%; " data-opttype="yes" onclick="yy_order()">确定</button>
					</div>
				</form>
			</div>
			<div class="component-dialog-footer"></div>
		</div>
	</div>
		<!--绑定还是新增-->
	<div class="popUpBox" id="bd_xz" style="display: none;z-index:101;">
		<div class="trackMatte"></div>
		<div class="popContentBox" style="overflow-y: unset;overflow-x: unset;">
			<input type="hidden" id="sid" value="" />
			<input type="hidden" id="ertype" value="<?php  if($ertype) { ?>1<?php  } else { ?>2<?php  } ?>" />
			<div class="poptitle" id="sname">绑定现有学生还是新增学生？</div>
			<div class="sectionContBox" id="infobox" >
				<div class="btnBox">
					<div class="btnCancel" style="margin-left:12px;" onclick="BDStu()">绑定</div>
					<div class="btnPass"  style="margin-left:auto;margin-right:10px;" onclick="NewStu()">新增</div>
				</div>
			</div>
		</div>
	</div>
	<!--新增学生-->
	<div class="popUpBox" id="xz_stu" style="display: none;z-index:106" >
		<div class="trackMatte"></div>
		<div class="popContentBox">
			<input type="hidden" id="sid" value="" />
			<input type="hidden" id="ertype" value="<?php  if($ertype) { ?>1<?php  } else { ?>2<?php  } ?>" />
			<div class="poptitle" id="sname">学生信息</div>
			<div class="sectionContBox" id="infobox" >
				<div class="user_name">
					<input type="text" placeholder="学生姓名" id="s_name" value="">
				</div>
				<div class="user_name">
					<select class="feedback_title" id="sex">
						<option value="1">男</option>
						<option value="2">女</option>
					</select>
				</div>
				<div class="user_name">
					<input type="text" placeholder="预留手机号" id="mobile" value="">
				</div>
				<div class="user_name">
					<select style="margin-right:15px;" name="gx" id="gx" class="form-control">
                    	<option value="">请选择关系</option>
						<option value="2">母亲</option>
						<option value="3">父亲</option>
						<option value="4">本人</option>
						<option value="5">家长</option>
                    </select>
				</div>
				<div class="btnBox">
					<div class="btnCancel" style="margin-left:12px;" onclick="BackDown()">取消</div>
					<div class="btnPass" id="tijiao" style="margin-left:auto;margin-right:10px;" onclick="GetNewStu()">提交</div>
				</div>
			</div>
		</div>
	</div>
	<div id="common_progress" class="common_progress_bg">
		<div class="common_progress">
			<div class="common_loading"></div>
			<br><span>正在载入...</span></div>
	</div>
	<input id="userid" name="userid" type="hidden" value="<?php  echo $its['id'];?>">
	<input id="umobile" name="umobile" type="hidden" value="<?php  if(!empty($userinfo)) { ?><?php  echo $userinfo['mobile'];?><?php  } ?>">
	<script>
$("input,textarea,select").blur(function(){
	document.body.scrollTop = document.documentElement.scrollTop = 0;
});
        function autoscroll(obj){
            $(obj).find("ul:first").animate({marginTop:"-30px"},1000,function(){
                $(this).css("marginTop","0px").find("li:first").appendTo(this)
            })
        };
        $(document).ready(function(){
            setInterval('autoscroll("#scrollDiv")',2500)
        });

		function closed_HasOrder(){
			var orderid = $("#HasOrderId").val();
			var TempStuId = $("#TempStuId").val();
			//alert(orderid+"and"+TempStuId);
			ajax_start_loading("提交中...");
			var submitData = {
				schoolid : "<?php  echo $schoolid;?>",
				weid     : "<?php  echo $_W['uniacid'];?>",
				orderid  :orderid,
				tempstuid:TempStuId
			};
			$.post("<?php  echo $this->createMobileUrl('kcajax',array('op'=>'deletetempstu'))?>",submitData,function(data){
				if(data.result){
					ajax_stop_loading();
					jTips(data.msg);
					window.location.reload();
				}else{
					jTips(data.msg);
				}
			},'json');
		}
		function GoTo_HasOrder(){
			var orderid = $("#HasOrderId").val();
			window.location.href = "<?php  echo $this->createMobileUrl('gopay', array('schoolid' => $schoolid,'dos'=>'user'),true)?>" + "&orderid=" + orderid;
		}

		$("#select_nj").change(function() {
			var type = 4;
			var cityId = $("#select_nj option:selected").attr('value');
			changeGrade(cityId,type, function() {});
		});

		function changeGrade(gradeId, type, __result) {
			var schoolid = "<?php  echo $schoolid;?>";
			var classlevel = [];
			//获取班次
			$.post("<?php  echo $this->createMobileUrl('kcajax',array('op'=>'getbjlist'))?>", {'gradeId': gradeId, 'schoolid': schoolid}, function(data) {
				data       = JSON.parse(data);
				classlevel = data.bjlist;
				var html   = '';

				html += '<select id="bj"><option value="">请选择班级</option>';
				if (classlevel != '') {
					for (var i in classlevel) {
						html += '<option value="' + classlevel[i].sid + '">' + classlevel[i].sname + '</option>';
					}
				}
				$('#bj').html(html);
			});
		}
		$("#is_p2c").on("change", function () {
			if($("#is_p2c").prop('checked')){
				$("#is_p2c_value").val(1);
				$(".is_show").show();
			}else{
				$("#is_p2c_value").val(0);
				$(".is_show").hide();
			}
		});
		$(".trackMatte").on("click",function(){
			$("#bd_xz").hide();

		})

		function show_shenfen(){
			$("#selectList").show();
		}
		function bangding(){
			$("#bd_xz").show();
		}
		function NewStu(){
			$("#bd_xz").hide();
			$("#xz_stu").show();
			$("body").css("position","fixed");
			$("body").css("width","100%");
			$("body").css("height","100%");
		}

		function BDStu(){
			window.location.href = "<?php  echo $this->createMobileUrl('bangding', array('schoolid' => $schoolid), true)?>";
		}

		function BackDown(){
			$("#xz_stu").hide();
			$("body").removeAttr("style");
		}
		function GetNewStu(){


			var sname=$("#s_name").val();
			var sex = $("#sex").val();
			var mobile=$("#mobile").val();
			var addr = $("#area_addr").val();
			var nj =<?php  echo $item['xq_id'];?>;
			var bj =<?php  echo $item['bj_id'];?>;
			var pard = $("#gx").val();

			if(sname == null || sname == ''){
				jTips("学生姓名不能为空");
				return;
			}
			if(mobile == null || mobile == ''){
				jTips("手机号码不能为空");
				return;
			}

	if(pard == null || pard == '' || pard==0 ){
				jTips("请选择关系");
				return;
			}
			ajax_start_loading("提交中...");

			var submitData = {
					schoolid : "<?php  echo $schoolid;?>",
					weid     : "<?php  echo $_W['uniacid'];?>",
					openid   : "<?php  echo $openid;?>",
					uid      : "<?php  echo $fan['uid'];?>",
					kcid     : "<?php  echo $id;?>",
					sname 	 : sname,
					sex		 :sex,
					mobile	 :mobile,
					addr 	 :addr,
					nj 		 :nj,
					bj 		 :bj,
					pard	 :pard,
					shareuserid : "<?php  echo $_GPC['shareuserid'];?>"
					};
				$.post("<?php  echo $this->createMobileUrl('kcajax',array('op'=>'newstu'))?>",submitData,function(data){
					// if(data.result){
					// 	ajax_stop_loading();
					// 	jTips(data.msg);
					// 	window.location.href = "<?php  echo $this->createMobileUrl('gopay', array('schoolid' => $schoolid,'dos'=>'user'),true)?>" + "&orderid=" + data.orderid;
					// }else{
					// 	if(data.is_order){
					// 		$("#HasOrderId").val(data.orderId);
					// 		$("#TempStuId").val(data.tempstuid);
					// 		$("#xz_stu").hide();
					// 		ajax_stop_loading();
					// 		$("#HasOrder").show();
					// 	}else{
					// 		jTips(data.msg);
					// 	}
					//
					//
					// }
				},'json');

		}

		var userid =  $("#userid").val();
		function checkSigeup(id,sid){
			// $(".popUpBox").show();
			jTips("正在报名中请稍等！~");
			var satr = "<?php  echo $school['issale'];?>";
			var url  = "<?php  echo $this->createMobileUrl('order', array('schoolid' => $schoolid), true)?>"+"&user="+id;
			if (satr == 3 || satr == 4){
				var url = "<?php  echo $this->createMobileUrl('myclass', array('schoolid' => $schoolid, 'bj_id' => $student['bj_id'], 'xq_id' => $student['xq_id']), true)?>";
			}
	        if (userid == ' ') {
			    jTips("请先绑定您的学生信息！");
			    $(".popUpBox").show();
	            window.location.href = "<?php  echo $this->createMobileUrl('bangding', array('schoolid' => $schoolid), true)?>";
	            return false;
	        } else {
				var submitData = {
					schoolid : "<?php  echo $schoolid;?>",
					weid     : "<?php  echo $_W['uniacid'];?>",
					openid   : "<?php  echo $openid;?>",
					uid      : "<?php  echo $fan['uid'];?>",
					kcid     : "<?php  echo $id;?>",
					sid      : sid,
					user     : id,
					shareuserid : "<?php  echo $_GPC['shareuserid'];?>"
					};
				$.post("<?php  echo $this->createMobileUrl('payajax',array('op'=>'sigeup','shareuserid'=>$_GPC['shareuserid']))?>",submitData,function(data){
					if(data.result){
						jTips(data.msg);
						window.location.href = url;
					}else{
						jTips(data.msg);

					}
				},'json');
	        }
		}

		function Sigeup() {
	        if (userid == '') {
			    jTips('请先绑定您的学生信息！');
	            window.location.href = "<?php  echo $this->createMobileUrl('bangding', array('schoolid' => $schoolid), true)?>";
	            return false;
	        } else {
				$('#user_info').show();
			}
		}
		function jfdy_ajax(){
			var count = $("#PointNum").val();
			var is_point = $("#is_p2c_value").val();
			if (is_point != 0 ){
				if(Number(count)> Number($("#jfdy_spoint").val())){
					jTips("您的积分不足");
					return;
				}
				if (Number(count)<Number(<?php  echo $item['MinPoint'];?>)){
					jTips("抵用积分不得低于最低抵用");
					return;
				}
				<?php  if(!empty($item['MaxPoint'])) { ?>
				if (Number(count)>Number(<?php  echo $item['MaxPoint'];?>)){
					jTips("抵用积分不得高于最高抵用");
					return;
				}
				<?php  } ?>
			}
			var jfdy_sid = $("#jfdy_sid").val();
			var jfdy_id = $("#jfdy_id").val();
			var satr = "<?php  echo $school['issale'];?>";
			var url  = "<?php  echo $this->createMobileUrl('order', array('schoolid' => $schoolid), true)?>"+"&user="+jfdy_id;
			if (satr == 3 || satr == 4){
				url = "<?php  echo $this->createMobileUrl('myclass', array('schoolid' => $schoolid, 'bj_id' => $student['bj_id'], 'xq_id' => $student['xq_id']), true)?>";
			}

				var submitData = {
					schoolid : "<?php  echo $schoolid;?>",
					weid     : "<?php  echo $_W['uniacid'];?>",
					openid   : "<?php  echo $openid;?>",
					uid      : "<?php  echo $fan['uid'];?>",
					kcid     : "<?php  echo $id;?>",
					sid      : jfdy_sid,
					user     : jfdy_id,
					point	 : count,
					is_point : is_point,
					shareuserid : "<?php  echo $_GPC['shareuserid'];?>"
				};
				$.post("<?php  echo $this->createMobileUrl('kcajax',array('op'=>'signup'))?>",submitData,function(data){
					if(data.result){
						jTips(data.msg);
						//console.log(data);
						window.location.href = url;
					}else{
						jTips(data.msg);
					}
				},'json');
		}

		$(".icon-kefu").on("click",function(){
			$("#yyst").show();
			$("body").css("position","fixed");
			$("body").css("width","100%");
			$("body").css("height","100%");
		});
		function show_checkSigeup(id,sid,bj_name,s_name,points){
			<?php  if($school['Is_point']==1) { ?>
			var is_dy = <?php  echo $item['Point2Cost'];?>;
			<?php  } else { ?>
			var is_dy = 0;
			<?php  } ?>
			if(is_dy !=0){
				$("#StuName").html(bj_name+"-"+s_name);
				$("#StuPoint").html(points);
				$("#syjf").show();
				$("#jfdy_sid").val(sid);
				$("#jfdy_id").val(id);
				$("#jfdy_spoint").val(points);
			}else{
				checkSigeup(id,sid);
			}
		}


		function closed(){
			$("#yyst").hide();
			$("body").removeAttr("style");

		};
		function closed_jf(){
			$("#syjf").hide();
			$(".reveal-modal-bg").hide();
			$(".reveal-modal").css("visibility","hidden");
		};
		function yy_order(){
			var telphone = $("#order_mobile").val();
			var name = $("#order_name").val();
			var beizhu = $("#order_beizhu").val();

			$.ajax({
				url: "<?php  echo $this->createMobileUrl('comajax', array('op' => 'yy_order'), true)?>",
				type: "post",
				dataType: "json",
				data: {
					telphone: telphone,
					name:name,
					beizhu:beizhu,
					kcid: <?php  echo $item['id'];?>,
					ordertype:2,//课程预约
					schoolid: <?php  echo $schoolid;?>,
					weid:<?php  echo $weid;?>
				},
				success: function (data) {
					jTips(data.msg);
					if(data.result ==true){
						window.location.reload();
					}
				}
			});
			return;
		}
		var has_show = 0 ;
		$(".arrange-detail>em").on("click", function() {
			$(this).prev().toggleClass("collapsed");
			if(has_show == 0){
				has_show = 1;
				$("#showall").text("收起全部安排");
			}else if(has_show == 1){
				has_show = 0;
				$("#showall").text("查看全部安排");
			}
		});
		var _hmt = _hmt || [];
		        (function() {
		        var hm = document.createElement("script");
		        hm.src = "//hm.baidu.com/hm.js?fdeb7842a129049a70cb46e4e855e2c5";
		        var s = document.getElementsByTagName("script")[0];
		        s.parentNode.insertBefore(hm, s);
		        })();
		wx.ready(function () {
			sharedata = {
				title: "<?php  echo $item['name'];?>开课啦...",
				desc:"<?php  echo $school['info'];?>",
				link: "",
				imgUrl: "<?php  echo tomedia($item['thumb'])?>",
				success: function(){

				},
				cancel: function(){
				}
			};
			wx.onMenuShareAppMessage(sharedata);
			wx.onMenuShareTimeline(sharedata);
		});
	</script>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>