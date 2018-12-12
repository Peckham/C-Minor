<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 12/11/18
 * Time: 2:36 AM
 */

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
    $result = $db->query("SELECT organization_img FROM organizations WHERE organization_id = {$_GET['id']}");

    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();

        //Render image
        header("Content-type: image/png");
        echo $imgData['organization_img'];
    }else{
        echo 'Image not found...';
    }
}

?>
