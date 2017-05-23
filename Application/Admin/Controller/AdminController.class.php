<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
     
      //管理员列表
      public function admin_list(){

		if(isset($_SESSION["username"])){
			$m = M('admininfo');
			if (!I('get.page_now')) {
				$page_now = 1;
			} else {
				$page_now = I('get.page_now');
			}
			$map=array('isdelete' =>'0'  );
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
			$this->assign('adminlist', $server);
			$this->assign('page_now', $page_now);
			$this->assign('server_count', $server_count);
			$this->assign('server_pagenum', $server_pagenum);
			
			$this->display();
		}else{
			$this->redirect('Login/login');
		}
      }

      //新增管理员
      public function admin_add_update(){
      	 $m = M('admininfo');
         $data['name']=I('post.txtname');
         $data['password']=I('post.txtpass');
         $data['type']="2";
         $data['addtime']=date('y-m-d H:i:s',time());
         $data['isdelete']='0';

         
			if ($m->data($data)->add()) {
				$this->success('添加成功',U('admin_list'));
			} else {
				$this->error('添加失败，请重试',U('admin_list'));
			}
      }

       //删除活动
      public function admin_delete_update(){
         
      
          $delete_id = I('post.delete_id');
          $map['id'] = array('in', $delete_id);
          // dump( $map);
      	
            $data['isdelete']='1';     
            $m = M('admininfo');     
			if ($m->where($map)->save($data)){
				$this->success('删除成功',U('admin_list'));
			} else {
				$this->error('删除失败，请重试',U('admin_list'));
			}

      }
      


	}