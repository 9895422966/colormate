<?php
  require 'header.php';
  $qno= $_SESSION['question'];
 $qn= select1("select * from test where qid='$qno';");

?>
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
<style type="text/css">
  .option
  {
    margin: 5px;
    background: #eee;
  } 
  .option label span
  {
    font-size: 150%;
  }
</style>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">

      	<div class="row">
          
          <div class="col-lg-12">
            <h3 class="page-header" style="font-weight: 500; color: #000;"><i class="fa fa-user-md" style="margin-top: 3px;"></i>Test in progress</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-database"> Test in progress</i></li>
              
            </ol>
          </div> 
        </div>
                      <form style="" method="POST" action="php/submittest.php">


      	 <div class="row" style="background-color:#fff;margin-top: 20px;">

          <div class="col-md-12">
            <div class="text-center" >
              <p></p>
              <img src="../admin/test/<?php echo $qn['qimage'];?>" height="300px">
                  <div class="col-md-6 col-md-offset-4 row text-left" style="padding-top:20px;padding-bottom: 20px; background-color:white;">
                    <div class="col-md-5 option" style="padding-top:10px;padding-bottom:10px;">
                      <input type="radio"  name="answer" value="a" required="">
                      <label for="a" style="font-weight: 600;">a. <span><?php echo $qn['opt_a'];?></span></label>
                    </div>
                    <div class="col-md-5 option" style="padding-top:10px;padding-bottom:10px;">
                       <input type="radio" name="answer" value="b"  required="">
                       <label for="b" style="font-weight: 600;">b. <span><?php echo $qn['opt_b'];?></span></label>
                    </div>
                    <div class="col-md-5 option" style="padding-top:10px;padding-bottom:10px;">
                       <input type="radio" name="answer" value="c"  required="">
                       <label for="c" style="font-weight: 600;">c. <span><?php echo $qn['opt_c'];?></span></label>
                    </div>
                    <div class="col-md-5 option" style="padding-top:10px;padding-bottom:10px; ">
                       <input type="radio" name="answer" value="d"  required="">
                       <label for="d" style="font-weight: 600;">d. <span><?php echo $qn['opt_d'];?></span></label>
                    </div>
                    
                  </div>
                  <br>
                  

              
            

            </div>
            
        
       
          

        </div>

      </div>
       <div class="text-center row col-md-12" style="background-color:#fff;margin-top:0px ; padding-bottom: 30px;">
            <input type="submit" class="btn btn-success btn-lg" name="submit" value="Next" style="margin-left:150px;">
        </div>
                      </form>



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


