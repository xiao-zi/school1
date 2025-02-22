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
		$scid = $_GPC['scid'];
		$setid = $_GPC['setid'];
		$bj_id = $_GPC['bj_id'];
        
        //查询是否用户登录		
		$userid = pdo_fetch("SELECT * FROM " . tablename($this->table_user) . " where :schoolid = schoolid And :weid = weid And :openid = openid And :sid = sid", array(':weid' => $weid, ':schoolid' => $schoolid, ':openid' => $openid, ':sid' => 0), 'id');
		$it = pdo_fetch("SELECT * FROM " . tablename($this->table_user) . " where weid = :weid AND id=:id ORDER BY id DESC", array(':weid' => $weid, ':id' => $userid['id']));	
		$school = pdo_fetch("SELECT style3,title,spic,headcolor FROM " . tablename($this->table_index) . " where weid = :weid AND id=:id", array(':weid' => $weid, ':id' => $schoolid));
        if(!empty($userid['id'])){
		    $list = pdo_fetchall("SELECT id,icon,s_name FROM " . tablename($this->table_students) . " where :schoolid = schoolid And :weid = weid And :bj_id = bj_id ORDER BY id DESC", array(
		         ':weid' => $weid,
				 ':schoolid' => $schoolid,
				 ':bj_id' => $bj_id
				 ));
			foreach ($list as $key => $row) {
				$isdp = pdo_fetch("SELECT id FROM " . tablename ($this->table_scforxs) . " where schoolid = :schoolid And scid = :scid And sid = :sid And type = :type", array(':schoolid' => $schoolid, ':scid' => $scid, ':type' => 1, ':sid' => $row['id']));
				$ispl = pdo_fetch("SELECT id FROM " . tablename ($this->table_scforxs) . " where schoolid = :schoolid And scid = :scid And sid = :sid And type = :type", array(':schoolid' => $schoolid, ':scid' => $scid, ':type' => 2, ':sid' => $row['id']));
				$list[$key]['isdp'] = $isdp['id'];
				$list[$key]['ispl'] = $ispl['id'];
			}
			include $this->template(''.$school['style3'].'/shoucepl');
        }else{
			session_destroy();
            $stopurl = $_W['siteroot'] .'app/'.$this->createMobileUrl('bangding', array('schoolid' => $schoolid));
			header("location:$stopurl");
        }        
?>