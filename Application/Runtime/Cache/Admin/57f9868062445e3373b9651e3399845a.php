<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
<<<<<<< HEAD
		<title>DevOOPS</title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="/erqi/hongxinqun/Public/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="/erqi/hongxinqun/Public/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">  
		<!-- <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'> -->
		<link href="/erqi/hongxinqun/Public/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="/erqi/hongxinqun/Public/assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="/erqi/hongxinqun/Public/assets/plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="/erqi/hongxinqun/Public/assets/plugins/select2/select2.css" rel="stylesheet">
		<link href="/erqi/hongxinqun/Public/assets/css/style.css" rel="stylesheet">
=======
		<title>Mr.Table</title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="/hongxinqun/Public/Assets/plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="/hongxinqun/Public/Assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="/hongxinqun/Public/Fontawesome/css/font-awesome.css" rel="stylesheet">
		
		<!-- <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'> -->
		<link href="/hongxinqun/Public/Assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="/hongxinqun/Public/Assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="/hongxinqun/Public/Assets/plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="/hongxinqun/Public/Assets/plugins/select2/select2.css" rel="stylesheet">
		<link href="/hongxinqun/Public/Assets/css/style.css" rel="stylesheet">
>>>>>>> hxq
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<!--Start Header-->
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				<span>Basic table</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<header class="navbar">
<<<<<<< HEAD
	<div class="container-fluid expanded-panel"  >
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="<?php echo U('Admin/Layout/index');?>">Mr.Table</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10" style="background:gary;">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<a href="#" class="show-sidebar">
						  <i class="fa fa-bars"></i>
=======
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="<?php echo U('Admin/layout/index');?>" style="font-family:Impact;"><span style="border-bottom:2px solid white">Mr.Table</span></a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<a href="#" class="show-sidebar">
						  <i class="fa fa-reply-all"></i>
>>>>>>> hxq
						</a>
						<div id="search">
							<input type="text" placeholder="search"/>
							<i class="fa fa-search"></i>
						</div>
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						<ul class="nav navbar-nav pull-right panel-menu">
							<li class="hidden-xs">
<<<<<<< HEAD
								<a href="<?php echo U('Admin/Layout/index');?>" class="modal-link">
									<i class="fa fa-bell"></i>
									
								</a>
							</li>
							<li class="hidden-xs">
								<a class="ajax-link" href="<?php echo U('Admin/Layout/calendar');?>">
									<i class="fa fa-calendar"></i>
									
								</a>
							</li>
							<li class="hidden-xs">
								<a href="<?php echo U('Admin/Layout/page_messages');?>" class="ajax-link">
									<i class="fa fa-envelope"></i>
									
=======
								<a href="index.html" class="modal-link">
									<i class="fa fa-bell"></i>
								</a>
							</li>
							<li class="hidden-xs">
								<a class="ajax-link" href="ajax/calendar.html">
									<i class="fa fa-calendar"></i>
								</a>
							</li>
							<li class="hidden-xs">
								<a href="ajax/page_messages.html" class="ajax-link">
									<i class="fa fa-envelope"></i>
>>>>>>> hxq
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									<div class="avatar">
<<<<<<< HEAD
										<img src="/erqi/hongxinqun/Public/assets/img/avatar.jpg" class="img-rounded" alt="avatar" />
=======
										<img src="/hongxinqun/Public/Assets/img/avatar.jpg" class="img-rounded" alt="avatar" />
>>>>>>> hxq
									</div>
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Welcome,</span>
										<span>Jane Devoops</span>
									</div>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">
											<i class="fa fa-user"></i>
											<span>Profile</span>
										</a>
									</li>
									<li>
<<<<<<< HEAD
										<a href="<?php echo U('Admin/Layout/page_messages');?>" class="ajax-link">
=======
										<a href="ajax/page_messages.html" class="ajax-link">
>>>>>>> hxq
											<i class="fa fa-envelope"></i>
											<span>Messages</span>
										</a>
									</li>
									<li>
<<<<<<< HEAD
										<a href="<?php echo U('Admin/Layout/gallery_simple');?>" class="ajax-link">
=======
										<a href="ajax/gallery_simple.html" class="ajax-link">
>>>>>>> hxq
											<i class="fa fa-picture-o"></i>
											<span>Albums</span>
										</a>
									</li>
									<li>
										<a href="ajax/calendar.html" class="ajax-link">
											<i class="fa fa-tasks"></i>
											<span>Tasks</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-cog"></i>
											<span>Settings</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-power-off"></i>
											<span>Logout</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--End Header-->
<!--Start Container-->
<<<<<<< HEAD
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2"  style="background:#abcdef">
			<ul class="nav main-menu" style="background:#f90;">
				<li>
					<a href="<?php echo U('Admin/User/index');?>" class="active ajax-link">
						<i class="fa fa-dashboard"></i>
=======
<div id="main" class="container-fluid" >
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu" style="background:#f90">
				<li>
					<a href="<?php echo U('Admin/info/index');?>" class="active ajax-link">
						<i class="fa fa-angellist"></i>
>>>>>>> hxq
						<span class="hidden-xs">餐厅信息管理</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
<<<<<<< HEAD
						<i class="fa fa-bar-chart-o"></i>
=======
						<i class="fa fa-yelp"></i>
>>>>>>> hxq
						<span class="hidden-xs">订单管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Order/index');?>">订单列表</a></li>
<<<<<<< HEAD
						<li><a class="ajax-link" href="ajax/charts_flot.html">Google Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_google.html">Google Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_morris.html">Morris Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_coindesk.html">CoinDesk realtime</a></li>
