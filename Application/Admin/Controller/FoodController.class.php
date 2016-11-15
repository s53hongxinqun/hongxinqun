<?php
namespace Admin\Controller;
use Think\Controller;

class FoodController extends Controller
{
	public function index()
	{   //实例化
		$food = M('foods');
        //查询数据
		$data = $food->select();

		$this->assign('data',$data);

		$this->display();
	}
    
    //数据添加
	public function insert()
	{   //创建数据模型
        $food = D('foods');
        //设置添加时间
        $_POST['addtime'] = time();
        //实例化上传类
        $upload = new \Think\Upload();
        //设置附件大小
        $upload->maxSize = 10240000;
        //同名删除
        $upload->uploadReplace = true;
        //设置附件上传类型
        $upload->exts = array('jpg','gif','png','jpeg');
        //设置附件上传根目录
        $upload->rootPath = './Public/';
        $upload->savePath = './Uploads/';


        $info = $upload->uploadOne($_FILES['file']);
        

        if(!$info){
        	$data['flag']=0;
            $data['msg']=$upload->getErrorMsg();   
        	$this->error($upload->getError());
        	exit;
        }else{
        	$data['flag']=1;
            $data['msg']=__PUBLIC__."/".ltrim($info['savepath'].$info['savename'],'./'); 
        	$_POST['picname'] = ltrim($info['savepath'].$info['savename'],'./');
        }
        

        $this->ajaxReturn($data,'JSON');

        //过滤数据，数据验证
        if(!$food->create()){
           //如果创建数据失败,表示验证没有通过
           //输出错误信息 并且跳转
           $this->error($food->getError());
        }else{

		    if($food->add() > 0){
		    	$this->success('添加成功',U('Food/index'));
		    }else{
		    	$this->error('添加失败咯');
		    }
        }
		



	}

    //编辑数据获取数据
	public function edit()
	{   //id传空值
	    if(empty($_GET['id'])){
	    	$this->redirect('Admin/Food/index');
	    	exit;
	    }
        //接收参数
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

	    $model = M('foods');

	    $data = $model->where("id = $id")->select();

	    $this->assign('data',$data);

	    $this->display();
	}
    
    //数据更新
	public function save()
	{   //如果POST为空
		if(empty($_POST)){
			$this->redirect('Admin/Food/index');
			exit;
		}
        M('foods')->create();

	    if(M('foods')->save() > 0){

	    	$this->success('添加成功',U('Food/index'));
	    }else{
	    	$this->error('添加失败咯');
	    }

	}

	//删除数据
	public function del()
	{
		if(empty($_GET['id'])){
	    	$this->redirect('Admin/Food/index');
	    	exit;
	    }
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

        $model = M('foods');

	    if($model->delete($id) >0 ){

	    	$this->success('删除成功',U('Food/index'));
	    }else{
	    	$this->error('删除失败咯',U('Food/index'));
	    }
	}


}