<?php

/**
 * Created by PhpStorm.
 * User: Faizan
 * Date: 07-03-16
 * Time: AM 12:30
 */
class MY_Controller extends CI_Controller
{
	public $data = array();
	function __construct()
	{
		parent::__construct();
		$this->data['errors'] = array();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('user_m');

		//Login Check
		$exception_uri = array(
				'user/login',
				'user/logout'
		);

		if(in_array(uri_string(), $exception_uri) == FALSE)
		{
			if ($this->user_m->loggedin() == FALSE)
			{
				redirect('user/login');
			}
		}
	}

}