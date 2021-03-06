<html>
<head>
<style>

		table,th,tr{
			 border:1px solid red;
			 border-collapse:collapse;
			 padding:30px;
		}
		
		tr{
			border:1px solid red;
		}
		</style>
</head>
<?php
$link=mysqli_connect("localhost","root","","athulya");
if($link===false)
{
die("error.could not connect".mysqli_connect_error());
}
$query="SELECT *  FROM emloyees ";
/*$query="SELECT *  FROM emloyees limit 3";*/
if($result = mysqli_query($link, $query))
{
	if(mysqli_num_rows($result) > 0)
	{
		echo "<table>";
		echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
				echo "<th>salary</th>";
                
         echo "</tr>";
		 
	while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] ."</td>";
                echo "<td>" . $row['first_name']."</td>";
                echo "<td>" . $row['last_name']."</td>";
                echo  "<td>". $row['salary']."</td>";
            echo "</tr>";
		 
        }
        echo "</table>";
		  mysqli_free_result($result);
    } 
	else
	{
        echo "No  found.";
    }
}
 else{
    echo "ERROR: $sql. " . mysqli_error($link);
}

     
        

mysqli_close($link);


?>
</body>
</html>