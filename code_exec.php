<?php
session_start();

include('connection.php');

$username=$_POST['username'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$typeof=$_POST['typeof'];

$imgname = $_FILES['image']['name'];
$image = $_FILES['image']['tmp_name'];
$imgContent = addslashes(file_get_contents($image));

$sql = "INSERT INTO members(username, password, fname, lname, email, typeof)VALUES('$username', '$password', '$fname', '$lname', '$email', '$typeof')";
$sql .= "INSERT INTO profiles(fname, lname, email, typeof)VALUES('$fname', '$lname', '$email', '$typeof')";
//mysqli_query($bd, "INSERT INTO members(username, password, fname, lname, email, typeof)VALUES('$username', '$password', '$fname', '$lname', '$email', '$typeof')");
//mysqli_query($bd, "INSERT INTO profiles(fname, lname, email, typeof)VALUES('$fname', '$lname', '$email', '$typeof')");
//mysqli_query($sql1, $con);
//mysqli_query($sql2, $con);
mysqli_multi_query($bd, "INSERT INTO members(username, password, fname, lname, email, typeof)VALUES('$username', '$password', '$fname', '$lname', '$email', '$typeof'); INSERT INTO profiles(fname, lname, email, profile_img, typeof, profile_img_name)VALUES('$fname', '$lname', '$email', '$imgContent', '$typeof', '$imgname')");
header("location: login.php?remarks=success");



mysqli_close($con);
?>