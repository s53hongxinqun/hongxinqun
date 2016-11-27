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

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>

							<li>
								<a href="#">订单管理</a>
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
								订单详情
								<small>
									<i class="icon-double-angle-right"></i>
									查看
								</small>
							</h1>
						</div><!-- /.page-header -->
                        
						<div class="row" style="height:100px">
							<div class="col-xs-2" style="height:50px;margin-left:40px">
								<span style="margin-left:60px;"><i  class="icon-coffee bigger-300"></i></span>
								<b>订单号</b>
							</div><!-- /.col -->
							<div class="col-xs-2" style="height:50px;margin-left:40px">
								<span style="margin-left:60px;"><i  class="icon-gift bigger-300"></i></span>
								<b>餐桌号</b>
							</div><!-- /.col -->
							<div class="col-xs-3" style="height:50px;margin-left:30px;">
								<span style="margin-left:60px;"><i  class="icon-desktop bigger-300"></i></span>
								<b>订单状态</b>
							</div><!-- /.col -->
							<div class="col-xs-3" style="height:50px;">
								<span style="margin-left:20px;"><i  class="icon-leaf bigger-300"></i></span>
								<b>下单时间</b>
							</div><!-- /.col -->
							<div class="col-xs-2" style="height:50px;margin-left:40px;font-family:微软雅黑">
								<b style="margin-left:5px;color:red;font-size:20px"><?php echo ($orderData["0"]["orderid"]); ?></b>
							</div><!-- /.col -->
							<div class="col-xs-2" style="height:50px;margin-left:50px;font-family:微软雅黑">
								<b style="margin-left:50px;color:blue;font-size:20px"><?php echo ($orderData["0"]["desk"]); ?>号桌</b>
							</div><!-- /.col -->
							<div class="col-xs-2" style="height:50px;margin-left:40px;font-family:微软雅黑">
								<b style="margin-left:50px;color:green;font-size:20px">
								<?php if($orderData['0']['status']== 0) echo '待付款'; else echo '已结账'; ?>
								</b>
							</div><!-- /.col -->
							<div class="col-xs-3" style="height:50px;font-family:微软雅黑">
								<b style="margin-left:30px;color:#f90;font-size:20px"><?=date('Y-m-d H:i:s',$orderData[0]['addtime'])?></b>
							</div><!-- /.col -->
						</div><!-- /.row -->

						<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
													
														<th>餐点名</th>
														<th>图片</th>
														<th>单价</th>
														<th>数量</th>
														<th>状态</th>

														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															下单时间
														</th>
														<th>操作</th>
													</tr>
												</thead>
												<tbody>
												  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
														<td style="line-height:100px"><?php echo ($v["name"]); ?></td>
														<td><img src="/hongxinqun/Public/<?=$v['picname'][0]['picname'];?>" width=100 height=80 alt="餐点图片"></td>
														<td style="line-height:100px">￥<?php echo ($v["price"]); ?></td>
														<td style="line-height:100px"><?php echo ($v["num"]); ?></td>
														<td style="line-height:100px"><?php if($v["status"] == 0): ?><span class="label label-sm label-warning">已下单</span>
															<?php elseif($v["status"] == 1): ?>
                                                            <span class="label label-sm label-success">已下锅</span>
                                                            <?php else: ?>
                                                            <span class="label label-sm label-inverse arrowed-in">已上桌</span><?php endif; ?>
														</td>
														<td style="line-height:100px"><?=date('Y-m-d H:i:s',$v['addtime'])?></td>
														<td style="line-height:100px">
																																		
															<a href="<?php echo U('Admin/Order/doDesk',array('id'=>$v['id']));?>" class="btn btn-xs btn-info">
																上桌
															</a>

															<a href="<?php echo U('Admin/Order/doDel',array('id'=>$v['id'],'desk'=>$orderData[0]['desk'],'foodsid'=>$v['foodsid'],'status'=>$orderData[0]['status'],'price'=>$v['price'],'num'=>$v['num'],'total'=>$orderData[0]['total'],'orderid'=>$orderData[0]['orderid']));?>" class="btn btn-xs btn-danger">
																删除
															</a>
												
														</td>
													</tr><?php endforeach; endif; else: echo "" ;endif; ?>
												</tbody>
												<thead>
													<tr style="height:60px">
													
														<th colspan="8"><span style="float:right;margin-right:20px"><span style="font-size:20px">总额：</span><b style="font-size:30px;color:#D15B47">￥<?php echo ($orderData["0"]["total"]); ?></b></span></th>
													</tr>
												</thead>
											</table>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->


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