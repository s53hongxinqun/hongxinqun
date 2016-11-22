<?php
namespace Admin\Controller;
use Think\Controller;

// 公共控制器
class AdminController extends Controller
{	
	// 初始化的方法
	public function _initialize()
	{
		// 判断session是否存在
		if (empty($_SESSION['admin_user'])) {
			// 跳转到登录页
			$this->redirect('Login/index');
			exit;
		}

		// 权限过滤
		$mname = CONTROLLER_NAME;//获取控制器名
		$aname = ACTION_NAME; // 获取方法名
		$nodelist = $_SESSION['admin_user']['nodelist'];// 获取权限列表
		// 让超级管理拥有所有权限
		if ($_SESSION['admin_user'][0]['username'] != 'admin') {
			// 验证操作权限
			if (isset($_SESSION['admin_user']['nodelist'][$mname]) && in_array($aname, $_SESSION['admin_user']['nodelist'][$mname])) {
				
			}else{
				$this->error('抱歉，您没有操作权限');
				exit;
			}
		}
	}
}