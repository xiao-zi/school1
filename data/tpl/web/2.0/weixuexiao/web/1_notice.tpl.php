<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
 <style>
.cLine {overflow: hidden;padding: 5px 0;color:#000000;}
.bt_wenzi{font-weight:bold;color:#000010;}
.alert {padding: 8px 35px 0 10px;text-shadow: none;-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);background-color: #f9edbe;border: 1px solid #f0c36d;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;color: #333333;margin-top: 5px;}
.alert p {margin: 0 0 10px;display: block;}
.alert .bold{font-weight:bold;}
.btwen_text1 {font-family: "微软雅黑";height: 66px;width: 608px;margin-bottom: 15px;}
 </style>
<link rel="stylesheet" type="text/css" href="<?php echo MODULE_URL;?>public/web/css/main.css"/>
<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
<div class="cLine">
    <div class="alert">
    <p><span class="bold">说明：</span>
   请慎用群发功能<br/>
   <strong><font color='red'>特别提醒: 群发功能带有广告信息会导致帐号停用</font></strong>
    </p>
    </div>
</div>
<?php  if($operation == 'display') { ?>	
<!--导航-->
<div class="panel panel-info">
	<div class="panel-body">
		<ul class="nav nav-tabs">
			<li class="qx_1201 <?php  if(($_GPC['op'] == 'display')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display', 'schoolid' => $schoolid))?>">班级通知</a>
			</li >
			<li class="qx_1211 <?php  if(($_GPC['op'] == 'display1')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display1', 'schoolid' => $schoolid))?>">校园群发</a>
			</li >
			<li class="qx_1221 <?php  if(($_GPC['op'] == 'display2')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display2', 'schoolid' => $schoolid))?>">作业管理</a>
			</li>
			<li class="qx_1231 <?php  if(($_GPC['op'] == 'display3')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display3', 'schoolid' => $schoolid))?>">请假管理</a>
			</li>
			<li class="qx_1241 <?php  if(($_GPC['op'] == 'display4')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display4', 'schoolid' => $schoolid))?>">留言</a>
			</li>
		</ul>
		<!--按钮-->
		<div class="form-group">
			<a class="btn btn-primary btn-sm qx_1202" href="<?php  echo $this->createWebUrl('notice', array('op' => 'post', 'type' =>1, 'schoolid' => $schoolid))?>">发布通知</a>
			<div class="form-group inline-form" style="display: inline-block;">
				<form accept-charset="UTF-8" action="./index.php" class="form-inline" id="diandanbao/table_search" method="get" role="form">
					<div style="margin:0;padding:0;display:inline">
					<input name="utf8" type="hidden" value="?"></div>
					<input type="hidden" name="c" value="site" />
					<input type="hidden" name="a" value="entry" />
					<input type="hidden" name="m" value="weixuexiao" />
					<input type="hidden" name="do" value="notice" />
					<input type="hidden" name="op" value="display" />
					<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
					<div class="form-group">
						<label class="sr-only" for="q_name">标题(标题关键字)</label>
						<input class="form-control" id="keyword" name="keyword" placeholder="标题(标题关键字)" type="search">
					</div>
					 <div class="form-group">
						<label class="sr-only" for="q_name"><?php  if($schooltype) { ?>按课程<?php  } else { ?>按班级<?php  } ?></label>
							<select style="margin-right:15px;" name="bj_id" class="form-control">
								<option value="">请选择班级搜索</option>
								<?php  if($schooltype) { ?>
									<?php  if(is_array($kclist)) { foreach($kclist as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $_GPC['bj_id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
									<?php  } } ?>
								<?php  } else { ?>
									<?php  if(is_array($bjlist)) { foreach($bjlist as $row) { ?>
									<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $_GPC['bj_id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
									<?php  } } ?>
								<?php  } ?>
							</select>									
					</div>
					<input class="btn btn-sm btn-success" name="commit" type="submit" value="搜索">					
				</form>
			</div>
			<a class="btn btn-danger btn-sm qx_1204" href="<?php  echo $this->createWebUrl('notice', array('op' => 'clearall','schoolid' => $schoolid))?>"><i class="fa fa-trash-o"></i>&nbsp;清理无效阅读记录</a>
		</div>
	</div>
</div>
 <!--显示列表-->
<div class="panel panel-default">
	<div class="table-responsive panel-body">
		<table class="table">
			<thead>
				<tr>
					<th class='with-checkbox' style="width: 3%;"><input type="checkbox" class="check_all" /></th>
					<th style="width:60px">发自</th>
					<th style="width:200px;">标题</th>
					<!--<th style="width:500px;">摘要</th>-->
					<th style="width:80px;">是否有图</th>
					<th style="width:180px;">发布时间</th>
					<th style="width:100px;">班级</th>
					<!-- <th style="width:100px;">科目</th> -->
					<th style="width:100px;">老师</th>
					<th style="width:150px; text-align:right;">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $item) { ?>
				<tr>
					<td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $item['id'];?>"></td>
					<td>
					<?php  if($item['ismobile'] == 1) { ?>
						<span class="label label-info"><i class="fa fa-desktop"></i></span>
					<?php  } else { ?>
						<span class="label label-success"><i class="fa fa-weixin"></i></span>
					<?php  } ?>	
					</td>
					<td>
						<a onclick="gotodetail('<?php  echo $this->createWebUrl('notice', array('op' => 'postb', 'id' => $item['id'], 'schoolid' => $schoolid))?>');"><?php  echo $item['title'];?></a>
					</td>
					<!--<td style="overflow:hidden;">
						<span class="label label-success"><i class="fa fa-rss"></i></span>&nbsp;<?php  if(!empty($item['outurl'])) { ?><span class="label label-info">外部链接</span><?php  } else { ?><?php  echo htmlspecialchars_decode(mb_substr($item['content'],0,100,'utf-8'))?><?php  } ?>
					</td>-->
					<td>
					<?php  $picarr = iunserializer($item['picarr']);?>
						<?php  if(!empty($picarr['p1'])) { ?><span class="label label-success">有</span><?php  } else { ?>
						<span class="label label-danger">无</span><?php  } ?>
					</td>					
					<td>
						<span class="label label-success"><?php  echo date('Y-m-d H:m:s',$item['createtime'])?></span>
					</td>
					<td>
						<?php  echo $item['bjname'];?>	
					</td>
<!-- 					<td>
						<?php  echo $item['kmname'];?>
					</td> -->
					<td>
						<?php  if(empty($item['tname'])) { ?><span class="label label-success"><i class="fa fa-wechat"></i></span>&nbsp;无<?php  } else { ?>&nbsp;
						<span class="label label-warning"><?php  echo $item['tname'];?></span><?php  } ?>
					</td>					
					<td style="text-align:right; position:relative;">
						<a class="qx_1203" href="<?php  echo $this->createWebUrl('notice', array('op' => 'display5', 'notice_id' => $item['id'], 'schoolid' => $schoolid))?>" title="查看">发送记录</a>&nbsp;-&nbsp;
						<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'postb', 'id' => $item['id'], 'schoolid' => $schoolid))?>" title="查看">查看</a>&nbsp;-&nbsp;
						<a class="qx_1204" onclick="return confirm('此操作将删除本消息的所有阅读记录，确认删除吗？'); return false;" href="<?php  echo $this->createWebUrl('notice', array('op' => 'delete1', 'id' => $item['id'], 'schoolid' => $schoolid))?>" title="删除">删除</a>
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
			<tr>
				<td colspan="10">
					<input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
                    <input type="button" class="btn btn-primary qx_1204" name="btndeleteall" value="批量删除" />
				</td>
			</tr>			
		</table>
	</div>
</div>
<?php  echo $pager;?>
<script type="text/javascript">
    function gotodetail(url) {
        window.location.href = url;
    }
$(function(){
    $(".check_all").click(function(){
        var checked = $(this).get(0).checked;
        $("input[type=checkbox]").attr("checked",checked);
    });

    $("input[name=btndeleteall]").click(function(){
        var check = $("input[type=checkbox][class!=check_all]:checked");
        if(check.length < 1){
            alert('请选择要删除班级通知!');
            return false;
        }
        if(confirm("确认删除本通知,如删除本通知阅读记录将会删除,通知内的问题和回答记录也会被删除")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            var url = "<?php  echo $this->createWebUrl('notice', array('op' => 'deleteall','schoolid' => $schoolid))?>";
			$.post(url,{idArr:id},function(data){
					if(data.result){
					alert(data.msg);
						location.reload();
					}else{
						alert(data.msg);
					}
				},'json'
            );
        }
    });

});
</script>
<?php  } else if($operation == 'display1') { ?>
<div class="panel panel-info">
	<div class="panel-body">
		<ul class="nav nav-tabs">
			<li class="qx_1201 <?php  if(($_GPC['op'] == 'display')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display', 'schoolid' => $schoolid))?>">班级通知</a>
			</li >
			<li class="qx_1211 <?php  if(($_GPC['op'] == 'display1')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display1', 'schoolid' => $schoolid))?>">校园群发</a>
			</li >
			<li class="qx_1221 <?php  if(($_GPC['op'] == 'display2')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display2', 'schoolid' => $schoolid))?>">作业管理</a>
			</li>
			<li class="qx_1231 <?php  if(($_GPC['op'] == 'display3')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display3', 'schoolid' => $schoolid))?>">请假管理</a>
			</li>
			<li class="qx_1241 <?php  if(($_GPC['op'] == 'display4')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display4', 'schoolid' => $schoolid))?>">留言</a>
			</li>
		</ul>
		<div class="form-group">
			<a class="btn btn-primary btn-sm qx_1212" href="<?php  echo $this->createWebUrl('notice', array('op' => 'post', 'type' =>2, 'schoolid' => $schoolid))?>">创建群发</a>
			<div class="form-group inline-form" style="display: inline-block;">
				<form accept-charset="UTF-8" action="./index.php" class="form-inline" id="diandanbao/table_search" method="get" role="form">
					<div style="margin:0;padding:0;display:inline">
					<input name="utf8" type="hidden" value="?"></div>
					<input type="hidden" name="c" value="site" />
					<input type="hidden" name="a" value="entry" />
					<input type="hidden" name="m" value="weixuexiao" />
					<input type="hidden" name="do" value="notice" />
					<input type="hidden" name="op" value="display1" />
					<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
					<div class="form-group">
						<label class="sr-only" for="q_name">标题(标题关键字)</label>
						<input class="form-control" id="keyword" name="keyword" placeholder="标题(标题关键字)" type="search">
					</div>
					<div class="form-group">
						<label class="sr-only" for="q_name">按接收对象</label>
							<select style="margin-right:15px;" name="group" class="form-control">
								<option value="">请选择接受对象</option>
								<option value="1">全体师生</option>
								<option value="2">全体教员</option>
								<option value="3">家长学生</option>
								<option value="4">指定班级</option>
								<option value="5">指定学生</option>
								<option value="6">指定老师组</option>
								<option value="7">指定老师</option>
							</select>									
					</div>
					<input class="btn btn-sm btn-success" name="commit" type="submit" value="搜索">					
				</form>
			</div>
			<a class="btn btn-danger btn-sm qx_1214" href="<?php  echo $this->createWebUrl('notice', array('op' => 'clearall','schoolid' => $schoolid))?>"><i class="fa fa-trash-o"></i>&nbsp;清理无效阅读记录</a>
				
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="table-responsive panel-body">
		<table class="table">
			<thead>
				<tr>
					<th class='with-checkbox' style="width: 3%;"><input type="checkbox" class="check_all" /></th>
					<th style="width:60px">发自</th>
					<th style="width:200px;">标题</th>
					<!--<th style="width:500px;">摘要</th>-->
					<th style="width:80px;">是否有图</th>
					<th style="width:180px;">发布时间</th>
					<th style="width:100px;">接收对象</th>
					<!-- <th style="width:100px;">科目</th> -->
					<th style="width:100px;">老师</th>
					<th style="width:150px; text-align:right;">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $item) { ?>
				<tr>
					<td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $item['id'];?>"></td>
					<td>
					<?php  if($item['ismobile'] == 1) { ?>
						<span class="label label-info"><i class="fa fa-desktop"></i></span>
					<?php  } else { ?>
						<span class="label label-success"><i class="fa fa-weixin"></i></span>
					<?php  } ?>	
					</td>
					<td>
						<a onclick="gotodetail('<?php  echo $this->createWebUrl('notice', array('op' => 'postb', 'id' => $item['id'], 'schoolid' => $schoolid))?>');"><?php  echo $item['title'];?></a>
						<?php  if($item['is_research'] == 1) { ?>
						</br>
						<span class="label label-warning">调查问卷</span>
						<?php  } ?>
					</td>
					<!--<td style="overflow:hidden;">
						<span class="label label-success"><i class="fa fa-rss"></i></span>&nbsp;<?php  if(!empty($item['outurl'])) { ?><span class="label label-info">外部链接</span><?php  } else { ?><?php  echo htmlspecialchars_decode(mb_substr($item['content'],0,100,'utf-8'))?><?php  } ?>
					</td>-->
					<td>
						<?php  $picarr = iunserializer($item['picarr']);?>
						<?php  if(!empty($picarr['p1'])) { ?><span class="label label-success">有</span><?php  } else { ?>
						<span class="label label-danger">无</span><?php  } ?>
					</td>					
					<td>
						<span class="label label-success"><?php  echo date('Y-m-d H:m:s',$item['createtime'])?></span>
					</td>
					<td>
						<?php  if($item['groupid'] == 1) { ?>全体师生<?php  } else if($item['groupid'] == 2) { ?>全体教师<?php  } else if($item['groupid'] == 3) { ?>家长学生<?php  } ?>
						<?php  if($item['usertype'] == 'send_class') { ?><span class="label label-info">指定班级</span><?php  } ?>
						<?php  if($item['usertype'] == 'student') { ?><span class="label label-info">指定学生</span><?php  } ?>
						<?php  if($item['usertype'] == 'staff_jsfz') { ?><span class="label label-info">指定老师组</span><?php  } ?>
						<?php  if($item['usertype'] == 'staff') { ?><span class="label label-info">指定老师</span><?php  } ?>
					</td>
<!-- 					<td>
						<?php  echo $item['kmname'];?>
					</td> -->
					<td>
						<?php  if(empty($item['tname'])) { ?><span class="label label-success"><i class="fa fa-wechat"></i></span>&nbsp;无<?php  } else { ?>&nbsp;
						<span class="label label-warning"><?php  echo $item['tname'];?></span><?php  } ?>
					</td>					
					<td style="text-align:right; position:relative;">
						<a class="qx_1213" href="<?php  echo $this->createWebUrl('notice', array('op' => 'display5', 'notice_id' => $item['id'], 'schoolid' => $schoolid))?>" title="查看">发送记录</a>&nbsp;-&nbsp;
						<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'postb', 'id' => $item['id'], 'schoolid' => $schoolid))?>" title="查看">查看</a>&nbsp;-&nbsp;
						<a class="qx_1214" onclick="return confirm('此操作将删除本消息的所有阅读记录，确认删除吗？'); return false;" href="<?php  echo $this->createWebUrl('notice', array('op' => 'delete1', 'id' => $item['id'], 'schoolid' => $schoolid))?>" title="删除">删除</a>
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
			<tr>
				<td colspan="10">
					<input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
                    <input type="button" class="btn btn-primary qx_1214" name="btndeleteall" value="批量删除" />
				</td>
			</tr>
		</table>
	</div>
</div>
<?php  echo $pager;?>
<script type="text/javascript">
    function gotodetail(url) {
        window.location.href = url;
    }
$(function(){
    $(".check_all").click(function(){
        var checked = $(this).get(0).checked;
        $("input[type=checkbox]").attr("checked",checked);
    });

    $("input[name=btndeleteall]").click(function(){
        var check = $("input[type=checkbox][class!=check_all]:checked");
        if(check.length < 1){
            alert('请选择要内容!');
            return false;
        }
        if(confirm("删除校园通知相应的阅读记录和问答和回答记录?")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            var url = "<?php  echo $this->createWebUrl('notice', array('op' => 'deleteall','schoolid' => $schoolid))?>";
			$.post(url,{idArr:id},function(data){
					if(data.result){
					alert(data.msg);
						location.reload();
					}else{
						alert(data.msg);
					}
				},'json'
            );
        }
    });

});
</script>
<?php  } else if($operation == 'display2') { ?>
<div class="panel panel-info">
	<div class="panel-body">
		<ul class="nav nav-tabs">
			<li class="qx_1201 <?php  if(($_GPC['op'] == 'display')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display', 'schoolid' => $schoolid))?>">班级通知</a>
			</li >
			<li class="qx_1211 <?php  if(($_GPC['op'] == 'display1')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display1', 'schoolid' => $schoolid))?>">校园群发</a>
			</li >
			<li class="qx_1221 <?php  if(($_GPC['op'] == 'display2')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display2', 'schoolid' => $schoolid))?>">作业管理</a>
			</li>
			<li class="qx_1231 <?php  if(($_GPC['op'] == 'display3')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display3', 'schoolid' => $schoolid))?>">请假管理</a>
			</li>
			<li class="qx_1241 <?php  if(($_GPC['op'] == 'display4')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display4', 'schoolid' => $schoolid))?>">留言</a>
			</li>
		</ul>
		<div class="form-group">
			<a class="btn btn-primary btn-sm qx_1222" href="<?php  echo $this->createWebUrl('notice', array('op' => 'post', 'type' =>3, 'schoolid' => $schoolid))?>">发布作业</a>
			<div class="form-group inline-form" style="display: inline-block;">
				<form accept-charset="UTF-8" action="./index.php" class="form-inline" id="diandanbao/table_search" method="get" role="form">
					<div style="margin:0;padding:0;display:inline">
					<input name="utf8" type="hidden" value="?"></div>
					<input type="hidden" name="c" value="site" />
					<input type="hidden" name="a" value="entry" />
					<input type="hidden" name="m" value="weixuexiao" />
					<input type="hidden" name="do" value="notice" />
					<input type="hidden" name="op" value="display2" />
					<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
					<div class="form-group">
						<label class="sr-only" for="q_name">标题(标题关键字)</label>
						<input class="form-control" id="keyword" name="keyword" placeholder="标题(标题关键字)" type="search">
					</div>
					<?php  if($schooltype) { ?>
					<div class="form-group">
						<select style="margin-right:15px;" name="bj_id" class="form-control">
							<option value="">请选择班级搜索</option>
							<?php  if(is_array($kclist)) { foreach($kclist as $row) { ?>
							<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $_GPC['bj_id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
							<?php  } } ?>
						</select>							
					</div>
					<?php  } else { ?>
					<div class="form-group">
						<select style="margin-right:15px;" name="bj_id" class="form-control">
							<option value="">请选择班级搜索</option>
							<?php  if(is_array($bjlist)) { foreach($bjlist as $row) { ?>
							<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $_GPC['bj_id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
							<?php  } } ?>
						</select>							
					</div>
					<div class="form-group">
						<select style="margin-right:15px;" name="km_id" class="form-control">
							<option value="">请选择科目搜索</option>
							<?php  if(is_array($kmlist)) { foreach($kmlist as $row) { ?>
							<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $_GPC['km_id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
							<?php  } } ?>
						</select>						
					</div>
					<?php  } ?>
					<input class="btn btn-sm btn-success" name="commit" type="submit" value="搜索">					
				</form>
			</div>
			<a class="btn btn-danger btn-sm qx_1224" href="<?php  echo $this->createWebUrl('notice', array('op' => 'clearall','schoolid' => $schoolid))?>"><i class="fa fa-trash-o"></i>&nbsp;清理无效阅读记录</a>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="table-responsive panel-body">
		<table class="table">
			<thead>
				<tr>
					<th class='with-checkbox' style="width: 3%;"><input type="checkbox" class="check_all" /></th>
					<th style="width:60px">发自</th>
					<th style="width:200px;">标题</th>
					<!--<th style="width:500px;">摘要</th>-->
					<th style="width:80px;">是否有图</th>
					<th style="width:180px;">发布时间</th>
					<th style="width:100px;">班级</th>
					<th style="width:100px;">科目</th>
					<th style="width:100px;">老师</th>
					<th style="width:170px; text-align:right;">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $item) { ?>
				<tr>
					<td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $item['id'];?>"></td>
					<td>
					<?php  if($item['ismobile'] == 1) { ?>
						<span class="label label-info"><i class="fa fa-desktop"></i></span>
					<?php  } else { ?>
						<span class="label label-success"><i class="fa fa-weixin"></i></span>
					<?php  } ?>	
					</td>
					<td>
						<a onclick="gotodetail('<?php  echo $this->createWebUrl('notice', array('op' => 'postb', 'id' => $item['id'], 'schoolid' => $schoolid))?>');"><?php  echo $item['title'];?></a>
					</td>
					<!--<td style="overflow:hidden;">
						<span class="label label-success"><i class="fa fa-rss"></i></span>&nbsp;<?php  if(!empty($item['outurl'])) { ?><span class="label label-info">外部链接</span><?php  } else { ?><?php  echo htmlspecialchars_decode(mb_substr($item['content'],0,100,'utf-8'))?><?php  } ?>
					</td>-->
					<td>
						<?php  $picarr = iunserializer($item['picarr']);?>
						<?php  if(!empty($picarr['p1'])) { ?><span class="label label-success">有</span><?php  } else { ?>
						<span class="label label-danger">无</span><?php  } ?>
					</td>					
					<td>
						<span class="label label-success"><?php  echo date('Y-m-d H:m:s',$item['createtime'])?></span>
					</td>
					<td>
						<?php  echo $item['bjname'];?>
					</td>
					<td>
						<?php  echo $item['kmname'];?>
					</td>					
					<td>
						<?php  if(empty($item['tname'])) { ?><span class="label label-success"><i class="fa fa-wechat"></i></span>&nbsp;无<?php  } else { ?>&nbsp;
						<span class="label label-info"><?php  echo $item['tname'];?></span><?php  } ?>
					</td>					
					<td style="text-align:right; position:relative;">
						<a class="qx_1223" href="<?php  echo $this->createWebUrl('notice', array('op' => 'display5', 'notice_id' => $item['id'], 'schoolid' => $schoolid))?>" title="查看">发送记录</a>&nbsp;-&nbsp;
						<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'postb', 'id' => $item['id'], 'schoolid' => $schoolid))?>" title="查看">查看</a>&nbsp;-&nbsp;
						<a class="qx_1224" onclick="return confirm('此操作将删除本消息的所有阅读记录，确认删除吗？'); return false;" href="<?php  echo $this->createWebUrl('notice', array('op' => 'delete1', 'id' => $item['id'], 'schoolid' => $schoolid))?>" title="删除">删除</a>
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
			<tr>
				<td colspan="10">
					<input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
                    <input type="button" class="btn btn-primary qx_1224" name="btndeleteall" value="批量删除" />
				</td>
			</tr>			
		</table>
	</div>
</div>
<?php  echo $pager;?>
<script type="text/javascript">
$(function(){
    $(".check_all").click(function(){
        var checked = $(this).get(0).checked;
        $("input[type=checkbox]").attr("checked",checked);
    });

    $("input[name=btndeleteall]").click(function(){
        var check = $("input[type=checkbox][class!=check_all]:checked");
        if(check.length < 1){
            alert('请选择要作业通知!');
            return false;
        }
        if(confirm("删除作业通知会删除相应的阅读记录和作业题目和回答记录?")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            var url = "<?php  echo $this->createWebUrl('notice', array('op' => 'deleteall','schoolid' => $schoolid))?>";
			$.post(url,{idArr:id},function(data){
					if(data.result){
					alert(data.msg);
						location.reload();
					}else{
						alert(data.msg);
					}
				},'json'
            );
        }
    });

});


function gotodetail(url) {
    window.location.href = url;
}

</script>
<?php  } else if($operation == 'display3') { ?>
<div class="panel panel-info">
	<div class="panel-body">
		<ul class="nav nav-tabs">
			<li class="qx_1201 <?php  if(($_GPC['op'] == 'display')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display', 'schoolid' => $schoolid))?>">班级通知</a>
			</li >
			<li class="qx_1211 <?php  if(($_GPC['op'] == 'display1')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display1', 'schoolid' => $schoolid))?>">校园群发</a>
			</li >
			<li class="qx_1221 <?php  if(($_GPC['op'] == 'display2')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display2', 'schoolid' => $schoolid))?>">作业管理</a>
			</li>
			<li class="qx_1231 <?php  if(($_GPC['op'] == 'display3')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display3', 'schoolid' => $schoolid))?>">请假管理</a>
			</li>
			<li class="qx_1241 <?php  if(($_GPC['op'] == 'display4')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display4', 'schoolid' => $schoolid))?>">留言</a>
			</li>
		</ul>
		<div class="form-group">
			<div class="form-group inline-form" style="display: inline-block;">
				<form accept-charset="UTF-8" action="./index.php" class="form-horizontal" id="table_search" method="get" role="form">
					<div style="margin:0;padding:0;display:inline">
					<input name="utf8" type="hidden" value="?"></div>
					<input type="hidden" name="c" value="site" />
					<input type="hidden" name="a" value="entry" />
					<input type="hidden" name="m" value="weixuexiao" />
					<input type="hidden" name="do" value="notice" />
					<input type="hidden" id="out_excel" name="out_excel" value="No" />
					<input type="hidden" id="out_excel_allTea" name="out_excel_allTea" value="No" />
					<input type="hidden" name="op" value="display3" />
					<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
					<div class="form-group">
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="width: 100px;padding-left: 20px;">按班级</label>
						<div class="col-sm-2 col-lg-2" style="width:240px">
							<select name="bj_id" class="form-control" style="margin-right:15px;">
								<option value="">不限</option>
								<?php  if(is_array($bjlist)) { foreach($bjlist as $row) { ?>
								<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $_GPC['bj_id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
							</select>							
						</div>
					
                    	<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="width: 100px;padding-left: 20px;">按事由</label>
						<div class="col-sm-2 col-lg-2" style="width:240px">
							<select  name="leixing" class="form-control" style="margin-right:15px;">
								<option value="">不限</option>
								<option value="事假" <?php  if($_GPC['leixing'] == "事假") { ?> selected="selected" <?php  } ?>>事假</option>
								<option value="病假" <?php  if($_GPC['leixing'] == "病假") { ?> selected="selected" <?php  } ?>>病假</option>
								<?php  if(is_showpf()) { ?>
								<option value="公差" <?php  if($_GPC['leixing'] == "公差") { ?> selected="selected" <?php  } ?>>公差</option>
								<?php  } ?>
								<option value="其他" <?php  if($_GPC['leixing'] =="其他" ) { ?> selected="selected" <?php  } ?>>其他</option>
							</select>	
						</div>	
					</div>	
					
					<div class="form-group">	
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="width: 100px;padding-left: 20px;">按处理</label>
						<div class="col-sm-2 col-lg-2" style="width:240px">
							<select name="chuli" class="form-control" style="margin-right:15px;">
								<option value="">不限</option>
								<option value="0" <?php  if($_GPC['chuli'] == 0) { ?> selected="selected" <?php  } ?>>未处理</option>
								<option value="1" <?php  if($_GPC['chuli'] == 1) { ?> selected="selected" <?php  } ?>>批准</option>
								<option value="2" <?php  if($_GPC['chuli'] ==2 ) { ?> selected="selected" <?php  } ?>>拒绝</option>
							</select>						
						</div>
						
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="width: 100px;padding-left: 20px;">老师或学生</label>
						<div class="col-sm-2 col-lg-2" style="width:240px">
							<select  name="fenlei" class="form-control" style="margin-right:15px;">
								<option value="">不限</option>
								<option value="1" <?php  if($_GPC['fenlei'] == 1) { ?> selected="selected" <?php  } ?>>教师请假</option>
								<option value="2" <?php  if($_GPC['fenlei'] == 2) { ?> selected="selected" <?php  } ?>>学生请假</option>
							</select>						
						</div>
					</div>
					
					<p></p>
					<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="width: 100px;padding-left: 20px;">创建时间</label>
					<div class="col-sm-2 col-lg-2" style="width:auto">
						<?php  echo tpl_form_field_daterange('createtime', array('start' => date('Y-m-d', $starttime), 'end' => date('Y-m-d', $endtime)));?>
					</div>
					<div class="col-sm-2 col-lg-2" style="margin-left:50px">
						<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
					</div>	
					<div class="col-sm-2 col-lg-2">						
						<a class="btn btn-success " onclick="GetOut();" ><i class="fa fa-qrcode">&nbsp;&nbsp;当前条件导出请假</i></a>
                    </div>
					<?php  if(is_showpf()) { ?>
					<div class="col-sm-2 col-lg-2" style="margin-left:80px">						
						<a class="btn btn-primary " onclick="$('#down_alltea').slideToggle()"><i class="fa fa-qrcode">&nbsp;&nbsp;导出教师请假汇总</i></a>
                    </div>
					<?php  } ?>
				</div>				
				</form>
			</div>
		</div>
	</div>
</div>

<div class="panel panel-default" id="down_alltea" style="display:none;">
	<div class="panel-body">
		<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
					<input type="hidden" name="c" value="site" />
					<input type="hidden" name="a" value="entry" />
					<input type="hidden" name="m" value="weixuexiao" />
					<input type="hidden" name="do" value="notice" />
					<input type="hidden" id="out_excel_allTea" name="out_excel_allTea" value="Yes" />
					<input type="hidden" name="op" value="display3" />
					<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="width: 100px;padding-left: 20px;">创建时间</label>
				<div class="col-sm-2 col-lg-2" style="width:auto">
					<?php  echo tpl_form_field_daterange('out_all_createtime', array('start' => date('Y-m-d', $out_all_starttime), 'end' => date('Y-m-d', $out_all_endtime)));?>
				</div>
				<div class="col-sm-2 col-lg-2" style="margin-left:80px">						
					<button class="btn btn-success" ><i class="fa fa-download">&nbsp;&nbsp;导出</i></button>
				</div>
			</div>
		</form>
	</div>
</div>


<div class="panel panel-default">
	<div class="table-responsive panel-body">
		<table class="table">
			<thead>
				
				<tr>
					<th style="width:60px">系统id</th>
					<th style="width:80px;">请假人</th>
					<th style="width:350px;">理由</th>
					<?php  if((is_showpf() && $_GPC['fenlei'] == 1)) { ?>
					<th style="width:80px;">时间类别</th>
					<th style="width:100px;">节数/天数</th>
					<?php  } ?>
					<th style="width:240px;">请假时间</th>
					<th style="width:80px;">审核状态</th>
					<th style="width:180px;">处理时间</th>
					<th style="width:100px;">班级</th>
					<th style="width:60px;">类型</th>
					<?php  if((is_showgkk() || is_showpf())) { ?>
					<th style="width:60px;">调课类型</th>
					<?php  } ?>
					
					<th style="width:60px;">请假人类型</th>
					<?php  if(!(is_showpf() && $_GPC['fenlei'] == 1)) { ?>
					<th style="width:60px;">申请人</th>
					<?php  } ?>
					<th class="qx_e_d" style="width:130px; text-align:right;">操作</th>
				</tr>
				
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $item) { ?>
				<tr>
					<td><span><?php  echo $item['id'];?></span></td>
					<td>
						<span class="label label-info"><?php  if(empty($item['tid'])) { ?><?php  echo $item['s_name'];?><?php  } else if(empty($item['sid'])) { ?><?php  echo $item['tname'];?><?php  } ?></span>
					</td>
					<td style="overflow:hidden;">
						<span class="label label-success"><i class="fa fa-rss"></i></span>&nbsp;<?php  echo $item['conet'];?>
					</td>
					<?php  if((is_showpf() && $_GPC['fenlei'] == 1)) { ?>
					<td style="overflow:hidden;">
						
						<?php  if($item['more_less'] == 1) { ?>
						<span class="label label-danger">一天内</span>
						<?php  } else if($item['more_less'] == 2) { ?>
						<span class="label label-info">一天以上</span>
						<?php  } ?>
					</td>
					<td style="overflow:hidden;">
						
						<?php  if($item['more_less'] == 1) { ?>
						<span class="label label-danger"><?php  echo $item['this_nums'];?>节</span>
						<?php  } else if($item['more_less'] == 2) { ?>
						<span class="label label-info"><?php  echo $item['this_nums'];?>天</span>
						<?php  } ?>
					</td>
					<?php  } ?>
					
					
					
					
					
					<td style="overflow:hidden;">
						<?php  if(!$item['startime1']) { ?><?php  echo $item['startime'];?>至<?php  echo $item['endtime'];?><?php  } else { ?><?php  echo date('Y-m-d',$item['startime1'])?> 至 <?php  echo date('Y-m-d',$item['endtime1'])?><?php  } ?>
					</td>					
					<td>
						<?php  if($item['status'] == 1) { ?><span class="label label-success">通过</span><?php  } else if($item['status'] == 2) { ?>
						<span class="label label-danger">拒绝</span><?php  } else if($item['status'] == 0) { ?><span class="label label-info">未处理</span><?php  } else if($item['status'] == 3) { ?><span class="label label-warning">处理中</span><?php  } ?>
					</td>					
					<td>
						<?php  if(!empty($item['cltime'])) { ?><span class="label label-success"><?php  echo date('Y-m-d H:m:s',$item['cltime'])?></span><?php  } ?>
					</td>
					<td>
						<?php  echo $item['bjname'];?>
					</td>
					<td>
						<?php  if($item['type'] == '病假') { ?><span class="label label-danger">病假</span>
						<?php  } else if($item['type'] == '事假') { ?><span class="label label-info">事假</span>
						<?php  } else if($item['type'] == '公差') { ?><span class="label label-primary">公差</span>
						<?php  } else if($item['type'] == '其他') { ?><span class="label label-warning">其他</span>
						<?php  } ?>
					</td>
					<?php  if((is_showgkk() || is_showpf())) { ?>
					<td>
						<?php  if($item['tktype'] == '0') { ?><span class="label label-danger">无课</span>
						<?php  } else if($item['tktype'] == '1') { ?><span class="label label-info">自主调课</span>
						<?php  } else if($item['tktype'] == '2') { ?><span class="label label-warning">教务处调课</span>
						<?php  } ?>
					</td>
					<?php  } ?>	
								
					<td>
						<?php  if(empty($item['sid'])) { ?><span class="label label-success">教师</span>
						<?php  } else { ?>
						<span class="label label-info">学生</span>
						<?php  } ?>
					</td>
					<?php  if(!(is_showpf() && $_GPC['fenlei'] == 1)) { ?>
					<td>
						<?php  if(!empty($item['guanxi'])) { ?>
						<?php  if($item['guanxi'] == 2) { ?>
						<span class="label label-warning">母亲</span>
						<?php  } else if($item['guanxi'] == 3) { ?>
						<span class="label label-info">父亲</span>
						<?php  } else if($item['guanxi'] == 4) { ?>
						<span class="label label-danger">本人</span>
						<?php  } ?>
						<?php  } ?>
					</td>
					<?php  } ?>					
					<td class="qx_e_d" style="text-align:right; position:relative;">
					<?php  if(empty($item['status'])) { ?>
					<?php  if(empty($item['sid'])) { ?>
						<a class="qx_1232" onclick="return confirm('将以校长身份发送至请假人,确认批准该请假申请？'); return false;" href="<?php  echo $this->createWebUrl('notice', array('op' => 'shenhe', 'fenlei' => 1, 'status' => 1, 'id' => $item['id'], 'schoolid' => $schoolid))?>" title="批准">批准</a>&nbsp;
						<a class="qx_1232" onclick="return confirm('将以校长身份发送至请假人,确认批拒绝请假申请？'); return false;" href="<?php  echo $this->createWebUrl('notice', array('op' => 'shenhe', 'fenlei' => 1, 'status' => 2, 'id' => $item['id'], 'schoolid' => $schoolid))?>" title="拒绝">拒绝</a>
					<?php  } else { ?>
						<a class="qx_1232" onclick="return confirm('将以班主任身份发送至请假人,确认批准该请假申请？'); return false;" href="<?php  echo $this->createWebUrl('notice', array('op' => 'shenhe', 'fenlei' => 2, 'status' => 1, 'id' => $item['id'], 'schoolid' => $schoolid))?>" title="批准">批准</a>&nbsp;
						<a class="qx_1232" onclick="return confirm('将以班主任身份发送至请假人,确认批拒绝请假申请？'); return false;" href="<?php  echo $this->createWebUrl('notice', array('op' => 'shenhe', 'fenlei' => 2, 'status' => 2, 'id' => $item['id'], 'schoolid' => $schoolid))?>" title="拒绝">拒绝</a>
					<?php  } ?>
					<?php  } ?>					
						&nbsp;<a class="qx_1233" onclick="return confirm('此操作不可恢复，确认吗？'); return false;" href="<?php  echo $this->createWebUrl('notice', array('op' => 'delete2', 'id' => $item['id'], 'schoolid' => $schoolid))?>" title="删除">删除</a>
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
	function GetOut(){
		$("#out_excel").val("Yes");
		document.forms.table_search.submit();
		$("#out_excel").val("No");
	};
	

	
	
</script>
<?php  echo $pager;?>
<?php  } else if($operation == 'display4') { ?>
<div class="panel panel-info">
	<div class="panel-body">
		<ul class="nav nav-tabs">
			<li class="qx_1201 <?php  if(($_GPC['op'] == 'display')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display', 'schoolid' => $schoolid))?>">班级通知</a>
			</li >
			<li class="qx_1211 <?php  if(($_GPC['op'] == 'display1')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display1', 'schoolid' => $schoolid))?>">校园群发</a>
			</li >
			<li class="qx_1221 <?php  if(($_GPC['op'] == 'display2')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display2', 'schoolid' => $schoolid))?>">作业管理</a>
			</li>
			<li class="qx_1231 <?php  if(($_GPC['op'] == 'display3')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display3', 'schoolid' => $schoolid))?>">请假管理</a>
			</li>
			<li class="qx_1241 <?php  if(($_GPC['op'] == 'display4')) { ?>active<?php  } ?>">
				<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'display4', 'schoolid' => $schoolid))?>">留言</a>
			</li>
		</ul>
		<div class="form-group">
			<div class="form-group inline-form" style="display: inline-block;">
				<form accept-charset="UTF-8" action="./index.php" class="form-inline" id="diandanbao/table_search" method="get" role="form">
					<div style="margin:0;padding:0;display:inline">
					<input name="utf8" type="hidden" value="?"></div>
					<input type="hidden" name="c" value="site" />
					<input type="hidden" name="a" value="entry" />
					<input type="hidden" name="m" value="weixuexiao" />
					<input type="hidden" name="do" value="notice" />
					<input type="hidden" name="op" value="display4" />
					<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
<!-- 					<div class="form-group">
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 110px;">按班级</label>
						<div class="col-sm-2 col-lg-2">
							<select style="margin-right:15px;" name="bj_id" class="form-control">
								<option value="">请选择班级搜索</option>
								<?php  if(is_array($bjlist)) { foreach($bjlist as $row) { ?>
								<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $_GPC['bj_id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
								<?php  } } ?>
							</select>
						</div>
					</div>
					<input class="btn btn-sm btn-success" name="commit" type="submit" value="搜索">	 -->
				</form>
			</div>
		</div>
	</div>
</div>
<div class="panel panel-default" >
	<div class="table-responsive panel-body">
		<div id="queue-setting-index-body">
			<div class="viewList" >
			<?php  if(is_array($leave)) { foreach($leave as $row) { ?>	
				<div class="viewBox" style="width:350px;background-color:#F5EFEF;border-top-left-radius: 3%;border-top-right-radius: 3%;border-bottom-left-radius: 3%;border-bottom-right-radius: 3%;">
					<a class="btn btn-default btn-sm qx_1242" style="background-color:#F5EFEF;position: relative;top:-15px;right:-325px;width:23px;height:23px;border-radius:50%;" href="<?php  echo $this->createWebUrl('notice', array('id' => $row['id'], 'op' => 'deletely', 'schoolid' => $schoolid))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" title="删除"><i class="fa fa-times" style="top: -4px;right: 4px;position: relative;"></i></a>
					<div class="content" style="border-bottom:1px solid #c6c6c6;">
							<a class="lightgray" >
								<span class="label label-warning"><?php  echo $row['tname'];?><?php  echo $row['s_name'];?></span>&nbsp;
								对话 <?php  echo $row['tname1'];?><?php  echo $row['s_name1'];?></a>
								<?php  if(!empty($row['guanxi'])) { ?>
									<?php  if($row['guanxi'] == 2) { ?>
									<span class="label label-warning">母亲</span>
									<?php  } else if($row['guanxi'] == 3) { ?>
									<span class="label label-info">父亲</span>
									<?php  } else if($row['guanxi'] == 4) { ?>
									<span class="label label-danger">本人</span>
									<?php  } ?>
								<?php  } ?>

<!-- 							<a style="float: right;" href="<?php  echo $this->createWebUrl('notice', array('op' => 'posta', 'schoolid' => $schoolid, 'leaveid' => $row['id']))?>"><button type="button" class="btn btn-sm btn-info">查看详情</button></a> -->
					</div>
					<?php  if(is_array($row['huifu'])) { foreach($row['huifu'] as $row1) { ?>
					</br>
					<div class="nameAndTime" width="100%" height="100%" border="1" style="border-bottom:1px solid #c6c6c6;">
						<?php  if($row1['userid'] == $row['userid']) { ?><span class="label label-success" style="float:left"><?php  echo $row['tname'];?><?php  echo $row['s_name'];?></span><?php  } else { ?><span class="label label-info" style="float:left"><?php  echo $row['tname1'];?><?php  echo $row['s_name1'];?></span><?php  } ?>
						<span class="name" style="width: 200px;">&nbsp;<?php  echo $row1['conet'];?></span>
						<span name="publishdate" class="time"><?php  echo date('m-d H:m', $row1['createtime'])?></span>						
					</div>
					<?php  } } ?>
				</div>
			<?php  } } ?>
			</div>
		</div>
	</div>
</div>
<?php  echo $pager;?>
<?php  } else if($operation == 'display5') { ?>
<div class="panel panel-info">
	<div class="panel-heading"><a class="btn btn-primary" href="<?php  echo $this->createWebUrl('notice', array('op' => 'display', 'schoolid' => $schoolid))?>"><i class="fa fa-tasks"></i>返回列表</a></div>
</div>
    <div class="panel panel-info">
        <div class="panel-heading">记录发送列表-------------------标题：【<?php  echo $notice['title'];?>】</div>
		<div class="panel-body">
			<form action="./index.php" method="get" class="form-horizontal" role="form">
				<input type="hidden" name="c" value="site">
				<input type="hidden" name="a" value="entry">
				<input type="hidden" name="m" value="weixuexiao">
				<input type="hidden" name="do" value="notice"/>
				<input type="hidden" name="op" value="display5"/>
				<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
				<input type="hidden" name="notice_id" value="<?php  echo $notice_id;?>" />
				<input type="hidden" name="is_pay" value="<?php  echo $_GPC['is_pay'];?>"/>
				<input type="hidden" name="shenfen" value="<?php  echo $_GPC['shenfen'];?>"/>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-1 control-label">阅读状态</label>
					<div class="col-sm-9 col-xs-9 col-md-9">
						<div class="btn-group">
							<a href="<?php  echo $this->createWebUrl('notice', array('notice_id' => $notice_id, 'op' => 'display5', 'is_pay' => '-1', 'schoolid' => $schoolid))?>" class="btn <?php  if($is_pay == -1) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">不限</a>
							<a href="<?php  echo $this->createWebUrl('notice', array('notice_id' => $notice_id, 'op' => 'display5', 'is_pay' => '1', 'schoolid' => $schoolid))?>" class="btn <?php  if($is_pay == 1) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">未读</a>
							<a href="<?php  echo $this->createWebUrl('notice', array('notice_id' => $notice_id, 'op' => 'display5', 'is_pay' => '2', 'schoolid' => $schoolid))?>" class="btn <?php  if($is_pay == 2) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">已读</a>
							<a class="btn btn-danger" href="<?php  echo $this->createWebUrl('notice', array('op' => 'clear', 'schoolid' => $schoolid))?>"><i class="fa fa-trash-o"></i> 清除垃圾信息</a>
						</div>
					</div>
				</div>
				<div class="form-group clearfix">
					<label class="col-xs-12 col-sm-3 col-md-1 control-label">按条件</label>
					<div class="col-sm-2 col-lg-2">
					<select style="margin-right:15px;" name="shenfen" class="form-control">
						<option value="0">按身份搜索</option>						
						<option value="1" <?php  if($_GPC['shenfen'] == 1) { ?> selected="selected"<?php  } ?>>老&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;师</option>
						<option value="2" <?php  if($_GPC['shenfen'] == 2) { ?> selected="selected"<?php  } ?>>家长学生</option>
					</select>
					</div>
					<div class="col-xs-12 col-sm-2 col-md-1 col-lg-1">
						<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
					</div>					
				</div>
			</form>
		</div>		
    </div>
<div class="panel panel-default">
	<div class="table-responsive panel-body">
		<table class="table">
			<thead>
				<tr>
					<th class='with-checkbox' style="width: 3%;"><input type="checkbox" class="check_all" /></th>
					<th style="width:10%">接收人</th>
					<th style="width:5%;">状态</th>
					<th style="width:10%;">阅读时间</th>
					<th style="width:10%;">发布时间</th>
					<!--th style="width:150px; text-align:right;">操作</th-->
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $item) { ?>
				<tr>
					<td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $item['id'];?>"></td>
					<td>
					<?php  if(!empty($item['sid'])) { ?>
						<?php  if($item['guanxi'] == 2) { ?>
							<span class="label label-success"><i class="fa fa-users"></i></span>【<?php  echo $item['s_name'];?>】母亲
						<?php  } else if($item['guanxi'] == 3) { ?>
							<span class="label label-success"><i class="fa fa-users"></i></span>【<?php  echo $item['s_name'];?>】父亲
						<?php  } else if($item['guanxi'] == 4) { ?>
							<span class="label label-success"><i class="fa fa-users"></i></span>【<?php  echo $item['s_name'];?>】
						<?php  } else if($item['guanxi'] == 5) { ?>
							<span class="label label-success"><i class="fa fa-users"></i></span>【<?php  echo $item['s_name'];?>】家长
						<?php  } ?>
					<?php  } else { ?>
						<span class="label label-success"><i class="fa fa-user"></i></span>【<?php  echo $item['tname'];?>】老师
					<?php  } ?>
					</td>					
					<td>
						<span class="label label-success">已送达</span>
					</td>
					<td>
						<?php  if(!empty($item['readtime'])) { ?><span class="label label-success"><?php  echo date('Y-m-d H:m:s',$item['readtime'])?></span><?php  } else { ?><span class="label label-danger">未读</span><?php  } ?>
					</td>					
					<td>
						<span class="label label-success"><?php  echo date('Y-m-d H:m:s',$item['createtime'])?></span>
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
		</table>
			<tr>
				<td colspan="10">
					<input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
                    <input type="button" class="btn btn-primary" name="btndeleteall" value="批量删除" />
				</td>
			</tr>		
	</div>
</div>
<?php  echo $pager;?>
<script type="text/javascript">
$(function(){
    $(".check_all").click(function(){
        var checked = $(this).get(0).checked;
        $("input[type=checkbox]").attr("checked",checked);
    });

    $("input[name=btndeleteall]").click(function(){
        var check = $("input[type=checkbox][class!=check_all]:checked");
        if(check.length < 1){
            alert('请选择要删除的内容!');
            return false;
        }
        if(confirm("确认要删除选择的内容?")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            var url = "<?php  echo $this->createWebUrl('notice', array('op' => 'deleteallrecord','schoolid' => $schoolid))?>";
            $.post(
                url,
                {idArr:id},
                function(data){
                    if(data.result){
					    alert(data.msg);
                        location.reload();
                    }else{
                        alert(data.msg);
                    }
                },'json'
            );
        }
    });

});
</script>
<?php  } else if($operation == 'posta') { ?>
<div class="panel panel-info">
	<div class="panel-heading"><a class="btn btn-primary" href="<?php  echo $this->createWebUrl('notice', array('op' => 'display4', 'schoolid' => $schoolid))?>"><i class="fa fa-tasks"></i>返回对话列表</a></div>
</div>
<div class="main">
	<div class="panel panel-default">
        <div class="table-responsive panel-body">
			<div id="queue-setting-index-body">
				<div class="panel panel-default">
					<div class="panel-heading">对话详情</div>
				</div>
				<div class="uploadList">
					<div class="" style="border-bottom: 1px solid #dbe1e8;">
						<div class="">
							<label class="control-label" style="float: left;width: 25%;"><?php  echo $student['s_name'];?><?php  if($user['pard'] == 2) { ?>
									<span class="label label-warning">母亲</span>
									<?php  } else if($user['pard'] == 3) { ?>
									<span class="label label-info">父亲</span>
									<?php  } else if($user['pard'] == 4) { ?>
									<span class="label label-danger">本人</span>
									<?php  } ?></label>
							<span class="help-block">班级：<span style="color:red"><?php  echo $bj['sname'];?></span></span>							
							<span class="help-block">班主任：<span style="color:red"><?php  echo $teacher['tname'];?></span></span>							
						</div>
					</div>
				</div>
				<div class="" style="">
					<div style="margin:10px">
						<img alt="" src="<?php echo MODULE_URL;?>public/web/recipe/liked.png" />
						<span style="margin:10px;"><?php  echo $total;?>条留言</span>
					</div>
				</div>
				<div class="" style="border-bottom: 1px solid #dbe1e8;">
					<div class="row">
					   <div class="col-sm-6 col-xs-5"></div>
					   <div class="col-sm-6 col-xs-7"></div>
					</div>
					<table id="wlzy-datatable" class="table table-vcenter table-condensed table-bordered">
						<thead>
							<tr role="row">
							    <th class="sorting_disabled text-center" tabindex="0" rowspan="1" colspan="1" style="width:8%;">回复人</th>
								<th class="sorting_disabled text-center" tabindex="0" rowspan="1" colspan="1" style="width:80%;">内容</th>
								<th class="sorting_disabled text-center" tabindex="0" rowspan="1" colspan="1" style="width:10%;">回复时间</th>
								<th class="sorting_disabled text-center" tabindex="0" rowspan="1" colspan="1" style="width:5%;">管理</th>
							</tr>
						</thead>
						<tbody role="alert" aria-live="polite" aria-relevant="all">
							<?php  if(is_array($list)) { foreach($list as $row) { ?>
							<tr class="odd">
								<td class="text-center" style="text-align:left;"><a><?php  if(!empty($row['tuid'])  || !empty($row['teacherid'])) { ?><span class="label label-info" style="float:left;">老师</span>&nbsp;<?php  echo $teacher['tname'];?><?php  } else { ?><span class="label label-success" style="float:left;">学生</span>&nbsp;<?php  echo $student['s_name'];?><?php  } ?></a></td>
								<td class="text-center" style="text-align:left;height:auto;"><a><?php  echo $row['conet'];?></a></td>
								<td class="text-center"><a><?php  echo(date('Y-m-d H:i:s',$row['createtime']))?></a></td>
								<td class="text-center">
								<a href="<?php  echo $this->createWebUrl('notice', array('op' => 'delete2', 'schoolid' => $schoolid, 'id' => $row['id']))?>" onclick="return confirm('确定审核通过本条消息吗？');return false;">删除</a>
								</td>
							</tr>
							<?php  } } ?>
						</tbody>
					</table>
					<?php  echo $pager;?>
				</div>
	        </div>
		</div>
	</div>
</div>
<?php  } else if($operation == 'postb') { ?>
<div class="panel panel-info">
	<div class="panel-heading"><a class="btn btn-primary" href="<?php  echo $this->createWebUrl('notice', array('op' => 'display', 'schoolid' => $schoolid))?>"><i class="fa fa-tasks"></i>返回</a></div>
</div>
<div class="main">
	<div class="panel panel-default">
        <div class="table-responsive panel-body">
			<div id="queue-setting-index-body">
				<div class="panel panel-default">
					<div class="panel-heading">内容详情</div>
				</div>
				<div class="uploadList">
					<div class="" style="border-bottom: 1px solid #dbe1e8;">
						<div class="">
							<label class="control-label" style="float: left;width: 25%;">标题：<?php  echo $item['title'];?></label>
							</br>
							<span class="help-block">发布时间：<span style="color:#444;"><?php  echo date('Y-m-d H:m:s', $item['createtime'])?></span></span>
							<span class="help-block">文字内容：<span style="color:red;">;<?php  if(!empty($item['outurl'])) { ?><span class="label label-info"><?php  echo $item['outurl'];?></span><?php  } else { ?><?php  echo htmlspecialchars_decode($item['content'])?><?php  } ?><br/></span></span>
							<?php  if(!empty($item['anstype'])) { ?><span class="help-block">允许回答类型：<?php  if($anstype['is_txt'] == 1 ) { ?>&nbsp;<span  class="label label-success"> 文字  </span>&nbsp;<?php  } ?><?php  if($anstype['is_img'] == 1 ) { ?>&nbsp;<span  class="label label-success"> 图片  </span>&nbsp;<?php  } ?><?php  if($anstype['is_audio'] == 1 ) { ?>&nbsp;<span  class="label label-success"> 音频  </span>&nbsp;<?php  } ?><?php  if($anstype['is_video'] == 1 ) { ?>&nbsp;<span  class="label label-success"> 视频  </span>&nbsp;<?php  } ?></span><?php  } ?>
							<?php  if(!empty($item['groupid'])) { ?><span class="help-block">发送到：<span style="color:red;">&nbsp;<?php  if($item['groupid'] == 1 ) { ?>全体师生<?php  } else if($item['groupid'] ==2) { ?>全体教师<?php  } else if($item['groupid'] ==3) { ?>家长学生<?php  } ?><?php  if($item['usertype'] == 'send_class') { ?>指定班级<?php  } ?><?php  if($item['usertype'] == 'student') { ?>指定学生<?php  } ?><?php  if($item['usertype'] == 'staff_jsfz') { ?>指定老师组<?php  } ?><?php  if($item['usertype'] == 'staff') { ?>指定老师<?php  } ?></span></span><?php  } ?>						
						</div>
						<?php  if(is_array($arr)) { foreach($arr as $row) { ?>
							<span style="margin-left:5px;"><?php  echo $row['name'];?></span></br>
						<?php  } } ?>
					</div>
				</div>
				<div class="" style="">
					<div style="margin:10px 0"></div>
					<div class="photoList" style="width:100%;margin:10px 0;">
						<div id="addPhotoBox1" name="addPhotoBox">
						    <div class="gallery" data-toggle="lightbox-gallery">
								<?php  if(!empty($item['picarr'])) { ?>
									<?php  if(is_array($picarr)) { foreach($picarr as $key => $row) { ?>
									<?php  if(empty($row)) { ?><?php  continue;?><?php  } ?>
										<div class="photoBox" style="width:200px;height:200px;">								
											<div class="img" style="width:200px;height:200px;">
												<div class="gallery-image">
													<a href="<?php  echo tomedia($row)?>" target="_blank" class="gallery-link">
														<img src="<?php  echo tomedia($row)?>" alt="image" style="width:100%;">
													</a>
												</div>
											</div>	
										</div>
									<?php  } } ?>
								<?php  } ?>
			                </div>
			            </div>
					</div>
				</div>
				<?php  if(!empty($ZY_contents)) { ?>
				<div class="all_660">
				<div class= "yd_box"></div>
				<div class="具体内容" style="color:black;font-weight:bold;">作业内容：</div>
				<?php  if(is_array($ZY_contents)) { foreach($ZY_contents as $key => $row) { ?>
				
				
				<div class="tm_wenzi"  style="line-height: 32px;color: #666;">
					<span class="nmb"><?php  echo $ZY_contents[$key]['qorder'];?></span>.&nbsp
					<span class="bt_wenzi"><?php  echo $ZY_contents[$key]['title'];?></span>
					<?php  if($ZY_contents[$key]['type'] == '1') { ?>
					<span style="color:blue;">【单选】</span>
					
					<?php  } else if($ZY_contents[$key]['type'] == '2') { ?>
					<span style="color:blue;">【多选】</span>
				
					<?php  } else if($ZY_contents[$key]['type'] == '3') { ?>
					<span style="color:blue;">【问答】</span>
					<?php  } ?>
					
				</div>
				<?php  if($ZY_contents[$key]['type'] == '1') { ?>
				<div class="juti_wenzi"  style="line-height: 32px;color: #666;">
					<?php  if(is_array($ZY_contents[$key]['content'])) { foreach($ZY_contents[$key]['content'] as $keys => $rows) { ?>
					<?php  if($ZY_contents[$key]['content'][$keys]['is_answer'] == "Yes") { ?>
					<input type="radio" checked="checked"  disabled>
						<span><?php  echo $ZY_contents[$key]['content'][$keys]['title'];?>
						</span><span style="color:red;">【答案】</span></br>
						<?php  } else { ?>
						<input type="radio" disabled>
							<span><?php  echo $ZY_contents[$key]['content'][$keys]['title'];?>
						</span></br>
							<?php  } ?>
						<?php  } } ?>
					</div>
					<?php  } else if($ZY_contents[$key]['type'] == '2') { ?>
				<div class="juti_wenzi"  style="line-height: 32px;color: #666;">
					<?php  if(is_array($ZY_contents[$key]['content'])) { foreach($ZY_contents[$key]['content'] as $keys => $rows) { ?>
					<?php  if($ZY_contents[$key]['content'][$keys]['is_answer'] == "Yes") { ?>
					<input type="checkbox" checked="checked"  disabled>
						<span><?php  echo $ZY_contents[$key]['content'][$keys]['title'];?>
						</span><span style="color:red;">【答案】</span></br>
						<?php  } else { ?>
						<input type="checkbox"  disabled >
							<span><?php  echo $ZY_contents[$key]['content'][$keys]['title'];?>
						</span></br>
							<?php  } ?>
						<?php  } } ?>
					</div>
					<?php  } else if($ZY_contents[$key]['type'] == '3') { ?>
				<div class="juti_wenzi"  style="line-height: 32px;color: #666;">
					<span style="color:red">【答题要点】</span><span style="color:green"><?php  echo $ZY_contents[$key]['content'];?></span>
					</div>
					<?php  } ?>
				
					<?php  } } ?>
				
		</div>
	<?php  } ?>
	</div>	
</div>	

<?php  } else if($operation == 'post') { ?>
		<style>
			.sendObj {
				white-space: nowrap;
				height: 30px;
				line-height: 25px;
				margin-left: 5px;
				margin-bottom: 3px;
				float: left;
			}
		</style>
<div class="panel panel-info">
    <div class="panel-heading"><a class="btn btn-primary" onclick="javascript :history.back(-1);"><i class="fa fa-tasks"></i> 返回</a></div>
</div>
<div class="clearfix">
<form class="form-horizontal form" action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="type" value="<?php  echo $_GPC['type'];?>" />
	<div class="panel panel-default">
		<div class="panel-heading">
			<?php  if($_GPC['type'] == 1) { ?>创建班级通知<?php  } else if($_GPC['type'] == 2) { ?>创建校园通知<?php  } else if($_GPC['type'] == 3) { ?>创建作业通知<?php  } ?>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">标题</label>
				<div class="col-sm-8 col-xs-12">
					<input type="text" class="form-control" placeholder="请输入标题" name="title" value="">
					<span class="help-block">标题</span>
				</div>
			</div>
			<?php  if($_W['isfounder'] || $state == 'owner') { ?>
			<div class="form-group">
				<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">老师</label>
				<div class="col-sm-2 col-lg-2">
					<select style="margin-right:15px;" name="tid" class="form-control">
						<option value="0">请选择教师</option>
						<?php  if(is_array($techerlist)) { foreach($techerlist as $it) { ?>
						<option value="<?php  echo $it['id'];?>"><?php  echo $it['tname'];?></option>
						<?php  } } ?>
					</select>
					<span class="help-block">选择发送人</span>
				</div>
			</div>
			<?php  } else { ?>
				<input type="hidden" name="tid" value="<?php  echo $_W['tid'];?>" />
			<?php  } ?>

			<?php  if($_GPC['type'] == 3 || $_GPC['type'] == 1) { ?>
				<?php  if($schooltype == false) { ?>
					<?php  if(keep_sk77() && $_GPC['type'] == 1) { ?>
					<div class="form-group">
						<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">选择群发对象 </label>
						<div class="col-sm-2 col-lg-2" >
							<input type="radio" name="is_show" value="1" checked> 指定班级
							<input type="radio" name="is_show" value="2" > 指定学生
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">发送对象</label>
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 20px;"  ></label>
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="text-align:left;width:65%;max-width: unset; overflow-y: scroll; max-height: 100px; min-height: 42px; border: 1px solid #ebdddd;"  id = "Send_label" >
							请选择发送班级
						</label>
					</div>
					<div class="form-group"  >
						<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"></label>
						<div class="col-sm-12 col-lg-8" >
							<label onclick="HideAndShowChooseDiv(1)" id="HideButton" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;"  ><i class="fa fa-caret-up"></i>  收起选择区</label>
							<label onclick="HideAndShowChooseDiv(2)" id="ShowButton"  class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;display: none"  ><i class="fa fa-caret-down"></i>  展开选择区</label>
						</div>
					</div>
					<div class="form-group choosediv" id="BjChooseDiv" >
						<?php  if($_W['schooltype'] == true) { ?>
						<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">选择课程</label>
						<div class="col-sm-12 col-lg-8" >
							<?php  if(is_array($kclist)) { foreach($kclist as $it) { ?>
							<label  class="checkbox-inline" style="width:20%;margin-left: 10px"><input type="checkbox"  class="bjcheckb"  onclick="check_count(this)" id="Check_<?php  echo $it['sid'];?>" value="<?php  echo $it['sid'];?>" data-name="<?php  echo $it['sname'];?>" style="float: none;" ><?php  echo $it['sname'];?></label>
							<?php  } } ?>
						</div>

						<?php  } else if($_W['schooltype'] == false) { ?>
						<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">选择班级</label>
						<div class="col-sm-12 col-lg-8" >
							<?php  if(is_array($bjlist)) { foreach($bjlist as $it) { ?>
							<label  class="checkbox-inline" style="width:20%;margin-left: 10px"><input type="checkbox"  class="bjcheckb"  onclick="check_count(this)" id="Check_<?php  echo $it['sid'];?>" value="<?php  echo $it['sid'];?>" data-name="<?php  echo $it['sname'];?>" style="float: none;" ><?php  echo $it['sname'];?></label>
							<?php  } } ?>
						</div>
						<?php  } ?>
					</div>
					<div class="form-group choosediv" id="StuChooseDiv" style="display: none" >
						<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">选择学生</label>
						<div class="col-sm-2 col-lg-2" style="width: 20%">
							<?php  if($_W['schooltype'] == true) { ?>
							<select style="margin-right:15px;" name="SelectBj" id="SelectBj" class="form-control">
								<option value=" ">请选择课程</option>
								<?php  if(is_array($kclist)) { foreach($kclist as $it) { ?>
								<option value="<?php  echo $it['sid'];?>"><?php  echo $it['sname'];?></option>
								<?php  } } ?>
							</select>


							<?php  } else if($_W['schooltype'] == false) { ?>
							<select style="margin-right:15px;" name="SelectBj" id="SelectBj" class="form-control">
								<option value=" ">请选择班级</option>
								<?php  if(is_array($bjlist)) { foreach($bjlist as $it) { ?>
								<option value="<?php  echo $it['sid'];?>"><?php  echo $it['sname'];?></option>
								<?php  } } ?>
							</select>
							<?php  } ?>
						</div>
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;"  >
							<a onclick="check_all(1)">全选</a>
						</label>
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;"  >
							<a onclick="check_all(2)">全不选</a>
						</label>

					</div>
					<div class="form-group choosediv" id="StuDiv">
						<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"></label>
						<div class="col-sm-12 col-lg-8" id="StuCheckBoxList">
						</div>
					</div>


					<?php  } else { ?>
					<div class="form-group">
						<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">接收班级</label>
						<div class="col-sm-2 col-lg-2">
							<select style="margin-right:15px;" name="bj_id" class="form-control">
								<option value="0">请选择班级</option>
								<?php  if(is_array($bjlist)) { foreach($bjlist as $it) { ?>
								<option value="<?php  echo $it['sid'];?>"><?php  echo $it['sname'];?></option>
								<?php  } } ?>
							</select>
						</div>


						<?php  if($_GPC['type'] == 3) { ?>
						<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">选择科目</label>
						<div class="col-sm-2 col-lg-2">
							<select style="margin-right:15px;" name="km_id" class="form-control">
								<option value="0">请选择该作业科目</option>
								<?php  if(is_array($kmlist)) { foreach($kmlist as $it) { ?>
								<option value="<?php  echo $it['sid'];?>"><?php  echo $it['sname'];?></option>
								<?php  } } ?>
							</select>
						</div>
						<?php  } ?>
					</div>
					<?php  } ?>
				<?php  } else if($schooltype == true) { ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">选择课程</label>
					<div class="col-sm-2 col-lg-2">
						<select style="margin-right:15px;" name="kc_id" class="form-control">
							<option value="0">请选择课程</option>
							<?php  if(is_array($kclist)) { foreach($kclist as $it) { ?>
							<option value="<?php  echo $it['sid'];?>"><?php  echo $it['sname'];?></option>
							<?php  } } ?>
						</select>
					</div>
				</div>
				<?php  } ?>
			<?php  } ?>
			<?php  if($_GPC['type'] == 2) { ?>
			<div class="form-group">
				<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">接收对象</label>
				<div class="col-sm-2 col-lg-2">
					<select style="margin-right:15px;" name="groupid" class="form-control">
						<option value="0">请选择接收对象</option>
						<option value="1">全体师生</option>
						<option value="2">全体教师</option>
						<option value="3">家长学生</option>
						<?php  if($alljsfz) { ?>
							<?php  if(is_array($alljsfz)) { foreach($alljsfz as $row) { ?>
								<option value="<?php  echo $row['sid'];?>"><?php  echo $row['sname'];?></option>
							<?php  } } ?>
						<?php  } ?>
					</select>
				</div>
			</div>
			<?php  } ?>

			<div class="form-group">
				<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">内容</label>
				<div class="col-sm-8 col-xs-12">
					<?php  echo tpl_ueditor('content', $item1['content']);?>
				</div>

			</div>		
			<div class="form-group">
				<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">外部链接</label>
				<div class="col-sm-8 col-xs-12">
					<input type="text" class="form-control" placeholder="请输入URL" name="outurl" value="">
					<span class="help-block">点击模板消息会直接跳转该链接,如http://www.baidu.com</span>
				</div>
			</div>
			<?php  if(is_showpf()) { ?>
			<?php  if(($_GPC['type'] == 1 || $_GPC['type'] == 2)) { ?>
			<div class="form-group">
				<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">是否调查问卷</label>
				<div class="col-sm-8 col-xs-12">
					<input type="checkbox"  name="is_research" value="1">
					<span class="help-block">若为调查问卷，则只有权限人员可查看问卷结果。</span>
				</div>
			</div>
			<script>
			require(['jquery', 'util', 'bootstrap.switch'], function($, u){
			$(':checkbox[name="is_research"]').bootstrapSwitch();
			});
			</script>
			
			<?php  } ?>
			<?php  } ?>
			<?php  if($_GPC['type'] == 2) { ?>
			<div class="form-group">
				<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">是否同步至首页</label>
				<div class="col-sm-8 col-xs-12">
					<input type="checkbox"  name="is_private" value="1">
				</div>
			</div>
			<script>
			require(['jquery', 'util', 'bootstrap.switch'], function($, u){
			$(':checkbox[name="is_private"]').bootstrapSwitch();
			});
			</script>
			<?php  } ?>
			<link rel="stylesheet" type="text/css" href="<?php echo MODULE_URL;?>public/web/css/wenjuan_ht.css"/>
			<!-- <script type="text/javascript" src="<?php echo MODULE_URL;?>public/web/js/jquery-1.7.1.js"></script>				 -->
			<div class="form-group">
				<div class="all_660">
					<div class="yd_box"></div>  
					<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">添加问题</label>
					<div class="but" style="padding-top: 20px"> 
						<select id="addquerstions" class="form-control" name="" style="width:150px;margin-top: -10px;margin-left: 10px ;margin-right: 20px;position:left;float:left;">
							<option value="-1">添加问题</option>
							<option value="0">单选</option>
							<option value="1">多选</option>
							<option value="2">问答</option>
						</select>
						<div class="col-sm-9 col-xs-12" style="width: 30%">
							<a id="index1"><i class="fa fa-plus-circle" ></i> 提交问题</a>
								<a id="Recode"> 重新排序</a>
							<span class="help-block"></span>
						</div>
					</div>
					<!--选项卡区域  模板区域-->
					<div class="xxk_box">
						<div class="xxk_conn hide">
							<!--单选-->
							<div class="xxk_xzqh_box dxuan ">
								<textarea name="" cols="" rows="" class="input_wenbk btwen_text btwen_text_dx" placeholder="单选题目"></textarea>
								<div class="title_itram">
									<div class="kzjxx_iteam">
										<input name="" type="radio" value="" class="dxk" disabled >
										<input name="" type="text" class="input_wenbk" value="选项" placeholder="选项">
										<label>
										<?php  if($_GPC['type'] == 3 ) { ?>	<input name="" type="checkbox" value="" class="fxk"> <span>是否答案</span><?php  } ?>
										</label>
										<a href="javascript:void(0);" class="del_xm">删除</a>
									</div>
								</div>
								<a href="javascript:void(0)" class="zjxx">增加选项</a>
								<!--完成编辑-->
								<div class="bjqxwc_box">
									<a href="javascript:void(0);" class="qxbj_but">取消编辑</a>
									<a href="javascript:void(0);" class="swcbj_but"> 完成编辑</a>
								</div>
							</div>
							<!--多选-->
							<div class="xxk_xzqh_box duoxuan hide">
								<textarea name="" cols="" rows="" class="input_wenbk btwen_text btwen_text_duox" placeholder="多选题目"></textarea>
								<div class="title_itram">
									<div class="kzjxx_iteam">
										<input name="" type="checkbox" value="" class="dxk" disabled >
										<input name="" type="text" class="input_wenbk" value="选项" placeholder="选项">
										<input type="hidden" class="input_img" value="">
										<label>
											<input name="" type="checkbox" value="" class="fxk"> <span>是否答案</span></label>
										<a href="javascript:void(0);" class="del_xm">删除</a>
									</div>
								</div>
								<a href="javascript:void(0)" class="zjxx">增加选项</a>
								<!--完成编辑-->
								<div class="bjqxwc_box">
									<a href="javascript:void(0);" class="qxbj_but">取消编辑</a>
									<a href="javascript:void(0);" class="swcbj_but"> 完成编辑</a>
								</div>
							</div>
							<!-- 填空-->
							<div class="xxk_xzqh_box tktm hide">
								<p>请输入题目</p>
								 
								<textarea name="" cols="" rows="" class="input_wenbk btwen_text btwen_text_tk" placeholder="题目"></textarea>
								<p>请输入答题要点，默认为“略”</p>
								<textarea name="" cols="" rows="" class="input_wenbk btwen_text1 btwen_text_tk" placeholder="答题要点" style="font-family: '微软雅黑';height: 66px;width: 608px;margin-bottom: 15px;"></textarea>
								<!--完成编辑-->
								<div class="bjqxwc_box">
									<a href="javascript:void(0);" class="qxbj_but">取消编辑</a>
									<a href="javascript:void(0);" class="swcbj_but"> 完成编辑</a>
								</div>
							</div>
							<!--矩阵-->
						</div>
					</div>
				</div>	
			</div>		
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12">
			<input name="submit" type="submit" value="保存并群发" class="btn btn-primary col-lg-1">
			<!--<input name="submit" type="button" onclick="getA();" value="保存并群发" class="btn btn-primary col-lg-1">-->
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</div>
</form>
</div>
<?php  } ?>
<script>

	$('#SelectBj').change(function(){
		var schoolid = "<?php  echo $schoolid;?>";
		var bjId = $("#SelectBj option:selected").val();
		if(bjId != null && bjId != 0){

			<?php  if($_W['schooltype'] == true) { ?>
			$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'getstu_kc'))?>", {'kcid': bjId, 'schoolid': schoolid}, function(data) {
				stulist = data.stulist;
				//console.log(data);
				var html   = '';
				if (stulist != '') {
					for (var i in stulist) {
						var is_checked = '';
						if($("#span_"+stulist[i].id).length > 0 ){
							is_checked = 'checked';
							console.log(is_checked)
						}
						html += `<label  class="checkbox-inline" style="width:10%;min-width:85px;margin-left: 10px"><input type="checkbox" name="sidarr" class="stucheckb" id="checkbox_${stulist[i].id}" onclick="check_count(this)" data-name="${stulist[i].s_name}"  value="${stulist[i].id}"style="float: none;" ${stulist[i].id}  ${is_checked} >${stulist[i].s_name}</label>`;
					}
				}
				$('#StuCheckBoxList').html(html);
			},'json');
			<?php  } else if($_W['schooltype'] == false) { ?>
			$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'getstu_bj'))?>", {'bjId': bjId, 'schoolid': schoolid}, function(data) {
				stulist = data.stulist;
				//console.log(data);
				var html   = '';
				if (stulist != '') {
					for (var i in stulist) {
						var is_checked = '';
						if($("#span_"+stulist[i].id).length > 0 ){
							is_checked = 'checked';
							console.log(is_checked)
						}
						html += `<label  class="checkbox-inline" style="width:10%;min-width:85px;margin-left: 10px"><input type="checkbox" name="sidarr" class="stucheckb" id="checkbox_${stulist[i].id}" onclick="check_count(this)" data-name="${stulist[i].s_name}"  value="${stulist[i].id}"style="float: none;" ${stulist[i].id} ${is_checked} >${stulist[i].s_name}</label>`;
					}
				}
				$('#StuCheckBoxList').html(html);
			},'json');
			<?php  } ?>}



	});
	function check_all(type){

		var check_class = '';
		if($('input[name=is_show]:checked').val() == 2){
			check_class = 'stucheckb';
		}else if($('input[name=is_show]:checked').val() == 1){
			check_class = 'bjcheckb';
		}
		if(type == 1){
			$(`input[type=checkbox][class=${check_class}]`).each(function(i){
				if($(this).prop("checked") == false) {
					$(this).prop("checked", true);
					check_count(this)
				}
			});
		}else{
			$(`input[type=checkbox][class=${check_class}]`).each(function(i){
				$(this).prop("checked",false);
				del_stu($(this).val())
			});
		}
	}


	function HideAndShowChooseDiv(type) {
		if(type == 1){
			//隐藏
			$(".choosediv").slideUp();
			$("#ShowButton").show();
			$("#HideButton").hide();
		}else if(type == 2){
			//展示
			if($('input[name=is_show]:checked').val() == 2){
				$("#StuChooseDiv").slideDown();
				$("#StuDiv").slideDown();
			}else if($('input[name=is_show]:checked').val() == 1){
				$("#BjChooseDiv").slideDown();
			}
			$("#ShowButton").hide();
			$("#HideButton").show();

		}
	}



	function check_count(th){
		var span_length = $("#Send_label span").length;
		if(span_length == 0 ){
			$('#Send_label').html('');
		}
		var value_th= th.value;
		var text_th = $(th).attr("data-name");
		let addhtml = '';
		if(th.checked == false){
			del_stu(value_th);
		}else if(th.checked == true){

			if($('input[name=is_show]:checked').val() == 1){
				addhtml = `<span class="sendObj" style="border: 1px solid #e8e8e8; padding:3px 3px;" onclick="del_stu(${value_th})" id="span_${value_th}"> ${text_th}<input type = "hidden" name="send_id[]" value = "${value_th}">&nbsp;&nbsp;&nbsp;<i class="fa fa-times" ></i></span>`
			}else if($('input[name=is_show]:checked').val() == 2){
				let  checkBj = $("#SelectBj option:selected").val();
				if($("#span_"+value_th).length <= 0 ){
					addhtml = `<span class="sendObj" style="border: 1px solid #e8e8e8; padding:3px 3px;" onclick="del_stu(${value_th})" id="span_${value_th}"> ${text_th}<input type = "hidden" name="send_id[${checkBj}][]" value = "${value_th}">&nbsp;&nbsp;&nbsp;<i class="fa fa-times" ></i></span>`
				}

			}




			$('#Send_label').append(addhtml);
		}
	}

	function del_stu(id) {
		$("#span_" + id).remove();
		$("#Check_" + id).prop('checked', false);
		$("#checkbox_" + id).attr("checked", false);
		var span_length = $("#Send_label span").length;
		if (span_length == 0) {
			if ($('input[name=is_show]:checked').val() == 1) {
				let endhtml = "请选择发送班级";
				$("#Send_label").html(endhtml);
			} else {
				let endhtml = "请选择发送学生";
				$("#Send_label").html(endhtml);
			}
		}
	};

