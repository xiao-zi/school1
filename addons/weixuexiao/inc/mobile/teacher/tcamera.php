<?php
/**
 * 微学校模块
 *
 * @author 微学校团队
 */
        global $_W, $_GPC;
        $weid = $_W['uniacid'];
		$schoolid = intval($_GPC['schoolid']);
		$openid = $_W['openid'];
		$videoid = $_GPC['id'];
		$bj_id = $_GPC['bj_id'];
		$it = pdo_fetch("SELECT * FROM " . tablename($this->table_user) . " where :schoolid = schoolid And :openid = openid And :sid = sid", array(':schoolid' => $schoolid, ':openid' => $openid, ':sid' => 0));

		$school = pdo_fetch("SELECT videoname,videopic,style3,title,spic,tpic FROM " . tablename($this->table_index) . " where weid = :weid AND id=:id ", array(':weid' => $weid, ':id' => $schoolid));
		$set = pdo_fetch("SELECT sensitive_word FROM " . tablename($this->table_set) . " where weid = :weid ", array(':weid' => $weid));
		$allowpy = 1;		
        if(!empty($it)){
			$mac = get_device_type();
			$mybj = pdo_fetch("SELECT * FROM " . tablename($this->table_allcamera) . " WHERE weid = '{$weid}' AND schoolid = '{$schoolid}' AND id = '{$videoid}'");			
			$myplsl  = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename($this->table_camerapl) . " WHERE weid = '{$weid}' AND schoolid = '{$schoolid}' AND carmeraid = '{$videoid}' And type = 2");
			$mydzsl  = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename($this->table_camerapl) . " WHERE weid = '{$weid}' AND schoolid = '{$schoolid}' AND carmeraid = '{$videoid}' And type = 1");
			$myisdz = pdo_fetch("SELECT id FROM " . tablename($this->table_camerapl) . " where weid = :weid AND schoolid = :schoolid AND carmeraid = :carmeraid AND userid = :userid", array(':weid' => $weid, ':schoolid' => $schoolid, ':carmeraid' => $videoid, ':userid' => $it['id']));
			$name = $mybj['name'];
			$pic = $mybj['videopic'];
			if($mac != 'ios'){
				$thisvideo = $mybj['videourl'];
				if (preg_match('/lechange/i', $mybj['videourl'])) {
					$thisvideo = $mybj['videourl'].'?v='.getRandomString(32);
				}					
			}else{
				$thisvideo = $mybj['videourl'];
			}
			$thisclick = $mybj['click'];
			$click = $mybj['click'] + 1;
			pdo_update($this->table_allcamera, array('click' =>  $click), array('id' =>  $videoid));
			$allpl = pdo_fetchall("SELECT * FROM " . tablename($this->table_camerapl) . " WHERE weid = '{$weid}' AND schoolid = '{$schoolid}' AND carmeraid = '{$videoid}' AND type = 2 ORDER BY createtime DESC");
			foreach($allpl as $key => $row){
				$user = pdo_fetch("SELECT * FROM " . tablename($this->table_user) . " where id = :id ", array(':id' => $row['userid']));
				$allpl[$key]['time'] = sub_day($row['createtime']);
				if($user['pard'] == 0){
					$teacher = pdo_fetch("SELECT tname,thumb FROM " . tablename($this->table_teachers) . " where id = :id ", array(':id' => $user['tid']));
					$allpl[$key]['name'] = $teacher['tname']."老师";
					$allpl[$key]['icon'] = !empty($teacher['thumb']) ? $teacher['thumb'] : $school['tpic'];
				}else{
					$studen = pdo_fetch("SELECT s_name,icon FROM " . tablename($this->table_students) . " where id = :id ", array(':id' => $user['sid']));
					if($user['pard'] == 4){	
						$allpl[$key]['name'] = $studen['s_name'];
						$allpl[$key]['icon'] = !empty($studen['icon']) ? $studen['icon'] : $school['spic'];
					}else{
					$item = pdo_fetch("SELECT avatar FROM " . tablename ( 'mc_members' ) . " where uniacid = :uniacid AND uid=:uid ", array(':uid' => $user['uid'], ':uniacid' => $weid)); 
					$allpl[$key]['icon'] = $item['avatar'];
						if($user['pard'] == 2){
							$allpl[$key]['name'] = $studen['s_name']."妈妈";
						}
						if($user['pard'] == 3){
							$allpl[$key]['name'] = $studen['s_name']."爸爸";
						}
						if($user['pard'] == 4){
							$allpl[$key]['name'] = $studen['s_name']."家长";
						}						
					}
				}
			}
			$my = pdo_fetch("SELECT thumb FROM " . tablename($this->table_teachers) . " where id = :id ", array(':id' => $it['tid']));
			$myicon = empty($my['thumb']) ? $school['tpic'] : $my['thumb'];
			if (!empty($_W['setting']['remote']['type'])) { 
				$urls = $_W['attachurl']; 
			} else {
				$urls = $_W['siteroot'].'attachment/';
			}			
			include $this->template(''.$school['style3'].'/tcamera');
        }else{
			session_destroy();
		    $stopurl = $_W['siteroot'] .'app/'.$this->createMobileUrl('bangding', array('schoolid' => $schoolid));
			header("location:$stopurl");
			exit;
        }        
?>