<?php if (!defined('THINK_PATH')) exit();?>    <!DOCTYPE html>
    <html>
    <head>
       <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="MobileOptimized" content="320">
	    <title>维美美丽管家</title>
	    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/font-awesome.min.css">
	    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/swiper.min.css">
	    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/common.css">
	    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/custom.css">
	    <script type="text/javascript">
			//调用微信JS api 支付
			function jsApiCall()
			{
				WeixinJSBridge.invoke(
					'getBrandWCPayRequest',
					<?php echo ($paraVal); ?>,
					function(res){
						WeixinJSBridge.log(res.err_msg);
						//alert(res.err_code+res.err_desc+res.err_msg);
					}
				);
			}

			function callpay()
			{
				if (typeof WeixinJSBridge == "undefined"){
				    if( document.addEventListener ){
				        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
				    }else if (document.attachEvent){
				        document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
				        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
				    }
				}else{
				    jsApiCall();
				}
			}
		</script>
	</head>
    <body style="margin-top: -15px;margin-bottom: 0px ">
    <header>
    	<nav>
    		<a id="location" href="<?php echo U('Mei/ditu');?>"><img src="/weimei/Public//images/location.png"></a>
			<a class="title">维美支付</a>
			<a id="tel" href="tel:<?php echo ($tel[0]['phone']); ?>"><img src="/weimei/Public//images/tel.png"></a>
		</nav>
	</header>
		<div id="content" class="payway-con">
			<div class="content">
	        <!--<form action="<?php echo U('MsWxpay/js_api_call');?>" method="post">-->
	            <section>
	                <div class="payway weixin-way clearfix">
	                    <div class="payway-left">
	                        <span class="ico"></span>
	                        <a>微信支付 <span>推荐已安装微信客户端的用户使用</span></a>
	                    </div>
	                    <div class="payway-right">
	                        <img src="/weimei/Public//images/payyes.png">
	                    </div>
	                </div>
	                <div class="payway alipay-way clearfix">
	                    <div class="payway-left">
	                        <span class="ico"></span>
	                        <a>支付宝支付 <span>推荐已安装支付宝客户端的用户使用</span></a>
	                    </div>
	                    <div class="payway-right">
	                    </div>
	                </div>
	            </section>
	            <input type="hidden" name="xiaofei" value="<?php echo ($xiaofei); ?>">
	            <input type="hidden" name="openid" value="<?php echo ($openid); ?>">
	            <input type="hidden" name="ming" value="<?php echo ($ming); ?>">
	            <input type="hidden" name="order_id" value="<?php echo ($order_id); ?>">
	            <input class="submit" type="button" onclick="callpay()" value="确认支付">
	       <!-- </form>-->
	       </div>
       </div>

<footer>
    <ul class="clearfix">
        <li class="center">
            <a href="<?php echo U('Mei/mei_index');?>">
                <div class="ico">
                    <img src="/weimei/Public//images/home.png">
                </div>
                <span>首页</span>
            </a>
        </li>
        <li class="center">
            <a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx07c0189227f8f9af&redirect_uri=http://serv2.matesofts.com/weimei/index.php/Home/Dingdan/order&response_type=code&scope=snsapi_base&state=123#wechat_redirect">
                <div class="ico">
                    <img src="/weimei/Public//images/order.png">
                </div>
                <span>订单</span>
            </a>
        </li>
        <li class="center">
            <a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx07c0189227f8f9af&redirect_uri=http://serv2.matesofts.com/weimei/index.php/Home/Mei/keeper&response_type=code&scope=snsapi_base&state=123#wechat_redirect">
                <div class="ico">
                    <img src="/weimei/Public//images/user.png">
                </div>
                <span>我的</span>
            </a>
        </li>
    </ul>
</footer>

<script type="text/javascript" src="/weimei/Public/Home/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/weimei/Public/Home/js/swiper.min.js"></script>
<script type="text/javascript" src="/weimei/Public/Home/js/custom.js"></script>
</body>
</html>