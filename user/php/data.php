<?php 
  session_start();
  require 'connect.php';
  $a=$_SESSION['phone'];
  $phone=$_SESSION['phone'];
  $s="SELECT * FROM user_reg WHERE phone='$a';";
  $user=select1($s);
  $user_id=$user['user_id'];
  $doc_id=$user['doc_id'];



  function select1($a) 
  {
    require 'connect.php';
    $r=mysqli_query($connect,$a);
    $sql=mysqli_fetch_array($r);
    return $sql;
   }

?> 