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
        <h1 class="page-title">新增美容项目</h1>
        <ul class="breadcrumb">
            <li>美容项目管理</li>
            <li class="active">新增美容项目</li>
        </ul>
    </div>

        
        
	<div class="main-content" style="height: 1350px;">
		<form enctype="multipart/form-data" action="<?php echo U('server_detail_add_update');?>" method="post" class="demoform" >
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">项目类型</label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<select class="chzn-select form-control" name='server_id' datatype="n" nullmsg="请选择项目类型！" errormsg="请选择项目类型！">
					<option value="空">请选择</option>
						<?php if(is_array($server)): $i = 0; $__LIST__ = $server;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo['id']); ?>'><?php echo ($vo['server_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">项目名称: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="mei_name" id="mei_name" placeholder="必填项" value="" datatype="*" nullmsg="请填写项目名称！" errormsg="请填写项目名称！" >
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">项目简介: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<textarea type="text" class="form-control" name="jianjie" id="jianjie" placeholder="必填项" value=""  datatype="*" nullmsg="请填写项目简介！" errormsg="请填写项目简介！"></textarea>
				</div>
			</div>
			<div class="form-group">
			<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">原价: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="oldprice" id="oldprice" placeholder="必填项" value="" datatype="*" nullmsg="请填写原价！" errormsg="请填写原价！">
				</div>
			</div>
			<div class="form-group">
			<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">价格: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="price" id="price" placeholder="必填项" value="" datatype="*" nullmsg="请填写价格！" errormsg="请填写价格！">
				</div>
			</div>
			<div class="form-group">
			<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">销量: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="sales" id="sales" placeholder="必填项" value="" datatype="n" nullmsg="请填写销量！" errormsg="销量只能是数字！">
				</div>
			</div>
<!--*********标题图片*************************标题图片********************标题图片*********************-->
			<div class="control-group">
				<label for="insertimage"class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">标题图片:</label>
				<div class="col-md-12" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="one">
						    
						</a>
						<input id="title" name="title" class="input-medium" type="file" onChange="a(this)"  style="margin-bottom:10px; width:66px;" datatype="*" nullmsg="请上传标题图片！" errormsg="请上传标题图片！">
					</div>
				</div>
			</div>
<!--*********项目图片*************************项目图片********************项目图片*********************-->
			<div class="control-group clearfix">
				<label for="insertimage"class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">项目图片:</label>
				<div class="col-md-3" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="two">
						    
						</a>
						<input id="item1" name="item1" class="input-medium" type="file" onChange="b(this)"  style="margin-bottom:10px; width:66px;" datatype="*" nullmsg="请上传项目图片1！" errormsg="请上传项目图片1！">
					</div>
				</div>
				<div class="col-md-3" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="three">
						    
						</a>
						<input id="item2" name="item2" class="input-medium" type="file" onChange="c(this)"  style="margin-bottom:10px; width:66px;" datatype="*" nullmsg="请上传项目图片2！" errormsg="请上传项目图片2！">
					</div>
				</div>
				<div class="col-md-3" style="padding:0px 0px 10px 0px;">
					<div class="controls">
						<a id="four">
						    
						</a>
						<input id="item3" name="item3" class="input-medium" type="file" onChange="d(this)"  style="margin-bottom:10px; width:66px;" datatype="*" nullmsg="请上传项目图片3！" errormsg="请上传项目图片3！">
					</div>
				</div>
			</div>
