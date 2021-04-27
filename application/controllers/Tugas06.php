<?php

class Tugas06 extends CI_Controller
{
	public function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('prodi', 'Program Studi', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('cekbox', 'Centang', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('tugas06/index');
		} else {
			$this->load->view('tugas06/submit');
		}
	}
}
