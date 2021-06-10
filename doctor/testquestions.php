<?php
  require 'header.php';

?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">

      	<div class="row">
          
          <div class="col-lg-12">
            <h3 class="page-header" style="font-weight: 500; color: #000;"><i class="fa fa-user-md" style="margin-top: 3px;"></i> Test Question</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-database"></i>Test Question</li>
              
            </ol>
          </div> 
        </div>
        

      	 <div class="row">

          <div class="col-md-12">
            <div class="panel panel-default">
              
              <div class="panel-body">
                <table class="table table-striped bootstrap-datatable countries" id="countries">
                  <thead>
                    <tr>
                      
                
                      <th class="text-center">Question No</td>    
                      <th class="text-center">Question</td>                  
                      <th class="text-center">Action</td>
                      
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $q=mysqli_query($connect,"select * from survey where doc_id='$doc_id' order by qno");
                     while ($qrow=mysqli_fetch_assoc($q))
                     {
                      $id=$qrow['sid'];
                      
                      ?>

                        <tr>
                          <td class="text-center"><?php echo $qrow['qno'];?></td>
                          <td class="text-center"><?php echo $qrow['question'];  ?></td>
                         
                         
                          <td class="text-center"> <a href="<?php echo "php/deletequestion.php?id=$id" ?>" class="btn btn-danger">Delete</a></td>
                          

                          
                         
                          
                        </tr> 


                      <?php
                     }
                    ?>



                  



                    
                  </tbody>
                </table>
                <div class="text-center">
                  <a href="addquestion.php" class="btn btn-lg btn-primary ">Add Question</a>
                </div>
              </div>

            </div>
            
        
       
          

        </div>


      </section>

       <script>
        //datatable
        $(document).ready(function() {
            $('#countries').DataTable();
            } );
    </script>
      

<?php

require 'footer.php';

?>


