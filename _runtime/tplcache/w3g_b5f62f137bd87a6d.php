<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-Control" content="no-cache"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
	<meta name="apple-mobile-web-app-capable" content="yes">
	<title> <?php echo ($headtitle); ?></title>
	<!--<base href="__APP__/" />-->
	<script type="text/javascript" src="__APP__/appframework.min.js"></script>
	<script type="text/javascript">
		var SITE_URL  = '<?php echo SITE_URL; ?>';
		//载入函数
	  	var U = function(url, params) {
		var website = SITE_URL+'/index.php';
		url = url.split('/');
		if(url[0]=='' || url[0]=='@')
			url[0] = APPNAME;
		if (!url[1])
			url[1] = 'Index';
		if (!url[2])
			url[2] = 'index';
		website = website+'?app='+url[0]+'&mod='+url[1]+'&act='+url[2];
		if(params) {
			params = params.join('&');
			website = website + '&' + params;
		}
		return website;
		};
		// LazyLoad.js(["js/zepto.min.js", "js/z.touch.js","js/z.ajax.js"], function(){});
	</script>
	<!--<link rel="stylesheet" href="css/touch.css?v={$site.sys_version}">-->
	<!--<link rel="stylesheet" href="css/demo.css?v=<?php echo ($site["sys_version"]); ?>">-->
	<style type="text/css">
	body{
		width: 100%;
		opacity: 0.01;
	}
	#file{
		width: 90px;
		height: 53px;
		margin: 0;
		border: 0;
	}
	</style>
</head>

<body uid="<?php echo ($_SESSION['mid']); ?>">
<form action="<?php echo U('w3g/Index/ajax_image_upload');?>" method="post" enctype="multipart/form-data">
		<input type="file" name="file" id="file" class="form-control" accept="image/gif,image.jpg,image/jpeg,image/pjpeg,image/png,image/bmp"/> 
	<div class="hide">
		<input type="text" name="attach_type" id="attach_type" value="feed_image"/>
		<input type="text" name="upload_type" id="upload_type" value="image"/>
        <button type="submit" name="submit" id="doupload" class="hide">上传</button>
	</div>
</form>
<div id="loaded" class="hide">OK</div>
<script type="text/javascript">
fType=new Array('jpg','jpeg','png','bmp','gif');
$(function(){
	$(document).on('change','#file',function(){
		// var file=$('#doupload').val();
		// var fileType=file.substring(file.lastIndexOf('.')+1).toLowerCase();
		// var if_img=false;
		// $.each(fType,function(index,item){
		// 	if(item==fileType){
		// 		if_img=true;
		// 	}
		// });
		// if(if_img){
		// 	$('#attach_type').val('feed_img').data('type','feed_img');
		// 	$('#upload_type').val('image').data('type','image');
		// }else{
		// 	$('#attach_type').val('feed_file').data('type','feed_file');
		// 	$('#upload_type').val('file').data('type','file');
		// }
        window.parent.uploading();
		$('#doupload').trigger('click');
	});
	// upload
	// $(document).on('click','doupload',function(){
	// });
});
</script>
</body>
</html>