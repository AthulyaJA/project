<?php
$mysql=new mysqli("localhost","root","","insert");
$id=$_GET['id'];
$query=$mysql->query("delete from form where (id=$id)");
header('location:home.php');
?>