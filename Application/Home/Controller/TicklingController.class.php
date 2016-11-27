<?php
namespace Home\Controller;
use Think\Controller;
class TicklingController extends Controller 
{
	public function index(){
		if($_SESSION['phone']){
			$list['vip']=$_SESSION['phone'];
		}else{
			$list['vip']=游客;
		}

		if(IS_POST){
			$list['info']=$_POST['info'];
			$list['time']=time();
			$tickling = M('Tickling');
			$data=$tickling->add($list);
			if($data>0){
				$this->success("谢谢您的宝贵意见！",U('Index/index'));
			}else{
				$this->error("sorry,反馈有误！",U('Index/index'));
			}
		}
	}
}