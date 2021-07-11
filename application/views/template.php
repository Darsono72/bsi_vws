<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('/assets/css/mycss.css?r='.rand()); ?>">
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('/assets/vendor/bootstrap/css/bootstrap.css'); ?>">

	<script type="text/javascript"> const url = '<?php echo base_url() ?>'</script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-1.12.4.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery/jquery.dataTables.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery/dataTables.bootstrap.min.js');?>"></script>

</head>
<body>
	<?php $this->load->view('layout/modal');?>
	<?php $this->load->view('layout/header');?>
	<?php $this->load->view('layout/left_menu');?>

	<div class="content">
		<div class="col-md-12 judul">
			<i class="glyphicon glyphicon-chevron-right text-danger"></i>
			<?php echo $title;?>			
		</div>
		<?php $this->load->view($page);?>
	</div>

	<?php $this->load->view('layout/footer');?>
</body>
</html>