<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 11/29/18
 * Time: 1:34 AM
 */

session_start();

include('connection.php');


$organization=$_POST['organization_name'];
$location=$_POST['location'];
$email=$_POST['email'];
$website=$_POST['website'];
$info=$_POST['info'];


$imgname = $_FILES['image']['name'];
$image = $_FILES['image']['tmp_name'];
$imgContent = addslashes(file_get_contents($image));

$result = mysqli_query($bd, "SELECT organization_name FROM organizations WHERE organization_name ='{$organization}'");
//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//$result = $connection->query("SELECT username FROM members WHERE username=='{$username}'");
if (mysqli_num_rows($result) !== 0) {

    $redirect_location = "register.php?remarks=orgtaken";
    header("location:".$redirect_location);
    die();
};

mysqli_query($bd, "INSERT INTO organizations(organization_name, location, email, website, org_info, organization_img_name, organization_img)VALUES('$organization', '$location', '$email', '$website', '$info','$imgname', '$imgContent')");

header("location: events.php?remarks=success");

mysqli_close($con);
?>