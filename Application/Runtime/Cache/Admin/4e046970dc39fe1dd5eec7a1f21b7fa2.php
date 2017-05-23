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

        <script src="/weimei/Public/Admin/js/jquery-1.11.1.min.js" type="text/javascript"></script>

            <script src="/weimei/Public/Admin/js/jquery.knob.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $(".knob").knob();
            });
        </script>


        <link rel="stylesheet" type="text/css" href="/weimei/Public/Admin/css/theme.css">
        <link rel="stylesheet" type="text/css" href="/weimei/Public/Admin/css/premium.css">

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
                <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="glyphicon glyphicon-th-list"></i> **管理<i class="fa fa-collapse"></i></a></li>
                <li><ul class="dashboard-menu nav nav-list collapse in">
                    <li><a href="<?php echo U('Factory/factory_list');?>"><span class="fa fa-caret-right"></span> **管理</a></li>
                    <!--
                    <li ><a href="<?php echo U('Chexing/chexing_list');?>"><span class="fa fa-caret-right"></span>车型管理</a></li>
                    <li ><a href="<?php echo U('Guige/guige_list');?>"><span class="fa fa-caret-right"></span>规格管理</a></li>
                    <li ><a href="<?php echo U('Kuanxing/kuanxing_list');?>"><span class="fa fa-caret-right"></span>款型管理</a></li>
                    <li ><a href="<?php echo U('Year/year_list');?>"><span class="fa fa-caret-right"></span>年款管理</a></li>
					<li ><a href="<?php echo U('Oil/oil_list');?>"><span class="fa fa-caret-right"></span>燃油类型管理</a></li>
                </ul></li>
                <li class="system_wc"><a href="#" data-target=".system-menu" class="nav-header collapsed" data-toggle="collapse"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 用户订单管理<i class="fa fa-collapse"></i></a></li>
                <li><ul class="system-menu nav nav-list collapse in">
                    <li ><a href="<?php echo U('Dingdan/dingdan_list');?>"><span class="fa fa-caret-right"></span> 订单管理</a></li>
                </ul></li>
				 <li><a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse"><i class="glyphicon glyphicon-home"></i> 内部管理<i class="fa fa-collapse"></i></a></li>
                <li><ul class="premium-menu nav nav-list collapse in">
                    <li class="visible-xs visible-sm"><a href="#">- Premium features require a license -</a></span>
                    <li ><a href="<?php echo U('Staff/staff_list');?>"><span class="fa fa-caret-right"></span> 员工管理</a></li>
                    <li ><a href="<?php echo U('Bumen/bumen_list');?>"><span class="fa fa-caret-right"></span> 部门管理</a></li>
                    <li ><a href="<?php echo U('Zhiwu/zhiwu_list');?>"><span class="fa fa-caret-right"></span> 职位管理</a></li>
                    <li ><a href="<?php echo U('Jiedian/jiedian_list');?>"><span class="fa fa-caret-right"></span> 节点管理</a></li>
                </ul></li>
				<li><a href="<?php echo U('User/user_list');?>" class="nav-header"><i class="glyphicon glyphicon-user"></i>用户信息管理</a></li>
				<li ><a href="<?php echo U('Company/company_list');?>" class="nav-header"><i class="fa fa-fw fa-legal"></i>企业基础信息管理</a></li>
				<li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="glyphicon glyphicon-usd"></i>报价<i class="fa fa-collapse"></i></a></li>
                <li><ul class="accounts-menu nav nav-list collapse in">
                    <li ><a href="<?php echo U('Price/price_list');?>"><span class="fa fa-caret-right"></span>报价管理</a></li>
					<li ><a href="<?php echo U('Pritype/pritype_list');?>"><span class="fa fa-caret-right"></span>报价类型管理</a></li>
                </ul></li>
                <li ><a href="<?php echo U('Guanggao/guanggao_list');?>" class="nav-header"><i class="glyphicon glyphicon-gift"></i>企业广告管理</a></li>
                -->
            </ul>
        </div>
    


    <div class="content">

        
	<div class="header">
        <h1 class="page-title">**管理</h1>
        <ul class="breadcrumb">
            <li>**管理</li>
            <li class="active">**管理</li>
        </ul>
    </div>

        
        
	<div class="main-content">
		<form enctype="multipart/form-data" action="<?php echo U('mei_delete_update');?>" method="post" >
			<div class="btn-toolbar list-toolbar col-md-12" style="margin-top: -20px;">　　　　　　　　　　　　　　　　　　　
			    <div class='col-md-2'> <a href="<?php echo U('mei_add');?>" class="btn btn-primary"><i class="fa fa-plus"></i> 添加**</a></div>
			    <div class='col-md-2'><button type="submit" class="btn btn-danger" name="del" ><i class="glyphicon glyphicon-trash"></i> 删除**</button></div>
			</div>
			<!-- <h1 class="page">Premium User List</h1> -->
			<h3 class="page-tagline"></h3>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped">
						<thead>
							<tr style="background: #0099FF;color:#FFFFFF">
								<th>序号</th>
								<th>**名</th>
								<th>是否显示</th>
								<th>**标识</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($mei)): $i = 0; $__LIST__ = $mei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td> <input type="checkbox" name="delete_id[]" value="<?php echo ($vo['id']); ?>">&nbsp;&nbsp;<?php echo ($vo['id']); ?></td>
								<td><?php echo ($vo['mei_name']); ?></td>
								<td>
									<?php if($vo['mei_display'] == 1 ): ?>是
									    <?php else: ?> 否<?php endif; ?>
								</td>
								<td><img class="media-object thumb-sm" src="http://serv2.matesofts.com/weimei/Public/upload/img/<?php echo ($vo['mei_img']); ?>"></td>
								<td>
									<a href="<?php echo U('mei_modify',array('mei_id'=>$vo['id']));?>">编辑</a>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
					
				</div>
			</div>
		</form>
		<input type="text" value="all" id="page_condition" style="display:none;" />
		<input type="text" value="" id="order_condition"  style="display:none;" />
		<div class="result page" id='footer_div' style="text-align:center"><font id='wc'>共 <?php echo ($mei_count); ?> 条记录  <?php echo ($page_now); ?>/<?php echo ($mei_pagenum); ?> 页 </font>  <a class="pre_page" href="#">上一页</a>  <a class="next_page" href="#">下一页</a>  跳至<input style="width:25px;" class="jump_page" type="text"/> 页 &nbsp; <input type="button" class="btn btn-primary btn-sm jump_button" value="提交">  </div>
	
	</div>
	<!-- 模板继承，js函数写到block里 -->
	<script type="text/javascript">
		$('.next_page').on('click', function() {
			order_condition = $('#order_condition').val();
			page_condition = $('#page_condition').val();
			if (<?php echo ($page_now); ?> == <?php echo ($mei_pagenum); ?>) {
				alert('当前页为最后一页');
			}else{
				location.href = "<?php echo U('mei_list',array('page_now'=>$page_now+1));?>";
			};
		});

		$('.pre_page').on('click', function() {
			order_condition = $('#order_condition').val();
			page_condition = $('#page_condition').val();
			if (<?php echo ($page_now); ?> == 1) {
				alert('当前页为第一页');
			}else{
				location.href = "<?php echo U('mei_list',array('page_now'=>$page_now-1));?>";
			};
		});

		$('.jump_button').on('click', function() {
			order_condition = $('#order_condition').val();
			page_condition = $('#page_condition').val();
			if ( parseInt($('.jump_page').val()) < 1 || parseInt($('.jump_page').val()) > <?php echo ($mei_pagenum); ?> ) {
				alert('超过页数范围');
			}else{
				location.href = "<?php echo U('mei_list');?>/page_now/"+$('.jump_page').val();
			};
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