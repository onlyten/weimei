<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	//登陆
	public function code_check()
	{
		$dd = I('post.');
		dump($dd);
		die("kk");
	}
	//登陆检测
	public function login_check()
	{	
		$mobile = I('post.mobile');
		$password = I('post.password');
		$m = M('login');
		$login = $m->where('mobile = '.$mobile)->select();
		if($login[0]['password'] !=  $password){
			echo  "<script>alert('登录名或密码错误！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Login/login'</script>";
		}else{
			session('name',$login[0]['name']);
			$this->redirect('Mei/mei_index');
		}
	}

	//注册
	public function registe ()
	{	
		$code = $_GET['code'];//获取code
		$weixin =  file_get_contents("https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx07c0189227f8f9af&secret=0ee349bd9522c91fd523d5770435e626&code=".$code."&grant_type=authorization_code");//通过code换取网页授权access_token
		$jsondecode = json_decode($weixin); //对JSON格式的字符串进行编码
		$array = get_object_vars($jsondecode);//转换成数组
		$openid = $array['openid'];//输出openid
		$this->assign("openid",$openid);
		$m = M('login');
		$map['wxid'] = $openid;
		$login = $m->where($map)->select();
		//echo $openid;
		if(count($login) != 0){
			echo "<script>alert('你已经注册成功！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";
		}else{
			$this->display();
		}
	}


	//注册
	public function registe_update ()
	{	
		$openid = I('post.wxid');
		$appid="wx07c0189227f8f9af";
        $appsecrect="0ee349bd9522c91fd523d5770435e626";
		$accessToken = $this->getToken($appid,$appsecrect);
		//echo $accessToken;
		$url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$accessToken."&openid=".$openid;
		$userinfo_json=json_decode($this->curl_get($url),true);
		//dump($userinfo_json);
		//die("..");
		//echo $userinfo_json["nickname"];
		//die("jj");
		$data['name'] = $userinfo_json["nickname"];
		$data['img'] = $userinfo_json["headimgurl"];
		$data['mobile'] = I('post.mobile');
		$data['wxid'] = I('post.wxid');
		$data['password'] = I('post.password');
		$data['member'] = I('post.member');
		$data['time'] = date('y-m-d h:i:s',time());

		if (I('post.wxid')) {
			$m = M('login');
			if ($m->data($data)->add()) {
				$this->redirect('Mei/mei_index');
			} else {
				$this->redirect('Login/registe');
			}
		}
	}

	//退出登录
	public function logout()
	{
		session('name',null);
		$this->redirect('login');
	}

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

     public function curl_get($url)
    {
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1); // 从证书中检查SSL加密算法是否存在   
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//返回文本流,
        $data=curl_exec($ch);
        curl_close($ch);
        return $data;
    }

}