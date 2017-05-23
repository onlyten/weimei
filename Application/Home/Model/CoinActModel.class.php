<?php
namespace Home\Model;
use Think\Model\ViewModel;
class CoinActivityModel extends ViewModel {
   public $viewFields = array(
     'coin'=>array('id','wxid','time','usee','nouse'), 
     'coinactivity'=>array('id'=>'coinactivity_id','coin','timelong','_on'=>'coin.coinactivity_id=coinactivity.id'),
   );
 }