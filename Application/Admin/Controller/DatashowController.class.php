<?php
namespace Admin\Controller;
use Think\Controller;
class DatashowController extends Controller {
	
  
  public function datashow_list() {       
		//$this->order_update1();
		//列表
		if(isset($_SESSION["username"])){
 

			$m = M('dingdan');
      $table1=M('mei');
			if (!I('get.page_now')) {
				$page_now = 1;
			} else {
				$page_now = I('get.page_now');
			}

      if (I('post.txttimefrom')||I('get.txttimefrom')) {
          $ptimef=I('post.txttimefrom');
          $gtimef=I('get.txttimefrom');
          if(strlen($ptimef)>0)
          {
            $timefrom1=$ptimef;
             $timefrom=strtotime($ptimef);
          }
          if(strlen($gtimef)>0)
          {
            $timefrom1=$gtimef;
             $timefrom=strtotime($gtimef);
          }   
      }

      if (I('post.txttimeto')||I('get.txttimeto')) {
          $ptimet=I('post.txttimeto');
          $gtimet=I('get.txttimeto');
          if(strlen($ptimet)>0)
          {
             $timeto1=$ptimet;
             $timeto=strtotime($ptimet);
          }
          if(strlen($gtimet)>0)
          {
             $timeto1=$gtimet;
             $timeto=strtotime($gtimet);
          }   
      }

			if (strlen($timefrom)&&!strlen($timeto)) {
          $map['addtime'] = array('gt',$timefrom); 
		    }
		  if (!strlen($timefrom)&&strlen($timeto)) {
			     $map['addtime'] = array('lt',$timeto); 		            
		  }
      else if(strlen($timefrom)&&strlen($timeto)){
          $map['addtime'] = array(array('gt',$timefrom),array('lt',$timeto)) ; 
      }
			$map['isdelete'] = array('eq',0); 
      //$map['state'] = array('eq',3); 
      //$map['isend'] = array('eq',1); 
      $fukuan['successor']  = array('eq',1);
      $orders = $m->field(array("sum(xiaofei)"=>"totalmoney","sum(coins)"=>"totalcoins","mei_id","successor","name","coins","mobile","addtime","order_id"))->group('order_id')->where($map)->where($fukuan)->page($page_now . ',10')->order('id desc')->select();
      $orderss = $m->field(array("sum(xiaofei)"=>"totalmoney","sum(coins)"=>"totalcoins","mei_id","name","successor","coins","mobile","addtime","order_id"))->group('order_id')->where($map)->where($fukuan)->order('id desc')->select();
      $sum=0;
      //dump($orders);
      $summ=0;
      for($j=0;$j<count($orderss);$j++)
         {
            if(strlen($orderss[$j]['checktime']))
            {
               $orderss[$j]['checktime']=date('Y_m_d H:m:s',$orderss[$j]['checktime']); 
            }
            $mei=$table1->where('id='.$orderss[$j]['mei_id'])->limit(1)->select();
            $orderss[$j]['mei_id']=$mei[0]['mei_name'];
            $sum+=$orderss[$j]['totalmoney'];  //统计总和
            $summ+=$orderss[$j]['totalcoins'];
         }
      //dump($sum);
      for($g=0;$g<count($orders);$g++){
            $orders[$g]['addtime'] = date('Y-m-d H:i:s', $orders[$g]['addtime']);
            $mei=$table1->where('id='.$orders[$g]['mei_id'])->limit(1)->select();
            $orders[$g]['mei_id']=$mei[0]['mei_name'];
          }
     
  
         // dump($orders);
          //die("jj");

			$order_count = count($orders);
			if ($order_count % 10 == 0) {
				$server_pagenum = (int) ($order_count / 10);
			} else {
				$server_pagenum = (int) ($order_count / 10) + 1;
			}
			
			$this->assign('orderlist', $orders);
			$this->assign('page_now', $page_now);
			$this->assign('order_count', $order_count);
			$this->assign('server_pagenum', $server_pagenum);
			$this->assign('stimef', $timefrom1);
			$this->assign('stimet', $timeto1);
      $this->assign('msum', $sum);
      $this->assign('summ',$summ);
			$this->display();
		}else{
			$this->redirect('Login/login');
		}
	}


