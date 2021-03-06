



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
		$emailErr="<h1>invalid username or password";
}
}

mysqli_close($link);

?>
