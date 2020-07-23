<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<div class="panel panel-info">
	<div class="panel-body">
		<ul class="nav nav-tabs">
			<li <?php  if($_GPC['do']=='kecheng') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('kecheng', array('op' => 'display', 'schoolid' => $schoolid))?>">课程系统</a></li>
			<?php  if(($tid_global =='founder' || $tid_global == 'owner' || (IsHasQx($tid_global,1000921,1,$schoolid)))) { ?>
			<li <?php  if($_GPC['do']=='kcbiao') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('kcbiao', array('op' => 'display', 'schoolid' => $schoolid))?>">排课管理</a></li>
			<?php  } ?>
			<?php  if(($tid_global =='founder'|| $tid_global == 'owner' || (IsHasQx($tid_global,1000941,1,$schoolid))) ) { ?>
			<li <?php  if($_GPC['do']=='kcsign') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('kcsign', array('op' => 'display', 'schoolid' => $schoolid))?>">签到管理</a></li>
			<?php  } ?>
			<?php  if(((is_showgkk() && ((IsHasQx($tid_global,1000951,1,$schoolid)) || $tid_global =='founder'|| $tid_global == 'owner')) )) { ?>
			<li <?php  if($_GPC['do']=='gongkaike') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('gongkaike', array('op' => 'display', 'schoolid' => $schoolid))?>">公开课系统</a></li>
			<?php  } ?>
			<!-- 权限未做处理 -->
			<?php  if($zhuli || $tuan || $tuiguang) { ?>
			<li <?php  if($_GPC['do']=='kcset') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('kcset', array('op' => 'display2', 'schoolid' => $schoolid))?>">列表模板</a></li>
			<?php  } ?>
		</ul>
	</div>
