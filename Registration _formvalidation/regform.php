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

</style>
<body>

<?php
$name1Err=$name2Err=$addressErr=$emailErr=$passwordErr="";
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$email=$_POST['email'];
$pwd=$_POST['pass'];
if(empty($fname))
$name1Err="First name is required";
else
{
if (!preg_match ("/^[a-zA-z]*$/", $fname) )
$name1Err="Only alphabets and whitespace are allowed<br>";
}
if(empty($lname))
$name2Err="Last name is required";
else
{
if (!preg_match ("/^[a-zA-z]*$/", $lname) )
$name2Err="Only alphabets and whitespace are allowed<br>";
}
/*if(empty($address))
$addressErr="Address is required";
else
{
if (!preg_match ("/^[a-zA-z]*$/", $address) )
$addressErr="Only alphabets and whitespace are allowed<br>";
}*/
if(empty($email))
$emailErr="email is required";
else
{  
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
$emailErr= "Invalid email";
}
if(empty($pwd))
$passwordErr="password is required</br>";


   }
   
?>
<h1><b><i>Registration</h1>
<form action="insert.php" method="get"><pre>
 FirstName:	<input type="text" name="fname"><span style="color:red"><?php echo $name1Err; ?></span></br><br>
Last Name:	<input type="text" name="lname"><span style="color:red"><?php echo $name1Err; ?></span></br><br>
Your Email:	<input type="email" name="email"><br>
New Password:	<input type="text" name="pass"><br>
Date of Birth:	<input type="date" name="dob"><br>
<input  style="color:blue"  type="submit" value="Register now"></pre>
</form>
</body>
</html>