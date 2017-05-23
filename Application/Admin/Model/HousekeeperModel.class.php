<?php
namespace Admin\Model;
use Think\Model;
class HousekeeperModel extends Model {
	 //自动验证
   protected $_validate = array(
   	array('job_num','','该工号已经存在！',0,'unique',1),
   //	array('server_weight','require','排序不能为空'),
   	//array('name','','已经存在,请重新添加！',0,'unique',1),
   //	array('server_weight','number','排序输入的不是数字！'),
   	);
}
