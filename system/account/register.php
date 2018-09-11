<?php
require(DIR_DATABASE.'connect.php');
$fname = $lname = $email = $password = $pass_conf = $country = "";
$nameErr = $emailErr = $passErr = $confErr = "";

//errors
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
        $nameErr = "Full name is required";
    } else {
        $fname = check_input($_POST["fname"]);
    }

    if (empty($_POST["lname"])) {
        $nameErr = "Full name is required";
    } else {
        $lname = check_input($_POST["lname"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $email = check_input($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $emailErr= "";
        } else {
            $emailErr= $email." is not a valid email address";
        }
    }

    if (empty($_POST["password"])) {
        $passErr = "Password is required";
    } else{
        $password = check_input($_POST["password"]);
    }

    if (empty($_POST["pass_conf"])) {
        $confErr = "Please re-enter your password";
    } else{
        $pass_conf = check_input($_POST["pass_conf"]);
    }

    if (empty($_POST["country"])) {
        $country = "";
    } else {
        $country = check_input($_POST["country"]);
    }

    if($pass_conf == $password){
        return true;
    } else{
        $confErr = "Passwords do not match";
    }
}
?>