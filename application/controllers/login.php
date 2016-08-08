<?php

class Login extends CI_Controller{


  public function index(){


    $this->load->model('authenticateuser','auth');  //load model

    /*$this->load->database();

    $query = $this->db->get('trial');

	foreach ($query->result() as $row)
	{
	        //echo $row->userid;
	}
	
	//echo 'Total Results: ' . $query->num_rows();
    
	*/

    //$this->load->library('class_name');  for multiple load  $this->load->library(array('class_name','class_name2');
    
    //$this->auth->hello();  //Call a hello function from authenticateuser class

  	$data = $this->auth->hello(); 
 

    $this->load->view('login', $data);   // load view
  }  

}


?>
