<?php
namespace Home\Controller;
use Think\Controller;
//微信支付类
class MsWxpayController extends Controller {
	//获取access_token过程中的跳转uri，通过跳转将code传入jsapi支付页面
	public function js_api_call() {

        require_once(__DIR__ . '/JsApiPay.php');
        vendor('matewxpay.WxPayApi');

        $tools = new \JsApiPay();
       // $openId = $tools->GetOpenid();
        $openId = I('get.openid');
        $ming = I('get.ming');
        $order_id = I('get.order_id');
        //echo $ming."<br/>".$order_id;
       // die("kk");
        $xiaofei11 = trim(I('get.xiaofei'));
       // echo $xiaofei11 . " 1 <br>";
        //die("hh");
       // echo I('post.xiaofei') . " 2 <br>";

        //die("ffffk");


        //die("jj");

        

       // echo $xiaofei11 . " 3 <br>";

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
        

        //echo $xiaofei11 . " 50 <br>";
        
        //$xiaofei11 = trim(I('post.xiaofei'));

        //echo $xiaofei11 . " 5 <br>";
        //echo I('post.xiaofei') . " 6 <br>";

       // die("fff");
 //echo $ming;
        //die("kk");
        $xiaofei = $xiaofei11*100;
		$input = new \WxPayUnifiedOrder();
        $input->SetBody("维美支付");
        $input->SetAttach($order_id);
        $input->SetOut_trade_no(\WxPayConfig::MCHID.date("YmdHis"));
        $input->SetTotal_fee($xiaofei);
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag($ming);
        $input->SetNotify_url("http://wxsc.wei-mei.com/weimei/index.php/Home/MsWxpay/js_notify");
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



    public function js_notify() {
        $fp = fopen(__DIR__ . "/debug.txt", "a+");

        fwrite($fp, "aaaa");

        fclose($fp);


        vendor('matewxpay.WxPayApi');

        $input = new \WxPayOrderQuery();
        $input->SetOut_trade_no('1005200879201512302401663786');
        var_dump(\WxPayApi::orderQuery($input));

        $input = new \WxPayOrderQuery();

        $input->SetTransaction_id('1005200879201512302401663786');
        var_dump(\WxPayApi::orderQuery($input));



        $order_sn = "20150109113322";
        if (empty($order_sn)) {
            header('location:'.__ROOT__.'/');
        }
        require_once(__DIR__ . '/MsWxpayNotify.php');
        

    

        $notify = new \PayNotifyCallBack();
        $notify->Handle(false);

        $this->display('js_api_callyao2');
        
    }


    public function js_query() {
        $fp = fopen(__DIR__ . "/debug.txt", "a+");

        fwrite($fp, "bbbb");

        fclose($fp);


        vendor('matewxpay.WxPayApi');

        $input = new \WxPayOrderQuery();
        $input->SetOut_trade_no('1005200879201512302401663786');
        var_dump(\WxPayApi::orderQuery($input));
        echo "<br/>";
        $input = new \WxPayOrderQuery();

        $input->SetTransaction_id('1005200879201512302401663786');
        var_dump(\WxPayApi::orderQuery($input));

        echo "<br/>";
        $input = new \WxPayOrderQuery();

        $input->SetTransaction_id('1005200879201512302401663786');
        var_dump(\WxPayApi::orderQuery($input));
    }

}
?>