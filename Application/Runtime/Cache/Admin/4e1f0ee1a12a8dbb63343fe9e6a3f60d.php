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
        
    <form action="<?php echo U('User/insert');?>" method="post" class="h3">
    	name: <input type="text" name="name"><br><br>
    	age:  <input type="text" name="age"><br><br>
    	work: <input type="text" name="works"><br><br>
    	<input type="submit" value="添加">
    </form>

    </div>

    <script src="/11-3tp01/web/Public/js/jquery.min.js"></script>
    <script src="/11-3tp01/web/Public/js/bootstrap.min.js"></script>
	
</body>
</html>