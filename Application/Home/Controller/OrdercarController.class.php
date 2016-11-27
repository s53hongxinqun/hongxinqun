<?php
namespace Home\Controller;
use Think\Controller;
class OrdercarController extends Controller 
{
    public function getFoods()    
    {   
    //开启SESSION;
        session_start();
        //获取ID 过滤
        $id = I('post.id/d');
        //通过ID查询
        $data = M('foods')->where(array("id"=>$id))->select();
        //实例化
        // $orders_car = M('orders_car');
        //赋值
        $list['desk'] = $_SESSION['desk'];
        $list['foodsid'] = $id;
        $list['name'] = $data[0]['foods'];
        $list['price'] = $data[0]['price'];
        $list['num'] = 1;
        $list['status'] = 0;
        $getStatus = M('orders_car')->field('status')->where(array('desk'=>$_SESSION['desk']))->select();
        //查找重复餐点
        $getRepeat = M('orders_car')->where(array('desk'=>$_SESSION['desk'],'foodsid'=>$list['foodsid']))->select();

        //判断餐点状态 改变形态
        if($getStatus[0]['status'] == 0){

            // 未下单 没有重复餐点添加时 
            if($getRepeat == []){
               $ok = M('orders_car')->add($list);
            }else{
            //未下单  有重复餐点时加1
               $ok = M('orders_car')->where(array('desk'=>$_SESSION['desk'],'foodsid'=>$id))->setInc('num');
            }
            //ajax返回弹框状态
            if($ok){
                echo json_encode(['ok'=>1]);                
            }
            return $list;            
        }else{
            // 已下单 没有重复餐点添加时 
            $list['status'] = 1;
            if($getRepeat == []){
                M('orders_car')->add($list);
                $order = M('orders')->field('orderid,total')->where(array('desk'=>$_SESSION['desk'],'status'=>'0'))->select();
                $orderDetail['orderid'] = $order[0]['orderid'];
                $orderDetail['foodsid'] = $list['foodsid'];
                $orderDetail['name'] = $list['name'];
                $orderDetail['price'] = $list['price'];
                $orderDetail['num'] = 1;
                $orderDetail['status'] = 0;
                $orderDetail['addtime'] = time();
                //判断是否是会员
                if($_SESSION['phone']!=null){
                    $orderTotal['total'] = $order[0]['total']+$orderDetail['price']*0.8;
                }else{
                    $orderTotal['total'] = $order[0]['total']+$orderDetail['price'];
                }
                M('orders')->where(array('desk'=>$_SESSION['desk'],'status'=>'0'))->save($orderTotal);

                $ok = M('orders_detail')->add($orderDetail);
            }else{
                //已下单  有重复餐点时加1
                M('orders_car')->where(array('desk'=>$_SESSION['desk'],'foodsid'=>$id))->setInc('num');
                $order = M('orders')->field('orderid,total')->where(array('desk'=>$_SESSION['desk'],'status'=>'0'))->select();
                //判断是否是会员
                if($_SESSION['phone']!=null){
                    $orderTotal['total'] = $order[0]['total']+$list['price']*0.8;
                }else{
                    $orderTotal['total'] = $order[0]['total']+$list['price'];
                }
                M('orders')->where(array('desk'=>$_SESSION['desk'],'status'=>'0'))->save($orderTotal);
                $ok = M('orders_detail')->where(array('orderid'=>$order[0]['orderid'],'foodsid'=>$id))->setInc('num');

            }
            //ajax返回弹框状态
            if($ok){
                echo json_encode(['ok'=>2]);               
            }
            return $list;   
        }
        
    }


