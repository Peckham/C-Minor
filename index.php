<!DOCTYPE html>
<html lang="en">

<?php include "header.php"; ?>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body class="nyuPurpleBg">
    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <?php
          if (isset($_SESSION['SESS_MEMBER_ID'])) {?>
            <div class="col-xl-9 mx-auto">
              <h1 class="mb-5">C-Minor: Connecting Minorities in CS</h1>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
              <form>
                <div class="form-row">
                  <div class="col-12">
                    <a href="profile.php" class="btn btn-block btn-lg btn-secondary">My Profile</a>
                  </div>
                </div>
              </form>
            </div>
          <?php
          } else { ?>
            <div class="col-xl-9 mx-auto">
              <h1 class="mb-5">Join C-Minor and level up your career today!</h1>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
              <form>
                <div class="form-row">
                  <div class="col-12">
                    <a href="register.php" class="btn btn-block btn-lg btn-secondary">Register</a>
                  </div>
                </div>
              </form>
            </div>
          <?php
          } ?>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <a href="events.php">
                <div class="features-icons-icon d-flex">
                  <i class="icon-calendar m-auto text-primary"></i>
                </div>
              </a>
              <h3>Events</h3>
              <p class="lead mb-0">Keep updated on the events happening near you!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <a href="forums.php">
                <div class="features-icons-icon d-flex">
                  <i class="icon-note m-auto text-primary"></i>
                </div>
              </a>
              <h3>Forums</h3>
              <p class="lead mb-0">Ask questions and help others on our forums!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <a href="mentor_catalogue.php">
                <div class="features-icons-icon d-flex">
                  <i class="icon-user m-auto text-primary"></i>
                </div>
              </a>
              <h3>Mentorship</h3>
              <p class="lead mb-0">Find a mentor or mentee via our Mentorship program!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>