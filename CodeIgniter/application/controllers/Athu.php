<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Athu extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

public function achu()
	{
		$this->load->view('print');
	}
	public function reg()
	{
		$this->load->view('print');
	}

public function register()

	
	
	{
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		$this->form_validation->set_rules("name","studentname",'required');
		$this->form_validation->set_rules("address","useraddress",'required');
		$this->form_validation->set_rules("gender","usergender",'required');
		$this->form_validation->set_rules("age","userage",'required');
		$this->form_validation->set_rules("email","useremail",'required');
		$this->form_validation->set_rules("password","userpassword",'required');
	if($this->form_validation->run())
	{
		$pass=$this->input->post("password");
		$encpass=$this->Mainmodel->encpass($pass);
		$a=array("name"=>$this->input->post("name"),
		"address"=>$this->input->post("address"),
		"gender"=>$this->input->post("gender"),
		"age"=>$this->input->post("age"),
		"email"=>$this->input->post("email"),
		"password"=>$encpass);
		$this->Mainmodel->register($a);
		redirect(base_url().'Athu/form');
	
	}
	}






	public function tb()
	{
		/*$this->load->view('form');*/
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->view1();
		$this->load->view('form',$data);
	}






	public function updatedetails()
	{
		$a=array("name"=>$this->input->post("Name"),
        		"address"=>$this->input->post("Address"),
        		"age"=>$this->input->post("Age"),
        		"gender"=>$this->input->post("Gender"),
        	    "email"=>$this->input->post("Email"));

        	    $id=$this->uri->segment(3);
        	    $this->load->model('Mainmodel');
        	    $data['user_data']=$this->Mainmodel->singledetails($id);
        	    $this->Mainmodel->singledata();
        	    $this->load->view('form',$data);
        	    if($this->input->post("update"))
        	    {
        	    	$this->Mainmodel->updatedetails($a,$this->input->post("id"));
        	    	 redirect(base_url().'Athu/tb');
                 }
     }

   public function deletedetails()
   {
   $this->load->model('Mainmodel');
   $id=$this->uri->segment(3);
   $this->Mainmodel->deletedetails($id);
   redirect(base_url().'Athu/tb');

	}
	public function approvel(){



	$this->load->model('Mainmodel');
   $id=$this->uri->segment(3);
   $this->Mainmodel->approvel($id);
   redirect(base_url().'Athu/tb');
	}
	


	public function rejected(){


	$this->load->model('Mainmodel');
   $id=$this->uri->segment(3);
   $this->Mainmodel->rejected($id);
   redirect(base_url().'Athu/tb');
	}
	public function log()
	{
		$this->load->view('login');
	}
	
	public function login()
	{
		/*$this->load->model('Mainmodel');
		$this->load->view('login');*/
		
    $this->load->library('form_validation');
    $this->form_validation->set_rules("email","email",'required');
    $this->form_validation->set_rules("password","password",'required');
    if($this->form_validation->run())
    {
       			 $this->load->model('Mainmodel');
        		$email=$this->input->post("email");
        		$pass=$this->input->post("password");
        		$rslt=$this->Mainmodel->selectpass($email,$pass);
        if($rslt)
        {
            	$id=$this->Mainmodel->getuserid($email);

            	$user=$this->Mainmodel->getuser($id);
            	$this->load->library(array('session'));
            	$this->session->set_userdata(array('id'=>(int)$userid->id,'status'=>$user->status));
            	
            	if($_SESSION['status']=='1') 
            		{
                		redirect(base_url().'Athu/vie');
            		}
            
            	else
            
            		{
                		echo"waiting for approvel";
            		}

        }

        else
        {
            echo"invalid user";
         }

	}
else
{
    redirect(base_url().'Athu/login');
}
        
 } /*  
public function rs()
{
	$this->load->view('regist');
}
public function insert()	
{

		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		$this->form_validation->set_rules("fname","firstname",'required');
		$this->form_validation->set_rules("lname","lastname",'required');
		$this->form_validation->set_rules("Address","Address",'required');
		$this->form_validation->set_rules("location","location",'required');
		$this->form_validation->set_rules("pincode","pincode",'required');
		$this->form_validation->set_rules("dob","date",'required');
		$this->form_validation->set_rules("phno","phone",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("education","edu",'required');
		/*$this->form_validation->set_rules("loid","id",'required');*/
       /* $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("password","pass",'required');
	if($this->form_validation->run())
	{
		$pass=$this->input->post("password");
		$encpass=$this->Mainmodel->encpass($pass);
		$a=array("fname"=>$this->input->post("fname"),
		"lname"=>$this->input->post("lname"),

	    "Address"=>$this->input->post("Address"),
		"District"=>$this->input->post("location"),
		"pincode"=>$this->input->post("pincode"),
		"DOB"=>$this->input->post("dob"),
		"phone"=>$this->input->post("phno"),
		"Gender"=>$this->input->post("gender"),
		"Education"=>$this->input->post("education"));
		/*"loid"=>$this->input->post("loid"));*/
		/*$b=array("email"=>$this->input->post("email"),
		"password"=>$encpass,
		"user_type"=>'1');
		$this->Mainmodel->regist($a,$b);


		redirect('Athu/rs','refresh');



	
	}








}

	public function vie()
	{
		/*$this->load->view('form');*/
		/*$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->ana();
		$this->load->view('reg',$data);
	}

public function qu()
{
	$this->load->view('reg');
}

public function app(){


	$this->load->model('Mainmodel');
   $id=$this->uri->segment(3);
   $this->Mainmodel->app($id);
   redirect(base_url().'Athu/vie');
	}
	


	public function rej(){


	$this->load->model('Mainmodel');
   $id=$this->uri->segment(3);
   $this->Mainmodel->rej($id);
   redirect(base_url().'Athu/vie');
	}
public function vi()
{
 $this->load->view('teach_form');

}
public function in()	
{



       $this->load->library('form_validation');
		$this->load->model('Mainmodel');
		$this->form_validation->set_rules("name","name",'required');
			$this->form_validation->set_rules("add","Address",'required');
		$this->form_validation->set_rules("location","location",'required');
		$this->form_validation->set_rules("pin","pincode",'required');
		$this->form_validation->set_rules("gender","gender",'required');
	    $this->form_validation->set_rules("sub","sum",'required');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("pass","pass",'required');
	if($this->form_validation->run())
	{
		$pass=$this->input->post("password");
		$encpass=$this->Mainmodel->encpass1($pass);
		$a=array("name"=>$this->input->post("name"),
		 "Address"=>$this->input->post("add"),
		"Dist"=>$this->input->post("location"),
		"pincode"=>$this->input->post("pin"),
		"gen"=>$this->input->post("gender"),
		"age"=>$this->input->post("age"),
		"sub"=>$this->input->post("sub"));
		
		$b=array("email"=>$this->input->post("email"),
		"password"=>$encpass,
		"status"=>'1',
		"user_type"=>'0');
		$this->Mainmodel->bc($a,$b);

		redirect(base_url()."Athu/in");

	
	}
}


public function login_page()
	{
		$this->load->view('login');
	}
	
	public function login_both()
	{
		/*$this->load->model('Mainmodel');
		$this->load->view('login');*/
		
   /* $this->load->library('form_validation');

    $this->form_validation->set_rules("email","email",'required');
    $this->form_validation->set_rules("pass","password",'required');
    if($this->form_validation->run())
    {
       			 $this->load->model('Mainmodel');
        		$email=$this->input->post("email");
        		$pass=$this->input->post("pass");
        		$rslt=$this->Mainmodel->selectpas($email,$pass);
        if($rslt)
        {
            	$ids=$this->Mainmodel->getuseri($email);

            	$user=$this->Mainmodel->getuse($ids);
            	$this->load->library(array('session'));
            	$this->session->set_userdata(array('id'=>(int)$user->id,'status'=>$user->status,'user_type'=>$user->user_type));
            	
            	if(($_SESSION['status']=='1') && ($_SESSION['user_type']=='0'))
            		{
                		redirect(base_url().'Athu/vie');
            		}
            
                else if(($_SESSION['status']=='2') && ($_SESSION['user_type']=='1'))
                    {
                    	redirect(base_url().'Athu/vi');
                    }
            	else
            
            		{
                		echo "waiting for approvel";
            		}

        }

        else
        {
            echo"invalid user";
         }

	}

        
 } */

 public function regst()
	{
		$this->load->view('stu_reg');
	}

	public function reg_access()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules("first_name","username",'required');
		$this->form_validation->set_rules("last_name","username",'required');
		$this->form_validation->set_rules("address","useraddress",'required');
		$this->form_validation->set_rules("district","userdis",'required');
		$this->form_validation->set_rules("pincode","userpincode",'required');
		$this->form_validation->set_rules("phoneno","userphno",'required');
		$this->form_validation->set_rules("dob","userdob",'required');
		$this->form_validation->set_rules("gender","usergender",'required');
		$this->form_validation->set_rules("education","usereductn",'required');
		$this->form_validation->set_rules("email","useremail",'required');
		$this->form_validation->set_rules("password","userpassword",'required');
		if($this->form_validation->run())
	{
		$this->load->model('Mainmodel');
		$pass=$this->input->post("password");
		$encpass1=$this->Mainmodel->encpass1($pass);
		$a=array("first_name"=>$this->input->post("first_name"),
		"last_name"=>$this->input->post("last_name"),
		"address"=>$this->input->post("address"),
		"district"=>$this->input->post("district"),
		"pincode"=>$this->input->post("pincode"),
		"phoneno"=>$this->input->post("phoneno"),
		"dob"=>$this->input->post("dob"),
		"gender"=>$this->input->post("gender"),
		"education"=>$this->input->post("education"));
		$b=array("email"=>$this->input->post("email"),
		"password"=>$encpass1,"usertype"=>'0');
		$this->Mainmodel->reg_access($a,$b);
		redirect(base_url().'Athu/regst');
	
	}
	}

	public function regview()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->view();
		$this->load->view('registview',$data);

	}











	public function approved()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->view();
		$this->load->view('approve',$data);

	}

	public function approve()
	{
		$this->load->model('Mainmodel');
		$loginid=$this->uri->segment(3);
		$this->Mainmodel->approve($loginid);
	    redirect('Athu/approved','refresh');
		}
		
	
	public function reject()
	{

		$this->load->model('Mainmodel');
		$loginid=$this->uri->segment(3);
		$this->Mainmodel->reject($loginid);
	    redirect('Athu/approved','refresh');
	}

	
	
	public function teach()
	{
		$this->load->view('teacher_form');
	}

	public function teach_access()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules("name","username",'required');
		$this->form_validation->set_rules("address","useraddress",'required');
		$this->form_validation->set_rules("district","userdis",'required');
		$this->form_validation->set_rules("pincode","userpincode",'required');
		$this->form_validation->set_rules("phoneno","userphno",'required');
		$this->form_validation->set_rules("gender","usergender",'required');
		$this->form_validation->set_rules("age","userage",'required');
		$this->form_validation->set_rules("subject","usersbj",'required');
		$this->form_validation->set_rules("email","useremail",'required');
		$this->form_validation->set_rules("password","userpassword",'required');
		if($this->form_validation->run())
	{
		$this->load->model('Mainmodel');
		$pass=$this->input->post("password");
		$encpass2=$this->Mainmodel->encpass2($pass);
		$a=array("name"=>$this->input->post("name"),
				"address"=>$this->input->post("address"),
				"district"=>$this->input->post("district"),
				"pincode"=>$this->input->post("pincode"),
				"phoneno"=>$this->input->post("phoneno"),
				"gender"=>$this->input->post("gender"),
				"age"=>$this->input->post("age"),
				"subject"=>$this->input->post("subject"));
		$b=array("email"=>$this->input->post("email"),
				"password"=>$encpass2,"status"=>'1',"usertype"=>'1');
		$this->Mainmodel->teach_access($a,$b);
		redirect(base_url().'Athu/teacher_form');
	
	}
	}


	public function logview()
	{
		$this->load->view('log');
	}

	public function loginteach()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email","useremail",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
	{
		$this->load->model('Mainmodel');
		$email=$this->input->post("email");
		$pass=$this->input->post("password");
		$rslt=$this->Mainmodel->selectpass1($email,$pass);
		if($rslt)
		{
			$id=$this->Mainmodel->getusersid($email);
			$user=$this->Mainmodel->getusers($id);
			$this->load->library(array('session'));
			$this->session->set_userdata(array('loginid'=>(int)$user->loginid,
				'status'=>$user->status,
			'usertype'=>$user->usertype));
			if($_SESSION['status']=='1' && $_SESSION['usertype']=='0')
			{
				redirect(base_url().'Athu/wow');
			}
			elseif($_SESSION['status']=='1' && $_SESSION['usertype']=='1')
			{
				redirect(base_url().'Athu/wow1');
			}

			else
			{
				echo "waiting for Approval";
			}
		}
		else
		{
			echo "Invalid user";
		}
		}
		else
		{
			redirect(base_url().'Athu/logview');
		}
	}
