<?php
/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 09-03-16
 * Time: AM 12:37
 */
class Customer_M extends MY_Model
{
	protected $_table_name = 'customer';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'customer_name';
	//Validation Rules for insert/update form
	public $rules = array();
	protected $_timestamps = FALSE;


	function __construct()
	{
		parent::__construct();
	}

	public function save($data, $id = NULL)
	{
		// Insert
		if($id === NULL)
		{
			// If customer name exists
			//echo var_dump($data);

			$result = $this->get_by(array('customer_name' => $data['customer_name']), TRUE);


			//echo var_dump($result);
			if(empty($result))
			{
				$this->db->set($data);
				$this->db->insert($this->_table_name, $data);
				$id = $this->db->insert_id();

			}
			else
			{
				//echo "else";
				//echo var_dump($result);

				$id = $result->id;
			}

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

}