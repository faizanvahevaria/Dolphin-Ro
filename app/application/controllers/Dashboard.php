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
		//$this->data = $this->bill_m->get();
		//print_r($data['bill_list']);
		$this->load->view('dashboard/index', $this->data);
	}

}