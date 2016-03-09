
<div id="page-wrapper">

	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<p class="panel-title"><i class="fa fa-lg fa-th-list"></i> Bill List <a class=" pull-right btn btn-primary" href="<?php echo base_url('bill/create') ?>">Create</a> </p>

					</div>
					<div class="panel-body">

						<div class="row">
							<div class="col-lg-12">
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
										<tr>
											<th class="col-md-1">Bill No</th>
											<th class="col-md-5">Customer Name</th>
											<th class="col-md-2">Date</th>
											<th class="col-md-2">Bill Amount</th>
											<th class="col-md-2">Action</th>
										</tr>
										</thead>
										<tbody>
										<?php if(count($bill_list)): ?>
											<?php foreach($bill_list as $bill): ?>
												<tr>
													<td><?php echo $bill->bill_no; ?></td>
													<td><?php echo $bill->customer_name; ?></td>
													<td><?php echo $bill->bill_date; ?></td>
													<td><?php echo $bill->bill_amount; ?></td>
													<td>
														<?php echo btn_edit('bill/edit/' . $bill->bill_no); ?> &nbsp;
														<?php echo btn_delete('bill/delete/' . $bill->bill_no); ?>
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
