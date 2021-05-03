<?php

class Hotel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('HotelModel');
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->library('session');
	}

	public function index()
	{
		$data['hotel'] = $this->HotelModel->getAllData();
		$data['judul'] = 'Landing Page';
		$this->load->view('templates/header',$data);
		$this->load->view('hotel/index',$data);
		$this->load->view('templates/footer');
	}
	public function form()
	{
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('tersedia', 'Kamar Tersedia', 'required');
		$this->form_validation->set_rules('terisi', 'Kamar Terisi', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		$data['judul'] = 'Tambah Data';

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('status', 'Data gagal di Submit');
			redirect('hotel/index');
		} else {
			$data = array(
				'nama' => $this->input->post('nama'),
				'harga' => $this->input->post('harga'),
				'tersedia' => $this->input->post('tersedia'),
				'terisi' => $this->input->post('terisi'),
				'keterangan' => $this->input->post('keterangan')
			);
			$this->HotelModel->inputData($data);
			$this->session->set_flashdata('status', 'Data berhasil disubmit');
			redirect('hotel/index');
		}
	}

	public function hapus($id) 
	{
		$this->HotelModel->hapus($id);
		$this->session->set_flashdata('status', 'Data berhasil dihapus');
		redirect('hotel/index');
	}

	public function update()
	{
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('tersedia', 'Kamar Tersedia', 'required');
		$this->form_validation->set_rules('terisi', 'Kamar Terisi', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() == FALSE) {
			redirect('hotel/index');
		} else {
			$data = array(
				'id' => $this->input->post('id'),
				'nama' => $this->input->post('nama'),
				'harga' => $this->input->post('harga'),
				'tersedia' => $this->input->post('tersedia'),
				'terisi' => $this->input->post('terisi'),
				'keterangan' => $this->input->post('keterangan')
			);
			$this->HotelModel->updateData($data);
			$this->session->set_flashdata('status', 'Data berhasil diupdate');
			redirect('hotel/index');
		}
	}
}
