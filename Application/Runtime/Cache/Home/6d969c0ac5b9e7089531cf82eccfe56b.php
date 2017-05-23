<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="gray">
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
        <a class="title">维美医疗</a>
        <a id="tel" href="tel:<?php echo ($tel[0]['phone']); ?>"><img src="/weimei/Public//images/tel.png"></a>
    </nav>
</header>

<div id="content" class="activity">
    <div class="content">
        <form action="<?php echo U('activity_update');?>" method="post">
            <section>
                <div class="wrap caption">
                    <label for="caption">活动标题：</label>
                    <div class="input-content">
                        <input id="caption" type="text" name="caption" value="<?php echo ($activity[0]['title']); ?>" readonly="readonly">
                    </div>
                </div>
                <div class="wrap coins">
                    <label for="coins">维美币金额：</label>
                    <div class="input-content">
                        <input id="coins" type="text" name="coins" value="<?php echo ($activity[0]['coin']); ?>" readonly="readonly">
                    </div>
                </div>
                <div class="wrap datetime">
                    <label for="datetime">活动截止时间：</label>
                    <div class="input-content">
                        <input id="datetime" type="text" name="datetime" value="<?php echo ($time); ?>" readonly="readonly">
                        <input type="hidden" name="time" value="<?php echo ($activity[0]['timelong']); ?>">
                        <input  type="hidden" name="openid" value="<?php echo ($openid); ?>">
                        <input  type="hidden" name="id" value="<?php echo ($id); ?>">
                    </div>
                </div>
                <div class="wrap name">
                    <label>会员名：</label>
                    <div class="input-content">
                        <input id="name" type="text" name="name" value="<?php echo ($login[0]['name']); ?>" readonly="readonly">
                    </div>
                </div>
            </section>
            <input class="submit" type="submit" value="确认">
        </form>
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

</body>
</html>