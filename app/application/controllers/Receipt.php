<?php
/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 07-03-16
 * Time: PM 08:24
 */


class Receipt extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bill_m');
        $this->load->model('receipt_m');
    }

    public function create($bill_no)
    {
        if($this->input->post('submit'))
        {

        }

        // Loading Create Receipt View
        $this->data['receipt_no'] = $this->receipt_m->get_receipt_no() + 1;
        $this->data['bill_no'] = $bill_no;

        $this->data['meta_title'] = 'New Receipt';
        $this->data['subview'] = 'receipt/new';
        $this->load->view('_main', $this->data);
    }

    public function view($id)
    {
    }

}