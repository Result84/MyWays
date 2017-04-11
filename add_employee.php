<?php   session_start();  ?>
<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:Login.php");  
       }

          //echo $_SESSION['use'];

?><script>
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
</script>
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
<form name="myForm" action="/action_page_post.php" onsubmit="return validateForm()" method="post">
  
  <br>EMPLOYEE ID:<br>
  <input type="text" name="employid" value="">

  <br>FIRST NAME:<br>
  <input type="text" name="fname" value="">

  <br>LAST NAME:<br>
  <input type="text" name="lname" value="">

  <br>SEX<br>
  <input type="radio" name="gender" value="male"> Male 
  <input type="radio" name="gender" value="female"> Female

  <br>POSITION<br>
  <select>
  <option value="air">air hosttess</option>
  <option value="cap">captain</option>
  <option value="autor">outher</option>

</select>

  <br><br>
  <input type="submit" value="เพิ่ม">
  <input type="reset">
  
</form> 
<!-- END FORM -->

</body>
</html>
