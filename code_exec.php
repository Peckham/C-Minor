<?php
session_start();

include('connection.php');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$bio=$_POST['bio'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=$_POST['password'];
$major=$_POST['major'];
$interests=$_POST['interests'];
$typeof = $_POST['typeof'];


mysqli_query($bd, "INSERT INTO member(fname, lname, bio, address, contact, picture, username, password, major, interests, typeof)VALUES('$fname', '$lname', '$bio', '$address', '$contact', '$pic', '$username', '$password', '$major', '$interests', '$typeof')");

header("location: register.php?remarks=success");

mysqli_close($con);
?>