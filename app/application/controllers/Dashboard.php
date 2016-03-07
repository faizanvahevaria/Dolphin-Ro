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
	}

	public function index()
	{
		$this->load->view('_layout_main', $this->data);
	}
}