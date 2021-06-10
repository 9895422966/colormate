  <?php
  require '../php/connect.php'; 
  $phone=$_POST['phone'];
  echo "<button data-dismiss='modal' class='btn btn-default' type='button'>Close</button>";
                        echo "<button class='btn btn-danger' onclick='requestdelete(".$phone.")' type='button'> Confirm</button>";
?>