$(document).ready(function(e) {
	var e_d = 2 ;
	<?php  if(!(IsHasQx($tid_global,1001201,1,$schoolid))) { ?>
		$(".qx_1201").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001202,1,$schoolid))) { ?>
		$(".qx_1202").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001203,1,$schoolid))) { ?>
		$(".qx_1203").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001204,1,$schoolid))) { ?>
		$(".qx_1204").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001211,1,$schoolid))) { ?>
		$(".qx_1211").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001212,1,$schoolid))) { ?>
		$(".qx_1212").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001213,1,$schoolid))) { ?>
		$(".qx_1213").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001214,1,$schoolid))) { ?>
		$(".qx_1214").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001221,1,$schoolid))) { ?>
		$(".qx_1221").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001222,1,$schoolid))) { ?>
		$(".qx_1222").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001223,1,$schoolid))) { ?>
		$(".qx_1223").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001224,1,$schoolid))) { ?>
		$(".qx_1224").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001231,1,$schoolid))) { ?>
		$(".qx_1231").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001232,1,$schoolid))) { ?>
		$(".qx_1232").hide();
		e_d = e_d - 1 ;
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001233,1,$schoolid))) { ?>
		$(".qx_1233").hide();
		e_d = e_d - 1 ;
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001241,1,$schoolid))) { ?>
		$(".qx_1241").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1001242,1,$schoolid))) { ?>
		$(".qx_1242").hide();
	<?php  } ?>
	if(e_d == 0 ){
		$(".qx_e_d").hide();
	}
	
	$('input[name=is_show]').change(function () {
		let value = $(this).val();
		//alert(value);
		if(value == 1){
			$('#StuChooseDiv').slideUp();
			$('#BjChooseDiv').slideDown();
			//$('#stulist').html('');
			$('#StuCheckBoxList').hide();
			$('#Send_label').html('请选择发送班级');
			$("input[class=bjcheckb]").prop('checked',false);
			//alert("YES");
		}else if(value == 2){
			$('#StuChooseDiv').slideDown();
			$('#BjChooseDiv').slideUp(300,function () {
				$('#StuCheckBoxList').show();
			});
			$('#Bjlist').html('');

			$('#Send_label').html('请选择发送学生');
			$("input[class=stucheckb]").prop('checked',false);
			//alert("No");
		}
	})


	
	var i = -1 ;
	$('#Recode').click(function(){

		var xh_num = 1 ;
		var xx_num = 0 ;
			
		//重新编号
		$(".yd_box").find(".movie_box").each(function() {
			var new_contentss_name = 'contentss['+ xh_num + '][]';
			var new_contentsss_name = 'contentsss['+ xh_num + '][]';
			var new_quess_title_name = 'ques_title['+ xh_num + ']';
			var new_ques_anspoint_name = 'ques_anspoint['+ xh_num + ']';
			var new_ques_type_name = 'ques_type['+ xh_num + ']';
			var new_contents_name = 'contents['+ xh_num + '][]';
			var new_qorder_name = 'qorder['+ xh_num + ']';
			
			$(".yd_box").children(".movie_box").eq(xx_num).find(".nmb").text(xh_num);
			$(".yd_box").children(".movie_box").eq(xx_num).find(".contentss").attr("name",new_contentss_name);
			$(".yd_box").children(".movie_box").eq(xx_num).find(".contentsss").attr("name",new_contentsss_name);
			$(".yd_box").children(".movie_box").eq(xx_num).find(".ques_title").attr("name",new_quess_title_name);
			$(".yd_box").children(".movie_box").eq(xx_num).find(".ques_anspoint").attr("name",new_ques_anspoint_name);
			$(".yd_box").children(".movie_box").eq(xx_num).find(".ques_type").attr("name",new_ques_type_name);
			$(".yd_box").children(".movie_box").eq(xx_num).find(".contents").attr("name",new_contents_name);
			$(".yd_box").children(".movie_box").eq(xx_num).find(".qorder").attr("name",new_qorder_name);
					
			$(this).find(".nmb").text(xh_num);
			xh_num++;
			xx_num++;
		});
	})
	//添加题目
	// $('#addquerstions').change(function() {
	$('#index1').click(function()
	{
        // debugger
        var index = $('#addquerstions').val(); //选择添加问题的类型
        // debugger
        //i=i+1;
       // var index = $(this).val(); //选择添加问题的类型
        if (index == "-1") 
        {
            return;
        }
	 //每个题目都是一个movie_box
	    var Grade = $(".yd_box").find(".movie_box").length + 1;
        var movie_box = '<div class="movie_box" name="box['+ Grade+']" style="border: 1px solid rgb(255, 255, 255);"></div>';
      
        switch (index)
        {
            case "0": //单选
            case "1": //多选
            case "2": //问答
                var wjdc_list = '<ul class="wjdc_list"></ul>'; //问答 单选 多选
                var danxuan = "";
                if (index == "0") 
                {
                    danxuan = '【单选】';
                } else if (index == "1")
                 {
                    danxuan = '【多选】';
                } else if (index == "2") 
                {
                    danxuan = '【问答】';
                }
                var ques_type = Number(index) + 1 ;
                //oldId 记录Grade 单/多选的选项标识用    
                wjdc_list = $(wjdc_list).append(' <li><div class="tm_btitlt"><i class="nmb">' + Grade + '</i>. <i class="btwenzi">请编辑问题？</i><input class="ques_title" name="ques_title['+Grade+']" type="hidden" value="" required ></input> <input  type="hidden" name="ques_type[' + Grade + ']" class="ques_type" value="'+ ques_type +'"></input> <input  type="hidden" name="qorder['+Grade +']" class="qorder" value="'+Grade+'"></input><span class="tip_wz">' + danxuan + '</span></div></li>');

				//如果是填空题，多了一个textarea（没用的，根本不从这个textarea取值)
                if (index == "2") {
                    wjdc_list = $(wjdc_list).append('<li><div class="tm_btitlt1"> <span  style="color:red;">【答题要点】</span> <span class="anspoint"> 略 </span></div><input class="ques_anspoint" name="ques_anspoint['+Grade+']" type="hidden" value="" required ></input></li>');
                }

                movie_box = $(movie_box).append(wjdc_list);
                movie_box = $(movie_box).append('<div class="dx_box" data-t="' + index + '"></div>');

                break;
            case "3": //矩阵
           
                break;

        }


        $(movie_box).hover(function() 
        {
        	var html_cz = "<div class='kzqy_czbut'><a href='javascript:void(0)' class='sy'>上移</a><a href='javascript:void(0)'  class='xy'>下移</a><a href='javascript:void(0)'  class='bianji'>编辑</a><a href='javascript:void(0)' class='del' >删除</a></div>"
            $(this).css({
                "border": "1px solid #0099ff"
            });
            $(this).children(".wjdc_list").after(html_cz);
        }, function() {
            $(this).css({
                "border": "1px solid #fff"
            });
            $(this).children(".kzqy_czbut").remove();
            //$(this).children(".dx_box").hide(); 
        });
        $(".yd_box").append(movie_box);

    });
		

				//鼠标移上去显示按钮
	$(".movie_box").hover(function() {
		var html_cz = "<div class='kzqy_czbut'><a href='javascript:void(0)' class='sy'>上移</a><a href='javascript:void(0)'  class='xy'>下移</a><a href='javascript:void(0)'  class='bianji'>编辑</a><a href='javascript:void(0)' class='del' >删除</a></div>"
		$(this).css({
			"border": "1px solid #0099ff"
		});
		$(this).children(".wjdc_list").after(html_cz);
	}, function() {
		$(this).css({
			"border": "1px solid #fff"
		});
		$(this).children(".kzqy_czbut").remove();
		//$(this).children(".dx_box").hide(); 
	});

	//下移

	$(".all_660").on("click",".xy", function() {
		//文字的长度 
		var leng = $(".yd_box").children(".movie_box").length;
		var dqgs = $(this).parent(".kzqy_czbut").parent(".movie_box").index();

		if(dqgs < leng - 1) {
			var czxx = $(this).parent(".kzqy_czbut").parent(".movie_box");
			var xyghtml = czxx.next().html();
			var syghtml = czxx.html();
			czxx.next().html(syghtml);
			czxx.html(xyghtml);
			//序号
			czxx.children(".wjdc_list").find(".nmb").text(dqgs + 1);
			czxx.next().children(".wjdc_list").find(".nmb").text(dqgs + 2);
		} else {
			alert("到底了");
		}
	});

	
	//上移
	$(".all_660").on("click",".sy", function() {
		//文字的长度 
		var leng = $(".yd_box").children(".movie_box").length;
		var dqgs = $(this).parent(".kzqy_czbut").parent(".movie_box").index();
		if(dqgs > 0) {
			var czxx    = $(this).parent(".kzqy_czbut").parent(".movie_box");
			var xyghtml = czxx.prev().html();
			var syghtml = czxx.html();
			czxx.prev().html(syghtml);
			czxx.html(xyghtml);
			//序号
			czxx.children(".wjdc_list").find(".nmb").text(dqgs + 1);
			czxx.prev().children(".wjdc_list").find(".nmb").text(dqgs);

		} else {
			alert("到头了");
		}
	});

	
	//删除
	$(".all_660").on("click",".del", function() {
		var czxx       = $(this).parent(".kzqy_czbut").parent(".movie_box");
		var zgtitle_gs = czxx.parent(".yd_box").find(".movie_box").length;
		
		var xh_num     = 1 ;
		var xx_num     = 0 ;
		
		//重新编号
		czxx.parent(".yd_box").find(".movie_box").each(function() {
			//$(".yd_box").children(".movie_box").eq(xx_num).find(".nmb").text(xh_num);
			$(this).find(".nmb").text(xh_num);
			xh_num++;
			xx_num++;
			//alert(xh_num);
		});
		czxx.remove();
	});

	//编辑
	$(".all_660").on("click",".bianji", function() {
		//编辑的时候禁止其他操作   
		$(this).siblings().hide();
		//$(this).parent(".kzqy_czbut").parent(".movie_box").unbind("hover"); 
		var dxtm   = $(".dxuan").html();
		var duoxtm = $(".duoxuan").html();
		var tktm   = $(".tktm").html();
		var jztm   = $(".jztm").html();
		//接受编辑内容的容器
		var dx_rq = $(this).parent(".kzqy_czbut").parent(".movie_box").find(".dx_box");
		var title = dx_rq.attr("data-t");
		//alert(title);
		//题目选项的个数
		var timlrxm = $(this).parent(".kzqy_czbut").parent(".movie_box").children(".wjdc_list").children("li").length;

		//单选题目
		if(title == 0) {
			dx_rq.show().html(dxtm);
			//模具题目选项的个数
			var bjxm_length = dx_rq.find(".title_itram").children(".kzjxx_iteam").length;
			var dxtxx_html  = dx_rq.find(".title_itram").children(".kzjxx_iteam").html();
			//添加选项题目
			for(var i_tmxx = bjxm_length; i_tmxx < timlrxm - 1; i_tmxx++) {
				dx_rq.find(".title_itram").append("<div class='kzjxx_iteam'>" + dxtxx_html + "</div>");
			}
			//赋值文本框 
			//题目标题
			var texte_bt_val = $(this).parent(".kzqy_czbut").parent(".movie_box").find(".wjdc_list").children("li").eq(0).find(".tm_btitlt").children(".btwenzi").text();
			dx_rq.find(".btwen_text").val(texte_bt_val);
			//遍历题目项目的文字
			var bjjs = 0;
			$(this).parent(".kzqy_czbut").parent(".movie_box").find(".wjdc_list").children("li").each(function() {
				//可选框框
				var ktksfcz = $(this).find("input").hasClass("wenb_input");
				if(ktksfcz) {
					var jsxz_kk = $(this).index();
					dx_rq.find(".title_itram").children(".kzjxx_iteam").eq(jsxz_kk - 1).find("label").remove();
				}
				//题目选项
				var texte_val = $(this).find("span").text();
				var check_val = $(this).find(".contentss").attr("checked");
				if(check_val)
				{
//alert(bjjs);
				//alert("chenggong");
				//$(this).find(".fxk").attr("checked","checked");
				
			};
				dx_rq.find(".title_itram").children(".kzjxx_iteam").eq(bjjs - 1).find(".input_wenbk").val(texte_val);
				if(check_val == "checked")
				{
//alert(bjjs);
				//alert("chenggong");
				dx_rq.find(".title_itram").children(".kzjxx_iteam").eq(bjjs - 1).find(".fxk").attr("checked","checked");
				
			};
				bjjs++ ;

			});
		}
		//多选题目  
		if(title == 1) {
			dx_rq.show().html(duoxtm);
			//模具题目选项的个数
			var bjxm_length = dx_rq.find(".title_itram").children(".kzjxx_iteam").length;
			var dxtxx_html = dx_rq.find(".title_itram").children(".kzjxx_iteam").html();
			//添加选项题目
			for(var i_tmxx = bjxm_length; i_tmxx < timlrxm - 1; i_tmxx++) {
				dx_rq.find(".title_itram").append("<div class='kzjxx_iteam'>" + dxtxx_html + "</div>");
				//alert(i_tmxx);
			}
			//赋值文本框 
			//题目标题
			var texte_bt_val = $(this).parent(".kzqy_czbut").parent(".movie_box").find(".wjdc_list").children("li").eq(0).find(".tm_btitlt").children(".btwenzi").text();
			dx_rq.find(".btwen_text").val(texte_bt_val);
			//遍历题目项目的文字
			var bjjs = 0;
			$(this).parent(".kzqy_czbut").parent(".movie_box").find(".wjdc_list").children("li").each(function() {
				//可选框框
				var ktksfcz = $(this).find("input").hasClass("wenb_input");
				if(ktksfcz) {
					var jsxz_kk = $(this).index();
					dx_rq.find(".title_itram").children(".kzjxx_iteam").eq(jsxz_kk - 1).find("label").remove();
				}
				//题目选项
				var texte_val = $(this).find("span").text();
				var check_val = $(this).find(".contentss").attr("checked");
				dx_rq.find(".title_itram").children(".kzjxx_iteam").eq(bjjs - 1).find(".input_wenbk").val(texte_val);
				if(check_val == "checked")
				{
//alert(bjjs);
				//alert("chenggong");
				dx_rq.find(".title_itram").children(".kzjxx_iteam").eq(bjjs - 1).find(".fxk").attr("checked","checked");
				
			};
				bjjs++

			});
		}
		//填空题目
		if(title == 2) {
			dx_rq.show().html(tktm);
			//赋值文本框 
			//题目标题
			var texte_bt_val = $(this).parent(".kzqy_czbut").parent(".movie_box").find(".wjdc_list").children("li").eq(0).find(".tm_btitlt").children(".btwenzi").text();
			dx_rq.find(".btwen_text").val(texte_bt_val);
			var texte_bt_val1 = $(this).parent(".kzqy_czbut").parent(".movie_box").find(".wjdc_list").children("li").eq(1).find(".tm_btitlt1").children(".anspoint").text();
			dx_rq.find(".btwen_text1").val(texte_bt_val1);
		}
		
	});

	//增加选项  
	$(".all_660").on("click",".zjxx", function() {
		var zjxx_html = $(this).prev(".title_itram").children(".kzjxx_iteam").html();
		$(this).prev(".title_itram").append("<div class='kzjxx_iteam'>" + zjxx_html + "</div>");
	});

	//删除一行 
	$(".all_660").on("click",".del_xm", function() {
		//获取编辑题目的个数
		var zuxxs_num = $(this).parent(".kzjxx_iteam").parent(".title_itram").children(".kzjxx_iteam").length;
		if(zuxxs_num > 1) {
			$(this).parent(".kzjxx_iteam").remove();
		} else {
			alert("手下留情");
		}
	});
	
	//取消编辑
	$(".all_660").on("click",".dx_box .qxbj_but", function() {
		$(this).parent(".bjqxwc_box").parent(".dx_box").empty().hide();
		$(".movie_box").css({
			"border": "1px solid #fff"
		});
		$(".kzqy_czbut").remove();
		//            
	});

	
	// body...
	//完成编辑（编辑）
	$(".all_660").on("click",".swcbj_but", function() {	
		// var Grade1 = $(".yd_box").find( $(this).parent(".bjqxwc_box").parent(".dx_box").parent("movie_box")).length ;

		var jcxxxx = $(this).parent(".bjqxwc_box").parent(".dx_box"); //编辑题目区
		var querstionType = jcxxxx.attr("data-t"); //获取题目类型

		switch(querstionType) {
			case "0": //单选
			var bjtm_xm_length = jcxxxx.find(".title_itram").children(".kzjxx_iteam").length; //编辑选项的 选项个数
				var xmtit_length = jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").length - 1; //题目选择的个数

				//赋值文本框 
				//题目标题
				var texte_bt_val_bj = jcxxxx.find(".btwen_text").val(); //获取问题题目
				jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(0).find(".tm_btitlt").children(".btwenzi").text(texte_bt_val_bj); //将修改过的问题题目展示
				jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(0).find(".tm_btitlt").children(".ques_title").val(texte_bt_val_bj); //将修改过的问题题目写入一个隐藏的input

				//删除选项
				for(var toljs = xmtit_length; toljs > 0; toljs--) {
					jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(toljs).remove();
					//jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(toljs).remove();
				}
				//遍历题目项目的文字
				var bjjs_bj = 0;
				var isxuanzhong = 1 ;
				jcxxxx.children(".title_itram").children(".kzjxx_iteam").each(function() {
					//题目选项
					var Chongfu = 0 ;
					var suoyin = 0 ;
					var old_value = jcxxxx.parent(".movie_box").eq(suoyin).find(".contents").val();
						//alert(old_value);
						//alert(texte_val_bj);
					var texte_val_bj = $(this).find(".input_wenbk").val(); //获取填写信息
					
					jcxxxx.parent(".movie_box").find(".contents").each(function(){
						
						var old_value = jcxxxx.parent(".movie_box").eq(suoyin).find(".contents").val();
					//	alert("old_value"+old_value);
					//	alert("texte_bt_val_bj"+texte_val_bj);
						suoyin++;
						if (texte_val_bj == old_value )
						{
							Chongfu = 1 ;
							//alert("Chongfu11"+Chongfu);
						}
						
					});
					var inputType = 'radio';
					//jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(bjjs_bj + 1).find("span").text(texte_val_bj);
					
					var oldID =jcxxxx.parent(".movie_box").children(".wjdc_list").find(".qorder").val();
					
					var li = '<li><label><a ><input class="contentss" name="contentss[' + oldID + '][]" type="' + inputType + '" value="'+isxuanzhong+'" style=" position: relative; z-index : -2;" disabled ></a><span>' + texte_val_bj + '</span></label><input type="hidden" class="contents" name= "contents[' + oldID +'][]" value="'+ texte_val_bj + '" ></input></li>';
				//	alert("Chongfu22"+Chongfu);
					
					
					jcxxxx.parent(".movie_box").children(".wjdc_list").append(li);

					bjjs_bj++ ;
					//可填空  
					var kxtk_yf = $(this).find(".fxk").is(':checked');
					if(kxtk_yf) {
						//第几个被勾选
						var jsxz = $(this).index();
						//alert(jsxz);
						//Lee
						var hidden_input = '<input type="hidden" class="contentsss" name="contentsss[' + oldID + '][]" value="'+isxuanzhong+'">';
						jcxxxx.parent(".movie_box").children(".wjdc_list").find("li").eq(jsxz + 1).append(hidden_input);
						jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(jsxz + 1).find(".contentss").attr('checked','checked');
					jcxxxx.parent(".movie_box").children(".wjdc_list").find("li").eq(jsxz + 1).append("<i style=\"color:red;\">&nbsp&nbsp&nbsp【答案】</i>");
					}
					isxuanzhong++;
				});

				break;
			case "1": //多选	
				//编辑题目选项的个数
				var bjtm_xm_length = jcxxxx.find(".title_itram").children(".kzjxx_iteam").length; //编辑选项的 选项个数
				var xmtit_length = jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").length - 1; //题目选择的个数

				//赋值文本框 
				//题目标题
				var texte_bt_val_bj = jcxxxx.find(".btwen_text").val(); //获取问题题目
				jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(0).find(".tm_btitlt").children(".btwenzi").text(texte_bt_val_bj); //将修改过的问题题目展示
				jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(0).find(".tm_btitlt").children(".ques_title").val(texte_bt_val_bj); //将修改过的问题题目写入一个隐藏的input

				//删除选项
				for(var toljs = xmtit_length; toljs > 0; toljs--) {
					jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(toljs).remove();
				}
				//遍历题目项目的文字
				var bjjs_bj = 0;
				var isxuanzhong = 1 ;
			jcxxxx.children(".title_itram").children(".kzjxx_iteam").each(function() {
					//题目选项
					var Chongfu = 0 ;
					var suoyin = 0 ;
					var old_value = jcxxxx.parent(".movie_box").eq(suoyin).find(".contents").val();
						//alert(old_value);
						//alert(texte_val_bj);
					var texte_val_bj = $(this).find(".input_wenbk").val(); //获取填写信息
					var texte_val_bj = $(this).find(".input_wenbk").val();
					jcxxxx.parent(".movie_box").find(".contents").each(function(){
						
						var old_value = jcxxxx.parent(".movie_box").eq(suoyin).find(".contents").val();
						//alert("old_value"+old_value);
						//alert("texte_bt_val_bj"+texte_val_bj);
						suoyin++;
						if (texte_val_bj == old_value )
						{
							Chongfu = 1 ;
							//alert("Chongfu11"+Chongfu);
						}
						
					});
					var inputType = 'radio';
					//jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(bjjs_bj + 1).find("span").text(texte_val_bj);
					if(querstionType == "1") {
						inputType = 'checkbox';
					}
					var oldID =jcxxxx.parent(".movie_box").children(".wjdc_list").find(".qorder").val();
					
					var li = '<li><label><input class="contentss" name="contentss[' + oldID + '][]" type="' + inputType + '" value="'+isxuanzhong+'"disabled ><span>' + texte_val_bj + '</span></label><input type="hidden" class="contents" name= "contents[' + oldID +'][]" value="'+ texte_val_bj + '" ></input></li>';
					//alert("Chongfu22"+Chongfu);
					if(Chongfu == 0 ){
						//li=$(li).append('<input type="hidden" class="contents" name= "contents[' + oldID +']" value="'+ texte_val_bj + '" ></input>');
						
					};
					
					jcxxxx.parent(".movie_box").children(".wjdc_list").append(li);

					bjjs_bj++ ;
					//可填空  
					var kxtk_yf = $(this).find(".fxk").is(':checked');
					if(kxtk_yf) {
						//第几个被勾选
						var jsxz = $(this).index();
						//alert(jsxz);
						//Lee
						var hidden_input = '<input type="hidden" class="contentsss" name="contentsss[' + oldID + '][]" value="'+isxuanzhong+'">';
						jcxxxx.parent(".movie_box").children(".wjdc_list").find("li").eq(jsxz + 1).append(hidden_input);
						jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(jsxz + 1).find(".contentss").attr('checked','checked');
						jcxxxx.parent(".movie_box").children(".wjdc_list").find("li").eq(jsxz + 1).append("<i style=\"color:red;\">&nbsp&nbsp&nbsp【答案】</i>");
					}
					isxuanzhong++;
				});

				break;
			case "2":
				var texte_bt_val_bj = jcxxxx.find(".btwen_text").val(); //获取问题题目
				jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(0).find(".tm_btitlt").children(".btwenzi").text(texte_bt_val_bj); //将修改过的问题题目展示
					jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(0).find(".tm_btitlt").children(".ques_title").val(texte_bt_val_bj);
					var texte_bt_val_bj1 = jcxxxx.find(".btwen_text1").val(); //获取问题题目
					jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(1).find(".tm_btitlt1").children(".anspoint").text(texte_bt_val_bj1); //将修改过的问题题目展示
					jcxxxx.parent(".movie_box").children(".wjdc_list").children("li").eq(1).find(".ques_anspoint").val(texte_bt_val_bj1);
				break;

			case "3": //矩阵
				jcxxxx.parent(".movie_box").children(".wjdc_list").children("table").children("tbody").empty();
				var querstionType = jcxxxx.find(".xzqk:checked").val();
				console.log(querstionType);
				var title = jcxxxx.find("textarea.input_wenbk.btwen_text").val(); //获取标题
				var x_iteam = new Array(); //获取 横向选项	
				var y_iteam = " ," + jcxxxx.find(".leftbtwen_text").val(); //左标题
				jcxxxx.find(".title_itram").children("div.kzjxx_iteam").each(function() {
					var texte_val_bj = $(this).find(".input_wenbk").val(); //获取填写信息
					var checkbox = $(this).find("input.fxk").is(':checked'); //是否可填空
					x_iteam.push({
						name: texte_val_bj,
						checkbox: checkbox
					});

				});
				var y_iteams = y_iteam.split(",");
				for(var item in y_iteams) { //行
					var tr = '<tr>',
						td = '';
					td += '<td>' + y_iteams[item] + '</td>';
					for(var i = 0; i < x_iteam.length; i++) { //列
						if(item != 0) {
							if(x_iteam[i].checkbox) {
								//可填空  
								td += '<td><input name="c1" type="text" value=""></td>';

							} else {
								var inputType = 'radio';
								if(querstionType == "1") {
									inputType = 'checkbox';
								}
								td += '<td><input name="c1" type="' + inputType + '" value=""> </td>';
							}
						} else {
							td += '<td>' + x_iteam[i].name + '</td>';
						}
					}
					jcxxxx.parent(".movie_box").children(".wjdc_list").children("table").children("tbody").append(tr + td);
				}
				break;
		}
		//清除     
		$(this).parent(".bjqxwc_box").parent(".dx_box").empty().hide();
	});
});
		
		
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>