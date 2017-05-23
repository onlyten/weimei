<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="gray">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="MobileOptimized" content="320">

    <title>维美医疗</title>

    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/common.css">
    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/custom.css">
</head>

<body>
<header>
    <nav>
        <a id="login" href="">登录</a>
        <a class="title">评价</a>
        <a id="tel" href="tel:123456789"><img src="/weimei/Public//images/tel.png"></a>
    </nav>
</header>

<div id="content" class="appraisal">
    <div class="content">
        <form action="<?php echo U('pingjia_update');?>" method="post">
        <section>
            <div class="wrap">
                <span class="attr">服务评价：</span>
                <span class="star"><i class="fa fa-star light"></i><i class="fa fa-star light"></i><i class="fa fa-star light"></i><i class="fa fa-star light"></i><i class="fa fa-star light"></i></span>
                <input type="hidden" name="starService" value="5">
            </div>
            <div class="wrap">
                <span class="attr">产品评价：</span>
                <span class="star"><i class="fa fa-star light"></i><i class="fa fa-star light"></i><i class="fa fa-star light"></i><i class="fa fa-star light"></i><i class="fa fa-star light"></i></span>
                <input type="hidden" name="starProduct" value="5">
            </div>
            <div class="wrap">
                <span class="attr">效果评价：</span>
                <span class="star"><i class="fa fa-star light"></i><i class="fa fa-star light"></i><i class="fa fa-star light"></i><i class="fa fa-star light"></i><i class="fa fa-star light"></i></span>
                <input type="hidden" name="starEfficacy" value="5">
            </div>
            <div class="wrap">
                <span class="attr">整体评价：</span>
                <span class="star"><i class="fa fa-star light"></i><i class="fa fa-star light"></i><i class="fa fa-star light"></i><i class="fa fa-star light"></i><i class="fa fa-star light"></i></span>
                <input type="hidden" name="starComprehensive" value="5">
                <textarea class="context" name="textComprehensive" rows="6" placeholder="|输入"></textarea>
            </div>
        </section>
            <input id="submit" class="submit" type="submit" value="提交">
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
            <a href="">
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
<script type="text/javascript">
$(function(){
    $('.star i').on('click', function(){
        var $this = $(this)
            $parent = $this.parent(),
            index = $this.index(),
            star = index + 1;

        $parent.find('i:lt(' + star + ')').addClass('light');
        $parent.find('i:gt(' + index + ')').removeClass('light');

        $parent.siblings('input').val(star);
    });
});
</script>

</body>
</html>