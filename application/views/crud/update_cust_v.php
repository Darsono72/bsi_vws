<!DOCTYPE html>
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
			<?php 
				$i=1;
				foreach($qry->result() as $rows){
			?>
			<form method="post" action="<?php echo base_url().'crud/customer/update_cust';?>">
				<label>Cust ID</label>
				<input type="text" name="cust_id" id="cust_id" value="<?php echo $rows->cust_id;?>" readonly><br>
				<label>Cust Name</label>
				<input type="text" name="cust_name" id="cust_name" value="<?php echo $rows->cust_name;?>"><br>
				<label>Cust Adress</label>
				<input type="text" name="cust_address" id="cust_address" value="<?php echo $rows->cust_address;?>"><br>
				<label>Phone</label>
				<input type="text" name="cust_phone" id="cust_phone" value="<?php echo $rows->cust_phone;?>"><br>				
				<button type="submit">SAVE</button>
			</form>
			<?php 
				};
			?>
			<hr>
			<a href="<?php echo base_url().'crud/customer';?>">ADD CUSTOMER</a>
			<a href="<?php echo base_url().'crud/customer/list_cust';?>">LIST CUSTOMER</a>
		</div>
	</div>
</body>
</html>