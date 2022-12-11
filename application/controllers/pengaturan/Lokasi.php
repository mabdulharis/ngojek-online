<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {
    // Load Model and Library
	function __construct()
	{
		parent::__construct();

		$this->load->model('pengaturan/LokasiModel');

	}

    public function index()
	{
		if($this->session->userdata('data')['level'] == 'User')
		{
			redirect('users/menu','refresh');
		}
	
		$data['title'] 	= 'Setting Lokasi';

		$this->load->view('templates/content/pengaturan-lokasi', $data);

	}

    public function tambahlokasi()
    {
            $this->LokasiModel->tambahlokasi();
            redirect('pengaturan/lokasi');
    }

    

    


}
