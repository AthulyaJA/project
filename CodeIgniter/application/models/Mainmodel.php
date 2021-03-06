<?php
class Mainmodel extends CI_model
{
	public function reg($a)
	{
		$this->db->insert("myform1",$a);
	}
public function encapass($pass)
{
	return password_hash($pass,PASSWORD_BCRYPT);
}

public function view1()
{
	$this->db->select('*');
	$qry=$this->db->get("myform1");

	return $qry;
}
/*public function update()
{
	$a=array('name'=>$this->input->post("Name"),
		'Address'=>$this->input->post("Address"),
		'Gender'=>$this->input->post("Gender"),
		'Age'=>$this->input->post("Age"),
		'Email'=>$this->input->post("Email"));
	$id=$this->uri->segment(3)
    $this->load->model('Mainmodel')
}*/
public function singledetails($id)
	    {
	    	$this->db->select('*');
	    	$this->db->where("id",$id);
	    	$qry=$this->db->get("myform1");
            return $qry;  
             }
    public function singledata()
	    {
	    	$qry=$this->db->get("myform1");
	 		return $qry;  
             }
    public function updatedetails($a,$id)
	    {
	    	$this->db->select('*');
	    	$this->db->where("id",$id);
	    	$qry=$this->db->update("myform1",$a);
            return $qry;  
         }

public function deletedetails($id)
{


	    	
	    	$this->db->where("id",$id);
	    	$this->db->delete("myform1");
           

}

public function approvel($id){


            

        $qry=$this->db->where("id",$id);
        /*$this->db->group_by('status', $status); */ 
        $qry=$this->db->set("status",'1');
        $qry=$this->db->update("myform1");
            return $qry; 

			/*$this->db->where("status",$status);
	    	$this->db->approvel("myform1");*/
           

					}
 public function rejected($id){
	         
        
        $qry=$this->db->where("id",$id);
       /* $this->db->group_by('status', $status);  */
        $qry=$this->db->set("status",'2');
        $qry=$this->db->update("myform1");
            return $qry; 

		
           

					}

	public function getuserid($email)
{
  $this->db->select('id');
  $this->db->from("myform1");
  $this->db->where("email",$email);
  return $this->db->get()->row('id');

}
public function getuser($id)
{
  $this->db->select('*');
  $this->db->where("id",$id);
  $this->db->get("myform1");
  $this->db->get()->row();
}
public function selectpass($email,$pass)
{
  $this->db->select('password');
  $this->db->from("myform1");
  $this->db->where("email",$email);
  $qry= $this->db->get()->row('password');
  return $this->verifypass($pass,$qry);
 
}
public function verifypass($pass,$qry)
{
  return password_verify($pass,$qry);
}
public function encpass($pass)
{
	return password_hash($pass,PASSWORD_BCRYPT);
}
/*
public function regist($a,$b){

	/*$this->db->insert("tableone",$a);*/


	/*$this->db->insert("tabletwow",$b);
	$log=$this->db->insert_id();
	$a['loid']=$log;
	$this->db->insert('tableone',$a);
}
public function ana()
{
	$this->db->select('*');
	$this->db->join('tabletwow','tabletwow.ids=tableone.loid','inner');
	$qry=$this->db->get("tableone");

	return $qry;
}

public function app($ids){


            

        $qry=$this->db->where("ids",$ids);
        /*$this->db->group_by('status', $status); */ 
       /* $qry=$this->db->set("status",'1');
        $qry=$this->db->update("tabletwow");
            return $qry; 

			/*$this->db->where("status",$status);
	    	$this->db->approvel("myform1");
	    }*/
           

					
 /*public function rej($ids){
	         
        
        $qry=$this->db->where("ids",$ids);
       /* $this->db->group_by('status', $status);  */
        /*$qry=$this->db->set("status",'2');
        $qry=$this->db->update("tabletwow");
            return $qry; 

		
           

					}
public function bc($a,$b)
	{
	$this->db->insert("teacher",$a);
	$log=$this->db->insert_id();
	$a['loid']=$log;
	$this->db->insert("tabletwow",$b);
	return $insert_id=$this->db->insert_id();
	}
	public function op()
{
	$this->db->select('*');
	$this->db->join('tabletwow','tabletwow.ids=teacher.loid','inner');
	$qry=$this->db->get("teacher");

	return $qry;
}

public function encpass1($pass)
{
	return password_hash($pass,PASSWORD_BCRYPT);
}

public function getuseri($email)
{
  $this->db->select('ids');
  $this->db->from("tabletwow");
  $this->db->where("email",$email);
  return $this->db->get()->row('ids');

}
public function getuse($ids)
{
  $this->db->select('*');
  $this->db->get("tabletwow");
  $this->db->where("ids",$ids);
  
  $this->db->get()->row();
}
public function selectpas($email,$pass)
{
  $this->db->select('password');
  $this->db->from("tabletwow");
  $this->db->where("email",$email);
  $qry= $this->db->get()->row('password');
  return $this->verifypas($pass,$qry);
 
}
public function verifypas($pass,$qry)
{
  return password_verify($pass,$qry);
}*/
public function reg_access($a,$b) 
  {
      $this->db->insert("logintb",$b);
      $loginid=$this->db->insert_id();
      $a['loginid']=$loginid;
      $this->db->insert("regist_table",$a);
      return $insert_id=$this->db->insert_id();
  } 
  public function encpass1($pass)
  {
    return password_hash($pass,PASSWORD_BCRYPT);
  }
  
