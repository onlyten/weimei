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
        <a class="title">打赏</a>
        <a id="tel" href="tel:<?php echo ($tel[0]['phone']); ?>"><img src="/weimei/Public//images/tel.png"></a>
    </nav>
</header>

<div id="content" class="reward">
    <div class="content">
        <section class="beauticians">
            <div class="title">
                <h3>选择为您服务的美容师</h3>
                <div class="group-container">
                    <script type="text/javascript">__CELL__ = 2; /* #swiper-nav 一行显示的元素个数 */</script>
                    <div id="swiper-nav" class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide group active-nav">院内</div>
                            <div class="swiper-slide group">院外</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="swiper-container" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-reward">
                            <div class="swiper-button-prev in-swiper-button-prev"></div>
                            <div class="swiper-button-next in-swiper-button-next"></div>
                            <div class="swiper-container in-swiper-container">
                                <div class="swiper-wrapper">
                                <?php if(is_array($keepernei)): foreach($keepernei as $key=>$value): ?><div class="swiper-slide beautician">
                                        <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($value['pic_tou']); ?>">
                                        <p class="name" data-id="<?php echo ($value['id']); ?>"><?php echo ($value['name']); ?></p>
                                        <div class="cover vh-center">
                                            <div class="item">
                                                <img src="/weimei/Public//images/checkmark.png">
                                                <span>已选</span>
                                            </div>
                                        </div>
                                    </div><?php endforeach; endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-reward">
                            <div class="swiper-button-prev out-swiper-button-prev"></div>
                            <div class="swiper-button-next out-swiper-button-next"></div>
                            <div class="swiper-container out-swiper-container">
                                <div class="swiper-wrapper">
                                <?php if(is_array($keeperwai)): foreach($keeperwai as $key=>$value): ?><div class="swiper-slide beautician">
                                        <img src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($value['pic_tou']); ?>">
                                        <p class="name" data-id="<?php echo ($value['id']); ?>"><?php echo ($value['name']); ?></p>
                                        <div class="cover vh-center">
                                            <div class="item">
                                                <img src="/weimei/Public//images/checkmark.png">
                                                <span>已选</span>
                                            </div>
                                        </div>
                                    </div><?php endforeach; endif; ?>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="rewarding">
            <div class="title">
                <h3>觉得好就请赏点吧</h3>
            </div>
            <div class="coins">
                <div class="cell"><span><a class="vh-center">0</a></span></div>
                <div class="cell"><span><a class="vh-center">10</a></span></div>
                <div class="cell"><span><a class="vh-center">20</a></span></div>
                <div class="cell"><span><a class="vh-center">30</a></span></div>
                <div class="cell"><span><a class="vh-center">40</a></span></div>
                <div class="cell"><span><a class="vh-center">50</a></span></div>
            </div>
        </section>
        <form action="<?php echo U('reward_update');?>" method="post">
            <div class="beautician-like"></div>
            <input type="hidden" name="coin" value="0">
            <input type="hidden" name="order_id" value="<?php echo ($order_id); ?>">
            <input id="rewarding" class="submit" type="submit" value="打赏她">
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
<script type="text/javascript" src="/weimei/Public/Home/js/custom.js"></script>
<script type="text/javascript">
var rewardIn = new Swiper('.in-swiper-container', {
    slidesPerView: 2,
    prevButton: '.in-swiper-button-prev',
    nextButton: '.in-swiper-button-next',
    spaceBetween: 22
});
var rewardOut = new Swiper('.out-swiper-container', {
    slidesPerView: 2,
    prevButton: '.out-swiper-button-prev',
    nextButton: '.out-swiper-button-next',
    spaceBetween: 22
});

var $beauticianLike = $('.beautician-like');
var $beauticianCoin = $('input[name="coin"]');
var $beautician = $('.beautician');
var $coins = $('.coins .cell a');

$('.group').on('click', function(swiper){
    $beauticianLike.empty();
    $beautician.removeClass('selected');
});

$beautician.on('click', function(){
    var $this = $(this),
        id = $this.find('.name').attr('data-id');

    $this.toggleClass('selected');
    if ( /selected/i.test($this.attr('class')) ) {
        $beauticianLike.append('<input type="hidden" name="beautician[]" value="' + id + '">');
    } else {
        $beauticianLike.find('input[value=' + id + ']').remove();
    }
});
$coins.on('click', function(){
    var $this = $(this),
        coin = $this.text();

    $coins.removeClass('selected');
    $this.addClass('selected');

    $beauticianCoin.val(coin);
});
</script>

</body>
</html>