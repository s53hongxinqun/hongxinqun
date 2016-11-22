<?php
namespace Admin\Controller;
use Think\Controller;

class OrderController extends Controller
{
	public function index()
	{

		$order = M('orders');

		$data = $order->order('status,id desc')->select();

		$this->assign('data',$data);

		$this->display();
	}

	public function detail()
	{   //获取ID
		$orderid = $_GET['orderid'];
        //查询对应订单数据
		$orderData = M('orders')->where(array("orderid"=>$orderid))->select();

		$this->assign('orderData',$orderData);
        //查询对应的订单详情
		$list = M('orders_detail')->where(array("orderid"=>$orderid))->select();

		foreach($list as $k=>$v){
			$list[$k]['picname'] = M('foods')->field('picname')->where(array("id"=>$v['foodsid']))->select();
		}
        
		$this->assign('list',$list);

		// var_dump($list);

		$this->display();
	}

	public function del(){
        //获取ID
        if($_GET['status'] == 0){
        	$this->error('该订单待付款，无法删除');
        }
		$orderid = $_GET['orderid'];
        //删除对应订单
        if(M('orders')->where(array("orderid"=>$orderid))->delete()){
        	M('orders_detail')->where(array("orderid"=>$orderid))->delete();
        	$this->success('删除成功',U('Admin/Order/index'));
        }else{
        	$this->error('删除失败');
        }




	}
}