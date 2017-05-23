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
        <a class="title"><?php echo ($mei[0]['mei_name']); ?> - 详情</a>
        <a id="tel" href="tel:<?php echo ($tel[0]['phone']); ?>"><img src="/weimei/Public//images/tel.png"></a>
    </nav>
</header>

<div id="content" class="face-detail-con">
    <div class="content">
        <div class="detail-top">
            <div class="swiper-container swiper-top">
                <div class="swiper-wrapper">
                <?php if($pic_item[0] != null): ?><div class="swiper-slide"><img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($pic_item[0]); ?>"></div><?php endif; ?>
                <?php if($pic_item[1] != null): ?><div class="swiper-slide"><img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($pic_item[1]); ?>"></div><?php endif; ?>
                <?php if($pic_item[2] != null): ?><div class="swiper-slide"><img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($pic_item[2]); ?>"></div><?php endif; ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination pagination1"></div>
            </div>
        </div>
        <div class="intro">
            <div class="tit">
                <h3><?php echo ($mei[0]['mei_name']); ?> /<span>Laser acne</span><span class="s1">（<?php echo ($mei[0]['type']); ?>）</span></h3>
            </div>
            <div class="intro-con">
                <div class="value">
                    <div class="left">
                        <a>特惠价：<span><?php echo ($mei[0]['price']); ?></span>元&nbsp;&nbsp;原价：<span class="spe"><?php echo ($mei[0]['oldprice']); ?></span>元</a>
                    </div>
                    <div class="right">
                        <a>销售：<span><?php echo ($mei[0]['sales']); ?></span>次</a>
                    </div>
                    <p>可使用维美币上限<?php echo ($mei[0]['jifen']); ?></p>
                    <div class="clear"></div>
                </div>
                <p><span>简介：</span><?php echo ($mei[0]['jianjie']); ?></p>
            </div>
        </div>
        <div class="intro group">
            <div class="tit">
                <h3>服务时长：<?php echo ($mei[0]['timelong']); ?>分钟</h3>
                <?php if($mei[0]['cishu'] == 1): ?><h3>次数：单次</h3><?php endif; ?>
                <?php if($mei[0]['cishu'] != 1): ?><h3>次数：<?php echo ($mei[0]['cishu']); ?></h3><?php endif; ?>
                <h3>适用人群：<?php echo ($mei[0]['people']); ?></h3>
            </div>
        </div>
        <div class="operate">
            <div class="intro">
                <div class="tit">
                    <h3>操作流程 /<span>Operation flow</span></h3>
                </div>
            </div>
            <div class="swiper">
                <div class="swiper-button-prev swiper-button-prev1"></div>
                <div class="swiper-button-next swiper-button-next1"></div>
                <div class="swiper-container swiper-con1">
                    <div class="swiper-wrapper">
                    <?php if($czbz[0] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[0]); ?>">
                            <div class="op-info">
                                <p>1.<?php echo ($czbz[1]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[2] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[2]); ?>">
                            <div class="op-info">
                                <p>2.<?php echo ($czbz[3]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[4] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[4]); ?>">
                            <div class="op-info">
                                <p>3.<?php echo ($czbz[5]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[6] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[6]); ?>">
                            <div class="op-info">
                                <p>4.<?php echo ($czbz[7]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[8] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[8]); ?>">
                            <div class="op-info">
                                <p>5.<?php echo ($czbz[9]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[10] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[10]); ?>">
                            <div class="op-info">
                                <p>6.<?php echo ($czbz[11]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[12] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[12]); ?>">
                            <div class="op-info">
                                <p>7.<?php echo ($czbz[13]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[14] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[14]); ?>">
                            <div class="op-info">
                                <p>8.<?php echo ($czbz[15]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[16] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[16]); ?>">
                            <div class="op-info">
                                <p>9.<?php echo ($czbz[17]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[18] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[18]); ?>">
                            <div class="op-info">
                                <p>10.<?php echo ($czbz[19]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[20] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[20]); ?>">
                            <div class="op-info">
                                <p>11.<?php echo ($czbz[21]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[22] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[22]); ?>">
                            <div class="op-info">
                                <p>12.<?php echo ($czbz[23]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[24] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[24]); ?>">
                            <div class="op-info">
                                <p>13.<?php echo ($czbz[25]); ?></p>
                            </div>
                        </div><?php endif; ?>

                    <?php if($czbz[26] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[26]); ?>">
                            <div class="op-info">
                                <p>14.<?php echo ($czbz[27]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[28] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[28]); ?>">
                            <div class="op-info">
                                <p>15.<?php echo ($czbz[29]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[30] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[30]); ?>">
                            <div class="op-info">
                                <p>16.<?php echo ($czbz[31]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[32] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[32]); ?>">
                            <div class="op-info">
                                <p>17.<?php echo ($czbz[33]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($czbz[34] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($czbz[34]); ?>">
                            <div class="op-info">
                                <p>18.<?php echo ($czbz[35]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="service">
            <div class="intro">
                <div class="tit">
                    <h3>使用产品 / <span>Use products</span></h3>
                </div>
            </div>
            <div class="swiper">
                <div class="swiper-button-prev swiper-button-prev2 "></div>
                <div class="swiper-button-next swiper-button-next2"></div>
                <div class="swiper-container swiper-con2 ">
                    <div class="swiper-wrapper">
                    <?php if($goods_display[0] != null): ?><div class="swiper-slide swiper-slide-active">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[0]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[1]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[2] != null): ?><div class="swiper-slide swiper-slide-next">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[2]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[3]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[4] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[4]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[5]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[6] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[6]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[7]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[8] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[8]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[9]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[10] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[10]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[11]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[12] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[12]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[13]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[14] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[14]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[15]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[16] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[16]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[17]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[18] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[18]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[19]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[20] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[20]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[21]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[22] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[22]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[23]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[24] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[24]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[25]); ?></p>
                            </div>
                        </div><?php endif; ?>

                    <?php if($goods_display[26] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[26]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[27]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[28] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[28]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[29]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[30] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[30]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[31]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[32] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[32]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[33]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    <?php if($goods_display[34] != null): ?><div class="swiper-slide">
                            <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($goods_display[34]); ?>">
                            <div class="ser-info">
                                <p><?php echo ($goods_display[35]); ?></p>
                            </div>
                        </div><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro">
            <div class="tit">
                <h3>注意事项  / <span>Note</span></h3>
            </div>
            <div class="intro-con">
                <p><?php echo ($mei[0]['notice']); ?></p>
            </div>
        </div>
        <div class="intro">
            <div class="tit">
                <h3 class="border_none">其他  / <span>Other</span></h3>
            </div>
            <div class="intro-con"><p><?php echo ($mei[0]['remark']); ?></p></div>
        </div>
        <div class="appoint">
        <?php if($mei[0]['type'] == '到院'): ?><a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx07c0189227f8f9af&redirect_uri=http://serv2.matesofts.com/weimei/index.php/Home/Mei/reservation_hospital?mei_id=<?php echo ($mei[0]['id']); ?>&response_type=code&scope=snsapi_base&state=123#wechat_redirect" class="hospital left"><span>预约到院</span><img src="/weimei/Public//images/arrow.png"></a> 
			<a href="javascript:alert('该项目仅支持预约到院')" class="home right"><span>预约上门</span><img src="/weimei/Public//images/arrow.png"></a>
            <div class="clear"></div><?php endif; ?>
        <?php if($mei[0]['type'] == '上门'): ?><a href="javascript:alert('该项目仅支持预约上门')" class="hospital left"><span>预约到院</span><img src="/weimei/Public//images/arrow.png"></a>
            <a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx07c0189227f8f9af&redirect_uri=http://serv2.matesofts.com/weimei/index.php/Home/Mei/reservation_home?mei_id=<?php echo ($mei[0]['id']); ?>&response_type=code&scope=snsapi_base&state=123#wechat_redirect" class="home right"><span>预约上门</span><img src="/weimei/Public//images/arrow.png"></a> <div class="clear"></div><?php endif; ?>
        <?php if($mei[0]['type'] == '都可以'): ?><a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx07c0189227f8f9af&redirect_uri=http://serv2.matesofts.com/weimei/index.php/Home/Mei/reservation_hospital?mei_id=<?php echo ($mei[0]['id']); ?>&response_type=code&scope=snsapi_base&state=123#wechat_redirect" class="hospital left"><span>预约到院</span><img src="/weimei/Public//images/arrow.png"></a>
            <a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx07c0189227f8f9af&redirect_uri=http://serv2.matesofts.com/weimei/index.php/Home/Mei/reservation_home?mei_id=<?php echo ($mei[0]['id']); ?>&response_type=code&scope=snsapi_base&state=123#wechat_redirect" class="home right"><span>预约上门</span><img src="/weimei/Public//images/arrow.png"></a>
                <div class="clear"></div><?php endif; ?>
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
var swipercon1 = new Swiper('.swiper-con1', {
    slidesPerView: 2,
    prevButton: '.swiper-button-prev1',
    nextButton: '.swiper-button-next1',
    spaceBetween: 22
});
var swipercon2 = new Swiper('.swiper-con2', {
    slidesPerView: 2,
    prevButton: '.swiper-button-prev2',
    nextButton: '.swiper-button-next2',
    spaceBetween: 22
});
</script>

</body>
</html>