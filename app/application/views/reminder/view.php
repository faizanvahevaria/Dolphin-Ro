
<div id="page-wrapper">

	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<p class="panel-title"><i class="fa fa-lg fa-th-list"></i> Reminder List </p>

					</div>
					<div class="panel-body">

						<div class="row">
							<div class="col-lg-12">
								<div id="no-more-tables">
									<table class="table table-hover table-striped">
										<thead class="cf">
										<tr>
											<th class="numeric">Service No.</th>
											<th>Customer Name</th>
											<th class="numeric">Mobile No.</th>
											<th class="numeric">Date</th>
										</tr>
										</thead>
										<tbody>
										<?php if(count($reminder_list)): ?>
											<?php foreach($reminder_list->result() as $reminder): ?>
												<tr>
													<td data-title="Service No" class="numeric"><?php echo $reminder->sr_no; ?></td>
													<td data-title="Customer Name"><?php echo $reminder->customer_name . btn_view($reminder->bill_no); ?> </td>
													<td data-title="Mobile No." class="numeric"><?php echo $reminder->mobile_no; ?></td>
													<td data-title="Date" class="numeric"><?php echo $reminder->reminder_date; ?></td>
													<td><?php
														if($reminder->read_reminder == 0)
														{
															echo '<a href="reminder/done/' . $reminder->id . '" class="btn btn-primary">Done?</a>';
														}
														else
														{
															echo '<a href="" class="btn btn-success">Done</a>';
														}
														?></td>
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
