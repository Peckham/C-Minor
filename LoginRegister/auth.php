<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 11/14/18
 * Time: 6:40 PM
 */
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
    header("location: login.php");
    exit();
}
?>