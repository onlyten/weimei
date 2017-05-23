<?php
namespace Home\Controller;
use Think\Controller;
class MeiController extends Controller {
	public function pay(){//
		$xiaofei = I('get.xiaofei');
		$openid = I('get.openid');
		$ming = I('get.ming');
		$order_id = I('get.order_id');
		$this->assign('order_id',$order_id);
		$this->assign('openid',$openid);
		$this->assign('ming',$ming);
		$this->assign('xiaofei',$xiaofei);
		$this->display();
	}

	//修改电话号码
	public function modify_phone(){
		//dump(I('post.'));
		//die("jj");
		$openid = I('post.openid');
		$mobile = I('post.context');
		$m = M('login');
		$map['wxid'] = $openid;
		$data['mobile'] = $mobile;
		$m->where($map)->save($data);
		$this->ajaxReturn($data,'JSON');
		/*$order_id = I('post.order_id');
		$time = I('post.time');
		$data['time'] = $time;
		$m = M('dingdan');
		$map['order_id'] = $order_id;
		if($m->where($map)->save($data)){
			$this->ajaxReturn($data,'JSON');
		} */
	}

	//修改姓名
	public function modify_name(){
		$openid = I('post.openid');
		$name = I('post.context');
		$m = M('login');
		$map['wxid'] = $openid;
		$data['name'] = $name;
		$m->where($map)->save($data);
		$this->ajaxReturn($data,'JSON');
	}

	// 主页
	public function mei_index(){
		$m = M('server');
		$server = $m->order('server_weight desc')->select();
		$this->assign('server',$server);
		$l = M('systemset');
		$tel = $l->select();
		$this->assign("tel",$tel);
		$this->display();
	}

	//来院地图
	public function ditu(){
		$this->display();
	}


	//项目
	public function facecare(){
		$server_id = I('get.server_id');
		$n = M('server');
		$server = $n->where('id= '.$server_id)->select();
		//dump($server);
		$m = M('mei');
		$mei = $m->where('server_id = '.$server_id)->select();
		$l = M('systemset');
		$tel = $l->select();
		$this->assign("tel",$tel);
		$this->assign('mei',$mei);
		$this->assign('server',$server);
		//dump($mei);
		//dump($server);
		//die("OK!");
		$this->display();
	}


	//项目详情
	public function facecare_detail(){
		$mei_id = I('get.mei_id');
		$m = M('mei');
		$mei = $m->where('id = '.$mei_id)->select();
		//echo $mei[0]['czbz'];
		//dump($mei);
		//die('OK');
		//操作步骤的切割
		$i = 0;
		$str = $mei[0]['czbz'];
		$arr = explode("*",$str);
		foreach($arr as $u){
			$strarr = explode("|",$u);
			foreach($strarr as $newstr){
				$czbz[$i] = $newstr;
				$i++;
			}
		}
		//dump($czbz);
		//die("OK");
		

		//产品展示的切割
		$j = 0;
		$newstr = $mei[0]['goods_display'];
		$newarr = explode("*",$newstr);
		foreach($newarr as $u){
			$strarr = explode("|",$u);
			foreach($strarr as $newstr){
				$goods_display[$j] = $newstr;
				$j++;
			}
		}
		//dump($goods_display);
		

		//项目展示的切割
		$j = 0;
		$newstr = $mei[0]['pic_item'];
		$newarr = explode("*",$newstr);
		foreach($newarr as $u){
			$strarr = explode("|",$u);
			foreach($strarr as $newstr){
				$pic_item[$j] = $newstr;
				$j++;
			}
		}
		//dump($pic_item);
		$l = M('systemset');
		$tel = $l->select();
		$this->assign("tel",$tel);
		$this->assign('pic_item',$pic_item);
		$this->assign('goods_display',$goods_display);
		$this->assign('czbz',$czbz);
		$this->assign('mei',$mei);
		$this->display();
	}



	//美丽管家
	public function housekeeper(){
		$m = M('housekeeper');
		$housekeeper = $m->select();
		//dump($housekeeper);
		$l = M('systemset');
		$tel = $l->select();
		$this->assign("tel",$tel);
		$this->assign('housekeeper',$housekeeper);
		$this->display();
	}

