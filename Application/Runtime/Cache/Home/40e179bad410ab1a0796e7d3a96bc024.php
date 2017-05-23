<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="single registe">
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

<body class="vh-center">
<section>
    <div class="logo"><img src="/weimei/Public//images/logo.png" alt=""></div>

    <form action="<?php echo U('registe_update');?>" method="post">
        <div class="member clearfix">
            <span>是否是院内会员</span>
            <div class="member-wrap clearfix">
                <div class="member-control clearfix"><input id="y" type="radio" name="member" value="1"><lable for="y">是</lable></div>
                <div class="member-control clearfix"><input id="n" type="radio" name="member" value="0" checked="checked"><lable for="n">否</lable></div>
            </div>
        </div>

        <div class="control mobile">
            <input id="mobile" type="number" name="mobile" value="" placeholder="手机号">
            <span class="ico"></span>
            <span class="empty">不能为空</span>
            <span class="error">请输入正确的电话号码</span>
        </div>
        <input type="hidden" value="<?php echo ($openid); ?>" name="wxid">
        <div class="control sns-code">
            <input id="snscode" type="number" name="code" value="" placeholder="验证码">
            <span class="ico"></span>
            <span class="empty">不能为空</span>
            <span class="error">您输入的验证码不正确</span>
            <a id="sendCode">发送验证码</a>
        </div>
        <div class="control password">
            <input type="password" name="password" value="" placeholder="输入密码">
            <span class="ico"></span>
            <span class="empty">不能为空</span>
            <span class="error">密码由“英文字母、数字、下划线”组成，长度在 4-8 个字符</span>
        </div>
        <div class="control password">
            <input type="password" name="password_repeat" value="" placeholder="确认密码">
            <span class="ico"></span>
            <span class="empty">不能为空</span>
            <span class="error">密码由“英文字母、数字、下划线”组成，长度在 4-8 个字符</span>
        </div>

        <button class="submit" type="submit">注册</button>
    </form>
</section>

<script type="text/javascript" src="/weimei/Public/Home/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/weimei/Public/Home/js/custom.js"></script>
<script type="text/javascript" src="/weimei/Public/Home/js/icheck.min.js"></script>
<script type="text/javascript">
$(function(){
    // 表单中的 radio 选框
    $('input[type^="radio"]').iCheck({
        labelHover: false,
        // checkboxClass: 'icheckbox_flat',
        radioClass: 'iradio_flat'
    });

    $mobile = $('#mobile');
    $('#sendCode').on('click', function(){
        var $this = $(this);
        mobile = $mobile.val();

        if (!isEmpty($mobile)) {
            return false;
        };

        var filter = /^1(3[0-9]|4[57]|5[0-35-9]|8[0-9]|70)\d{8}$/;
        if (!filter.test(mobile)) {
            $mobile.siblings('.error').addClass('has');
            return false;
        } else {
            $mobile.siblings('.error').removeClass('has');
        }

        layer.open({type: 2, shadeClose: false});
        var url = 'http://serv2.matesofts.com/weimei/code.php?phone=' + mobile;
        $.get(url, function(code) {
            if (code) {
                CODE = parseInt(code.trim());
                layer.closeAll();
                layer.open({content: '请查看验证码', time: 2});
            } else {
                layer.closeAll();
                layer.open({content: '请重新发送验证码', btn: ['确定']});
            }
        }).fail(function(){
            layer.closeAll();
            layer.open({content: '请检查你的网络连接是否正常...', btn: ['确定']});
        });

    });

});
</script>

</body>
</html>