<?php
session_start();

include('connection.php');

$username=$_POST['username'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$typeof=$_POST['typeof'];


mysqli_query($bd, "INSERT INTO members(username, password, fname, lname, email, typeof)VALUES('$username', '$password', '$fname', '$lname', '$email', '$typeof')");

header("location: register.php?remarks=success");

mysqli_close($con);
?>