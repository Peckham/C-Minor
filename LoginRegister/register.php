<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<script type="text/javascript">
    function validateForm()
    {
        var a=document.forms["reg"]["fname"].value;
        var b=document.forms["reg"]["lname"].value;

        var d=document.forms["reg"]["address"].value;
        var e=document.forms["reg"]["contact"].value;
        var f=document.forms["reg"]["username"].value;
        var g=document.forms["reg"]["password"].value;
        if ((a==null || a=="") && (b==null || b=="") && (d==null || d=="") && (e==null || e==""))
        {
            alert("All Field must be filled out");
            return false;
        }
        if (a==null || a=="")
        {
            alert("First name must be filled out");
            return false;
        }
        if (b==null || b=="")
        {
            alert("Last name must be filled out");
            return false;
        }

        if (d==null || d=="")
        {
            alert("address must be filled out");
            return false;
        }
        if (e==null || e=="")
        {
            alert("contact must be filled out");
            return false;
        }
        if (f==null || f=="")
        {
            alert("username must be filled out");
            return false;
        }
        if (g==null || g=="")
        {
            alert("password must be filled out");
            return false;
        }
    }
</script>

<body>

<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
    <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
        <tr>
            <td colspan="2">
                <div align="center">
                    <?php
                    // $remarks=$_GET['remarks'];
                    if (!isset($_GET['remarks']))
                    {
                        echo 'Register Here';
                    }
                    if (isset($_GET['remarks']) && $_GET['remarks']=='success')
                    {
                        echo 'Registration Success';
                    }
                    ?>
                </div></td>
        </tr>
        <tr>
            <td width="95"><div align="right">First Name:</div></td>
            <td width="171"><input type="text" name="fname" /></td>
        </tr>
        <tr>
            <td><div align="right">Last Name:</div></td>
            <td><input type="text" name="lname" /></td>
        </tr>

        <tr>
            <td><div align="right">Address:</div></td>
            <td><input type="text" name="address" /></td>
        </tr>
        <tr>
            <td><div align="right">Contact No.:</div></td>
            <td><input type="text" name="contact" /></td>
        </tr>
        <tr>
            <td><div align="right">Username:</div></td>
            <td><input type="text" name="username" /></td>
        </tr>
        <tr>
            <td><div align="right">Password:</div></td>
            <td><input type="text" name="password" /></td>
        </tr>
        <tr>
            <td><div align="right"></div></td>
            <td><input name="submit" type="submit" value="Submit" /></td>
        </tr>
    </table>
</form>

<a href="login.php">Login</a>
</body>
</html>
