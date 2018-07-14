<?php

class Web_Model  extends CI_Model  {

	function __construct()
    {
        parent::__construct();
	   //$this->pg = $this->load->database('kepegawaian', TRUE);
	   $this->load->database();

    }
	
	public function artikelByKategori($kategori,$limit=false){
		$this->db->select('*');
		$this->db->from('web_artikel');
		$this->db->join('web_kategori_artikel','web_artikel.kategori=web_kategori_artikel.id_web_kategori_artikel');
		$this->db->where('nama_kategori',$kategori);
		if($limit !=false)
		{
			$this->db->limit($limit);
			$this->db->order_by('id_artikel','desc');
		}
		return $this->db->get();

	}


	public function downloadByKategori($kategori,$limit=false){
		$this->db->select('*');
		$this->db->from('web_download');
		$this->db->join('web_kategori_download','web_download.kategori_download=web_kategori_download.id_web_kategori_download');
		$this->db->where('nama_kategori',$kategori);
		if($limit !=false)
		{
			$this->db->limit($limit);
			$this->db->order_by('id_download','desc');
		}
		return $this->db->get();

	}
	public function artikelById($id){
		$this->db->select('*');
		$this->db->from('web_artikel');
		$this->db->join('web_kategori_artikel','web_artikel.kategori=web_kategori_artikel.id_web_kategori_artikel');
		$this->db->where('id_artikel',$id);
		return $this->db->get();

	}
}