<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<div class="panel panel-info">
	<div class="panel-body">
		<ul class="nav nav-tabs">
			<?php  if(($tid_global =='founder' || $tid_global == 'owner' || (IsHasQx($tid_global,1003001,1,$schoolid)))) { ?>
			<li <?php  if($_GPC['do']=='printlog') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('printlog', array('op' => 'display', 'schoolid' => $schoolid))?>">打印记录</a></li>
			<?php  } ?>
			<?php  if(($tid_global =='founder' || $tid_global == 'owner' || (IsHasQx($tid_global,1003011,1,$schoolid)))) { ?>
			<li <?php  if($_GPC['do']=='printer' && ($_GPC['op']=='post' || $_GPC['op']=='display')) { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('printer', array('op' => 'display', 'schoolid' => $schoolid))?>">打印机</a></li>
			<?php  } ?>
			<?php  if(($tid_global =='founder' || $tid_global == 'owner' || (IsHasQx($tid_global,1003021,1,$schoolid)))) { ?>
			<li <?php  if($_GPC['op']=='printset') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('printer', array('op' => 'printset', 'schoolid' => $schoolid))?>">打印设置</a></li>
			<?php  } ?>
		</ul>	
	</div>
</div>
<?php  if($operation == 'post') { ?>   
<form class="form-horizontal form" id="form1" action="" method="post" enctype="multipart/form-data">
	<div class="main">
		<div class="panel panel-default">
			<div class="panel-heading">打印规则设置</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span class="require"> </span>是否启用打印机</label>
					<div class="col-sm-9 col-xs-12">
						<label class="radio-inline">
							<input type="radio" value="1" name="status" <?php  if($item['status'] == 1) { ?>checked<?php  } ?>> 启用
						</label>
						<label class="radio-inline">
							<input type="radio" value="0" name="status" <?php  if($item['status'] == 0) { ?>checked<?php  } ?>> 不启用
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span class="require">* </span>打印机名称</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" class="form-control" name="name" value="<?php  echo $item['name'];?>" placeholder="填写打印机名称">
						<div class="help-block">方便区分打印机</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span class="require"> </span>打印机类型</label>
					<div class="col-sm-9 col-xs-12">
						<label class="radio-inline">
							<input type="radio" value="feie" class="printer-type" name="type" <?php  if($item['type'] == 'feie') { ?>checked<?php  } ?>> 飞鹅打印机
							<span class="label label-success">推荐</span>
						</label>
						<label class="radio-inline">
							<input type="radio" value="365" class="printer-type" name="type" <?php  if($item['type'] == '365') { ?>checked<?php  } ?>> 365打印机
						</label>
						<div class="radio radio-inline">
							<input type="radio" value="xixun" class="printer-type" name="type" id="type-xixun" <?php  if($item['type'] == 'xixun') { ?>checked<?php  } ?>>
							<label for="type-xixun">喜讯打印机</label>
						</div>
						<label class="radio-inline">
							<input type="radio" value="feiyin" class="printer-type" name="type" <?php  if($item['type'] == 'feiyin') { ?>checked<?php  } ?>> 飞印打印机(不推荐,后期将停止更新)
						</label>
						<div class="help-block">
							<span class="text-danger">
								<strong>推荐使用飞娥打印机，已经真机测试，其他品牌只是按各打印机设备商接口开发对接未测。</strong>
							</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span class="require">* </span>机器号</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" class="form-control" name="print_no" value="<?php  echo $item['print_no'];?>" placeholder="填写机器号">
						<div class="help-block">打印机底部标签信息中获取</div>
					</div>
				</div>
				<div class="form-group <?php  if($item['type'] == 'xixun') { ?>hide<?php  } ?> key">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">打印机key</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" class="form-control" name="key" value="<?php  echo $item['key'];?>" placeholder="填写打印机key">
						<div class="help-block">
							如果你的打印机是飞鹅打印机, 需要到<a href="http://www.feieyun.com/login.jsp" target="_blank">"飞鹅云官网"</a>注册账号并添加打印机获取
							<br>
							如果你的打印机是易联云打印机, 可在打印机底部标签信息中获取
						</div>
					</div>
				</div>
				<div class="form-group <?php  if($item['type'] != 'feiyin' && $item['type'] != 'AiPrint') { ?>hide<?php  } ?> text-feiyin">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">商户编号</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" class="form-control" name="member_code" value="<?php  echo $item['member_code'];?>" placeholder="填写商户编号">
						<div class="help-block">
							如果你的打印机是飞印打印机, 需要到<a href="http://my.feyin.net" target="_blank">"飞印中心"</a>注册账号并添加打印机获取
						</div>
					</div>
				</div>
				<div class="<?php  if($item['type'] != 'yilianyun') { ?>hide<?php  } ?> text-yilianyun">
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">用户ID</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="userid" value="<?php  echo $item['member_code'];?>" placeholder="填写用户id">
							<div class="help-block">请到<a href="http://yilianyun.10ss.net/" target="_blank">"易联云"</a>管理中心系统集成里默取</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">apikey</label>
						<div class="col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="api_key" value="<?php  echo $item['api_key'];?>" placeholder="apikey">
							<div class="help-block">请到<a href="http://yilianyun.10ss.net/" target="_blank">"易联云"</a>管理中心系统集成里默取</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-9 col-xs-9 col-md-9">
				<input type="hidden" name="token" value="<?php  echo $_W['token'];?>">
				<input name="submit" id="submit" type="submit" value="提交" class="btn btn-primary col-lg-1">
			</div>	
		</div>
	</div>
</form>
<script>
$(function(){
	$('.printer-type').click(function(){
		if($(this).val() == 'yilianyun' || $(this).val() == 'qiyun') {
			$('.key').removeClass('hide');
			$('.text-feiyin').addClass('hide');
			$('.text-yilianyun').removeClass('hide');
			if($(this).val() == 'yilianyun') {
				$('.yilianyun').removeClass('hide');
				$('.qiyun').addClass('hide');
			} else{
				$('.qiyun').removeClass('hide');
				$('.yilianyun').addClass('hide');
			}
		} else if($(this).val() == 'feiyin' || $(this).val() == 'AiPrint') {
			$('.key').removeClass('hide');
			$('.text-yilianyun').addClass('hide');
			$('.text-feiyin').removeClass('hide');
		} else if($(this).val() == 'xixun') {
			$('.key').addClass('hide');
		} else {
			$('.key').removeClass('hide');
			$('.text-feiyin').addClass('hide');
			$('.text-yilianyun').addClass('hide');
		}
	});
});
</script>
<?php  } else if($operation == 'printset') { ?>
<form class="form-horizontal form" id="form1" action="" method="post" enctype="multipart/form-data">
	<div class="main">
		<div class="panel panel-default">
			<div class="panel-heading">打印规则设置</div>
			<div class="panel-body" style="margin-left:50px;">
				<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
				<?php  if($list) { ?>
				<?php  if(is_array($list)) { foreach($list as $row) { ?>
					<div class="form-group" id="order<?php  echo $row['id'];?>">
						<input type="hidden" name="id[]" value="<?php  echo $row['id'];?>" />
						<div class="col-sm-2 col-lg-2">
							<input name="ordertype[]" value="<?php  echo $row['ordertype'];?>" type="hidden">
							<input type="text" name="name" disabled class="form-control" value="<?php  echo $row['typename'];?>" />
							<?php  if($row['ordertype'] == 4) { ?><div class="help-block">订单类型</div><?php  } ?>
						</div>
						<div class="col-sm-1 col-lg-1">
							<input type="checkbox" value="<?php  echo $row['status'];?>" name="status" data-id="<?php  echo $row['id'];?>" <?php  if($row['status'] == 1) { ?>checked<?php  } ?>>
						</div>
						<div class="col-sm-1 col-lg-1">
							<input type="text" name="print_nums[]" placeholder="打印联数" class="form-control" value="<?php  echo $row['print_nums'];?>" />
							<?php  if($row['ordertype'] == 4) { ?><div class="help-block">打印联数:默认1联</div><?php  } ?>
						</div>
						<div class="col-sm-1 col-lg-1">
							<input type="text" name="print_header[]" placeholder="头部文字" class="form-control" value="<?php  echo $row['print_header'];?>" />
							<?php  if($row['ordertype'] == 4) { ?><div class="help-block">自定义头部建议20字以内</div><?php  } ?>
						</div>
						<div class="col-sm-1 col-lg-1">
							<input type="text" name="print_footer[]" placeholder="底部文字" class="form-control" value="<?php  echo $row['print_footer'];?>" />
							<?php  if($row['ordertype'] == 4) { ?><div class="help-block">自定义底部建议20字以内</div><?php  } ?>
						</div>
						<div class="col-sm-1 col-lg-1">
							<input type="text" name="qrcode_link[]" placeholder="二维码链接" class="form-control" value="<?php  echo $row['qrcode_link'];?>" />
							<?php  if($row['ordertype'] == 4) { ?><div class="help-block">建议直接复制本学校的二维码链接
								<i data-toggle="tooltip" data-placement="bottom" data-original-title="如果你的打印机是 飞印打印机, 只有2015年5月份以后生产的1600机型才支持二维码" class="fa fa-search"></i>
							</div><?php  } ?>
						</div>
						<?php  if($row['ordertype'] > 3) { ?>
							<div class="col-sm-2 col-lg-2">
								<input name="printarr[]" value="<?php  echo $row['printarr'];?>" type="hidden">
								<input type="text" name="printname[]" disabled placeholder="选择打印机" class="form-control" value="<?php  echo $row['printnames'];?>"/>
								<?php  if($row['printcount']>1) { ?>
									<i data-toggle="tooltip" data-placement="bottom" data-original-title="<?php  echo $row['printnames'];?>" class="fa fa-search"></i>
								<?php  } ?>
							</div>
							<div class="col-sm-2 col-lg-2" style="width: 45px;margin-left: -31px;">	
								<span href="javascript::;" data-toggle="tooltip" data-placement="bottom" onclick="showmsmodel(this,'order<?php  echo $row['id'];?>');" data-original-title="选择设备" class="btn btn-default">
									<i class="fa fa-search"></i>
								</span>
							</div>
						<?php  } else { ?>
							<div class="col-sm-3 col-lg-3">
								<input name="printarr[]" value="" type="hidden">
								<input type="text" name="printname[]" disabled class="form-control" placeholder="<?php  if($row['ordertype'] == 1) { ?>请前往各课程设置打印设备<?php  } ?><?php  if($row['ordertype'] == 3) { ?>请前往各自定义缴费项目设置打印设备<?php  } ?><?php  if($row['ordertype'] == 4) { ?>请前往各基础设置-班级管理-编辑编辑设置打印设备<?php  } ?>" />
							</div>
						<?php  } ?>
					</div>
				<?php  } } ?>
				<?php  } else { ?>
				<div class="form-group" id="ordertype4">
					<div class="col-sm-2 col-lg-2">
						<input name="ordertype[]" value="4" type="hidden">
						<input type="text" name="name" disabled class="form-control" value="报名注册缴费" />
						<div class="help-block">订单类型</div>
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_nums[]" placeholder="打印联数" class="form-control" value="" />
						<div class="help-block">打印联数:默认1联</div>
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_header[]" placeholder="头部文字" class="form-control" value="" />
						<div class="help-block">自定义头部建议20字以内</div>
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_footer[]" placeholder="底部文字" class="form-control" value="" />
						<div class="help-block">自定义底部建议20字以内</div>
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="qrcode_link[]" placeholder="二维码链接" class="form-control" value="" />
						<div class="help-block">建议直接复制本学校的二维码链接
							<i data-toggle="tooltip" data-placement="bottom" data-original-title="如果你的打印机是 飞印打印机, 只有2015年5月份以后生产的1600机型才支持二维码" class="fa fa-search"></i>
						</div>
					</div>
					<div class="col-sm-2 col-lg-2">
						<input name="printarr[]" value="" type="hidden">
						<input type="text" name="printname[]" placeholder="选择关联打印机" disabled class="form-control" value="" />
					</div>
					<div class="col-sm-2 col-lg-2" style="width: 45px;margin-left: -31px;">	
						<span href="javascript::;"  data-toggle="tooltip" data-placement="bottom" onclick="showmsmodel(this,'ordertype4');" data-original-title="选择设备" class="btn btn-default">
							<i class="fa fa-search"></i>
						</span>
					</div>
				</div>	
				<div class="form-group" id="ordertype6">
					<div class="col-sm-2 col-lg-2">
						<input name="ordertype[]" value="5" type="hidden">
						<input type="text" name="name" disabled class="form-control" value="考勤卡费" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_nums[]" placeholder="打印联数" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_header[]" placeholder="头部文字" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_footer[]" placeholder="底部文字" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="qrcode_link[]" placeholder="二维码链接" class="form-control" value="" />
					</div>
					<div class="col-sm-2 col-lg-2">
						<input name="printarr[]" value="" type="hidden">
						<input type="text" name="printname[]" placeholder="选择关联打印机" disabled class="form-control" value="" />
					</div>
					<div class="col-sm-2 col-lg-2" style="width: 45px;margin-left: -31px;">	
						<span href="javascript::;"  data-toggle="tooltip" data-placement="bottom" onclick="showmsmodel(this,'ordertype6');" data-original-title="选择设备" class="btn btn-default">
							<i class="fa fa-search"></i>
						</span>
					</div>
				</div>
				<div class="form-group" id="ordertype6">
					<div class="col-sm-2 col-lg-2">
						<input name="ordertype[]" value="6" type="hidden">
						<input type="text" name="name" disabled class="form-control" value="商城订单" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_nums[]" placeholder="打印联数" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_header[]" placeholder="头部文字" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_footer[]" placeholder="底部文字" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="qrcode_link[]" placeholder="二维码链接" class="form-control" value="" />
					</div>
					<div class="col-sm-2 col-lg-2">
						<input name="printarr[]" value="" type="hidden">
						<input type="text" name="printname[]" placeholder="选择关联打印机" disabled class="form-control" value="" />
					</div>
					<div class="col-sm-2 col-lg-2" style="width: 45px;margin-left: -31px;">	
						<span href="javascript::;"  data-toggle="tooltip" data-placement="bottom" onclick="showmsmodel(this,'ordertype6');" data-original-title="选择设备" class="btn btn-default">
							<i class="fa fa-search"></i>
						</span>
					</div>
				</div>
				<div class="form-group" id="ordertype7">
					<div class="col-sm-2 col-lg-2">
						<input name="ordertype[]" value="7" type="hidden">
						<input type="text" name="name" disabled class="form-control" value="<?php  if($school['videoname']) { ?><?php  echo $school['videoname'];?><?php  } else { ?>直播监控<?php  } ?>" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_nums[]" placeholder="打印联数" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_header[]" placeholder="头部文字" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_footer[]" placeholder="底部文字" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="qrcode_link[]" placeholder="二维码链接" class="form-control" value="" />
					</div>
					<div class="col-sm-2 col-lg-2">
						<input name="printarr[]" value="" type="hidden">
						<input type="text" name="printname[]" placeholder="选择关联打印机" disabled class="form-control" value="" />
					</div>
					<div class="col-sm-2 col-lg-2" style="width: 45px;margin-left: -31px;">	
						<span href="javascript::;"  data-toggle="tooltip" data-placement="bottom" onclick="showmsmodel(this,'ordertype7');" data-original-title="选择设备" class="btn btn-default">
							<i class="fa fa-search"></i>
						</span>
					</div>
				</div>
				<div class="form-group" id="ordertype8">
					<div class="col-sm-2 col-lg-2">
						<input name="ordertype[]" value="8" type="hidden">
						<input type="text" name="name" disabled class="form-control" value="余额充值" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_nums[]" placeholder="打印联数" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_header[]" placeholder="头部文字" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_footer[]" placeholder="底部文字" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="qrcode_link[]" placeholder="二维码链接" class="form-control" value="" />
					</div>
					<div class="col-sm-2 col-lg-2">
						<input name="printarr[]" value="" type="hidden">
						<input type="text" name="printname[]" placeholder="选择关联打印机" disabled class="form-control" value="" />
					</div>
					<div class="col-sm-2 col-lg-2" style="width: 45px;margin-left: -31px;">	
						<span href="javascript::;"  data-toggle="tooltip" data-placement="bottom" onclick="showmsmodel(this,'ordertype8');" data-original-title="选择设备" class="btn btn-default">
							<i class="fa fa-search"></i>
						</span>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2 col-lg-2">
						<input name="ordertype[]" value="1" type="hidden">
						<input type="text" name="name"  disabled class="form-control" value="课程支付" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_nums[]" placeholder="打印联数" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_header[]" placeholder="头部文字" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_footer[]" placeholder="底部文字" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="qrcode_link[]" placeholder="二维码链接" class="form-control" value="" />
					</div>
					<div class="col-sm-3 col-lg-3">
						<input type="text" name="printname[]" disabled class="form-control" value="请前往各课程设置打印设备" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2 col-lg-2">
						<input name="ordertype[]" value="3" type="hidden">
						<input type="text" name="name" disabled class="form-control" value="自定义缴费" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_nums[]" placeholder="打印联数"  class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_header[]" placeholder="头部文字" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="print_footer[]" placeholder="底部文字" class="form-control" value="" />
					</div>
					<div class="col-sm-1 col-lg-1">
						<input type="text" name="qrcode_link[]" placeholder="二维码链接" class="form-control" value="" />
					</div>
					<div class="col-sm-3 col-lg-3">
						<input type="text" name="printname[]" disabled class="form-control" value="请前往各自定义缴费项目设置打印设备" />
					</div>
				</div>
				<?php  } ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-9 col-xs-9 col-md-9">
				<input type="hidden" name="token" value="<?php  echo $_W['token'];?>">
				<input name="submit" id="submit" type="submit" value="提交" class="btn btn-primary col-lg-1">
			</div>	
		</div>
	</div>
</form>
<div class="modal fade" style="min-width: 583px!important;" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog" style="min-width: 583px!important;left: 35%;top: 227px;">
		<div class="modal-content" style="border-radius: 20px;">
			<div class="modal-header">
				<h4 class="modal-title" style="text-align:center;color:#333;font-size: 17px;">选择关联打印机</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">打印机</label>
					<div class="col-sm-9 col-xs-6">
						<div class="input-group text-info" id="checkbox">
							<?php  if(is_array($allprints)) { foreach($allprints as $uni) { ?>
								<label for="uni_<?php  echo $uni['id'];?>" class="checkbox-inline">
									<input id="uni_<?php  echo $uni['id'];?>" class="cehckd" type="checkbox" dataname="<?php  echo $uni['name'];?>" value="<?php  echo $uni['id'];?>"/> <?php  echo $uni['name'];?>（<?php  echo $printer_name[$uni['type']]['text'];?>）
								</label></br>
							<?php  } } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer" style="border-radius: 6px;">
				<input type="submit" onclick="tijiao()" class="btn btn-success" value="确定选择">
				<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<input id="order" value="" type="hidden">
<script type="text/javascript">
function showmsmodel(e,id){
	$('#Modal1').modal('toggle');
	$('#order').val(id);
	var chosed = $(e).parent().parent().children().find('input[name="printarr[]"]').val();
	if(chosed.indexOf(',')>= 1){
		var chosedsarr= new Array(); //定义一数组 
		choseds= chosed.split(','); //字符分割 
		for(var i=0;i<choseds.length;i++){
			if(choseds[i] > 0){
				chosedsarr[i] = parseInt(choseds[i]);
			}	
		}
		$(".cehckd").each(function() {
			if($.inArray( $(this).val(), chosedsarr )){
				$(this).prop("checked",true);
			}else{
				$(this).prop("checked",false);
			}
		});
	}else{
		$(".cehckd").each(function() {
			if (parseInt(chosed) == $(this).val()){
				$(this).prop("checked",true);
			}else{
				$(this).prop("checked",false);
			}
		});
	}
}

function tijiao(){
	var elm = $('#order').val();
	var printarr = $("#"+elm).children().find('input[name="printarr[]"]');
	var printname = $("#"+elm).children().find('input[name="printname[]"]');
	var all_select_id = '';
	var all_select_text = '';
	var len = $("input:checkbox:checked").length; 
	$(".cehckd").each(function(i, dom) {
		if($(this).is(':checked')){
			if(i == len-1){
				all_select_id += $(this).val();
				all_select_text += $(this).attr("dataname");
			}else{
				all_select_id += $(this).val() + ',';
				all_select_text += $(this).attr("dataname") + ',';
			}
		}
	});
	printarr.val(all_select_id);
	printname.val(all_select_text);
$('#Modal1').modal('toggle');
}
require(['jquery', 'util', 'bootstrap.switch'], function($, u){
	$(':checkbox[name="status"]').bootstrapSwitch();
	$(':checkbox[name="status"]').on('switchChange.bootstrapSwitch', function(e, state){
		var status = this.checked ? 1 : 0;
		var id = $(this).data('id');
		$.post("<?php  echo $this->createWebUrl('printer', array('op' => 'changeprintset', 'schoolid' => $schoolid))?>", {status: status, id: id}, function(resp){
			setTimeout(function(){
				//location.reload();
			}, 500)
		});
	});
});
</script>	
<?php  } else if($operation == 'display') { ?>
<div class="main">
<style>
.form-control-excel {height: 34px;padding: 6px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);box-shadow: inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
</style>
    <div class="panel panel-info">
        <div class="panel-heading">管理打印机</div>
		<div class="panel-body">
			<form action="./index.php" method="get" class="form-horizontal" role="form">
				<input type="hidden" name="c" value="site">
				<input type="hidden" name="a" value="entry">
				<input type="hidden" name="m" value="weixuexiao">
				<input type="hidden" name="do" value="printer"/>
				<input type="hidden" name="op" value="display"/>
				<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
				<input type="hidden" name="type" value="<?php  echo $_GPC['type'];?>"/>
                <div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">设备品牌</label>
                    <div class="col-sm-2 col-lg-2">
                        <select style="margin-right:15px;" name="type" class="form-control">
							<option value="" <?php  if(!$_GPC['type']) { ?> selected="selected"<?php  } ?>>请选择</option>
							<?php  if(is_array($mactype)) { foreach($mactype as $index => $row) { ?>
                            <option value="<?php  echo $index;?>" <?php  if($_GPC['type'] == $index) { ?> selected="selected"<?php  } ?>><?php  echo $row['text'];?></option>
							<?php  } } ?>
                        </select>
                    </div>
					<div class="col-xs-12 col-sm-2 col-md-1 col-lg-1">
						<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
					</div>
					<div  class="col-sm-8 qx_03012">
						<a class="btn btn-success col-lg-1" href="<?php  echo $this->createWebUrl('printer', array('op' => 'post', 'schoolid' => $schoolid))?>"/>
							<i class="fa fa-plus-circle"></i>添加
						</a>
					</div>
				</div>
			</form>
		</div>		
    </div>
    <div class="panel panel-default">
        <div class="table-responsive panel-body">
			<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
				<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
				<table class="table table-hover">
					<thead class="navbar-inner">
						<tr>
							<th style="width:5%">品牌 </th>
							<th style="width:8%">名称</th>
							<th style="width:5%">设备号</th>
							<th style="width:5%;">打印次数</th>
							<th style="width:5%;">状态</th>
							<th style="width:5%;">联机状态</th>
							<th style="width:5%;">添加时间</th>
							<th class="qx_e_d" style="text-align:right; width:10%;">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php  if(is_array($list)) { foreach($list as $item) { ?>
							<tr>
								<td>
									<span class="<?php  echo $item['css'];?>"><?php  echo $item['macname'];?></span>
								</td>
								<td>
									<?php  echo $item['name'];?>
								</td>
								<td>
									<?php  echo $item['print_no'];?>
								</td>
								<td>
									<span class="label label-success"><?php  echo $item['print_times'];?>次</span>
								</td>
								<td><input type="checkbox" value="<?php  echo $item['status'];?>" name="status" data-id="<?php  echo $item['id'];?>" <?php  if($item['status'] == 1) { ?>checked<?php  } ?>></td>
								<td>
									<span class="label label-info"><?php  echo $item['status_cn'];?></span>
								</td>
								<td>
									<span class="label label-info"><?php  echo date('Y-m-d',$item['createtime'])?></span>
								</td>
								<td class="qx_e_d" style="text-align:right;">
									<a href="<?php  echo $this->createWebUrl('printlog', array('op' => 'display', 'pid' => $item['id'], 'schoolid' => $schoolid))?>" class="btn btn-default btn-sm qx_03001" title="打印记录" data-toggle="tooltip" data-placement="top" ><i class="fa fa-print"> </i></a>								
									<a   class="btn btn-default btn-sm qx_03012" href="<?php  echo $this->createWebUrl('printer', array('id' => $item['id'], 'op' => 'post', 'schoolid' => $schoolid))?>" title="编辑"><i class="fa fa-pencil"></i></a>
									<a    class="btn btn-default btn-sm qx_03013" href="<?php  echo $this->createWebUrl('printer', array('id' => $item['id'], 'op' => 'delete', 'schoolid' => $schoolid))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" title="删除"><i class="fa fa-times"></i></a>
								</td>
							</tr>
						<?php  } } ?>
					</tbody>
				</table>
			<?php  echo $pager;?>
			</form>
        </div>
    </div>
</div>
<script type="text/javascript">

$(function(){
var e_d = 2 ;

	<?php  if(!(IsHasQx($tid_global,1003001,1,$schoolid))) { ?>
		$(".qx_03001").hide();
	<?php  } ?>
	
	<?php  if(!(IsHasQx($tid_global,1003012,1,$schoolid))) { ?>
		$(".qx_03012").hide();
		e_d = e_d -1 ;
	<?php  } ?>
	
	<?php  if(!(IsHasQx($tid_global,1003013,1,$schoolid))) { ?>
		$(".qx_03013").hide();
		e_d = e_d -1 ;
	<?php  } ?>
	
	if(e_d == 0 ){
		$(".qx_e_d").hide();
	}
});



require(['jquery', 'util', 'bootstrap.switch'], function($, u){
	$(':checkbox[name="status"]').bootstrapSwitch();
	$(':checkbox[name="status"]').on('switchChange.bootstrapSwitch', function(e, state){
		var status = this.checked ? 1 : 0;
		var id = $(this).data('id');
		$.post("<?php  echo $this->createWebUrl('printer', array('op' => 'change', 'schoolid' => $schoolid))?>", {status: status, id: id}, function(resp){
			setTimeout(function(){
				//location.reload();
			}, 500)
		});
	});
});
</script>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>