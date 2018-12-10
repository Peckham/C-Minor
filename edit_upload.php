<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 12/11/18
 * Time: 3:58 AM
 */

include('connection.php');


$imgname = $_FILES['image']['name'];
$image = $_FILES['image']['tmp_name'];
$imgContent = addslashes(file_get_contents($image));

$sql = "UPDATE profiles SET profile_img='$imgContent', profile_img_name='$imgname' WHERE mem_id={$_GET['id']}";

mysqli_multi_query($bd, "UPDATE `profiles` SET `profile_img_name`='$imgname', `profile_img` = '$imgContent' WHERE mem_id={$_GET['id']}");
header("location: edit_profile.php?remark=success");
mysqli_close($bd);


?>