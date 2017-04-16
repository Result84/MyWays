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
<center><form name="myForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
<select name="flight" id = "flight">
      <option value="Flight No.">Flight Number</option>
      <option value="Fname">ชื่อ</option>
      <option value="Lname">นามสกุล</option>
      <option value="Passport">Passport No.</option>
</select>
<input type="text" name="txtKeyword" value="<?php if (isset($_GET['submit'])){
        echo $_GET["txtKeyword"];}?>">
<input type="submit" name ="search" value="search" ></a>
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
    <th>Flight Number</th>
    <th>Destination</th>
    <th>Source</th>
    <th>TIME IN</th>
    <th>TIME OUT</th>
    <th>TOUR ID</th>
  </tr>
  
  <?php
    if(isset($_GET['submit'])){
        $value = $_GET["flight"];
        $link=mysqli_connect("localhost","root");
        mysqli_set_charset($link,'utf8');
        $sql="use myways";
        $result=mysqli_query($link,$sql); 
        if($_GET["txtKeyword"] == ""){
          $sql="SELECT * FROM flight";
        }else{
          $sql="SELECT * FROM flight WHERE  $value = '".$_GET["txtKeyword"]."' ";
        }
      }else{
        $link=mysqli_connect("localhost","root");
        mysqli_set_charset($link,'utf8');
        $sql="use myways";
        $result=mysqli_query($link,$sql);
        $sql="SELECT * FROM flight";
      }
      $result=mysqli_query($link,$sql);
      while ($dbarr=mysqli_fetch_array($result)) { 
        ?>
        <tr>
          <td> <?php echo $dbarr['Flight_no']; ?> </td>
          <td> <?php echo $dbarr['Destination']; ?> </td>
          <td> <?php echo $dbarr['Source']; ?> </td>
          <td> <?php echo $dbarr['T_in']; ?> </td>
          <td> <?php echo $dbarr['T_out']; ?> </td>
          <td> <?php echo $dbarr['tour_id']; ?> </td>
     
    </tr>



    <?php }
    mysqli_close($link);
    ?>
</table>
<p class="end">\</p>
<a class="waves-effect waves-light btn" href="add_flight.php">add</a>
<a class="waves-effect waves-light btn">edit</a>
<a class="waves-effect waves-light btn" href="update_flight.php" >update</a>
<a class="waves-effect waves-light btn">delete</a>

</body>
</html>