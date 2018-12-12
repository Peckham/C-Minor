<?php
session_start();
?>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon.ico">
    <link href="https://fonts.googleapis.com/css?family=Nova+Flat|Russo+One" rel="stylesheet">

    <title>C Minor</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <!--Desktop Stylesheet-->
    <link rel="stylesheet" type="text/css"
          media="only screen and (min-width: 961px)" href="css/custom.css">
    <!--Mobile Stylesheet-->
    <link rel="stylesheet" type="text/css"
          media="only screen and (max-width: 961px)" href="css/customMobile.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://www.jqueryui.com/resources/demos/style.css">
</head>

<body class="bgColor">

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="">C-Minor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="events.php">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/forums">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mentor_catalogue.php">Mentor Catalogue</a>
                </li>
            </ul>
            <?php
            if (isset($_SESSION['SESS_MEMBER_ID'])) {?>
                
                <div class="btn-group">
                  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['fname']; ?>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button"><a href="profile.php" class="black">My Account</a></button>
                    <button class="dropdown-item" type="button"><a href="logout.php" class="black">Log Out</a></button>
                  </div>
                </div>

            <?php
            } else {?>
                <a href="register.php" class="btn btn-secondary btn-sm top-right-buttons" value="Log In" role="button">Register</a>

                <a href="http://www.jquery2dotnet.com" class="dropdown-toggle btn btn-secondary btn-sm top-right-buttons" data-toggle="dropdown">Login<b class="caret"></b></a>
                 <ul class="dropdown-menu dropdown-menu-right" style="padding: 15px;min-width: 250px;">
                    <li>
                       <div class="row">
                          <div class="col-md-12">
                             <form class="form" role="form" method="post" action="login_exec.php" accept-charset="UTF-8" id="login-nav">
                                <div class="form-group">
                                   <label class="sr-only" for="usernameInput">Username</label>
                                   <input name="username" type="username" class="form-control" id="usernameInput" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                   <label class="sr-only" for="passwordInput">Password</label>
                                   <input name="password" type="password" class="form-control" id="passwordInput" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                   <button type="submit" class="btn btn-secondary btn-block">Sign in</button>
                                </div>
                             </form>
                          </div>
                       </div>

            <?php
            }?>
        </div>
    </nav>
</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>