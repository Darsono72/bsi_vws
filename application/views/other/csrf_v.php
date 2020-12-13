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
			<form method="post" action="<?php echo base_url().'other/csrf/create_cust';?>">
				<label>Cust ID</label>
				<input type="text" name="cust_id" value="" readonly><br>
				<label>Cust Name</label>
				<input type="text" name="cust_name" value=""><br>
				<label>Cust Adress</label>
				<input type="text" name="cust_address" value=""><br>
				
				<!-- <button type="submit">SAVE</button> -->

				<?php echo form_submit('submit', 'Submit Post!'); ?>
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
			</form>

			<hr>
			<p>
				CSRF atau Cross-Site Request Forger merupakan jenis serangan yang dilakukan dengan cara mengeksekusi perintah perintah di dalam sistem tanpa dikehendaki. CSRF dilakukan dengan memanfaatkan celah keamanan yang ada di dalam sistem.
			</p>
		</div>
	</div>
</body>
</html>




