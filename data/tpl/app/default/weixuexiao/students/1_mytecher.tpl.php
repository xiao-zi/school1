<?php defined('IN_IA') or exit('Access Denied');?><!--正文导航-->
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta content="telephone=no" name="format-detection" /> 
<meta name="google-site-verification" content="DVVM1p1HEm8vE1wVOQ9UjcKP--pNAsg_pleTU5TkFaM">
<style>
body > a:first-child,body > a:first-child img{ width: 0px !important; height: 0px !important; overflow: hidden; position: absolute}
body{padding-bottom: 0 !important;}
</style>
<meta id="viewport" name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>我的老师们</title>
<link rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/resetnew.css">
<?php  echo register_jssdks();?>
<script src="<?php echo MODULE_URL;?>public/mobile/js/jquery.js"></script>
<style>body{ position: relative; top: 0; bottom: 0; left: 0; right:0;}</style>
</head>
<body>
    <div id="wrap" class="teacher_list" style="padding-bottom:55px;">
        <!--header id="header">

        </header-->

        <div id="content_list">
			<section class="teachers">	
               <a href="#" style="border-bottom: 1px solid #d4d2d2;margin-bottom: 0px;">
                    <div class="photo" style=" background-image:url(<?php  echo tomedia($school['logo']);?>)"></div>
                    <ul>
                       <li><label></label><?php  echo $language['mytecher_title'];?></li>
                       <li><label><?php  echo $language['mytecher_wdnj'];?>:</label><?php  echo $xqname['sname'];?></li>
                       <li><label><?php  echo $language['mytecher_wdbj'];?>:</label><div><?php  echo $bjname['sname'];?></div></li>
                    </ul>
               </a>			
			  <?php  if(is_array($list)) { foreach($list as $item) { ?>
			  <?php  
				$tid = array();
				if(!in_array($item['tid'], $tid)){
				$tid[] = $item['tid'];
			  ?>
				  <a style="border-bottom: 1px solid #d4d2d2;margin-bottom: 0px;" href="<?php  echo $this->createMobileUrl('tcinfo', array('schoolid' => $schoolid, 'tid' => $item['tid']), true)?>">
					<div class="photo" style=" background-image:url(<?php  if($item['thumb']) { ?><?php  echo tomedia($item['thumb']);?><?php  } else { ?><?php  echo tomedia($school['tpic']);?><?php  } ?>)"></div>
					<ul>
						<li><label><?php  echo $language['mytecher_lsxm'];?>：</label><?php  echo $item['tname'];?></li>
						<li><label></label></li>
						<li><label><?php  echo $language['mytecher_skkm'];?>：</label><?php  if(is_array($item['kemu'])) { foreach($item['kemu'] as $v) { ?> <?php  echo $v['kemus'];?> <?php  } } ?></li>
					</ul>
				  </a>
			  <?php  
				}
			  ?>				  
			  <?php  } } ?>			 
             </section>
       </div>
	</div>   
   <?php  include $this->template('footer');?>    
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
<script>
WeixinJSHideAllNonBaseMenuItem();
/**微信隐藏工具条**/
function WeixinJSHideAllNonBaseMenuItem(){
	if (typeof wx != "undefined"){
		wx.ready(function () {
			
			wx.hideAllNonBaseMenuItem();
		});
	}
}
</script>
</html>