  <?php
  require '../php/connect.php'; 
  $phone=$_POST['phone'];
  $vq=mysqli_query($connect,"select * from volunteer_data where phone='$phone'");
  $rq=mysqli_query($connect,"select * from registration where phone='$phone'");
  $rresult=mysqli_fetch_assoc($rq);
  $vresult=mysqli_fetch_assoc($vq);
?>
<div class="row">
  <div class="col-md-5 col-md-offset-1">
    <p style="font-size: 20px; color:#000;">Name: <b><?php echo $rresult['name']; ?></b></p>
  </div>
  <div class="col-md-6">
    <p style="font-size: 20px; color: #000;">Aadhar No: <b><?php echo $vresult['aadhar_no']; ?></b></p>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <img width="100%;" src="userdata/f-<?php echo $vresult['aadhar_no']; ?>">
  </div>
  <div class="col-md-6">
    <img width="100%;" src="userdata/b-<?php echo $vresult['aadhar_no']; ?>">
  </div>
</div>