</div> 
<style>
.form-control-excel { height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; background-image: none; border: 1px solid #ccc; border-radius: 4px; -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075); box-shadow: inset 0 1px 1px rgba(0,0,0,.075); -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s; -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s; transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s; }
/**按钮点击特效**/
.mb_marsk:hover{ -webkit-mask:-webkit-gradient(linear, left top, right bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)))}
.qr_code_table{ width: 100%; min-height: 120px; float: left; }
.qr-code-table-name{}
.apps_item{ margin: 15px; width: 30%; height: 100px; float: left; border-radius: 6px; border: 1px solid #eceaea; }
.apps_box{ width: 100%; height: 100px; margin: 8px; }
.apps_item_image{ width: 22%; float: left; }
.apps_item_image img{border: 1px solid #eceaea;border-radius: 50%;}
.apps_item_info{ width: 70%; float: left; margin-left: 7px; }
.apps_item_name{ font-weight: bold; width: 100%; }
.yaz{position: absolute;width: 17px;height: 17px;margin-left: 5px;background: url(<?php echo MODULE_URL;?>public/mobile/img/ico_no_1.png) no-repeat; background-position: center center; background-size: 17px 17px;}
.app_info{font-size: 11px;color: #9c9393;max-height: 33px;overflow: hidden;}
.apps_infos{ float: right; font-weight: 100; font-size: 10px; color: #2515f7; }
.btnlist{width: 100%;}
.install_btn{ max-width: 64%; padding: 4px; text-align: center; height: 26px; margin: 8px; font-size: 12px; line-height: 17px; border-radius: 5px; background: #de3d52; color: #fff; float: right; margin-top: 5px; }
.use_btn{cursor:pointer;max-width: 64%; padding: 4px; text-align: center; height: 26px; margin: 8px; font-size: 12px; line-height: 17px; border-radius: 5px; background: #3dcede; color: #fff; float: right; margin-top: 5px; }
.school_box{ width:75px; height:100px; margin:20px; float: left;position: relative;}
.school_icon{ width:100%; }
.school_icon img{ width: 100%; border-radius:50% }
.school_title{width:100%;text-align:center}
.icon_marsk{ position: absolute;margin-top: -125px; width: 14%; height: 75px; z-index: 5; background-color: rgba(0,0,0,.5); text-align: center; display: none; }
.gou{ font-family: we7icon!important; display: inline-block; speak: none; font-style: normal; font-weight: 400; font-variant: normal; text-transform: none; color: #fff; font-size: 23px; position: absolute; top: 50%; left: 50%; -webkit-transform: translate(-50%,-50%); -moz-transform: translate(-50%,-50%); transform: translate(-50%,-50%); line-height: 1; -webkit-font-smoothing: antialiased; }
.modal-backdrop { z-index: 1040 !important; }
.modal-backdrop ~.modal-backdrop{ z-index: 1055 !important; }
.radio-inline, .checkbox-inline{margin-bottom: -9px;}
.radio-inline+.radio-inline, .checkbox-inline+.checkbox-inline{margin-top: 9px;padding-left:1px}
#tooltip{ position: absolute; background-color: #eee; border: 1px solid #999; width: 350px; height: auto; -webkit-border-radius: 8px; font-family: "微软雅黑"; padding: 20px; z-index:2050 }
.radio-custom input[type=radio] { position: absolute; margin-left: 0px; margin-top: 0; margin-bottom: 0; }
.radio-custom input[type=radio] { width: 20px; height: 20px; opacity: 0; z-index: 1; }
.radio-custom label { min-height: 22px; line-height:22px; margin-bottom: 0; font-weight: 300; cursor: pointer; }
.radio-custom label { display: inline-block; vertical-align: middle; position: relative; padding-left: 30px; }
.radio-custom label::before { content: ""; display: inline-block; position: absolute; width: 20px; height: 20px; left: 0; margin-left: 0px; border: 1px solid #e4eaec; border-radius: 50%; background-color: #fff; -webkit-transition: border .3s ease-in-out 0s,color .3s ease-in-out 0s; -o-transition: border .3s ease-in-out 0s,color .3s ease-in-out 0s; transition: border .3s ease-in-out 0s,color .3s ease-in-out 0s; }
.radio-custom input[type=radio]:checked+label::before { border-color: #e4eaec; border-width: 10px; }
.radio-primary input[type=radio]:checked+label::before { border-color: #fc9c6b; }
.radio-custom label::after { display: inline-block; position: absolute; content: " "; width: 6px; height: 6px; left: 7px; top: 7px; margin-left: 0px; border: 2px solid #76838f; border-radius: 50%; background-color: transparent; -webkit-transform: scale(0,0); -ms-transform: scale(0,0); -o-transform: scale(0,0); transform: scale(0,0); transition-transform: .1s cubic-bezier(.8,-.33,.2,1.33); }
.radio-custom input[type=radio]:checked+label::after { -webkit-transform: scale(1,1); -ms-transform: scale(1,1); -o-transform: scale(1,1); transform: scale(1,1); }
.radio-primary input[type=radio]:checked+label::after { border-color: #fff; }
.weui_switchs:checked {border-color: #30c6e1;background-color: #30c6e1;}
.weui_switchs:checked:before {-webkit-transform: scale(0);transform: scale(0);}
.weui_switchs:checked:after {-webkit-transform: translateX(20px);transform: translateX(20px);}
.weui_switchs {font-size: 14px;-webkit-appearance: none;-moz-appearance: none;appearance: none;position: relative;width: 48px;height: 28px;border: 1px solid #DFDFDF;outline: 0;border-radius: 16px;box-sizing: border-box;background: #DFDFDF;vertical-align: middle;float: right;right: 12px;}
.weui_switchs:before {content: " ";position: absolute;top: 0;left: 0;width: 46px;height: 26px;border-radius: 15px;background-color: #FDFDFD;-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.weui_switchs:after {content: " ";position: absolute;top: 0;left: 0;width: 26px;height: 26px;border-radius: 15px;background-color: #FFFFFF;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.weui_switch:checked {border-color: #30c6e1;background-color: #30c6e1;}
.weui_switch:checked:before {-webkit-transform: scale(0);transform: scale(0);}
.weui_switch:checked:after {-webkit-transform: translateX(20px);transform: translateX(20px);}
.weui_switch {font-size: 14px;-webkit-appearance: none;-moz-appearance: none;appearance: none;position: relative;width: 48px;height: 28px;border: 1px solid #DFDFDF;outline: 0;border-radius: 16px;box-sizing: border-box;background: #DFDFDF;vertical-align: middle;float: right;right: 12px;}
.weui_switch:before {content: " ";position: absolute;top: 0;left: 0;width: 46px;height: 26px;border-radius: 15px;background-color: #FDFDFD;-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.weui_switch:after {content: " ";position: absolute;top: 0;left: 0;width: 26px;height: 26px;border-radius: 15px;background-color: #FFFFFF;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);-webkit-transition: -webkit-transform .3s;transition: transform .3s;}
.style_mb{ width: 15%; height: 104px; float: left; margin: 5px; margin-top: 25px;text-align: center; }
.style_mb img{ width: 100%; }
.style_mb .mb_name{ font-size: 10px; color: #615e5e; }
.tips_bubbling { position: absolute; width: 32px;z-index: 1;height: 20px; text-align: center;  background: linear-gradient(to top right, #8622e0, red); top: -9px; right: -8px; border-bottom-right-radius: 10px; border-top-left-radius: 10px; color: #fff; -moz-box-shadow: 2px 2px 5px #333333; -webkit-box-shadow: 2px 2px 5px #333333; box-shadow: 2px 2px 9px #e89898; }
.tuan_tips { position: relative; z-index: 1; font-size: 15px; padding: 3px; text-align: center; background: linear-gradient(to top right, #dc1c36, red); right: -8px; border-radius: 7px; color: #fff; -moz-box-shadow: 2px 2px 5px #333333; -webkit-box-shadow: 2px 2px 5px #333333; box-shadow: 2px 2px 9px #e89898; } 
.zl_tips { position: relative; z-index: 1; font-size: 15px; padding: 3px; text-align: center; background: linear-gradient(to top right, #3ea4e0, #42a4d6); right: -8px; border-radius: 7px; color: #fff; -moz-box-shadow: 2px 2px 5px #333333; -webkit-box-shadow: 2px 2px 5px #333333; box-shadow: 2px 2px 9px #a8d1e6; } 
/**进度条仿ANT start**/
.ant-progress { box-sizing:border-box; margin:0; padding:0; color:rgba(0,0,0,.65); font-size:14px; font-variant:tabular-nums; line-height:1.5; list-style:none; font-feature-settings:"tnum"; display:inline-block } .ant-progress-line { position:relative; width:100%; font-size:14px } .ant-progress-small.ant-progress-line,.ant-progress-small.ant-progress-line .ant-progress-text .anticon { font-size:12px } .ant-progress-outer { display:inline-block; width:100%; margin-right:0; padding-right:0 } .ant-progress-show-info .ant-progress-outer { margin-right:calc(-2em - 8px); padding-right:calc(2em + 8px) } .ant-progress-inner { position:relative; display:inline-block; width:100%; vertical-align:middle; background-color:#d2d0d0; border-radius:100px } .ant-progress-circle-trail { stroke:#f5f5f5 } .ant-progress-circle-path { animation:ant-progress-appear .3s; stroke:#1890ff } .ant-progress-bg,.ant-progress-success-bg { position:relative; background-color:#1890ff; transition:all .4s cubic-bezier(.08,.82,.17,1) 0s } .ant-progress-success-bg { position:absolute; top:0; left:0; background-color:#52c41a } .ant-progress-text { display:inline-block; width:2em; margin-left:8px; color:rgba(0,0,0,.45); font-size:1em; line-height:1; white-space:nowrap; text-align:left; vertical-align:middle; word-break:normal } .ant-progress-text .anticon { font-size:14px } .ant-progress-status-active .ant-progress-bg:before { position:absolute; top:0; right:0; bottom:0; left:0; background:#fff; border-radius:10px; opacity:0; animation:ant-progress-active 2.4s cubic-bezier(.23,1,.32,1) infinite; content:"" } .ant-progress-status-exception .ant-progress-bg { background-color:#f5222d } .ant-progress-status-exception .ant-progress-text { color:#f5222d } .ant-progress-status-exception .ant-progress-circle-path { stroke:#f5222d } .ant-progress-status-success .ant-progress-bg { background-color:#52c41a } .ant-progress-status-success .ant-progress-text { color:#52c41a } .ant-progress-status-success .ant-progress-circle-path { stroke:#52c41a } .ant-progress-circle .ant-progress-inner { position:relative; line-height:1; background-color:transparent } .ant-progress-circle .ant-progress-text { position:absolute; top:50%; left:50%; width:100%; margin:0; padding:0; color:rgba(0,0,0,.65); line-height:1; white-space:normal; text-align:center; transform:translate(-50%,-50%) } .ant-progress-circle .ant-progress-text .anticon { font-size:1.16666667em } .ant-progress-circle.ant-progress-status-exception .ant-progress-text { color:#f5222d } .ant-progress-circle.ant-progress-status-success .ant-progress-text { color:#52c41a } @keyframes ant-progress-active { 0% { width:0; opacity:.1 } 20% { width:0; opacity:.5 } to { width:100%; opacity:0 } }
/**进度条仿ANT  end**/
</style>
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
    <div class="panel panel-info">
        <div class="panel-heading">课程管理</div>
        <div class="panel-body">
            <form action="./index.php" method="get" class="form-horizontal" role="form">
                <input type="hidden" name="c" value="site" />
                <input type="hidden" name="a" value="entry" />
                <input type="hidden" name="m" value="weixuexiao" />
                <input type="hidden" name="do" value="kecheng" />
				<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="width: 100px;">课程状态</label>
					<div class="col-sm-9 col-xs-9 col-md-9">
						<div class="btn-group">
							<a href="<?php  echo $this->createWebUrl('kecheng', array('id' => $item['id'], 'is_start' => '-1', 'schoolid' => $schoolid))?>" class="btn <?php  if($is_start == -1) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">不限</a>
							<a href="<?php  echo $this->createWebUrl('kecheng', array('id' => $item['id'], 'is_start' => '1', 'schoolid' => $schoolid))?>" class="btn <?php  if($is_start == 1) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">未开始</a>
							<a href="<?php  echo $this->createWebUrl('kecheng', array('id' => $item['id'], 'is_start' => '2', 'schoolid' => $schoolid))?>" class="btn <?php  if($is_start == 2) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">进行中</a>
							<a href="<?php  echo $this->createWebUrl('kecheng', array('id' => $item['id'], 'is_start' => '3', 'schoolid' => $schoolid))?>" class="btn <?php  if($is_start == 3) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">已结束</a>
						</div>
					</div>
				</div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="width: 100px;">按课程名称</label>
                    <div class="col-sm-2 col-lg-2">
                        <input class="form-control" name="name" id="" type="text" value="<?php  echo $_GPC['name'];?>">
                    </div>
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="width: 100px;">按教师名称</label>
                    <div class="col-sm-2 col-lg-2">
                        <input class="form-control" name="tname" id="" type="text" value="<?php  echo $_GPC['tname'];?>">
                    </div>
					<?php  if($school['issale'] != 5) { ?>
                    <div class="col-sm-2 col-lg-2">
						<a class="btn btn-default qx_931" href="<?php  echo $this->createWebUrl('baoming', array('schoolid' => $schoolid))?>">查看报名列表</a>
                    </div>
                    <?php  } ?>
					<?php  if(keep_sk77()) { ?>
					<?php  if($tid_global =='founder' || $tid_global == 'owner' || $loginTeaFzid['is_sell'] == 2 || $loginTeaFzid['is_sell'] == 1  ) { ?>
					<div class="col-sm-2 col-lg-2">
						<a class="btn btn-default" href="<?php  echo $this->createWebUrl('stuovertime', array('schoolid' => $schoolid))?>">查看过期情况</a>
					</div>
					<?php  } ?>
					<?php  } ?>

					<?php  if(is_TestFz() ) { ?>
					<div class="col-sm-2 col-lg-2 qx_905">
						<a class="btn btn-default" href="<?php  echo $this->createWebUrl('zdytest', array('schoolid' => $schoolid))?>">KPI</a>
					</div>
					<?php  } ?>

                    <!--预约情况列表是已经做好了的-->
                    <!-- <div class="col-sm-2 col-lg-2"> -->
						<!-- <a class="btn btn-success" href="<?php  echo $this->createWebUrl('kcyy', array('schoolid' => $schoolid))?>">查看预约列表</a> -->
                    <!-- </div> -->
				</div>	
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">按分类</label>
					<div class="col-sm-2 col-lg-2">
						<select style="margin-right:15px;" name="nj_id" class="form-control">
							<option value="0">请选择分类搜索</option>
							<?php  if(is_array($xueqi)) { foreach($xueqi as $row) { ?>
							<option value="<?php  echo $row['sid'];?>" <?php  if($row['sid'] == $_GPC['nj_id']) { ?> selected="selected"<?php  } ?>><?php  echo $row['sname'];?></option>
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
					<div class="col-sm-2 col-lg-2">
						<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
					</div>						
					<!-- <div class="col-sm-2 col-lg-2" style="width:8%">						 -->
						<!-- <a class="btn btn-success qx_903" href="javascript:;"  onclick="$('.file-container').slideToggle()">批量导入课程</a> -->
					<!-- </div> -->
				</div>	
            </form>
			<div class="form-group">
				 <a class="btn btn-primary qx_902" style="color:#fff" onclick="add_new(0)" ><i class="fa fa-plus"></i> 新增课程</a>
				 <a class="btn btn-success qx_932"  style="color:#fff" onclick="show_order(1)">购买课程</a>
				 <a class="btn btn-success qx_932"  style="color:#fff" onclick="show_order(2)">续购课程</a>
			</div>
        </div>
    </div>
    <div class="panel panel-default file-container" style="display:none;">
        <div class="panel-body">
            <form id="form">
				<input type="hidden" id="fromtid" value="<?php  echo $tid_global;?>">
                <input name="viewfile" id="viewfile" type="text" value="" style="margin-left: 40px;" class="form-control-excel" readonly>
                <a class="btn btn-warning"><label for="unload" style="margin: 0px;padding: 0px;">上传...</label></a>
                <input type="file" class="pull-left btn-primary span3" name="file" id="unload" style="display: none;"
                       onchange="document.getElementById('viewfile').value=this.value;this.style.display='none';">
                <a class="btn btn-danger" onclick="submits('input_kc','form');">导入数据</a>
				<a class="btn btn-info" href="../addons/weixuexiao/public/example/example_kecheng.xls"><i class="fa fa-download"></i>下载导入模板</a>
            </form>
        </div>
    </div>
	<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/excel_input', TEMPLATE_INCLUDEPATH)) : (include template('public/excel_input', TEMPLATE_INCLUDEPATH));?>
    <div class="panel panel-default">
		<div class="panel-heading">
			<div class="col-sm-6">
				<div class="btn-group">
					<a href="<?php  echo $this->createWebUrl('kecheng', array('kc_type' => '-1', 'schoolid' => $schoolid))?>" style="margin-left: 0px;"  class="btn <?php  if($kc_type == -1) { ?>btn-primarys<?php  } else { ?>btn-defaults<?php  } ?>">全部</a>
					<a href="<?php  echo $this->createWebUrl('kecheng', array('kc_type' => '1', 'schoolid' => $schoolid))?>" style="margin-left: 0px;" class="btn <?php  if($kc_type == 1) { ?>btn-primarys<?php  } else { ?>btn-defaults<?php  } ?>">线下课</a>
					<a href="<?php  echo $this->createWebUrl('kecheng', array('kc_type' => '2', 'schoolid' => $schoolid))?>" style="margin-left: 0px;"  class="btn <?php  if($kc_type == 2) { ?>btn-primarys<?php  } else { ?>btn-defaults<?php  } ?>">线上课</a>
					<a href="<?php  echo $this->createWebUrl('kecheng', array('kc_type' => '3', 'schoolid' => $schoolid))?>" style="margin-left: 0px;"  class="btn <?php  if($kc_type == 3) { ?>btn-primarys<?php  } else { ?>btn-defaults<?php  } ?>">团购课</a>
					<a href="<?php  echo $this->createWebUrl('kecheng', array('kc_type' => '4', 'schoolid' => $schoolid))?>" style="margin-left: 0px;"  class="btn <?php  if($kc_type == 4) { ?>btn-primarys<?php  } else { ?>btn-defaults<?php  } ?>">助力课</a>
					<a href="<?php  echo $this->createWebUrl('kecheng', array('kc_type' => '5', 'schoolid' => $schoolid))?>" style="margin-left: 0px;"  class="btn <?php  if($kc_type == 5) { ?>btn-primarys<?php  } else { ?>btn-defaults<?php  } ?>">推广课</a>
				</div>
			</div>
		</div>
        <div class="table-responsive panel-body">
        <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
			<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
			<table class="table table-hover">
				<thead class="navbar-inner">
					<tr>
						<th class='with-checkbox' style="width:4%">
							<input type="checkbox" class="check_all" />全选/ID/排序
						</th>
						<th style="width:6%">课程图片/名称</th>
						<th style="width:5%">授课教师</th>
						<th style="width:8%;">详情</th>
						<th style="width:6%;">课程类型</th>
						<th style="width:5%;">科目/教室</th>	
						<th style="width:6%;">课程费用</th>
						<th style="width:6%;">报名情况</th>
						<th style="width:8%;">总课时/状态</th>	
						<th class="qx_t_c" style="width:5%;">添加课表</th>	
						<?php  if(is_TestFz()) { ?>				
						<th class="qx_t_c qx_906" style="width:5%;">特别提醒</th>	
						<?php  } ?>				
						<th class="qx_e_d" style="text-align:right; width:8%;">操作</th>
					</tr>
				</thead>
				<tbody id="allkclist">
					<?php  if(is_array($list)) { foreach($list as $item) { ?>
					<tr id="kc_<?php  echo $item['id'];?>">
						<td class="with-checkbox">
							<input type="checkbox" name="check" value="<?php  echo $item['id'];?>">
							<span style="text-align:center;color:red;font-size:15px;font-weight:blod;">ID:<?php  echo $item['id'];?></span>
							<input type="text" class="form-control" name="ssort[<?php  echo $item['id'];?>]" value="<?php  echo $item['ssort'];?>">
						</td>
						<td>
							<a href="<?php  echo $this->createWebUrl('kecheng', array('id' => $item['id'], 'op' => 'kc_info', 'schoolid' => $schoolid))?>" target="_blank">
								<img src="<?php  echo tomedia($item['thumb'])?>" width="50"/>
							</a>
							<?php  if($item['sale_type'] ==1) { ?><span class="tuan_tips">团</span><?php  } ?>
							<?php  if($item['sale_type'] ==2) { ?><span class="zl_tips">助</span><?php  } ?>
							</br>
							<a href="<?php  echo $this->createWebUrl('kecheng', array('id' => $item['id'], 'op' => 'kc_info', 'schoolid' => $schoolid))?>" target="_blank">
								<?php  echo $item['name'];?>
							</a>
							</br>
							<?php  if($item['is_try']==1) { ?><span class="label label-warning">试听课</span><?php  } else { ?><span class="label label-primary">正式课</span><?php  } ?>
						</td>
						<td style="overflow:visible; word-break:break-all; text-overflow:auto;white-space:normal">
							<?php  if(is_array($item['tname'])) { foreach($item['tname'] as $v) { ?> 
								<?php  if($v['tid'] == $item['maintid']) { ?>
									<?php  echo $v['tname'];?>&nbsp;&nbsp;<span class="label label-danger" style="background-color: #8a6461;">主讲</span>
								<?php  } else { ?>
									<?php  echo $v['tname'];?>
								<?php  } ?>
								</br> 
							<?php  } } ?>
						</td>
						<td style="overflow:visible; word-break:break-all; text-overflow:auto;white-space:normal">
							<div>
								<?php  if($item['is_hot']==1) { ?>
								<span class="label label-warning" style="padding: 2px 2px;"><i class="fa fa-star"></i></span>精品课
								<?php  } ?>
								</br>
								<?php  echo date('Y-m-d',$item['start'])?> <span class="label label-info">至</span><?php  echo date('Y-m-d',$item['end'])?>
								<?php  if($item['isSign'] && $item['OldOrNew'] == 0 ) { ?>
								</br><span class="label label-inverse">开课前<?php  echo $item['signTime'];?>分钟签到</span>
								<?php  } ?>
							</div>                    
						</td>
						<td>
							<?php  if($item['OldOrNew'] == 0) { ?>
							<span class="label label-success">固定课表</span>
							<?php  } else if($item['OldOrNew'] == 1) { ?>
							<span class="label label-info"><i class="fa fa-codepen">&nbsp;&nbsp;自由课时</i></span>
							<?php  } ?>
							<p></p>
							<span class="label label-danger"><?php  echo $item['njname'];?></span>
						</td>
						<td>
							<?php  echo $item['kmname'];?>
							</br>
							<?php  echo $item['adrrname'];?>
						</td>
						<td style="overflow:visible; word-break:break-all; text-overflow:visible;white-space:normal">
							<?php  if($item['OldOrNew'] == 1 ) { ?>
							&nbsp;&nbsp;<span class="label label-warning" style="font-weight:bold;">首购￥<?php  echo $item['cose'];?></span>
							</br>
							【包含<?php  echo $item['FirstNum'];?>课时】
							</br>
							&nbsp;&nbsp;<span class="label label-danger" style="font-weight:bold;">续购￥<?php  echo $item['RePrice'];?></span>
							</br>
							【<?php  echo $item['ReNum'];?>课时起续】
							<?php  } else { ?>
								<?php  if(empty($item['FirstNum'])) { ?>
								&nbsp;<span class="label label-warning" style="font-weight:bold;">￥<?php  echo $item['cose'];?></span>
								<?php  } else if(!empty($item['FirstNum'])) { ?>
								&nbsp;&nbsp;<span class="label label-warning" style="font-weight:bold;">首购￥<?php  echo $item['cose'];?></span>
								</br>
								【包含<?php  echo $item['FirstNum'];?>课时】
								</br>
								&nbsp;&nbsp;<span class="label label-danger" style="font-weight:bold;">续购￥<?php  echo $item['RePrice'];?></span>
								</br>
								【<?php  echo $item['ReNum'];?>课时起续】
								<?php  } ?>
							<?php  } ?>
							</td>	
						<td>
							<?php  echo $item['bili'];?>%
							<?php  if($item['start']>TIMESTAMP) { ?><span class="label label-warning">未开始</span><?php  } ?>
							<?php  if($item['start']<TIMESTAMP && $item['end']>TIMESTAMP) { ?><span class="label label-info">进行中</span><?php  } ?>
							<?php  if($item['end']<TIMESTAMP) { ?><span class="label label-default">已结束</span><?php  } ?>
							<span style="float:right;margin-right:77px;"><?php  echo $item['yib'];?>/<?php  echo $item['minge'];?>人</span>
							<div class="antd-pro-pages-list-basic-list-style-listContentItem">
								<div class="ant-progress ant-progress-line ant-progress-status-<?php  echo $item['mission'];?> ant-progress-show-info ant-progress-default" style="width: 180px;">
									<div>
										<div class="ant-progress-outer">
											<div class="ant-progress-inner">
												<div class="ant-progress-bg" style="width:<?php  if($item['bili'] > 100) { ?>100<?php  } else { ?><?php  echo $item['bili'];?><?php  } ?>%;height:9px;border-radius:100px;"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</td>
						<td style="overflow:visible; word-break:break-all; text-overflow:visible;white-space:normal">
							<span class="label label-primary">预设:</span><?php  echo $item['AllNum'];?>个课时
							</br></br>
						<?php  if($item['start']>TIMESTAMP) { ?><span class="label label-default">未开始</span><?php  } ?>
						<?php  if($item['start']<TIMESTAMP && $item['end']>TIMESTAMP) { ?><span class="label label-info">授课中</span><?php  } ?>
						<?php  if($item['end']<TIMESTAMP) { ?><span class="label label-danger">结束</span><?php  } ?></br></br>
						<?php  if($item['is_show'] == 1) { ?><span class="label label-success">显示</span><?php  } else { ?><span class="label label-danger">不显示</span><?php  } ?>
						</td>
						<td class="qx_t_c">
							<?php  if($item['end']>TIMESTAMP) { ?>
								<?php  if($item['OldOrNew'] == 0 ) { ?>
								<a class="btn btn-info btn-sm qx_922" data-toggle="tooltip" data-placement="top" onclick="quick_pk(<?php  echo $item['id'];?>,this);" title="一键排课">+&nbsp;一键排课</a>
								<?php  } else if($item['OldOrNew'] == 1) { ?><p></p>
								<span class="label label-info"><i class="fa fa-codepen">&nbsp;&nbsp;自由课时</i></span>
								<?php  } ?>
							<?php  } else if($item['end']<TIMESTAMP) { ?>
								<span class="label label-default">已结课</i></span>
								<p></p>
								<a class="btn btn-default btn-sm qx_911" href="<?php  echo $this->createWebUrl('kcpingjiashow', array('kcid' => $item['id'],  'schoolid' => $schoolid))?>" title="查看评论">
									<i class="fa fa-qrcode">&nbsp;&nbsp;查看评论</i>
								</a>
							<?php  } ?>
						</td>	
						<?php  if(is_TestFz()) { ?>
						<td class="qx_906">
							<a class="btn btn-default" href="<?php  echo $this->createWebUrl('remind', array('schoolid' => $schoolid,'kcid'=>$item['id']))?>">查看学生</a>
						</td>	
						<?php  } ?>				
						<td class="qx_e_d" style="text-align:right;color:#fff">
							<a class="btn btn-warning btn-sm qx_902" style="padding:3px 6px;" target="_blank" href="<?php  echo $this->createWebUrl('kecheng', array('id' => $item['id'], 'op' => 'kc_info', 'schoolid' => $schoolid))?>" title="管理课程">
								<i class="fa fa-cog fa-spin" style="font-size: 22px;"></i>
							</a>
							<a class="btn btn-default btn-sm qx_902" onclick="add_new(<?php  echo $item['id'];?>,this)" title="编辑"><i class="fa fa-pencil"></i></a>
							&nbsp;&nbsp;
							<a class="btn btn-default btn-sm qx_904" onclick="delete_kc(<?php  echo $item['id'];?>,this)" title="删除"><i class="fa fa-times"></i></a>
						</td>
					</tr>
					<?php  } } ?>
				</tbody>
				<tr>
					<td colspan="7">
						<input name="submit" type="submit" class="btn btn-primary qx_902" value="批量修改排序">
						<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
						<input type="button" class="btn btn-primary qx_904" name="btndeleteall" value="批量删除" />
					</td>
				</tr>
			</table>
			<?php  echo $pager;?>
		</form>
        </div>
    </div>
</div>
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:60px;">
	<div class="modal-dialog modal-lg" role="document">		
		<div class="modal-content">			
			<div class="modal-header" style="color: black;">					
				<h4 class="modal-title" id="ModalTitle">弹框</h4>	
			</div>
			<div class="modal-body">
				 <div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">选择课程:</label>
                    <div class="col-sm-2 col-lg-2" style="width: 20%">
                        <select style="margin-right:15px;" name="select_kc" id="select_kc" class="form-control">
                            <option value="0">请选择课程</option>
                            <?php  if(is_array($listAll)) { foreach($listAll as $it) { ?>
                            <?php  if($it['end']>TIMESTAMP) { ?>
                            <option value="<?php  echo $it['id'];?>" ><?php  echo $it['name'];?></option>
                            <?php  } ?>
                            <?php  } } ?>
                        </select>
                    </div>
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label xugoukc" style="width: 100px;display: none;">续购课时:</label>
                    <div class="col-sm-2 col-lg-2 xugoukc" style="width: 20%;display: none;">
                       <input type="number" name="xgnum" id="xgnum" class="form-control">
                    </div>
                </div>
                <div class="form-group" style="height:30px"></div>
                <div class="form-group nj_bj" style="display:none;" >
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">选择年级:</label>
                    <div class="col-sm-2 col-lg-2" style="width: 20%">
                        <select style="margin-right:15px;" name="nj_kcbuy" id="select_nj_kcbuy" class="form-control">
                            <option value="0">请选择年级</option>
                            <?php  if(is_array($xueqi)) { foreach($xueqi as $it) { ?>
                            <option value="<?php  echo $it['sid'];?>" ><?php  echo $it['sname'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">选择班级:</label>
                    <div class="col-sm-2 col-lg-2" style="width: 20%">
                        <select style="margin-right:15px;" name="bj_kcbuy" id="bj_kcbuy" class="form-control">
                            <option value="0">请选择班级</option>
                            <?php  if(is_array($bj)) { foreach($bj as $it) { ?>
                            <option value="<?php  echo $it['sid'];?>"><?php  echo $it['sname'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>
				</div>
				<div class="form-group nj_bj" style="height:30px"></div>
				 <div class="form-group">
	               <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">选择学生</label>
					<div class="col-sm-9 col-xs-6">
						<div class="input-group text-info" id="stulist">
                           抱歉，找不到学生，请重新选择班级
						</div>
					
					</div>
				</div>			
			</div>				
			<div class="modal-footer">	
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				<button type="button" class="btn btn-primary" id="submit1" onclick="buy_kc()" style="display: none;">确认生成订单</button>
				<button type="button" class="btn btn-primary" id="submit2" onclick="xugou_kc()" style="display: none;">确认生成订单</button>
			</div>			
		</div>	
	</div>
</div>
<div class="uploader-modal modal fade keyword ng-scope ng-isolate-scope in" style="z-index:1050 !important;" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-lg ng-scope">
		<div class="modal-content">
			<form id="edite">
				<div class="modal-header" style="color: black;">					
					<h4 class="modal-title" id="kc_modal_title">新增课程</h4>	
				</div>
				<div class="modal-body material-content clearfix">
				</div>
				<div class="modal-footer" style="border-radius: 6px;">
					<a class="btn btn-primary" style="color: #fff;" onclick="AddNewKc('edite');">提交</a>
					<button type="button" class="btn btn-danger close_addkc">关闭</button>
				</div>
			</form>	
		</div>
	</div>
</div>
<div class="modal fade" style="z-index:1060 !important;min-width: 583px!important;" id="Modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog" style="left: 40%;top: 14%;">
		<div class="modal-content" style="border-radius: 20px;">
			<div class="modal-header">
				<h4 class="modal-title" style="text-align:center;color:#333;font-size: 17px;">选择推广人员</h4>
			</div>
			<div class="modal-body" style="width: 100%;">
				<div class="js-menu-container" ng-controller="MenuCtrl" ng-cloak>
					<div class="panel we7-panel">
						<div class="panel-body system-menu-list">
							<ul class="one">
								<?php  if(is_array($teacher_list)) { foreach($teacher_list as $menu) { ?>
								<li class="menu-item">
									<div class="table-div table-div-menu" style="padding: 12px 37px;">
										<div class="table-div__item name"><?php  echo $menu['sname'];?></div>
										<div class="table-div__item name"></div>
										<div class="table-div__item action">
											<div class="link-group">
												<a href="javascript:;" class="toggle"></a>
												<label class="checkbox-inline quanxuan_this" onclick="quanxuan_this(this)" style="margin-left: 10px"><input type="checkbox" value="<?php  echo $row['id'];?>"/></label>全选
											</div>
										</div>
									</div>
									<ul class="two">
										<li class="menu-item">
											<div class="input-group text-info">
											<input type="hidden" class="hasopts" value="0"></input>
											<?php  if(is_array($menu['alltea'])) { foreach($menu['alltea'] as $r) { ?>
												<label class="checkbox-inline" style="width:80px;margin-left: 10px"><input class="pre idss" data-name="<?php  echo $r['tname'];?>" type="checkbox" value="<?php  echo $r['id'];?>" style="float: none;"/><?php  echo $r['tname'];?></label>
											<?php  } } ?>
											</div>
										</li>
									</ul>
								</li>
								<?php  } } ?>
								<li class="menu-item">
									<div class="table-div table-div-menu" style="padding: 12px 37px;">
										<div class="table-div__item name">未分组(<?php  echo count($teacher_list2)?>人)</div>
										<div class="table-div__item name"></div>
										<div class="table-div__item action">
											<div class="link-group">
												<a href="javascript:;" class="toggle"></a>
												<label class="checkbox-inline quanxuan_this" onclick="quanxuan_this(this)" style="margin-left: 10px"><input type="checkbox" value="<?php  echo $row['id'];?>"/></label>全选
											</div>
										</div>
									</div>
									<ul class="two">
										<li class="menu-item">
											<div class="input-group text-info">
											<input type="hidden" class="hasopts" value="0"></input>
											<?php  if(is_array($teacher_list2)) { foreach($teacher_list2 as $row) { ?>
												<label class="checkbox-inline" style="width:80px;margin-left: 10px"><input class="pre idss" data-name="<?php  echo $row['tname'];?>" type="checkbox" value="<?php  echo $row['id'];?>" style="float: none;"/><?php  echo $row['tname'];?></label>
											<?php  } } ?>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<script>
						$('.toggle').click(function () {
							$(this).parent().parent().parent().parent().toggleClass('menu-open')
						})
					</script>
				</div>
				<script type="text/javascript">
					$(function(){
						angular.bootstrap($('.js-menu-container'), ['systemApp']);
					});
				</script>
			</div>
			<div class="modal-footer" style="border-radius: 6px;">
				<input type="submit" onclick="tijiao()" class="btn btn-success" value="确定">
				<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" style="min-width: 600px!important;z-index: 1050 !important;" id="Modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog" style="left: 32%;top: 20%;">
		<input type="hidden" id="addks_nowkcid" value="0">
		<input type="hidden" id="only_onekc" value="false">
		<div class="modal-content" style="border-radius: 20px;">
			<div id="pk_ones">
			</div>
			<div class="modal-footer guize_rili" style="border-radius: 6px;display:none">
				<input type="submit" onclick="sub_ks()" class="btn btn-success" value="确认提交">
				<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
			</div>
			<div class="modal-footer online_btn" style="border-radius: 6px;display:none">
				<input type="submit" onclick="sub_ks_online()" class="btn btn-success" value="确认提交">
				<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/timeModal', TEMPLATE_INCLUDEPATH)) : (include template('public/timeModal', TEMPLATE_INCLUDEPATH));?>
<script type="text/javascript">
clockpicker()
function clockpicker(){
	require(["clockpicker"], function($){
		$(function(){
			$(".clockpicker").clockpicker({
				autoclose: true
			});
		});
	});
}
function dbdtaedx(start,end){
	var  date1arr = start.split("-");
	var date1 = new Date();
	date1.setFullYear(date1arr[0],date1arr[1],date1arr[2]);
	var  date1arr2 = end.split("-");
	var date2 = new Date();
	date2.setFullYear(date1arr2[0],date1arr2[1],date1arr2[2]);
	if(date1>=date2){
		return true
	}else{
		return false
	}
}
function sub_ks(){
	var pkmode = $('#pk_mode').val()
	var form = new FormData(document.getElementById(pkmode));
	//表单提交前的各种验证
	if(pkmode == 'guize'){ //规则模式
		var start = form.get('start')
		var end = form.get('end')
		if(dbdtaedx(start,end)){
			alert('错误,结束时间必须大于开始时间！');
			return false
		}
		var week = [];
		$(".week-select-wrap .active").each(function() {
			week.push($(this).attr("weidid"))
		});
		if(week.length < 1){
			alert('错误,前选择周几排课！');
			return false
		}
		var sd_id = form.get('sd_id')
		if(sd_id < 1){
			alert('错误,请选择上课时段,如未设置请点击右侧配置时段！');
			return false
		}
		var tid = form.get('tid')
		if(tid < 1){
			alert('错误,请选择授课老师,如果非同一老师,请分多次分开排课即可！');
			return false
		}
		var costnum = form.get('costnum')
		if(costnum < 1){
			alert('错误,请设置消耗课时数量,至少1次！');
			return false
		}
		var adrr = form.get('adrr')
		var re_type = form.get('re_type')
		var conment = form.get('conment')
	}
	if(pkmode == 'rili'){ //日历模式
		var sd_id = form.get('rl_sd_id')
		if(sd_id < 1){
			alert('错误,请选择上课时段,如未设置请点击右侧配置时段！');
			return false
		}
		var tid = form.get('rl_tid')
		if(tid < 1){
			alert('错误,请选择授课老师,如果非同一老师,请分多次分开排课即可！');
			return false
		}
		var costnum = form.get('rl_costnum')
		if(costnum < 1){
			alert('错误,请设置消耗课时数量,至少1次！');
			return false
		}
		var start = 0
		var end = 0
		var week = 0
		var re_type = 3
		var adrr = form.get('rl_adrr')
		var conment = form.get('rl_conment')
	}
	if(pkmode == 'online'){ //线上课时
		var content_type = form.get('content_type[]')
		var start = 0
		var end = 0
		var week = 0
		var re_type = 3
		var adrr = 0
		//var conment = form.get('rl_conment')
	}
	var kcid = $('#addks_nowkcid').val()
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kecheng', array('op'=>'add_newks'))?>",
		type: "post",
		dataType: "json",
		data: {
			kcid:kcid,
			pkmode:pkmode,
			start:start,
			end:end,
			week:week,
			sd_id:sd_id,
			re_type:re_type,
			adrr:adrr,
			conment:conment,
			costnum:costnum,
			tid:tid,
			dataarry:dataarry,
			content_type:content_type,
			schoolid:"<?php  echo $schoolid;?>"
		},
		success: function (data) {
			alert(data.msg)
			if (data.result) {
				$('#addks_nowkcid').val(0)
				$('#pk_ones').empty();
				$('#Modal7').modal('toggle');
				$('.guize_rili').hide()
				$('.online_btn').hide()
			}
		}		
	});
}

function quick_pk(kcid,elm){
	$('.guize_rili').show()
	$('.online_btn').hide()
	$('#Modal7').modal('toggle');
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kecheng', array('op'=>'pktemplet'))?>",
		type: "post",
		dataType: "html",
		data: {
			id:kcid,
			schoolid:"<?php  echo $schoolid;?>",
		},
		success: function (data) {
			if (data) {
				$('#addks_nowkcid').val(kcid)
				$('#pk_ones').empty();
				$('#pk_ones').html(data);
			}
		}		
	});
}
//全选
function quanxuan_this(elm){
	var idss = $(elm).parent().parent().parent().next().children().find(".idss")
	let hsaop = $(elm).parent().parent().parent().next().children().find(".hasopts").val()
	
	console.log(hsaop)
	if(hsaop == 0){
		$(elm).parent().parent().parent().next().children().find(".hasopts").val(1)
		idss.each(function() {
			$(this).prop("checked",true);
		});
	}else{
		$(elm).parent().parent().parent().next().children().find(".hasopts").val(0)
		idss.each(function() {
			$(this).prop("checked",false);
		});
	}
}
function xxxz(){
	$('#Modal6').modal('toggle');
	var chosed = $('#sh_teacherids').val();
	if(chosed.indexOf(',')>= 1){
		var chosedsarr= new Array(); //定义一数组
		choseds= chosed.split(','); //字符分割
		for(var i=0;i<choseds.length;i++){
			if(choseds[i] > 0){
				chosedsarr[i] = parseInt(choseds[i]);
			}
		}
		$(".pre").each(function() {
			var index = $.inArray(parseInt($(this).val()), chosedsarr);
			if(index >= 0){
				$(this).prop("checked",true);
			}else{
				$(this).prop("checked",false);
			}
		});
		console.log(chosedsarr)
	}else{
		$(".pre").each(function() {
			if (parseInt(chosed) == $(this).val()){
				$(this).prop("checked",true);
			}else{
				$(this).prop("checked",false);
			}
		});
	}
}
function tijiao(){
	var all_select_id = '';
	var all_select_text = '';
	var len = $("input:checkbox:checked").length;
	$(".idss").each(function(i) {
		if($(this).is(':checked')){
			if(i == len-1){
				all_select_id += $(this).val();
				all_select_text += $(this).attr("data-name");
			}else{
				all_select_id += $(this).val() + ',';
				all_select_text += $(this).attr("data-name") + ',';
			}
		}
	});
	if(all_select_id == '' || !all_select_id){
		alert('请选择至少一位推广员')
		return false
	}
	$("#sh_teacherids").val(all_select_id);
	$("#sh_teachers").val(all_select_text);
$('#Modal6').modal('toggle');
}
function close_opt_techerbox(){
	$('#Modal6').modal('toggle');
}
function add_new(id,elm){
	$('.addkc_opt').children('li').removeClass("active");
	$('.addkc_opt').children().eq(0).addClass("active")
	if(id != 0){
		let kcName = $(elm).parent().parent().children().eq(1).text()
		let kctype = $(elm).parent().parent().children().eq(4).children().eq(0).text()
		$('#kc_modal_title').text('修改--'+kcName+'--('+kctype+')');
		$('#kc_modal_title').css('color','red')
		$('#kc_modal_title').css('font-weight','600')
	}else{
		$('#kc_modal_title').text('新增课程');
	}
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kecheng', array('op'=>'post'))?>",
		type: "post",
		dataType: "html",
		data: {
			id:id,
			schoolid:"<?php  echo $schoolid;?>",
		},
		success: function (data) {
			if (data) {
				$('.material-content').empty();
				$('.material-content').html(data);
			}
		}		
	});
	$('#Modal').modal('toggle');
}
$('.close_addkc').click(function(){
	$('.material-content').empty();
	$('#Modal').modal('toggle');
});
function AddNewKc(name) {
	var form = new FormData(document.getElementById(name));
	var dagang = form.get('dagang')
	form.set("dagang",encodeURI(dagang));
	//表单提交前的各种验证
	var name = form.get('name')
	if(!name){
		alert('错误,请设置课程名称！');
		return false
	}
	var start = form.get('start')
	var end = form.get('end')
	if(!checkEndTime(start,end)){
		alert('错误,课程跨度结束时间需大于开始时间！');
		return false
	}
	var xq = form.get('xq')
	if(xq == 0){
		alert('错误,请归属年级,以便管理！');
		return false
	}
	var is_sign = form.get('is_sign')
	if(is_sign == 1){
		var signTime = form.get('signTime')
		if(signTime <= 0){
			alert('错误,启用签到功能请设置提前签到的时间范围！');
			return false
		}
	}
	var is_tx = form.get('is_tx')
	if(is_tx == 1){
		var txtime = form.get('txtime')
		if(txtime <= 0){
			alert('错误,启用上课提醒请设置提前提醒时间！');
			return false
		}
	}
	var cose = form.get('cose')
	if(cose <= 0){
		alert('错误,请设置本课程报名费！');
		return false
	}
	var minge = form.get('minge')
	if(minge <= 0){
		alert('错误,请设置本课总人数限制！');
		return false
	}
	//var kc_type = form.get('kc_type') //很诡异好像获取不到这个值，先用ID解决
	var kc_type = $('#kc_type').val()
	var is_try = $('#is_try').val()
	if(kc_type == 0){
		var FirstNum = form.get('FirstNum')
		if(FirstNum <= 0){
			alert('错误,线下课程请设置首购买课程包含课时数目');
			return false
		}
		var RePrice = form.get('RePrice')
		if(RePrice <= 0){
			alert('错误,线下课程请设置每课时续购单价');
			return false
		}
		var AllNum = form.get('AllNum')
		if(AllNum <= 0){
			alert('错误,请预设总课时，可不必对应导入课时');
			return false
		}
	}
	var kcthumb = form.get('kcthumb')
	if(!kcthumb){
		alert('错误,请设置本课小图！');
		return false
	}
	var bigimg = form.get('bigimg')
	if(!bigimg){
		alert('错误,请设置本课大图！');
		return false
	}
	var is_print = form.get('is_print')
	if(is_print == 1){
		var printarr = form.get('printarr[]')
		if(!printarr){
			alert('启用打印功能请选择关联打印机');
			return false
		}
	}
	var sale_type = form.get('sale_type')
	if(sale_type == 1){//启用团购
		var tuan_price = form.get('tuan_price')
		if(tuan_price < 0.01){
			alert('错误,请设置团购金额,不可设置为0元,最低0.01');
			return false
		}
		var tuan_number = form.get('tuan_number')
		if(tuan_number < 2){
			alert('请设置每个团成团人数,人数不可小于2');
			return false
		}
		var tuan_over_set = form.get('tuan_over_set')
		if(tuan_over_set == 2){
			var tuan_over_time = form.get('tuan_over_time')
			if(tuan_over_time < 1){
				alert('错误,自定义结束单个团结束时间请至少设置为1个小时');
				return false
			}
		}
		var use_pop_tuan = form.get('use_pop_tuan')
		if(use_pop_tuan == 1){
			var tuan_mb_id = form.get('tuan_mb_id')
			var tuan_bg = form.get('tuan_bg')
			if(tuan_mb_id < 1){
				alert('错误,启用团购海报请选择海报风格');
				return false
			}
			if(!tuan_bg){
				alert('错误,请设置团购海报背景底图');
				return false
			}
		}
	}
	if(sale_type == 2){//启用助力
		var zhuli_price = form.get('zhuli_price')
		if(zhuli_price < 0.01){
			alert('错误,请设置助力成功支付金额,不可设置为0元,最低0.01');
			return false
		}
		var zhuli_number = form.get('zhuli_number')
		if(zhuli_number < 2){
			alert('请设置助力组队人数,人数不可小于2');
			return false
		}
		var zhuli_over_set = form.get('zhuli_over_set')
		if(zhuli_over_set == 2){
			var zhuli_over_time = form.get('zhuli_over_time')
			if(zhuli_over_time < 1){
				alert('错误,自定义结束单个助力结束时间请至少设置为1个小时');
				return false
			}
		}
		var use_pop_zl = form.get('use_pop_zl')
		if(use_pop_zl == 1){
			var zhuli_mb_id = form.get('zhuli_mb_id')
			var zhuli_bg = form.get('zhuli_bg')
			if(zhuli_mb_id < 1){
				alert('错误,启用助力海报请选择海报风格');
				return false
			}
			if(!zhuli_bg){
				alert('错误,请设置助力海报背景底图');
				return false
			}
		}
	}	
	var allow_tuiguang = form.get('allow_tuiguang')
	if(allow_tuiguang == 1){//启用推广员
		var tg_number = form.get('tg_number')
		if(tg_number < 1){
			alert('错误,启用推广任务，请设置单个推广员任务完成人数');
			return false
		}
		var is_royalty = form.get('is_royalty')
		var royalty = form.get('royalty')
		if(is_royalty == 1 && royalty < 0.01){
			alert('错误,启用提成请设置单个报名课程提成金额,不可设置为0元,最低0.01');
			return false
		}
		var sh_teacherids = form.get('sh_teacherids')
		if(!sh_teacherids){
			alert('错误,请为本课分配推广员');
			return false
		}
		var use_pop_tg = form.get('use_pop_tg')
		if(use_pop_tg == 1){
			var tuiguang_mb_id = form.get('tuiguang_mb_id')
			var tuiguang_bg = form.get('tuiguang_bg')
			if(tuiguang_mb_id < 1){
				alert('错误,启用推广海报请选择海报风格');
				return false
			}
			if(!tuiguang_bg){
				alert('错误,请设置推广海报背景底图');
				return false
			}
		}
	}
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kecheng', array('op' => 'add_new','schoolid' => $schoolid))?>"+"&kc_type="+kc_type+"&is_try="+is_try,
		type: "post",
		data: form,
		processData: false,
		contentType: false,
		success: function(result) {
			var data = jQuery.parseJSON(result);
			alert(data.msg);
			if(data.result){
				$('.material-content').empty();
				$('#Modal').modal('toggle');
				get_new_coment(data.kcid,data.type)
				location.reload()
			}
		},
		error: function(e) {
			alert('访问网络失败');
			console.log(e)
		}
	});
}
function get_new_coment(id,type){
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kecheng', array('op'=>'display','schoolid' => $schoolid))?>",
		type: "post",
		dataType: "html",
		data: {
			kcid:id,
		},
		success: function (data) {
			if (data) {
				if(type == 'new'){
					$("#allkclist").prepend(data)
				}
				if(type == 'old'){
					$("#kc_"+id).hide(100)
					$("#kc_"+id).replaceWith(data)
					$("#kc_"+id).show(100)
				}
			}
		}		
	});
}
//显示弹框
function show_order(id){
	var id=id;
	if(id == 1 ){
		$("#ModalTitle").html("购买课程");
		$('#stulist').html('抱歉，找不到学生，请重新选择班级');	
		$("#select_kc").removeClass("xugoukc");
		$(".xugoukc").hide();
		$("#submit2").hide();
		$(".nj_bj").show();
		$("#submit1").show();
	}else if(id ==2 ){
		$("#ModalTitle").html("续购课程");
		$('#stulist').html('抱歉，找不到学生，请重新选择课程');	
		$("#select_kc").addClass("xugoukc");
		$(".nj_bj").hide();
		$("#submit1").hide();
		$(".xugoukc").show();
		$("#submit2").show();
	}
	$('#Modal1').modal('toggle'); 
}
//班级动作
$('#bj_kcbuy').change(function(){
	var schoolid = "<?php  echo $schoolid;?>";
	var kcid = $("#select_kc").val();
	var bjId = $("#bj_kcbuy option:selected").attr('value');	
	if(bjId != null && bjId != 0){
		$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'getstu_bj'))?>", {'bjId': bjId, 'schoolid': schoolid,'kcid':kcid}, function(data) {
			data = JSON.parse(data);
			stulist = data.stulist;
			console.log(data);
			var html   = '';
			if (stulist != '') {
				for (var i in stulist) {
					if(stulist[i].check != true){
						html += '<label  class="checkbox-inline" style="width:20%;min-width:85px;margin-left: 10px"><input type="checkbox" name="sidarr"  value="'+stulist[i].id+'"style="float: none;" > '+stulist[i].s_name+'</label>';
					}
				}
			}
			$('#stulist').html(html);	
		});
	}
});
//课程动作
$('#select_kc').change(function(){
	var schoolid = "<?php  echo $schoolid;?>";
	var kcid = $("#select_kc").val();
	var bjId = $("#bj_kcbuy option:selected").attr('value');
	if(kcid != null && kcid != 0){
		if($("#select_kc").hasClass("xugoukc")){
			$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'getstu_kc'))?>", {'schoolid': schoolid,'kcid':kcid}, function(data) {
					data = JSON.parse(data);
					stulist = data.stulist;
					console.log(data);
					var html   = '';
					if (stulist != '') {
						for (var i in stulist) {
							if(stulist[i].check != true){
						html += '<label  class="checkbox-inline" style="width:20%;min-width:85px;margin-left: 10px"><input type="checkbox" name="sidarr"  value="'+stulist[i].id+'"style="float: none;" > '+stulist[i].s_name+'</label>';
					}
						}
					}
					$('#stulist').html(html);	
				});
			
		}else{
			if(bjId != null && bjId != 0){
				$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'getstu_bj'))?>", {'bjId': bjId, 'schoolid': schoolid,'kcid':kcid}, function(data) {
					data = JSON.parse(data);
					stulist = data.stulist;
					console.log(data);
					var html   = '';
					if (stulist != '') {
						for (var i in stulist) {
						if(stulist[i].check != true){
						html += '<label  class="checkbox-inline" style="width:20%;min-width:85px;margin-left: 10px"><input type="checkbox" name="sidarr"  value="'+stulist[i].id+'"style="float: none;" > '+stulist[i].s_name+'</label>';
					}
						}
					}
					$('#stulist').html(html);	
				});
			}
		}
	}
});
//购买
function buy_kc(){
	var schoolid = "<?php  echo $schoolid;?>";
	var kcid = $("#select_kc").val();
	var str = new Array();
	$("input:checkbox[name='sidarr']:checked").each(function(i) {
		var val = $(this).val();
		str[i] =  val ;
	});
	console.log(str);
	console.log(kcid);
	$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'buy_kc'))?>", {'schoolid': schoolid,'tid':"<?php  echo $_W['tid'];?>",'kcid':kcid,'sidarr':str}, function(data) {
		data = JSON.parse(data);
		alert(data.msg)
 		location.reload();
	});
}
//续购
function xugou_kc(){
	var schoolid = "<?php  echo $schoolid;?>";
	var kcid = $("#select_kc").val();
	var str = new Array();
	var xgnum = $("#xgnum").val();
	$("input:checkbox[name='sidarr']:checked").each(function(i) {
		var val = $(this).val();
		str[i] =  val ;
	});
	console.log(str);
	console.log(kcid);
	$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'xugou_kc'))?>", {'schoolid': schoolid,'tid':"<?php  echo $_W['tid'];?>",'kcid':kcid,'sidarr':str,'ksnum':xgnum}, function(data) {
		data = JSON.parse(data);
		alert(data.msg)
 		location.reload();
 		
	});
}
//班级年级联动
$("#select_nj_kcbuy").change(function() {
	var type = 4;
	var cityId = $("#select_nj_kcbuy option:selected").attr('value');
	changeGrade(cityId,type, function() {});
});
function changeGrade(gradeId, type, __result) {
	var schoolid = "<?php  echo $schoolid;?>";
	var classlevel = [];
	//获取班次
	$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'getbjlist'))?>", {'gradeId': gradeId, 'schoolid': schoolid}, function(data) {
		data       = JSON.parse(data);
		classlevel = data.bjlist;
		var html   = '';
		
		html += '<select id="bj_kcbuy"><option value="">请选择班级</option>';
		if (classlevel != '') {
			for (var i in classlevel) {
				html += '<option value="' + classlevel[i].sid + '">' + classlevel[i].sname + '</option>';
			}
		}
		$('#bj_kcbuy').html(html);	
	});
}
$(function(){
	var e_d = 2 ;
	var t_c = 2 ;
	<?php  if(!(IsHasQx($tid_global,1000902,1,$schoolid))) { ?>
		$(".qx_902").hide();
		e_d = e_d -1;
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000903,1,$schoolid))) { ?>
		$(".qx_903").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000905,1,$schoolid))) { ?>
		$(".qx_905").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000906,1,$schoolid))) { ?>
		$(".qx_906").hide();
	<?php  } ?>

	<?php  if(!(IsHasQx($tid_global,1000911,1,$schoolid))) { ?>
		$(".qx_911").hide();
		t_c = t_c - 1 ;
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000921,1,$schoolid))) { ?>
		$(".qx_921").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000922,1,$schoolid))) { ?>
		$(".qx_922").hide();
		t_c = t_c - 1 ;
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000931,1,$schoolid))) { ?>
		$(".qx_931").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000932,1,$schoolid))) { ?>
		$(".qx_932").hide();
	<?php  } ?>
	<?php  if(!(IsHasQx($tid_global,1000904,1,$schoolid))) { ?>
		$(".qx_904").hide();
		e_d = e_d -1;
	<?php  } ?>
	
	if(e_d == 0){
		$(".qx_e_d").hide();
	}
	if(t_c == 0){
		$(".qx_t_c").hide();
	}
	
    $(".check_all").click(function(){
        var checked = $(this).get(0).checked;
        $("input[type=checkbox]").prop("checked",checked);
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
			$.ajax({
				url: "<?php  echo $this->createWebUrl('kecheng', array('op' => 'deleteall', 'schoolid' => $schoolid))?>",
				type: "post",
				dataType: "json",
				data: {
					idArr:id,
				},
				success: function (data) {
                    alert(data.msg);
					var idarr = data.idarr
                    if(idarr.length > 0){
						for (var i in idarr) {
							$("#kc_"+idarr[i]).hide(100)
						}
					}
				}		
			});
        }
    });
});
function delete_kc(kcid,elm){
	if(confirm("确认要删除本课程?")){
		$.ajax({
			url: "<?php  echo $this->createWebUrl('kecheng', array('op' => 'delete', 'schoolid' => $schoolid))?>",
			type: "post",
			dataType: "json",
			data: {
				kcid:kcid,
			},
			success: function (data) {
				alert(data.msg);
				if(data.result){
					$("#kc_"+kcid).slideUp(100)
				}
			}		
		});
	}
}
function checkEndTime(startTime,endTime){
	if(startTime >= endTime){
	 	return false;
	}
	return true;
}
</script>
<?php  } else if($operation == 'kc_info') { ?>
<style>
.sub-module-info{width:100%}
.module-info-name{text-align:left}
.module-info-name img{width: 80px;height: 80px;border-radius: 50%;}
.text-over{ margin-bottom: 4px; color: rgba(0,0,0,.85); font-weight: 500; font-size: 12px; line-height: 12px;margin-top: 20px;}
.kcTitle{ margin-bottom: 12px; color: rgba(0,0,0,.85); font-weight: 500; font-size: 20px; line-height: 28px; margin-top: 20px; }
.teacher_boxs{width:100%;text-align:center;display:inline-flex;overflow: hidden;}
.teacher_box{width:40px;height: 70px;margin-left: 10px;position: relative;}
.teacher_box img{width:40px;height: 40px;border-radius: 50%;margin-bottom: 2px;}
.teacher_box span{font-size: 10px;width: 100%;color: #9a9ba0;overflow: hidden;}
.extraContent{min-width: 242px;margin-left: 88px;text-align: right;}
.style-extraContent{ zoom: 1; float: right; white-space: nowrap; box-sizing: border-box; }
.style-extraContent:before { display: table; content: " "; }
.style-statItem { position: relative; display: inline-block; padding: 0 32px; }
.style-statItem>p:first-child { margin-bottom: 4px; color: rgba(0,0,0,.45); font-size: 14px; line-height: 22px; }
.style-statItem>p { margin: 0; color: rgba(0,0,0,.85); font-size: 30px; line-height: 38px; }
.style-statItem:after { position: absolute; top: 8px; right: 0; width: 1px; height: 40px; background-color: #e8e8e8; content: ""; }
.style-statItem:last-child { width: 1px; }
.style-statItem:last-child:after { position: absolute; top: 8px; right: 0; width: 0px; height: 40px; background-color: #e8e8e8; content: ""; }
.style-statItem>p>span { color: rgba(0,0,0,.45); font-size: 13px; }
.maintid_tips { position: absolute; z-index: 1; font-size: 6px; padding: 2px; text-align: center; background: red; right: 6px; border-radius: 7px; color: #fff; top: 24px; } 
.sex_lable{ border-radius: 50%; width: 22px; }
.headImg{ position: relative;width: 38px; float: left; margin-left: 13px; height: 38px; border-radius: 50%;  margin: 1px 5px 2px; text-align: center;margin-top: 16px;} 
.headImg img{ width: 36px; height: 36px; border-radius: 50%;    margin-top: 1px;} 
.headImg .line-limit-length { font-size: 8px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
.headact{background-color: #fd5151;}
.tuanzlabe { position: absolute; height: 18px; background: red; color: white; display: -webkit-box; display: -moz-box; display: -ms-flexbox; -webkit-box-align: center; -moz-box-align: center; -ms-flex-align: center; -webkit-align-items: center; align-items: center; font-size: 7px;padding: 0px 4px; width: 32px; border-radius: 5px; margin-left: 1px; margin-top: 2px;}
.duizlabe { position: absolute; height: 18px; background: #2c97d8; color: white; display: -webkit-box; display: -moz-box; display: -ms-flexbox; -webkit-box-align: center; -moz-box-align: center; -ms-flex-align: center; -webkit-align-items: center; align-items: center; font-size: 7px;padding: 0px 4px; width: 32px; border-radius: 5px; margin-left: 1px; margin-top: 2px;}
.ant-list-item{width:31.33333%;float:left;margin:10px}
.ant-card{ width:100%;}
.ant-card-bordered { border: 1px solid #e8e8e8; }
.ant-card-hoverable { cursor: pointer; }
.ant-card { box-sizing: border-box; margin: 0; padding: 0; color: rgba(0,0,0,.65); font-size: 14px; font-variant: tabular-nums; line-height: 1.5; list-style: none; font-feature-settings: "tnum"; position: relative; background: #fff; border-radius: 2px; transition: all .3s; }
.ant-card-hoverable:hover { border-color: rgba(0,0,0,.09); box-shadow: 0 2px 8px rgba(0,0,0,.09); }
.ant-card-body{ width:100%; padding: 14px; zoom: 1;}
.ant-card-meta{ width:100%;}
.ant-card-meta-avatar{width:15%;float:left}
.style-cardAvatar{width:35px;height:35px;border-radius:50%;}
.ant-card-meta-detail{width:85%}
.ant-card-meta-description{min-height: 75px;width: 101%; margin-left: 20%;}
.ant-card-actions{width:100%}
.ant-card-actions { margin: 0; padding: 0; list-style: none; background: #fafafa; border-top: 1px solid #e8e8e8; zoom: 1; }
.ant-card-actions>li:not(:last-child) {     border-right: 1px solid #e8e8e8; }
.ant-card-actions>li { float: left; margin: 12px 0; color: rgba(0,0,0,.45); text-align: center; }
.ant-card-actions:before { display: table; content: ""; }
*, :after, :before { box-sizing: border-box; }
.ant-card-actions:after { clear: both; }
.ant-card-actions:after, .ant-card-actions:before { display: table; content: ""; }
.zhuliclass{ float:right; }.stuimg{margin-left: 8px;} 
.zlheader{ width: 17px; border-radius: 17px; margin-left: -10px; }
.markr { position: absolute; top: 0px; right: 0px; background-repeat: no-repeat; background-position: 0 0; background-size: contain; background-color: transparent; }
.markr.mark_rush_sucess {width: 45%;height: 100%;top: -15%;z-index: 1;left: 65%;background-image: url(<?php echo MODULE_URL;?>public/mobile/img/zlcg_icon.png); }
.markr.mark_rush_defel { width: 45%;height: 100%;top: -15%;z-index: 1; background-image: url(<?php echo MODULE_URL;?>public/mobile/img/zlsb_icon.png); }
.markr.mark_tuan_sucess {width: 45%;height: 100%;top: -15%;z-index: 1; background-image: url(<?php echo MODULE_URL;?>public/mobile/img/ptcg_icon.png); }
.markr.mark_tuan_defel {width: 45%;height: 100%;top: -15%;z-index: 1; background-image: url(<?php echo MODULE_URL;?>public/mobile/img/ptsb_icon.png); }
.mark_tuifei{font-size:10px;color:red}
.shy{float:right; margin-right: -45px;color: #bf0c3c;}
.up_saleboxs{float:right;color:#444;font-size:23px;margin-right:15px;cursor: pointer;}

.sign_header{border-radius: 50%;margin-top: -3px;margin-right: 5px;width:20px}
.ks_type_btn:hover{color: orange}
.ks_type_act{color: orange;border: 1px solid orange;}
.xhks_stu{color:orange;font-weight:bold;}
.rekou{font-size: 14px;color: #41cac0;margin-top: -2px;margin-left: 15px;}
/**模拟手机框**/
.preview-phone{ width: 373px; height: 760px; background: #fff; left: 20%; padding: 44px 15px 80px; border-radius: 44px; -webkit-box-shadow: 0 2px 30px 0 rgba(170,187,219,.6); box-shadow: 0 2px 30px 0 rgba(170,187,219,.6); position: relative; } .telephone { position: absolute; left: 50%; -webkit-transform: translateX(-50%); -ms-transform: translateX(-50%); transform: translateX(-50%); } .telephone { width: 74px; height: 5px; background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#f5f6f7),to(#e3e4e5)); background: -webkit-linear-gradient(top,#f5f6f7,#e3e4e5); background: -o-linear-gradient(top,#f5f6f7 0,#e3e4e5 100%); background: linear-gradient(180deg,#f5f6f7,#e3e4e5); border-radius: 3px; top: 23px; } .preview-phone .document-title { height: 35px; width: 100%; line-height: 35px; background: -webkit-gradient(linear,left bottom,left top,color-stop(0,#2c2d31),to(#101013)); background: -webkit-linear-gradient(bottom,#2c2d31,#101013); background: -o-linear-gradient(bottom,#2c2d31 0,#101013 100%); background: linear-gradient(1turn,#2c2d31,#101013); text-align: center; color: #fff; font-weight: 700; } .preview-phone .phone-stage { width: 100%; height: 601px; background: #fff; overflow: auto; position: relative; border: 1px solid #e8e8e8; border-top: none; } .home-btn { width: 50px; height: 50px; background: #ecedee; border-radius: 50%; bottom: 21px; } .home-btn, .telephone { position: absolute; left: 50%; -webkit-transform: translateX(-50%); -ms-transform: translateX(-50%); transform: translateX(-50%); } .create-iframe { width: 100%; height: 100%; }
/**模拟手机框end**/
comment_lsit { padding-top: 20px; } .comment_item { padding-left: 50px; position: relative; min-height: 40px; margin: 0 0 40px; font-size: 12px; } .comment_item img { width: 40px; height: 40px; position: absolute; left: 0; top: 10px; border-radius: 40px; } .comment_item text { display: block; } .comment_item .n { color: #4C91FF; margin-bottom: 10px; } .comment_item .c { font-size: 13px; color: #374F5E; margin-bottom: 9px; } .comment_item .t { color: #91A0B2; } .comment_item .reply { background: #FAFBFC; padding: 12px; margin-top: 20px;border-radius: 7px;} .comment_tips { color: #AEC1D9; font-size: 11px; text-align: center; margin-bottom: 30px; } .comment_tips i { display: inline-block; margin: 0 20px; } .content{width:90%;margin:0 5%;color:#333333;line-height:30px;padding-bottom:20px;word-break:break-all;word-wrap:break-word;} .content p{margin:0 !important;} .content span{margin-bottom:10px;} .content img{max-width:100%;margin:5px 0;} .content .nodata{margin:0 auto;/* width:70%; */background:#eee;border:1px solid #aaa;padding:10px;border-radius:5px;} .content .nodata span{font-size:14px;color:#999;display:block;width:100%;margin:0;} .content .nodata a{font-size:14px;color:red;}.audio_div{width:100%;margin-top: 10px;display:none;} .play_video_box{width:100%;margin-top: 10px;display:none;} .conent_div{width:100%;margin-top: 10px;height: auto;display:none;} .ppt_box{width:100%;margin-top: 10px;height: auto;display:none;} .goto_wendang{text-align: center; margin-left: 33%;} .pointicon{ width: 15px; height: 15px; display: inline-block; background: url(<?php echo MODULE_URL;?>public/mobile/img/down_point.png) no-repeat center center / 15px 15px; margin: 8px -10px 0px 15px; float:right; } .up{ width: 15px; height: 15px; display: inline-block; background: url(<?php echo MODULE_URL;?>public/mobile/img/up_point.png) no-repeat center center / 15px 15px; margin: 8px -10px 0px 15px; float:right; } .conent_load{text-align:center;width: 20px; height: 24px; display: inline-block; background: url(<?php echo MODULE_URL;?>public/mobile/img/gh_xh_wating.gif) no-repeat center center / 15px 19px; margin-left: 50%; margin-top: 15px;}.coments{width:100%;height: auto;} 
</style>
<link href="<?php echo OSSURL;?>public/web/css/rili.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/down_time.js?v=4.8"></script>
<div class="main">
<!--头部信息-->
	<div class="panel panel-info">
		<div class="panel-body">
			<div class="form-horizontal">
				<div class="col-sm-1 col-lg-1" style="width:6%">
					<div class="sub-module-info">
						<div class="module-info-name">
							<img src="<?php  echo tomedia($kcinfo['thumb'])?>" alt="..." class="img-circle">
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-lg-3">
					<div class="form-group">
						<div class="kcTitle"><?php  echo $kcinfo['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<?php  if($kcinfo['start']>TIMESTAMP) { ?><span class="label label-warning" style="font-size:12px;">未开始</span><?php  } ?>
							<?php  if($kcinfo['start']<TIMESTAMP && $kcinfo['end']>TIMESTAMP) { ?><span class="label label-info" style="font-size:12px;">上课中</span><?php  } ?>
							<?php  if($kcinfo['end']<TIMESTAMP) { ?><span class="label label-default" style="font-size:12px;">已结束</span><?php  } ?>
							<button type="button" class="btn btn-default btn-xs">排课人:<?php  echo $pkteahcer['tname'];?></button>
						</div>
						<?php  echo date('Y.m.d',$kcinfo['start'])?> 至 <?php  echo date('Y.m.d',$kcinfo['end'])?> 
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-default btn-xs"><?php  if($kcinfo['kc_type'] == 0) { ?>线下课<?php  } else { ?>线上课<?php  } ?></button>
						<?php  if($kcinfo['sale_type'] != 0) { ?>
						<button type="button" class="btn btn-default btn-xs"><?php  if($kcinfo['sale_type'] == 1) { ?>团购<?php  } ?><?php  if($kcinfo['sale_type'] == 2) { ?>助力<?php  } ?></button>
						<?php  } ?>
						<?php  if($kcinfo['allow_tuiguang'] == 1) { ?>
						<button type="button" class="btn btn-default btn-xs">推广员</button>
						<?php  } ?>
						<?php  if($kcinfo['allow_menu'] == 1) { ?>
						<button type="button" class="btn btn-default btn-xs"><?php  echo $menunub;?>个章节</button>
						<?php  } ?>
						<button type="button" class="btn btn-info btn-xs">已排<?php  echo $allksnub;?>课</button>
						<button type="button" class="btn btn-info btn-xs" onclick="clearallpop()"><?php  echo $allhb;?>张海报</button>
						<button type="button" class="btn btn-default btn-xs"><?php  if($kcinfo['is_show'] == 1) { ?>前端显示<?php  } else { ?>前端隐藏<?php  } ?></button>
					</div>
				</div>
				<div class="col-sm-3 col-lg-3">
					<div class="form-group" style="text-align: center;border-bottom: 1px solid #ddd; height: 27px;">
						<span class="text-over">授课老师(<?php  echo count($teachers)?>人)</span>
					</div>
					<div class="form-group teacher_boxs">
					<?php  if(is_array($teachers)) { foreach($teachers as $row) { ?>
						<div class="teacher_box">
							<?php  if($row['maintid']) { ?><div class="maintid_tips">主讲</div><?php  } ?>
							<img src="<?php  echo $row['thumb'];?>">
							<span><?php  echo $row['tname'];?></span>
						</div>
					<?php  } } ?>	
					</div>
				</div>
				<div class="col-sm-5 col-lg-5" style="padding-right: 49px;">
					<div class="form-group" style="text-align: center;height: 27px;"></div>
					<div class="extraContent">
						<div class="style-extraContent">
							<div class="style-statItem"><p>学生</p><p><?php  echo $yb;?><span> 人</span></p></div>
							<div class="style-statItem"><p>排课</p><p><?php  echo $allksnub;?><span> 节</span></p></div>
							<div class="style-statItem"><p>上课进度</p><p><?php  echo $ysk;?><span> / <?php  echo $allksnub;?></span></p></div>
							<?php  if($kcinfo['kc_type'] == 0) { ?>
							<div class="style-statItem"><p>课时消耗</p><p><?php  echo $allstuksxh;?><span> / <?php  echo $allstuks;?></span></p></div>
							<?php  } ?>
							<div class="style-statItem"><p>招生进度</p><p><?php  echo $yb;?><span> / <?php  echo $minge;?></span></p></div>
							<div class="style-statItem"><p>销售额(￥)</p><p style="margin-left:-15px;color:red" id="kcallcose"></p></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--左侧-->
	<div class="col-sm-8 col-lg-8">
		<?php  if($kcinfo['sale_type'] !=0) { ?>
		<!--营销活动卡片-->
		<div class="panel panel-info">
			<div class="panel-heading">
				<i class="fa fa-star fa-spin" style="color: #dc353c;"></i> <?php  if($kcinfo['sale_type'] == 1) { ?>团购<?php  } ?><?php  if($kcinfo['sale_type'] == 2) { ?>助力<?php  } ?>列表 (<?php  echo $teamnumbers;?>)
				<i style="float:right" class="fa fa-minus-circle up_saleboxs pull-right"></i>
				<div class="pull-right we7-form" style="font-size: 10px;line-height: 25px;">
					<input id="credit1" type="radio" name="1" onclick="changetype(1)">
					<label for="credit1">全部</label>
					<input id="credit2" type="radio" name="1" onclick="changetype(2)">
					<label for="credit2">进行中的</label>
					<input id="credit3" type="radio" name="1" onclick="changetype(3)">
					<label for="credit3">只看成功</label>
					<input id="credit4" type="radio" name="1" onclick="changetype(4)">
					<label for="credit4">只看失败</label>
					<script>
						function changetype(type){
							if(type == 1){
								$('.ant-list-item').show()
							}
							if(type == 2){
								$('.team_sucess').hide(200)
								$('.team_defel').hide(200)
								$('.team_card').show()
							}
							if(type == 3){
								$('.team_card').hide(200)
								$('.team_defel').hide(200)
								$('.team_sucess').show()
							}
							if(type == 4){
								$('.team_card').hide(200)
								$('.team_sucess').hide(200)
								$('.team_defel').show()
							}
						}
					</script>
				</div>
			</div>
			<div class="panel-body" style="padding-top: 2px;">
				<div class="form-horizontal" style="padding: 1px;margin-top: 1px">
					<div class="form-group teamlist" style="max-height: 380px;overflow-y: scroll;">

					</div>
				</div>
			</div>
		</div>
		<?php  } ?>
		<!--排课情况卡片-->
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-tabs content_tab">
					<li optid="kc_list" class="act slide_li"><a>课程安排</a></li>
					<li optid="stu_list" class="slide_li"><a>在读学员</a></li>
					<li optid="sign_list" class="slide_li"><a><?php  if($kcinfo['kc_type'] == 0) { ?>签到记录<?php  } else { ?>学习记录<?php  } ?></a></li>
					<li optid="bm_list" class="slide_li"><a>报名订单</a></li>
				</ul>
			</div>
			<!--课程搜索框-->
			<div class="panel-body" id="kcbiao_search_box">
				<div class="col-sm-12 col-lg-12">
					<div class="form-group">
						<!--线下课程搜索框-->
						<div id="ks_search_offline">
							<label class="col-sm-1 control-label">按老师</label>
							<div class="col-sm-2">
								<select id="tid" class="form-control">
									<option value="0">选择老师</option>
									<?php  if(is_array($teachers)) { foreach($teachers as $row) { ?>
									<option value="<?php  echo $row['id'];?>"><?php  echo $row['tname'];?><?php  if($row['maintid']) { ?>-主讲<?php  } ?></option>
									<?php  } } ?>
								</select>
							</div>
							<label class="col-sm-1 control-label">按教室</label>
							<div class="col-sm-2">
								<select id="addr" class="form-control">
									<option value="0">选择教室</option>
									<?php  if(is_array($alladdr)) { foreach($alladdr as $row) { ?>
									<option value="<?php  echo $row['sid'];?>"><?php  echo $row['sname'];?><?php  if($kcinfo['adrr'] == $row['sid']) { ?>-主教室<?php  } ?></option>
									<?php  } } ?>
								</select>
							</div>
							<div class="col-sm-2 col-lg-2">
								<div class="btn btn-default" onclick="search_kslist('search')"><i class="fa fa-search"></i> 搜索</div>
							</div>
							<div>
								<button type="button" class="btn btn-success btn-sm" onclick="ShowDmData('prev');"><上周</button>
								<button type="button" class="btn btn-info btn-sm" onclick="ShowDmData('now');">本周</button>
								<button type="button" class="btn btn-success btn-sm" onclick="ShowDmData('next');">下周></button></button>
								<button type="button" class="btn btn-info btn-sm" style="float:right" onclick="quick_pk(<?php  echo $kcid;?>,this);"> + 快速排课</button>
							</div>
						</div>
						<!--线上课程搜索框-->
						<div id="ks_search_online" style="display:none">
							<label class="col-sm-1 control-label">按老师</label>
							<div class="col-sm-2">
								<select id="tid_online_search" class="form-control">
									<option value="0">选择老师</option>
									<?php  if(is_array($teachers)) { foreach($teachers as $row) { ?>
									<option value="<?php  echo $row['id'];?>"><?php  echo $row['tname'];?><?php  if($row['maintid']) { ?>-主讲<?php  } ?></option>
									<?php  } } ?>
								</select>
							</div>
							<label class="col-sm-1 control-label">按内容</label>
							<div class="col-sm-2">
								<select id="cont_type" class="form-control">
									<option value="-1">课时类型</option>
									<option value="0">富文本</option>
									<option value="1">直播</option>
									<option value="2">视频</option>
									<option value="3">语音</option>
									<option value="4">纯图</option>
									<option value="5">文档/文件</option>
								</select>
							</div>
							<div class="col-sm-2 col-lg-2">
								<div class="btn btn-default" onclick="search_kslist_online('search')"><i class="fa fa-search"></i> 搜索</div>
							</div>
							<div>
								<button type="button" class="btn btn-info btn-sm" style="float:right" onclick="quick_pk(<?php  echo $kcid;?>,this);"> + 快速排课</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--课程课表框-->
			<div class="table-responsive panel-body" id="kc_list" style=""></div>
			<!--课程报名情况搜索框-->
			<div class="panel-body" id="search_box" style="display:none">
				<div class="col-sm-9 col-lg-9">
					<div id="baom_search">
						<label class="col-sm-1 control-label">支付状态</label>
						<div class="col-sm-3">
							<select id="is_pay" class="form-control">
								<option value="0">不限</option>
								<option value="1">未支付</option>
								<option value="2">已支付</option>
								<option value="3">已退费</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">下单时间</label>
						<div class="col-sm-4 col-lg-4 col-md-8 col-xs-12">
							<?php  echo tpl_form_field_daterange('createtime', array('start' => date('Y-m-d', TIMESTAMP - 86399*7), 'end' => date('Y-m-d', TIMESTAMP + 86399*7)));?>
						</div>
						<div class="col-sm-2 col-lg-2">
							<div class="btn btn-default" onclick="search_bmlist('search')"><i class="fa fa-search"></i> 搜索</div>
						</div>
					</div>
				</div>
			</div>
			<!--课程报名情况列表框-->
			<div class="table-responsive panel-body" id="bm_list" style="display:none"></div>
			<!--点名记录搜索框-->
			<?php  if($kcinfo['kc_type'] == 0) { ?>
			<div class="panel-body" id="sign_list_box" style="display:none">
				<div class="col-sm-12 col-lg-12">
					<div class="form-group">
						<div id="baom_search">
							<div class="col-sm-2">
								<select id="sign_porsen" class="form-control">
									<option value="">按签到人</option>
									<option value="1">老师签到</option>
									<option value="2">学生签到</option>
								</select>
							</div>
							<div class="col-sm-2">
								<select id="qr_tid" class="form-control">
									<option value="0">按点名老师</option>
									<option value="-1">管理员</option>
									<?php  if(is_array($teachers)) { foreach($teachers as $row) { ?>
									<option value="<?php  echo $row['id'];?>"><?php  echo $row['tname'];?><?php  if($row['maintid']) { ?>-主讲<?php  } ?></option>
									<?php  } } ?>
								</select>
							</div>
							<div class="col-sm-2">
								<select id="sign_ksid" class="form-control">
									<option value="0">按课时</option>
									<?php  if(is_array($kslist)) { foreach($kslist as $row) { ?>
									<option value="<?php  echo $row['id'];?>">第<?php  echo $row['nuber'];?>课(<?php  echo $row['date'];?>)</option>
									<?php  } } ?>
								</select>
							</div>
							<div class="col-sm-2">
								<select id="sign_type" class="form-control">
									<option value="">按签到状态</option>
									<option value="1">待确认</option>
									<option value="2">到课</option>
									<option value="3">请假</option>
									<option value="-1">缺课</option>
								</select>
							</div>
							<div class="col-sm-2">
								<button type="button" class="btn btn-success btn-sm" onclick="search_signlist('search');"><i class="fa fa-search"></i> 搜索</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php  } ?>
			<!--点名记录列表框-->
			<div class="table-responsive panel-body" id="sign_list" style="display:none"></div>
			<!--在读学员搜索框 线下课程才会有搜索框-->
			<?php  if($kcinfo['kc_type'] == 0) { ?>
			<div class="panel-body" id="stu_list_box" style="display:none">
				<div class="col-sm-9 col-lg-9">
					<div id="baom_search">
						<label class="col-sm-1 control-label">课时状态</label>
						<div class="col-sm-3">
							<select id="ks_type" class="form-control">
								<option value="1">未消耗完</option>
								<option value="2">已消耗完</option>
								<option value="3">从未使用</option>
							</select>
						</div>
						<div class="col-sm-2 col-lg-2">
							<div class="btn btn-default" onclick="search_stulist('search')"><i class="fa fa-search"></i> 搜索</div>
						</div>
					</div>
				</div>
			</div>
			<?php  } ?>
			<!--课程报名情况列表框-->
			<div class="table-responsive panel-body" id="stu_list" style="display:none"></div>
		</div>
	</div>
	<!--右侧-->
	<div class="col-sm-4 col-lg-4">
		<div class="panel panel-info">
			<div class="panel-body">
				<div class="form-horizontal">
					<div class="form-group" style="margin-bottom:1px;">
						<label class="col-sm-3 control-label" style="text-align: left;">来源分析</label>
						<i class="fa fa-minus-circle up_saleboxs"></i>
					</div>
					<div class="form-group radar_box" style="padding: 20px;">
						<div class="echarts" id="echarts-pie-chart-a"></div>
					</div>
				</div>
			</div>
			<script src="<?php  echo $_W['siteroot'];?>addons/weixuexiao/public/web/js/jquery.flot.js?v=2.1.4"></script>
			<script src="<?php  echo $_W['siteroot'];?>addons/weixuexiao/public/web/js/echarts-all.js?v=2.1.4"></script>	
			<script>
			$(function () {
				var templates = {
					a: {
						title : {
							x : 'right',
							y : 'bottom',
							text: '生源来源分析',
							subtext: '各途径生源可能会重叠仅供参考'
						},
						series : [
							{
								data : [
									{
										value : [],
										name : '销售数据',
										itemStyle: {
											normal: {
												color: '#58c9f382'
											}
										}
									}
								]
							}
						]
					}
				};
				var pieoption = {
					tooltip : {
						trigger: 'axis',
						formatter: "{b} : {c} % ({d})"
					},
					legend: {
						show : false,
						x : 'left',
						y : 'top',
						data:['销售数据']
					},
					toolbox: {
						show : false,
						feature : {
							mark : {show: true},
							dataView : {show: true, readOnly: false},
							restore : {show: true},
							saveAsImage : {show: true}
						}
					},
					calculable : true,
					polar : [
						{
							indicator : [
								<?php  if($kcinfo['sale_type'] != 0) { ?>{text : '<?php  if($kcinfo['sale_type'] == 1) { ?>团购<?php  } ?><?php  if($kcinfo['sale_type'] == 2) { ?>助力<?php  } ?>', max  : 100},<?php  } else { ?>{text : '营销活动', max  : 100},<?php  } ?>
								{text : '在线购买', max  : 100},
								{text : '学员拉人', max  : 100},
								{text : '粉丝拉人', max  : 100},
								{text : '手动导入', max  : 100},
								{text : '推广员招生', max  : 100}
							],
							radius : 140
						}
					],
					series : [
						{
							type: 'radar',
							itemStyle: {
								normal: {
									areaStyle: {
										type: 'default'
									}
								}
							},
							data : []
						}
					]
				};
				var GetChartData = function(type) {
					$('#echarts-pie-chart-a').html('');
					$('#echarts-pie-chart-a').append(loadcont);//加载动画
					$.ajax({
						url: "<?php  echo $this->createWebUrl('kecheng', array('op'=>'get_kc_radar'))?>",
						type: "post",
						dataType: "json",
						data: {
							kcid:"<?php  echo $kcid;?>",
							schoolid:"<?php  echo $schoolid;?>"
						},
						success: function (data) {
							if (data.result) {
								var ds = $.extend(true, {}, pieoption, templates[type]);
								if(data.datas.length>0){
									ds.series[0].data[0].value = data.datas;
									var myChart = echarts.init($('#echarts-pie-chart-a')[0]);
									myChart.setOption(ds);
									$(window).resize(myChart.resize);
								}else{
									$('.radar_box').hide()
								}
							}else{
								$('.radar_box').hide()
							}
						}
					});
				}
				GetChartData('a');
			});
			</script>
		</div>	
	<?php  if($kcinfo['allow_tuiguang'] == 1) { ?>
		<div class="panel panel-info">
			<div class="panel-body">
				<div class="form-horizontal form">
					<div class="form-group" style="margin-bottom:1px;">
						<label class="col-sm-3 control-label" style="text-align: left;">推广团队(<?php  echo count($team)?>人)</label>
						<i class="fa fa-minus-circle up_saleboxs"></i>
					</div>
					<div class="form-group" style="padding: 20px;height: 400px;overflow-y: scroll;">
						<table class="table table-hover">
							<thead class="navbar-inner">
								<tr>
									<th style="width:10%;"></th>
									<th style="width:15%">姓名</th>
									<th style="width:30%;">招生任务</th>
									<th style="width:20%;">下属粉丝</th>
									<!-- <th style="text-align:right; width:8%;">操作</th> -->
								</tr>
							</thead>
							<tbody>
							<?php  if(is_array($team)) { foreach($team as $row) { ?>
								<tr>
									<td style="padding-left:10px;text-align: center;">
										<img style="width:40px;height:40px;border-radius:50%;" src="<?php  echo $row['thumb'];?>" width="50"  style="border-radius: 3px;" />
									</td>
									<td>
										<?php  if($row['sex'] == 1) { ?><span class="label label-primary sex_lable"><i class="fa fa-male"></i></span><?php  } else { ?><span class="label label-info sex_lable"><i class="fa fa-female"></i></span><?php  } ?>
										<span class="td_tnam" style="width:100%;"><?php  echo $row['tname'];?></span>
										<?php  echo $row['mobile'];?>
									</td>
									<td>		
										<?php  if($row['onebili']) { ?><?php  if($row['onebili'] > 100) { ?>100<?php  } else { ?><?php  echo $row['onebili'];?><?php  } ?><?php  } else { ?>0<?php  } ?>%
										<span style="float:right;margin-right:50px;"><?php  echo $row['sucnuber'];?>/<?php  echo $row['oneminge'];?>人</span>
										<div class="antd-pro-pages-list-basic-list-style-listContentItem">
											<div class="ant-progress ant-progress-line ant-progress-status-<?php  echo $item['mission'];?> ant-progress-show-info ant-progress-default">
												<div>
													<div class="ant-progress-outer">
														<div class="ant-progress-inner">
															<div class="ant-progress-bg" style="width:<?php  if($row['onebili']) { ?><?php  if($row['onebili'] > 100) { ?>100<?php  } else { ?><?php  echo $row['onebili'];?><?php  } ?><?php  } else { ?>0<?php  } ?>%;height:9px;border-radius:100px;"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</td>
									<td>
										<i class="fa fa-circle-o text-<?php  if($row['allfans'] >0) { ?>success<?php  } else { ?>danger<?php  } ?> mr-2"></i>  <?php  if($row['allfans'] >0) { ?><?php  echo $row['allfans'];?>人<?php  } else { ?>无<?php  } ?>
									</td>
									<!-- <td></td> -->
								</tr>
							<?php  } } ?>	
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	<?php  } ?>	
	<div class="panel panel-info">
		<div class="panel-body">
			<div class="form-horizontal form">
				<div class="form-group" style="margin-bottom:1px;">
					<label class="col-sm-3 control-label" style="text-align: left;">课程评论(<?php  echo $allpl;?>)</label>
					<i class="fa fa-minus-circle up_saleboxs"></i>
				</div>
				<div class="form-group" style="padding: 20px;max-height: 450px;overflow-y: scroll;">
					<div class="comment_lsit">

					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<?php  } ?>
<!--快速排课modal7---->
<div class="modal fade" style="min-width: 600px!important;z-index: 1050 !important;" id="Modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog" style="left: 32%;top: 20%;">
		<input type="hidden" id="addks_nowkcid" value="0">
		<input type="hidden" id="only_onekc" value="true">
		<div class="modal-content" style="border-radius: 20px;">
			<div id="pk_ones">
			</div>
			<div class="modal-footer guize_rili" style="border-radius: 6px;display:none">
				<input type="submit" onclick="sub_ks()" class="btn btn-success" value="确认提交">
				<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
			</div>
			<div class="modal-footer online_btn" style="border-radius: 6px;display:none">
				<input type="submit" onclick="sub_ks_online()" class="btn btn-success" value="确认提交">
				<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<!--载入快速设置时段和章节-->
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/timeModal', TEMPLATE_INCLUDEPATH)) : (include template('public/timeModal', TEMPLATE_INCLUDEPATH));?>
<!--调课modal10-->
<div class="modal fade" style="min-width: 600px!important;z-index: 1050 !important;" id="Modal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-backdrop="static">
	<div class="modal-dialog" style="left: 32%;top: 20%;">
		<div class="modal-content" style="border-radius: 20px;">
			<div class="modal-header">
				<h4 class="modal-title" id="modal-title-kc" style="text-align:center;color:#333;font-size: 17px;">修改课时</h4>
			</div>
			<!--线上课程排课头部-->
			<div class="col-sm-9" style="margin-top:5px;">
				<div class="btn-group">
					<a class="btn btn-primarys ks_opt" optid="ksinfo">课时信息</a>
				</div>
				<div class="alert" style="padding:1px;float: right;margin-bottom: 1px">已签到<span class="bold" id="yjqdrs" style="font-size:20px;font-weight:blod;color:red"></span>人</div>
			</div>
			<div class="modal-body form_paike_boxs" style="width: 100%;padding: 34px;">
				<form id="ksinfo">
					<div class="form-group">
						<label class="col-sm-2 control-label"><span class="require">*</span>上课日期</label>
						<div class="input-group clocknews">
							<input type="text" style="display:none" class="form-control" id="disa_date" disabled name="date1" value="" />
							<div class="input-group" style="margin-left: 12px;" id="tk_date_box">
								<?php  echo tpl_form_field_date('date', date('Y-m-d',TIMESTAMP))?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">上课时段</label>
						<div class="col-sm-4">
							<select name="sd_id" id="edit_sd_box" class="form-control all_sd">
									<option value="0">选择时段</option>
								<?php  if(is_array($sd)) { foreach($sd as $it) { ?>
									<option value="<?php  echo $it['sid'];?>"><?php  echo $it['sname'];?></option>
								<?php  } } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">授课教室</label>
						<div class="col-sm-4">
							<select style="margin-right:15px;" name="addr_id" id="edit_adrr_box" class="form-control">
								<option value="">请选择教室</option>
								<?php  if(is_array($alladdr)) { foreach($alladdr as $row) { ?>
								<option value="<?php  echo $row['sid'];?>"><?php  echo $row['sname'];?><?php  if($kcinfo['adrr'] == $row['sid']) { ?>-主教室<?php  } ?></option>
								<?php  } } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">授课老师</label>
						<div class="col-sm-3">
							<select name="tid" id="edit_tid_box" class="form-control">
								<?php  if(is_array($teachers)) { foreach($teachers as $row) { ?>
									<option value="<?php  echo $row['id'];?>" ><?php  echo $row['tname'];?></option>
								<?php  } } ?>
							</select>
							<div class="help-block" style="color:red"></div>
						</div>
						<label class="col-sm-2 control-label">消耗课时</label>
						<div class="col-sm-3">
							<div class="input-group">
								<input type="number" class="form-control" id="tk_costnum" name="costnum" value="" />
								<span class="input-group-addon">节</span>
							</div>
							<div class="help-block">每次签到扣几节</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">上课内容</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="content" placeholder="输入课时内容,500字以内"></textarea>
							<div class="help-block">如需使用富文本,请在排课后编辑需要使用的课时即可</div>
						</div>
					</div>
					<div class="cLine"> 
						<div class="alert">
							<p><span class="bold">提示：</span>一旦老师签到本课时后,不可修改本课授课老师,或学生签到后不可修改日期</p>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer" style="border-radius: 6px;">
				<input type="submit" onclick="sub_for_ks()" class="btn btn-success" value="确认提交">
				<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
			</div>
			<input id="tk_now_ksid" type="hidden" value=""/>
		</div>
	</div>
</div>
<!--点名modal11-->
<div class="uploader-modal modal fade keyword ng-scope ng-isolate-scope in" style="z-index:1050 !important;" id="Modal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-lg ng-scope" style="top:30%;">
		<div class="modal-content">
			<div class="modal-header" style="color: black;text-align:left">					
				<h4 class="modal-title">课时点名</h4>	
			</div>
			<div class="modal-body material-content clearfix">
				<form id="ksdmbox">
					<div class="form-group" style="margin-top:10px">
						<label class="col-sm-1 control-label">上课日期</label>
						<div class="col-sm-2">
							<div class="input-group">
								<input type="text" class="form-control" disabled name="ksdate" value="" />
							</div>
						</div>
						<label class="col-sm-1 control-label">签课老师</label>
						<div class="col-sm-2">
							<select name="tid" id="ks_tid_box" class="form-control">
								<?php  if(is_array($teachers)) { foreach($teachers as $row) { ?>
									<option value="<?php  echo $row['id'];?>" ><?php  echo $row['tname'];?></option>
								<?php  } } ?>
							</select>
							<div class="help-block" style="color:red"></div>
						</div>
						<label class="col-sm-1 control-label">消耗课时</label>
						<div class="col-sm-2">
							<div class="input-group">
								<input type="number" class="form-control" name="ks_costnum" value="" oninput="onInput(this)"/>
								<span class="input-group-addon">课时</span>
							</div>
							<div class="help-block" style="color:red"></div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label">通知老师:</label>
						<div class="col-sm-3">
							<label class="radio-inline">
								<div class="radio-custom radio-primary">
									<input type="radio" name="pev_tea" value="1" checked />
									<label></label>通知
								</div>
							</label>
							<label class="radio-inline">
								<div class="radio-custom radio-primary">
									<input type="radio" name="pev_tea" value="0" >
									<label></label>不通知
								</div>
							</label>
							<div class="help-block">通知选中的老师本节已签</div>
						</div>
						<label class="col-sm-1 control-label">通知学生:</label>
						<div class="col-sm-3">
							<label class="radio-inline">
								<div class="radio-custom radio-primary">
									<input type="radio" name="pev_stu" value="1" checked />
									<label></label>通知
								</div>
							</label>
							<label class="radio-inline">
								<div class="radio-custom radio-primary">
									<input type="radio" name="pev_stu" value="0"/>
									<label></label>不通知
								</div>
							</label>
							<div class="help-block">点名成功的通知学生剩余课时</div>
						</div>
					</div>
					<div class="form-group">
						<p style="margin-left:20px"><span class="bold">提示：</span>请假、缺课、待确认3种状态都不会扣除学生课时</p>
						<div class="table-responsive panel-body" id="ks_stu_boxlist" style="max-height:300px;overflow-y: scroll;">
							<table class="table table-hover">
								<thead class="navbar-inner">
									<tr>
										<th style="width:10%;">学生</th>
										<th style="width:8%;">手机</th>
										<th style="width:10%;">总购课时</th>
										<th style="width:15%;">剩余课时</th>
										<th style="width:15%;">到课状态</th>
										<th style="width:8%;">扣课时</th>
									</tr>
								</thead>
								<tbody id="stu_detil_box">

								</tbody>
							</table>
							<div class="ant-empty ant-empty-normal" style="text-align:center;display:none">
								<div class="ant-empty-image">
									<img alt="暂无数据" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNDEiIHZpZXdCb3g9IjAgMCA2NCA0MSIgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCAxKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgIDxlbGxpcHNlIGZpbGw9IiNGNUY1RjUiIGN4PSIzMiIgY3k9IjMzIiByeD0iMzIiIHJ5PSI3Ii8+CiAgICA8ZyBmaWxsLXJ1bGU9Im5vbnplcm8iIHN0cm9rZT0iI0Q5RDlEOSI+CiAgICAgIDxwYXRoIGQ9Ik01NSAxMi43Nkw0NC44NTQgMS4yNThDNDQuMzY3LjQ3NCA0My42NTYgMCA0Mi45MDcgMEgyMS4wOTNjLS43NDkgMC0xLjQ2LjQ3NC0xLjk0NyAxLjI1N0w5IDEyLjc2MVYyMmg0NnYtOS4yNHoiLz4KICAgICAgPHBhdGggZD0iTTQxLjYxMyAxNS45MzFjMC0xLjYwNS45OTQtMi45MyAyLjIyNy0yLjkzMUg1NXYxOC4xMzdDNTUgMzMuMjYgNTMuNjggMzUgNTIuMDUgMzVoLTQwLjFDMTAuMzIgMzUgOSAzMy4yNTkgOSAzMS4xMzdWMTNoMTEuMTZjMS4yMzMgMCAyLjIyNyAxLjMyMyAyLjIyNyAyLjkyOHYuMDIyYzAgMS42MDUgMS4wMDUgMi45MDEgMi4yMzcgMi45MDFoMTQuNzUyYzEuMjMyIDAgMi4yMzctMS4zMDggMi4yMzctMi45MTN2LS4wMDd6IiBmaWxsPSIjRkFGQUZBIi8+CiAgICA8L2c+CiAgPC9nPgo8L3N2Zz4K"/>
								</div>
								<p class="ant-empty-description">暂无学生报名本课</p>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer" style="border-radius: 6px;">
				<a class="btn btn-primary" style="color: #fff;" onclick="sub_ksdm();">完成点名</a>
				<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
			</div>
			<input id="dm_now_ksid" type="hidden" value=""/>
		</div>
	</div>
</div>
<!--虚拟组队拼团modal14-->
<div class="modal fade" style="min-width: 600px!important;z-index: 1050 !important;" id="Modal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-backdrop="static">
	<div class="modal-dialog" style="left: 32%;top: 20%;">
		<div class="modal-content" style="border-radius: 20px;">
			<div class="modal-header">
				<h4 class="modal-title" style="text-align:center;color:#333;font-size: 17px;">虚拟<?php  if($kcinfo['sale_type'] == 1) { ?>拼团<?php  } ?><?php  if($kcinfo['sale_type'] == 2) { ?>助力<?php  } ?></h4>
			</div>
			<div class="modal-body" style="width: 100%;padding: 34px;">
				<div class="form-group" id="xu_fansbox">

				</div>
				<div class="form-group">
					<button type="button" class="btn btn-default btn-xs new_fanslist"><i class="fa fa-refresh" style="font-size:10px;"></i> 换一批</button>
				</div>
			</div>
			<div class="modal-footer" style="border-radius: 6px;">
				<input type="submit" onclick="sub_zd()" class="btn btn-success" value="确认提交">
				<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
			</div>
			<input id="xn_now_teamid" type="hidden" value=""/>
		</div>
	</div>
</div>
<!--团队详情modal15-->
<div class="uploader-modal modal fade keyword ng-scope ng-isolate-scope in" style="min-width: 800px!important;z-index: 1050 !important;" id="Modal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-backdrop="static">
	<div class="modal-dialog" style="left: 32%;top: 20%;">
		<div class="modal-content" style="border-radius: 20px;">
			<div class="modal-header">
				<h4 class="modal-title" style="text-align:center;color:#333;font-size: 17px;"><?php  if($kcinfo['sale_type'] == 1) { ?>拼团<?php  } ?><?php  if($kcinfo['sale_type'] == 2) { ?>助力<?php  } ?>详情</h4>
			</div>
			<div class="modal-body" style="width: 100%;padding: 34px;max-height:300px;overflow-y: scroll;">
				<table class="table table-hover">
					<thead class="navbar-inner">
						<tr>
							<th style="width:10%;text-align: center;">用户</th>
							<th style="width:8%;">手机</th>
							<th style="width:10%;">付费</th>
							<th style="width:15%;">推广员</th>
							<th style="width:18%;">归属</th>
							<th style="width:15%;">操作人</th>
							<th style="width:8%;">入口</th>
							<th style="width:10%;">操作</th>
						</tr>
					</thead>
					<tbody id="team_list_box">

					</tbody>
				</table>
			</div>
			<div class="modal-footer" style="border-radius: 6px;">
				<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
			</div>
			<input id="info_now_teamid" type="hidden" value=""/>
		</div>
	</div>
</div>
<input type="hidden" id="kc_type" value="<?php  echo $kcinfo['kc_type'];?>">
<input type="hidden" id="kc_sale" value="<?php  echo $kcinfo['sale_type'];?>">
<input type="hidden" id="dtweek" value="<?php  echo $nowweek;?>">
<script>
move('kcallcose','<?php  if($allcose) { ?><?php  echo $allcose;?><?php  } else { ?>0<?php  } ?>','');
var loadcont = "<div class='conent_load'></div>";
function clearallpop(){
	if(confirm("此操作会清理本课程所有已生成的营销海报和推广员海报?")){
		$.ajax({
			url: "<?php  echo $this->createWebUrl('kecheng', array('op'=>'clearallpop'))?>",
			type: "post",
			dataType: "json",
			data: {
				kcid:"<?php  echo $kcid;?>",
				schoolid:"<?php  echo $schoolid;?>"
			},
			success: function (data) {
				alert(data.msg)
			}		
		});
	}
}
get_pingjialist()//开启了课程评价的
function get_pingjialist(){
	$('.comment_lsit').empty();
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kecheng', array('op'=>'kc_pingjia'))?>",
		type: "post",
		dataType: "html",
		data: {
			kcid:"<?php  echo $kcid;?>",
			schoolid:"<?php  echo $schoolid;?>"
		},
		success: function (data) {
			if (data) {
				$('.comment_lsit').html(data);
			}
		}		
	});	
}
var kc_sale = $('#kc_sale').val()
if(kc_sale != 0){
	get_teamlist()//有营销的课程查询团队
}
function get_teamlist(){
	$('.teamlist').empty();
	$('.teamlist').append(loadcont);//加载动画
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kecheng', array('op'=>'team_list'))?>",
		type: "post",
		dataType: "html",
		data: {
			kcid:"<?php  echo $kcid;?>",
			schoolid:"<?php  echo $schoolid;?>"
		},
		success: function (data) {
			if (data) {
				$('.teamlist').html(data);
			}
		}		
	});	
}

function teaminfo(teamid){
	$('#xn_now_teamid').val(teamid)
	get_teaminfo()
	$('#Modal15').modal('toggle')
}
function get_teaminfo(){//获取团队信息
	$('#team_list_box').empty();
	$('#team_list_box').append(loadcont);//加载动画
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kecheng', array('op'=>'team_info'))?>",
		type: "post",
		dataType: "html",
		data: {
			teamid:$('#xn_now_teamid').val(),
			schoolid:"<?php  echo $schoolid;?>"
		},
		success: function (data) {
			if (data) {
				$('#team_list_box').html(data);
			}
		}		
	});
}
$('.new_fanslist').click(function(){
	get_xnfans()
});
function xn_zd(teamid){ //虚拟助力拼团弹框
	$('#xn_now_teamid').val(teamid)
	get_xnfans()
	$('#Modal14').modal('toggle')
}
function get_xnfans(){
	$('#xu_fansbox').empty();
	$('#xu_fansbox').append(loadcont);//加载动画
	$.ajax({
		url: "<?php  echo $this->createWebUrl('indexajax', array('op'=>'any_fanslist'))?>",
		type: "post",
		dataType: "html",
		data: {
			schoolid:"<?php  echo $schoolid;?>"
		},
		success: function (data) {
			if (data) {
				$('#xu_fansbox').html(data);
			}
		}		
	});
}
function sub_zd(){ //添加虚拟成员
	let teamid = $('#xn_now_teamid').val()
	if($("#xu_fansbox .fans_cheaded").length < 1){
		alert('请至少选择一个虚拟粉丝')
		return false
	}
	let uidarray = []
	$("#xu_fansbox .fans_cheaded").each(function() {
		var openid = $(this).attr('data-uid')
		uidarray.push(openid)
	});
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kecheng', array('op'=>'xu_zd','schoolid'=>$schoolid))?>",
		type: "post",
		dataType: "json",
		data: {
			teamid:teamid,
			uidarray:uidarray
		},
		success: function (data) {
			if(data.result){
				get_teamlist()
				$('#Modal14').modal('toggle')
				alert(data.msg)
			}else{
				alert(data.msg)
			}
		}		
	});
}

var kc_type = $('#kc_type').val()
if(kc_type == 0){
	search_kslist()
}else{
	search_kslist_online()
	$('#ks_search_online').show()
	$('#ks_search_offline').hide()
}

function onInput(elm){
	var costnum = $(elm).val()
	if(costnum <= 0){
		alert('消课数量不可低于1')
		$(elm).val(1)
		return false
	}else{
		$('.stu_ks').text(costnum)
		$('.stu_ks_hide').val(costnum)
	}
}
function tiaoke(ksid){//调课弹框
	$('#tk_now_ksid').val(ksid)
	$('#Modal10').modal('toggle')
	$('#edit_tid_box').removeAttr("disabled")
	$('#edit_tid_box').next().text('')
	$('#disa_date').hide()
	$('#tk_date_box').show()
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kcbiao', array('op'=>'get_oneks','schoolid' => $schoolid))?>",
		type: "post",
		dataType: "json",
		data: {
			ksid:ksid
		},
		success: function (data) {
			if (data.result) {
				var ksinfo = data.ksinfo
				var EditeKsBox = $('#ksinfo')
				EditeKsBox.children().find("input[name='date']").val(ksinfo.riqi)
				EditeKsBox.children().find("input[name='costnum']").val(ksinfo.costnum)
				EditeKsBox.children().find("input[name='content']").text(ksinfo.content)
				$('#yjqdrs').text(data.signstu)
				set_select_checked('edit_sd_box', ksinfo.sd_id)
				set_select_checked('edit_adrr_box', ksinfo.addr_id)
				set_select_checked('edit_tid_box', ksinfo.tid)
				var teasign = data.teasign
				if(teasign){
					var checktea = data.checktea
					set_select_checked('edit_tid_box', checktea.tid)
					$('#edit_tid_box').attr("disabled","disabled");
					$('#edit_tid_box').css("background-color","#eee;")
					$('#edit_tid_box').next().text('老师已签,不可更改')
				}
				if(data.signstu >0){
					$('#disa_date').show()
					$('#disa_date').val(ksinfo.riqi)
					$('#tk_date_box').hide()
				}
			}else{
				alert(data.msg)
				location.reload()
			}
		}		
	});
}
function sub_for_ks(){//提交调课信息
	var ksid = $('#tk_now_ksid').val()
	var form = new FormData(document.getElementById('ksinfo'))
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kcbiao', array('op' => 'kb_tiaoke','schoolid' => $schoolid))?>"+"&ksid="+ksid,
		type: "post",
		data: form,
		processData: false,
		contentType: false,
		success: function(result) {
			var data = jQuery.parseJSON(result);
			alert(data.msg);
			if(data.result){
				$('#Modal10').modal('toggle');
				search_kslist()
			}
		},
		error: function(e) {
			alert('访问网络失败');
			console.log(e)
		}
	});
}
function sub_ksdm(){//提交点名信息
	var ksid = $('#dm_now_ksid').val()
	var form = new FormData(document.getElementById('ksdmbox'))
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kcbiao', array('op' => 'kb_dianm','schoolid' => $schoolid))?>"+"&ksid="+ksid,
		type: "post",
		data: form,
		processData: false,
		contentType: false,
		success: function(result) {
			var data = jQuery.parseJSON(result);
			alert(data.msg);
			if(data.result){
				$('#Modal11').modal('toggle');
			}
		},
		error: function(e) {
			alert('访问网络失败');
			console.log(e)
		}
	});
}
function dianming(ksid){//点名弹框
	$('#dm_now_ksid').val(ksid)
	$('#stu_detil_box').empty()
	$('#ks_tid_box').next().text('')
	$('#ks_tid_box').removeAttr("disabled");
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kcbiao', array('op'=>'get_oneks_stulist','schoolid' => $schoolid))?>",
		type: "post",
		dataType: "json",
		data: {
			ksid:ksid
		},
		success: function (data) {
			if (data.result) {
				var ksinf = data.ksinfo
				$("input[name='ksdate']").val(ksinf.riqi)
				$("input[name='ks_costnum']").val(ksinf.costnum)
				set_select_checked('ks_tid_box', ksinf.tid)
				//$('#yjqdrs').text(ksinfo.signstu)
				var queke = data.queke //缺课人数
				var teasign = data.teasign //老师是否已签 布尔型
				var signstu = data.signstu //学生签到人数
				var allsigntea = data.allsigntea //老师已签列表
				var allsignstu = data.allsignstu //学生情况列表
				var html = '';
				if(allsignstu.length > 0){
					for (var i = 0; i < allsignstu.length; i++) {
						var dkbtn = 'primary';
						var dqbtn = 'default';
						var qjbtn = 'default';
						var qkbtn = 'default';
						var dkinput = 2;
						var icons = 'times';
						var kkcolor = '';
						var ksword = '未扣';
						var defksmub = ksinf.costnum
						var ks_hassign = allsignstu[i].ks_hassign //处理有操作的学生
						if(ks_hassign == 1){
							var checkstusign = allsignstu[i].checkstusign //签到学生的本节签到数据
							if(checkstusign.status == 1){ //待确认
								var dkbtn = 'default';
								var dqbtn = 'primary';
								var qjbtn = 'default';
								var qkbtn = 'default';
								var dkinput = 1;
							}
							if(checkstusign.status == 2){//到课
								var dkbtn = 'primary';
								var dqbtn = 'default';
								var qjbtn = 'default';
								var qkbtn = 'default';
								var dkinput = 2;
								var icons = 'check';
								var ksword = '已扣';
								var kkcolor = 'red';
								var defksmub = checkstusign.costnum //签到的显示真实已扣数量
							}
							if(checkstusign.status == 3){//请假
								var dkbtn = 'default';
								var dqbtn = 'default';
								var qjbtn = 'primary';
								var qkbtn = 'default';
								var dkinput = 3;
							}
							if(checkstusign.status == 0){//缺课
								var dkbtn = 'default';
								var dqbtn = 'default';
								var qjbtn = 'default';
								var qkbtn = 'primary';
								var dkinput = 0;
							}
						}
						html +=	'<tr id="stu_'+allsignstu[i].sid+'">'+ //处理无任何操作的报名学生
								'	<input type="hidden" name="sid[]" value="'+allsignstu[i].sid+'" />'+
								'	<input type="hidden" name="s_name[]" value="'+allsignstu[i].s_name+'" />'+
								'	<td><img class="sign_header" src="'+allsignstu[i].icon+'">'+allsignstu[i].s_name+'</td>'+
								'	<td>'+allsignstu[i].mobile+'</td>'+
								'	<td>'+allsignstu[i].buycourse+'课时</td>'+
								'	<td>'+allsignstu[i].restnum+'课时</td>'+
								'	<td>'+
								'		<button type="button" data-toggle="tooltip" data-placement="top" title="标记为到课" onclick="ks_type_btn(this,2)" class="btn btn-'+dkbtn+' btn-xs ks_type_btn">到课</button>'+
								'		<button type="button" data-toggle="tooltip" data-placement="top" title="标记为缺课" onclick="ks_type_btn(this,1)" class="btn btn-'+dqbtn+' btn-xs ks_type_btn">待确认</button>'+
								'		<button type="button" data-toggle="tooltip" data-placement="top" title="标记为请假" onclick="ks_type_btn(this,3)" class="btn btn-'+qjbtn+' btn-xs ks_type_btn">请假</button>'+
								'		<button type="button" data-toggle="tooltip" data-placement="top" title="标记为缺课" onclick="ks_type_btn(this,0)" class="btn btn-'+qkbtn+' btn-xs ks_type_btn">缺课</button>'+
								'	</td>'+	
								'	<input type="hidden" name="status[]" value="'+dkinput+'" />'+
								'	<td class="xhks_stu stu_ks">'+defksmub+'<span class="fa fa-'+icons+' rekou" style="font-size:13px;color:'+kkcolor+'">'+ksword+'</span></td>'+
								'	<input class="stu_ks_hide" type="hidden" name="costnum[]" value="'+defksmub+'" />'+
								'</tr>';
								
					}
					$('#stu_detil_box').html(html)
					$('.ant-empty').hide()
				}else{
					$('.ant-empty').show()
				}
				if(teasign){
					var checktea = data.checktea //签到的老师
					set_select_checked('ks_tid_box', checktea.tid)
					$('#ks_tid_box').attr("disabled","disabled")
					$('#ks_tid_box').css("background-color","#eee;")
					$('#ks_tid_box').next().text('老师已签,不可更改')
				}
			}else{
				alert(data.msg)
				location.reload()
			}
		}		
	});
	$('#Modal11').modal('toggle');
}
function ks_type_btn(elm,status){
	$(elm).parent().children('.btn-primary').removeClass("btn-primary");
	$(elm).addClass("btn-primary");
	$(elm).parent().next().val(status)
}
$('.btn-group .ks_opt').click(function(){
	var opt = $(this).attr("optid")
	$(this).parent().children('.ks_opt').removeClass("btn-primarys");
	$(this).parent().children('.ks_opt').removeClass("btn-defaults");
	$(this).addClass("btn-primarys")
	if(opt == 'ksinfo'){
		$("#ksinfo").slideDown(200)
		$("#xyinfo").slideUp(200)
	}
	if(opt == 'xyinfo'){
		$("#ksinfo").slideUp(200)
		$("#xyinfo").slideDown(200)
	}
});
$('.up_saleboxs').click(function(){
	if($(this).hasClass("fa-minus-circle")){
		$(this).removeClass("fa-minus-circle")
		$(this).addClass("fa-plus-circle")
		$(this).parent().next().slideUp(200)
	}else{
		$(this).addClass("fa-minus-circle")
		$(this).removeClass("fa-plus-circle")
		$(this).parent().next().slideDown(200)
	}
});

//课程安排与报名情况切换
$('.content_tab li').click(function(){
	var opt = $(this).attr("optid")
	$(this).parent().children('li').removeClass("act");
	$(this).addClass("act")
	if(opt == 'bm_list'){
		search_bmlist()
		$("#kc_list").slideUp(200)
		$("#kcbiao_search_box").slideUp(200)
		$("#stu_list_box").slideUp(200)
		$("#stu_list").slideUp(200)
		$("#sign_list_box").slideUp(200)
		$("#sign_list").slideUp(200)
		$("#search_box").slideDown(200)
		$("#bm_list").slideDown(200)
	}
	if(opt == 'kc_list'){
		if(kc_type == 0){
			search_kslist()
			$("#ks_search_online").slideUp(200)
			$("#ks_search_offline").slideDown(200)
		}else{
			search_kslist_online()
			$("#ks_search_online").slideDown(200)
			$("#ks_search_offline").slideUp(200)
		}
		$("#search_box").slideUp(200)
		$("#bm_list").slideUp(200)
		$("#stu_list_box").slideUp(200)
		$("#stu_list").slideUp(200)
		$("#sign_list_box").slideUp(200)
		$("#sign_list").slideUp(200)
		$("#kcbiao_search_box").slideDown(200)
		$("#kc_list").slideDown(200)
	}
	if(opt == 'stu_list'){
		search_stulist()
		$("#search_box").slideUp(200)
		$("#bm_list").slideUp(200)
		$("#kc_list").slideUp(200)
		$("#kcbiao_search_box").slideUp(200)
		$("#sign_list_box").slideUp(200)
		$("#sign_list").slideUp(200)
		$("#stu_list_box").slideDown(200)
		$("#stu_list").slideDown(200)
	}
	if(opt == 'sign_list'){
		search_signlist()
		$("#search_box").slideUp(200)
		$("#bm_list").slideUp(200)
		$("#kc_list").slideUp(200)
		$("#kcbiao_search_box").slideUp(200)
		$("#stu_list_box").slideUp(200)
		$("#stu_list").slideUp(200)
		$("#sign_list_box").slideDown(200)
		$("#sign_list").slideDown(200)
	}
});
function search_signlist(type){
	$('#sign_list').empty()
	$('#sign_list').append(loadcont);//加载动画
	if(type == 'search'){
		var sign_porsen = $('#sign_porsen').val()
		var qr_tid = $('#qr_tid').val()
		var sign_type = $('#sign_type').val()
		var ksid = $('#sign_ksid').val()
	}else{
		var sign_porsen = null
		var qr_tid = null
		var sign_type = null
		var ksid = null
	}
	$.ajax({
		url: "<?php  echo $this->createWebUrl('baoming', array('op'=>'sign_list','schoolid' => $schoolid))?>",
		type: "post",
		dataType: "html",
		data: {
			kcid:"<?php  echo $kcid;?>",
			sign_porsen:sign_porsen,
			qr_tid:qr_tid,
			ksid:ksid,
			sign_type:sign_type,
		},
		success: function (data) {
			if (data) {
				$('#sign_list').html(data)
			}
		}		
	});
}
function page_signlist(url,page,elm){
	$('#sign_list').empty()
	$('#sign_list').append(loadcont);//加载动画

	var sign_porsen = $('#sign_porsen').val()
	var qr_tid = $('#qr_tid').val()
	var sign_type = $('#sign_type').val()
	var ksid = $('#sign_ksid').val()

	$.ajax({
		url: url,
		type: "post",
		dataType: "html",
		data: {
			kcid:"<?php  echo $kcid;?>",
			sign_porsen:sign_porsen,
			qr_tid:qr_tid,
			ksid:ksid,
			sign_type:sign_type,
			page:page
		},
		success: function (data) {
			if (data) {
				$('#sign_list').html(data)
			}
		}		
	});
}
function search_stulist(type){
	$('#stu_list').empty()
	$('#stu_list').append(loadcont);//加载动画
	if(type == 'search'){
		var ks_type = $('#ks_type').val()
	}else{
		var ks_type = 0
	}
	$.ajax({
		url: "<?php  echo $this->createWebUrl('baoming', array('op'=>'stu_list','schoolid' => $schoolid))?>",
		type: "post",
		dataType: "html",
		data: {
			kcid:"<?php  echo $kcid;?>",
			ks_type:ks_type,
		},
		success: function (data) {
			if (data) {
				$('#stu_list').html(data)
			}
		}		
	});
}
function search_bmlist(type){
	$('#bm_list').empty()
	$('#bm_list').append(loadcont);//加载动画
	if(type == 'search'){
		var is_pay = $('#is_pay').val()
		var start = $("input[name='createtime[start]']").val()
		var end = $("input[name='createtime[end]']").val()
		console.log(is_pay)
	}else{
		var is_pay = 0
		var createtime = 0
		var start = 0
		var end = 0
	}
	$.ajax({
		url: "<?php  echo $this->createWebUrl('baoming', array('op'=>'display','schoolid' => $schoolid))?>",
		type: "post",
		dataType: "html",
		data: {
			kcid:"<?php  echo $kcid;?>",
			is_pay:is_pay,
			start:start,
			end:end
		},
		success: function (data) {
			if (data) {
				$('#bm_list').html(data)
			}
		}		
	});
}
function search_kslist(type,nowweek){
	$('#kc_list').append(loadcont);//加载动画
	if(type == 'search'){
		var tid = $('#tid').val()
		var addr = $('#addr').val()
		var week = nowweek
	}else{
		var tid = 0
		var addr = 0
		var week = 0
	}
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kcbiao', array('op'=>'ks_list','schoolid' => $schoolid))?>",
		type: "post",
		dataType: "html",
		data: {
			kcid:"<?php  echo $kcid;?>",
			dtweek:week,
			sk_tid:tid,
			js_id:addr
		},
		success: function (data) {
			if (data) {
				$('#kc_list').empty()
				$('#kc_list').html(data)
			}
		}		
	});
}

