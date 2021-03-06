

<?php
$mysql=new mysqli("localhost","root","","insert");

$fname=$_GET['fname'];
$lname=$_GET['lname'];
$email=$_GET['email'];
$query=$mysql->query("insert into form(fname,lname,email) values('$fname','$lname','$email')");
header('location:home.php');

?>