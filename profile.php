<?php
session_start();
?>

<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "registration";
$prefix = "";

$conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
$id=$_SESSION['SESS_MEMBER_ID'];
$sql = "SELECT * FROM member where mem_id='$id'";
$statement = $conn -> prepare($sql);
$statement->execute();
$r = $statement->fetch();
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$contact = $_SESSION['contact'];
$major = $_SESSION['major'];
$bio = $_SESSION['bio'];
$interests = $_SESSION['interests'];

include "header.php";
?>

<html lang="en">

    <div class="page-header header">
      <h1>My Profile</h1>
    </div>

    <br>
    <div class="row">
      <div class="profile-left white">
        <img class="rounded-circle profile-picture" src="images/TempProfile.jpg" alt="Tavish Profile Image" width="140" height="140">
        <h2><?php echo $fname; ?> <?php echo $lname; ?></h2>
        <p><?php echo $interests; ?></p>
        <p><a class="btn btn-secondary" href="#" role="button">Edit Profile &raquo;</a></p>
      </div>

      <div class="profile-right">
        <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex">
          <a class="p-2 text-muted" style="margin-left:8px;"" href="#">Bio</a>
          <a class="p-2 text-muted" href="#">Projects</a>
          <a class="p-2 text-muted" href="#">Recent Activity</a>
        </nav>
      </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
