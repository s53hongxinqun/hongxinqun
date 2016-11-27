<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html lang="cn">
<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="refresh" content="7"> -->
<title>Home</title>
<link href="/hongxinqun/Public/Home/Css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--模态框-->
<link href="/hongxinqun/Public/Home/Css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]> 
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- css:overflow:auto -->

<!--模态框over-->
<link href="/hongxinqun/Public/Home/Css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/hongxinqun/Public/Home/Css/mycss.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fastfood Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- <link href='http:///fonts.useso.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
<link href='http:///fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,700,800' rel='stylesheet' type='text/css'><link href='http:///fonts.useso.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'> -->
<script src="/hongxinqun/Public/Home/Js/jquery-1.8.3.min.js"></script>
<script src="/hongxinqun/Public/Home/Js/scripts.js" type="text/javascript"></script>
<!---- start-smoth-scrolling---->
<!--模态框-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="/hongxinqun/Public/Home/Js/bootstrap/jquery.min.js"></script>
    <script src="/hongxinqun/Public/Home/Js/bootstrap/holder.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/hongxinqun/Public/Home/Js/bootstrap/bootstrap.min.js"></script>
    <script src="/hongxinqun/Public/Home/Js/bootstrap/comment.js"></script>

<!--模态框over-->
<script type="text/javascript" src="/hongxinqun/Public/Home/Js/move-top.js"></script>
<script type="text/javascript" src="/hongxinqun/Public/Home/Js/easing.js"></script>

<!----右侧·cart ---->
<link rel="stylesheet" type="text/css" href="/hongxinqun/Public/Home/Css/base.css" />

<script type="text/javascript" src="/hongxinqun/Public/Home/Js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/hongxinqun/Public/Home/Js/common.js"></script>
<script type="text/javascript" src="/hongxinqun/Public/Home/Js/quick_links.js"></script>
<!----右侧·cart ---->
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!---End-smoth-scrolling---->
<!------ Light Box ------>
    <link rel="stylesheet" href="/hongxinqun/Public/Home/Css/swipebox.css">
    <script src="/hongxinqun/Public/Home/Js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
    <!------ Eng Light Box ------>	
    <script src="/hongxinqun/Public/Home/Js/responsiveslides.min.js"></script>
    <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <link rel="stylesheet" type="text/css" href="/hongxinqun/Public/Home/Css/style4.css" />

	<!--Animation-->
<script src="/hongxinqun/Public/Home/Js/wow.min.js"></script>
<link href="/hongxinqun/Public/Home/Css/animate.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="/hongxinqun/Public/Home/Css/mycss.css">
<script>
	new WOW().init();
</script>
<!---/End-Animation---->

	</head>

