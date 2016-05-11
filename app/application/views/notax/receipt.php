<div id="page-wrapper" xmlns="http://www.w3.org/1999/html">



	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<p class="panel-title"><i class="fa fa-lg fa-plus"></i> Receipt for Bill No: <?php echo 'HPDOL-' . sprintf("%05d",$bill_no); ?></p>
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
										'required' => ''
								);

								//$bill_no = sprintf("%05d",$bill_no);

								$receipt_no = sprintf("%05d",$receipt_no);
								$receipt_no_a['value'] = 'HPDOLR-' . $receipt_no;

								$note_a = array(
										'id'	=> 'note',
										'name'	=> 'note',
										'class' => 'form-control',
										'rows'	=> '5',
										'placeholder' => 'Description'
								);
								$date_a = array(
										'type'	=> 'text',
										'id'	=> 'date',
										'name'	=> 'date',
										'class' => 'form-control',
										'placeholder' => 'Date',
										'required' => ''
								);

								$receipt_amount_a = array(
										'type'	=> 'number',
										'step'	=> 'any',
										'name'	=> 'receipt_amount',
										'id'	=> 'receipt_amount',
										'class' => 'form-control',
										'placeholder' => 'Receipt Amount'
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
								<div class="form-group input-group">
									<?php	echo form_input($date_a); ?>
									<label for="date" class="input-group-addon btn"><span class="glyphicon glyphicon-calendar"></span>
								</div>
								<div class="form-group">
									<?php	echo form_textarea($note_a); ?>
								</div>
								<div class="form-group">
									<?php echo form_input($receipt_amount_a); ?>
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

