<?php
ini_set('date.timezone','Asia/Shanghai');
error_reporting(E_ERROR);

vendor('matewxpay.WxPayApi');
vendor('matewxpay.WxPayNotify');



class PayNotifyCallBack extends WxPayNotify
{
	//查询订单
	public function Queryorder($transaction_id)
	{
		$input = new WxPayOrderQuery();
		$input->SetTransaction_id($transaction_id);
		$result = WxPayApi::orderQuery($input);
		//echo "hello";
		//var_dump($result);

		
		if(array_key_exists("return_code", $result)
			&& array_key_exists("result_code", $result)
			&& $result["return_code"] == "SUCCESS"
			&& $result["result_code"] == "SUCCESS")
		{
			return true;
		}
		return false;
	}
	
	//重写回调处理函数
	public function NotifyProcess($data, &$msg)
	{	
		

		//$link = mysql_connect('qdm102668679.my3w.com','qdm102668679','Msd2014793') or die('连接失败！');
		//mysql_select_db('qdm102668679_db',$link)or die('数据库链接失败!');
		//$sql = "update aishang_dingdan set successor='1' where dingdanhao='".$data["attach"]."'";
		//$res = mysql_query($sql,$link);
		
		//mysql_close($link);


		$fp = fopen(__DIR__ . "/debug.txt", "a+");

		fwrite($fp, "ookk?");

		fclose($fp);

		$notfiyOutput = array();
		
		if(!array_key_exists("transaction_id", $data)){
			$msg = "输入参数不正确";
			 $fp = fopen(__DIR__ . "/debug.txt", "a+");
				fwrite($fp, "ok".$data["transaction_id"]."\r\n");
				fclose($fp);
			return false;
		}
		//查询订单，判断订单真实性
		if(!$this->Queryorder($data["transaction_id"])){
			$msg = "订单查询失败";
			return false;
		}

	    //$fp = fopen(__DIR__ . "/debug.txt", "a+");

		//fwrite($fp, "ok".$data["transaction_id"]."***".$data["attach"].$sql."\r\n");

		//fclose($fp);

		




		
		$link = mysql_connect('qdm102668679.my3w.com','qdm102668679','Msd2014793') or die('连接失败！');
		mysql_select_db('qdm102668679_db',$link)or die('数据库链接失败!');
		$sql = "update weimei_dingdan set successor='1' where order_id='".$data["attach"]."'";
		$res = mysql_query($sql,$link);
		$order_id = $data["attach"];
		if($res){
			$this->senmes($order_id);
		}
		mysql_close($link);
		// $fp = fopen(__DIR__ . "/debug.txt", "a+");

		// fwrite($fp, "ok".$data["transaction_id"]."***".$data["attach"].$sql."\r\n");

		// fclose($fp);
		return true;
	}

	//发送预约成功通知
	public function senmes($order_id)
	{
            //$time=date('Y-m-d H:m:s');
		//dump($time);
            $d=M('dingdan');
            $ac['order_id']=array('eq',$order_id);
            $ab['successor']=array('eq',1);
            $a=$d->where($ac)->where($ab)->order('id desc')->limit(1)->select();

            $mei=M('mei');
            $meii['id'] = array('eq',$a[0]['mei_id']);
            $meiming = $mei->where($meii)->limit(1)->select();
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
                'keyword1'=>array('value'=>urlencode($meiming[0]['mei_name']),'color'=>'#666'),
                'keyword2'=>array('value'=>urlencode($a[0]['time']),'color'=>'#666'),
                'remark'=>array('value'=>urlencode('订单号为'.$a[0]['order_id'].',请尽快处理'),'color'=>'#666'),
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


