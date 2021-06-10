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
  ========================================================-->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">Color Mate</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

     
     
      <a href="" class="appointment-btn" id="btnLogin" data-toggle="modal" data-target="#loginModal">Login</a>
      <a href="registration.php" class="appointment-btn ">Sign Up as Patient</a>

    </div>
  </header><!-- End Header -->
  
   <?php
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
          <li>Doctor Registration</li>
        </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->


       


    <section id="contact" class="contact registration bg-white">
      <div class="container" data-aos="fade-down">

        <div class="section-title">
          <h2>Doctor Registration</h2>
        </div>

        <div class="row">
          <div class="col-md-6 offset-md-3 col mt-5 mt-lg-0 d-flex align-items-stretch">

            <form method="POST" action="php/phpsendotpd.php" autocomplete="off" class="form-box" onsubmit="return(dataCheck())">

              <div class="form-row">
                <label>Name<span style="color: red;">*</span></label>
                <div class="form-group col-md-12">
                  <i class="bx bx-user"></i>
                  <input type="text" name="name" id="name" placeholder="Name" pattern="[A-Za-z ]{3,24}" title="Your entry is invalid" autofocus>
                </div>
              </div>
              
              <div class="form-row">
                <label>Phone<span style="color: red;">*</span></label>
                <div class="form-group col-md-12">
                  <i class="bx bx-phone"></i>
                  <input type="tel" name="phone" placeholder="Phone Number" maxlength="10" pattern="[6-9]{1}[0-9]{9}" title="Phone number contains only numbers"  id="phone">
                </div>
                <div class="account" id="account"></div>
              </div>
              
              <div class="form-row">
                <label>Email<span style="color: red;">*</span></label>
                <div class="form-group col-md-12">
                  <i class="bx bx-mail-send"></i>
                  <input type="email" name="email" id="email" placeholder="Email">
                </div>
              </div>
              
              <div class="form-row">
                <label>Date of Birth<span style="color: red;">*</span></label>
                <div class="form-group col-md-12">
                  <i class="bx bx-calendar"></i>
                  <input type="date" name="dob" id="dob" placeholder="Date Of birth" max="2005-01-01">
                </div>
              </div>

              <div class="form-row">
                <label>IMA No<span style="color: red;">*</span></label>
                <div class="form-group col-md-12">
                  <i class="bx bx-user"></i>
                  <input type="text" pattern="[0-9]{5,}" name="ima" id="ima" placeholder="IMA Number">
                </div>
              </div>

              <div class="form-row">
                <label>Qualification<span style="color: red;">*</span></label>
                <div class="form-group col-md-12">
                  <i class="bx bx-home"></i>
                  <input type="text" name="qualification" id="qualification" placeholder="Qualification" minlength="2">
                </div>
              </div>
              <!--
              <div class="form-row">
                <label>Phone</label>
                <div class="form-group col-md-12">
                  <i class="bx bx-phone"></i>
                  <input type="text" name="phone" placeholder="Name">
                </div>
              </div>
              -->
              <input type="submit" value="Create Account" > 
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
    
    function dataCheck()
    {
        var name = document.getElementById("name").value;
        var phone = document.getElementById("phone").value;
        var email = document.getElementById("email").value;
        var dob = document.getElementById("dob").value;
        var ima = document.getElementById("email").value;
        var qualification = document.getElementById("qualification").value;
        if (name=="") 
        {
            alert("Name Cannot be empty!!");
            return false;
        }
        else if (phone=="") 
        {
            alert("Phone Cannot be empty!!");
            return false;
        }
        else if (email=="") 
        {
            alert("Email Cannot be empty!!");
            return false;   
        }
        else if (dob=="") 
        {
            alert("Date of Birth Cannot be empty!!");
            return false;
        }
         else if (ima=="") 
        {
            alert("IMA Number Cannot be empty!!");
            return false;
        }
         else if (qualification=="") 
        {
            alert("Qualification Cannot be empty!!");
            return false;
        }
            else
            return true;
    }

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