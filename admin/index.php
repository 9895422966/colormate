<?php
 require 'header.php';
 $j=select1("select COUNT(*) from login WHERE login.type!='admin' and login.status=1");
 $v=select1("select COUNT(*) from login WHERE login.type='patient'");
 $i=select1("select COUNT(*) from login WHERE login.type='doctor' and login.status=1");
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
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-users"></i>
              <div class="count"><?php echo $j['0']; ?></div>
              <div class="title">Active users</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box red-bg">
              <i class="fa fa-user-plus"></i>
              <div class="count"><?php echo $i['0']; ?></div>
              <div class="title">Doctors</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-cubes"></i>
              <div class="count"><?php echo $v['0']; ?></div>
              <div class="title">Patients</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-building"></i>
              <div class="count"><?php echo $i['0']; ?></div>
              <div class="title">Total Test</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->





        <div class="row">

          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Registered Patients</strong></h2>
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
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $q=mysqli_query($connect,"select * from user_reg;");
                     while ($qrow=mysqli_fetch_assoc($q))
                     {
                      
                      ?>

                        <tr>
                          <td class="text-center"><?php echo $qrow['name'];  ?></td>
                          <td class="text-center" ><?php echo $qrow['phone'];  ?></td>
                          <td class="text-center" ><?php echo $qrow['email'];  ?></td>
                          <td class="text-center" ><?php echo $qrow['dob'];?></td>
                          
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