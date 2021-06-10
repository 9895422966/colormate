  <?php
  require '../php/connect.php'; 
  $id=$_POST['id'];
  $res=mysqli_query($connect,"select * from resourse where cat_id='$id';");
?>

                   <div class="col-md-6 col-md-offset-3">
                         <label style="color: #000;">Select Resourse Type</label>
                            <i class="fa fa-map-marker"></i>
                            <select id="lb"  name="lbid" class="select" onchange="getrs(this.value)" style="width: 300px; margin-top: 0px;" >
                                <option selected="1" value="0" disabled=""  >Select Resourse Type </option>
                                <?php

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


                            </select>
                            <i class="fa fa-chevron-circle-down left"></i>
                          </div>



                          <script>
                             function getrs(id){
                            $.post('ajax/getrs.php',{id:id},function(response)
                            {
                             $("#res").html(response);
                            });
                          }

                          </script>
