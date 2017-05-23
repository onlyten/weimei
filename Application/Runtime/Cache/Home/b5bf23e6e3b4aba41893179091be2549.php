<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="gray">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="MobileOptimized" content="320">
    <title>维美美丽管家</title>
    <script type="text/javascript" src="js/layer/layer.js"></script>
    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/common.css">
    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/custom.css">
</head>

<body>
<header>
    <nav>
        <a id="location" href="<?php echo U('Mei/ditu');?>"><img src="/weimei/Public//images/location.png"></a>
        <a class="title">维美币</a>
        <a id="tel" href="tel:<?php echo ($tel[0]['phone']); ?>"><img src="/weimei/Public//images/tel.png"></a>
    </nav>
</header>
<div id="content" class="balance">
    <div class="content">
        <script type="text/javascript">__CELL__ = 3; /* #swiper-nav 一行显示的元素个数 */</script>
        <div id="swiper-nav" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide active-nav">可用</div>
                <div class="swiper-slide">已用</div>
                <div class="swiper-slide">已过期</div>
            </div>
        </div>
        <div id="swiper-container" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <section class="context">
                    <?php if(is_array($hao)): foreach($hao as $key=>$value): ?><div class="coins-info">
                            <span class="coins"><?php echo ++$key;?></span>
                            <div class="info">
                                <div class="con-l">
                                    <span class="con-t"><span>获取途径：</span><em>
                                    <?php if($value['coinrule_id'] != null ): if($value['type'] != 0): ?>充值
                                            <?php else: ?> 签到<?php endif; endif; ?>
                                    <?php if($value['coinactivity_id'] != null ): ?>活动<?php endif; ?></em></span>
                                    <i></i>
                                    <span class="con-b"><span>获取日期：</span><em><?php echo date("Y-m-d",$value['max(time)']); ?></em></span>
                                </div>
                                <div class="con-r">
                                    <span class="con-t"><span>数量：</span><em><?php echo ($value['sum(nouse)']); ?></em></span>
                                    <i></i>
                                    <span class="con-b"><span>有效日期：</span><em><?php echo date("Y-m-d",$value['timeto']); ?></em></span>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>
                    </section>
                </div>
                <div class="swiper-slide">
                    <section class="context">
                    <?php if(is_array($yong)): foreach($yong as $key=>$value): ?><div class="coins-info">
                            <span class="coins"><?php echo ++$key;?></span>
                            <div class="info">
                                <div class="con-l">
                                    <span class="con-t"><span>获取途径：</span><em>
                                    <?php if($value['coinrule_id'] != null ): if($value['type'] != 0): ?>充值
                                            <?php else: ?> 签到<?php endif; endif; ?>
                                    <?php if($value['coinactivity_id'] != null ): ?>活动<?php endif; ?></em></span>
                                    <i></i>
                                    <span class="con-b"><span>获取日期：</span><em><?php echo date("Y-m-d",$value['time']); ?></em></span>
                                </div>
                                <div class="con-r">
                                    <span class="con-t"><span>数量：</span><em><?php echo ($value['sum(usee)']); ?></em></span>
                                    <i></i>
                                    <span class="con-b"><span>使用日期：</span><em><?php echo date("Y-m-d",$value['max(usetime)']); ?></em></span>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>
                    </section>
                </div>
                <div class="swiper-slide">
                    <section class="context">
                    <?php if(is_array($ci)): foreach($ci as $key=>$value): ?><div class="coins-info">
                            <span class="coins"><?php echo ++$key;?></span>
                            <div class="info">
                                <div class="con-l">
                                    <span class="con-t"><span>获取途径：</span><em>
                                    <?php if($value['coinrule_id'] != null ): if($value['type'] != 0): ?>充值
                                            <?php else: ?> 签到<?php endif; endif; ?>
                                    <?php if($value['coinactivity_id'] != null ): ?>活动<?php endif; ?></em></span>
                                    <i></i>
                                    <span class="con-b"><span>获取日期：</span><em><?php echo date("Y-m-d",$value['time']); ?></em></span>
                                </div>
                                <div class="con-r">
                                    <span class="con-t"><span>数量：</span><em><?php echo ($value['sum(nouse)']); ?></em></span>
                                    <i></i>
                                    <span class="con-b"><span>有效日期：</span><em><?php echo date("Y-m-d",$value['timeto']); ?></em></span>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>
                    </section>
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