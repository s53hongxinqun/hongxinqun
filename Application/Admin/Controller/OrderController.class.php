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
}