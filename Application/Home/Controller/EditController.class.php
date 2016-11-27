<?php
namespace Home\Controller;
use Think\Controller;
class EditController extends Controller {

    public function index(){
        $phone = $_GET['phone'];
        // var_dump($phone);
        // exit;

        $vip = D('Vip');

        $where['phone'] = $phone;
        $data = $vip->where($where)->select();
        // var_dump($data);
        // exit;

        $this->assign('data',$data);

        $this->display();
    }

    public function save()
    {   
        if (IS_POST) {
            $oldpass = $_POST['oldpass'];
            $phone = $_POST['phone'];

            $vip = D('Vip');
            $where['phone'] = $phone;

            $data = $vip->where($where)->select();
            if($data[0]['pass']== md5($oldpass)){

                if(!$vip->create()){
                    $this->error($vip->getError());
                    exit;
                }
                $list['pass']=md5($_POST['pass']);
                $save = $vip->where($where)->save($list);
                if ($save > 0) {
                    $this->success('修改成功！',U('Entry/index'));
                }else{
                    $this->error('修改失败！');
                }

            }else{
                $this->error('原密码错误！');
            }
        }
    }
}