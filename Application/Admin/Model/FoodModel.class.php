<?php
namespace Admin\Model;
use \Think\Model;

class FoodModel extends Model
{
	protected $pk = 'id';
	protected $_validate = array(
        
        array('price','/^[0-9]*$/','单价必须为数字'),

	);
}