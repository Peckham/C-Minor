<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 12/11/18
 * Time: 6:53 AM
 */



// Usage 1:
$pass = 'rasmuslerdorf';
echo $pass."<br>";
$salt = getenv('WEBSITE_SALT');
echo $salt;
echo password_hash($pass, $salt)."<br>";
// $2y$10$xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
// For example:
// $2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a

// Usage 2:
$options = [
    'salt' => $salt
];
echo password_hash('rasmuslerdorf', PASSWORD_BCRYPT, $options)."\n";
// $2y$11$6DP.V0nO7YI3iSki4qog6OQI5eiO6Jnjsqg7vdnb.JgGIsxniOn4C