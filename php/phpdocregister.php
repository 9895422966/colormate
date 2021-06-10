<?php
$connect=mysqli_connect("localhost","thansheer","password");
mysqli_select_db($connect,"colormate");  
session_start();
$name=$_SESSION['name'];
$phone=$_SESSION['phone'];
$dob=$_SESSION['dob'];
$email=$_SESSION['email'];
$ima=$_SESSION['ima'];
$qualification=$_SESSION['qualification'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
if(($password1=="")or($password2==""))
{
	?>
	<script type="text/javascript">
		alert("Password Cant be empty");
		window.location="../savepassword.php";
	</script>
	<?php
}
else
{
				$type="doctor";

	if (strcmp($password1,$password2)==0)
	{
		#password matched
		$s="INSERT INTO doc_reg(phone, name, email, dob,ima_no,qualification) VALUES ('$phone','$name','$email','$dob','$ima','$qualification');";
		$r=mysqli_query($connect,$s);
		if ($r>0) 
		{
			#registration succesful
			$s4=0;
			$s1="INSERT INTO login(phone,password,status,type) VALUES ('$phone','$password2','$s4','$type');";
			$r1=mysqli_query($connect,$s1);
			if ($r1>0) 
			{

				?>
				<script type="text/javascript">
	            	alert("Registration Successful... Your account will be verified soon");
	            	window.location="../index.php";
	         	</script>
	         	<?php
	         }
	         else
	         {
	         	?>
				<script type="text/javascript">
	            	alert("Login Not updated");
	            	//window.location="index.html";
	         	</script>
	         	<?php
	         }
	         echo $s1;
		}
		else
		{
			#registration Unsuccessful
			?>
			<script type="text/javascript">
	            alert("Error Occoured... Please Try again");
	            //window.location="../registration.php" ;
	         </script>
	         <?php
	         echo $s;
	         echo "\n";
	         echo "INSERT INTO login(phone,password,type) VALUES ('$phone','$password2','$type');";

		}
	}
	else
	{
		#password doesnt matched
		?>
			<script type="text/javascript">
	            alert("Password doesnt match... Please Try another one");
	            window.location="../savepassword.php" ;
	         </script>
	         <?php

	}
}


?>