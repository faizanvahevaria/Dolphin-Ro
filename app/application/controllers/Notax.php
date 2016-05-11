<?php
/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 07-03-16
 * Time: PM 08:23
 */

class Notax extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('bill_m');
		$this->load->model('item_m');
		$this->load->model('customer_m');
		$this->load->model('reminder_m');
	}

	public function view($bill_no)
	{


		$clause = array(
				'select' => '*',
				'join' => 'customer',
				'on' => 'customer.id = bill_list.customer_id',
				'where' => 'bill_no = ' . $bill_no,
				'type' => ''
		);

		$this->data['bill'] = $this->bill_m->get_join($clause);

		$this->data['item'] = $this->item_m->get_by(array(
				'bill_no' => $bill_no
		));

		$this->data['receipts'] = $this->bill_m->get_receipt($bill_no);

		$this->data['meta_title'] = 'Bill';
		$this->data['subview'] = 'notax/view';
		$this->load->view('_main', $this->data);
	}

	public function edit($bill_no)
	{

		if($this->input->post('submit'))
		{
			$this->data['post'] = $this->input->post(NULL, FALSE);

			// Filtering Data
			$this->data['post']['bill_no'] = str_replace('HPDOL-', '', $this->input->post('bill_no'));
			$this->data['post']['customer_id'] = intval($this->input->post('customer_id'));
			$this->data['post']['customer_name'] = trim($this->data['post']['customer_name']);
			$this->data['post']['mobile_no'] = trim($this->data['post']['mobile_no']);
			$this->data['post']['address'] = trim($this->data['post']['address']);
			$this->data['post']['date'] = date('Y-m-d', strtotime(str_replace('/', '-', $this->data['post']['date'])));
			$this->data['post']['tds_in'] = intval($this->data['post']['tds_in']);
			$this->data['post']['tds_out'] = intval($this->data['post']['tds_out']);
			(isset($this->data['post']['discount']))?
					$this->data['post']['discount'] = intval($this->data['post']['discount'])
					:$this->data['post']['discount'] = 0;
			$this->data['post']['discount'] = intval($this->data['post']['discount']);
			$this->data['post']['bill_amount'] = intval($this->data['post']['bill_amount']);
			$this->data['post']['tax1'] = intval($this->data['post']['tax1']);
			$this->data['post']['tax2'] = intval($this->data['post']['tax2']);



			// Filter Item 1
			$this->data['post']['item_id1'] = intval($this->data['post']['item_id1']);
			$this->data['post']['item_name1'] = trim($this->data['post']['item_name1']);
			$this->data['post']['model_no1'] = trim($this->data['post']['model_no1']);
			$this->data['post']['qty1'] = intval($this->data['post']['qty1']);
			$this->data['post']['price1'] = intval($this->data['post']['price1']);

			// Filter Item 2
			$this->data['post']['item2_status'] = FALSE;
			if(isset($this->data['post']['item_name2']) && isset($this->data['post']['model_no2']))
			{
				if( $this->data['post']['item_name2'] != "" && $this->data['post']['model_no2'] != "")
				{
					$this->data['post']['item_id2'] = intval($this->data['post']['item_id2']);
					$this->data['post']['item_name2'] = trim($this->data['post']['item_name2']);
					$this->data['post']['model_no2'] = trim($this->data['post']['model_no2']);
					$this->data['post']['qty2'] = intval($this->data['post']['qty2']);
					$this->data['post']['price2'] = intval($this->data['post']['price2']);
					$this->data['post']['item2_status'] = TRUE;
				}
			}


			// Insert Customer
			$customer = array(
					'customer_name' => $this->data['post']['customer_name'],
					'mobile_no'		=> $this->data['post']['mobile_no'],
					'address'		=> $this->data['post']['address']
			);
			$customer['id'] = $this->customer_m->save($customer, $this->data['post']['customer_id']);

			// Insert Bill
			$bill = array(
					'bill_no' 		=> $this->data['post']['bill_no'],
					'bill_date'		=> $this->data['post']['date'],
					'bill_amount'	=> $this->data['post']['bill_amount'],
					'customer_id'	=> $customer['id'],
					'discount'		=> $this->data['post']['discount'],
					'tax1'			=> $this->data['post']['tax1'],
					'tax2'			=> $this->data['post']['tax2'],
					'tds_in'		=> $this->data['post']['tds_in'],
					'tds_out'		=> $this->data['post']['tds_out']

			);
			$this->bill_m->save($bill, $bill['bill_no']);


			// Insert Items
			$item1 = array(
					'sr_no' 	=> '1',
					'bill_no'	=> $this->data['post']['bill_no'],
					'item_name' 	=> $this->data['post']['item_name1'],
					'qty' 	=> $this->data['post']['qty1'],
					'price' 	=> $this->data['post']['price1'],
					'model_no' 	=> $this->data['post']['model_no1'],
					'remind_every' 	=> '90'
			);
			$this->item_m->save($item1, $this->data['post']['item_id1']);


			if($this->data['post']['item2_status'])
			{
				$item2 = array(
						'sr_no' 	=> '2',
						'bill_no'	=> $this->data['post']['bill_no'],
						'item_name' 	=> $this->data['post']['item_name2'],
						'qty' 	=> $this->data['post']['qty2'],
						'price' 	=> $this->data['post']['price2'],
						'model_no' 	=> $this->data['post']['model_no2'],
						'remind_every' 	=> '90'
				);

				$this->item_m->save($item2, $this->data['post']['item_id2']);

			}

			// Saving Reminder

			$this->reminder_m->delete($bill_no);

			$date1 = date('Y-m-d', strtotime( $this->data['post']['date'] . ' + 86 days'));
			$reminder1 = array(
					'bill_no' => $bill_no,
					'sr_no'	=> 1,
					'reminder_date' => $date1,
					'customer_name' => $this->data['post']['customer_name'],
					'mobile_no' => $this->data['post']['mobile_no'],
					'read_reminder' => 0
			);
			$this->reminder_m->save($reminder1);

			/*
			$date2 =  date('Y-m-d', strtotime( $date1 . ' + 90 days'));
			$reminder2 = array(
					'bill_no' => $bill_no,
					'sr_no'	=> 2,
					'reminder_date' => $date2,
					'customer_name' => $this->data['post']['customer_name'],
					'mobile_no' => $this->data['post']['mobile_no'],
					'read_reminder' => 0
			);
			$this->reminder_m->save($reminder2);

			$date3 =  date('Y-m-d', strtotime( $date2 . ' + 90 days'));
			$reminder3 = array(
					'bill_no' => $bill_no,
					'sr_no'	=> 3,
					'reminder_date' => $date3,
					'customer_name' => $this->data['post']['customer_name'],
					'mobile_no' => $this->data['post']['mobile_no'],
					'read_reminder' => 0
			);
			$this->reminder_m->save($reminder3);

			$date4 =  date('Y-m-d', strtotime( $date3 . ' + 90 days'));
			$reminder4 = array(
					'bill_no' => $bill_no,
					'sr_no'	=> 4,
					'reminder_date' => $date4,
					'customer_name' => $this->data['post']['customer_name'],
					'mobile_no' => $this->data['post']['mobile_no'],
					'read_reminder' => 0
			);
			$this->reminder_m->save($reminder4);
			*/

			$bill['bill_no'] = intval($bill['bill_no']);
			redirect('notax/view/' . $bill['bill_no']);
		}


		// Load Bill Edit form

		$this->data['meta_title'] = 'Edit Bill';

		$clause = array(
			'select' => '*',
			'join' => 'customer',
			'on' => 'customer.id = bill_list.customer_id',
			'where' => 'bill_no = ' . $bill_no,
			'type' => ''
		);

		$this->data['bill'] = $this->bill_m->get_join($clause);
		$this->data['item'] = $this->item_m->get_by(array(
				'bill_no' => $bill_no
		));

		$this->data['subview'] = 'notax/edit';
		$this->load->view('_main', $this->data);
	}

	public function delete($id)
	{
		$this->bill_m->delete($id);
		redirect('dashboard');
	}

	public function create()
	{
		//$rules = $this->bill_m->rules;
		//$this->form_validation->set_rules($rules);
		//if($this->form_validation->run() == TRUE)
		if($this->input->post('submit'))
		{
			$this->data['post'] = $this->input->post(NULL, FALSE);

			// Filtering Data
			$bill_no = $this->data['post']['bill_no'] = str_replace('HPDOL-', '', $this->input->post('bill_no'));
			$this->data['post']['customer_name'] = trim($this->data['post']['customer_name']);
			$this->data['post']['mobile_no'] = trim($this->data['post']['mobile_no']);
			$this->data['post']['address'] = trim($this->data['post']['address']);
			$this->data['post']['date'] = date('Y-m-d', strtotime(str_replace('/', '-', $this->data['post']['date'])));
			$this->data['post']['tds_in'] = intval($this->data['post']['tds_in']);
			$this->data['post']['tds_out'] = intval($this->data['post']['tds_out']);
			(isset($this->data['post']['discount']))?
					$this->data['post']['discount'] = intval($this->data['post']['discount'])
					:$this->data['post']['discount'] = 0;
			$this->data['post']['discount'] = intval($this->data['post']['discount']);
			$this->data['post']['bill_amount'] = intval($this->data['post']['bill_amount']);
			$this->data['post']['tax1'] = intval($this->data['post']['tax1']);
			$this->data['post']['tax2'] = intval($this->data['post']['tax2']);



			// Filter Item 1
			$this->data['post']['item_name1'] = trim($this->data['post']['item_name1']);
			$this->data['post']['model_no1'] = trim($this->data['post']['model_no1']);
			$this->data['post']['qty1'] = intval($this->data['post']['qty1']);
			$this->data['post']['price1'] = intval($this->data['post']['price1']);

			// Filter Item 2
			$this->data['post']['item2_status'] = FALSE;
			if( $this->data['post']['item_name2'] != "" && $this->data['post']['model_no2'] != "")
			{
				$this->data['post']['item_name2'] = trim($this->data['post']['item_name2']);
				$this->data['post']['model_no2'] = trim($this->data['post']['model_no2']);
				$this->data['post']['qty2'] = intval($this->data['post']['qty2']);
				$this->data['post']['price2'] = intval($this->data['post']['price2']);
				$this->data['post']['item2_status'] = TRUE;
			}



			// Insert Customer
			$customer = array(
					'customer_name' => $this->data['post']['customer_name'],
					'mobile_no'		=> $this->data['post']['mobile_no'],
					'address'		=> $this->data['post']['address']
			);
			$customer['id'] = $this->customer_m->save($customer);

			// Insert Bill
			$bill = array(
					'bill_no' 		=> $this->data['post']['bill_no'],
					'bill_date'		=> $this->data['post']['date'],
					'bill_amount'	=> $this->data['post']['bill_amount'],
					'customer_id'	=> $customer['id'],
					'discount'		=> $this->data['post']['discount'],
					'tax1'			=> $this->data['post']['tax1'],
					'tax2'			=> $this->data['post']['tax2'],
					'tds_in'		=> $this->data['post']['tds_in'],
					'tds_out'		=> $this->data['post']['tds_out']

			);
			$this->bill_m->save($bill);


			// Insert Items
			$item1 = array(
					'sr_no' 	=> '1',
					'bill_no'	=> $this->data['post']['bill_no'],
					'item_name' 	=> $this->data['post']['item_name1'],
					'qty' 	=> $this->data['post']['qty1'],
					'price' 	=> $this->data['post']['price1'],
					'model_no' 	=> $this->data['post']['model_no1'],
					'remind_every' 	=> '90'
			);
			$this->item_m->save($item1);


			if($this->data['post']['item2_status'])
			{
				$item2 = array(
						'sr_no' 	=> '2',
						'bill_no'	=> $this->data['post']['bill_no'],
						'item_name' 	=> $this->data['post']['item_name2'],
						'qty' 	=> $this->data['post']['qty2'],
						'price' 	=> $this->data['post']['price2'],
						'model_no' 	=> $this->data['post']['model_no2'],
						'remind_every' 	=> '90'
				);

				$this->item_m->save($item2);

			}


			$clause = array(
					'select' => '*',
					'join' => 'customer',
					'on' => 'customer.id = bill_list.customer_id',
					'where' => 'bill_no = ' . $bill_no,
					'type' => ''
			);

			$this->data['bill'] = $this->bill_m->get_join($clause);

			$this->data['item'] = $this->item_m->get_by(array(
					'bill_no' => $bill_no
			));

			//$this->data['receipts'] = $this->bill_m->get_receipt($bill_no);

			$this->data['meta_title'] = 'HPDOL-' . sprintf("%05d",$bill_no);
			$this->data['subview'] = 'notax/bill_pdf';
			$this->load->view('notax/bill_pdf', $this->data);

			// Saving Reminder

			$date1 = date('Y-m-d', strtotime( $this->data['post']['date'] . ' + 86 days'));
			$reminder1 = array(
					'bill_no' => $bill_no,
					'sr_no'	=> 1,
					'reminder_date' => $date1,
					'customer_name' => $this->data['post']['customer_name'],
					'mobile_no' => $this->data['post']['mobile_no'],
					'read_reminder' => 0
			);
			$this->reminder_m->save($reminder1);

			/*
			$date2 =  date('Y-m-d', strtotime( $date1 . ' + 90 days'));
			$reminder2 = array(
					'bill_no' => $bill_no,
					'sr_no'	=> 2,
					'reminder_date' => $date2,
					'customer_name' => $this->data['post']['customer_name'],
					'mobile_no' => $this->data['post']['mobile_no'],
					'read_reminder' => 0
			);
			$this->reminder_m->save($reminder2);

			$date3 =  date('Y-m-d', strtotime( $date2 . ' + 90 days'));
			$reminder3 = array(
					'bill_no' => $bill_no,
					'sr_no'	=> 3,
					'reminder_date' => $date3,
					'customer_name' => $this->data['post']['customer_name'],
					'mobile_no' => $this->data['post']['mobile_no'],
					'read_reminder' => 0
			);
			$this->reminder_m->save($reminder3);

			$date4 =  date('Y-m-d', strtotime( $date3 . ' + 90 days'));
			$reminder4 = array(
					'bill_no' => $bill_no,
					'sr_no'	=> 4,
					'reminder_date' => $date4,
					'customer_name' => $this->data['post']['customer_name'],
					'mobile_no' => $this->data['post']['mobile_no'],
					'read_reminder' => 0
			);
			$this->reminder_m->save($reminder4);
			*/


			//sending email
			/*
			$config = Array(
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.gmail.com',
					'smtp_port' => 465,
					'smtp_user' => 'contactdolphinro@gmail.com',
					'smtp_pass' => 'Dophin@app',
					'mailtype' => 'html',
					'charset' => 'iso-8859-1',
					'wordwrap' => TRUE
			);
			$this->load->library('email', $config);

			$this->email->from('contactdolphinro@gmail.com', 'Paresh Bhayani');
			$this->email->to('faizanvahevaria@gmail.com');
			$this->email->reply_to('contactdolphinro@gmail.com', 'Paresh Bhayani');


			$this->email->subject('Bill');

			$message = "Please Collect your bill.";
			$this->email->message($message);
			$this->email->attach( __DIR__ . '/../../pdf/' . $file_name);
			$this->email->send();

			*/


			//creating pdf


			/*
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



			$html = $this->load->view('notax/bill_pdf', $this->data, true);

			// Print text using writeHTMLCell()
			$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

			// ---------------------------------------------------------

			$file_name = 'HPDOL-' . $bill_no . '.pdf';
			// Close and output PDF document
			// This method has several options, check the source code documentation for more information.
			$pdf->Output( __DIR__ . '/../../pdf/' . $file_name, 'FD');
			//echo __DIR__;
			*/


			//$this->session->set_flashdata($this->data);
			$bill['bill_no'] = intval($bill['bill_no']);
			redirect('notax/view/' . $bill['bill_no']);
		}

		$this->data['bill_no'] = $this->bill_m->get_bill_no() + 1;

		$this->data['meta_title'] = 'New Bill';
		$this->data['subview'] = 'notax/new';
		$this->load->view('_main', $this->data);

	}


	public function receipt($bill_no)
	{
		if($this->input->post('submit'))
		{
			$receipt = array();
			$this->data['post'] = $this->input->post(NULL, FALSE);
			$receipt['bill_no'] = $bill_no;
			$receipt['receipt_date'] = date('Y-m-d', strtotime(str_replace('/', '-', $this->data['post']['date'])));
			$receipt['note'] = trim($this->data['post']['note']);
			$receipt['receipt_amount'] = intval($this->data['post']['receipt_amount']);

			$receipt['id'] = $this->bill_m->save_receipt($receipt);

			redirect('notax/view/' . $bill_no);
		}

		// Loading Create Receipt View
		$this->data['receipt_no'] = $this->bill_m->get_receipt_no() + 1;
		$this->data['bill_no'] = $bill_no;

		$this->data['meta_title'] = 'New Receipt';
		$this->data['subview'] = 'notax/receipt';
		$this->load->view('_main', $this->data);
	}

	public function delete_receipt($receipt_no)
	{
		$this->bill_m->delete_receipt($receipt_no);
		$this->load->library('user_agent');
		redirect($this->agent->referrer());
	}


	public function customer()
	{
		$clause = array(
				'select' => 'bill_no, customer.customer_name',
				'join' => 'customer',
				'on' => 'customer.id = bill_list.customer_id',
				'where' => '',
				'type' => ''
		);

		$this->data['customer_list'] = $this->bill_m->get_customer($clause);
		$this->data['meta_title'] = 'Customer List';
		$this->data['subview'] = 'notax/customer';
		//echo "<pre>";
		//print_r($this->data['customer_list']);
		//echo "</pre>";
		$this->load->view('_main', $this->data);

	}


	public function bill_pdf($bill_no)
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
				'select' => '*',
				'join' => 'customer',
				'on' => 'customer.id = bill_list.customer_id',
				'where' => 'bill_no = ' . $bill_no,
				'type' => ''
		);

		$this->data['bill'] = $this->bill_m->get_join($clause);

		$this->data['item'] = $this->item_m->get_by(array(
				'bill_no' => $bill_no
		));

		//$this->data['receipts'] = $this->bill_m->get_receipt($bill_no);

		$this->data['meta_title'] = 'HPDOL-' . sprintf("%05d",$bill_no);
		$this->data['subview'] = 'notax/bill_pdf';
		$this->load->view('notax/bill_pdf', $this->data);

		//creating pdf
		$html = $this->load->view('notax/bill_pdf', $this->data, true);

		// Print text using writeHTMLCell()
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

		// ---------------------------------------------------------

		$file_name = 'HPDOL-' . sprintf("%05d",$bill_no) . '.pdf';
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