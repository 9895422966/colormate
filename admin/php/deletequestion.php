<?php
require 'data.php';
$id=$_GET['id'];
$x="delete from test where qid='$id'";
$j=mysqli_query($connect,$x);
if ($j>0)
{
	?>
	<script type="text/javascript">
		alert("Question Deleted");
		window.location="../testquestions.php";
	</script>
	<?php
}
else
{
	echo $x;
}

?>