<?php defined('IN_IA') or exit('Access Denied');?><html lang="zh-CN">
<head>
    <style type="text/css">@charset "UTF-8";
    [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide:not(.ng-hide-animate) {
        display: none !important;
    }

    ng\:form {
        display: block;
    }</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta content="telephone=no" name="format-detection">
    <title>课程大纲</title>
	<link rel="stylesheet" href="<?php echo OSSURL;?>public/mobile/css/reset.css">
    <link rel="stylesheet" href="<?php echo MODULE_URL;?>public/mobile/css/weixin.css">
    <style type="text/css">@media screen {
        .smnoscreen {
            display: none
        }
    }

    @media print {
        .smnoprint {
            display: none
        }
    }</style>
</head>
<body>
<div ng-view="" style="height: 100%;" class="ng-scope">
    <div class="ddb-nav-header ng-scope" common-header="">       
        <div class="header-title ng-binding">课程大纲</div>
    </div>
    <div id="ddb-branch-introduction" class="main-view ng-binding ng-scope">
        <?php  echo htmlspecialchars_decode($item['dagang'])?>
    </div>
</div>
  
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
 <?php  include $this->template('footer');?>  
</html>