<?php
$mysql=new mysqli("localhost","root","","ddu1");
$user_id=$_GET['id'];
$user_name=$_GET['name'];
$user_password=$_GET['pwd'];
$user_status=$_GET['ustatus'];
$query=$mysql->query("update ddu_pgky1 set user_name='$user_name', user_password='$user_password' where user_id='$user_id'");

?>
