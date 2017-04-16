<?php   session_start();  ?>
<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
      {
       header("Location:Login.php");  
     }
?>
<?php  if(!isset($_POST['submit'])){ ?>
<form name="myForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <br> ค้นหาเที่ยวบิน <br>
      <input type="" name="input">
      <input type="submit" name="submit" value="ค้นหา">
</form>

<!-- <table>
      <tr>
        <th>Flight Number</th>
        <th>Destination</th>
        <th>Source</th>
        <th>TIME IN</th>
        <th>TIME OUT</th>
        <th>TOUR ID</th>
      </tr>
 --><?php }
  else{ 
      $item = $_POST["input"];
      $link=mysqli_connect("localhost","root");
      mysqli_set_charset($link,'utf8');
      $sql="use myways";
      $result=mysqli_query($link,$sql); 
      $sql="SELECT * FROM flight WHERE Flight_no = $item";
      $result=mysqli_query($link,$sql);?>
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
     } 
?>

</table>
