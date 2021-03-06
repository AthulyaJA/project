<!DOCTYPE html>
<html>

    <head>

    	<title>Teacher Registration</title>
    	<style>
    		input
	{

		padding:5px;
		
		margin:10px;

		

	}
	body{
	  	border: 2px solid black;
	  	width:600px;
	  	height: 700px;
	  	color:black;


	  }
	  .a
	  {

	  	color:black;
	  	background-color: blue;
	  }

	
    	</style>
    </head>
          <body>
          	<h1>TEACHER REGISTRATION FOR</h1><pre>
    			<form action="<?php echo base_url()?>Athu/in" method="post">
    		 Name: <input type="text" name="name"><br>
    		Address:<input type="text" name="add"><br>
    		District:<input list="location" name="location"></br>
							<datalist id="location">
									<option value="TVM">
									<option value="kollam">
									<option value="kottayam">
							</datalist><br>
	         pincode:<input tpye="text" name="pin"><br>
			Gender:<label for="male">male</label><input type="radio" name="gender" id="male"><label for="female">Female</label><input type="radio" name="gender" id="female"></br>
			Age:<input type="text" name="age"><br>
	          Subject:<input list="Subject" name="sub">
					       <datalist id="Subject">
									<option value="English">
									<option value="Malayalam">
									<option value="Hindi">
							</datalist><br>
                    Email:<input type="email" name="email"></br>
		Password:<input type="password" name="pass"></br>
	
	<center><input class="a" type="submit" value="Register"></center></br></pre>
</form>
</body>
</html>

