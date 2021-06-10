<?php
  require 'header.php';

?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">

      	<div class="row">
          
          <div class="col-lg-12">
            <h3 class="page-header" style="font-weight: 500; color: #000;"><i class="fa fa-user-md" style="margin-top: 3px;"></i> Doctor Verification</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-database"></i>Doctor Verification</li>
              
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
                      
                
                      <th class="text-center">Name</td>    
                      <th class="text-center">Phone</td>                  
                      <th class="text-center">Email</td>
                      <th class="text-center">DOB</th>
                      <th class="text-center">IMA Number</td>
                      <th class="text-center">Qualification</td>
                      <th class="text-center">Action</td>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $q=mysqli_query($connect,"select * from doc_reg where phone in (select phone from login where type='doctor' and status=0)");
                     while ($qrow=mysqli_fetch_assoc($q))
                     {
                      $id=$qrow['phone'];
                      
                      ?>

                        <tr>
                          <td class="text-center"><?php echo $qrow['name'];  ?></td>
                          <td class="text-center"><?php echo $qrow['phone'];?></td>
                          <td class="text-center"><?php echo $qrow['email'];  ?></td>
                          <td class="text-center"><?php echo $qrow['dob'];  ?></td>
                          <td class="text-center"><?php echo $qrow['ima_no'];  ?></td>
                          <td class="text-center"><?php echo $qrow['qualification'];  ?></td>
                         
                          <td class="text-center"><a href="<?php echo "php/phpverifydoc.php?id=$id" ?>" class="btn btn-success">Approve</a> <a href="<?php echo "php/phprejectdoc.php?id=$id" ?>" class="btn btn-danger">Reject</a></td>
                          

                          
                         
                          
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


