<?php
namespace Home\Controller;
use Think\Controller;
class DingdanController extends Controller {
	public function order(){
		$code = $_GET['code'];//获取code
		$weixin =  file_get_contents("https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx07c0189227f8f9af&secret=0ee349bd9522c91fd523d5770435e626&code=".$code."&grant_type=authorization_code");//通过code换取网页授权access_token
		$jsondecode = json_decode($weixin); //对JSON格式的字符串进行编码
		$array = get_object_vars($jsondecode);//转换成数组
		$openid = $array['openid'];//输出openid
		//判断openid是否注册过
		$m = M('login');
		$map['wxid'] = $openid;
		$login = $m->where($map)->select();
		if($login != null){//如果已经注册过，查询其对应的订单
			$m = M('dingdan');
			$map['wxid'] = $openid;
			$dingdan = $m->where($map)->select();
			$n = M('login');
			$mapp['wxid'] = $openid;
			$login = $n->where($mapp)->select();
			$l = M('systemset');
			$tel = $l->select();
			$this->assign("tel",$tel);
			$this->assign("login",$login);
			$this->assign("dingdan",$dingdan);
			$this->assign("openid",$openid);
			$this->display();
		}else{
			$this->redirect('Login/login_pre');
		}
	}


	public function ordering(){
		$openid = I('get.openid');
		$m = D('DingdanMei');
//单次疗程订单查询
		$fukuan['successor']  = array('eq',1);
		$dingdan = $m->where("wxid='%s' and state=%d and cishu=%d",array($openid,0,1))->where($fukuan)->order('id desc')->select();
		//dump($dingdan);
		//die("kk");
		
//多次疗程订单查询
		$map['wxid'] = $openid;
		$map['state'] = 3;
		$map['cishu']  = array('neq',1);
		$dingmore = $m->where($map)->select();
		//dump($dingmore);
		$geshu = count($dingmore);//订单的总个数
		for($i=0;$i<$geshu;$i++){
			$ding[$i] = $dingmore[$i]['order_id'];
		}
		$tongji = array_count_values($ding);//订单表中相同订单号的个数
		//dump($tongji);
		$m = D('DingdanMei');
		$mapp['wxid'] = $openid;
		$mapp['cishu']  = array('neq',1);
		$mapp['isend'] = 0;
		$fukuan['successor']  = array('eq',1);
		$dingmore = $m->where($mapp)->where($fukuan)->distinct(true)->field('order_id,cishu,mei_id')->order('id desc')->select();
		//dump($dingmore);
		$l = M('systemset');
		$tel = $l->select();
		//$nowtime = date("Y-m-d H:i:s", time());
		//$this->assign("nowtime",$nowtime);
		$this->assign("tel",$tel);
		$this->assign("tongji",$tongji);
		$this->assign("dingdan",$dingdan);
		$this->assign("dingmore",$dingmore);
		$this->display();
	}

//再次预约
	public function dingmore_one_again(){
		$order_id = I('post.order_id');
		$m = M('dingdan');
		$map['order_id'] = $order_id;
		$dingdan = $m->where($map)->order('id desc')->limit(1)->field('name,mobile,address,addtime,remark,wxid,mei_id,order_id,type,state,time')->select();
		$openid = $dingdan[0]['wxid'];
		$mapp['state'] = array('neq',1);
		$mapp['isend'] = array('eq',0);
		$dingdann = $m->where($map)->where($mapp)->select();
		//dump($dingdann);
		$id = $dingdan[0]['mei_id'];
		$n = M('mei');////////////////////判断是否已经超过次数
		$mmaa['id'] = $id;
		$mei = $n->where($mmaa)->select();
		//echo $mei[0]['cishu'];
		//dump(I('post.'));
		//die("jk");
		$zzou['state'] = array('eq',0);
		$dingpan = $m->where($map)->where($zzou)->select();
		if(count($dingpan) != 0){
			$this->ajaxReturn("服务进行中,请稍后预约！",'JSON');
		}
		//
		if($mei[0]['cishu'] > count($dingdann)){
			$dingdan[0]['state'] = 0;
			$dingdan[0]['successor'] = 1;
			$dingdan[0]['time'] = I('post.time');
			$dingdan[0]['addtime'] = time();
			//dump($dingdan);
			$m->data($dingdan[0])->add();
			$this->senme($order_id);
			//echo  "<script>alert('预约成功，请耐心等待！');window.location.href='__URL__/weimei/index.php/Home/Mei/mei_index'</script>";
			$this->ajaxReturn("预约成功，请耐心等待！",'JSON');
		}else{
			$this->ajaxReturn("已经达到次数，不可再次预约！",'JSON');
			//echo  "<script>alert('已经达到次数，不可再次预约！')</script>";
			//echo  "<script>location.href='__URL__/weimei/index.php/Home/Dingdan/ordering?openid=$openid'</script>";
			
		}

	}

//修改时间
	public function modify_time(){
		$order_id = I('post.order_id');
		$time = I('post.time');
		$data['time'] = $time;
		$m = M('dingdan');
		$map['order_id'] = $order_id;
		if($m->where($map)->save($data)){
			$this->ajaxReturn($data,'JSON');
		} 
	}

