<?php if (!defined('THINK_PATH')) exit();?>

<div class="ibar_plugin_content" style="overflow-y:auto;overflow-x:auto">
  <div class="ibar_cart_group ibar_cart_product">

      <span class="ibar_cart_group_title" style="padding:10px;">
        <span style="font:20px 黑体;color:#ED145B;margin-left:70px;">我的餐车</span>
      </span>


      <table class="table" width=250>
      <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><span>
          <tr>
            <td rowspan="4"><img src="/hongxinqun/Public/<?php echo ($v["picname"]); ?>" width=80 height=90/>
            </td>
            <td style="font-size:15px;">
              <?php echo ($v["name"]); ?>
            </td>
          </tr>
          <tr>
             <td id="getChange3">
                <?php if($v["status"] == 1): ?>数量：x<?php echo ($v["num"]); ?>
                <?php else: ?>
                  <button a="<?php echo ($v["id"]); ?>" b="<?php echo ($v["price"]); ?>" c="<?=$_SESSION['phone']?>" onclick="doMinus(this)" class="btn btn-success btn-xs" style="width:21px;font-weight:bold;">-</button>
                  &nbsp;&nbsp;<span><?php echo ($v["num"]); ?></span>&nbsp;&nbsp;
                  <button a="<?php echo ($v["id"]); ?>" b="<?php echo ($v["price"]); ?>" c="<?=$_SESSION['phone']?>" onclick="doAdd(this)" class="btn btn-success btn-xs" style="font-weight:bold;">+</button><?php endif; ?>
            </td>
          </tr>
          <tr>
            <td>
              <span class="cart_price" style="font-size:15px">
                <span style="font-size:12px;color:black">单价：</span>￥<?php echo ($v["price"]); ?>
              </span>
            </td>            
          </tr>
          <tr>
           <td id="getChange1">
              <?php if($v["status"] == 0): ?><button a="<?php echo ($v["id"]); ?>" onclick="doDel(this)" class="btn btn-danger" style="font-size:10px;font-weight:bold">删除</button>
              <?php else: ?>
              <button a="<?php echo ($v["foodsid"]); ?>" onclick="doDrop(this)" class="btn btn-danger" style="font-size:10px;font-weight:bold">退选</button>
              <button a="<?php echo ($v["foodsid"]); ?>" onclick="doDropOne(this)" class="btn btn-danger" style="font-size:10px;font-weight:bold">退一份</button><?php endif; ?>     
           </td>
          </tr>
         </span><?php endforeach; endif; else: echo "" ;endif; ?>
      </table>          

  </div>
    <div class="cart_handler_header">
      <span class="cart_handler_left">
        共
        <span class="cart_price" id="sum">
          <?php echo ($list["sum"]); ?>
        </span>
        份餐品
      </span>


      <span class="cart_handler_right" style="margin-right:20px"=>
        <b style="color:black;font-size:14px"><?php if($_SESSION['phone']!=null) echo '会员价8折'?></b>￥<span id="total"><?php echo ($list["total"]); ?></span>
      </span>
    </div>
    <span id="getChange2">
        <?php if($v["status"] == 0): ?><button id="submit" class="cart_go_btn">
           下单
          </button>
        <?php else: ?>
          <button a="<?php echo ($v["desk"]); ?>" id="checkout" class="cart_go_btn">
           结账
          </button><?php endif; ?>      
    </span>
</div>
<script>


    //餐车执行减
    function doMinus(obj){
        var id = $(obj).attr('a');    
        var price = $(obj).attr('b');
        var vip = $(obj).attr('c');
        $.ajax({
           type:'post',
           url:"<?php echo U('Home/Ordercar/doMinus');?>",
           data:{'id':id},
           dataType:'json',
           success:function(data){
               var a = $(obj).next('span').html();
               if(a>1){
                  $(obj).next('span').html(a-1);
               }else{
                  $(obj).next('span').html(1);
               }
               //份数减1
               var b = $('#sum').html();
               if(a>1) $('#sum').html(b-1);
               //总额减单价
               var c = $('#total').html();//总额
               if(vip!=''){
                  var total = parseFloat(c)-parseFloat(price*0.8);
                  if(a>1) $('#total').html(total.toFixed(1));
               }else{
                  if(a>1) $('#total').html(parseFloat(c)-parseFloat(price));               
               }
               // console.log(vip);
           }
        })
    }

    //餐车执行加
    function doAdd(obj){
        var id = $(obj).attr('a');    
        var price = $(obj).attr('b');
        var vip = $(obj).attr('c');
        $.ajax({
           type:'post',
           url:"<?php echo U('Home/Ordercar/doAdd');?>",
           data:{'id':id},
           dataType:'json',
           success:function(data){
               var a = $(obj).prev('span').html();
               $(obj).prev('span').html(parseInt(a)+1);
 
               //份数加1
               var b = $('#sum').html();
               $('#sum').html(parseInt(b)+1);
               //总额加单价
               var c = $('#total').html();//总额
               if(vip!=''){
               var total = parseFloat(c)+parseFloat(price*0.8);
               $('#total').html(total.toFixed(1));
               }else{
               $('#total').html(parseFloat(c)+parseFloat(price));
               }
               // console.log(vip);
           }
        })
    }

    //执行餐车删除
    function doDel(obj){
        var id = $(obj).attr('a');
        $.ajax({
           type:'post',
           url:"<?php echo U('Home/Ordercar/doDel');?>",
           data:{'id':id},
           dataType:'json',
           success:function(data){
               
               if(data){
                getCartHtml();
                alert('删除成功');
               }
              
           },
        })
    }
    //执行下单提交
    $('#submit').on('click',function(){
        var total = $('#total').html();
        $.ajax({
           type:'post',
           url:("<?php echo U('Home/Ordercar/doSubmit');?>"),
           data:{'total':total},
           dataType:'json',
           success:function(data){
              
              if(data==1){
                getCartHtml();
                alert('下单成功，请稍等');
               }else{
                alert('餐车无餐点，无法下单');
               }

              // console.log(data);

           },
        })

    })

    //执行退选餐点
    function doDrop(obj){
        var foodsid = $(obj).attr('a');
        $.ajax({
           type:'post',
           url:"<?php echo U('Home/Ordercar/doDrop');?>",
           data:{'foodsid':foodsid},
           dataType:'json',
           success:function(data){
               if(data){
                getCartHtml();
                alert('餐点退选成功');
               }else{
                alert('餐点已下锅或已上桌，无法退选');
               }
               // console.log(data);              
           },

        })
    }

    //执行退选餐点一份
    function doDropOne(obj){
        var foodsid = $(obj).attr('a');
        $.ajax({
           type:'post',
           url:"<?php echo U('Home/Ordercar/doDropOne');?>",
           data:{'foodsid':foodsid},
           dataType:'json',
           success:function(data){
               if(data){
                getCartHtml();
                alert('餐点退选成功');
               }else{
                alert('餐点已下锅或已上桌，无法退选');
               }
               // console.log(data);              
           },

        })
    }

    //提交结账请求
    $('#checkout').on('click',function(){
        var desk = $('#checkout').attr('a');

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
           },
           dataType:'json',
        })
    })



</script>