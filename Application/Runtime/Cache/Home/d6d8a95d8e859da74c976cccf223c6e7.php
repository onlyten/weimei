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
            <a class="title">已完成</a>
            <a id="tel" href="tel:<?php echo ($tel[0]['phone']); ?>"><img src="/weimei/Public//images/tel.png"></a>
        </nav>
    </header>
    <div id="content" class="order-con">
        <div class="content">
            <script type="text/javascript">__CELL__ = 2; /* #swiper-nav 一行显示的元素个数 */</script>
            <div id="swiper-nav" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide active-nav">已服务</div>
                    <div class="swiper-slide">未服务</div>
                </div>
            </div>
            <div id="swiper-container" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                     <?php if(is_array($dingdan)): foreach($dingdan as $key=>$value): ?><div class="per-ordering">
                            <h5>订单号</h5>
                            <h3><?php echo ($value['order_id']); ?></h3>
                            <a href="http://serv2.matesofts.com/weimei/index.php/Home/Mei/facecare_detail/mei_id/<?php echo ($value[mei_id]); ?>" class="ser-item">服务项目（查看项目）</a>
                            <a>美丽管家联系方式：<?php echo ($tel[0]['phone']); ?></a>
                        </div><?php endforeach; endif; ?>
                    </div>
                    <div class="swiper-slide">
                    <?php if(is_array($dingwei)): foreach($dingwei as $key=>$value): ?><div class="per-ordering">
                            <h5>订单号</h5>
                            <h3><?php echo ($value['order_id']); ?></h3>
                            <a href="http://serv2.matesofts.com/weimei/index.php/Home/Mei/facecare_detail/mei_id/<?php echo ($value[mei_id]); ?>" class="ser-item">服务项目（查看项目）</a>
                            <a>美丽管家联系方式：<?php echo ($tel[0]['phone']); ?></a>
                        </div><?php endforeach; endif; ?>
                    </div>
                </div>
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