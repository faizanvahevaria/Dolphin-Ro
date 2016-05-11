<?php
/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 09-03-16
 * Time: AM 12:37
 */
class Reminder_M extends MY_Model
{
	protected $_table_name = 'reminder';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'reminder_date';
	//Validation Rules for insert/update form
	public $rules = array();
	protected $_timestamps = FALSE;


	function __construct()
	{
		parent::__construct();
	}

	public function get_reminder()
	{
		return $this->db->query('SELECT * FROM reminder WHERE reminder_date <= CURDATE() ORDER BY reminder_date DESC LIMIT 50');
	}

	public function delete($id)
	{
		$filter = $this->_primary_filter;
		$id = $filter($id);

		if( ! $id)
		{
			return FALSE;
		}

		$this->db->where('bill_no', $id);
		//$this->db->limit(1);
		$this->db->delete($this->_table_name);

	}

}