<?php

/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 07-03-16
 * Time: AM 01:13
 */
class MY_Model extends CI_Model
{
	protected $_table_name = '';
	protected $_primary_key = '';
	protected $_primary_filter = 'intval';
	protected $_order_by = '';
	public $rules = array();
	protected $_timestamps = FALSE;

	function __construct()
	{
		parent::__construct();

	}

	public function get($id = NULL, $single = FALSE)
	{
		if($id != NULL)
		{
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		}
		elseif($single == TRUE)
		{
			$method = 'row';
		}
		else
		{
			$method = 'result';
		}

		return $this->db->get($this->_table_name)->$method();
	}


	public function get_by($where, $single = FALSE)
	{
		//$this->db->where($where);
		$this->db->order_by($this->_order_by, 'ASC');
		if($single == TRUE)
		{
			$method = 'row';
		}
		else
		{
			$method = 'result';
		}

		return $this->db->get_where($this->_table_name, $where)->$method();

	}

	public function save($data, $id = NULL)
	{
		// Insert
		if($id === NULL)
		{
			$this->db->set($data);
			$this->db->insert($this->_table_name, $data);
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

	public function delete($id)
	{
		$filter = $this->_primary_filter;
		$id = $filter($id);

		if( ! $id)
		{
			return FALSE;
		}

		$this->db->where($this->_primary_key, $id);
		$this->db->limit(1);
		$this->db->delete($this->_table_name);

	}
}