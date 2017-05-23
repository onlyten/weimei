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
        <a class="title">订单进行中</a>
        <a id="tel" href="tel:<?php echo ($tel[0]['phone']); ?>"><img src="/weimei/Public//images/tel.png"></a>
        <input class="" type="hidden" name="hourok" id="hourok" value="<?php echo ($tel[0]['hourok']); ?>">
    </nav>
</header>

<div id="content" class="order-con">
    <div class="content">
        <script type="text/javascript">__CELL__ = 2; /* #swiper-nav 一行显示的元素个数 */</script>
        <div id="swiper-nav" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide active-nav">单次进行中</div>
                <div class="swiper-slide">疗程进行中</div>
            </div>
        </div>
        <div id="swiper-container" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <?php if(is_array($dingdan)): foreach($dingdan as $key=>$value): ?><div class="per-ordering">
                        <h5>订单号</h5>
                        <h3><?php echo ($value['order_id']); ?></h3>
                        <a href="http://serv2.matesofts.com/weimei/index.php/Home/Mei/facecare_detail/mei_id/<?php echo ($value[mei_id]); ?>">购买项目详情：点击进入详情</a>
                        <a>美丽管家联系方式：<?php echo ($tel[0]['phone']); ?></a>
                        <ul class="button-top clearfix">
                            <li><a data-service="<?php echo ($value['order_id']); ?>" data-time="<?php echo ($value['time']); ?>">更改时间</a></li>
                            <li><a href="<?php echo U('dingdan_cancle',array('order_id' => $value['order_id']));?>" onClick="delcf()">取消订单</a></li>
                        </ul>
                        <div class="button-bot">
                            <a href="<?php echo U('dingdan_over',array('order_id' => $value['order_id']));?>" onClick="delc()">确认服务完成</a>
                        </div>
                    </div><?php endforeach; endif; ?>
                </div>
                <div class="swiper-slide">
                 <?php if(is_array($dingmore)): foreach($dingmore as $key=>$value): ?><div class="per-ordering">
                        <h5>订单号</h5>
                        <h3><?php echo ($value['order_id']); ?></h3>
                        <a>已服务次数/总次数：
                            <?php if($tongji[$value['order_id']] != null): echo ($tongji[$value['order_id']]); ?>
                                <?php else: ?>0<?php endif; ?>/<?php echo ($value['cishu']); ?>
                        </a>
                        <a href="http://serv2.matesofts.com/weimei/index.php/Home/Mei/facecare_detail/mei_id/<?php echo ($value[mei_id]); ?>">购买项目详情：点击进入详情</a>
                        <a>美丽管家联系方式：<?php echo ($tel[0]['phone']); ?></a>
                       <ul class="period clearfix">
                            <li><a da-service="<?php echo ($value['order_id']); ?>" da-time="<?php echo ($value['time']); ?>">预约下一次服务</a></li>
                            <li><a href="<?php echo U('dingmore_one_cancle',array('order_id' => $value['order_id']));?>" onClick="delcfm()">取消服务</a></li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><a href="<?php echo U('dingmore_cancle',array('order_id' => $value['order_id']));?>" onClick="delcf()">取消订单</a></li>
                            <li><a href="<?php echo U('dingdan_over',array('order_id' => $value['order_id']));?>" onClick="delc()">确认订单完成</a></li>
                        </ul>
                    </div><?php endforeach; endif; ?>
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
<script type="text/javascript">
// 提前预约的时间，单位“小时”
appointmentTimeHour = document.getElementById("hourok").value;
appointmentDateTime = '';

// 可提供的预约时间段
TIME = ['10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00'];

$(function(){
    $('a[data-time]').on('click', function(){
        var $this = $(this),
            serviceIndex = $this.parentsUntil('.per-ordering').parent().index();

        appointmentDateTime = $this.attr('data-time');

        layer.open({
            className: 'time-wrapper',
            content: getAppointmentDateTime($this.attr('data-time')),
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
            yes: function(){
                var $o = $('.time-wrapper').find('li.active');
                // console.log($o);
                if ($o.length > 0) {
                    appointmentDateTime = $('#day').attr('data-day') + ' ' + $o.text();
                    $this.attr('data-time', appointmentDateTime);
                }

                layer.closeAll();

                layer.open({
                    type: 2,
                    shadeClose: false
                });

                $.post(
                    "<?php echo U('modify_time');?>",
                    {order_id: $this.attr('data-service'), time: appointmentDateTime},
                    function(data){
                        if (data.error) {
                            layer.closeAll();
                            layer.open({content: '更改失败', time: 1});
                        } else {
                            layer.closeAll();
                            layer.open({content: '更改成功', time: 1});
                        }
                    },
                'json');

            }, no: function(){
                layer.open({content: '取消更改', time: 1});
            }
        });
    });



    $('a[da-time]').on('click', function(){
        var $this = $(this),
            serviceIndex = $this.parentsUntil('.per-ordering').parent().index();

        appointmentDateTime = $this.attr('da-time');

        layer.open({
            className: 'time-wrapper',
            content: getAppointmentDateTime($this.attr('da-time')),
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
            yes: function(){
                var $o = $('.time-wrapper').find('li.active');
                // console.log($o);
                if ($o.length > 0) {
                    appointmentDateTime = $('#day').attr('data-day') + ' ' + $o.text();
                    $this.attr('da-time', appointmentDateTime);
                }

                layer.closeAll();

                layer.open({
                    type: 2,
                    shadeClose: false
                });

                $.post(
                    "<?php echo U('dingmore_one_again');?>",
                    {order_id: $this.attr('da-service'), time: appointmentDateTime},
                    function(data){
                            layer.closeAll();
                            layer.open({content: data, time: 1});
                    },
                'json');

            }, no: function(){
                layer.open({content: '取消更改', time: 3});
            }
        });
    });



    $('a[data-cancel-order]').on('click', function(){
        var $this = $(this),
            order = $this.attr('data-cancel-order');

        layer.open({
            type: 2,
            shadeClose: false
        });

        // layer.closeAll()
    });
    $('a[data-done]').on('click', function(){
        var $this = $(this),
            order = $this.attr('data-done');

        layer.open({
            type: 2,
            shadeClose: false
        });

        // layer.closeAll()
    });
    $('a[data-cancel-service]').on('click', function(){
        var $this = $(this),
            order = $this.attr('data-cancel-service');

        layer.open({
            type: 2,
            shadeClose: false
        });

        // layer.closeAll()
    });
});
</script>
<script language="javascript">
    function delcfm() {
        if (!confirm("您确定取消本次服务吗？取消后需再次预约时间")) {
            window.event.returnValue = false;
        }
    }
</script>
<script language="javascript">
    function delcf() {
        if (!confirm("您确定取消本订单吗？取消后需到院领取退款")) {
            window.event.returnValue = false;
        }
    }
</script>
<script language="javascript">
    function delc() {
        if (!confirm("您确定本订单服务已全部完成了吗？点击确认后将完成此订单")) {
            window.event.returnValue = false;
        }
    }
</script>
</body>
</html>