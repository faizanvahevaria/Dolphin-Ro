<?php

/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 08-03-16
 * Time: PM 05:12
 */
class Cash_receipt_M extends MY_Model
{
    protected $_table_name = 'cash_receipt';
    protected $_join_table = 'citem_list';
    protected $_primary_key = 'receipt_no';
    protected $_join_key = 'receipt_no';
    public $primary_filter = 'intval';
    protected $_order_by = 'receipt_date';


    function __construct()
    {
        parent::__construct();
    }




    public function get_join($clause)
    {
        $this->db->select($clause['select']);
        $this->db->from($this->_table_name);
        $this->db->limit(50);
        ($clause['where'] == '') ? : $this->db->where($clause['where']);
        ($clause['type'] == '') ? $this->db->join($clause['join'], $clause['on'])
            : $this->db->join($clause['join'], $clause['on'], $clause['type']);
        $this->db->order_by('receipt_no', 'DESC');

        //echo $q = $this->db->get_compiled_select();
        return $this->db->get()->result();

    }

    public function get_receipt_no()
    {
        $this->db->select_max('receipt_no');
        $result = $this->db->get($this->_table_name)->result();
        $row = $result[0];
        return $row->receipt_no;
    }

    public function save_item($data, $id = NULL)
    {
        // Insert
        if($id === NULL)
        {
            $this->db->set($data);
            $this->db->insert('citem_list', $data);
            $id = $this->db->insert_id();
        }
        // Update
        else
        {
            $id =intval($id);
            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('citem_list');
        }

        return $id;
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

        $this->db->order_by('receipt_no', 'DESC');
        return $this->db->get($this->_table_name)->$method();
    }


}