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
<form name="reg" action="org_exec.php" onsubmit="return validateForm()" method="post">
    <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
        <tr>
            <td colspan="2">
                <div align="center">
                    <?php
                    // $remarks=$_GET['remarks'];
                    if (!isset($_GET['remarks']))
                    {
                        echo 'Add Your Organization Here';
                    }
                    if (isset($_GET['remarks']) && $_GET['remarks']=='success')
                    {
                        echo 'Organization Successfully Added';
                    }
                    ?>
                </div></td>
        </tr>
        <tr>
            <td><div align="right">Organization:</div></td>
            <td><input type="text" name="organization_name" required /></td>
        </tr>

        <tr>
            <td><div align="right">Location:</div></td>
            <td><input type="text" name="location" required /></td>
        </tr>
        <tr>
            <td><div align="right">E-mail:</div></td>
            <td><input type="email" name="email" required /></td>
        </tr>
        <tr>
            <td><div align="right">Website:</div></td>
            <td><input type="text" name="website" required /></td>
        </tr>
        <tr>
            <td><div align="right">Info:</div></td>
            <td><input type="text" name="info" required /></td>
        </tr>

        <tr>
            <td>
                Select image to upload:
            </td>
            <td>
                <input type="file" name="image"/>

            </td>
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