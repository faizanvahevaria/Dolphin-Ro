<?php

/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 08-03-16
 * Time: PM 05:12
 */
class Receipt_M extends MY_Model
{
    protected $_table_name = 'receipt_list';
    //protected $_join_table = 'customer';
    protected $_primary_key = 'receipt_no';
    //protected $_join_key = 'id';
    public $primary_filter = 'intval';
    protected $_order_by = 'receipt_date';


    function __construct()
    {
        parent::__construct();
    }


    public function get_receipt_no()
    {
        $this->db->select_max('receipt_no');
        $result = $this->db->get($this->_table_name)->result();
        $row = $result[0];
        return $row->receipt_no;
    }

}