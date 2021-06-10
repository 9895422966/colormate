<?php	
		require('textlocal.class.php');
		require('credential.php');
		$textlocal = new Textlocal(false, false, APIKEY);
		session_start();
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$ima=$_POST['ima'];
		$qualification=$_POST['qualification'];

		$_SESSION['name']=$name;
		$_SESSION['phone']=$phone;
		$_SESSION['email']=$email;
		$_SESSION['dob']=$dob;
		$_SESSION['ima']=$ima;
		$_SESSION['qualification']=$qualification;

		$numbers = array($_POST['phone']);
		$sender = 'SRCWRD';
		$otp= mt_rand(10000,99999);
		$message = "Thankyou for registering Colormate, Your verification code is ".$otp;

		try {
		    //$result = $textlocal->sendSms($numbers, $message, $sender);
		    $_SESSION['otp']=123456;// otp work ayal assign with $otp 
		    echo "OTP SUCCESFULLY SEND";
		    header("Location:../otpvalidated.php");
		} catch (Exception $e) {
		    die('Error: ' . $e->getMessage());
		}

?>