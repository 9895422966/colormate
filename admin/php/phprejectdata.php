<?php
require 'data.php';
$id=$_GET['id'];
$x="update data_request set status='-2' where request_id='$id'";
$j=mysqli_query($connect,$x);
if ($j>0)
{
	?>
	<script type="text/javascript">
		alert("Request Rejected");
		window.location="../datarequestlist.php";
	</script>
	<?php
}
else
{
	echo $x;
}

?>