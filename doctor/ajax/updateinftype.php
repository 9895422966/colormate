<?php 

require '../php/connect.php'; 
$id=$_POST['up_id'];
$s=mysqli_query($connect,"select * from  infrastructure where inf_type_id='$id';");
$q=mysqli_fetch_array($s);
$d=$q['inf_type_name'];
?>
<i class="fa fa-map-marker"></i>
<input type="text" placeholder="Infrastructure Type" name="name" required="" pattern="[a-zA-z ]{5,}" value="<?php echo $d ?>">
<input type="text" name="id" value="<?php echo $id ?>" style="visibility: hidden; z-index:-100;margin-top: -100px;">

