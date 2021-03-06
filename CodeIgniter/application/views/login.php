<!DOCTYPE html>
<html>
<head>
	<style>

		input
		{

			margin:2px;
		}
		body
		{

			background-image:url("../img/1.jpg");
		}

	</style>
</head>

<body>

     <form action="<?php echo base_url()?>Athu/login_both" method="post">

     	<h1>LOGIN</h1><br>
     	Email-id:<input type="email" name="email"><br>
     	Password:<input type="text" name="pass">
     	<input type="submit" value="login">
     </form>




	</body>
</html>