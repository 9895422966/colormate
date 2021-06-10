<?php
session_start();
$connect=mysqli_connect("localhost","thansheer","password");
mysqli_select_db($connect,"colormate");
$a=$_POST['phone'];
$b=$_POST['password'];
$_SESSION['phone']=$a;
$s1="SELECT * FROM login WHERE phone='$a';";
$r1=mysqli_query($connect,$s1);
if($r1->num_rows<1)
{
	#number not registered
    ?>
    <script type="text/javascript">
        alert("This number is not registred. Create an Account to continue.");
        window.location="../index.php" ;
    </script>
    <?php
}
else
{
	#account exists
	$s="SELECT * FROM login WHERE phone='$a';";
	$r=mysqli_query($connect,$s);
	$p=mysqli_fetch_array($r);
	if (strcmp($b,$p['password'])==0)
	{
		#password matched
		$_SESSION['phone']=$a;
		if (strcmp('patient',$p['type'])==0)
		{
			header("Location:../user/index.php");	
		}
		if (strcmp('doctor',$p['type'])==0)
		{

			if ($p['status']==1)
			{
				header("Location:../doctor/index.php");	
			}
			else
			{
				?>
				    <script type="text/javascript">
				        alert("The Account is under verification");
				        window.location="../index.php" ;
				    </script>
				<?php
			}
		
		}
		if (strcmp('admin',$p['type'])==0)
		{
			header("Location:../admin/index.php");	
		}
		
	}
	else
	{
		#password incorrect

		?>
    	<script type="text/javascript">
        	alert("You Entered an incorrect password.");
        	window.location="../index.php" ;
    	</script>
    	<?php
	}	

}



?>