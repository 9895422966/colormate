  <?php
  require '../php/connect.php'; 
  $dist_id=$_POST['distid'];
  $res=mysqli_query($connect,"select * from localbody where dist_id='$dist_id' order by lb_code;");
?>

                   <div class="col-md-6 col-md-offset-3">
                         <label style="color: #000;">Select Localbody</label>
                            <i class="fa fa-lg fa-map-marker"></i>
                            <select id="lb"  name="lbid" class="select" onchange="getward(this.value)" style="width: 400px;" >
                                <option selected="1" value="0" disabled=""  >Select Localbody </option>
                                <?php

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


                            </select>
                            <i class="fa fa-chevron-circle-down left"></i>
                          </div>



                          <script>
                             function getward(lbcode){
                            $.post('ajax/getward.php',{lbcode:lbcode},function(response)
                            {
                             $("#res").html(response);
                            });
                          }

                          </script>
