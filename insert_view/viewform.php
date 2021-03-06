<html>
<head>
<style>
body{
	 background-image:url("1.png");
	 
}
input{
	margin:5px;
}
</style>
</head>

<body>

<form action="home.php" method="get">

<?php
  $mysql=new mysqli("localhost","root","","insert");
  $id=$_GET['id'];
  $query=$mysql->query("select * from form where id=$id");
  $row=$query->fetch_assoc();
  echo "<input type='hidden' name='id' value=".$row['id']."><br>
First Name:<input type='text' name='fname' value=".$row['fname']."><br>
Last Name:<input type='text' name='lname' value=".$row['lname']."><br>
Email:<input type='email' name='email' value=".$row['email']."><br>";
  ?>
  

<input type="submit"  value="back to home">

</form>
</body>
</html>