	public function orderdone(){
		$openid = I('get.openid');
		$m = M('dingdan');
	//确认完成的订单
		$map['wxid'] = $openid;
		$map['isend'] = array('eq',2);
		$map['state'] = array('eq',3);
		$fukuan['successor']  = array('eq',1);
		$dingdan = $m->where($map)->where($fukuan)->distinct(true)->field('order_id,mei_id')->order('id desc')->select();
	//上门未服务的订单
		$mapp['wxid'] = $openid;
		$mapp['isend'] = array('eq',1);
		$fukuan['successor']  = array('eq',1);
		$dingwei = $m->where($mapp)->where($fukuan)->distinct(true)->order('id desc')->select();
		//dump($dingwei);
		//die("jj");
		$l = M('systemset');
		$tel = $l->select();
		$this->assign("tel",$tel);
		$this->assign("dingwei",$dingwei);
		$this->assign("dingdan",$dingdan);
		$this->display();
	}

//确认订单完成
	public function dingdan_over(){
		$order_id = I('get.order_id');
		$data['state'] = 3;
		$data['isend'] = 2;
		$map['order_id'] = $order_id;
		$m = M('dingdan');
		if($m->where($map)->save($data)){
			$this->redirect('Dingdan/pingjia',array('order_id' => $order_id));
		}
	}

//订单取消
	public function dingdan_cancle(){
		$order_id = I('get.order_id');
		$m = M('dingdan');
		$map['order_id'] = $order_id;
		$data['state'] = 1;
		$data['isend'] = 1;
		$dingdan = $m->where($map)->select();
		//dump($dingdan);
		$openid = $dingdan[0]['wxid'];
		$n = M('systemset');
		$systemset = $n->select();//系统设置
		//dump($systemset);
		$yuyuetime = strtotime($dingdan[0]['time']);//预约时间转化为时间戳
		$nowtime = time();
		$cha = $yuyuetime - $nowtime;//预约时间和当前时间 时间戳的差值
		$timeout = $systemset[0]['hourcancle']*3600 - $cha;
		//dump($timeout);
		if($timeout > 0){
			echo  "<script>alert('已超时，该订单不能取消！')</script>";
			echo  "<script>location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Dingdan/ordering?openid=$openid'</script>";
		}
		if($timeout < 0){
			if($m->where($map)->save($data)){
				// echo $order_id;
				// die("kk");
				$this->senmes($order_id);
				//die("3");
				echo  "<script>alert('该订单已成功取消,请到医院完成退款！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";
			}
			
		}

	}

    //多疗程订单整个取消
	public function dingmore_cancle(){
		$order_id = I('get.order_id');
		$m = M('dingdan');
		$map['order_id'] = $order_id;
		$data['isend'] = 1;
		if($m->where($map)->save($data)){
		$this->senmes($order_id);
			echo  "<script>alert('订单已成功取消,请到医院完成退款！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";		
		}
	}
    
    //多疗程订单取消一次
	public function dingmore_one_cancle(){
		$order_id = I('get.order_id');
		$m = M('dingdan');
		$map['order_id'] = $order_id;
		$map['state'] = 0;
		$data['state'] = 1;
		$dingdan = $m->where($map)->order('id desc')->limit(1)->select();
		//dump($dingdan);
		$openid = $dingdan[0]['wxid'];
		$n = M('systemset');
		$systemset = $n->select();//系统设置
		//dump($systemset);
		$yuyuetime = strtotime($dingdan[0]['time']);//预约时间转化为时间戳
		$nowtime = time();
		$cha = $yuyuetime - $nowtime;//预约时间和当前时间 时间戳的差值
		$timeout = $systemset[0]['hourcancle']*3600 - $cha;
		if($timeout > 0){
			echo  "<script>alert('已超时，本次服务不能取消！')</script>";
			echo  "<script>location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Dingdan/ordering?openid=$openid'</script>";
		}
		if($timeout < 0){
			if($m->where($map)->order('id desc')->limit(1)->save($data)){
				//$i=3;
				$this->senmes($order_id);
				//die("1");
				echo  "<script>alert('本次服务已成功取消！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";
			}
			
		}
	}



