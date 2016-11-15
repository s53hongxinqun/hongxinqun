<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	
    public function index(){
       //实例化MODEL
       
       $desk = M('desk');
       $order = M('orders');
       
       //餐桌数据查询 获取餐桌信息
       $deskData = $desk->select();
       foreach($deskData as $k =>$v){
       	  $id = $v['id'];
       	  //通过餐桌ID 获取对应的最新的订单信息
          $deskData[$k]['order_info'] = $order->where(['desk' => $id])->order('id desc')->find();
       }

       // var_dump($deskData);
       //数据获取
       $this->assign('data',$deskData);
       $this->display();
    }
}