<?php 

require '../php/connect.php'; 
$id=$_POST['id'];
$s=mysqli_query($connect,"select * from infrastructure where inf_type_id='$id';");
$q=mysqli_fetch_array($s);
$d=$q['inf_type_name'];
?>


	<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Delete Infrastructure Type</h4>
    </div>
    <div class="modal-body" id="">

    	<p align="center" style="font-size: 120%;">Do you want to delete the Resource type <b><?php echo $d ?></b>?</p>
        
    </div>                  
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        
        <?php echo "<a class='btn btn-danger' href='php/phpdelinftype.php?id=$id'> Confirm </a>"?>
    </div> 



