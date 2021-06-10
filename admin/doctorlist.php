<?php
 require 'header.php';

?>
<style type="text/css">
  .countries:nth-child(even) {
  background: red;
}


</style>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Doctors List</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Doctors List</li>
            </ol>
          </div>
        </div>







        <div class="row">

          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Doctors List</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped bootstrap-datatable countries" id="countries">
                  <thead>
                    <tr>
                     
                      <th class="text-center">Name</th>
                      <th class="text-center">Phone</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Date of Birth</th>
                      <th class="text-center">IMA Number</th>
                      <th class="text-center">Qualification</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $q=mysqli_query($connect,"select * from doc_reg;");
                     while ($qrow=mysqli_fetch_assoc($q))
                     {
                      
                      ?>

                        <tr>
                          <td class="text-center"><?php echo $qrow['name'];  ?></td>
                          <td class="text-center" ><?php echo $qrow['phone'];  ?></td>
                          <td class="text-center" ><?php echo $qrow['email'];  ?></td>
                          <td class="text-center" ><?php echo $qrow['dob'];?></td>
                          <td class="text-center" ><?php echo $qrow['ima_no'];?></td>
                          <td class="text-center" ><?php echo $qrow['qualification'];?></td>

                          
                        </tr> 


                      <?php
                     }
                    ?>



                  



                    
                  </tbody>
                </table>
              </div>

            </div>

          </div>
          <!--/col-->
        
       
          

        </div>



        <!-- statics end -->




         

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