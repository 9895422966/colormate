  <?php
  require '../php/connect.php'; 
  $phone=$_POST['phone'];
  $sql=mysqli_query($connect,"update volunteer_data set status='1' where phone='$phone';");
  $sql=mysqli_query($connect,"update login set type='vol' where phone='$phone';");
  if ($sql>0) 
  {
    echo 1;
  }
  else
    echo 0;
?>


