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

if (isset($_SESSION['SESS_MEMBER_ID'])) {
?>


<html lang="en">
<head>
    <title>Image Upload</title>
</head>
<body>
<form action="upload_exec.php" method="post" enctype="multipart/form-data">
    <input type="file" name="upFile" id="upFile">
    <input type="submit" name="submit" value="Upload Image">
</form>

<head>
    <title>Edit Information</title>
</head>

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

    <?php

} else {
    ?>
    <html>
    <style>
        .example1 {
            height: 80%;
            overflow: hidden;
            position: relative;
            top: 100px;
        }
        .example1 h3 {
            font-size: 8em;
            font-family: Impact;
            color: white;
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 100px;
            text-align: center;
            /* Starting position */
            -moz-transform:translateX(100%);
            -webkit-transform:translateX(100%);
            transform:translateX(100%);
            /* Apply animation to this element */
            -moz-animation: example1 5s linear infinite;
            -webkit-animation: example1 5s linear infinite;
            animation: example1 5s linear infinite;
        }
        /* Move it (define the animation) */
        @-moz-keyframes example1 {
            0%   { -moz-transform: translateX(100%); }
            100% { -moz-transform: translateX(-100%); }
        }
        @-webkit-keyframes example1 {
            0%   { -webkit-transform: translateX(100%); }
            100% { -webkit-transform: translateX(-100%); }
        }
        @keyframes example1 {
            0%   {
                -moz-transform: translateX(100%); /* Firefox bug fix */
                -webkit-transform: translateX(100%); /* Firefox bug fix */
                transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(-100%); /* Firefox bug fix */
                -webkit-transform: translateX(-100%); /* Firefox bug fix */
                transform: translateX(-100%);
            }
        }
    </style>
    <body>
    <div class = 'example1'>
    <h3>YOU ARE NOT LOGGED IN                      YOU ARE NOT LOGGED IN YOU ARE NOT LOGGED IN YOU ARE NOT LOGGED IN</h3>
    </div>
    </body>
    </html>
    <?php
}