  public function view()
  {
    $this->db->select('*');
    $this->db->join('logintb','logintb.loginid=regist_table.loginid','inner');
    $qry=$this->db->get("regist_table");
    return $qry;
  }

  public function approve( $loginid)
  {
    $qry=$this->db->where("loginid",$loginid);
    $qry=$this->db->set("status",'1');
    $qry=$this->db->update("logintb");
    return $qry;
  }
  public function reject( $loginid)
  {
    $qry=$this->db->where("loginid",$loginid);
    $qry=$this->db->set("status",'2');
    $qry=$this->db->update("logintb");
    return $qry;
  }



  public function teach_access($a,$b) 
  {
      $this->db->insert("logintb",$b);
      $loginid=$this->db->insert_id();
      $a['loginid']=$loginid;
      $this->db->insert("teach_tb",$a);
      return $insert_id=$this->db->insert_id();
  } 

  public function encpass2($pass)
  {
    return password_hash($pass,PASSWORD_BCRYPT);
  }

  public function getusersid($email)
  {
    $this->db->select('loginid');
    $this->db->from("logintb");
    $this->db->where("email",$email);
    return $this->db->get()->row('loginid');
  }
  public function getusers($id)
  {
    $this->db->select('*');
    $this->db->from("logintb");
    $this->db->where("loginid",$id);
    return $this->db->get()->row();
  }
  public function selectpass1($email,$pass)
  {
    $this->db->select('password');
    $this->db->from("logintb");
    $this->db->where("email",$email);
    $qry=$this->db->get()->row('password');
    return $this->verifypass($pass,$qry);
  }
  public function verifypass1($pass,$qry)
  
  {
    return password_verify($pass,$qry);
  }
  
  public function view6($id)
{
  $this->db->select("*");
  $this->db->join('logintb','logintb.loginid=regist_table.loginid','inner');
  $qry=$this->db->where("logintb.loginid",$id);
  $qry=$this->db->get("regist_table");
  return $qry;
}

public function updatedetails1($b,$c,$id)
             {
              $this->db->select("*");
               $qry=$this->db->where("regist_table.loginid",$id);
               $qry=$this->db->join('logintb','logintb.loginid=regist_table.loginid','inner');
               $qry=$this->db->update("regist_table",$b);
               $qry=$this->db->where("logintb.loginid",$id);
                $qry=$this->db->update("logintb",$c);
                return $qry;
                //echo"$qry";exit;

             }



public function notiteach($a)
{
$this->db->insert("notification",$a);

}
public function addno()
  {
    $this->db->select('*');
    $this->db->join('teach_tb','teach_tb.loginid=notification.loginid','inner');
    $qry=$this->db->get("notification");
    return $qry;
  }

  public function addone($id)
  {
    $this->db->select('*');
    $qury=$this->db->where('loginid',$id);
    $qry=$this->db->get("notification");
    return $qry;
  }
  public function deletedetail($id)
{ 
        $this->db->where("id",$id);
        $this->db->delete("notification");
}
}
?>