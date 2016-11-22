<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller 
{
    public function index(){
        
        session_start();
        //如果没有选桌，返回选桌页面
        if($_SESSION['desk'] == ''){
            $this->redirect('Home/login/index');
        }
        //获取对应餐点
        $data = $this->getVolist();
        // var_dump($data);
     
        $this->assign('data',$data);
        //再次获取对应餐点
        $data2 = $this->getVolist();
        
        $this->assign('data2',$data2);
        //获取所有分类
        $data3 = $this->getAssort();

        $this->assign('data3',$data3);
        // var_dump($_SESSION);

        $this->display();
        // echo json_encode($data);

    }
    
    public function getAssort()
    {
        $data = M('type')->where(array('pid'=>0))->select();

        return $data;
    }


    public function getVolist()
    {  
        //查询出类型餐点的所有id
        if($_GET['id']){
            $typeid = I('get.id/d');            
            $count = M('foods')->field('id')->where(array('typeid'=>$typeid))->select();
        }else{
            $count = M('foods')->field('id')->select();
        }
        // var_dump($count);
        //获取所有id转化为二维数组
        foreach($count as $k => $v){
            foreach($v as $key =>$val){             
            $numbers[] = $val;
            }
        }
        //将数打乱
        shuffle ($numbers);   
        //取出6个数
        $result = array_slice($numbers,0,6);
        //拼接为字符串

        $list = implode(',',$result);
        // var_dump($list);
       
        //查询
        if($_GET['id']){
            $data = M('foods')->where("typeid = $typeid and id in($list)")->select();
        }else{
            $data = M('foods')->where("id in($list)")->select();
        }
        
        return $data;


    }


    public function about()
    {
         
        $this->display();
    }


}