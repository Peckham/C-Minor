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

    $sql = "SELECT fname, lname, email FROM members WHERE typeof = 'Mentor'";

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
    <h1>Mentor Catalogue</h1>
</div>

<div class="bodyText">
    <table>
        <thead class="tableHeader">
        <tr>
            <!-- <th>#</th> -->
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row) : ?>
            <tr>
                <!-- <td><?php echo escape($row["id"]); ?></td> -->
                <td><?php echo escape($row["fname"]); ?></td>
                <td><?php echo escape($row["lname"]); ?></td>
                <td><?php echo escape($row["email"]); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
