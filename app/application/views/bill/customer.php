
<div id="page-wrapper">

	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<p class="panel-title"><i class="fa fa-lg fa-th-list"></i> Customer List <a class=" pull-right btn btn-primary" href="<?php echo base_url('bill/create') ?>">Create Bill</a> </p>

					</div>
					<div class="panel-body">

						<div class="row">
							<div class="col-lg-12">
								<div>
									<table class="table table-hover table-striped">
										<thead class="cf">
										<tr>
											<th>Customer Name</th>
										</tr>
										</thead>
										<tbody>
										<?php if(count($customer_list)): ?>
											<?php foreach($customer_list as $customer): ?>
												<tr>
													<td>
														<?php echo $customer->customer_name . btn_view($customer->bill_no); ?>&nbsp; &nbsp;
														<?php //echo btn_edit($customer->bill_no); ?> &nbsp; &nbsp;
														<?php //echo btn_delete( $customer->bill_no); ?>
													</td>
												</tr>
											<?php endforeach; ?>
										<?php endif; ?>
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
