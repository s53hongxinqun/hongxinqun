<?php
namespace Admin\Controller;
use Think\Controller;

class TypeController extends Controller
{
	public function index()
	{   
		//实例化
		$type =D('Type'); 
		//获取分类信息D('type');
		$list = $type->getAdminCate();

		$this->assign('list',$list);

		$this->display();
	}
    
    //数据添加
	public function insert()
	{   
	if(IS_POST) {
		//实例化
		$type = D('type');
		//初始化数据
		if(!$type->create()){
			$this->error($type->getError());
			exit;
		};
		//执行添加
		if($type->add()>0){
			$this->success("添加成功！",U('Type/index'));
		}else{
			$this->error("添加失败");
		}
	}
	    
	}
//编辑
	public function edit()
	{   
		
		//实例化
		$type = D('type');
		//初始化数据
		$id = I('get.id/d');

		$where['id']=$id;
		
		$list=$type->where($where)->select();


		$this->assign('list',$list);

		$this->display();
	}

	public function save()
	{   
		// var_dump($_POST);

		if(IS_POST) {
			//实例化
			$type = D('type');
			//初始化数据
			if(!$type->create()){
				$this->error($type->getError());
				exit;
			};
			//执行添加
			if($type->save()>0){
				$this->success("编辑成功！",U('Type/index'));
			}else{
				$this->error("编辑失败");
			}
	    }
	}
	    
	



	//删除
	public function del(){
		//实例化
		$type = D('Type');
		$id=$_GET['id'];
		// $type->where("id = $id")->find();

		//拼装删除条件
		$map['id'] = array('eq',I('id'));
		$map['path'] = array('like','%'.I('id').'%');
		$map['_logic'] = 'or';
		if($type->where($map)->count()>1){
			$this->error("请先删除下面的子分类");
		}else{

		if($type->delete($id)>0){
			$this->success("删除成功！",U('Type/index'));
		}else{
			$this->error("删除失败");
		}
		}
	}

	/**
	 * 分类树显示
	*/
	public function treeList(){
		//实例化
		$type = D('Type');
		//获取分类信息
		$list = $type->getHomeCate();
		//V($list);
		$this->assign('list',$list);
		$this->display();
	}

}


