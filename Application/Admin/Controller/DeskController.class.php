<?php
namespace Admin\Controller;
use Think\Controller;

class DeskController extends Controller
{
	public function index()
	{   //实例化
		$desk = M('desk');
        //查询数据

		$where = "";
		$count = $desk->where($where)->count();
		$pagecount = 10;
		$page = new \Think\Page($count , $pagecount);
		$page->parameter = $row; //此处的row是数组，为了传递查询条件
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
		$show = $page->show();
		$data = $desk->where($where)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		$this->display();
	}
    
    //数据添加
	public function insert()
	{   
		
	    if(empty($_POST)){
	    	$this->redirect('Admin/Desk/index');
	    	exit;
	    }
	    $where['id'] = $_POST['id'];

	    $model = D('Desk');

	    // $data=$model->where($where)->find();
	    // var_dump($data);
	    // exit;


	    if(!empty($model->where($where)->find())){
	    	$this->error('餐桌不能重复咯');
	    	exit;
	    }

	    if(!$model->create()){
			$this->error($model->getError());
			exit;
		}


/*	    if (!$model->create()){
	     // 如果创建失败 表示验证没有通过 输出错误提示信息
	     exit($this->error($model->getError()));
		}else{	*/	 

	     if($model->add() > 0){
		    $this->success('添加成功',U('Desk/index'));
		}else{
		    $this->error('添加失败咯');
		}
	    
	}






    //编辑数据获取数据
	public function edit()
	{   //id传空值
	    if(empty($_GET['id'])){
	    	$this->redirect('Admin/Desk/index');
	    	exit;
	    }
        //接收参数
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

	    $model = M('desk');

	    $data = $model->where("id = $id")->select();

	    $this->assign('data',$data);

	    $this->display();
	}
//桌数状态更改
	public function change()
	{   //id传空值
	    if(empty($_GET)){
	    	$this->redirect('Admin/Desk/index');
	    	exit;
	    }
        //接收参数
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

        $status = I('get.status/d');

        $data['status']=$status;

	    $model = M('desk');

	    $save = $model->where("id = $id")->save($data);

	    if($save> 0){
	    	$this->redirect("Desk/index");
	    }else{
	    	$this->error('更新失败咯');
	    }
	}
    
    //数据更新
	public function save()
	{   //如果POST为空
		if(empty($_POST)){
			$this->redirect('Admin/Desk/index');
			exit;
		}
        M('desk')->create();

	    if(M('desk')->save() > 0){

	    	$this->success('修改成功',U('Desk/index'));
	    }else{
	    	$this->error('修改失败咯');
	    }

	}

	//删除数据
	public function del()
	{
		if(empty($_GET['id'])){
	    	$this->redirect('Admin/Desk/index');
	    	exit;

	    }
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

        $model = M('desk');

	    if($model->delete($id) >0 ){

	    	$this->success('删除成功',U('Desk/index'));
	    }else{
	    	$this->error('删除失败咯',U('Desk/index'));
	    }
	}


	public function search()
	{

	if(IS_GET) {
		$desk = D('Desk');

		$id= I('get.id/d');


		$where= "id like '%" . $id . "%'";

		$count = $desk->where($where)->count();
		$pagecount = 10;
		$page = new \Think\Page($count , $pagecount);
		$page->parameter = $row; //此处的row是数组，为了传递查询条件
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
		// var_dump($page);exit;
		$show = $page->show();
		$data = $desk->where($where)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
		if($data){

		$this->assign('data',$data);
		$this->assign('page',$show);
		$this->display('desk/index');
	}else{
		$show="查无数据";
		$this->assign('page',$show);
		$this->display('desk/index');
	}

	}


	}


}