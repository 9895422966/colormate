<?php
  require 'header.php';

?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">

      	<div class="row">
          
          <div class="col-lg-12">
            <h3 class="page-header" style="font-weight: 500; color: #000;"><i class="fa fa-user-md" style="margin-top: 3px;"></i>Test Questions</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-database"></i>Test Questins</li>
              
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
                      
                
                      <th class="text-center">Question</td>    
                      <th class="text-center">Option A</td>                  
                      <th class="text-center">Option B</td>
                      <th class="text-center">Option C</th>
                      <th class="text-center">Option D</td>
                      <th class="text-center">Answer</td>
                      <th class="text-center">Action</td>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $q=mysqli_query($connect,"select * from test");
                     while ($qrow=mysqli_fetch_assoc($q))
                     {
                      $id=$qrow['qid'];
                      
                      ?>

                        <tr>
                          <td class="text-center"><img src="test/<?php echo $qrow['qimage'];  ?>" height="100px"></td>
                          <td class="text-center"><?php echo $qrow['opt_a'];?></td>
                          <td class="text-center"><?php echo $qrow['opt_b'];  ?></td>
                          <td class="text-center"><?php echo $qrow['opt_c'];  ?></td>
                          <td class="text-center"><?php echo $qrow['opt_d'];  ?></td>
                          <td class="text-center"><?php echo $qrow['answer'];  ?></td>
                         
                          <td class="text-center"> <a href="<?php echo "php/deletequestion.php?id=$id" ?>" class="btn btn-danger">Delete</a></td>
                          

                          
                         
                          
                        </tr> 


                      <?php
                     }
                    ?>



                  



                    
                  </tbody>
                </table>
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


