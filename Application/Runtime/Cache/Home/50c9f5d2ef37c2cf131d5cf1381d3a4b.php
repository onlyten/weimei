<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="single login">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="MobileOptimized" content="320">

    <title>维美医疗</title>

    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/common.css">
    <link rel="stylesheet" type="text/css" href="/weimei/Public/Home/css/custom.css">
</head>

<body class="vh-center">
<section>
    <div class="logo"><img src="/weimei/Public//images/logo.png" alt=""></div>

    <form action="<?php echo U('login_check');?>" method="post">
        <div class="control mobile">
            <input type="number" name="mobile" value="" placeholder="手机号">
            <span class="ico"></span>
        </div>
        <div class="control password">
            <input type="password" name="password" value="" placeholder="输入密码">
            <span class="ico"></span>
            <a id="resetPassword" href="password_pre.html">忘记密码</a>
        </div>

        <button class="submit" type="submit">登录</button>
    </form>
</section>
</body>
</html>