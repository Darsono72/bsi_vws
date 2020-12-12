<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('/assets/css/'); ?>mycss.css?r=<?php echo rand();?>">
</head>
<body>
	<div id="container">
		<div id="body">
			<h1><?php echo $title; ?></h1>
			<form method="post" action="<?php echo base_url().'crud/customer/create_cust';?>">
				<table>
					<tr>
						<td>Cust ID</td>
						<td>
							<input type="text" name="cust_id" value="" readonly>
						</td>
					</tr>					
					<tr>
						<td>Cust Name</td>
						<td>
							<input type="text" name="cust_name" value="">
						</td>
					</tr>
					<tr>
						<td>Cust Adress</td>
						<td>
							<input type="text" name="cust_address" value="">
						</td>
					</tr>					
				</table>
				
				<button type="submit">SAVE</button>
			</form>
		</div>
	</div>
</body>
</html>