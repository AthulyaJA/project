<html>
<head>
<title>hi</title>
<style>
input{
padding:10px;
margin:20px;
color:blue}
   </style>

  </head>
<body style="color:blue"> 
                
<!--<h1 style= "text-decoration:underline" "color:green">FORM</h1></center>-->
   <form action="sign.php" method="get">
   <fieldset>
   <legend>REGISTATION-FORM</legend>
     <input type="text" name="Name"  placeholder="name" >
     <br>
     <input type="text" name="Age" placeholder="age" >
    <br>
	<input type="email" name="email" placeholder="email"><br>
	<input type="password" name="password" placeholder="password"><br>
	
   <input type="radio" name="gender" id="male">
    <label for ="male">
         MALE
   </label>
   <br>
    <input type="radio" name="gender" id="female" >
	   <label for ="female">
	   FEMALE
	<br>
	
	<input  type="button" value="button" >
	<input type="submit"  value="signin">
	</fieldset>
	
</label>
</form>
</body>
</html>