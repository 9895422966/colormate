<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Colormate - Eye Test solutions</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/mycss.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
   <?php
    session_start();
    $phone=$_SESSION['phone'];
    $connect=mysqli_connect("localhost","thansheer","password");
    mysqli_select_db($connect,"colormate");  
    $s="SELECT * FROM doc_reg WHERE phone='$phone';";
    $r=mysqli_query($connect,$s);
    if($r->num_rows>0)
    {
      ?><script type="text/javascript">
                alert("This number is already Registered");
                window.location="dregistration.php";
              </script><?php
    }



    $a=substr($phone,7);
    $b="XXXXXXX";
    $c=$b.$a;


    if (isset($_POST['verify'])) 
     {
        $otp=$_POST['otp'];
        $otpvalue=$_SESSION['otp'];
        
          if (strcmp($otp, $otpvalue)==0) 
          {
            header("Location:savepassword2.php");
          }
          else 
          {
              ?>
                <script type="text/javascript">

                   alert("OTP doesn't match!!");
                  
                </script>
              <?php  

          }
    }
  ?>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">Color Mate</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

     
     
      <a href="" class="appointment-btn" id="btnLogin" data-toggle="modal" data-target="#loginModal">Login</a>
      <a href="registration.php" class="appointment-btn ">Sign Up as Doctor</a>

    </div>
  </header><!-- End Header -->
  
   <?php
    require 'loginmodal.php';
  ?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs ">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Registration</h2>
           <ol>
          <li><a href="index.html">Home</a></li>
          <li>Registration</li>
        </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->


       


     <section id="contact" class="contact registration bg-white">
      <div class="container" data-aos="fade-down">

        <div class="section-title">
          <h2>Verify Phone</h2>
          <p>An OTP has sent to the phone number <b><?php echo $c; ?></b></p>
        </div>

        <div class="row">
          <div class="col-md-6 offset-md-3 col mt-5 mt-lg-0 d-flex align-items-stretch">

            <form method="post" action="" autocomplete="off" class="form-box" onsubmit="return(dataCheck())">

              <div class="form-row">
                <label>Enter the OTP</label>
                <div class="form-group col-md-12">
                  <i class="bx bx-lock"></i>
                  <input type="text" name="otp" id="otp" OTP placeholder="One Time Password" pattern="[0-9]{6}" title="Your entry is invalid"  maxlength="6" autofocus="">
                </div>
              </div>
              <input type="submit" value="Verify" name="verify"> 
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->





  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

   
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>