<html>
<body>
<h1>After upadtion</h1>


<?php

$link = mysqli_connect("localhost", "root", "", "athulya");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 
 
$s = "UPDATE person1 SET first_name='Joy' ,last_name='s'  WHERE id=3";
/*$s="delete from person1 where id=1";*/
$sql="select * from person1";
if(mysqli_query($link, $s)){
    echo "Records were updated .";
} 

else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                /*echo "<th>salary</th>";*/
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                /*echo "<td>" . $row['salary'] . "</td>";*/
            echo "</tr>";
        }
        echo "</table>";
       
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);

?>
</body>
</html>