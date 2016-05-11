<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $meta_title; ?></title>

    <style>
        @page
        {
            size: 7in 9.25in;
            margin: 2mm 2mm 2mm 2mm;
        }
    </style>
</head>
<body>

<div style="text-align: center">
    <h1><img src="<?php echo base_url('assets/img/logo.png') ?>" style=""> H. P. Enterprise</h1>
    <h5>"Sakar Kunj", Opp. Municipal Water Tank, Near Rajput Boarding, Wadia Road, Porbandar-360575</h5>
    <h5>Mo. +91 78783 78782 Email: contactdolphinro@gmail.com</h5>
    <h4 style="text-align: center">Retail Invoice</h4>
</div>

<?php

$creceipt_row = $creceipt_list[0];
$c = count($creceipt_list);



/*
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
*/


?>


<div>
    <table style="border-collapse: collapse; text-align: center; "  border="1" width="100%" >
        <tr>
            <td colspan="2" width="40%" style="text-align: left; padding-left: 15px;">
                <div>To. <?php echo $creceipt_row->customer_name; ?></div>
                <div style="margin-left: 30px"><?php echo nl2br($creceipt_row->address); ?></div>

            </td>
            <td colspan="3" width="60%">
                <p>Bill No.: <?php echo 'HPDOL-' . sprintf("%05d",$creceipt_row->receipt_no); ?>
                &nbsp; &nbsp; &nbsp; Date: <?php echo $creceipt_row->receipt_date; ?></p>
            </td>
        </tr>
        <tr>
            <td width="8%">Sr. No.</td>
            <td width="60%">Product Details</td>
            <td width="8%">Qty.</td>
            <td width="24%">Price</td>
        </tr>
        <?php for($i=0; $i<$c; $i++) { ?>

            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $creceipt_list[$i]->item_name; ?></td>
                <td><?php echo $creceipt_list[$i]->qty; ?></td>
                <td><?php echo $creceipt_list[$i]->price; ?></td>

            </tr>
        <?php } ?>

        <tr>
            <td colspan="4" style="text-align: right">Total: <?php echo $creceipt_row->receipt_amount; ?> </td>
        </tr>
    </table>

    <br>
    <br>
    <br>
    <p style="text-align: right">Signature</p>
</div>


</body>
</html>
