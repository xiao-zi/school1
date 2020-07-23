<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<!-- <ul class="we7-page-tab">
	<li><a href="<?php  echo url('utility/job/display');?>">任务列表</a></li>
</ul> -->
<div class="clearfix" ng-controller="we7job-base-controller" id="we7job">

	<div class="pull-right we7-margin-bottom" >
		<a class="btn btn-primary" href="<?php  echo url('system/job/clear')?>">清除已完成任务</a>
	</div>

	<table class="table we7-table table-hover">
		<tr>
			<th>任务ID</th>
			<th>任务名称</th>
			<th>任务进度</th>
			<th>操作</th>
		</tr>

		<tr ng-repeat="$item in list">
			<td>{{$item.id}}</td>
			<td>{{$item.title}}</td>
			<td>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$item.progress}}%;">
						{{$item.progress}}%
					</div>
				</div>
			</td>
			<td>
				<a type="button" class="button btn-primary" ng-click="start($item)">
					<span ng-if="$item.status == 0">{{!$item.start ? '开始' : '暂停'}}</span>
					<span ng-if="$item.status == 1">完成</span>
				</a>
			</td>
		</tr>

	</table>
	<div class="text-right">
		<?php  echo $pager;?>
	</div>
</div>
<script type="text/javascript">
	angular.module('we7job').value('config',{
		"list": <?php  echo json_encode($list)?>,
		"jobid" : '<?php  echo $jobid;?>',
	});
	angular.bootstrap('#we7job', ['we7job']);
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
