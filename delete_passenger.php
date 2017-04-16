<?php
$link=mysqli_connect("localhost","root");
mysqli_set_charset($link,'utf8');
$sql="use myways";
$result=mysqli_query($link,$sql); 
$sql="DELETE FROM passenger WHERE Cid= '".$_GET["Cid"]."' ";
$result=mysqli_query($link,$sql);
mysqli_close($link);

?>

<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
<script> window.location = 'passenger.php';</script>
</body>
</html> 