<?php

class Hotel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model(array('HotelModel', 'RefJenisModel'));;
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->library('session');
	}

	public function index()
	{
		$data['hotel'] = $this->HotelModel->getJoinTable();
		$data['judul'] = 'Landing Page';
		$this->load->view('templates/header', $data);
		$this->load->view('hotel/index', $data);
		$this->load->view('templates/footer');
	}

	public function tampilForm()
	{
		$data['ref'] = $this->RefJenisModel->getAllData();
		$data['judul'] = 'Tambah Data';

		$this->form_validation->set_rules('nama', 'Nama', 'required|regex_match[/^[a-zA-Z]/]', array('required' => '<span style="color:red">Silahkan isi field Nama</span>', 'regex_match' => '<span style="color:red">Format nama salah</span>'));
		$this->form_validation->set_rules('lamainap', 'Lama Inap', 'required', array('required' => '<span style="color:red">Kolom Lama Inap tidak boleh kosong</span>'));

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('hotel/form', $data);
			$this->load->view('templates/footer');
		} else {
			$data = array(
				'nama' => $this->input->post('nama'),
				'idJenis' => $this->input->post('idJenis'),
				'lamainap' => $this->input->post('lamainap'),
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

	public function update($id)
	{
		$data['single'] = $this->HotelModel->getData($id);
		$data['ref'] = $this->RefJenisModel->getAllData();
		$data['judul'] = "Update Data";

		$this->form_validation->set_rules('nama', 'Nama', 'required|regex_match[/^[a-zA-Z]/]', array('required' => '<span style="color:red">Silahkan isi field Nama</span>', 'regex_match' => '<span style="color:red">Format nama salah</span>'));
		$this->form_validation->set_rules('lamainap', 'Lama Inap', 'required', array('required' => '<span style="color:red">Kolom Lama Inap tidak boleh kosong</span>'));

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('hotel/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$data = array(
				'nama' => $this->input->post('nama'),
				'idJenis' => $this->input->post('idJenis'),
				'lamainap' => $this->input->post('lamainap'),
				'keterangan' => $this->input->post('keterangan'),
				'id' => $this->input->post('id')
			);
			$this->HotelModel->updateData($data);
			$this->session->set_flashdata('status', 'Data berhasil diupdate');
			redirect('hotel/index');
		}
	}
}
