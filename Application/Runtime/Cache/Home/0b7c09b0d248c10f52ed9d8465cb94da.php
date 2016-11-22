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
<script src="/hongxinqun/Public/jq.cookie/jquery.cookie.js"></script>
  
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
			<?php if($emptyTable): ?>
			<?php foreach($emptyTable as $key=>$val): ?>
			<center>
			<font table_id="<?php echo $val['id']; ?>" table_no="<?php echo $val['no']; ?>" onclick="chooseOne(this);" class="chooseTable"><?php echo $val['no']; ?>号桌
			<font style="float:right;"></font>
			</font>
			</center>
			<?php endforeach; ?>
			<?php endif; ?>
			<input type="hidden" id="selected_table_no" />
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

$('#selected_table_no').val(0);
// 选择餐桌动作
function chooseOne(obj){
	$('.chooseTable>font').removeClass();
	$(obj).find('font').addClass('am-icon-check');
	$('#selected_table_no').val($(obj).attr('table_no'));
}

// 执行选择餐桌
function setTable(){
	var table_no = $('#selected_table_no').val();
	if(table_no > 0){
		var url = '<?php echo U("Index/setTable");?>?table_no='+$('#selected_table_no').val();
		$.ajax({
			url: url,
			type:'get',
			dataType:'json',
			success:function(data){
				if(data.ok){
					$.cookie('tableNo', data.table_no, { expires: 1 });
					$('#my_table_no').html($('#selected_table_no').val()+'号桌');
					doAlert('设置成功',function(){
						window.location.reload();
					});
					
				}else{
					doAlert('设置失败');
				}
			},
		})
	}else{
		doAlert('请正确选择您的桌号，否则您的餐点就会出现在别人的餐桌上哦~');
	}
	
	
}
</script>