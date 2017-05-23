<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller {
	
  
  public function order_list() {       
		//$this->order_update1();
		//列表
		if(isset($_SESSION["username"])){
			$m = D('DingdanMei');
			if (!I('get.page_now')) {
				$page_now = 1;
			} else {
				$page_now = I('get.page_now');
			}

			if (I('post.orderid1')||I('get.orderid1')) {
          $porderid1=I('post.orderid1');
          $gorderid1=I('get.orderid1');
          if(strlen($porderid1)>0)
          {
             $orderid = trim($porderid1);
          }
          if(strlen($gorderid1)>0)
          {
             $orderid = trim($gorderid1);
          }                   
          $map['order_id'] = array('eq',$orderid); 
		    }
		    if (I('post.uname')||I('get.uname')) {

				  $gname=I('post.uname');
          $uname=I('get.uname');
          if(strlen($gname)>0)
          {
             $name = trim($gname);
          }
          if(strlen($uname)>0)
          {
             $name = trim($uname);
          }			    			    
          $map['name'] = array('eq',$name);   
		    }
		   if (I('post.uphone')||I('get.uphone')) {
          $pphone=I('post.uphone');
          $gphone=I('get.uphone');
          if(strlen($pphone)>0)
          {
             $uphone = trim($pphone);
          }
          if(strlen($gphone)>0)
          {
             $uphone = trim($gphone);
          }                   		    
          $map['mobile'] = array('eq',$uphone);   
		    }
        if (I('post.selstate')||I('post.selstate')=='0'||I('get.selstate')||I('get.selstate')=='0') {
			    $pstate=I('post.selstate');
          $gstate=I('get.selstate');
          if(strlen($pstate)>0)
          {
             $state = trim($pstate);
          }
          if(strlen($gstate)>0)
          {
             $state = trim($gstate);
          }  
           		$map['state'] = array('eq',$state);   
		    }

		   
			$map['isdelete'] = array('eq',0);   
		  //$modal->field("count(*) as count,name")->group("name")->select();
      $fukuan['successor']  = array('eq',1);
			$orders = $m->order('order_id,id desc')->where($map)->where($fukuan)->page($page_now . ',10')->select();
      //dump($orders);
			// echo $m->_sql();
			$order_count = $m->where($map)->where($fukuan)->count();
			if ($order_count % 10 == 0) {
				$server_pagenum = (int) ($order_count / 10);
			} else {
				$server_pagenum = (int) ($order_count / 10) + 1;
			}
			//dump($orders);
      //die("jj");
			$this->assign('orderlist', $orders);
			$this->assign('page_now', $page_now);
			$this->assign('order_count', $order_count);
			$this->assign('server_pagenum', $server_pagenum);
			$this->assign('search_orderid', $orderid);
			$this->assign('search_uname', $name);
			$this->assign('search_uphone', $uphone);
			$this->assign('search_state', $state);
			$this->display();
		}else{
			$this->redirect('Login/login');
		}
	}

	public function server_detail_delete_update() {
		//删除后更新
		$delete_id = I('post.delete_id');
		//dump($delete_id);
		$map['id'] = array('in', $delete_id);
		$m = M('mei');
		if ($m->where($map)->delete()) {
			$this->success('删除成功', U('server_detail_list'));
		} else {
			$this->error('删除失败，请重试', U('server_detail_list'));
			}
		}
    
	public function order_update() {
		//对修改
		$order_id = I('get.order_id');
		//echo($order_id );
		$m = D('DingdanMei');
		$order1 = $m->where('dingdan.id = ' . $order_id)->limit(1)->select();
		$this->assign('order1', $order1);
		$this->display();
	}

	public function order_modify_update(){
    $orders = M('dingdan'); // 实例化订单
    $mei = M('mei'); // 实例化美容项目

		$order_id = I('get.order_id');
    $order=$orders->where(' id= '.$order_id)->limit(1)->select();
    //dump($order);
    $mei1=$mei->where(' id= '.$order[0]['mei_id'])->limit(1)->select();
    //dump($mei1);
		$data['name'] = I('post.txtname');
		$data['mobile'] = I('post.txtphone');
		$data['address'] = I('post.txtaddr');
    $data['remark'] = I('post.txtnote');
		//$data['orderstate'] = 3;  //修改状态
		$state=I('post.selstate');
		$data['state']=$state;
    //dump($mei1[0][$state]);
    if($mei1[0]['cishu']==1)
    {
      if($state!='0')
       {
         $data['isend']=1;
       }

    }
     if($state=='3')
     {
      $data['checktime'] =strtotime(time());
     }

    //dump(data);
    //die('s2');
		//echo ($data['state']);
		$data['updatetime'] =  date('y-m-d H:i:s',time());
		$m = M('dingdan'); 
		if ($m->where('id = ' . $order_id)->save($data)) {
			$this->success('修改成功', U('order_list'));
		} else {
			$this->error('修改失败，请重试', U('order_list'));
		}
	}

    //订单评价
	public function order_pj()
	{
        $order_id = I('get.sid');
        $m = M("pingjia"); // 实例化Us对象
        $map['order_id'] = array('eq',$order_id);
        $order1 = $m->where($map)->limit(1)->select();
        $this->assign('order1', $order1);
        $this->display();
	}

	  //删除订单
      public function order_delete_update(){               
          $delete_id = I('post.delete_id');
          $map['id'] = array('in', $delete_id);
           //dump( $map);     	
            $data['isdelete']='1';     
            $m = M('dingdan');     
			if ($m->where($map)->save($data)){
				$this->success('删除成功',U('order_list'));
			} else {
				$this->error('删除失败，请重试',U('order_list'));
			}
      }
      
       //派工
       public function order_pd(){ 
       //	echo "aa";
      $order_id = I('get.sid'); 

      $d=M("dingdan");
      $order=$d->where("id=".$order_id)->limit(1)->select();
      $pdids=$order[0]['hkeeperid'];
      if(strlen($pdids)>0)
      {
         $pdids=explode('-', $pdids);
      }

      $m = M('housekeeper');
			$housekeeper = $m->order('id asc')->where($map)->select();
      foreach ($housekeeper as $key=>$value) { 
        $j=$value['id'];
        if(in_array($j, $pdids))
        {
          $housekeeper[$key]['ispd'] = 1;
        }
        else
        {
          $housekeeper[$key]['ispd'] = 0;
        }
      }
			$this->assign('housekeeper', $housekeeper);
			$this->assign('orderid', $order_id);
			$this->display();
       }

      //派工
       public function order_pd_update(){  
       	//echo "bb";             
          $delete_id = I('post.delete_id');
          $map['id'] = array('in', $delete_id);
           //dump( $map);  
          $a=$map['id'][1];
          for($i=0;$i<count($a);$i+=1)
          {
          	  if($i == count($a)-1)
          	  {
                $c=$c.$a[$i];
          	  }
          	  else
          	  {
          	  	 $c=$c.$a[$i].'-';
          	  }
          }
           $data['hkeeperid']=$c;     
           $m = M('dingdan'); 
           $orderid= I('post.orderid');
           $aq['id'] = array('eq',$orderid);   
			if ($m->where($aq)->save($data)){
				$this->success('派单成功',U('order_list'));
			} else {
				$this->error('派单失败，请重试',U('order_list'));
			}

      }

     //管家提醒
     public function order_warn(){
           $id = I('get.sid');
           $map3['dingdan_id']=array('eq',$id);
           $m2=M('warn');
           $m3 = $m2->where($map3)->limit(1)->select();
             if($m3[0]!=null)
             {
             	 $m = D('DingdanMeiWarn'); 
                 $map['dingdan.id'] = array('eq',$id);
                 $order1 = $m->where($map)->limit(1)->select();
             }
             else
             {
                 $m = D('DingdanMei'); 
                 $map['dingdan.id'] = array('eq',$id);
                 $order1 = $m->where($map)->limit(1)->select();

             }
          
           $this->assign('order1', $order1);
           $this->display();
     }

    //新增管家提醒
    public function order_warn_modify_update(){

             $id = I('post.txtorderid');        
             $m = M('dingdan'); 
             $map['id'] = array('eq',$id);
             $order1 = $m->where($map)->limit(1)->select();
             $login=M('login');
             $wxid=$order1[0]['wxid'];
             $map1[wxid]=array('eq',$wxid);
             $login1=$login->where($map1)->limit(1)->select(); 
             $loginid=$login1[0]['id'];
             $data['dingdan_id']= $id;
             $data['login_id']=$loginid;
             $data['warn']=I('post.txtwarn');

             $m2=M('warn');
             $map3['dingdan_id']=array('eq',$id);

             $m3 = $m2->where($map3)->limit(1)->select();

             

             if($m3[0]!=null)
             {
             	if ($m2->where($map3)->save($data)) {
				$this->success('修改成功', U('order_list'));
			     } else {
				$this->error('修改失败，请重试', U('order_list'));
			   }
             }
             else
             {
			if ($m2->data($data)->add()) {
				$this->success('添加成功', U('order_list'));
			} else {
				$this->error('添加失败，请重试', U('order_list'));
			}
			}
		
    }
    

    public function dingdan_output(){
      
      if (I('post.orderid1')) {
        //echo  (I('post.orderid1'));
          $orderid = I('post.orderid1');
              $map['order_id'] = array('eq',$orderid); 
        }
        if (I('post.uname')) {
        //echo  (I('post.uname'));
          $uname = I('post.uname');         
              $map['dingdan.name'] = array('eq',$uname);   
        }
       if (I('post.uphone')) {
        //echo  (I('post.uphone'));
          $uphone = I('post.uphone');         
              $map['dingdan.mobile'] = array('eq',$uphone);   
        }
        if (I('post.selstate')||I('post.selstate')=='0') {
          $state = I('post.selstate');  
              $map['dingdan.state'] = array('eq',$state);   
        }      
      $map['isdelete'] = array('eq',0);   
      $d = D('DingdanMei');
      $dingdan_guige = $d->where($map)->select();
      
      foreach ($dingdan_guige as $key => $value) {
          $data[$key]['key'] = $key+1;
          $data[$key]['order_id'] = $value['order_id'];
          $data[$key]['name'] = $value['name'];        
          $data[$key]['mobile'] = $value['mobile'];
          $data[$key]['address'] = $value['address'];
          $data[$key]['time'] = $value['time'];
          $data[$key]['mei_name'] = $value['mei_name'];
          $data[$key]['price'] = $value['price'];
          
          switch($value['state']){
              case 0:
               $data[$key]['state'] = "进行中";
               break;
              case 1:
               $data[$key]['state'] = "取消";
               break;
              case 2:
               $data[$key]['state'] = "未服务";
               break;
              case 3:
               $data[$key]['state'] = "完成";
               break;
          }
          $data[$key]['coins'] = $value['coins'];
          $data[$key]['xiaofei'] = $value['xiaofei'];
          $data[$key]['checktime'] =date('Y_m_d H:m:s', $value['checktime']);
    }

             $headArr[]='序号';
             $headArr[]='订单号';
             $headArr[]='会员名';
             $headArr[]='会员电话';
             $headArr[]='会员地址';
             $headArr[]='预约时间';
             $headArr[]='预约项目';
             $headArr[]='项目单价';
             $headArr[]='订单状态';             
             $headArr[]='使用维美币';
             $headArr[]='支付金额';
             $headArr[]='完成时间';

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