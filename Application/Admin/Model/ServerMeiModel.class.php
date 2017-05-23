<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class ServerMeiModel extends ViewModel {
	 public $viewFields = array(
     'mei'=>array('id','mei_name','jianjie','price','sales','pic_title','pic_item','czbz','goods_display','timelong','cishu','people','notice','type','server_id','jifen','remark','time' ), 
     'server'=>array('id'=>'server_id','server_name','_on'=>'mei.server_id=server.id'),
   );
}
