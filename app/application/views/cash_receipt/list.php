
<div id="page-wrapper">

	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<p class="panel-title"><i class="fa fa-lg fa-th-list"></i> Cash Receipt List <a class=" pull-right btn btn-primary" href="<?php echo base_url('cash_receipt/create') ?>">Create</a> </p>

					</div>
					<div class="panel-body">

						<div class="row">
							<div class="col-lg-12">
								<div id="no-more-tables">
									<table class="table table-hover table-striped">
										<thead class="cf">
										<tr>
											<th class="numeric">Receipt No</th>
											<th>Customer Name</th>
											<th class="numeric">Date</th>
											<th class="numeric">Amount</th>
											<th>Action</th>
										</tr>
										</thead>
										<tbody>
										<?php if(count($creceipt_list)): ?>
											<?php foreach($creceipt_list as $creceipt): ?>
												<tr>
													<td data-title="Receipt No" class="numeric"><?php echo $creceipt->receipt_no; ?></td>
													<td data-title="Customer Name"><?php echo $creceipt->customer_name . "&nbsp; &nbsp;" . anchor('cash_receipt/view/' . $creceipt->receipt_no, '<i class="fa fa-lg fa-eye"></i>'); ?>  &nbsp;&nbsp; <a href="<?php echo base_url('cash_receipt/creceipt_pdf/' . $creceipt->receipt_no) ?>"><i class="fa fa-lg fa-download"></i></a> </td>
													<td data-title="Date" class="numeric"><?php echo date('d/m/Y', strtotime($creceipt->receipt_date)) ; ?></td>
													<td data-title="Amount" class="numeric"><?php echo $creceipt->receipt_amount; ?></td>
													<td data-title="Action">
														<?php //echo btn_edit($creceipt->receipt_no); ?> &nbsp; &nbsp;
														<?php echo  anchor('cash_receipt/delete/' . $creceipt->receipt_no, '<i class="fa fa-lg fa-trash"></i>', array(
																'onclick' => "return confirm('Are you sure you want to delete this Record?');")); ?> &nbsp;&nbsp;
														<?php echo  anchor('cash_receipt/edit/' . $creceipt->receipt_no, '<i class="fa fa-lg fa-pencil"></i>', array()); ?>
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
