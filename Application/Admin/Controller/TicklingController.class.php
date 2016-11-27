<?php
namespace Admin\Controller;
use Think\Controller;

class TicklingController extends Controller
{
	public function index()
	{
		$tick=M('Tickling');
		$list=$tick->order('status ASC')->select();
		$this->assign('list',$list);
		$this->display();
	}

	public function change(){
 		if(empty($_GET)){
	    	$this->redirect('Admin/Tickling/index');
	    	exit;
	    }
        //接收参数
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

        $status = I('get.status/d');

        $data['status']=$status;

	    $tick = M('Tickling');

	    $save = $tick->where("id = $id")->save($data);

	    if($save> 0){
	    	$this->redirect("Tickling/index");
	    }else{
	    	$this->error('更新失败咯');
	    }
	}
	
}