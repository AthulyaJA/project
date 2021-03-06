<html>
<head>
<style>
body{
	 background-image:url("1.png");
	 
}
input{
	margin:5px;
}
a{
	
	color:white;
}
</style>
</head>

<body>
<a href="home.php">back to home</a>
<form action="update.php" method="get">

<?php
  $mysql=new mysqli("localhost","root","","insert");
  $id=$_GET['id'];
  $query=$mysql->query("select * from form where id=$id");
  $row=$query->fetch_assoc();
  echo "<pre>	<input type='hidden' name='id' value=".$row['id']."><br>
First Name:		<input type='text' name='fname' value=".$row['fname']."><br>
Last Name:		<input type='text' name='lname' value=".$row['lname']."><br>
Email:			<input type='email' name='email' value=".$row['email']."><br>";
  ?>
  

<input type="submit"  value="update">

</form>
</body>
</html>