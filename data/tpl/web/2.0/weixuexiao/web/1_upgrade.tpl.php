<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
	<li <?php  if($_GPC['do'] == 'basic' || $_GPC['do'] == '') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('basic')?>">基本设置</a></li>
	<?php  if($_W['isfounder']) { ?><li <?php  if(($_GPC['do'] == 'sms')) { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('sms')?>">短信配置</a></li><?php  } ?>
    <?php  if($_W['isfounder']) { ?> <li <?php  if($_GPC['do'] == 'upgrade') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('upgrade')?>">检查数据库</a></li><?php  } ?>
</ul>
<?php  if($_W['isfounder']) { ?>
<?php  if($op == 'display') { ?>
  <div class="clearfix">
    <div class="alert alert-danger">
      <i class="fa fa-exclamation-triangle"></i> 更新时请注意备份 微教育 数据和相关 数据库 文件！并检测系统目录addons/weixuexiao/是否可写<a href="<?php  echo $this->createWebUrl('upgrade',array('op'=>'checkversion'))?>">降低版本重新检测</a>
    </div>
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" >

      <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">当前版本</label>
        <div class="col-sm-10">
          <p class="form-control-static"><span class="fa fa-square-o"></span> &nbsp; 系统当前版本: v<?php  echo $version;?></p>
          <p class="form-control-static"><span class="fa fa-square-o"></span> &nbsp; 更新日期: <?php  echo $updatedate;?></p>
        </div>
      </div>
      <div class="form-group">
        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">最新版本</label>
        <div class="col-sm-10">
          <p class="form-control-static" id="banben"><span class="fa fa-square-o"></span> &nbsp; 正在检测最新文件...</p>
          <p class="form-control-static" id="uptime"><span class="fa fa-square-o"></span> &nbsp; </p>

           <div class="help-block">在一个发布版中可能存在多次补丁, 因此版本可能未更新/显示有更新也有可能是您修改了源代码</div>
        </div>
      </div>

      <div class="form-group" id="upmessage" style="display: none;">
        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">更新通告</label>
        <div class="col-sm-10">
          <p class="form-control-static" id="upmsg">暂无更新公告</p>
        </div>
      </div>
      <div class="form-group" id="upfiles" style="display: none;">
        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">文件变更</label>
        <div class="col-sm-10">
          <div class="help-block"><strong>注意: 本次更新涉及到程序变动, 请做好备份.</strong></div>
          <div class="alert alert-info" style="line-height:20px;margin-top:20px;">

            <div><span style="display:inline-block; width:100%;" id="upfile"></span></div>
          </div>
        </div>
      </div>
      <div class="form-group" id="jindu" style="display: none">
        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">更新进度</label>
        <div class="col-sm-10">
          <div class="alert alert-success" style="line-height:20px;margin-top:20px;">
            <div><span style="display:inline-block; width:100%;" id="check"></span></div>
          </div>
        </div>
      </div>

      <div class="form-group" id="xieyi" style="display: none">
        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">更新协议</label>
        <div class="col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox" id="agreement"> 我已经做好了相关文件及数据库的备份工作，并自愿承担更新所存在的风险
            </label>
          </div>
        </div>
      </div>
      <div class="form-group" id="upgrade" style="display:none">
        <div class="col-sm-offset-2 col-md-offset-2 col-lg-offset-1 col-xs-12 col-sm-10 col-md-10 col-lg-11">
          <input type="button" id="upgradebtn" value="立即更新" class="btn btn-primary" />
        </div>
      </div>
      <div class="alert alert-success" id="upinfo" style="display: none;text-align: center">
        <i class="fa fa-exclamation-triangle"></i> 更新时请注意备份 微教育 数据和相关 数据库 文件！
      </div>
    </form>
  </div>
  <script language='javascript'>
      function upgrade(){
          $.ajax({
              url: "<?php  $this->createWebUrl('upgrade')?>",
              data:{op:'download'},
              type:'post',
              dataType:'json',
              success:function(ret){
                $("#jindu").show();
               if(ret.result==1)      {
                   $('#process').html("已更新 " + ret.success + "个文件 / 共 " + ret.total +  " 个文件！<br/>当前更新： " + ret.path + "");
                   upgrade();
               }else if(ret.result==2){
                    $('#process').html("更新完成!");
                    util.message("更新成功！", '<?php  echo $this->createWebUrl('upgrade')?>', 'success');
               }
              }
          });
      }
      $(function(){
           $.ajax({
              url: "<?php  $this->createWebUrl('upgrade')?>",
              data:{op:'check',verifycode:$('#verifycode').val()},
              type:'post',
              dataType:'json',
              success:function(ret){
                  //console.log(ret);
                  if(ret.result==1){

                      var html = "";
                      var banben ="<span class='fa fa-square-o'></span> &nbsp; 存在的新版本: <span style='color:red'> V" + ret.version + "</span>";
                      var uptime ="<span class='fa fa-square-o'></span> &nbsp; 发布日期:" + ret.uptime + "";
                      $("#banben").html(banben);
                      $("#uptime").html(uptime);
                      if(ret.filecount<=0 && !ret.upgrade){
                          $("#upinfo").show();
                          $("#upinfo").html("恭喜您，您现在是最新版本！");
                      }else{
                         if(ret.filecount>0) {
                            $('#upfiles').show();
                             var upfile = "";
                             upfile += "共检测到有 <span style='color:red'>" + ret.filecount + "</span> 个文件需要更新.<br/><p id='sql' ></p>";
							 upfile += "<span style='color:red'>" + ret.upfile + "</span>";
                             $("#upfile").html(upfile);
                         }
                         if(ret.upgrade){
                               $("#sql").html("此次有数据变动.<br/>");
                         }
                         if(ret.log!=''){
                             $("#upmessage").show();
                             $("#upmsg").html(ret.log);
                         }
                      }
                      html+="<div id='process' style='color:red;'></div>";


                      $("#check").html(html);
                      if(ret.filecount>0 || ret.upgrade){
                          $('#upgrade').show();
                          $("#xieyi").show();
                          $("#upgradebtn").unbind('click').click(function(){
                                if($(this).attr('updating')=='1'){
                                    return;
                                }
                                var a = $("#agreement").is(':checked');
                                if(a) {
                                  if(confirm('更新将直接覆盖本地文件, 请注意备份文件和数据. \n\n**另注意** 更新过程中不要关闭此浏览器窗口.')) {
                                    $(this).attr('updating',1).val('正在更新中...');
                                    upgrade();
                                  }
                                } else {
                                  util.message("抱歉，更新前请确认更新带来的风险！", '', 'error');
                                  return false;
                                }
                           });
                      }

                  }else{
                      $("#banben").html( ret.message);
                  }
              }
          })
      })
  </script>
<?php  } else if($op == 'sys') { ?>
  <div class="clearfix">
    <div class="alert alert-danger">
      <i class="fa fa-exclamation-triangle"></i> 保留中
    </div>
  </div>
<?php  } else { ?>
<?php  } ?>
<?php  } else { ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			 抱歉：
		</div>
		<div class="panel-body">
		<div class="row-fluid">
			<div class="span8 control-group">
				【你没有权限查看本页面，请联系管理员进行操作】
			</div>
		</div>
		</div>
	</div>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>