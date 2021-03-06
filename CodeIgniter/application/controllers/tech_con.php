<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tech_con extends CI_Controller 

{

public function vie()
{
 $this->load->view('teach_form');

}
public function insert()	
{



       $this->load->library('form_validation');
		$this->load->model('teach_main');
		$this->form_validation->set_rules("name","name",'required');
			$this->form_validation->set_rules("add","Address",'required');
		$this->form_validation->set_rules("location","location",'required');
		$this->form_validation->set_rules("pin","pincode",'required');
		$this->form_validation->set_rules("gender","gender",'required');
	    $this->form_validation->set_rules("sub","sum",'required');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("password","pass",'required');
	if($this->form_validation->run())
	{
		$pass=$this->input->post("password");
		$encpass=$this->Mainmodel->encpass($pass);
		$a=array("name"=>$this->input->post("name"),
		 "Address"=>$this->input->post("add"),
		"Dist"=>$this->input->post("location"),
		"pincode"=>$this->input->post("pin"),
		"gen"=>$this->input->post("gender"),
		"age"=>$this->input->post("age"),
		"sub"=>$this->input->post("sub"),);
		
		$b=array("email"=>$this->input->post("email"),
		"password"=>$encpass,);
		$this->Mainmodel->reg($a,$b);

		redirect('teach_con/vie','refresh');

	
	}

}
}
?>