    /**
     * 获取所有购物车信息
     */
    public function getCartList(){
    	$carModel= M('orders_car');
    	$all['all'] = $carModel->table(['orders_car'=>'c'])
        			->field(['c.*','f.picname'])
        			->where(array('desk'=>$_SESSION['desk']))
        			->join('left join foods as f on f.id = c.foodsid')
        			->select();
        $sum = 0;
        $total = 0;
        //计算总份数和总金额
        foreach($all['all'] as $k=>$v){
            $sum += $v['num'];
            $total += ($v['num'])*($v['price']);
        }
        //判断是否是会员
        if($_SESSION['phone']!=null){
            $total = $total*0.8;
        }
        //总金额和总份数
        $all['sum'] = $sum;
        $all['total'] = $total;

    	if(count($all)){
    		return $all;
    	}else{
    		return [];
    	}
    }


    public function getCart(){
    	$data = $this->getCartList();
    	$this->assign('all', $data['all']);
        $this->assign('list', $data);
    	$this->display('car');
    }
    
    /**
     * 执行购物车减
     */
    public function doMinus(){
        $id = I('post.id/d');
        //从数据库中获取数量
        $data = M('orders_car')->field('num,price')->where(array('id'=>$id,'desk'=>$_SESSION['desk']))->select();
        //判断数量是否大于1
        if($data[0]['num']>1){
            //数量大于1可执行减1
            M('orders_car')->where(array('id'=>$id,'desk'=>$_SESSION['desk']))->setDec('num'); 
        }

        $list = $this->getCartList();
        echo json_encode($list);
    }

    /**
     * 执行购物车加
     */
    public function doAdd(){
        $id = I('post.id/d');
        //从数据库中获取数量
        $data = M('orders_car')->field('num,price')->where(array('id'=>$id,'desk'=>$_SESSION['desk']))->select();
        //餐点数量+1
        M('orders_car')->where(array('id'=>$id,'desk'=>$_SESSION['desk']))->setInc('num'); 
        
        $data = $this->getCartList();

        echo json_encode($data);
    }

    /**
     * 执行购物车删除
     */
    public function doDel(){

        $id = I('post.id/d');
        //执行数据库删除
        M('orders_car')->where(array('id'=>$id,'desk'=>$_SESSION['desk']))->delete();

        $data = $this->getCartList();
        $this->assign('all', $data['all']);
        $this->assign('list', $data);
        echo json_encode($data);
        // $this->display('car');
    }
    /**
     * 执行购物车下单
     */
    public function doSubmit(){
        //打开session
        session_start();
        //获取桌号
        $desk = $_SESSION['desk'];
        //获取该桌号内餐车的数据
        $getData = M('orders_car')->where(array("desk"=>$desk))->select();
        if($getData == []){
            echo json_encode(0);
            exit;
        }

        //获取总额
        $total = $_POST['total'];
        
        //随机获取订单编号
        $orderid = date('Ymd',time()).rand(0,100000);
        $order['orderid'] = $orderid;
        $order['desk'] = $desk;
        $order['total'] = $total;
        $order['status'] = 0;
        $order['addtime'] = time();
        // 在订单表中生成数据
        M('orders')->add($order);
        //查询对应餐车数据
        $data = M('orders_car')->where(array('desk'=>$desk))->select();
        //遍历获取订单详情数据
        foreach($data as $k=>$v){
            $orders_detail[$k]['orderid'] = $orderid;
            $orders_detail[$k]['foodsid'] = $v['foodsid'];
            $orders_detail[$k]['name'] = $v['name'];
            $orders_detail[$k]['price'] = $v['price'];
            $orders_detail[$k]['num'] = $v['num'];
            $orders_detail[$k]['status'] = 0;
            $orders_detail[$k]['addtime'] = time();
            //把餐车表 中的状态改为1 已下单
            $status['status'] = 1;
            M('orders_car')->where(array('desk'=>$desk))->save($status);
        }
        //在订单详情表中生成数据
        foreach($orders_detail as $k=>$v){
         M('orders_detail')->add($v);
        }
        //获取餐车数据
        $list = $this->getCartList();

        echo json_encode(1);

    }

    
    /**
     * 执行购物车退选
     */
    public function doDrop(){
        $foodsid = I('post.foodsid/d');
        //查询对应桌号以及待付款的订单
        $order = M('orders')->where(array('status'=>'0','desk'=>$_SESSION['desk']))->select();
        //获取订单详情数据
        $list = M('orders_detail')->where(array('orderid'=>$order[0]['orderid'],'foodsid'=>$foodsid))->select();
        // echo json_encode($list);
        // exit;
 
        if($list[0]['status']!= 0){

            echo json_encode(0);

        }else{
            $getFoods = M('orders_detail')->field('num,price')->where(array('foodsid'=>$foodsid,'orderid'=>$order[0]['orderid']))->select();
            //如果是会员退选后减的总额为总额的0.8
            if($_SESSION['phone']!=null){
            $getTotal['total'] = $order[0]['total'] - ($getFoods[0]['num']*$getFoods[0]['price']*0.8);
            }else{

            $getTotal['total'] = $order[0]['total'] - ($getFoods[0]['num']*$getFoods[0]['price']);
            }

            M('orders')->where(array('orderid'=>$order[0]['orderid']))->save($getTotal);
            //执行数据库删除
            M('orders_detail')->where(array('foodsid'=>$foodsid,'orderid'=>$order[0]['orderid']))->delete();
            M('orders_car')->where(array('foodsid'=>$foodsid,'desk'=>$_SESSION['desk']))->delete();

            $data = $this->getCartList();
            $this->assign('all', $data['all']);
            $this->assign('list', $data);
            echo json_encode(1);
        }


    }

