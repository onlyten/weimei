<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="gray">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="MobileOptimized" content="320">
    <title>维美美丽管家</title>
    <script type="text/javascript" src="/weimei/Public/Home/js/layer.js"></script>
    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/common.css">
    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/custom.css">
</head>

<body>
<header>
     <nav>
        <a id="location" href="<?php echo U('Mei/ditu');?>"><img src="/weimei/Public//images/location.png"></a>
        <a class="title">我的管家</a>
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
                    <span class="name"><?php echo ($login[0]['name']); ?></span>
                </div>
            </a>
        </div>
        <section class="mykeeper-con">
            <ul>
                <li class="clearfix">
                    <a id="modifyName">
                        <div class="bot-left">
                            <span class="ico"></span>
                            <span class="ico-right"><?php echo ($login[0]['name']); ?></span>
                            <input type="hidden" name="openid" id="openid" value="<?php echo ($openid); ?>">
                        </div>
                        <span class="bot-right">修改</span>
                    </a>
                </li>
                <li class="clearfix">
                    <a id="modifyMoile">
                        <div class="bot-left">
                            <span class="ico"></span>
                            <span class="ico-right"><?php echo ($login[0]['mobile']); ?></span>
                        </div>
                        <span class="bot-right">修改</span>
                    </a>
                </li>
                <li class="clearfix">
                    <a href="<?php echo U('Qiandao/balance',array('openid'=>$openid));?>">
                        <div class="bot-left">
                            <span class="ico"></span>
                            <span class="ico-right"><?php echo ($sum); ?>&nbsp;维美币</span>
                        </div>
                        <span class="bot-right">更多</span>
                    </a>
                </li>
                <li class="clearfix">
                    <a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx07c0189227f8f9af&redirect_uri=http://serv2.matesofts.com/weimei/index.php/Home/Dingdan/order&response_type=code&scope=snsapi_base&state=123#wechat_redirect">
                        <div class="bot-left">
                            <span class="ico"></span>
                            <span class="ico-right">我的订单</span>
                        </div>
                        <span class="bot-right">更多</span>
                    </a>
                </li>
                <li class="clearfix">
                    <a href="<?php echo U('Mei/keeperwarn',array('openid'=>$openid));?>">
                        <div class="bot-left">
                            <span class="ico"></span>
                            <span class="ico-right">管家提醒</span>
                            </div>
                        <span class="bot-right">更多</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
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
<div id="templateName" style="display:none;">
<div class="context">
    <a class="close" onclick="layer.closeAll()">X</a>
    <div class="input-wrap name">
        <label>姓名：</label>
        <div class="input-control">
            <input type="text" value="" placeholder="输入您的姓名">
            <span class="empty">不能为空</span>
            <span class="error">姓名在 2-8 个字符长度</span>
        </div>
    </div>
    <div class="layermbtn"><span onclick="modifyName(this)">确定修改</span></div>
</div>
</div>
<div id="templateMoile" style="display:none;">
<div class="context">
    <a class="close" onclick="layer.closeAll()">X</a>
    <div class="input-wrap mobile">
        <label>手机号码：</label>
        <div class="input-control">
            <input type="number" value="" placeholder="输入新手机号码">
            <span class="empty">不能为空</span>
            <span class="error">请输入正确的电话号码</span>
            <a onclick="sendCode(this)">发送验证码</a>
        </div>
    </div>
    <div class="input-wrap snscode">
        <label>验证码：</label>
        <div class="input-control">
            <input type="number" value="">
            <span class="empty">不能为空</span>
        </div>
    </div>
    <div class="layermbtn"><span onclick="modifyMoile(this)">确定修改</span></div>
</div>
</div>

