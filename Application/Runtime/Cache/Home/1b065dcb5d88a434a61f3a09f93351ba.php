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
        <a class="title">美丽管家 - 详情</a>
        <a id="tel" href="tel:<?php echo ($tel[0]['phone']); ?>"><img src="/weimei/Public//images/tel.png"></a>
    </nav>
</header>

<div id="content" class="keeper_detail">
    <div class="content">
        <div class="detail-top">
            <div class="swiper-container swiper-top">
                <div class="swiper-wrapper">
                    <?php if($pic_xing[0] != null): ?><div class="swiper-slide"><img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($pic_xing[0]); ?>"></div><?php endif; ?>
                    <?php if($pic_xing[1] != null): ?><div class="swiper-slide"><img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($pic_xing[1]); ?>"></div><?php endif; ?>
                    <?php if($pic_xing[2] != null): ?><div class="swiper-slide"><img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($pic_xing[2]); ?>"></div><?php endif; ?>
                </div>
                <div class="swiper-pagination pagination1"></div>
            </div>
        </div>
        <div class="intro">
            <div class="tit">
                <h3><?php echo ($housekeeper[0]['name']); ?>  /<span>name</span></h3>
            </div>
            <div class="per-data-con">
                <ul class="per-data clearfix">
                    <li><a><img src="/weimei/Public//images/em1.png">工号：<span><?php echo ($housekeeper[0]['job_num']); ?></span> </a></li>
                    <li><a><img src="/weimei/Public//images/em2.png">职称等级：<span><?php echo ($housekeeper[0]['title']); ?></span></a></li>
                    <li><a><img src="/weimei/Public//images/em3.png">学历：<span><?php echo ($housekeeper[0]['xueli']); ?></span></a></li>
                </ul>
                <p><span>任职经历：</span><?php echo ($housekeeper[0]['rzjl']); ?></p>
                <p><span>擅长项目：</span><?php echo ($housekeeper[0]['scxm']); ?></p>
            </div>
        </div>
        <div class="qualification">
            <div class="intro">
                <div class="tit">
                    <h3>资格证书  /<span> Qualification</span></h3>
                </div>
            </div>
            <div class="swiper">
                <!-- Swiper -->
                <div class="swiper-button-prev swiper-button-prev1"></div>
                <div class="swiper-button-next swiper-button-next1"></div>
                <div class="swiper-container swiper-con3">
                    <div class="swiper-wrapper">
                    <?php if($zzzs[0] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($zzzs[0]); ?>">
                            <div class="qua-info">
                                <p><?php echo ($zzzs[1]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($zzzs[2] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($zzzs[2]); ?>">
                            <div class="qua-info">
                                <p><?php echo ($zzzs[3]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($zzzs[4] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($zzzs[4]); ?>">
                            <div class="qua-info">
                                <p><?php echo ($zzzs[5]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($zzzs[6] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($zzzs[6]); ?>">
                            <div class="qua-info">
                                <p><?php echo ($zzzs[7]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($zzzs[8] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($zzzs[8]); ?>">
                            <div class="qua-info">
                                <p><?php echo ($zzzs[9]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro">
            <div class="tit">
                <h3>客户评价  /<span>Customer evaluation</span></h3>
            </div>
            <div class="intro-con">
                <ul class="evaluat">
                    <li>
                        <a class="left">星级</a>
                        <a class="right">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </a>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <a class="left">累计服务人次</a>
                        <a class="right">
                           <?php echo ($housekeeper[0]['cishu']); ?>人
                        </a>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <a class="left">顾客打赏</a>
                        <a class="right">
                           <?php echo ($housekeeper[0]['dashang']); ?>维美币
                        </a>
                        <div class="clear"></div>
                    </li>
                    <div class="clear"></div>
                </ul>
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
<script type="text/javascript">
var swipertop = new Swiper('.swiper-top', {
    pagination: '.pagination1',
    paginationClickable: true,
    autoplay: 5000
});
var swipercon1 = new Swiper('.swiper-con3', {
    prevButton: '.swiper-button-prev1',
    nextButton: '.swiper-button-next1',
});
</script>

</body>
</html>