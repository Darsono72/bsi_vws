<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('/assets/css/'); ?>mycss.css?r=<?php echo rand();?>">
</head>
<body>
	<div id="container">
		<div id="body" style="height: 500px;">
			Selamat Datang di :
			<h1><?php echo $title; ?></h1>
			<center><img src="<?php echo base_url('/assets/images/'.$images.'');?>"></center>
		</div>
	</div>
</body>
</html>