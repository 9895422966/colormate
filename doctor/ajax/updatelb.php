<?php 

require '../php/connect.php'; 
$id=$_POST['up_id'];
$s=mysqli_query($connect,"select * from localbody where lb_id='$id';");
$q=mysqli_fetch_array($s);
$d=$q['name'];
?>


<form method="POST" action="php/phpupdatelb.php">
                        <div class="container formbox" style="background-color: transparent;border:0;padding-top: 0;">
                  
                          
                          <i class="fa fa-map-marker"></i>
                          <input type="text" placeholder="Localbody Name" name="name" required="" pattern="[a-zA-z ]{5,}" value="<?php echo $d ?>">
                          <input type="text" name="id" value="<?php echo $id ?>" style="visibility: hidden; z-index:-100;margin-top: -100px;">
                                                
                    

                      </div>
                      <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="submit">Save changes</button>
                    </div>
                  </form>