<?php
/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 07-03-16
 * Time: PM 08:24
 */


class Cash_receipt extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cash_receipt_m');
    }

    public function create()
    {
        if($this->input->post('submit'))
        {
            $this->data['post'] = $this->input->post(NULL, FALSE);

            // Filter Cash Receipt
            $creceipt = array();
            $creceipt['receipt_no'] = str_replace('RCPT-', '', $this->input->post('receipt_no'));
            $creceipt['customer_name'] = trim($this->data['post']['customer_name']);
            $creceipt['mobile_no'] = trim($this->data['post']['mobile_no']);
            $creceipt['address'] = trim($this->data['post']['address']);
            $creceipt['receipt_date'] = date('Y-m-d', strtotime(str_replace('/', '-', $this->data['post']['receipt_date'])));
            $creceipt['receipt_amount'] = intval($this->data['post']['receipt_amount']);

            $this->cash_receipt_m->save($creceipt);


            // Filter Items
            $item1 = array();
            $item1['sr_no'] = 1;
            $item1['receipt_no'] = $creceipt['receipt_no'];
            $item1['item_name'] = trim($this->data['post']['item_name1']);
            $item1['qty'] = intval($this->data['post']['qty1']);
            $item1['price'] = intval($this->data['post']['price1']);

            $this->cash_receipt_m->save_item($item1);

            if(isset($this->data['post']['item_name2']) && isset($this->data['post']['qty2']) && isset($this->data['post']['price2']))
            {
                if( $this->data['post']['item_name2'] != "" && $this->data['post']['qty2'] != "" && $this->data['post']['price2'] != "")
                {
                    $item2 = array();
                    $item2['sr_no'] = 2;
                    $item2['receipt_no'] = $creceipt['receipt_no'];
                    $item2['item_name'] = trim($this->data['post']['item_name2']);
                    $item2['qty'] = intval($this->data['post']['qty2']);
                    $item2['price'] = intval($this->data['post']['price2']);

                    $this->cash_receipt_m->save_item($item2);
                }
            }

            if(isset($this->data['post']['item_name3']) && isset($this->data['post']['qty3']) && isset($this->data['post']['price3']))
            {
                if( $this->data['post']['item_name3'] != "" && $this->data['post']['qty3'] != "" && $this->data['post']['price3'] != "")
                {
                    $item3 = array();
                    $item3['sr_no'] = 3;
                    $item3['receipt_no'] = $creceipt['receipt_no'];
                    $item3['item_name'] = trim($this->data['post']['item_name3']);
                    $item3['qty'] = intval($this->data['post']['qty3']);
                    $item3['price'] = intval($this->data['post']['price3']);

                    $this->cash_receipt_m->save_item($item3);
                }
            }

            if(isset($this->data['post']['item_name4']) && isset($this->data['post']['qty4']) && isset($this->data['post']['price4']))
            {
                if( $this->data['post']['item_name4'] != "" && $this->data['post']['qty4'] != "" && $this->data['post']['price4'] != "")
                {
                    $item4 = array();
                    $item4['sr_no'] = 4;
                    $item4['receipt_no'] = $creceipt['receipt_no'];
                    $item4['item_name'] = trim($this->data['post']['item_name4']);
                    $item4['qty'] = intval($this->data['post']['qty4']);
                    $item4['price'] = intval($this->data['post']['price4']);

                    $this->cash_receipt_m->save_item($item4);
                }
            }

            if(isset($this->data['post']['item_name5']) && isset($this->data['post']['qty5']) && isset($this->data['post']['price5']))
            {
                if( $this->data['post']['item_name5'] != "" && $this->data['post']['qty5'] != "" && $this->data['post']['price5'] != "")
                {
                    $item5 = array();
                    $item5['sr_no'] = 5;
                    $item5['receipt_no'] = $creceipt['receipt_no'];
                    $item5['item_name'] = trim($this->data['post']['item_name5']);
                    $item5['qty'] = intval($this->data['post']['qty5']);
                    $item5['price'] = intval($this->data['post']['price5']);

                    $this->cash_receipt_m->save_item($item5);
                }
            }

            if(isset($this->data['post']['item_name6']) && isset($this->data['post']['qty6']) && isset($this->data['post']['price6']))
            {
                if( $this->data['post']['item_name6'] != "" && $this->data['post']['qty6'] != "" && $this->data['post']['price6'] != "")
                {
                    $item6 = array();
                    $item6['sr_no'] = 6;
                    $item6['receipt_no'] = $creceipt['receipt_no'];
                    $item6['item_name'] = trim($this->data['post']['item_name6']);
                    $item6['qty'] = intval($this->data['post']['qty6']);
                    $item6['price'] = intval($this->data['post']['price6']);

                    $this->cash_receipt_m->save_item($item6);
                }
            }

            if(isset($this->data['post']['item_name7']) && isset($this->data['post']['qty7']) && isset($this->data['post']['price7']))
            {
                if( $this->data['post']['item_name7'] != "" && $this->data['post']['qty7'] != "" && $this->data['post']['price7'] != "")
                {
                    $item7 = array();
                    $item7['sr_no'] = 7;
                    $item7['receipt_no'] = $creceipt['receipt_no'];
                    $item7['item_name'] = trim($this->data['post']['item_name7']);
                    $item7['qty'] = intval($this->data['post']['qty7']);
                    $item7['price'] = intval($this->data['post']['price7']);

                    $this->cash_receipt_m->save_item($item7);
                }
            }

            if(isset($this->data['post']['item_name8']) && isset($this->data['post']['qty8']) && isset($this->data['post']['price8']))
            {
                if( $this->data['post']['item_name8'] != "" && $this->data['post']['qty8'] != "" && $this->data['post']['price8'] != "")
                {
                    $item8 = array();
                    $item8['sr_no'] = 8;
                    $item8['receipt_no'] = $creceipt['receipt_no'];
                    $item8['item_name'] = trim($this->data['post']['item_name8']);
                    $item8['qty'] = intval($this->data['post']['qty8']);
                    $item8['price'] = intval($this->data['post']['price8']);

                    $this->cash_receipt_m->save_item($item8);
                }
            }

            if(isset($this->data['post']['item_name9']) && isset($this->data['post']['qty9']) && isset($this->data['post']['price9']))
            {
                if( $this->data['post']['item_name9'] != "" && $this->data['post']['qty9'] != "" && $this->data['post']['price9'] != "")
                {
                    $item9 = array();
                    $item9['sr_no'] = 9;
                    $item9['receipt_no'] = $creceipt['receipt_no'];
                    $item9['item_name'] = trim($this->data['post']['item_name9']);
                    $item9['qty'] = intval($this->data['post']['qty9']);
                    $item9['price'] = intval($this->data['post']['price9']);

                    $this->cash_receipt_m->save_item($item9);
                }
            }

            if(isset($this->data['post']['item_name10']) && isset($this->data['post']['qty10']) && isset($this->data['post']['price10']))
            {
                if( $this->data['post']['item_name10'] != "" && $this->data['post']['qty10'] != "" && $this->data['post']['price10'] != "")
                {
                    $item10 = array();
                    $item10['sr_no'] = 10;
                    $item10['receipt_no'] = $creceipt['receipt_no'];
                    $item10['item_name'] = trim($this->data['post']['item_name10']);
                    $item10['qty'] = intval($this->data['post']['qty10']);
                    $item10['price'] = intval($this->data['post']['price10']);

                    $this->cash_receipt_m->save_item($item10);
                }
            }

            redirect('cash_receipt/view/' . $creceipt['receipt_no']);

        }

        $this->data['receipt_no'] = $this->cash_receipt_m->get_receipt_no() + 1;

        $this->data['meta_title'] = 'New Cash Receipt';
        $this->data['subview'] = 'cash_receipt/new';
        $this->load->view('_main', $this->data);
    }

    public function edit($receipt_no)
    {
        if($this->input->post('submit'))
        {
            $this->data['post'] = $this->input->post(NULL, FALSE);

            // Filter Cash Receipt
            $creceipt = array();
            $creceipt['receipt_no'] = $receipt_no;
            $creceipt['customer_name'] = trim($this->data['post']['customer_name']);
            $creceipt['mobile_no'] = trim($this->data['post']['mobile_no']);
            $creceipt['address'] = trim($this->data['post']['address']);
            $creceipt['receipt_date'] = date('Y-m-d', strtotime(str_replace('/', '-', $this->data['post']['receipt_date'])));
            $creceipt['receipt_amount'] = intval($this->data['post']['receipt_amount']);

            $this->cash_receipt_m->save($creceipt, $receipt_no);


            // Filter Items
            $item1 = array();
            $item1['sr_no'] = 1;
            $item1['receipt_no'] = $creceipt['receipt_no'];
            $item1['item_name'] = trim($this->data['post']['item_name1']);
            $item1['qty'] = intval($this->data['post']['qty1']);
            $item1['price'] = intval($this->data['post']['price1']);

            $this->cash_receipt_m->save_item($item1,intval($this->data['post']['id1']));

            if(isset($this->data['post']['item_name2']) && isset($this->data['post']['qty2']) && isset($this->data['post']['price2']))
            {
                if( $this->data['post']['item_name2'] != "" && $this->data['post']['qty2'] != "" && $this->data['post']['price2'] != "")
                {
                    $item2 = array();
                    $item2['sr_no'] = 2;
                    $item2['receipt_no'] = $creceipt['receipt_no'];
                    $item2['item_name'] = trim($this->data['post']['item_name2']);
                    $item2['qty'] = intval($this->data['post']['qty2']);
                    $item2['price'] = intval($this->data['post']['price2']);


                    if(isset($this->data['post']['id2'])) {
                        $this->cash_receipt_m->save_item($item2, intval($this->data['post']['id2']));
                    }
                    else {
                        $this->cash_receipt_m->save_item($item2);
                    }
                }
            }

            if(isset($this->data['post']['item_name3']) && isset($this->data['post']['qty3']) && isset($this->data['post']['price3']))
            {
                if( $this->data['post']['item_name3'] != "" && $this->data['post']['qty3'] != "" && $this->data['post']['price3'] != "")
                {
                    $item3 = array();
                    $item3['sr_no'] = 3;
                    $item3['receipt_no'] = $creceipt['receipt_no'];
                    $item3['item_name'] = trim($this->data['post']['item_name3']);
                    $item3['qty'] = intval($this->data['post']['qty3']);
                    $item3['price'] = intval($this->data['post']['price3']);

                    if(isset($this->data['post']['id2'])) {
                        $this->cash_receipt_m->save_item($item3, intval($this->data['post']['id3']));
                    }
                    else {
                        $this->cash_receipt_m->save_item($item3);
                    }
                }
            }

            if(isset($this->data['post']['item_name4']) && isset($this->data['post']['qty4']) && isset($this->data['post']['price4']))
            {
                if( $this->data['post']['item_name4'] != "" && $this->data['post']['qty4'] != "" && $this->data['post']['price4'] != "")
                {
                    $item4 = array();
                    $item4['sr_no'] = 4;
                    $item4['receipt_no'] = $creceipt['receipt_no'];
                    $item4['item_name'] = trim($this->data['post']['item_name4']);
                    $item4['qty'] = intval($this->data['post']['qty4']);
                    $item4['price'] = intval($this->data['post']['price4']);

                    if(isset($this->data['post']['id4'])) {
                        $this->cash_receipt_m->save_item($item4, intval($this->data['post']['id4']));
                    }
                    else {
                        $this->cash_receipt_m->save_item($item4);
                    }
                }
            }

            if(isset($this->data['post']['item_name5']) && isset($this->data['post']['qty5']) && isset($this->data['post']['price5']))
            {
                if( $this->data['post']['item_name5'] != "" && $this->data['post']['qty5'] != "" && $this->data['post']['price5'] != "")
                {
                    $item5 = array();
                    $item5['sr_no'] = 5;
                    $item5['receipt_no'] = $creceipt['receipt_no'];
                    $item5['item_name'] = trim($this->data['post']['item_name5']);
                    $item5['qty'] = intval($this->data['post']['qty5']);
                    $item5['price'] = intval($this->data['post']['price5']);

                    if(isset($this->data['post']['id5'])) {
                        $this->cash_receipt_m->save_item($item5, intval($this->data['post']['id5']));
                    }
                    else {
                        $this->cash_receipt_m->save_item($item5);
                    }
                }
            }

            if(isset($this->data['post']['item_name6']) && isset($this->data['post']['qty6']) && isset($this->data['post']['price6']))
            {
                if( $this->data['post']['item_name6'] != "" && $this->data['post']['qty6'] != "" && $this->data['post']['price6'] != "")
                {
                    $item6 = array();
                    $item6['sr_no'] = 6;
                    $item6['receipt_no'] = $creceipt['receipt_no'];
                    $item6['item_name'] = trim($this->data['post']['item_name6']);
                    $item6['qty'] = intval($this->data['post']['qty6']);
                    $item6['price'] = intval($this->data['post']['price6']);

                    if(isset($this->data['post']['id6'])) {
                        $this->cash_receipt_m->save_item($item6, intval($this->data['post']['id6']));
                    }
                    else {
                        $this->cash_receipt_m->save_item($item6);
                    }
                }
            }

            if(isset($this->data['post']['item_name7']) && isset($this->data['post']['qty7']) && isset($this->data['post']['price7']))
            {
                if( $this->data['post']['item_name7'] != "" && $this->data['post']['qty7'] != "" && $this->data['post']['price7'] != "")
                {
                    $item7 = array();
                    $item7['sr_no'] = 7;
                    $item7['receipt_no'] = $creceipt['receipt_no'];
                    $item7['item_name'] = trim($this->data['post']['item_name7']);
                    $item7['qty'] = intval($this->data['post']['qty7']);
                    $item7['price'] = intval($this->data['post']['price7']);


                    if(isset($this->data['post']['id7'])) {
                        $this->cash_receipt_m->save_item($item7, intval($this->data['post']['id7']));
                    }
                    else {
                        $this->cash_receipt_m->save_item($item7);
                    }
                }
            }

            if(isset($this->data['post']['item_name8']) && isset($this->data['post']['qty8']) && isset($this->data['post']['price8']))
            {
                if( $this->data['post']['item_name8'] != "" && $this->data['post']['qty8'] != "" && $this->data['post']['price8'] != "")
                {
                    $item8 = array();
                    $item8['sr_no'] = 8;
                    $item8['receipt_no'] = $creceipt['receipt_no'];
                    $item8['item_name'] = trim($this->data['post']['item_name8']);
                    $item8['qty'] = intval($this->data['post']['qty8']);
                    $item8['price'] = intval($this->data['post']['price8']);

                    if(isset($this->data['post']['id8'])) {
                        $this->cash_receipt_m->save_item($item8, intval($this->data['post']['id8']));
                    }
                    else {
                        $this->cash_receipt_m->save_item($item8);
                    }
                }
            }

            if(isset($this->data['post']['item_name9']) && isset($this->data['post']['qty9']) && isset($this->data['post']['price9']))
            {
                if( $this->data['post']['item_name9'] != "" && $this->data['post']['qty9'] != "" && $this->data['post']['price9'] != "")
                {
                    $item9 = array();
                    $item9['sr_no'] = 9;
                    $item9['receipt_no'] = $creceipt['receipt_no'];
                    $item9['item_name'] = trim($this->data['post']['item_name9']);
                    $item9['qty'] = intval($this->data['post']['qty9']);
                    $item9['price'] = intval($this->data['post']['price9']);

                    if(isset($this->data['post']['id9'])) {
                        $this->cash_receipt_m->save_item($item9, intval($this->data['post']['id9']));
                    }
                    else {
                        $this->cash_receipt_m->save_item($item9);
                    }
                }
            }

            if(isset($this->data['post']['item_name10']) && isset($this->data['post']['qty10']) && isset($this->data['post']['price10']))
            {
                if( $this->data['post']['item_name10'] != "" && $this->data['post']['qty10'] != "" && $this->data['post']['price10'] != "")
                {
                    $item10 = array();
                    $item10['sr_no'] = 10;
                    $item10['receipt_no'] = $creceipt['receipt_no'];
                    $item10['item_name'] = trim($this->data['post']['item_name10']);
                    $item10['qty'] = intval($this->data['post']['qty10']);
                    $item10['price'] = intval($this->data['post']['price10']);


                    if(isset($this->data['post']['id10'])) {
                        $this->cash_receipt_m->save_item($item10, intval($this->data['post']['id10']));
                    }
                    else {
                        $this->cash_receipt_m->save_item($item10);
                    }
                }
            }

            redirect('cash_receipt/view/' . $creceipt['receipt_no']);

        }

        $clause = array(
            'select' => 'cash_receipt.receipt_no, receipt_date, receipt_amount, customer_name, mobile_no, address, item_name, sr_no, qty, price, id',
            'join' => 'citem_list',
            'on' => 'citem_list.receipt_no = cash_receipt.receipt_no',
            'where' => 'cash_receipt.receipt_no = ' . $receipt_no,
            'type' => ''
        );

        $this->data['creceipt_list'] = $this->cash_receipt_m->get_join($clause);
        $this->data['receipt_no'] = $receipt_no;
        $this->data['meta_title'] = 'Edit Cash Receipt';
        $this->data['subview'] = 'cash_receipt/edit';
        $this->load->view('_main', $this->data);
    }



    public function view($receipt_no)
    {
        $clause = array(
            'select' => 'cash_receipt.receipt_no, receipt_date, receipt_amount, customer_name, mobile_no, address, item_name, sr_no, qty, price, id',
            'join' => 'citem_list',
            'on' => 'citem_list.receipt_no = cash_receipt.receipt_no',
            'where' => 'cash_receipt.receipt_no = ' . $receipt_no,
            'type' => ''
        );

        $this->data['creceipt_list'] = $this->cash_receipt_m->get_join($clause);
        $this->data['subview'] = 'cash_receipt/view';
        $this->data['meta_title'] = 'Cash Receipt';
        //echo "<pre>";
        //print_r($this->data['bill_list']);
        //echo "</pre>";
        $this->load->view('_main', $this->data);


    }

    public function view_list()
    {
        $clause = array(
            'select' => 'cash_receipt.receipt_no, receipt_date, receipt_amount, customer_name',
            'join' => 'citem_list',
            'on' => 'cash_receipt.receipt_no = citem_list.receipt_no',
            'where' => '',
            'type' => ''
        );

        $this->data['creceipt_list'] = $this->cash_receipt_m->get();
        $this->data['subview'] = 'cash_receipt/list';
        $this->data['meta_title'] = 'Cash Receipt List';
        $this->load->view('_main', $this->data);

    }


    public function delete($id)
    {
        $this->cash_receipt_m->delete($id);
        redirect('cash_receipt/view_list');
    }

    public function creceipt_pdf($receipt_no)
    {
        $this->load->library("Pdf");

        // create new PDF document
        $pdf = new TCPDF('portrait', PDF_UNIT, 'A4', true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator('Dolphin RO System');
        //$pdf->SetAuthor('Muhammad Saqlain Arif');
        //$pdf->SetTitle('TCPDF Example 001');
        //$pdf->SetSubject('TCPDF Tutorial');
        //$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // set default header data
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
        //$pdf->setFooterData(array(0,64,0), array(0,64,128));

        // set header and footer fonts
        //$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        //$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(10, 0, 10);
        //$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        //$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);



        // ---------------------------------------------------------

        // set default font subsetting mode
        $pdf->setFontSubsetting(true);

        // Set font
        // dejavusans is a UTF-8 Unicode font, if you only need to
        // print standard ASCII chars, you can use core fonts like
        // helvetica or times to reduce file size.
        $pdf->SetFont('helvetica', '', 13, '', true);

        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();
        // set text shadow effect
        //$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));



        $clause = array(
            'select' => 'cash_receipt.receipt_no, receipt_date, receipt_amount, customer_name, mobile_no, address, item_name, sr_no, qty, price',
            'join' => 'citem_list',
            'on' => 'citem_list.receipt_no = cash_receipt.receipt_no',
            'where' => 'cash_receipt.receipt_no = ' . $receipt_no,
            'type' => ''
        );


        $this->data['creceipt_list'] = $this->cash_receipt_m->get_join($clause);
        $this->data['subview'] = 'cash_receipt/view';
        $this->data['meta_title'] = 'Cash Receipt';
        //echo "<pre>";
        //print_r($this->data['bill_list']);
        //echo "</pre>";
        $this->load->view('_main', $this->data);


        //$this->data['receipts'] = $this->bill_m->get_receipt($bill_no);

        //creating pdf
        $html = $this->load->view('cash_receipt/cash_receipt_pdf', $this->data, true);

        // Print text using writeHTMLCell()
        $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

        // ---------------------------------------------------------

        $file_name = 'RCPT-' . sprintf("%05d",$receipt_no) . '.pdf';
        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.
        $bill_pdf = $pdf->Output( __DIR__ . '/../../pdf/' . $file_name, 'FD');
        //echo __DIR__;


        //sending email
        /*
        $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'contactdolphinro@gmail.com',
                'smtp_pass' => 'Dolphin@app',
                'mailtype' => 'html',
                'charset' => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from('contactdolphinro@gmail.com', 'Paresh Bhayani');
        $this->email->to('faizanvahevaria@gmail.com');
        $this->email->reply_to('contactdolphinro@gmail.com', 'Paresh Bhayani');


        $this->email->subject('Bill');

        $message = "Please Collect your bill.";
        $this->email->message($message);
        $this->email->attach( __DIR__ . '/../../pdf/' . $file_name);
        //$this->email->send();
        if($this->email->send())
        {
            echo 'Email send.';
        }
        else
        {
            show_error($this->email->print_debugger());
        }*/

    }

}