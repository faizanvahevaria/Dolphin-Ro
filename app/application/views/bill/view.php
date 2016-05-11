<div id="page-wrapper" xmlns="http://www.w3.org/1999/html">



    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title"><i class="fa fa-lg fa-plus"></i> ViewBill</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php echo form_open(); ?>
                                <?php

                                $bill_row = $bill[0];


                                $bill_no_a = array(
                                    'type'  => 'text',
                                    'id'	=> 'bill_no',
                                    'name'	=> 'bill_no',
                                    'class' => 'form-control',
                                    'required' => '',
                                    'value'	=> 'HPDOL-' . sprintf("%05d",$bill_row->bill_no),
                                    'disabled' => ''
                                );


                                $customer_name_a = array(
                                    'type'	=> 'text',
                                    'id'	=> 'customer_name',
                                    'name'	=> 'customer_name',
                                    'class' => 'form-control',
                                    'placeholder' => 'Customer Name',
                                    'required' => '',
                                    'autofocus' => '',
                                    'value' => $bill_row->customer_name,
                                    'disabled' => ''
                                );
                                $mobile_no_a = array(
                                    'type'	=> 'tel',
                                    'id'	=> 'mobile_no',
                                    'name'	=> 'mobile_no',
                                    'class' => 'form-control',
                                    'placeholder' => 'Mobile No',
                                    'required' => '',
                                    'value' => $bill_row->mobile_no,
                                    'disabled' => ''
                                );
                                $address_a = array(
                                    'id'	=> 'address',
                                    'name'	=> 'address',
                                    'class' => 'form-control',
                                    'rows'	=> '3',
                                    'placeholder' => 'Address',
                                    'value' => $bill_row->address,
                                    'disabled' => ''
                                );

                                // Changing Bill Date Format
                                $bill_row->bill_date = date('d/m/Y', strtotime($bill_row->bill_date));
                                $date_a = array(
                                    'type'	=> 'text',
                                    'id'	=> 'date',
                                    'name'	=> 'date',
                                    'class' => 'form-control',
                                    'placeholder' => 'Date',
                                    'required' => '',
                                    'value' => $bill_row->bill_date,
                                    'disabled' => ''
                                );

                                $tds_in_a = array(
                                    'type'	=> 'number',
                                    'step'	=> 'any',
                                    'id'	=> 'tds_in',
                                    'name'	=> 'tds_in',
                                    'class' => 'form-control',
                                    'placeholder' => 'TDS IN',
                                    'required' => '',
                                    'value' => $bill_row->tds_in,
                                    'disabled' => ''
                                );
                                $tds_out_a = array(
                                    'type'	=> 'number',
                                    'step'	=> 'any',
                                    'id'	=> 'tds_out',
                                    'name'	=> 'tds_out',
                                    'class' => 'form-control',
                                    'placeholder' => 'TDS OUT',
                                    'required' => '',
                                    'value' => $bill_row->tds_out,
                                    'disabled' => ''
                                );
                                //Item 1
                                $item_name1_a = array(
                                    'type'	=> 'text',
                                    'name'	=> 'item_name1',
                                    'id'	=> 'item_name1',
                                    'class' => 'form-control',
                                    'required' => '',
                                    'placeholder' => 'Item Name for Item 1',
                                    'value' => $item[0]->item_name,
                                    'disabled' => ''
                                );
                                $qty1_a = array(
                                    'type'	=> 'number',
                                    'step'	=> 'any',
                                    'name'	=> 'qty1',
                                    'id'	=> 'qty1',
                                    'class' => 'form-control',
                                    'required' => '',
                                    'placeholder' => 'Quantity for Item 1',
                                    'value' => $item[0]->qty,
                                    'disabled' => ''
                                );
                                $model_no1_a = array(
                                    'type'	=> 'text',
                                    'name'	=> 'model_no1',
                                    'id'	=> 'model_no1',
                                    'class' => 'form-control',
                                    'required' => '',
                                    'placeholder' => 'Model No for Item 1',
                                    'value' => $item[0]->model_no,
                                    'disabled' => ''
                                );
                                $price1_a = array(
                                    'type'	=> 'number',
                                    'step'	=> 'any',
                                    'name'	=> 'price1',
                                    'id'	=> 'price1',
                                    'class' => 'form-control',
                                    'required' => '',
                                    'placeholder' => 'Price for Item 1',
                                    'value' => $item[0]->price,
                                    'disabled' => ''
                                );

                                // Item 2
                                if(count($item) == 2) {
                                    $item_name2_a = array(
                                        'type' => 'text',
                                        'name' => 'item_name2',
                                        'id' => 'item_name2',
                                        'class' => 'form-control',
                                        'placeholder' => 'Item Name for Item 2',
                                        'value' => $item[1]->item_name,
                                        'disabled' => ''
                                    );
                                    $qty2_a = array(
                                        'type' => 'number',
                                        'step' => 'any',
                                        'name' => 'qty2',
                                        'id' => 'qty2',
                                        'class' => 'form-control',
                                        'placeholder' => 'Quantity for Item 2',
                                        'value' => $item[1]->qty,
                                        'disabled' => ''
                                    );
                                    $model_no2_a = array(
                                        'type' => 'text',
                                        'name' => 'model_no2',
                                        'id' => 'model_no2',
                                        'class' => 'form-control',
                                        'placeholder' => 'Model No for Item 2',
                                        'value' => $item[1]->model_no,
                                        'disabled' => ''
                                    );
                                    $price2_a = array(
                                        'type' => 'number',
                                        'step' => 'any',
                                        'name' => 'price2',
                                        'id' => 'price2',
                                        'class' => 'form-control',
                                        'placeholder' => 'Price for Item 2',
                                        'value' => $item[1]->price,
                                        'disabled' => ''
                                    );
                                }

                                $tax1_a = array(
                                    'type'	=> 'number',
                                    'step'	=> 'any',
                                    'name'	=> 'tax1',
                                    'id'	=> 'tax1',
                                    'class' => 'form-control',
                                    'placeholder' => 'Tax 1',
                                    'readonly' => 'readonly',
                                    'value' => $bill_row->tax1,
                                    'disabled' => ''
                                );
                                $tax2_a = array(
                                    'type'	=> 'number',
                                    'step'	=> 'any',
                                    'name'	=> 'tax2',
                                    'id'	=> 'tax2',
                                    'class' => 'form-control',
                                    'placeholder' => 'Tax 2',
                                    'readonly' => 'readonly',
                                    'value' => $bill_row->tax2,
                                    'disabled' => ''
                                );
                                $discount_a = array(
                                    'type'	=> 'number',
                                    'step'	=> 'any',
                                    'name'	=> 'discount',
                                    'id'	=> 'discount',
                                    'class' => 'form-control',
                                    'placeholder' => 'Discount',
                                    'value' => $bill_row->discount,
                                    'disabled' => ''
                                );
                                $bill_amount_a = array(
                                    'type'	=> 'number',
                                    'step'	=> 'any',
                                    'name'	=> 'bill_amount',
                                    'id'	=> 'bill_amount',
                                    'class' => 'form-control',
                                    'placeholder' => 'Total Bill Amount',
                                    'value' => $bill_row->bill_amount,
                                    'disabled' => ''
                                );

                                $add_receipt_a = array(
                                    'type'	=> 'button',
                                    'name'	=> 'add_receipt',
                                    'class' => 'btn btn-primary',
                                    'content' => 'Add Receipt'
                                );

                                $submit_a = array(
                                    'class' => 'btn btn-primary',
                                    'type' 	=> 'submit',
                                    'value' => 'Submit',
                                    'name'  => 'submit',
                                    'disabled' => ''
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
                                    <?php if(count($item) == 2) {  ?>
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
                                    <?php } ?>
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
                                    <a class="btn btn-primary" href="<?php echo base_url('bill/receipt/'.$bill_row->bill_no); ?>">Add Receipt</a>
                                    <a class="btn btn-primary" href="<?php echo base_url('bill/edit/'.$bill_row->bill_no); ?>">Edit</a>
                                    <a class="btn btn-primary" href="<?php echo base_url('bill/bill_pdf/'.$bill_row->bill_no); ?>">Download PDF</a>

                                </div>
                                <?php echo validation_errors('<span class="error">', '</span>'); ?>
                                <?php echo form_close(); ?>

                                <hr><h4 class="text-center">Service Receipts</h4>
                                <?php foreach($receipts as $receipt) { ?>
                                    <div class="panel panel-default panel-body ">
                                        <?php echo form_open(); ?>
                                        <?php


                                        $receipt_no_a = array(
                                            'type'  => 'text',
                                            'id'	=> 'receipt_no',
                                            'name'	=> 'receipt_no',
                                            'class' => 'form-control',
                                            'required' => '',
                                            'disabled' => '',
                                            'value' => 'HPDOLR-' . sprintf("%05d",$receipt->receipt_no)
                                        );

                                        $note_a = array(
                                            'id'	=> 'note',
                                            'name'	=> 'note',
                                            'class' => 'form-control',
                                            'rows'	=> '5',
                                            'placeholder' => 'Description',
                                            'disabled' => '',
                                            'value' => $receipt->note
                                        );
                                        $date_a = array(
                                            'type'	=> 'text',
                                            'id'	=> 'date',
                                            'name'	=> 'date',
                                            'class' => 'form-control',
                                            'placeholder' => 'Date',
                                            'required' => '',
                                            'disabled' => '',
                                            'value' => date('d/m/Y', strtotime($receipt->receipt_date))
                                        );

                                        $receipt_amount_a = array(
                                            'type'	=> 'number',
                                            'step'	=> 'any',
                                            'name'	=> 'receipt_amount',
                                            'id'	=> 'receipt_amount',
                                            'class' => 'form-control',
                                            'placeholder' => 'Receipt Amount',
                                            'disabled' => '',
                                            'value' => $receipt->receipt_amount
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
                                            <a class="btn btn-primary" href="<?php echo base_url('bill/delete_receipt/' . $receipt->receipt_no); ?>" onclick="return confirm('Are you sure you want to delete this Record?');">Delete</a>
                                        </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                <?php } ?>
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


