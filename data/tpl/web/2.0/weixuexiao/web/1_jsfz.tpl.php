<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
<div class="panel panel-info">
	<div class="panel-body">
	   <?php  echo $this -> set_tabbar($action1, $schoolid, $_W['role'], $_W['isfounder'], $_W['schooltype']);?>
	</div>
</div>
<ul class="nav nav-tabs">
    <li <?php  if($operation == 'post') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('jsfz', array('op' => 'post', 'schoolid' => $schoolid))?>">添加分组</a></li>
    <li <?php  if($operation == 'display') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('jsfz', array('op' => 'display', 'schoolid' => $schoolid))?>">分组管理</a></li>
</ul>
 <style>
.cLine {overflow: hidden;padding: 5px 0;color:#000000;}
.alert {padding: 8px 35px 0 10px;text-shadow: none;-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);background-color: #f9edbe;border: 1px solid #f0c36d;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;color: #333333;margin-top: 5px;}
.alert p {margin: 0 0 10px;display: block;}
.alert .bold{font-weight:bold;}
 </style>
<div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>    
   <strong><font color='red'>特别提醒: 当你删除该时段项的时候,该时段项下相关的所有数据都会被删除,请谨慎操作!以免丢失数据!</font></strong>
  
   填写分组,如 职工，教务处，政教处，后勤处....
  <?php  if($_W['isfounder']) { ?> </br>特别说明：此分组暂时应用与讯贞考勤用于识别教师或学生之功能，暂未进行扩展，优米考勤机无需在次进行设置也可以识别<?php  } ?>
    </p>
    </div>
</div>
<?php  if($operation == 'post') { ?>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <input type="hidden" name="parentid" value="<?php  echo $parent['id'];?>" />
		<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
        <!--<div class="panel panel-default">
            <div class="panel-heading">
                分组编辑
            </div>
            <div class="panel-body">
                <?php  if(!empty($parentid)) { ?>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">上级分类</label>
                    <div class="col-sm-9">
                        <?php  echo $parent['name'];?>
                    </div>
                </div>
                <?php  } ?>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">排序</label>
                    <div class="col-sm-9">
                        <input type="text" name="ssort" class="form-control" value="<?php  echo $jsfz['ssort'];?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">分组名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="catename" class="form-control" value="<?php  echo $jsfz['sname'];?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">称谓</label>
                    <div class="col-sm-9">
                        <input type="text" name="pname" class="form-control" value="<?php  echo $jsfz['pname'];?>" />
						<span class="help-block">用于讯贞考勤机播报称谓,其他暂未扩展</span>
                    </div>
                </div>				
            </div>
        </div>-->
         <div class="panel panel-default">
            <div class="panel-heading">教师分组管理</div>
            <div class="panel-body">
				<div id="custom-url">
				<?php  if(!empty($sid)) { ?>
					<input type="hidden" name="old" value="111" />
					<div class="form-group">
						<label class="col-sm-2" style="width:5%">排序</label>
						<div class="col-sm-2 col-lg-2">
							<input type="text" name="ssort" placeholder="排序" class="form-control" value="<?php  echo $jsfz['ssort'];?>" />
						</div>
						<label class="col-sm-2" style="width:8%">分组名称</label>
						<div class="col-sm-2 col-lg-2" style="width:15%">
							<input type="text" name="catename" placeholder="分组名称" class="form-control" value="<?php  echo $jsfz['sname'];?>" />
						</div>
						<label class="col-sm-2"  style="width:5%">称谓</label>
                    <div class="col-sm-2 col-lg-2" style="width:20%">
                        <input type="text" name="pname" class="form-control" value="<?php  echo $jsfz['pname'];?>" />
						<span class="help-block">用于讯贞考勤机播报称谓,其他暂未扩展</span>
                    </div>
						
					</div>
				<?php  } else { ?>
					<input type="hidden" name="new[]" value="111" />
					<div class="form-group">
						<label class="col-sm-2" style="width:5%">排序</label>
						<div class="col-sm-2 col-lg-2">
							<input type="text" name="ssort_new[]" placeholder="排序" class="form-control" value="" />
						</div>
						<label class="col-sm-2" style="width:8%">分组名称</label>
						<div class="col-sm-2 col-lg-2" style="width:15%">
							<input type="text" name="catename_new[]" placeholder="分组名称" class="form-control" value="" />
						</div>
						<label class="col-sm-2"  style="width:5%">称谓</label>
                    <div class="col-sm-2 col-lg-2" style="width:20%">
                        <input type="text" name="pname_new[]" class="form-control" value="" />
						<span class="help-block">用于讯贞考勤机播报称谓,其他暂未扩展</span>
                    </div>
					</div>				
				<?php  } ?>	
                </div>	
				<div class="clearfix template"> 
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
						<div class="col-sm-9 col-xs-12">
							<a href="javascript:;" id="custom-url-add"><i class="fa fa-plus-circle"></i> 添加分组</a>
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
				'		<label class="col-sm-2" style="width:8%">分组名称</label>'+
				'		<div class="col-sm-2 col-lg-2" style="width:15%">'+
				'			<input type="text" name="catename_new[]" placeholder="分组名称" class="form-control" value="" />'+
				'		</div>'+
				'		<label class="col-sm-2"  style="width:5%">称谓</label>'+
                '	    <div class="col-sm-2 col-lg-2" style="width:20%">'+
                '       <input type="text" name="pname_new[]" class="form-control" value="" />'+
				'		<span class="help-block">用于讯贞考勤机播报称谓,其他暂未扩展</span>'+
                '   </div>'+
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
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:60px;">
</div>

<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:60px;">

</div>


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
					    <th style="width:100px;">序号</th>
                        <th style="width:20%;">分组名称</th>
						<th style="width:20%;">称谓</th>
						<th style="width:20%;text-align:center">修改权限 APP端/后台</th>
						<th style="width:20%;text-align:center">划分所属教师（仅用于群发通知）</th>
                        <th style="text-align:right;">编辑/删除</th>
                    </tr>
                    </thead>
                    <tbody id="level-list">
                    <?php  if(is_array($jsfz)) { foreach($jsfz as $row) { ?>
                    <tr>
					    <td><div class="type-parent"><?php  echo $row['sid'];?></div></td>
                        <td><div class="type-parent"><?php  echo $row['sname'];?>&nbsp;&nbsp;</div></td>
						<td><div class="type-parent"><?php  echo $row['pname'];?>&nbsp;&nbsp;</div></td>
						<td style="text-align:center"><a class="btn btn-default btn-sm" onclick="set_fzqx_qd(<?php  echo $row['sid'];?>);" title="修改APP端权限"><i class="fa fa-qrcode">&nbsp;&nbsp;修改APP端权限</i></a> &nbsp;<a class="btn btn-default btn-sm" onclick="set_fzqx_ht(<?php  echo $row['sid'];?>);" title="修改APP端权限"><i class="fa fa-qrcode">&nbsp;&nbsp;修改后台权限</i></a></td>
						<td style="text-align:center"><a class="btn btn-default btn-sm" onclick="set_fz_tea(<?php  echo $row['sid'];?>);" title="划分所属教师（仅用于群发通知）"><i class="fa fa-qrcode">&nbsp;&nbsp;划分所属教师</i></a> &nbsp;</td>
                        <td style="text-align:right;"><a class="btn btn-default btn-sm" href="<?php  echo $this->createWebUrl('jsfz', array('op' => 'post', 'sid' => $row['sid'], 'schoolid' => $schoolid))?>" title="编辑"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a class="btn btn-default btn-sm" href="<?php  echo $this->createWebUrl('jsfz', array('op' => 'delete', 'sid' => $row['sid'], 'schoolid' => $schoolid))?>" onclick="return confirm('确认删除此分类吗？');return false;" title="删除"><i class="fa fa-times"></i></a></td>
                    </tr>
                    <?php  } } ?>
                    <!--tr>
                        <td colspan="3">
                            <input name="submit" type="submit" class="btn btn-primary" value="批量更新排序">
                            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                        </td>
                    </tr-->
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <?php  echo $pager;?>
</div>
<script type="text/javascript">



function set_fzqx_qd(sid){
	$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'get_fzqx_qd','schoolid'=>$schoolid))?>", {'sid': sid }, function(data) {	
//		console.log(data);
		$('#Modal1').html(data);
		$("#ModalTitle").html("APP端权限");	
		$("#submit2").hide();
		$("#submit1").show();
		$('#Modal1').modal('toggle'); 
	});
}

function set_fzqx_ht(sid){
	$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'get_fzqx_ht','schoolid'=>$schoolid))?>", {'sid': sid }, function(data1) {
		console.log(data1);
		$('#Modal1').html(data1);
		$("#ModalTitle").html("后台权限");	
		$("#submit1").hide();
		$("#submit2").show();
		$('#Modal1').modal('toggle'); 
	});
}

function set_fz_tea(sid){
  var check = $("input[type=checkbox][class!=check_all]:checked");
	$.post("<?php  echo $this->createWebUrl('jsfz',array('op'=>'get_fztid','schoolid'=>$schoolid))?>", {'sid': sid }, function(data1) {
		$('#Modal2').html(data1);
		$('#Modal2').modal('toggle'); 
	});
		
}


	
</script>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>