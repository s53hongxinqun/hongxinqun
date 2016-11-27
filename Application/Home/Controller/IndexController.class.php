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
        //如果该桌状态被设置为空闲 则登出
        $getStatus = M('desk')->field('status')->where(array("id"=>$_SESSION['desk']))->select();
        // var_dump($getStatus);
        if($getStatus[0]['status'] ==1){
            $_SESSION['desk'] = null;
            $_SESSION['phone'] = null;
            $this->redirect('Home/login/index');
        }
        //如果有会员登陆
        if(!empty($_SESSION['phone'])){
            M('desk')->where(array('id'=>$_SESSION['desk']))->setField('vip',$_SESSION['phone']);
        }else{
            M('desk')->where(array('id'=>$_SESSION['desk']))->setField('vip','');
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
        //获取友情链接
        $data4 = $this->getUrl();

        $this->assign('data4',$data4);
        // var_dump($_SESSION);
        //获取轮播图图片
        $getImgs = M('imgs')->where(array('status'=>1))->order("turn")->select();
        $this->assign('getImgs',$getImgs);

        ///////////////////////////////////////////////////////////
        //美食咨询
        $curl = curl_init();
        // var_dump($curl);//得到资源

        // 设置APIKEY url形式
        $apikey = "559cf597b2a9d5dfee7ab63bd61b5a59";
        $word = urlencode("食品");
        //URL 设置
        curl_setopt($curl, CURLOPT_URL, 'http://api.tianapi.com/health/?key='.$apikey.'&num=30&word='.$word);
        //将 curl_exec() 获取的信息以 文件流的形式返回,而不是直接输出
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        //curl执行
        $data = curl_exec($curl);
        // var_dump($data);//得到的是一个json字串

        //关闭curl
        curl_close($curl);

        //处理JSON数据
        // echo json_encode($data);
        $jsonObj = json_decode($data,true);
        //提取文章列表
        // var_dump($jsonObj);
        // $list = explode(',',$data);
        $this->assign('newList',$jsonObj);
        // var_dump($_SESSION);
        $this->display();
        

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

    public function ajaxGetVoList()
    {
        echo json_encode($this->getVolist());
    }

    public function ajaxDoout()
    {
        session_start();
        //如果没有选桌，返回选桌页面
        if($_SESSION['desk'] == ''){
            $this->redirect('Home/login/index');
        }
        //如果该桌状态被设置为空闲 则登出
        $getStatus = M('desk')->field('status')->where(array("id"=>$_SESSION['desk']))->select();


        if($getStatus[0]['status'] == 1){
            echo 1;
        }else{
            echo 0;
        }
    }
    
    public function getUrl()
    {
        $url=M('Url');
        $data = $url->where(array('status'=>0))->select();

        return $data;
    }


    public function ajaxTuling(){
        //获取 表单信息
        $info = I('post.info', '');

        //设置请求地址
        $url = "http://www.tuling123.com/openapi/api?key=cb964c5958cb852407a5b86c4f8bbf04&info={$info}";

        $api = new \Common\Util\ResultApi();
        $data = $api->getApiStr($url);

        echo $data;
        //V($data);

    }




}