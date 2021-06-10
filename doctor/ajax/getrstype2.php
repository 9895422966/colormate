  <?php
  require '../php/connect.php'; 
  $id=$_POST['id'];
  $res=mysqli_query($connect,"select * from resourse where cat_id='$id';");

                                if (isset($res)) 
                                {
                                  while ($r=mysqli_fetch_assoc($res))
                                  {
                                ?>
                                  <option class="option" value="<?php echo $r['rs_type_id']; ?>"><?php echo $r['rs_type_name']; ?></option>

                                <?php


                                  }
                                }

                                ?>

