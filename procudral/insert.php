<?php
$link=mysqli_connect("localhost","root","","athulya");
if($link===false)
{
die("error.could not connect".mysqli_connect_error());
}
$id=10;
$first_name='Raji';
$last_name='m';

$query="insert into person1(id,first_name,last_name) values('$id','$first_name','$last_name')";

{
	echo  "id  :".$id."<br>",
	      "first_name :".$first_name."<br>",
		  "last_name :".$last_name."<br>";
}

if(mysqli_query($link,$query))
{
	echo "data recorded";
}

else
{
echo "error$query".mysqli_error($link);
}

?>