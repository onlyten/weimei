<?php
namespace Admin\Controller;
use Think\Controller;
class SystemsetController extends Controller {
  public function systemset_modify() {
		
		//echo($order_id );
		$m = M('systemset');
		$order1 = $m->select();
		//dump($order1);
        
		$this->assign('systemset', $order1);
		$this->display();
	}

   public function systemset_modify_update() {
		
		
		$m = M('systemset');
		$sid=I('get.sid');
		//echo($sid);
		$data['phone']=I('post.txtphone');
		$data['hourok']=I('post.txthourok');
		$data['hourcancle']=I('post.txthourcancle');
		$data['timefrom']=I('post.txttimef');
		$data['timeto']=I('post.txttimet');
		$data['updatetime']=date('y-m-d H:i:s',time());;
		
		if ($m->where('id = ' . $sid)->save($data)) {
			$this->success('修改成功');
		} else {
			$this->error('修改失败，请重试');
		}		
	}

	 public function hdurl_modify() {

		$m = M('url');
		$map["type"]=array('eq',1);
		$order1 = $m->where($map)->limit(1)->select();
		//dump($order1);       
		$this->assign('hdurl', $order1);
		$this->display();
	}

	 public function hdurl_modify_update() {

		$m = M('url');
		
		$m = M('url');
		$id=I("get.sid");
		$data['url']=I("post.txturl");
		$data['updatetime']=date('y-m-d H:m:s',time());
		$map['id']=array('eq',$id);
		if($m->where($map)->save($data))
		{
			$this->success('活动路径修改成功');
		} else {
			$this->error('活动路径修改失败，请重试');
		}
	}

	 public function tqurl_modify() {

		$m = M('url');
		$map["type"]=array('eq',2);
		$order1 = $m->where($map)->limit(1)->select();
		//dump($order1);
        
		$this->assign('tqurl', $order1);
		$this->display();
	}

	public function tqurl_modify_update() {

		$m = M('url');
		$id=I("get.sid");
		$data['url']=I("post.txturl");
		$data['updatetime']=date('y-m-d H:m:s',time());
		$map['id']=array('eq',$id);
		if($m->where($map)->save($data))
		{
			$this->success('特权路径修改成功');
		} else {
			$this->error('特权路径修改失败，请重试');
		}


	}


}

