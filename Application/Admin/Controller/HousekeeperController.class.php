<?php
namespace Admin\Controller;
use Think\Controller;
class HousekeeperController extends Controller {
	public function housekeeper_list() {
		//列表
		if(isset($_SESSION["username"])){
			$m = M('housekeeper');
			if (!I('get.page_now')) {
				$page_now = 1;
			} else {
				$page_now = I('get.page_now');
			}
			$housekeeper = $m->where($map)->page($page_now . ',10')->select();
			// echo $m->_sql();
			$housekeeper_count = $m->where($map)->count();
			if ($housekeeper_count % 10 == 0) {
				$housekeeper_pagenum = (int) ($housekeeper_count / 10);
			} else {
				$housekeeper_pagenum = (int) ($housekeeper_count / 10) + 1;
			}
			//dump($housekeeper);
			//echo("你好");
			//die("oooooo");
			$this->assign('housekeeper', $housekeeper);
			$this->assign('page_now', $page_now);
			$this->assign('housekeeper_count', $housekeeper_count);
			$this->assign('housekeeper_pagenum', $housekeeper_pagenum);
			$this->display();
		}else{
			$this->redirect('Login/login');
		}
	}
	public function housekeeper_add() {
		//添加
		$this->display();
	}

	public function housekeeper_add_update() {
		//添加后进行更新
		    $Housekeeper = D("Housekeeper"); // 实例化User对象
    if (!$Housekeeper->create()){
         // 如果创建失败 表示验证没有通过 输出错误提示信息
         exit($Housekeeper->getError());
    }else{
         // 验证通过 可以进行其他数据操作
    }
		$data['job_num'] = I('post.job_num');
		$data['name'] = I('post.name');
		$data['title'] = I('post.title');
		$data['xueli'] = I('post.xueli');
		$data['pingjia'] = I('post.pingjia');
		$data['cishu'] = I('post.cishu');
		$data['dashang'] = I('post.dashang');
		$data['rzjl'] = I('post.rzjl');
		$data['scxm'] = I('post.scxm');
		$data['type'] = I('post.shuxing');

		$img_filename = gen_random();
		$ext = substr($_FILES['pic_tou']['name'], strpos($_FILES['pic_tou']['name'], '.'), strlen($_FILES['pic_tou']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['pic_tou']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["pic_tou"]['size'] != 0) {
			$data['pic_tou'] = $img_filename . $ext;
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['pic_xing1']['name'], strpos($_FILES['pic_xing1']['name'], '.'), strlen($_FILES['pic_xing1']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['pic_xing1']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["pic_xing1"]['size'] != 0) {
			$data['pic_xing'] = $img_filename . $ext;
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['pic_xing2']['name'], strpos($_FILES['pic_xing2']['name'], '.'), strlen($_FILES['pic_xing2']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['pic_xing2']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["pic_xing2"]['size'] != 0) {
			$data['pic_xing'] = $data['pic_xing']."*".$img_filename . $ext;
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['pic_xing3']['name'], strpos($_FILES['pic_xing3']['name'], '.'), strlen($_FILES['pic_xing3']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['pic_xing3']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["pic_xing3"]['size'] != 0) {
			$data['pic_xing'] = $data['pic_xing']."*".$img_filename . $ext;
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['zzzs1']['name'], strpos($_FILES['zzzs1']['name'], '.'), strlen($_FILES['zzzs1']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['zzzs1']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["zzzs1"]['size'] != 0) {
			$data['zzzs'] = $img_filename . $ext."|". I('post.step_detail1');
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['zzzs2']['name'], strpos($_FILES['zzzs2']['name'], '.'), strlen($_FILES['zzzs2']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['zzzs2']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["zzzs2"]['size'] != 0) {
			$data['zzzs'] = $data['zzzs']."*".$img_filename . $ext."|". I('post.step_detail2');
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['zzzs3']['name'], strpos($_FILES['zzzs3']['name'], '.'), strlen($_FILES['zzzs3']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['zzzs3']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["zzzs3"]['size'] != 0) {
			$data['zzzs'] = $data['zzzs']."*".$img_filename . $ext."|". I('post.step_detail3');
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['zzzs4']['name'], strpos($_FILES['zzzs4']['name'], '.'), strlen($_FILES['zzzs4']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['zzzs4']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["zzzs4"]['size'] != 0) {
			$data['zzzs'] = $data['zzzs']."*".$img_filename . $ext."|". I('post.step_detail4');
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['zzzs5']['name'], strpos($_FILES['zzzs5']['name'], '.'), strlen($_FILES['zzzs5']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['zzzs5']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["zzzs5"]['size'] != 0) {
			$data['zzzs'] = $data['zzzs']."*".$img_filename . $ext."|". I('post.step_detail5');
		}

		
		//dump($data);
		if (I('post.name')) {
			$m = M('housekeeper');
			if ($m->data($data)->add()) {
				$this->success('添加成功', U('housekeeper_list'));
			} else {
				$this->error('添加失败，请重试', U('housekeeper_list'));
			}
		}

	}

	public function housekeeper_delete_update() {
		//删除后更新
		$delete_id = I('post.delete_id');
		//dump($delete_id);
		$map['id'] = array('in', $delete_id);
		$m = M('housekeeper');
		if ($m->where($map)->delete()) {
			$this->success('删除成功', U('housekeeper_list'));
		} else {
			$this->error('删除失败，请重试', U('housekeeper_list'));
			}
		}
		

	public function housekeeper_modify() {
		
		//修改
		$housekeeper_id = I('get.housekeeper_id');
		$m = M('housekeeper');
		$housekeeper = $m->where('id = ' . $housekeeper_id)->limit(1)->select();
		// dump($housekeeper);
		//分割资质证书图片
        $i=0;
		$str = $housekeeper[0]['zzzs'];
		$arr = explode("*",$str);
		foreach($arr as $u){
			$strarr = explode("|",$u);
			foreach($strarr as $newstr){
				//echo $newstr."</br>"; 
                $zzzs[$i]=$newstr;
                $i++;
			}
		}
        //dump($zzzs);
        //分割形象图片
		$j=0;
        $str2=$housekeeper[0]['pic_xing'];
        $arr2= explode("*",$str2);
        foreach($arr2 as $newstr2)
        {
           $pic_xing[$j]=$newstr2;
           $j++;
        }
        //dump($pic_xing); 

        $this->assign('zzzs', $zzzs);
        $this->assign('pic_xing', $pic_xing);
        $this->assign('housekeeper', $housekeeper);
		$this->display();
	}

	public function housekeeper_modify_update() {
		//对修改
		$housekeeper_id = I('get.housekeeper_id');
		//echo ($housekeeper_id);
		$m = M('housekeeper');
		$housekeeper = $m->where('id = ' . $housekeeper_id)->limit(1)->select();
        //dump($czbz);
        //分割形象照图片
		$j=0;
        $str2=$housekeeper[0]['pic_xing'];
        $arr2= explode("*",$str2);
        foreach($arr2 as $newstr2)
        {
           $pic_xing[$j]=$newstr2;
           $j++;
        }

       //分割资质证书图片
        $i=0;
		$str = $housekeeper[0]['zzzs'];
		$arr = explode("*",$str);
		foreach($arr as $u){
			$strarr = explode("|",$u);
			foreach($strarr as $newstr){
				//echo $newstr."</br>"; 
                $zzzs[$i]=$newstr;
                $i++;
			}
		}


		$housekeeper_id = I('get.housekeeper_id');
	    $data['job_num'] = I('post.job_num');
		$data['name'] = I('post.name');
		$data['title'] = I('post.title');
		$data['xueli'] = I('post.xueli');
		$data['pingjia'] = I('post.pingjia');
		$data['cishu'] = I('post.cishu');
		$data['dashang'] = I('post.dashang');
		$data['rzjl'] = I('post.rzjl');
		$data['scxm'] = I('post.scxm');
		$data['type'] = I('post.shuxing');
		//echo (I('post.cishu'));
		$img_filename = gen_random();
		$ext = substr($_FILES['pic_tou']['name'], strpos($_FILES['pic_tou']['name'], '.'), strlen($_FILES['pic_tou']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['pic_tou']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["pic_tou"]['size'] != 0) {
			$data['pic_tou'] = $img_filename . $ext;
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['pic_xing1']['name'], strpos($_FILES['pic_xing1']['name'], '.'), strlen($_FILES['pic_xing1']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['pic_xing1']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["pic_xing1"]['size'] != 0) {
			$data['pic_xing'] = $img_filename . $ext;
		}
		if($_FILES["pic_xing1"]['size'] == 0)
		{
			//echo ($items[0]);
			$data['pic_xing'] = $pic_xing[0];
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['pic_xing2']['name'], strpos($_FILES['pic_xing2']['name'], '.'), strlen($_FILES['pic_xing2']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['pic_xing2']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["pic_xing2"]['size'] != 0) {
			$data['pic_xing'] = $data['pic_xing']."*".$img_filename . $ext;
		}
		else
		{
			$data['pic_xing'] = $data['pic_xing']."*".$pic_xing[1];
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['pic_xing3']['name'], strpos($_FILES['pic_xing3']['name'], '.'), strlen($_FILES['pic_xing3']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['pic_xing3']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["pic_xing3"]['size'] != 0) {
			$data['pic_xing'] = $data['pic_xing']."*".$img_filename . $ext;
		}
		else
		{
			$data['pic_xing'] = $data['pic_xing']."*".$pic_xing[2];
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['zzzs1']['name'], strpos($_FILES['zzzs1']['name'], '.'), strlen($_FILES['zzzs1']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['zzzs1']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["zzzs1"]['size'] != 0) {
			$data['zzzs'] = $img_filename . $ext."|". I('post.step_detail1');
		}
		else
		{
            $data['zzzs'] =$zzzs[0]."|". I('post.step_detail1');
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['zzzs2']['name'], strpos($_FILES['zzzs2']['name'], '.'), strlen($_FILES['zzzs2']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['zzzs2']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["zzzs2"]['size'] != 0) {
			$data['zzzs'] = $data['zzzs']."*".$img_filename . $ext."|". I('post.step_detail2');
		}
		else
		{
            $data['zzzs'] =$data['zzzs']."*".$zzzs[2]."|". I('post.step_detail2');
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['zzzs3']['name'], strpos($_FILES['zzzs3']['name'], '.'), strlen($_FILES['zzzs3']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['zzzs3']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["zzzs3"]['size'] != 0) {
			$data['zzzs'] = $data['zzzs']."*".$img_filename . $ext."|". I('post.step_detail3');
		}
		else
		{
            $data['zzzs'] =$data['zzzs']."*".$zzzs[4]."|". I('post.step_detail3');
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['zzzs4']['name'], strpos($_FILES['zzzs4']['name'], '.'), strlen($_FILES['zzzs4']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['zzzs4']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["zzzs4"]['size'] != 0) {
			$data['zzzs'] = $data['zzzs']."*".$img_filename . $ext."|". I('post.step_detail4');
		}
		else
		{
            $data['zzzs'] =$data['zzzs']."*".$zzzs[6]."|". I('post.step_detail4');
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['zzzs5']['name'], strpos($_FILES['zzzs5']['name'], '.'), strlen($_FILES['zzzs5']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['zzzs5']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["zzzs5"]['size'] != 0) {
			$data['zzzs'] = $data['zzzs']."*".$img_filename . $ext."|". I('post.step_detail5');
		}
		else
		{
            $data['zzzs'] =$data['zzzs']."*".$zzzs[8]."|". I('post.step_detail5');
		}

		

		//dump($data);
		$m = M('housekeeper');
		if ($m->where('id = ' . $housekeeper_id)->save($data)) {
			$this->success('修改成功', U('housekeeper_list'));
		} else {
			$this->error('修改失败，请重试', U('housekeeper_list'));
		}
	}

	public function housekeeper_check() {
		header("Content-Type:text/html;charset=utf-8");
		$housekeeper = D("housekeeper"); // 实例化User对象
		if (!$housekeeper->create()) {
			// 指定新增数据
			// 如果创建失败 表示验证没有通过 输出错误提示信息
			$this->error($housekeeper->getError ());
		}

	}

}

