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
                    <li><a href="">账户信息</a></li>
                    <li class="divider"></li>
                    <!-- <li class="dropdown-header">Admin Panel</li>
                    <li><a href="./">Users</a></li>
                    <li><a href="./">Security</a></li>
                    <li><a tabindex="-1" href="./">Payments</a></li> -->
                    <!-- <li class="divider"></li> -->
                    <li><a tabindex="-1" href="<?php echo U('Login/logout');?>">注销登录</a></li>
                  </ul>
                </li>
              </ul>

            </div>
          </div>
        </div>
    
    
    
        <div class="sidebar-nav">
            <ul>
                <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="glyphicon glyphicon-th-list"></i> 服务类型管理</a></li>
                <li><ul class="dashboard-menu nav nav-list collapse in">
                    <li ><a href="<?php echo U('Server/server_add');?>"><span class="fa fa-caret-right"></span>新增服务类型</a></li>
                    <li><a href="<?php echo U('Server/server_list');?>"><span class="fa fa-caret-right"></span> 服务类型列表</a></li>
					</ul>
                </li>
            </ul>
            <ul>
                <li><a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse"><i class="glyphicon glyphicon-home"></i> 美容项目管理</a></li>
                <li><ul class="premium-menu nav nav-list collapse in">
                     <li ><a href="<?php echo U('Serverdetail/server_detail_add');?>"><span class="fa fa-caret-right"></span>新增美容项目</a></li>
                    <li ><a href="<?php echo U('Serverdetail/server_detail_list');?>"><span class="fa fa-caret-right"></span>美容项目列表</a></li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="glyphicon glyphicon-usd"></i> 美丽管家管理</a></li>
                <li><ul class="accounts-menu nav nav-list collapse in">
                     <li ><a href="<?php echo U('Housekeeper/housekeeper_add');?>"><span class="fa fa-caret-right"></span>新增美丽管家</a></li>
                    <li ><a href="<?php echo U('Housekeeper/housekeeper_list');?>"><span class="fa fa-caret-right"></span>美丽管家列表</a></li>
                    </ul>
                </li>
            </ul>
              <ul>
                <li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="glyphicon glyphicon-usd"></i>订单管理</a></li>
                <li><ul class="dashboard-menu nav nav-list collapse in">
                     <li ><a href="<?php echo U('Order/order_list');?>"><span class="fa fa-caret-right"></span>订单管理</a></li>
                    </ul>
                </li>
            </ul>

             <ul>
                <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="glyphicon glyphicon-th-list"></i> 系统设置</a></li>
                <li><ul class="dashboard-menu nav nav-list collapse in">
                    <li ><a href="<?php echo U('Systemset/systemset_modify');?>"><span class="fa fa-caret-right"></span>系统设置</a></li>
                    </ul>
                </li>
            </ul>

             <ul>
                <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="glyphicon glyphicon-th-list"></i>唯美币</a></li>
                <li><ul class="dashboard-menu nav nav-list collapse in">
                    <li ><a href="<?php echo U('Coinrule/qdcoinrule_modify');?>"><span class="fa fa-caret-right"></span>签到规则</a></li>
                    <li ><a href="<?php echo U('Coinrule/cscoinrule_modify');?>"><span class="fa fa-caret-right"></span>充值规则</a></li>
                    <li ><a href="<?php echo U('Coinactivity/coinactivity_add');?>"><span class="fa fa-caret-right"></span>新增活动</a></li>
                    <li ><a href="<?php echo U('Coinactivity/coinactivity_list');?>"><span class="fa fa-caret-right"></span>活动列表</a></li>
                    </ul>
                </li>
            </ul>


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
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">订单号: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="mei_name" id="mei_name" value="<?php echo ($order1[0]['order_id']); ?>" readonly="readonly" style="background-color: #c0c0c0;">
				</div>
			</div>
			 <div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">服务评价: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="mei_name" id="mei_name" value="<?php echo ($order1[0]['service']); ?>" readonly="readonly" style="background-color: #c0c0c0;">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">产品评价</label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="mei_name" id="mei_name" placeholder="必填项" value="<?php echo ($order1[0]['product']); ?>" readonly="readonly" style="background-color: #c0c0c0;" >
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">效果评价</label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="mei_name" id="mei_name" placeholder="必填项" value="<?php echo ($order1[0]['effect']); ?>" readonly="readonly" style="background-color: #c0c0c0;" >
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">整体评价: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="txtname" id="txtname" placeholder="必填项" value="<?php echo ($order1[0]['whole']); ?>" datatype="*" nullmsg="请填写姓名！" errormsg="请填写姓名！">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">备注: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="txtphone" id="txtphone" placeholder="必填项" value="<?php echo ($order1[0]['mark']); ?>" datatype="*" nullmsg="请填写电话！" errormsg="请填写正确的电话格式！">
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
				/*<?php if(($mei[0]['type'] == '上门' )): ?>$("select[name='type']").val("上门");<?php endif; ?>
			    <?php if(($mei[0]['type'] == '到院' )): ?>$("select[name='type']").val("到院");<?php endif; ?>
			    <?php if(($mei[0]['type'] == '都可以' )): ?>$("select[name='type']").val("都可以");<?php endif; ?>*/
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