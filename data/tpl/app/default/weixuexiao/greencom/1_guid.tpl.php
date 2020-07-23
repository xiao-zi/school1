<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="true" />
<title><?php  echo $banner['bannername'];?></title>
<style type="text/css">
*{margin: 0;padding: 0;-webkit-tap-highlight-color: rgba(0,0,0,0);-webkit-appearance: none;-webkit-touch-callout: none}
html,body{height:100%;width:100%;overflow:hidden;font-family:Helvetica,'微软雅黑';}
img{vertical-align: top;border:none;-webkit-tap-highlight-color: rgba(0,0,0,0);}
.swiper-container {width: 100%;height: 100%;}
.swiper-wrapper{width:900%;height:100%;overflow: hidden;}
.swiper-slide{text-align: center;height:100%;float:left;font-size: 18px;background: #fff;position: relative;}
a{text-decoration: none;}
.swiper-slide>img{width:100%;height:100%;}
.skip_tips{position:fixed;top:10px;right:5px;color:#fff;font-size:16px;padding-right:20px;background: url(<?php echo OSSURL;?>public/mobile/img/arrow.png) no-repeat;
background-size: 16px;background-position: right center;}
.swiper-pagination{position: fixed;top:10px;left:5px;color:#fff;font-size: 16px;width:60px;left:50%;margin-left: -30px;}
.btn{width:164px;height:60px;position: absolute;left:50%;margin-left: -82px;top:0;}
</style>
</head>
<body>
<div class="swiper-container">
	<div class="swiper-wrapper">
	<?php  if(is_array($imgs)) { foreach($imgs as $row) { ?>
		<div class="netx swiper-slide">
			<img src="<?php  echo tomedia($row)?>">
		</div>
	<?php  } } ?>	  
	</div>
	<div class="swiper-pagination"></div>
</div>
<a href="<?php  echo $this->createMobileUrl('detail', array('schoolid' => $schoolid), true)?>" class="skip_tips">跳过</a>
<script src="<?php echo MODULE_URL;?>public/mobile/js/swiper.min.js"></script>
<script src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.10.1.min.js"></script>
<script type="text/javascript"> 
    var swiper = new Swiper('.swiper-container',{
        pagination:'.swiper-pagination',
         paginationType:'fraction'

    });
    $(".netx").on("click",function(){
       // if($(this).parent().next().index()<0)
		if($(this).next().index()<0)
        {
            location.href = "<?php  echo $stopurl;?>";
        }else{
            //swiper.slideTo($(this).parent().next().index(), 300, true);
			swiper.slideTo($(this).next().index(), 300, true);
        }
        
    })
    $("body").bind('touchmove', function (event) { event.preventDefault(); }, false);// 
</script>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
