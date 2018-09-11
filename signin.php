<?php
$page_title="Log In - Avant Content";
$page_description="Log in to Avant Content";
$page="login";

//ini_set("display_errors", 1);
include('header.php');
require(DIR_ACCOUNT.'login.php');
if(is_logged_in()){
	header("location: user.php");
}
?>

<div class="form-main">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 ">
				<div class="form-content card">
					<div class="header header-primary text-center">
						<h1> Login </h1>
					</div>
					<form class="form" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<div class="error">
							<p><?php echo $error; ?></p>
						</div>
						<div class="form-group"><input type="email" name="email" class="form-control" value="<?php echo $email; 				?>" placeholder="Email..." required>
						</div>

						<div class="form-group"><input type="password" name="password" placeholder="Password..." 				class="form-control" required>
						</div>
						<div class="footer text-center">
							<a>
        				        <button id="btn" type="submit" name="submit"> Submit </button>
        				    </a>
						</div>
						<br>
						<div>
							<p> Don't have an account?<a href="signup.php"> Create One </a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>

