<?php

?>

<?php

/**
 * Use an HTML form to edit an entry in the
 * users table.
 *
 */

//require "config.php";
//require "common.php";






//if (isset($_POST['submit'])) {
//    try {
//        $connection = new PDO('mysql:host=localhost;dbname=Database', root, root);
//        $profiles =[
//            "id"        => $_POST['id'],
//            "fname"     => $_POST['fname'],
//            "lname"     => $_POST['lname'],
//            "email"     => $_POST['email'],
//            "website"   => $_POST['website'],
//            "bio"       => $_POST['bio'],
//            "major"     => $_POST['major'],
//            "interests" => $_POST['interests'],
//        ];
//
//        $sql = "UPDATE profiles
//            SET id = :id,
//              fname = :fname,
//              lname = :lname,
//              email = :email,
//              website = :website,
//              bio = :bio,
//              major = :major,
//              interests = :interests,
//            WHERE id = :id";
//
//        $statement = $connection->prepare($sql);
//        $statement->execute($profiles);
//    } catch(PDOException $error) {
//        echo $sql . "<br>" . $error->getMessage();
//    }
//}
//
//if (isset($_GET['id'])) {
//    try {
//        $connection = new PDO('mysql:host=localhost;dbname=Database', root, root);
//        $id = $_GET['id'];
//        $sql = "SELECT * FROM profiles WHERE id = :id";
//        $statement = $connection->prepare($sql);
//        $statement->bindValue(':id', $id);
//        $statement->execute();
//
//        $user = $statement->fetch(PDO::FETCH_ASSOC);
//    } catch(PDOException $error) {
//        echo $sql . "<br>" . $error->getMessage();
//    }
//} else {
//    echo "Something went wrong!";
//    exit;
//}


?>

<!---->
<?php //if (isset($_POST['submit']) && $statement) : ?>
<!--    <blockquote>--><?php //echo escape($_POST['fname']); ?><!-- successfully updated.</blockquote>-->
<?php //endif; ?>

<!--<div align="center">-->
<!--    --><?php
//        if (isset($_GET['remarks']) && $_GET['remarks']=='imagesuccess')
//        {
//            echo 'Image Upload Success';
//        }
//    ?>
<!--</div>-->

<?php include "header.php"; ?>
<br>
    <h1 class="center-text white">Edit Profile</h1>

    <div class="container edit-profile-container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="center register-btn white center-text">Update Image</h2>
        <form action="edit_upload.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
        <div class="white">
          <input type="file" name="myfile" />
        </div>
        </form>
        <h2 class="center register-btn white center-text">Edit Information</h2>
        <form method = "post" action = "edit_info.php?id=<?php echo $_GET['id']; ?>" method="post">
            <div class="form-group">
               <label class="sr-only" for="fnameInput">First Name</label>
               <input name="fname" type="text" class="form-control" id="fnameInput" placeholder="First Name" required>
                <input class="btn btn-secondary btn-block" name = "update" type = "submit" id = "update" value = "Update">
            </div>
        </form>
        <form method = "post" action = "edit_info.php?id=<?php echo $_GET['id']; ?>" method="post">
            <div class="form-group">
               <label class="sr-only" for="emailInput">Email</label>
               <input name="email" type="text" class="form-control" id="emailInput" placeholder="Email" required>
                <input class="btn btn-secondary btn-block" name = "update" type = "submit" id = "update" value = "Update">
            </div>
        </form>
        <form method = "post" action = "edit_info.php?id=<?php echo $_GET['id']; ?>" method="post">
            <div class="form-group">
               <label class="sr-only" for="websiteInput">Website</label>
               <input name="website" type="text" class="form-control" id="websiteInput" placeholder="Website" required>
                <input class="btn btn-secondary btn-block" name = "update" type = "submit" id = "update" value = "Update">
            </div>
        </form>
        <form method = "post" action = "edit_info.php?id=<?php echo $_GET['id']; ?>" method="post">
            <div class="form-group">
                <label class="sr-only" for="bioInput">Biography</label>
                <input name="bio" type="text" class="form-control" id="bioInput" placeholder="Biography" required>
                <input class="btn btn-secondary btn-block" name = "update" type = "submit" id = "update" value = "Update">
            </div>
        </form>
        <form method = "post" action = "edit_info.php?id=<?php echo $_GET['id']; ?>" method="post">
            <div class="form-group">
                <label class="sr-only" for="major">Major</label>
                <input name="major" type="text" class="form-control" id="majorInput" placeholder="Major" required>
                <input class="btn btn-secondary btn-block" name = "update" type = "submit" id = "update" value = "Update">
            </div>
        </form>
        <form method = "post" action = "edit_info.php?id=<?php echo $_GET['id']; ?>" method="post">
            <div class="form-group">
                <label class="sr-only" for="interests">Interests</label>
                <input name="interests" type="text" class="form-control" id="interestsInput" placeholder="Interests" required>
                <input class="btn btn-secondary btn-block" name = "update" type = "submit" id = "update" value = "Update">
            </div>
        </form>
    </div>
</div>
<br><br><br>

<!---->
<!--         <tr>-->
<!--            <td width = "100">Last Name</td>-->
<!--            <td><input name = "lname" type = "text"-->
<!--               id = "lname"></td>-->
<!--         </tr>-->
<!---->
<!--         <tr>-->
<!--            <td width = "100">Email</td>-->
<!--            <td><input name = "email" type = "text"-->
<!--                id = "address"></td>-->
<!--         </tr>-->
<!---->
<!--         <tr>-->
<!--            <td width = "100">Website</td>-->
<!--            <td><input name = "contact" type = "text"-->
<!--                id = "contact"></td>-->
<!--         </tr>-->
<!---->
<!--         <tr>-->
<!--            <td width = "100">Biography</td>-->
<!--            <td><textarea rows = "6" cols = "50" name = "bio" type = "text"-->
<!--                id = "bio"></textarea></td>-->
<!--         </tr>-->
<!---->
<!--         <tr>-->
<!--            <td width = "100">Major</td>-->
<!--            <td><input name = "major" type = "text"-->
<!--                id = "major"></td>-->
<!--         </tr>-->
<!---->
<!--         <tr>-->
<!--            <td width = "100">Interests</td>-->
<!--            <td><textarea rows = "4" cols = "50" name = "interests" type = "text"-->
<!--                id = "interests"></textarea></td>-->
<!--         </tr>-->
<!---->
<!--         <tr>-->
<!--            <td width = "100"></td>-->
<!--            <td>-->
<!--               <input name = "update" type = "submit"-->
<!--                  id = "update" value = "Update">-->
<!--            </td>-->
<!--         </tr>-->


<!--<form method="post">-->
<!--    --><?php //foreach ($user as $key => $value) : ?>
<!--        <label for="--><?php //echo $key; ?><!--">--><?php //echo ucfirst($key); ?><!--</label>-->
<!--        <input type="text" name="--><?php //echo $key; ?><!--" id="--><?php //echo $key; ?><!--" value="--><?php //echo escape($value); ?><!--" --><?php //echo ($key === 'id' ? 'readonly' : null); ?><!---->
<!--    --><?php //endforeach; ?>
<!--    <input type="submit" name="submit" value="Submit">-->
<!--</form>-->

    <button  class="btn btn-secondary btn-block"><a class="white" href="profile.php">Back to Profile</a></button>



</body>