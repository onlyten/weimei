<?php
namespace Home\Controller;
use Think\Controller;
//微信支付类
class MsWxpayController extends Controller {
	//获取access_token过程中的跳转uri，通过跳转将code传入jsapi支付页面
	public function js_api_call() {

        require_once(__DIR__ . '/JsApiPay.php');
        vendor('matewxpay.WxPayApi');

       // $tools = new \JsApiPay();
       // $openId = $tools->GetOpenid();
        $openId = I('post.openid');
        $xiaofei11 = trim(I('post.xiaofei'));
        echo $xiaofei11 . " 1 <br>";
        //die("hh");
        echo I('post.xiaofei') . " 2 <br>";

        //die("ffffk");


        //die("jj");

        

        echo $xiaofei11 . " 3 <br>";

        //die("jj");

        
        //die("jjj");
		//vendor('matewxpay.WxPayData');


		//$tools = new \JsApiPay();
        //$openId = $tools->GetOpenid();
        //echo I('post.xiaofei');
        //echo $xiaofei;
        //echo "hhh";
        //
        //echo $xiaofei . " 4 <br>";
        
        //die("kkk");
		//echo $openId;
        //$xiaofei = "2980";
        //
        

        echo $xiaofei11 . " 50 <br>";
        
        $xiaofei11 = trim(I('post.xiaofei'));

        echo $xiaofei11 . " 5 <br>";
        echo I('post.xiaofei') . " 6 <br>";

       // die("fff");


		$input = new \WxPayUnifiedOrder();
        $input->SetBody("test");
        $input->SetAttach("test");
        $input->SetOut_trade_no(\WxPayConfig::MCHID.date("YmdHis"));
        $input->SetTotal_fee($xiaofei11);
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("test");
        $input->SetNotify_url("http://paysdk.weixin.qq.com/example/notify.php");
        $input->SetTrade_type("JSAPI");
        $input->SetOpenid($openId);
        $order = \WxPayApi::unifiedOrder($input);

		//var_dump($order);
        $jsApiParameters = $tools->GetJsApiParameters($order);

		//var_dump($jsApiParameters);

        //获取共享收货地址js函数参数
        $editAddress = $tools->GetEditAddressParameters();


        $this->assign('paraVal', $jsApiParameters);
        
        $this->display('js_api_callyao1');
	}

}
?>