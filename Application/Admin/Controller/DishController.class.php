<?php
namespace Admin\Controller;
use Think\Controller;

class DishController extends Controller
{
	public function index()
	{   //实例化
		$model = M('orders_detail');

		$data=$model->table('orders_detail d')
					->field('d.*, o.desk')
					->join('left join orders as o on d.orderid=o.orderid')
					->where("d.status = 3")
					->order('d.addtime ASC')
					->select();

		$this->assign('data',$data);

		$this->display();
	}

	public function change()
	{   
	    if(empty($_GET)){
	    	$this->redirect('Admin/Cooking/index');
	    	exit;
	    }
        //接收参数
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

        $status = I('get.status/d');

        $data['status']=$status;

	    $model = M('orders_detail');

	    $save = $model->where("id = $id")->save($data);

	    if($save> 0){
	    	$this->redirect("Dish/index");
	    }else{
	    	$this->error('更新失败咯');
	    }
	}
}	
    