	//美丽管家详情
	public function housekeeper_detail(){
		$housekeeper_id = I('get.housekeeper_id');
		$m = M('housekeeper');
		$housekeeper = $m->where('id = '.$housekeeper_id)->select();
		//dump($housekeeper);

		//资质证书的切割
		$i = 0;
		$str = $housekeeper[0]['zzzs'];
		$arr = explode("*",$str);
		foreach($arr as $u){
			$strarr = explode("|",$u);
			foreach($strarr as $newstr){
				$zzzs[$i] = $newstr;
				$i++;
			}
		}
		//dump($zzzs);
		

		//形象照的切割
		//dump($housekeeper[0]['pic_xing']);
		$j = 0;
		$newstr = $housekeeper[0]['pic_xing'];
		$newarr = explode("*",$newstr);
		foreach($newarr as $u){
			$pic_xing[$j] = $u;
			$j++;
		}
		//dump($pic_xing);
		//die('ok');
		$l = M('systemset');
		$tel = $l->select();
		$this->assign("tel",$tel);
		$this->assign('pic_xing',$pic_xing);
		$this->assign('zzzs',$zzzs);
		$this->assign('housekeeper',$housekeeper);
		$this->display();
	}



	//预约上门
	public function reservation_home(){
		$mei_id = I('get.mei_id');//拿到服务项目的id
		//echo $mei_id;
		$code = $_GET['code'];//获取code
		$weixin =  file_get_contents("https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx07c0189227f8f9af&secret=0ee349bd9522c91fd523d5770435e626&code=".$code."&grant_type=authorization_code");//通过code换取网页授权access_token
		$jsondecode = json_decode($weixin); //对JSON格式的字符串进行编码
		$array = get_object_vars($jsondecode);//转换成数组
		$openid = $array['openid'];//输出openid
		if(I('get.openid')){//从地址列表过来
			$openid = I('get.openid');
		}
		//判断是否注册过
		$m = M('login');
		$map['wxid'] = $openid;
		$login = $m->where($map)->select();
		$l = M('systemset');
		$tel = $l->select();
		if(I('get.address_id')){//从地址列表过来
			$n = M('address');
			$mm['id'] = I('get.address_id');
			$address = $n->where($mm)->select();
		}
		$p = M('address');
		$mmaa['wxid'] = $openid;
		$mmaa['display'] = 1;
		$moren = $p->where($mmaa)->limit(1)->select();
		if($login != null){
			$this->assign("login",$login);
			$this->assign("openid",$openid);
			$this->assign("mei_id",$mei_id);
			$this->assign("address",$address);
			$this->assign("moren",$moren);
			$this->assign("tel",$tel);
			$this->display('reservation_home');
		}else{
			$this->redirect('Login/login_pre');
		}
	}



