<div id="page-wrapper" xmlns="http://www.w3.org/1999/html">



    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title"><i class="fa fa-lg fa-plus"></i> View Cash Receipt</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php echo form_open(); ?>
                                <?php

                                //echo var_dump($creceipt_list);

                                $creceipt_row = $creceipt_list[0];


                                $creceipt_no_a = array(
                                    'type'  => 'text',
                                    'id'	=> 'creceipt_no',
                                    'name'	=> 'creceipt_no',
                                    'class' => 'form-control',
                                    'required' => '',
                                    'value'	=> 'RCPT-' . sprintf("%05d",$creceipt_row->receipt_no),
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
                                    'value' => $creceipt_row->customer_name,
                                    'disabled' => ''
                                );
                                $mobile_no_a = array(
                                    'type'	=> 'tel',
                                    'id'	=> 'mobile_no',
                                    'name'	=> 'mobile_no',
                                    'class' => 'form-control',
                                    'placeholder' => 'Mobile No',
                                    'required' => '',
                                    'value' => $creceipt_row->mobile_no,
                                    'disabled' => ''
                                );
                                $address_a = array(
                                    'id'	=> 'address',
                                    'name'	=> 'address',
                                    'class' => 'form-control',
                                    'rows'	=> '3',
                                    'placeholder' => 'Address',
                                    'value' => $creceipt_row->address,
                                    'disabled' => ''
                                );

                                // Changing receipt Date Format
                                $creceipt_row->receipt_date = date('d/m/Y', strtotime($creceipt_row->receipt_date));
                                $date_a = array(
                                    'type'	=> 'text',
                                    'id'	=> 'date',
                                    'name'	=> 'date',
                                    'class' => 'form-control',
                                    'placeholder' => 'Date',
                                    'required' => '',
                                    'value' => $creceipt_row->receipt_date,
                                    'disabled' => ''
                                );

                                $c = count($creceipt_list);
                                $items = array();
                                for($i=0; $i<$c; $i++)
                                {
                                    $items[$i] = array(
                                        array(
                                            'type'	=> 'text',
                                            'class' => 'form-control',
                                            'value' => $creceipt_list[$i]->item_name,
                                            'disabled' => ''
                                        ),
                                        array(
                                            'type'	=> 'number',
                                            'class' => 'form-control',
                                            'value' => $creceipt_list[$i]->qty,
                                            'disabled' => ''
                                        ),
                                        array(
                                            'type'	=> 'number',
                                            'class' => 'form-control',
                                            'value' => $creceipt_list[$i]->price,
                                            'disabled' => ''
                                        )
                                    );
                                }


                                /*Item 1
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
                                );*/

                                $creceipt_amount_a = array(
                                    'type'	=> 'number',
                                    'step'	=> 'any',
                                    'name'	=> 'creceipt_amount',
                                    'id'	=> 'creceipt_amount',
                                    'class' => 'form-control',
                                    'placeholder' => 'Total Cash Receipt Amount',
                                    'value' => $creceipt_row->receipt_amount,
                                    'disabled' => ''
                                );


                                ?>

                                <div class="form-group">
                                    <?php	echo form_input($creceipt_no_a); ?>
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
                                <div class="panel panel-default panel-body ">
                                <?php for($i=0; $i<$c; $i++) { ?>
                                    <div class="form-group">
                                        <label>Item <?php echo $i+1; ?>:</label>
                                        <?php	echo form_input($items[$i][0]); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php	echo form_input($items[$i][1]); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php	echo form_input($items[$i][2]); ?>
                                    </div>
                                    <?php }  ?>

                                </div>
                                <div class="form-group">
                                    <?php	echo form_input($creceipt_amount_a); ?>
                                </div>
                                <div class="form-group text-center">
                                    <!--<a class="btn btn-primary" href="<?php //echo base_url('bill/receipt/'.$creceipt_row->bill_no); ?>">Add Receipt</a>
                                    <a class="btn btn-primary" href="<?php //echo base_url('bill/edit/'.$creceipt_row->bill_no); ?>">Edit</a>
                                    -->
                                    <a class="btn btn-primary" href="<?php echo base_url('cash_receipt/receipt_pdf/'.$creceipt_row->receipt_no); ?>">Download PDF</a>

                                </div>
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


