<html>
<body>
<h2>Library Search</h2>

<?php 
require('server1.php');
if(isset($_POST['sub']))
{

$id=$_POST['id'];
$sql="delete from lib where id=$id";
$result=mysqli_query($con,$sql);
if($result)
{
  echo"record successfully deleted";
}
else
{
  echo" deletion failed";
}
mysqli_close($con);
}
else
{
?>
<form action="" method="POST">
  <label>Enter ID:</label><br>
  <input type="text" id="" name="id"><br>
  <input type="submit" value="DELETE" name="sub">
<?php
}
?>
</form> 
</body>
</html>

