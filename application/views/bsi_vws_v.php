<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
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
			<br>
			<button class="btn btn-success"><a href="<?php echo base_url();?>master/item">ITEM MASTER</a></span></button>
			<button class="btn btn-warning"><a href="<?php echo base_url();?>crud/customer">CUSTOMER MASTER</a></span></button>
			</center>
		</div>
	</div>
</body>
</html>