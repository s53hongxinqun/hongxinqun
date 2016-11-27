<?php
namespace Admin\Model;
use Think\Model;

class FoodsModel extends Model
{

	protected $_validate = array(
        
        array('foods','','该餐点名已存在！',0,'unique',1),
        array('price','/^[0-9]*$/','单价必须是数字！',0,'regex',3),
        array('status','require','桌号不能为空'),
        array('is_empty','require','桌号不能为空'),

	);
}