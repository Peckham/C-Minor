<?php

if (isset($_POST['submit'])) {
    require "../config.php";
    require "../common.php";
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        // insert new user code will go here

        $new_user = array(
            "firstname" => $_POST['firstname'],
            "lastname"  => $_POST['lastname'],
            "email"     => $_POST['email'],
            "age"       => $_POST['age'],
            "location"  => $_POST['location']
        );

        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "users",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
        );

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

}

?>


<?php include "header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
    <blockquote><?php echo $_POST['firstname']; ?> successfully added.</blockquote>
<?php } ?>


<style>

    input, label {
        display:block;
    }

    form {
        position: relative;
        top: 50px;
    }

    .a {
        float: left;
        margin-right: 60px;
    }

    .b {
        position: relative;
        top: 100px;
    }
</style>

<form method="post">
    <section>
    <div class = 'a'>
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname">
    </div>

    <div class = 'a'>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname">
    </div>

    <div class = 'a'>
        <label for="email">Email Address</label>
        <input type="text" name="email" id="email">
    </div>
    <div class = 'a'>
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
    </div>
    <div class = 'a'>
        <label for="location">Location</label>
        <input type="text" name="location" id="location">
    </div>
    </section>
    <section>
    <input type="submit" name="submit" value="Submit">
    </section>
</form>

<button class = 'b' href="index.php">Back to home</button>


<?php include "footer.php"; ?>

