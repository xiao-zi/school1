<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<div class="panel panel-info">
	<div class="panel-body">
		<ul class="nav nav-tabs">
			<?php  if(($tid_global =='founder' || $tid_global == 'owner' || (strstr($qxarr,'1000901')))) { ?>
			<li <?php  if($_GPC['do']=='kecheng') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('kecheng', array('op' => 'display', 'schoolid' => $schoolid))?>">课程系统</a></li>
			<?php  } ?>
			<?php  if(($tid_global =='founder' || $tid_global == 'owner' || (strstr($qxarr,'1000921')))) { ?>
			<li <?php  if($_GPC['do']=='kcbiao') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('kcbiao', array('op' => 'display', 'schoolid' => $schoolid))?>">课时管理</a></li>
			<?php  } ?>
			<?php  if(($tid_global =='founder'|| $tid_global == 'owner' || (strstr($qxarr,'1000941')))) { ?>
			<li <?php  if($_GPC['do']=='kcsign') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('kcsign', array('op' => 'display', 'schoolid' => $schoolid))?>">签到管理</a></li>
			<?php  } ?>
			<li <?php  if($_GPC['do']=='gongkaike') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('gongkaike', array('op' => 'display', 'schoolid' => $schoolid))?>">公开课系统</a></li>
		</ul>	
	</div>
