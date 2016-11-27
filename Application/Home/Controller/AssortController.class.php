<?php
namespace Home\Controller;
use Think\Controller;
class AssortController extends Controller 
{   
    

    public function ajaxGetVoList()
    {   $data = $this->getVolist();
        echo json_encode($data);
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
}