=======
						<li><a class="ajax-link" href="ajax/charts_flot.html">Flot Charts</a></li>
>>>>>>> hxq
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
<<<<<<< HEAD
						<i class="fa fa-table"></i>
						 <span class="hidden-xs">用户管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/User/index');?>">用户列表</a></li>
=======
						<i class="fa fa-coffee"></i>
						 <span class="hidden-xs">餐桌管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Desk/index');?>">餐桌列表</a></li>
>>>>>>> hxq
						<li><a class="ajax-link" href="ajax/tables_datatables.html">Data Tables</a></li>
						<li><a class="ajax-link" href="ajax/tables_beauty.html">Beauty Tables</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
<<<<<<< HEAD
						<i class="fa fa-pencil-square-o"></i>
						 <span class="hidden-xs">餐点管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Food/index');?>">餐点列表</a></li>
=======
						<i class="fa fa-list"></i>
						 <span class="hidden-xs">分类管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Assort/index');?>">分类列表</a></li>
>>>>>>> hxq
						<li><a class="ajax-link" href="ajax/forms_layouts.html">Layouts</a></li>
						<li><a class="ajax-link" href="ajax/forms_file_uploader.html">File Uploader</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
<<<<<<< HEAD
						<i class="fa fa-desktop"></i>
						 <span class="hidden-xs">分类管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Assort/index');?>">分类列表</a></li>
						<li><a class="ajax-link" href="ajax/ui_buttons.html">Buttons</a></li>
						<li><a class="ajax-link" href="ajax/ui_progressbars.html">Progress Bars</a></li>
						<li><a class="ajax-link" href="ajax/ui_jquery-ui.html">Jquery UI</a></li>
						<li><a class="ajax-link" href="ajax/ui_icons.html">Icons</a></li>
=======
						<i class="fa fa-cutlery"></i>
						 <span class="hidden-xs">餐点管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Food/index');?>">餐点列表</a></li>
						<li><a class="ajax-link" href="ajax/ui_buttons.html">Buttons</a></li>
						<li><a class="ajax-link" href="ajax/ui_progressbars.html">Progress Bars</a></li>
>>>>>>> hxq
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
<<<<<<< HEAD
						<i class="fa fa-list"></i>
						 <span class="hidden-xs">餐桌管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Desk/index');?>">分类列表</a></li>
						<li><a class="ajax-link" href="ajax/page_404.html">Error 404</a></li>
						<li><a href="ajax/page_500.html">Error 500</a></li>
=======
						<i class="fa fa-user"></i>
						 <span class="hidden-xs">员工管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/User/index');?>">员工列表</a></li>
						<li><a class="ajax-link" href="ajax/page_register.html">Register</a></li>
>>>>>>> hxq
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
<<<<<<< HEAD
						<i class="fa fa-map-marker"></i>
=======
						<i class="fa fa-user-md"></i>
>>>>>>> hxq
						<span class="hidden-xs">会员管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Vip/index');?>">会员列表</a></li>
						<li><a class="ajax-link" href="ajax/map_fullscreen.html">Fullscreen map</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
<<<<<<< HEAD
						<i class="fa fa-picture-o"></i>
=======
						<i class="fa fa-comments"></i>
>>>>>>> hxq
						 <span class="hidden-xs">评价管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Comment/index');?>">评价列表</a></li>
						<li><a class="ajax-link" href="ajax/gallery_flickr.html">Flickr Gallery</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
<<<<<<< HEAD
						<i class="fa fa-home"></i>
=======
						<i class="fa fa-book"></i>
>>>>>>> hxq
						 <span class="hidden-xs">统计管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Count/index');?>">统计列表</a></li>
						<li><a class="ajax-link" href="ajax/gallery_flickr.html">Flickr Gallery</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!--Start Content-->
<<<<<<< HEAD
		<div id="content" class="col-xs-12 col-sm-10">
			<div class="preloader">
				<img src="img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
=======
		<div id="content" class="col-xs-12 col-sm-8">
			<div class="preloader">
				<img src="/hongxinqun/Public/Assets/img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
			</div>
			<div id="ajax-content"></div>
		</div>
		<!--End Content-->
		<!--Start Content-->
		<div id="content" class="col-xs-2 col-sm-2">
			<div class="preloader">
				<img src="/hongxinqun/Public/Assets/img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
>>>>>>> hxq
			</div>
			<div id="ajax-content"></div>
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<<<<<<< HEAD
<script src="/erqi/hongxinqun/Public/assets/plugins/jquery/jquery-2.1.0.min.js"></script>
<script src="/erqi/hongxinqun/Public/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/erqi/hongxinqun/Public/assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="/erqi/hongxinqun/Public/assets/plugins/justified-gallery/jquery.justifiedgallery.min.js"></script>
<script src="/erqi/hongxinqun/Public/assets/plugins/tinymce/tinymce.min.js"></script>
<script src="/erqi/hongxinqun/Public/assets/plugins/tinymce/jquery.tinymce.min.js"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="/erqi/hongxinqun/Public/assets/js/devoops.js"></script>
=======
<script src="/hongxinqun/Public/Assets/plugins/jquery/jquery-2.1.0.min.js"></script>
<script src="/hongxinqun/Public/Assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/hongxinqun/Public/Assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="/hongxinqun/Public/Assets/plugins/justified-gallery/jquery.justifiedgallery.min.js"></script>
<script src="/hongxinqun/Public/Assets/plugins/tinymce/tinymce.min.js"></script>
<script src="/hongxinqun/Public/Assets/plugins/tinymce/jquery.tinymce.min.js"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="/hongxinqun/Public/Assets/js/devoops.js"></script>
>>>>>>> hxq
</body>
</html>