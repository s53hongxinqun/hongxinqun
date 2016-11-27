<?php
namespace Admin\Controller;
use Think\Controller;

class HelpController extends Controller
{   
	//结账请求
	public function doCheckout()
	{   //获取桌号
		$desk = I('post.desk/d');
		//查询餐桌目前的订单号
		$order = M('orders')->where(array('desk'=>$desk,'status'=>0))->select();
		$orderid = $order[0]['orderid'];
		$getStatus = M('orders_detail')->where("orderid =  $orderid and status in(0,1,3)")->select(); 
		// echo json_encode($getStatus);
		// exit;

        //判断是否查询到未上桌的餐点
        if($getStatus == []){
        	
			//设置服务状态为1
			$data['help'] = 1;
			M('desk')->where(array('id'=>$desk))->save($data);
			echo json_encode(1);
        }else{
        	echo json_encode(2);
        }

	}

    //呼叫服务
	public function doHelp()
	{   //获取桌号
		$desk = I('post.desk/d');
        	
		//设置服务状态为1
		$data['help'] = 2;
		M('desk')->where(array('id'=>$desk))->save($data);
		echo json_encode(1);


	}
}