<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deret_angka extends CI_Controller {

	public function index()
	{
		$n=36;
		$f=[];
		// $x=0;

		for ($i=1; $i <=$n ; $i++) { 
			if($n%$i ==0){
				array_push($f, $i);
				if($i * $i ==$n){
					$x=$i;
				}
			}
		}	

		echo json_encode($f);	
		$z=sqrt($n);
		echo $z;

		for ($i=1; $i <=$n ; $i++) { 
			// for ($z=1; $z <= $i; $z++) { 
				echo $i.'  ';
			// }

			echo ' <br>';
		}
	}

}

/* End of file Deret_angka.php */
/* Location: ./application/controllers/other/Deret_angka.php */