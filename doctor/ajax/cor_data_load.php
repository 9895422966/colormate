  <?php
  require '../php/connect.php'; 
  session_start();
  $dist_id=$_SESSION['dist'];
  
  $c=mysqli_query($connect,"select * from localbody where dist_id='$dist_id' and lb_type='C';");
?>

                                            
                              <table id="corporation" class="table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <tr>
                                          <th><i class="icon_pin_alt"></i>Code</th>
                                            <th><i class="icon_pin_alt"></i>Corporation</th>
                                            <th><i class="icon_pin_alt"></i>Wards</th>
                                                <th><i class="icon_cog"></i> Action</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>   
                                  <?php

                                  if (isset($c)) 
                                              {
                                                while ($row=mysqli_fetch_assoc($c))
                                                {
                                                  $id=$row['lb_id'];
                                                  $code=$row['lb_code']; 
                                                  $sql=mysqli_query($connect,"SELECT count(*) from ward where lb_code='$code';");
                                                  $wardcount=mysqli_fetch_array($sql);

                                              ?>
                                              <tr>
                                                <td><?php echo $row['lb_code']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td style="width: 50px;"><?php echo $wardcount[0]; ?></td>
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
                              $('#corporation').DataTable();
                            </script>
                              



