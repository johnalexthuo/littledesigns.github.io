<?php
$error=""; // Variable To Store Error Message
$email = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            $error = "Email or Password is invalid";
        } else{
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $email = check_input($email);
        $password = check_input($_POST["password"]);
        if (login_attempt($email, $password)){
            header("location: ../../user.php");
            mysqli_close($conn);
        } else {
            $error = "Username or Password is invalid";
        }
        }   
    }
}
?>