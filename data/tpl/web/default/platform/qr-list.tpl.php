<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
	<ul class="we7-page-tab">
		<?php  if(is_array($active_sub_permission)) { foreach($active_sub_permission as $active_menu) { ?>
		<?php  if(permission_check_account_user($active_menu['permission_name'], false) && (empty($active_menu['is_display']) || is_array($active_menu['is_display']) && in_array($_W['account']['type'], $active_menu['is_display']))) { ?>
		<li <?php  if($do == $active_menu['active']) { ?>class="active"<?php  } ?>><a href="<?php  echo $active_menu['url'];?>"><?php  echo $active_menu['title'];?></a></li>
		<?php  } ?>
		<?php  } } ?>
	</ul>
	<div class="we7-padding-bottom clearfix">
		<form action="./index.php" method="get" role="form" >
			<div class="input-group pull-left col-sm-4">
				<input type="hidden" name="c" value="platform">
				<input type="hidden" name="a" value="qr">
				<input type="text" name="keyword" value="<?php  echo $keyword;?>" class="form-control" placeholder="请输入场景名称"/>
				<span class="input-group-btn"><button class="btn btn-default"><i class="fa fa-search"></i></button></span>
			</div>
		</form>
		<div class="pull-right">
			<?php  if($_W['account']['level'] == 4) { ?><a href="<?php  echo url('platform/url2qr');?>" class="btn btn-default">长链接转二维码</a><?php  } ?>
			<a href="<?php  echo url('platform/qr/post');?>" class="btn btn-primary  we7-margin-left">+生成关键二维码</a>
		</div>
	</div>
	<table class="table we7-table table-hover vertical-middle" id="js-qr-list" ng-controller="QrDisplay" ng-cloak>
		<col width="100px"/>
		<col width="120px" />
		<col width="120px" />
		<col width="115px" />
		<col width="115px"/>
		<col>
		<tr>
			<th></th>
			<th>二维码名称</th>
			<th>场景名称</th>
			<th>对应关键字</th>
			<th class="text-left">生成时间</th>
			<th>到期时间</th>
			<th class="text-right">操作</th>
		</tr>
		<?php  if(is_array($list)) { foreach($list as $row) { ?>
		<tr>
			<td><a href="<?php  echo $row['showurl'];?>" target="_blank"><img src="<?php  echo $row['showurl'];?>" alt="12312"  width="50px" height="50px"/></a></td>
			<td title="<?php  echo $row['name'];?>"><?php  echo cutstr($row['name'], 8)?></td>
			<td title="<?php  echo $row['scene_str'];?>"><?php echo $row['scene_str'] == '' ? '无' : cutstr($row['scene_str'], 8)?></td>
			<td title="<?php  echo $row['keyword'];?>"><?php  echo cutstr($row['keyword'], 8)?></td>
			<td class="text-left"><?php  echo date('Y-m-d H:i:s', $row['createtime']);?></td>
			<td><?php  echo $row['endtime'];?></td>
			<td>
				<div class="link-group">
					<a href="javascript:;" data-url="<?php  echo $row['showurl'];?>" class="we7-margin-right-sm js-clip">复制链接</a>
					<a href="<?php  echo url('platform/qr/down_qr', array('id' => $row['id']))?>">下载</a>
					<a href="<?php  echo url('platform/qr/post', array('id'=> $row['id']))?>" >编辑</a>
					<?php  if($row['model'] == 2) { ?>
						<a href="<?php  echo url('platform/qr/del', array('id'=> $row['id']))?>" class="del" onclick="return confirm('您确定要删除该二维码以及其统计数据吗？')">删除</a>
					<?php  } ?>
					<?php  if($row['model'] == 1) { ?><a href="<?php  echo url('platform/qr/extend', array('id'=> $row['id']))?>" >延时</a><?php  } ?>
				</div>
			</td>
		</tr>
		<?php  } } ?>
	</table>
	<div class="help-block">
		<a href="<?php  echo url('platform/qr/del', array('scgq'=> '1'))?>" onclick="javascript:return confirm('您确定要删除吗？\n将删除所有过期二维码以及其统计数据！！！')" class="btn btn-primary" style="margin-bottom:15px">删除全部已过期二维码</a>
		<span style="vertical-align:super">注意：永久二维码无法在微信平台删除，但是您可以点击<span class="color-red">要删除数据后面的删除按钮</span>来删除本地数据。</span>
	</div>
	<div class="text-right">
		<?php  echo $pager;?>
	</div>
<script>
	angular.bootstrap($('#js-qr-list'), ['qrApp']);
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
