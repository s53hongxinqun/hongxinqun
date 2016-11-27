<?php
namespace Admin\Controller;
use Think\Controller;

class LimgController extends Controller
{
	public function index()
	{   
		$data = M('imgs')->select();
		$this->assign('imgs',$data);
		$this->display();
	}

    public function upload()
    {
        $upload = new \Think\Upload();
        //设置附件大小
        $upload->maxSize = 10240000;
        //同名删除
        $upload->uploadReplace = true;
        //设置附件上传类型
        $upload->exts = array('jpg','gif','png','jpeg');
        //设置附件上传根目录
        $upload->rootPath = './Public/';
        $upload->savePath = './Uploads/Limg/';
        
        $info = $upload->uploadOne($_FILES['file']);

        if($info){
            $data = ltrim($info['savepath'].$info['savename'],'./');
        }

        return $data;
    }

	public function insert()
	{
		$Limg = M('imgs');
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
        $upload->savePath = './Uploads/Limg/';
        

        $info = $upload->uploadOne($_FILES['file']);
        

        if(!$info){
        	$this->error($upload->getError());
        	exit;
        }else{
        	$_POST['pic'] = ltrim($info['savepath'].$info['savename'],'./');
        }

        //过滤数据，数据验证
        if(!$Limg->create()){
           //如果创建数据失败,表示验证没有通过
           //输出错误信息 并且跳转
           $this->error($Limg->getError());
        }else{

		    if($Limg->add() > 0){
		    	$this->success('添加成功',U('Limg/index'));
		    }else{
		    	$this->error('添加失败咯');
		    }
        }
	}

    //执行删除
    public function del()
    {
        if(empty($_GET['id'])){
            $this->redirect('Admin/Limg/index');
            exit;
        }
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

        $imgs = M('imgs');

        if($imgs->delete($id) >0 ){

            $this->success('删除成功',U('Limg/index'));
        }else{
            $this->error('删除失败咯',U('Limg/index'));
        }
    }

    public function edit()
    {
        if(empty($_GET['id'])){
            $this->redirect('Admin/Limg/index');
            exit;
        }
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

        $imgs = M('imgs')->where("id = $id")->select();

        $this->assign('imgs',$imgs);
        $this->display();
    }

    public function save()
    {
        if(empty($_POST)){
            $this->redirect('Admin/Limg/index');
            exit;
        }
        
        if($_FILES['file']['name']!=""){
            
         $_POST['pic'] = $this->upload();
        }
        // var_dump($_POST['picname']);
        // exit;
        
        D('imgs')->create();

        if(D('imgs')->save() > 0){

            $this->success('恭喜您，修改成功',U('Limg/index'));
        }else{
            $this->error('很遗憾，修改失败');
        }
    }
}