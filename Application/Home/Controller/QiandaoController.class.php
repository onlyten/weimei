<?php
namespace Home\Controller;
use Think\Controller;
class QiandaoController extends Controller {
//签到
	public function qiandao ()
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
		$dangshi = date("Y-m-d",time());//显示当前的日期

		$n = M('coin');//一天签到一次
		$mapp['wxid'] = $openid;
		$mapp['type'] = array('neq',3);
		//dump($mapp);
		$coin = $n->where($mapp)->order('id desc')->limit(1)->select();
		//dump($coin);
		$b = date('Y-m-d', $coin[0]['time']);//最新签到日期
		$a = date('Y-m-d', time()); //当前日期
		//echo $b."<br/>".$a;
		if($a == $b){
			$qiandaor = 1;
		}else{
			$qiandaor = 0;
		}
		//echo $openid;
		if(count($login) != 0){
			$l = M('systemset');
			$tel = $l->select();
			$this->assign("tel",$tel);
			$this->assign("qiandaor",$qiandaor);
			$this->assign("openid",$openid);
			$this->assign("dangshi",$dangshi);
			$this->display();
		}else{
			$this->redirect('Login/login_pre');
		}
	}


//签到更新
	public function qiandao_update (){	
		$openid = I('get.openid');
		$m = M('coinrule');
		$map['type'] = '0';
		$map['timeto'] = array('gt',time());
		$coinrule = $m->where($map)->order('timeto asc')->limit(1)->select();
		//dump($coinrule);
		//die('niaho');
		$n = M('coin');//一天签到一次
		$mapp['wxid'] = $openid;
		$mapp['type'] = array('neq',3);
		$coin = $n->where($mapp)->order('id desc')->limit(1)->select();
		$b = date('Y-m-d', $coin[0]['time']);//最新签到日期
		$a = date('Y-m-d', time()); //当前日期
		
		$data['time'] = time();
		$data['wxid'] = $openid;
		$data['coinrule_id'] = $coinrule[0]['id'];
		$data['nouse'] = $coinrule[0]['coins'];
		$data['timeto'] = $coinrule[0]['timeto'];
		if($a != $b){
			$b = M('login');
			$wxid['wxid'] = $openid;
			$login = $b->where($wxid)->select();
			$dat['yue'] = $login[0]['yue'] + $coinrule[0]['coins'];
			$b->where($wxid)->save($dat);
			$n->data($data)->add();
			echo  "<script>alert('签到成功！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";
		}else{
			echo  "<script>alert('明天再来吧！');window.location.href='http://wxsc.wei-mei.com/weimei/index.php/Home/Mei/mei_index'</script>";
		}
	}


//签到分类（可用、已用、已过期）

	public function balance(){
		$openid = I('get.openid');
		$m = M('coin');
		$map['wxid'] = $openid;
		$mappp['nouse'] = array('neq',0);
		$mop['usee'] = array('neq',0);
		$mapp['timeto'] = array('egt',time());
		$hao = $m->where($map)->where($mapp)->where($mappp)->field('max(time),timeto,coinrule_id,type,coinactivity_id,sum(nouse)')->group('coinrule_id')->select();//可用的
		$ma['timeto'] = array('lt',time());
		$ci = $m->where($map)->where($mappp)->where($ma)->field('time,timeto,coinrule_id,type,coinactivity_id,sum(nouse)')->group('coinrule_id')->select();//过期的
		$yong = $m->where($map)->where($mop)->field('time,max(usetime),timeto,coinrule_id,type,coinactivity_id,sum(usee)')->group('coinrule_id')->select();//已经使用的
		//dump($yong);
		//die("55");
		//die("hao");
		//dump($ci);
		$l = M('systemset');
		$tel = $l->select();
		$this->assign("tel",$tel);
		$this->assign("yong",$yong);
		$this->assign("hao",$hao);
		$this->assign("ci",$ci);
		$this->display();

	}
}