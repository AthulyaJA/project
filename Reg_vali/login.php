

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
<?php
$passErr=$emailErr="";
if(isset($_POST['submit']))
{
if(empty($email))
$emailErr="email is required";
else
{  
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
$emailErr= "Invalid email";
}
if(empty($pwd))
$passErr="password is required</br>";
}
?>

</style>
<body>
<h1>Login</h1>
<form action="log2.php" method="post"><pre>
  <input type="email" name="email1" placeholder="username"><span class="error">* <?php echo $emailErr;?></span><br>
  <input type="text" name="pass1" placeholder="password"><span class="error">* <?php echo $passErr;?></span><br><br>
  
<input type="submit" value="login">
<a href="formvalidation_new.php">back to home</a></pre>
</form>
</body>
</html>