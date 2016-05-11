<?php
/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 07-03-16
 * Time: PM 08:24
 */


class Reminder extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('reminder_m');
    }

    public function index()
    {
        //$where = array('reminder_date ' => 'CURDATE()');
        $this->data['reminder_list'] = $this->reminder_m->get_reminder();
        $this->data['subview'] = 'reminder/view';
        $this->data['meta_title'] = 'Reminder List';

        $this->load->view('_main', $this->data);
    }

    public function  done($id)
    {
        $reminder = $this->reminder_m->get($id);

        $date1 = date('Y-m-d', strtotime( $reminder->reminder_date . ' + 90 days'));
        $reminder1 = array(
            'bill_no' => $reminder->bill_no,
            'sr_no'	=> (intval($reminder->sr_no) + 1),
            'reminder_date' => $date1,
            'customer_name' => $reminder->customer_name,
            'mobile_no' => $reminder->mobile_no,
            'read_reminder' => 0
        );

        $this->reminder_m->save($reminder1);

        $reminder = (array) $reminder;
        $reminder['read_reminder'] = 1;

        $this->reminder_m->save($reminder, $reminder['id']);

        redirect(base_url('reminder'));
    }

    public function notdone($id)
    {
        $reminder = $this->reminder_m->get($id);

        $reminder = (array) $reminder;
        $reminder['read_reminder'] = 1;

        $this->reminder_m->save($reminder, $reminder['id']);

    }

}