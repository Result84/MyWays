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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
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
    <center><form name="myForm" action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="GET">
      <select name="employee" id="employeee">
        <option value="Eid">Employee ID.</option>
        <option value="EFname">ชื่อ</option>
        <option value="ELname">นามสกุล</option>
        <option value="Position">Position</option>
      </select>
      <input type="text" name="text" id="textKeyword" value="">
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
        <th>Eid</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>เพศ</th>
        <th>Status</th>
        <th>Position</th>
        <th></th>
      </tr>
      

      <?php
      $db = $_GET["employee"];
      $link=mysqli_connect("localhost","root");
      mysqli_set_charset($link,'utf8');
      $sql="use myways";
      $result=mysqli_query($link,$sql); 
      if($_GET["txtKeyword"] == ""){
        $sql="SELECT * FROM employee";
      }else{
        $sql="SELECT * FROM employee WHERE $db = '".$_GET["txtKeyword"]."'";
      }
      $result=mysqli_query($link,$sql);
      while ($dbarr=mysqli_fetch_array($result)) { 
        ?>
        <tr>
          <td> <?php echo $dbarr['Eid']; ?> </td>
          <td> <?php echo $dbarr['EFname']; ?> </td>
          <td> <?php echo $dbarr['ELname']; ?> </td>
          <td> <?php echo $dbarr['Esex']; ?> </td>
          <td> <?php echo $dbarr['Estatus']; ?> </td>
          <td> <?php echo $dbarr['Etype']; ?> </td>
          <td><a href="delete_employee.php?Eid=<?php echo $dbarr["Eid"];?>" onclick="return checkDelete()"">Delete</a>
          </td>
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