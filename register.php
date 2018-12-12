<!DOCTYPE html>
<html lang="en">
<style>
    .bu{
        position: relative;
        left: 30px;
    }
</style>
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<script type="text/javascript">
    function validateForm() {
        var a = document.forms["reg"]["username"].value;
        var b = document.forms["reg"]["password"].value;
        var c = document.forms["reg"]["fname"].value;
        var d = document.forms["reg"]["lname"].value;
        var e = document.forms["reg"]["email"].value;
        var f = document.forms["reg"]["typeof"].value;
        var g = document.forms['reg']['password2'].value;
        if (b !== g) {
            alert("Passwords do not match");
            return false;
        }

        if ((a == null || a == "") && (b == null || b == "") && (c == null || c == "") && (d == null || d == "") && (e == null || e == "") && (f == null || f == "")) {
            alert("All fields must be filled out");
            return false;
        }
        if (a == null || a == "") {
            alert("Username must be filled out");
            return false;
        }
        if (b == null || b == "") {
            alert("Password must be filled out");
            return false;
        }
        if (c == null || c == "") {
            alert("First name must be filled out");
            return false;
        }
        if (d == null || d == "") {
            alert("Last name must be filled out");
            return false;
        }
        if (e == null || e == "") {
            alert("Email must be filled out");
            return false;
        }
        if (!e.includes("@")) {
            alert("Email must be a valid email");
            return false;
        }
        if (f == null || f == "") {
            alert("Mentorship status must be filled out");
            return false;
        }



    }
</script>

<body>
<?php include "header.php"; ?>
<?php
if (isset($_GET['remarks']) && $_GET['remarks']=='usertaken')
{
    echo "<script>alert('USERNAME IS TAKEN')</script>";
    echo "<script>window.location.href = \"register.php\";
</script>";
};

if ($_GET['remarks']=='emailtaken')
{
    echo "<script>alert('EMAIL IS TAKEN')</script>";
    echo "<script>window.location.href = \"register.php\";
</script>";
};
?>
<div class="container register-container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="center register-btn white center-text">Register</h1>
        <form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post", enctype="multipart/form-data">
            <div class="form-group">
               <label class="sr-only" for="usernameInput">Username</label>
               <input name="username" type="text" class="form-control" id="usernameInput" placeholder="Username" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="passwordInput">Password</label>
               <input name="password" type="password" class="form-control" id="passwordInput" placeholder="Password" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="password2Input">Confirm Password</label>
               <input name="password2" type="password" class="form-control" id="password2Input" placeholder="Confirm Password" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="fnameInput">First Name</label>
               <input name="fname" type="text" class="form-control" id="fnameInput" placeholder="First Name" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="lnameInput">Last Name</label>
               <input name="lname" type="text" class="form-control" id="lnameInput" placeholder="Last Name" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="emailInput">Email</label>
               <input name="email" type="text" class="form-control" id="emailInput" placeholder="Email" required>
            </div>
            <div class="white">
              <input type="file" name="myfile" />
            </div><br>
            <div align="left" class="white">
                <input type="radio" name="typeof" value="Mentor">Mentor<br>
                <input type="radio" name="typeof" value="Mentee">Mentee<br>
            </div><br>
            <div class="form-group register-btn">
               <button type="submit" class="btn btn-secondary btn-block">Register</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
