<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<?php  if($operation == 'display') { ?>
<script>
require(['bootstrap'],function($){
	$('.btn,.tips').hover(function(){
		$(this).tooltip('show');
	},function(){
		$(this).tooltip('hide');
	});
});
</script>
<div class="main">
<style>
.form-control-excel {height: 34px;padding: 6px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);box-shadow: inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
</style>
    <div class="panel panel-info">
        <div class="panel-heading">成绩考察</div>
		<div class="cLine">
			<div class="alert">
				<p>
					<strong><font color='red'>特别提醒:仅显示成绩期号可用的班级考察信息....</font></strong>
				</p>
			</div>
			
			<div class="panel ">
				<div class="panel-heading">
					<a class="btn btn-primary" href="<?php  echo $this->createWebUrl('chengji', array('op' => 'display','schoolid' => $schoolid))?>"><i class="fa fa-tasks"></i> 返回成绩列表</a>
				</div>
			</div>
		</div>
        <div class="panel-body">
            <form action="./index.php" method="get" class="form-horizontal" role="form">
                <input type="hidden" name="c" value="site" />
                <input type="hidden" name="a" value="entry" />
                <input type="hidden" name="m" value="weixuexiao" />
                <input type="hidden" name="do" value="review" />
				<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />		
				<div class="form-group">
                 <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">切换期号</label>	
                    <div class="col-sm-2 col-lg-2">
                        <select style="margin-right:15px;" name="search_qh" class="form-control">
                            <?php  if(is_array($qh)) { foreach($qh as $row) { ?>
                            <option value="<?php  echo $row['sid'];?>" <?php  if($this_qhid == $row['sid']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>	

					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">按年级</label>	
                    <div class="col-sm-2 col-lg-2">
                        <select style="margin-right:15px;" name="search_nj" class="form-control">
                            <?php  if(is_array($xq)) { foreach($xq as $row) { ?>
                            <option value="<?php  echo $row['sid'];?>" <?php  if($this_njid == $row['sid']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>						
                    <div class="col-sm-2 col-lg-2">
                        <button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
                    </div>	
				
					<div class="col-sm-2 col-lg-2">	
						<button class="btn btn-success" name="excel_review" value="excel_review"><i class="fa fa-download"></i>导出当前内容</button>
					</div>	
				</div>
            </form>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="table-responsive panel-body">
		<?php  if($back_result['status'] == true) { ?>
			<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
				<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
				<table class="table table-hover">
					<thead class="navbar-inner">
						<tr>
							<th style="width:10%">班级</th>
							<th style="width:15%;">期号</th>
							<?php  if(is_array($lastdata['data'])) { foreach($lastdata['data'] as $row_km) { ?>
							<th><?php  echo $row_km['km_name'];?>得分</th>
							<th><?php  echo $row_km['km_name'];?>年级排名</th>
							<?php  } } ?>
							<th>总分</th>
							<th>总分年级排名</th>
						</tr>
					</thead>
					<tbody>
						<?php  if(is_array($back_result['data'])) { foreach($back_result['data'] as $item) { ?>
						<tr>
							<td>
								<?php  echo $item['sname'];?>
							</td>	
							<td><?php  echo $this_qhinfo['sname'];?></td>
							<?php  if(is_array($item['data'])) { foreach($item['data'] as $row_km_it) { ?>
								<td><span class="label label-danger"><?php  echo $row_km_it['final_score'];?> 分</span></td>
								<td><span class="label label-info"><?php  echo $row_km_it['rank'];?></span></td>
							<?php  } } ?>
							<td><span class="label label-danger"><?php  echo $item['allscore']['score'];?> 分</span></td>
							<td><span class="label label-info"><?php  echo $item['allscore']['rank_all'];?></span></td>
						</tr>
						<?php  } } ?>
					</tbody>

				</table>
			</form>
		<?php  } else { ?>
		当前期号未设置考察
		<?php  } ?>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function(){
	var e_d = 2 ;
	<?php  if(!(IsHasQx($tid_global,1000802,1,$schoolid))) { ?>
		$(".qx_802").hide();
		e_d = e_d -1;
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000803,1,$schoolid))) { ?>
		$(".qx_803").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000804,1,$schoolid))) { ?>
		$(".qx_804").hide();
		e_d = e_d -1;
	<?php  } ?>
	
	if(e_d == 0){
		$(".qx_e_d").hide();
	}
	
    $(".check_all").click(function(){
        var checked = $(this).get(0).checked;
        $("input[type=checkbox]").attr("checked",checked);
    });

    $("input[name=btndeleteall]").click(function(){
        var check = $("input[type=checkbox][class!=check_all]:checked");
        if(check.length < 1){
            alert('请选择要删除的成绩!');
            return false;
        }
        if(confirm("确认要删除选择的成绩?")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            var url = "<?php  echo $this->createWebUrl('chengji', array('op' => 'deleteall','schoolid' => $schoolid))?>";
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
<?php  } else if($operation == 'post') { ?>
<div class="panel panel-info">
   <div class="panel-heading"><a class="btn btn-primary" onclick="javascript :history.back(-1);"><i class="fa fa-tasks"></i> 返回</a></div>
</div>
<div class="main">
<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
		<input type="hidden" name="sid" value="<?php  echo $item['sid'];?>" />	
		<input type="hidden" name="bj" value="<?php  echo $item['bj_id'];?>" />
		<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
        <div class="panel panel-default">
            <div class="panel-heading">
                修改成绩
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">学生姓名:</label>
                    <div class="col-sm-9" style="color:red;">
                       <?php  echo $student['s_name'];?>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">所在班级:</label>
                    <div class="col-sm-9" style="color:red;">
                        <?php  echo $bj['sname'];?>
                    </div>
                </div>	
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">选择期号</label>
                    <div class="col-sm-9">
                        <select class="form-control" style="margin-right:15px;" name="qh" onchange="fetchChildKm(this.options[this.selectedIndex].value)"  autocomplete="off" class="form-control">
                            <option value="0">请选择期号</option>
                            <?php  if(is_array($qh)) { foreach($qh as $it) { ?>
                            <option value="<?php  echo $it['sid'];?>" <?php  if($it['sid'] == $item['qh_id']) { ?> selected="selected"<?php  } ?>><?php  echo $it['sname'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>
                </div>					
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">选择科目</label>
                    <div class="col-sm-9">
                        <select class="form-control" style="margin-right:15px;" name="km" onchange="fetchChildKm(this.options[this.selectedIndex].value)"  autocomplete="off" class="form-control">
                            <option value="0">请选择科目</option>
                            <?php  if(is_array($km)) { foreach($km as $it) { ?>
                            <option value="<?php  echo $it['sid'];?>" <?php  if($it['sid'] == $item['km_id']) { ?> selected="selected"<?php  } ?>><?php  echo $it['sname'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>
                </div>					
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">考试分数</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" name="score" class="form-control" value="<?php  echo $item['my_score'];?>" />
                        </div>
                    </div>
                </div>	
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">教师点评</label>
                    <div class="col-sm-9">
                        <textarea style="height:150px;" class="form-control richtext" name="info" cols="70"><?php  echo $item['info'];?></textarea>
                        <span class="help-block"></span>
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
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>