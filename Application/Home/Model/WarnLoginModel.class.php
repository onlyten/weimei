<?php
namespace Home\Model;
use Think\Model\ViewModel;
class WarnLoginModel extends ViewModel {
   public $viewFields = array(
     'warn'=>array('id','warn'), 
     'dingdan'=>array('id'=>'dingdan_id','mei_id','_on'=>'warn.dingdan_id=dingdan.id'),
     'login'=>array('id'=>'login_id','wxid','_on'=>'warn.login_id=login.id'),
     'mei'=>array('id'=>'mei_id','mei_name','_on'=>'dingdan.mei_id=mei.id'),
   );
 }