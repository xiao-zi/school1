<?php defined('IN_IA') or exit('Access Denied');?><div class="modal-dialog modal-lg" role="document">		
	<div class="modal-content">			
		<div class="modal-header" style="color: black;">					
			<h4 class="modal-title" id="ModalTitle">该划分仅用于群发通知</h4>	
		</div>
		<div class="modal-body">
			<div class="form-group">
			   <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 100px;">选择老师:</label>
				<div class="col-sm-9 col-xs-6">
					<div class="input-group text-info">
						<?php  if(is_array($teachers_list)) { foreach($teachers_list as $row) { ?>
						<label  class="checkbox-inline" style="width:20%;margin-left: 10px"><input type="checkbox" name="tidarr[]"  class="tid_check" value="<?php  echo $row['id'];?>" tname="<?php  echo $row['tname'];?>" style="float: none;" <?php  if(in_array($row['id'],$fztidarr)) { ?>checked="checked"<?php  } ?>> <?php  echo $row['tname'];?></label>
					   
						<?php  } } ?>
					</div>
				</div>
			</div>			
		</div>				
		<div class="modal-footer">	
			<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			<button type="button" class="btn btn-primary" id="submit3"  onclick="setdown_fztidarr(<?php  echo $fzid;?>)">确认修改</button>
		</div>			
	</div>	
</div>
	
	
<script>
	
	
	function setdown_fztidarr(sid){

		var check = $("input[type=checkbox][class=tid_check]:checked");
		 if(check.length < 1){
            alert('请选择所属教师!');
            return false;
        }
			
		var id = new Array();
		check.each(function(i){
			id[i] = $(this).val();
		});
		$.post("<?php  echo $this->createWebUrl('jsfz',array('op'=>'setdown_fztidarr','schoolid'=>$schoolid))?>", {'sid': sid,'tidarr':id }, function(data1) {
			data = JSON.parse(data1);
			console.log(data);
			alert(data.msg);
	 		location.reload();
		});
	}
	
	
</script>