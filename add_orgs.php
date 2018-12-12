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
    <title>Add An Event</title>
</head>
<script type="text/javascript">

    function validateForm()
    {
        var fields = ["organization", "location", "email", "website"];

        var i, l = fields.length;
        var fieldname;
        for (i = 0; i < l; i++) {
            fieldname = fields[i];
            if (document.forms["reg"][fieldname].value === "") {
                alert(fieldname + " can not be empty");
                return false;
            }
        }
        return true;
    }


</script>

<body>
<?php include "header.php"; ?>

<?php
if ($_GET['remarks']=='orgtaken')
{
    echo "<script>alert('ORGANIZATION ALREADY EXISTS')</script>";
    echo "<script>window.location.href = \"add_org.php\";
</script>";
};

?>

<div class="container register-container">
<h1 class="center register-btn white">Add Organization</h1>
    <div class="row">
      <div class="col-md-12">
        <form name="reg" action="org_exec.php" onsubmit="return validateForm()" method="post">
            <div class="form-group">
               <label class="sr-only" for="orgNameInput">Organization Name</label>
               <input name="organization_name" type="text" class="form-control" id="orgNameInput" placeholder="Organization Name" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="locationInput">Location</label>
               <input name="location" type="text" class="form-control" id="locationInput" placeholder="Location" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="emailInput">Email</label>
               <input name="email" type="text" class="form-control" id="emailInput" placeholder="Email" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="websiteInput">Website</label>
               <input name="website" type="text" class="form-control" id="websiteInput" placeholder="Website" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="infoInput">Info</label>
               <input name="info" type="text" class="form-control" id="infoInput" placeholder="Info" required>
            </div>
            <div class="white">
              <input type="file" name="myfile" />
            </div><br>
            <div class="form-group register-btn">
               <button type="submit" class="btn btn-success btn-block">Add Organization</button>
            </div>
        </form>
    </div>
</div>

<a class = 'bu' href="events.php"><button>Previous Page</button></a>
</body>
</html>