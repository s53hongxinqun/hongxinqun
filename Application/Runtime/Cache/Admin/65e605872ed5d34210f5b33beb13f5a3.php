<<<<<<< HEAD
<?php if (!defined('THINK_PATH')) exit();?>    <div class="box-content no-padding">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>AGE</th>
							<th>WORKS</th>
							<th>Source</th>
							<th>Country of Citizenship</th>
						</tr>
					</thead>
					<tbody>
					<!-- Start: list_row -->
					<?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr>
							<td><?php echo ($v["id"]); ?></td>
							<td><?php echo ($v["name"]); ?></td>
							<td><?php echo ($v["age"]); ?></td>
							<td><?php echo ($v["works"]); ?></td>
							<td><?php echo ($v["works"]); ?></td>
							<td><?php echo ($v["works"]); ?></td>
							
					
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				    </tbody>
				</table>
			</div>
=======
<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	admin user index 
	
</body>
</html>
>>>>>>> hxq
