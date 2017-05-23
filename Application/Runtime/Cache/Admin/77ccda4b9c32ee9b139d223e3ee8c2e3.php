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
        <h1 class="page-title">新增美丽管家</h1>
        <ul class="breadcrumb">
            <li>美丽管家管理</li>
            <li class="active">新增美丽管家</li>
        </ul>
    </div>

        
        
	<div class="main-content" style="height: 1350px;">
		<form enctype="multipart/form-data" onsubmit="return checkForm()" action="<?php echo U('housekeeper_add_update');?>" method="post" class="demoform" >

		    <div class="form-group">
				<label class="col-md-2 control-label" style="padding:0px 0px 5px 0px;">美容师属性： <span style="color:red">*</span> </label>
				<div class="col-md-2" style="padding:0px 0px 10px 0px;">
                    <input type="radio" name="shuxing" value="0" checked="checked" />  院内</div>
                <div class="col-md-2" style="padding:0px 0px 10px 0px;">
                    <input type="radio" name="shuxing" value="1" />  院外
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">工号: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="job_num" id="job_num" placeholder="必填项" value="" datatype="*" nullmsg="请填写工号！" errormsg="请填写工号！" >
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">姓名: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="name" id="name" placeholder="必填项" value=""  datatype="*" nullmsg="请填写姓名！" errormsg="请填写姓名！">
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">职称等级: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="title" id="title" placeholder="必填项" value="" datatype="*" nullmsg="请填写职称等级！" errormsg="请填写职称等级！" >
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">学历: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="xueli" id="xueli" placeholder="必填项" value="" datatype="*" nullmsg="请填写学历！" errormsg="请填写学历！" >
				</div>
			</div>
			<div class="form-group">
			<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">客户评价: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="pingjia" id="pingjia" placeholder="填写0-100之间的数字" value="" datatype="n" nullmsg="请填写客户评价！" errormsg="客户评价只能是0-100之间的数字！" maxlength="3">
				</div>
			</div>
<!--*********头像图片*************************头像图片********************头像图片*********************-->
			<div class="control-group">
				<label for="insertimage"class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">头像:</label>
				<div class="col-md-12" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="one">
						    
						</a>
						<input id="pic_tou" name="pic_tou" class="input-medium" type="file" onChange="a(this)"  style="margin-bottom:10px; width:66px;" datatype="*" nullmsg="请上传头像！" errormsg="请上传头像！">
					</div>
				</div>
			</div>
<!--*********形象照图片*************************形象照图片********************形象照图片*********************-->
			<div class="control-group">
				<label for="insertimage"class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">形象照:</label>
				<div class="col-md-3" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="two">
						    
						</a>
						<input id="pic_xing1" name="pic_xing1" class="input-medium" type="file" onChange="b(this)"  style="margin-bottom:10px; width:66px;" datatype="*" nullmsg="请上传形象照！" errormsg="请上传形象照！">
					</div>
				</div>
				<div class="col-md-3" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="three">
						    
						</a>
						<input id="pic_xing2" name="pic_xing2" class="input-medium" type="file" onChange="c(this)"  style="margin-bottom:10px; width:66px;">
					</div>
				</div>
				<div class="col-md-3" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="four">
						    
						</a>
						<input id="pic_xing3" name="pic_xing3" class="input-medium" type="file" onChange="d(this)"  style="margin-bottom:10px; width:66px;" >
					</div>
				</div>
			</div>
<!--************资质证书图片**********************资质证书图片**********************资质证书图片********************-->
			<div class="control-group">
				<label for="insertimage"class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">资质证书:</label>
				<div class="col-md-2" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="five">
						    
						</a>
						<input id="zzzs1" name="zzzs1" class="input-medium" type="file" onChange="e(this)"  style="margin-bottom:10px; width:66px;" datatype="*" nullmsg="请上传资质证书！" errormsg="请上传资质证书！">
						<input type="text" name="step_detail1" id="step_detail1" />
					</div>
				</div>
				<div class="col-md-2" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="six">
						    
						</a>
						<input id="zzzs2" name="zzzs2" class="input-medium" type="file" onChange="f(this)"  style="margin-bottom:10px; width:66px;" >
						<input type="text" name="step_detail2" id="step_detail2" />
					</div>
				</div>
				<div class="col-md-2" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="seven">
						    
						</a>
						<input id="zzzs3" name="zzzs3" class="input-medium" type="file" onChange="g(this)"  style="margin-bottom:10px; width:66px;" >
						<input type="text" name="step_detail3" id="step_detail3" />
					</div>
				</div>
				<div class="col-md-2" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="eight">
						    
						</a>
						<input id="zzzs4" name="zzzs4" class="input-medium" type="file" onChange="h(this)"  style="margin-bottom:10px; width:66px;" >
						<input type="text" name="step_detail4" id="step_detail4" />
					</div>
				</div>
				<div class="col-md-2" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="nine">
						    
						</a>
						<input id="zzzs5" name="zzzs5" class="input-medium" type="file" onChange="i(this)"  style="margin-bottom:10px; width:66px;" >
						<input type="text" name="step_detail5" id="step_detail5" />
					</div>
				</div>
			</div>