	public function reservation_home_update(){
		$yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');//生成订单号
		$orderSn = $yCode[intval(date('Y')) - 2011] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
		$data['name'] = I('post.name');
		$mei_id=I('post.mei_id');
		$s = M('mei');
		$spp['id'] = $mei_id;
		$mei = $s->where($spp)->limit(1)->select();
		$data['mei_id'] = $mei_id;
		$data['mobile'] = I('post.mobile');
		$data['wxid'] = I('post.openid');
		$time = I('post.time');
		$data['time'] = $time;
		//dump($time);
		$data['coins'] = I('post.coins');
		$data['address'] = I('post.address');
		$data['remark'] = I('post.remark');
		$data['type'] = '0';
		$xiaofei = $mei[0]['price'] - I('post.coins');
		$data['xiaofei'] = $xiaofei;
		$order_id = $orderSn;
		$data['order_id'] = $order_id;
		$data['addtime'] = time();
		$url = I('post.url');
		//统计可用维美币
		$openid = I('post.openid');
		$m = M('coin');
		$mapp['wxid'] = $openid;
		$mapp['nouse'] = array('neq',0);
		$mapp['timeto'] = array('egt',time());
		//dump($mapp);
		$coin = $m->where($mapp)->order('timeto asc')->select();
		//dump($coin);//计算可用维美币的总数
		for($i=0;$i<count($coin);$i++){
			$sum+=$coin[$i]['nouse'];
		}
		$f = M('login');//查找个人信息
		$wxid['wxid'] = $openid;
		$login = $f->where($wxid)->select();
		$b = M('mei');
		$mm['id'] = $mei_id;
		$mei = $b->where($mm)->select();
		if($mei[0]['jifen'] >= I('post.coins')){
			if($login[0]['yue'] >= I('post.coins')){
				$dat['yue'] = $login[0]['yue'] - I('post.coins');
				$f->where($wxid)->save($dat);
				$summ=0;
				for($j=0;$j<=count($coin);$j++){
					if($summ < I('post.coins')){
						$summ+=$coin[$j]['nouse'];
					}else{
						break;
					}
				}
				--$j;
				for($i=0;$i<$j;$i++){//查到前一个
					$m = M('coin');
					$mao['wxid'] = $openid;
					$mao['nouse'] = array('neq',0);
					$mao['timeto'] =array('egt',time());
					$shu = $shu+$coin[$i]['nouse'];
					$coin[$i]['usee'] = $coin[$i]['usee'] + $coin[$i]['nouse'];
					$coin[$i]['nouse'] = 0;
					$data['usee'] = $coin[$i]['usee'];
					$data['nouse'] = 0;
					$ni = $m->where($mao)->order('timeto asc')->limit(1)->select();
					$data['timeto'] = $ni[0]['timeto'];
					$data['time'] = $ni[0]['time'];
					$data['usetime'] = time();
					//echo $ni[0]['id'];
					$p = M('coin');
					$mpp['id'] = $ni[0]['id'];
					$p->where($mpp)->save($data);
				}
				if($shu < I('post.coins')){
					$m = M('coin');
					$maa['wxid'] = $openid;
					$maa['nouse'] = array('neq',0);
					$maa['timeto'] = array('egt',time());
					$nii = $m->where($maa)->order('timeto asc')->limit(1)->select();
					//echo $nii[0]['id'];
					$data['nouse'] = $coin[$j]['nouse'] - (I('post.coins') - $shu);
					$data['usee'] = $coin[$j]['usee'] + (I('post.coins') - $shu);
					$data['timeto'] = $nii[0]['timeto'];
					$data['time'] = $nii[0]['time'];
					$data['usetime'] = time();
					//dump($data);
					$pp = M('coin');
					$mppp['id'] = $nii[0]['id'];
					$pp->where($mppp)->save($data);
				}
				if (I('post.name')) {
					$m = M('dingdan');
					if ($m->data($data)->add()) {
						//$this->senmes($mei_id,$time,$order_id);
						//echo $openid;
						 $post = "http://wxsc.wei-mei.com/weimei/index.php/Home/MsWxpay/js_api_call?xiaofei=" . $xiaofei ."&order_id=" . $order_id . "&openid=" . $openid ;
						header ( "location:$post" );
						//$this->redirect('Mei/pay',array('openid'=>$openid,'xiaofei' => $xiaofei));
						//echo  "<script>alert('预约成功，请耐心等待！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";
					} else {
						echo  "<script>alert('预约失败，请重新预约！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";
					}
				}

			}else{
				echo  "<SCRIPT language=JavaScript>alert('您的维美币超过了余额！');location.href='javascript:history.go(-1)';</SCRIPT>";
			}
		}else{
			echo "<SCRIPT language=JavaScript>alert('您输入的维美币超过了本项目的限制！');location.href='javascript:history.go(-1)';</SCRIPT>";
		}

	}



