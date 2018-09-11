<?php
$orders = "";

function check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function login_attempt($email, $password){
  require('db/connect.php');
  $sql = "SELECT * FROM avant_users WHERE user_email='$email' AND user_pass='$password'";
  $query = mysqli_query($conn, $sql);
  $rows = mysqli_num_rows($query);
  $row = mysqli_fetch_assoc($query);
  if ($rows == 1) {
      session_start();
      $_SESSION['login_user']=$row["user_email"];
      $_SESSION['f_name']=$row["f_name"];
      $_SESSION['l_name']=$row["l_name"];
      return true;
  } else{
    return false;
  }
}

function is_logged_in(){
    if(isset($_SESSION['login_user'])){
	    return true;
    }
}

function get_orders($user){
  global $date, $title, $count, $status;
  require('db/connect.php');
  $sql = "SELECT * FROM requests WHERE user_email='$user'";
  $query = mysqli_query($conn, $sql);
  $rows = mysqli_num_rows($query);
  //$orders = mysqli_fetch_assoc($query);
  if ($rows == 0) {
    return false;
  } else {
    $data = array();
    while ($row = mysqli_fetch_assoc($query)) {
    // Generate the output in desired format
      $data[] = $row; 
    }
    $json_data = json_encode($data);
    file_put_contents(DIR_ACCOUNT.'orders.json', $json_data);
    $date = $row['date'];
    $title = $row['title'];
    $count = $row['word_count'];
    $status = $row['status'];
    return true;
  }
}

function is_page($a){
	global $page;
	if ($page == $a){
		return true;
	}
}