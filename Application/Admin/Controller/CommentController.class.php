<?php
namespace Admin\Controller;
use Think\Controller;

class CommentController extends Controller
{
	public function index()
	{
		$comment = D('Comment');
        //查询数据

		$where="";
		$count = $comment->where($where)->count();
		$pagecount = 10;
		$page = new \Think\Page($count , $pagecount);
		$page->parameter = $row; //此处的row是数组，为了传递查询条件
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
		$show = $page->show();
		$data = $comment->table('comment c')
						->field('c.*, f.foods')
						->join('left join foods as f on c.foodsid=f.id')
						->order('addtime desc')
						->limit($page->firstRow.','.$page->listRows)
						->select();

		$this->assign('data',$data);
		$this->assign('page',$show);
		$this->display();
	}


	public function change(){
		 if(empty($_GET)){
	    	$this->redirect('Admin/Comment/index');
	    	exit;
	    }
        //接收参数
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

        $status = I('get.status/d');

        $data['status']=$status;

	    $model = D('Comment');

	    $save = $model->where("id = $id")->save($data);

	    if($save> 0){
	    	$this->redirect("Comment/index");
	    }else{
	    	$this->error('更新失败咯');
	    }
	}

	public function del()
	{
		if(empty($_GET['id'])){
	    	$this->redirect('Admin/Comment/index');
	    	exit;
	    }
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');

        $model = M('Comment');

	    if($model->delete($id) >0 ){

	    	$this->success('删除成功',U('Comment/index'));
	    }else{
	    	$this->error('删除失败咯',U('Comment/index'));
	    }
	}

}
