<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 12/13/18
 * Time: 1:06 AM
 */

include ("connection.php");

if(!empty($_GET['id'])) {

    $sql = "SELECT organization_name, location, email, website, org_info FROM organizations WHERE organization_id='{$_GET['id']}'";

    $result = mysqli_query($bd, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['organization_name'];
            $location = $row['location'];
            $email = $row['email'];
            $website = $row['website'];
            $info = $row['org_info'];
        };
    };
}

?>

<?php include ("header.php");  ?>

<html lang="en">


<br>
<div class="row">
    <div class="profile-left white">
        <img class="rounded-circle profile-picture" src="getorgimage.php?id=<?php echo $_GET['id']; ?>" onerror="this.src='/images/default2.png'" alt="Tavish Profile Image" width="140" height="140">
        <h2><?php echo $name; ?></h2>
        <h2><?php echo $location; ?></h2>
        <p><?php echo $email; ?></p>
        <p><?php echo $website; ?></p>
    </div>

    <div class="profile-right">
        <p><?php echo $info; ?></p>

    </div>
</div>
</div>


</body>
</html>
