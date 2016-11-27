<?php 
	namespace Admin\Controller;
	
	class NodeController extends AdminController{
		private $node = null; //数据库操作类

		//初始化操作
		public function _initialize(){
			parent::_initialize();
			$this->node = D('Anode');
		}

		//列表详情
		public function index(){
			//查询数据
			$list = $this->node->select();

			//分配变量
			$this->assign("list",$list);
			//加载模板
			$this->display();
		}

		//执行添加操作
		public function doadd(){

			if(!$this->node->create()){
				$this->error($this->node->getError());
				exit;
			}

			if($this->node->add() > 0){
				$this->success("添加成功！",U('Node/index'));
			}else{
				$this->error("添加失败！");
			}
		}


		//删除操作
		public function del(){
			if($this->node->delete($_GET['id']) > 0){
				$this->success("删除成功！",U('Node/index'));
			}else{
				$this->error("删除失败");
			}
		}

		//加载修改页面c 
		public function edit(){
			//查出数据
			$vo = $this->node->where(array('id'=>array('eq',I('id'))))->find();
			//向模板分配数据
			$this->assign('vo',$vo);
			//加载模板
			$this->display();
		}

		//执行修改操作
		public function save(){
			//初始化
			if(!$this->node->create()){
				$this->error($this->node->getError());
				exit;
			}
			//执行修改 
			if($this->node->save() >= 0){
				$this->success("修改成功！",U('Node/index'));
			}else{
				$this->error("修改失败");
			}
		}

		
	}

 ?>