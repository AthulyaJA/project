<?php


$emailErr= $fnameErr=" ";

if(isset($_POST['submit']))
{
	echo "hai";
		
		if(empty($_POST['fname'])) 
			{
				
				$fnameErr ="name is it required";
				
			} 
	
				
		else
		{
			$fname=$_POST['fname'];
			if(!preg_match("/^[a-zA-Z ]*$/",$fname))
			{
				 $fnameErr="only letter  and space";
	  
			}
			
		}
		if (empty($_POST["lname"]))
			{  
         $lnameErr = "Name is required";
		 
			} 
	else {  
        $lname =$_POST["lname"];  
             
            if(!preg_match("/^[a-zA-Z ]*$/",$lname))
				{  
                $nameErr = "Only alphabets and white space are allowed";  
				}  
    }  
		
	if(empty($_POST['email'])) 
			{    
				$emailErr = "email is  requiredx";
			}
		
	else
	{
		$email=$_POST['email'];
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
				{
					echo  $email."<br>";
				} 
			
		else 
			{
		$emailErr="is not a valid email address";
	
	
			}
			
	}
  }

 ?>


<!DOCTYPE html>
<html>
<head>
<style>
input
{
	padding:10px;
	margin:10px;
	background-color:red;
}
	
body{
	 background-image:url("1.jpg");
	 color:white;
	 
	 
}
.error {color: #FF0000;}

</style>
<body>

<h1><b><i>Registration</h1>

<form action="insert.php" method="get"><pre>
 FirstName:	<input type="text" name="fname"><span class="error">* <?php echo $fnameErr;?></span><br><br>
Last Name:	<input type="text" name="lname"><br>
Your Email:	<input type="text" name="email"><span class="error">* <?php echo $emailErr;?></span><br><br>
New Password:	<input type="text" name="pass"><br>
Date of Birth:	<input type="date" name="dob"><br>
<input  style="color:blue"  type="submit"  name="submit" value="Register now"></pre>
</form>
</body>
</html>