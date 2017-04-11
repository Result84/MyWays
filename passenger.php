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
<meta charset="UTF-8">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
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

</body>
</html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<table>
  <tr>
    <th>passport id</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>เพศ</th>
    <th>ที่อยู่</th>
    <th>Status</th>
    <th>Flight<th>
  </tr>
  <tr>
    <td>1</td>
    <td>สมรักษ์</td>
    <td>สุขใจ</td>
    <td>ชาย</td>
    <td>-</td>
    <td>NO</td>
    <td>CNX125</td>
  </tr>
  <tr>
    <td>2</td>
    <td>สายใจ</td>
    <td>สวยมาก</td>
    <td>หญิง</td>
    <td>เชียงใหม่</td>
    <td>YES</td>
    <td>XXB55</td>
  </tr>
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
<a class="waves-effect waves-light btn" href="add_flight.php">add</a>
<a class="waves-effect waves-light btn">edit</a>
<a class="waves-effect waves-light btn">delete</a>
<a class="waves-effect waves-light btn">search</a>

</body>
</html>