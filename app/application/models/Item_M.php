<?php
/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 08-03-16
 * Time: PM 04:44
 */

class Item_M extends MY_Model
{
	protected $_table_name = 'item_list';
	protected $_primary_key = 'id';
	public $primary_filter = 'intval';
	protected $_order_by = 'sr_no';
	//Validation Rules for insert/update form
	public $rules = array(
			'sr_no' => array(
					'field' => 'sr_no',
					'label' => 'SR NO',
					'rules' => 'trim|required'
			),
			'item_name' => array(
					'field' => 'item_name',
					'label' => 'Item Name',
					'rules' => 'trim|required'
			),
			'qty' => array(
					'field' => 'qty',
					'label' => 'Quantity',
					'rules' => 'required'
			),
			'price' => array(
					'field' => 'price',
					'label' => 'Price',
					'rules' => 'required'
			),
			'model_no' => array(
					'field' => 'model_no',
					'label' => 'Model No.',
					'rules' => 'required'
			),
			'remind_every' => array(
					'field' => 'remind_every',
					'label' => 'Reminder',
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