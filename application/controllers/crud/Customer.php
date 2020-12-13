<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud/customer_m');
	}

	public function index()
	{
		$data=[
			'title'=>'Customer',
			'images'=>'bsi_vws_bg2.jpeg'
		];
		
		$this->load->view('crud/customer_v', $data);		
	}

	function create_cust(){
		$data=[
			'cust_id'=>$this->input->post('cust_id'),
			'cust_name'=>$this->input->post('cust_name'),
			'cust_address'=>$this->input->post('cust_address'),
			'cust_phone'=>$this->input->post('cust_phone')
		];

		$this->customer_m->create_cust($data);

		redirect('crud/customer','refresh');
	}

	function list_cust(){
		$qry=$this->customer_m->list_cust();

		$data=[
			'title'=>'List Customer',
			'images'=>'bsi_vws_bg2.jpeg',
			'qry'=>$qry
		];
		
		$this->load->view('crud/list_cust_v', $data);		
	}

	function get_customer(){
		$cust_id=$this->input->get('cust_id');
		$qry=$this->customer_m->get_cust($cust_id);

		$data=[
			'title'=>'Update Customer',
			'images'=>'bsi_vws_bg2.jpeg',
			'qry'=>$qry
		];
		
		$this->load->view('crud/update_cust_v', $data);		
	}

	function update_cust(){
		$cust_id=$this->input->post('cust_id');

		$data=[
			'cust_name'=>$this->input->post('cust_name'),
			'cust_address'=>$this->input->post('cust_address'),
			'cust_phone'=>$this->input->post('cust_phone')
		];

		$this->customer_m->update_cust($data,$cust_id);

		redirect('crud/customer/list_cust','refresh');		
	}

	function delete_cust(){
		$cust_id=$this->input->get('cust_id');

		$this->customer_m->delete_cust($cust_id);

		redirect('crud/customer/list_cust','refresh');		
	}	
}

/* End of file Cust_master.php */
/* Location: ./application/controllers/crud/Cust_master.php */