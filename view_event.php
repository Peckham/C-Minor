<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 12/13/18
 * Time: 1:06 AM
 */

include ("connection.php");

if(!empty($_GET['id'])) {

    $sql = "SELECT event_name, organization, event_date, event_time, location, event_info FROM events WHERE event_id='{$_GET['id']}'";

    $result = mysqli_query($bd, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['event_name'];
            $organization = $row['organization'];
            $event_date = $row['event_date'];
            $event_time = $row['event_time'];
            $location = $row['location'];
            $event_info = $row['event_info'];
        };
    };
}

?>

<?php include ("header.php");  ?>

<html lang="en">


<br>
<div class="row">
    <div class="profile-left white">
        <img class="rounded-circle profile-picture" src="getimage.php?id=<?php echo $_GET['id']; ?>" onerror="this.src='/images/default2.png'" alt="Tavish Profile Image" width="140" height="140">
        <h2><?php echo $name; ?></h2>
        <h2><?php echo $organization; ?></h2>
        <p><?php echo $event_date; ?></p>
        <p><?php echo $event_time; ?></p>
    </div>

    <div class="profile-right">
        <p><?php echo $event_info; ?></p>

    </div>
</div>
</div>


</body>
</html>