</div>
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
        .form-control-excel {
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
    </style>
    <div class="panel panel-info">
        <div class="panel-heading">公开课管理</div>
        <div class="panel-body">
            <form action="./index.php" method="get" class="form-horizontal" role="form">
                <input type="hidden" name="c" value="site" />
                <input type="hidden" name="a" value="entry" />
                <input type="hidden" name="m" value="weixuexiao" />
                <input type="hidden" name="do" value="gongkaike" />
				<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />

				 <div class="form-group">
					 <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">按年级</label>	
                    <div class="col-sm-2 col-lg-2">
                        <select style="margin-right:15px;" name="xq_id" class="form-control">
                            <option value="0">请选择年级搜索</option>
                            <?php  if(is_array($xueqi)) { foreach($xueqi as $row) { ?>
                            <option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $_GPC['xq_id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">按班级</label>
                    <div class="col-sm-2 col-lg-2">
                        <select style="margin-right:15px;" name="bj_id" class="form-control">
                            <option value="0">请选择班级搜索</option>
                            <?php  if(is_array($bj)) { foreach($bj as $row) { ?>
                            <option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $_GPC['bj_id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">按科目</label>	
                    <div class="col-sm-2 col-lg-2">
                        <select style="margin-right:15px;" name="km_id" class="form-control">
                            <option value="0">请选择科目搜索</option>
                            <?php  if(is_array($km)) { foreach($km as $row) { ?>
                            <option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $_GPC['km_id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>						
                   						
                    		
				</div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="width: 100px;">按教师名称</label>
                    <div class="col-sm-2 col-lg-2">
                        <input class="form-control" name="t_name" id="" type="text" value="<?php  echo $_GPC['t_name'];?>">
                    </div>
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">按课程名称</label>
                    <div class="col-sm-2 col-lg-2">
                        <input class="form-control" name="name" id="" type="text" value="<?php  echo $_GPC['name'];?>">
                    </div>
                    	<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="width: 100px;">按时间范围</label>
					<div class="col-sm-2 col-lg-2">
						<?php  echo tpl_form_field_daterange('searchtime', array('start' => date('Y-m-d', $starttime), 'end' => date('Y-m-d', $endtime)));?>
					</div>

					 <div class="col-sm-2 col-lg-2" style="margin-left: 55px;">
                        <button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
                    </div>				
				</div>	
				

				<div class="form-group">
				

					</div>
            </form>
            <div class="col-sm-2 col-lg-2 qx_952">						
				<a class="btn btn-default  " href="<?php  echo $this->createWebUrl('gongkaike', array( 'op' => 'post', 'schoolid' => $schoolid))?>" ><i class="fa fa-qrcode">&nbsp;&nbsp;添加公开课</i></a>
            </div>	
             <div class="col-sm-2 col-lg-2 qx_957">						
				<a class="btn btn-default  " href="<?php  echo $this->createWebUrl('gkkpjxt', array( 'op' => 'display', 'schoolid' => $schoolid))?>" ><i class="fa fa-qrcode">&nbsp;&nbsp;设置评价项</i></a>
            </div>
            <div class="col-sm-2 col-lg-2 qx_958">						
				<a class="btn btn-default  " href="<?php  echo $this->createWebUrl('gkkpjtj', array( 'op' => 'gettongji_js', 'schoolid' => $schoolid))?>" ><i class="fa fa-qrcode">&nbsp;&nbsp;查看统计</i></a>
            </div>

            <div class="col-sm-2 col-lg-2 qx_953">						
				<a class="btn btn-success  " href="<?php  echo $this->createWebUrl('gongkaike', array( 'op' => 'out_putcode', 'schoolid' => $schoolid))?>" ><i class="fa fa-qrcode">&nbsp;&nbsp;导出公开课</i></a>
            </div>
        </div>
    </div>
    <!--<div class="panel panel-default file-container" style="display:none;">
        <div class="panel-body">
            <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
                <input type="hidden" name="leadExcel" value="true">
                <input type="hidden" name="c" value="site" />
                <input type="hidden" name="a" value="entry" />
                <input type="hidden" name="m" value="weixuexiao" />
                <input type="hidden" name="do" value="UploadExcel" />
                <input type="hidden" name="ac" value="kecheng" />
				<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />

                <a class="btn btn-primary" href="javascript:location.reload()"><i class="fa fa-refresh"></i> 刷新</a>
                <input name="viewfile" id="viewfile" type="text" value="" style="margin-left: 40px;" class="form-control-excel" readonly>
                <a class="btn btn-primary"><label for="unload" style="margin: 0px;padding: 0px;">上传...</label></a>
                <input type="file" class="pull-left btn-primary span3" name="inputExcel" id="unload" style="display: none;"
                       onchange="document.getElementById('viewfile').value=this.value;this.style.display='none';">
                <input type="submit" class="btn btn-primary" name="btnExcel" value="导入数据">
                <a class="btn btn-primary" href="../addons/weixuexiao/public/example/example_kecheng.xls">下载导入模板</a>
            </form>
        </div>
    </div>-->	
    <div class="panel panel-default">
        <div class="table-responsive panel-body">
        <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
		<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
        <table class="table table-hover">
			<thead class="navbar-inner">
				<tr>
                    <th class='with-checkbox' style="width: 20px;"><input type="checkbox" class="check_all" /></th>
					<th style="width:6%;" >排序</th>
					<th style="width:6%;" >课程ID</th>
					<th >授课教师</th>
					<th >课程名称</th>
					<th >授课班级/年级</th>
					<th >授课科目</th>	
					<th >授课教室</th>	
					
                    <th >状态</th>
                    <th class="qx_955" style="width:8%">查看评价</th>	
               		<th style="width:8%;">创建人</th>
					<th class="qx_e_d" style="text-align:right; width:8%;">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $item) { ?>
				<tr>
                    <td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $item['id'];?>"></td>
					<td><input type="text" class="form-control" name="ssort[<?php  echo $item['id'];?>]" value="<?php  echo $item['ssort'];?>"></td>
					<td style="text-align:center;color:red;font-size:20px;font-weight:blod;"><?php  echo $item['id'];?></td>
					<td style="overflow:visible; word-break:break-all; text-overflow:auto;white-space:normal"><?php  echo $item['tname'];?></td>
					
					<td style="overflow:visible; word-break:break-all; text-overflow:auto;white-space:normal">
              	    <div><?php  echo $item['name'];?></br><span class="label label-info"><?php  echo date('Y-m-d H:i:s',$item['starttime'])." 至 ".date('Y-m-d  H:i:s',$item['endtime'])?></span></div>                   
                    </td>
					
					
                    <td>
					    <?php  echo $category[$item['xq_id']]['sname'];?>/
					   <?php  echo $category[$item['bj_id']]['sname'];?>
                       
                    </td>					
                    <td>
                        <?php  if(!empty($category[$item['km_id']])) { ?><?php  echo $category[$item['km_id']]['sname'];?><?php  } ?>
                    </td>
					<td><?php  echo $item['addr'];?></td>
				
                    <td style="overflow:visible; word-break:break-all; text-overflow:visible;white-space:normal">
                    <?php  if($item['starttime']>TIMESTAMP) { ?><span class="label label-default">未开始</span><?php  } ?>
                    <?php  if($item['starttime']<TIMESTAMP && $item['endtime']>TIMESTAMP) { ?><span class="label label-info">授课中</span><?php  } ?>
                    <?php  if($item['endtime']<TIMESTAMP) { ?><span class="label label-warning">结束</span><?php  } ?></br></br>
                    </td>
                    <td class="qx_955" style="overflow:visible; word-break:break-all; text-overflow:auto;white-space:normal"><?php  if($item['is_pj'] == 0) { ?> <a class="btn btn-success btn-sm"  title="查看评价" href="<?php  echo $this->createWebUrl('showgkkpj', array('gkkid' => $item['id'], 'op' => 'display', 'schoolid' => $schoolid))?>" >&nbsp;&nbsp;查看评价</i></a><?php  } else { ?><span class="label label-danger">不可评价</span><?php  } ?></td>
                    <td>
                        <?php  if($item['createtid'] == '-1' || empty($item['createtid'])) { ?>
                            <span class="label label-danger">管理员</span>
                        <?php  } else { ?>
                        <span class="label label-warning"><?php  echo $item['createtname'];?></span>
                        <?php  } ?>


                    </td>
					<td class="qx_e_d" style="text-align:right;">
						<a class="btn btn-default btn-sm qx_952" href="<?php  echo $this->createWebUrl('gongkaike', array('id' => $item['id'], 'op' => 'post', 'schoolid' => $schoolid))?>" title="编辑"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a class="btn btn-default btn-sm qx_954" href="<?php  echo $this->createWebUrl('gongkaike', array('id' => $item['id'], 'op' => 'delete', 'schoolid' => $schoolid))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" title="删除"><i class="fa fa-times"></i></a>
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
			<tr>
				<td colspan="7">
                    <input name="submit" type="submit" class="btn btn-primary qx_952" value="批量修改排序">
                    <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                </td>			
				<td colspan="10">
					<input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
                    <input type="button" class="btn btn-primary qx_954" name="btndeleteall" value="批量删除" />
				</td>
			</tr>
		</table>
        <?php  echo $pager;?>
    </form>
        </div>
    </div>
</div>
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="  margin-top: 60px;">
	<div class="modal-dialog modal-lg" role="document">		
		<div class="modal-content">			
				
			<div class="modal-header">					
				
				<h4 class="modal-title" id="myModalLabel">二维码</h4>	
			</div>
			<div class="modal-body">
				<table class="table table-hover table-bordered"  style="border-width: 0px;" >						
					<tbody>
						<tr>	
							<th style="border-width: 0px;text-align:right;" id="qr_tit" >								
								二维码:</br>
								<span id="span_qr" style="color:red"></span>
							</th>							
							<td style="border-width: 0px;" id="qr_img">								
								<?php  echo tomedia($banner['thumb'])?>	
							</td>						
						</tr>

					</tbody>
				</table>				
			</div>				
			<div class="modal-footer">	
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				<button type="button" class="btn btn-primary" id="submit" onclick="recreate_qr(this)" >重新生成二维码</button>
			</div>			
		
		</div>	
	</div>
</div>
<script type="text/javascript">
function recreate_qr(e){
	 var id = e.value;
		$.post("<?php  echo $this->createWebUrl('indexajax', array('op' => 'recreateqr'))?>",{id:id,schoolid:<?php  echo $schoolid;?>}, function(data){
			if(data.result){
				alert(data.msg);
				location.reload();
			}else{
				alert(data.msg);
				location.reload();			
			}
		},'json');	
}
function show_order(id){
	 var id = id;
		$("#qr_img").empty();
		$('#span_qr').empty();
		$('#submit').hide();
		//$('#submit').val('');
	 $('#Modal1').modal('toggle');
	 $('#macidforabb').val(id);
		$.post("<?php  echo $this->createWebUrl('indexajax', array('op' => 'getgkkqr'))?>",{id:id}, function(data){
			//alert("yes");
			//console.log(data);
	
			if(data.result){
				var html = '<img src="'+data['qrimg']+'" width="300">';	
				var expire = data['expire'];
				var createtime = data['createtime'];
				var overtime = createtime + expire;
				var nowtime = data['nowtime'];
				//alert(overtime);
				if( nowtime > overtime)
				{
					$('#span_qr').append('【已过期】');
					$('#submit').show();
					$('#submit').val(id);
					}				
				$('#qr_img').append(html);	
			}else{
				var html =  '<span>查看二维码失败</span>';
				$('#qr_img').append(html);
				$('#submit').show();
				$('#submit').val(id);			
			}
		},'json');	 
}
	var category = <?php  echo json_encode($children)?>;

$(function(){
	var e_d = 2 ;
	<?php  if(!(IsHasQx($tid_global,1000952,1,$schoolid))) { ?>
		$(".qx_952").hide();
		e_d = e_d -1  ;
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000953,1,$schoolid))) { ?>
		$(".qx_953").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000955,1,$schoolid))) { ?>
		$(".qx_955").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000957,1,$schoolid))) { ?>
		$(".qx_957").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000959,1,$schoolid))) { ?>
		$(".qx_959").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000954,1,$schoolid))) { ?>
		$(".qx_954").hide();
		e_d = e_d -1  ;
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
            alert('请选择要删除的课程!');
            return false;
        }
        if(confirm("确认要删除选择的课程?")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            var url = "<?php  echo $this->createWebUrl('gongkaike', array('op' => 'deleteall', 'schoolid' => $schoolid))?>";
            $.post(
                url,
                {idArr:id},
                function(data){
                    alert('操作成功!');
                    location.reload();
                },'json'
            );
        }
    });

});
</script>
<?php  } else if($operation == 'post') { ?>
<style>
.daterangepicker select.hourselect, .daterangepicker select.minuteselect{

	width:auto !important;
}
	
</style>
<div class="panel panel-info">
   <div class="panel-heading"><a class="btn btn-primary" onclick="javascript :history.back(-1);"><i class="fa fa-tasks"></i>返回公开课列表</a></div>
</div>
<div class="main">
<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
		<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
        <div class="panel panel-default">
            <div class="panel-heading">编辑公开课</div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">公开课名称：</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" value="<?php  echo $item['name'];?>"  required oninvalid="setCustomValidity('请填写公开课名称！');" oninput="setCustomValidity('');"/>
                    </div>
                </div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">是否允许评价：</label>
                    <div class="col-sm-2 col-lg-2">
                        <label class="radio-inline">
                            <input type="radio" name="is_pj" value="0" <?php  if($item['is_pj']==0) { ?>checked<?php  } ?> id="pj_yes">是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="is_pj" value="1" <?php  if($item['is_pj']==1) { ?>checked<?php  } ?> id="pj_no">否
                        </label>
                        <div class="help-block">允许评价：默认允许</div>
                    </div>									
                </div>
                 <div class="form-group"  <?php  if($item['is_pj']==0) { ?>style="display:block"<?php  } else { ?>style="display:none"<?php  } ?> >
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">评价标准：</label>
                    <div class="col-sm-2 col-lg-2">                     
                            <select style="margin-right:15px;" name="bzid" class="form-control">
	                       
                            <option value="0">请选择评价标准</option>
                            <?php  if(is_array($gkkpjbz)) { foreach($gkkpjbz as $row) { ?>
                            <option value="<?php  echo $row['id'];?>" <?php  if($row['id'] == $item['bzid']) { ?> selected="selected"<?php  } ?>><?php  echo $row['title'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>
                </div>			

                <div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">教师姓名:</label>
                    <div class="col-sm-2 col-lg-2">
                        <select style="margin-right:15px;" name="tid" class="form-control">
	                       
                            <option value="0">请选择授课老师</option>
                            <?php  if(is_array($teachers)) { foreach($teachers as $row) { ?>
                            <option value="<?php  echo $row['id'];?>" <?php  if($row['id'] == $item['tid']) { ?> selected="selected"<?php  } ?>><?php  echo $row['tname'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>					
				</div>
				<?php  if($school['issale'] == 1 || $school['issale'] == 2) { ?>
				<!--<div class="form-group">	
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">报名费用：</label>
                    <div class="col-sm-2 col-lg-2">
                         <div class="input-group">					
                            <input type="text" class="form-control" name="cose" value="<?php  echo $item['cose'];?>" />
							<div class="help-block">输入课程所需费用</div>
                         </div>
				    </div>
					<?php  if($_W['isfounder']) { ?>
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">付费至：</label>
                    <div class="col-sm-2 col-lg-2">
                         <div class="input-group">
							<select class="form-control" name="payweid" id="payweid">
								<option value="0">请选择收款账户</option>
								<?php  if(is_array($payweid)) { foreach($payweid as $row) { ?>
								<option value="<?php  echo $row['uniacid'];?>" <?php  if($item['payweid']==$row['uniacid']) { ?>selected<?php  } ?>><?php  echo $row['name'];?></option>
								<?php  } } ?>
							</select>
							<div class="help-block">付费至指定公众号设置的支付方式内，不设置这付费至当前公众号</div>
                         </div>
				    </div>
					<?php  } ?>	
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">人数限制：</label>
                    <div class="col-sm-2 col-lg-2">
                         <div class="input-group">					
                            <input type="text" class="form-control" name="minge" value="<?php  echo $item['minge'];?>" />
							<div class="help-block">输入课程限报人数</div>
                         </div>
				    </div>
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">已报人数：</label>
                    <div class="col-sm-2 col-lg-2">
                         <div class="input-group">					
                            <input type="text" class="form-control" name="yibao" value="<?php  echo $item['yibao'];?>" />
							<div class="help-block">已报虚拟人数</div>
                         </div>
				    </div>					
                </div>-->
				<?php  } else if($school['issale'] == 3 || $school['issale'] == 4) { ?>
				<!--<div class="form-group">	
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">人数限制：</label>
                    <div class="col-sm-2 col-lg-2">
                         <div class="input-group">					
                            <input type="text" class="form-control" name="minge" value="<?php  echo $item['minge'];?>" />
							<div class="help-block">输入课程限报人数</div>
                         </div>
				    </div>
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">已报人数：</label>
                    <div class="col-sm-2 col-lg-2">
                         <div class="input-group">					
                            <input type="text" class="form-control" name="yibao" value="<?php  echo $item['yibao'];?>" />
							<div class="help-block">已报虚拟人数(不会占用名额)</div>
                         </div>
				    </div>					
                </div>-->				
                <?php  } ?>				
				<div class="form-group">	
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">授课地址：</label>
                    <div class="col-sm-2 col-lg-2">
                         <div class="input-group">					
                            <input type="text" class="form-control" name="addr" value="<?php  echo $item['addr'];?>" required oninvalid="setCustomValidity('请填写公开课授课地址！');" oninput="setCustomValidity('');"/>
                            <div class="help-block">如：多媒体教室，阶梯教室，初一二班教室等</div>
                         </div>
					</div>	
                    <!--<div class="col-sm-2 col-lg-2">
                        <label class="radio-inline">
                            <input type="radio" name="is_hot" value="1" <?php  if($item['is_hot']==1 || empty($item)) { ?>checked<?php  } ?>>是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="is_hot" value="0" <?php  if(isset($item['is_hot']) && empty($item['is_hot'])) { ?>checked<?php  } ?>>否
                        </label>
                        <div class="help-block">是否精品课程</div>
                    </div>-->									
                </div>
                <div class="form-group">
                <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">选择年级:</label>
				<div class="col-sm-2 col-lg-2">
					<select style="margin-right:15px;" name="xq" id="xq" class="form-control">
						<option value="0">请选择年级</option>
						<?php  if(is_array($xueqi)) { foreach($xueqi as $it) { ?>
						<option value="<?php  echo $it['sid'];?>" <?php  if($it['sid'] == $item['xq_id']) { ?> selected="selected"<?php  } ?>><?php  echo $it['sname'];?></option>
						<?php  } } ?>
					</select>
				</div>
                <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">选择班级:</label>
				<div class="col-sm-2 col-lg-2">
					<select style="margin-right:15px;" name="bj" id="bj" class="form-control">
						<option value="0">请选择班级</option>
						<?php  if(is_array($bj)) { foreach($bj as $it) { ?>
						<option value="<?php  echo $it['sid'];?>" <?php  if($it['sid'] == $item['bj_id']) { ?> selected="selected"<?php  } ?>><?php  echo $it['sname'];?></option>
						<?php  } } ?>
					</select>
				</div>
                <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">选择科目:</label>
				<div class="col-sm-2 col-lg-2">
					<select style="margin-right:15px;" name="km" class="form-control">
						<option value="0">请选择科目</option>
						<?php  if(is_array($km)) { foreach($km as $it) { ?>
						<option value="<?php  echo $it['sid'];?>" <?php  if($it['sid'] == $item['km_id']) { ?> selected="selected"<?php  } ?>><?php  echo $it['sname'];?></option>
						<?php  } } ?>
					</select>
				</div>
            </div> 	

				<div class="form-group">
                   <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">上课日期:</label>
                     <div class="col-sm-2 col-lg-2">
				        <div class="input-group">
					        <?php  if(!empty($item['starttime'])) { ?>
				    <?php  echo tpl_form_field_date('date' ,date('Y-m-d', $item['starttime']))?>
				    <?php  } else { ?>
					<?php  echo tpl_form_field_date('date' ,date('Y-m-d', time()))?>
				    <?php  } ?>
                        </div>
				     </div>
                   	<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">开始时间:</label>
                     <div class="col-sm-2 col-lg-2">
				        <div class="input-group">
				    <?php  echo tpl_form_field_clock('starttime'  ,date('H:i', $item['starttime']))?>
                        </div>
				     </div>
				    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">结束时间:</label>
                     <div class="col-sm-2 col-lg-2">
				        <div class="input-group">
				    <?php  echo tpl_form_field_clock('endtime' ,date('H:i', $item['endtime']))?>
                        </div>
				     </div> 				 
		 
                </div>	
			    <div class="form-group">
                     <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">课程大纲</label>
                        <div class="col-sm-9">
							<?php  echo tpl_ueditor('dagang', $item['dagang']);?>
                        <div class="help-block">课程大纲</div>
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
<script type="text/javascript">
$(document).ready(function() {
	$("#xq_id1").change(function() {
		var type = 1;
		var cityId = $("#xq_id1 option:selected").attr('value');
		changeGrade(cityId,type, function() {
		});
	});	
	$("#xq_id2").change(function() {
		var type = 2;
		var cityId = $("#xq_id2 option:selected").attr('value');
		changeGrade(cityId,type, function() {
		});
	});
	$("#xq_id3").change(function() {
		var type = 3;
		var cityId = $("#xq_id3 option:selected").attr('value');
		changeGrade(cityId,type, function() {
		});
	});	
	$("#xq").change(function() {
		var type = 4;
		var cityId = $("#xq option:selected").attr('value');
		changeGrade(cityId,type, function() {
		});
	});	
});	
function changeGrade(gradeId, type, __result) {
	
	//$('#njidid').val(gradeId);
	
	var schoolid = "<?php  echo $schoolid;?>";
	var classlevel = [];
	//获取班次
	$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'getbjlist'))?>", {'gradeId': gradeId, 'schoolid': schoolid}, function(data) {
	
		data = JSON.parse(data);
		classlevel = data.bjlist;
		
		var html = '';
		if (type == 1){
		html += '<select id="bj_id1"><option value="">请选择班级</option>';
		}
		if (type == 2){
		html += '<select id="bj_id2"><option value="">请选择班级</option>';
		}	
		if (type == 3){
		html += '<select id="bj_id2"><option value="">请选择班级</option>';
		}
		if (type == 4){
		html += '<select id="bj"><option value="">请选择班级</option>';
		}		
		if (classlevel != '') {
			for (var i in classlevel) {
				html += '<option value="' + classlevel[i].sid + '">' + classlevel[i].sname + '</option>';
			}
		}
		if (type == 1){
			$('#bj_id1').html(html);
		}
		if (type == 2){
			$('#bj_id2').html(html);
		}	
		if (type == 3){
			$('#bj_id3').html(html);
		}	
		if (type == 4){
			$('#bj').html(html);
		}		
	});

}
</script>	
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>