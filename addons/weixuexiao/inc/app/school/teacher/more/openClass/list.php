<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2020/7/9
 * Time: 10:16
 */
/**
 * 公开课列表
 */
$type = $_GET['type']?true:false;//查看公开课的类型,true:所有的公开课 false:只查看自己的公开课
$page = intval($_GET['page'])?intval($_GET['page']):1;//页数
appLoad()->model('teacher');
$model = new teacher();
$user = $model->get_user_info('teacher');

$school_id = $user['school_id'];//学校的id
$teacher_id = $user['teacher_id'];//老师的id
//学校信息
$logo = pdo_fetchcolumn("SELECT logo FROM " . tablename('wx_school_index') . " where id = '{$school_id}' ");

$num = 5;
$limitStr = ($page-1)*$num .' , ' . $num;

$condition = "";
if(!$type){//只查看自己公开课的条件
    $condition =  "and tid = '{$teacher_id}'";
}
$list = pdo_fetchall("SELECT * FROM " . tablename($this->table_gongkaike) . " where schoolid='{$school_id}' $condition ORDER BY createtime desc limit $limitStr");
if(empty($list)){
    json_encodeBack(array('status'=>10003,'msg'=>'我也是有底线的！'));
}
$result = array();
foreach ($list as $key=>$value){
    $result[$key]['id'] = $value['id'];//公开课的id
    $result[$key]['title'] = $value['name'];//公开课的标题
    $result[$key]['teacher'] = pdo_fetchcolumn("SELECT tname FROM " . tablename('wx_school_teachers') . " where id = '{$value['tid']}'");//讲课老师
    //创建老师
    if($value['createtid'] == 0){
        $result[$key]['founder'] = '管理员';
    }else{
        $result[$key]['founder'] = pdo_fetchcolumn("SELECT tname FROM " . tablename('wx_school_teachers') . " where id = '{$value['createtid']}'");
    }
    //年级
    $result[$key]['grade'] = pdo_fetchcolumn("SELECT sname FROM " . tablename($this->table_classify) . " where sid = '{$value['xq_id']}'");
    //班级
    $result[$key]['class'] = pdo_fetchcolumn("SELECT sname FROM " . tablename($this->table_classify) . " where sid = '{$value['bj_id']}'");
    //科目
    $course = pdo_fetch("SELECT sname,icon FROM " . tablename($this->table_classify) . " where sid = '{$value['km_id']}'");
    $result[$key]['course'] = $course['sname'];
    $result[$key]['thumb'] = empty($course['icon'])?tomedia($logo):tomedia($course['icon']);
    $result[$key]['address'] = $value['addr'];//上课地址
    $result[$key]['start'] = date('Y-m-d H:i',$value['starttime']);//开始时间
    $result[$key]['end'] = date('Y-m-d H:i',$value['endtime']);//开始时间
    if($value['starttime'] > time()){
        $result[$key]['type'] = 1;//尚未开始
    }elseif($value['starttime'] <= time() && $value['endtime'] >= time()){
        $result[$key]['type'] = 2;//进行中
    }elseif($value['endtime'] < time()){
        $result[$key]['type'] = 3;//已经结束
    }
    $result[$key]['outline'] = $value['dagang'];//大纲
}
json_encodeBack(array('status'=>'10001','msg'=>'SUCCESS','data'=>$result));