<?php
require 'data.php';
$flag=1;
 $res=mysqli_query($connect,"select * from survey WHERE doc_id='$doc_id'");
  	
                                if (isset($res)) 
                                {
                                  while ($r=mysqli_fetch_assoc($res))
                                  {
                               			 $sid=$r['sid'];
                               			 $qno=$r['qno'];
                               			 $test_id=$_SESSION['test_id']; 
                               			 $data=$_POST[$sid];
                               			 $jz=mysqli_query($connect,"INSERT INTO surveyresult( test_id, user_id, qno,response) VALUES ('$test_id','$user_id','$qno','$data');");
                               			 if ($jz>0) 
                               			 {
                               			 	
                               			 }
                               			 else
                               			 {
                               			 	echo "INSERT INTO surveyresult( test_id, user_id, qno,response) VALUES ('$test_id','$user_id','$qno,'$data');";
                               			 	$flag=0;
                               			 	break;
                               			 }
                                  }
                                  if ($flag==1) 
                                  {
                                  	header('location:../testquestion.php');
                                  }


                                }

?>