	//预约到院
	public function reservation_hospital(){
		$mei_id = I('get.mei_id');//拿到服务项目的id
		//echo $mei_id;
		$m = M('mei');
		$mei = $m->where('id = '.$mei_id)->select();
		$code = $_GET['code'];//获取code
		$weixin =  file_get_contents("https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx07c0189227f8f9af&secret=0ee349bd9522c91fd523d5770435e626&code=".$code."&grant_type=authorization_code");//通过code换取网页授权access_token
		$jsondecode = json_decode($weixin); //对JSON格式的字符串进行编码
		$array = get_object_vars($jsondecode);//转换成数组
		$openid = $array['openid'];//输出openid
		//echo $openid;
		//die("OK");
		//判断是否注册过
		$m = M('login');
		$map['wxid'] = $openid;
		$login = $m->where($map)->select();
		$l = M('systemset');
		$tel = $l->select();
		if($login != null){
			$this->assign("tel",$tel);
			$this->assign("openid",$openid);
			$this->assign("mei_id",$mei_id);
			$this->assign("mei",$mei);
			$this->display('reservation_hospital');
		}else{
			$this->redirect('Login/login_pre');
		}
	}



	public function reservation_hospital_update(){

		$yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');//生成订单号
		$orderSn = $yCode[intval(date('Y')) - 2011] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
		$data['name'] = I('post.name');
		$data['mei_id'] = I('post.mei_id');
		$data['mobile'] = I('post.mobile');
		$openid = I('post.openid');
		$data['wxid'] = I('post.openid');
		$data['coins'] = I('post.coins');
		$data['address'] = I('post.address');
		$data['remark'] = I('post.remark');
		$data['addtime'] = time();
		$data['time'] = I('post.time');
		$time = I('post.time');
		//dump($time);
		$mei_id = I('post.mei_id');

		$s = M('mei');
		$spp['id'] = $mei_id;
		$mei = $s->where($spp)->limit(1)->select();
		$xiaofei = $mei[0]['price'];
		$data['xiaofei'] = $xiaofei;
		$ming = $mei[0]['mei_name'];
		$data['type'] = '1';
		$order_id = $orderSn;
		$data['order_id'] = $order_id;
		if (I('post.name')) {
			$m = M('dingdan');
			if ($m->data($data)->add()) {
				//$this->redirect("Wxpay/js_api_call");
				//$this->senmes($mei_id,$time,$order_id);
				 $post = "http://wxsc.wei-mei.com/weimei/index.php/Home/MsWxpay/js_api_call?xiaofei=" . $xiaofei ."&ming=" . $ming ."&order_id=" . $order_id . "&openid=" . $openid ;
				header ( "location:$post" );
				//$this->redirect('Mei/pay',array('openid'=>$openid,'xiaofei' => $xiaofei,'ming' => $ming,'order_id' => $order_id));
				//echo  "<script>alert('预约成功，请耐心等待！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";
			} else {
				echo  "<script>alert('预约失败，请重新预约！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";
			}
		}
	}
//我的管家
	public function keeper(){
		$sum=0;
		$code = $_GET['code'];//获取code
		$weixin =  file_get_contents("https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx07c0189227f8f9af&secret=0ee349bd9522c91fd523d5770435e626&code=".$code."&grant_type=authorization_code");//通过code换取网页授权access_token
		$jsondecode = json_decode($weixin); //对JSON格式的字符串进行编码
		$array = get_object_vars($jsondecode);//转换成数组
		$openid = $array['openid'];//输出openid
		if($_GET['openid']){
			$openid = $_GET['openid'];
		}
		$m = M('login');
		$map['wxid'] = $openid;
		$login = $m->where($map)->select();
		if(count($login) == 0){//判断是否注册过
			$this->redirect('Login/login_pre');
		}else{
			$m = M('coin');
			$mapp['wxid'] = $openid;
			$mapp['nouse'] = array('neq',0);
			$mapp['timeto'] = array('egt',time());
			$coin = $m->where($mapp)->select();
			//dump($coin);计算可用维美币的总数
			for($i=0;$i<count($coin);$i++){
				$sum+=$coin[$i]['nouse'];
			}
			$l = M('systemset');
			$tel = $l->select();
			$this->assign("tel",$tel);
			$this->assign("sum",$sum);
			$this->assign("openid",$openid);
			$this->assign("login",$login);
			$this->display();
		}
	}
//管家提醒
	public function keeperwarn(){
		$openid = I('get.openid');
		//echo $openid;
		$d = D('WarnLogin');
		$map['wxid'] = $openid;
		$warn = $d->where($map)->select();
		//dump($warn);
		//die("jj");
		$l = M('systemset');
		$tel = $l->select();
		$this->assign("tel",$tel);
		$this->assign("warn",$warn);
		$this->display();
	}

//地址
	public function address(){
		$code = $_GET['code'];//获取code
		$weixin =  file_get_contents("https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx07c0189227f8f9af&secret=0ee349bd9522c91fd523d5770435e626&code=".$code."&grant_type=authorization_code");//通过code换取网页授权access_token
		$jsondecode = json_decode($weixin); //对JSON格式的字符串进行编码
		$array = get_object_vars($jsondecode);//转换成数组
		$openid = $array['openid'];
		if(I('get.openid')){
			$mei_id = I('get.mei_id');
			$openid = I('get.openid');
		}
		$m = D('AddressLogin');
		$map['wxid'] = $openid;
		$map['display'] = 1;
		$login = $m->where($map)->select();
		$l = M('systemset');
		$tel = $l->select();
		//dump($login);
		//die("ok");
		$n = M('login');//判断是否注册过
		$mapp['wxid'] = $openid;
		$logi = $n->where($mapp)->select();
		if(count($logi) == 0){//判断是否注册过
			$this->redirect('Login/login_pre');
		}else{
			$this->assign("tel",$tel);
			$this->assign("mei_id",$mei_id);
			$this->assign("openid",$openid);
			$this->assign("login",$login);
			$this->display();
		}
	}

