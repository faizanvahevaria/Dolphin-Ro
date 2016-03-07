<?php

/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 07-03-16
 * Time: PM 10:39
 */
class User_M extends MY_Model
{
	protected $_table_name = '';
	protected $_order_by = '';
	public $rules = array(
		'username' => array(
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'trim|required'
		),
		'password' => array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|required'
 		)
	);

	function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
		if($this->input->post('username') == 'admin' && $this->input->post('password') == 'admin')
		{
			//Login User
			$data = array(
				'username' => $this->input->post('username'),
				'loggedin' => TRUE
			);
			$this->session->set_userdata($data);
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
	}
	public function loggedin()
	{
		return (bool) $this->session->userdata('loggedin');
	}
	public function hash($string)
	{
		return hash('sha512', $string . config_item('encryption_key'));
	}

}