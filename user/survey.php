<?php
  require 'header.php';


?>
    <!--sidebar end-->

    <!--main content start-->
   <!--main content start-->
   <style type="text/css">

     
   </style>
   <script type="text/javascript"> 
    

   </script>
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-md-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i>Survey Questions</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-user-md"></i>Survey Questions</li>
            </ol>
          </div>
        </div>
      
        <!-- page start-->
        <div class="row">
          <div class="col-md-12">
            <section class="panel">
              <div class="panel-body">
                <div class="row" style="padding: 0px 5px 5px 20px; border:1px solid black;">
                  <h2 style="float:left;color: #000;font-weight: 50; ">Survey Questions</h2>  
                  <p style="float: right;margin:20px;"><span style="color: red;">*</span> Required Fields</p>
                </div>
                
                <div class="tab-content">
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane active">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <form class="form-horizontal" action="php/submitsurvey.php" method="POST">
                          <?php
                          
                            $tid=$_SESSION['test_id']; 


                          $q=mysqli_query($connect,"select * from survey WHERE doc_id='$doc_id'");
                          while ($qrow=mysqli_fetch_assoc($q))
                            {
                              
                          ?>


                          <div class="form-group">
                            
                            <div class="col-md-8 col-md-offset-2">
                              <?php echo $qrow['qno']; ?>.  <?php echo $qrow['question']; ?>
                            </div>
                           
                          </div>
                         
                          <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                              <textarea style="background-color: #eee;" name="<?php echo $qrow['sid'];?>" required class="form-control" cols="20" rows="4"></textarea>
                            </div>
                            
                           
                            </div>

                            <?php

                                }

                            ?>

                           

                          </div>
                        
                          
                          
                          

                          <div class="form-group">
                            <br>
                            <div class="col-md-12 text-center">
                              <input type="submit" class="btn btn-primary" value="Save":>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>

    <script>
        
     

    </script>
      

<?php
 
require 'footer.php';

?>