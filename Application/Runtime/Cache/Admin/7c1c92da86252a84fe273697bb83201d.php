<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Mr.Table</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- 		<meta http-equiv="refresh" content="30"> -->
		<!-- basic styles -->
		<link href="/hongxinqun/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/hongxinqun/Public/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="/hongxinqun/Public/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/hongxinqun/Public/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/hongxinqun/Public/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/hongxinqun/Public/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<script src="/hongxinqun/Public/assets/js/ace-extra.min.js"></script>
		<!--这个CSS会改整体样式-->
		<!-- <link rel="stylesheet" href="/hongxinqun/Public/admin/css/pintuer.css"> -->
    	<link rel="stylesheet" href="/hongxinqun/Public/admin/css/admin.css">
    	

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<!--[if !IE]> -->

		<script src="/hongxinqun/Public/js/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/hongxinqun/Public/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar" style="background:#000000;">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="header bg-main" style="margin:0;background:#000000;">
				  <div class="logo margin-big-left fadein-top">
				    <h1><img src="/hongxinqun/Public/admin/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
				  </div>
				  <div class="head-l"><a class="button button-little bg-green" href="<?php echo U('Home/Index/index');?>" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo U('Login/logout');?>"><span class="icon-power-off"></span> 退出登录</a> </div>
				</div>
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-food"></i>
							<span style="font:21px 华文彩云;">&nbsp;Mr.Table&nbsp;&nbsp;</span><span style="font:21px 幼圆">智能点餐系统</span>
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner" >
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li>
							<a href="<?php echo U('Admin/Comment/index');?>">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制器 </span>
							</a>
						</li>
						<li class="active">
							<a href="<?php echo U('Admin/Index/index');?>" style="background:#CCFFCC">
								<i class="icon-dashboard"></i>
								<span class="menu-text" > 餐厅信息列表 </span>
							</a>
						</li>

						<li>
							<a href="<?php echo U('Admin/Order/index');?>">
								<i class="icon-text-width"></i>
								<span class="menu-text"> 订单管理 </span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle"  style="background:#CCFFCC">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 餐点管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Food/index');?>">
										<i class="icon-double-angle-right"></i>
										餐点列表
									</a>
								</li>

								<li>
									<a href="<?php echo U('Admin/Food/add');?>">
										<i class="icon-double-angle-right"></i>
										餐点添加
									</a>
								</li>
								<li>
									<a href="<?php echo U('Admin/Food/yanzheng');?>">
										<i class="icon-double-angle-right"></i>
										短信验证
									</a>
								</li>

							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle" >
								<i class="icon-list"></i>
								<span class="menu-text"> 用户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "User"): ?>style="display:block"<?php endif; ?>>
								<li>
									<a href="<?php echo U('Admin/User/index');?>">
										<i class="icon-double-angle-right"></i>
										用户列表
									</a>
								</li>
								<!-- 第一次操作结束 -->
							</ul>
						</if>
						</li>
							

						<li>
							<a href="#" class="dropdown-toggle"  style="background:#CCFFCC">
								<i class="icon-list"></i>
								<span class="menu-text"> 角色管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" >
								<li >
									<a href="<?php echo U('Role/index');?>">
										<i class="icon-double-angle-right"></i>
										角色列表
									</a>
								</li>
							</ul>
						</li>
						<!-- 第二次修改结束 -->
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 节点管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" >
								<li>
									<a href="<?php echo U('Node/index');?>">
										<i class="icon-double-angle-right"></i>
										节点列表
									</a>
								</if>
								</li>
							</ul>
						</li>