<!--*********项目图片*************************项目图片********************项目图片*********************-->			 
            <div id="test" class="control-group clearfix">
             <input type="hidden" id="fldNum" name="fldNum"  />
            
               <!--<input type="text" name="pic1" id="pic1" />-->

              <div class="clearfix"> <label for="insertimage"class="col-md-1 control-label" style="padding:0px 0px 5px 0px;">步骤图片:</label> <span onclick="addJiheInput();" style="padding: 4px 25px;background-color: #B77D7C;color: #fafafa;font-size: 13px;font-weight: bold;border-radius: 5px; cursor: pointer;">增加</span> <span onclick="delInput();" style="padding: 4px 25px;background-color: #EABBBB;color: #fafafa;font-size: 13px;font-weight: bold;border-radius: 5px; cursor: pointer;">删除</span></div>
				<div class="col-md-2" id="test1" style="padding:0px 0px 10px 0px; margin-right: 20px;">
					<div class="controls">
						<a id="pic1">
						    
						</a>
						<input id="czbz1" name="czbz1" class="input-medium" type="file" onChange="ha(this)"  style="margin-bottom:10px; width:66px;" datatype="*" nullmsg="请上传步骤图片1！" errormsg="请上传步骤图片1">
						<input type="text" name="step_detail1" id="step_detail1" />
					</div>
				</div>
            </div>


        <script type="text/javascript">
            	  var num1=1;
            	  getNum();
            	  function addJiheInput() {
                    if (num1 < 0) {
                       num1 = 0;
                    }
                    
                    var child='<div class="col-md-2" id="test'+ ++num1+'" style="padding:0px 0px 10px 0px; margin-right: 20px;">'+
                    '<div class="controls">'+
                    '<a id="pic'+num1+'">'+
                    '</a>'+
                    '<input id="czbz'+num1+'" name="czbz'+num1+'" class="input-medium" type="file" onChange="ha(this)"'+
                    'style="margin-bottom:10px; width:66px;" datatype="*" nullmsg="请上传步骤图片'+num1+'！" '+
                    'errormsg="请上传步骤图片'+num1+'">'+
                    '<input type="text" name="step_detail'+num1+'" id="step_detail'+num1+'" />'+
                    '</div>'+
                    '</div>';
                   
                    
                     var location = $("#test");
                     location.append(child);
                     getNum();
                  }

                  function delInput() {
                    if (num1 > 1) {
                       var id = document.getElementById("test" + num1--);
                       id.parentNode.removeChild(id);
                    }
                    else
                    {                  
                       num1=1;
                    }
                     getNum();
                  }
                  function getNum(){
                  	var s=document.getElementById("fldNum");
                  	s.value=num1;
                  }
        
            //上传操作步骤图片
            function ha(file)
		     {
         var $obj = $(file);
         var s1=$obj.attr("id");
         var splitlen=s1.length-4;
         var num2=s1.substr(4,splitlen);
		 var MAXWIDTH  = 130;
		 var MAXHEIGHT = 100;

		 var div = document.getElementById("pic" + num2);
		 if (file.files && file.files[0])
		  {
		    div.innerHTML ='<img id=czbz'+num2+'>';
		    var img = document.getElementById("czbz" + num2);
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
		    div.innerHTML = '<img id=czbz'+num2+'>';
		    var img = document.getElementById("czbz" + num2);
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


<!--************产品展示**********************产品展示**********************产品展示********************-->
			
            <div id="cpdiv" class="control-group clearfix">
             <input type="hidden" id="cpnum" name="cpnum"  />
            
               <!--<input type="text" name="pic1" id="pic1" />-->

              <div class="clearfix"> <label for="insertimage"class="col-md-1 control-label" style="padding:0px 0px 5px 0px;">产品展示:</label> <span onclick="addcpdiv();"  style="padding: 4px 25px;background-color: #397084;color: #fafafa;font-size: 13px;font-weight: bold;border-radius: 5px; cursor: pointer;">增加</span> <span onclick="delcpdiv();"style=" padding: 4px 25px;background-color: #67B1CC;color: #fafafa;font-size: 13px;font-weight: bold;border-radius: 5px; cursor: pointer; ">删除</span></div>
				<div class="col-md-2" id="cpdiv1" style="padding:0px 0px 10px 0px; margin-right: 20px;">
					<div class="controls">
						<a id="cppic1">
						    
						</a>
						<input id="goods1" name="goods1" class="input-medium" type="file" onChange="UpCppic(this)"  style="margin-bottom:10px; width:66px;" datatype="*" nullmsg="请上传产品图片1！" errormsg="请上传产品图片1！">
						<input type="text" name="goods_detail1" id="goods_detail1" />
					</div>
				</div>
            </div>

        <script type="text/javascript">
            	  var num2=1;
            	  getNum2();
            	  function addcpdiv() {
                    if (num2 < 0) {
                       num2 = 0;
                    }
                    
                    var child='<div class="col-md-2" id="cpdiv'+ ++num2+'" style="padding:0px 0px 10px 0px; margin-right: 20px;">'+
                    '<div class="controls">'+
                    '<a id="cppic'+num2+'">'+
                    '</a>'+
                    '<input id="goods'+num2+'" name="goods'+num2+'" class="input-medium" type="file" onChange="UpCppic(this)"'+
                    'style="margin-bottom:10px; width:66px;" datatype="*" nullmsg="请上传产品图片'+num2+'！" '+
                    'errormsg="请上传产品图片'+num2+'">'+
                    '<input type="text" name="goods_detail'+num2+'" id="goods_detail'+num2+'" />'+
                    '</div>'+
                    '</div>';
                   
                    
                     var location = $("#cpdiv");
                     location.append(child);
                     getNum2();
                  }

                  function delcpdiv() {
                    if (num2 > 1) {
                       var id = document.getElementById("cpdiv" + num2--);
                       id.parentNode.removeChild(id);
                    }
                    else
                    {                  
                       num2=1;
                    }
                     getNum2();
                  }
                  function getNum2(){
                  	var cnum=document.getElementById("cpnum");
                  	cnum.value=num2;
                  }

        function UpCppic(file)
		     {
         var $obj = $(file);
         var s2=$obj.attr("id");
         var splitlen=s2.length-4;
         var num3=s2.substr(5,splitlen);
		 var MAXWIDTH  = 130;
		 var MAXHEIGHT = 100;

		 var div = document.getElementById("cppic" + num3);
		 if (file.files && file.files[0])
		  {
		    div.innerHTML ='<img id=goods'+num3+'>';
		    var img = document.getElementById("goods" + num3);
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
		    div.innerHTML = '<img id=goods'+num3+'>';
		    var img = document.getElementById("goods" + num3);
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


<!--*************************************************************************************************************************-->
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">服务时长(分钟): <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="timelong" id="timelong" placeholder="必填项" value="" datatype="*" nullmsg="请填写服务时长！" errormsg="请填写服务时长!">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">次数: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="cishu" id="cishu" placeholder="必填项" value=""  datatype="n" nullmsg="请填写疗程次数！" errormsg="疗程次数只能是数字！">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">适宜人群: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="people" id="people" placeholder="必填项" value="" datatype="*" nullmsg="请填写适宜人群！" errormsg="请填写适宜人群！">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">注意事项: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<textarea type="text" class="form-control" name="notice" id="notice" placeholder="必填项" value="" datatype="*" nullmsg="请填写注意事项！" errormsg="请填写注意事项！"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">上门到院类型: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<select class="form-control" name='type' id='type'>
						<option value="上门">上门</option>
						<option value="到院">到院</option>
						<option value="都可以">都可以</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">可使用积分上限: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<input type="text" class="form-control" name="jifen" id="jifen" placeholder="必填项" value=""  datatype="n" nullmsg="请填写积分上限！" errormsg="积分上限只能是数字！">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label" style="padding:0px 0px 5px 0px;">备注: <span style="color:red">*</span></label>
				<div class="col-md-6" style="padding:0px 0px 10px 0px;">
					<textarea type="text" class="form-control" name="remark" id="remark"  value="" ></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="btn-toolbar list-toolbar col-md-offset-2 col-md-10" style="margin-top:15px;margin-bottom:40px;">
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> 保 存</button>
				<a href="<?php echo U('server_detail_list');?>" class="btn btn-danger" style="margin-left: 60px;"><i class="glyphicon glyphicon-list"></i> 返回列表</a>
				</div>
			</div>
		</form>
	</div>

	


<script type="text/javascript">
//图片上传1
		function a(file)
		{
		var MAXWIDTH  = 130;
		var MAXHEIGHT = 100;
		var div = document.getElementById('one');
		if (file.files && file.files[0])
		{
		div.innerHTML ='<img id=title>';
		var img = document.getElementById('title');
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
		div.innerHTML = '<img id=title>';
		var img = document.getElementById('title');
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
//图片上传2
		function b(file)
		{
		var MAXWIDTH  = 130;
		var MAXHEIGHT = 100;
		var div = document.getElementById('two');
		if (file.files && file.files[0])
		{
		div.innerHTML ='<img id=item1>';
		var img = document.getElementById('item1');
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
		div.innerHTML = '<img id=item1>';
		var img = document.getElementById('item1');
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
		div.innerHTML ='<img id=item2>';
		var img = document.getElementById('item2');
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
		div.innerHTML = '<img id=item2';
		var img = document.getElementById('item2');
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
		div.innerHTML ='<img id=item3>';
		var img = document.getElementById('item3');
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
		div.innerHTML = '<img id=item3>';
		var img = document.getElementById('item3');
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