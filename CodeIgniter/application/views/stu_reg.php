



<html>
<head>
<title>First site </title>
<style>
body{
    
   
    text-align:center;
    padding:10px;
    
    color:blue;
    background-image:url("../img/1.jpg");
}
h1{
    color:fuchsia;
}
a{
	text-decoration:none;
	
	
	 
	
}

.menubar ul
{

	
	list-style:none;
	display:inline-flex;
	
    
	
}
.menubar{
	background-color:black;
	text-align:center;
	}
.menubar a
{
	color:#ffffff;
	
	
	}

.menubar li
{
	
	padding:15px;
	
}
.menubar ul li:hover{
	background-color:red;
	border-radius:10px;

	}



</style>
</head>
<body>

<nav class="menubar">
    		<ul>
           			<li><a href="<?php echo base_url()?>Athu/index">Home</a></li>
            		<li><a href="<?php echo base_url()?>Athu/stud_profile">Profile</a></li>
            		<li><a href="<?php echo base_url()?>Athu/view_notification">view Notification</a></li></ul>
            	</nav>
<form method="post" action="<?php echo base_url()?>Athu/reg_access">

<h1>STUDENTS REGISTRATION FORM </h1>

	<b><pre>
	Firstname:	<input type="text" name="first_name"></br></br>
	Lastname:	<input type="text" name="last_name"></br></br>
	Address:	<textarea type="text" name="address"></textarea></br></br>
	District:	<input list="district" name="district"></br></br>
				<datalist id="district">
					<option value="TVM">
					<option value="kollam">
					<option value="kottayam">
				</datalist>
	Pincode:	<input type="text" name="pincode"></br></br>
	Phone number:	<input type="text" name="phoneno"></br></br>
	Dob:	<input type="date" name="dob"></br></br>
	Gender:	<input type="radio" name="gender" id="male"><label for="male">male</label><input type="radio" name="gender" id="female"><label for="female">Female</label></br></br>
	Education:	<input list="education" name="education"></br></br>
				<datalist id="education">
					<option value="SSLC">
					<option value="plus two">
					<option value="Bsc">
					<option value="MCA">
				</datalist>
	Email:	<input type="email" name="email"></br></br>
	Password:	<input type="password" name="password"></br></br>
	<input type="submit" value="Register"></br></br>
	
	</form>
	</body>
	</html>
	
