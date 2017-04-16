<?php   session_start();  ?>
<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:Login.php");  
       }

          //echo $_SESSION['use'];

?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"><!-- 
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</head>
<body>

<ul>
  <li><a href="home.php">จัดการสายการบิน</a></li>
  <li><a href="promotion.php">จัดการโปรโมชั่น</a></li>
  <li><a href="manage_employee.php">จัดการพนักงาน</a></li>
  <li><a href="passenger.php">ตรวจสอบผู้โดยสาร</a></li>
  <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
</ul>
<center><form name="myForm" action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="get">

<select name="passenger">
      <option value="Cid">Citizen ID</option>
      <option value="Fname">ชื่อ</option>
      <option value="Lname">นามสกุล</option>
      <option value="Passport">Passport No.</option>
</select>
<input type="text" name="txtKeyword" id = "txtKeyword" value="<?php if (isset($_GET['submit'])){
        echo $_GET["txtKeyword"];}?>">
<input type="submit" name ="submit" value="search" ></a>
</form></center>
</body>
</html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>  

<table>
  <tr>
    <th>Cid</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>เพศ</th>
    <th>Passport</th>
    <th>Status</th>
    <!-- <th>Flight<th> -->
  </tr>
  <?php
    if(isset($_GET['submit'])){
        $value = $_GET["passenger"];
        $link=mysqli_connect("localhost","root");
        mysqli_set_charset($link,'utf8');
        $sql="use myways";
        $result=mysqli_query($link,$sql); 
        if($_GET["txtKeyword"] == ""){
          $sql="SELECT * FROM passenger";
        }else{
          $sql="SELECT * FROM passenger WHERE  $value = '".$_GET["txtKeyword"]."' ";
        }
      }else{
        $link=mysqli_connect("localhost","root");
        mysqli_set_charset($link,'utf8');
        $sql="use myways";
        $result=mysqli_query($link,$sql);
        $sql="SELECT * FROM passenger";
      }
      $result=mysqli_query($link,$sql);
      while ($dbarr=mysqli_fetch_array($result)) { 
        ?>
        <tr>
          <td> <?php echo $dbarr['Cid']; ?> </td>
          <td> <?php echo $dbarr['Fname']; ?> </td>
          <td> <?php echo $dbarr['Lname']; ?> </td>
          <td> <?php echo $dbarr['sex']; ?> </td>
          <td> <?php echo $dbarr['passport']; ?> </td>
          <td> <?php echo $dbarr['status']; ?> </td>
          <td><a href="delete_passenger.php?Cid=<?php echo $dbarr["Cid"];?>" onclick="return checkDelete()"">Delete</a>
          </td>
        </tr>



        <?php }
        mysqli_close($link);
        ?>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
<p class="end">\</p>

</body>
</html>

<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>