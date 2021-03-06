<?php
$link=mysqli_connect("localhost","root","","athulya");
if($link===false)
{
die("error.could not connect".mysqli_connect_error());
}
$query="SELECT * FROM Emloyees";



/*if(mysqli_query($link,$query))
{
	echo "data recorded";
}*/

else
{
echo "error$query".mysqli_error($link);
}