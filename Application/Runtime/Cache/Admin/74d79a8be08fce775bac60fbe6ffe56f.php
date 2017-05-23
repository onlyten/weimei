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
        <h1 class="page-title">数据统计</h1>
        <ul class="breadcrumb">
            <li>数据统计</li> 
            <li class="active">数据统计</li>          
        </ul>
    </div>

        
        
	<div class="main-content"> 
	<form enctype="multipart/form-data" action="" method="post"  name="form1" role="form" >
      <div class="clearfix">
	    <div class="btn-toolbar list-toolbar col-md-2" style="height:40px;line-height:40px;">
			<label class="control-label" style="display:block; width：90%;text-align: right;">完成时间</label> </div>
			<div class="col-md-4" >
		    <div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" placeholder="选择开始时间"  value="" readonly name="txttimefrom" id="txttimefrom" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
            </div>
            <div class="col-md-4" >
            <div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" placeholder="选择结束时间" value="" readonly name="txttimeto" id="txttimeto" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
            </div>		   
	   
	  </div>



    <script type="text/javascript">
        function output() {
            document.form1.action = "http://serv2.matesofts.com/weimei/index.php/Admin/Datashow/dingdan_output";
            document.form1.submit();
        }
        function showlist() {
            document.form1.action="http://serv2.matesofts.com/weimei/index.php/Admin/Datashow/datashow_list";
            document.form1.submit();
        }
    </script>

	  <div class="clearfix">		
		     <div class='col-md-2' style="padding: 0px;">
			     <button class="btn btn-primary" id="btn_search" type="submit" style="width:80%;float:left; " onclick="showlist()"><i class="glyphicon glyphicon-search"></i> 搜索</button></div>	
			 <div class='col-md-2' style="padding: 0px;">   
			  <button class="btn btn-danger" id="btn_search1" type="submit" style="width:80%;float:left; " onclick="output()"><i class="glyphicon icon-circle-arrow-down"></i> 导出</button></div>  
	  </div>

  </form>


         
		<form enctype="multipart/form-data" action="" method="post" >
        <h3 class="page-tagline"></h3>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped">
						<thead>
						  <tr style="background: #0099FF;color:#FFFFFF">
								<th>总金额</th>
								<th><?php echo ($msum); ?></th>					
							</tr>
							<tr style="background: #0099FF;color:#FFFFFF">
								<th>总维美币</th>
								<th><?php echo ($summ); ?></th>						
							</tr>
							<tr style="background: #0099FF;color:#FFFFFF">
								<th>订单号</th>
								<th>姓名</th>
								<th>电话</th>
								<th>美容项目</th>
								<th>下单时间</th>
								<th>支付金额</th>
								<th>维美币</th>								
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($orderlist)): $i = 0; $__LIST__ = $orderlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>								
								<td><?php echo ($vo['order_id']); ?></td>
								<td><?php echo ($vo['name']); ?></td>
								<td><?php echo ($vo['mobile']); ?></td>
								<td><?php echo ($vo['mei_id']); ?></td>
								<td><?php echo ($vo['addtime']); ?></td>
								<td><?php echo ($vo['totalmoney']); ?></td>								
								<td><?php echo ($vo['coins']); ?></td>								
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
					
				</div>
			</div>
		</form>

		<input type="text" value="all" id="page_condition" style="display:none;" />
		<input type="text" value="" id="order_condition"  style="display:none;" />
		<div class="result page" id='footer_div' style="text-align:center"><font id='wc'>共 <?php echo ($order_count); ?> 条记录  <?php echo ($page_now); ?>/<?php echo ($server_pagenum); ?> 页 </font>  <a class="pre_page" href="#">上一页</a>  <a class="next_page" href="#">下一页</a>  跳至<input style="width:25px;" class="jump_page" type="text"/> 页 &nbsp; <input type="button" class="btn btn-primary btn-sm jump_button" value="提交">  </div>
	
	</div>
	<!-- 模板继承，js函数写到block里 -->
	<script type="text/javascript">
	    $('.form_date').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0,
		language:'zh-CN',
        });

		$('.next_page').on('click', function() {
			order_condition = $('#order_condition').val();
			page_condition = $('#page_condition').val();
			if (<?php echo ($page_now); ?> == <?php echo ($server_pagenum); ?>) {
				alert('当前页为最后一页');
			}else{
				location.href = "<?php echo U('datashow_list',array('page_now'=>$page_now+1,'txttimefrom'=>$stimef,'txttimeto'=>$stimet));?>";
			};
		});

		$('.pre_page').on('click', function() {
			order_condition = $('#order_condition').val();
			page_condition = $('#page_condition').val();
			if (<?php echo ($page_now); ?> == 1) {
				alert('当前页为第一页');
			}else{
				location.href = "<?php echo U('datashow_list',array('page_now'=>$page_now-1,'txttimefrom'=>$stimef,'txttimeto'=>$stimet));?>";
			};
		});

		$('.jump_button').on('click', function() {
			order_condition = $('#order_condition').val();
			page_condition = $('#page_condition').val();
			if ( parseInt($('.jump_page').val()) < 1 || parseInt($('.jump_page').val()) > <?php echo ($server_pagenum); ?> ) {
				alert('超过页数范围');
			}else{
				//location.href = "<?php echo U('datashow_list');?>/page_now/"+$('.jump_page').val();
				location.href = "<?php echo U('datashow_list',array('page_now'=>$page_now-1,'txttimefrom'=>$stimef,'txttimeto'=>$stimet));?>";
			};
		});

		$(document).ready(function() {
			if ('<?php echo ($stimef); ?>' != '') {
				$('#txttimefrom').val('<?php echo ($stimef); ?>');
			};
			if ('<?php echo ($stimet); ?>' != '') {
			$('#txttimeto').val('<?php echo ($stimet); ?>');
			};
		});
	</script>
	
	</div>



    </div>

    
        <script src="/weimei/Public/Admin/js/bootstrap.js"></script>
        <script type="text/javascript">
            $("[rel=tooltip]").tooltip();
            $(function() {
                $('.demo-cancel-click').click(function(){return false;});
            });
        </script>
    
    
  
</body></html>