<!-- 餐桌管理 -->
						<li>
							<a href="#" class="dropdown-toggle"  style="background:#CCFFCC">
								<i class="icon-edit"></i>
								<span class="menu-text"> 餐桌管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Desk/index');?>">
										<i class="icon-double-angle-right"></i>
										餐桌列表
									</a>
								</li>

								<li>
									<a href="<?php echo U('Admin/Desk/add');?>">
										<i class="icon-double-angle-right"></i>
										餐桌添加
									</a>
								</li>

							</ul>
						</li>
						<!-- 餐桌管理结束 -->

						<!-- 分类管理	 -->
						<li>
							<a href="#" class="dropdown-toggle"  >
								<i class="icon-list-alt"></i>
								<span class="menu-text"> 分类管理 </span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Type/index');?>">
										<i class="icon-double-angle-right"></i>
										分类类表
									</a>
								</li>
								<li>
									<a href="<?php echo U('Admin/Type/add');?>">
										<i class="icon-double-angle-right"></i>
										分类添加
									</a>
								</li>

							</ul>

						</li>
						<!-- 分类管理结束 -->

			<!-- 会员管理 -->
						<li>
							<a href="#" class="dropdown-toggle"  style="background:#CCFFCC">
								<i class="icon-calendar"></i>
								<span class="menu-text"> 会员管理</span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Vip/index');?>">
										<i class="icon-double-angle-right"></i>
										会员列表
									</a>
								</li>
								<li>
									<a href="<?php echo U('Admin/Vip/add');?>">
										<i class="icon-double-angle-right"></i>
										会员添加
									</a>
								</li>

							</ul>
						</li>
						<!-- 会员管理结束 -->


						<li>
							<a href="#" class="dropdown-toggle" >
								<i class="icon-tag"></i>
								<span class="menu-text"> 统计管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Count/user');?>">
										<i class="icon-double-angle-right"></i>
										用户统计
									</a>
								</li>

								<li>
									<a href="<?php echo U('Admin/Count/role');?>">
										<i class="icon-double-angle-right"></i>
										角色统计
									</a>
								</li>


							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle" style="background:#CCFFCC">
								<i class="icon-file-alt"></i>

								<span class="menu-text">
									厨师管理
								</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Cooking/index');?>">
										<i class="icon-double-angle-right"></i>
									   已点餐点列表
									</a>
								</li>
							</ul>
						</li>
	<!-- 传菜员管理 -->
						<li>
							<a href="<?php echo U('Admin/Dish/index');?>" class="dropdown-toggle" >
								<i class="icon-calendar"></i>
								<span class="menu-text"> 上菜员管理</span>
								<b class="arrow icon-angle-down"></b>
							</a>
	
						</li>
						<!-- 上菜员管理结束 -->
						<li>
							<a href="<?php echo U('Admin/Limg/index');?>" style="background:#CCFFCC">
								<i class="icon-text-width"></i>
								<span class="menu-text"> 轮播图管理 </span>
							</a>
						</li>
													<!-- 友情链接管理 -->
						<li>
							<a href="#" class="dropdown-toggle"  >
								<i class="icon-calendar"></i>
								<span class="menu-text"> 友情管理</span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Url/index');?>">
										<i class="icon-double-angle-right"></i>
										友情列表
									</a>
								</li>
								<li>
									<a href="<?php echo U('Admin/Url/add');?>">
										<i class="icon-double-angle-right"></i>
										添加链接
									</a>
								</li>
							</ul>
						</li>
						<!-- 友情链接管理结束 -->
						  <!-- 反馈管理 -->
						<li>
							<a href="<?php echo U('Admin/Tickling/index');?>" style="background:#CCFFCC">
								<i class="icon-text-width"></i>
								<span class="menu-text"> 反馈管理 </span>
							</a>
						</li>
					<!-- 反馈管理结束 -->
					<!-- 评价管理 -->
						<li>
							<a href="<?php echo U('Admin/Comment/index');?>" class="dropdown-toggle"  >
								<i class="icon-calendar"></i>
								<span class="menu-text"> 评价管理</span>
								<b class="arrow icon-angle-down"></b>
							</a>
						</li>
						<!-- 评价管理结束 -->
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

               
		<div class="main-content">
			<div class="breadcrumbs" id="breadcrumbs">
				<script type="text/javascript">
					try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
				</script>

				<script type="text/javascript">
				  jQuery(function($){
					$('#picname').on('change',function(){

						var src_p = window.URL.createObjectURL(this.files[0]);
						// console.log(src_p);
						$('#change_img').attr('src', src_p);
					    
					})


					var time=3;
					var timer=null;
					var mess =null;
					var savemess=null;
					function run(){
					    // console.log(1);
					     mess = time+'s后可重新发送验证码';
					     time--;

					    if(time<0){
					        mess='';
					        clearInterval(timer);
					        $('#xixi').css('display','inline-block');
					        $('#hehe').css('display','none');
					        time=3;
					    }
					    $('#hehe').html(mess);

					}
					$('#xixi').click(function(){
				    // console.log($('.phone_code').val());
				    $(this).css('display','none');
				    $('#hehe').css('display','inline-block'); 
				    timer = setInterval(run,1000);
				    $.ajax({
				        type:'post',
				        dataType:'json',
				        url:"<?php echo U('Admin/Food/mess');?>",
				        data:{'code':1},
				        success:function(data){
				            // console.log(data.code);
				            savemess = data.code;
				        }
				    })
				})

					$('#txt_vmess').blur(function(){
						 var postmess = $('#txt_vmess').val();
						 // console.log(postmess);
						 if(postmess == savemess){
						 	$('#heihei').html('验证码正确');
						 }else{
						 	$('#heihei').html('验证码错误');
						 }
					})
					console.log(savemess);

	 })
			    </script>

				<ul class="breadcrumb">
					<li>
						<i class="icon-home home-icon"></i>
						<a href="#">首页</a>
					</li>


					<li>
						<a href="#">我的短信验证</a>
					</li>

				</ul><!-- .breadcrumb -->

				<div class="nav-search" id="nav-search">
					<form class="form-search">
						<span class="input-icon">
							<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
							<i class="icon-search nav-search-icon"></i>
						</span>
					</form>
				</div><!-- #nav-search -->
			</div>

			<div class="page-content">
				<div class="page-header">
					<h1>
						短信验证
						<small>
							<i class="icon-double-angle-right"></i>
							验证
						</small>
					</h1>
				</div><!-- /.page-header -->
                <div class="col-xs-6">
		    <form id="register_form" method="post" action="<?php echo U('Admin/Food/doYanzheng');?>">
            <div id="bd">
				<!--默认-->
				<div class="shadow_box">
						
						<div class="body">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
								<tr>
									<td class="t">手机号码</td>
									<td class="z_index2">
										<input name="phone" id="txt_username" autocomplete="off" MaxLength="40" 
											tabindex="1" placeholder="请输入您的手机号码"
											type="text" class="text" /><span id="spn_username_ok" class="icon_yes" style="display: none;"></span>

										<span id="J_tipUsername" class="cue warn"></span>
									</td>
								</tr>
															
								<!--该出填写手机获取验证码开始-->
                                <tr>
                                    <td class="t j-vcode">短信验证码</td>
                                    <td class="j-vcode">
                                        <input class="text pin" type="text" id="txt_vmess" name="txt_vmess" autocomplete="off" placeholder="请输入短信验证码" MaxLength="4" tabindex="5"/>
                                       <a id="xixi" style="cursor:pointer" class="code_picww">点击获取验证码</a>
                                       <span id="hehe" style="vertical-align:middle;margin-top:10px;"></span>
                                       <b id="heihei"></b>
                                        <span id="spn_vmess_ok" class="icon_yes pin_i" style="display: none;"></span>
                                        <span id="J_tipVmess" class="cue"></span>
                                        <!--<span class="icon_wrong pin_i"></span>-->
                                    </td>
                                </tr>														
								<tr>
									<td class="t">&nbsp;</td>

								<td><input id="J_submitRegister" type="submit" value="立即验证" class="btn_login" tabindex="10"></td>
								</tr>
							</table>
						</div>
				</div>
			</div>
        </form>
                
			</div>
			</div><!-- /.page-content -->
		</div><!-- /.main-content -->
	

				  </div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择皮肤</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl">切换到左边</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								切换窄屏
								<b></b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/hongxinqun/Public/assets/js/bootstrap.min.js"></script>
		<script src="/hongxinqun/Public/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/hongxinqun/Public/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/hongxinqun/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/hongxinqun/Public/assets/js/jquery.slimscroll.min.js"></script>
		<script src="/hongxinqun/Public/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/hongxinqun/Public/assets/js/jquery.sparkline.min.js"></script>
		<script src="/hongxinqun/Public/assets/js/flot/jquery.flot.min.js"></script>
		<script src="/hongxinqun/Public/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/hongxinqun/Public/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="/hongxinqun/Public/assets/js/ace-elements.min.js"></script>
		<script src="/hongxinqun/Public/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
				});
			
			
			
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
			
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').slimScroll({
					height: '300px'
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				});
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
				
			
			})
		</script>
		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
		</script>
	<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>