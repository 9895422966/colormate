<?php
require 'php/data.php';
$id=$_SESSION['xyz'];
                               			 $data=$_POST['pres'];
                               			 $jz=mysqli_query($connect,"update test_details set prescription='$data',status='1' where test_id='$id';");
                               			 if ($jz>0) 
                               			 {
                               			 	  header('location:pendingtest.php');
                               			 }
                               			 else
                               			 {
                               			 	echo "update test_details set prescription='$data',status='1' where test_id='$id';";
                               			 }
                                
                                 
?>