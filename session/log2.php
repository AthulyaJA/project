<?php

$link=mysqli_connect("localhost","root","","session");

if($link===false)
{
die("error:couldnot connect".mysqli_connect_error());
}
?>
<?php
session_start();
$user=$_POST['user'];
$password=$_POST['pass'];
//echo $user,$password;

$sql="select * from tb__login where username='$user' and password='$password'";
//echo $sql;
$result=mysqli_query($link,$sql);
print_r($result);
	foreach($result as $row){
		$id=$row['id'];
	}
	$_SESSION['logid']=$id;
	//echo $_SESSION['logid'];


header('location:wel.php');
?>