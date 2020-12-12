<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function index()
	{
		$data=[
			'title'=>'Customer',
			'images'=>'bsi_vws_bg2.jpeg'
		];
		
		$this->load->view('crud/customer_v', $data);		
	}

	function create_cust(){

		redirect('crud/customer','refresh');
	}

}

/* End of file Cust_master.php */
/* Location: ./application/controllers/crud/Cust_master.php */