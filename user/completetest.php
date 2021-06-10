<?php
  require 'header.php';
  $score=$_SESSION['score']*10;
  $test_id=$_SESSION['test_id'];
  $x=mysqli_query($connect,"update test_details set score='$score' where test_id='$test_id';");
    $x1=mysqli_query($connect,"update test_details set status='0' where test_id='$test_id';");


?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">


          <div class="col-md-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i>Test Result</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-user-md"></i>Test Result</li>
            </ol>
          </div>
          
        </div>




        <div class="row text-center">
          <p style="font-size:25px;">Test Result</p>
          <hr style="background-color:#456;">
        </div>

        <div class="row text-center">
          <p class="text-dark" style="font-size:48px;color:#000;">Score: <b><?php echo  $_SESSION['score']*10; ?>/100</b></b></p>
          <p>The Doctor will analyse the result make his sugggestions soon</p>
          <a href="index.php" class="btn btn-lg btn-primary">Finish the test</a>
          <hr style="background-color:#000;">

        </div>
      </section>
      

<?php

require 'footer.php';

?>


