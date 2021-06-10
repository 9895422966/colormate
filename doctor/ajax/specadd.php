<?php 

require '../php/connect.php'; 
$id=$_POST['up_id'];
?>


<form method="POST" action="php/phpaddspec.php">
<div class="modal-body" >
    <div class="container formbox" style="background-color: transparent;border:0;padding-top: 0;">
       
       	<i class="fa fa-map-marker"></i>
			<input type="text" placeholder="Add Spec" name="name" required="" pattern="[a-zA-z ]{2,}" value="">
			<div>
			<i class="fa fa-map-marker"></i>
			<select name="type" required="">
				<option selected="" disabled="">-- Select Type--</option>
				<option value="F">Features</option>
				<option value="R">Resource</option>
			</select>
			<i class="fa  fa-chevron-circle-down left"></i>	
			</div>
			<div>
			<i class="fa fa-map-marker"></i>
			<select name="unit" required="">
				<option selected="" disabled="">-- Select Unit--</option>
				<?php
				$unitqry=mysqli_query($connect,"select * from unit");
				while($unit=mysqli_fetch_assoc($unitqry))
				{
					?>
					<option value="<?php  echo $unit['id']; ?>"><?php  echo $unit['name']; ?></option>
					<?php
				}
				?>

			</select>
			<i class="fa  fa-chevron-circle-down left"></i>	
			</div>

			<input type="hidden" name="id" value="<?php echo $id ?>" >

      
                                                  
    </div>
                            
                            
</div>
<div class="modal-footer">
	<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	<input type="submit" class="btn btn-success" value="Submit"> 
	 
</div>
</form>

