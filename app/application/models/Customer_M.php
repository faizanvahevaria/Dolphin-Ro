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

}