	public function address_add(){
		$openid = I('');
		//dump($openid);
		//die("ok");
		$this->assign("mei_id",$openid['mei_id']);
		$this->assign("openid",$openid['login']);
		$this->display();
	}


	public function address_list(){
		$open = I('get.');
		$openid = $open['login'];
		$mei_id = $open['mei_id'];
		$m = M('address');
		$map['wxid'] = $openid;
		if(I('get.openid')){//新添加完
			$map['wxid'] = I('get.openid');
			$openid = I('get.openid');
		}
		$address = $m->where($map)->order('id desc')->select();
		$this->assign("address",$address);
		$this->assign("openid",$openid);
		$this->assign("mei_id",$mei_id);
		$this->display();
	}

	public function address_add_update(){
		$openid = I('post.openid');
		if(I('post.default')){
			$n = M('address');
			$map['wxid'] = $openid;
			$dat['display'] = 0;
			$n->where($map)->save($dat);
			$data['display'] = 1;
		}
		$data['address'] = I('post.address');
		$data['postcode'] =I('post.postcode');
		$data['name'] = I('post.name');
		$data['qu'] = I('post.qu');
		$data['mobile'] = I('post.mobile');
		$data['wxid'] = $openid;
		$mei_id = I('post.mei_id');
		$m = M('address');
		if($mei_id!= ""){
			$m->add($data);
			$ppp['wxid'] = $openid;
			$address = $m->where($ppp)->order('id desc')->limit(1)->select();
			$this->redirect('Mei/reservation_home',array('openid'=>$openid,'mei_id'=>$mei_id,'address_id'=>$address[0]['id']));
		}
		if($m->add($data)){
			echo  "<script>alert('添加成功！')</script>";
			echo  "<script>location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/address_list?openid=$openid'</script>";
		}else{
			echo  "<script>alert('添加失败！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";
		}
	}


	public function address_modify(){
		$openid = I('get.id');
		//dump($openid);
		//die('ok');
		$m = M('address');
		$map['id'] = $openid;
		$login = $m->where($map)->select();
		//dump($login);
		//die("kk");
		$l = M('systemset');
		$tel = $l->select();
		$this->assign("tel",$tel);
		$this->assign("login",$login);
		$this->display();
	}

