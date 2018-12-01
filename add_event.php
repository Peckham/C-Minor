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
        var a=document.forms["reg"]["event_name"].value;
        var b=document.forms["reg"]["organization"].value;
        var c=document.forms["reg"]["event_date"].value;
        var d=document.forms["reg"]["event_time"].value;
        var e=document.forms["reg"]["location"].value;
        var f=document.forms["reg"]["contact"].value;

        if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e==""))
        {
            alert("All Fields must be filled out");
            return false;
        }
        if (a==null || a=="")
        {
            alert("Event Name must be filled out");
            return false;
        }
        if (b==null || b=="")
        {
            alert("Organization Name must be filled out");
            return false;
        }
        if (c==null || c=="")
        {
            alert("Event Date must be filled out");
            return false;
        }
        if (d==null || d=="")
        {
            alert("Event Time must be filled out");
            return false;
        }
        if (e==null || e=="")
        {
            alert("Location must be filled out");
            return false;
        }
        if (f==null || f=="")
        {
            alert("Contact must be filled out");
            return false;
        }
    }
</script>

<body>
<?php include "header.php"; ?>
<form name="reg" action="event_exec.php" onsubmit="return validateForm()" method="post">
    <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
        <tr>
            <td colspan="2">
                <div align="center">
                    <?php
                    // $remarks=$_GET['remarks'];
                    if (!isset($_GET['remarks']))
                    {
                        echo 'Add Your Event Here';
                    }
                    if (isset($_GET['remarks']) && $_GET['remarks']=='success')
                    {
                        echo 'Event Successfully Added';
                    }
                    ?>
                </div></td>
        </tr>
        <tr>
            <td width="95"><div align="right">Event Name:</div></td>
            <td width="171"><input type="text" name="name" /></td>
        </tr>
        <tr>
            <td><div align="right">Organization:</div></td>
            <td><input type="text" name="organization" /></td>
        </tr>

        <tr>
            <td><div align="right">Date:</div></td>
            <td><input type="date" name="event_date" /></td>
        </tr>
        <tr>
            <td><div align="right">Time:</div></td>
            <td><input type="time" name="event_time" /></td>
        </tr>
        <tr>
            <td><div align="right">Location:</div></td>
            <td><input type="text" name="location" /></td>
        </tr>
        <tr>
            <td><div align="right">Contact:</div></td>
            <td><input type="text" name="contact" /></td>
        </tr>

        <tr>
            <td><div align="right"></div></td>
            <td><input name="submit" type="submit" value="Submit" /></td>
        </tr>
    </table>
</form>

<a class = 'bu' href="events.php"><button>Previous Page</button></a>
</body>
</html>