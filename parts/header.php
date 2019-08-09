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
            <a class="navbar-brand" style = "color:#fff; font-size:30px;" href="index.php"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class = "nav navbar-nav navbar-right">

              <li>
                  <?php
				if($_SESSION['id'] == 1){
					echo"<a href = 'register.php' style = 'margin: 15px 5px;' class = 'btn btn-default btn-success'>Sign Up</a>";
				}
			?>
              </li>
               <li class="active" style = "padding-top: 18px;">
               <a href = "profile.php" style = "font-size:18px;"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			<?php
				include_once "function.php";

				$userId = $_SESSION['id'];

				$details = userDetails($userId);

				echo $details[3]." ".$details[4];
			?>
			</a>
            </li>
        </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
        <br><br><br><br><br>

    <nav class="navbar navbar-default" role="navigation">
      <div class="container" style="background-color:#685C53; width:100%;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class = "nav navbar-nav">
            <li>
                <a style = "color:#ffffff;" href = "browse.php">Home</a>
            </li>
            <li>
                <a style = "color:#ffffff;" href = "all_contacts.php">Users</a>
            </li>

            <li>
                <a style = "color:#ffffff;" href = "contacts.php">Contacts</a>
            </li>
            <li>
                <a style = "color:#ffffff;" href = "friends.php">Friends</a>
            </li>
            <li>
                <a style = "color:#ffffff;" href = "blocked.php">Foe/Blocked</a>
            </li>
			<li>
                <a style = "color:#ffffff;" href = "media_upload.php">Upload</a>
            </li>
            <?php
			if($_SESSION['id'] != 1){
				echo"<li>
						<a href = 'recommendation.php'><div style ='color:#ffffff'>Recommendations</div></a>
					</li>";
				}
			?>
            </ul>


            <form class="navbar-form navbar-left" role="search" method = "post" action = 'search.php'>
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Search" name = 'key'>
				  <input type="submit" name = "search" value = "Search" class="button5"></input>
				</div>
                      <a style = "color:#f66733; margin: 5px;"href='advance_search.php'>Advance Search</a>

			</form>
			<form class="navbar-form navbar-left" role="search" method = "post">
				<div class="form-group">
					<input type="submit" name = "logout" value = "Logout" class="button5"></input>
				</div>
			</form>

        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	<?php
		if(isset($_POST['logout'])){
			unset($_SESSION['id']);
			session_destroy();

			header("Location: index.php");
			exit;
		}
	?>
