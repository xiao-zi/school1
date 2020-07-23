<?php defined('IN_IA') or exit('Access Denied');?><style>
	.nav-pills>li a {
		color: #333;
	}
	.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus{
		color: #fff;
		background-color: #3296fa !important;
	}
</style>
<ul class="nav nav-pills" role="tablist">
	<li <?php  if(($_GPC['do'] == 'newfenzu')) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('newfenzu', array('op' => 'display'))?>">分组管理</a>
	</li>	
	<li <?php  if(($_GPC['do'] == 'newmanager')) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('newmanager', array('op' => 'display'))?>">二维码</a>
	</li>
	<li <?php  if(($_GPC['do'] == 'newbanners')) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('newbanners', array('op' => 'display'))?>">平台幻灯片</a>
	</li>	
	<li <?php  if(($_GPC['do'] == 'newcomad')) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('newcomad', array('op' => 'display'))?>">贴片广告</a>
	</li>
	<li <?php  if(($_GPC['do'] == 'newguid')) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('newguid', array('op' => 'display'))?>">新手引导</a>
	</li>
	<li <?php  if(($_GPC['do'] == 'newcomload')) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('newcomload', array('op' => 'display'))?>">公共加载</a>
	</li>
	<?php  if($_W['isfounder']) { ?>
	<li <?php  if(($_GPC['do'] == 'newloginctrl')) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('newloginctrl', array('op' => 'display'))?>">独立后台</a>
	</li>
	<?php  } ?>
	<li <?php  if(($_GPC['do'] == 'newbinding')) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('newbinding', array('op' => 'display'))?>">统一入口</a>
	</li>
	<li <?php  if(($_GPC['do'] == 'newsensitive')) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('newsensitive', array('op' => 'display'))?>">敏感词</a>
	</li>
	<li <?php  if(($_GPC['do'] == 'newlanset')) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('newlanset', array('op' => 'display'))?>">语言包</a>
	</li>
	<li <?php  if(($_GPC['do'] == 'new_manger_apps')) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('new_manger_apps', array('op' => 'display'))?>">应用管理</a>
	</li>
</ul>