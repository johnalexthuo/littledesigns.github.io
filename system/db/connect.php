<?php
require(DIR_DATABASE.'config.php');
$conn=mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
} else {
    //echo "Success";
}
?>
