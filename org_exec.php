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


mysqli_query($bd, "INSERT INTO organizations(organization_name, location, email, website, org_info, organization_img_name, organization_img)VALUES('$organization', '$location', '$email', '$website', '$info','$imgname', '$imgContent')");

header("location: events.php?remarks=success");

mysqli_close($con);
?>