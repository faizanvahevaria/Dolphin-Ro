<?php

/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 07-03-16
 * Time: PM 07:54
 */
class Dashboard extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->data['meta_title'] = "Dashboard";
		$this->load->model('bill_m');
	}

	public function index()
	{
		$clause = array(
				'select' => 'bill_no, bill_date, bill_amount, customer.customer_name',
				'join' => 'customer',
				'on' => 'customer.id = bill_list.customer_id',
				'where' => '',
				'type' => ''
		);

		$this->data['bill_list'] = $this->bill_m->get_join($clause);
		$this->data['subview'] = 'bill/list';
		//echo "<pre>";
		//print_r($this->data['bill_list']);
		//echo "</pre>";
		$this->load->view('_main', $this->data);
	}


}