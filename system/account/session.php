<?php
session_start();

// Storing Session
$user_check=$_SESSION['login_user'];
$firstname=$_SESSION['f_name'];
$lastname=$_SESSION['l_name'];
$fullname=$firstname." ".$lastname;
// SQL Query To Fetch Complete Information Of User
/*
$sqli = "SELECT * FROM avant_users WHERE user_email='$user_check'";
$result = mysqli_query($conn, $sqli);
$row = mysqli_fetch_assoc($result);
//$login_session =$row['user_email'];
$username=$row['f_name']." ".$row['l_name'];*/
if(!isset($user_check)){
    //mysqli_close($conn); // Closing Connection
    header('Location: index.php'); // Redirecting To Home Page
}
?>