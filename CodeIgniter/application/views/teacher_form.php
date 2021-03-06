



<html>
<head>
<title>First site </title>
<style>
body{
    
    
    text-align:center;
    padding:16px;
   
    background-image:url("../img/1.jpg");
}
h1{
    text-decoration:none;
    color:blue;
    font-size:30px;
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
            	</nav><pre>
<form method="post" action="<?php echo base_url()?>Athu/teach_access"><h1> TEACHERS REGISTRATION FORM </h1>
Name:<input type="text" name="name"></br></br>
Address:<textarea type="text" name="address"></textarea></br></br>
District:<input list="district" name="district"></br></br>
				<datalist id="district">
					<option value="TVM">
					<option value="kollam">
					<option value="kottayam">
				</datalist>
Pincode:<input type="text" name="pincode"></br></br>
Phone number:<input type="text" name="phoneno"></br></br>
Gender:<input type="radio" name="gender" id="male" value="male"><label for="male">male</label><input type="radio" name="gender" id="female" value="male"><label for="female">Female</label></br></br>
Age:<input type="text" name="age"></br></br>
Subject:<input list="Subject" name="subject"></br></br>
				<datalist id="Subject">
					<option value="computer science">
					<option value="Electronics">
					<option value="Biotech">
                    <option value="polymer">
				</datalist>
Email:<input type="email" name="email"></br></br>
Password:<input type="password" name="password"></br></br>
	<input type="submit" value="Register"></br></br>
	</form>
	</body>
	</html>
