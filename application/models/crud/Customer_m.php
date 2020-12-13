<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_m extends CI_Model {

	function create_cust($data){
		$this->db->insert('tbl_customer', $data);
	}

	function list_cust(){
		$qry=$this->db->get('tbl_customer');

		return $qry;
	}

	function get_cust($cust_id){
		$this->db->where('cust_id', $cust_id);
		$qry=$this->db->get('tbl_customer');

		return $qry;		
	}

	function update_cust($data,$cust_id){
		$this->db->where('cust_id', $cust_id);
		$this->db->update('tbl_customer', $data);		
	}

	function delete_cust($cust_id){
		$this->db->where('cust_id', $cust_id);
		$this->db->delete('tbl_customer');		
	}


}

/* End of file Customer_m.php */
/* Location: ./application/models/crud/Customer_m.php */