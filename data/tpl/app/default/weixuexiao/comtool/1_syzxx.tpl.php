<?php defined('IN_IA') or exit('Access Denied');?><?php  if(is_array($leave1)) { foreach($leave1 as $row) { ?>
				<section class="vacationRecord_section" time="<?php  echo $row['createtime'];?>">
					<div class="vacationItem vacationItemOther">
						<span class="vacation_title">发送人:</span><span class="vacation_mom vacation_left"><?php  echo $row['sname'];?></span>
						<div class="left_dotsVacation"></div>
					</div>
					<div class="vacationItem vacationItemOther">
						<span class="vacation_title">留言内容:</span>
						<div class="left_dotsVacation"></div>
					</div>
					<div class="vacationItem vacationItemOther">
						<span class="vacation_title"><?php  echo $row['beizhu'];?></span>
					</div>
					<?php  if(!empty($row['huifu'])) { ?>
					<div class="vacationItem vacationItemOther">
						<span class="vacation_title">校长回复:</span>
						<div class="left_dotsVacation"></div>
					</div>
					<div class="vacationItem vacationItemOther">
						<span class="vacation_title"><?php  echo $row['huifu'];?></span>
					</div>
					<?php  } ?>
					
					
					<!--第一人-->
					<div class="teachReplyBox" >
						<div class="teachReplyToptBox">
							<div class="teachReplyLeftBox">
								<img src="<?php  if($row['thumb']) { ?><?php  echo tomedia($row['thumb'])?><?php  } else { ?><?php  echo tomedia($schol['tpic'])?><?php  } ?>" class="img-responsive">
							</div>
							<div class="teachReplyRightTitle">
								<span class="teachReplyName">
									接收人：<?php  echo $row['tname'];?>
								</span>
							</div>
						</div>
						<div class="left_teachReply"></div>
						<div class="teachReplyLeftLine"></div>
						<div class="teachReplyLeftCircle"></div>
					</div>
					<!--被转发者-->
				

					<div class="teachReplyBox">
						<div class="teachReplyBottom">
							<span class="vacation_time otherTime">留言时间:</span><span class="vacation_time vacation_left otherTime"><?php  echo date('Y-m-d H:i:s',$row['createtime'])?></span>
						</div>
					</div>
					<!--状态显示-->
					<div class="statusTip">	
					<!--初始状态-->
					<?php  if(empty($row['huifu'])) { ?>
						<div class="statusTipTop statusTipTop_wait">待回复</div>
						<div class="tip_approve_down tip_approve_down__wait"></div>
					<!--第一人拒绝-->
					<?php  } else { ?>
						<div class="statusTipTop statusTipTop_finish">已回复</div>
						<div class="tip_approve_down tip_approve_down__finish"></div>
					<?php  } ?>
					</div>
					<!--结束状态显示-->
					<div class="signin_leftBox"></div>
		 			<div class="vacationItem vacationItemBtn">
				 	<!--初始状态-->
				 	
		 			</div>
				</section>
			<?php  } } ?>	