<body>
	<div class="header-banner" id="head">
		  <div class="slider">
	    <div class="callbacks_container">
	      <ul class="rslides" id="slider">
	        <?php if(is_array($getImgs)): $i = 0; $__LIST__ = $getImgs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
		          <img src="/hongxinqun/Public/<?php echo ($v["pic"]); ?>" alt="">
		          <div class="caption wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
		          	<div class="logo">
		          		<a href="<?php echo U('Home/Index/index');?>">Mr.table</a>
		          		</div>
		          	<h3>智能点餐系统</h3>
		          </div>
		        </li><?php endforeach; endif; else: echo "" ;endif; ?>
	      </ul>
	  </div>
  </div>
  <div class="copyrights">Collect from </div>


   	<div class="header-bottom">
			<div class="fixed-header">
			<div class="container">
				<div class="top-menu">
					<span class="menu"><img src="/hongxinqun/Public/Home/Images/nav.png" alt=""/> </span>
                     <ul>
						<nav class="cl-effect-5">
						   <?php if(is_array($data3)): $i = 0; $__LIST__ = $data3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li style="width:120px"><a href="<?php echo U('Home/Index/index',array('id'=>$v['id']));?>"><span data-hover="<?php echo ($v["name"]); ?>"><?php echo ($v["name"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>	
						 <!-- <li><a class="scroll" href="#service"><span data-hover="service">service</span></a></li>
						 <li><a class="scroll" href="#about"><span data-hover="about">about</span></a></li>
						 <li><a href="menu.html"><span data-hover="menus">menus</span></a></li>
						 <li><a  href="event.html"><span data-hover="event">event</span></a></li>
						 <li><a class="scroll" href="#tests"><span data-hover="Tests">tests</span></a></li>
						 <li><a class="scroll" href="#location"><span data-hover="location">location</span></a></li> -->
				 </ul>
				 <!-- script for menu -->
					<!--script-nav-->

		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>

					<!-- //script for menu -->

						<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-bottom").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-bottom").addClass("fixed");
				}else{
					$(".header-bottom").removeClass("fixed");
				}
			 });
			 
		});
		</script>
					<!-- //script-for sticky-nav -->		
			 </div>

				</div>
			</div>
		</div>


		<div class="content">
			<div class="menu-section">
					<div class="container" style="margin:10;height:400px">
						<span class="h3" style="color:white;font:25px 微软雅黑;font-weight:bold;margin-left:20px"> 菜品分类 </span>
						<button id="shuaxin" class="btn btn-danger" style="margin-left:870px">点我刷新餐点</button>
				        <br>
				        <br>
						
						<div id="chiList" class="menu-grids wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
								<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-md-2 menu-grid">
										<div style="cursor:pointer;" a="<?php echo ($v["id"]); ?>" data-toggle="modal" data-target="#foodsinfo" class="foodsinfo" onclick="foods(this)">
											<img src="/hongxinqun/Public/<?=$v['picname']?>" class="img-responsive" alt="" style="height:250px;width:161px"/>
										</div>
								    <div class="menu-info">		
										<h4><span style="color:#6cc;font-weight:bold"><?php echo ($v["foods"]); ?></span></h4>
										<h4 style="color:#cf9;font-weight:bold">￥<?php echo ($v["price"]); ?>/份</h4>

										<button type="button" class="btn btn-danger btn-lg" style="margin-left:30px" a="<?php echo ($v["id"]); ?>" onclick="add(this)">
										  加入餐车
										</button>

									 </div>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>
							
								<div class="clearfix"></div>
							</div>
						</div>
					</div>




				<div class="about-section" id="about">
					<div class="container">
						<h3>特色菜 </h3>
							<div class="main wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;margin-left:0px"> 
							  <div class="col-xs-4">
							  	
				               	    <div class="view view-fourth " >
					                    <img src="/hongxinqun/Public/<?=$data2[0]['picname']?>" />
					                    <div class="mask">
					                        <h2><?php echo ($data2["0"]["foods"]); ?></h2>
					                        <p><?php echo ($data2["0"]["detail"]); ?></p>
					                    </div>
		                           </div>
		               
		                           <button type="button" class="btn btn-danger btn-lg" style="margin-left:130px" a="<?php echo ($data2["0"]["id"]); ?>" onclick="add(this)">
										  加入餐车
								   </button>
							  </div>
							  <div class="col-xs-4">
					                <div class="view view-fourth" style="margin-left:30px">
					                    <img src="/hongxinqun/Public/<?=$data2[1]['picname']?>" />
					                    <div class="mask">
					                        <h2><?php echo ($data2["1"]["foods"]); ?></h2>
					                        <p><?php echo ($data2["1"]["detail"]); ?></p>
					                    </div>
					                </div>
					                <button type="button" class="btn btn-danger btn-lg" style="margin-left:160px" a="<?php echo ($data2["1"]["id"]); ?>" onclick="add(this)">
										  加入餐车
								   </button>
					          </div>
					          <div class="col-xs-4">
					                <div class="view view-fourth" style="margin-left:50px">
					                    <img src="/hongxinqun/Public/<?=$data2[2]['picname']?>" />
					                    <div class="mask">
					                        <h2><?php echo ($data2["2"]["foods"]); ?></h2>
					                        <p><?php echo ($data2["2"]["detail"]); ?></p>
					                    </div>
					                </div>
					                <button type="button" class="btn btn-danger btn-lg" style="margin-left:180px" a="<?php echo ($data2["2"]["id"]); ?>" onclick="add(this)">
										  加入餐车
								   </button>
				              </div>
	               		      <div class="clearfix"></div>
                		</div>
                		<div class="main wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;margin-left:0px"> 
							  <div class="col-xs-4">
							  	
				               	    <div class="view view-fourth " >
					                    <img src="/hongxinqun/Public/<?=$data2[3]['picname']?>" />
					                    <div class="mask">
					                        <h2><?php echo ($data2["3"]["foods"]); ?></h2>
					                        <p><?php echo ($data2["3"]["detail"]); ?></p>
					                    </div>
		                           </div>
		                           <button type="button" class="btn btn-danger btn-lg" style="margin-left:130px" a="<?php echo ($data2["3"]["id"]); ?>" onclick="add(this)">
										  加入餐车
								   </button>
							  </div>
							  <div class="col-xs-4">
					                <div class="view view-fourth" style="margin-left:30px">
					                    <img src="/hongxinqun/Public/<?=$data2[4]['picname']?>" />
					                    <div class="mask">
					                        <h2><?php echo ($data2["4"]["foods"]); ?></h2>
					                        <p><?php echo ($data2["4"]["detail"]); ?></p>
					                    </div>
					                </div>
					                <button type="button" class="btn btn-danger btn-lg" style="margin-left:160px" a="<?php echo ($data2["4"]["id"]); ?>" onclick="add(this)">
										  加入餐车
								   </button>
					          </div>
					          <div class="col-xs-4">
					                <div class="view view-fourth" style="margin-left:50px">
					                    <img src="/hongxinqun/Public/<?=$data2[5]['picname']?>" />
					                    <div class="mask">
					                        <h2><?php echo ($data2["5"]["foods"]); ?></h2>
					                        <p><?php echo ($data2["5"]["detail"]); ?></p>
					                    </div>
					                </div>
					                <button type="button" class="btn btn-danger btn-lg" style="margin-left:180px" a="<?php echo ($data2["5"]["id"]); ?>" onclick="add(this)">
										  加入餐车
								   </button>
				              </div>
	               		      <div class="clearfix"></div>
                		</div>
					</div>
				</div>
				
					<div class="events-section">
						<div class="container">
							<h3>特色服务</h3>
							<div class="event-grids  wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
								<div class="col-md-6 event-left">
									<div class="even-info">
										<div class="icon">
											<img id="checkout2" a="<?php session_start(); echo $_SESSION['desk']; ?>" src="/hongxinqun/Public/Home/Images/icon1.png" class="img-responsive" alt="" />
										</div>
										<div class="event-info">
												<h4>请求结账 </h4>
													<p>厨房将开始精心为你烹饪食物，让您开开心心用餐！ </p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
									<div class="col-md-6 event-right">
									<div class="even-info1">
									<div class="icon1">
										<img src="/hongxinqun/Public/Home/Images/icon2.png" id="help" a="<?php  echo $_SESSION['desk']; ?>" class="img-responsive" alt="" />
										</div>
										<div class="event-info1">
											<h4>呼叫服务</h4>
												<p>我们用心的为您解决一切问题！ </p>
											</div>
											<div class="clearfix"> </div>
											</div>
									</div>
									<div class="clearfix"></div>
							</div>
							<div class="butt">
							<button type="button" class="btn btn-primary btn-lg button2" data-toggle="modal" data-target="#myModal22" id="fstatus" a="<?php echo $_SESSION['desk']; ?>">
							 查看菜品状态
							</button>
							</div>
						</div>
				</div>


			</div>
			<div class="footer-section" style="height:400px;overflow:hidden;">
	<div class="container">
		<div class="footer-top wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
			<h1 style="color:#FB4B4B;font-size:30px;font-family:楷体;font-weight:bold">食品资讯</h1>
			<hr>
			<div style="font-size:20px;height:350px">
			    
				<table id="newslist">
				    <?php if(is_array($newList["newslist"])): $i = 0; $__LIST__ = $newList["newslist"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>

			                <td style="width:800px;">
			                	<img src="" alt="">
			                	<a href="<?php echo $v['url']; ?>" target="_blank" style="color:#9cc;float:left;margin-left:100px">
			                    <?php echo $v['title']; ?>
			                    </a>
			                </td>
			                <td style="color:black">		                	
			                <i><?php echo $v['ctime'] ?></i>
			                </td>
			            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
					
				</table>
		    </div>				
		</div>
	</div>
</div>

<script>
		  $(function(){
	            setInterval(function (){
	                $('#newslist tr').last().fadeTo(0,0).hide().prependTo('#newslist').slideDown(1000).fadeTo(1000,1);
	            },3000)
           })

</script>
			<div class="footer-section">
	<div class="container">
		<div class="footer-top wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
		<p class="h2 text-left" style="color:#fff123;">友情链接:</p>
					<div class="social-icons">
						
					<?php if(is_array($data4)): $i = 0; $__LIST__ = $data4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><a href="<?php echo ($u["url"]); ?>" class="h4" style="color:#feeeed;margin-right:20px;" target="__block"> <?php echo ($u["name"]); ?> </a><?php endforeach; endif; else: echo "" ;endif; ?>				
					</div>
					</div>
				<div class="footer-bottom">			
			</div>


		</div>
	</div>
			<!--右侧贴边导航quick_links.js控制-->
<div class="mui-mbar-tabs" style="position:fixed">
	<div class="quick_link_mian">
		<div class="quick_links_panel" >
			<div id="quick_links" class="quick_links" >
				<li>
					<a href="#" class="my_qlinks"><i class="setting"></i></a>
					<?php session_start(); ?>
				<?php if($_SESSION['phone']== null): ?><div class="ibar_login_box status_login">

						<div>
					
							<center>
							<br>								
							<br>								
							<span class="h4">当前身份：游客</span>
							<br>
						<div class="login_btnbox">
							<a href="<?php echo U('Home/Reg/index');?>" class="login_order">前往注册</a>
							<a href="<?php echo U('Home/Entry/index');?>" class="login_favorite">登录</a>
						</div>
							</center>
						</div>

						
				</div>
				<?php else: ?>

					<div class="ibar_login_box status_login">
						<div class="avatar_box">
							<p class="avatar_imgbox"><img src="/hongxinqun/Public/Home/Images/no-img_mid_.jpg" /></p>
							<ul class="user_info">
								<li>用户名：<?php echo $_SESSION['phone']?></li>
								<li>级&nbsp;别：会员</li>
							</ul>
						</div>
						<div class="login_btnbox">
							<a href="<?php echo U('Home/Edit/index',array('phone'=>$_SESSION['phone']));?>" class="login_order">修改密码</a>
							<a href="<?php echo U('Home/Public/logout');?>" class="login_favorite">退出登录</a>
						</div>
						<i class="icon_arrow_white"></i>
					</div><?php endif; ?>
				</li>
				<li id="shopCart">
					<a href="#" class="message_list" ><i class="message"></i><div class="span">我的餐车</div></a>
				</li>
				<!-- 反馈 -->
				<li>
					<a href="#" role="button" data-toggle="modal" data-target="#aa" class="mpbtn_histroy"><i class="zuji"></i></a>
					<div class="mp_tooltip">反馈<i class="icon_arrow_right_black"></i></div>
				</li>
				<!-- 反馈结束 -->
				<!-- 地图 -->
				<li>
					<a href="#" role="button" data-toggle="modal" data-target="#placeshow" class="mpbtn_histroy"><i class="zuji"></i></a>
					<div class="mp_tooltip">地图<i class="icon_arrow_right_black"></i></div>
				</li>
				<!-- 地图结束 -->

			</div>
			<div class="quick_toggle" data-toggle="modal" data-target="#tuLing">
				<li>
					<a href="#" class="mpbtn_recharge"><i class="view"></i></a>
					<div class="mp_tooltip" style=" visibility:hidden;cursor:pointer">图灵机器人<i class="icon_arrow_right_black"></i>
					</div>
				</li>
				<li>
					<a href="#"><i class="kfzx"></i></a>
					<div id="help2" a="<?php session_start();echo $_SESSION['desk']; ?>"class="mp_tooltip" style="cursor:pointer;">呼叫服务<i class="icon_arrow_right_black"></i></div>
				</li>
				<li>
					<a href="#none"><i class="mpbtn_qrcode"></i></a>
					<div class="mp_qrcode" style="display:none;"><img src="/hongxinqun/Public/Home/Images/weixin_code_145.png" width="148" height="175" /><i class="icon_arrow_white"></i></div>
				</li>
				<li><a href="#top" class="return_top"><i class="top"></i></a></li>
			</div>
		</div>
		<div id="quick_links_pop" class="quick_links_pop hide"></div>

	</div>
</div>

<!-- 反馈模态框 -->
<div class="modal fade" id="aa">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?php echo U('Home/Tickling/index');?>" method="post">
      <div class="modal-header">
      <!-- <input type="hidden" name="vip" value=""> -->
      <!-- <input type="hidden" name="time" value="<{time()}>"> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">用户反馈</h3>
      </div>
      <div class="modal-body">
        <textarea name="info"  cols="90" rows="10" style="resize:none;border:0;" placeholder="请输入您的建议"></textarea>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">提交反馈</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- 地图模态框 -->
<div class="modal fade" id="placeshow">
  <div class="modal-dialog">
    <div class="modal-content">
      <img style="margin:20px" width="500" height="400" src="http://api.map.baidu.com/staticimage?width=500&height=400&center=121.44587,31.299154&zoom=18">
      <h3>地址：上海市闸北区万荣路1188弄</h3>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!--[if lte IE 8]>
<script src="js/ieBetter.js"></script>
<![endif]-->

<script type="text/javascript" src="/hongxinqun/Public/Home/Js/parabola.js"></script>
<script type="text/javascript">
    //呼叫服务请求
    $('#help2').on('click',function(){
        var desk = $('#help').attr('a');
        $.ajax({
           type:'post',
           url:"<?php echo U('Admin/Help/doHelp');?>",
           data:{'desk':desk},
           success:function(data){
              if(data){
                alert('已呼叫服务员，请稍等。。。。');
              }
            },
           dataType:'json',
        })
    })

    // $('#help2').on('click',function(){
    //     var desk = $('#help').attr('a');
    //     $.ajax({
    //        type:'post',
    //        url:"<?php echo U('Admin/Help/doHelp');?>",
    //        data:{'desk':desk},
    //        success:function(data){
    //           if(data){
    //             alert('已呼叫服务员，请稍等。。。。');
    //           }
    //         },
    //        dataType:'json',
    //     })
    // })


	$(".quick_links_panel li").mouseenter(function(){
		$(this).children(".mp_tooltip").animate({left:-92,queue:true});
		$(this).children(".mp_tooltip").css("visibility","visible");
		$(this).children(".ibar_login_box").css("display","block");
	});
	$(".quick_links_panel li").mouseleave(function(){
		$(this).children(".mp_tooltip").css("visibility","hidden");
		$(this).children(".mp_tooltip").animate({left:-121,queue:true});
		$(this).children(".ibar_login_box").css("display","none");
	});

	// 餐车的模板在/hongxinqun/Public/Home/Js/quick_links.js
	
	$(".quick_toggle li").mouseover(function(){
		$(this).children(".mp_qrcode").show();
	});
	$(".quick_toggle li").mouseleave(function(){
		$(this).children(".mp_qrcode").hide();
	});

// 元素以及其他一些变量
var eleFlyElement = document.querySelector("#flyItem"), eleShopCart = document.querySelector("#shopCart");
var numberItem = 0;
// 抛物线运动
var myParabola = funParabola(eleFlyElement, eleShopCart, {
	speed: 400, //抛物线速度
	curvature: 0.0008, //控制抛物线弧度
	complete: function() {
		eleFlyElement.style.visibility = "hidden";
		eleShopCart.querySelector("span").innerHTML = ++numberItem;
	}
});
// 绑定点击事件
if (eleFlyElement && eleShopCart) {
	
	[].slice.call(document.getElementsByClassName("btnCart")).forEach(function(button) {
		button.addEventListener("click", function(event) {
			// 滚动大小
			var scrollLeft = document.documentElement.scrollLeft || document.body.scrollLeft || 0,
			    scrollTop = document.documentElement.scrollTop || document.body.scrollTop || 0;
			eleFlyElement.style.left = event.clientX + scrollLeft + "px";
			eleFlyElement.style.top = event.clientY + scrollTop + "px";
			eleFlyElement.style.visibility = "visible";
			
			// 需要重定位
			myParabola.position().move();			
		});
	});
}


$('#shopCart').on('click',function(){
	setCartShow(this);
 });

$("body").click(function(e){
	$('.quick_links_wrap').css('width', '0px');
});

function setCartShow(obj){
	var is_show = $('#quick_links_pop').css('display');
	// console.log(is_show);
	if(is_show == 'none'){
		$('.quick_links_wrap').css('width', '320px');
		getCartHtml();
	}else{
		$('.quick_links_wrap').css('width', '0px');
	}
}


$('.my_qlinks').on('hover',function(){
	// console.log($('.mui-mbar-tabs').css('width'));
	// console.log($(this).hasClass('current'));
 	if($(this).hasClass('current')){
 		$('.ibar_login_box').css('width', '0px');
 	}else{
 		$('.ibar_login_box').css('width', '289px');
 	}
 });


function getCartHtml(){
	$.ajax({
		url:"<?php echo U('Home/Ordercar/getCart');?>",
		dataType:'html',
		success:function(htm){
			$('#quick_links_pop').html(htm);
		},
	});
}

</script>
<!-- hxq Modal 图灵机器人-->
			<div class="modal fade" id="tuLing" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <h2 class="modal-title" id="myModalLabel">图灵机器人</h2>
			      </div>
			      <div class="modal-body">
			          <div class="container">
							<div class="row">
								<div class="col-md-6">
									<p class="alert alert-info" id="walk_info"></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<form action="" method="post" class="form" id="walk_data">
										<div class="form-group">
											<textarea name="info" id="info" cols="30" rows="10" class="form-control">

											</textarea>
										</div>
										<div class="form-group">
											<button class="btn btn-default btn-lg col-md-12">发送</button>
										</div>
									</form>
								</div>
								<script>
									$('#walk_info').hide();
									$("#info").focus();
									$('#walk_data').submit(function(){
										var info = $('#info').val().replace(/\s/g,'');
										$.ajax({
											url:"<?php echo U('Home/Index/ajaxTuling');?>",
											data:{'info':info},
											type:'post',
											success:function(data){

												$('#walk_info').html(data.text).hide().fadeIn(1000);
												$('#info').focus();
											},
											dataType:'json',
										});
										return false;
									})
								</script>

							</div>
							<div class="row" style="height:20px"></div>
							<div class="row">
								<div class="col-md-12">

								</div>
							</div>

						</div>
			      </div>
			      <!-- <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div> -->
			    </div>
			  </div>
			</div>
			
<!-- Modal -->
<div class="modal fade" id="foodsinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel" style="font-size:20px;">菜品详情</h4>
      </div>

      <div class="foodsinfos modal-body" style="height:100%;width:100">

         
      </div>
    </div>
  </div>
</div>
<!-- Modal over -->
<!-- 餐品状态模态框 -->
<div class="modal fade" id="myModal22" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel" style="font-size:20px;">餐品状态详情 </h4>
      </div>
			<div style="margin-top:20px;" class="show">

			</div>
    </div>
  </div>
</div>


<!-- 餐品状态模态框over -->


</body>
</html>	
<script>
     //ajax刷新随机餐点
	 $('#shuaxin').click(function(){
	 	 $.ajax({
	 	 	 type:'post',
	 	 	 url:"<?php echo U('Home/Assort/ajaxGetVoList');?>",
	 	 	 dataType:'json',
	 	 	 // contentType:"application/x-www-form-urlencoded; charset=utf-8",
	 	 	 success:function(data){
				var htm = '';
	 	 	 	$.each(data,function(key,value){  
		 	 	 	htm +='<div class="col-md-2 menu-grid">'
		 	 	 	htm +='<div style="cursor:pointer;" a="'+value.id+'" data-toggle="modal" data-target="#foodsinfo" class="foodsinfo" onclick="foods(this)">'	
		 	 	 	htm +='<img src="/hongxinqun/Public/'+value.picname+'" class="img-responsive" alt="" style="height:250px;width:161px"/></div>'
		 	 	 	htm +='<div class="menu-info">'
		 	 	 	htm +='<h4><span style="color:#6cc;font-weight:bold">'+value.foods+'</span></h4>'
		 	 	 	htm +='<h4 style="color:#cf9;font-weight:bold">￥'+value.price+'/份</h4>'
		 	 	 	htm +='<button type="button" class="btn btn-danger btn-lg" style="margin-left:30px" a='+value.id+' onclick="add(this)">加入餐车</button></div></div>'
				})

				// <div class="col-md-2 menu-grid">
				// <div style="cursor:pointer;" data-toggle="modal" data-target="#<?php echo ($v["id"]); ?>">
				// 	<img src="/hongxinqun/Public/<?=$v['picname']?>" class="img-responsive" alt="" style="height:250px;width:161px"/>
				// </div>
			 //    <div class="menu-info">		
				// 	<h4><span style="color:#6cc;font-weight:bold"><?php echo ($v["foods"]); ?></span></h4>
				// 	<h4 style="color:#cf9;font-weight:bold">￥<?php echo ($v["price"]); ?>/份</h4>

				// 	<button type="button" class="btn btn-danger btn-lg" style="margin-left:30px" a="<?php echo ($v["id"]); ?>" onclick="add(this)">
				// 	  加入餐车
				// 	</button>

				//  </div>
				// </div>

				$('#chiList').html(htm);
                  // console.log(data);

	 	 	 }
	 	 	 
	 	 })
	 })
   
     //ajax添加餐点
     function add(obj){
     	 var foodId = $(obj).attr('a');
     	 $.ajax({
        	type:'post',
        	url:"<?php echo U('Home/Ordercar/getFoods');?>",
        	data:{id:foodId},
        	dataType:'json',
        	success:function(data){
                 if(data.ok==1){
                 	alert('添加成功');
                 }else{
                 	alert('餐点已加入餐车，请稍等');
                 }
                 // console.log(data);
        	}
        })
     }
     //结账请求
     $('#checkout2').on('click',function(){
        var desk = $('#checkout2').attr('a');

        $.ajax({
           type:'post',
           url:"<?php echo U('Admin/Help/doCheckout');?>",
           data:{'desk':desk},
           success:function(data){
              if(data==1){
                alert('已呼叫服务员进行结账，请稍等。。。。');
                
              }else{
                alert('您有餐点未上桌，请稍等。。。。');
              }
              // console.log(data);
           },
           dataType:'json',
        })
    })

    //呼叫服务
    $('#help').on('click',function(){
        var desk = $('#help').attr('a');

        $.ajax({
           type:'post',
           url:"<?php echo U('Admin/Help/doHelp');?>",
           data:{'desk':desk},
           success:function(data){
              if(data){
                alert('已呼叫服务员，请稍等。。。。');
              }
            },
           dataType:'json',
        })
    })

    //定时刷新
    function doShuaxin(){
    	$.ajax({
    		url:"<?php echo U('Home/index/ajaxDoout');?>",
    		success:function(data){
    			if(data ==1){
    			   window.location.reload();
    			}else{

    			}
    		}
    	})
    }

    setInterval(doShuaxin,5000);

// 模态框
   // $('#fstatus').on('click',function(){
   // 		var desk = $('#fstatus').attr('a');
   // 		$.ajax({
   // 			type:'post',
   //      	url:"<?php echo U('Home/Box/index');?>",
   //      	data:{'desk':desk},
   //      	dataType:'json',
	 	//  	 success:function(data){
			// 	var box = '';
	 	//  	 	$.each(data,function(key,value){  
	  //                  box += '<tr>'
	  //                  box += '<th style="width:100px">'+value.desk+'号桌</th>'
	  //                  box += '<th style="width:100px">'+value.name+'</th>'
	  //                  box += '<th style="width:350px">'
	  //                  box += '<?php if('+value.dstatus+' == 1): ?><span >已下单</span>'
	  //                  box += '<?php elseif('+value.dstatus+' == 2): ?><span >已下锅</span>'
	  //                  box += '<?php elseif('+value.dstatus+' == 0): ?><span>烹饪完成</span>'
	  //                  box += '<?php else: ?><span >已上桌</span><?php endif; ?></th>'

	  //                  box += '</tr>';
	  //                  // box += '"'+key+'=>'+value.dstatus+'"';
	                
			// 	})


			// 	$('#boxdesk').html(box);

	 	//  	 }
              
   // 		})
   // })



// 商品详情模态框

   function foods(obj){
   		var id = $(obj).attr('a');
   		
	$.ajax({
		url:"<?php echo U('Home/Box/foodsinfo');?>",
		data:{'id':id},
		dataType:'html',
		success:function(htm){
			$('.foodsinfos').html(htm);
		},
	})
}
   // 商品详情模态框结束

$('#fstatus').on('click',function(){
   		var desk = $('#fstatus').attr('a');
	$.ajax({
		url:"<?php echo U('Home/Box/index');?>",
		data:{'desk':desk},
		dataType:'html',
		success:function(htm){
			$('.show').html(htm);
		},
	})
})
</script>