<?php
$link=mysqli_connect("localhost","root");
mysqli_set_charset($link,'utf8');
$sql="use myways";
$result=mysqli_query($link,$sql); 
$sql="DELETE FROM employee WHERE Eid= '".$_GET["Eid"]."' ";
$result=mysqli_query($link,$sql);
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
<script> window.location = 'manage_employee.php';</script>
</body>
</html>