function search_kslist_online(type){
	$('#kc_list').append(loadcont);//加载动画
	if(type == 'search'){
		var tid = $('#tid_online_search').val()
		var cont_type = $('#cont_type').val()
	}else{
		var tid = 0
		var cont_type = -1
	}
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kcbiao', array('op'=>'ks_list_online','schoolid' => $schoolid))?>",
		type: "post",
		dataType: "html",
		data: {
			kcid:"<?php  echo $kcid;?>",
			cont_type:cont_type,
			tid:tid
		},
		success: function (data) {
			if (data) {
				$('#kc_list').empty()
				$('#kc_list').html(data)
			}
		}		
	});
}
function ShowDmData(type){
	var dtweek = $('#dtweek').val()
	if(type == 'prev'){
		var nowweek =  Number(dtweek) -1;
		$('#dtweek').val(nowweek)
	}else if(type == 'next'){
		var nowweek = Number(dtweek) +1;
		$('#dtweek').val(nowweek)
	}else{
		var nowweek = Number('<?php  echo $nowweek;?>');
		$('#dtweek').val(nowweek)
	}
	search_kslist('search',nowweek)
}
function quick_pk(kcid,elm){//快速排课
	$('.guize_rili').show()
	$('.online_btn').hide()
	$('#Modal7').modal('toggle');
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kecheng', array('op'=>'pktemplet'))?>",
		type: "post",
		dataType: "html",
		data: {
			id:kcid,
			schoolid:"<?php  echo $schoolid;?>",
		},
		success: function (data) {
			if (data) {
				$('#addks_nowkcid').val(kcid)
				$('#pk_ones').empty();
				$('#pk_ones').html(data);
			}
		}		
	});
}
function sub_ks(){ //提交线下排课
	var pkmode = $('#pk_mode').val()
	var form = new FormData(document.getElementById(pkmode));
	//表单提交前的各种验证
	if(pkmode == 'guize'){ //规则模式
		var start = form.get('start')
		var end = form.get('end')
		if(dbdtaedx(start,end)){
			alert('错误,结束时间必须大于开始时间！');
			return false
		}
		var week = [];
		$(".week-select-wrap .active").each(function() {
			week.push($(this).attr("weidid"))
		});
		if(week.length < 1){
			alert('错误,前选择周几排课！');
			return false
		}
		var sd_id = form.get('sd_id')
		if(sd_id < 1){
			alert('错误,请选择上课时段,如未设置请点击右侧配置时段！');
			return false
		}
		var tid = form.get('tid')
		if(tid < 1){
			alert('错误,请选择授课老师,如果非同一老师,请分多次分开排课即可！');
			return false
		}
		var costnum = form.get('costnum')
		if(costnum < 1){
			alert('错误,请设置消耗课时数量,至少1次！');
			return false
		}
		var adrr = form.get('adrr')
		var re_type = form.get('re_type')
		var conment = form.get('conment')
	}
	if(pkmode == 'rili'){ //日历模式
		var sd_id = form.get('rl_sd_id')
		if(sd_id < 1){
			alert('错误,请选择上课时段,如未设置请点击右侧配置时段！');
			return false
		}
		var tid = form.get('rl_tid')
		if(tid < 1){
			alert('错误,请选择授课老师,如果非同一老师,请分多次分开排课即可！');
			return false
		}
		var costnum = form.get('rl_costnum')
		if(costnum < 1){
			alert('错误,请设置消耗课时数量,至少1次！');
			return false
		}
		var start = 0
		var end = 0
		var week = 0
		var re_type = 3
		var adrr = form.get('rl_adrr')
		var conment = form.get('rl_conment')
	}
	if(pkmode == 'online'){ //线上课时
		var content_type = form.get('content_type[]')
		var start = 0
		var end = 0
		var week = 0
		var re_type = 3
		var adrr = 0
		//var conment = form.get('rl_conment')
	}
	var kcid = $('#addks_nowkcid').val()
	$.ajax({
		url: "<?php  echo $this->createWebUrl('kecheng', array('op'=>'add_newks'))?>",
		type: "post",
		dataType: "json",
		data: {
			kcid:kcid,
			pkmode:pkmode,
			start:start,
			end:end,
			week:week,
			sd_id:sd_id,
			re_type:re_type,
			adrr:adrr,
			conment:conment,
			costnum:costnum,
			tid:tid,
			dataarry:dataarry,
			content_type:content_type,
			schoolid:"<?php  echo $schoolid;?>"
		},
		success: function (data) {
			alert(data.msg)
			if (data.result) {
				$('#addks_nowkcid').val(0)
				$('#pk_ones').empty();
				$('#Modal7').modal('toggle');
				$('.guize_rili').hide()
				$('.online_btn').hide()
				search_kslist()
			}
		}		
	});
}
//倒计时滚动
function move(div,nub,dw){
var oSpan=document.getElementById(div);
var d=nub;//跳动到最后的数字
var s= parseInt(oSpan.innerHTML);//起始起始值 一般是 0 或其他
var time=1000;  //所用时间 1000毫秒（ 在1秒内 数值增加到d）;
var outTime=0;  //所消耗的时间
var interTime=30;
var timer = setInterval(function(){
    outTime+=interTime;
    if(outTime < time){
        oSpan.innerHTML= parseInt(d/time*outTime)+dw;
    }else{
        oSpan.innerHTML=d+dw;
    }
    },interTime);
}
function dbdtaedx(start,end){
	var  date1arr = start.split("-");
	var date1 = new Date();
	date1.setFullYear(date1arr[0],date1arr[1],date1arr[2]);
	var  date1arr2 = end.split("-");
	var date2 = new Date();
	date2.setFullYear(date1arr2[0],date1arr2[1],date1arr2[2]);
	if(date1>=date2){
		return true
	}else{
		return false
	}
}
/** 
 * 设置select控件选中 
 * @param selectId select的id值 
 * @param checkValue 选中option的值 
 * @author 标哥 
*/  
function set_select_checked(selectId, checkValue){  
    var select = document.getElementById(selectId);  

    for (var i = 0; i < select.options.length; i++){  
        if (select.options[i].value == checkValue){  
            select.options[i].selected = true;  
            break;  
        }  
    }  
}
clockpicker()
function clockpicker(){
	require(["clockpicker"], function($){
		$(function(){
			$(".clockpicker").clockpicker({
				autoclose: true
			});
		});
	});
}
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>