<?php
namespace Admin\Controller;
use Think\Controller;

class OrderController extends Controller
{
	public function index()
	{
<<<<<<< HEAD
=======

		$order = M('orders');

		$data = $order->order('status,id desc')->select();

		$this->assign('data',$data);

>>>>>>> hxq
		$this->display();
	}
}