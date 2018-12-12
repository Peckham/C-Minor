<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 11/29/18
 * Time: 1:34 AM
 */

session_start();

include('connection.php');


$event_name=$_POST['event_name'];
$organization=$_POST['organization'];
$event_date=$_POST['event_date'];
$event_time=$_POST['event_time'];
$location=$_POST['location'];
$contact=$_POST['contact'];

$redirect_location = 'events.php';

$result = mysqli_query($bd, "SELECT organization_name FROM organizations WHERE organization_name=='{$organization}'");

if (mysqli_fetch_array($result)==false) {
    $redirect_location = "add_event.php?remarks=org";
    header("location:".$redirect_location);
    die();
};

mysqli_query($bd, "INSERT INTO events(event_name, organization, event_date, event_time, location, contact)VALUES('$event_name', '$organization', '$event_date', '$event_time', '$location', '$contact')");

header("location:".$redirect_location);

mysqli_close($con);
?>