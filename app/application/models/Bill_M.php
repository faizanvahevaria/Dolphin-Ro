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
		$this->db->limit(20);
		($clause['where'] == '') ? : $this->db->where($clause['where']);
		($clause['type'] == '') ? $this->db->join($clause['join'], $clause['on'])
								: $this->db->join($clause['join'], $clause['on'], $clause['type']);
		$this->db->order_by('bill_no', 'DESC');

		//echo $q = $this->db->get_compiled_select();
		return $this->db->get()->result();

	}

	public function get_bill_no()
	{
		$this->db->select_max('bill_no');
		$result = $this->db->get($this->_table_name)->result();
		$row = $result[0];
		return $row->bill_no;
	}

	public function get_receipt_no()
	{
		$this->db->select_max('receipt_no');
		$result = $this->db->get('receipt_list')->result();
		$row = $result[0];
		return $row->receipt_no;
	}

	public function get_receipt($bill_no)
	{
		$this->db->order_by('receipt_date', 'DESC');
		$where = array('bill_no' => $bill_no);
		return $this->db->get_where('receipt_list', $where)->result();
	}

	public function save_receipt($data, $id = NULL)
	{
		// Insert
		if($id === NULL)
		{
			$this->db->set($data);
			$this->db->insert('receipt_list', $data);
			$id = $this->db->insert_id();
		}
		// Update
		else
		{
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key, $id);
			$this->db->update($this->_table_name);
		}

		return $id;
	}

	public function delete_receipt($receipt_no)
	{
		$filter = $this->_primary_filter;
		$receipt_no = $filter($receipt_no);

		if( ! $receipt_no)
		{
			return FALSE;
		}

		$this->db->where('receipt_no', $receipt_no);
		$this->db->limit(1);
		$this->db->delete('receipt_list');

	}

	public function get_customer($clause)
	{
		$this->db->select($clause['select']);
		$this->db->from($this->_table_name);
		($clause['where'] == '') ? : $this->db->where($clause['where']);
		($clause['type'] == '') ? $this->db->join($clause['join'], $clause['on'])
				: $this->db->join($clause['join'], $clause['on'], $clause['type']);
		$this->db->order_by('customer_name', 'ASC');

		//echo $q = $this->db->get_compiled_select();
		return $this->db->get()->result();
	}




}