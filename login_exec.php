<?php
//Start session
session_start();

//Include database connection details
require_once('connection.php');

//Array to store validation errors
$errmsg_arr = array();

//Validation error flag
$errflag = false;

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
    echo "str: ".$str;
    $str = @trim($str);
    if(get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return mysqli_real_escape_string($str);
}

//Sanitize the POST values
$username = $_POST['username'];
$password = $_POST['password'];

//Input Validations
if($username == '') {
    $errmsg_arr[] = 'Username missing';
    $errflag = true;
}
if($password == '') {
    $errmsg_arr[] = 'Password missing';
    $errflag = true;
}

//If there are input validations, redirect back to the login form
if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: login.php");
    exit();
}

//Create query
$salt = getenv('WEBSITE_SALT');

$qry="SELECT * FROM members WHERE username='$username'";
$result=mysqli_query($bd, $qry);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $hash = $row['password'];
    };
};

//Check whether the query was successful or not
if($result) {
    if(password_verify($password, $hash)){
        $qry="SELECT * FROM members WHERE username='$username'";
        $result=mysqli_query($bd, $qry);
        if(mysqli_num_rows($result) > 0) {
            //Login Successful
            session_regenerate_id();
            $member = mysqli_fetch_assoc($result);
            $_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
            $_SESSION['SESS_FIRST_NAME'] = $member['username'];
            $_SESSION['SESS_LAST_NAME'] = $member['password'];
            $_SESSION['fname'] = $member['fname'];
            $_SESSION['lname'] = $member['lname'];
            $_SESSION['email'] = $member['email'];
            $_SESSION['typeof'] = $member['typeof'];
            session_write_close();
            header("location: profile.php");
            exit();
    }
    }else {
        //Login failed
        $errmsg_arr[] = 'user name and password not found';
        $errflag = true;
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: login.php");
            exit();
        }
    }
}else {
    die("Query failed");
}
?>