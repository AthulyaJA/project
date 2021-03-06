<?php
$link=mysqli_connect("localhost","root","","athulya");
/*$query=$link->query("CREATE DATABASE athu2");*/

if($link===false)
{
die("error.could not connect".mysqli_connect_error());
}
$query="CREATE DATABASE athulya";

if(mysqli_query($link,$query))
{
	echo "data base recorded";
}

else
{
echo "error$query".mysqli_error($link);
}
/*mysqli_close($link)*/
/*echo "connect successfully".mysqli_get_host_info($link);*/
$CREATE TABLE CUSTOMERS(
   ID   INT              NOT NULL,
   NAME VARCHAR (20)     NOT NULL,
   AGE  INT              NOT NULL,
   ADDRESS  CHAR (25) ,
   SALARY   DECIMAL (18, 2),       
   PRIMARY KEY (ID)
);



?>




echo 'Connected successfully<br />';
         $sql = "CREATE TABLE tutorials_tbl( ".
            "tutorial_id INT NOT NULL AUTO_INCREMENT, ".
            "tutorial_title VARCHAR(100) NOT NULL, ".
            "tutorial_author VARCHAR(40) NOT NULL, ".
            "submission_date DATE, ".
            "PRIMARY KEY ( tutorial_id )); ";
         mysql_select_db( 'TUTORIALS' );
         $retval = mysql_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not create table: ' . mysql_error());
         }
         echo "Table created successfully\n";