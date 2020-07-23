<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="true" />
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.10.1.min.js"></script>
<?php  echo register_jssdks();?>
<?php  include $this->template('port');?>	
<title><?php  echo $school['title'];?></title>
<meta name="baidu-site-verification" content="Zz7PvagOJN">
<link rel="stylesheet" href="<?php echo MODULE_URL;?>public/mobile/css/newCourseList.css?v=<?php  echo date('Ymd',TIMESTAMP)?>">
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/jquery.reveal.js"></script>
<style>
.header { width: 100%; height: 50px; line-height: 50px; position: fixed; z-index: 1000; top: 0; left: 0; box-shadow: 0 0 2px 0px rgba(0,0,0,0.3),0 0 6px 2px rgba(0,0,0,0.15); } 
.header .l { width: 50px; height: 50px; line-height: 50px; color: white;position: absolute; left: 0; top: 0; } 
.header .m { width: 100%; height: 50px; line-height: 50px; text-align: center; color: white; font-size: 18px; }
.header .r { width: 50px; height: 50px; line-height: 50px; position: absolute; right: 0; top: 0; } 
.mainColor { background:<?php  if(!empty($school['headcolor'])) { ?><?php  echo $school['headcolor'];?><?php  } else { ?>#06c1ae<?php  } ?> !important; } 
.header .l a { font-size: 18px; color: white; display: block; width: 100%; height: 100%; text-align: center; }
.top_head_blank {clear: both;height: 50px;}
.label-danger{display: inline-block;padding: 2px 5px 3px;;font-size: 12px;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: 4.25em;}
.reveal-modal-bg {position: fixed;height: 100%;width: 100%;background: #000;background: rgba(0,0,0,.8);z-index: 100;display: none;top: 0;left: 0; }
.reveal-modal {visibility: hidden;top: 50%; background: #fff ;position: absolute;z-index: 101;    padding: 25px 18px 38px;-moz-border-radius: 5px;-webkit-border-radius: 5px;order-radius: 5px;
-moz-box-shadow: 0 0 10px rgba(0,0,0,.4);-webkit-box-shadow: 0 0 10px rgba(0,0,0,.4);-box-shadow: 0 0 10px rgba(0,0,0,.4);}
.reveal-modal.small{ width: 200px; margin-left: -140px;}
.reveal-modal.medium{ width: 400px; margin-left: -240px;}
.reveal-modal.large{ width: 600px; margin-left: -340px;}
.reveal-modal.xlarge{ width: 800px; margin-left: -440px;}
</style>
</head>
<body>
	<ul class="menu">
	<li id="info-ul" class="menu-info">
	<ul >
		<li ><a href="<?php  echo $this->createMobileUrl('detail', array('schoolid' =>$schoolid), true)?>" style="color: #06c1ae;">主页</a>
		</li>
		<li style="color: #06c1ae;"><a href="javascript:location.reload();" style="color: #06c1ae;">课程</a>
		</li>
		<li style="color: #06c1ae;"><a href="<?php  echo $this->createMobileUrl('teachers', array('schoolid' =>$schoolid), true)?>" style="color: #06c1ae;">老师</a>
		</li>
		<?php  if(is_Tony()) { ?>
		<li id="XQ" style="color: #06c1ae;"><a href="<?php  echo $this->createMobileUrl('wapindex')?>" style="color: #06c1ae;">校区</a>
		<?php  } ?>
		</li>
	</ul><span id="info-o" class="icon icon-info-o">机构信息</span>
</li>
		<!--<li class="menu-info">
			<span class="icon icon-info-o"onclick="javascript:history.go(-1);">返回首页</span>
		</li>-->
		<li><a  data-reveal-id="yyst" class="icon icon-try-o action-makeorder">预约试听</a>
		</li>
		<li><a class="icon icon-tel-o" href="tel:<?php  echo $school['tel'];?>">电话咨询</a>
		</li>
	</ul>
	<div class="main">
		<div class="org-header">
			<div class="org-preface" >
				<img  style="height:auto !important" src="<?php  echo tomedia($school['thumb'])?>">
			</div>
			<div class="org-info">
				<img style="border:none;" src="<?php  echo tomedia($school['logo'])?>"><a ><em><?php  echo $NumOfList;?></em>课程</a><strong><?php  echo $school['title'];?></strong>
			</div>
		</div>
		<script>
			window.onpageshow = function(event) {
			    if (event.persisted) {
			        window.location.reload()
			    }
			};
		</script>
		
		<ul class="course-kinds">
			<li data-kind="-1" onclick="change(this)" class="active">全部课程</li>
			<?php  if(is_array($nj)) { foreach($nj as $row_c) { ?>
			
			<li data-kind="<?php  echo $row_c['sid'];?>" time="" onclick="change(this)" class=""><?php  echo $row_c['sname'];?></li>
			<?php  } } ?>
		</ul>
		<input type="hidden" id="has_over" value="0" >
		<input type="hidden" id="ctype_more" value="-1">
		<ol class="course-list">
			<?php  if(is_array($list)) { foreach($list as $key => $item) { ?>
			<?php  if($item['OldOrNew'] == 1) { ?>
			<li class="kcdetail"  time="<?php  echo $key;?>"  ctype="<?php  echo $Ctype;?>" >
				<img src="<?php  if(!empty($item['thumb'])) { ?><?php  echo tomedia($item['thumb'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>">
				<strong><?php  echo $item['name'];?>
				<?php  if($item['end'] <TIMESTAMP) { ?>
			 		<span style="background-color: gray;"class="label label-danger">已结课</span>
			 	<?php  } ?>
				</strong>
				<p class="course-freq">
					<?php  echo $item['minge'];?>人/班
					<?php  if($item['is_hot'] == 1) { ?>
					<?php  if($item['end'] > TIMESTAMP) { ?>
					<span style="background-color: #10b7a6;"class="label label-danger">精品课</span>
					<?php  } ?>
					<?php  } ?>
				</p> 
				<em>￥<?php  echo $item['cose'];?>/首购</em>
				<?php  if(!empty($item['course_type'])) { ?>
				<?php  if($item['end'] > TIMESTAMP) { ?>
				<span style="background-color: #2f6bb7;float: right;"class="label label-danger"><?php  echo $item['course_type'];?></span>
				<?php  } ?>
				<?php  } ?>
				<a href="<?php  echo $this->createMobileUrl('kcinfo', array('id' => $item['id'],'schoolid' =>$schoolid), true)?>"></a>
			</li>
			<?php  } else if($item['OldOrNew'] == 0) { ?>
			<li class="kcdetail" time="<?php  echo $key;?>" ctype="<?php  echo $Ctype;?>" >
				<img src="<?php  if(!empty($item['thumb'])) { ?><?php  echo tomedia($item['thumb'])?><?php  } else { ?><?php  echo tomedia($school['logo'])?><?php  } ?>">
					<strong><?php  echo $item['name'];?>
					<?php  if($item['end'] <TIMESTAMP) { ?>
				 		<span style="background-color: gray;"class="label label-danger">已结课</span>
				 	<?php  } ?>
					</strong>
				<p class="course-freq">
					<?php  echo $item['minge'];?>人/班
					<?php  if($item['is_hot'] == 1) { ?>
					<?php  if($item['end'] > TIMESTAMP) { ?>
					<span style="background-color: #10b7a6;"class="label label-danger">精品课</span>
					<?php  } ?>
					<?php  } ?>
				</p>
			 	<em>￥<?php  echo $item['cose'];?></em>
				<?php  if($item['end'] > TIMESTAMP) { ?>
				<?php  if(!empty($item['course_type'])) { ?>
				<span style="background-color: #2f6bb7;float: right;"class="label label-danger"><?php  echo $item['course_type'];?></span>
				<?php  } ?>
				<?php  } ?>
				<a href="<?php  echo $this->createMobileUrl('kcinfo', array('id' => $item['id'],'schoolid' =>$schoolid), true)?>"></a>
			</li>
			<?php  } ?>
			<?php  } } ?>
		</ol>
		<script type="text/template" id="courseListTemplate"></script>
	</div>

	<!--轮转图片-->
	<div class="toast" style="display: none;">
		<div class="toast-content black">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="64" height="64" fill="white">
				<circle cx="16" cy="3" r="0">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(45 16 16)" cx="16" cy="3" r="0">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.125s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(90 16 16)" cx="16" cy="3" r="0">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.25s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(135 16 16)" cx="16" cy="3" r="0.224255">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.375s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(180 16 16)" cx="16" cy="3" r="1.13012">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.5s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(225 16 16)" cx="16" cy="3" r="2.72644">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.625s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(270 16 16)" cx="16" cy="3" r="2.54723">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.75s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(315 16 16)" cx="16" cy="3" r="1.39775">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.875s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
				<circle transform="rotate(180 16 16)" cx="16" cy="3" r="1.13012">
					<animate attributeName="r" values="0;3;0;0" dur="1s" repeatCount="indefinite" begin="0.5s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline"></animate>
				</circle>
			</svg>
		</div>
	</div>
	
	
		<div class="mask"></div>
		<div class="component-dialog dialog-order reveal-modal" id="yyst" >
			<div class="component-dialog-title">预约试听</div>
			<div class="component-dialog-body">
				<form class="form-order" novalidate="novalidate">
					<div class="form-line">
						<div class="input-wrapper">
							<input type="text" placeholder="学生姓名" id="order_name" name="order_name" maxlength="10" required="">
						</div>
					</div>
					<div class="form-line">
						<div class="input-wrapper">
							<input type="tel" placeholder="手机号码" id="order_mobile" name="order_mobile" pattern-name="CHINA_MOBILE" required="">
						</div>
					</div>
					<div class="form-line">
						<div class="input-wrapper">
							<textarea  rows="4" placeholder="留言,50个字以内" id="order_beizhu" name="order_beizhu" maxlength="50"></textarea>
						</div>
					</div>
					<input type="hidden" name="object_number" value="751895459">
					<input type="hidden" name="content_type" value="yunying.org_account">
					<div class="component-dialog-footer">
						<a type="button" class="btn-default btn close-reveal-modal " style="margin-left: 4%; width:40%;color: #fff;background-color: #f1ad31;border-color: #f1ad31;"  >取消</a>
						<button type="button" class="btn-primary btn"  style="width:40%;margin-left: 8%; " data-opttype="yes" onclick="yy_order()">确定</button>
					</div>
				</form>
			</div>
			<div class="component-dialog-footer"></div>
		</div>


	
	<script src="<?php echo MODULE_URL;?>public/mobile/js/scroll_course_new.js?v=1717"></script>
	<script>

$("input,textarea,select").blur(function(){
	document.body.scrollTop = document.documentElement.scrollTop = 0;
});
		new Scroll_load({
			"limit": "0",
			"ajax_switch": true,
			"ul_box": ".course-list",
			"ctype_id":"#ctype_more",
			"li_item": ".course-list .kcdetail",
			"ajax_url": "<?php  echo $this->createMobileUrl('kc', array('schoolid' => $schoolid,'op'=>'scroll_more' ), true)?>",
			"page_name": "teacher_notify",
			"after_ajax": function () {
			}
		}).load_init();
		
		$("#info-o").on("click",function(){
			$("#info-ul").toggleClass("active",1);
		})
		
		$(".component-panel").on("click",function(){
			$("#yyst").hide();
		})

		function closed(){
            $("#yyst").trigger('reveal:close');
			//("#yyst").hide();
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
					ordertype:1,//公共预约
					schoolid: <?php  echo $schoolid;?>,
					weid:<?php  echo $weid;?>
				},
				success: function (data) {
					jTips(data.msg);
					// if(data.result == true){
					// 	window.location.reload();
					// }
				}
			});
			return;
		}

		function change(e){
			
			//alert(id);
			$(".toast").show();
			$(".course-list").empty(); 
			$("li[class='active']").removeClass("active");
			$(e).addClass("active");
			$("#has_over").val(0);
			$(window).on("scroll", scroll_fun);
			var id = $(e).attr("data-kind");
			//alert(id);
			//$(".toast").hide();
			$.ajax({
				url: "<?php  echo $this->createMobileUrl('kc', array('op' => 'moreCourse','schoolid' => $schoolid), true)?>",
				type: "post",
				data: {
					Ctypeid: id
				},
				success: function (data) {
					var html = data;
					$(".course-list").html(html);
					$(".toast").hide();
				}
			});
			return;
		}
		
		var _hmt = _hmt || [];
		        (function() {
		        var hm = document.createElement("script");
		       
		        var s = document.getElementsByTagName("script")[0];
		        s.parentNode.insertBefore(hm, s);
		        })();
			
	</script>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>