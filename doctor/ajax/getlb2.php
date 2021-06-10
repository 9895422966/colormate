  <?php
  require '../php/connect.php'; 
  $dist_id=$_POST['id'];
  $res=mysqli_query($connect,"select * from localbody where dist_id='$dist_id' order by lb_code;");


                                if (isset($res)) 
                                {
                                  while ($r=mysqli_fetch_assoc($res))
                                  {
                                ?>
                                  <option class="option" value="<?php echo $r['lb_code']; ?>"><?php echo $r['lb_code']; ?>-<?php echo $r['name']; ?></option>

                                <?php


                                  }
                                }

                                ?>





