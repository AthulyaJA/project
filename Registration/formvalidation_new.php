<?php
$mysql=mysqli_connect("localhost","root","","athulya");
if($mysql===false)
{
die("Error.couldnot connect".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login and Registeration</title>
  <style>
form{
border:0px solid red;
height:auto;
padding:10px;
margin-left:30%;
}
h1{
text-decoration:underline;
text-align:center;
}
.studl{
font-size:20px;
margin-left:20px;
}
    .stud{
     padding :20px;
 margin:10px;
 margin-left:100px;
 
    }
.sub{
border:1px solid;
width:100px;
height:50px;
border-radius:5px;
text-align:center;
margin-left:150px;
margin-top:30px;
font-size:20px;
}
body{
	 background-image:url("1.jpg");
	 color:white;
	 
	 
}
  </style>
</head>
<?php
$name1Err=$name2Err=$dobErr=$emailErr=$passwordErr="";
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$pwd=$_POST['password'];
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
if(empty($address))
$addressErr="Address is required";
else
{
if (!preg_match ("/^[a-zA-z]*$/", $dob) )
$dobErr="Only alphabets and whitespace are allowed<br>";
}
if(empty($email))
$emailErr="email is required";
else
{  
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
$emailErr= "Invalid email";
}
if(empty($pwd))
$passwordErr="password is required</br>";

if(empty($name1Err)&&empty($name2Err)&&empty($dobErr)&&
   empty($emailErr)&&empty($passwordErr))
   {
  $sql="insert into register(fname,lname,email,password,dob)
     values('$fname','$lname','$email','$pwd','$dob')";
if(mysqli_query($mysql,$sql))
header("Location:login.php");
   }
   }
?>

<body>
    <h1>Registeration Form</h1>
<form method="post" action="">

   <label class="studl">First Name:</label></br>
        <input class="stud" type="text" name="fname" placeholder="Enter Name">
<span style="color:red"><?php echo $name1Err; ?></span></br>
<label class="studl">Last Name:</label></br>
        <input class="stud" type="text" name="lname" placeholder="Enter Name">
<span style="color:red"><?php echo $name2Err; ?></span></br>
<label class="studl"> dob:</label></br>
<input type="date" class="stud" name="dob" placeholder="dob">
<span style="color:red"><?php echo $dobErr; ?></span></br>
<label class="studl">Email:</label></br>
   <input class="stud" type="text" name="email" placeholder="Enter Mail">
<span style="color:red"><?php echo $emailErr; ?></span></br>
<label class="studl">Password:</label></br>
<input class="stud" type="password" name="password" placeholder="Enter Password">
<span style="color:red"><?php echo $passwordErr; ?></span></br>
<input class= "sub" type="submit"  name="submit" value="Submit">
</form>
</body>
</html>
