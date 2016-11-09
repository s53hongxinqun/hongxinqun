<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" href="/11-3tp01/web/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/11-3tp01/web/Public/my.css">
</head>
<body>
    <div class="container">
        <h1><?php echo ($title); ?></h1>
        <div class="center-block mt20">
        <a href="<?php echo U('index');?>" class="btn btn-success">首页</a>
        <a href="<?php echo U('add');?>" class="btn btn-primary">添加</a>
        </div>
        <hr>
        
        <table class="table table-hover table-striped table-bordered">
        	<tr>
        		<th>ID</th>
        		<th>NAME</th>
        		<th>AGE</th>
        		<th>WORKS</th>
        		<th>ACTION</th>
        	</tr>
        	<?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr>
        	      	 <td><?php echo ($v["id"]); ?></td>
        	      	 <td><?php echo ($v["name"]); ?></td>
        	      	 <td><?php echo ($v["age"]); ?></td>
        	      	 <td><?php echo ($v["works"]); ?></td>
        	      	 <td class="col-md-2"><a href="<?php echo U('del',array('id'=>$v['id']));?>" class="btn btn-primary">删除</a>
        	      	     <a href="<?php echo U('edit',array('id'=>$v['id']));?>" class="btn btn-danger">编辑</a>
        	      	 </td>        	      	 
        	      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        
    </div>

    <script src="/11-3tp01/web/Public/js/jquery.min.js"></script>
    <script src="/11-3tp01/web/Public/js/bootstrap.min.js"></script>
	
</body>
</html>