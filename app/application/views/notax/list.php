
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
								<div id="no-more-tables">
									<table class="table table-hover table-striped">
										<thead class="cf">
										<tr>
											<th class="numeric">Bill No</th>
											<th>Customer Name</th>
											<th class="numeric">Date</th>
											<th class="numeric">Amount</th>
											<th>Action</th>
										</tr>
										</thead>
										<tbody>
										<?php if(count($bill_list)): ?>
											<?php foreach($bill_list as $bill): ?>
												<tr>
													<td data-title="Bill No" class="numeric"><?php echo $bill->bill_no; ?></td>
													<td data-title="Customer Name"><?php echo $bill->customer_name . btn_view($bill->bill_no); ?> &nbsp;&nbsp; <a href="<?php echo base_url('bill/bill_pdf/' . $bill->bill_no) ?>"><i class="fa fa-lg fa-download"></i></a> </td>
													<td data-title="Date" class="numeric"><?php echo $bill->bill_date; ?></td>
													<td data-title="Amount" class="numeric"><?php echo $bill->bill_amount; ?></td>
													<td data-title="Action">
														<?php echo btn_edit($bill->bill_no); ?> &nbsp; &nbsp;
														<?php echo btn_delete( $bill->bill_no); ?>
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
