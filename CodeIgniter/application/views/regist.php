<html>
<head>
<title>First site </title>
<style>
	input
	{

		padding:5px;
		
		margin:10px;
		

	}
	body{
	  	border: 2px solid black;
	  	width:450px;
	  	height: 1055px;
	  	color:red;
       background-image:url("../img/1.jpg");
	

	  }
	

</style>
</head>
<body>
<h1> Registration Form </h1>

	<form action="<?php echo base_url()?>Athu/insert" method="post"><pre>
	Firstname:<input type="text" name="fname"></br></br>
	Lastname:<input type="text" name="lname"></br></br>
	Address:<textarea type="text" name="Address"></textarea></br></br>
	District:<input list="location" name="location"></br></br>
				<datalist id="location">
					<option value="TVM">
					<option value="kollam">
					<option value="kottayam">
				</datalist>
	Pincode:<input type="text" name="pincode"></br></br>
	Phone number:<input type="text" name="phno"></br></br>
	Dob:<input type="date" name="dob"></br></br>
	Gender:
		<label for="male">male</label><input type="radio" name="gender" id="male">
	
		<label for="female">Female</label><input type="radio" name="gender" id="female"></br></br>
	Education:<input list="education" name="education"></br></br>
				<datalist id="education">
					<option value="SSLC">
					<option value="plus two">
					<option value="Bsc">
					<option value="MCA">
				</datalist>
	Email:<input type="email" name="email"></br></br>
	Password:<input type="password" name="password"></br></br>
	
	<center><input type="submit" value="Register"></center></br></br>
	</pre>
	</form>
	</body>
	</html>
	