/*
	public function updateview()
	{
		$this->load->view('updation');
	}
*/




	public function stud_profile()
        {
            $this->load->model('Mainmodel');
            $id=$this->session->loginid;
            
            $data['user_data']=$this->Mainmodel->view6($id);
            $this->load->view('update',$data);

        }

public function update_det()
        {  
        $b=array("first_name"=>$this->input->post("first_name"),
                     "last_name"=>$this->input->post("last_name"),
                     "address"=>$this->input->post("address"),
                     "district"=>$this->input->post("district"),
                     "pincode"=>$this->input->post("pincode"),
                     "phoneno"=>$this->input->post("phoneno"),
                     "dob"=>$this->input->post("dob"),
                     "education"=>$this->input->post("education"),
                    "gender"=>$this->input->post("gender"));
        $c=array("email"=>$this->input->post("email"));
       
        $this->load->model('Mainmodel');
            if($this->input->post("update"))
            {
            	 $id=$this->session->loginid;
            	 //echo"$id";exit;
                $this->Mainmodel->updatedetails1($b,$c,$id);
               
                redirect(base_url().'Athu/stud_profile');
            }
               
    }


    public function index()
    {

    	$this->load->view('index');
    }

public function not()
{

	$this->load->view('not');
}
public function noti()
	{
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		
		$this->form_validation->set_rules("not","usernam",'required');
		if($this->form_validation->run())
	{
		
		$id=$this->session->loginid;
		
		$a=array("noti"=>$this->input->post("not"),
			"ct_date"=>date('y-m-d'),
			'loginid'=>$id);
		$this->Mainmodel->notiteach($a);
		redirect(base_url().'Athu/view_notificatio');

		
   
}
}
public function notiview()
{

	$this->load->view('notiview');
}
public function view_notification()
{

	$this->load->model('Mainmodel');
	$data['b']=$this->Mainmodel->addno();
	$this->load->view('notiview',$data);
}


 public function deletedetail()
   {
   $this->load->model('Mainmodel');
   $id=$this->uri->segment(3);
   $this->Mainmodel->deletedetail($id);
   redirect(base_url().'Athu/view_notificatio');

	}
	public function view_notificatio()
{
     $id=$this->session->loginid;
	$this->load->model('Mainmodel');
	$data['b']=$this->Mainmodel->addone($id);
	$this->load->view('deletnoti',$data);
}
public function wow()
{

	$this->load->view('studentlog');
}
public function wow1()
{

	$this->load->view('techerlog');
}
public function wow3()
{
	$this->load->view('logout');
}
}


?>