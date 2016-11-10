<?php
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller
{
	public function index()
	{
	    $data = M('avstart')->select();
	    
	    $this->assign('list',$data);

	    $this->display();
	}
}