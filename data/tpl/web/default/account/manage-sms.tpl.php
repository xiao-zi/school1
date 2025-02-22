<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('account/account-header', TEMPLATE_INCLUDEPATH)) : (include template('account/account-header', TEMPLATE_INCLUDEPATH));?>
<div id="js-account-manage-sms" ng-controller="AccountManageSms" ng-cloak>
	<table class="table we7-table table-hover">
		<col width="200px"/>
		<col width="230px"/>
		<tr>
			<th>剩余条数</th>
			<th class="text-right">操作</th>
		</tr>
		<tr> 
			<td ng-if="notify.sms"><span ng-bind="notify.sms.balance"></span>条</td>
			<td ng-if="!notify.sms">0条</td>
			<td class="text-right">
				<div class="link-group">
					<?php  if(permission_check_account_user('see_account_manage_sms_blance')) { ?>
					<a href="javascript:;" data-toggle="modal" data-target="#balance" ng-click="editSms('balance', notify.sms.balance)">分配短信</a>
					<?php  } ?>
					<a href="javascript:;" data-toggle="modal" data-target="#signature" ng-click="editSms('signature', notify.sms.signature)">设置短信签名</a>
				</div>
			</td>
		</tr>
	</table>
	<div class="modal fade" id="balance" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="we7-modal-dialog modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<div class="modal-title">分配短信</div>
				</div>
				<div class="modal-body we7-form">
					<div class="form-group">
						<input type="number" min="0" ng-model="middleSms.balance" class="form-control" placeholder="请填写短信剩余条数,必须为整数。" />
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" ng-click="httpChange('balance')">确定</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="signature" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="we7-modal-dialog modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<div class="modal-title">修改短信签名</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<select name="signature" class="we7-select" ng-model="middleSms.signature">
							<option value="{{item}}" ng-repeat="item in signatures">{{item}}</option>
							<option value="">涛盛系统团队</option>
						</select>
						<span class="help-block">请填写短信签名。未审核签名可以通过云短信审核签名</span>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" ng-click="httpChange('signature')">确定</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	angular.module('accountApp').value('config', {
		notify: <?php echo !empty($notify) ? json_encode($notify) : 'null'?>,
		signatures: <?php echo !empty($signatures) ? json_encode($signatures) : 'null'?>,
		links: {
			postSms: "<?php  echo url('account/post/sms', array('uniacid' => $uniacid))?>",
		},
	});
	angular.bootstrap($('#js-account-manage-sms'), ['accountApp']);
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>