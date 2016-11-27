<?php
namespace Home\Controller;
use Think\Controller;
class CommentController extends Controller 
{

	public function index(){
		if($_SESSION['phone']){
			$vip['phone']=$_SESSION['phone'];
			$find=$this->M('vip')->where($vip)->select();
			$list['uname']=$find['name'];

		}else{
			$list['uname']=游客;
		}
		

		if(IS_POST){
			$list['foodsid']=$_POST['foodsid'];
			$list['comment']=$_POST['comment'];
			$list['addtime']=time();
			$comment = M('Comment');
			$data=$comment->add($list);
			if($data>0){
				$this->success("谢谢您的宝贵意见！",U('Index/index'));
			}else{
				$this->error("sorry,反馈有误！",U('Index/index'));
			}
		}
	}

}