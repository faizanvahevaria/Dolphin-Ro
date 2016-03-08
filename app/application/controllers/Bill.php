<?php
/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 07-03-16
 * Time: PM 08:23
 */

class Bill extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('bill_m');
	}

	public function view($id)
	{
	}

	public function edit($id)
	{
	}

	public function delete($id)
	{
		$this->bill_m->delete($id);
	}

	public function create()
	{
		$data = array(
			'bill_date'		=> '2016-03-09',
			'bill_amount' 	=> '10000',
			'customer_id'	=> '3',
			'bill_discount' => '200',
			'bill_tax'		=> '200'
		);

		$id = $this->bill_m->save($data, 3);
		var_dump($id);
	}


}