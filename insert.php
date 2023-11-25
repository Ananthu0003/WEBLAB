<html>
<body>
<?php
   require('server1.php');
if(isset($_POST['sub']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$sql="insert into form(fname,lname,uname,password)values('$fname','$lname','$uname','$pass')";
$result=mysqli_query($con,$sql);
if($result)
{
  echo"New record successfully created";
}
mysqli_close($con);
}
else
{
 
?>

<form action="" method="POST">
  <label>First name:</label><br><input type="text" id="fname" name="fname"><br>
  <label >Last name:</label><br><input type="text" id="lname" name="lname" ><br>
  <label >user name:</label><br><input type="text" id="uname" name="uname" ><br>
  <label >Password:</label><br><input type="password" id="pass" name="pass" ><br><br>
  <input type="submit" value="Submit" name="sub">
<?php
}
?>
</form> 
</body>
</html>