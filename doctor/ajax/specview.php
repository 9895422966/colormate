<?php 

require '../php/data.php'; 
$id=$_POST['id'];
$s=mysqli_query($connect,"select * from infspec where inf_type_id='$id' order by type;");
?>

 <table id="spec" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <tr>
                                    
                                    <th><i class="icon_pin_alt"></i>Specification</th>
                                    <th><i class="icon_pin_alt"></i>Type</th>
                                    <th><i class="icon_pin_alt"></i>unit</th>
                                    <th><i class="icon_cog"></i>Action</th>

                                </tr>
                            </tr>
                        </thead>
                        <tbody>      
                                  <?php

                                  if (isset($s)) 
                                  {
                                    while ($row=mysqli_fetch_assoc($s))
                                    {
                                        $sid=$row['spec_id'];
                                        $unit=$row['unit_id'];
                                        $unit=select1("select * from unit where id='$unit';");
                                        
                                  ?>
                            <tr>
                                
                                <td><?php echo $row['name']; ?></td>
                                <td><?php if($row['type']=='F') echo "Feature"; else if($row['type']=='R') echo "Resource"; ?></td>
                                <td><?php echo $unit['name']; ?></td>
                                <td><?php echo "<a href='php/phpremovespec.php?id=$sid' class='btn btn-sm btn-danger'><i class=''></i>Remove</a>"; ?></td>
                            </tr>

                                    <?php


                                      }
                                    }

                                    ?>

                        </tbody>
                
                    </table>