<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller
{
	public function index()
	{   //获取空桌
        $TableModel = M('desk');
    	$emptyTables = $TableModel ->where(array('status'=>1))->select();
    	
    	foreach($emptyTables as $k=>$v){
    		M('desk')->where(array('id'=>$v['id']))->setField('vip','');
    	}
    	// 数据处理
    	    	
    	$this->assign('emptyTables',$emptyTables);
		$this->display();
	}

	public function setTable()
	{   
		session_start();
		
		$desk = I('post.desk/d');

		$_SESSION['desk'] = $desk;

		$data['status'] = 0;

		M('desk')->where(array('id'=>$desk))->save($data);

		echo json_encode($desk);
	}



}