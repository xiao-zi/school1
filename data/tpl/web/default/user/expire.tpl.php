<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('user/user-header', TEMPLATE_INCLUDEPATH)) : (include template('user/user-header', TEMPLATE_INCLUDEPATH));?>

<div id="js-expire" ng-controller="UserExpireCtrl">
	<form action="" method="post" class="we7-form" ng-cloak>

	<table class="table we7-table table-hover vertical-middle">
		<col width="150px"/>
		<col />
		<col />
		<col />
		<col />
		<col />
		<tr>
			<th >自定义到期提示</th>
			<th></th>
			<th class="text-right">操作</th>
		</tr>
		<tr>
			<td >提示语</td>
			<td ng-bind="user_expire.notice"></td>
			<td>
				<div class="link-group">
					<a href="javascript:;" data-toggle="modal" data-target="#notice">修改</a>
				</div>
			</td>
		</tr>
		<tr>
			<td >跳转商城按钮</td>
			<td >显示商城续费的按钮</td>
			<td>
				<div class="link-group">
					<div ng-class="user_expire.status_store_button == 1 ? 'switch switchOn' : 'switch'"  ng-click="changeStatus('status_store_button', user_expire)"></div>
				</div>
			</td>
		</tr>
		<tr>
			<td >自动跳转商城</td>
			<td >再提示页面无操作, 5秒后自动跳转至商城续费</td>
			<td>
				<div class="link-group">
					<div ng-class="user_expire.status_store_redirect == 1 ? 'switch switchOn' : 'switch'"  ng-click="changeStatus('status_store_redirect', user_expire)"></div>
				</div>
			</td>
		</tr>
	</table>

	<!-- 编辑弹出框 start-->
	<div class="modal fade" id="notice" role="dialog">
		<div class="we7-modal-dialog modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<div class="modal-title">修改提示语</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<span class="col-md-2 control-label">提示语</span>
						<div class="col-md-10">
							<input type="text" ng-model="user_expire.notice" class="form-control" placeholder="" />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" ng-click="saveExpire('notice')">确定</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				</div>
			</div>
		</div>
	</div>
	<!-- 编辑弹出框 end-->

</form>
</div>
<script>
	angular.module('userManageApp').value('config', {
		'user_expire' : <?php echo !empty($user_expire) ? json_encode($user_expire) : 'null'?>,
		'links' : {
			'user_expire_link' : "<?php  echo url('user/expire/save_expire')?>",
			'user_expire_status_link' : "<?php  echo url('user/expire/change_status')?>"
		}
	});
	angular.bootstrap($('#js-expire'), ['userManageApp']);
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>