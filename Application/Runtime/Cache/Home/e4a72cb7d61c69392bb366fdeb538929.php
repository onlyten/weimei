<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="single full-screen signin">
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
</head>

<body>
<header>
    <nav>
        <a id="location" href="<?php echo U('Mei/ditu');?>"><img src="/weimei/Public//images/location.png"></a>
        <a class="title">签到领币</a>
        <a id="tel" href="tel:<?php echo ($tel[0]['phone']); ?>"><img src="/weimei/Public//images/tel.png"></a>
    </nav>
</header>

<section id="content" class="vh-center">
    <div class="content">
        <div class="today">
            <span class="today-text">今天是</span>
            <span class="today-date"><?php echo ($dangshi); ?></span>
        </div>
        <div id="signin">
            <i class="circle"></i>
            <div class="context">
                <?php if($qiandaor == '0' ): ?><a href="<?php echo U('Qiandao/qiandao_update',array('openid'=>$openid));?>">
                        <span class="img"><img src="/weimei/Public//images/signin.png"></span>
                        <span class="desc">点击签到</span>
                    </a><?php endif; ?>
                <?php if($qiandaor == '1' ): ?><span class="img"><img src="/weimei/Public//images/signin.png"></span>
                        <span class="desc">今日已签到</span><?php endif; ?>
            </div>
        </div>
        <div class="done">
            <?php if($qiandaor == '1' ): ?><div class="tips">
                    <span class="tips-title">签到成功</span>
                </div><?php endif; ?>
            <!--
            <div class="coin vh-center">
                <div class="wrap">
                    <span class="coin-text">已领取</span>
                    <span class="coin-qty" id="coinQty">500</span>
                </div>
            </div>
            -->
        </div>
    </div>
</section>

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
<script type="text/javascript" src="/weimei/Public/Home/js/custom.js"></script>
<script type="text/javascript">
$(function(){
    // $('#content').css({'padding-top': $('header').outerHeight()});
    console.log(1);
});
</script>

</body>
</html>