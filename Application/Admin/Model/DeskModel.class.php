<?php
namespace Admin\Model;
use \Think\Model;

class DeskModel extends Model
{
	protected $pk = 'id';
	protected $_validate = array(       
        array('id','','桌号已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
        array('id','require','桌号不能为空'), 
        array('id','/^[0-9]*$/','桌号为数字！',0,'regex',3),
	);

}