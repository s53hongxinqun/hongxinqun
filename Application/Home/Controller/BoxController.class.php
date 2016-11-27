<?php
namespace Home\Controller;
use Think\Controller;
class BoxController extends Controller 
{
	public function index()
	{
		

		$desk = $_GET['desk'];

		$data = M('orders')->table('orders o')
						   ->field('o.desk,d.status,d.name')
						   ->join('left join orders_detail as d on o.orderid=d.orderid')
						   ->where(array("o.desk"=>$desk,"o.status"=>0))
						   ->select();
        // var_dump($data);
        $this->assign('getStatus2',$data);
		$this->display('Box/index');
	}

	public function foodsinfo()
	{
		
		$id = $_GET['id'];
		$foodsid=$_GET['id'];

		$foods = M('foods');
		$where['id']=$id;
		$data=$foods->where($where)->select();
		$id="";


		$com['status']=0;
		$com['foodsid']=$foodsid;

		$comment=M('Comment');
		$list=$comment->where($com)->order('addtime ASC')->select();

		
        $this->assign('foodsinfo',$data)->assign('comment',$list);
		$this->display('Box/foodsinfo');
	}


}