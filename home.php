<?php
session_start();

?>



<html>

<body>

<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "database";
$prefix = "";

$conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
$id=$_SESSION['SESS_MEMBER_ID'];
$sql = "SELECT * FROM members where mem_id='$id'";
$statement = $conn -> prepare($sql);
$statement->execute();
$r = $statement->fetch();
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$contact = $_SESSION['contact'];
$major = $_SESSION['major'];
$bio = $_SESSION['bio'];
$interests = $_SESSION['interests'];

include "header.php";
?>


<table width="398" border="0" align="center" cellpadding="0">

    <tr>
        <td height="26" colspan="2">Your Profile Information </td>
        <td><div align="right"><a href="login.php">logout</a></div></td>
    </tr>
    <tr>
        <td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td>
        <td width="82" valign="top"><div align="left">First Name:</div></td>
        <td width="165" valign="top"><?php echo $fname; ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Last Name:</div></td>
        <td valign="top"><?php echo $lname ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Contact No: </div></td>
        <td valign="top"><?php echo $contact ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Major: </div></td>
        <td valign="top"><?php echo $major ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Interests: </div></td>
        <td valign="top"><?php echo $interests ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Biography: </div></td>
        <td valign="top"><?php echo $bio ?></td>
    </tr>


</table>
<p align="center"><a href="login.php"></a></p>
</body>
</html>