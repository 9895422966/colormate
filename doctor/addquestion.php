<?php
  require 'header.php';

   if (isset($_POST['datasbt'])) 
  {

        
     $qno=$_POST['qno'];
     $question=$_POST['question'];


      $sql=mysqli_query($connect,"insert into survey(qno,question,doc_id) values('$qno','$question','$doc_id');");
      if($sql>0)
      {
        ?>
                  <script>
                    alert("Question Uploaded");
                    window.location="testquestions.php"
                  </script>
          <?php
      }
      else
      {
        ?>
                  <script>
                      alert("Error Found");

                  </script>
                    <?php
      }
   

  }




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
            <h3 class="page-header"><i class="fa fa-user-md"></i> Add Survey Questions</h3>
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
                        <h1> Question Details</h1>
                        <form class="form-horizontal" action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                          <div class="form-group">
                            <label class="col-md-1 col-md-offset-1 control-label">Q.No<span style="color: red;">*</span></label>
                            <div class="col-md-4">
                              <input type="number" class="form-control" placeholder="Question Np" name="qno" required="" style="background-color: #eee;">
                            </div>
                           
                          </div>
                         
                          <div class="form-group">
                            <label class="col-md-1 col-md-offset-1 control-label">Question</label>
                            <div class="col-md-9">
                              <textarea style="background-color: #eee;" name="question" required class="form-control" cols="20" rows="4"></textarea>
                            </div>
                            
                           
                            </div>

                           

                          </div>
                        
                          
                          
                          

                          <div class="form-group">
                            <br>
                            <div class="col-md-12 text-center">
                              <input  name="datasbt" type="submit" class="btn btn-primary" value="Save":>
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