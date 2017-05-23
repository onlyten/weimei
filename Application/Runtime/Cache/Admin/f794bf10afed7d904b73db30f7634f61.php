<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    
        <title>维美管家管理平台</title>
    
    
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="/weimei/Public/Admin/css/bootstrap.css">
        <link rel="stylesheet" href="/weimei/Public/Admin/css/font-awesome.css">
        <link rel="stylesheet" href="/weimei/Public/Admin/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="/weimei/Public/Admin/css/style1.css">
       
  <script src="/weimei/Public/Admin/js/jquery-1.11.1.min.js" type="text/javascript"></script>
   <script src="/weimei/Public/Admin/js/validateform.js" type="text/javascript"></script>
        <link rel="stylesheet" href="http://serv2.matesofts.com/weimei/Public/kindeditor/themes/default/default.css" />
        <script charset="utf-8" src="http://serv2.matesofts.com/weimei/Public/kindeditor/kindeditor.js"></script>
        <script charset="utf-8" src="http://serv2.matesofts.com/weimei/Public/kindeditor/lang/zh_CN.js"></script>
    <script src="/weimei/Public/Admin/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
            <script src="/weimei/Public/Admin/js/jquery.knob.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $(".knob").knob();
            });
        </script>


        <link rel="stylesheet" type="text/css" href="/weimei/Public/Admin/css/theme.css">
        <link rel="stylesheet" type="text/css" href="/weimei/Public/Admin/css/premium.css">
        <link rel="stylesheet" type="text/css" href="/weimei/Public/Admin/css/validform.css">
        <!-- Demo page code -->

        <script type="text/javascript">
            $(function() {
                var match = document.cookie.match(new RegExp('color=([^;]+)'));
                if(match) var color = match[1];
                if(color) {
                    $('body').removeClass(function (index, css) {
                        return (css.match (/\btheme-\S+/g) || []).join(' ')
                    })
                    $('body').addClass('theme-' + color);
                }

                $('[data-popover="true"]').popover({html: true});
                
            });
        </script>
        <style type="text/css">
            #line-chart {
                height:300px;
                width:800px;
                margin: 0px auto;
                margin-top: 1em;
            }
            .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
                color: #fff;
            }
        </style>

        <script type="text/javascript">
            $(function() {
                var uls = $('.sidebar-nav > ul > *').clone();
                uls.addClass('visible-xs');
                $('#main-menu').append(uls.clone());
            });
        </script>
    

