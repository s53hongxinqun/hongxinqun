<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
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
						</a>
						<div id="search">
							<input type="text" placeholder="search"/>
							<i class="fa fa-search"></i>
						</div>
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						<ul class="nav navbar-nav pull-right panel-menu">
							<li class="hidden-xs">
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
									
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									<div class="avatar">
										<img src="/erqi/hongxinqun/Public/assets/img/avatar.jpg" class="img-rounded" alt="avatar" />
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
										<a href="<?php echo U('Admin/Layout/page_messages');?>" class="ajax-link">
											<i class="fa fa-envelope"></i>
											<span>Messages</span>
										</a>
									</li>
									<li>
										<a href="<?php echo U('Admin/Layout/gallery_simple');?>" class="ajax-link">
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
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2"  style="background:#abcdef">
			<ul class="nav main-menu" style="background:#f90;">
				<li>
					<a href="<?php echo U('Admin/User/index');?>" class="active ajax-link">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">餐厅信息管理</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">订单管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Order/index');?>">订单列表</a></li>
						<li><a class="ajax-link" href="ajax/charts_flot.html">Google Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_google.html">Google Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_morris.html">Morris Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_coindesk.html">CoinDesk realtime</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs">用户管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/User/index');?>">用户列表</a></li>
						<li><a class="ajax-link" href="ajax/tables_datatables.html">Data Tables</a></li>
						<li><a class="ajax-link" href="ajax/tables_beauty.html">Beauty Tables</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-pencil-square-o"></i>
						 <span class="hidden-xs">餐点管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Food/index');?>">餐点列表</a></li>
						<li><a class="ajax-link" href="ajax/forms_layouts.html">Layouts</a></li>
						<li><a class="ajax-link" href="ajax/forms_file_uploader.html">File Uploader</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-desktop"></i>
						 <span class="hidden-xs">分类管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Assort/index');?>">分类列表</a></li>
						<li><a class="ajax-link" href="ajax/ui_buttons.html">Buttons</a></li>
						<li><a class="ajax-link" href="ajax/ui_progressbars.html">Progress Bars</a></li>
						<li><a class="ajax-link" href="ajax/ui_jquery-ui.html">Jquery UI</a></li>
						<li><a class="ajax-link" href="ajax/ui_icons.html">Icons</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-list"></i>
						 <span class="hidden-xs">餐桌管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Desk/index');?>">分类列表</a></li>
						<li><a class="ajax-link" href="ajax/page_404.html">Error 404</a></li>
						<li><a href="ajax/page_500.html">Error 500</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-map-marker"></i>
						<span class="hidden-xs">会员管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Vip/index');?>">会员列表</a></li>
						<li><a class="ajax-link" href="ajax/map_fullscreen.html">Fullscreen map</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-picture-o"></i>
						 <span class="hidden-xs">评价管理</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="<?php echo U('Admin/Comment/index');?>">评价列表</a></li>
						<li><a class="ajax-link" href="ajax/gallery_flickr.html">Flickr Gallery</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-home"></i>
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
		<div id="content" class="col-xs-12 col-sm-10">
			<div class="preloader">
				<img src="img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
			</div>
			<div id="ajax-content"></div>
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src="/erqi/hongxinqun/Public/assets/plugins/jquery/jquery-2.1.0.min.js"></script>
<script src="/erqi/hongxinqun/Public/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/erqi/hongxinqun/Public/assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="/erqi/hongxinqun/Public/assets/plugins/justified-gallery/jquery.justifiedgallery.min.js"></script>
<script src="/erqi/hongxinqun/Public/assets/plugins/tinymce/tinymce.min.js"></script>
<script src="/erqi/hongxinqun/Public/assets/plugins/tinymce/jquery.tinymce.min.js"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="/erqi/hongxinqun/Public/assets/js/devoops.js"></script>
</body>
</html>