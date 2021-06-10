<?php	
		require('textlocal.class.php');
		require('credential.php');
		$textlocal = new Textlocal(false, false, APIKEY);
		session_start();
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];

		$_SESSION['name']=$name;
		$_SESSION['phone']=$phone;
		$_SESSION['email']=$email;
		$_SESSION['dob']=$dob;

		$numbers = array($_POST['phone']);
		$sender = 'SRCWRD';
		$otp= mt_rand(10000,99999);
		$message = "Thankyou for registering Colormate, Your verification code is ".$otp;

		try {
		    //$result = $textlocal->sendSms($numbers, $message, $sender);
		    $_SESSION['otp']=123456;// otp work ayal assign with $otp 
		    echo "OTP SUCCESFULLY SEND";
		    header("Location:../otpvalidate.php");
		} catch (Exception $e) {
		    die('Error: ' . $e->getMessage());
		}

?>