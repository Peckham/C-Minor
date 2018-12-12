<?php
session_start();
?>

<?php

include('connection.php');

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "Database";
$prefix = "";

$conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
$id=$_SESSION['SESS_MEMBER_ID'];
$sql = "SELECT * FROM profiles where mem_id='$id'";
//$statement = $conn -> prepare($sql);
//$statement->execute();
//$r = $statement->fetch();

$result = mysqli_query($bd, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $type = $row['typeof'];
        $image = $row['profile_img'];
        $bio = $row['bio'];
    };
};

//$fname = $_SESSION['fname'];
//$lname = $_SESSION['lname'];
//$email = $_SESSION['email'];
//$type = $_SESSION['typeof'];
//$image = $_SESSION['profile_img'];



//$result = $conn->query("SELECT profile_img FROM profiles WHERE id = $id");
//
//if($result->num_rows > 0) {
//    $imgData = $result->fetch_assoc();
//
//    //Render image
//    header("Content-type: image/jpg");
//    $image = $imgData['image'];
//}
include "header.php";

if (isset($_SESSION['SESS_MEMBER_ID'])) {
?>


<html lang="en">
<body>
<br><br>
<div class="container">
    <div class="row">
        <div class="profile-main rounded">
            <div class="profile-content">
                <div class="edit-profile">
                    <p><a class="btn btn-secondary" href="edit_profile.php?id=<?php echo $id; ?>" role="button">Edit Profile &raquo;</a></p>
                </div>
                <div class="col-md-6 ml-auto mr-auto">
                   <div class="profile">
                        <div class="avatar center">
                            <img src="getimage.php?id=<?php echo $id; ?>" class="img-raised rounded-circle img-fluid">
                        </div><br>
                        <div class="name">
                            <h2 class="text-center"><?php echo $fname; ?> <?php echo $lname; ?></h2>
                            <h5 class="text-center"><?php echo $type; ?></h5>
                            <h6 class="text-center"><?php echo $email; ?></h6>
                        </div><br><br>
                    </div>
                    <div class="description text-center">
                        <p><?php echo $bio ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>-->
<!--    <script src="js/bootstrap.min.js"></script>-->
<!--    IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--    <script src="js/ie10-viewport-bug-workaround.js"></script>-->
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



