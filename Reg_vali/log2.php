<html>
<head>
<style>
h1{
	color:white;
	text-align:center;
	margin-top:100px;
}
body{
	 background-image:url("1.jpg");
	 color:white;
	 
	 
}
a{
	color:white;
	margin-left:500px;
}
  

</style>

</head>

<body>
<h1>Welcome </h1>



<?php

$link=mysqli_connect("localhost","root","","athulya");

if($link===false)
{
die("error:couldnot connect".mysqli_connect_error());
}
$email=$_POST['email1'];
$password=$_POST['pass1'];

$sql="select * from register where email='$email' and password='$password'";
if($result=mysqli_query($link,$sql)){
if(mysqli_num_rows($result)>0)
	{
	echo "<h1>successfully logged in</h1>";
	mysqli_free_result($result);
	}

	else{
		echo "<h1>invalid username or password</h1>";
}
}

mysqli_close($link);
?>
<a href="login.php">
back to home</a>
</body>
</html>