    public function dingdan_output(){
      
      $m = M('dingdan');
      $table1=M('mei');
       $timefrom=strtotime(I('post.txttimefrom'));
      $timeto = strtotime(I('post.txttimeto'));
      //dump($timefrom);
      //dump($timeto);
      if (strlen($timefrom)&&!strlen($timeto)) {
          $map['addtime'] = array('gt',$timefrom); 
        }
      if (!strlen($timefrom)&&strlen($timeto)) {
           $map['addtime'] = array('lt',$timeto);                 
      }
      else if(strlen($timefrom)&&strlen($timeto)){
          $map['addtime'] = array(array('gt',$timefrom),array('lt',$timeto)) ; 
      }
      $map['isdelete'] = array('eq',0); 
      //$map['state'] = array('eq',3); 
      //$map['isend'] = array('eq',1); 
     // dump($map);

      $orders = $m->field(array("sum(xiaofei)"=>"totalmoney","sum(coins)"=>"totalcoins","mei_id","name","coins","mobile","addtime", "order_id"))->group('order_id')->where($map)->select();
       for($j=0;$j<count($orders);$j++)
         {
            $orders[$j]['addtime']=date('Y_m_d H:m:s',$orders[$j]['addtime']); 
            $mei=$table1->where('id='.$orders[$j]['mei_id'])->limit(1)->select();
            $orders[$j]['mei_id']=$mei[0]['mei_name'];
         }
     //dump($orders);
    //die("222");
      
      foreach ($orders as $key => $value) {
          $data[$key]['key'] = $key+1;
          $data[$key]['order_id'] = $value['order_id'];
          $data[$key]['name'] = $value['name'];        
          $data[$key]['mobile'] = $value['mobile'];
          $data[$key]['addtime'] = $value['addtime'];
          $data[$key]['mei_id'] = $value['mei_id'];
          $data[$key]['totalcoins'] = $value['totalcoins'];
          $data[$key]['totalmoney'] = $value['totalmoney']; 

    }

             $headArr[]='序号';
             $headArr[]='订单号';
             $headArr[]='会员名';
             $headArr[]='会员电话';
             $headArr[]='下单时间';
             $headArr[]='预约项目';            
             $headArr[]='支付维美币';
             $headArr[]='支付金额';
             

      $filename = "订单列表";
      $this->excel_export($filename,$headArr,$data);

}
    //excel导出
    public function excel_export($fileName,$headArr,$data)
    {
        //导入PHPExcel类库
          //Vendor('Excel.PHPExcel'); //导入thinkphp第三方类库
        import("Vendor.excel.PHPExcel");
        import("Vendor.excel.PHPExcel.Writer.Excel5");
        import("Vendor.excel.PHPExcel.IOFactory.php");

        $date = date("Y_m_d",time());
        $fileName .= "_{$date}.xls";

        //创建PHPExcel对象，注意，不能少了\
        $objPHPExcel = new \PHPExcel();
        $objProps = $objPHPExcel->getProperties();

         //设置表头
        $key = ord("A");
        //print_r($headArr);exit;
        foreach($headArr as $v){
            $colum = chr($key);
            $objPHPExcel->setActiveSheetIndex(0) ->setCellValue($colum.'1', $v);
            $objPHPExcel->setActiveSheetIndex(0) ->setCellValue($colum.'1', $v);
            $key += 1;
        }

        $column = 2;
        $objActSheet = $objPHPExcel->getActiveSheet();

        //print_r($data);exit;
        foreach($data as $key => $rows){ //行写入
            $span = ord("A");
            foreach($rows as $keyName=>$value){// 列写入
                $j = chr($span);
                $objActSheet->setCellValue($j.$column, $value);
                $span++;
            }
            $column++;
        }

        $fileName = iconv("utf-8", "gb2312", $fileName);
        //重命名表
        //$objPHPExcel->getActiveSheet()->setTitle('test');
        //设置活动单指数到第一个表,所以Excel打开这是第一个表
        $objPHPExcel->setActiveSheetIndex(0);
        header('Content-Type: application/vnd.ms-excel');
        header("Content-Disposition: attachment;filename=\"$fileName\"");
        header('Cache-Control: max-age=0');

        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output'); //文件通过浏览器下载
        exit;

    }

}