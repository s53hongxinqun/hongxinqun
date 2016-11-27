<?php
namespace Admin\Controller;
use Think\Controller;

class FoodController extends Controller
{
	public function index()
	{   //实例化
		$food = M('foods');
        //查询数据

        $where = "";
        $count = $food->where($where)->count();
        $pagecount = 7;
        $page = new \Think\Page($count , $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $show = $page->show();
        // $data = $vip->where($where)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
		$data = $food->table('foods f')
                     ->field(array('f.*','t.name'))
                     ->where($where)
                     ->join('left join type t on f.typeid = t.id')
                     ->limit($page->firstRow.','.$page->listRows)
                     ->select();
        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->display();

	}

    public function search()
    {   
        if(IS_GET){
            $food = M('foods');

            $foods = $_GET['foods'];

            $where= "foods like '%" . $foods . "%'";
            
            //查询数据

            $count = $food->where($where)->count();
            $pagecount = 7;
            $page = new \Think\Page($count , $pagecount);
            $page->parameter = $row; //此处的row是数组，为了传递查询条件
            $page->setConfig('first','首页');
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
            $show = $page->show();
            // $data = $vip->where($where)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
            $data = $food->table('foods f')
                         ->field(array('f.*','t.name'))
                         ->where($where)
                         ->join('left join type t on f.typeid = t.id')
                         ->limit($page->firstRow.','.$page->listRows)
                         ->select();
        }

            $this->assign('data',$data);
            $this->assign('page',$show);
            $this->display('Food/index');
        


    }

    //ajax获取图片
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
        $upload->savePath = './Uploads/';
        
        $info = $upload->uploadOne($_FILES['file']);

        if($info){
        	$data = ltrim($info['savepath'].$info['savename'],'./');
        }

        return $data;
    }

    public function add()
    {
        $type = D('type')->select();
        $this->assign('type',$type);
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
        	$this->error($upload->getError());
        	exit;
        }else{
        	$_POST['picname'] = ltrim($info['savepath'].$info['savename'],'./');
        }

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

        $type = M('type')->select();

        $this->assign('type',$type);

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
        
        if($_FILES['file']['name']!=""){
            
         $_POST['picname'] = $this->upload();
        }
        // var_dump($_POST['picname']);
        // exit;

        D('foods')->create();

	    if(D('foods')->save() > 0){

	    	$this->success('恭喜您，修改成功',U('Food/index'));
	    }else{
	    	$this->error('很遗憾，修改失败');
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


    public function mess()
    {
        $code = rand(1000,9999);
        // $_SESSION['code'] = $code;
        sendTemplateSMS("15980002225",array($code,'5'),"1");
        $this->ajaxReturn(['code'=>$code]);
    }  

    public function doYanzheng()
    {
        $this->success('验证成功',U('Admin/Food/yanzheng'));
    } 


}