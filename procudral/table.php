<?php
$link=mysqli_connect("localhost","root","","athulya");
if($link===false)
{
die("error.could not connect".mysqli_connect_error());
}

$query="CREATE TABLE person1(id int(6) primary key not null,first_name varchar(50),last_name varchar(50))";

   



if(mysqli_query($link,$query))
{
	echo "data base recorded";
}

else
{
echo "error$query".mysqli_error($link);
}
?>