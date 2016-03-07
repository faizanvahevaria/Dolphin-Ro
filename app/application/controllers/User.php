<?php

class User extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->data['meta_title'] = "Login to Dolphin RO App";


	}

	public function login()
	{
		$dashboard = 'dashboard';
		$this->user_m->loggedin() == FALSE || redirect($dashboard);

		$rules = $this->user_m->rules;
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == TRUE)
		{
			// Login and redirect
			if($this->user_m->login())
			{
				redirect($dashboard);
			}
			else
			{
				$this->session->set_flashdata('error','Username/Password Incorrect');
				redirect('user/login', 'refresh');
			}
		}
		$this->load->view('login', $this->data);
	}

	public function logout()
	{
		$this->user_m->logout();
		redirect('user/login');
	}
}