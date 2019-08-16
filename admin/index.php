 
<?php
include_once '../config/config.php';

$config = new Config();
$db = $config->getConnection();
	
if($_POST){
	
	include_once '../config/login.inc.php';
	$login = new Login($db);

	$login->userid = $_POST['username'];
	$login->passid = $_POST['password'];
	
	if($login->login()){
		echo "<script>location.href='beranda.php'</script>";
	}
	
	else{
		echo "<script>alert('Gagal Total')</script>";
	}
}
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
    <title>Administrator</title>
    <!-- Favicons-->
    <link rel="icon" href="images/favicon/logo1.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="css//materialize.css" type="text/css" rel="stylesheet">
    <link href="css//style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
  </head>
  <body>
 


  <div class="section"></div>
  <main>
    <center>
      
      <div class="section"></div>

      <h5 class="indigo-text ">Login Administrator</h5>
      <div class="section"></div>

      
        <div class=" col s12 m8 l9 z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

 <!--Basic Form-->
 
                                    <form class="col s12  center" action="" method="post">
                                    <div class="row">
                                        <div class="input-field col s12">
                                        <input id="name" name="username" type="text">
                                        <label for="first_name">Username</label>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="input-field col s12">
                                        <input id="password" type="password" name="password">
                                        <label for="password">Password</label>
                                        </div>
                                    </div>
                                    
                                        <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light center" type="submit" >Login
                                        
                                            </button>
                                        </div>
                                        </div>
                                    </div>
                                    </form>
                                    </center>
                                </div>
                                </div>
                            </div>
                            </div>
</div>
</div>

</center>

                  <script type="text/javascript" src="vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
  </body>
</html>