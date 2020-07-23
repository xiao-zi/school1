<?php defined('IN_IA') or exit('Access Denied');?><script type="text/javascript">
	function showImageDialog_inuptimg(elm, opts, options) {
		require(["util"], function(util){
			var btn = $(elm);
			var ipt = btn.parent().prev();
			var val = ipt.val();
			var img = ipt.parent().next().children();
			options = {'global':false,'class_extra':'','direct':true,'multiple':false};
			util.image(val, function(url){
				if(url.url){
					if(img.length > 0){
						img.get(0).src = url.url;
					}
					ipt.val(url.attachment);
					ipt.attr("filename",url.filename);
					ipt.attr("url",url.url);
					$("#bg_img").css("background",'url(' + url.url+ ') no-repeat');
					$("#bg_img").css("background-size",'420px 787px');
				}
				if(url.media_id){
					if(img.length > 0){
						img.get(0).src = "";
					}
					ipt.val(url.media_id);
					$("#bg_img").css("background",'url(' + url.media_id+ ') no-repeat');
					$("#bg_img").css("background-size",'420px 787px');
				}
			}, null, options);
		});
	}
	function showImageDialog_banner(elm, opts, options) {
		require(["util"], function(util){
			var btn = $(elm);
			var ipt = btn.parent().prev();
			var val = ipt.val();
			var img = ipt.parent().next().children();
			options = {'global':false,'class_extra':'','direct':true,'multiple':false};
			util.image(val, function(url){
				if(url.url){
					if(img.length > 0){
						img.get(0).src = url.url;
					}
					ipt.val(url.attachment);
					ipt.attr("filename",url.filename);
					ipt.attr("url",url.url);
					$("#foot_banner").attr("src",url.url);
				}
				if(url.media_id){
					if(img.length > 0){
						img.get(0).src = "";
					}
					ipt.val(url.media_id);
					$("#foot_banner").attr("src",url.media_id);
				}
			}, null, options);
		});
	}
	function showImageDialog_qrcode(elm, opts, options) {
		require(["util"], function(util){
			var btn = $(elm);
			var ipt = btn.parent().prev();
			var val = ipt.val();
			var img = ipt.parent().next().children();
			options = {'global':false,'class_extra':'','direct':true,'multiple':false};
			util.image(val, function(url){
				if(url.url){
					if(img.length > 0){
						img.get(0).src = url.url;
					}
					ipt.val(url.attachment);
					ipt.attr("filename",url.filename);
					ipt.attr("url",url.url);
					$("#center_qrcode").attr("src",url.url);
				}
				if(url.media_id){
					if(img.length > 0){
						img.get(0).src = "";
					}
					ipt.val(url.media_id);
					$("#center_qrcode").attr("src",url.media_id);
				}
			}, null, options);
		});
	}
	function showImageDialog_bgimg(elm, opts, options) {
		require(["util"], function(util){
			var btn = $(elm);
			var ipt = btn.parent().prev();
			var val = ipt.val();
			var img = ipt.parent().next().children();
			options = {'global':false,'class_extra':'','direct':true,'multiple':false};
			util.image(val, function(url){
				if(url.url){
					if(img.length > 0){
						img.get(0).src = url.url;
					}
					ipt.val(url.attachment);
					ipt.attr("filename",url.filename);
					ipt.attr("url",url.url);
					$("#bg_img").css("background",'url(' + url.url+ ') no-repeat');
					$("#bg_img").css("background-size",'420px 787px');
				}
				if(url.media_id){
					if(img.length > 0){
						img.get(0).src = "";
					}
					ipt.val(url.media_id);
					$("#bg_img").css("background",'url(' + url.media_id+ ') no-repeat');
					$("#bg_img").css("background-size",'420px 787px');
				}
			}, null, options);
		});
	}
		function showImageDialogT(elm, Pla, opts, options) {
		require(["util"], function(util){
			var btn = $(elm);
			var ipt = btn.parent().prev();
			var val = ipt.val();
			var img = ipt.parent().next().children();
			options = {'global':false,'class_extra':'','direct':true,'multiple':false};
			util.image(val, function(url){
				if(url.url){
					if(img.length > 0){
						img.get(0).src = url.url;
					}
					ipt.val(url.attachment);
					ipt.attr("filename",url.filename);
					ipt.attr("url",url.url);
					$("#iconpic"+Pla).attr("src",url.url);
				}
				if(url.media_id){
					if(img.length > 0){
						img.get(0).src = "";
					}
					ipt.val(url.media_id);
					$("#iconpic"+Pla).attr("src",url.media_id);
				}
			}, null, options);
		});
	}
	function showImageDialog<?php  echo $row['id'];?>(elm, opts, options) {
		require(["util"], function(util){
			var btn = $(elm);
			var ipt = btn.parent().prev();
			var val = ipt.val();
			var img = ipt.parent().next().children();
			options = {'global':false,'class_extra':'','direct':true,'multiple':false};
			util.image(val, function(url){
				if(url.url){
					if(img.length > 0){
						img.get(0).src = url.url;
					}
					ipt.val(url.attachment);
					ipt.attr("filename",url.filename);
					ipt.attr("url",url.url);
					$("#iconpic<?php  echo $row['id'];?>").attr("src",url.url);
				}
				if(url.media_id){
					if(img.length > 0){
						img.get(0).src = "";
					}
					ipt.val(url.media_id);
					$("#iconpic<?php  echo $row['id'];?>").attr("src",url.media_id);
				}
			}, null, options);
		});
	}
	function showImageDialogmf<?php  echo $row['id'];?>(elm, opts, options) {
		require(["util"], function(util){
			var btn = $(elm);
			var ipt = btn.parent().prev();
			var val = ipt.val();
			var img = ipt.parent().next().children();
			options = {'global':false,'class_extra':'','direct':true,'multiple':false};
			util.image(val, function(url){
				if(url.url){
					if(img.length > 0){
						img.get(0).src = url.url;
					}
					ipt.val(url.attachment);
					ipt.attr("filename",url.filename);
					ipt.attr("url",url.url);
					$("#mofang<?php  echo $row['id'];?>").css("background",'url(' + url.url+ ') no-repeat');
					$("#mofang<?php  echo $row['id'];?>").css("background-size",'38px 40px');
					$("#mofang<?php  echo $row['id'];?>").css("background-position",'90% center');
				}
				if(url.media_id){
					if(img.length > 0){
						img.get(0).src = "";
					}
					ipt.val(url.media_id);
					$("#mofang<?php  echo $row['id'];?>").css("background",'url(' + url.media_id+ ') no-repeat');
					$("#mofang<?php  echo $row['id'];?>").css("background-size",'38px 40px');
					$("#mofang<?php  echo $row['id'];?>").css("background-position",'90% center');					
				}
			}, null, options);
		});
	}




	function showImageDialogmf_new<?php  echo $row['id'];?>(elm, opts, options) {
		require(["util"], function(util){
			var btn = $(elm);
			var ipt = btn.parent().prev();
			var val = ipt.val();
			var img = ipt.parent().next().children();
			options = {'global':false,'class_extra':'','direct':true,'multiple':false};
			util.image(val, function(url){
				if(url.url){
					if(img.length > 0){
						img.get(0).src = url.url;
					}
					ipt.val(url.attachment);
					ipt.attr("filename",url.filename);
					ipt.attr("url",url.url);
					$("#mofang<?php  echo $row['id'];?>").find("div").css("background",'url(' + url.url+ ') no-repeat');
					$("#mofang<?php  echo $row['id'];?>").find("div").css("background-size",'100% 100%');
				}
				if(url.media_id){
					if(img.length > 0){
						img.get(0).src = "";
					}
					ipt.val(url.media_id);
					$("#mofang<?php  echo $row['id'];?>").find("div").css("background",'url(' + url.media_id+ ') no-repeat');
					 				
				}
			}, null, options);
		});
	}

	function showImageDialoglb<?php  echo $row['id'];?>(elm, opts, options) {
		require(["util"], function(util){
			var btn = $(elm);
			var ipt = btn.parent().prev();
			var val = ipt.val();
			var img = ipt.parent().next().children();
			options = {'global':false,'class_extra':'','direct':true,'multiple':false};
			util.image(val, function(url){
				if(url.url){
					if(img.length > 0){
						img.get(0).src = url.url;
					}
					ipt.val(url.attachment);
					ipt.attr("filename",url.filename);
					ipt.attr("url",url.url);
					$("#list<?php  echo $row['id'];?>").css("background",'url(' + url.url+ ') no-repeat');
					$("#list<?php  echo $row['id'];?>").css("background-size",'17px 15px');
					$("#list<?php  echo $row['id'];?>").css("background-position",'15px center');
				}    
				if(url.media_id){
					if(img.length > 0){
						img.get(0).src = "";
					}
					ipt.val(url.media_id);
					$("#list<?php  echo $row['id'];?>").css("background",'url(' + url.media_id+ ') no-repeat');
					$("#list<?php  echo $row['id'];?>").css("background-size",'17px 15px');
					$("#list<?php  echo $row['id'];?>").css("background-position",'15px center');				
				}
			}, null, options);
		});
	}	
	function deleteImage(elm){
		require(["jquery"], function($){
			$(elm).prev().attr("src", "./resource/images/nopic.jpg");
			$(elm).parent().prev().find("input").val("");
		});
	}
</script>