  <?php
  require '../php/connect.php'; 
  $phone=$_POST['phone'];
  echo "<button data-dismiss='modal' class='btn btn-default' type='button'>Close</button>";
                        echo "<button class='btn btn-success' onclick='requestapprove(".$phone.")' type='button'> Confirm</button>";
?>


