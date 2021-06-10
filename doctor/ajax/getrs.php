  <?php
  require '../php/connect.php'; 
  $lbcode=$_POST['lbcode'];
  $res=mysqli_query($connect,"select * from user_resourse ");
?> 

               
 <table id="wardtable" class="table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <tr>
                                          <th><i class="icon_pin_alt"></i>Code</th>
                                            <th><i class="icon_pin_alt"></i>Ward No</th>
                                            <th><i class="icon_pin_alt"></i>Ward Name</th>
                                           
                                                <th><i class="icon_cog"></i> Action</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>   
                                  <?php

                                  if (isset($res)) 
                                              {
                                                while ($row=mysqli_fetch_assoc($res))
                                                {
                                                  
                                                  $id=$row['ward_id']; 
                                                 

                                              ?>
                                              <tr>
                                                <td style="width: 50px;"><?php echo $row['ward_code']; ?></td>
                                                <td style="width: 100px;"><?php echo $row['ward_no']; ?></td>
                                                <td style=""><?php echo $row['ward_name']; ?></td>
                                                
                                                <td style="width: 300px;">
                                                  <div class="btn-group">
                                                    <?php echo "<a class='btn btn-danger' data-toggle='modal' href='#myModal2' onclick='deletelb(".$id.")'>"."<i class='icon_close_alt2'></i>"." Delete</a>"; ?>
                                                    <?php echo "<a class='btn btn-info' data-toggle='modal' href='#myModal' onclick='updatelb(".$id.")'>"."<i class='icon_pencil-edit'></i>"." Update</a>"; ?>
                                                     <?php echo "<a class='btn btn-success' data-toggle='modal' href='#myModal3' onclick='addward(".$id.")'>"."<i class='icon_plus'></i>"." Add Ward</a>"; ?>
                                                  </div>
                                                </td>
                                              </tr>

                                                    <?php

                                                      }
                                                    }
                                               


                                                    ?>   




                                </tbody>
                        
                            </table>

                             <script type="text/javascript">
                              $('#wardtable').DataTable();
                            </script>

                           


