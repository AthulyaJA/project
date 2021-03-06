<?php

/*$mysql=new mysqli("localhost","root","","ddu1");
$query=$mysql->query("delete from ddu_pgky1 where (user_id=3)");*/
$mysql=new mysqli("localhost","root","","ddu1");
$user_id=$_GET['id'];
$query=$mysql->query("delete from ddu_pgky1 where (user_id=$user_id)");
?>