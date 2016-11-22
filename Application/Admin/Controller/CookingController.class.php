<?php
namespace Admin\Controller;
use Think\Controller;

class CookingController extends Controller
{
	public function index()
	{   //实例化
		$model = M('orders_detail');
        //查询数据
		$data = $model->where("status != 2")->order('addtime ASC')->select();

		$this->assign('data',$data);

		$this->display();
	}
    
    //编辑数据获取数据
	public function edit()
	{   //id传空值
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
	    	$this->redirect("Cooking/index");
	    }else{
	    	$this->error('更新失败咯');
	    }
	}
    



}