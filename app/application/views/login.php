<?php $this->load->view('templates/header'); ?>
	<link href="<?php echo base_url('assets/css/signin.css') ?>" rel="stylesheet">

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
				'value' => 'admin'
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
			<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Keep me logged in
				</label>
			</div>
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
<?php $this->load->view('templates/footer'); ?>