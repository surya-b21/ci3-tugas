<?php

class RefJenisModel extends CI_Model
{
	public $kode;
	public $namaruang;

	public function getAllData()
	{
		$query = $this->db->get('refjenishotel');
		return $query->result_array();
	}
}
