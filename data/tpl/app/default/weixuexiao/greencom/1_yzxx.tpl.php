<?php defined('IN_IA') or exit('Access Denied');?><html>
	<head>
		<meta charset="UTF-8">
		<title>校长信箱</title>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Full screen -->
		<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
		<!-- iOS mobile-web-app -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
			<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.10.1.min.js?v=4.9"></script>
		<meta name="apple-mobile-web-app-title" content="校长信箱">
		<!-- Android mobile-web-app -->
		<meta name="mobile-web-app-capable" content="yes">
		<!-- Other -->
		<meta name="format-detection" content="telephone=no">
<?php  include $this->template('port');?>
		<style type="text/css">
			* {
			                margin: 0;
			                padding: 0;
			                box-sizing: border-box;
			            }
			
			            body {
			                font-size: 16px;
			                line-height: 1.54;
			                background: #f0f0f0;
			                padding: 10px 15px;			
			            }
			
			            .form-line {
			                margin-bottom: 7px;
			            }
			            
			            .input-wrapper {
			                padding: 12px 10px;
			                background: #fff;
			            }
			           
			            
			            .input-wrapper>input,
			            .input-wrapper>textarea {
			                display: block;
			                width: 100%;
			                border: none;
			                outline: none;
			                font-size: 100%;
			                resize: none;
			            }
			
			            .select-wrapper {
			                position: relative;
			            }
			            .select-wrapper>select {
			                position: absolute;
			                top: 0;
			                right: 0;
			                width: 100%;
			                height: 100%;
			                outline: none;
			                opacity: 0;
			            
			            }
			            
			            .form-line>label {
			                margin-bottom: 8px;
			                font-size: 15px;
			                display: block;
			            }
			            
			            .captcha-wrapper>.input-wrapper {
			                margin-bottom: 8px;
			            }
			            
			            .captcha-img {
			                text-align: right;
			            }
			            
			            .form-action {
			                margin-top: 20px;
			            }
			
			            .form-action>button[type="submit"] {
			                display: block;
			                width: 100%;
			                border: none;
			                background: #007bff;
			                color: #fff;
			                padding: 16px 0;
			                border-radius: 2px;
			                font-size: 100%;
			            }
			            
			            .toast {
			                position: fixed;
			                top: 50%;
			                left: 50%;
			                transform: translateX(-50%) translateY(-50%);
			                background: rgba(0,0,0,.9);
			                color: #fff;
			                padding: 8px 14px;
			                max-width: 66%;
			                border-radius: 4px;
			                text-align: center;
			                white-space: normal;
			                line-height: 1.4;
			                word-wrap: break-word;
			            }
			            
			            .alert {
			                background: rgba(0,0,0,.5);
			                position: fixed;
			                top: 0;
			                left: 0;
			                width: 100%;
			                height: 100%;
			            }
			            
			            .alert-wrapper {
			                position: absolute;
			                top: 50%;
			                left: 50%;
			                -webkit-transform: translateX(-50%) translateY(-50%);
			                transform: translateX(-50%) translateY(-50%);
			                max-width: 80%;
			                background: #fff;
			                min-width: 240px;
			                border-radius: 10px;
			                font-size: 16px;
			            }
			            
			            .alert-body {
			                padding: 20px 0 16px;
			                text-align: center;
			            }
			            
			            .alert-button {
			                border-top: 1px solid #d5d7d9;
			                padding: 8px 0;
			                text-align: center;
			                color: #00a8fd;
			            }
			            .selectks{
				                display: block;
    width: 100%;
    border: none;
    outline: none;
    font-size: 100%;
    resize: none;
			            }
		</style>
	</head>
	<body>
		
			
			
			
			<input type="hidden" name="orgNumber" value="751895459">
			<div class="form-line">
				<label>留言1</label>
				<div class="input-wrapper">
					<textarea rows="7" name="order_beizhu" id="order_beizhu" placeholder="最多50个字"></textarea>
				</div>
			</div>
			<div class="form-action">
				<button type="submit" onclick="yy_order()">保存</button>
			</div>
	
	
		
	<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
	<script type="text/javascript">
		function yy_order(){
			
			var beizhu = $("#order_beizhu").val();
			if(beizhu == null){
				jTips("请填写留言内容！");
			}
			var totid = <?php  echo $school['yzxxtid'];?>;
			$.ajax({
				url: "<?php  echo $this->createMobileUrl('dongtaiajax', array('op' => 'send_mail'), true)?>",
				type: "post",
				dataType: "json",
				data: {
					
					beizhu:beizhu,
					schoolid: <?php  echo $schoolid;?>,
					weid:<?php  echo $weid;?>,
					totid:totid,
					fromuserid:<?php  echo $it['id'];?>
				},
				success: function (data) {
					jTips(data.msg);
					//console.log(data.msg);
					if(data.result == true){
						window.history.back();
					}
				}
			});
			return;
		}
	</script>
</html>