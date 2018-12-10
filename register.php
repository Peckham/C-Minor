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
    function validateForm()
    {
        var a=document.forms["reg"]["username"].value;
        var b=document.forms["reg"]["password"].value;
        var c=document.forms["reg"]["fname"].value;
        var d=document.forms["reg"]["lname"].value;
        var e=document.forms["reg"]["email"].value;
        var f=document.forms["reg"]["typeof"].value;
        var g=document.forms['reg']['password2'].value;
        if (b !== g){
            alert("Passwords do not match");
            return false;
        }
    }
    //     if ((a==null || a=="") && (b==null || b=="") && (c==null || c =="") && (d==null || d=="") && (e==null || e=="") && (f==null || f ==""))
    //     {
    //         alert("All fields must be filled out");
    //         return false;
    //     }
    //     if (a==null || a=="")
    //     {
    //         alert("Username must be filled out");
    //         return false;
    //     }
    //     if (b==null || b=="")
    //     {
    //         alert("Password must be filled out");
    //         return false;
    //     }
    //     if (c==null || c=="")
    //     {
    //         alert("First name must be filled out");
    //         return false;
    //     }
    //     if (d==null || d=="")
    //     {
    //         alert("Last name must be filled out");
    //         return false;
    //     }
    //     if (e==null || e=="")
    //     {
    //         alert("Email must be filled out");
    //         return false;
    //     }
    //     if (!e.includes("@"))
    //     {
    //         alert("Email must be a valid email");
    //         return false;
    //     }
    //     if (f==null || f=="")
    //     {
    //         alert("Mentorship status must be filled out");
    //         return false;
    //     }
    // }
</script>

<body>
<?php include "header.php"; ?>
<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post", enctype="multipart/form-data">
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
            <td><div align="right">Username:</div></td>
            <td><input type="text" name="username" /></td>
        </tr>
        <tr>
            <td><div align="right">Password:</div></td>
            <td><input type="password" name="password" /></td>
        </tr>
        <tr>
            <td><div align="right">Confirm Password:</div></td>
            <td><input type="password" name="password2" /></td>
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
            <td><div align="right">Email:</div></td>
            <td><input type="email" name="email" /></td>
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
            <td>
                <div align="left">

                    <input type="radio" name="typeof" value="Mentor">Mentor<br>
                    <input type="radio" name="typeof" value="Mentee">Mentee<br>
                </div>
            </td>
        </tr>
        <tr>
            <td><div align="right"></div></td>
            <td><input name="submit" type="submit" value="Submit" /></td>
        </tr>
    </table>
</form>

<a class = 'bu' href="login.php"><button>Login</button></a>
</body>
</html>
