<?php
/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 08-03-16
 * Time: PM 04:44
 */

class Bill_M extends MY_Model
{
	protected $_table_name = 'bill_list';
	protected $_join_table = 'customer';
	protected $_primary_key = 'bill_no';
	protected $_join_key = 'id';
	public $primary_filter = 'intval';
	protected $_order_by = 'bill_date';
	//Validation Rules for insert/update form
	public $rules = array(
			'bill_no' => array(
					'field' => 'bill_no',
					'label' => 'Bill NO',
					'rules' => 'trim|required'
			),
			'bill_date' => array(
					'field' => 'bill_date',
					'label' => 'Bill Date',
					'rules' => 'required'
			),
			'bill_amount' => array(
					'field' => 'bill_amount',
					'label' => 'Amount',
					'rules' => 'required'
			),
			'customer_id' => array(
					'field' => 'customer_id',
					'label' => 'Customer ID',
					'rules' => 'required'
			),
			'bill_tax' => array(
					'field' => 'bill_tax',
					'label' => 'Tax',
					'rules' => 'required'
			),
			'bill_discount' => array(
					'field' => 'bill_date',
					'label' => 'Bill Date',
					'rules' => 'required'
			)
	);
	protected $_timestamps = FALSE;


	function __construct()
	{
		parent::__construct();
	}

	public function get_join($clause)
	{
		$this->db->select($clause['select']);
		$this->db->from($this->_table_name);
		($clause['where'] == '') ? : $this->db->where($clause['where']);
		($clause['type'] == '') ? $this->db->join($clause['join'], $clause['on'])
								: $this->db->join($clause['join'], $clause['on'], $clause['type']);

		//$q = $this->db->get_compiled_select();
		return $this->db->get()->result();

	}
}