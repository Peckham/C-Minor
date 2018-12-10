<?php
/* [INIT] */
require "config.php";

/* [CONNECT TO DB] */
$pdo = new PDO(
    "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
    DB_USER, DB_PASSWORD,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false]
);

/* [FETCH IMAGE] */
$stmt = $pdo->prepare("SELECT `profile_img` 
	FROM `profiles` WHERE `profile_img_name`=?");
$stmt->execute(array($_GET['f']));
$img = $stmt->fetch();

/* [OUTPUT] */
// DO MORE ERROR CHECKING & HANDLING HERE IF YOU WANT
// IF IMAGE IS NOT FOUND - SHOW EMPTY IMAGE?
// if (count($img)==0) { ... }
echo $img['data'];
?>