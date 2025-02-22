<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="search-box we7-margin-bottom">
	<select name="" class="we7-margin-right">
		<option data-url="<?php  echo filter_url('account_type:');?>" >帐号类型筛选</option>
		<?php  if(is_array($account_all_type_sign)) { foreach($account_all_type_sign as $type_sign => $type_sign_info) { ?>
		<option data-url="<?php  echo filter_url('account_type:' . $type_sign);?>" <?php  if($_GPC['account_type'] == $type_sign) { ?> selected<?php  } ?>><?php  echo $type_sign_info['title'];?></option>
		<?php  } } ?>
	</select>
	<form action="" class="search-form" method="get">
		<input type="hidden" name="c" value="account">
		<input type="hidden" name="a" value="recycle">
		<div class="input-group">
			<input type="text" name="keyword" value="<?php  echo $_GPC['keyword'];?>" class="form-control" placeholder="搜索关键字"/>
			<span class="input-group-btn"><button class="btn btn-default"><i class="fa fa-search"></i></button></span>
		</div>
	</form>
</div>

<table class="table we7-table table-hover vertical-middle table-manage" id="js-system-account-recycle" ng-controller="SystemAccountRecycle" ng-cloak>
	<col width="85px" />
	<col />
	<col width="208px" />
	<col width="150px" />
	<tr>
		<th colspan="2" class="text-left">帐号</th>
		<th>有效期</th>
		<th class="text-right">操作</th>
	</tr>
	<tr class="color-gray" ng-repeat="list in del_accounts">
		<td class="text-left td-link">
			<img src="{{ list.logo }}" class="img-responsive account-img icon" >
		</td>
		<td class="text-left">
			<p class="color-dark" ng-bind="list.name"></p>
			<div ng-if="list.type == account_types.wechat_normal || list.type == account_types.wechat_auth">
				<span class="color-gray" ng-if="list.level == 1">类型：普通订阅号</span>
				<span class="color-gray" ng-if="list.level == 2">类型：普通服务号</span>
				<span class="color-gray" ng-if="list.level == 3">类型：认证订阅号</span>
				<span class="color-gray" ng-if="list.level == 4" title="认证服务号/认证媒体/政府订阅号">类型：认证服务号</span>
				<span class="color-red" ng-if="list.isconnect == 0" ><i class="wi wi-error-sign"></i>未接入</span>
				<span class="color-green" ng-if="list.isconnect == 1"><i class="wi wi-right-sign"></i>已接入</span>
			</div>
			<div ng-if="list.type == account_types.wxapp_normal || list.type == account_types.wxapp_auth || list.type == account_types.aliapp || list.type == account_types.webapp || list.type == account_types.phoneapp || list.type == account_types.xzapp">
				<span class="color-gray">类型：{{ list.type_name }}</span>
			</div>
		</td>
		<td>
			<p ng-bind="list.setmeal.timelimit"></p>
		</td>
		<td class="vertical-middle">
			<div class="link-group">
				<a ng-href="{{links.postRecover}}&acid={{list.acid}}&uniacid={{list.uniacid}}">恢复</a>
				<a href="javascript:;" class="del" ng-click="delete(list.acid, list.uniacid)">删除</a>
			</div>
		</td>
	</tr>
	<tr ng-if="del_accounts | we7IsEmpty">
		<td colspan="100">
			<div class="we7-empty-block">暂无</div>
		</td>
	</tr>
</table>
<div class="text-right">
	<?php  echo $pager;?>
</div>
<script>
	$(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
	angular.module('accountApp').value('config', {
		del_accounts: <?php echo !empty($del_accounts) ? json_encode($del_accounts) : 'null'?>,
		account_types : {
			'wechat_normal' : <?php echo ACCOUNT_TYPE_OFFCIAL_NORMAL;?>,
			'wechat_auth' : <?php echo ACCOUNT_TYPE_OFFCIAL_AUTH;?>,
			'wxapp_normal' : <?php echo ACCOUNT_TYPE_APP_NORMAL;?>,
			'wxapp_auth' : <?php echo ACCOUNT_TYPE_APP_AUTH;?>,
			'webapp' : <?php echo ACCOUNT_TYPE_WEBAPP_NORMAL;?>,
			'phoneapp' : <?php echo ACCOUNT_TYPE_PHONEAPP_NORMAL;?>,
			'xzapp' : <?php echo ACCOUNT_TYPE_XZAPP_NORMAL;?>,
			'aliapp' : <?php echo ACCOUNT_TYPE_ALIAPP_NORMAL;?>,
		},
		links: {
			postRecover: "<?php  echo url('account/recycle/recover', array('account_type' => ACCOUNT_TYPE))?>",
			postDel: "<?php  echo url('account/recycle/delete', array('account_type' => ACCOUNT_TYPE))?>",
		}
	});
	angular.bootstrap($('#js-system-account-recycle'), ['accountApp']);
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>