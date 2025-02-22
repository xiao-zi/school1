<?php defined('IN_IA') or exit('Access Denied');?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php  echo $school['title'];?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/mNewMsg.css?v=4.8" />	
<link type="text/css" rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/greenStyle.css?v=4.80120" />
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/jquery-1.11.3.min.js?v=4.8"></script>
<script type="text/javascript" src="<?php echo OSSURL;?>public/mobile/js/PromptBoxUtil.js?v=4.81022"></script>
<?php  include $this->template('port');?>
</head>
<body>
<div class="all">
	<form id ="myinfo_form" action="javascript:sendSubmitBtn();">
		<div class="msgBox">
			<div class="timeBox">
				<span class="l">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</span>
				<span class="r"><input name="StuName_card" class="start" type="text" value="<?php  echo $student['s_name'];?>"  required="required" oninvalid="javascript:jTips('姓名不能为空！');" oninput="setCustomValidity('');"></span>
			</div>
			<div class="timeBox">
				<span class="l">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</span>
				<span class="c" >                    
					<select name="Sex_card" id="Sex_card"  class="start" style="border: 1px solid #e1e1e1;text-align:center;
text-align-last: center">
					     <option value="0" <?php  if($student['sex'] == 0) { ?>selected<?php  } ?>>女</option>
				         <option value="1" <?php  if($student['sex'] == 1) { ?>selected<?php  } ?>>男</option>
				     </select>
			    </span>	
			</div>
			<div class="timeBox" style="border-bottom:unset">
				<span class="l"  style="width:200px">基础信息 <a style="color:#25bebf" onclick="$('#main_info').slideToggle()">点击展开/缩入</a></span>
			</div>
			<div id="main_info" style="display:none">
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
					<span class="l"style="padding-top:10px;width:100px">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号：</span>
					<span class="r">
						<input class="start" type="text" placeholder="学号" name="NumberId_card" id="NumberId_card" value="<?php  echo $student['numberid'];?>" />
					</span>
				</div>
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
					<span class="l"style="padding-top:10px;width:100px">身&nbsp;&nbsp;份&nbsp;证：</span>
					<span class="r">
						<input class="start" type="text" placeholder="身份证号码" name="IDcard_card" id="IDcard_card" value="<?php  echo $cardinfo['IDcard'];?>" />
					</span>
				</div>
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
					<span class="l"style="padding-top:10px;width:100px">民&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;族：</span>
					<span class="r">
						<input class="start" type="text" placeholder="民族" name="Nation_card" id="Nation_card" value="<?php  echo $cardinfo['Nation'];?>" />
					</span>
				</div>
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
					<span class="l" style="padding-top:10px;width:100px">出生日期：</span>
					<span class="r">
						<input class="start" type="date" placeholder="出生日期" name="Birthdate_card" id="Birthdate_card" value="<?php  echo date('Y-m-d',$student['birthdate'])?>" />
					</span>
				</div>
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
					<span class="l" style="padding-top:10px;width:100px">入学日期：</span>
					<span class="r">
						<input class="start" type="date" placeholder="出生日期" name="Seffectivetime_card" id="Seffectivetime_card" value="<?php  echo date('Y-m-d',$student['seffectivetime'])?>" />
					</span>
				</div>
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
					<span class="l" style="padding-top:10px;">家庭住址：</span>
					<span class="r">
						<input class="start" type="text" placeholder="家庭住址" name="HomeAddress_card" id="HomeAddress_card" value="<?php  echo $student['area_addr'];?>"/>
					</span>
				</div>
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
					<span class="l" style="padding-top:10px;">现&nbsp;&nbsp;住&nbsp;址：</span>
					<span class="r">
						<input class="start" type="text" placeholder="现住址" name="NowAddress_card" id="NowAddress_card" value="<?php  echo $cardinfo['NowAddress'];?>"/>
					</span>
				</div>
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
					<span class="l" style="padding-top:10px;">留守儿童：</span>
					<span class="c" >                    
						<select name="HomeChild_card" id="HomeChild_card"  class="start" style="border: 1px solid #e1e1e1">
							 <option value="0" <?php  if($cardinfo['HomeChild'] == 0) { ?>selected<?php  } ?>>否</option>
							 <option value="1" <?php  if($cardinfo['HomeChild'] == 1) { ?>selected<?php  } ?>>是</option>
						 </select>
					</span>	
				</div>
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
					<span class="l" style="padding-top:10px;">单亲家庭：</span>
					<span class="c" >                    
						<select name="SingleFamily_card" id="SingleFamily_card"  class="start" style="border: 1px solid #e1e1e1">
							 <option value="0" <?php  if($cardinfo['SingleFamily'] == 0) { ?>selected<?php  } ?>>否</option>
							 <option value="1" <?php  if($cardinfo['SingleFamily'] == 1) { ?>selected<?php  } ?>>是</option>
						 </select>
					</span>	
				</div>
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
					<span class="l" style="padding-top:10px;">是否托管：</span>
					<span class="c" >                    
						<select name="IsKeep_card" id="IsKeep_card"  class="start" style="border: 1px solid #e1e1e1">
							 <option value="0" <?php  if($cardinfo['IsKeep'] == 0) { ?>selected<?php  } ?>>否</option>
							 <option value="1" <?php  if($cardinfo['IsKeep'] == 1) { ?>selected<?php  } ?>>是</option>
						 </select>
					</span>	
				</div>
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
					<span class="l" style="padding-top:10px;">托管类型：</span>
					<span class="c" >                    
						<select name="DayOrWeek_card" id="DayOrWeek_card"  class="start" style="border: 1px solid #e1e1e1">
							<option value="0" <?php  if($cardinfo['DayOrWeek'] == 0) { ?> selected="selected"<?php  } ?>>不托管</option>
							<option value="1" <?php  if($cardinfo['DayOrWeek'] == 1) { ?> selected="selected"<?php  } ?>>午托</option>
							<option value="2" <?php  if($cardinfo['DayOrWeek'] == 2) { ?> selected="selected"<?php  } ?>>周托</option>
						 </select>
					</span>	
				</div>
			</div>
			
			<div class="timeBox" style="border-bottom:unset">
				<span class="l"  style="width:250px">家庭成员情况 <a style="color:#25bebf" onclick="$('#home_info').slideToggle()">点击展开/缩入</a></span>
			</div>
			<div id="home_info" style="display:none">

				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;">
					<span class="l"  style="width:250px">&nbsp;父亲 <a style="color:#25bebf" onclick="$('#father').slideToggle()">点击展开/缩入</a></span>
				</div>
				<div id="father" style="display:none">
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历：</span>
						<span class="r">
							<input class="start" type="text" placeholder="父亲学历" name="Fxueli_card" id="Fxueli_card" value="<?php  echo $cardinfo['Fxueli'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业：</span>
						<span class="r">
							<input class="start" type="text" placeholder="父亲职业" name="Fwork_card" id="Fwork_card" value="<?php  echo $cardinfo['Fwork'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">爱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;好：</span>
						<span class="r">
							<input class="start" type="text" placeholder="父亲爱好" name="Fhobby_card" id="Fhobby_card" value="<?php  echo $cardinfo['Fhobby'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">工作单位：</span>
						<span class="r">
							<input class="start" type="text" placeholder="父亲工作单位" name="FWorkPlace_card" id="FWorkPlace_card" value="<?php  echo $cardinfo['FWorkPlace'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px; width: 100px;">是否监护人：</span>
						<span class="c" >
							<select name="is_f_main" id="is_f_main"  class="start" style="border: 1px solid #e1e1e1;margin-left: 25px;text-align:center;
		text-align-last: center">
								<option value="0"  <?php  if(!in_array('1',$MainWatcharr)) { ?> selected <?php  } ?>>否</option>
								<option value="1"  <?php  if(in_array('1',$MainWatcharr)) { ?>  selected <?php  } ?>>是</option>
							 </select>
						</span>
					</div>
				</div>
				
				
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;">
					<span class="l"  style="width:250px">&nbsp;母亲 <a style="color:#25bebf" onclick="$('#mother').slideToggle()">点击展开/缩入</a></span>
				</div>
				<div id="mother" style="display:none">
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历：</span>
						<span class="r">
							<input class="start" type="text" placeholder="母亲学历" name="Mxueli_card" id="Mxueli_card" value="<?php  echo $cardinfo['Mxueli'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业：</span>
						<span class="r">
							<input class="start" type="text" placeholder="母亲职业" name="Mwork_card" id="Mwork_card" value="<?php  echo $cardinfo['Mwork'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">爱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;好：</span>
						<span class="r">
							<input class="start" type="text" placeholder="母亲爱好" name="Mhobby_card" id="Mhobby_card" value="<?php  echo $cardinfo['Mhobby'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">工作单位：</span>
						<span class="r">
							<input class="start" type="text" placeholder="母亲工作单位" name="MWorkPlace_card" id="MWorkPlace_card" value="<?php  echo $cardinfo['MWorkPlace'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px; width: 100px;">是否监护人：</span>
						<span class="c" >
							<select name="is_m_main" id="is_m_main"  class="start" style="border: 1px solid #e1e1e1;margin-left: 25px;text-align:center;
		text-align-last: center">
								<option value="0"  <?php  if(!in_array('2',$MainWatcharr)) { ?> selected <?php  } ?>>否</option>
								<option value="1"  <?php  if(in_array('2',$MainWatcharr)) { ?>  selected <?php  } ?>>是</option>
							 </select>
						</span>
					</div>
				</div>
				
				
				
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;">
					<span class="l"  style="width:250px">&nbsp;爷爷 <a style="color:#25bebf" onclick="$('#Grandfather').slideToggle()">点击展开/缩入</a></span>
				</div>
				<div id="Grandfather" style="display:none">
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历：</span>
						<span class="r">
							<input class="start" type="text" placeholder="爷爷学历" name="GrandFxueli_card" id="GrandFxueli_card" value="<?php  echo $cardinfo['GrandFxueli'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业：</span>
						<span class="r">
							<input class="start" type="text" placeholder="爷爷职业" name="GrandFwork_card" id="GrandFwork_card" value="<?php  echo $cardinfo['GrandFwork'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">爱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;好：</span>
						<span class="r">
							<input class="start" type="text" placeholder="爷爷爱好" name="GrandFhobby_card" id="GrandFhobby_card" value="<?php  echo $cardinfo['GrandFhobby'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">工作单位：</span>
						<span class="r">
							<input class="start" type="text" placeholder="爷爷工作单位" name="GrandFWorkPlace_card" id="GrandFWorkPlace_card" value="<?php  echo $cardinfo['GrandFWorkPlace'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px; width: 100px;">是否监护人：</span>
						<span class="c" >
							<select name="is_gf_main" id="is_gf_main"  class="start" style="border: 1px solid #e1e1e1;margin-left: 25px;text-align:center;
		text-align-last: center">
								<option value="0"  <?php  if(!in_array('3',$MainWatcharr)) { ?> selected <?php  } ?>>否</option>
								<option value="1"  <?php  if(in_array('3',$MainWatcharr)) { ?>  selected <?php  } ?>>是</option>
							 </select>
						</span>
					</div>
				</div>
				
				
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;">
					<span class="l"  style="width:250px">&nbsp;奶奶 <a style="color:#25bebf" onclick="$('#Grandmother').slideToggle()">点击展开/缩入</a></span>
				</div>
				<div id="Grandmother" style="display:none">
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历：</span>
						<span class="r">
							<input class="start" type="text" placeholder="奶奶学历" name="GrandMxueli_card" id="GrandMxueli_card" value="<?php  echo $cardinfo['GrandMxueli'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业：</span>
						<span class="r">
							<input class="start" type="text" placeholder="奶奶职业" name="GrandMwork_card" id="GrandMwork_card" value="<?php  echo $cardinfo['GrandMwork'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">爱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;好：</span>
						<span class="r">
							<input class="start" type="text" placeholder="奶奶爱好" name="GrandMhobby_card" id="GrandMhobby_card" value="<?php  echo $cardinfo['GrandMhobby'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">工作单位：</span>
						<span class="r">
							<input class="start" type="text" placeholder="奶奶工作单位" name="GrandMWorkPlace_card" id="GrandMWorkPlace_card" value="<?php  echo $cardinfo['GrandMWorkPlace'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px; width: 100px;">是否监护人：</span>
						<span class="c" >
							<select name="is_gm_main" id="is_gm_main"  class="start" style="border: 1px solid #e1e1e1;margin-left: 25px;text-align:center;
		text-align-last: center">
								<option value="0"  <?php  if(!in_array('4',$MainWatcharr)) { ?> selected <?php  } ?>>否</option>
								<option value="1"  <?php  if(in_array('4',$MainWatcharr)) { ?>  selected <?php  } ?>>是</option>
							 </select>
						</span>
					</div>
				</div>
				
				
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;">
					<span class="l"  style="width:250px">&nbsp;外公 <a style="color:#25bebf" onclick="$('#WGrandfather').slideToggle()">点击展开/缩入</a></span>
				</div>
				<div id="WGrandfather" style="display:none">
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历：</span>
						<span class="r">
							<input class="start" type="text" placeholder="外公学历" name="WGrandFxueli_card" id="WGrandFxueli_card" value="<?php  echo $cardinfo['WGrandFxueli'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业：</span>
						<span class="r">
							<input class="start" type="text" placeholder="外公职业" name="WGrandFwork_card" id="WGrandFwork_card" value="<?php  echo $cardinfo['WGrandFwork'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">爱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;好：</span>
						<span class="r">
							<input class="start" type="text" placeholder="外公爱好" name="WGrandFhobby_card" id="WGrandFhobby_card" value="<?php  echo $cardinfo['WGrandFhobby'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">工作单位：</span>
						<span class="r">
							<input class="start" type="text" placeholder="外公工作单位" name="WGrandFWorkPlace_card" id="WGrandFWorkPlace_card" value="<?php  echo $cardinfo['WGrandFWorkPlace'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px; width: 100px;">是否监护人：</span>
						<span class="c" >
							<select name="is_wgf_main" id="is_wgf_main"  class="start" style="border: 1px solid #e1e1e1;margin-left: 25px;text-align:center;
		text-align-last: center">
								<option value="0"  <?php  if(!in_array('5',$MainWatcharr)) { ?> selected <?php  } ?>>否</option>
								<option value="1"  <?php  if(in_array('5',$MainWatcharr)) { ?>  selected <?php  } ?>>是</option>
							 </select>
						</span>
					</div>
				</div>
				
				
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;">
					<span class="l"  style="width:250px">&nbsp;外婆 <a style="color:#25bebf" onclick="$('#WGrandmother').slideToggle()">点击展开/缩入</a></span>
				</div>
				<div id="WGrandmother" style="display:none">
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历：</span>
						<span class="r">
							<input class="start" type="text" placeholder="外婆学历" name="WGrandMxueli_card" id="WGrandMxueli_card" value="<?php  echo $cardinfo['WGrandMxueli'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业：</span>
						<span class="r">
							<input class="start" type="text" placeholder="外婆职业" name="WGrandMwork_card" id="WGrandMwork_card" value="<?php  echo $cardinfo['WGrandMwork'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">爱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;好：</span>
						<span class="r">
							<input class="start" type="text" placeholder="外婆爱好" name="WGrandMhobby_card" id="WGrandMhobby_card" value="<?php  echo $cardinfo['WGrandMhobby'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">工作单位：</span>
						<span class="r">
							<input class="start" type="text" placeholder="外婆工作单位" name="WGrandMWorkPlace_card" id="WGrandMWorkPlace_card" value="<?php  echo $cardinfo['WGrandMWorkPlace'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px; width: 100px;">是否监护人：</span>
						<span class="c" >
							<select name="is_wgm_main" id="is_wgm_main"  class="start" style="border: 1px solid #e1e1e1;margin-left: 25px;text-align:center;
		text-align-last: center">
								<option value="0"  <?php  if(!in_array('6',$MainWatcharr)) { ?> selected <?php  } ?>>否</option>
								<option value="1"  <?php  if(in_array('6',$MainWatcharr)) { ?>  selected <?php  } ?>>是</option>
							 </select>
						</span>
					</div>
				</div>
				
				
				<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;">
					<span class="l"  style="width:250px">&nbsp;其他 <a style="color:#25bebf" onclick="$('#otherFamily').slideToggle()">点击展开/缩入</a></span>
				</div>
				<div id="otherFamily" style="display:none">
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历：</span>
						<span class="r">
							<input class="start" type="text" placeholder="学历" name="Otherxueli_card" id="Otherxueli_card" value="<?php  echo $cardinfo['Otherxueli'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业：</span>
						<span class="r">
							<input class="start" type="text" placeholder="职业" name="Otherwork_card" id="Otherwork_card" value="<?php  echo $cardinfo['Otherwork'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">爱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;好：</span>
						<span class="r">
							<input class="start" type="text" placeholder="爱好" name="Otherhobby_card" id="Otherhobby_card" value="<?php  echo $cardinfo['Otherhobby'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px;">工作单位：</span>
						<span class="r">
							<input class="start" type="text" placeholder="工作单位" name="OtherWorkPlace_card" id="OtherWorkPlace_card" value="<?php  echo $cardinfo['OtherWorkPlace'];?>"/>
						</span>
					</div>
					<div class="timeBox" style="padding-top:10px;margin-top:unset;border-bottom:unset;border-top:unset">
						<span class="l" style="padding-top:10px; width: 100px;">是否监护人：</span>
						<span class="c" >
							<select name="is_other_main" id="is_other_main"  class="start" style="border: 1px solid #e1e1e1;margin-left: 25px;text-align:center;
		text-align-last: center">
								<option value="0"  <?php  if(!in_array('7',$MainWatcharr)) { ?> selected <?php  } ?>>否</option>
								<option value="1"  <?php  if(in_array('7',$MainWatcharr)) { ?>  selected <?php  } ?>>是</option>
							 </select>
						</span>
					</div>
				</div>
			</div>
			

			<div class="timeBox" style="border-bottom:unset">
				<span class="l"  style="width:200px">孩子爱好 </span>
			</div>
			<div class="textInfo" id="Childhobby_card_div" style="border-top: 1px solid #e1e1e1;">
				<textarea rows="4" cols="" style="padding:unset;resize: none;" id="Childhobby_card"  name="Childhobby_card"  placeholder="孩子爱好"><?php  echo $cardinfo['Childhobby'];?></textarea>
			</div>
			
	
			<div class="timeBox" style="border-bottom:unset">
				<span class="l"  style="width:200px">对孩子的期望 </span>
			</div>
			<div class="textInfo" id="ChildWord_card_div" style="border-top: 1px solid #e1e1e1;">
				<textarea rows="4" cols="" style="padding:unset;resize: none;" id="ChildWord_card" name="ChildWord_card" placeholder="对孩子的期望"><?php  echo $cardinfo['ChildWord'];?></textarea>
			</div>
			
			<div class="timeBox" style="border-bottom:unset">
				<span class="l"  style="width:200px">对学校的期望 </span>
			</div>
			<div class="textInfo" id="ChildWord_card_div" style="border-top: 1px solid #e1e1e1;">
				<textarea rows="4" cols="" style="padding:unset;resize: none;" id="SchoolWord_card" name="SchoolWord_card" placeholder="对学校的期望"><?php  echo $cardinfo['SchoolWord'];?></textarea>
			</div>

			<div class="msgSubmit">
				<button  class="mainColor">提交</button>
			</div>
		</div>
		</form>
	</div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
<script>



setTimeout(function() {
	if(window.__wxjs_environment === 'miniprogram'){
		$("#titlebar").hide();
		$("#titlebar_bg").hide();
	}
}, 100);
 
function show_first_xl(){
	$("#first_xueli").show();

}
 
 
</script>
<script type="text/javascript">
var PB = new PromptBox();

function sendSubmitBtn(){
	var form =document.querySelector("#myinfo_form");
	var formdata=new FormData(form);
	$.ajax({
		url:"<?php  echo $this->createMobileUrl('comajax',array('op'=>'stu_infocard','sid'=>$it['sid'],'schoolid'=>$schoolid))?>",
		type:"post",
		data:formdata,
		processData:false,
		contentType:false,
		success:function(data){
		datas = JSON.parse(data);
			jTips(datas.msg);
			console.log(datas);
			
			window.location.href = "<?php  echo $this->createMobileUrl('useredit',array('schoolid'=>$schoolid))?>";
		},
		error:function(e){
			jTips("修改失败，请重试！！");
		}
	});
		
}
</script>
<?php  include $this->template('footer');?>
</html>