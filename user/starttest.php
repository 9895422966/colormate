<?php
  require 'header.php';
?>
    <!--sidebar end-->

    <?php
    $_SESSION['score']=0;
    $_SESSION['question']=1;
    $status=-1;
    $score=-100;
    $sql=mysqli_query($connect,"insert into test_details(user_id,doc_id,status,score) values('$user_id','$doc_id','$status','$score');");
    $t1=select1("select * from test_details where score=-100 and user_id='$user_id'");
    $test_id=$t1['test_id'];
    $_SESSION['test_id']=$test_id;
   mysqli_query($connect,"update test_details set score=0 where test_id='$test_id';");

    ?>

    <!--main content start-->
    <section id="main-content" >
      <section class="wrapper">
        <div class="row">

          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Attend Test</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Instructions</li>
            </ol>
          </div>
          

          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <h2>General Instructions</h2>
              <hr style="background-color:#111;">
              <ul class="text-center" style="font-size:130%;">
                <li>You have to answer all the question in the first part, which are provided by the doctor</li>

                <li>Then select the correct option for the image displayed</li>
                <li>Your will get the result after the completion of the test</li>
                <li>Doctor you have selected will analyse the result and suggest further steps</li>

              </ul>
              <a href="survey.php" class="btn btn-lg btn-primary">Start Test</a>
            </div>
          </div>

        </div>
      </section>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      

<?php

require 'footer.php';

?>


