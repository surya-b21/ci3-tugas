<?php

class HotelModel extends CI_Model
{
	public $id;
	public $nama;
	public $idJenis;
	public $inap;
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

	public function getJoinTable()
	{
		$this->db->select('*');
		$this->db->from('hotel');
		$this->db->join('refjenishotel', 'hotel.idJenis = refjenishotel.kode');
		$query = $this->db->get();
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

	public function getData($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('hotel');
		return $query->row();
	}
}
