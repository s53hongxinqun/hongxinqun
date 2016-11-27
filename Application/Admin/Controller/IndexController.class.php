<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	
    public function index(){
      
       //判断是否有SESSION
       session_start();
       if($_SESSION['admin_user']==null){
            $this->redirect('Admin/Login/index');
       }

       $desk = M('desk');
       $order = M('orders');
       
       //餐桌数据查询 获取餐桌信息
       $deskData = $desk->order('status,id')->select();
       
 
       foreach($deskData as $k =>$v){
       	  $id = $v['id'];
       	  //通过餐桌ID 获取对应的最新的订单信息
          $deskData[$k]['order_info'] = $order->where(['desk' => $id])->order('id desc')->find();
       }

       // var_dump($deskData[4]['order_info']['status']);
       //数据获取
       $this->assign('data',$deskData);
       $this->display();
    }

    public function cstatus()
    {  //获取状态
       if(empty($_GET['status']) || empty($_GET['status'])){
           $this->redirect('Admin/Index/index');
           exit;
       }
       
       //获取桌号ID
       $id = I('get.id/d');
       //获取状态
       $status = I('get.status/d');
       $orderid = $_GET['orderid'];
       
       switch($status){
          //转换用餐中
          case 4:   
                 $desk = M('desk');
                 $desk->status = 0;
                 $desk->where("id = $id")->save();
                 $this->redirect('Admin/Index/index');
                 break;
          //转换空闲中
          case 1:   
                 $desk = M('desk');
                 $desk->status = 1;
                 $desk->where("id = $id")->save();
                 $this->redirect('Admin/Index/index');
                 break;
          //转换暂停使用
          case 2: 
                 $desk = M('desk');
                 $desk->status = 2;
                 $desk->where("id = $id")->save();
                 $this->redirect('Admin/Index/index');
                 break;
          //结账下桌
          case 3: 
                 $desk = M('desk');
                 $desk->status = 1;
                 $desk->help = 0;
                 $desk->where("id = $id")->save();
                 //如果订单号不为空 
                 if(!empty($orderid)){
                 $order = M('orders');
                 $order->status = 1;
                 $order->where("orderid = $orderid")->save();
                 }
                 M('orders_car')->where("desk = $id")->delete();
                 $this->success('结账成功');                 
                 break;
          //取消服务
          case 5:
                 M('desk')->where(array("desk"=>$id))->setField('help',0);
                 $this->redirect('Admin/Index/index');
                 break;

       }
       
    }
}