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
			<li class="active"><a href="<?php echo U('slidecat/index');?>">幻灯片分类</a></li>
			<li><a href="<?php echo U('slidecat/add');?>">添加幻灯片分类 </a></li>
		</ul>
		<form method="post" class="J_ajaxForm" action="<?php echo U('term/listorders');?>">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th width="50">ID</th>
						<th>分类名称</th>
						<th>分类标识</th>
						<th>描述</th>
						<th width="120">操作</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>0</td>
						<td>默认分类</td>
						<td></td>
						<td>默认分类</td>
						<td>不允许修改</td>
					</tr>
					<?php if(is_array($slidecats)): foreach($slidecats as $key=>$vo): ?><tr>
						<td><?php echo ($vo["cid"]); ?></td>
						<td><?php echo ($vo["cat_name"]); ?></td>
						<td><?php echo ($vo["cat_idname"]); ?></td>
						<td><?php echo ($vo["cat_remark"]); ?></td>
						<td>
							<a href="<?php echo U('slidecat/edit',array('id'=>$vo['cid']));?>">修改</a>|
							<a href="<?php echo U('slidecat/delete',array('id'=>$vo['cid']));?>" class="J_ajax_del">删除</a>
						</td>
					</tr><?php endforeach; endif; ?>
				</tbody>
			</table>
		</form>
	</div>
	<script src="/iocms/statics/js/common.js?"></script>
</body>
</html>