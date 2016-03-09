<!DOCTYPE html>
<html lang="en">

<head>

	<title><?php echo $meta_title; ?></title>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php echo base_url('assets/css/sb-admin.css'); ?>" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">



</head>

<body>
<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php echo base_url(); ?>">Dolphin RO App</a>
	</div>

	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
			<li class="active">
				<a href="<?php echo base_url(); ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>"><i class="fa fa-fw fa-table"></i> Tables</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>"><i class="fa fa-fw fa-edit"></i> Forms</a>
			</li>
			<li>
				<a href="<?php echo base_url('user/logout'); ?>"><i class="fa fa-fw fa-desktop"></i> Logout</a>
			</li>
			<li>
				<a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
			</li>
			<li>
				<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
				<ul id="demo" class="collapse">
					<li>
						<a href="#">Dropdown Item</a>
					</li>
					<li>
						<a href="#">Dropdown Item</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</nav>
<?php $this->load->view($subview); ?>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

<!-- Custom JavaScript -->
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

</body>

</html>