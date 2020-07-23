<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="new-keyword" id="js-user-post" ng-controller="UserCreateCtrl" ng-cloak>
	<ol class="breadcrumb we7-breadcrumb">
		<a href="<?php  echo url('user/display');?>"><i class="wi wi-back-circle"></i> </a>
		<li><a href="<?php  echo url('user/display');?>">用户管理</a></li>
		<li>添加用户</li>
	</ol>

	<div class="we7-step">
		<ul>
			<li ng-class="{true : 'active new', false : 'new'}[create_step == 1]"><span class="content">1 基本信息</span></li>
			<li ng-class="{true : 'active new', false : 'new'}[create_step == 2]"><span class="content">2 设置权限</span> </li>
		</ul>
	</div>

	<form ng-submit="submit()" class="we7-form user-create" name="UserCreateForm" novalidate>
		<!-- 基本信息 start -->
		<div ng-show="create_step == 1">
			<!-- 用户名 start -->
			<div class="form-group">
				<label for="" class="control-label col-sm-2">用户名</label>
				<div class="form-controls col-sm-8">
					<input type="text" name="username" placeholder="请输入用户名，用户名为 3 到 30 个字符组成，包括汉字，大小写字母（不区分大小写）" check_username required id="username" ng-style="{'width': '600px'}" class="form-control" ng-model="user.username" placeholder="" autocomplete="off">
					<div class="help-block" ng-show="UserCreateForm.username.$dirty && UserCreateForm.username.$invalid">
						<span ng-show="UserCreateForm.username.$error.unique">用户名已经被注册!</span>
						<span ng-show="UserCreateForm.username.$error.required">用户名不能为空!</span>
						<span ng-show="UserCreateForm.username.$error.format">用户名必须为 3 到 30 个字符组成，包括汉字，大小写字母（不区分大小写）</span>
					</div>
				</div>
			</div>
			<!-- 用户名 end -->

			<!-- 密码 start -->
			<div class="form-group">
				<label for="" class="control-label col-sm-2">密码</label>
				<div class="form-controls col-sm-8">
					<input type="text" value="" class="hidden"/>
					<input type="password" name="password" required ng-minlength="8" id="password" ng-style="{'width': '600px'}" class="form-control" ng-model="user.password" placeholder="" autocomplete="off" ng-focus="changeType($event)">
					<div class="help-block">请填写密码，最小长度为 8 个字符</div>
				</div>
			</div>
			<!-- 密码 end -->

			<!-- 确认密码 start -->
			<div class="form-group" ng-class="{error: UserCreateForm.password.$modelValue !== UserCreateForm.repassword.$modelValue}">
				<label for="" class="control-label col-sm-2">确认密码</label>
				<div class="form-controls col-sm-8">
					<input type="password" name="repassword" required ng-minlength="8" id="repassword" ng-style="{'width': '600px'}" class="form-control" ng-model="user.repassword" placeholder="" autocomplete="off" ng-focus="changeType($event)">
					<div class="help-block">重复输入密码，确认正确输入</div>
				</div>
			</div>
			<!-- 确认密码 end -->

			<!-- 备注 start -->
			<div class="form-group">
				<label for="" class="control-label col-sm-2">备注</label>
				<div class="form-controls col-sm-8">
					<textarea ng-model="user.remark" rows="6" class="form-control" ng-style="{'width': '600px'}" ng-bind="user.remark" placeholder="方便注明此用户的身份"></textarea>
				</div>
			</div>
			<!-- 备注 end -->
		</div>
		<!-- 基本信息 end -->

		<!-- 权限 start -->
		<div ng-show="create_step == 2" class="user-create-permission">
			
			<?php  if(permission_check_account_user('see_user_create_own_vice_founder')) { ?>
			<div class="form-group">
				<label for="" class="control-label col-sm-2">所属副创始人</label>
				<div class="form-controls col-sm-8">
					<input type="text" name="vice_founder_name" id="vice_founder" ng-style="{'width': '200px'}" class="form-control" ng-model="vice_founder_name" placeholder="" autocomplete="off">
					<div class="help-block">请输入副创始人姓名</div>
				</div>
			</div>
			<?php  } ?>
			

			<div class="form-group">
				<label for="" class="control-label col-sm-2">权限方式</label>
				<div class="form-controls col-sm-8">
					<div class="btn-group-sub">
						<a href="javascript:;" class="btn" ng-click="permissionType = 1" ng-class="{active: permissionType == '1'}">自定义权限</a>
						<a href="javascript:;" class="btn" ng-click="permissionType = 2" ng-class="{active: permissionType == '2'}">用户组权限</a>
					</div>
				</div>
			</div>

			<div ng-show="permissionType == 1">
				<!--应用权限组-->
				<div class="form-group">
					<div class="col-sm-offset-2">
						<div class="we7-header">应用权限组</div>
						<div class="we7-group-show " ng-repeat="extend in moduleGroupList.groups" ng-if="extend.checked == 1">
							<div class="name">
								{{extend.name}}
							</div>
							<div class="group-app-list">
								<div class="group-app-item" ng-repeat="module in extend.modules_all">
									<img src="{{module.logo}}" class="module-img" alt="">
									<div class="info">
										<div class="title text-over">
											{{module.title}}
										</div>
										<div class="type-list">
											<i ng-class="itme.icon" ng-repeat="itme in module.group_support | moduleInfo" ></i>
										</div>
									</div>
								</div>
								<div class="group-app-item" ng-repeat="module in extend.templates">
									<img src="{{module.logo}}" class="template-img" alt="">
									<div class="info">
										<div class="title">
											{{module.title}}
										</div>
										<div class="type-list">
											<i class="wi wi-template"></i>
										</div>
									</div>
								</div>
							</div>
							<a class="action"></a>
							<a href="" class="remove" ng-click="extend.checked = 0"><i class="wi wi-error"></i></a>
						</div>
						<we7-modal-app module-list="moduleGroupList" multiple="true" on-confirm="groupConfirm()">
							<div class="add-new-block" >
								<i class="wi wi-plus"></i> 添加应用权限组
							</div>
						</we7-modal-app>
					</div>
				</div>

				<!-- 附加应用 -->
				<div class="form-group">
					<div class="col-sm-offset-2">
						<div class="we7-header">附加应用</div>
						<div class="group-post-mudules">
							<div class="module-item" ng-repeat="module in user_modules.modules" ng-if="module.checked == 1">
								<div class="logo">
									<img ng-src="{{module.logo}}" class="module-img" alt="">
								</div>
								<div class="info">
									<div ng-bind="module.title" class="title text-over">1213</div>
									<div class="icon">
										<i class="{{module.support | moduleInfo:'icon'}}"></i>
									</div>
								</div>
								<div class="delete">
									<i class="wi wi-error" ng-click="module.checked = 0"></i>
								</div>
							</div>
							<div class="module-item" ng-repeat="template in user_modules.templates"  ng-if="template.checked == 1">
								<div class="logo">
									<img ng-src="{{template.logo}}" class="template-img" alt="">
								</div>
								<div class="info">
									<div class="name text-over" ng-bind="template.title">1213</div>
									<div class="icon">
										<i class="wi wi-template"></i>
									</div>
								</div>
								<div class="delete">
									<i class="wi wi-error" ng-click="template.checked = 0"></i>
								</div>
							</div>
							<we7-modal-app module-list="user_modules" title="'添加应用'" multiple="true">
								<div class="module-item add" >
									<i class="wi wi-plus"></i> 添加应用
								</div>
							</we7-modal-app>
						</div>
					</div>
				</div>

				<!-- 账号权限组 -->
				<div class="form-group">
					<div class="col-sm-offset-2">
						<div class="we7-header">账号权限组</div>
						<div class="we7-account-show " ng-repeat="item in account.create_groups" ng-if="item.checked == 1">
							<div class="name">{{item.group_name}}</div>
							<div class="account-num-list">
							<span class="account-num-item" ng-repeat="(index,type) in account_text" ng-show="item['max' + index] > 0">
								<i ng-class="type.icon" ></i> {{item['max' + index]}}个
							</span>
							</div>
							<a href="javascript:;" class="remove" ng-click="item.checked = 0">
								<i class="wi wi-error"></i>
							</a>
						</div>
						<we7-modal-account account="account" type="2" multiple="true" >
							<a href="javascript:;" class="add-new-block" >
								<i class="wi wi-plus"></i>添加账号权限组
							</a>
						</we7-modal-account>
					</div>
				</div>

				<!-- 附加账号 -->
				<div class="form-group">
					<div class="col-sm-offset-2">
						<div class="we7-header">附加账号</div>
						<div class="we7-account-show" >
							<div class="name">附加账号</div>
							<div class="account-num-list">
							<span class="account-num-item" ng-repeat="(index,type) in account_text"  ng-show="account.create_numbers['max' + index] > 0">
								<i ng-class="type.icon" ></i> {{account.create_numbers['max' + index]}}个
							</span>
							</div>
							<we7-modal-account account="account" type="3" multiple="true" >
								<a href="javascript:;" class="color-default">
									编辑
								</a>
							</we7-modal-account>
						</div>
					</div>
				</div>

				<!--附加天数-->
				<div class="form-group">
					<div class="col-sm-offset-2">
						<div class="we7-header">附加天数</div>
						<div class="day-show">
							<div class="day">{{selectedDate}}</div>
							<div class="edit">
								<a class="color-default" href="#date" data-toggle="modal" data-target="#date">编辑</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div ng-show="permissionType == 2">
				<div class="form-group">
					<label for="" class="control-label col-sm-2"></label>
					<div class="form-controls col-sm-3">
						<select name="groupid" class="" ng-model="group" ng-options="group.name for (x, group) in groups" ng-change="changeGroup()">
							<option value="" >请选择所属用户权限组</option>
						</select>
						<span class="help-block"> 分配用户所属用户权限组后，该用户会自动拥有此用户权限组内的模块操作权限</span>
						<span class="help-block"><strong class="text-danger">设置用户权限组后，系统会根据对应用户权限组的服务期限对用户的服务开始时间和结束时间进行初始化</strong></span>
					</div>
				</div>
				<div ng-show="group.id > 0 && selectedGroupInfo">
					<!--应用权限组-->
					<div class="form-group">
						<div class="col-sm-offset-2">
							<div class="we7-header">应用权限组</div>
							<div class="we7-group-show ">
								<div class="name">
									{{selectedGroupInfo['name']}}
								</div>
								<div class="group-app-list">
									<div class="group-app-item" ng-repeat="module in selectedGroupInfo['group_module_all']">
										<img src="{{module.logo}}" alt="">
										<div class="info">
											<div class="title text-over">
												{{module.title}}
											</div>
											<div class="type-list">
												<i ng-class="itme.icon" ng-repeat="itme in module.group_support | moduleInfo" ></i>
											</div>
										</div>
									</div>
									<div class="group-app-item" ng-repeat="module in selectedGroupInfo['group_tempate_all']">
										<img src="{{module.logo}}" alt="">
										<div class="info">
											<div class="title">
												{{module.title}}
											</div>
											<div class="type-list">
												<i class="wi wi-template"></i>
											</div>
										</div>
									</div>
								</div>
								<a class="action"></a>
							</div>
						</div>
					</div>
					<!-- 账号权限组 -->
					<div class="form-group">
						<div class="col-sm-offset-2">
							<div class="we7-header">账号权限组</div>
							<div class="we7-account-show we7-padding" >
								<div class="name">{{selectedGroupInfo['name']}}</div>
								<div class="account-num-list">
								<span class="account-num-item" ng-repeat="(index,type) in account_text" ng-show="selectedGroupInfo['max' + index] > 0">
									<i ng-class="type.icon" ></i> {{selectedGroupInfo['max' + index]}}个
								</span>
								</div>
							</div>
						</div>
					</div>
					<!--附加天数-->
					<div class="form-group">
						<div class="col-sm-offset-2">
							<div class="we7-header">有效时间</div>
							<div class="day-show">
								<div class="day">{{selectedGroupInfo['timelimit'] == 0 ? '永久有效' : selectedGroupInfo['timelimit']}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade modal-form" id="date" role="dialog">
				<div class="we7-modal-dialog modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<div class="modal-title">添加有效时间</div>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control" ng-model="selectedDate">
									<div class="input-group-addon">
										天
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary"  data-dismiss="modal" >确定</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 权限 end -->

		<div class="col-sm-offset-2">
			<input type="button" ng-if="create_step == 2" value="上一步" class="btn btn-primary" ng-click="step(1)" ng-style="{'padding': '6px 50px'}"/>
			<input type="button" ng-if="create_step == 1" value="下一步" class="btn btn-primary" ng-click="step(2)" ng-style="{'padding': '6px 50px'}"/>
			<input type="submit" ng-if="create_step == 2" name="submit" id="" value="提交" class="btn btn-primary" ng-click="checkSubmit($event)" ng-style="{'padding': '6px 50px'}"/>

		</div>
	</form>
</div>

<script type="text/javascript">
	angular.module('userManageApp').value('config', {
		groups: <?php echo !empty($groups) ? json_encode($groups) : 'null'?>,
		/* 应用权限 - 应用模块 */
		user_modules: <?php echo !empty($user_modules) ? json_encode($user_modules) : 'null'?>,
		/* 应用权限 - 应用权限组*/
		modules_group_list: <?php echo !empty($modules_group_list) ? json_encode($modules_group_list) : 'null'?>,
		/* 帐号权限 - 帐号权限组*/
		// account_group_lists: <?php echo !empty($account_group_lists) ? json_encode($account_group_lists) : 'null'?>,
		create_account: <?php  echo json_encode($create_account)?>,
		/* 应用权限 - 模板*/
		source_templates: <?php echo !empty($source_templates) ? json_encode($source_templates) : 'null'?>,
		user_save_url : "<?php  echo url('user/create/save')?>",
		get_user_group_detail_url : "<?php  echo url('user/create/get_user_group_detail_info')?>",
		check_vice_founder_exists_url : "<?php  echo url('user/create/check_vice_founder_exists')?>",
		check_user_info_url : "<?php  echo url('user/create/check_user_info')?>",
		check_vice_founder_permission_limit_url : "<?php  echo url('user/create/check_vice_founder_permission_limit')?>",
	});
	angular.bootstrap($('#js-user-post'), ['userManageApp']);
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

