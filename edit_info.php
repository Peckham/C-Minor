<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 12/11/18
 * Time: 5:22 AM
 */

include('connection.php');



$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$bio=$_POST['bio'];
$major=$_POST['major'];
$interests=$_POST['interests'];
if ($fname !== NULL){
    mysqli_multi_query($bd, "UPDATE `profiles` SET `fname`='$fname' WHERE mem_id={$_GET['id']}; UPDATE `members` SET `fname`='$fname'");
} elseif ($lname !== NULL) {
    mysqli_multi_query($bd, "UPDATE `profiles` SET `lname`='$lname' WHERE mem_id={$_GET['id']}; UPDATE `members` SET `lname`='$lname'");
} elseif ($email !== NULL) {
    mysqli_multi_query($bd, "UPDATE `profiles` SET `email`='$email' WHERE mem_id={$_GET['id']}; UPDATE `members` SET `email`='$email'");
} elseif ($contact !== NULL) {
    mysqli_query($bd, "UPDATE `profiles` SET `contact`='$contact' WHERE mem_id={$_GET['id']}");
} elseif ($bio !== NULL) {
    mysqli_query($bd, "UPDATE `profiles` SET `bio`='$bio' WHERE mem_id={$_GET['id']}");
} elseif ($major !== NULL) {
    mysqli_query($bd, "UPDATE `profiles` SET `major`='$major' WHERE mem_id={$_GET['id']}");
} elseif ($interests !== NULL) {
    mysqli_query($bd, "UPDATE `profiles` SET `interests`='$interests' WHERE mem_id={$_GET['id']}");
};



//mysqli_query($bd, "UPDATE `profiles`
//SET `fname`='$fname', `lname`='$lname', `email`='$email',
//`contact`='$contact', `bio`='$bio',
//`major`='$bio', `interests`='$interests' WHERE mem_id={$_GET['id']}");

header("location: edit_profile.php?id={$_GET['id']}");
mysqli_close($bd);