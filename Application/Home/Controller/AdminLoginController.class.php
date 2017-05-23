<?php
namespace Home\Controller;
use Think\Controller;
class AdminLoginController extends Controller {
	//登陆
	public function adminlogin ()
	{
		$code = $_GET['code'];//获取code
		$weixin =  file_get_contents("https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx07c0189227f8f9af&secret=0ee349bd9522c91fd523d5770435e626&code=".$code."&grant_type=authorization_code");//通过code换取网页授权access_token
		$jsondecode = json_decode($weixin); //对JSON格式的字符串进行编码
		$array = get_object_vars($jsondecode);//转换成数组
		$openid = $array['openid'];//输出openid
		$this->assign('openid',$openid);
		$this->display();
	}
	//登陆检测
	public function login_check()
	{	
		$m = M('admininfo');
		$mobile = I('post.username');
		$password = I('post.password');
		$wxid=I('post.txtwxid');
		$data['wxid']=$wxid;				
		$map['name']=array('eq',$mobile);
		$map['password']=array('eq',$password);
		$list=$m->where($map)->limit(1)->select();
		$id=$list[0]['id'];

		if(count($list)>0){
			if($m->where('id = '.$id)->save($data)){
				$this->success('微信号绑定成功!', 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx07c0189227f8f9af&redirect_uri=__URL__/weimei/index.php/Home/AdminLogin/adminlogin&response_type=code&scope=snsapi_base&state=123#wechat_redirect');
			}
			else{
				$this->error('修改失败!', 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx07c0189227f8f9af&redirect_uri=__URL__/weimei/index.php/Home/AdminLogin/adminlogin&response_type=code&scope=snsapi_base&state=123#wechat_redirect');
			}

		}
		else
		{
			$this->error('用户名或密码错误!', 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx07c0189227f8f9af&redirect_uri=__URL__/weimei/index.php/Home/AdminLogin/adminlogin&response_type=code&scope=snsapi_base&state=123#wechat_redirect');
		}
        
	}


}