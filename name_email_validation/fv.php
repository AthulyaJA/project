<?php
$name= $email=
$emailErr= $nameErr=" ";
if(isset($_POST['submit']))
{

		
		if(empty($_POST['name'])) 
			{
				
				$nameErr = "name is  required<br>";
			} 
	
				
		else
		{
			$name=$_POST['name'];
			if(!preg_match("/^[a-zA-Z ]*$/",$name))
			{
				 $nameErr= "only letter  and space";
	  
			}
			
		}
		
	if(empty($_POST['email'])) 
			{    
				$emailErr = "email is requiredx";
			}
		
	else
	{
		$email=$_POST['email'];
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
				{
					echo  $email."<br>";
				} 
			
		else 
			{
		$emailErr="is not a valid email address";
	
	
				}
	}
	
  }

 ?>
<!DOCTYPE html>
	<html>
		<head>
			<style>
input
{
	padding:10px;
	margin:10px;
}
.error {color: #FF0000;}
	
		</head>
			</style>
<body>
<form action="fv.php" method="post"><pre>
 Name:<input type="text" name="name" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span><br><br>
Your Email:<input type="text" name="email" value="<?php echo $email;?>"><span class="error">*<?php echo $emailErr;?></span><br><br>

<input type="submit" name="submit" value="Register now"></pre>

		</form>
	</body>
</html>