<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<div class="panel panel-info">
	<div class="panel-body">
		<ul class="nav nav-tabs">
			<?php  if(($tid_global =='founder' || $tid_global == 'owner' ||  (IsHasQx($tid_global,1000901,1,$schoolid)))) { ?>
			<li <?php  if($_GPC['do']=='kecheng') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('kecheng', array('op' => 'display', 'schoolid' => $schoolid))?>">课程系统</a></li>
			<?php  } ?>
			<?php  if(($tid_global =='founder' || $tid_global == 'owner' || (IsHasQx($tid_global,1000921,1,$schoolid)))) { ?>
			<li <?php  if($_GPC['do']=='kcbiao') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('kcbiao', array('op' => 'display', 'schoolid' => $schoolid))?>">课时管理</a></li>
			<?php  } ?>
			<?php  if(($tid_global =='founder'|| $tid_global == 'owner' || (IsHasQx($tid_global,1000941,1,$schoolid))) ) { ?>
			<li <?php  if($_GPC['do']=='kcsign') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('kcsign', array('op' => 'display', 'schoolid' => $schoolid))?>">签到管理</a></li>
			<?php  } ?>
			<li class="active"><a href="<?php  echo $this->createWebUrl('gongkaike', array('op' => 'display', 'schoolid' => $schoolid))?>">公开课系统</a></li>
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
        <div class="panel-heading">公开课评价 - <?php  echo $gkkinfo['name'];?> 【授课老师：<?php  echo $gkkteacher['tname'];?>】</div>
        <div class="panel-body">
			<div class="col-sm-2 col-lg-2">
				<a class="btn btn-default " href="<?php  echo $this->createWebUrl('gongkaike', array( 'op' => 'display', 'schoolid' => $schoolid))?>" ><i class="fa fa-mail-reply">&nbsp;&nbsp;返回公开课列表</i></a>
			</div>
			 <div class="col-sm-2 col-lg-2">
				<a class="btn btn-success qx_9510" href="<?php  echo $this->createWebUrl('showgkkpj', array('gkkid' => $gkkid, 'op' => 'out_putcode_all','gkkid'=>$gkkid,'weid'=>$weid, 'schoolid' => $schoolid))?>" ><i class="fa fa-download">&nbsp;&nbsp;批量导出评论</i></a>
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
					<th style="width:10%;">评价人</th>
					<th style="width:72%;">评语</th>
					<th style="width:10%;">查看详情</th>
					<th class="qx_e_d" style="text-align:right; width:12%;">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $item) { ?>
				<tr>
					 <td class="with-checkbox"><input type="checkbox" name="check" value="<?php  echo $item['id'];?>"></td>
                    <td style="overflow:visible; word-break:break-all; text-overflow:auto;white-space:normal"><?php  echo $item['username'];?> <?php  echo $item['pard'];?></td>
					<td style="overflow:visible; word-break:break-all; text-overflow:auto;white-space:normal"><?php  echo $item['content'];?></td>
					<td style="overflow:visible; word-break:break-all; text-overflow:auto;white-space:normal"> <a class="btn btn-success btn-sm"  title="查看详情" href="<?php  echo $this->createWebUrl('showpjdetail', array('gkkid' => $item['gkkid'],'pjrid'=>$item['userid'], 'op' => 'display', 'schoolid' => $schoolid))?>" >&nbsp;&nbsp;查看评价</i></a></td>
					<td class="qx_e_d" style="text-align:right;">
						<a class="btn btn-default btn-sm qx_9510" href="<?php  echo $this->createWebUrl('showgkkpj', array('outid' => $item['userid'], 'op' => 'out_putcode','gkkid'=>$gkkid,'weid'=>$weid, 'schoolid' => $schoolid))?>"  title="导出"><i class="fa fa-download"></i></a>
					<a class="btn btn-default btn-sm qx_956" href="<?php  echo $this->createWebUrl('showgkkpj', array('id' => $item['id'], 'op' => 'delete', 'schoolid' => $schoolid))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" title="删除"><i class="fa fa-times"></i></a>
					</td>
				</tr>
				<?php  } } ?>
			</tbody>
			<tr>
			<td colspan="10">
					<input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
                    <input type="button" class="btn btn-primary" name="btndeleteall" value="批量删除" />
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
		<?php  if(!(IsHasQx($tid_global,10009510,1,$schoolid))) { ?>
			$(".qx_9510").hide();
			e_d = e_d -1  ;
		<?php  } ?>
		<?php  if(!(IsHasQx($tid_global,1000956,1,$schoolid))) { ?>
			$(".qx_956").hide();
			e_d = e_d -1  ;
		<?php  } ?>
		if(e_d == 0){
		$(".qx_e_d").hide();
	}
	});
	  $(".check_all").click(function(){
        var checked = $(this).get(0).checked;
        $("input[type=checkbox]").attr("checked",checked);
    });

    $("input[name=btndeleteall]").click(function(){
        var check = $("input[type=checkbox][class!=check_all]:checked");
        if(check.length < 1){
            alert('请选择要删除的评语!');
            return false;
        }
        if(confirm("确认要删除选择的评语?")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            var url = "<?php  echo $this->createWebUrl('showgkkpj', array('op' => 'deleteall', 'schoolid' => $schoolid))?>";
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
</script>
<?php  } ?>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>