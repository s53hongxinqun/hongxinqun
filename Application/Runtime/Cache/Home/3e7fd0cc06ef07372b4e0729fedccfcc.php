<?php if (!defined('THINK_PATH')) exit(); if(is_array($foodsinfo)): $i = 0; $__LIST__ = $foodsinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div>
	<img src="/hongxinqun/Public/<?=$v['picname']?>" class="img-responsive" alt="" style="height:300px;width:200px;float:left;"/>
	<div style="height:300px;width:320px;float:left;margin-left:30px;">
		<div style="height:250px;width:320px;">				
			<ul>
				<li><b style="font-size:30px;">菜品名称：</b><span style="font-size:20px;"><?php echo ($v["foods"]); ?></span></li>
				<li><b style="font-size:20px;">价格：</b><span style="font-size:20px;">￥<?php echo ($v["price"]); ?>/份</span></li>
				<li><b style="font-size:20px;">描述：</b></li>
				<li style="font-size:15px;"><?php echo ($v["detail"]); ?></li>
			</ul>
		</div>
		<div style="height:45px;width:300px;">
		 	<button type="button" class="btn btn-danger btn-lg"  a="<?php echo ($v["id"]); ?>" style="float:right;" onclick="add(this)">加入餐车 </button>
		</div>
	</div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>

<div style="margin-top:30px;">
	<ul class="nav nav-tabs" style="margin-bottom:10px" role="tablist">
		 <li role="presentation" class="active"><a href="#foodscom" role="tab" data-toggle="tab" style="font-size:18px;">评价详情</a></li>
		 <li role="presentation"><a href="#vipwrite" role="tab" data-toggle="tab" style="font-size:18px;" >发表评论</a></li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="foodscom">
			<div class="row">
	          <div class="col-xs-12">
	          	<table class="table table-striped table-hover center" >

					<tbody>
						<?php if(is_array($comment)): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "暂无评价。。。" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><tr>
								<td><?php echo ($c["uname"]); ?></td>
								<td><?php echo ($c["comment"]); ?></td>
								<td><?php echo (date("Y-m-d H:i:s",$c["addtime"])); ?></td>
							</tr><?php endforeach; endif; else: echo "暂无评价。。。" ;endif; ?>
					</tbody>
         		</table>
	          </div><!-- /span -->
	        </div><!-- /row -->

		</div>
				
		<div role="tabpanel" class="tab-pane" id="vipwrite">
			<form action="<?php echo U('Home/Comment/index');?>" method="post">
				<?php if(is_array($foodsinfo)): $i = 0; $__LIST__ = $foodsinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><input type="hidden" name="foodsid" value="<?php echo ($v["id"]); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>
				<textarea name="comment"  cols="80" rows="8" style="resize:none;border:0;font-size:15px;" placeholder="请对我们的餐品提出您的宝贵意见"></textarea>
				<div class="modal-footer">
		        	<button type="submit" class="btn btn-primary">提交评价</button>
		      	</div>
	      	</form>
		</div>
	</div>
</div>