<?php
$link=mysqli_connect("localhost","root","","athulya");
if($link===false)
{
die("error.could not connect".mysqli_connect_error());
}
/*$id=12;*/
$first_name='Raja';
$last_name='j';
$salary=30000;

$query="insert into Emloyees(first_name,last_name,salary) values('$first_name','$last_name','$salary')";
/*
{
	echo  
	      "first_name :".$first_name."<br>",
		  "last_name :".$last_name."<br>",
		  "salary : ".$salary."<br>";
}*/
if (mysqli_query($link, $query)) 
{
  $id = mysqli_insert_id($link);
  echo "New record created successfully. Last inserted ID is: ".$id;
}

/*if(mysqli_query($link,$query))
{
	echo "data recorded";
}*/

else
{
echo "error$query".mysqli_error($link);
}

?>