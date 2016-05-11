<!DOCTYPE html>
<html lang="en">

<head>

	<title><?php echo $meta_title; ?></title>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url('assets/css/signin.css') ?>" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

	<div class="container">
		<?php echo form_open('', array('class' => 'form-signin')); ?>
			<img src="<?php echo base_url('assets/img/logo.png') ?>" alt="Logo" class="center-block">
			<?php
			$username = array(
				'type'	=> 'text',
				'id'	=> 'username',
				'name'	=> 'username',
				'class' => 'form-control',
				'placeholder' => 'Username',
				'required' => '',
				'value' => $user_name
			);
			$password = array(
				'type'	=> 'password',
				'id'	=> 'password',
				'name'	=> 'password',
				'class' => 'form-control',
				'placeholder' => 'Password',
				'autofocus' => '',
				'required' => ''
			);

			echo form_input($username);
			echo form_input($password);
			?>
			<!--<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Keep me logged in
				</label>
			</div>-->
			<?php
			echo validation_errors('<span class="error">', '</span>');

			$login_button = array(
				'class' => 'btn btn-lg btn-primary btn-block',
				'type' 	=> 'submit',
				'value' => 'Login'
			);
			echo form_submit($login_button);
			?>
		<?php echo form_close(); ?>

	</div>

	<!-- jQuery -->
	<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

	<!-- Custom JavaScript -->
	<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

</body>

</html>