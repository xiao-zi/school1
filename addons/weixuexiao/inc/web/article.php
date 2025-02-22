<?php
/**
 * 微学校模块
 *
 * @author 微学校团队
 */

global $_GPC, $_W;

$weid              = $_W['uniacid'];
$action            = 'article';
$this1             = 'no3';
$schoolid          = intval($_GPC['schoolid']);
$GLOBALS['frames'] = $this->getNaveMenu($_GPC['schoolid'], $action);
$logo              = pdo_fetch("SELECT logo,title FROM " . tablename($this->table_index) . " WHERE id = '{$schoolid}'");
$operation         = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
$tid_global = $_W['tid'];
	$toPage = 'article';
	if(!(IsHasQx($tid_global,1001401,1,$schoolid)) && $toPage == 'article'){
		$toPage = 'news';
	}
	if(!(IsHasQx($tid_global,1001411,1,$schoolid)) && $toPage == 'news'){
		$toPage = 'wenzhang';
	}
	if(!(IsHasQx($tid_global,1001421,1,$schoolid)) && $toPage == 'wenzhang'){
		$toPage = 'article';
	}
	if($toPage != 'article'){
		$stopurl = $_W['siteroot'] .'web/'.$this->createWebUrl($toPage, array('schoolid' => $schoolid,'op'=>'display'));
		header("location:$stopurl");
	}


if($operation == 'display'){
	if (!(IsHasQx($tid_global,1001401,1,$schoolid))){
		$this->imessage('非法访问，您无权操作该页面','','error');	
	}
    $pindex    = max(1, intval($_GPC['page']));
    $psize     = 20;
    $condition = '';
    $params    = array();
    if(!empty($_GPC['keyword'])){
        $condition          .= " AND title LIKE :keyword";
        $params[':keyword'] = "%{$_GPC['keyword']}%";
    }

    $list  = pdo_fetchall("SELECT * FROM " . tablename($this->table_news) . " WHERE weid = '{$weid}' And schoolid = '{$schoolid}' And type = 'article' $condition ORDER BY displayorder DESC, id DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize, $params);
    $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename($this->table_news) . " WHERE weid = '{$weid}' And schoolid = '{$schoolid}' And type = 'article'");
    $pager = pagination($total, $pindex, $psize);
}elseif($operation == 'post'){
	if (!(IsHasQx($tid_global,1001401,1,$schoolid))){
		$this->imessage('非法访问，您无权操作该页面','','error');	
	}
    load()->func('tpl');
    $id = intval($_GPC['id']);

    if(!empty($id)){
        $item1 = pdo_fetch("SELECT * FROM " . tablename($this->table_news) . " WHERE id = '{$id}'");
        if(empty($item1)){
			$this->imessage('抱歉，本条信息不存在在或是已经删除！', $this->createWebUrl('article', array('op' => 'display', 'schoolid' => $schoolid)), 'error');
        }
    }
    if(checksubmit('submit')){

        $data = array(
            'weid'         => $weid,
            'schoolid'     => $_GPC['schoolid'],
            'title'        => trim($_GPC['title']),
            'content'      => trim($_GPC['content']),
            'thumb'        => trim($_GPC['thumb']),
            'description'  => trim($_GPC['description']),
            'author'       => trim($_GPC['author']),
            'is_display'   => 1,
            'is_show_home' => 1,
            'click'        => intval($_GPC['click']),
            'dianzan'      => intval($_GPC['dianzan']),
            'displayorder' => intval($_GPC['displayorder']),
            'type'         => 'article',
            'createtime'   => time(),
        );

        if(!empty($id)){
            pdo_update($this->table_news, $data, array('id' => $id));
        }else{
            pdo_insert($this->table_news, $data);
        }
        $this->imessage('操作成功', $this->createWebUrl('article', array('op' => 'display', 'schoolid' => $schoolid)), 'success');
    }
}elseif($operation == 'delete'){
    $id      = intval($_GPC['id']);
    $article = pdo_fetch("SELECT id FROM " . tablename($this->table_news) . " WHERE id = '$id'");
    if(empty($article)){
        $this->imessage('抱歉，文章不存在或是已经被删除！', $this->createWebUrl('article', array('op' => 'display', 'schoolid' => $schoolid)), 'error');
    }
    pdo_delete($this->table_news, array('id' => $id), 'OR');
    $this->imessage('文章删除成功！', $this->createWebUrl('article', array('op' => 'display', 'schoolid' => $schoolid)), 'success');
}
include $this->template('web/article');
?>