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
        var fields = ["event_name", "organization", "event_date", "event_time", "location", "contact"]

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
if (isset($_GET['remarks']) && $_GET['remarks']=='org')
{
echo "<script>alert('ORGANIZATION DOES NOT EXIST')</script>";
echo "<script>window.location.href = \"add_event.php\";
</script>";
}
?>

<div class="container register-container">
<h1 class="center register-btn white">Add Event</h1>
    <div class="row">
      <div class="col-md-12">
        <form name="reg" action="event_exec.php" onsubmit="return validateForm()" method="post", enctype="multipart/form-data">
            <div class="form-group">
               <label class="sr-only" for="eventNameInput">Event Name</label>
               <input name="event_name" type="text" class="form-control" id="eventNameInput" placeholder="Event Name" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="organizationInput">Organization</label>
               <input name="organization" type="text" class="form-control" id="organizationInput" placeholder="Organization" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="dateInput">Date</label>
               <input name="event_date" type="date" class="form-control" id="dateInput" placeholder="Event Date" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="timeInput">Time</label>
               <input name="event_time" type="time" class="form-control" id="timeInput" placeholder="Event Time" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="locationInput">Location</label>
               <input name="location" type="text" class="form-control" id="locationInput" placeholder="Location" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="contactInput">Contact</label>
               <input name="contact" type="text" class="form-control" id="contactInput" placeholder="Contact" required>
            </div>
            <div class="form-group">
               <label class="sr-only" for="infoInput">Info</label>
               <input name="info" type="text" class="form-control" id="infoInput" placeholder="Info" required>
            </div>
            <div class="white">
              <input type="file" name="image" />
            </div><br>
            <div class="form-group register-btn">
               <button type="submit" class="btn btn-success btn-block">Add Event</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>