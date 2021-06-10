<?php

require 'data.php';
$id=$_GET['id'];
$s=mysqli_query($connect,"UPDATE user_reg set doc_id='$id' where user_id='$user_id';");
if ($s>0) 
{
	?>
	<script type="text/javascript">
		alert("Doctor Changed Succesfully");
		window.location="../mydoctor.php";
	</script>
	<?php
}
else
{
	echo "UPDATE user_reg set doc_id='$id' where user_id='$user_id';";
}

?>