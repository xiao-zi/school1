<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="<?php echo MODULE_URL;?>public/web/css/main.css"/>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/web/js/jquery.magnific-popup.js"></script>
<link rel="stylesheet" href="<?php echo MODULE_URL;?>public/web/css/magnific-popup.css">

<?php  if($operation == 'display') { ?>


<div class="main">
    <style>
	    .mfp-wrap{
		    z-index:10000;
	    }
	     .mfp-bg{
		    z-index:9999;
	    }
        .form-control-excel {
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
    </style>

    <div class="panel panel-info">
        <div class="panel-heading">报名管理</div>
        <div class="panel-body">
            <form action="./index.php" method="get" class="form-horizontal" role="form">
                <input type="hidden" name="c" value="site" />
                <input type="hidden" name="a" value="entry" />
                <input type="hidden" name="m" value="weixuexiao" />
                <input type="hidden" name="do" value="signup" />
				<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
				 <div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">按年级</label>
                    <div class="col-sm-2 col-lg-2">
                        <select style="margin-right:15px;" name="nj_id" class="form-control">
                            <option value="">请选择年级搜索</option>
                            <?php  if(is_array($njlist)) { foreach($njlist as $row) { ?>
                            <option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $_GPC['nj_id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>				 
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">按班级</label>
                    <div class="col-sm-2 col-lg-2">
                        <select style="margin-right:15px;" name="bj_id" class="form-control">
                            <option value="">请选择班级搜索</option>
                            <?php  if(is_array($bjlist)) { foreach($bjlist as $row) { ?>
                            <option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $_GPC['bj_id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">按审核</label>
                    <div class="col-sm-2 col-lg-2">
                        <select style="margin-right:15px;" name="status" class="form-control">
                            <option value="">请审核装搜索</option>
                            <option value="1">审核中</option>
                            <option value="2">已通过</option>
							<option value="3">已拒绝</option>
                        </select>
                    </div>					
                    <div class="col-sm-2 col-lg-2">
                        <button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
                    </div>	
                    <div class="col-sm-2 col-lg-2">
                        <a class="btn btn-secsees qx_1302" style="background-color: #78CD51;color: white;" href="<?php  echo $this->createWebUrl('signup', array( 'op' => 'out_putcode', 'schoolid' => $schoolid))?>"> 导出报名情况</a>
                    </div>				
				</div>	
            </form>
        </div>
    </div>	
	<div class="panel panel-default" >
		<div class="table-responsive panel-body">
			<div id="queue-setting-index-body">
				<div class="viewList" >
				<?php  if(is_array($list)) { foreach($list as $row) { ?>
					<div class="viewBox" style="width:280px;background-color:#F5EFEF;border-top-left-radius: 3%;border-top-right-radius: 3%;border-bottom-left-radius: 3%;border-bottom-right-radius: 3%;position: relative;">
					<a class="btn btn-default btn-sm qx_1303" style="background-color:#F5EFEF;position: relative;top:-15px;right:-255px;width:23px;height:23px;border-radius:50%;" href="<?php  echo $this->createWebUrl('signup', array('id' => $row['id'], 'op' => 'delete', 'schoolid' => $schoolid))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" title="删除"><i class="fa fa-times" style="color: #524d4d;top: -4px;right: 4px;position: relative;"></i></a>
						<div class="content" style="margin-top: -20px;border-bottom:1px solid #c6c6c6;height:auto;">					
								<a class="lightgray" >
									<span><img style="width:30px;height:30px;border-radius:50%;" src="<?php  echo tomedia($row['avatar'])?>"></span>&nbsp;
									<span style="width:36px;text-overflow:hidden;white-space:nowrap;" class="label label-warning"><?php  echo $row['nickname'];?></span>
									<span <?php  if($row['status'] ==1) { ?>class="label label-warning"<?php  } else if($row['status'] ==2) { ?>class="label label-success"<?php  } else if($row['status'] ==3) { ?>class="label label-danger"<?php  } ?>><?php  if($row['status'] ==1) { ?>审核中<?php  } else if($row['status'] ==2) { ?>已通过<?php  } else if($row['status'] ==3) { ?>已拒绝<?php  } ?></span>
									<span <?php  if($row['order'] ==1) { ?>class="label label-warning"<?php  } else if($row['order'] ==2) { ?>class="label label-success"<?php  } else if($row['order'] ==3) { ?>class="label label-danger"<?php  } ?>><?php  if($row['order'] ==1) { ?>未付费<?php  } else if($row['order'] ==2) { ?>已付费<?php  } else if($row['order'] ==3) { ?>已退费<?php  } ?></span>
									<?php  if($row['status'] == 1) { ?>
								    <a class="qx_1304" onclick="return confirm('确认通过申请，确认吗？'); return false;" href="<?php  echo $this->createWebUrl('signup', array('op' => 'pass', 'schoolid' => $schoolid, 'id' => $row['id']))?>">通过</a>
									<a class="qx_1304" onclick="return confirm('确认拒绝申请，确认吗？'); return false;" href="<?php  echo $this->createWebUrl('signup', array('op' => 'defid', 'schoolid' => $schoolid, 'id' => $row['id']))?>">拒绝</a>
									<?php  } ?>
								</a>								
						</div>
						<div class="nameAndTime" width="100%" height="100%" border="1" style="border-bottom:1px solid #c6c6c6;">
							<span class="label label-warning" style="float:left;padding:0 0;">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;生</span>
							<span class="name" style="width:200px;">&nbsp;&nbsp;&nbsp;<?php  echo $row['name'];?></span>
						</div>
						</br>
						<div class="nameAndTime" width="100%" height="100%" border="1" style="border-bottom:1px solid #c6c6c6;">
							<span class="label label-success" style="float:left;padding:0 0;">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别</span>
							<span class="name" style="width:200px;">&nbsp;&nbsp;&nbsp;<?php  if($row['sex'] == 1) { ?>男<?php  } else { ?>女<?php  } ?></span>
						</div>
						</br>
						<div class="nameAndTime" width="100%" height="100%" border="1" style="border-bottom:1px solid #c6c6c6;">
							<span class="label label-info" style="float:left;padding:0 0;">手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机</span>
							<span class="name" style="width:200px;">&nbsp;&nbsp;&nbsp;<?php  echo $row['mobile'];?></span>
						</div>
						<?php  if(!empty($row['birthday'])) { ?>
						</br>
						<div class="nameAndTime" width="100%" height="100%" border="1" style="border-bottom:1px solid #c6c6c6;">
							<span class="label label-info" style="float:left;padding:0 0;">生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日</span>
							<span class="name" style="width:200px;">&nbsp;&nbsp;&nbsp;<?php  echo date('Y年m月d日', $row['birthday'])?></span>
						</div>
						<?php  } ?>
						<?php  if(!empty($row['nj_id'])) { ?>
						</br>
						<div class="nameAndTime" width="100%" height="100%" border="1" style="border-bottom:1px solid #c6c6c6;">
							<span class="label label-info" style="float:left;padding:0 0;">年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;级</span>
							<span class="name" style="width:200px;">&nbsp;&nbsp;&nbsp;<?php  echo $row['njname'];?></span>
						</div>
						<?php  } ?>
						<?php  if(!empty($row['bj_id'])) { ?>
						</br>
						<div class="nameAndTime" width="100%" height="100%" border="1" style="border-bottom:1px solid #c6c6c6;">
							<span class="label label-info" style="float:left;padding:0 0;">班&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;级</span>
							<span class="name" style="width:200px;">&nbsp;&nbsp;&nbsp;<?php  echo $row['bjname'];?></span>
						</div>
						<?php  } ?>
						</br>
						<div class="nameAndTime" width="100%" height="100%" border="1" style="border-bottom:1px solid #c6c6c6;">
							<span class="label label-info" style="float:left;padding:0 0;">申请时间</span>
							<span class="name" style="width:200px;">&nbsp;&nbsp;&nbsp;<?php  echo date('Y-m-d H:m', $row['createtime'])?></span>
						</div>
						<?php  if(!empty($row['passtime'])) { ?>
						</br>
						<div class="nameAndTime" width="100%" height="100%" border="1" style="border-bottom:1px solid #c6c6c6;">
							<span class="label label-info" style="float:left;padding:0 0;">处理时间</span>
							<span class="name" style="width:200px;">&nbsp;&nbsp;&nbsp;<?php  echo date('Y-m-d H:m', $row['passtime'])?></span>
						</div>
						<?php  } ?>
						<?php  if(!empty($row['cost'])) { ?>
						</br>
						<div class="nameAndTime" width="100%" height="100%" border="1" style="border-bottom:1px solid #c6c6c6;">
							<span class="label label-info" style="float:left;padding:0 0;">报名费用</span>
							<span class="name" style="width:200px;">&nbsp;&nbsp;&nbsp;￥<?php  echo $row['cost'];?></span>
						</div>
						<?php  } ?>
						<?php  if(!empty($row['pard'])) { ?>
						</br>
						<div class="nameAndTime" width="100%" height="100%" border="1" style="border-bottom:1px solid #c6c6c6;">
							<span class="label label-info" style="float:left;padding:0 0;">关&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;系</span>
							<span class="name" style="width:200px;">&nbsp;&nbsp;&nbsp;<?php  if($row['pard'] == 2) { ?>母亲<?php  } else if($row['pard'] == 3) { ?>父亲<?php  } else if($row['pard'] == 4) { ?>本人<?php  } else if($row['pard'] == 5) { ?>家长<?php  } ?></span>
						</div>
						<?php  } ?>
						<?php  if($logo['is_picarr'] == 1 || $logo['is_textarr'] == 1) { ?>
						</br>
						<div class="r" style="position:absolute;right:4px;bottom:4px;">
							<a onclick="bu(<?php  echo $row['id'];?>);" ><span  class="btn btn-sm btn-info">查看详情</span></a>
						</div>
						<?php  } ?>					
					</div>
				<?php  } } ?>
				</div>
			</div>	
		</div>
	</div>
	<?php  echo $pager;?>
</div>		
<?php  } ?>

<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:60px;z-index:99;">
	<div class="modal-dialog modal-lg" role="document" style="z-index:100;">		
		<div class="modal-content">	
			<form class="table-responsive form-inline bv-form" method="post" action="" id="form-credit" novalidate="novalidate">				
				<div class="modal-header" style="color: black;">					
					<h4 class="modal-title" id="ModalTitle">附属详情</h4>	
				</div>
				<div class="modal-body" style="overflow-y: scroll;">
					<table class="table table-hover table-bordered">						
						<tbody>
							<tr>	
								
								<th width="150">附属图片</th>							
								<td>								
									<div class="photoList" style="width:100%;margin:10px 0;">
							<div id="addPhotoBox1" name="addPhotoBox">
							    <div class="gallery" data-toggle="lightbox-gallery">
									<div class="photoBox" id="photo1" style="width:200px;height:200px;display: none;">								
										<div class="img" style="width:200px;height:200px;">
												<div class="gallery-image">
													<a id="a1" href=" " title="<?php  echo $picarrset['picarr1_name'];?>" class="gallery-link">
														<img  id="img1" src=" " alt="image" style="width:100%;">
													</a>
												</div>
										</div>	
									</div>
									<div class="photoBox" id="photo2" style="width:200px;height:200px;display: none;">								
										<div class="img" style="width:200px;height:200px;">
												<div class="gallery-image">
													<a id="a2" href=" " title="<?php  echo $picarrset['picarr2_name'];?>" target="_blank" class="gallery-link">
														<img id="img2" src=" " alt="image" style="width:100%;">
													</a>
												</div>
										</div>	
									</div>
									<div class="photoBox" id="photo3" style="width:200px;height:200px;display: none;">								
										<div class="img" style="width:200px;height:200px;">
												<div class="gallery-image">
													<a id="a3" href=" " title="<?php  echo $picarrset['picarr3_name'];?>" target="_blank" class="gallery-link">
														<img id="img3" src=" " alt="image" style="width:100%;">
													</a>
												</div>
										</div>	
									</div>
									<div class="photoBox" id="photo4" style="width:200px;height:200px;display: none;">								
										<div class="img" style="width:200px;height:200px;">
												<div class="gallery-image">
													<a id="a4" href=" " title="<?php  echo $picarrset['picarr4_name'];?>" target="_blank" class="gallery-link">
														<img id="img4" src=" " alt="image" style="width:100%;">
													</a>
												</div>
										</div>	
									</div>
									<div class="photoBox" id="photo5" style="width:200px;height:200px;display: none;">								
										<div class="img" style="width:200px;height:200px;">
												<div class="gallery-image">
													<a id="a5" href="" title="<?php  echo $picarrset['picarr5_name'];?>" target="_blank" class="gallery-link">
														<img id="img5" src=" " alt="image" style="width:100%;">
													</a>
												</div>
										</div>	
									</div>
				                </div>
				            </div>
						</div>						
								</td>						
							</tr>
							<tr>	
									<th width="150">附属信息</th>					
								<td>
									<table class="table table-hover table-bordered">							
									<tr id="text1" style="display: none;">
										<th width="15%"><?php  echo $textarrset['textarr1_name'];?></th>
										<td id="text-td1"></td>
									</tr>
									<tr id="text2" style="display: none;">
										<th width="15%"><?php  echo $textarrset['textarr2_name'];?></th>
										<td id="text-td2"></td>
									</tr>
									<tr id="text3" style="display: none;">
										<th width="15%"><?php  echo $textarrset['textarr3_name'];?></th>
										<td id="text-td3"></td>
									</tr>
									<tr id="text4" style="display: none;">
										<th width="15%"><?php  echo $textarrset['textarr4_name'];?></th>
										<td id="text-td4"></td>
									</tr>
									<tr id="text5" style="display: none;">
										<th width="15%"><?php  echo $textarrset['textarr5_name'];?></th>
										<td id="text-td5"></td>
									</tr>
									<tr id="text6" style="display: none;">
										<th width="15%"><?php  echo $textarrset['textarr6_name'];?></th>
										<td id="text-td6"></td>
									</tr>
									<tr id="text7" style="display: none;">
										<th width="15%"><?php  echo $textarrset['textarr7_name'];?></th>
										<td id="text-td7"></td>
									</tr>
									<tr id="text8" style="display: none;">
										<th width="15%"><?php  echo $textarrset['textarr8_name'];?></th>
										<td id="text-td8"></td>
									</tr>
									<tr id="text9" style="display: none;">
										<th width="15%"><?php  echo $textarrset['textarr9_name'];?></th>
										<td id="text-td9"></td>
									</tr>
									<tr id="text10" style="display: none;">
										<th width="15%"><?php  echo $textarrset['textarr10_name'];?></th>
										<td id="text-td10"></td>
									</tr>
									</table>
								</td>						
							</tr>
						</tbody>
					</table>				
				</div>				
			</form>			
			<div class="modal-footer">	
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			</div>			
		</div>	
	</div>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>

<script type="text/javascript">
	$(document).ready(function() {
	<?php  if(!(IsHasQx($tid_global,1001302,1,$schoolid))) { ?>
		$(".qx_1302").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001303,1,$schoolid))) { ?>
		$(".qx_1303").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001304,1,$schoolid))) { ?>
		$(".qx_1304").hide();
	<?php  } ?>
	$('.gallery-link').magnificPopup({type:'image',image:{titleSrc:function(item) {
			return item.el.attr('title');
   		}}}); 
		});
		
	function bu(id){
		
		$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'get_signupdetail'))?>", {'schoolid': <?php  echo $schoolid;?>,'id':id}, function(data) {
		data = JSON.parse(data);
		datas = data.data; 

		<?php  if($picarrset['is_picarr1'] == 1) { ?>
 		if(datas.picarr1){
	 		$("#photo1").show();
	 		$("#a1").attr("href",datas.picarr1_url);
	 		$("#img1").attr("src",datas.picarr1_url);
 		}else{
	 		$("#photo1").hide();
 		}
 		<?php  } ?>
 		<?php  if($picarrset['is_picarr2'] == 1) { ?>
 		if(datas.picarr2){
	 		$("#photo2").show();
	 		$("#a2").attr("href",datas.picarr2_url);
	 		$("#img2").attr("src",datas.picarr2_url);
 		}else{
	 		$("#photo2").hide();
 		}
 		<?php  } ?>
 		<?php  if($picarrset['is_picarr3'] == 1) { ?>
 		if(datas.picarr3){
	 		$("#photo3").show();
	 		$("#a3").attr("href",datas.picarr3_url);
	 		$("#img3").attr("src",datas.picarr3_url);
 		}else{
	 		$("#photo3").hide();
 		}
 		<?php  } ?>
 		<?php  if($picarrset['is_picarr4'] == 1) { ?>
 		if(datas.picarr4){
	 		$("#photo4").show();
	 		$("#a4").attr("href",datas.picarr4_url);
	 		$("#img4").attr("src",datas.picarr4_url);
 		}else{
	 		$("#photo4").hide();
 		}
 		<?php  } ?>
 		<?php  if($picarrset['is_picarr5'] == 1) { ?>
 		if(datas.picarr5){
	 		$("#photo5").show();
	 		$("#a5").attr("href",datas.picarr5_url);
	 		$("#img5").attr("src",datas.picarr5_url);
 		}else{
	 		$("#photo5").hide();
 		}
 		<?php  } ?>

 		<?php  if($textarrset['is_textarr1'] == 1) { ?>
 		if(datas.textarr1){
	 		$("#text1").show();
	 		$("#text-td1").html(datas.textarr1);
	 		
 		}else{
	 		$("#text1").hide();
 		}
 		<?php  } ?>
 		<?php  if($textarrset['is_textarr2'] == 1) { ?>
 		if(datas.textarr2){
	 		$("#text2").show();
	 		$("#text-td2").html(datas.textarr2);
	 		
 		}else{
	 		$("#text2").hide();
 		}
 		<?php  } ?>
 		<?php  if($textarrset['is_textarr3'] == 1) { ?>
 		if(datas.textarr3){
	 		$("#text3").show();
	 		$("#text-td3").html(datas.textarr3);
	 		
 		}else{
	 		$("#text3").hide();
 		}
 		<?php  } ?>
 		<?php  if($textarrset['is_textarr4'] == 1) { ?>
 		if(datas.textarr4){
	 		$("#text4").show();
	 		$("#text-td4").html(datas.textarr4);
	 		
 		}else{
	 		$("#text4").hide();
 		}
 		<?php  } ?>
 		<?php  if($textarrset['is_textarr5'] == 1) { ?>
 		if(datas.textarr5){
	 		$("#text5").show();
	 		$("#text-td5").html(datas.textarr5);
	 		
 		}else{
	 		$("#text5").hide();
 		}
 		<?php  } ?>
 		<?php  if($textarrset['is_textarr6'] == 1) { ?>
 		if(datas.textarr6){
	 		$("#text6").show();
	 		$("#text-td6").html(datas.textarr6);
	 		
 		}else{
	 		$("#text6").hide();
 		}
 		<?php  } ?>
 		<?php  if($textarrset['is_textarr7'] == 1) { ?>
 		if(datas.textarr7){
	 		$("#text7").show();
	 		$("#text-td7").html(datas.textarr7);
	 		
 		}else{
	 		$("#text7").hide();
 		}
 		<?php  } ?>
 		<?php  if($textarrset['is_textarr8'] == 1) { ?>
 		if(datas.textarr8){
	 		$("#text8").show();
	 		$("#text-td8").html(datas.textarr8);
	 		
 		}else{
	 		$("#text8").hide();
 		}
 		<?php  } ?>
 		<?php  if($textarrset['is_textarr9'] == 1) { ?>
 		if(datas.textarr9){
	 		$("#text9").show();
	 		$("#text-td9").html(datas.textarr9);
	 		
 		}else{
	 		$("#text9").hide();
 		}
 		<?php  } ?>
 		<?php  if($textarrset['is_textarr10'] == 1) { ?>
 		if(datas.textarr10){
	 		$("#text10").show();
	 		$("#text-td10").html(datas.textarr10);
	 		
 		}else{
	 		$("#text10").hide();
 		}
 		<?php  } ?>
 		
 		
	});
	<?php  if($logo['is_picarr'] == 1 || $logo['is_textarr'] == 1) { ?>
		$('#Modal1').modal('toggle'); 
		<?php  } ?>
	}
</script>