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
        <h1 class="page-title">订单管理</h1>
        <ul class="breadcrumb">
            <li>订单管理</li> 
            <li class="active">订单管理</li>          
        </ul>
    </div>

        
        
	<div class="main-content"> 
	<form enctype="multipart/form-data" action="" method="post"  name="form1" role="form" >
      <div class="clearfix">
	    <div class="btn-toolbar list-toolbar col-md-6" style="height:40px;line-height:40px;">
			<label class="control-label" style="float:left; width: 20%; text-align: right;">订单号&nbsp;&nbsp;</label>
		    <input type="text" class="form-control" style="width:50%;float:left;" id="orderid1" name="orderid1"/>		   
	    </div>
	  </div>
	  <div class="clearfix">
		<div class="btn-toolbar list-toolbar col-md-6 clearfix" style="height:40px;line-height:40px;">
			<label class="control-label" style="float:left;width: 20%; text-align: right;">姓名&nbsp;&nbsp;</label>
		    <input type="text" class="form-control" style="width:50%;float:left;" id="uname" name="uname" />		  
		</div>
	  </div>
	  <div class="clearfix">
		<div class="btn-toolbar list-toolbar col-md-6 clearfix" style="height:40px;line-height:40px;">
			<label class="control-label" style="float:left;width: 20%; text-align: right;">电话&nbsp;&nbsp;</label>
		    <input type="text" class="form-control" style="width:50%;float:left;" id="uphone" name="uphone" value="<?php echo ($search_uphone); ?>" />	  
		</div>
	  </div>

 <script type="text/javascript">
        function output() {
            document.form1.action = "http://serv2.matesofts.com/weimei/index.php/Admin/Order/dingdan_output";
            document.form1.submit();
        }
        function showlist() {
            document.form1.action="http://serv2.matesofts.com/weimei/index.php/Admin/Order/order_list";
            document.form1.submit();
        }
    </script>

	  <div class="clearfix">
		<div class="btn-toolbar list-toolbar col-md-6 clearfix" style="height:40px;line-height:40px;">
			<label class="control-label" style="float:left;width: 20%; text-align: right;">订单状态&nbsp;&nbsp;</label>
			<select class="chzn-select form-control" name="selstate" id="selstate" style="width:50%;float:left;"  value="<?php echo ($search_state); ?>">
			    <option value="">请选择</option>
                <option value="0">进行中</option>
                <option value="1">取消</option>
                <option value="2">未服务</option>
                <option value="3">完成</option>
			</select></div>
		     <div class='col-md-2' style="padding: 0px;">
			     <button class="btn btn-primary" id="btn_search" type="submit" style="width:80%;float:left; " onclick="showlist()"><i class="glyphicon glyphicon-search"></i> 搜索</button></div>	
			 <div class='col-md-2' style="padding: 0px;">   
			  <button class="btn btn-danger" id="btn_search1" type="submit" style="width:80%;float:left; " onclick="output()"><i class="glyphicon icon-circle-arrow-down"></i> 导出</button></div>  
	  </div>

	  <div class="btn-toolbar list-toolbar col-md-12">
		    <button class="btn btn-primary" id="btn_search" type="submit" style="width:15%;float:left;"><i class="glyphicon glyphicon-trash"></i> 删除</button>
		 </div>
        <h3 class="page-tagline"></h3>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped">
						<thead>
							<tr style="background: #0099FF;color:#FFFFFF">
								<th>序号</th>
								<th>订单号</th>
								<th>姓名</th>
								<th>电话</th>
								<th>美容项目</th>
								<th>预约状态</th>
								<th>预约类型</th>
								<th>支付金额</th>
								<th>预约时间</th>							
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($orderlist)): $i = 0; $__LIST__ = $orderlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td> <input type="checkbox" name="delete_id[]" value="<?php echo ($vo['id']); ?>">&nbsp;&nbsp;<?php echo ($vo['id']); ?></td>
								<td><?php echo ($vo['order_id']); ?></td>
								<td><?php echo ($vo['name']); ?></td>
								<td><?php echo ($vo['mobile']); ?></td>
								<td><?php echo ($vo['mei_name']); ?></td>
								<td>
                                <?php if($vo['state'] == 0): ?><span style="color:#f60; font-size: 15px; font-weight: bold;">进行中</span><?php endif; ?>
                                <?php if($vo['state'] == 1): ?><span style="color:#f60; font-size: 15px; font-weight: bold;"> 取消</span><?php endif; ?>
                                <?php if($vo['state'] == 2): ?><span style="color:#f60; font-size: 15px; font-weight: bold;">未服务 </span><?php endif; ?>
                                 <?php if($vo['state'] == 3): ?><span style="color:#f60; font-size: 15px; font-weight: bold;">完成 </span><?php endif; ?>
								</td>
								<td>
								
                                <?php if($vo['type'] == 0): ?>预约上门<?php endif; ?>
                                <?php if($vo['type'] == 1): ?>预约到院<?php endif; ?>

								</td>
								<td><?php echo ($vo['xiaofei']); ?></td>
								<td><?php echo ($vo['time']); ?></td>
															
								<td>
									<!--<a href="<?php echo U('server_detail_modify',array('mei_id'=>$vo['id']));?>">编辑</a>-->
                                    <a href="<?php echo U('order_update',array('order_id'=>$vo['id']));?>">修改</a>
                                    <a href="<?php echo U('order_pd',array('sid'=>$vo['id']));?>">派单</a>
                                    <a href="<?php echo U('order_pj',array('sid'=>$vo['order_id']));?>">查看评价</a>
                                    <a href="<?php echo U('order_warn',array('sid'=>$vo['id']));?>">录入提醒</a>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
					
				</div>
			</div>
        </form>
		<input type="text" value="all" id="page_condition" style="display:none;" />
		<input type="text" value="" id="order_condition"  style="display:none;" />
		<div class="result page" id='footer_div' style="text-align:center"><font id='wc'>共 <?php echo ($order_count); ?> 条记录  <?php echo ($page_now); ?>/<?php echo ($server_pagenum); ?> 页 </font>  <a class="pre_page" href="#">上一页</a>  <a class="next_page" href="#">下一页</a>  跳至<input style="width:25px;" class="jump_page" id="jump_page" name="jump_page" type="text"/> 页 &nbsp; 
		<input type="button" class="btn btn-primary btn-sm jump_button" value="提交">
		</div>
	
	
	</div>
	<!-- 模板继承，js函数写到block里 -->
	<script type="text/javascript">
		$('.next_page').on('click', function() {
			order_condition = $('#order_condition').val();
			page_condition = $('#page_condition').val();
			if (<?php echo ($page_now); ?> == <?php echo ($server_pagenum); ?>) {
				alert('当前页为最后一页');
			}else{
				location.href = "<?php echo U('order_list',array('page_now'=>$page_now+1,'orderid1'=>$search_orderid,'uname'=>$search_uname,'uphone'=>$search_uphone,'selstate'=>$search_state));?>";
			};
		});

		$('.pre_page').on('click', function() {
			order_condition = $('#order_condition').val();
			page_condition = $('#page_condition').val();
			if (<?php echo ($page_now); ?> == 1) {
				alert('当前页为第一页');
			}else{
				location.href = "<?php echo U('order_list',array('page_now'=>$page_now-1,'orderid1'=>$search_orderid,'uname'=>$search_uname,'uphone'=>$search_uphone,'selstate'=>$search_state));?>";
			};
		});

		$('.jump_button').on('click', function() {
			order_condition = $('#order_condition').val();
			page_condition = $('#page_condition').val();
			$jumppage=$('#jump_page').val()

			/*$search_state=$('#selstate').val();
			$search_orderid=$('#orderid1').val();
			$search_uname=$('#uname').val();
			$search_uphone=$('#uphone').val();*/
			if ( parseInt($jumppage) < 1 || parseInt($jumppage) > <?php echo ($server_pagenum); ?> ) {
				alert('超过页数范围');
			}else{
				//location.href = "<?php echo U('order_list');?>/page_now/"+$page_now+"/orderid1/"+$search_orderid+"/uname/"+$search_uname+"/uphone/"+$search_uphone+"/selstate/"+$search_state;
                location.href = "<?php echo U('order_list');?>/page_now/"+$jumppage;
			};
		});

		$(document).ready(function() {
			if ('<?php echo ($search_orderid); ?>' != '') {
				$('#orderid1').val('<?php echo ($search_orderid); ?>');
			};
			if ('<?php echo ($search_uname); ?>' != '') {
			$('#uname').val('<?php echo ($search_uname); ?>');
			};
			if ('<?php echo ($search_uphone); ?>' != '') {
				$('#uphone').val('<?php echo ($search_uphone); ?>');
			};
			if ('<?php echo ($search_state); ?>' != '') {
				$('#selstate').val('<?php echo ($search_state); ?>');
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