

<!DOCTYPE html>
<html>
<head>
<style>
input
{
	padding:10px;
	margin:10px;
}
	body{
	 background-image:url("1.jpg");
	 color:white;
	 
	 
}
a{
	color:white;
}

</style>
<body>
<h1>Login</h1>
<form action="log2.php" method="post"><pre>
  <input type="email" name="email1" placeholder="username"  value="<?php echo $email;?>"><span class="error">* <?php echo $emailErr;?></span><br>
  <input type="text" name="pass1" placeholder="password"><br>
  
<input type="submit" value="login">
<a href="regform.php">back to home</a></pre>
</form>
</body>
</html>