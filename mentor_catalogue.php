<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 10/29/18
 * Time: 5:28 PM
 */
session_start();

try {
    require "config.php";
    require "common.php";

    $connection = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT fname, lname, address, contact FROM member WHERE typeof = 'mentor'";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->fetchAll();

} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>

<?php require "header.php"; ?>

<style>
    table {
        width: 50%;
    }

    th {
        width: 50%;
        padding: 10px;
    }

    td {
        width: 50%;
        padding: 10px;
    }

    .b {
        position: relative;
        top: 40px;
    }
</style>

<h2>List Of Users</h2>

<table>
    <thead>
    <tr>
        <!-- <th>#</th> -->
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th>Contact</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $row) : ?>
        <tr>
            <!-- <td><?php echo escape($row["id"]); ?></td> -->
            <td><?php echo escape($row["fname"]); ?></td>
            <td><?php echo escape($row["lname"]); ?></td>
            <td><?php echo escape($row["address"]); ?></td>
            <td><?php echo escape($row["contact"]); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<button class="b" href="index.php">Back to home</button>
