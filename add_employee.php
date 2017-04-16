<?php   session_start();  
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
      {
       header("Location:Login.php");  
     }
     ?>
     <script>
      function validateForm() {
        var x = document.forms["myForm"]["fname"].value;
        var y = document.forms["myForm"]["employid"].value;
        if (y == "" ) {
          alert("ID must be filled out");
          return false;
        }
        if (x == "" ) {
          alert("Name must be filled out");
          return false;
        }
      }
/*------------------------Validate data;
</script>
<?php  if(!isset($_POST['submit'])){ ?> 
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <title>ADD EMPLOYEE</title>
</head>
<body>
  <ul>
    <li><a href="#">เพิ่มพนักงาน</a></li>
    <li style="float:right"><a class="active" href="home.php">ย้อนกลับ</a><</li>
  </ul>
  <!-- START FORM -->
  <form name="myForm" action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return validateForm()" method="post">

    <br>EMPLOYEE ID:<br>
    <input type="text" name="employid" value="">

    <br>FIRST NAME:<br>
    <input type="text" name="fname" value="">

    <br>LAST NAME:<br>
    <input type="text" name="lname" value="">

    <br>SEX<br>
    <input type="radio" name="gender" value="หญิง"> หญิง 
    <input type="radio" name="gender" value="ชาย"> ชาย

    <br>STATUS<br>
    <select name="STATUS">
      <option value="leave">leave</option>
      <option value="ground">captain</option>
      <option value="autor">outher</option>

    </select>

    <br>POSITION<br>
    <select name="POSITION">
      <option value="air">air hosttess</option>
      <option value="cap">captain</option>
      <option value="autor">outher</option>

    </select>

    <br><br>
    <input type="submit" name="submit" value="เพิ่ม">
    <input type="reset">

  </form> 
  <!-- END FORM -->
</body>
</html>
<?php }
else{
  $employid = $_POST['employid'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $status = $_POST['STATUS'];
  $POSITION = $_POST['POSITION'];

  $link=mysqli_connect("localhost","root");
  mysqli_set_charset($link,'utf8');
  $sql="use myways";
  $result=mysqli_query($link,$sql);
  $sql="INSERT INTO employee VALUES('$employid','$fname','$lname','$gender','$status','$POSITION',NULL);";
  $result=mysqli_query($link,$sql);
  if($result){
    echo '<script> window.location = \'manage_employee.php\';</script>';
    mysqli_close($link);
  }else
  echo "โง่";
}  
?>

