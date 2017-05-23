<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>订单支付</title>
<script type="text/javascript">
var order_sn = "<?php echo ($res['order_sn']); ?>";
//调用微信JS api 支付
function jsApiCall(){
	WeixinJSBridge.invoke(
		'getBrandWCPayRequest',
		<?php echo $jsApiParameters; ?>,
		function(res){
			//如果支付成功
			if (res.err_msg == 'get_brand_wcpay_request:ok') {
				//支付成功后跳转的地址
				location.href = '自行设置';
			}else if (res.err_msg == 'get_brand_wcpay_request:cancel') {
				alert('请尽快完成支付哦！');
			}else if (res.err_msg == 'get_brand_wcpay_request:fail') {
				alert('支付失败');
			}else {
				alert('意外错误');
			}
			//WeixinJSBridge.log(res.err_msg);
			//alert(res.err_code+res.err_desc+res.err_msg);
			/*if (res.err_msg == 'get_brand_wcpay_request:ok') {
				alert('支付成功');
			}else {
				alert('取消支付');
			}*/
		}
	);
}
function callpay(){
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
<body>
<!--头部开始-->
<div class="flowpay">
	<h2>选择支付方式</h2>
	<dl>
		<dd>
			本次订单需支付：<strong class="price"><?php echo ($res['order_amount']); ?></strong>&nbsp;元
		</dd>
		<dd>
			<input type="button" value="微信支付" onclick="callpay();" />
		</dd>
	</dl>
</div>
<!--尾结束-->
</body>
</html>