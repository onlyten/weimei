<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
</head>

<body>
<header>
    <nav>
        <a id="location" href="<?php echo U('Mei/ditu');?>"><img src="/weimei/Public//images/location.png"></a>
        <a class="title">美丽管家</a>
        <a id="tel" href="tel:<?php echo ($tel[0]['phone']); ?>"><img src="/weimei/Public//images/tel.png"></a>
    </nav>
</header>

<div id="content" class="doctor_intro">
    <div class="content">
    <?php if(is_array($housekeeper)): foreach($housekeeper as $key=>$value): ?><div class="doctor_per">
            <div class="per_img left">
                <a href="<?php echo U('Mei/housekeeper_detail',array('housekeeper_id'=>$value['id']));?>">
                    <div class="bg">
                        <img src="/weimei/Public//images/bg.png">
                    </div>
                    <div class="picture">
                        <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($value['pic_tou']); ?>">
                    </div>
                </a>
            </div>
            <div class="per_intro right">
                <h3><?php echo ($value['name']); ?></h3>
                <div class="attrs">
                    <span class="num">工号：<em><?php echo ($value['job_num']); ?></em></span>
                    <span class="pro">职称等级：<em><?php echo ($value['title']); ?></em></span>
                    <span class="star">客户评价：<em><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></em></span>
                </div>
                <a href="<?php echo U('Mei/housekeeper_detail',array('housekeeper_id'=>$value['id']));?>">+了解更多</a>
            </div>
            <div class="clear"></div>
        </div><?php endforeach; endif; ?>
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
<script type="text/javascript" src="/weimei/Public/Home/js/custom.js"></script>

</body>
</html>