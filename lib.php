<html>
<head>
<style>
.navtext{
 text-align: right;
}
</style>
</head>
<body>
<nav style="background-color:red;height:50" ><a href="home.html" class="navtext">Home</a></nav>
<h2>Library</h2>
<?php
   require('server1.php');
if(isset($_POST['sub']))
{
$bname=$_POST['bname'];
$auth=$_POST['auth'];
$publisher=$_POST['publisher'];
$quan=$_POST['quan'];
$brate=$_POST['brate'];
$sql="insert into lib(bname,auth,publisher,quan,brate)values('$bname','$auth','$publisher','$quan','$brate')";
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

  <label>Book name:</label><br>
  <input type="text" id="bname" name="bname"><br>

  <label >Author name:</label><br>
  <input type="text" id="Auth" name="auth"><br>

  <label>Publisher:</label><br>
  <input type="text" id="publisher" name="publisher"><br>

  <label >Quantity:</label><br>
  <input type="number" id="quan" name="quan"><br>

  <label >Book rate:</label><br>
  <input type="text" id="brate" name="brate"><br><br>

  <input type="submit" value="Submit" name="sub">
<?php
}
?>
</form>
</body>
</html>

