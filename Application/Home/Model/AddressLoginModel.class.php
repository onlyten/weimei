<?php
namespace Home\Model;
use Think\Model\ViewModel;
class AddressLoginModel extends ViewModel {
   public $viewFields = array(
     'address'=>array('id','wxid','qu','id','address','postcode','name','mobile'), 
     'login'=>array('wxid','_on'=>'address.wxid=login.wxid'),
   );
 }