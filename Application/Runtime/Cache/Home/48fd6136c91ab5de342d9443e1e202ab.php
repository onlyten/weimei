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
        <a class="title">常用地址</a>
        <a id="tel" href="tel:<?php echo ($tel[0]['phone']); ?>"><img src="/weimei/Public//images/tel.png"></a>
    </nav>
</header>

<div id="content" class="addresslist-con">
    <div class="content">
        <?php if(is_array($address)): foreach($address as $key=>$value): ?><div class="per clearfix">
                <div class="add-left">
                <?php if($mei_id != null): ?><a href="<?php echo U('Mei/reservation_home',array('openid'=>$openid,'mei_id'=>$mei_id,'address_id'=>$value['id']));?>">
                        <div class="con clearfix">
                            <span class="peo-left"><br/><?php echo ($value['name']); ?></span>
                            <span class="peo-right"><br/><?php echo ($value['mobile']); ?></span>
                        </div>
                        <div class="con clearfix">
                            <span class="address-left"><br/>详细地址</span>
                            <span class="address-right"><br/><?php echo ($value['address']); ?></span>
                        </div>
                    </a><?php endif; ?>
                <?php if($mei_id == null): ?><div class="con clearfix">
                        <span class="peo-left"><br/><?php echo ($value['name']); ?></span>
                        <span class="peo-right"><br/><?php echo ($value['mobile']); ?></span>
                    </div>
                    <div class="con clearfix">
                        <span class="address-left"><br/>详细地址</span>
                        <span class="address-right"><br/><?php echo ($value['address']); ?></span>
                    </div><?php endif; ?>
                <div class="add-right">
                    <a href="<?php echo U('address_modify',array('id'=>$value['id']));?>"><i class="fa fa-pencil-square-o"></i><br/>修改</a>
                </div>
            </div>
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

<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>