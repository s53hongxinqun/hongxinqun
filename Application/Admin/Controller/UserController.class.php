<?php 
	namespace Admin\Controller;
	
	//用户管理 控制器
	class UserController extends AdminController{

		private $auser = null; //数据库操作类
		private $arole = null; //角色表操作类
		private $auser_role = null; //用户——角色表操作类

		//初始化操作
		public function _initialize(){
			parent::_initialize();
			$this->auser = D('Auser');
			$this->arole = D('Arole');
			$this->auser_role = D('Auser_role');
		}


		//列表详情
		public function index(){
			//查询数据
			$list = $this->auser->select();
			
			$arr = array(); //声明一个空数组
			//遍历用户信息
			foreach($list as $v){
				$role_ids = $this->auser_role->field('rid')->where(array('uid'=>array('eq',$v['id'])))->select();
				//定义空数组
				$roles = array();
				//遍历
				foreach($role_ids as $value){
					$roles[] = $this->arole->where(array('id'=>array('eq',$value['rid']),'status'=>array('eq',1)))->getField('name');
				}
				$v['role'] = $roles; //将新得到角色信息放置到$v中
				$arr[] = $v;
			}

		

			//分配变量
			$this->assign("list",$arr);
			//加载模板
			$this->display();
		}


		
		//执行添加操作
		public function doadd(){
			
			if(!$this->auser->create()){
				$this->error($this->auser->getError());
				exit;
			}

			if($this->auser->add() > 0){
				$this->success("添加成功！",U('User/index'));
			}else{
				$this->error("添加失败！");
			}
		}
		


		//删除操作
		public function del(){
			//把用户角色表中相关的也删除
			if($this->auser->delete($_GET['id']) > 0 && $this->auser_role->where(array('uid'=>array('eq',$_GET['id'])))->delete()){
				$this->success("删除成功!",U('User/index'));
			}else{
				$this->error("删除失败");
			}
		}

		//加载修改页面
		public function edit(){
			//查出数据
			$vo = $this->auser->where(array('id'=>array('eq',I('id'))))->find();
			//向模板分配数据
			$this->assign('vo',$vo);
			//加载模板
			$this->display();
		}

		//执行修改操作
		public function save(){
			
			//初始化
			// exit;
			if(!$data = $this->auser->create()){
				$this->error($this->auser->getError());
				exit;
			}

			unset($data['userpass']);

			//执行修改 
			if($this->auser->save($data) >= 0){
				$this->success("修改成功！",U('User/index'));
			}else{
				$this->error("修改失败");
			}
		}


		//浏览 角色信息
		public function rolelist(){
			//查询节点信息
			$list = $this->arole->where('status=1')->select();
			//查询当前用户信息
			$users = $this->auser->where(array('id'=>array('eq',I('id'))))->find();

			//获取当前用户的角色信息
			$rolelist = $this->auser_role->where(array('uid'=>array('eq',I('id'))))->select();

			$myrole = array(); //定义空数组
			//对用户的角色进行重组
			foreach($rolelist as $v){
				$myrole[] = $v['rid'];
			}
			

			//分配数据
			$this->assign("list",$list);
			//分配当前用户信息
			$this->assign('users',$users);
			//分配该用户的角色信息
			$this->assign('role',$myrole);

			//加载模板
			$this->display();
		}

		//保存用户角色
		public function saverole(){
			
			//判读必须选择一个角色
			if(empty($_POST['role'])){
				$this->error("请选择一个角色！");
			}

			$uid = $_POST['uid'];

			//清除用户所有的角色信息，避免重复添加
			$this->auser_role->where(array('uid'=>array('eq',$uid)))->delete();
	
			foreach(I('role') as $v){
				$data['uid'] = $uid;
				$data['rid'] = $v;
				//执行添加
				$this->auser_role->data($data)->add();

			}


			$this->success("角色分配成功",U('User/index'));
			
		} 
		


}
