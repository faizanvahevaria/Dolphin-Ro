
<div id="page-wrapper">

	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<p class="panel-title"><i class="fa fa-lg fa-plus"></i> Create Bill</p>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<?php echo form_open(); ?>
								<?php

								$customer_name_a = array(
										'type'	=> 'text',
										'id'	=> 'customer_name',
										'name'	=> 'customer_name',
										'class' => 'form-control',
										'placeholder' => 'Customer Name',
										'required' => '',
										'autofocus' => '',
										'value' => ''
								);
								$mobile_no_a = array(
										'type'	=> 'text',
										'id'	=> 'mobile_no',
										'name'	=> 'mobile_no',
										'class' => 'form-control',
										'placeholder' => 'Mobile No',
										'required' => ''
								);
								$address_a = array(
										'id'	=> 'address',
										'name'	=> 'address',
										'class' => 'form-control',
										'rows'	=> '3',
										'placeholder' => 'Address'
								);
								$item_name_a = array(
										'type'	=> 'text',
										'name'	=> 'item_name[]',
										'class' => 'form-control',
										'placeholder' => 'Item Name',
										'required' => ''
								);
								$qty_a = array(
										'type'	=> 'text',
										'name'	=> 'qty[]',
										'class' => 'form-control',
										'placeholder' => 'Quantity',
										'required' => ''
								);
								$model_no_a = array(
										'type'	=> 'text',
										'name'	=> 'model_no[]',
										'class' => 'form-control',
										'placeholder' => 'Model No',
										'required' => ''
								);
								$price_a = array(
										'type'	=> 'text',
										'name'	=> 'price[]',
										'class' => 'form-control',
										'placeholder' => 'Price',
										'required' => ''
								);
								$add_item_a = array(
										'type'	=> 'button',
										'name'	=> 'add_item',
										'class' => 'btn btn-primary',
										'content' => 'Add Another Item'
								);
								?>

								<div class="form-group">
									<?php	echo form_input($customer_name_a); ?>
								</div>
								<div class="form-group">
									<?php	echo form_input($mobile_no_a); ?>
								</div>
								<div class="form-group">
									<?php	echo form_textarea($address_a); ?>
								</div>
								<div class="panel panel-default panel-body ">
									<div class="form-group">
										<?php	echo form_input($item_name_a); ?>
									</div>
									<div class="form-group">
										<?php	echo form_input($qty_a); ?>
									</div>
									<div class="form-group">
										<?php	echo form_input($model_no_a); ?>
									</div>
									<div class="form-group">
										<?php	echo form_input($price_a); ?>
									</div>
									<div class="form-group text-center">
										<?php	echo form_button($add_item_a); ?>
									</div>
								</div>
								<?php echo validation_errors('<span class="error">', '</span>'); ?>
								<?php echo form_close(); ?>


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
