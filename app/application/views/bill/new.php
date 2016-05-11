<div id="page-wrapper" xmlns="http://www.w3.org/1999/html">



	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<p class="panel-title"><i class="fa fa-lg fa-plus"></i> Create Bill <a class=" pull-right btn btn-primary" href="<?php echo base_url('notax/create') ?>">No Tax Bill</a></p>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<?php echo form_open(); ?>
								<?php


								$bill_no_a = array(
										'type'  => 'text',
										'id'	=> 'bill_no',
										'name'	=> 'bill_no',
										'class' => 'form-control',
										'required' => '',
										'value'	=> 'HPDOL-'
								);

								$bill_no = sprintf("%05d",$bill_no);
								$bill_no_a['value'] .= $bill_no;

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
										'type'	=> 'tel',
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
								$date_a = array(
										'type'	=> 'text',
										'id'	=> 'date',
										'name'	=> 'date',
										'class' => 'form-control',
										'placeholder' => 'Date',
										'required' => ''
								);

								$tds_in_a = array(
										'type'	=> 'number',
										'step'	=> 'any',
										'id'	=> 'tds_in',
										'name'	=> 'tds_in',
										'class' => 'form-control',
										'placeholder' => 'TDS IN',
										'required' => ''
								);
								$tds_out_a = array(
										'type'	=> 'number',
										'step'	=> 'any',
										'id'	=> 'tds_out',
										'name'	=> 'tds_out',
										'class' => 'form-control',
										'placeholder' => 'TDS OUT',
										'required' => ''
								);
								//Item 1
								$item_name1_a = array(
										'type'	=> 'text',
										'name'	=> 'item_name1',
										'id'	=> 'item_name1',
										'class' => 'form-control',
										'required' => '',
										'placeholder' => 'Item Name for Item 1'
								);
								$qty1_a = array(
										'type'	=> 'number',
										'step'	=> 'any',
										'name'	=> 'qty1',
										'id'	=> 'qty1',
										'class' => 'form-control',
										'required' => '',
										'placeholder' => 'Quantity for Item 1'
								);
								$model_no1_a = array(
										'type'	=> 'text',
										'name'	=> 'model_no1',
										'id'	=> 'model_no1',
										'class' => 'form-control',
										'required' => '',
										'placeholder' => 'Model No for Item 1'
								);
								$price1_a = array(
										'type'	=> 'number',
										'step'	=> 'any',
										'name'	=> 'price1',
										'id'	=> 'price1',
										'class' => 'form-control',
										'required' => '',
										'placeholder' => 'Price for Item 1'
								);

								// Item 2
								$item_name2_a = array(
										'type'	=> 'text',
										'name'	=> 'item_name2',
										'id'	=> 'item_name2',
										'class' => 'form-control',
										'placeholder' => 'Item Name for Item 2'
								);
								$qty2_a = array(
										'type'	=> 'number',
										'step'	=> 'any',
										'name'	=> 'qty2',
										'id'	=> 'qty2',
										'class' => 'form-control',
										'placeholder' => 'Quantity for Item 2'
								);
								$model_no2_a = array(
										'type'	=> 'text',
										'name'	=> 'model_no2',
										'id'	=> 'model_no2',
										'class' => 'form-control',
										'placeholder' => 'Model No for Item 2'
								);
								$price2_a = array(
										'type'	=> 'number',
										'step'	=> 'any',
										'name'	=> 'price2',
										'id'	=> 'price2',
										'class' => 'form-control',
										'placeholder' => 'Price for Item 2'
								);


								$tax1_a = array(
										'type'	=> 'number',
										'step'	=> 'any',
										'name'	=> 'tax1',
										'id'	=> 'tax1',
										'class' => 'form-control',
										'placeholder' => 'Tax 1',
										'readonly' => 'readonly'
								);
								$tax2_a = array(
										'type'	=> 'number',
										'step'	=> 'any',
										'name'	=> 'tax2',
										'id'	=> 'tax2',
										'class' => 'form-control',
										'placeholder' => 'Tax 2',
										'readonly' => 'readonly'
								);
								$discount_a = array(
										'type'	=> 'number',
										'step'	=> 'any',
										'name'	=> 'discount',
										'id'	=> 'discount',
										'class' => 'form-control',
										'placeholder' => 'Discount'
								);
								$bill_amount_a = array(
										'type'	=> 'number',
										'step'	=> 'any',
										'name'	=> 'bill_amount',
										'id'	=> 'bill_amount',
										'class' => 'form-control',
										'placeholder' => 'Total Bill Amount'
								);

								$add_item_a = array(
										'type'	=> 'button',
										'name'	=> 'add_item',
										'class' => 'btn btn-primary',
										'content' => 'Add Another Item'
								);

								$submit_a = array(
										'class' => 'btn btn-primary',
										'type' 	=> 'submit',
										'value' => 'Submit',
										'name'  => 'submit'
								);


								?>

								<div class="form-group">
									<?php	echo form_input($bill_no_a); ?>
								</div>
								<div class="form-group">
									<?php	echo form_input($customer_name_a); ?>
								</div>
								<div class="form-group">
									<?php	echo form_input($mobile_no_a); ?>
								</div>
								<div class="form-group">
									<?php	echo form_textarea($address_a); ?>
								</div>
								<div class="form-group input-group">
									<?php	echo form_input($date_a); ?>
									<label for="date" class="input-group-addon btn"><span class="glyphicon glyphicon-calendar"></span>
								</div>
								<div class="form-group">
									<?php	echo form_input($tds_in_a); ?>
								</div>
								<div class="form-group">
									<?php	echo form_input($tds_out_a); ?>
								</div>
								<div class="panel panel-default panel-body ">
									<div class="form-group">
										<label id="item1">Item 1:</label>

										<?php	echo form_input($item_name1_a); ?>
									</div>
									<div class="form-group">
										<?php	echo form_input($qty1_a); ?>
									</div>
									<div class="form-group">
										<?php	echo form_input($model_no1_a); ?>
									</div>
									<div class="form-group">
										<?php	echo form_input($price1_a); ?>
									</div>
									<div class="form-group">
										<label id="item2">Item 2:</label>

										<?php	echo form_input($item_name2_a); ?>
									</div>
									<div class="form-group">
										<?php	echo form_input($qty2_a); ?>
									</div>
									<div class="form-group">
										<?php	echo form_input($model_no2_a); ?>
									</div>
									<div class="form-group">
										<?php	echo form_input($price2_a); ?>
									</div>
									<!--<div class="form-group text-center">
										<?php	echo form_button($add_item_a); ?>
									</div>-->
								</div>
								<div class="form-group">
									<?php	echo form_input($tax1_a); ?>
								</div>
								<div class="form-group">
									<?php	echo form_input($tax2_a); ?>
								</div>
								<div class="form-group">
									<?php	echo form_input($discount_a); ?>
								</div>
								<div class="form-group">
									<?php	echo form_input($bill_amount_a); ?>
								</div>
								<div class="form-group text-center">
									<?php echo form_submit($submit_a); ?>
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

