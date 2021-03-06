

<?php
$mysql=new mysqli("localhost","root","","ddu1");
#$user_id=$_GET['id'];
#$query=$mysql->query("alter table  ddu_pgky1  add  (user_id=$user_id) INT");
#$user_id=$_GET['id'];
$user_name=$_GET['name'];
$user_password=$_GET['password'];
$user_status=$_GET['status'];
$query=$mysql->query("insert into ddu_pgky1(user_name,user_password,user_status) values('$user_name','$user_password','$user_status')");

?>