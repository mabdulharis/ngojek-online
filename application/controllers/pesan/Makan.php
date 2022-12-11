<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makan extends CI_Controller {


	// Main function
	public function index()
	{
		if($this->session->userdata('data')['level'] != 'User')
		{
			redirect('dashboard','refresh');
		}

		$model 			= $this->load->model('pengaturan/hargaModel', 'hargaModel');
	
      	$data['harga']  = $this->hargaModel->getAllData()->row_array()['tari_harga'];
		$data['title'] 	= 'ORDER FOOD';

		$this->load->view('templates/content/makan', $data);

	}

}