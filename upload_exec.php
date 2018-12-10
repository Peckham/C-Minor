<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "database";
$prefix = "";

$conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
$id=$_SESSION['SESS_MEMBER_ID'];

/* [INIT] */
require "config.php";

/* [ERROR CHECKING] */
if ($_FILES['upFile']['size']==0) { die("No file selected"); }
if (exif_imagetype($_FILES['upFile']['tmp_name'])===false) { die("Not an image"); }

/* [CONNECT TO DB] */
$pdo = new PDO(
    "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
    DB_USER, DB_PASSWORD,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false]
);

/* [INSERT IMAGE] */
// DO YOUR ERROR CHECKING HERE IF YOU WANT
try {
	// $mem_id = $_POST['mem_id'];
 //    $imagename = $_POST['imagename'];
 //    $image = $_POST['image'];
    
 //    $sql = "UPDATE member ". "SET imagename = $imagename ". "SET image = $image ".
 //       "WHERE mem_id = $mem_id" ;
 //    mysql_select_db('registration');
 //    $retval = mysql_query( $sql, $conn );
    
 //    if(! $retval ) {
 //       die('Could not update data: ' . mysql_error());
 //    }
 //    echo "Updated data successfully\n";



    $stmt = $pdo->prepare("INSERT INTO `profiles` (`profile_img_name`, `profile_img`) VALUES (?, ?)");
    $stmt->execute([$_FILES["upFile"]["name"], file_get_contents($_FILES['upFile']['tmp_name'])]);
} catch (Exception $ex) {
    echo "ERROR - " . $ex->getMessage();
    die();
}

/* [ON COMPLETE] */
// DO SOMETHING, MAYBE REDIRECT THE USER TO ANOTHER PAGE
// header("Location: http://example.com/abc.php");
header("location: update.php?id=".$id."?remarks=imagesuccess")
?>