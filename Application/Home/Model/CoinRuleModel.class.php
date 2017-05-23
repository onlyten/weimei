<?php
namespace Home\Model;
use Think\Model\ViewModel;
class CoinRuleModel extends ViewModel {
   public $viewFields = array(
     'coin'=>array('id','wxid','time','usee','nouse',), 
     'coinrule'=>array('id'=>'coinrule_id','coins','timeto','type','_on'=>'coin.coinrule_id=coinrule.id'),
   );
 }