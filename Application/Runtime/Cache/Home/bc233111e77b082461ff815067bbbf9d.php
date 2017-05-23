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
        <a class="title">会员信息</a>
        <a id="tel" href="tel:<?php echo ($tel[0]['phone']); ?>"><img src="/weimei/Public//images/tel.png"></a>
    </nav>
</header>

<div id="content" class="account-con">
    <div class="content">
        <div class="account-top">
            <a class="bg-pic">
                <img src="/weimei/Public//images/mybg1.png">
                <div class="person">
                    <span class="avatar"><img src="<?php echo ($login[0]['img']); ?>"></span>
                    <span><?php echo ($login[0]['name']); ?></span>
                </div>
            </a>
        </div>
        <div class="vipinfo-con">
            <ul>
                <li class="clearfix">
                    <a >
                        <span class="ico">
                        </span>
                        <span class="ico-right"><?php echo ($login[0]['name']); ?></span>
                    </a>
                </li>
                <li class="clearfix">
                    <a ><span class="ico"></span><span class="ico-right">会员卡号：<?php echo ($login[0]['card_num']); ?></span></a>
                </li>
                <li class="clearfix">
                    <a ><span class="ico"></span><span class="ico-right">会员等级：
                    <?php if($login[0]['level'] == 1): ?>暂无<?php endif; ?>
                    <?php if($login[0]['level'] == 2): ?>闺蜜卡<?php endif; ?>
                    <?php if($login[0]['level'] == 3): ?>潜力卡<?php endif; ?>
                    <?php if($login[0]['level'] == 4): ?>维美女人卡<?php endif; ?>
                    <?php if($login[0]['level'] == 5): ?>魅力女人卡<?php endif; ?>
                    <?php if($login[0]['level'] == 6): ?>精致女人卡<?php endif; ?>
                    <?php if($login[0]['level'] == 7): ?>完美女人卡<?php endif; ?>
                    </span></a>
                </li>
                <li class="clearfix">
                    <a href=""><span class="ico"></span><span class="ico-right">充值<span>点击充值</span></span></a>
                </li>
            </ul>
        </div>
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