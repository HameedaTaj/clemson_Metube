<?php ob_start(); ?>
<?php session_start(); ?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Clemson University Metube</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">

        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <div id = "wrap">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <nav style = "background-color:#F66733;" class="navbar navbar-fixed-top" role="navigation">
              <div class="container">
                <div class="navbar-header">
               <a href="index.php" class="pull-left"><img class = "img-responsive" src="logo.png"></a>
                    <a class="navbar-brand" style = "color:#fff; font-size:40px;" href="index.php"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">

                </div><!--/.navbar-collapse -->
              </div>
        </nav>


<br><br><br>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1 align="center">Welcome to Clemson Metube</h1>
        <p align="center">Clemson's Multimedia Online Database System</p>
      <div class="container">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="css\home_screen_1.jpg" alt="...">
        <div class="carousel-caption">
        An online Multimedia System that allows users to upload, download various mutilmedia files
        </div>
      </div>
      <div class="item">
        <img src="css\home_screen_2.jpg" alt="...">
        <div class="carousel-caption">
        Interact with the users and share thoughts and comments
        </div>
      </div>
      <div class="item">
        <img src="css\home_screen_3.jpg" alt="...">
        <div class="carousel-caption">
        View various files online on the website.
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Sign In</h2>
            <form method = "post" >
                <div class="form-group">
                <label for="">Username/EMail/Phone</label>
                <input type="text" name = "credential" class="form-control" id="" placeholder="Enter Username or Email or Phone" required>
                </div>
                <div class="form-group">
                <label for="">Password</label>
                <input type="password" name = "password" class="form-control" id="" placeholder="Enter Password">
                </div>
                <input type="submit" class="button1" name = 'login' value = 'Log In'>
            </form>
        </div>
        <div class="col-md-4"> </div>
        <div class="col-md-4">
          <h3> Do not have an account yet? Sign up now! </h3><br>
          <p><a class="button2" href="register.php" role="button">Sign Up</a></p>
        </div>
      </div>
      <br>
      <div class="row">
        <h3> Just want to visit? Continue as guest </h3>
        <div class="col-md-4">
		  <form method = "post">
			<input type="submit" class="button3" name = 'guest' value = 'Continue as Guest'>
		  </form>
        </div>
      </div>
      <hr>
  <?php
                include_once "function.php";
                if(isset($_POST['login'])) {
					$check = userValidation ($_POST['credential'], $_POST['password']);
					if(!$_POST['password']){
						echo "<h3>Please enter password or click on Forgot Password</h3>";
					}
					elseif($check){
						header ('Location: browse.php');
					}
					else{
						echo "<h3>Username or password is incorrect. Please login again!!</h3>";
					}
				}
				elseif (isset($_POST['guest'])){
					$user = guest();
					header ('Location: browse.php');
				}
				elseif (isset($_POST['forgotPassword'])){
					header ('Location: forgotPassword.php');
				}
    ?>



        <?php include_once('parts/footer.php'); ?>
