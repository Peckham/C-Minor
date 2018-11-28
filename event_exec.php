<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 11/29/18
 * Time: 1:34 AM
 */

session_start();

include('connection.php');


$name=$_POST['name'];
$organization=$_POST['organization'];
$date=$_POST['event_date'];
$time=$_POST['event_time'];
$location=$_POST['location'];
$contact=$_POST['contact'];



mysqli_query($bd, "INSERT INTO events(event_name, organization, event_date, event_time, location, contact)VALUES('$name', '$organization', '$date', '$time', '$location', '$contact')");

header("location: events.php?remarks=success");

mysqli_close($con);
?>