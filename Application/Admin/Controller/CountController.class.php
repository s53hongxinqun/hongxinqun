<?php
namespace Admin\Controller;
use Think\Controller;

class CountController extends Controller
{
	public function index(){
		$this->display();
	}
	public function user(){
		$homeuser = M('vip')->count();
		$adminuser = M('auser')->count();
		$this->assign('home',$homeuser);
		$this->assign('admin',$adminuser);
		$this->display();

	}
	public function role(){
		$a = M('arole')->field('name,id')->select();
		foreach ($a as $k=>$v) {
			$arr[]=M('auser_role')->where(array('rid'=>array('eq',$v['id'])))->count();
		}
		// var_dump($arr);
		// exit;
		$this->assign('list',$arr);
		$this->display();
	}
	public function order(){
		$a = M('Order')->where('status=0')->count();
		$b = M('Order')->where('status=1')->count();
		$c = M('Order')->where('status=2')->count();
		$this->assign('a',$a);
		$this->assign('b',$b);
		$this->assign('c',$c);
		$this->display();

	}
}