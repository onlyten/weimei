<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class DingdanMeiModel extends ViewModel {
   public $viewFields = array(
     'dingdan'=>array('id','name','mobile','address','xiaofei','coins','successor','remark','wxid','mei_id','order_id','type','state','addtime','updatetime','checktime','time' ), 
     'mei'=>array('id'=>'mei_id','mei_name','price','_on'=>'dingdan.mei_id=mei.id'),
   );
 }