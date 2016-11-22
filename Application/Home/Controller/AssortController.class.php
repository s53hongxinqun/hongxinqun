<?php
namespace Home\Controller;
use Think\Controller;
class AssortController extends Controller 
{   
    

    public function ajaxGetVoList()
    {
        echo json_encode($this->getVolist());
    }



    public function getVolist()
    {
        $food = M('foods');
        //查询出类型餐点的所有id
        $count = $food->field('id')->where("typeid = 1")->select();
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
       
        //查询
        $data = $food->where("typeid = 1 and id in($list)")->select();
        
        return $data;

    }
}