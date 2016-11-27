<?php
namespace Admin\Controller;
use Think\Controller;

class OrderController extends Controller
{ 
	public function index()
	{

		$order = M('orders');

		$where = "";
		$count = $order->where($where)->count();
		$pagecount = 7;
		$page = new \Think\Page($count , $pagecount);
		$page->parameter = $row; //此处的row是数组，为了传递查询条件
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
		$show = $page->show();
		$data = $order->where($where)->order('status,id,addtime desc')->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		$this->display();
	}

	public function search()
	{

	if(IS_GET) {
		$order = M('orders');

		$orderid = $_GET['orderid'];

		$where= "orderid like '%" . $orderid . "%'";

		$count = $order->where($where)->count();
		$pagecount = 7;
		$page = new \Think\Page($count , $pagecount);
		$page->parameter = $row; //此处的row是数组，为了传递查询条件
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
		// var_dump($page);exit;
		$show = $page->show();
		$data = $order->where($where)->order('status,id,addtime desc')->limit($page->firstRow.','.$page->listRows)->select();
		

		$this->assign('data',$data);
		$this->assign('page',$show);
		$this->display('Order/index');




}


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

	public function del()
	{
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

	public function doDesk()
	{
        $id = I('get.id/d');

        // //修改对应状态
        if(M('orders_detail')->where(array('id'=>$id))->setField('status','2')){
        	$this->success('餐点上桌');
        }else{
        	$this->success('餐点上桌失败');
        }
	}

	public function doDel()
	{
         $id = I('get.id/d');
         $foodsid = I('get.foodsid/d');
         $desk = I('get.desk/d');
         $status = I('get.status/d');
         $price = $_GET['price'];
         $num = I('get.num/d');
         $total = $_GET['total'];
         $orderid = $_GET['orderid'];
         //判断该订单是否付款  未付款得连餐车一起删除
         if($status==0){
         //删除详情表里的数据
         	 $data['total'] = $total - $price*$num;
             M('orders')->where(array('orderid'=>$orderid))->save($data);
	         M('orders_detail')->where(array('id'=>$id))->delete();
	         //删除购物车里的数据
	         if(M('orders_car')->where(array('desk'=>$desk,'foodsid'=>$foodsid))->delete()){
                $this->success('删除成功');
	         }

         }else{
         	 $data['total'] = $total - $price*$num;
             M('orders')->where(array('orderid'=>$orderid))->save($data);
             if(M('orders_detail')->where(array('id'=>$id))->delete()){
             	$this->success('删除成功');
             }
         }

	}
}