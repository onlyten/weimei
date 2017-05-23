<?php
namespace Admin\Controller;
use Think\Controller;
class CoinactivityController extends Controller {
     
      //活动列表
      public function coinactivity_list(){
      	//echo("活动列表");
         	//列表
		if(isset($_SESSION["username"])){
			$m = M('coinactivity');
			if (!I('get.page_now')) {
				$page_now = 1;
			} else {
				$page_now = I('get.page_now');
			}
			$map=array('isdelete' =>'0'  );
			$server = $m->order('id desc')->where($map)->page($page_now . ',10')->select();
			for($i=0;$i<count($server);$i++)
            {
                $server[$i]['timelong']=date('Y-m-d',$server[$i]['timelong']);
            }
			// echo $m->_sql();
			$server_count = $m->where($map)->count();
			if ($server_count % 10 == 0) {
				$server_pagenum = (int) ($server_count / 10);
			} else {
				$server_pagenum = (int) ($server_count / 10) + 1;
			}
			//dump($server);
			//echo("你好");
			//die("oiu");
			$this->assign('coinactivitys', $server);
			$this->assign('page_now', $page_now);
			$this->assign('server_count', $server_count);
			$this->assign('server_pagenum', $server_pagenum);
			
			$this->display();
		}else{
			$this->redirect('Login/login');
		}
      }

      //新增活动
      public function coinactivity_add_update(){
         //echo "1";
      	 $m = M('coinactivity');
      	 
      	 $activits=$m->order('id desc')->where($map)->limit(1)->select();
      	 $urlid=$activits[0]['id']+1;
         $data['title']=I('post.txttitle');
         $data['introduction']=I('post.txtintro');
         $data['coin']=I('post.txtcoin');
         $data['timelong']=strtotime(I('post.txttimein'));
         //$url1=(__ACTION__);
         //dump($url1);
         $url2= $_SERVER["SERVER_NAME"].(__ACTION__); 
		 $data['acurl']=$url2.'/'.$urlid;
         $data['addtime']=date('y-m-d h:i:s',time());
         $data['isdelete']='0';

         
			if ($m->data($data)->add()) {
				$this->success('添加成功',U('coinactivity_list'));
			} else {
				$this->error('添加失败，请重试',U('coinactivity_list'));
			}
      }
      //更改活动页面初始化
      public function coinactivity_modify(){
      	    //echo ("1");
            $server = M('coinactivity'); // 实例化coinactivity对象
           // echo ("2");
            $id = I('get.sid');
            //echo ($id);
            $mei = $server->where('id = ' . $id)->limit(1)->select();
            $mei[0]['timelong']=date('Y-m-d',$mei[0]['timelong']);
            $this->assign('coinactivity', $mei);
		    $this->display();
      }

      //更改活动
      public function coinactivity_modify_update(){

      	  $mei_id = I('get.sid');

         $data['title']=I('post.txttitle');
         $data['introduction']=I('post.txtintro');
         $data['coin']=I('post.txtcoin');
         $data['timelong']=strtotime(I('post.txttimein'));               
         $data['updatetime']=date('Y-m-d',time());

         $m = M('coinactivity');        
			if ($m->where('id = ' . $mei_id)->save($data)){
				$this->success('修改成功',U('coinactivity_list'));
			} else {
				$this->error('修改失败，请重试',U('coinactivity_list'));
			}

      }
       //删除活动
      public function coinactivity_delete_update(){
         
      
          $delete_id = I('post.delete_id');
          $map['id'] = array('in', $delete_id);
          // dump( $map);
      	
            $data['isdelete']='1';     
            $m = M('coinactivity');     
			if ($m->where($map)->save($data)){
				$this->success('删除成功',U('coinactivity_list'));
			} else {
				$this->error('删除失败，请重试',U('coinactivity_list'));
			}

      }
      


	}