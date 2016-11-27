<?php
namespace Home\Model;
use Think\Model;

class VipModel extends Model
{
	// 字段映射
	// protected $_map = array(
	// 	'text_username' => 'name',
	// 	'text_password' => 'pass',
	// 	);

	// 	array(
		// array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
		// array(验证字段2,验证规则,错误提示,[验证条件,附加规则,验证时间]),
		// ......
		// );
	// 自动验证
	protected $_validate = array(
			// array('name','checkPass','您的密码长度不正确',1,'callback',3),
			// array('pass','checkName','你输入的手机格式不正确,请重新输入',1,'callback',3),
		  array('phone','require','手机号不能为空'), 
		 
		  array('phone','/^[1][3-8]\\d{9}$/','手机号码错误！',0,'regex',3), 
		
		  array('pass','/^\w{6,20}$/','密码必须是6-20位的数字、字母、下划线',0,'regex',3), 
		  array('repass','pass','确认密码不正确',0,'confirm',3), // 验证确认密码是否和密码一致

		);

	// 自动完成
	protected $_auto = array(
		array('pass','md5',3,'function')
		);

	public function checkPass($pass)
	{
		if (mb_strlen($pass) > 5 && mb_strlen($pass) <= 20) {
			return true;
		}else{
			return false;
		}
	}

	public function checkName($name)
	{
		if(preg_match_all('/^1[3,4,5,7,8][0-9]{9}$/', $name)>0){
			return true;
		}else{
			return false;
		}
	}
}