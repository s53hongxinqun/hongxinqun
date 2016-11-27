<?php
namespace Home\Controller;
use Think\Controller;
class EntryController extends Controller {

    public function login()
    {
        $phone = I('post.phone');
        $pass = I('post.pass');
        $data = M('vip')->where(array('phone'=>$phone))->find();
        if (!$data) {
            $this->error('用户名不存在！');
            exit;
        }

        if (md5($pass) != $data['pass']) {
            $this->error('密码不正确！');
            exit;
        }else{
            $_SESSION['phone'] = $data['phone'];
            $this->success('登录成功！',U('Index/index'));
        }
        $data = M('orders')->field('total')->where(array('desk'=>$_SESSION['desk'],'status'=>0))->select();
        if($data==[]){

        }else{
            $total = $data[0]['total']*0.8;
            M('orders')->field('total')->where(array('desk'=>$_SESSION['desk'],'status'=>0))->setField('total',$total);
        }


        // $_SESSION['uid'] = $data['id'];
    }

    public function logout()
    {
        //如果会员登出 总额不打折
        $data = M('orders')->field('total')->where(array('desk'=>$_SESSION['desk'],'status'=>0))->select();

        $total = $data[0]['total']*1.25;

        M('orders')->field('total')->where(array('desk'=>$_SESSION['desk'],'status'=>0))->setField('total',$total);
        // $_SESSION['uid'] = null;
        $_SESSION['phone'] = null;
        

    }
}