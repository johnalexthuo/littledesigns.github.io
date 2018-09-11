<?php
$page_title="Sign Up - Avant Content";
$page_description="Create an account and get started on Avant Content";
$page="signup";
include ('header.php');
error_reporting(E_ALL);
ini_set("display_errors", 1);
require(DIR_ACCOUNT.'register.php');
if (is_logged_in()){
	header("Location: user.php");
}
if(isset ($_POST['submit'])){
    if(empty($nameErr) && empty($emailErr) && empty($passErr) && empty($confErr)){
        if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
			$sql = "INSERT INTO avant_users(f_name, l_name, user_email, user_pass, country) VALUES('$fname','$lname','$email','$password','$country')";
            if(mysqli_query($conn, $sql)){
				if (login_attempt($email, $password)){
            		header("location: user.php");
            		mysqli_close($conn);
        		} else {
            		$error = "Username or Password is invalid";
        		}
            } else{
                echo "Error: " . "<br>" .mysqli_error($conn);
            }
        }
    }  
}
?>

<div id="head">
	<div class="header header-primary text-center col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2">
   	 	<br>
   	 	<h1> Create account </h1>
		<hr class="bold">
		<div class="social-line">
			<a href="#pablo" class="btn btn-simple btn-just-icon">
				<i class="fa fa-facebook-square"></i>
			</a>
			<a href="#pablo" class="btn btn-simple btn-just-icon">
				<i class="fa fa-twitter"></i>
			</a>
			<a href="#pablo" class="btn btn-simple btn-just-icon">
				<i class="fa fa-google-plus"></i>
			</a>
		</div>
	</div>
<div class="container center card-signup">
	<form class="form" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); 
            ?>" method="POST">
		<div class="row">
			<div class="form-content col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group"><input type="text" name="fname" class="form-control"value="<?php echo $fname; ?>" placeholder="First Name..." required>
							<span class="material-input error"></span>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group"><input type="text" name="lname" class="form-control"value="<?php echo $lname; ?>" placeholder="Last Name..." required>
							<span class="material-input error"><?php echo $nameErr; ?></span>
						</div>
					</div>
				</div>
				<div class="form-group"><input type="email" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Email..." min-length="6" required>
					<span class="material-input error"><?php echo $emailErr; ?></span>
				</div>

				<div class="form-group"><input type="password" name="password" placeholder="Password..." class="form-control" min-length="6" required>
					<span class="material-input error"><?php echo $passErr; ?></span>
				</div>

				<div class="form-group"><input type="password" name="pass_conf" placeholder="Confirm Password..." class="form-control" required>
					<span class="material-input error"><?php echo $confErr; ?></span>
				</div>

				<div class="form-group"><input type="text" name="country" class="form-control" value="<?php echo $country; ?>" placeholder="Country...">
					<span class="material-input error"></span>
				</div>
			
				<div class="footer text-center">
					<a>
                        <button id="btn" type="submit" name="submit"> Submit </button>
                    </a>
				</div>
				<br>
				<div>
					<p> Already have an account?<a href="signin.php"> Log In </a></p>
				</div>
			</div>
		</div>
	</form>
</div>
</div>
<?php
include ('footer.php');
?>
