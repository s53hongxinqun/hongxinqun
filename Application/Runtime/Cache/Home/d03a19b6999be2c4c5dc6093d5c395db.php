<?php if (!defined('THINK_PATH')) exit();?><table id="sample-table-1" class="table table-striped table-hover">
     <thead>
      <tr>                      
        <th class="h5" style="width:100px">桌号</th>
        <th class="h5" style="width:100px">菜品</th>
        <th class="h5" style="width:350px">状态</th>
      </tr>
    </thead>

<tbody>
<?php if(is_array($getStatus2)): $i = 0; $__LIST__ = $getStatus2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
	<th class="h5" style="width:100px"><?php echo ($v["desk"]); ?>号桌</th>
	<th class="h5" style="width:100px"><?php echo ($v["name"]); ?></th>
	<th class="h5" style="width:350px">
		<?php if($v["status"] == 0): ?><span >已下单</span>
		<?php elseif($v["status"] == 1): ?><span >已下锅</span>
		<?php elseif($v["status"] == 3): ?><span>烹饪完成</span>
		<?php else: ?><span >已上桌</span><?php endif; ?>
	</th>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
	
</table>