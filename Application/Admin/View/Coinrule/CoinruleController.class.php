<?php
namespace Admin\Controller;
use Think\Controller;
class CoinruleController extends Controller {
  
    public function qdcoinrule_list() {    
       
        //列表
        if(isset($_SESSION["username"])){
            $m = M('coinrule');
            if (!I('get.page_now')) {
                $page_now = 1;
            } else {
                $page_now = I('get.page_now');
            }
            $map['type']=array('eq', 0);
            $orders = $m->order('id desc')->where($map)->page($page_now . ',10')->select();
            
            /*foreach($orders as $newa)
            {
                $newa['timeto']=date('Y-m-d',$newa['timeto']);
                //dump($newa['timeto']);
            }*/
            for($i=0;$i<count($orders);$i++)
            {
                $orders[$i]['timeto']=date('Y-m-d',$orders[$i]['timeto']);
            }
            // echo $m->_sql();
            $order_count = $m->where($map)->count();
            if ($order_count % 10 == 0) {
                $server_pagenum = (int) ($order_count / 10);
            } else {
                $server_pagenum = (int) ($order_count / 10) + 1;
            }           
            $this->assign('rulelist', $orders);
            $this->assign('page_now', $page_now);
            $this->assign('order_count', $order_count);
            $this->assign('server_pagenum', $server_pagenum);

            $this->display();
        }else{
            $this->redirect('Login/login');
        }
          
    }
  public function qdcoinrule_modify() {
        $m = M('coinrule');
        $sid=I('get.sid');
		$order1 = $m->where('id='.$sid)->limit(1)->select();
        $order1[0]['timeto']= date('Y-m-d',$order1[0]['timeto']);
		$this->assign('coinrule', $order1);
		$this->display();
	}

   public function qdcoinrule_modify_update() {	
		$m = M('coinrule');
		$sid=I('get.sid');
		$data['coins']=I('post.txtcoin');
		$data['timeto']=strtotime(I('post.txttimeto'));
		$data['updatetime']=date('y-m-d H:i:s',time());
		if ($m->where('id = ' . $sid)->save($data)) {
			$this->success('修改成功', U('qdcoinrule_list'));
		} else {
			$this->error('修改失败，请重试', U('qdcoinrule_list'));
		}	
	}

	public function cscoinrule_modify() {
		
		//echo($order_id );
		$m = M('coinrule');
		$map['id'] = array('eq',2);
		$order1 = $m->where($map)->select();
		//$order1 = $m->select();
		//dump($order1);
        
		$this->assign('cscoinrule', $order1);
		$this->display();
	}

	 public function cscoinrule_modify_update() {
       $m = M('coinrule');
		$sid=I('get.sid');
		//echo($sid);
		$data['coins']=I('post.txtcoin');
		$data['timeto']=I('post.txttimeto');
		$data['updatetime']=date('y-m-d H:i:s',time());
		
		if ($m->where('id = ' . $sid)->save($data)) {
			$this->success('修改成功');
		} else {
			$this->error('修改失败，请重试');
		}
	 }

    public function qdcoinrule_add_update(){
        $m = M('coinrule');
        $data['coins']=I('post.txtcoin');
        $data['timeto']=strtotime(I('post.txttimeto'));
        $data['addtime']=date('y-m-d H:i:s',time());
        $data['type']=0;
        //dump($data);
        //die();
        if ($m->add($data)) {
            $this->success('添加成功',U('qdcoinrule_list'));
        } else {
            $this->error('添加失败，请重试',U('qdcoinrule_list'));
        }
    }

    public function qdcoinrule_delete_update(){
        $m = M('coinrule');
        $delete_id = I('post.delete_id');
        //dump($delete_id);
        $map['id'] = array('in', $delete_id);
        
        if ($m->where($map)->delete()) {
            $this->success('删除成功', U('qdcoinrule_list'));
        } else {
            $this->error('删除失败，请重试', U('qdcoinrule_list'));
            }
    }
    


	public function senmes()
	{
            $appid='wx07c0189227f8f9af';
            $secrect='0ee349bd9522c91fd523d5770435e626';
            $template_id='afFKgrsnRyyelbq6l2Qa57c6IFFKjdIxvTy33VUjNLQ';
            $accessToken=$this->getToken($appid, $appsecret);
            dump($accessToken);
            dump($url);
            $flag=$this->doSend('oNyT2t4-fGukLknVXH_FMFTL5Ah4',$template_id, $url, $data, $topcolor = '#7B68EE');
            dump($flag);
                
	}

     /**
     * @param $appid
     * @param $appsecret
     * @return mixed
     * 获取token
     */
    protected function getToken($appid, $appsecret)
    {
        if (S($appid)) {
            $access_token = S($appid);
        } else {
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . $appid . "&secret=" . $appsecret;
            $token = $this->request_get($url);
            $token = json_decode(stripslashes($token));
            $arr = json_decode(json_encode($token), true);
            $access_token = $arr['access_token'];
            S($appid, $access_token, 720);
        }
        return $access_token;
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
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

 
    /**
     * 发送自定义的模板消息
     * @param $touser
     * @param $template_id
     * @param $url
     * @param $data
     * @param string $topcolor
     * @return bool
     */
    public function doSend($touser, $template_id, $url, $data, $topcolor = '#7B68EE')
    {
 
         $data=>array(
                'first'=>array('value'=>urlencode("您好,您已购买成功"),'color'=>"#743A3A"),
                'keyword1'=>array('value'=>urlencode("预约内容"),'color'=>'#EEEEEE'),
                'keyword2'=>array('value'=>urlencode("哈啊哈"),'color'=>'#EEEEEE'),
                'remark'=>array('value'=>urlencode('永久有效!密码为:1231313'),'color'=>'#FFFFFF'),
            )
         
        $template = array(
            'touser' => $touser,
            'template_id' => $template_id,
            'url' => $url,
            'topcolor' => $topcolor,
            'data' => $data
        );
        $json_template = json_encode($template);
        $url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=" . $this->accessToken;
        $dataRes = $this->request_post($url, urldecode($json_template));
        if ($dataRes['errcode'] == 0) {
            return true;
        } else {
            return false;
        }
    }

}

