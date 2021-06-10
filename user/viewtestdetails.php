<?php
  require 'header.php';
  $id=$_GET['id'];
  $t=select1("select * from test_details where test_id='$id'");




?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">

           <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Test Details</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Test Details</li>
            </ol>
          </div>

          <div class="row" >
            <div class="col-lg-11">
              <div class="container " style="background-color: #fff;">
                <h2 class="text-center">Test Report</h2>
                <div class="row" >
                  <br>
                  <div class="col-md-3 col-md-offset-3">
                    <p>Name: &nbsp;<b style="font-size: 150%;"><?php echo $user['name'];?></b></p>
                    <p>Time :&nbsp;<b style="font-size: 150%;"><?php echo $t['time'];?></b></p>


                  </div>
                   <div class="col-md-3 ">
                    <p>Date of Birth: &nbsp;<b style="font-size: 150%;"><?php echo $user['dob'];?></b></p>
                    <p>Score :&nbsp;<b style="font-size: 150%;"><?php echo $t['score'];?></b></p>
                  </div>  
                </div>
                <div class="row text-center">
                  <div class="col-md-6 col-md-offset-3">
                    <h4>Prescription</h4>
                    <p align="justify"><?php echo $t['prescription'];?></p>
                  </div>
                </div>

                 <div class="row text-center">
                  <div class="col-md-6 col-md-offset-3">
                     <div class="row"><a href="profile/testreport.pdf" target="_blank" class="btn btn-success" >Download Report</a> <a href="mytest.php" class="btn btn-info" >Back</a></div>
                     <br>
                  </div>

                 
                </div>
                
              </div>
            </div>
          </div>


        </div>
      </section>
      

<?php

require 'footer.php';

?>



