<div id="page-wrapper" xmlns="http://www.w3.org/1999/html">



	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<p class="panel-title"><i class="fa fa-lg fa-plus"></i> Create Cash Receipt</p>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<?php echo form_open(); ?>
								<?php


								$receipt_no_a = array(
										'type'  => 'text',
										'id'	=> 'receipt_no',
										'name'	=> 'receipt_no',
										'class' => 'form-control',
										'required' => '',
										'value'	=> 'RCPT-'
								);

								$receipt_no = sprintf("%05d",$receipt_no);
								$receipt_no_a['value'] .= $receipt_no;

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
								$receipt_date_a = array(
										'type'	=> 'text',
										'id'	=> 'receipt_date',
										'name'	=> 'receipt_date',
										'class' => 'form-control',
										'placeholder' => 'Date',
										'required' => ''
								);


								//Item
								/*
								$item = array(
									array(
											array(
													'type'	=> 'text',
													'name'	=> 'item_name',
													'id'	=> 'item_name',
													'class' => 'form-control',
													'required' => '',
													'placeholder' => 'Item Name'
											),
											array(
													'type'	=> 'number',
													'step'	=> 'any',
													'name'	=> 'qty',
													'id'	=> 'qty',
													'class' => 'form-control',
													'required' => '',
													'placeholder' => 'Quantity'
											),
											array(
													'type'	=> 'number',
													'step'	=> 'any',
													'name'	=> 'price',
													'id'	=> 'price',
													'class' => 'form-control',
													'required' => '',
													'placeholder' => 'Price'
											)
									),array(
												array(
														'type'	=> 'text',
														'name'	=> 'item_name',
														'id'	=> 'item_name',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Item Name'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'qty',
														'id'	=> 'qty',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Quantity'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'price',
														'id'	=> 'price',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Price'
												)
										),
										array(
												array(
														'type'	=> 'text',
														'name'	=> 'item_name',
														'id'	=> 'item_name',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Item Name'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'qty',
														'id'	=> 'qty',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Quantity'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'price',
														'id'	=> 'price',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Price'
												)
										),
										array(
												array(
														'type'	=> 'text',
														'name'	=> 'item_name',
														'id'	=> 'item_name',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Item Name'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'qty',
														'id'	=> 'qty',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Quantity'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'price',
														'id'	=> 'price',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Price'
												)
										),
										array(
												array(
														'type'	=> 'text',
														'name'	=> 'item_name',
														'id'	=> 'item_name',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Item Name'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'qty',
														'id'	=> 'qty',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Quantity'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'price',
														'id'	=> 'price',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Price'
												)
										),
										array(
												array(
														'type'	=> 'text',
														'name'	=> 'item_name',
														'id'	=> 'item_name',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Item Name'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'qty',
														'id'	=> 'qty',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Quantity'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'price',
														'id'	=> 'price',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Price'
												)
										),
										array(
												array(
														'type'	=> 'text',
														'name'	=> 'item_name',
														'id'	=> 'item_name',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Item Name'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'qty',
														'id'	=> 'qty',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Quantity'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'price',
														'id'	=> 'price',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Price'
												)
										),
										array(
												array(
														'type'	=> 'text',
														'name'	=> 'item_name',
														'id'	=> 'item_name',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Item Name'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'qty',
														'id'	=> 'qty',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Quantity'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'price',
														'id'	=> 'price',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Price'
												)
										),
										array(
												array(
														'type'	=> 'text',
														'name'	=> 'item_name',
														'id'	=> 'item_name',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Item Name'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'qty',
														'id'	=> 'qty',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Quantity'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'price',
														'id'	=> 'price',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Price'
												)
										),
										array(
												array(
														'type'	=> 'text',
														'name'	=> 'item_name',
														'id'	=> 'item_name',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Item Name'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'qty',
														'id'	=> 'qty',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Quantity'
												),
												array(
														'type'	=> 'number',
														'step'	=> 'any',
														'name'	=> 'price',
														'id'	=> 'price',
														'class' => 'form-control',
														'required' => '',
														'placeholder' => 'Price'
												)
										)

								);

								*/

								$item = array();
								for( $i=0; $i<10; $i++)
								{
									$item[$i] = array(
											array(
													'type'	=> 'text',
													'name'	=> 'item_name' . ($i+1),
													'id'	=> 'item_name' . ($i+1),
													'class' => 'form-control',
													'placeholder' => 'Item Name for Item '  . ($i+1)
											),
											array(
													'type'	=> 'number',
													'step'	=> 'any',
													'name'	=> 'qty' . ($i+1),
													'id'	=> 'qty' . ($i+1),
													'class' => 'form-control',
													'placeholder' => 'Quantity for Item ' . ($i+1)
											),
											array(
													'type'	=> 'number',
													'step'	=> 'any',
													'name'	=> 'price' . ($i+1),
													'id'	=> 'price' . ($i+1),
													'class' => 'form-control',
													'placeholder' => 'Price for Item ' . ($i+1)
											)
									);
								}


								$receipt_amount_a = array(
										'type'	=> 'number',
										'step'	=> 'any',
										'name'	=> 'receipt_amount',
										'id'	=> 'receipt_amount',
										'class' => 'form-control',
										'placeholder' => 'Total Cash Receipt Amount'
								);



								$submit_a = array(
										'class' => 'btn btn-primary',
										'type' 	=> 'submit',
										'value' => 'Submit',
										'name'  => 'submit'
								);


								?>

								<div class="form-group">
									<?php	echo form_input($receipt_no_a); ?>
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
									<?php	echo form_input($receipt_date_a); ?>
									<label for="date" class="input-group-addon btn"><span class="glyphicon glyphicon-calendar"></span>
								</div>
								<div class="panel panel-default panel-body ">
									<?php for($i=0; $i<10; $i++) { ?>
									<div class="form-group">
										<label id="item<?php echo $i+1; ?>">Item <?php echo $i+1; ?>:</label>

										<?php	echo form_input($item[$i][0]); ?>
									</div>
									<div class="form-group">
										<?php	echo form_input($item[$i][1]); ?>
									</div>
									<div class="form-group">
										<?php	echo form_input($item[$i][2]); ?>
									</div>
									<?php } ?>
								</div>
								<div class="form-group">
									<?php	echo form_input($receipt_amount_a); ?>
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
	$( "#receipt_date" ).datepicker();



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
	var qty = parseFloat($('#qty1').val());
	var price = parseFloat($('#price1').val());
	if (isNaN(qty) || isNaN(price)) {
		//$('#item1').text('Both inputs must be numbers');
	} else {
		var total = qty * price;
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

var updateItem2 = function () {
	var qty = parseFloat($('#qty2').val());
	var price = parseFloat($('#price2').val());
	if (isNaN(qty) || isNaN(price)) {
		//$('#item1').text('Both inputs must be numbers');
	} else {
		var total = qty * price;
		total = total.toFixed(2);
		$('#item2').text('Item 2: ' + total + ' INR');
	}
};


// Updating price label for item 3

$('#qty3').keyup(function() {
	updateItem3();
	updateBillAmount();
});
$('#price3').keyup(function() {
	updateItem3();
	updateBillAmount();
});

var updateItem3 = function () {
	var qty = parseFloat($('#qty3').val());
	var price = parseFloat($('#price3').val());
	if (isNaN(qty) || isNaN(price)) {
		//$('#item1').text('Both inputs must be numbers');
	} else {
		var total = qty * price;
		total = total.toFixed(2);
		$('#item3').text('Item 3: ' + total + ' INR');
	}
};

// Updating price label for item 1

$('#qty4').keyup(function() {
	updateItem4();
	updateBillAmount();
});
$('#price4').keyup(function() {
	updateItem4();
	updateBillAmount();
});

var updateItem4 = function () {
	var qty = parseFloat($('#qty4').val());
	var price = parseFloat($('#price4').val());
	if (isNaN(qty) || isNaN(price)) {
		//$('#item1').text('Both inputs must be numbers');
	} else {
		var total = qty * price;
		total = total.toFixed(2);
		$('#item4').text('Item 4: ' + total + ' INR');
	}
};

// Updating price label for item 1

$('#qty5').keyup(function() {
	updateItem5();
	updateBillAmount();
});
$('#price5').keyup(function() {
	updateItem5();
	updateBillAmount();
});

var updateItem5 = function () {
	var qty = parseFloat($('#qty5').val());
	var price = parseFloat($('#price5').val());
	if (isNaN(qty) || isNaN(price)) {
		//$('#item1').text('Both inputs must be numbers');
	} else {
		var total = qty * price;
		total = total.toFixed(2);
		$('#item5').text('Item 5: ' + total + ' INR');
	}
};

// Updating price label for item 1

$('#qty6').keyup(function() {
	updateItem6();
	updateBillAmount();
});
$('#price6').keyup(function() {
	updateItem6();
	updateBillAmount();
});

var updateItem6 = function () {
	var qty = parseFloat($('#qty6').val());
	var price = parseFloat($('#price6').val());
	if (isNaN(qty) || isNaN(price)) {
		//$('#item1').text('Both inputs must be numbers');
	} else {
		var total = qty * price;
		total = total.toFixed(2);
		$('#item6').text('Item 6: ' + total + ' INR');
	}
};

// Updating price label for item 1

$('#qty7').keyup(function() {
	updateItem7();
	updateBillAmount();
});
$('#price7').keyup(function() {
	updateItem7();
	updateBillAmount();
});

var updateItem7 = function () {
	var qty = parseFloat($('#qty7').val());
	var price = parseFloat($('#price7').val());
	if (isNaN(qty) || isNaN(price)) {
		//$('#item1').text('Both inputs must be numbers');
	} else {
		var total = qty * price;
		total = total.toFixed(2);
		$('#item7').text('Item 7: ' + total + ' INR');
	}
};

// Updating price label for item 1

$('#qty8').keyup(function() {
	updateItem8();
	updateBillAmount();
});
$('#price8').keyup(function() {
	updateItem8();
	updateBillAmount();
});

var updateItem8 = function () {
	var qty = parseFloat($('#qty8').val());
	var price = parseFloat($('#price8').val());
	if (isNaN(qty) || isNaN(price)) {
		//$('#item1').text('Both inputs must be numbers');
	} else {
		var total = qty * price;
		total = total.toFixed(2);
		$('#item8').text('Item 8: ' + total + ' INR');
	}
};

// Updating price label for item 1

$('#qty9').keyup(function() {
	updateItem9();
	updateBillAmount();
});
$('#price9').keyup(function() {
	updateItem9();
	updateBillAmount();
});

var updateItem9 = function () {
	var qty = parseFloat($('#qty9').val());
	var price = parseFloat($('#price9').val());
	if (isNaN(qty) || isNaN(price)) {
		//$('#item1').text('Both inputs must be numbers');
	} else {
		var total = qty * price;
		total = total.toFixed(2);
		$('#item9').text('Item 9: ' + total + ' INR');
	}
};

// Updating price label for item 1

$('#qty10').keyup(function() {
	updateItem10();
	updateBillAmount();
});
$('#price10').keyup(function() {
	updateItem10();
	updateBillAmount();
});

var updateItem10 = function () {
	var qty = parseFloat($('#qty10').val());
	var price = parseFloat($('#price10').val());
	if (isNaN(qty) || isNaN(price)) {
		//$('#item1').text('Both inputs must be numbers');
	} else {
		var total = qty * price;
		total = total.toFixed(2);
		$('#item10').text('Item 10: ' + total + ' INR');
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

	var item3 = $('#item3').text();
	item3 = item3.replace('Item 3:', '');
	item3 = item3.replace('INR', '');
	item3 = parseFloat(item3);

	var item4 = $('#item4').text();
	item4 = item4.replace('Item 4:', '');
	item4 = item4.replace('INR', '');
	item4 = parseFloat(item4);

	var item5 = $('#item5').text();
	item5 = item5.replace('Item 5:', '');
	item5 = item5.replace('INR', '');
	item5 = parseFloat(item5);

	var item6 = $('#item6').text();
	item6 = item6.replace('Item 6:', '');
	item6 = item6.replace('INR', '');
	item6 = parseFloat(item6);

	var item7 = $('#item7').text();
	item7 = item7.replace('Item 7:', '');
	item7 = item7.replace('INR', '');
	item7 = parseFloat(item7);

	var item8 = $('#item8').text();
	item8 = item8.replace('Item 8:', '');
	item8 = item8.replace('INR', '');
	item8 = parseFloat(item8);

	var item9 = $('#item9').text();
	item9 = item9.replace('Item 9:', '');
	item9 = item9.replace('INR', '');
	item9 = parseFloat(item9);

	var item10 = $('#item10').text();
	item10 = item10.replace('Item 10:', '');
	item10 = item10.replace('INR', '');
	item10 = parseFloat(item10);


	var total;

	if (!isNaN(item1) && !isNaN(item2) && !isNaN(item3) && !isNaN(item4) && !isNaN(item5) && !isNaN(item6) && !isNaN(item7) && !isNaN(item8) && !isNaN(item9) && !isNaN(item10)) {
		total = item1 + item2 +item3 +item4 +item5 +item6 +item7 +item8 +item9 +item10;

		$('#receipt_amount').val(total.toString());
	}
	else if (!isNaN(item1) && !isNaN(item2) && !isNaN(item3) && !isNaN(item4) && !isNaN(item5) && !isNaN(item6) && !isNaN(item7) && !isNaN(item8) && !isNaN(item9)) {
		total = item1 + item2 +item3 +item4 +item5 +item6 +item7 +item8 +item9;

		$('#receipt_amount').val(total.toString());
	}
	else if (!isNaN(item1) && !isNaN(item2) && !isNaN(item3) && !isNaN(item4) && !isNaN(item5) && !isNaN(item6) && !isNaN(item7) && !isNaN(item8)) {
		total = item1 + item2 +item3 +item4 +item5 +item6 +item7 +item8;

		$('#receipt_amount').val(total.toString());
	}
	else if (!isNaN(item1) && !isNaN(item2) && !isNaN(item3) && !isNaN(item4) && !isNaN(item5) && !isNaN(item6) && !isNaN(item7)) {
		total = item1 + item2 +item3 +item4 +item5 +item6 +item7;

		$('#receipt_amount').val(total.toString());
	}
	else if (!isNaN(item1) && !isNaN(item2) && !isNaN(item3) && !isNaN(item4) && !isNaN(item5) && !isNaN(item6)) {
		total = item1 + item2 +item3 +item4 +item5 +item6;

		$('#receipt_amount').val(total.toString());
	}
	else if (!isNaN(item1) && !isNaN(item2) && !isNaN(item3) && !isNaN(item4) && !isNaN(item5)) {
		total = item1 + item2 +item3 +item4 +item5;

		$('#receipt_amount').val(total.toString());
	}
	else if (!isNaN(item1) && !isNaN(item2) && !isNaN(item3) && !isNaN(item4)) {
		total = item1 + item2 +item3 +item4;

		$('#receipt_amount').val(total.toString());
	}
	else if (!isNaN(item1) && !isNaN(item2) && !isNaN(item3)) {
		total = item1 + item2 +item3;

		$('#receipt_amount').val(total.toString());
	}
	else if (!isNaN(item1) && !isNaN(item2)) {
		total = item1 + item2;

		$('#receipt_amount').val(total.toString());
	} else if (!isNaN(item1)) {
		total = item1;

		$('#receipt_amount').val(total.toString());

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

