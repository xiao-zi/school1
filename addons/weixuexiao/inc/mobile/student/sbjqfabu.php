<?php
/**
 * 微学校模块
 *
 * @author 微学校团队
 */
//1
        global $_W, $_GPC;
        $weid = $_W['uniacid'];
		$schoolid = intval($_GPC['schoolid']);
		$openid = $_W['openid'];
        $userss = intval($_GPC['userid']);
		
        //查询是否用户登录		
		if(!empty($userss)){
			$ite = pdo_fetch("SELECT * FROM " . tablename($this->table_user) . " where :schoolid = schoolid And weid = :weid AND id=:id ", array(':schoolid' => $schoolid,':weid' => $weid, ':id' => $userss));
			if(!empty($ite)){
				$_SESSION['user'] = $ite['id'];
			}else{
				$stopurl = $_W['siteroot'] .'app/'.$this->createMobileUrl('myschool', array('schoolid' => $schoolid));
				header("location:$stopurl");
				exit;
			}			
		}else{
			if(empty($_SESSION['user'])){
				$userid = pdo_fetch("SELECT * FROM " . tablename($this->table_user) . " where :schoolid = schoolid And :weid = weid And :openid = openid And :tid = tid LIMIT 0,1 ", array(':weid' => $weid, ':schoolid' => $schoolid, ':openid' => $openid, ':tid' => 0), 'id');
				$_SESSION['user'] = $userid['id'];
			}
		}
		$it = pdo_fetch("SELECT * FROM " . tablename($this->table_user) . " where id = :id ", array(':id' => $_SESSION['user']));
		$students = pdo_fetch("SELECT * FROM " . tablename($this->table_students) . " where weid = :weid AND id = :id", array(':weid' => $_W ['uniacid'], ':id' => $it['sid']));
		$school = pdo_fetch("SELECT title,isopen,bjqstyle,style2,txid,txms,is_fbnew,is_fbvocie FROM " . tablename($this->table_index) . " where weid = :weid AND id = :id", array(':weid' => $_W ['uniacid'], ':id' => $schoolid));
        $bjidname = pdo_fetch("SELECT sname FROM " . tablename($this->table_classify) . " where sid = :sid ", array(':sid' => $students['bj_id']));
			
        $shenfen = "";
		
		if ($it['pard'] == 2){
			$shenfen = get_guanxi(2);
		}else if($it['pard'] == 4){
		    $shenfen = get_guanxi(4);
		}else if($it['pard'] == 5){
		    $shenfen = get_guanxi(5);				
		}
        if(!empty($it)){
			include $this->template(''.$school['style2'].'/sbjqfbnew');
		}else{
			session_destroy();
		    $stopurl = $_W['siteroot'] .'app/'.$this->createMobileUrl('bangding', array('schoolid' => $schoolid));
			header("location:$stopurl");
			exit; 
		}        
?>