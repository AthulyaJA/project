<!DOCTYPE html>
<html>
<head>
<style>
body{
	border:2px solid red;
	height:400px;
	width:400px;
	
}
input
{
	padding:10px;
	margin:10px;
	background:rgba(255,0,0,0.1);
}
	

</style>
<body>
<h1>UPDATION</h1>
<!---<form action="isert.php" method="get">-->
<form  action="update.php" method="get">
<!--<input type='hidden' name='id' value="user_id"><br>
       Name:<input type='text' name='name' value="name"><br>
      Password :<input type='text' name='pwd' value='user_password'><br>
	  Status:<input type='text' name='ustatus' value='user_status'><br>-->

<?php
  $mysql=new mysqli("localhost","root","","ddu1");
  $user_id=$_GET['id'];
  $query=$mysql->query("select * from ddu_pgky1 where user_id=$user_id");
  $row=$query->fetch_assoc();
echo "<input type='hidden' name='id' value=".$row['user_id']."><br>
       Name:<input type='text' name='name' value=".$row['user_name']."><br>
      Password :<input type='text' name='pwd' value=".$row['user_password']."><br>
	  Status:<input type='text' name='ustatus' value=".$row['user_status']."><br>";
	  
?>

<!--<input type="text" name="name"  placeholder="user_name"><br>
<input type="text" name="password" placeholder="user_password"><br>
<input type="text" name="status" placeholder="user_status"><br>-->
<input type="submit" value="update">
</form>
</body>
</html>