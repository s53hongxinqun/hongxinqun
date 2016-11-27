<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="cn"class="beijin">
<head>
	<meta charset="UTF-8">
	<title>Mr.Tabal - 用户登录</title>
	<link type="text/css" href="/hongxinqun/Public/home/css/denglu.css" rel="stylesheet" />
	<link href="/hongxinqun/Public/home/css/unite_header_1129.css" rel="stylesheet" type="text/css">
</head>
<body>	

<!-- <script src="/hongxinqun/Public/home/js/top.js" type="text/javascript"></script>       -->
   <form id="register_form" method="post" action="<?php echo U('Entry/login');?>">
            <div id="bd">
				<!--默认-->
					<div class="register_box">
						<div class="head">
							<span class="dd_more"><a href="http://localhost/hongxinqun/home/reg" class="home">Mr.Table - 用户注册</a></span>
							<a href="<?php echo U('Index/index');?>" title="前往首页" class="head_a head_a1">Mr.Table   用户登录</a>
						</div>
						<div class="body">
							<table cellpadding="0" cellspacing="0" border="0" width="100%">
								<tr>
									<td class="t" style="color:black;">手机号码</td>
									<td class="z_index2">
										<input name="phone" id="txt_username" autocomplete="off" MaxLength="40" 
											tabindex="1" placeholder="请输入您的手机号码"
											type="text" class="text" /><span id="spn_username_ok" class="icon_yes" style="display: none;"></span>

										<span id="J_tipUsername" class="cue warn" style="color:red"></span>
									</td>

								</tr><br>
								<br>
								<br>
								<tr>
									<td class="t" style="color:black;">登录密码</td>
									<td>
										<input name="pass" id="txt_password" onpaste="return false;" tabindex="2" placeholder="请输入您的密码" type="password" class="text" MaxLength="20" />
										<span id="spn_password_ok" class="icon_yes" style="display: none;"></span>
										<span id="J_tipPassword" class="cue warn"></span>
										</span>
									</td>
								</tr>
								<br>																	
								<tr>
									<td class="t">&nbsp;</td>
									<td class="clause">
										<span class="float_l">
											<input id="chb_agreement" name="chb_agreement" onmouseover="this.style.cursor='pointer';this.style.cursor='hand';" tabindex="7" type="checkbox" checked="checked"/>我已阅读并同意
											<a target="_blank" href="http://help.dangdang.com/details/page12" tabindex="8">《Mr.Table交易条款》</a>
										</span>
										<span id="J_tipAgreement" class="cue"></span>
									</td>
								</tr>
								<tr>
									<td class="t">&nbsp;</td>
								<td><input id="J_submitRegister" type="submit" value="登录" class="btn_login" tabindex="10"></td>
								</tr>
							</table>
						</div>
					</div>
			</div>
        </form>
       
        <!--页尾 开始 -->

<style type="text/css">
    .public_footer_box { width:100%; margin:0 auto; font:12px "\5b8b\4f53",Arial,Helvetica,sans-serif; clear:both;}
    .public_footer{ margin:0 auto; width:950px; padding:32px 5px 0;font:12px; color:#666; overflow:hidden;}
    .public_footer a{ color:#666!important; text-decoration:none; font-size:12px;}
    .public_footer a:hover{ color:#f60!important; text-decoration:underline;}

    .public_footer .sep{ display:inline-block; padding:0 18px;}
    .public_footer .footer_copyright{ padding-left:168px; margin:0 auto; width:792px; }
    .public_footer .footer_copyright span { float:left; display:inline}
    .public_footer .footer_copyright span{ padding-top:10px;}
    .public_footer .footer_copyright a { padding-right:4px;}
    .public_footer .footer_icon { margin:10px 0 0 335px;width:300px;height:57px;}
    .public_footer .validator,.public_footer .knet {float:left;display:inline;padding:0 5px;width:135px;height:47px;}

</style>

<script type="text/javascript" src="/hongxinqun/Public/home/js/check_browse.js"></script>
<script  type="text/javascript">login_session.browsePageOperate();</script>
<script type="text/javascript" src="/hongxinqun/Public/home/js/js_tracker.js"></script>

<script type="text/javascript" src="/hongxinqun/Public/Home/Js/jquery-1.8.0.min.js"></script>
<!-- <script type="text/javascript" src="/hongxinqun/Public/Home/Js/register.js"></script> -->

</body>
</html>

<!-- 
<script>
	$('.btn_login').click(function(){

		var a = $('#chb_agreement').prop('checked') == true;

		if (!a) {
			$('.cue').html('请先选中用户协议！');
			exit;
		}
	})

</script> -->