	public function address_modify_update(){
		if(I('post.default')){
			$n = M('address');
			$openid = I('post.openid');
			$map['wxid'] = $openid;
			$dat['display'] = 0;
			$n->where($map)->save($dat);
			$data['display'] = 1;
		}
		$openid = I('post.openid');
		$data['address'] = I('post.address');
		$data['postcode'] =I('post.postcode');
		$data['name'] = I('post.name');
		$data['qu'] = I('post.qu');
		$data['mobile'] = I('post.mobile');
		$map['id'] = I('post.id');
		$m = M('address');
		if($m->where($map)->save($data)){
			echo  "<script>alert('修改成功！')</script>";
			echo  "<script>location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/address_list?openid=$openid'</script>";
		}else{
			echo  "<script>alert('修改失败！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";
		}

	}

//我的会员
	public function vip(){
		$code = $_GET['code'];//获取code
		$weixin =  file_get_contents("https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx07c0189227f8f9af&secret=0ee349bd9522c91fd523d5770435e626&code=".$code."&grant_type=authorization_code");//通过code换取网页授权access_token
		$jsondecode = json_decode($weixin); //对JSON格式的字符串进行编码
		$array = get_object_vars($jsondecode);//转换成数组
		$openid = $array['openid'];
		$m = M('login');
		$map['wxid'] = $openid;
		session('openid',$openid);
		$login = $m->where($map)->select();
		$l = M('systemset');
		$tel = $l->select();
		if(count($login) == 0){//判断是否注册过
			$this->redirect('Login/login_pre');
		}else{
			$m = M('url');
			$mapp['type'] = array('eq',1);
			$mpp['type'] = array('eq',2);
			$huodong = $m->where($mapp)->select();
			$tequan = $m->where($mpp)->select();
			$this->assign("tel",$tel);
			$this->assign("huodong",$huodong);
			$this->assign("tequan",$tequan);
			$this->assign("openid",$openid);
			$this->assign("login",$login);
			$this->display();
		}
	}


	public function vipinfo(){
		$openid = I('get.openid');
		//echo $openid;
		$m = M('login');
		$map['wxid'] = $openid;
		$login = $m->where($map)->select();
		$l = M('systemset');
		$tel = $l->select();
		$this->assign("tel",$tel);
		$this->assign("login",$login);
		$this->display();
	}

	public function activity(){
		$openid = session('openid');
		$m = M('login');
		$map['wxid'] = $openid;
		$login = $m->where($map)->select();
		$url = (__SELF__);
		//echo $url;
		$i = 0;
		$arr = explode("/",$url);
		foreach($arr as $u){
			$zzzs[$i] = $u;
			$i++;
		}
		$idid = count($zzzs);
		$id = $zzzs[--$idid];
		$n = M('coinactivity');
		$mapp['id'] = $id;
		$activity = $n->where($mapp)->select();
		$time = date("Y-m-d ", $activity[0]['timelong']);
		//dump($activity);
		//echo $id."***************";
		//echo $time;
		//echo $activity[0]['timelong'];
		//die('nnn');
		$l = M('systemset');
		$tel = $l->select();
		$this->assign("tel",$tel);
		$this->assign("id",$id);
		$this->assign("login",$login);
		$this->assign("openid",$openid);
		$this->assign("activity",$activity);
		$this->assign("time",$time);
		$this->display();
	}

	public function activity_update(){
		$data['wxid'] = I('post.openid');
		$data['coinactivity_id'] = I('post.id');
		$data['timeto'] = I('post.time');
		$data['time'] = time();
		$n = M('coinactivity');
		$map['id'] = I('post.id');
		$coinactivity = $n->where($map)->select();
		$data['nouse'] = $coinactivity[0]['coin'];
		$m = M('coin');
		$mapp['wxid'] = I('post.openid');
		$mapp['coinactivity_id'] = I('post.id');
		$coin = $m->where($mapp)->select();
		$long = count($coin);
		//dump($coin);
		//echo count($coin);
		if($long == 0){
			$b = M('login');
			$wxid['wxid'] = I('post.openid');
			$login = $b->where($wxid)->select();
			$dat['yue'] = $login[0]['yue'] + $coinrule[0]['coins'];
			$b->where($wxid)->save($dat);
			$m->data($data)->add();
			echo  "<script>alert('您已成功参加了此次活动！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";
		}else{
			echo  "<script>alert('别贪心，下次再来吧！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";
		}
		

	}

