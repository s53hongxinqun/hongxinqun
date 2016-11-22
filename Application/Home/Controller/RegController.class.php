<?php
namespace Home\Controller;
use Think\Controller;
class RegController extends Controller {
    public function index()
    {
     
        $this->display();
    }

    public function code(){
		$verify = new \Think\Verify();
		$verify->fontSize = 35;
		$verify->length =4;
		$verify->useNoise = false;
		$verify->useImgBg = true;
		$verify->entry();
	}

	// 验证传过来的用户是否存在
	public function verifyUser()
	{
		if(IS_AJAX){
			$map['name']= I('post.username');
			$name = I('post.username');
			$user = D('Vip');
			if($user->where($map)->find()){
				if(strpos($name,'@') === false)
				{
					$data['msg'] = "该手机号码已被注册,请更换手机或使用该手机<a href='http://web.com/index.php/home/Login/index'>登录<a>";
				}else{

				}
				$data['code'] = 0;
			}else{
				$data['msg'] = '';
				$data['code'] = 1;
			}
			$this->ajaxReturn($data);
		}else{
			$this->error('未知错误');
		}
	}

	//字段验证
	public function insert()
	{

		// var_dump($_POST);
		// exit;
		$vip = D('Vip');
		if(!$vip->create()){
			$this->error($vip->getError());
		}elseif($vip->add()>0){
			$this->success('注册成功',U('Index/index'));
		}else{
			$this->error('注册失败');
		}
	}	
}