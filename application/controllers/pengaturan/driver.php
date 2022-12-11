<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class driver extends CI_Controller {


	// Main function
	public function index()
	{
		if($this->session->userdata('data')['level'] == 'Driver')
		{
			redirect('driver/menu','refresh');
		}
	
		$data['title'] 	= 'Setting Driver';
		$data['level'] 	= $this->db->get('level')->result_array();

		$this->load->view('templates/content/pengaturan-driver', $data);

	}




	// Get Data
	public function getAllData()
	{
		$exe 	= $this->driver->getAllData()->result_array();

		$this->output->set_content_type('application/json')->set_output(json_encode($exe));
	}




	// Get Data Detail
	public function getDetailData()
	{
		$id 	= $this->input->post('id');

		$exe 	= $this->driver->getDetailData($id)->row_array();

		$this->output->set_content_type('application/json')->set_output(json_encode($exe));
	}





	// Action data
	public function add()
	{
		$exe 	= $this->driver->add();
	}

	public function update()
	{
		$exe 	= $this->driver->update();
	}

	public function delete()
	{
		$exe 	= $this->driver->delete();
	}





	// Load model
	function __construct()
	{

		parent::__construct();

		$this->load->model('pengaturan/DriverModel', 'driver');
		$this->load->library('b_password');

	}


}

/* End of file Pengguna.php */
/* Location: ./application/controllers/pengaturan/Pengguna.php */