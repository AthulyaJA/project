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
<h1>TABLE</h1>
<table>
 <tr> 
 <th>action</th>
 <th>user_id</th>
 <th>user_name</th>
 <th>user_password</th>
 <th>user_status</th>
 </tr>
 <a href="insform.php"> insert user</a>
 <!--<a href="isertht.php"></a>-->
 
 
 
 
 <!--<a href="delet.php"></a>--->
 <?php
/*$user_name='Ravi';
$user_password='2345';
$user_status=8;*/

$mysql=new mysqli("localhost","root","","ddu1");
/*$query=$mysql->query("insert into ddu_pgky1(user_id,user_name,user_password,user_status) values(7,'$user_name','$user_password','$user_status')");*/
 #$query=$mysql->query("delete from ddu_pgky1 where (user_name='Athul')");
#$query=$mysql->query("update ddu_pgky1 set user_name='Athira' where user_name='Neethu'");
#$query=$mysql->query("alter table  ddu_pgky1 add action ")
$query=$mysql->query("select * from ddu_pgky1");


#for($i=0;$i<5;$i++)
#$row=$query->fetch_assoc();

	foreach($query as $value=>$row)
    {
	 #echo "$value=>$query <br>";
     echo "
	 <td>
	 
	 <a href='isertht.php?id=".$row['user_id']."'>update</a>/
	 
	 <a href='delet.php?id=".$row['user_id']."'>delet</a>
	 
	 
	 </td>
	 
	 <td>".$row['user_id']."</td>
	 <td>".$row['user_name']."</td>
	 <td>" .$row['user_password']."</td>
	 <td>".$row['user_status']."</td>
	 </tr>";
     #echo "<br>";

   }
   

?>
</table>
</body>
</html>

