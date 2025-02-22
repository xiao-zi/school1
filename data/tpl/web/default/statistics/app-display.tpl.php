<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="we7-page-tab">
	<?php  if(is_array($active_sub_permission)) { foreach($active_sub_permission as $active_menu) { ?>
	<?php  if(permission_check_account_user($active_menu['permission_name'], false) && (empty($active_menu['is_display']) || is_array($active_menu['is_display']) && in_array($_W['account']['type'], $active_menu['is_display']))) { ?>
	<li <?php  if($action == $active_menu['active']) { ?>class="active"<?php  } ?>><a href="<?php  echo $active_menu['url'] . 'version_id=' . $_GPC['version_id']?>"><?php  echo $active_menu['title'];?></a></li>
	<?php  } ?>
	<?php  } } ?>
</ul>
<div class="api" id="js-statistics-app-display" ng-controller="HorizontalBarCtrl" ng-cloak>
	<div class="panel we7-panel api-target">
		<div class="panel-heading">今日/昨日关键指标</div>
		<div class="panel-body we7-padding-vertical">
			<div class="col-sm-4 text-center">
				<div class="title">应用总访问数</div>
				<div>
					<span class="today"><?php  echo $today_module_api['visit_sum'];?></span>
					<span class="yesterday">/ <?php  echo $yesterday_module_api['visit_sum'];?></span>
				</div>
			</div>
			<div class="col-sm-4 text-center">
				<div class="title">应用平均访问数</div>
				<div>
					<span class="today"><?php  echo $today_module_api['visit_avg'];?></span>
					<span class="yesterday">/ <?php  echo $yesterday_module_api['visit_avg'];?></span>
				</div>
			</div>
			<div class="col-sm-4 text-center">
				<div class="title">应用最高访问数</div>
				<div>
					<span class="today"><?php  echo $today_module_api['visit_highest'];?></span>
					<span class="yesterday">/ <?php  echo $yesterday_module_api['visit_highest'];?></span>
				</div>
			</div>
		</div>
	</div>

	<div class="we7-margin-vertical color-dark font-lg" ng-if="needAccountApi"><?php  echo $_W['account']['type_name'];?>API访问统计</div>
	<div class="panel we7-panel" ng-show="needAccountApi">
		<div class="panel-heading tab">
			<span class="we7-margin">关键指标详解</span>
			<a href="javascript:;" ng-class="{'active': accountDivideType == 'bysum'}" ng-click="changeDivideType('account', 'bysum')"><?php  echo $_W['account']['type_name'];?>总访问数</a>
			<a href="javascript:;" ng-class="{'active': accountDivideType == 'byavg'}" ng-click="changeDivideType('account', 'byavg')"><?php  echo $_W['account']['type_name'];?>平均访问数</a>
			<a href="javascript:;" ng-class="{'active': accountDivideType == 'byhighest'}" ng-click="changeDivideType('account', 'byhighest')"><?php  echo $_W['account']['type_name'];?>最高访问数</a>
		</div>
		<div class="panel-body data-view">
			<div class="tab-bar-time clearfrix">
				<span class="we7-margin-right">时间</span>
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default" ng-class="{'active': accountTimeType == 'today'}" ng-click="getModuleApi('account', 'today')">今日统计</button>
					<button type="button" class="btn btn-default" ng-class="{'active': accountTimeType == 'week'}" ng-click="getModuleApi('account', 'week')">周统计</button>
					<button type="button" class="btn btn-default" ng-class="{'active': accountTimeType == 'month'}" ng-click="getModuleApi('account', 'month')">月统计</button>
					<div class="btn-group" role="group">
						<button class="btn btn-default daterange daterange-date" we7-date-range-picker ng-model="accountDateRange"><span>{{accountDateRange.startDate}} </span>至<span> {{accountDateRange.endDate}}</span> <i class="fa fa-calendar"></i></button>
					</div>
				</div>
			</div>
			<div class="col-sm-12" id="chart-line" style="height:500px"></div>
		</div>
	</div>

	<div class="we7-margin-vertical color-dark font-lg <?php  if(!empty($_GPC['version_id'])) { ?>hidden<?php  } ?>">应用模块API统计</div>
	<div class="panel we7-panel <?php  if(!empty($_GPC['version_id'])) { ?>hidden<?php  } ?>">
		<div class="panel-heading tab">
			<span class="we7-margin">关键指标详解</span>
			<a href="javascript:;" ng-class="{'active': moduleDivideType == 'bysum'}" ng-click="changeDivideType('module', 'bysum')">总访问数</a>
			<a href="javascript:;" ng-class="{'active': moduleDivideType == 'byavg'}" ng-click="changeDivideType('module', 'byavg')">平均访问数</a>
			<a href="javascript:;" ng-class="{'active': moduleDivideType == 'byhighest'}" ng-click="changeDivideType('module', 'byhighest')">最高访问数</a>
		</div>
		<div class="panel-body data-view">
			<div class="tab-bar-time clearfrix">
				<span class="we7-margin-right">时间</span>
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default" ng-class="{'active': moduleTimeType == 'today'}" ng-click="getModuleApi('module', 'today')">今日统计</button>
					<button type="button" class="btn btn-default" ng-class="{'active': moduleTimeType == 'week'}" ng-click="getModuleApi('module', 'week')">周统计</button>
					<button type="button" class="btn btn-default" ng-class="{'active': moduleTimeType == 'month'}" ng-click="getModuleApi('module', 'month')">月统计</button>
					<div class="btn-group" role="group">
						<button class="btn btn-default daterange daterange-date" we7-date-range-picker ng-model="moduleDateRange"><span>{{moduleDateRange.startDate}} </span>至<span> {{moduleDateRange.endDate}}</span> <i class="fa fa-calendar"></i></button>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div id="chart-horizontal-bar" style="height:1000px"></div>
			</div>
			<div class="col-sm-12">
				<?php  if(user_is_founder($_W['uid']) && !user_is_vice_founder()) { ?>
				<div class="we7-margin-vertical text-right">
					<a href="javascript:;" class="color-default" ng-click="changeStatus()">
						解决访问统计没数据的方法 <span class="wi wi-angle-up"></span>
					</a>
				</div>
				<div class="distribution-steps" ng-show = "show==true">
					<div class="steps-container">
						<div>
							<div class="num">1</div>
							<div class="title">
								<span class="wi wi-warning-sign"></span>应用没有统计数据
							</div>
							<div class="content">
								没有应用的统计数据，是因为模块内没有统计数据的代码，需要复制第2步的代码到对应的模块内。然后联系应用模块开发者更新提交代码，完成后即可生成统计数据。
							</div>
						</div>
						<div>
							<div class="num">2</div>
							<div class="title">
								<span class="wi wi-code"></span>复制代码
							</div>
							<div class="content">
								<textarea class="form-control code-container we7-margin-bottom-sm" ng-model="code">
								</textarea>
								<div><a href="javascript:;" id="copy-1" class="btn btn-primary" clipboard supported="supported" text="code"
									 on-copied="success(1);">复制代码</a></div>
							</div>
						</div>
						<div>
							<div class="num">3</div>
							<div class="title">
								<span class="wi wi-help"></span>联系开发者
							</div>
							<div class="content">
								找到没有统计数据的应用，联系<span class="color-default">应用模块的开发者</span>，让开发者将代码更新提交后，则可生成模块的统计数据。
							</div>
						</div>
					</div>
				</div>
				<?php  } ?>

			</div>
		</div>
	</div>
</div>
<script>
require(['daterangepicker'], function() {
	angular.module('statisticsApp').value('config', {
	    'frame': "<?php echo FRAME;?>",
		'links': {
			'accountApi': "<?php  echo url('statistics/app/get_account_api')?>",
			'moduleApi': "<?php  echo url('statistics/app/get_module_api')?>",
		},
	});
	angular.bootstrap($('#js-statistics-app-display'), ['statisticsApp']);
})
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>