</head>
<body class=" theme-blue">
    
        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
             <!--<img src="/weimei/Public/images/carcar.png" width="280px" height="36px" style="margin-top:10px"></div>-->
			 <div style="margin-top:12px"><font color="white" size="4px">维美管家管理平台</font></div></div>

            <div class="navbar-collapse collapse" style="height: 1px;">
              <ul id="main-menu" class="nav navbar-nav navbar-right">
                <li class="dropdown hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> <?php echo ($_SESSION['username']); ?>
                        <i class="fa fa-caret-down"></i>
                    </a>

                  <ul class="dropdown-menu">
                    <li><a href="<?php echo U('Login/pwd_modify');?>">修改密码</a></li>
                    <li class="divider"></li>
                    <li><a tabindex="-1" href="<?php echo U('Login/logout');?>">注销登录</a></li>

                  </ul>
                </li>
              </ul>

            </div>
          </div>
        </div>
    
    
    
        <div class="sidebar-nav">
           <ul>
                <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="glyphicon glyphicon-cog"></i> 系统设置</a></li>
                <li><ul class="dashboard-menu nav nav-list collapse out">
                    <li ><a href="<?php echo U('Systemset/systemset_modify');?>"><span class="fa fa-caret-right"></span>系统设置</a></li>
                    <li ><a href="<?php echo U('Systemset/hdurl_modify');?>"><span class="fa fa-caret-right"></span>活动路径设置</a></li>
                    <li ><a href="<?php echo U('Systemset/tqurl_modify');?>"><span class="fa fa-caret-right"></span>特权路径设置</a></li>

                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href="<?php echo U('Server/server_list');?>" class="nav-header"><i class="glyphicon glyphicon-th-list"></i> 服务类型管理</a></li>
                <!--<li><ul class="dashboard-menu nav nav-list collapse in">
                    <li ><a href="<?php echo U('Server/server_add');?>"><span class="fa fa-caret-right"></span>新增服务类型</a></li>
                    <li><a href="<?php echo U('Server/server_list');?>"><span class="fa fa-caret-right"></span> 服务类型列表</a></li>
					</ul>
                </li>-->
            </ul>
            <ul>
                <li><a href="<?php echo U('Serverdetail/server_detail_list');?>" class="nav-header collapsed"><i class="glyphicon glyphicon-home"></i> 美容项目管理</a></li>
                <!--<li><ul class="premium-menu nav nav-list collapse in">
                     <li ><a href="<?php echo U('Serverdetail/server_detail_add');?>"><span class="fa fa-caret-right"></span>新增美容项目</a></li>
                    <li ><a href="<?php echo U('Serverdetail/server_detail_list');?>"><span class="fa fa-caret-right"></span>美容项目列表</a></li>
                    </ul>
                </li>-->
            </ul>
            <ul>
                <li><a href="<?php echo U('Housekeeper/housekeeper_list');?>"  class="nav-header collapsed"><i class="glyphicon glyphicon-user"></i> 美丽管家管理</a></li>
                <!--<li><ul class="system-menu nav nav-list collapse in">
                     <li ><a href="<?php echo U('Housekeeper/housekeeper_add');?>"><span class="fa fa-caret-right"></span>新增美丽管家</a></li>
                    <li ><a href="<?php echo U('Housekeeper/housekeeper_list');?>"><span class="fa fa-caret-right"></span>美丽管家列表</a></li>
                    </ul>
                </li>-->
            </ul>
             <ul>
                <li><a href="<?php echo U('User/user_list');?>" class="nav-header collapsed"><i class="glyphicon glyphicon-heart"></i> 会员管理</a></li>
            </ul>
            <ul>
                <li><a href="<?php echo U('Order/order_list');?>" class="nav-header collapsed"><i class="glyphicon glyphicon-list-alt"></i>订单管理</a></li>
            </ul>

           

             <ul>
                <li><a href="#" data-target=".accounts-menu" class="nav-header" data-toggle="collapse"><i class="glyphicon glyphicon-usd"></i> 维美币</a></li>
                <li><ul class="accounts-menu nav nav-list collapse auto">
                    <li ><a href="<?php echo U('Coinrule/qdcoinrule_list');?>"><span class="fa fa-caret-right"></span>签到规则</a></li>
                    <li ><a href="<?php echo U('Coinrule/cscoinrule_modify');?>"><span class="fa fa-caret-right"></span>充值规则</a></li>
                    <li ><a href="<?php echo U('Coinactivity/coinactivity_add');?>"><span class="fa fa-caret-right"></span>新增活动</a></li>
                    <li ><a href="<?php echo U('Coinactivity/coinactivity_list');?>"><span class="fa fa-caret-right"></span>活动列表</a></li>
                    </ul>
                </li>
            </ul>

             <ul>
                <li><a href="<?php echo U('Datashow/datashow_list');?>" class="nav-header collapsed"><i class="glyphicon glyphicon-qrcode"></i> 数据统计</a></li>
                <!--<li><ul class="system-menu nav nav-list collapse in">
                     <li ><a href="<?php echo U('Housekeeper/housekeeper_add');?>"><span class="fa fa-caret-right"></span>新增美丽管家</a></li>
                    <li ><a href="<?php echo U('Housekeeper/housekeeper_list');?>"><span class="fa fa-caret-right"></span>美丽管家列表</a></li>
                    </ul>
                </li>-->
            </ul>

            <!--if(isset($_SESSION["username"])){}-->
            <?php if($_SESSION['atype'] == 1): ?><ul>
                <li><a href="<?php echo U('Admin/admin_list');?>" class="nav-header collapsed"><i class="glyphicon glyphicon-align-center"></i> 管理员管理</a></li>
            </ul><?php endif; ?>
            <?php if($_SESSION['atype'] == 2): endif; ?>
        </div>
    


    <div class="content">

        
	<div class="header">
        <h1 class="page-title">查看订单评价</h1>
        <ul class="breadcrumb">
            <li>查看订单评价</li> 
            <li class="active">查看订单评价</li>          
        </ul>
    </div>

        
        
	<div class="main-content" style="height: 1350px;">
        <form enctype="multipart/form-data"  method="post" class="demoform" >
           <div class="form-group">
				<div class="col-md-12 control-label" style="padding:0px 0px 5px 0px;line-height: 40px;">
				<p class="col-md-2" style="text-align: right;">订单号:</p>
                <p class="col-md-6" style=" padding: 0px; font-size: 16px; font-weight: bold; color:#7e2e8d;"><?php echo ($order1[0]['order_id']); ?></p>
				</div>
				
			</div>
			 <div class="form-group">
				<div class="col-md-12 control-label" style="padding:0px 0px 5px 0px; line-height: 40px;">
				<p class="col-md-2" style="text-align: right;">服务评价:</p>
                <p class="col-md-6" style=" padding: 0px;  color:#7e2e8d; font-size: 16px;">
                  <?php switch($order1[0]['service']): case "1": ?><i class="fa fa-star"></i><?php break;?>
                      <?php case "2": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php case "3": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php case "4": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php case "5": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php default: ?>无评价</default><?php endswitch;?>
                </p>
				</div>				
			</div>
			<div class="form-group">
				<div class="col-md-12 control-label" style="padding:0px 0px 5px 0px; line-height: 40px;">
				<p class="col-md-2" style="text-align: right;">产品评价:</p>
                <p class="col-md-6" style=" padding: 0px; color:#7e2e8d; font-size: 16px;">   
                  <?php switch($order1[0]['product']): case "1": ?><i class="fa fa-star"></i><?php break;?>
                      <?php case "2": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php case "3": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php case "4": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php case "5": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php default: ?>无评价</default><?php endswitch;?>
                </p>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12 control-label" style="padding:0px 0px 5px 0px; line-height: 40px;">
				<p class="col-md-2" style="text-align: right;">效果评价:</p>
                <p class="col-md-6" style=" padding: 0px;  color:#7e2e8d; font-size: 16px;">   
                  <?php switch($order1[0]['effect']): case "1": ?><i class="fa fa-star"></i><?php break;?>
                      <?php case "2": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php case "3": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php case "4": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php case "5": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php default: ?>无评价</default><?php endswitch;?>
                </p>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12 control-label" style="padding:0px 0px 5px 0px; line-height: 40px;">
				  <p class="col-md-2" style="text-align: right;">整体评价: </p>
                  <p class="col-md-6" style=" padding: 0px; color:#7e2e8d; font-size: 16px;">  
                      <?php switch($order1[0]['whole']): case "1": ?><i class="fa fa-star"></i><?php break;?>
                      <?php case "2": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php case "3": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i><i class="fa fa-star"></i><?php break;?>
                      <?php case "4": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php case "5": ?><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><?php break;?>
                      <?php default: ?>无评价</default><?php endswitch;?>
                   </p>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12 control-label" style="padding:0px 0px 5px 0px; line-height: 40px;">
				  <p class="col-md-2" style="text-align: right;">备注: </p>
                  <p class="col-md-6" style=" padding: 0px;"><?php echo ($order1[0]['mark']); ?><p>
				</div>
			</div>
			
			<div class="form-group">
				<div class="btn-toolbar list-toolbar col-md-offset-2 col-md-10" style="margin-top:15px;margin-bottom:40px;">
			
				<a href="<?php echo U('order_list');?>" class="btn btn-danger" style="margin-left: 60px;"><i class="glyphicon glyphicon-list"></i> 返回列表</a>
				</div>
			</div>

        </form>
	</div>
	<script type="text/javascript">
		 $(".demoform").Validform();
		 $(document).ready(function() {
				$("select[name='selstate']").val("<?php echo ($order1[0]['state']); ?>");
			});
	</script>

	



    </div>

    
        <script src="/weimei/Public/Admin/js/bootstrap.js"></script>
        <script type="text/javascript">
            $("[rel=tooltip]").tooltip();
            $(function() {
                $('.demo-cancel-click').click(function(){return false;});
            });
        </script>
    
    
  
</body></html>