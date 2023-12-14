<html>
<body>
<h2>Library Search</h2>

<?php 
require('server1.php');
if(isset($_POST['sub']))
{

$id=$_POST['id'];
$sql="select * from lib where id=$id";
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
}
else
{
?>
<form action="" method="POST">
  <label>Enter ID:</label><br>
  <input type="text" id="" name="id"><br>
  <input type="submit" value="SEARCH" name="sub">
<?php
}
?>
</form> 
</body>
</html>

