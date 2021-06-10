  <?php
  require '../php/connect.php'; 
  $id=$_POST['id'];
?>

				<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Edit Image</h4>
                      </div>
                      <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
                      <div class="modal-body modalform" align="center">
                          <div class="inputdiv" >
                            <i class="fa fa-home"></i>
                            <input type="text" placeholder="Name" name="name" required value="<?php echo $id;?>">    
                          </div>
                          

                          <div class="inputdiv" style="padding-left: 10px;">
                            
                              <i class="fa fa-picture-o imgi"></i>   
                              <input type="file" class="custom-file-input" name="rsimage" id="rsimage" onchange="imgCheck1()" required  style="padding-top: 8px;display: inline;">
                        
                          </div>
                      
                      <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <input type="submit" class="btn btn-success" name="addrs">
                      </div>
                    </form>
                      


