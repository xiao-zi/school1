<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
    <div class="panel panel-info">
        <div class="panel-body">
           <?php  echo $this -> set_tabbar($action1, $schoolid, $_W['role'], $_W['isfounder']);?>
        </div>
    </div>
<ul class="nav nav-tabs">
    <li class="qx_edit <?php  if($operation == 'post') { ?>active<?php  } ?>"><a href="<?php  echo $this->createWebUrl('pfxm', array('op' => 'post', 'schoolid' => $schoolid))?>">添加评分项</a></li>
    <li <?php  if($operation == 'display') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('pfxm', array('op' => 'display', 'schoolid' => $schoolid))?>">评分项管理</a></li>
</ul>
 <style>
.cLine {
    overflow: hidden;
    padding: 5px 0;
  color:#000000;
}
.alert {
padding: 8px 35px 0 10px;
text-shadow: none;
-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
background-color: #f9edbe;
border: 1px solid #f0c36d;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
color: #333333;
margin-top: 5px;
}
.alert p {
margin: 0 0 10px;
display: block;
}
.alert .bold{
font-weight:bold;
}
</style>
<div class="cLine">
    <div class="alert">
	    <p>
	    	<span class="bold">使用方法：</span>    
	   		<strong><font color='red'>特别提醒: 该评分项只用于学生对老师评价的内容!</font></strong>
	    </p>
    </div>
</div>
<?php  if($operation == 'post') { ?>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <input type="hidden" name="parentid" value="<?php  echo $parent['id'];?>" />
		<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
        <div class="panel panel-default">
            <div class="panel-heading">评分项管理</div>
            <div class="panel-body">
				<div id="custom-url">
					<?php  if(!empty($sid)) { ?>
					<input type="hidden" name="old" value="111" />
					<div class="form-group">
						<label class="col-sm-2" style="width:5%">排序</label>
						<div class="col-sm-2 col-lg-2">
							<input type="text" name="ssort" placeholder="排序" class="form-control" value="<?php  echo $pfxm['ssort'];?>" />
						</div>
						<label class="col-sm-2" style="width:10%"></label>
						<label class="col-sm-2" style="width:8%">标题</label>
						<div class="col-sm-2 col-lg-2" style="width:30%">
							<input type="text" name="cTypeName" placeholder="标题" class="form-control" value="<?php  echo $pfxm['sname'];?>" />
						</div>
					</div>
					<?php  } else { ?>
					<input type="hidden" name="new[]" value="111" />
					<div class="form-group">
						<label class="col-sm-2" style="width:5%">排序</label>
						<div class="col-sm-2 col-lg-2">
							<input type="text" name="ssort_new[]" placeholder="排序" class="form-control" value="" />
						</div>
						<label class="col-sm-2" style="width:10%"></label>
						<label class="col-sm-2" style="width:8%">标题</label>
						<div class="col-sm-2 col-lg-2" style="width:30%">
							<input type="text" name="cTypeName_new[]" placeholder="标题" class="form-control" value="" />
						</div>
					</div>				
					<?php  } ?>	
                </div>	
				<div class="clearfix template"> 
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
						<div class="col-sm-9 col-xs-12">
							<a href="javascript:;" id="custom-url-add"><i class="fa fa-plus-circle"></i> 添加评分项</a>
						</div>
					</div>	
				</div>				
            </div>
        </div>
        <div class="form-group col-sm-12">
            <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
    </form>
</div>
<script>
	$('#custom-url-add').click(function(){
	var html =  '<div class="form-group">'+
				'<input type="hidden" name="new[]" value="111" />	'+
				'		<label class="col-sm-2" style="width:5%">排序</label>'+
				'		<div class="col-sm-2 col-lg-2">'+
				'			<input type="text" name="ssort_new[]" placeholder="排序" class="form-control" value="" />'+
				'		</div>'+
				'		<label class="col-sm-2" style="width:10%"></label>'+
				'		<label class="col-sm-2" style="width:8%">标题</label>'+
				'		<div class="col-sm-2 col-lg-2" style="width:30%">'+
				'			<input type="text" name="cTypeName_new[]" placeholder="标题" class="form-control" value="" />'+
				'		</div>'+
				'	<div class="col-sm-1" style="margin-top:5px">'+
				'   	<a href="javascript:;" class="custom-url-del"><i class="fa fa-times-circle"></i></a>'+
				'	</div>'+
				'</div>';
			;
	$('#custom-url').append(html);
});

$(document).on('click', '.custom-url-del', function(){
	$(this).parent().parent().remove();
	return false;
});	
</script>
<?php  } else if($operation == 'display') { ?>
<div class="main">
    <div class="panel panel-default">
        <div class="panel-body">
            <a class="btn btn-primary" href="javascript:location.reload()"><i class="fa fa-refresh"></i>刷新</a>
        </div>
    </div>
    <div class="panel panel-default">
        <form action="" method="post" class="form-horizontal form" >
            <input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
            <div class="table-responsive panel-body">
                <table class="table table-hover">
                    <thead class="navbar-inner">
                    <tr>
					    <th style="width:100px;">ID</th>
					    <th style="width:100px;">序号</th>
                        <th>评分项目</th>
                        <th class="qx_e_d" style="text-align:right;">编辑/删除</th>
                    </tr>
                    </thead>
                    <tbody id="level-list">
	                    <?php  if(is_array($pfxm)) { foreach($pfxm as $row) { ?>
	                    <tr>
						    <td><div class="type-parent"><?php  echo $row['sid'];?></div></td>
						    <td><div class="type-parent"><?php  echo $row['ssort'];?></div></td>
	                        <td><div class="type-parent"><?php  echo $row['sname'];?>&nbsp;&nbsp;</div></td>
	                        <td class="qx_e_d" style="text-align:right;"><a class="btn btn-default btn-sm qx_edit" href="<?php  echo $this->createWebUrl('pfxm', array('op' => 'post', 'sid' => $row['sid'], 'schoolid' => $schoolid))?>" title="编辑"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a class="btn btn-default btn-sm qx_e_d" href="<?php  echo $this->createWebUrl('pfxm', array('op' => 'delete', 'sid' => $row['sid'], 'schoolid' => $schoolid))?>" onclick="return confirm('确认删除此评分项吗？');return false;" title="删除"><i class="fa fa-times"></i></a></td>
	                    </tr>
	                    <?php  } } ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <?php  echo $pager;?>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		var e_d = 2 ;
		<?php  if(!(IsHasQx($tid_global,1000242,1,$schoolid))) { ?>
			$(".qx_edit").hide();
			e_d = e_d - 1 ;
		<?php  } ?>
		<?php  if(!(IsHasQx($tid_global,1000243,1,$schoolid))) { ?>
			$(".qx_delete").hide();
			e_d = e_d - 1 ;
		<?php  } ?>
		if(e_d == 0){
			$(".qx_e_d").hide();
		}
	});	
</script>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>