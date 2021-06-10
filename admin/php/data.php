<?php
  session_start();
  require 'connect.php';
  $a=$_SESSION['phone'];


    function select1($a) 
  {
  	require 'connect.php';
  	$r=mysqli_query($connect,$a);
  	$sql=mysqli_fetch_array($r);
  	return $sql;
   }
  
?> 