<script type="text/javascript">
$(function() {
	$( "#date" ).datepicker({dateFormat: 'dd/mm/yy'});



});

// Updating price label for item 1

$('#qty1').keyup(function() {
	updateItem1();
	updateBillAmount();
});
$('#price1').keyup(function() {
	updateItem1();
	updateBillAmount();
});

var updateItem1 = function () {
	var qty1 = parseFloat($('#qty1').val());
	var price1 = parseFloat($('#price1').val());
	if (isNaN(qty1) || isNaN(price1)) {
		//$('#item1').text('Both inputs must be numbers');
	} else {
		var total = qty1 * price1;
		total = total.toFixed(2);
		$('#item1').text('Item 1: ' + total + ' INR');
	}
};
// Updating price label for item 2

$('#qty2').keyup(function() {
	updateItem2();
	updateBillAmount();
});
$('#price2').keyup(function() {
	updateItem2();
	updateBillAmount();
});

// Updating price label for item 2
$('#discount').keyup(function(){
	updateBillAmount();
});

var updateItem2 = function () {
	var qty2 = parseFloat($('#qty2').val());
	var price2 = parseFloat($('#price2').val());
	if (isNaN(qty2) || isNaN(price2)) {
		//$('#item1').text('Both inputs must be numbers');
	} else {
		var total = qty2 * price2;
		total = total.toFixed(2);
		$('#item2').text('Item 2: ' + total + ' INR');
	}
};



// Update Bill Amount
var updateBillAmount = function () {
	var item1 = $('#item1').text();
	item1 = item1.replace('Item 1:', '');
	item1 = item1.replace('INR', '');
	item1 = parseFloat(item1);

	var item2 = $('#item2').text();
	item2 = item2.replace('Item 2:', '');
	item2 = item2.replace('INR', '');
	item2 = parseFloat(item2);

	var total;

	if (!isNaN(item1) && !isNaN(item2)) {
		total = item1 + item2;
		var tax1 = total * 12.5 / 100;
		var tax2 = total * 2.5 / 100;
		total = total + tax1 +tax2;

		$('#bill_amount').val(total.toString());
		$('#tax1').val(tax1.toString());
		$('#tax2').val(tax2.toString());
	} else if (!isNaN(item1)) {
		total = item1;
		var tax1 = total * 12.5 / 100;
		var tax2 = total * 2.5 / 100;
		total = total + tax1 +tax2;

		$('#bill_amount').val(total.toString());
		$('#tax1').val(tax1.toString());
		$('#tax2').val(tax2.toString());
	} else {

	}

	var discount = $('#discount').val();
	discount = parseFloat(discount);

	if(!isNaN(discount))
	{
		var bill_amount = $('#bill_amount').val();
		bill_amount = bill_amount - discount;
		$('#bill_amount').val(bill_amount.toString());
	}
};

</script>

