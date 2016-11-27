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

	$phone = $_POST['phone'];
	$code=$_POST['txt_vmess'];

    $vip = D('Vip');
    $where['phone'] = $phone;

    $data = $vip->where($where)->select();
    // $code=$this->mess();
    // var_dump($code);
    // exit;
    if(!$data){
        // if($_POST['txt_vmess'] != $_SESSION['vip_code']){
        //     $this->error('短信验证码错误');
        // }
    	if ($_SESSION['vip_code']!=$code ) {
    		$this->error('手机验证码错误');
    		exit;
    	}

		if(!$vip->create()){
			$this->error($vip->getError());
		}elseif($vip->add()>0){
			$_SESSION['vip_code'] == null;
			$this->success('注册成功',U('Index/index'));
		}else{
			$this->error('注册失败');
		}
    }else{
    	$this->error('手机号码已存在');
    }
	}

	public function mess(){

		// session_start();
		$code = rand(1000,9999);
		$_SESSION['vip_code'] = $code;
		// $_SESSION['code'] = $code;
		sendTemplateSMS("15256897714",array($code,'5'),"1");
		$this->ajaxReturn(['code'=>$code]);
	}	
}