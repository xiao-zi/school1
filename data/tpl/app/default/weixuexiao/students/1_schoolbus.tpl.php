<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<title>轨迹</title>
<style type="text/css">
body, html, #allmap {width: 100%;height: 100%;overflow: hidden;margin: 0;}
#address_distance_tips {text-align: center;z-index: 999;display: none;width: 100%;height: 40px;line-height: 20px;box-sizing: border-box;padding: 10px;font-size: 14px;
position: fixed;top: 0;left: 0;color: #fff;background-color: rgba(0,0,0,0.8);}
</style>
<script>
var _hmt = _hmt || [];
(function () {
var hm = document.createElement("script");
hm.src = "https://hm.baidu.com/hm.js?e6c44a88bd78113bfe161250284d9863";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>
<?php  echo register_jssdks();?>
<input type="hidden" id="allbus" value='<?php  echo $allbuss;?>'>
<script type="text/javascript" src="<?php echo MODULE_URL;?>public/mobile/js/jquery-1.10.1.min.js?v=4.8"></script>
<script src="//api.map.baidu.com/api?v=2.0&ak=6a84aab54c14e9561287b6d577f4c616"></script>
    <script type="text/javascript">
        window.onload = function () {
            // 百度地图API功能
            draw_time = 0;
            var if_has_data = false;
			<?php  if($old_point) { ?>
				var old_point=[<?php  echo $old_point;?>];
				var allbus = <?php  echo $allbuss;?>;
			<?php  } else { ?>
				var old_point=[];
			<?php  } ?>
           
            for (var i = 0; i < old_point.length; i++) {
                if (old_point[i].length != 0) {
                    if_has_data = true;
                    break;
                }
            }

            if (if_has_data == false) {
                document.getElementById('address_distance_tips').style.display = 'block';
                document.getElementById('address_distance_tips').textContent = '当前无校车在线';
            }
			<?php  if($hasbus) { ?>
                document.getElementById('address_distance_tips').style.display = 'block';
                document.getElementById('address_distance_tips').textContent = '当前有'+old_point.length+'辆校车在线,点击校车显示名称';
			<?php  } ?>	
                var new_point = [];
                var my_address_point;
                var mk;
                //var pt;
                var address_info = '';
                var marker2 = [];
                var map = new BMap.Map("allmap");

                map.centerAndZoom(new BMap.Point(old_point[0][0], old_point[0][1]), 16);
            
                map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
                map.enableScrollWheelZoom(true);
                map.addControl(new BMap.NavigationControl({ anchor: BMAP_ANCHOR_BOTTOM_RIGHT, type: BMAP_NAVIGATION_CONTROL_ZOOM }));  //右下角，仅包含缩放按钮

                map.addControl(new BMap.MapTypeControl({ mapTypes: [BMAP_NORMAL_MAP, BMAP_HYBRID_MAP] }));     //2D图，卫星图
                var gc = new BMap.Geocoder();

                //创建信息窗口
                var myIcon = new BMap.Icon("<?php echo OSSURL;?>public/mobile/img/link_fx.png?v=0316", new BMap.Size(52, 52));
                var arr_index = draw_time;
                marker2[arr_index] = [];
                for (var i = 0; i < old_point.length; i++) {
                    if (old_point[i].length == 0) {
                        marker2[arr_index][i] = '';
                    } else {
                        var pt = new BMap.Point(old_point[i][0], old_point[i][1]);

                        marker2[arr_index][i] = new BMap.Marker(pt,{icon:myIcon});
                        map.centerAndZoom(pt,16);

                        //map.clearOverlays();
                        if (arr_index - 1 > 0) {
                            map.removeOverlay(marker2[i][(arr_index - 1)]);
                        }
                        map.addOverlay(marker2[arr_index][i]);
						let keyss = i;
                        marker2[arr_index][i].addEventListener("click", function () {
							var thisbusname = allbus[keyss].name;
                            var pt2 = this.point;
							map.centerAndZoom(pt2, 16);
                            gc.getLocation(this.point, function (rs) {
                                var addComp = rs.addressComponents;
                                address_info = addComp.street + "," + addComp.streetNumber;
                                var infoWindow = new BMap.InfoWindow(thisbusname+ ":" +address_info);  // 创建信息窗口对象
                                map.openInfoWindow(infoWindow, pt2);
                            });

                        });

                    }
                }

            

            //获取两点间距离
            function get_distance(point1, point2) {
                //console.log((map.getDistance(point1,point2)).toFixed(2));
                //判断两点距离大小
                if (!!point1) {
                    if ((map.getDistance(point1, point2)).toFixed(2) < 500) {
                        //console.log('小于:' + (map.getDistance(point1, point2)).toFixed(2));
                        //alert('距离小于1公里');
                        return true;

                    } else {
                        //console.log('大于:' + (map.getDistance(point1, point2)).toFixed(2));
                        return false;
                        //document.getElementById('address_distance_tips').style.display='none';
                    }
                }
                return false;
            }


            function draw_line(point1, point2) {
                var longitude = point1[0];
                var latitude = point1[1];
                var longitude_new = point2[0];
                var latitude_new = point2[1];
                if (longitude == longitude_new && latitude == latitude_new) {
                } else {
                    var polyline = new BMap.Polyline([
                    new BMap.Point(longitude, latitude),
                    new BMap.Point(longitude_new, latitude_new)

                    ], { strokeColor: "blue", strokeWeight: 3, strokeOpacity: 0.5 });
                    map.addOverlay(polyline);
                }
            }
			
			function driv_line(point1, point2) {
				var p1 = new BMap.Point(point1[0],point1[1]);
				var p2 = new BMap.Point(point2[0],point2[1]);
				//var driving = new BMap.DrivingRoute(map, {renderOptions:{map: map, autoViewport: false}});
				//driving.search(p1, p2);
				var driving = new BMap.DrivingRoute(map, {renderOptions:{map: map, autoViewport: true},
				            onPolylinesSet:function(routes) { 
				            searchRoute = routes[0].getPolyline();//导航路线
				            map.addOverlay(searchRoute); 
				        }, 
				        onMarkersSet:function(routes) {
						    var myIcon = new BMap.Icon("http://developer.baidu.com/map/jsdemo/img/Mario.png", new BMap.Size(5,5));
						    var markerstart = new BMap.Marker(routes[0].marker.getPosition() ,{icon:myIcon}); // 创建点
						    map.removeOverlay(routes[0].marker); //删除起点
						    map.addOverlay(markerstart);  
						    var markerend = new BMap.Marker(routes[1].marker.getPosition() ,{icon:myIcon}); // 创建点
						    map.removeOverlay(routes[1].marker);//删除终点
						              map.addOverlay(markerend);  
				        }});
				driving.search(p1, p2);
			}
			
            function ajax_get_point() {
				let allbusss = $("#allbus").val();
                $.ajax({
                    url: "<?php  echo $this->createMobileUrl('comajax', array('op' => 'AddGather','schoolid' => $schoolid), true)?>",
                    type: 'post',
                    dataType: 'json',
                    data: {schoolid: "<?php  echo $schoolid;?>",allbus:allbusss},
                    success: function(data) {
                        draw_time++;
                        setTimeout(function() {
						    
								//console.log(data.data);
								get_myaddress();
								var new_point = [];
								var arr_index = draw_time;
								marker2[arr_index] = [];
								new_point = [];
								$("#allbus").val(JSON.stringify(data.allbus));
								var data_arr = data.new_point.split(';');
								if_has_data = false;
								for (var i = 0; i < data_arr.length; i++) {
									new_point.push(eval(data_arr[i]));
									if (new_point[i].length != 0) {
										if_has_data = true;
									}
								}
								//console.log('new_point:');
								console.log(new_point);

								var check_distance = false;
								var close_point = '';
								for (var i = 0; i < old_point.length; i++) {
									if (old_point[i].length != 0 && new_point[i].length != 0) {
										var ptss = new BMap.Point(new_point[i][0], new_point[i][1]);
										var oldptss = new BMap.Point(old_point[i][0], old_point[i][1]);
										if(!get_distance(oldptss, ptss)){
											driv_line(old_point[i], new_point[i]);//大于1公里绘制驾驶路线
										}else{
											draw_line(old_point[i], new_point[i]);//小于1公里绘制直线
										}
									}
									if (new_point[i].length != 0) {
										var pt = new BMap.Point(new_point[i][0], new_point[i][1]);
										if (!check_distance && !get_distance(my_address_point, pt)) {
											//document.getElementById('address_distance_tips').style.display = 'none';
										} else {
											if (close_point == '') {
												close_point = pt;
											}
											check_distance = true;
											document.getElementById('address_distance_tips').style.display = 'block';
											document.getElementById('address_distance_tips').textContent = '距离小于1公里';
										}


										marker2[arr_index][i] = new BMap.Marker(pt, { icon: myIcon });
										//map.centerAndZoom(pt, 16);
										if (arr_index - 1 >= 0) {
											map.removeOverlay(marker2[(arr_index - 1)][i]);
										}
										map.addOverlay(marker2[arr_index][i]);
										let keyss = i;
										marker2[arr_index][i].addEventListener("click", function() {
										   // console.log(arr_index);
											var pt2 = this.point;
											var thisbusname = allbus[keyss].name;
											//map.centerAndZoom(pt2, 16);
											gc.getLocation(this.point, function(rs) {
												var addComp = rs.addressComponents;
												address_info = addComp.street + ", " + addComp.streetNumber;
												var infoWindow = new BMap.InfoWindow(thisbusname+ ":" + address_info); 
												map.openInfoWindow(infoWindow, pt2);
											});
										});

									} else {
										marker2[arr_index][i] = '';
									}

								}

								if (close_point != '') {
									//map.centerAndZoom(close_point, 16);
								}
								old_point = [];
								old_point = new_point;
								ajax_get_point();
							
                        }, 1000);
                    },
                    error: function() {

                    }
                });
            }
			ajax_get_point();
            // 获取自己经纬度
            var geolocation = new BMap.Geolocation();
            function get_myaddress() {
                geolocation.getCurrentPosition(function(r) {
                    if (this.getStatus() == BMAP_STATUS_SUCCESS) {
                        my_address_point = r.point;
                        if (!!mk) {
                            map.removeOverlay(mk);
                            mk = new BMap.Marker(r.point);
                            map.addOverlay(mk);
                        } else {
                            mk = new BMap.Marker(r.point);
                            map.addOverlay(mk);
                            // map.panTo(r.point);
                            var check_distance = false;
                            var close_point = '';
                            for (var i = 0; i < old_point.length; i++) {
                                var pt = new BMap.Point(old_point[i][0], old_point[i][1]);
                                if (!check_distance && !get_distance(my_address_point, pt)) {
                                   // document.getElementById('address_distance_tips').style.display = 'none';

                                } else {
                                    check_distance = true;
                                    if (close_point == '') {
                                        close_point = pt;
                                    }

                                    document.getElementById('address_distance_tips').style.display = 'block';
                                    document.getElementById('address_distance_tips').textContent = '距离小于1公里';
                                }
                            }
                            if (close_point != '') {
                                map.centerAndZoom(close_point, 16);
                            }

                        }
						var marker1 = new BMap.Marker(new BMap.Point(+r.point.lng+','+r.point.lat));  // 创建标注
						map.addOverlay(marker1); 
                    } else {
                        alert('failed' + this.getStatus());
                    }
                }, { enableHighAccuracy: true });
            }
            get_myaddress();
			

				var scholIcon = new BMap.Icon("<?php echo OSSURL;?>public/mobile/img/school.png?v=0316", new BMap.Size(60, 60));
				var pt = new BMap.Point('<?php  echo $school['lng'];?>', '<?php  echo $school['lat'];?>');
				marker3 = new BMap.Marker(pt,{icon:scholIcon});
				map.addOverlay(marker3);
			
            // });

        }

    </script>

</head>

<body>
    <div id="address_distance_tips"></div>
    <div id="allmap"></div>
<script>;</script><script type="text/javascript" src="http://school.test/app/index.php?i=1&c=utility&a=visit&do=showjs&m=weixuexiao"></script></body>
</html>
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