<script type="text/javascript" src="/weimei/Public/Home/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/weimei/Public/Home/js/swiper.min.js"></script>
<script type="text/javascript" src="/weimei/Public/Home/js/custom.js"></script>
<script type="text/javascript">
var $name;
var $nameText;
var $mobile;
var $mobileText;
var openid = document.getElementById("openid").value;
function sendCode(me) {
    $me = $(me);
    $mobile = $me.parentsUntil('.mobile').find('input');
    mobile = $mobile.val();

    if (!isEmpty($mobile)) {
        return false;
    };

    filter = /^1(3[0-9]|4[57]|5[0-35-9]|8[0-9]|70)\d{8}$/;
    if (!filter.test(mobile)) {
        $mobile.siblings('.error').addClass('has');
        return false;
    } else {
        $mobile.siblings('.error').removeClass('has');
    }

    var url = 'http://serv2.matesofts.com/weimei/code.php?phone=' + mobile;
    $.get(url, function(code) {
        // console.log(code);
        if (code) {
            CODE = parseInt(code.trim());
            layer.open({type: 5, content: '请查看验证码', time: 2});
        } else {
            layer.open({type: 5, content: '请重新发送验证码', btn: ['确定']});
        }
    }).fail(function(){
        layer.open({type: 5, content: '请检查你的网络连接是否正常...', btn: ['确定']});
    });
}

function modifyMoile(me) {
    $('.empty, .error, .different').on('click', function(){$(this).removeClass('has');});

    $mobile = $mobile ? $mobile : $(me).parent().siblings('.mobile').find('input');
    $snscode = $(me).parent().siblings('.snscode').find('input');
    mobile = mobile ? mobile: $mobile.val();
    snscode = $snscode.val();

    if (!isEmpty($mobile) || !isEmpty($snscode)) {
        return false;
    };

    if (snscode != CODE) {
        // alert('输入的验证码不正确');
        layer.open({type: 9, className: 'alert alert-error', content: '输入的验证码不正确', time: 2});
        return false;
    };

    var layerIndex = layer.open({type: 2});

    $.post(
        "<?php echo U('modify_phone');?>",
        {openid: openid, context: mobile},
        function(data) {
            if (data.error) {
                layer.close(layerIndex);
                layer.open({type: 7, content: data.msg, time: 2});
            } else {
                CODE = 0;
                $mobileText.text(mobile);
                layer.close(layerIndex);
                layer.open({type: 7, content: '修改成功', time: 2});
                setTimeout(function(){
                    layer.closeAll();
                }, 2000);
            }
        },
    'json').fail(function(){
        layer.close(layerIndex);
        layer.open({type: 7, content: '修改失败( ▼-▼ )', time: 2});
    });
}

function modifyName(me) {
    $('.empty, .error, .different').on('click', function(){$(this).removeClass('has');});

    $name = $(me).parent().siblings('.name').find('input');
    name = $name.val();

    if (!isEmpty($name)) {
        return false;
    };

    filter = /^[a-zA-Z0-9_\u4e00-\u9fa5]{2,8}$/;
    if (!filter.test(name)) {
        $name.siblings('.error').addClass('has');
        return false;
    } else {
        $name.siblings('.error').removeClass('has');
    }

    var layerIndex = layer.open({type: 2});

    $.post(
        "<?php echo U('modify_name');?>",
        {openid: openid, context: name},
        function(data) {
            if (data.error) {
                layer.close(layerIndex);
                layer.open({type: 7, content: data.msg, time: 2});
            } else {
                $nameText.text(name);
                layer.close(layerIndex);
                layer.open({type: 7, content: '修改成功', time: 2});
                setTimeout(function(){
                    layer.closeAll();
                }, 2000);
            }
        },
    'json').fail(function(){
        layer.close(layerIndex);
        layer.open({type: 7, content: '修改失败( ▼-▼ )', time: 2});
    });
}

$(function(){
    $('#modifyName').on('click', function(){
        var $this = $(this);
        $nameText = $this.siblings().find('.ico-right');

        layer.open({
            type: 3,
            className: 'modify-container modify-name',
            content: $('#templateName').html(),
            // shadeClose: false,
        });

    });
    $('#modifyMoile').on('click', function(){
        var $this = $(this);
        $mobileText = $this.siblings().find('.ico-right');

        layer.open({
            type: 3,
            className: 'modify-container modify-mobile',
            content: $('#templateMoile').html(),
            // shadeClose: false,
        });

    });
});
</script>

</body>
</html>