<?php 
namespace Admin\Controller;

class RoleController extends AdminController{
	private $arole = null; //数据库操作类
	private $anode = null; //节点表数据库对象
	private $arole_node = null; //角色——权限表数据库对象
	private $auser_role = null; //用户--角色表数据库对象

	//初始化操作
	public function _initialize(){
		parent::_initialize();
		$this->arole = D('Arole');
		$this->anode = D('Anode');
		$this->arole_node = D("Arole_node");
		$this->auser_role = D("Auser_role");
	}

	//列表详情
	public function index(){
		//查询数据
		$list = $this->arole->select();

		$arr = array();
		//遍历添加上 权限信息
		foreach($list as $v){
			$nodes = $this->arole_node->where(array('rid'=>array('eq',$v['id'])))->select();
			$node = array();
			foreach($nodes as $value){
				$node[] = $this->anode->where(array('id'=>array('eq',$value['nid'])))->getField('name');
			}
			$v['node'] = $node;
			$arr[] = $v;
		}

	
		//分配变量
		$this->assign("list",$arr);
		//加载模板
		$this->display();                                
	}

	public function ajaxshow(){
		$listRows = 1;
		$where = empty($_GET['search'])?'1=1':['name'=>['like','%'.$_GET['search'].'%']];
		$counts =  $this->arole->where($where)->count();
		$totalPage = ceil($counts / $listRows);
		$_GET['p'] = $_GET['p'] > $totalPage ? $totalPage : $_GET['p'];


		$page = new \Think\Page($counts,$listRows);

		//查询数据
		$list = $this->arole->page($_GET['p'],$listRows)->where($where)->select();

		$arr = array();
		//遍历添加上 权限信息
		foreach($list as $v){
			$nodes = $this->arole_node->where(array('rid'=>array('eq',$v['id'])))->select();
			$node = array();
			foreach($nodes as $value){
				$node[] = $this->anode->where(array('id'=>array('eq',$value['nid'])))->getField('name');
			}
			$v['node'] = $node;
			$arr[] = $v;
		}

		$html     = $this -> htmlRole($arr);
		$pagelist = $page -> show();
		$this -> ajaxReturn(['html'=>$html,'page'=>$pagelist]);
		   
	}
	public function htmlRole($data){
		foreach($data as $key => $value){
			$html.= '<tr>
						<td>'.$value['id'].'</td>
						<td>'.$value['name'].'</td>
						<td>'.$value['remark'].'</td>
						<td>'.($value['status']>1?'启用':'禁用').'</td>
						<td>
							<a class="btn-sm btn-danger" href="'.U('Role/del',array('id'=>$value['id'])).'">删除</a>
							<a class="btn-sm btn-primary" href="'.U('Role/edit',array('id'=>$value['id'])).'">修改</a>
							<a class="btn-sm btn-info" href="'.U('Role/nodelist',array('id'=>$value['id'])).'">分配权限</a>
						</td>
					</tr>';
		}

		return $html;
	}
	//执行添加操作
	public function doadd(){

		if(!$this->arole->create()){
			$this->error($this->arole->getError());
			exit;
		}

		if($this->arole->add() > 0){
			$this->success("添加成功！",U('Role/index'));
		}else{
			$this->error("添加失败！");
		}
	}


	//删除操作
	public function del(){
		if($this->arole->delete($_GET['id']) >= 0 && $this->auser_role->where(array('rid'=>$_GET['id']))->delete() >= 0 && $this->arole_node->where(array('rid'=>array('eq',$_GET['id'])))->delete()>=0){
			$this->success("删除成功！",U('Role/index'));
		}else{
			$this->error("删除失败");
		}
	}

	//加载修改页面c 
	public function edit(){
		//查出数据
		$vo = $this->arole->where(array('id'=>array('eq',I('id'))))->find();
		//向模板分配数据
		$this->assign('vo',$vo);
		//加载模板
		$this->display();
	}

	//执行修改操作
	public function save(){
		//初始化
		if(!$this->arole->create()){
			$this->error($this->arole->getError());
			exit;
		}
		//执行修改 
		if($this->arole->save() >= 0){
			$this->success("修改成功！",U('Role/index'));
		}else{
			$this->error("修改失败");
		}
	}


	//为角色分配权限
	public function nodelist(){
		//查找该角色信息
		$role = $this->arole->where(array('id'=>array('eq',I('id'))))->find();
		//查找所有的节点
		$nodes = $this->anode->select();

		//获取该角色的权限
		$ro_node = $this->arole_node->where(array('rid'=>array('eq',$role['id'])))->select();
		$ro_nodes = array();
		//遍历重组数组
		foreach($ro_node as $v){
			$ro_nodes[] = $v['nid'];
		}

		
		

		//向模板分配该用户拥有的权限信息
		$this->assign('ro_nodes',$ro_nodes);
		//向模板分配节点信息
		$this->assign('nodes',$nodes);
		//向模板分配角色信息ec\\
		$this->assign('role',$role);

		//加载模板
		$this->display();


	}


	//为角色添加权限
	public function savenode(){
		if(empty($_POST['node'])){
			$this->error("必须选择一个节点！");
		}

		$rid = $_POST['rid'];

		//删除该 角色的 所有信息--避免重复添加
		$this->arole_node->where(array('rid'=>array('eq',$rid)))->delete();

		//循环添加
		foreach($_POST['node'] as $v){
			$data['nid'] = $v;
			$data['rid'] = $rid;
			//执行添加
			$this->arole_node->data($data)->add();
		}

		$this->success("添加成功！",U('Role/index'));
	}
} 