<!--*************************************************************************************************************************-->
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">累计服务次数: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="cishu" id="cishu" placeholder="必填项（数字）" value="" datatype="n" nullmsg="请填写累计服务次数！" errormsg="累计服务次数只能是数字！">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">顾客打赏: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="dashang" id="dashang" placeholder="必填项（数字）" value=""  datatype="n" nullmsg="请填写顾客打赏！" errormsg="顾客打赏只能是数字！">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">任职经历: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<textarea type="text" class="form-control" name="rzjl" id="rzjl" placeholder="必填项" value="" datatype="*" nullmsg="请填写任职经历！" errormsg="请填写任职经历！"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">擅长项目: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<textarea type="text" class="form-control" name="scxm" id="scxm" placeholder="必填项" value="" datatype="*" nullmsg="请填写擅长项目！" errormsg="请填写擅长项目！"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="btn-toolbar list-toolbar col-md-offset-2 col-md-10" style="margin-top:15px;margin-bottom:40px;">
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> 保 存</button>
				<a href="<?php echo U('housekeeper_list');?>" class="btn btn-danger" style="margin-left: 60px;"><i class="glyphicon glyphicon-list"></i> 返回列表</a>
				</div>
			</div>
		</form>
	</div>
<script type="text/javascript">
		$('#job_num').on('blur', function() {
				$.ajax({
					type: "POST",
			        url: "<?php echo U('housekeeper_check');?>",
			        contentType:"application/x-www-form-urlencoded;charset=utf-8", 
			        dataType: "json",
			        data: {job_num:$('#job_num').val()},
			        success: function(msg){
        				alert(msg.info);        	  
			        }
			    });
			});
</script>
	


<script type="text/javascript">
//图片上传1
		function a(file)
		{
		var MAXWIDTH  = 130;
		var MAXHEIGHT = 100;
		var div = document.getElementById('one');
		if (file.files && file.files[0])
		{
		div.innerHTML ='<img id=pic_tou>';
		var img = document.getElementById('pic_tou');
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
		div.innerHTML = '<img id=pic_tou>';
		var img = document.getElementById('pic_tou');
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
<script type="text/javascript">
//图片上传
		function b(file)
		{
		var MAXWIDTH  = 130;
		var MAXHEIGHT = 100;
		var div = document.getElementById('two');
		if (file.files && file.files[0])
		{
		div.innerHTML ='<img id=pic_xing1>';
		var img = document.getElementById('pic_xing1');
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
		div.innerHTML = '<img id=pic_xing1>';
		var img = document.getElementById('pic_xing1');
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
<script type="text/javascript">
//图片上传3
		function c(file)
		{
		var MAXWIDTH  = 130;
		var MAXHEIGHT = 100;
		var div = document.getElementById('three');
		if (file.files && file.files[0])
		{
		div.innerHTML ='<img id=pic_xing2>';
		var img = document.getElementById('pic_xing2');
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
		div.innerHTML = '<img id=pic_xing2';
		var img = document.getElementById('pic_xing2');
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
<script type="text/javascript">
//图片上传4
		function d(file)
		{
		var MAXWIDTH  = 130;
		var MAXHEIGHT = 100;
		var div = document.getElementById('four');
		if (file.files && file.files[0])
		{
		div.innerHTML ='<img id=pic_xing3>';
		var img = document.getElementById('pic_xing3');
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
		div.innerHTML = '<img id=pic_xing3>';
		var img = document.getElementById('pic_xing3');
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
<script type="text/javascript">
//图片上传5
		function e(file)
		{
		var MAXWIDTH  = 130;
		var MAXHEIGHT = 100;
		var div = document.getElementById('five');
		if (file.files && file.files[0])
		{
		div.innerHTML ='<img id=zzzs1>';
		var img = document.getElementById('zzzs1');
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
		div.innerHTML = '<img id=zzzs1>';
		var img = document.getElementById('zzzs1');
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
<script type="text/javascript">
//图片上传6
		function f(file)
		{
		var MAXWIDTH  = 130;
		var MAXHEIGHT = 100;
		var div = document.getElementById('six');
		if (file.files && file.files[0])
		{
		div.innerHTML ='<img id=zzzs2>';
		var img = document.getElementById('zzzs2');
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
		div.innerHTML = '<img id=zzzs2>';
		var img = document.getElementById('zzzs2');
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
<script type="text/javascript">
//图片上传7
		function g(file)
		{
		var MAXWIDTH  = 130;
		var MAXHEIGHT = 100;
		var div = document.getElementById('seven');
		if (file.files && file.files[0])
		{
		div.innerHTML ='<img id=zzzs3>';
		var img = document.getElementById('zzzs3');
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
		div.innerHTML = '<img id=zzzs3>';
		var img = document.getElementById('zzzs3');
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
<script type="text/javascript">
//图片上传8
		function h(file)
		{
		var MAXWIDTH  = 130;
		var MAXHEIGHT = 100;
		var div = document.getElementById('eight');
		if (file.files && file.files[0])
		{
		div.innerHTML ='<img id=zzzs4>';
		var img = document.getElementById('zzzs4');
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
		div.innerHTML = '<img id=zzzs4>';
		var img = document.getElementById('zzzs4');
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
<script type="text/javascript">
//图片上传9
		function i(file)
		{
		var MAXWIDTH  = 130;
		var MAXHEIGHT = 100;
		var div = document.getElementById('nine');
		if (file.files && file.files[0])
		{
		div.innerHTML ='<img id=zzzs5>';
		var img = document.getElementById('zzzs5');
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
		div.innerHTML = '<img id=zzzs5>';
		var img = document.getElementById('zzzs5');
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
<script type="text/javascript">
	
	$(".demoform").Validform();
    
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