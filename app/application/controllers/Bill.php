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
		$this->load->model('item_m');
		$this->load->model('customer_m');
	}

	public function view($id)
	{

		$clause = array(
				'select' => '*',
				'join' => 'customer',
				'on' => 'customer.id = bill_list.customer_id',
				'where' => 'bill_no = ' . $id,
				'type' => ''
		);

		$this->data['bill'] = $this->bill_m->get_join($clause);

		$this->data['item'] = $this->item_m->get_by(array(
				'bill_no' => $id
		));

		$this->data['meta_title'] = 'Bill';
		$this->data['subview'] = 'bill/view';
		$this->load->view('_main', $this->data);
	}

	public function edit($id)
	{
		$this->data['meta_title'] = 'Edit Bill';

		$clause = array(
			'select' => '*',
			'join' => 'customer',
			'on' => 'customer.id = bill_list.customer_id',
			'where' => '',
			'type' => ''
		);

		$this->data['bill'] = $this->bill_m->get_join($clause);
		$this->data['subview'] = 'bill/edit';
		$this->load->view('_main', $this->data);
	}

	public function delete($id)
	{
		//$this->bill_m->delete($id);
	}

	public function create()
	{
		$rules = $this->bill_m->rules;
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == TRUE)
		{

		}

		$this->data['meta_title'] = 'New Bill';
		$this->data['subview'] = 'bill/new';
		$this->load->view('_main', $this->data);

	}


}