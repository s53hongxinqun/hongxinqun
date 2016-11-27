<?php
namespace Admin\Model;
use \Think\Model;

class UrlModel extends Model
{
	protected $_validate = array(       
        array('name','','链接名已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
        array('name','require','链接名不能为空'), 
        array('url','/^((https?|ftp|news):\/\/)?([a-z]([a-z0-9\-]*[\.。])+([a-z]{2}|aero|arpa|biz|com|coop|edu|gov|info|int|jobs|mil|museum|name|nato|net|org|pro|travel)|(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]))(\/[a-z0-9_\-\.~]+)*(\/([a-z0-9_\-\.]*)(\?[a-z0-9+_\-\.%=&]*)?)?(#[a-z][a-z0-9_]*)?$/','输入的URL有误！',0,'regex',3),
	);

}