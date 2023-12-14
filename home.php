<html>
<head>
<style>
.body{
  background-image: url("images.jpg");
  background-repeat: no-repeat;
  background-size:1400px 650px;
  color:red;
}
</style>
</head>
<body class="body">
<h1 style="text-bold: 2px 2px red;">Library Management System</h1>
<div style="margin-left:800;margin-top:100;height: 130px;
  width:25%;border: 2px solid red;border-radius: 5px;padding: 8px;">

<?php
   require('server1.php');
if(isset($_POST['sub']))
{
$uname=$_POST['uname'];
$pass=$_POST['pass'];
if($uname="admin" & $pass="admin123")
{
   header('Location:ex.html');
}
}
else
{
?>
<form action="" method="POST">
  <label >User name:</label><br>
  <input type="text" name="uname" ><br>
  <label > Password:</label><br>
  <input type="password" name="pass"><br><br>
  <input type="submit" name="sub">
<?php
}
?>
</form> 
</div>
</body>
</html>

