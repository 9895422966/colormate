<?php 

require '../php/connect.php'; 
$id=$_POST['id'];
$s=mysqli_query($connect,"select * from localbody where lb_id='$id';");
$q=mysqli_fetch_array($s);
$d=$q['name'];
?>


  <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Delete District</h4>
    </div>
    <div class="modal-body" id="">

      <p align="center" style="font-size: 120%;">Do you want to delete the Localbody <b><?php echo $d ?></b>?</p>
        
    </div>                  
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        
        <?php echo "<a class='btn btn-danger' href='php/phpdellb.php?id=$id'> Confirm </a>"?>
    </div> 



