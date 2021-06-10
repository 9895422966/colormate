<?php
  require 'header.php';
  $id=$_GET['id'];
    $_SESSION['xyz']=$id;
  $t=select1("select * from test_details where test_id='$id'");
  $uid1=$t['user_id'];
  $u2=select1("select * from user_reg where user_id='$uid1'");




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
                    <p>Name: &nbsp;<b style="font-size: 150%;"><?php echo $u2['name'];?></b></p>
                    <p>Time :&nbsp;<b style="font-size: 150%;"><?php echo $t['time'];?></b></p>


                  </div>
                   <div class="col-md-3 ">
                    <p>Date of Birth: &nbsp;<b style="font-size: 150%;"><?php echo $u2['dob'];?></b></p>
                    <p>Score :&nbsp;<b style="font-size: 150%;"><?php echo $t['score'];?></b></p>
                  </div>  
                </div>
               
                 <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <div class="form-horizontal" >
                          <?php
                          


                          $q=mysqli_query($connect,"select * from survey WHERE doc_id='$doc_id'");
                          while ($qrow=mysqli_fetch_assoc($q))
                            {
                               $qno=$qrow['qno'];

                              $a1=select1("select * from surveyresult where test_id='$id' and qno='$qno';");
                              
                          ?>


                              <div class="form-group">
                                
                                <div class="col-md-6 col-md-offset-3" style="color:#000;">
                                  <?php echo $qrow['qno']; ?>.  <?php echo $qrow['question']; ?>
                                </div>
                               
                              </div>
                             
                              <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                 <p><?php echo $a1['response'];?></p>
                                </div>
                                
                               
                                </div>

                            <?php

                                }

                            ?>

                           

                          </div>
                        
                          
                          
                          

                          <div class="form-group">
                            <br>
                             <div class="row" style="background-color:#fff;">
                  <div class="col-md-6 col-md-offset-3 text-center">
                    <h4>Add Prescription</h4>
                    


                      <form class="form-horizontal" action="submitpres.php" method="POST">
                         
                          <div class="form-group row">
                            <div class="col-md-12">
                              <textarea style="background-color: #eee;" name="pres" required class="form-control" cols="20" rows="4"></textarea>
                            </div>
                            
                           
                            </div>

                          <div class="form-group row">
                            <br>
                            <div class="col-md-12 text-center">
                              <input type="submit" class="btn btn-primary" value="Save":>
                            </div>
                          </div>
                        </form>


                  </div>
                </div>

                            
                          </div>
                        </div>
                      </div>

               
                    </section>  


                
              </div>
            </div>
          </div>


      


        </div>
      </section>


<?php

require 'footer.php';

?>



