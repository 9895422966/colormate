<?php
 require 'header.php';
 $j=select1("select * from doc_reg WHERE doc_id='$doc_id'");
 $v=select1("select COUNT(*) from test_details WHERE user_id='$user_id'");
 
 //$i=select1("select COUNT(*) from user_inf a WHERE a.status='1'");
 //$r=select1("select COUNT(*) from user_resource b WHERE b.status='1'");
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
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>My Test</li>
            </ol>
          </div>
        </div>

      





        <div class="row">

          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Completed Test</strong></h2>
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
                     
                      <th class="text-center">Test_id</th>
                      <th class="text-center">Score</th>
                      <th class="text-center">Time</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $q=mysqli_query($connect,"select * from test_details WHERE user_id='$user_id' and status='1' order by time desc");
                     while ($qrow=mysqli_fetch_assoc($q))
                     {
                        $id=$qrow['test_id'];
                      ?>

                        <tr>
                          <td class="text-center"><?php echo $qrow['test_id'];  ?></td>
                          <td class="text-center" ><?php echo $qrow['score'];  ?>/100</td>
                          <td class="text-center" ><?php echo $qrow['time'];  ?></td>
                            <td class="text-center"> <a href="<?php echo "viewtestdetails.php?id=$id" ?>" class="btn btn-info">View</a></td>
                          

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


        <div class="row">

          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Pending Test</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped bootstrap-datatable countries" id="countries2">
                  <thead>
                    <tr>
                     
                      <th class="text-center">Test_id</th>
                      <th class="text-center">Score</th>
                      <th class="text-center">Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $q=mysqli_query($connect,"select * from test_details WHERE user_id='$user_id' and status='0' order by time desc");
                     while ($qrow=mysqli_fetch_assoc($q))
                     {
                        $id=$qrow['test_id'];
                      ?>

                        <tr>
                          <td class="text-center"><?php echo $qrow['test_id'];  ?></td>
                          <td class="text-center" ><?php echo $qrow['score'];  ?>/100</td>
                          <td class="text-center" ><?php echo $qrow['time'];  ?></td>
                           
                          

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

         //datatable
        $(document).ready(function() {
            $('#countries2').DataTable();
            } );
    </script>



      <?php
      require 'footer.php';
      ?>