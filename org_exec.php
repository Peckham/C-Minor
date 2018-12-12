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



mysqli_query($bd, "INSERT INTO organizations(organization_name, location, email, website)VALUES('$organization', 'location', 'email', 'website')");

header("location: events.php?remarks=success");

mysqli_close($con);
?>