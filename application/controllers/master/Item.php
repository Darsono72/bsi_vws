<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

	public function index()
	{
		$data=[
			'title'=>'Item',
			'images'=>'bsi_vws_bg2.jpeg',
			'page'=>'master/item_view'
		];
		
		$this->load->view('template', $data);		
	}

	function save_item(){
		$data=[
			'cust_id'=>$this->input->post('cust_id'),
			'cust_name'=>$this->input->post('cust_name'),
			'cust_address'=>$this->input->post('cust_address'),
			'cust_phone'=>$this->input->post('cust_phone')
		];

		$this->db->insert('',$data);		
	}

}

/* End of file Item.php */
/* Location: ./application/controllers/master/Item.php */