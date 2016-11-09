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
        
     <form action="<?php echo U('User/save');?>" method="post" class="h3">
     <input type="hidden" name="id" value="<?php echo ($list["id"]); ?>">
    	name: <input type="text" name="name" value="<?php echo ($list["name"]); ?>"><br><br>
    	age:  <input type="text" name="age" value="<?php echo ($list["age"]); ?>"><br><br>
    	work: <input type="text" name="works" value="<?php echo ($list["works"]); ?>"><br><br>

    	<input type="submit" value="修改">

    </div>

    <script src="/11-3tp01/web/Public/js/jquery.min.js"></script>
    <script src="/11-3tp01/web/Public/js/bootstrap.min.js"></script>
	
</body>
</html>