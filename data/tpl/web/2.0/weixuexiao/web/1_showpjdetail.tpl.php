<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
 <style>
.cLine {overflow: hidden;padding: 5px 0;color:#000000;}
.bt_wenzi{font-weight:bold;color:#000010;}
.alert {padding: 8px 35px 0 10px;text-shadow: none;-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);background-color: #f9edbe;border: 1px solid #f0c36d;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;color: #333333;margin-top: 5px;}
.alert p {margin: 0 0 10px;display: block;}
.alert .bold{font-weight:bold;}

.btwen_text1 {
    font-family: "微软雅黑";
    height: 66px;
    width: 608px;
    margin-bottom: 15px;
}
 </style>
<link rel="stylesheet" type="text/css" href="<?php echo MODULE_URL;?>public/web/css/main.css"/>
<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />


<div class="panel panel-info">
	<div class="panel-heading"><a class="btn btn-primary"  onclick="window.history.back();"><i class="fa fa-tasks"></i>返回</a></div>
</div>
<div class="main">
	<div class="panel panel-default">
        <div class="table-responsive panel-body">
			<div id="queue-setting-index-body">
				<div class="panel panel-default">
					<div class="panel-heading">公开课信息</div>
				</div>
				<div class="uploadList">
					<div class="" style="border-bottom: 1px solid #dbe1e8;">
						<div class="">
							<label class="control-label" style="float: left;width: 25%;">公开课名称：<?php  echo $gkkinfo['name'];?></label>
							</br>
							<span class="help-block">上课时间：<span style="color:#444;"><?php  echo date('Y-m-d H:m:s', $gkkinfo['starttime'])?> 至 <?php  echo date('Y-m-d H:m:s', $gkkinfo['endtime'])?></span></span>
							<span class="help-block">授课教师：<span class="label label-info"><?php  echo $gkkteacher['tname'];?></span></span>
							<span class="help-block">上课地址：<?php  echo $gkkinfo['addr'];?></span>
							
						</div>
					</div>
				</div>
				

				<div class="all_660">
				<div class= "yd_box"></div>
				<div  style="color:black;font-weight:bold;">评价人：<?php  echo $listinfo['username'];?><?php  echo $listinfo['pard'];?></div>
				<?php  if($listinfo['is_xs'] == 1 ) { ?>
				<div  style="color:black;font-weight:bold;">归属年级：<?php  echo $listinfo['xq'];?>-<?php  echo $listinfo['bj'];?></div>
				<?php  } ?>
				<div  style="color:orange;font-weight:bold;">评价内容：</div>

				
				<?php  if(is_array($listfinish)) { foreach($listfinish as $key => $row) { ?>
				
				
				<div class="tm_wenzi"  style="line-height: 32px;color: #666;">
					<?php  if(!empty($row['iconid'])) { ?>
					<span class="bt_wenzi"><?php  echo $key;?></span>.&nbsp
					<span class="bt_wenzi"><?php  echo $row['title'];?></span>
					&nbsp;&nbsp;&nbsp;
					<span class="nmb"><?php  echo $row['level'];?></span>
					<?php  } else { ?>
						<span class="bt_wenzi">评价：</span>
						<span class="nmb"> <?php  echo $row['content'];?></span>
					<?php  } ?>
				</div>
					<?php  } } ?>
				
		</div>

	</div>	
</div>	

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>