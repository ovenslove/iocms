<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title><?php echo ($site_seo_title); ?> <?php echo ($site_name); ?></title>
    <meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($site_seo_description); ?>">
    	
	<meta name="author" content="Think">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

   	<!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/iocms/tpl/simplebootx/Public/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/iocms/tpl/simplebootx/Public/images/favicon.ico" type="image/x-icon">
    <link href="/iocms/tpl/simplebootx/Public/simpleboot/themes/cmf/theme.min.css" rel="stylesheet">
    <link href="/iocms/tpl/simplebootx/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/iocms/tpl/simplebootx/Public/simpleboot/font-awesome/4.2.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/iocms/tpl/simplebootx/Public/simpleboot/font-awesome/4.2.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/iocms/tpl/simplebootx/Public/css/style.css" rel="stylesheet">
	<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#333}
		#main-menu-user li.user{display: none}
	</style>
	
    <!--<link href="/iocms/tpl/simplebootx/Public/css/slippry/slippry.css" rel="stylesheet">-->
    <link href="/iocms/statics/simpleboot/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>

        .collapse{
            display: inherit;
        }
        .left_banner{
            min-height: 100px;
            width: 100%;
        }
        .map_box{
            margin-top: 2%;
            width: 100%;
            /* display: flex;
             flex-direction:row ;*/
        }
        .sim_box{
            height: 250px;
            padding: 10px;
            display: inherit;
            /*width: 20%;*/



        }
        .full{
            height: 100%;
            width: 100%;
            border: 1px solid #cccccc;
            border-radius: 5px;
            padding: 10px;
            box-shadow:  0 0 18px -6px rgba(0,0,0,0.6);
            cursor: pointer;
        }
        .sim_img_link{
            display: block;
            height: 75%;
            width: 100%;
        }
        .sim_img{
            width: 100%;
            height: 100%;
            position: relative;
            top: 0;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            -webkit-transition: all 0.5s ;
        }
        .sim_img_link:hover>.sim_img{
            width: 40%;
            height: 40%;
            position: relative;
            top: 30%;
        }
        .sim_footbox{
            height: 25%;
            width: 100%;
            background: #F5F5F5;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        .sim_span_title{
            display: block;
            height: 55%;
            width: 100%;
            overflow: hidden;
            line-height: 160%;
            text-align: center;
            position: relative;
            font-size: 14px;
        }
        .sim_span_foot{
            height: 45%;
            width: 100%;
            display: block;
            margin: 0 5px;
            line-height:140%;
            position: relative;
            border-top:1px dashed #cccccc;
            font-size: 10px;
            color: #969191;
        }
        .marklabel{
            line-height: 3.2;
            cursor: pointer;
            padding: 10px;
            background: #cccccc;
            height: 20px;

        }
        .marklabel:hover{
            background: #00CC33;
        }
    </style>
</head>
<body class="body-white">
<?php echo hook('body_start');?>
<div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="/iocms/"><!--<img src="/iocms/tpl/simplebootx/Public/images/logo.png"/>-->IOCODE</a>
       <div class="nav-collapse collapse" id="main-menu">
       	<?php
 $effected_id=""; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="dropdown-menu" ; $li_class="" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
		
		<ul class="nav pull-right" id="main-menu-user">
			<li class="dropdown user login">
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	            <img src="/iocms/tpl/simplebootx//Public/images/headicon.png" class="headicon"/>
	            <span class="user-nicename"></span><b class="caret"></b></a>
	            <ul class="dropdown-menu pull-right">
	               <li><a href="<?php echo u('user/center/index');?>"><i class="fa fa-user"></i> &nbsp;个人中心</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo u('user/index/logout');?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a></li>
	            </ul>
          	</li>
          	<li class="dropdown user offline">
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	           		<img src="/iocms/tpl/simplebootx//Public/images/headicon.png" class="headicon"/>登录<b class="caret"></b>
	            </a>
	            <ul class="dropdown-menu pull-right">
	               <li><a href="<?php echo U('api/oauth/login',array('type'=>'sina'));?>"><i class="fa fa-weibo"></i> &nbsp;微博登录</a></li>
	               <li><a href="<?php echo U('api/oauth/login',array('type'=>'qq'));?>"><i class="fa fa-qq"></i> &nbsp;QQ登录</a></li>
	               <li><a href="<?php echo u('user/login/index');?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo u('user/register/index');?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
	            </ul>
          	</li>
		</ul>
		<div class="pull-right">
        	<form method="post" class="form-inline" action="<?php echo U('portal/search/index');?>" style="margin:18px 0;">
				 <input type="text" class="" placeholder="Search" name="keyword" value="<?php echo I('get.keyword');?>"/>
				 <input type="submit" class="btn btn-info" value="Go" style="margin:0"/>
			</form>
		</div>
       </div>
     </div>
   </div>
 </div>

