<?php defined('IN_IA') or exit('Access Denied');?><!--最大ID 2003002-->
	<!--suppress ALL -->
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">			
			<div class="modal-header" style="color: black;">					
				<h4 class="modal-title" id="ModalTitle">弹框</h4>	
			</div>
			<div class="modal-body">
				 <div class="form-group">
					<div class="col-sm-9 col-xs-6"  style="width:100% !important"> 
						<div class="input-group text-info" id="stulist">
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">班级通知&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1001)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1001)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1001" data_id="00101" type="checkbox" name="qxarr"  value="2000101" style="float: none;" <?php  if(in_array(2000101,$qx)) { ?> checked="checked" <?php  } ?>>查看班级通知</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1001" data_id="00101" type="checkbox" name="qxarr"  value="2000102" style="float: none;" <?php  if(in_array(2000102,$qx)) { ?> checked="checked" <?php  } ?>>发布班级通知</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1001" data_id="00101" type="checkbox" name="qxarr"  value="2000103" style="float: none;" <?php  if(in_array(2000103,$qx)) { ?> checked="checked" <?php  } ?>>删除班级通知</label>

							<?php  if(is_showpf()) { ?>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1001" data_id="00101" type="checkbox" name="qxarr"  value="2000104" style="float: none;" <?php  if(in_array(2000104,$qx)) { ?> checked="checked" <?php  } ?>>查看调查统计结果</label>
							<?php  } ?>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">校园群发&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1002)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1002)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1002" data_id="00201" type="checkbox" name="qxarr"  value="2000201" style="float: none;" <?php  if(in_array(2000201,$qx)) { ?> checked="checked" <?php  } ?>>查看校园群发</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1002" data_id="00201" type="checkbox" name="qxarr"  value="2000202" style="float: none;" <?php  if(in_array(2000202,$qx)) { ?> checked="checked" <?php  } ?>>发布校园群发</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1002" data_id="00201" type="checkbox" name="qxarr"  value="2000203" style="float: none;" <?php  if(in_array(2000203,$qx)) { ?> checked="checked" <?php  } ?>>删除校园群发</label>
							
							<?php  if(is_showpf()) { ?>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1002" data_id="00201" type="checkbox" name="qxarr"  value="2000204" style="float: none;" <?php  if(in_array(2000204,$qx)) { ?> checked="checked" <?php  } ?>>查看调查统计结果</label>
							<?php  } ?>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">作业管理&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1003)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1003)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1003" data_id="00301" type="checkbox" name="qxarr"  value="2000301" style="float: none;" <?php  if(in_array(2000301,$qx)) { ?> checked="checked" <?php  } ?>>查看作业</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1003" data_id="00301" type="checkbox" name="qxarr"  value="2000302" style="float: none;" <?php  if(in_array(2000302,$qx)) { ?> checked="checked" <?php  } ?>>发布作业</label>
							<?php  if(is_showgkk()) { ?>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1003" data_id="00301" type="checkbox" name="qxarr"  value="2000304" style="float: none;" <?php  if(in_array(2000304,$qx)) { ?> checked="checked" <?php  } ?>>选择作业发布老师</label>
							<?php  } ?>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1003" data_id="00301" type="checkbox" name="qxarr"  value="2000303" style="float: none;" <?php  if(in_array(2000303,$qx)) { ?> checked="checked" <?php  } ?>>删除作业</label>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">学生请假&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1004)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1004)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1004" data_id="00401" type="checkbox" name="qxarr"  value="2000401" style="float: none;" <?php  if(in_array(2000401,$qx)) { ?> checked="checked" <?php  } ?>>查看学生请假</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1004" data_id="00401" type="checkbox" name="qxarr"  value="2000402" style="float: none;" <?php  if(in_array(2000402,$qx)) { ?> checked="checked" <?php  } ?>>处理学生请假</label>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">学生管理&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1005)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1005)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1005" data_id="00501" type="checkbox" name="qxarr"  value="2000501" style="float: none;" <?php  if(in_array(2000501,$qx)) { ?> checked="checked" <?php  } ?>>查看学生管理</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1005" data_id="00501" type="checkbox" name="qxarr"  value="2000502" style="float: none;" <?php  if(in_array(2000502,$qx)) { ?> checked="checked" <?php  } ?>>新增/修改学生信息</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1005" data_id="00501" type="checkbox" name="qxarr"  value="2000503" style="float: none;" <?php  if(in_array(2000503,$qx)) { ?> checked="checked" <?php  } ?>>删除学生</label>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">学生考勤&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1006)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1006)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1006" data_id="00601" type="checkbox" name="qxarr"  value="2000601" style="float: none;" <?php  if(in_array(2000601,$qx)) { ?> checked="checked" <?php  } ?>>查看学生考勤统计</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1006" data_id="00601" type="checkbox" name="qxarr"  value="2000602" style="float: none;" <?php  if(in_array(2000602,$qx)) { ?> checked="checked" <?php  } ?>>补签学生</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1006" data_id="00601" type="checkbox" name="qxarr"  value="2000603" style="float: none;" <?php  if(in_array(2000603,$qx)) { ?> checked="checked" <?php  } ?>>学生签到确认</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1006" data_id="00601" type="checkbox" name="qxarr"  value="2000604" style="float: none;" <?php  if(in_array(2000604,$qx)) { ?> checked="checked" <?php  } ?>>查看单个学生考勤</label>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">报名列表&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1007)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1007)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1007" data_id="00701" type="checkbox" name="qxarr"  value="2000701" style="float: none;" <?php  if(in_array(2000701,$qx)) { ?> checked="checked" <?php  } ?>>查看报名列表</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1007" data_id="00701" type="checkbox" name="qxarr"  value="2000702" style="float: none;" <?php  if(in_array(2000702,$qx)) { ?> checked="checked" <?php  } ?>>处理报名</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1007" data_id="00701" type="checkbox" name="qxarr"  value="2000703" style="float: none;" <?php  if(in_array(2000703,$qx)) { ?> checked="checked" <?php  } ?>>修改报名信息</label>
							<?php  if(($school['is_rest'] == 1 && $school['shoucename'])) { ?>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;"><?php  echo $school['shoucename'];?>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1008)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1008)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1008" data_id="00801" type="checkbox" name="qxarr"  value="2000801" style="float: none;" <?php  if(in_array(2000801,$qx)) { ?> checked="checked" <?php  } ?>><?php  echo $school['shoucename'];?></label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1008" data_id="00801" type="checkbox" name="qxarr"  value="2000802" style="float: none;" <?php  if(in_array(2000802,$qx)) { ?> checked="checked" <?php  } ?>>创建<?php  echo $school['shoucename'];?></label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1008" data_id="00801" type="checkbox" name="qxarr"  value="2000803" style="float: none;" <?php  if(in_array(2000803,$qx)) { ?> checked="checked" <?php  } ?>>管理评语库</label>
							<?php  } ?>
							<?php  if($school['is_zjh'] == 1) { ?>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">周计划&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1009)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1009)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1009" data_id="00901" type="checkbox" name="qxarr"  value="2000901" style="float: none;" <?php  if(in_array(2000901,$qx)) { ?> checked="checked" <?php  } ?>>查看学生周计划</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1009" data_id="00901" type="checkbox" name="qxarr"  value="2000902" style="float: none;" <?php  if(in_array(2000902,$qx)) { ?> checked="checked" <?php  } ?>>编辑学生周计划</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1009" data_id="00901" type="checkbox" name="qxarr"  value="2000903" style="float: none;" <?php  if(in_array(2000903,$qx)) { ?> checked="checked" <?php  } ?>>删除学生周计划</label><br/>
							<?php  if(is_showgkk()) { ?>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1009" data_id="00911" type="checkbox" name="qxarr"  value="2000911" style="float: none;" <?php  if(in_array(2000911,$qx)) { ?> checked="checked" <?php  } ?>>查看教师周计划</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1009" data_id="00911" type="checkbox" name="qxarr"  value="2000912" style="float: none;" <?php  if(in_array(2000912,$qx)) { ?> checked="checked" <?php  } ?>>编辑教师周计划</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1009" data_id="00911" type="checkbox" name="qxarr"  value="2000913" style="float: none;" <?php  if(in_array(2000913,$qx)) { ?> checked="checked" <?php  } ?>>删除教师周计划</label>
							<?php  } ?>
							<?php  } ?>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">职工请假&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1010)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1010)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1010" data_id="01001" type="checkbox" name="qxarr"  value="2001001" style="float: none;" <?php  if(in_array(2001001,$qx)) { ?> checked="checked" <?php  } ?>>查看职工请假</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1010" data_id="01001" type="checkbox" name="qxarr"  value="2001002" style="float: none;" <?php  if(in_array(2001002,$qx)) { ?> checked="checked" <?php  } ?>>处理职工请假</label>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">职工考勤&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1011)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1011)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1011" data_id="01101" type="checkbox" name="qxarr"  value="2001101" style="float: none;" <?php  if(in_array(2001101,$qx)) { ?> checked="checked" <?php  } ?>>查看职工考勤</label>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">任务&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1012)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1012)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1012" data_id="01201" type="checkbox" name="qxarr"  value="2001201" style="float: none;" <?php  if(in_array(2001201,$qx)) { ?> checked="checked" <?php  } ?>>查看任务</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1012" data_id="01201" type="checkbox" name="qxarr"  value="2001202" style="float: none;" <?php  if(in_array(2001202,$qx)) { ?> checked="checked" <?php  } ?>>发布任务</label>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">课程预约&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1013)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1013)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1013" data_id="01301" type="checkbox" name="qxarr"  value="2001301" style="float: none;" <?php  if(in_array(2001301,$qx)) { ?> checked="checked" <?php  } ?>>查看课程预约</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1013" data_id="01301" type="checkbox" name="qxarr"  value="2001302" style="float: none;" <?php  if(in_array(2001302,$qx)) { ?> checked="checked" <?php  } ?>>跟进课程预约</label>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">我的课程&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1014)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1014)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1014" data_id="01401" type="checkbox" name="qxarr"  value="2001401" style="float: none;" <?php  if(in_array(2001401,$qx)) { ?> checked="checked" <?php  } ?>>查看我的课程</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1014" data_id="01401" type="checkbox" name="qxarr"  value="2001402" style="float: none;" <?php  if(in_array(2001402,$qx)) { ?> checked="checked" <?php  } ?>>提醒学生评价</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1014" data_id="01401" type="checkbox" name="qxarr"  value="2001403" style="float: none;" <?php  if(in_array(2001403,$qx)) { ?> checked="checked" <?php  } ?>>查看学生管理</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1014" data_id="01411" type="checkbox" name="qxarr"  value="2001404" style="float: none;" <?php  if(in_array(2001404,$qx)) { ?> checked="checked" <?php  } ?>>查看学生签到情况</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1014" data_id="01411" type="checkbox" name="qxarr"  value="2001405" style="float: none;" <?php  if(in_array(2001405,$qx)) { ?> checked="checked" <?php  } ?>>确认学生签到</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1014" data_id="01411" type="checkbox" name="qxarr"  value="2001406" style="float: none;" <?php  if(in_array(2001406,$qx)) { ?> checked="checked" <?php  } ?>>代学生请假</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1014" data_id="01411" type="checkbox" name="qxarr"  value="2001407" style="float: none;" <?php  if(in_array(2001407,$qx)) { ?> checked="checked" <?php  } ?>>代签学生</label>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">授课情况（年级主任或管理员）&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1015)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1015)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1015" data_id="01501" type="checkbox" name="qxarr"  value="2001501" style="float: none;" <?php  if(in_array(2001501,$qx)) { ?> checked="checked" <?php  } ?>>查看教师授课情况</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1015" data_id="01501" type="checkbox" name="qxarr"  value="2001502" style="float: none;" <?php  if(in_array(2001502,$qx)) { ?> checked="checked" <?php  } ?>>确认教师授课签到</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1015" data_id="01501" type="checkbox" name="qxarr"  value="2001503" style="float: none;" <?php  if(in_array(2001503,$qx)) { ?> checked="checked" <?php  } ?>>代教师签到</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1015" data_id="01501" type="checkbox" name="qxarr"  value="2001504" style="float: none;" <?php  if(in_array(2001504,$qx)) { ?> checked="checked" <?php  } ?>>查看学生管理</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1015" data_id="01511" type="checkbox" name="qxarr"  value="2001505" style="float: none;" <?php  if(in_array(2001505,$qx)) { ?> checked="checked" <?php  } ?>>查看学生签到情况</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1015" data_id="01511" type="checkbox" name="qxarr"  value="2001506" style="float: none;" <?php  if(in_array(2001506,$qx)) { ?> checked="checked" <?php  } ?>>确认学生签到</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1015" data_id="01511" type="checkbox" name="qxarr"  value="2001507" style="float: none;" <?php  if(in_array(2001507,$qx)) { ?> checked="checked" <?php  } ?>>代学生请假</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1015" data_id="01511" type="checkbox" name="qxarr"  value="2001508" style="float: none;" <?php  if(in_array(2001508,$qx)) { ?> checked="checked" <?php  } ?>>代签学生</label> 
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">班级相册&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1016)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1016)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1016" data_id="01601" type="checkbox" name="qxarr"  value="2001601" style="float: none;" <?php  if(in_array(2001601,$qx)) { ?> checked="checked" <?php  } ?>>查看班级相册</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1016" data_id="01601" type="checkbox" name="qxarr"  value="2001602" style="float: none;" <?php  if(in_array(2001602,$qx)) { ?> checked="checked" <?php  } ?>>上传班级相册</label>
							<?php  if($mallsetinfo['isShow'] == 1) { ?>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">商城</p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1017" data_id="01701" type="checkbox" name="qxarr"  value="2001701" style="float: none;" <?php  if(in_array(2001701,$qx)) { ?> checked="checked" <?php  } ?>>查看商城</label>
							<?php  } ?>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">校长信箱&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(1018)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(1018)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="1018" data_id="01801" type="checkbox" name="qxarr"  value="2001801" style="float: none;" <?php  if(in_array(2001801,$qx)) { ?> checked="checked" <?php  } ?>>查看校长信箱</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="1018" data_id="01801" type="checkbox" name="qxarr"  value="2001802" style="float: none;" <?php  if(in_array(2001802,$qx)) { ?> checked="checked" <?php  } ?>>回复校长信箱</label>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">一键放学</p>
                            <label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" data_id="01901" type="checkbox" name="qxarr"  value="2001901" style="float: none;" <?php  if(in_array(2001901,$qx)) { ?> checked="checked" <?php  } ?>>一键放学</label>
                            <?php  if(is_showpf()) { ?>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">我的评分</p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" data_id="02001" type="checkbox" name="qxarr"  value="2002001" style="float: none;" <?php  if(in_array(2002001,$qx)) { ?> checked="checked" <?php  } ?>>查看我的评分</label>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">评分情况</p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" data_id="02101" type="checkbox" name="qxarr"  value="2002101" style="float: none;" <?php  if(in_array(2002101,$qx)) { ?> checked="checked" <?php  } ?>>查看评分情况</label>
							
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">学生评分</p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" data_id="02201" type="checkbox" name="qxarr"  value="2002201" style="float: none;" <?php  if(in_array(2002201,$qx)) { ?> checked="checked" <?php  } ?>>查看学生评分情况</label>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">班级评分</p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" data_id="02201" type="checkbox" name="qxarr"  value="2002801" style="float: none;" <?php  if(in_array(2002801,$qx)) { ?> checked="checked" <?php  } ?>>查看班级评分情况</label>

							<?php  } ?>
							<?php  if(is_showap()) { ?>
								<?php  if($school['is_ap'] == 1) { ?>
								<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">宿舍考勤</p>
								<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" data_id="02301" type="checkbox" name="qxarr"  value="2002301" style="float: none;" <?php  if(in_array(2002301,$qx)) { ?> checked="checked" <?php  } ?>>查看宿舍考勤</label>
								<?php  } ?>
							<?php  } ?>
							<?php  if(is_showpf()) { ?>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">成绩考察</p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" data_id="02401" type="checkbox" name="qxarr"  value="2002401" style="float: none;" <?php  if(in_array(2002401,$qx)) { ?> checked="checked" <?php  } ?>>查看成绩考察</label>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">成绩详情</p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" data_id="02402" type="checkbox" name="qxarr"  value="2002402" style="float: none;" <?php  if(in_array(2002402,$qx)) { ?> checked="checked" <?php  } ?>>查看所有班级成绩</label>
							<?php  } ?>
							<?php  if(!$_W['schooltype']) { ?>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">监控列表</p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" data_id="02501" type="checkbox" name="qxarr"  value="2002501" style="float: none;" <?php  if(in_array(2002501,$qx)) { ?> checked="checked" <?php  } ?>>查看监控列表</label> 
							<?php  } ?>
							<?php  if(is_showpf()) { ?>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">上传场景&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(2026)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(2026)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="pre" all_id="2026" data_id="02601" type="checkbox" name="qxarr"  value="2002601" style="float: none;" <?php  if(in_array(2002601,$qx)) { ?> checked="checked" <?php  } ?>>查看上传场景</label> 
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input class="prd" all_id="2026" data_id="02601" type="checkbox" name="qxarr"  value="2002602" style="float: none;" <?php  if(in_array(2002602,$qx)) { ?> checked="checked" <?php  } ?>>新增上传场景</label>
							<?php  } ?>
							<?php  if(is_showgkk()) { ?>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">教师课表&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(2027)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(2027)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input all_id="2027" class="pre" data_id="02701" type="checkbox" name="qxarr"  value="2002701" style="float: none;" <?php  if(in_array(2002701,$qx)) { ?> checked="checked" <?php  } ?>>查看本人课表</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input all_id="2027" class="prd" data_id="02701" type="checkbox" name="qxarr"  value="2002702" style="float: none;" <?php  if(in_array(2002702,$qx)) { ?> checked="checked" <?php  } ?>>查看所有教师课表</label>
							<?php  } ?>
							<?php  if(assets()) { ?>
							<?php  if(CheckSchoolSet($schoolid,'is_csyd')) { ?>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">场室预定&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(2029)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(2029)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input all_id="2029" class="pre" data_id="02901" type="checkbox" name="qxarr"  value="2002901" style="float: none;" <?php  if(in_array(2002901,$qx)) { ?> checked="checked" <?php  } ?>>管理场室预定</label>
							<?php  } ?>
							<?php  if(CheckSchoolSet($schoolid,'is_gw')) { ?>
							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">公物管理&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="checkAll(2030)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="UncheckAll(2030)">全不选</a></p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input all_id="2030" class="pre" data_id="03001" type="checkbox" name="qxarr"  value="2003001" style="float: none;" <?php  if(in_array(2003001,$qx)) { ?> checked="checked" <?php  } ?>>管理公物领用申请</label>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input all_id="2030" class="pre" data_id="03002" type="checkbox" name="qxarr"  value="2003002" style="float: none;" <?php  if(in_array(2003002,$qx)) { ?> checked="checked" <?php  } ?>>管理公物维修申请</label>
							<?php  } ?>
							<?php  } ?>


							<p style="color: black;font-weight: bold;margin-top: 10px;margin-bottom: 5px;">校车定位&nbsp;&nbsp;&nbsp;&nbsp;</p>
							<label  class="checkbox-inline" style="width:140px;margin-left: 10px"><input all_id="2031" class="pre" data_id="03101" type="checkbox" name="qxarr"  value="2003101" style="float: none;" <?php  if(in_array(2003101,$qx)) { ?> checked="checked" <?php  } ?>>查看校车定位</label>

						</div>
					</div>
				</div>			
			</div>				
			<div class="modal-footer">	
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				<button type="button" class="btn btn-primary" id="submit1" style="display: none;" onclick="setdown_qd(<?php  echo $fzid;?>)">确认修改</button>
				<button type="button" class="btn btn-primary" id="submit2" style="display: none;" onclick="setdown_ht(<?php  echo $fzid;?>)">确认修改</button>
			</div>			
		</div>	
	</div>
	<script type="text/javascript">
	function checkAll(all_id){
		$("input[all_id="+ all_id +"]").prop("checked",true);
	}
	function UncheckAll(all_id){
		$("input[all_id="+ all_id +"]").prop("checked",false);
	}
	$(document).ready(function() {
		$(".prd").change(function(){
			if($(this).prop('checked')){
				var data_id = $(this).attr("data_id");
				$(".pre[data_id="+data_id+"]").prop("checked",true);
				if(data_id == "01411"){
					$(".pre[data_id=01401]").prop("checked",true);
					$(".pre[data_id=01411]").prop("checked",true);
				}
				if(data_id == "01511"){
					$(".pre[data_id=01501]").prop("checked",true);
					$(".pre[data_id=01511]").prop("checked",true);
				}
			 
			}
		})

		$(".pre").change(function(){
			let data_id;
            if ($(this).prop('checked') == false){
                data_id = $(this).attr("data_id");
                $(".prd[data_id="+data_id+"]").prop("checked",false);
				if(data_id == "01401"){
					$(".pre[data_id=01411]").prop("checked",false);
					$(".prd[data_id=01411]").prop("checked",false);
				}
				if(data_id == "01501"){
					$(".pre[data_id=01511]").prop("checked",false);
					$(".prd[data_id=01511]").prop("checked",false);
				}
			 
			}else if($(this).prop('checked') == true){
                let pre_id = $(this).attr("pre_id");
                if(pre_id != null){
					//alert(pre_id);
					$(".pre[first_pre=1]").prop("checked",true);
				}
				data_id = $(this).attr("data_id");
				if(data_id == "01411"){
					$(".pre[data_id=01401]").prop("checked",true);
				} 
				if(data_id == "01511"){
					$(".pre[data_id=01501]").prop("checked",true);
				} 
			}
		})
	});
	function setdown_qd(fzid){
        let schoolid = "<?php  echo $_GPC['schoolid'];?>";
        let str = [];
        $("input:checkbox[name='qxarr']:checked").each(function(i) {
            str[i] =  $(this).val() ;
		});	
		$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'set_fzqx','type'=>2))?>", {'schoolid': schoolid,'fzid':fzid,'sidarr':str}, function(data) {
			console.log(data);
			data = JSON.parse(data);
			console.log(data);
			alert(data.msg);
	 		location.reload();
		});
	}

	function setdown_ht(fzid){
        let schoolid = "<?php  echo $_GPC['schoolid'];?>";
        let str = [];
        $("input:checkbox[name='qxarr']:checked").each(function(i) {
            str[i] =  $(this).val() ;
		});	
		$.post("<?php  echo $this->createWebUrl('indexajax',array('op'=>'set_fzqx','type'=>1))?>", {'schoolid': schoolid,'fzid':fzid,'sidarr':str}, function(data) {
			console.log(data);
			data = JSON.parse(data);
			console.log(data);
			alert(data.msg);
	 		location.reload();
		});
	}		

	</script>