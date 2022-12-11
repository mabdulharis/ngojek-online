<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LokasiModel extends CI_Model { 
    public function tambahlokasi()
	{
            $data=[
                'nama_lokasi'=>$this->input->post('nama_lokasi'),
                'jarak'=>$this->input->post('jarak'),
                'harga'=>$this->input->post('harga'),
                'gambar'=>'default.jpg'
            ];
            return $this->db->insert('lokasi', $data);

		

	}

    public function getAllLokasi()
    {
        return $this->db->get('lokasi');
    }
    
}