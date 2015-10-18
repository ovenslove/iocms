<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/iocms/statics/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/iocms/statics/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/iocms/statics/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/iocms/statics/simpleboot/font-awesome/4.2.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		.length_3{width: 180px;}
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/iocms/statics/simpleboot/font-awesome/4.2.0/css/font-awesome-ie7.min.css">
	<![endif]-->
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
    <script src="/iocms/statics/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
</head>
<body class="J_scroll_fixed">
	<div class="wrap jj">
		<ul class="nav nav-tabs">
			<li><a href="<?php echo U('slidecat/index');?>">幻灯片分类</a></li>
			<li class="active"><a href="<?php echo U('slidecat/add');?>">添加幻灯片分类 </a></li>
		</ul>
		<div class="common-form">
			<form method="post" class="form-horizontal J_ajaxForm" action="<?php echo U('slidecat/add_post');?>">
				<fieldset>
					<div class="control-group">
						<label class="control-label">分类名称:</label>
						<div class="controls">
							<input type="text" class="input" name="cat_name" value="">
							<span class="must_red">*</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">分类标识:</label>
						<div class="controls">
							<input type="text" class="input" name="cat_idname" value="">
							<span class="must_red">*</span>
							<span style="margin-left: 15px;">英文字母,数字或下划线(“_”)</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">备注:</label>
						<div class="controls">
							<textarea name="cat_remark" rows="5" cols="57"><?php echo ($remark); ?></textarea>
						</div>
					</div>
				</fieldset>
				<div class="form-actions">
					<button class="btn btn-primary btn_submit J_ajax_submit_btn" type="submit">添加</button>
					<a class="btn" href="/iocms/index.php/Admin/Slidecat">返回</a>
				</div>
			</form>
		</div>
	</div>
	<script src="/iocms/statics/js/common.js"></script>
</body>
</html>