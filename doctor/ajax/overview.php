  <?php
  require '../php/connect.php'; 
  session_start();
  $dist_id=$_SESSION['dist'];
  $d1=mysqli_query($connect,"select * from dist where dist_id='$dist_id';");
  $dist=mysqli_fetch_assoc($d1);
  $p=mysqli_query($connect,"select * from localbody where dist_id='$dist_id' and lb_type='P';");
?>

<div class="row container" style="background-color: white;padding:10px; margin: 10px;">
  <div class="col-md-5 " style="margin-left:-00px;">
    <h2 style="font-weight: 600;color: #000;">
      <i class="fa fa-map-marker">  </i>  <?php echo $dist['district'];?>
    </h2>
  </div>
  <div class="col-md-2 col-md-offset-5">
    <button class="btn btn-lg btn-info" data-toggle='modal' href='#myModal4' style="margin:10px 0px 0 20px;">Add Localbody</button>  
  </div>
  
</div>


<section class="panel">
  <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><b>Add Localbody</b></h4>
                    </div> 
                    <form method="POST" action="php/phpaddlb.php">     
                    <div class="container formbox" style="background-color: transparent;border:0;padding-top: 0;"> 
                            
                           <div  style="visibility:hidden; margin-bottom: -70px;">
                            <i class="fa fa-map-marker"></i>
                            <input type="text" placeholder="District Code" name="id" value="<?php echo $dist_id; ?>"  pattern="[0-9]{1,2}">
                           </div>

                           <div>
                            <i class="fa fa-map-marker"></i>
                            <input type="text" disabled value="<?php echo $dist['district'];; ?>">
                           </div>
                           <div>
                            <i class="fa fa-lg fa-map-marker"></i>
                            <select id="lb"  name="type" class="select" >
                                <option selected="1" value="0" disabled="">Select Type </option>
                                <option value="C">Corporation</option>
                                <option value="M">Municipality</option>
                                <option value="G">Panchayath</option>

                            </select>
                            <i class="fa fa-chevron-circle-down left"></i>
                        </div>
                           <div>
                            <i class="fa fa-map-marker"></i>
                            <input type="text" placeholder="Localbody Code" name="code" required="" pattern="[0-9]{1,3}">   
                           </div> 
                            <div>
                            <i class="fa fa-map-marker"></i>
                            <input type="text" placeholder="Localbody Name" name="name" required="" pattern="[a-zA-z ]{3,}">   
                           </div>                            
                            
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="submit">Save Changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</section>


