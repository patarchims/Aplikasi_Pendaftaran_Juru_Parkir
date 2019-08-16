<?php
session_start();

require 'config/function.registrasi.php';
$nik = $_SESSION['nik'];
$konfirmasi = query("SELECT * FROM konfirmasi WHERE nik=$nik")[0];
$pendaftaran = query("SELECT * FROM pendaftaran WHERE nik=$nik");
$daftar = $pendaftaran;
$data_pendaftaran= query("SELECT * FROM pendaftaran WHERE nik=$nik");
$berkas= query("SELECT * FROM berkas WHERE nik=$nik");


//queri data mahasiswa berdasarkan id



?>
<!DOCTYPE html>
<html lang="en">
  <!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 4.0
	Author: PIXINVENT
	Author URL: https://themeforest.net/user/pixinvent/portfolio
  ================================================================================ -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Sistem Informasi Pendaftaran Juru Parkit Online</title>
    <!-- Favicons-->
    <link rel="icon" href="admin/images/favicon/logo1.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/logo1.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/logo1.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="admin/css//materialize.css" type="text/css" rel="stylesheet">
    <link href="admin/css//style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="admin/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="admin/vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <a href="beranda.php">
                    <img src="admin/images/logo/perhubungan-logo.png" alt="materialize logo">
                    <span class="logo-text hide-on-med-and-down">Dinas Perhubungan</span>
                  </a>
                </h1>
              </li>
            </ul>
            
            <ul class="right hide-on-med-and-down">
              
              <li>
               
              </li>
              <li>
               
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">            
                  
                    
                    <i></i>
                  </span>
                </a>
              </li>
           
            
            <!-- profile-dropdown -->
            <ul id="profile-dropdown" class="dropdown-content">
              
              <li>
                <a href="log_out.php" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- end header nav-->
    </header>
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
              <div class="row">
                <div class="col col s4 m4 l4">
                  
                </div>
                <div class="col col s8 m8 l8">
                  <ul id="profile-dropdown-nav" class="dropdown-content">                   
                    <li>
                      <a href="log_out.php" class="grey-text text-darken-1">
                        <i class="material-icons">keyboard_tab</i> Logout</a>
                    </li>
                  </ul>
                  <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav"><?php echo $_SESSION['nama']; ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                  
                </div>
              </div>
            </li>
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a href="beranda.php" class="waves-effect waves-cyan">
                      <i class="material-icons">pie_chart_outlined</i>
                      <span class="nav-text">Beranda</span>
                    </a>
                </li>
                <li class="bold">
                  <a href="
                  <?php
                  if ( !$data_pendaftaran){
                    echo "             
                    data_diri.php?nik=";			
                  }
                  else{                    
                    echo " 
                    update_data_diri.php?nik=";  
                                     
                  }
                      ?>  
                  <?php echo $_SESSION['nik']; ?>" class="waves-effect waves-cyan">                  
                      <i class="material-icons">account_circle</i>
                      <span class="nav-text">Data Diri</span>
                    </a>
                </li>

                <li class="bold">
                  <a target="blank"  href="
                  <?php
				if ( !$berkas){
					echo "             
					upload_data.php?nik="
					;			
				}
				else{
          echo " 
          update_upload_data.php?nik=  
					";
					
				}
            ?>
            <?php echo $_SESSION['nik']; ?>" class="waves-effect waves-cyan">
                      <i class="material-icons">account_circle</i>
                      <span class="nav-text">Upload Data</span>
                    </a>
                </li>


              
                <li class="bold">
                  <a href="beranda.php?page=status_konfirmasi.php" class="waves-effect waves-cyan">
                      <i class="material-icons">check_box</i>
                      <span class="nav-text">Status Konfirmasi</span>                      
                    </a>
                </li>
                
              </ul>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>
 
            <!--<div id="card-stats">-->
            <!--  <div class="row">-->
            <!--    <div class="col s12 m6 l3">-->
            <!--      <div class="card">-->
            <!--        <div class="card-content cyan white-text">-->
            <!--          <p class="card-stats-title">-->
            <!--            <i class="material-icons">person_outline</i> New Clients</p>-->
            <!--          <h4 class="card-stats-number">566</h4>-->
            <!--          <p class="card-stats-compare">-->
            <!--            <i class="material-icons">keyboard_arrow_up</i> 15%-->
            <!--            <span class="cyan text text-lighten-5">from yesterday</span>-->
            <!--          </p>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col s12 m6 l3">-->
            <!--      <div class="card">-->
            <!--        <div class="card-content red accent-2 white-text">-->
            <!--          <p class="card-stats-title">-->
            <!--            <i class="material-icons">attach_money</i>Total Sales</p>-->
            <!--          <h4 class="card-stats-number">$8990.63</h4>-->
            <!--          <p class="card-stats-compare">-->
            <!--            <i class="material-icons">keyboard_arrow_up</i> 70%-->
            <!--            <span class="red-text text-lighten-5">last month</span>-->
            <!--          </p>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col s12 m6 l3">-->
            <!--      <div class="card">-->
            <!--        <div class="card-content teal accent-4 white-text">-->
            <!--          <p class="card-stats-title">-->
            <!--            <i class="material-icons">trending_up</i> Today Profit</p>-->
            <!--          <h4 class="card-stats-number">$806.52</h4>-->
            <!--          <p class="card-stats-compare">-->
            <!--            <i class="material-icons">keyboard_arrow_up</i> 80%-->
            <!--            <span class="teal-text text-lighten-5">from yesterday</span>-->
            <!--          </p>-->
            <!--        </div>-->
                    
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="col s12 m6 l3">-->
            <!--      <div class="card">-->
            <!--        <div class="card-content deep-orange accent-2 white-text">-->
            <!--          <p class="card-stats-title">-->
            <!--            <i class="material-icons">content_copy</i> New Invoice</p>-->
            <!--          <h4 class="card-stats-number">1806</h4>-->
            <!--          <p class="card-stats-compare">-->
            <!--            <i class="material-icons">keyboard_arrow_down</i> 3%-->
            <!--            <span class="deep-orange-text text-lighten-5">from last month</span>-->
            <!--          </p>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            <!--card stats end-->
            
            <!--card widgets start-->
            
            
            
            <!-- //////////////////////////////////////////////////////////////////////////// -->
                      <?php 
                   		 if (isset($_GET['page'])) {
                       			 include_once $_GET['page'];
                    		} else {
                      			  include_once 'home.php';
                       }
                       ?>






          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- START RIGHT SIDEBAR NAV-->
        <aside id="right-sidebar-nav">
          <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
              <div class="row">
                <div class="col s12 border-bottom-1 mt-5">
                  <ul class="tabs">
                    <li class="tab col s4">
                      <a href="#activity" class="active">
                        <span class="material-icons">graphic_eq</span>
                      </a>
                    </li>
                    <li class="tab col s4">
                      <a href="#chatapp">
                        <span class="material-icons">face</span>
                      </a>
                    </li>
                    <li class="tab col s4">
                      <a href="#settings">
                        <span class="material-icons">settings</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div id="settings" class="col s12">
                  <h6 class="mt-5 mb-3 ml-3">GENERAL SETTINGS</h6>
                  <ul class="collection border-none">
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Notifications</span>
                        <div class="switch right">
                          <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show recent activity</span>
                        <div class="switch right">
                          <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Notifications</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show recent activity</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show your emails</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show Task statistics</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                  </ul>
                </div>
                <div id="chatapp" class="col s12">
                  
                </div>
                <div id="activity" class="col s12">
                  <h6 class="mt-5 mb-3 ml-3">RECENT ACTIVITY</h6>
                  <div class="activity">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                      <i class="material-icons white-text icon-bg-color deep-purple lighten-2">add_shopping_cart</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="deep-purple-text medium-small">just now</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color cyan lighten-2">airplanemode_active</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="cyan-text medium-small">Yesterday</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                        <i class="material-icons white-text icon-bg-color green lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="green-text medium-small">5 Days Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color amber lighten-2">store</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="amber-text medium-small">1 Week Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list row">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color deep-orange lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                        <i class="material-icons white-text icon-bg-color brown lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="brown-text medium-small">1 Month Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color deep-purple lighten-2">store</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list row">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color grey lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="grey-text medium-small">1 Year Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </aside>
        <!-- END RIGHT SIDEBAR NAV-->
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START FOOTER -->
    <footer class="page-footer gradient-45deg-light-blue-cyan">
        <div class="footer-copyright">
          <div class="container">
            <span>Copyright ©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> <a class="grey-text text-lighten-2" href="#" target="_blank">Dinas Perhubungan</a></span>
            <span class="right hide-on-small-only"> <a class="grey-text text-lighten-2" href="#"></a></span>
          </div>
        </div>
    </footer>
    <!-- END FOOTER -->
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="admin/vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="admin/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="admin/js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="admin/js/custom-script.js"></script>
  </body>
</html>