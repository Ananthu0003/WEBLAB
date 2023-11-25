<?php
$servername="localhost";
$username="root";
$password="";
$dbname="form1";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
  {
       die("Couldn't connect MYSQL".mysqli_connect_error());
  }
else
  {
      echo("Database connected successfully");
  }
?>