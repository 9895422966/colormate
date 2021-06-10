<?php 

require '../php/connect.php'; 
$id=$_POST['lb_id'];
$s=mysqli_query($connect,"select * from localbody where lb_id='$id';");
$q=mysqli_fetch_array($s);
$d=$q['lb_code'];
?>


<form method="POST" action="php/phpaddward.php">
                        <div class="container formbox" style="background-color: transparent;border:0;padding-top: 0;">
                  
                          
                          <i class="fa fa-map-marker"></i>
                          <input type="text" placeholder="Enter number of Wards Name" name="ward" required="" pattern="[0-9]{1,3}">


                          <input type="text" name="lbcode" value="<?php echo $d ?>" style="visibility:hidden ; z-index:-100;margin-top: -100px;">
                                                
                    

                      </div>
                      <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="submit">Save changes</button>
                    </div>
                  </form>