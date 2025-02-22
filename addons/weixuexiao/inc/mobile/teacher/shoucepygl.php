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
        $nowtime = time();
        //查询是否用户登录
		$userid = pdo_fetch("SELECT * FROM " . tablename($this->table_user) . " where :schoolid = schoolid And :weid = weid And :openid = openid And :sid = sid", array(':weid' => $weid, ':schoolid' => $schoolid, ':openid' => $openid, ':sid' => 0), 'id');
		$it = pdo_fetch("SELECT * FROM " . tablename($this->table_user) . " where weid = :weid AND id=:id ", array(':weid' => $weid, ':id' => $userid['id']));
		$school = pdo_fetch("SELECT * FROM " . tablename($this->table_index) . " where weid = :weid AND id=:id ", array(':weid' => $weid, ':id' => $schoolid)); 		
 		if($_GPC['op'] == 'del'){
			if(!$_GPC['tid']){
				$data = explode ( '|', $_GPC ['json'] );
				$data ['status'] = 2;
				$data ['info'] = '非法请求！';				
			}else{
				pdo_delete($this->table_scpy, array('id' => $_GPC['sRecordUid']));	
				$data ['status'] = 1;
				$data ['info'] = '删除成功！';				
			}
			die ( json_encode ( $data ) );	
		}       
		if(!empty($userid['id'])){
			$list =  pdo_fetchall("SELECT * FROM " . tablename($this->table_scpy) . " where weid = :weid AND schoolid=:schoolid ORDER BY ssort ASC ", array(':weid' => $weid, ':schoolid' => $schoolid));
			
			include $this->template(''.$school['style3'].'/shoucepygl');
        }else{
			session_destroy();
            $stopurl = $_W['siteroot'] .'app/'.$this->createMobileUrl('bangding', array('schoolid' => $schoolid));
			header("location:$stopurl");
        }        
?>