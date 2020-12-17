<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('/assets/css/'); ?>mycss.css?r=<?php echo rand();?>">

	<style type="text/css">
		label { display: inline-block; width: 100px; }
	</style>
</head>
<body>
	<div id="container">
		<div id="body">
			<h1><?php echo $title; ?></h1>
			<form method="post" action="<?php echo base_url().'crud/customer/create_cust';?>">
				<label>Cust ID</label>
				<input type="text" name="cust_id" id="cust_id" value="" readonly><br>
				<label>Cust Name</label>
				<input type="text" name="cust_name" id="cust_name" value=""><br>
				<label>Cust Adress</label>
				<input type="text" name="cust_address" id="cust_address" value=""><br>
				<label>Phone</label>
				<input type="text" name="cust_phone" id="cust_phone" value=""><br>				
				<button type="submit">SAVE</button>
			</form>

			<hr>
			<a href="<?php echo base_url().'crud/customer/list_cust';?>">LIST CUSTOMER</a>
			<hr>
			<img src="<?php echo base_url('/assets/images/'.$images);?>">
		</div>
	</div>
</body>
</html>