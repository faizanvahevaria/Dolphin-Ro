<?php $this->load->view('templates/header'); ?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="">Create Bill</a>
				</li>>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Search <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="">Customer</a>
						</li>
						<li>
							<a href="">Bill No</a>
						</li>
						<li>
							<a href="">Model No</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="user/logout">Log Out</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>


</div>
<?php $this->load->view('templates/footer'); ?>