	//服务评价
	public function pingjia(){
		$order_id = I('get.order_id');
		//echo $order_id;
		$l = M('systemset');
		$tel = $l->select();
		$this->assign("tel",$tel);
		$this->assign("order_id",$order_id);
		$this->display();
	}

	public function pingjia_update(){
		$order_id = I('post.order_id');
		$data['order_id'] = $order_id;
		$data['service'] = I('post.service');
		$data['product'] = I('post.product');
		$data['effect'] = I('post.effect');
		$data['whole'] = I('post.whole');
		$data['mark'] = I('post.mark');
		$m = M('pingjia');
		if ($m->data($data)->add()) {
			$this->redirect('Dingdan/reward',array('order_id' => $order_id));
		}
	}



	//打赏美丽管家
	public function reward(){
		$order_id = I('get.order_id');
		//dump($order_id);
		$m = M('dingdan');
		$map['order_id'] = $order_id;
		$dingdan = $m->where($map)->order('id desc')->select();
		//dump($dingdan);
		//美丽管家切割
		for($i=0;$i<count($dingdan);$i++){
			$guanjia_id = $guanjia_id."-".$dingdan[$i]['hkeeperid'];
		}
		$newstr = $guanjia_id;
		$newarr = explode("-",$newstr);
		//dump($newarr);
		//查询院内管家
		$mapp['id']  = array('in',$newarr);
		$mapp['type'] = "0";
		$n = M('housekeeper');
		$keepernei = $n->where($mapp)->select();
		//dump($keepernei);
		//die("okk");
		//查询院外管家
		$maap['id']  = array('in',$newarr);
		$maap['type'] = "1";
		$n = M('housekeeper');
		$keeperwai = $n->where($maap)->select();
		//dump($keeperwai);
		$l = M('systemset');
		$tel = $l->select();
		$this->assign("tel",$tel);
		$this->assign("order_id",$order_id);
		$this->assign("keepernei",$keepernei);
		$this->assign("keeperwai",$keeperwai);
		$this->display();
	}

	public function reward_update(){
		$order_id = I('post.order_id');
		$n = M('dingdan');
		$mapp['order_id'] = $order_id;
		$dingdan = $n->where($mapp)->select();

		$b = M('login');
		$mpp['wxid'] = $dingdan[0]['wxid'];
		$login = $b->where($mpp)->select();

		$guanjia = I('post.beautician');
		// dump($guanjia);
		$coinn = I('post.coin');
		// echo $coinn;
		$m = M('housekeeper');
		$map['id'] = array('in',$guanjia);
		$housekeeper = $m->where($map)->select();
		// dump($housekeeper);
		// die("jj");
		if($login[0]['yue'] > $coinn * count($housekeeper)){

		$q = M('coin');
		$mppp['wxid'] = $dingdan[0]['wxid'];
		$mppp['nouse'] = array('neq',0);
		$mppp['timeto'] = array('egt',time());
		//dump($mapp);
		$coin = $q->where($mppp)->order('timeto asc')->select();

		$summ=0;
				for($j=0;$j<=count($coin);$j++){
					if($summ < $coinn * count($coin)){
						$summ+=$coin[$j]['nouse'];
					}else{
						break;
					}
				}
				--$j;
				for($i=0;$i<$j;$i++){//查到前一个
					$m = M('coin');
					$mao['wxid'] = $dingdan[0]['wxid'];
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
					$ppp['id'] = $ni[0]['id'];
					$p->where($ppp)->save($data);
				}
				if($shu <= $coinn * count($coin)){
					$m = M('coin');
					$maa['wxid'] = $dingdan[0]['wxid'];
					$maa['nouse'] = array('neq',0);
					$maa['timeto'] = array('egt',time());
					$nii = $m->where($maa)->order('timeto asc')->limit(1)->select();
					//echo $nii[0]['id'];
					$data['nouse'] = $coin[$j]['nouse'] - ($coinn * count($coin) - $shu);
					$data['usee'] = $coin[$j]['usee'] + ($coinn * count($coin) - $shu);
					$data['timeto'] = $nii[0]['timeto'];
					$data['time'] = $nii[0]['time'];
					$data['usetime'] = time();
					//dump($data);
					$pp = M('coin');
					$mmpp['id'] = $nii[0]['id'];
					$pp->where($mmpp)->save($data);
				}


				/*dump($housekeeper);
				dump($coinn);

				die("ol");*/
			for($k=0;$k<count($housekeeper);$k++){
			$housekeeper[$k]['dashang'] = $housekeeper[$k]['dashang'] + $coinn;
			$dataa['dashang'] = $housekeeper[$k]['dashang'];
			$m = M('housekeeper');
			$m->where($map)->data($dataa)->save();
		}
		$dat['yue'] = $login[0]['yue'] - $coinn * count($housekeeper);
		$b->where($mpp)->data($dat)->save();
		$this->redirect('Mei/keeper',array('openid' => $dingdan[0]['wxid']));
		}else{
			echo  "<script>alert('维美币不足！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";
		}
		
	}

