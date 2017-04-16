<?php
$link=mysqli_connect("localhost","root");
mysqli_set_charset($link,'utf8');
$sql="use myways";
$result=mysqli_query($link,$sql); 
$sql="SELECT * FROM employee WHERE Eid  = '".$_GET["Eid"]."' ";
$result=mysqli_query($link,$sql);
?>