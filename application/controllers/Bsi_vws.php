<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bsi_vws extends CI_Controller {

	public function index()
	{
		$data=[
			'title'=>'Virtual Workshop - Universitas BSI',
			'images'=>'bsi_logo.png'
		];
		
		$this->load->view('bsi_vws_v', $data);		
	}

}

/* End of file Bsi_vws.php */
/* Location: ./application/controllers/Bsi_vws.php */