	//发送预约成功通知
	public function senmes($mei_id,$time,$order_id)
	{
            //$time=date('Y-m-d H:m:s');
		//dump($time);
            $d=M('mei');
            $ac['id']=array('eq',$mei_id);
            $a=$d->where($ac)->order('id desc')->limit(1)->select();
             //dump($a);
             //die('ss');
            $appid="wx07c0189227f8f9af";
            $appsecrect="0ee349bd9522c91fd523d5770435e626";
            $template_id='4U9Yht4ailwiNQUtadIGscD-ZP9Ye5s4V4EVMoUjAlc';            
            $accessToken=$this->getToken($appid,$appsecrect);
            $url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=" . $accessToken;
            //dump($url);

            $data=array(
                'first'=>array('value'=>urlencode("您好,您收到一条新的预约！"),'color'=>"#743A3A"),
                'keyword1'=>array('value'=>urlencode($a[0]['mei_name']),'color'=>'#666'),
                'keyword2'=>array('value'=>urlencode($time),'color'=>'#666'),
                'remark'=>array('value'=>urlencode('订单号为'.$order_id.',请尽快处理'),'color'=>'#666'),
            );
            //dump($data); 
            $m=M('admininfo'); 
            $list=  $m->select();

            if( count($list)){
            	for($i=0;$i<count($list);$i++)
                {
                    //dump($list[$i]['wxid']);
                    if($list[$i]['wxid']!=""|| strlen($list[$i]['wxid'])!=0){
                	$this->doSend($list[$i]['wxid'],$template_id, $url, $data, $topcolor = '#7B68EE'); 
                	} 

                }
            }   
            //$flag=$this->doSend('oNyT2t4-fGukLknVXH_FMFTL5Ah4',$template_id, $url, $data, $topcolor = '#7B68EE');
           // dump($flag);
                
	}

  
    /**
     * 发送post请求
     * @param string $url
     * @param string $param
     * @return bool|mixed
     */
    function request_post($url = '', $param = '')
    {
        if (empty($url) || empty($param)) {
            return false;
        }
        $postUrl = $url;
        $curlPost = $param;
        $ch = curl_init(); //初始化curl
        curl_setopt($ch, CURLOPT_URL, $postUrl); //抓取指定网页
        curl_setopt($ch, CURLOPT_HEADER, 0); //设置header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_POST, 1); //post提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
        $data = curl_exec($ch); //运行curl
        curl_close($ch);
        return $data;
    }
   
    public function doSend($touser, $template_id, $url, $data, $topcolor = '#7B68EE')
    {
        //$locurl="http://www.baidu.com";
        $template = array(
            'touser' => $touser,
            'template_id' => $template_id,
            //'url' =>$locurl,
            'topcolor' => $topcolor,
            'data' => $data
        );
        $json_template = json_encode($template);
        
        $dataRes = $this->request_post($url, urldecode($json_template));
        if ($dataRes['errcode'] == 0) {
            return true;
        } else {
            return false;
        }
    }

        /**
     * 发送get请求
     * @param string $url
     * @return bool|mixed
     */
    function request_get($url = '')
    {
        if (empty($url)) {
            return false;
        }

       // echo "<br> url $url <br>";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);

        //echo "<br> data $data <br>";
        return $data;
    }
       /**
     * @param $appid
     * @param $appsecret
     * @return mixed
     * 获取token
     */
    protected function getToken($appid, $appsecret)
    {
        //echo $appsecret;
        if (S($appid)) {
            $access_token = S($appid);
        } else {
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . $appid . "&secret=" . $appsecret;
            $token = $this->request_get($url);
            $token = json_decode(stripslashes($token));
            $arr = json_decode(json_encode($token), true);
            $access_token = $arr['access_token'];
            //S($appid, $access_token, 720);
        }
        return $access_token;
    }

}