<div class="container">
    <div class=" map_box row" style=" min-height: 300px; ">

        <div class="col-xs-12 col-sm-4 col-md-3  sim_box">
            <div class="full">
                <a href="/iocms/index.php/Home/id/222" class="sim_img_link">
                    <img src="http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg" class="sim_img"/>
                </a>
                <div class="sim_footbox">
                    <div class="sim_span_title">websimple案例展示</div>
                    <div class="sim_span_foot">
                        <span>点击(1002)</span>
                        <span>评论(120)</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-4 col-md-3  sim_box">
            <div class="full">
                <a href="/iocms/index.php/Home/id/222" class="sim_img_link">
                    <img src="http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg" class="sim_img"/>
                </a>
                <div class="sim_footbox">
                    <div class="sim_span_title">websimple案例展示</div>
                    <div class="sim_span_foot">
                        <span>点击(1002)</span>
                        <span>评论(120)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3  sim_box">
            <div class="full">
                <a href="/iocms/index.php/Home/id/222" class="sim_img_link">
                    <img src="http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg" class="sim_img"/>
                </a>
                <div class="sim_footbox">
                    <div class="sim_span_title">websimple案例展示</div>
                    <div class="sim_span_foot">
                        <span>点击(1002)</span>
                        <span>评论(120)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3  sim_box">
            <div class="full">
                <a href="/iocms/index.php/Home/id/222" class="sim_img_link">
                    <img src="http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg" class="sim_img"/>
                </a>
                <div class="sim_footbox">
                    <div class="sim_span_title">websimple案例展示</div>
                    <div class="sim_span_foot">
                        <span>点击(1002)</span>
                        <span>评论(120)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3  sim_box">
            <div class="full">
                <a href="/iocms/index.php/Home/id/222" class="sim_img_link">
                    <img src="http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg" class="sim_img"/>
                </a>
                <div class="sim_footbox">
                    <div class="sim_span_title">websimple案例展示</div>
                    <div class="sim_span_foot">
                        <span>点击(1002)</span>
                        <span>评论(120)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3  sim_box">
            <div class="full">
                <a href="/iocms/index.php/Home/id/222" class="sim_img_link">
                    <img src="http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg" class="sim_img"/>
                </a>
                <div class="sim_footbox">
                    <div class="sim_span_title">websimple案例展示</div>
                    <div class="sim_span_foot">
                        <span>点击(1002)</span>
                        <span>评论(120)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3  sim_box">
            <div class="full">
                <a href="/iocms/index.php/Home/id/222" class="sim_img_link">
                    <img src="http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg" class="sim_img"/>
                </a>
                <div class="sim_footbox">
                    <div class="sim_span_title">websimple案例展示</div>
                    <div class="sim_span_foot">
                        <span>点击(1002)</span>
                        <span>评论(120)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3  sim_box">
            <div class="full">
                <a href="/iocms/index.php/Home/id/222" class="sim_img_link">
                    <img src="http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg" class="sim_img"/>
                </a>
                <div class="sim_footbox">
                    <div class="sim_span_title">websimple案例展示</div>
                    <div class="sim_span_foot">
                        <span>点击(1002)</span>
                        <span>评论(120)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3  sim_box">
            <div class="full">
                <a href="/iocms/index.php/Home/id/222" class="sim_img_link">
                    <img src="http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg" class="sim_img"/>
                </a>
                <div class="sim_footbox">
                    <div class="sim_span_title">websimple案例展示</div>
                    <div class="sim_span_foot">
                        <span>点击(1002)</span>
                        <span>评论(120)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3  sim_box">
            <div class="full">
                <a href="/iocms/index.php/Home/id/222" class="sim_img_link">
                    <img src="http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg" class="sim_img"/>
                </a>
                <div class="sim_footbox">
                    <div class="sim_span_title">websimple案例展示</div>
                    <div class="sim_span_foot">
                        <span>点击(1002)</span>
                        <span>评论(120)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3  sim_box">
            <div class="full">
                <a href="/iocms/index.php/Home/id/222" class="sim_img_link">
                    <img src="http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg" class="sim_img"/>
                </a>
                <div class="sim_footbox">
                    <div class="sim_span_title">websimple案例展示</div>
                    <div class="sim_span_foot">
                        <span>点击(1002)</span>
                        <span>评论(120)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3  sim_box">
            <div class="full">
                <a href="/iocms/index.php/Home/id/222" class="sim_img_link">
                    <img src="http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg" class="sim_img"/>
                </a>
                <div class="sim_footbox">
                    <div class="sim_span_title">websimple案例展示</div>
                    <div class="sim_span_foot">
                        <span>点击(1002)</span>
                        <span>评论(120)</span>
                    </div>
                </div>
            </div>
        </div>







    </div>



</div>
<br><br><br>
<!-- Footer
      ================================================== -->
      <hr>
<?php echo hook('footer');?>
      <div id="footer">
        <div class="links">
        <?php $links=sp_getlinks(); ?>
        <?php if(is_array($links)): foreach($links as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>" target="<?php echo ($vo["link_target"]); ?>"><?php echo ($vo["link_name"]); ?></a><?php endforeach; endif; ?>
        </div>

      </div>
      <div id="backtotop"><i class="fa fa-arrow-circle-up"></i></div>
      <?php echo ($site_tongji); ?>


<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/iocms/",
    JS_ROOT: "statics/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/iocms/statics/js/jquery.js"></script>
    <script src="/iocms/statics/js/wind.js"></script>
    <script src="/iocms/tpl/simplebootx/Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script src="/iocms/statics/js/frontend.js"></script>
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/iocms/data/upload/avatar/"+data.user.avatar);
				}
				
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.user.login").show();
				
			}
			if(data.status==0){
				$("#main-menu-user li.user.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>



<?php echo hook('footer_end');?>
</body>
</html>