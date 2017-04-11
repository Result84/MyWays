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
<link rel="stylesheet" href="style.css">
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
<p class="end">\</p>
<a class="waves-effect waves-light btn" href="add_flight.php">add</a>
<a class="waves-effect waves-light btn">edit</a>
<a class="waves-effect waves-light btn">delete</a>
</body>
</html>