    //退选一份
    public function doDropOne(){
        $foodsid = I('post.foodsid/d');
        //查询对应桌号以及待付款的订单
        $order = M('orders')->where(array('status'=>'0','desk'=>$_SESSION['desk']))->select();
        //获取订单详情数据
        $list = M('orders_detail')->where(array('orderid'=>$order[0]['orderid'],'foodsid'=>$foodsid))->select();
        // echo json_encode($list);
        // exit;
 
        if($list[0]['status']!= 0){

            echo json_encode(0);

        }else{
            $getFoods = M('orders_detail')->field('num,price')->where(array('foodsid'=>$foodsid,'orderid'=>$order[0]['orderid']))->select();
            if($getFoods[0]['num']==1){
                //执行总额计算
                //如果是会员退选后减的总额为总额的0.8
                if($_SESSION['phone']!=null){
                    $getTotal['total'] = $order[0]['total'] - ($getFoods[0]['num']*$getFoods[0]['price']*0.8);
                }else{
                    $getTotal['total'] = $order[0]['total'] - ($getFoods[0]['num']*$getFoods[0]['price']);
                }
                    M('orders')->where(array('orderid'=>$order[0]['orderid']))->save($getTotal);
                    //执行数据库删除对应餐点
                    M('orders_detail')->where(array('foodsid'=>$foodsid,'orderid'=>$order[0]['orderid']))->delete();
                    M('orders_car')->where(array('foodsid'=>$foodsid,'desk'=>$_SESSION['desk']))->delete();
            }else{
                //执行总额计算
                if($_SESSION['phone']!=null){
                    $getTotal['total'] = $order[0]['total'] - $getFoods[0]['price']*0.8;
                }else{
                    $getTotal['total'] = $order[0]['total'] - $getFoods[0]['price'];
                }
                    M('orders')->where(array('orderid'=>$order[0]['orderid']))->save($getTotal);
                    //执行数据库删除一份
                    M('orders_detail')->where(array('foodsid'=>$foodsid,'orderid'=>$order[0]['orderid']))->setDec('num');
                    M('orders_car')->where(array('foodsid'=>$foodsid,'desk'=>$_SESSION['desk']))->setDec('num');
            }

            $data = $this->getCartList();
            $this->assign('all', $data['all']);
            $this->assign('list', $data);
            echo json_encode(1);
        }


    }
}