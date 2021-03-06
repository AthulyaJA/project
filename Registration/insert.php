<?php

$mysql=new mysqli("localhost","root","","athulya");
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$email=$_GET['email'];
$pass=$_GET['pass'];
$dob=$_GET['dob'];
$q=$mysql->query("insert into register(fname,lname,email,password,dob) values('$fname','$lname','$email','$pass','$dob')");
header('location:regform.php');

?>