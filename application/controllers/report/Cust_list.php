<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cust_list extends CI_Controller {

	public function index()
	{
		$data=[
			'title'=>'Customer List',
			'images'=>'bsi_vws_bg2.jpeg',
			'page'=>'report/cust_list_v'
		];
		
		$this->load->view('template', $data);
	}

	function get_data(){
		$html='';

		$html.='<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Customer</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>';

        $this->db->from('tbl_customer');
        $qry=$this->db->get();

        $i=1;
        foreach($qry->result() as $rows){
	        $html.='    <tr>';
	        $html.='        <td>'.$i.'</td>';
	        $html.='        <td>'.$rows->cust_name.'</td>';
	        $html.='        <td>'.$rows->cust_address.'</td>';
	        $html.='        <td>'.$rows->cust_phone.'</td>';
	        $html.='        <td></td>';
	        $html.='    </tr>';  
	        $i++;      	
        }

        $html.='</tbody>';
        $html.='<tfoot>';
        $html.='    <tr>';
        $html.='        <th>#</th>';
        $html.='        <th>Customer</th>';
        $html.='        <th>Address</th>';
        $html.='        <th>Phone</th>';
        $html.='        <th>Note</th>';
        $html.='    </tr>';
        $html.='</tfoot>';
    	$html.='</table>'; 


    	echo $html;

	}

	function copy_data(){
		$this->db->from('tbl_customer');
        $qry=$this->db->get();

        $i=1;
        foreach($qry->result() as $rows){
	        $data=[
	        	'cust_name'=>$rows->cust_name.' - '.rand(),
	        	'cust_address'=>$rows->cust_address.' - '.rand(),
	        	'cust_phone'=>rand()
	        ];
 
 			$this->db->insert('tbl_customer',$data);
	        $i++;      	
        }
	}

}

/* End of file Cust_list.php */
/* Location: ./application/controllers/report/Cust_list.php */


