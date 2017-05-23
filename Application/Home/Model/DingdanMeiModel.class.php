<?php
namespace Home\Model;
use Think\Model\ViewModel;
class DingdanMeiModel extends ViewModel {
   public $viewFields = array(
     'dingdan'=>array('id','name','mobile','address','coins','remark','wxid','mei_id','order_id','type','state','addtime','updatetime','checktime','time' ), 
     'mei'=>array('id'=>'mei_id','cishu','_on'=>'dingdan.mei_id=mei.id'),
   );
 }