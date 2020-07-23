<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
<ul class="nav nav-tabs">
 	<?php  if((IsHasQx($tid_global,1001101,1,$schoolid))) { ?>
    <li <?php  if($operation == 'display' && $_GPC['do'] == 'shoucelist') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('shoucelist', array('op' => 'display', 'schoolid' => $schoolid))?>"><?php  echo $logo['shoucename'];?></a></li>
    <?php  } ?>
	<li <?php  if($_GPC['do'] == 'shouceset' && $operation =='display') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('shouceset', array('op' => 'display', 'schoolid' => $schoolid))?>">评价管理</a></li>
	<li <?php  if($_GPC['do'] == 'shouceset' && $operation =='pylist') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('shouceset', array('op' => 'pylist', 'schoolid' => $schoolid))?>">评语库</a></li>
</ul>
 <style>
.cLine {overflow: hidden; padding: 5px 0;color:#000000;}
.alert {padding: 8px 35px 0 10px;text-shadow: none;-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);background-color: #f9edbe;border: 1px solid #f0c36d;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;color: #333333;margin-top: 5px;}
.alert p {margin: 0 0 10px;display: block;}
.alert .bold{font-weight:bold;}
 </style>
<div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>请先设置评价分类和评语库</br>   
   <strong><font color='red'>特别提醒: 当你删除该项的时候,该项下相关的所有数据都会被删除,请谨慎操作!以免丢失数据!</font></strong></br>
   <strong><font style="color:#641DBF;">素材请查看群文件，（评语系统素材）!</font></strong>
    </p>
    </div>
</div>
<?php  if($operation == 'post') { ?>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <!-- <input type="hidden" name="parentid" value="<?php  echo $parent['id'];?>" /> -->
        <input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />		
        <div class="panel panel-default">
            <div class="panel-heading">
                分类编辑
            </div>
            <div class="panel-body">                
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">排序</label>
                    <div class="col-sm-9">
					<div class="input-group">
                        <input type="text" name="ssort" class="form-control" value="<?php  echo $item['ssort'];?>" />
                    </div>
					</div>
                </div>			
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">允许分享</label>
					<div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="allowshare" value="1"  <?php  if(!empty($item) && $item['allowshare'] == 1) { ?>checked="true"<?php  } ?> />是</label>
						&nbsp;&nbsp;&nbsp;
						<label class="radio-inline"><input type="radio" name="allowshare" value="2"  <?php  if(empty($item) || $item['allowshare'] == 2) { ?>checked="true"<?php  } ?> />否</label>
						<span style ="color:red;" class="help-block">设置为否无法生成幻灯片</br>注意：当你设置为允许分享的时候，以下选项必须填</br>尾页按钮文字,尾页说明引导文字,第1-6页背景,第4-5页顶部图,尾页顶部图</span>
					</div>
				</div>				
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">体系名称</label>
                    <div class="col-sm-9">
					<div class="input-group">
                        <input type="text" name="title" class="form-control" value="<?php  echo $item['title'];?>" />
						<span class="help-block">建议2-4字，否则前端会挤出</span>
                    </div>
					</div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">尾页按钮文字</label>
                    <div class="col-sm-9">
					<div class="input-group">
                        <input type="text" name="bottext" class="form-control" value="<?php  echo $item['bottext'];?>" />
                    </div>
					</div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">尾页按钮链接</label>
                    <div class="col-sm-9">
                        <input type="text" name="boturl" class="form-control" value="<?php  echo $item['boturl'];?>" />
					</div>
                </div>				
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">尾页说明引导文字(顶部)</label>
                    <div class="col-sm-9">
                        <input type="text" name="lasttxet" class="form-control" value="<?php  echo $item['lasttxet'];?>" />
					</div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">尾页说明引导关注或广告文字（底部上）</label>
                    <div class="col-sm-9">
                        <input type="text" name="guidword1" class="form-control" value="<?php  echo $item['guidword1'];?>" />
					</div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">尾页说明引导关注或广告文字（底部下）</label>
                    <div class="col-sm-9">
                        <input type="text" name="guidword2" class="form-control" value="<?php  echo $item['guidword2'];?>" />
					</div>
                </div>				
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">尾页说明引导关注或广告链接</label>
                    <div class="col-sm-9">
                        <input type="text" name="guidurl" class="form-control" value="<?php  echo $item['guidurl'];?>" />
					</div>
                </div>				
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐BGM</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_audio('bgm', $item['bgm']);?>
                    </div>
                </div>				
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小图标</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('icon', $item['icon'])?>
						<span style ="color:red;" class="help-block">供前端教师创建时选择,建议尺寸200*200</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">第一页背景</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('bg1', $item['bg1'])?>
						<span style ="color:red;" class="help-block">建议尺寸640*1007</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">第二页背景</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('bg2', $item['bg2'])?>
						<span style ="color:red;" class="help-block">建议尺寸640*1007</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">第三页背景</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('bg3', $item['bg3'])?>
						<span style ="color:red;" class="help-block">建议尺寸640*1007</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">第四页背景</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('bg4', $item['bg4'])?>
						<span style ="color:red;" class="help-block">建议尺寸640*1007</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">第五页背景</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('bg5', $item['bg5'])?>
						<span style ="color:red;" class="help-block">建议尺寸640*1007</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">第六页背景</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('bg6', $item['bg6'])?>
						<span style ="color:red;" class="help-block">建议尺寸640*1007</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">第二页顶部</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('top1', $item['top1'])?>
						<span style ="color:red;" class="help-block">建议尺寸547*127</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">第三页顶部</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('top2', $item['top2'])?>
						<span style ="color:red;" class="help-block">建议尺寸191*107</span>
                    </div>
                </div>	
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">第四页顶部</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('top3', $item['top3'])?>
						<span style ="color:red;" class="help-block">建议尺寸191*107</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">第五页顶部</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('top4', $item['top4'])?>
						<span style ="color:red;" class="help-block">建议尺寸191*107</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">尾页顶部图片</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('top5', $item['top5'])?>
						<span style ="color:red;" class="help-block">建议尺寸334*204</span>
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
<?php  } else if($operation == 'post1') { ?>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <!-- <input type="hidden" name="parentid" value="<?php  echo $parent['id'];?>" /> -->
        <input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />		
        <div class="panel panel-default">
            <div class="panel-heading">
                评语编辑
            </div>
            <div class="panel-body">                
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">排序</label>
                    <div class="col-sm-9">
					<div class="input-group">
                        <input type="text" name="ssort" class="form-control" value="<?php  echo $item['ssort'];?>" />
                    </div>
					</div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">评语内容</label>
                    <div class="col-sm-9">
                        <input type="text" name="title" class="form-control" value="<?php  echo $item['title'];?>" />
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
<?php  } else if($operation == 'display') { ?>
<div class="main">
    <div class="panel panel-default">
        <div class="panel-body">
            <a class="btn btn-primary" href="javascript:location.reload()"><i class="fa fa-refresh"></i>刷新</a>
			<a style="margin-left:40px;" class="btn btn-primary" href="<?php  echo $this->createWebUrl('shouceset', array('op' => 'post', 'schoolid' => $schoolid))?>"><i class="fa fa-plus"></i>新增评价体系</a>
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
                        <th>名称</th>
						<th>小图标</th>
						<th>分享</th>
						<th>BGM</th>
						<th>教师评价规则</th>
						<th>家长评价规则</th>
                        <th style="text-align:right;">编辑/删除</th>
                    </tr>
                    </thead>
                    <tbody id="level-list">
                    <?php  if(is_array($sclist)) { foreach($sclist as $row) { ?>
                    <tr>
					    <td><div class="type-parent"><?php  echo $row['ssort'];?></div></td>
                        <td><div class="type-parent"><?php  echo $row['title'];?></div></td>
						<td><img src="<?php  echo tomedia($row['icon'])?>" width="50" onerror="this.src='./resource/images/nopic.jpg';" style="border-radius: 3px;" /></td>
						<td><div class="type-parent"><?php  if($row['allowshare'] ==1) { ?><span class="label label-success">允许分享</span><?php  } else { ?><span class="label label-danger">禁止分享</span><?php  } ?></div></td>
						<td><div class="type-parent"><?php  if($row['bgm']) { ?><span class="label label-success">有</span><?php  } else { ?><span class="label label-danger">无</span><?php  } ?></div></td>
						<td><a class="btn btn-default btn-sm" href="<?php  echo $this->createWebUrl('shouceset', array('setid' => $row['id'], 'op' => 'setiocn', 'schoolid' => $schoolid))?>" title="设置规则"><i class="fa fa-qrcode">&nbsp;&nbsp;设置规则</i></a></td>
						<td><a class="btn btn-default btn-sm" href="<?php  echo $this->createWebUrl('shouceset', array('setid' => $row['id'], 'op' => 'setiocns', 'schoolid' => $schoolid))?>" title="设置规则"><i class="fa fa-qrcode">&nbsp;&nbsp;设置规则</i></a></td> 
                        <td style="text-align:right;"><a class="btn btn-default btn-sm" href="<?php  echo $this->createWebUrl('shouceset', array('op' => 'post', 'id' => $row['id'], 'schoolid' => $schoolid))?>" title="编辑"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a class="btn btn-default btn-sm qx_1113" href="<?php  echo $this->createWebUrl('shouceset', array('op' => 'delete', 'id' => $row['id'], 'schoolid' => $schoolid))?>" onclick="return confirm('确认删除此分类吗？');return false;" title="删除"><i class="fa fa-times"></i></a></td>
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
<?php  if((!(IsHasQx($tid_global,1001113,1,$schoolid)))) { ?>
	$(function(){
		$(".qx_1113").hide();
	});
<?php  } ?>
</script>
<?php  } else if($operation == 'pylist') { ?>
<div class="main">
    <div class="panel panel-default">
        <div class="panel-body">
		  <a style="margin-left:40px;" class="btn btn-primary qx_1122" href="<?php  echo $this->createWebUrl('shouceset', array('op' => 'post1', 'schoolid' => $schoolid))?>"><i class="fa fa-plus"></i>新增评语</a>
		  <a class="btn btn-success qx_1123" href="javascript:;" onclick="$('.file-container').slideToggle()">批量导入评语</a>
		  <a class="btn btn-primary" href="javascript:location.reload()"><i class="fa fa-refresh"></i>刷新</a>        
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
                <a class="btn btn-danger" onclick="submits('input_scpy','form');">导入数据</a>
				<a class="btn btn-info" href="../addons/weixuexiao/public/example/example_uppyk.xls"><i class="fa fa-download"></i>下载导入模板</a>
            </form>
        </div>
    </div>
	<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/excel_input', TEMPLATE_INCLUDEPATH)) : (include template('public/excel_input', TEMPLATE_INCLUDEPATH));?>
    <div class="panel panel-default">
        <form action="" method="post" class="form-horizontal form" >
            <input type="hidden" name="schoolid" value="<?php  echo $schoolid;?>" />
            <div class="table-responsive panel-body">
                <table class="table table-hover">
                    <thead class="navbar-inner">
                    <tr>
					    <th style="width:3%;">排序</th>
                        <th style="width:70%;;">评语</th>
						<th>添加人</th>
                        <th class="qx_e_d" style="text-align:right;">编辑/删除</th>
                    </tr>
                    </thead>
                    <tbody id="level-list">
                    <?php  if(is_array($sclist)) { foreach($sclist as $row) { ?>
                    <tr>
					    <td><?php  echo $row['ssort'];?></td>
                        <td><?php  echo $row['title'];?></td>
						<td><?php  if($row['tanme']) { ?><span class="label label-success"><?php  echo $row['tname'];?></span><?php  } else { ?><span class="label label-info">管理员添加</span><?php  } ?></td>
                        <td class="qx_e_d" style="text-align:right;"><a class="btn btn-default btn-sm qx_1122" href="<?php  echo $this->createWebUrl('shouceset', array('op' => 'post1', 'id' => $row['id'], 'schoolid' => $schoolid))?>" title="编辑"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a class="btn btn-default btn-sm qx_1124" href="<?php  echo $this->createWebUrl('shouceset', array('op' => 'delete1', 'id' => $row['id'], 'schoolid' => $schoolid))?>" onclick="return confirm('确认删除此分类吗？');return false;" title="删除"><i class="fa fa-times"></i></a></td>
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
$(function(){
	var e_d = 2 ;
	<?php  if((!(IsHasQx($tid_global,1001123,1,$schoolid)))) { ?>
		$(".qx_1123").hide();
	<?php  } ?>
	<?php  if((!(IsHasQx($tid_global,1001122,1,$schoolid)))) { ?>
		$(".qx_1122").hide();
		e_d = e_d - 1 ;
	<?php  } ?>
	<?php  if((!(IsHasQx($tid_global,1001124,1,$schoolid)))) { ?>
		$(".qx_1124").hide();
		e_d = e_d - 1 ;
	<?php  } ?>
	if(e_d == 0){
		$(".qx_e_d").hide();
	}
});

</script>
<?php  } else if($operation == 'setiocn') { ?>
<style>
.template .item{position:relative;display:block;float:left;border:1px #ddd solid;border-radius:5px;background-color:#fff;padding:5px;width:150px;margin:0 20px 20px 0; overflow:hidden;}
.template .title{margin:5px auto;line-height:2em;}
.template .title a{text-decoration:none;}
.template .item img{width:100px;height:100px; cursor:pointer;}
.template .active.item-style img, .template .item-style:hover img{width:100px;height:100px;border:3px #009cd6 solid;padding:1px; }
.template .title .fa{display:none}
.template .active .fa.fa-check{display:inline-block;position:absolute;bottom:33px;right:6px;color:#FFF;background:#009CD6;padding:5px;font-size:14px;border-radius:0 0 6px 0;}
.template .fa.fa-times{cursor:pointer;display:inline-block;position:absolute;top:10px;right:6px;color:#D9534F;background:#ffffff;padding:5px;font-size:14px;text-decoration:none;}
.template .fa.fa-times:hover{color:red;}
.template .item-bg{width:100%; height:342px; background:#000; position:absolute; z-index:1; opacity:0.5; margin:-5px 0 0 -5px;}
.template .item-build-div1{position:absolute; z-index:2; margin:-5px 10px 0 5px; width:168px;}
.template .item-build-div2{text-align:center; line-height:30px; padding-top:150px;}
</style>
<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
	<div class="panel-heading">规则设置--教师</div>
    <div class="clearfix template">        
		<div class="panel panel-default">  
			<div id="custom-url">
			<?php  if($item) { ?>
				<?php  if(is_array($item)) { foreach($item as $row) { ?>
				<div class="panel-body items">
					<input type="hidden" name="thisid[]" value="<?php  echo $row['id'];?>" />
					<input type="hidden" name="old[]" value="11111" />
					<div class="item item-style">规则
						<div class="input-group">
							<span class="input-group-addon">标题</span>
							<input type="text" class="form-control" name="custom_title[]" value="<?php  echo $row['title'];?>">
						</div>
						<div class="input-group">
							<span class="input-group-addon">排序</span>
							<input type="text" class="form-control" name="custom_ssort[]" value="<?php  echo $row['ssort'];?>">
						</div>						
					</div>					
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级1</div>
									 <?php  echo tpl_form_field_image('custom_icon1[]',$row['icon1'])?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title1[]" placeholder="请输入等级文字描述"><?php  echo $row['icon1title'];?></textarea>
							 </div>
							<span class="fa fa-check"></span>  
					  </div>
					</div> 					
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级2</div>
									 <?php  echo tpl_form_field_image('custom_icon2[]',$row['icon2'])?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title2[]" placeholder="请输入等级文字描述"><?php  echo $row['icon2title'];?></textarea>
							 </div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级3</div>
									 <?php  echo tpl_form_field_image('custom_icon3[]',$row['icon3'])?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title3[]" placeholder="请输入等级文字描述"><?php  echo $row['icon3title'];?></textarea>
							 </div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>    
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级4</div>
									 <?php  echo tpl_form_field_image('custom_icon4[]',$row['icon4'])?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title4[]" placeholder="请输入等级文字描述"><?php  echo $row['icon4title'];?></textarea>
							 </div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级5</div>
									 <?php  echo tpl_form_field_image('custom_icon5[]',$row['icon5'])?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title5[]" placeholder="请输入等级文字描述"><?php  echo $row['icon5title'];?></textarea>
							 </div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>
					<div class="col-sm-1" style="margin-top:5px">
						<a onclick="del('<?php  echo $row['id'];?>')" class="custom-url-del"><i class="fa fa-times-circle"></i> </a>
					</div>
			    </div>
				<?php  } } ?>	
			<?php  } else { ?>
				<div class="panel-body items">
					<input type="hidden" name="c" value="site" />
					<div class="item item-style">规则
						<div class="input-group">
							<span class="input-group-addon">标题</span>
							<input type="text" class="form-control" name="custom_title-new[]" value="<?php  echo $url['title'];?>">
						</div>
						<div class="input-group">
							<span class="input-group-addon">排序</span>
							<input type="text" class="form-control" name="custom_ssort-new[]" value="<?php  echo $url['title'];?>">
						</div>						
					</div>					
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级1</div>
									 <?php  echo tpl_form_field_image('custom_icon1-new[]')?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title1-new[]" placeholder="请输入等级文字描述"></textarea>
							 </div>
							<span class="fa fa-check"></span>  
					  </div>
					</div> 					
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级2</div>
									 <?php  echo tpl_form_field_image('custom_icon2-new[]')?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title2-new[]" placeholder="请输入等级文字描述"></textarea></div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级3</div>
									 <?php  echo tpl_form_field_image('custom_icon3-new[]')?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title3-new[]" placeholder="请输入等级文字描述"></textarea></div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>    
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级4</div>
									 <?php  echo tpl_form_field_image('custom_icon4-new[]')?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title4-new[]" placeholder="请输入等级文字描述"></textarea></div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级5</div>
									 <?php  echo tpl_form_field_image('custom_icon5-new[]')?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title5-new[]" placeholder="请输入等级文字描述"></textarea></div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>
					<div class="col-sm-1" style="margin-top:5px">
						<a href="javascript:;" class="custom-url-del"><i class="fa fa-times-circle"></i> </a>
					</div>				
			    </div>
			<?php  } ?>
			</div>
		</div>
	</div>	
	<div class="panel panel-default">  
		<div class="clearfix template"> 
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
				<div class="col-sm-9 col-xs-12">
					<a href="javascript:;" id="custom-url-add"><i class="fa fa-plus-circle"></i> 添加规则</a>
				</div>
			</div>	
		</div>	
	</div>
	<div class="form-group col-sm-12">
		<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
		<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
	</div>
</form>	
<script>
		$('#custom-url-add').click(function(){
			var html =  '<div class="panel-body">'+
						'	<input type="hidden" name="new[]" value="2222" />'+
						'	<div class="item item-style">规则'+
						'		<div class="input-group">'+
						'			<span class="input-group-addon">标题</span>'+
						'			<input type="text" class="form-control" name="custom_title-new[]" value="">'+
						'		</div>'+
						'		<div class="input-group">'+
						'			<span class="input-group-addon">排序</span>'+
						'			<input type="text" class="form-control" name="custom_ssort-new[]" value="">'+
						'		</div>'+						
						'	</div>'+
						'	<div class="item item-style">'+
						'		<div class="title">'+
						'			 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级1</div>'+	 
						'				<div class="input-group ">'+
						'					<input type="text" name="custom_icon1-new[]" value="" class="form-control" autocomplete="off">'+
						'					<span class="input-group-btn">'+
						'						<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>'+
						'					</span>'+
						'				</div>'+
						'				<div class="input-group " style="margin-top:.5em;">'+
						'					<img src="./resource/images/nopic.jpg" ; this.title="图片未找到" class="img-responsive img-thumbnail"  width="150" />'+
						'					<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>'+
						'				</div>'+
						'				<div style="overflow:hidden; height:48px;margin-top:2px;">'+
						'					<textarea style="width:178px;" name="custom_title1-new[]" placeholder="请输入等级文字描述"></textarea>'+
						'				</div>'+
						'			<span class="fa fa-check"></span>'+
						'		</div>'+
						'	</div>'+						
						'	<div class="item item-style">'+
						'		<div class="title">'+
						'			 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级2</div>'+	 
						'				<div class="input-group ">'+
						'					<input type="text" name="custom_icon2-new[]" value="" class="form-control" autocomplete="off">'+
						'					<span class="input-group-btn">'+
						'						<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>'+
						'					</span>'+
						'				</div>'+
						'				<div class="input-group " style="margin-top:.5em;">'+
						'					<img src="./resource/images/nopic.jpg" ; this.title="图片未找到" class="img-responsive img-thumbnail"  width="150" />'+
						'					<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>'+
						'				</div>'+
						'				<div style="overflow:hidden; height:48px;margin-top:2px;">'+
						'					<textarea style="width:178px;" name="custom_title2-new[]" placeholder="请输入等级文字描述"></textarea>'+
						'				</div>'+
						'			<span class="fa fa-check"></span>'+
						'		</div>'+
						'	</div>'+
						'	<div class="item item-style">'+
						'		<div class="title">'+
						'			 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级3</div>'+	 
						'				<div class="input-group ">'+
						'					<input type="text" name="custom_icon3-new[]" value="" class="form-control" autocomplete="off">'+
						'					<span class="input-group-btn">'+
						'						<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>'+
						'					</span>'+
						'				</div>'+
						'				<div class="input-group " style="margin-top:.5em;">'+
						'					<img src="./resource/images/nopic.jpg" ; this.title="图片未找到" class="img-responsive img-thumbnail"  width="150" />'+
						'					<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>'+
						'				</div>'+
						'				<div style="overflow:hidden; height:48px;margin-top:2px;">'+
						'					<textarea style="width:178px;" name="custom_title3-new[]" placeholder="请输入等级文字描述"></textarea>'+
						'				</div>'+
						'			<span class="fa fa-check"></span>'+
						'		</div>'+
						'	</div>'+
						'	<div class="item item-style">'+
						'		<div class="title">'+
						'			 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级4</div>'+	 
						'				<div class="input-group ">'+
						'					<input type="text" name="custom_icon4-new[]" value="" class="form-control" autocomplete="off">'+
						'					<span class="input-group-btn">'+
						'						<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>'+
						'					</span>'+
						'				</div>'+
						'				<div class="input-group " style="margin-top:.5em;">'+
						'					<img src="./resource/images/nopic.jpg" ; this.title="图片未找到" class="img-responsive img-thumbnail"  width="150" />'+
						'					<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>'+
						'				</div>'+
						'				<div style="overflow:hidden; height:48px;margin-top:2px;">'+
						'					<textarea style="width:178px;" name="custom_title4-new[]" placeholder="请输入等级文字描述"></textarea>'+
						'				</div>'+
						'			<span class="fa fa-check"></span>'+
						'		</div>'+
						'	</div>'+
						'	<div class="item item-style">'+
						'		<div class="title">'+
						'			 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级5</div>'+	 
						'				<div class="input-group ">'+
						'					<input type="text" name="custom_icon5-new[]" value="" class="form-control" autocomplete="off">'+
						'					<span class="input-group-btn">'+
						'						<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>'+
						'					</span>'+
						'				</div>'+
						'				<div class="input-group " style="margin-top:.5em;">'+
						'					<img src="./resource/images/nopic.jpg" ; this.title="图片未找到" class="img-responsive img-thumbnail"  width="150" />'+
						'					<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>'+
						'				</div>'+
						'				<div style="overflow:hidden; height:48px;margin-top:2px;">'+
						'					<textarea style="width:178px;" name="custom_title5-new[]" placeholder="请输入等级文字描述"></textarea>'+
						'				</div>'+
						'			<span class="fa fa-check"></span>'+
						'		</div>'+
						'	</div>'+
						'	<div class="col-sm-1" style="margin-top:5px">'+
						'   	<a href="javascript:;" class="custom-url-del"><i class="fa fa-times-circle"></i></a>'+
						'	</div>'+					
						'</div>';
					;
					
			//if($('#custom-url .items').size() < 2) {
			//	util.message('你至少一项评价规则', '', 'error');
			//	return false;
			//}
			$('#custom-url').append(html);
		});
		$(document).on('click', '.remind-reply-del, .comment-reply-del, .times-del, .custom-url-del', function(){
			$(this).parent().parent().remove();
			return false;
		});
		function del(id) {
			var id = id;
			var truthBeTold = window.confirm('确认要删除已保存的评价规则吗 ?'); 
			var url = "<?php  echo $this->createWebUrl('shouceset',array('op'=>'delitemiconset'))?>";
			var submitData = {
					id:id,
					schoolid:"<?php  echo $schoolid;?>",
			};
			if (truthBeTold) {
				$.post(url, submitData, function(data) {
					if (data.result) {
						util.message('删除成功', '', 'success');
						location.reload();
					}
				},'json');
			}
		}		
</script>
<?php  } else if($operation == 'setiocns') { ?>
<style>
.template .item{position:relative;display:block;float:left;border:1px #ddd solid;border-radius:5px;background-color:#fff;padding:5px;width:150px;margin:0 20px 20px 0; overflow:hidden;}
.template .title{margin:5px auto;line-height:2em;}
.template .title a{text-decoration:none;}
.template .item img{width:100px;height:100px; cursor:pointer;}
.template .active.item-style img, .template .item-style:hover img{width:100px;height:100px;border:3px #009cd6 solid;padding:1px; }
.template .title .fa{display:none}
.template .active .fa.fa-check{display:inline-block;position:absolute;bottom:33px;right:6px;color:#FFF;background:#009CD6;padding:5px;font-size:14px;border-radius:0 0 6px 0;}
.template .fa.fa-times{cursor:pointer;display:inline-block;position:absolute;top:10px;right:6px;color:#D9534F;background:#ffffff;padding:5px;font-size:14px;text-decoration:none;}
.template .fa.fa-times:hover{color:red;}
.template .item-bg{width:100%; height:342px; background:#000; position:absolute; z-index:1; opacity:0.5; margin:-5px 0 0 -5px;}
.template .item-build-div1{position:absolute; z-index:2; margin:-5px 10px 0 5px; width:168px;}
.template .item-build-div2{text-align:center; line-height:30px; padding-top:150px;}
</style>
<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
	<div class="panel-heading">规则设置---家长使用</div>
    <div class="clearfix template">        
		<div class="panel panel-default">  
			<div id="custom-url">
			<?php  if($item) { ?>
				<?php  if(is_array($item)) { foreach($item as $row) { ?>
				<div class="panel-body items">
					<input type="hidden" name="thisid[]" value="<?php  echo $row['id'];?>" />
					<input type="hidden" name="old[]" value="11111" />
					<div class="item item-style">规则
						<div class="input-group">
							<span class="input-group-addon">标题</span>
							<input type="text" class="form-control" name="custom_title[]" value="<?php  echo $row['title'];?>">
						</div>
						<div class="input-group">
							<span class="input-group-addon">排序</span>
							<input type="text" class="form-control" name="custom_ssort[]" value="<?php  echo $row['ssort'];?>">
						</div>						
					</div>					
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级1</div>
									 <?php  echo tpl_form_field_image('custom_icon1[]',$row['icon1'])?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title1[]" placeholder="请输入等级文字描述"><?php  echo $row['icon1title'];?></textarea>
							 </div>
							<span class="fa fa-check"></span>  
					  </div>
					</div> 					
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级2</div>
									 <?php  echo tpl_form_field_image('custom_icon2[]',$row['icon2'])?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title2[]" placeholder="请输入等级文字描述"><?php  echo $row['icon2title'];?></textarea>
							 </div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级3</div>
									 <?php  echo tpl_form_field_image('custom_icon3[]',$row['icon3'])?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title3[]" placeholder="请输入等级文字描述"><?php  echo $row['icon3title'];?></textarea>
							 </div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>    
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级4</div>
									 <?php  echo tpl_form_field_image('custom_icon4[]',$row['icon4'])?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title4[]" placeholder="请输入等级文字描述"><?php  echo $row['icon4title'];?></textarea>
							 </div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级5</div>
									 <?php  echo tpl_form_field_image('custom_icon5[]',$row['icon5'])?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title5[]" placeholder="请输入等级文字描述"><?php  echo $row['icon5title'];?></textarea>
							 </div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>
					<div class="col-sm-1" style="margin-top:5px">
						<a onclick="del('<?php  echo $row['id'];?>')" class="custom-url-del"><i class="fa fa-times-circle"></i> </a>
					</div>
			    </div>
				<?php  } } ?>	
			<?php  } else { ?>	
				<div class="panel-body items">
					<input type="hidden" name="c" value="site" />
					<div class="item item-style">规则
						<div class="input-group">
							<span class="input-group-addon">标题</span>
							<input type="text" class="form-control" name="custom_title-new[]" value="<?php  echo $url['title'];?>">
						</div>
						<div class="input-group">
							<span class="input-group-addon">排序</span>
							<input type="text" class="form-control" name="custom_ssort-new[]" value="<?php  echo $url['title'];?>">
						</div>						
					</div>					
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级1</div>
									 <?php  echo tpl_form_field_image('custom_icon1-new[]')?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title1-new[]" placeholder="请输入等级文字描述"></textarea>
							 </div>
							<span class="fa fa-check"></span>  
					  </div>
					</div> 					
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级2</div>
									 <?php  echo tpl_form_field_image('custom_icon2-new[]')?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title2-new[]" placeholder="请输入等级文字描述"></textarea></div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级3</div>
									 <?php  echo tpl_form_field_image('custom_icon3-new[]')?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title3-new[]" placeholder="请输入等级文字描述"></textarea></div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>    
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级4</div>
									 <?php  echo tpl_form_field_image('custom_icon4-new[]')?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title4-new[]" placeholder="请输入等级文字描述"></textarea></div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>
					<div class="item item-style">
					  <div class="title">
							 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级5</div>
									 <?php  echo tpl_form_field_image('custom_icon5-new[]')?>
							 <div style="overflow:hidden; height:48px;margin-top:2px;">
							   <textarea style="width:178px;" name="custom_title5-new[]" placeholder="请输入等级文字描述"></textarea></div>
							<span class="fa fa-check"></span>  
					  </div>
					</div>
					<div class="col-sm-1" style="margin-top:5px">
						<a href="javascript:;" class="custom-url-del"><i class="fa fa-times-circle"></i> </a>
					</div>				
			    </div>
			<?php  } ?>
			</div>
		</div>
	</div>	
	<div class="panel panel-default">  
		<div class="clearfix template"> 
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
				<div class="col-sm-9 col-xs-12">
					<a href="javascript:;" id="custom-url-add"><i class="fa fa-plus-circle"></i> 添加规则</a>
					<span class="help-block">该链接将在门店详情页面显示</span>
				</div>
			</div>	
		</div>	
	</div>
	<div class="form-group col-sm-12">
		<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
		<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
	</div>
</form>	
<script>
		$('#custom-url-add').click(function(){
			var html =  '<div class="panel-body">'+
						'	<input type="hidden" name="new[]" value="2222" />'+
						'	<div class="item item-style">规则'+
						'		<div class="input-group">'+
						'			<span class="input-group-addon">标题</span>'+
						'			<input type="text" class="form-control" name="custom_title-new[]" value="">'+
						'		</div>'+
						'		<div class="input-group">'+
						'			<span class="input-group-addon">排序</span>'+
						'			<input type="text" class="form-control" name="custom_ssort-new[]" value="">'+
						'		</div>'+						
						'	</div>'+
						'	<div class="item item-style">'+
						'		<div class="title">'+
						'			 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级1</div>'+	 
						'				<div class="input-group ">'+
						'					<input type="text" name="custom_icon1-new[]" value="" class="form-control" autocomplete="off">'+
						'					<span class="input-group-btn">'+
						'						<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>'+
						'					</span>'+
						'				</div>'+
						'				<div class="input-group " style="margin-top:.5em;">'+
						'					<img src="./resource/images/nopic.jpg" ; this.title="图片未找到" class="img-responsive img-thumbnail"  width="150" />'+
						'					<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>'+
						'				</div>'+
						'				<div style="overflow:hidden; height:48px;margin-top:2px;">'+
						'					<textarea style="width:178px;" name="custom_title1-new[]" placeholder="请输入等级文字描述"></textarea>'+
						'				</div>'+
						'			<span class="fa fa-check"></span>'+
						'		</div>'+
						'	</div>'+						
						'	<div class="item item-style">'+
						'		<div class="title">'+
						'			 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级2</div>'+	 
						'				<div class="input-group ">'+
						'					<input type="text" name="custom_icon2-new[]" value="" class="form-control" autocomplete="off">'+
						'					<span class="input-group-btn">'+
						'						<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>'+
						'					</span>'+
						'				</div>'+
						'				<div class="input-group " style="margin-top:.5em;">'+
						'					<img src="./resource/images/nopic.jpg" ; this.title="图片未找到" class="img-responsive img-thumbnail"  width="150" />'+
						'					<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>'+
						'				</div>'+
						'				<div style="overflow:hidden; height:48px;margin-top:2px;">'+
						'					<textarea style="width:178px;" name="custom_title2-new[]" placeholder="请输入等级文字描述"></textarea>'+
						'				</div>'+
						'			<span class="fa fa-check"></span>'+
						'		</div>'+
						'	</div>'+
						'	<div class="item item-style">'+
						'		<div class="title">'+
						'			 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级3</div>'+	 
						'				<div class="input-group ">'+
						'					<input type="text" name="custom_icon3-new[]" value="" class="form-control" autocomplete="off">'+
						'					<span class="input-group-btn">'+
						'						<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>'+
						'					</span>'+
						'				</div>'+
						'				<div class="input-group " style="margin-top:.5em;">'+
						'					<img src="./resource/images/nopic.jpg" ; this.title="图片未找到" class="img-responsive img-thumbnail"  width="150" />'+
						'					<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>'+
						'				</div>'+
						'				<div style="overflow:hidden; height:48px;margin-top:2px;">'+
						'					<textarea style="width:178px;" name="custom_title3-new[]" placeholder="请输入等级文字描述"></textarea>'+
						'				</div>'+
						'			<span class="fa fa-check"></span>'+
						'		</div>'+
						'	</div>'+
						'	<div class="item item-style">'+
						'		<div class="title">'+
						'			 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级4</div>'+	 
						'				<div class="input-group ">'+
						'					<input type="text" name="custom_icon4-new[]" value="" class="form-control" autocomplete="off">'+
						'					<span class="input-group-btn">'+
						'						<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>'+
						'					</span>'+
						'				</div>'+
						'				<div class="input-group " style="margin-top:.5em;">'+
						'					<img src="./resource/images/nopic.jpg" ; this.title="图片未找到" class="img-responsive img-thumbnail"  width="150" />'+
						'					<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>'+
						'				</div>'+
						'				<div style="overflow:hidden; height:48px;margin-top:2px;">'+
						'					<textarea style="width:178px;" name="custom_title4-new[]" placeholder="请输入等级文字描述"></textarea>'+
						'				</div>'+
						'			<span class="fa fa-check"></span>'+
						'		</div>'+
						'	</div>'+
						'	<div class="item item-style">'+
						'		<div class="title">'+
						'			 <div style="overflow:hidden; height:28px;text-align:center;color:red;font-size:18px;">等级5</div>'+	 
						'				<div class="input-group ">'+
						'					<input type="text" name="custom_icon5-new[]" value="" class="form-control" autocomplete="off">'+
						'					<span class="input-group-btn">'+
						'						<button class="btn btn-default" type="button" onclick="showImageDialog(this);">选择图片</button>'+
						'					</span>'+
						'				</div>'+
						'				<div class="input-group " style="margin-top:.5em;">'+
						'					<img src="./resource/images/nopic.jpg" ; this.title="图片未找到" class="img-responsive img-thumbnail"  width="150" />'+
						'					<em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage(this)">×</em>'+
						'				</div>'+
						'				<div style="overflow:hidden; height:48px;margin-top:2px;">'+
						'					<textarea style="width:178px;" name="custom_title5-new[]" placeholder="请输入等级文字描述"></textarea>'+
						'				</div>'+
						'			<span class="fa fa-check"></span>'+
						'		</div>'+
						'	</div>'+
						'	<div class="col-sm-1" style="margin-top:5px">'+
						'   	<a href="javascript:;" class="custom-url-del"><i class="fa fa-times-circle"></i></a>'+
						'	</div>'+					
						'</div>';
					;
					
			//if($('#custom-url .items').size() < 2) {
			//	util.message('你至少一项评价规则', '', 'error');
			//	return false;
			//}
			$('#custom-url').append(html);
		});
		$(document).on('click', '.remind-reply-del, .comment-reply-del, .times-del, .custom-url-del', function(){
			$(this).parent().parent().remove();
			return false;
		});
		function del(id) {
			var id = id;
			var truthBeTold = window.confirm('确认要删除已保存的评价规则吗 ?'); 
			var url = "<?php  echo $this->createWebUrl('shouceset',array('op'=>'delitemiconset'))?>";
			var submitData = {
					id:id,
					schoolid:"<?php  echo $schoolid;?>",
			};
			if (truthBeTold) {
				$.post(url, submitData, function(data) {
					if (data.result) {
						util.message('删除成功', '', 'success');
						location.reload();
					}
				},'json');
			}
		}		
</script>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>