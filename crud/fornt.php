<html>
<head>
<style>
table,th,td
{
	border:1px solid black;
	border-collapse:collapse;
	background-color:red;
}
th,td
{
	padding:10px;
}
table
{
	border-spacing:5px;
}
</style>
</head>

<body>
<h1>TABLEe</h1>
<table>
 <!--<tr> 
 <th>user_id</th>
 <th>user_name</th>
 <th>user_password</th>
 <th>user_status</th>
 </tr>
 <?php
 $mysql=new mysqli("localhost","root","","ddu1");
 $query=$mysql->query("select * from ddu_pgky1");
 
 echo "<tr> 
 <th>action</th>
 <th>user_id</th>
 <th>user_name</th>
 <th>user_password</th>
 <th>user_status</th>
 </tr>";
 
 	foreach($query as $value=>$row)
	{
	echo "<tr> <td>".$row['user_id']."</td><td>".$row['user_name']."</td><td>" .$row['user_password']."</td><td>".$row['user_status']."</td></tr>";
	}
	?>
</table>
</body>
</htm