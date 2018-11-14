<?php
//Start session
session_start();

//Unset the variables stored in session
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_FIRST_NAME']);
unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<style>
    .a {
        position: relative;
        left: 50%;
    }
</style>
<body>
<?php include "header.php"; ?>

<div class="page-header header logInHeader">
  <h1>Log In</h1>
</div>

<div class="center inline bodyText">
    <form name="loginform" action="login_exec.php" method="post">
        <table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
            <tr>
                <td colspan="2">
                    <!--the code bellow is used to display the message of the input validation-->
                    <?php
                    if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
                        echo '<ul class="err">';
                        foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                            echo '<li>',$msg,'</li>';
                        }
                        echo '</ul>';
                        unset($_SESSION['ERRMSG_ARR']);
                    }
                    echo '</ul>';
                    unset($_SESSION['ERRMSG_ARR']);
                }
                ?>
            </td>
        </tr>
        <br>
        <br>
        <p class = 'a'>Log In</p>

        <br>
        <br>
        <tr>
            <td width="116"><div align="right" class="white">Username</div></td>
            <td width="177"><input name="username" type="text" /></td>
        </tr>
        <tr>
            <td><div align="right" class="white">Password</div></td>
            <td><input name="password" type="text" /></td>
        </tr>
        <tr>
            <td><div align="right"></div></td>
            <td><input name="" type="submit" value="Log In" class="btn btn-secondary btn-sm"/></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>
