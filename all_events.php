<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 10/29/18
 * Time: 5:28 PM
 */

try {
    require "config.php";
    require "common.php";
    require "connection.php";

    $sql = "SELECT * FROM events";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->fetchAll();

} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>

<?php include "header.php"; ?>

<style>

    #header2 {
        position: relative;
        left: 5%;
    }

    table {
        width: 80%;
        position: relative;
        left: 5%;
    }

    th {


    }

    td {

        padding: 10px;
    }

    .b {
        position: relative;
        top: 40px;
    }
</style>

<div class="page-header header">
    <h1>Events</h1>
</div>

<div class="bodyText">
    <table>
        <thead class="tableHeader">
        <tr>
            <!-- <th>#</th> -->
            <th>Name</th>
            <th>Organization</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row) : ?>
            <tr>
                <!-- <td><?php echo escape($row["id"]); ?></td> -->
                <td><a href="view_event.php?id=<?php echo escape($row['event_id']); ?>"><?php echo escape($row["event_name"]); ?></a></td>
                <td><?php echo escape($row["organization"]); ?></td>
                <td><?php echo escape($row["event_date"]); ?></td>
                <td><?php echo escape($row["event_time"]); ?></td>
                <td><?php echo escape($row["location"]); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<button><a href="events.php">Previous Page</a></button>