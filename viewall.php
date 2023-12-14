<html>
<body>
<?php 
require('server1.php');
$sql="select * from lib";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
   while($row=mysqli_fetch_assoc($result))
   {
       echo "<br>","BOOK NAME : ".$row["bname"],"<br>";
       echo "AUTHOR : ".$row["auth"],"<br>";
       echo "PUBLISHER : ".$row["publisher"],"<br>";
       echo "QUANTITY : ".$row["quan"],"<br>";
      echo "BOOK RATE : ".$row["brate"],"<br>";
    }
}
else
{
   echo"NO RESULTS";
}
mysqli_close($con);
?>
</body>
</html>
