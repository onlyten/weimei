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
                <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="glyphicon glyphicon-th-list"></i> 系统设置</a></li>
                <li><ul class="dashboard-menu nav nav-list collapse in">
                    <li ><a href="<?php echo U('Systemset/systemset_modify');?>"><span class="fa fa-caret-right"></span>系统设置</a></li>
                    <li ><a href="<?php echo U('Systemset/hdurl_modify');?>"><span class="fa fa-caret-right"></span>活动路径设置</a></li>
                    <li ><a href="<?php echo U('Systemset/tqurl_modify');?>"><span class="fa fa-caret-right"></span>特权路径设置</a></li>

                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href="<?php echo U('Server/server_list');?>" data-target=".nav-header" class="nav-header" data-toggle="collapse"><i class="glyphicon glyphicon-th-list"></i> 服务类型管理</a></li>
                <!--<li><ul class="dashboard-menu nav nav-list collapse in">
                    <li ><a href="<?php echo U('Server/server_add');?>"><span class="fa fa-caret-right"></span>新增服务类型</a></li>
                    <li><a href="<?php echo U('Server/server_list');?>"><span class="fa fa-caret-right"></span> 服务类型列表</a></li>
					</ul>
                </li>-->
            </ul>
            <ul>
                <li><a href="<?php echo U('Serverdetail/server_detail_list');?>" data-target=".nav-header" class="nav-header collapsed" data-toggle="collapse"><i class="glyphicon glyphicon-home"></i> 美容项目管理</a></li>
                <!--<li><ul class="premium-menu nav nav-list collapse in">
                     <li ><a href="<?php echo U('Serverdetail/server_detail_add');?>"><span class="fa fa-caret-right"></span>新增美容项目</a></li>
                    <li ><a href="<?php echo U('Serverdetail/server_detail_list');?>"><span class="fa fa-caret-right"></span>美容项目列表</a></li>
                    </ul>
                </li>-->
            </ul>
            <ul>
                <li><a href="<?php echo U('Housekeeper/housekeeper_list');?>" data-target=".nav-header"  class="nav-header collapsed" data-toggle="collapse"><i class="glyphicon glyphicon-usd"></i> 美丽管家管理</a></li>
                <!--<li><ul class="system-menu nav nav-list collapse in">
                     <li ><a href="<?php echo U('Housekeeper/housekeeper_add');?>"><span class="fa fa-caret-right"></span>新增美丽管家</a></li>
                    <li ><a href="<?php echo U('Housekeeper/housekeeper_list');?>"><span class="fa fa-caret-right"></span>美丽管家列表</a></li>
                    </ul>
                </li>-->
            </ul>
             <ul>
                <li><a href="<?php echo U('User/user_list');?>" data-target=".nav-header"  class="nav-header collapsed" data-toggle="collapse"><i class="glyphicon glyphicon-usd"></i> 会员管理</a></li>
            </ul>
              <ul>
                <li><a href="<?php echo U('Order/order_list');?>" data-target=".nav-header"  class="nav-header collapsed" data-toggle="collapse"><i class="glyphicon glyphicon-usd"></i>订单管理</a></li>
            </ul>

           

             <ul>
                <li><a href="#" data-target=".accounts-menu" class="nav-header" data-toggle="collapse"><i class="glyphicon glyphicon-th-list"></i>唯美币</a></li>
                <li><ul class="accounts-menu nav nav-list collapse in">
                    <li ><a href="<?php echo U('Coinrule/qdcoinrule_list');?>"><span class="fa fa-caret-right"></span>签到规则</a></li>
                    <li ><a href="<?php echo U('Coinrule/cscoinrule_modify');?>"><span class="fa fa-caret-right"></span>充值规则</a></li>
                    <li ><a href="<?php echo U('Coinactivity/coinactivity_add');?>"><span class="fa fa-caret-right"></span>新增活动</a></li>
                    <li ><a href="<?php echo U('Coinactivity/coinactivity_list');?>"><span class="fa fa-caret-right"></span>活动列表</a></li>
                    </ul>
                </li>
            </ul>
            <!--if(isset($_SESSION["username"])){}-->
            <?php if($_SESSION['atype'] == 1): ?><ul>
                <li><a href="<?php echo U('Admin/admin_list');?>" data-target=".nav-header" class="nav-header collapsed" data-toggle="collapse"><i class="glyphicon glyphicon-usd"></i> 管理员管理</a></li>
            </ul><?php endif; ?>
            <?php if($_SESSION['atype'] == 2): endif; ?>
        </div>
    


    <div class="content">

        
	<div class="header">
        <h1 class="page-title">添加服务类型</h1>
        <ul class="breadcrumb">
            <li>服务类型管理</li>
            <li class="active">添加服务类型</li>
        </ul>
    </div>

        
        
	<div class="main-content">
		<form enctype="multipart/form-data"  action="<?php echo U('server_add_update');?>" method="post" class="demoform" >
			<div class="form-group col-md-12">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">类型名:<span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="server_name" id="server_name" placeholder="必填项" value="" datatype="*" nullmsg="请填写类型名称！" errormsg="请填写类型名称！">
				</div>
			
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">服务类型<span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<label class="radio-inline">
					  <input type="radio" name="server_type" id="server_type" value="1" checked="checked"> 美容项目
					</label>
					<label class="radio-inline">
					  <input type="radio" name="server_type" id="server_type" value="0"> 美丽管家
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">排序:<span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="server_weight" id="server_weight" placeholder="必填项,请输入数字" value="" datatype="n" nullmsg="请填写排序！" errormsg="排序必须为数字！">
				</div>
			</div>
			<div class="control-group">
				<label for="insertimage"class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">服务类型图标:<span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="preview">
						    
						</a>
						<input id="picurl" name="picurl" class="input-medium" type="file" onChange="previewImage(this)"  style="margin-bottom:10px;" datatype="*" nullmsg="请选择服务类型图标！" errormsg="请选择服务类型图标！">
					</div>
				</div>
			</div>
			
			
			<div class="form-group">
					<div class="btn-toolbar list-toolbar col-md-offset-2 col-md-10" style="margin-top:20px;margin-bottom:20px;">
				    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> 保 存</button>
					<a href="<?php echo U('server_list');?>" class="btn btn-danger"><i class="glyphicon glyphicon-list"></i> 返回列表</a>
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

			$('#server_name').on('blur', function() {
				$.ajax({
					type: "POST",
			        url: "<?php echo U('server_check');?>",
			        contentType:"application/x-www-form-urlencoded;charset=utf-8", 
			        dataType: "json",
			        data: {server_name:$('#server_name').val()},
			        success: function(msg){
        			alert(msg.info);        	  
			        }
			    });
			});
			$('#server_weight').on('blur', function() {
				$.ajax({
					type: "POST",
			        url: "<?php echo U('server_check');?>",
			        contentType:"application/x-www-form-urlencoded;charset=utf-8", 
			        dataType: "json",
			        data: {server_weight:$('#server_weight').val()},
			        success: function(msg){
        			alert(msg.info);        	  
			        }
			    });
			});
			function check() {
            document.getElementById('ok').disabled = 'disabled';
        }
		</script>
<script type="text/javascript">
	
	$(".demoform").Validform();
    
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