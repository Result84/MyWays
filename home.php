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
    <th>Flight Number</th>
    <th>Destination</th>
    <th>Start Date</th>
    <th>TIME IN</th>
    <th>TIME OUT</th>
    <th>PRICE</th>
  </tr>
  <tr>
    <td>1</td>
    <td>phuket</td>
    <td>23 February 2017</td>
    <td>9.00 AM</td>
    <td>12.00 AM</td>
    <td>690 Bath</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Chiang Rai</td>
    <td>23 February 2017</td>
    <td>9.00 AM</td>
    <td>9.45 AM</td>
    <td>550 Bath</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Bangkok</td>
    <td>24 February 2017</td>
    <td>3.00 PM</td>
    <td>4.00 PM</td>
    <td>1020 Bath</td>
  </tr>
  <tr>
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

</body>
</html>