<?php
namespace Admin\Controller;
use \Think\Controller;

class LoginController extends Controller {
    
    public function index(){
       $this->display();
    }

    // 执行登录
    public function dologin(){
        // 接受用户名和密码
    	$arr['username'] = I('post.name');
    	$arr['userpass'] = md5(I('post.password'));

        // 验证
    	$auser = D('Auser');
    	$data = $auser->where($arr)->select();  	
    	if(!$data){
    		$this->error('用户或密码不正确');
    	}
        
        // 将用户信息添加到session中
		$_SESSION['admin_user'] = $data;
		// 根据用户ID查询语句获取相应权限
    	$arr1 = $auser->where(array('id'=>array('eq',$data['0']['id'])))->relation(true)->select();
        // echo "<pre>";
        // print_r($arr1);
        // echo "</pre>";
        // exit;
    	$rolename = $arr1[0]['role'];
    	foreach ($rolename as $key => $value) {
    		$arr2[] = $value['id'];
    	}
        if(empty($arr2)){
            $this->error('抱歉你尚未分配角色');
            exit;
        }
    	$arole = D('Arole');
    	$arr3 = $arole->where(array('id'=>array('in',$arr2),'status'=>array('eq','1')))->relation(true)->select();

    	// echo "<pre>";
    	// print_r($arr3);
    	// echo "</pre>";
     //    exit;
    	foreach ($arr3 as $key => $value) {
    		$node[] = $value['node'];
    	}
    	
    	foreach ($node as $key => $value) {
    		 foreach ($value as $k => $v) {
    		 	$list[]=$v;
    		 }
    	}
    	
        // 控制名转换为大写
    	foreach ($list as $k => $v) {
			$list[$k]['mname'] = ucfirst($v['mname']);    		
    	}
    	

    	$nodelist=array();
    	$nodelist['Index']=array('index');
        // 遍历重新拼装
    	foreach ($list as $b) {
        //状态值为1的就加入自定义的数组里
        if($b['status']==1){
        		$nodelist[$b['mname']][] = $b['aname'];
                // 把修改、添加，执行修改、执行添加拼装到一起
        		if($b['aname'] == 'edit'){
        			$nodelist[$b['mname']][]="save";
        		}
        		if($b['aname'] == 'add'){
        			$nodelist[$b['mname']][]="doadd";
        		}
            }
    	}
        // 把权限信息放置到session中
    	$_SESSION['admin_user']['nodelist'] = $nodelist;
        // 跳转到首页
    	$this->redirect('Index/index');
    }

    // 退出登录
    public function logout(){
        // 清除session
    	unset($_SESSION['admin_user']);
        unset($_SESSION['node']);
        // 跳转
    	$this->redirect('Index/index');
    }
    public function _empty()
	{
		$this->display('Layout/404');
	}
}