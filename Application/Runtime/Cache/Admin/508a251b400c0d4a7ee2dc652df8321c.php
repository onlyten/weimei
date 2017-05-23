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
        <h1 class="page-title">添加**</h1>
        <ul class="breadcrumb">
            <li>**管理</li>
            <li class="active">添加**</li>
        </ul>
    </div>

        
        
	<div class="main-content">
		<form enctype="multipart/form-data" onsubmit="return checkForm()" action="<?php echo U('mei_add_update');?>" method="post" >
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">**名:<span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="mei_name" id="mei_name" placeholder="必填项" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">是否显示<span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<label class="radio-inline">
					  <input type="radio" name="mei_display" id="mei_display" value="1" checked="checked"> 显示
					</label>
					<label class="radio-inline">
					  <input type="radio" name="mei_display" id="mei_display" value="0"> 不显示
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">排序:<span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="mei_weight" id="mei_weight" placeholder="必填项,请输入数字" value="">
				</div>
			</div>
			<div class="control-group">
				<label for="insertimage"class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">**图标:<span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="preview">
						    
						</a>
						<input id="picurl" name="picurl" class="input-medium" type="file" onChange="previewImage(this)"  style="margin-bottom:10px;">
					</div>
				</div>
			</div>
			
			
			<div class="form-group">
					<div class="btn-toolbar list-toolbar col-md-offset-2 col-md-10" style="margin-top:20px;margin-bottom:20px;">
				    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> 保 存</button>
					<a href="<?php echo U('mei_list');?>" class="btn btn-danger"><i class="glyphicon glyphicon-list"></i> 返回列表</a>
			</div>
		</form>
		<script>
		//图片上传
		function previewImage(file)
		{
		var MAXWIDTH  = 260;
		var MAXHEIGHT = 100;
		var div = document.getElementById('preview');
		if (file.files && file.files[0])
		{
		div.innerHTML ='<img id=imghead1>';
		var img = document.getElementById('imghead1');
		img.onload = function(){
		var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
		img.width  =  rect.width;
		img.height =  rect.height;
		//                 img.style.marginLeft = rect.left+'px';
		img.style.marginTop = rect.top+'px';
		}
		var reader = new FileReader();
		reader.onload = function(evt){img.src = evt.target.result;}
		reader.readAsDataURL(file.files[0]);
		}
		else //兼容IE
		{
		var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
		file.select();
		var src = document.selection.createRange().text;
		div.innerHTML = '<img id=imghead1>';
		var img = document.getElementById('imghead1');
		img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
		var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
		status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
		div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
		}
		}
		function clacImgZoomParam( maxWidth, maxHeight, width, height ){
		var param = {top:0, left:0, width:width, height:height};
		if( width>maxWidth || height>maxHeight )
		{
		rateWidth = width / maxWidth;
		rateHeight = height / maxHeight;
		
		if( rateWidth > rateHeight )
		{
		param.width =  maxWidth;
		param.height = Math.round(height / rateWidth);
		}else
		{
		param.width = Math.round(width / rateHeight);
		param.height = maxHeight;
		}
		}
		
		param.left = Math.round((maxWidth - param.width) / 2);
		param.top = Math.round((maxHeight - param.height) / 2);
		return param;
		}
				window.document.onkeydown = function(e) {
					if ('' == document.activeElement.id) {
						var e=e || event;
						var currKey=e.keyCode || e.which || e.charCode;
						if (8 == currKey) {
							return false;
						}
					}
				};
		</script>

		<!-- 表单验证 -->
		<script type="text/javascript">
		function checkForm(){
			       var x=document.getElementById("mei_name").value;
				   if ((x == null) || (x.length == 0))
				   {
					   alert("**名不能为空！");
					   return false;
				   }

				   var m=document.getElementById("mei_weight").value;

				   if ((m == null) || (m.length == 0))
				   {
					   alert("排序不能为空！");
					   return false;
				   }
          }
			$('#mei_name').on('blur', function() {
				$.ajax({
					type: "POST",
			        url: "<?php echo U('mei_check');?>",
			        contentType:"application/x-www-form-urlencoded;charset=utf-8", 
			        dataType: "json",
			        data: {mei_name:$('#mei_name').val()},
			        success: function(msg){
        				alert(msg.info);        	  
			        }
			    });
			});
			$('#mei_weight').on('blur', function() {
				$.ajax({
					type: "POST",
			        url: "<?php echo U('mei_check');?>",
			        contentType:"application/x-www-form-urlencoded;charset=utf-8", 
			        dataType: "json",
			        data: {mei_weight:$('#mei_weight').val()},
			        success: function(msg){
        				alert(msg.info);        	  
			        }
			    });
			});
			function check() {
            document.getElementById('ok').disabled = 'disabled';
        }
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