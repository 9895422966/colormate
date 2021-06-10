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

 <script type="text/javascript">


    function passCheck() 
    {
      var pass1=document.getElementById("password1").value;
      var pass2=document.getElementById("password2").value;
      var n=pass1.localeCompare(pass2);
      if (pass1.length>7) 
      {
        element = document.querySelector('.length'); 
        element.style.visibility = 'hidden';
        if (n==0) 
        {
          element1 = document.querySelector('.success'); 
          element1.style.visibility = 'visible';
          element = document.querySelector('.error'); 
          element.style.visibility = 'hidden';
          element = document.querySelector('.verify'); 
          element.style.visibility = 'visible';


        }
        else
        {
          element1 = document.querySelector('.success'); 
          element1.style.visibility = 'hidden';
          element = document.querySelector('.error'); 
          element.style.visibility = 'visible';
        }
      }
      else
      {
        element1 = document.querySelector('.success'); 
        element1.style.visibility = 'hidden';
        element = document.querySelector('.error'); 
        element.style.visibility = 'hidden';
        element = document.querySelector('.length'); 
        element.style.visibility = 'visible';
      }
    }





    

  </script>

<body>


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
       session_start();

    require 'loginmodal.php';
  ?>


  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
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


 <?php
    $connect=mysqli_connect("localhost","thansheer","password");
    mysqli_select_db($connect,"colormate");

    $name=$_SESSION['name'];

    ?>

       


    <section id="contact" class="contact registration">
      <div class="container" data-aos="fade-down">

        <div class="section-title">
          <h2>Create your Password</h2>
          <p>Hi <b><?php echo $name;?></b>, Please enter a password for your account</p>
        </div>

        <div class="row">
          <div class="col-md-6 offset-md-3 col mt-5 mt-lg-0 d-flex align-items-stretch">

            <form method="POST" action="php/phpuserregister.php" autocomplete="off" class="form-box" >

              <div class="form-row">
                <label>Enter the Password</label>
                <div class="form-group col-md-12">
                  <i class="bx bx-lock"></i>
                  <input type="password" name="password1" placeholder="Password" pattern=".{8,20}" title="Enter a Valid Password" maxlength="20" id="password1" onkeyup="passCheck()">
                </div>
              </div>
              <div class="form-row">
                <label>Confirm Password</label>
                <div class="form-group col-md-12">
                  <i class="bx bx-lock"></i>
                  <input type="text" name="password2" placeholder="Confirm Password" pattern=".{8,20}" title="Enter a Valid Password" maxlength="20" id="password2" onkeyup="passCheck()">
                </div>
                <div class="validation-message">
                  <p class="success" id="success">Password Matched</p>
                  <p class="error" id="error"> Password Doesn't Match</p>
                  <p class="length" id="length">Minimum 8 Characters Required</p>
                </div>
              </div>
              <!--<div class="instruction form-row">
              <ul> 
                <li>Must contain atleast 8 Characters</li>
                <li>Must have 1 Uppercase Character</li>
                <li>Should Contain a Number</li>
                <li>Must have a special Character</li>
              </ul>
            </div>-->
              <input type="submit" value="Submit" name="verify" class="verify"> 
              
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


 <script type="text/javascript">
    
  

  </script>


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