<?php
namespace Admin\Controller;
use Think\Controller;

class UrlController extends Controller
{
	public function index()
	{   //实例化
		$url = M('Url');
        //查询数据

		$where = "";
		$count = $url->where($where)->count();
		$pagecount = 10;
		$page = new \Think\Page($count , $pagecount);
		$page->parameter = $row; //此处的row是数组，为了传递查询条件
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
		$show = $page->show();
		$data = $url->where($where)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		$this->display();

	}

	public function insert()
	{   
		
	    if(empty($_POST)){
	    	$this->redirect('Admin/Url/index');
	    	exit;
	    }

	    $url = D('Url');

	    if(!$url->create()){
			$this->error($url->getError());
			exit;
		}

		if($url->add() > 0){
		    $this->success('添加成功',U('Url/index'));
		}else{
		    $this->error('添加失败咯');
		}
	}

	public function edit()
	{   //id传空值
	    if(empty($_GET['id'])){
	    	$this->redirect('Admin/Url/index');
	    	exit;
	    }
        //接收参数
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

	    $url = D('Url');

	    $data = $url->where("id = $id")->select();

	    $this->assign('data',$data);

	    $this->display();
	}

    //数据更新
	public function save()
	{   

	if(IS_POST) {
		$url = D('Url');

		if(!$url->create()){
			$this->error($url->getError());
			exit;
		}

	    if($url->save() >= 0){

	    	$this->success('修改成功',U('Url/index'));
	    }else{
	    	$this->error('修改失败咯');
	    }
	 }

	}

	public function change(){
		 if(empty($_GET)){
	    	$this->redirect('Admin/Url/index');
	    	exit;
	    }
        //接收参数
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

        $status = I('get.status/d');

        $data['status']=$status;

	    $url = D('url');

	    $save = $url->where("id = $id")->save($data);

	    if($save> 0){
	    	$this->redirect("Url/index");
	    }else{
	    	$this->error('更新失败咯');
	    }
	}
	//删除数据
	public function del()
	{
		if(empty($_GET['id'])){
	    	$this->redirect('Admin/Url/index');
	    	exit;
	    }
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

        $url = M('Url');

	    if($url->delete($id) >0 ){

	    	$this->success('删除成功',U('Url/index'));
	    }else{
	    	$this->error('删除失败咯',U('Url/index'));
	    }
	}

	    
}	