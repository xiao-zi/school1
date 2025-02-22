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
        <div class="panel-heading">缴费订单列表</div>
		<div class="panel-body">
			<form action="./index.php" method="get" class="form-horizontal" role="form">
				<input type="hidden" name="c" value="site">
				<input type="hidden" name="a" value="entry">
				<input type="hidden" name="m" value="weixuexiao">
				<input type="hidden" name="do" value="mallorder"/>
				<input type="hidden" name="op" value="display"/>
				<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
				<input type="hidden" name="status" value="<?php  echo $_GPC['status'];?>"/>
				<input type="hidden" name="cop" value="<?php  echo $_GPC['cop'];?>"/>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-1 control-label">支付状态</label>
					<div class="col-sm-9 col-xs-9 col-md-9">
						<div class="btn-group">
							<a href="<?php  echo $this->createWebUrl('mallorder', array('id' => $item['id'], 'status' => '-1','cop'=>$cop, 'schoolid' => $schoolid))?>" class="btn <?php  if($status == -1) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">不限</a>
							<a href="<?php  echo $this->createWebUrl('mallorder', array('id' => $item['id'], 'status' => '1','cop'=>$cop, 'schoolid' => $schoolid))?>" class="btn <?php  if($status == 1) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">未支付</a>
							<a href="<?php  echo $this->createWebUrl('mallorder', array('id' => $item['id'], 'status' => '2','cop'=>$cop, 'schoolid' => $schoolid))?>" class="btn <?php  if($status == 2) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">待发货</a>
							<a href="<?php  echo $this->createWebUrl('mallorder', array('id' => $item['id'], 'status' => '3','cop'=>$cop, 'schoolid' => $schoolid))?>" class="btn <?php  if($status == 3) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">已发货</a>
							<a href="<?php  echo $this->createWebUrl('mallorder', array('id' => $item['id'], 'status' => '4','cop'=>$cop, 'schoolid' => $schoolid))?>" class="btn <?php  if($status == 4) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">已完成</a>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-1 control-label">订单类型</label>
					<div class="col-sm-9 col-xs-9 col-md-9">
						<div class="btn-group">
							<a href="<?php  echo $this->createWebUrl('mallorder', array('id' => $item['id'], 'cop' => '-1','status'=>$status, 'schoolid' => $schoolid))?>" class="btn <?php  if($cop == -1) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">不限</a>
							<a href="<?php  echo $this->createWebUrl('mallorder', array('id' => $item['id'], 'cop' => '1', 'status'=>$status,'schoolid' => $schoolid))?>" class="btn <?php  if($cop == 1) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">纯积分</a>
							<a href="<?php  echo $this->createWebUrl('mallorder', array('id' => $item['id'], 'cop' => '2', 'status'=>$status,'schoolid' => $schoolid))?>" class="btn <?php  if($cop == 2) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">纯金额</a>
							<a href="<?php  echo $this->createWebUrl('mallorder', array('id' => $item['id'], 'cop' => '3','status'=>$status, 'schoolid' => $schoolid))?>" class="btn <?php  if($cop == 3) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">混合</a>
							
						</div>
					</div>
				</div>
				<div class="form-group clearfix">
					<label class="col-xs-12 col-sm-3 col-md-1 control-label">按订单号搜索</label>
                    <div class="col-sm-2 col-lg-2">
                        <input class="form-control" name="number" id="" type="text" value="<?php  echo $_GPC['number'];?>">
                    </div>	
                    <label class="col-xs-12 col-sm-3 col-md-1 control-label">按收货人搜索</label>
                    <div class="col-sm-2 col-lg-2">
                        <input class="form-control" name="receive" id="" type="text" value="<?php  echo $_GPC['receive'];?>">
                    </div>					
				</div>
				<div class="form-group clearfix">
					<label class="col-xs-12 col-sm-3 col-md-1 control-label">按姓名搜索</label>
                    <div class="col-sm-2 col-lg-2">
                        <input class="form-control" name="keyword" id="" type="text" value="<?php  echo $_GPC['keyword'];?>">
                    </div>	
                    <label class="col-xs-12 col-sm-3 col-md-1 control-label">按类型搜索</label>
                        <div class="col-sm-9 col-lg-2" >
						<select style="margin-right:15px;" id="showtype" name="showtype" class="form-control">
							<option value="0" >选择类型</option>
							<option value="1" <?php  if($_GPC['showtype'] == 1) { ?> selected="selected"<?php  } ?>>教师</option>
							<option value="2" <?php  if($_GPC['showtype'] == 2) { ?> selected="selected"<?php  } ?>>学生</option>
									
						</select>
					</div>
				</div>
									
							
				<div class="form-group clearfix">
					<label class="col-xs-12 col-sm-3 col-md-1 control-label">下单时间</label>
					<div class="col-sm-2 col-lg-2">
						<?php  echo tpl_form_field_daterange('createtime', array('start' => date('Y-m-d', $starttime), 'end' => date('Y-m-d', $endtime)));?>
					</div>
					<div class="col-sm-2 col-lg-2" style="margin-left:50px">
						<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
					</div>

					<div class="col-sm-2 col-lg-2">
						<button class="btn btn-success qx_2702" name="out_putcode" value="out_putcode"><i class="fa fa-download"></i>导出订单记录</button>
					</div> 	

				</div>
			</form>
		</div>		
    </div>
    <div class="panel panel-default">
        <div class="table-responsive panel-body">
        <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
		<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
        <table class="table table-hover">
			<thead class="navbar-inner">
				<tr>
                    <th class='with-checkbox' style="width: 3%;"><input type="checkbox" class="check_all" /></th>
					<th style="width:6%">订单号 </th>
					<th style="width:10%">商品名</th>
					<th style="width:6%;">姓名</th>
					<th style="width:6%;">收货信息</th>
					<th style="width:18%;">收货地址</th>
					<th style="width:18%;">下单时间</th>
					<th style="width:18%;">备注</th>
					<th style="width:5%;">数量</th>
					<th style="width:5%;">总金额</th>
					<th style="width:5%;">总积分</th>
					<th style="width:6%;">状态</th>
					<th class="qx_e_d" style="text-align:right; width:10%;">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $item) { ?>
				<tr>
                    <td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $item['id'];?>"></td>

                    <!--订单号-->
					<td>
                       <?php  echo $item['torderid'];?>
                    </td>

                    <!--商品名-->
					<td>
                       <?php  echo $item['goodname'];?>
                    </td>

                    <!--老师姓名-->					
					<td><?php  echo $item['teaname'];?>
					<?php  if($item['userleixing'] =="教师") { ?>
					<span class="label label-info">教师</span>
					<?php  } else if($item['userleixing'] == "学生") { ?>
					<span class="label label-warning"><?php  echo $item['stuname'];?><?php  echo $item['sf'];?></span>
					<?php  } ?> 
					</td>
					<!--收货人信息-->	
					<td>
						 <span class="label label-success"><?php  echo $item['tname'];?></span><?php  echo $item['tphone'];?></td>

					<!--收货地址-->	
					<td><?php  echo $item['taddress'];?></td>
					
<!--收货地址-->	
					<td><?php  echo $item['ordertime'];?></td>

                    <!--备注-->
                    <td>
                        <?php  echo $item['beizhu'];?>
                    </td>
                    <!--购买数量-->
					<td>  
						<?php  echo $item['count'];?>
                    </td>

                    <!--金额-->
                    <td>
                       ￥<?php  echo $item['cost'];?>
                    </td>

                    <td>
                       <?php  echo $item['costp'];?>
                    </td>
                    <!--订单状态-->
                    <td>
                      <span class="label label-success"> <?php  if($item['status'] == 1) { ?>未支付<?php  } else if($item['status'] == 2 ) { ?>待发货 <?php  } else if($item['status'] == 3 ) { ?> 已发货	<?php  } else if($item['status'] == 4 ) { ?> 已完成	<?php  } ?></span>
                    </td>					
           
					 					
					 <!--操作-->
					<td class="qx_e_d" style="text-align:right;">
						<?php  if($item['status'] != 1 ) { ?>
						<a class="btn btn-default btn-sm qx_2703" href="<?php  echo $this->createWebUrl('mallorder', array('id' => $item['id'], 'op' => 'unpay', 'schoolid' => $schoolid))?>" onclick="return confirm('此操作不可恢复，确认设为未支付？');return false;" title="设置为未支付"><i class="fa fa-yen"></i></a>					<?php  } ?>
						<?php  if($item['status'] != 2 ) { ?>
						<a class="btn btn-default btn-sm qx_2703" href="<?php  echo $this->createWebUrl('mallorder', array('id' => $item['id'], 'op' => 'unsend', 'schoolid' => $schoolid))?>" onclick="return confirm('此操作不可恢复，确认设为待发货？');return false;" title="设置为待发货"><i class="fa fa-envelope-o"></i></a>					
						<?php  } ?>
						<?php  if($item['status'] != 3 ) { ?>
						<a class="btn btn-default btn-sm qx_2703" href="<?php  echo $this->createWebUrl('mallorder', array('id' => $item['id'], 'op' => 'send', 'schoolid' => $schoolid))?>" onclick="return confirm('此操作不可恢复，确认设为已发货？');return false;" title="设置为已发货"><i class="fa fa-envelope"></i></a>					
						<?php  } ?>
						<?php  if($item['status'] != 4 ) { ?>
						<a class="btn btn-default btn-sm qx_2703" href="<?php  echo $this->createWebUrl('mallorder', array('id' => $item['id'], 'op' => 'finish', 'schoolid' => $schoolid))?>" onclick="return confirm('此操作不可恢复，确认设为已完成？');return false;" title="设置为已完成"><i class="fa fa-check"></i></a>
						<?php  } ?>
						<a class="btn btn-default btn-sm qx_2704" href="<?php  echo $this->createWebUrl('mallorder', array('id' => $item['id'], 'op' => 'delete', 'schoolid' => $schoolid))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" title="删除"><i class="fa fa-times"></i></a>
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
			<tr>
				<td colspan="10">
					<input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
                    <input type="button" class="btn btn-primary qx_2704" name="btndeleteall" value="批量删除" />
					<!--<input type="button" class="btn btn-success" name="btnsendall" value="批量发货" />
					<input type="button" class="btn btn-success" name="btnfinishall" value="批量完成" />-->
				</td>
			</tr>
		</table>
        <?php  echo $pager;?>
    </form>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function(){
	var e_d = 2 ;
	<?php  if((!(IsHasQx($tid_global,1002702,1,$schoolid)))) { ?>
		$(".qx_2702").hide();
	<?php  } ?>
	<?php  if((!(IsHasQx($tid_global,1002703,1,$schoolid)))) { ?>
		$(".qx_2703").hide();
		e_d = e_d - 1 ;
	<?php  } ?>
	<?php  if((!(IsHasQx($tid_global,1002704,1,$schoolid)))) { ?>
		$(".qx_2704").hide();
		e_d = e_d - 1 ;
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
            alert('请选择要删除的订单!');
            return false;
        }
        if(confirm("确认要删除选择的订单?")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            var url = "<?php  echo $this->createWebUrl('mallorder', array('op' => 'deleteall','schoolid' => $schoolid))?>";
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

$(function(){
    $(".check_all").click(function(){
        var checked = $(this).get(0).checked;
        $("input[type=checkbox]").attr("checked",checked);
    });

    $("input[name=btnsendall]").click(function(){
        var check = $("input[type=checkbox][class!=check_all]:checked");
        if(check.length < 1){
            alert('请选择要操作的订单!');
            return false;
        }
        if(confirm("请选择要操作的订单?")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            var url = "<?php  echo $this->createWebUrl('mallorder', array('op' => 'sendall','schoolid' => $schoolid))?>";
            $.post(
                url,
                {idArr:id},
                function(data){
                    alert('成功修改发货状态!');
                    location.reload();
                },'json'
            );
        }
    });

});



$(function(){
    $(".check_all").click(function(){
        var checked = $(this).get(0).checked;
        $("input[type=checkbox]").attr("checked",checked);
    });

    $("input[name=btnfinishall]").click(function(){
        var check = $("input[type=checkbox][class!=check_all]:checked");
        if(check.length < 1){
            alert('请选择要操作的订单!');
            return false;
        }
        if(confirm("请选择要操作的订单?")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            var url = "<?php  echo $this->createWebUrl('mallorder', array('op' => 'finishall','schoolid' => $schoolid))?>";
            $.post(
                url,
                {idArr:id},
                function(data){
                    alert('成功修改完成状态!');
                    location.reload();
                },'json'
            );
        }
    });

});
</script>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>