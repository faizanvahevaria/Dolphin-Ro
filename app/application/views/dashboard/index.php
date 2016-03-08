<?php $this->load->view('templates/header'); ?>
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
					<a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
				</li>
				<li>
					<a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
				</li>
				<li>
					<a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
				</li>
				<li>
					<a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
				</li>
				<li>
					<a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
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
				<li>
					<a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
				</li>
				<li>
					<a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</nav>

	<div id="page-wrapper">

		<div class="container-fluid">


			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-th-list"></i> Bill List</h3>
						</div>
						<div class="panel-body">

							<div class="row">
								<div class="col-lg-12">
									<div class="table-responsive">
										<table class="table table-hover">
											<thead>
											<tr>
												<th>Page</th>
												<th>Visits</th>
												<th>% New Visits</th>
												<th>Revenue</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>/index.html</td>
												<td>1265</td>
												<td>32.3%</td>
												<td>$321.33</td>
											</tr>
											<tr>
												<td>/about.html</td>
												<td>261</td>
												<td>33.3%</td>
												<td>$234.12</td>
											</tr>
											<tr>
												<td>/sales.html</td>
												<td>665</td>
												<td>21.3%</td>
												<td>$16.34</td>
											</tr>
											<tr>
												<td>/blog.html</td>
												<td>9516</td>
												<td>89.3%</td>
												<td>$1644.43</td>
											</tr>
											<tr>
												<td>/404.html</td>
												<td>23</td>
												<td>34.3%</td>
												<td>$23.52</td>
											</tr>
											<tr>
												<td>/services.html</td>
												<td>421</td>
												<td>60.3%</td>
												<td>$724.32</td>
											</tr>
											<tr>
												<td>/blog/post.html</td>
												<td>1233</td>
												<td>93.2%</td>
												<td>$126.34</td>
											</tr>
											</tbody>
										</table>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->



		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view('templates/footer'); ?>