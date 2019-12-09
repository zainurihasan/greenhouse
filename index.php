<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Black Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
 
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            IPB
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            GREEN HOUSE
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
            <a href="./index.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active ">
            <a href="http://localhost:8080/ghs/setting.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Set Jadwal</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John responded to your email</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a></li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div  class="content">


      <?php
      include 'load.php';
      include 'Ltandon.php';
     // include 'load.php'
      // $koneksi = mysqli_connect('localhost', 'root', '', 'gh');
      // $qlsub=
      // $result = mysqli_query($koneksi,"SELECT *,DATE_FORMAT(waktu, '%y-%m-%d-%H:%i') AS waktu FROM sensor ORDER BY id_no desc limit 12 ") or die(mysql_error());
      
     
      // if (mysqli_num_rows($result) > 0) {
          
        
      //     $sens["waktu"] = '';
      //     $sens["sensor1"] = '';
      //     $sens["sensor2"] = '';
      //     $sens["sensor3"] = '';
      //     $sens["sensor4"] = '';
      //     $sens["sensor5"] = '';
      //     $sens["sensor6"] = '';
      //     $sens["ph1"] = '';
      //     $sens["ph2"] = '';
      //     $sens["ph3"] = '';
      //     $sens["ph4"] = '';
      //     $sens["ph5"] = '';
      //     $sens["ph6"] = '';
          
        
      //     while ($row = mysqli_fetch_array($result)) {
            
            
      //       $sens["waktu"] .= ''.$row['waktu'].',';
      //       $sens["sensor1"] .= ''.$row['sensor1'].',';
      //       $sens["sensor2"] .= ''.$row['sensor2'].',';
      //       $sens["sensor3"] .= ''.$row['sensor3'].',';
      //       $sens["sensor4"] .= ''.$row['sensor4'].',';
      //       $sens["sensor5"] .= ''.$row['sensor5'].',';
      //       $sens["sensor6"] .= ''.$row['sensor6'].',';
      //       $sens["ph1"] .= ''.$row['ph1'].',';
      //       $sens["ph2"] .= ''.$row['ph2'].',';
      //       $sens["ph3"] .= ''.$row['ph3'].',';
      //       $sens["ph4"] .= ''.$row['ph4'].',';
      //       $sens["ph5"] .= ''.$row['ph5'].',';
      //       $sens["ph6"] .= ''.$row['ph6'].',';
            
      //     }
          
      //   }
         
      ?>    
      <!-- end proses -->
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">Kelembapan Tanah</h5>
                    <h2 class="card-title">Tingkat Kelembapan</h2>
                  </div>
                  
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartBig11"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div  id ="datal" class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">pH Tanah</h5>
                    <h2 class="card-title">Nilai pH Tanah</h2>
                  </div>
                  
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartBig12"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Suhu</h5>
                <h3 class="card-title"><i class='fas fa-temperature-high' style='font-size:36px'></i> Suhu</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLinePurple"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">PPM</h5>
                <h3 class="card-title"><i class='fas fa-prescription-bottle' style='font-size:36px'></i>PPM</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLineGreen"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card card">
              <div class="card-header">
                <h5 class="card-category">Live View</h5>
                
              </div>
              <div class="card-body">
                <!-- <div class="chart-area">
                  <canvas id="CountryChart"></canvas> -->
                  <img src="http://isurf.apps.cs.ipb.ac.id/cam1?date=1575879261723">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>2018 made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
 
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo1.js"></script>

  <script>


    var waktu = '<?php echo $sens["waktu"];?>';
    var st1 = '<?php echo $sens["sensor1"];?>';
    var st2 = '<?php echo $sens["sensor2"];?>';
    var st3 = '<?php echo $sens["sensor3"];?>';
    var st4 = '<?php echo $sens["sensor4"];?>';
    var st5 = '<?php echo $sens["sensor5"];?>';
    var st6 = '<?php echo $sens["sensor6"];?>';
    var sph1 = '<?php echo $sens["ph1"];?>';
    var sph2 = '<?php echo $sens["ph2"];?>';
    var sph3 = '<?php echo $sens["ph3"];?>';
    var sph4 = '<?php echo $sens["ph4"];?>';
    var sph5 = '<?php echo $sens["ph5"];?>';
    var sph6 = '<?php echo $sens["ph6"];?>';
    var tanwaktu='<?php echo $sens1["waktu"];?>';
    var tanppm='<?php echo $sens1["ppm"];?>';
    var tansuhu='<?php echo $sens1["suhu"];?>';
    
    $(document).ready(function() {
      
      //console.log(waktu);
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <!-- <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script> -->

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  
 

</body>

</html>

