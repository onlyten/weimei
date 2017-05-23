<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class DingdanMeiWarnModel extends ViewModel {
   public $viewFields = array(
   	 'mei'=>array('id','mei_name'),
     'dingdan'=>array('mei_id'=>'id', 'id','name','mobile','address','wxid','mei_id','order_id','type','state','addtime','updatetime','checktime','time','_on'=>'dingdan.mei_id=mei.id' ), 
     
     'warn'=>array('id'=>'dingdan_id','warn','_on'=>'dingdan.id=warn.dingdan_id'),
   );
 }