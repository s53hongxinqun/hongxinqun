<?php 
	namespace Admin\Model;
	use Think\Model;
	class VipModel extends Model{
		//自动完成
		protected $_auto = array ( 
		    array('pass','md5',3,'function'),  
		);

		//自动验证
		protected $_validate = array(
		  array('phone','require','手机号不能为空'), 
		  array('phone','','手机号已经存在！',0,'unique',3),
		  array('phone','/^[1][3-8]\\d{9}$/','手机号码错误！',0,'regex',3), 
		  array('name','require','真实姓名不能为空'), 
		  array('pass','/^\w{6,20}$/','密码必须是6-20位的数字、字母、下划线',0,'regex',3), 
		  array('repass','pass','确认密码不正确',0,'confirm',3), // 验证确认密码是否和密码一致
		  // array('pass','md5',3,'function'),
		);

	}