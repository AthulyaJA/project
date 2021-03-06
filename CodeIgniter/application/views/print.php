<!DOCTYPE html>
<html>
<head>
	<style>
		input,textarea{

			margin:10px;
			padding: 10px;
			background-color: rgba(0,255,0,1);
			}
	  body{
	  	border: 2px solid red;
	  	width:450px;
	  	height: 550px;
	  	color:red;

	  }

	</style>
	</head>
<body>
	<h1>REGISTRATION FORM</h1>
	<form action="<?php echo base_url()?>Athu/reg" method="post">
		NAME:<input type="text" name="name"><br>
		ADDRESS:<textarea type="Address" name="address"></textarea><br>
		GENDER:<input type="radio" name="gender" id="male" value="male">
    <label for ="male">
         MALE
   </label>
   
    <input type="radio" name="gender" id="female"  value="female">
	   <label for ="female">
	   FEMALE
	   <br>
	
	</label>
		AGE:<input type="text" name="age"><br>
		<input type="email" name="email" placeholder="email"><br>
		<input type="password" name="password" placeholder="password">
		<br>
		
		<input type="submit" value="submit">

	</form>

		




 
</body>
</html>