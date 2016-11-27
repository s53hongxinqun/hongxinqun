<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller 
{
	public function logout()
	{
		$_SESSION['phone'] = null;
		//如果会员登出 总额不打折
        $data = M('orders')->field('total')->where(array('desk'=>$_SESSION['desk'],'status'=>0))->select();

        $total = $data[0]['total']/0.8;

        M('orders')->field('total')->where(array('desk'=>$_SESSION['desk'],'status'=>0))->setField('total',$total);
        
		$this->redirect('Home/Index/index');
	}
}