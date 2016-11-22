<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>Mr.Table</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<script src="/hongxinqun/Public/AmazeUI-2.5.2/assets/js/jquery.min.js"></script>
<script src="/hongxinqun/Public/AmazeUI-2.5.2/assets/js/amazeui.min.js"></script>
<script src="/hongxinqun/Public/AmazeUI-2.5.2/assets/js/app.js"></script>
<!-- <script src="/hongxinqun/Public/jq.cookie/jquery.cookie.js"></script> -->
  
<link rel="icon" type="image/png" href="/hongxinqun/Public/Pic/back/logo2.png">
<link rel="stylesheet" href="/hongxinqun/Public/AmazeUI-2.5.2/assets/css/amazeui.min.css"/>
<style>
.header {
  text-align: center;
}
.header h1 {
  font-size: 200%;
  color: #333;
  margin-top: 30px;
}
.header p {
  font-size: 14px;
}
.backA{
	background:url('/hongxinqun/Public/Pic/back/524258.jpg');
	cursor:default;
}
.backB{
	padding:20px 0px;
	background:rgba(255,255,255,.3);
}
.backC{
	background:rgba(0,0,0,.5);
}
.chooseTable{
	background:rgba(199,40,40,0.6);cursor:pointer;
	font:400 16px/20px Microsoft Yahei;width:90px;
	color:#000;
	border-radius:5px;padding:10px;margin:10px 5px;float:left;}
.chooseTable:hover{background:rgba(50,188,50,0.6);}
</style>

</head>
<body class="backA">
	<div class="header backC">
	  <div class="am-g">
		<h1 style="color:#fff;font-family:微软雅黑">智能点餐 · 系统 </h1>
		<img src="/hongxinqun/Public/Pic/back/logo3.png" /> <font style="vertical-align:sub ;color:#fff">Mr.Table</font>
		<br>
		<br>
	  </div>
	</div>
	<div class="am-g backB">
	  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
		<h2>请正确选择您的桌号：</h2>
			<center>
			<?php if(is_array($emptyTables)): $i = 0; $__LIST__ = $emptyTables;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><font table_id="<?php echo ($v["id"]); ?>"  onclick="chooseOne(this);" class="chooseTable"><?php echo ($v["id"]); ?>号桌
			<font style="float:right;"></font>
			</font><?php endforeach; endif; else: echo "" ;endif; ?>
			</center>
			<input type="hidden" id="selected_table_id" />
			<input type="button" onclick="setTable();" style="clear:both;padding:15px;margin:15px;" value="确认选择" class="am-btn am-btn-block am-btn-success am-fr">
		    
	  </div>
	</div>
	
<!--提示框-->
<div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
	<div class="am-modal-dialog">
		<div class="am-modal-hd" id="am-alertWord"></div>
		<div class="am-modal-footer">
		  <span class="am-modal-btn" id="am-doFunction">好的~</span>
		</div>
	</div>
</div>

</body>
</html>

<script type="text/javascript">	
function doAlert(word, fn){
	if(fn != undefined){
		$('#am-doFunction').click(fn);
	}
	$('#am-alertWord').html(word);
	$('#my-alert').modal({relatedTarget: this,});
	
}

$('#selected_table_id').val(0);
// 选择餐桌动作
function chooseOne(obj){
	$('.chooseTable>font').removeClass();
	$(obj).find('font').addClass('am-icon-check');
	$('#selected_table_id').val($(obj).attr('table_id'));
}



// 执行选择餐桌
function setTable()
{
	$.ajax({
		type:'post',
		dataType:'json',
		url:"<?php echo U('Home/Login/setTable');?>",
		data:{'desk':$('#selected_table_id').val()},
		success:function(data){
             if(data){
             	 doAlert('设置成功，进入点餐页面',function(){
             	 	window.location.href = "<?php echo U('Home/Index/index');?>"
             	 });
             }else{
             	 doAlert('请正确选择您的桌号，否则您的餐点就会出现在别人的餐桌上哦~');
             }
             // console.log(data);
		}
	})
}

</script>