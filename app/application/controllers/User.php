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

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$password = hash('sha512',$password);

			$result = $this->user_m->login($username);

			// Login and redirect
			if($password == $result)
			{
				$data = array(
						'username' => $username,
						'loggedin' => TRUE
				);
				$this->session->set_userdata($data);
				redirect($dashboard);
			}
			else
			{
				$this->session->set_flashdata('error','Username/Password Incorrect');
				redirect('user/login', 'refresh');
			}
		}

		$this->data['user_name'] = $this->user_m->get(1, TRUE);
		$this->data['user_name'] = $this->data['user_name']->username;
		$this->load->view('login', $this->data);
	}

	public function update()
	{
		$rules = $this->user_m->rules;
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == TRUE)
		{
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			$data['password'] = hash('sha512',$data['password']);

			$this->user_m->save($data, 1);
			redirect('user/logout');
		}

		$this->data['subview'] = 'change';
		$this->load->view('_main', $this->data);
	}

	public function logout()
	{
		$this->user_m->logout();
		redirect('user/login');
	}
}