<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 12/11/18
 * Time: 2:36 AM
 */
//header("content-type:image/jpeg");
//
//session_start();
//
//include('connection.php');
//
//$mysql_hostname = "localhost";
//$mysql_user = "root";
//$mysql_password = "root";
//$mysql_database = "Database";
//$prefix = "";
//
//$conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
//$id=$_SESSION['SESS_MEMBER_ID'];
//$sql = "SELECT * FROM profiles where mem_id='$id'";
//$var = mysqli_query($bd, $sql);
//if($row = mysqli_fetch_array($var)) {
//    $image_name=$row["profile_img_name"];
//    $image_content=$row["profile_img"];
//}
//echo $image;
include ("connection.php");

if(!empty($_GET['id'])){
    //DB details
    $dbHost     = $mysql_hostname;
    $dbUsername = $mysql_user;
    $dbPassword = $mysql_password;
    $dbName     = $mysql_database;

    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //Check connection
    if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

    //Get image data from database
    $result = $db->query("SELECT event_img FROM events WHERE event_id = {$_GET['id']}");

    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();

        //Render image
        header("Content-type: image/png");
        echo $imgData['event_img'];
    }else{
        echo 'Image not found...';
    }
}

?>