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
			<h1><?php echo $title; ?></h1>

			<table>
				<tr>
					<th>NO</th>
					<th>CUST ID</th>
					<th>CUST NAME</th>
					<th>ADDRESS</th>
					<th>PHONE</th>
					<th colspan="2">ACTION</th>
				</tr>
				<?php 
					$i=1;
					foreach($qry->result() as $rows){
				?>
				<tr>
					<td width="40"><?php echo $i;?></td>
					<td width="80"><?php echo str_pad($rows->cust_id,5,'0',STR_PAD_LEFT);?></td>
					<td width="120"><?php echo $rows->cust_name;?></td>
					<td width="200"><?php echo $rows->cust_address;?></td>
					<td width="120"><?php echo $rows->cust_phone;?></td>
					<td width="20">
						<a href="<?php echo base_url().'crud/customer/get_customer?cust_id='.$rows->cust_id;?>">EDIT</a>
					</td>
					<td width="20">
						<a href="<?php echo base_url().'crud/customer/delete_cust?cust_id='.$rows->cust_id;?>">DEL</a>
					</td>
				</tr>
				<?php 
					$i++;
					};
				?>
			</table>

			<hr>
			<a href="<?php echo base_url().'crud/customer';?>">ADD CUSTOMER</a>
		</div>
	</div>
</body>
</html>