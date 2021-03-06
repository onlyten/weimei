<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
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
        <a class="title">预约到院</a>
        <a id="tel" href="tel:<?php echo ($tel[0]['phone']); ?>"><img src="/weimei/Public//images/tel.png"></a>
    </nav>
</header>

<div id="content" class="reservation hospital">
    <div class="content">
        <form action="<?php echo U('reservation_hospital_update');?>" method="post">
            <section>
                <div class="wrap name">
                    <label for="name">姓名</label>
                    <div class="control">
                        <span class="ico"></span>
                        <div class="form-control">
                            <div class="input-content">
                                <input id="name" type="text" name="name" value="" placeholder="姓名">
                                <input class="" type="hidden" name="openid" value="<?php echo ($openid); ?>">
                                <input class="" type="hidden" name="mei_id" value="<?php echo ($mei_id); ?>">
                                <input class="" type="hidden" name="hourok" id="hourok" value="<?php echo ($tel[0]['hourok']); ?>">
                                <span class="empty">不能为空</span>
                                <span class="error">姓名在 2-8 个字符长度</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap mobile">
                    <label for="mobile">手机</label>
                    <div class="control">
                        <span class="ico"></span>
                        <div class="form-control">
                            <div class="input-content">
                                <input id="mobile" type="number" name="mobile" value="" placeholder="输入您的手机号">
                                <span class="empty">不能为空</span>
                                <span class="error">请输入正确的电话号码</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap service">
                    <label for="service">预约项目</label>
                    <div class="control">
                        <span class="ico"></span>
                        <div class="form-control">
                            <div class="input-content">
                                <input id="service" type="text" name="service" value="<?php echo ($mei[0]['mei_name']); ?>" readonly="readonly">
                                <span class="empty">不能为空</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap time">
                    <label for="time">预约时间</label>
                    <div class="control">
                        <span class="ico"></span>
                        <div class="form-control">
                            <div class="input-content">
                                <!-- <input id="time" type="datetime-local" name="time" value="" placeholder="选择预约时间"> -->
                                <input id="time" type="text" name="time" value="" placeholder="选择预约时间">
                                <a id="dataTime"></a>
                                <span class="empty">不能为空</span>
                            </div>
                        </div>
                    </div>
                </div>

                <input class="submit" type="submit" value="提交预约">
            </section>
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
CONTEXT = [
    {active: false, value: '激光祛痘'},
    {active: false, value: '护理 A 护理'},
    {active: false, value: '护理 B 护理'},
    {active: false, value: '护理 C 护理'}
];

// 提前预约的时间，单位“小时”
appointmentTimeHour = document.getElementById("hourok").value;
appointmentDateTime = '';

// 可提供的预约时间段
TIME = ['10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00'];

$(function(){
    var $context = $('#service');
    $('#contextBtn').on('click', function(){
        if (CONTEXT.length <= 0) {
            return false;
        }
        layer.open({
            content: getContext(),
            btn: ['确定', '取消'],
            // shadeClose: false,
            success: function(elem){
                var $obj = $(elem).find('li.active');
                context = $obj.text();
                contextIndex = $obj.index();

                $(elem).find('li').on('click', function(){
                    var $this = $(this);
                    contextIndex = $this.index();

                    $this.siblings().removeClass('active');
                    $this.addClass('active');
                    context = $this.text();
                });
            },
            yes: function(){
                if (typeof context == 'string' && context != '') {
                    $context.val(context);
                }
                if (typeof contextIndex == 'number' && contextIndex >= 0) {
                    update(CONTEXT, contextIndex);
                }
                layer.open({content: '设置成功', time: 1});
                isEmpty($context);
            }, no: function(){
                layer.open({content: '取消选择', time: 1});
            }
        });
    });

    var $time = $('#time');
    appointmentDateTime = $time.val();
    $('#dataTime').on('click', function(){
        layer.open({
            className: 'time-wrapper',
            content: getAppointmentDateTime($time.val()),
            btn: ['确定', '取消'],
            // shadeClose: false,
            success: function(elem){
                $(elem).find('li').on('click', function(){
                    var $this = $(this);

                    $this.siblings().removeClass('active');
                    $this.addClass('active');
                });
                timeLimit($('#day').attr('data-day') + ' ' + TIME[0])
            },
            yes: function(elem){
                var $o = $('.time-wrapper').find('li.active');
                // console.log($o);
                if ($o.length > 0) {
                    appointmentDateTime = $('#day').attr('data-day') + ' ' + $o.text();
                    $time.val(appointmentDateTime);
                }
                layer.open({content: '设置成功', time: 1});
                isEmpty($time);
            }, no: function(){
                layer.open({content: '取消选择', time: 1});
            }
        });
    });
});
</script>

</body>
</html>