<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csrf extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('crud/customer_m');
	}

	public function index()
	{
		$data=[
			'title'=>'CSRF',
			'images'=>'bsi_vws_bg2.jpeg'
		];
		$this->load->view('other/csrf_v', $data);
	}

	function create_cust(){
		$data=[
			'cust_id'=>$this->input->post('cust_id'),
			'cust_name'=>$this->input->post('cust_name'),
			'cust_address'=>$this->input->post('cust_address')
		];

		$this->customer_m->create_cust($data);
		
		redirect('crud/customer','refresh');
	}

}

/* End of file Csrf.php */
/* Location: ./application/controllers/other/Csrf.php */