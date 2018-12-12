<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 12/13/18
 * Time: 1:06 AM
 */

include ("connection.php");

if(!empty($_GET['id'])) {

    $sql = "SELECT * FROM profiles where mem_id='{$_GET['id']}'";

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
}

?>

<?php include ("header.php");  ?>

<html lang="en">


<br>
<div class="row">
    <div class="profile-left white">
        <img class="rounded-circle profile-picture" src="getimage.php?id=<?php echo $_GET['id']; ?>" onerror="this.src='/images/default2.png'" alt="Tavish Profile Image" width="140" height="140">
        <h2><?php echo $fname; ?> <?php echo $lname; ?></h2>
        <p><?php echo $email; ?></p>
    </div>

    <div class="profile-right">
        <p><?php echo $bio; ?></p>
<!--        <div class="nav-scroller py-1 mb-2">-->
<!--            <nav class="nav d-flex">-->
<!--                <a class="p-2 text-muted" style="margin-left:8px;"" href="#">Bio</a>-->
<!--                <a class="p-2 text-muted" href="#">Projects</a>-->
<!--                <a class="p-2 text-muted" href="#">Recent Activity</a>-->
<!--            </nav>-->
<!--            -->
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>-->
<!--    <script src="js/bootstrap.min.js"></script>-->
<!--    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--    <script src="js/ie10-viewport-bug-workaround.js"></script>-->

</body>
</html>
