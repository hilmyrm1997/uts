<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_Model extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

	public function getDataBarang()
	{
		$this->db->select("id,nama,kode,DATE_FORMAT(tanggal_beli,'%d-%m-%Y') as tanggal_beli");
		$query = $this->db->get('barang');
		return $query->result();
	}
	public function getKategoriByBarang($value='')
	{
		# code...
	}
}

/* End of file Bidang_model.php */
/* Location: ./application/models/Bidang_model.php */

 ?>