	//发送取消预约通知
	public function senmes($order_id)
	{
		//dump($i);
		//dump($order_id);
            //$time=date('Y-m-d H:m:s');
            $form1=M('dingdan');
            $search2['order_id']=array('eq',$order_id);
            $order1=$form1->where($search2)->order('id desc')->limit(1)->select();
           // dump($order1);
            $d=M('mei');
            $ac['id']=array('eq',$order1[0]['mei_id']);
            $a=$d->where($ac)->limit(1)->select();
             //dump($a);
             //die('ss');
            //dump($a);
            $appid="wx07c0189227f8f9af";
            $appsecrect="0ee349bd9522c91fd523d5770435e626";
            $template_id='afFKgrsnRyyelbq6l2Qa57c6IFFKjdIxvTy33VUjNLQ';            
            $accessToken=$this->getToken($appid,$appsecrect);
            $url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=" . $accessToken;
            //dump($url);

            $data=array(
                'first'=>array('value'=>urlencode("您好，您收到一条订单取消的通知！"),'color'=>"#743A3A"),
                'keyword1'=>array('value'=>urlencode($a[0]['mei_name']),'color'=>'#666'),
                'keyword2'=>array('value'=>urlencode($order1[0]['time']),'color'=>'#666'),
                'remark'=>array('value'=>urlencode('订单号为：'.$order_id.',请尽快处理'),'color'=>'#666'),
            );
            //dump($data); 
            $m=M('admininfo'); 
            $list=  $m->where('isdelete=0')->select();
            //dump($list);
            if( count($list)){
            	for($i=0;$i<count($list);$i++)
                {
                    //dump($list[$i]['wxid']);
                    if($list[$i]['wxid']!=""|| strlen($list[$i]['wxid'])!=0){
                	$this->doSend($list[$i]['wxid'],$template_id, $url, $data, $topcolor = '#7B68EE'); 
                	} 

                }
            }   
          
                
	}


	//再次预约通知提醒
	public function senme($order_id)//
	{
		//dump($i);
		//dump($order_id);
            //$time=date('Y-m-d H:m:s');
            $form1=M('dingdan');
            $search2['order_id']=array('eq',$order_id);
            $order1=$form1->where($search2)->order('id desc')->limit(1)->select();
           // dump($order1);
            $d=M('mei');
            $ac['id']=array('eq',$order1[0]['mei_id']);
            $a=$d->where($ac)->limit(1)->select();
             //dump($a);
             //die('ss');
            //dump($a);
            $appid="wx07c0189227f8f9af";
            $appsecrect="0ee349bd9522c91fd523d5770435e626";
            $template_id='4U9Yht4ailwiNQUtadIGscD-ZP9Ye5s4V4EVMoUjAlc';            
            $accessToken=$this->getToken($appid,$appsecrect);
            $url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=" . $accessToken;
            //dump($url);

            $data=array(
                'first'=>array('value'=>urlencode("您好,您收到一条新的预约！"),'color'=>"#743A3A"),
                'keyword1'=>array('value'=>urlencode($a[0]['mei_name']),'color'=>'#666'),
                'keyword2'=>array('value'=>urlencode($order1[0]['time']),'color'=>'#666'),
                'remark'=>array('value'=>urlencode('订单号为：'.$order_id.',请尽快处理'),'color'=>'#666'),
            );
            //dump($data); 
            $m=M('admininfo'); 
            $list=  $m->where('isdelete=0')->select();
            //dump($list);
            if( count($list)){
            	for($i=0;$i<count($list);$i++)
                {
                    //dump($list[$i]['wxid']);
                    if($list[$i]['wxid']!=""|| strlen($list[$i]['wxid'])!=0){
                	$this->doSend($list[$i]['wxid'],$template_id, $url, $data, $topcolor = '#7B68EE'); 
                	} 

                }
            }   
          
                
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

        //echo "<br> url $url <br>";
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
     