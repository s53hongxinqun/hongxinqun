<?php
namespace Admin\Controller;
use Think\Controller;

class VipController extends Controller
{
	public function index()
	{   //实例化
		$vip = D('Vip');
        //查询数据

		$where = "";
		$count = $vip->where($where)->count();
		$pagecount = 10;
		$page = new \Think\Page($count , $pagecount);
		$page->parameter = $row; //此处的row是数组，为了传递查询条件
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
		$show = $page->show();
		$data = $vip->where($where)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		$this->display();

}
    
    //数据添加
	public function insert()
	{   
		$vip = D('Vip');

		if(!$vip->create()){
			$this->error($vip->getError());
			exit;
		}

		if($vip->add() > 0){
			$this->success("添加成功！",U('Vip/index'));
		}else{
			$this->error("添加失败！");
		}

	}

    //编辑数据获取数据
	public function edit()
	{   //id传空值
	    if(empty($_GET['id'])){
	    	$this->redirect('Admin/Vip/index');
	    	exit;
	    }
        //接收参数
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

	    $model = D('Vip');

	    $data = $model->where("id = $id")->select();

	    $this->assign('data',$data);

	    $this->display();
	}
    
    //数据更新
	public function save()
	{   

	if(IS_POST) {
		$vip = D('Vip');

		if(!$vip->create()){
			$this->error($vip->getError());
			exit;
		}

	    if(D('Vip')->save() >= 0){

	    	$this->success('修改成功',U('Vip/index'));
	    }else{
	    	$this->error('修改失败咯');
	    }
	 }

	}

	public function change(){
		 if(empty($_GET)){
	    	$this->redirect('Admin/Vip/index');
	    	exit;
	    }
        //接收参数
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

        $status = I('get.status/d');

        $data['status']=$status;

	    $model = D('vip');

	    $save = $model->where("id = $id")->save($data);

	    if($save> 0){
	    	$this->redirect("Vip/index");
	    }else{
	    	$this->error('更新失败咯');
	    }
	}

	//删除数据
	public function del()
	{
		if(empty($_GET['id'])){
	    	$this->redirect('Admin/Vip/index');
	    	exit;
	    }
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

        $model = D('Vip');

	    if($model->delete($id) >0 ){

	    	$this->success('删除成功',U('Vip/index'));
	    }else{
	    	$this->error('删除失败咯',U('Vip/index'));
	    }
	}

	public function search()
	{

	if(IS_GET) {
		$vip = D('Vip');

		$phone= I('get.phone/d');

		$where= "phone like '%" . $phone . "%'";

		$count = $vip->where($where)->count();
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
		$data = $vip->where($where)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
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