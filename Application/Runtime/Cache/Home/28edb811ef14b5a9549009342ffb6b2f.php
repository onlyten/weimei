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
        <a class="title">常用地址</a>
        <a id="tel" href="tel:<?php echo ($tel[0]['phone']); ?>"><img src="/weimei/Public//images/tel.png"></a>
    </nav>
</header>

<div id="content" class="address-add">
    <section>
    <form action="<?php echo U('address_add_update');?>" method="post">
        <div class="form-wrap">
            <div class="wrap">
                <span class="tip">所在地区</span>
                <div class="area">
                   <!-- <span id="province" class="cell"><a>省</a><i></i></span>
                    <span id="city" class="cell"><a>市</a><i></i></span>
                    <span id="county" class="cell"><a>县</a><i></i></span>
                    <span id="town" class="cell hide"><a>镇</a><i></i></span>-->
                    <select name='qu'>
                    <?php if($login[0]['qu'] == '南开区'): ?><option value="河西区">河西区</option>
                      <option value="南开区" selected = "selected">南开区</option>
                      <option value="和平区">和平区</option>
                      <option value="红桥区">红桥区</option>
                      <option value="河东区">河东区</option>
                      <option value="河北区">河北区</option><?php endif; ?>
                    <?php if($login[0]['qu'] == '和平区'): ?><option value="河西区">河西区</option>
                      <option value="南开区">南开区</option>
                      <option value="和平区" selected = "selected">和平区</option>
                      <option value="红桥区">红桥区</option>
                      <option value="河东区">河东区</option>
                      <option value="河北区">河北区</option><?php endif; ?>
                    <?php if($login[0]['qu'] == '红桥区'): ?><option value="河西区">河西区</option>
                      <option value="南开区">南开区</option>
                      <option value="和平区">和平区</option>
                      <option value="红桥区" selected = "selected">红桥区</option>
                      <option value="河东区">河东区</option>
                      <option value="河北区">河北区</option><?php endif; ?>
                    <?php if($login[0]['qu'] == '河东区'): ?><option value="河西区">河西区</option>
                      <option value="南开区">南开区</option>
                      <option value="和平区">和平区</option>
                      <option value="红桥区">红桥区</option>
                      <option value="河东区" selected = "selected">河东区</option>
                      <option value="河北区">河北区</option><?php endif; ?>
                    <?php if($login[0]['qu'] == '河北区'): ?><option value="河西区">河西区</option>
                      <option value="南开区">南开区</option>
                      <option value="和平区">和平区</option>
                      <option value="红桥区">红桥区</option>
                      <option value="河东区">河东区</option>
                      <option value="河北区" selected = "selected">河北区</option><?php endif; ?>
                    <?php if(($login[0]['qu'] == '河西区') OR ($login[0]['qu'] == null)): ?><option value="河西区">河西区</option>
                      <option value="南开区">南开区</option>
                      <option value="和平区">和平区</option>
                      <option value="红桥区">红桥区</option>
                      <option value="河东区">河东区</option>
                      <option value="河北区">河北区</option><?php endif; ?>

                    </select>
                </div>
            </div>
        </div>
        <div class="form-wrap">
            <div class="wrap address">
                <label for="address">详细地址</label>
                <div class="input-control">
                    <div class="input-content">
                        <input id="address" type="text" name="address" value="" placeholder="您的详细地址">
                        <input  type="hidden" name="openid" value="<?php echo ($openid); ?>">
                        <input  type="hidden" name="mei_id" value="<?php echo ($mei_id); ?>">
                        <span class="empty">不能为空</span>
                        <span class="error">输入的地址有误</span>
                    </div>
                </div>
            </div>
            <div class="wrap name">
                <label for="name">姓名</label>
                <div class="input-control">
                    <div class="input-content">
                        <input id="name" type="text" name="name" value="" placeholder="您的姓名">
                        <span class="empty">不能为空</span>
                        <span class="error">姓名在 2-8 个字符长度</span>
                    </div>
                </div>
            </div>
            <div class="wrap mobile">
                <label for="mobile">电话</label>
                <div class="input-control">
                    <div class="input-content">
                        <input id="mobile" type="number" name="mobile" value="" placeholder="您的电话">
                        <span class="empty">不能为空</span>
                        <span class="error">请输入正确的电话号码</span>
                    </div>
                </div>
            </div>
            <div class="wrap postcode">
                <label for="postcode">邮编</label>
                <div class="input-control">
                    <div class="input-content">
                        <input id="postcode" type="number" name="postcode" value="" placeholder="所在地区邮编">
                        <span class="empty">不能为空</span>
                        <span class="error">邮编格式有误</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkbox-wrap">
            <input id="default" type="checkbox" name="default">
            <label for="default">将此地设置为默认收货地址</label>
        </div>

        <input class="submit" type="submit" value="提交">
    </form>
    </section>
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
<script type="text/javascript" src="/weimei/Public/Home/js/icheck.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#province').on('click', function(){
        var $this = $(this),
            order = $this.attr('data-cancel-order');

        layer.open({
            type: 2,
            shadeClose: false
        });

        // layer.closeAll()
    });
    $('#city').on('click', function(){
        var $this = $(this),
            order = $this.attr('data-cancel-order');

        layer.open({
            type: 2,
            shadeClose: false
        });

        // layer.closeAll()
    });
    $('#county').on('click', function(){
        var $this = $(this),
            order = $this.attr('data-cancel-order');

        layer.open({
            type: 2,
            shadeClose: false
        });

        // layer.closeAll()
    });
    $('#town').on('click', function(){
        var $this = $(this),
            order = $this.attr('data-cancel-order');

        layer.open({
            type: 2,
            shadeClose: false
        });

        // layer.closeAll()
    });

    // 表单中的 checkbox 选框
    $('input[type^="checkbox"]').iCheck({
        labelHover: false,
        checkboxClass: 'icheckbox_flat',
        // radioClass: 'iradio_flat'
    });

    var $area = $('#area'),
        $address = $('#address'),
        $addressFull = $('#addressFull');

    $address.on('blur', function(){
        var $this = $(this),
            value = $this.val();

        $addressFull.val($area.text() + value);
    });
});
</script>

</body>
</html>