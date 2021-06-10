<?php
require 'data.php';
$id=$_GET['id'];
$x="update login set status='1' where phone='$id'";
$j=mysqli_query($connect,$x);
if ($j>0)
{
	?>
	<script type="text/javascript">
		alert("Request Verified");
		window.location="../doctorverification.php";
	</script>
	<?php
}
else
{
	echo $x;
}

?>