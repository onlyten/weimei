<?php
namespace Admin\Controller;
use Think\Controller;
class ServerdetailController extends Controller {
	public function server_detail_list() {
		//列表
		if(isset($_SESSION["username"])){
			$m = D('ServerMei');
			if (!I('get.page_now')) {
				$page_now = 1;
			} else {
				$page_now = I('get.page_now');
			}
			$map['server_id']=array('neq',3 );
			$server = $m->order('mei.id desc')->where($map)->page($page_now . ',10')->select();
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
			$this->assign('mei', $server);
			$this->assign('page_now', $page_now);
			$this->assign('server_count', $server_count);
			$this->assign('server_pagenum', $server_pagenum);
			$this->assign('search_condition', $search_condition);
			$this->display();
		}else{
			$this->redirect('Login/login');
		}
	}
	//添加页面初始化
	public function server_detail_add() {
		//添加
		$m = M('server');
		$map['server_type'] = array('eq',1);
		$server = $m->where($map)->select();
		//dump($server);
		$this->assign('server',$server);
		$this->display();
	}
    
    //执行添加操作
	public function server_detail_add_update() {
		//添加后进行更新
		$data['mei_name'] = I('post.mei_name');
		$data['jianjie'] = I('post.jianjie');
		$data['price'] = I('post.price');
		$data['oldprice'] = I('post.oldprice');
		$data['sales'] = I('post.sales');
		$data['timelong'] = I('post.timelong');
		$data['cishu'] = I('post.cishu');
		$data['people'] = I('post.people');
		$data['notice'] = I('post.notice');
		$data['type'] = I('post.type');
		$data['server_id'] = I('post.server_id');
		$data['jifen'] = I('post.jifen');
		$data['remark'] = I('post.remark');
		$data['time'] = date('y-m-d h:i:s',time());
		
		$img_filename = gen_random();
		$ext = substr($_FILES['title']['name'], strpos($_FILES['title']['name'], '.'), strlen($_FILES['title']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['title']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["title"]['size'] != 0) {
			$data['pic_title'] = $img_filename . $ext;
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['item1']['name'], strpos($_FILES['item1']['name'], '.'), strlen($_FILES['item1']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['item1']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["item1"]['size'] != 0) {
			$data['pic_item'] = $img_filename . $ext;
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['item2']['name'], strpos($_FILES['item2']['name'], '.'), strlen($_FILES['item2']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['item2']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["item2"]['size'] != 0) {
			$data['pic_item'] = $data['pic_item']."*".$img_filename . $ext;
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['item3']['name'], strpos($_FILES['item3']['name'], '.'), strlen($_FILES['item3']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['item3']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["item3"]['size'] != 0) {
			$data['pic_item'] = $data['pic_item']."*".$img_filename . $ext;
		}
        
        /*获取操作步骤开始  */
        $num=I('post.fldNum');
        for($i=1;$i<=$num;$i+=1){
           $img_filename = gen_random();
		   $ext = substr($_FILES['czbz'.$i]['name'], strpos($_FILES['czbz'.$i]['name'], '.'), strlen($_FILES['czbz'.$i]['name']) - 1); //拿到后缀
		   $upload_path = './Public/upload/img/';
		   move_uploaded_file($_FILES['czbz'.$i]['tmp_name'], $upload_path . $img_filename . $ext);
		   if ($_FILES["czbz".$i]['size'] != 0) {
		   	if($i==1)
		   	  {
			    $data['czbz'] = $img_filename . $ext."|". I('post.step_detail'.$i);
			  }
			  else
			  {
			  	$data['czbz'] = $data['czbz']."*".$img_filename . $ext."|". I('post.step_detail'.$i);
			  }			  
		   	}
		}
        /*获取操作步骤结束  */ 

        /*获取产品展示开始  */ 
        $cpnum=I('post.cpnum');
        for($j=1;$j<=$cpnum;$j+=1){
           $img_filename = gen_random();
		   $ext = substr($_FILES['goods'.$j]['name'], strpos($_FILES['goods'.$j]['name'], '.'), strlen($_FILES['goods'.$j]['name']) - 1); //拿到后缀
		   $upload_path = './Public/upload/img/';
		   move_uploaded_file($_FILES['goods'.$j]['tmp_name'], $upload_path . $img_filename . $ext);
		   if ($_FILES["goods".$j]['size'] != 0) {
		   	if($j==1)
		   	  {
			    $data['goods_display'] = $img_filename . $ext."|". I('post.goods_detail'.$j);
			  }
			  else
			  {
			  	$data['goods_display'] = $data['goods_display']."*".$img_filename . $ext."|". I('post.goods_detail'.$j);
			  }			  
		   	}
		}
        //dump($data['goods_display']);
        //die('ssaaa');
        /*获取产品展示结束 */ 
	
		//dump($data);
		if (I('post.mei_name')) {
			$m = M('mei');
			if ($m->data($data)->add()) {
				$this->success('添加成功', U('server_detail_list'));
			} else {
				$this->error('添加失败，请重试', U('server_detail_list'));
			}
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
		
   
   //修改页面初始化
	public function server_detail_modify() {
		//类型
		$m = M('server');
		$map['server_type'] = array('eq',1);
		$server = $m->where($map)->select();
		$this->assign('server',$server);

		//对修改
		$mei_id = I('get.mei_id');
		$m = M('mei');
		$mei = $m->where('id = ' . $mei_id)->limit(1)->select();
		// dump($mei);
		//分割操作步骤图片
        $i=0;
		$str = $mei[0]['czbz'];
		$arr = explode("*",$str);
		foreach($arr as $u){
			$strarr = explode("|",$u);
			foreach($strarr as $newstr){
				//echo $newstr."</br>"; 
                $czbz[$i]=$newstr;
                $i++;
			}
		}
        //dump($czbz);
        //分割项目图片
		$j=0;
        $str2=$mei[0]['pic_item'];
        $arr2= explode("*",$str2);
        foreach($arr2 as $newstr2)
        {
           $items[$j]=$newstr2;
           $j++;
        }
        //dump($items); 
        //分割产品图片
        $k=0;
        $str3=$mei[0]['goods_display'];
        //echo($str3);
        $arr3= explode("*",$str3);
        foreach($arr3 as $u2)
        {
           $strarr3=explode("|", $u2);
           foreach ($strarr3 as $newstr3) {
           	 $goods[$k]=$newstr3;
             $k++;
           }       
        }


        //dump($goods); 

        $this->assign('czbz', $czbz);
        $this->assign('items', $items);
        $this->assign('goods', $goods);
		$this->assign('mei', $mei);
		$this->display();
	}

	public function server_detail_modify_update() {
		//修改之后进行更新
		// dump(I('get.'));
		$server = M("mei"); // 实例化Us对象
		if (!$server->create()) {
			// 如果创建失败 表示验证没有通过 输出错误提示信息
			exit($server->getError());
		} else {
			// 验证通过 可以进行其他数据操作
		}
		//对修改
		$mei_id = I('get.mei_id');
		//echo ($mei_id);
		$m = M('mei');
		$mei = $m->where('id = ' . $mei_id)->limit(1)->select();
        //分割项目图片
		$l=0;
        $str2=$mei[0]['pic_item'];
        $arr2= explode("*",$str2);
        foreach($arr2 as $newstr2)
        {
           $items[$l]=$newstr2;
           $l++;
        }
        //dump($str2);
		$mei_id = I('get.mei_id');
	    $data['mei_name'] = I('post.mei_name');
		$data['jianjie'] = I('post.jianjie');
		$data['price'] = I('post.price');
		$data['oldprice'] = I('post.oldprice');
		$data['sales'] = I('post.sales');
		$data['timelong'] = I('post.timelong');
		$data['cishu'] = I('post.cishu');
		$data['people'] = I('post.people');
		$data['notice'] = I('post.notice');
		$data['type'] = I('post.type');
		$data['server_id'] = I('post.server_id');
		$data['jifen'] = I('post.jifen');
		$data['remark'] = I('post.remark');
		$data['time'] = date('y-m-d h:i:s',time());
		//echo (I('post.cishu'));
		$img_filename = gen_random();
		$ext = substr($_FILES['title']['name'], strpos($_FILES['title']['name'], '.'), strlen($_FILES['title']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['title']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["title"]['size'] != 0) {
			$data['pic_title'] = $img_filename . $ext;
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['item1']['name'], strpos($_FILES['item1']['name'], '.'), strlen($_FILES['item1']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['item1']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["item1"]['size'] != 0) {
			$data['pic_item'] = $img_filename . $ext;
		}
		if($_FILES["item1"]['size'] == 0)
		{
			//echo ($items[0]);
			$data['pic_item'] = $items[0];
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['item2']['name'], strpos($_FILES['item2']['name'], '.'), strlen($_FILES['item2']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['item2']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["item2"]['size'] != 0) {
			$data['pic_item'] = $data['pic_item']."*".$img_filename . $ext;
		}
		else
		{
			//echo ($items[1]);
			$data['pic_item'] = $data['pic_item']."*".$items[1];
		}

		$img_filename = gen_random();
		$ext = substr($_FILES['item3']['name'], strpos($_FILES['item3']['name'], '.'), strlen($_FILES['item3']['name']) - 1); //拿到后缀
		$upload_path = './Public/upload/img/';
		move_uploaded_file($_FILES['item3']['tmp_name'], $upload_path . $img_filename . $ext);
		if ($_FILES["item3"]['size'] != 0) {
			//echo ($items[2]);
			$data['pic_item'] = $data['pic_item']."*".$img_filename . $ext;
		}
		else
		{
			//echo ($items[2]);
			$data['pic_item'] = $data['pic_item']."*".$items[2];
		}

        /******************************获取操作步骤开始*************************/ 
		 //分割操作步骤图片
        $n=0;
		$str = $mei[0]['czbz'];
		$arr = explode("*",$str);
		foreach($arr as $u){
			$strarr = explode("|",$u);
			foreach($strarr as $newstr){
				//echo $newstr."</br>"; 
                $czbzs[$n]=$newstr;
                $n++;
			}
		}
		$num=I('post.fldNum');
        for($i=1;$i<=$num;$i+=1){
           $img_filename = gen_random();
		   $ext = substr($_FILES['czbz'.$i]['name'], strpos($_FILES['czbz'.$i]['name'], '.'), strlen($_FILES['czbz'.$i]['name']) - 1); //拿到后缀
		   $upload_path = './Public/upload/img/';
		   move_uploaded_file($_FILES['czbz'.$i]['tmp_name'], $upload_path . $img_filename . $ext);
		   
		   	if($i==1)
		   	  {
		   	  	if ($_FILES["czbz".$i]['size'] != 0) {
			    $data['czbz'] = $img_filename . $ext."|". I('post.step_detail'.$i);
			    }
			    else
			    {
			    $data['czbz'] =$czbzs[2*($i-1)]."|". I('post.step_detail'.$i);	
			    }
			  }
			  else
			  {
			  	if ($_FILES["czbz".$i]['size'] != 0) {
			  	$data['czbz'] = $data['czbz']."*".$img_filename . $ext."|". I('post.step_detail'.$i);
			    }
			    else
			    {
			    
			    $data['czbz']=$data['czbz']."*".$czbzs[2*($i-1)]."|". I('post.step_detail'.$i);
			    //dump($data['czbz']);	
			    }
			  }			  
		   	
		}		
		/******************************获取操作步骤结束*************************/ 



		/******************************获取产品展示开始*************************/ 
		//分割产品图片
        $k=0;
        $str3=$mei[0]['goods_display'];
        //echo($str3);
        $arr3= explode("*",$str3);
        foreach($arr3 as $u2)
        {
           $strarr3=explode("|", $u2);
           foreach ($strarr3 as $newstr3) {
           	 $goods[$k]=$newstr3;
             $k++;
           }       
        }
        $cpnum=I('post.cpnum');
        for($j=1;$j<=$cpnum;$j+=1){
           $img_filename = gen_random();
		   $ext = substr($_FILES['goods'.$j]['name'], strpos($_FILES['goods'.$j]['name'], '.'), strlen($_FILES['goods'.$j]['name']) - 1); //拿到后缀
		   $upload_path = './Public/upload/img/';
		   move_uploaded_file($_FILES['goods'.$j]['tmp_name'], $upload_path . $img_filename . $ext);


		   	if($j==1)
		   	  {
		   	  	if ($_FILES["goods".$j]['size'] != 0) {
			    $data['goods_display'] = $img_filename . $ext."|". I('post.goods_detail'.$j);
			    }
			    else{
			    $data['goods_display'] =$goods[2*($j-1)]."|". I('post.goods_detail1');	
			    }
			  }
			  else
			  {
			  	if ($_FILES["goods".$j]['size'] != 0) {
			  	$data['goods_display'] = $data['goods_display']."*".$img_filename . $ext."|". I('post.goods_detail'.$j);
			    }
			    else{
			    $data['goods_display'] =$data['goods_display']."*".$goods[2*($j-1)]."|". I('post.goods_detail'.$j);
			    }
			  }			  		   	
		} 
        /******************************获取产品展示结束 ******************************/ 
		
		//dump($data);
		$m = M('mei');
		if ($m->where('id = ' . $mei_id)->save($data)) {
			$this->success('修改成功', U('server_detail_list'));
		} else {
			$this->error('修改失败，请重试', U('server_detail_list'));
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

