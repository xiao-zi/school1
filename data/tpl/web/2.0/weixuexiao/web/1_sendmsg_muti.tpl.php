<?php defined('IN_IA') or exit('Access Denied');?>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<div class="container-fluid">
	<div class="jumbotron clearfix alert alert-info">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-lg-2">	<i class="fa fa-5x fa-info-circle"></i>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
					<h2></h2>
				<p id="title" style="font-size: 22px;"></p>
				<p id="zhuangtai" style="font-size: 22px;">发送进度:<span id="jindu" style="width:35px;text-align:right;display:inline-block">0</span>%<span style="white-space: pre;">  </span><img src="<?php echo MODULE_URL;?>public/web/css/loading_test.gif" style="width:20px;line-height:20px;padding-bottom: 2px;"></p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	
	$(document).ready(function() {
		
		$(".nav ").hide();
		var url = "<?php  echo $this->createWebUrl('indexajax',array('op'=>'mnotpro'))?>";
		<?php  if($_GPC['type'] ==1) { ?>
			$("#title").html("开始群发班级通知,请勿执行任何操作！");
			

				<?php  if($mutiBj_id == 1) { ?>
					var data = {
						weid:"<?php  echo $weid;?>",
						openid : "<?php  echo $openid;?>",
						schoolid : "<?php  echo $schoolid;?>",
						noticeid : "<?php  echo $notice_id;?>",
						tname:"<?php  echo $tname;?>",
						bj_id:<?php  echo $bj_id;?>,
						page : 1,
						from:"<?php  echo $from;?>",
						muti:1,
						list_muti:0,
						total_all:0, //已发送
						total : "<?php  echo $total;?>",
						type:1
					};
				<?php  } else { ?>
					var data = {
						weid:"<?php  echo $weid;?>",
						openid : "<?php  echo $openid;?>",
						schoolid : "<?php  echo $schoolid;?>",
						noticeid : "<?php  echo $notice_id;?>",
						tname:"<?php  echo $tname;?>",
						bj_id:"<?php  echo $bj_id;?>",
						page : 1,
						total : "<?php  echo $total;?>",
						type:1
					};
				<?php  } ?>
			
		<?php  } else if($_GPC['type'] ==2) { ?>
			$("#title").html("开始群发校园群发,请勿执行任何操作！");
			var data = {
						weid:"<?php  echo $weid;?>",
						openid : "<?php  echo $openid;?>",
						schoolid : "<?php  echo $schoolid;?>",
						noticeid : "<?php  echo $notice_id;?>",
						tname:"<?php  echo $tname;?>",
						groupid:"<?php  echo $groupid;?>",
						page : 1,
						total : "<?php  echo $total;?>",
						type:2
					};
		<?php  } else if($_GPC['type'] ==3) { ?>
		

				$("#title").html("开始群发作业,请勿执行任何操作！");
				
				var data = {
					weid:"<?php  echo $weid;?>",
					openid : "<?php  echo $openid;?>",
					schoolid : "<?php  echo $schoolid;?>",
					noticeid : "<?php  echo $notice_id;?>",
					tname:"<?php  echo $tname;?>",
					bj_id:"<?php  echo $bj_id;?>",
					page : 1,
					total : "<?php  echo $total;?>",
					type:3
				};
			
		<?php  } ?>
		//console.log(data);
		//return;
		$.ajax({
			url: url,
			data: data,
			type: "POST",
			dataType: "json",
			success: function (result) {
				console.log(result);
                console.log("yes1");
				//提交后 隐藏加载层
				if (result.status == 1) {
                    console.log("yes11111111111111");
					var page = result.page;
					var total = result.total;
					var noticeid = result.noticeid;
					var type= result.type;
					var backid = result.backid;
					var muti= result.muti;
					$("#jindu").html(result.pro);
					 console.log(result);
					if(muti == 1){
						upload_pro_muti(page,noticeid,total,type,backid,result.total_all,result.list_muti,result.from, this);
                        console.log("yes1");
					}else{
						upload_pro(page,noticeid,total,type,backid, this);
						console.log("yes2");

					}
				} else if (result.status == 2) {
					alert("发送完成！");
					location.href = "<?php  echo $this->createWebUrl('notice', array('schoolid' => $schoolid,'op'=>display5))?>"+"&notice_id="+noticeid;	
				}
			},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				console.log(XMLHttpRequest.status);
				console.log(XMLHttpRequest.readyState);
				console.log(textStatus);

				alert(url);
			},
		});
	});

	function upload_pro(page, noticeid,total,type, backid,self) {
	    console.log("yes");

		if(type==1){
			var prodata = {
			weid:"<?php  echo $weid;?>",
			schoolid : "<?php  echo $schoolid;?>",
			tname:"<?php  echo $tname;?>",
			bj_id:backid,
			noticeid:noticeid,
			total:total,
			page:page,
			type:type
		}
		}else if(type== 2){
			var prodata = {
			weid:"<?php  echo $weid;?>",
			schoolid : "<?php  echo $schoolid;?>",
			tname:"<?php  echo $tname;?>",
			groupid:backid,
			noticeid:noticeid,
			total:total,
			page:page,
			type:type
		}
		}else if(type==3){
			var prodata = {
			weid:"<?php  echo $weid;?>",
			schoolid : "<?php  echo $schoolid;?>",
			tname:"<?php  echo $tname;?>",
			bj_id:backid,
			noticeid:noticeid,
			total:total,
			page:page,
			type:type
		}
		}
		$.ajax({
			url: "<?php  echo $this->createWebUrl('indexajax', array('schoolid' => $schoolid,'op' => 'mnotpro'))?>",
			data: prodata,
			type: "POST",
			dataType: "json",
			success: function (result) {
				//提交后 隐藏加载层
				if (result.status == 1) {
					var page = result.page;
					var pro = result.pro;
					var type = result.type;
					 console.log(111111);
					var backid = result.backid;
					$("#jindu").html(result.pro);
					upload_pro(page, noticeid,total, type,backid,this);
				}
				else if (result.status == 2) {
					alert("发送完成！");
					location.href = "<?php  echo $this->createWebUrl('notice', array('schoolid' => $schoolid,'op'=>display5))?>"+"&notice_id="+noticeid;	
					
				}				
			},
			error: function () {
				//提交后 隐藏加载层
				
				alert("非常抱歉，出现了点小问题，可以尝试刷新重试！");
			},
		});
	};



	function upload_pro_muti(page, noticeid,total,type, backid,total_all,list_muti,from,self) {
        console.log("yes");
		var prodata = {
			weid:"<?php  echo $weid;?>",
			schoolid : "<?php  echo $schoolid;?>",
			tname:"<?php  echo $tname;?>",
			bj_id:backid,
			noticeid:noticeid,
			total:total,
			page:page,
			type:type,
			from:from,
			muti:1,
			list_muti:list_muti,
			total_all:total_all
		}
		  
		 
		$.ajax({
			url: "<?php  echo $this->createWebUrl('indexajax', array('schoolid' => $schoolid,'op' => 'mnotpro'))?>",
			data: prodata,
			type: "POST",
			dataType: "json",
			success: function (result) {
				//提交后 隐藏加载层
				if (result.status == 1) {
					var page = result.page;
					var pro = result.pro;
					var type = result.type;
					 console.log(result);
					var backid = result.backid;
					$("#jindu").html(result.pro);
					upload_pro_muti(page,noticeid,total,type,backid,result.total_all,result.list_muti,result.from, this);
				}
				else if (result.status == 2) {
					alert("发送完成！");
					location.href = "<?php  echo $this->createWebUrl('groupactivity', array('schoolid' => $schoolid))?>";	
					
				}				
			},
			error: function () {
				//提交后 隐藏加载层
				
				alert("非常抱歉，出现了点小问题，可以尝试刷新重试！");
			},
		});
	};
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>
