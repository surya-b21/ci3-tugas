<?php

class HotelModel extends CI_Model
{
	public $nama;
	public $harga;
	public $tersedia;
	public $terisi;
	public $keterangan;

	public function inputData($data)
	{
		$this->db->insert('hotel', $data);
	}

	public function getAllData()
	{
		$query = $this->db->get('hotel');
		return $query->result_array();
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('hotel');
	}

	public function updateData($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('hotel', $data);
	}
}
