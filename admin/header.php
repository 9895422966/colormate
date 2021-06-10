<?php
  require 'php/data.php';
  $toverify=select1("select count(*) from login where type='doctor' and status=0;");
   
?>

<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Colormate - Admin</title>

  <!-- Bootstrap CSS -->



<link rel="stylesheet" type="text/css" href="datatable/dataTables.bootstrap.min.css">
<script src="js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="datatable/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="datatable/dataTables.bootstrap.min.js"></script>




  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet"/>
  <link href="css/font-awesome.min.css" rel="stylesheet"/>
  <link href="css/mycss.css" rel="stylesheet"/>
  <!-- full calendar css-->
 
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

  <script src="js/swal/sweetalert.min.js"></script>

</head>

<body>

  

  <!-- container section start -->
  <section id="container" class="">

  
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo"><b>Color<span class="lite">mate</span></b></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
      
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row" style="">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">



          <!-- task notificatoin start
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-stack-exchange" style="color: #FFF;"></i>
                            <span class="badge bg-important">4</span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 pending requests</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          task notificatoin end -->
         
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-bell" style="color:#FFF;"></i>
                            <span class="badge bg-important"><?php echo $toverify['0']; ?></span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have <?php echo $toverify['0'] ?> pending data request</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-circle"></i></span>
                                    Doctors verification request
                                    <span class="small italic pull-right"><?php echo $toverify['0']; ?></span>
                                </a>
              </li>
             
              
              
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown" style="margin-left: 25px;margin-top: -10px;">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="profile/defaulticon.png" width="50px" height="50px" style="border: 2px solid #fff;">
                            </span>
                            <span class="username">&nbsp;Admin</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              
              <li>
                <a href="php/phplogout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              <!--<li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>-->
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse " style="">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
          </li>
          <li class="">
            <a class="" href="doctorlist.php">
                          <i class="fa fa-user-md"></i>
                          <span>Doctors list</span>
                      </a>
          </li>
          <li class="">
            <a class="" href="doctorverification.php">
                          <i class="fa fa-user-md"></i>
                          <span>Doctors Request</span>
                      </a>
          </li>
          <li class="">
            <a class="" href="testquestions.php">
                          <i class="fa fa-user-md"></i>
                          <span>Test Questions</span>
                      </a>
          </li>
   
        

          

         

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    