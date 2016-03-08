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
	protected $_primary_key = 'bill_no';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'bill_date';
	//Validation Rules for insert/update form
	public $rules = array();
	protected $_timestamps = FALSE;


	function __construct()
	{
		parent::__construct();
	}

}