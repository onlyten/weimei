<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class DingdanMeiModel extends ViewModel {
   public $viewFields = array(
     'dingdan'=>array('id','name','mobile','address','time','coins','xiaofei','remark','wxid','mei_id','order_id' ), 
     'mei'=>array('id'=>'mei_id','mei_name','_on'=>'dingdan.mei_id=mei.id'),
   );
 }