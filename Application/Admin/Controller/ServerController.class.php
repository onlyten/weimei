<?php
namespace Admin\Controller;
use Think\Controller;
class ServerController extends Controller {
	public function server_list() {
		//列表
		if(isset($_SESSION["username"])){
			$m = M('server');
			if (!I('get.page_now')) {
				$page_now = 1;
			} else {
				$page_now = I('get.page_now');
			}
			$server = $m->order('server_weight desc')->where($map)->page($page_now . ',10')->select();
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
			$this->assign('server', $server);
			$this->assign('page_now', $page_now);
			$this->assign('server_count', $server_count);
			$this->assign('server_pagenum', $server_pagenum);
			$this->assign('search_condition', $search_condition);
			$this->display();
		}else{
			$this->redirect('Login/login');
		}
	}
	public function server_add() {
		//添加
		$this->display();
	}

	public function server_add_update() {
		//添加后进行更新
		$server = M("server"); // 实例化User对象
		if (!$server->create()) {
			// 如果创建失败 表示验证没有通过 输出错误提示信息
			exit($server->getError());
		} else {
			// 验证通过 可以进行其他数据操作
		}
		$data['server_name'] = I('post.server_name');
		$data['server_type'] = I('post.server_type');
		$data['server_weight'] = I('post.server_weight');
		$img_filename = gen_random();
		$ext = substr($_FILES['picurl']['name'], strpos($_FILES['picurl']['name'], '.'), strlen($_FILES['picurl']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['picurl']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["picurl"]['size'] != 0) {
			$data['server_img'] = $img_filename . $ext;
		}
		// dump($data);
		if (I('post.server_name')) {
			$m = M('server');
			if ($m->data($data)->add()) {
				$this->success('添加成功', U('server_list'));
			} else {
				$this->error('添加失败，请重试', U('server_list'));
			}
		}

	}

	public function server_delete_update() {
		//删除后更新
		$delete_id = I('post.delete_id');
		//dump($delete_id);
		$map['id'] = array('in', $delete_id);
		$m = M('server');
		if ($m->where($map)->delete()) {
			$this->success('删除成功', U('server_list'));
		} else {
			$this->error('删除失败，请重试', U('server_list'));
			}
		}
		

	public function server_modify() {
		//对修改
		$server_id = I('get.server_id');
		$m = M('server');
		$server = $m->where('id = ' . $server_id)->limit(1)->select();
		// dump($server);
		$this->assign('server', $server);
		$this->display();
	}

	public function server_modify_update() {
		//修改之后进行更新
		// dump(I('get.'));
		$server = M("server"); // 实例化Us对象
		if (!$server->create()) {
			// 如果创建失败 表示验证没有通过 输出错误提示信息
			exit($server->getError());
		} else {
			// 验证通过 可以进行其他数据操作
		}
		$server_id = I('get.server_id');
		$data['server_name'] = I('post.server_name');
		$data['server_type'] = I('post.server_type');
		$data['server_weight'] = I('post.server_weight');
		if ($_FILES["picurl"]['size'] != 0) {
			$img_filename = gen_random();
			$ext = substr($_FILES['picurl']['name'], strpos($_FILES['picurl']['name'], '.'), strlen($_FILES['picurl']['name']) - 1); //拿到后缀
			$upload_path = './Public/upload/img/';
			move_uploaded_file($_FILES['picurl']['tmp_name'], $upload_path . $img_filename . $ext);
			$data['server_img'] = $img_filename . $ext;
		}
		$m = M('server');
		if ($m->where('id = ' . $server_id)->save($data)) {
			$this->success('修改成功', U('server_list'));
		} else {
			$this->error('修改失败，请重试', U('server_list'));
		}
	}

	public function server_check() {
		header("Content-Type:text/html;charset=utf-8");
		$server = D("server"); // 实例化User对象
		if (!$server->create()) {
			// 指定新增数据
			// 如果创建失败 表示验证没有通过 输出错误提示信息
			$this->error($server->getError ());
		}

	}

}