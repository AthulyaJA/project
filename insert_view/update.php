<?php
$mysql=new mysqli("localhost","root","","insert");
$id=$_GET['id'];
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$email=$_GET['email'];
$query=$mysql->query("update form set fname='$fname',lname='$lname',email='$email' where id='$id'");

 header('location:home.php');

?>