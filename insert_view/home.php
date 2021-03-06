<html>
<head>
<style>
table,th,td
{
	border:1px solid black;
	border-collapse:collapse;
	background-color:red;
	color:white;
	
}
th,td
{
	padding:10px;
}
table
{
	border-spacing:5px;
	
}
body{
	 background-image:url("1.png");
	 color:white;
	 
}

input{
	margin:5px;
	
}
</style>
</head>

<body>
<h1>INSERT AND VIEW</h1>
<form action="insert.php" method="get"><pre>

<b>
First Name:	<input type="text" name="fname"><br>
Last Name:	<input type="text" name="lname"><br>
Email:  	<input type="email" name="email"><br>
<input type="submit" name="insert" value="insert"><br>
<h1 style="color:white">TABLE</h1>
<table>
<center>
 <tr> 
 <th>id</th>
 <th>firstname</th>
 <th>lastname</th>
 <th>email</th>
 <th>view</th>
 <th>update</th>
 <th>delet</th>
 
 </tr>
 <?php


$mysql=new mysqli("localhost","root","","insert");
$query=$mysql->query("select * from form");




	foreach($query as $value=>$row)
    {
	 
     echo "<tr>
	 
	 
	 
	 <td>".$row['id']."</td>
	 <td>".$row['fname']."</td>
	 <td>".$row['lname']."</td>
	 <td>" .$row['email']."</td>
	 <td>
	 
	 <a href='viewform.php?id=".$row['id']."'>view</a></td>
	 
	 
	 <td><a href='upform.php?id=".$row['id']."'>update</a></td>
  
	 
	 <td><a href='delet.php?id=".$row['id']."'>delet</a></td>
	 
	 
	 
	 </td>
	 
	 </tr>";
     

   }
   

?>

</form>

</body>
</html>

