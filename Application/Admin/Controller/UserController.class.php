<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
     
      //会员列表
      public function user_list(){
         	//列表
		if(isset($_SESSION["username"])){
			$m = M('login');
			if (!I('get.page_now')) {
				$page_now = 1;
			} else {
				$page_now = I('get.page_now');
			}
      if (I('post.txtname')) {

          $name= I('post.txtname');
           //echo $name;
          $map['name'] = array('eq',$name); 
        }
        if (I('post.txtphone')) {
          $phone = I('post.txtphone');  
           //echo $phone;       
          $map['mobile'] = array('eq',$phone);   
        }
        if (I('post.sellevel')||I('get.sellevel')) {

          $level1=I('post.sellevel');
          $level2=I('get.sellevel');
        if(strlen($level1)) {        
          $state = I('post.sellevel');}
        else if(strlen($level2)) {        
          $state = I('get.sellevel');} 
              $map['level'] = array('eq',$state);   
        }
        $map['isdelete'] = array('eq',0);
        
			$server = $m->order('id desc')->where($map)->page($page_now . ',10')->select();
			$server_count = $m->where($map)->count();
			if ($server_count % 10 == 0) {
				$server_pagenum = (int) ($server_count / 10);
			} else {
				$server_pagenum = (int) ($server_count / 10) + 1;
			}
			//dump($server);
			//echo("你好");
			//die("oiu");
      $this->assign('sname', $name);
      $this->assign('sphone', $phone);
      $this->assign('slevel', $state);
			$this->assign('userlist', $server);
			$this->assign('page_now', $page_now);
			$this->assign('server_count', $server_count);
			$this->assign('server_pagenum', $server_pagenum);

			$this->display();
		}else{
			$this->redirect('Login/login');
		}
      }

      //更改会员页面初始化
      public function user_modify(){
            $server = M('login'); // 实例化coinactivity对象
            $id = I('get.sid');
            $mei = $server->where('id = ' . $id)->limit(1)->select();
           /* $d=M('coin');
		
            	$search['wxid']=array('eq',$mei[0]['wxid']);
               //dump($search);
            	$list = $d->order('id desc')->where($search)->select();
            	//dump($list);
            	$sum=0;
            	for($j=0;$j<count($list);$j++)
                {
                 $sum+=$list[$j]['nouse'];
                }
                //dump($sum);
                $mei[0]['yue']=$sum;*/
                         
            $this->assign('userinfo', $mei);
		        $this->display();
      }

      //更改会员
      public function user_modify_update(){

      	 $mei_id = I('get.sid');
           //dump($mei_id);
         $data['name']=I('post.txtname');
         $data['mobile']=I('post.txtphone');
         $data['address']=I('post.txtaddress');
         
         $member=I('post.selmember');
         $data['member']=$member;
         if($member==0)
         {
            $data['card_num'] ="";
         }
         if($member==1)
         {
            $data['card_num'] = I('post.card_num');
         }

         $data['yue']=I('post.txtyue');
         $data['xiaofei'] = I('post.txtxiaofei');
         $data['note'] = I('post.txtnote');

         $a=I('post.sellevel');
         $data['level']=$a;        
         $m = M('login');        
			if ($m->where('id = ' . $mei_id)->save($data)){
        
				$this->success('修改成功',U('user_list'));
			} else {
        //die("b");
				$this->error('修改失败，请重试',U('user_list'));
			}

      }
       //删除会员
      public function user_delete_update(){
         
      
          $delete_id = I('post.delete_id');
          $map['id'] = array('in', $delete_id);
          // dump( $map);
      	
            $data['isdelete']='1';     
            $m = M('login');     
			if ($m->where($map)->save($data)){
				$this->success('删除成功',U('user_list'));
			} else {
				$this->error('删除失败，请重试',U('user_list'));
			}

      }

        //会员充值页面初始化
      public function user_addcoin(){
            
            $m = M('coinrule');
            $crule=$m->where("type=2")->limit(1)->select(); 
            $crule[0]["timeto"]=date("Y_m_d", $crule[0]["timeto"]);
            $server = M('login'); // 实例化coinactivity对象
            $id = I('get.sid');
            $mei = $server->where('id = ' . $id)->limit(1)->select();                        
            $this->assign('userinfo', $mei);
            $this->assign('crule', $crule);
            $this->display();
      }

        //会员充值操作
      public function user_addcoin_modify(){
            
            $m = M('coinrule');
            $d= M('login');
            $d2=M('coin');
            $uid = I('post.userid');
            $cid = I('post.cruleid');           
            $coins=I('post.txtcoins');
            $crule=$m->where("id=".$cid." and type=2")->select();

            $cyue=($coins/100)*$crule[0]['coins']; //计算赠送的唯美币
            $coins=$cyue+$coins;
            $user=$d->where("id=".$uid)->select();

            $user[0]['yue']+=$coins;

            if($d->where("id=".$uid)->save($user[0])) //给用户加充值的唯美币
            {
              $sql="coinrule_id=".$cid." and wxid= '".$user[0]['wxid']."' and type=3";

                  $cscoin=$d2->where($sql)->select();
                  if(count($cscoin)>0)
                  {
                      //在该条记录上修改
                      $cscoin[0]['nouse']+=$coins; //修改可用唯美币
                      $cscoin[0]['timeto']=$crule[0]['timeto']; //修改充值截止时间
                      $d2->where('id='.$cscoin[0]['id'])->save($cscoin[0]);
                  }
                  else
                  {
                     //新增改用户的充送记录
                     $data['wxid']=$user[0]['wxid'];
                     $data['coinrule_id']=$cid;
                     $data['usee']=0;
                     $data['nouse']+=$coins;
                     $data['timeto']=$crule[0]['timeto'];
                     $data['type']=3;
                     $data['time']=time(); //新增时间
                     $d2->data($data)->add();
                 }
                 $this->success('添加成功', U('user_list'));
            }
            else
            {
                $this->error('添加失败，请重试', U('user_list'));
            }



      }


      public function user_output(){
      $d = M('login');
      $userlist = $d->where(' isdelete=0 ')->select();
      //dump($dingdan_guige);
      // dump($erweima_record);
      foreach ($userlist as $key => $value) {
          $data[$key]['key'] = $key+1;
          $data[$key]['name'] = $value['name'];
          $data[$key]['mobile'] = $value['mobile'];
          $data[$key]['address'] = $value['address']; 
          
          switch ($value['member']) {
            case '0':
              $data[$key]['member'] = '线上成员';
              break;
            case '1':
              $data[$key]['member'] = '线下成员';
              break;
          }    

          switch ($value['level']) {
              case '1':
              $data[$key]['level'] = '暂无';
              break;
            case '2':
              $data[$key]['level'] = '闺蜜卡';
              break;
            case '3':
              $data[$key]['level'] = '潜力卡';
              break;
            case '4':
              $data[$key]['level'] = '维美女人卡';
              break;
            case '5':
              $data[$key]['level'] = '魅力女人卡';
              break;
            case '6':
              $data[$key]['level'] = '精致女人卡';
              break;
            case '7':
              $data[$key]['level'] = '完美女人卡';
              break;
          }    
          //$data[$key]['level'] = $value['level'];
          //$data[$key]['member'] = $value['member'];
          if( strlen($value['card_num'])>0)
          {
          $data[$key]['card_num'] = $value['card_num']; 
          }
          else
          {
            $data[$key]['card_num'] ="/" ;
          }       
          $data[$key]['yue'] = $value['yue'];
          $data[$key]['time'] = $value['time'];          
    }

             $headArr[]='序号';
             $headArr[]='会员名';
             $headArr[]='会员电话';
             $headArr[]='会员地址';            
             $headArr[]='会员类型';
             $headArr[]='会员等级';
             $headArr[]='会员卡号';
             $headArr[]='可用唯美币';
             $headArr[]='新增时间';
             $filename = "会员列表";
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