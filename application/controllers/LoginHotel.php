<?php

class LoginHotel extends CI_Controller
{
	public function index()
	{
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$valid->set_rules('username', 'Username', 'required');
		$valid->set_rules('password', 'Password', 'required');

		if ($valid->run()) {
			$this->simple_login->login($username, $password, site_url('hotel/index'), site_url('loginhotel/index'));
		}

		$this->load->view('admin/login');
	}

	public function logout()
	{
		$this->simple_login->logout();
	}
}
