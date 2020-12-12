<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('/assets/css/'); ?>mycss.css?r=<?php echo rand();?>">
</head>
<body>
	<div id="container">
		<div id="body">
			<center>
				<h1><?php echo $title; ?></h1>
				<img src="<?php echo base_url('/assets/images/'.$images);?>" height="500">
			</center>
		</div>
	</div>
</body>
</html>