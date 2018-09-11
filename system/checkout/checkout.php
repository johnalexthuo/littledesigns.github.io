<?php
$page_title="Checkout | Avant Content";
$page_description="Get original unique custom content fast from experienced writers";
include ('header.php');
ini_set("display_errors", 1);
require(DIR_DATABASE.'connect.php');
$type = $words = $dead = $keys = $desc = $price = "";

//errors
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (is_int($_POST["content"])){
        $type = check_input($_POST["content"]);
    }

    if (is_int($_POST["words"])){
        $words = check_input($_POST["words"]);
    }

    if (is_int($_POST["deadline"])){
        $dead = check_input($_POST["deadline"]);
    }

    if (!empty($_POST["keyword"])) {
        $keys = check_input($_POST["keyword"]);
    }

    if (!empty($_POST["description"])) {
        $desc = check_input($_POST["description"]);
    }
    
    $mail=$_SESSION["login_user"];

}

if(isset ($_POST['submit'])){
    if(!empty($type) && !empty($word) && !empty($dead) && !empty($keys)){
    	$sql = "INSERT INTO requests(content_type, word_count, deadline, keywords, description, user_email, order_time) VALUES('$type','$words','$dead','$keys','$desc','$mail', NOW())";
        if(mysqli_query($conn, $sql)){
    		$message = "Order received. Check back in the specified time";
    	} else {
        	$message = "Error sending the request".mysqli_error($conn);
    	}
    }  
}
?>

<div class="page-header">
    <div class="content">
        <div class="container">
            <div class="text-center">
                <h1> Checkout </h1>
                <p> Complete your order </p>
            </div>
        </div>
    </div>
</div>

<div class="main" style="padding: 80px 0; background: lightgrey">
    <div class="container">
        <form class="form" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); 
            ?>" method="post">
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label> Content type:</label>
                        <select type="select" name="content" class="form-control">
					    	<option value="1">Blog Post</option>
					    	<option value="2">Article</option>
                            <option value="3">Description</option>
                            <option value="4">Rewrite</option>
                            <option value="5">Social Post</option>
                            <option value="6">Ebook</option>
					    </select>
                    </div>
                    <div class="form-group">
                        <label> No. of words: </label>
                        <select type="select" name="words" class="form-control">
					    	<option value="1">150</option>
					    	<option value="2">300</option>
                            <option value="3">400</option>
                            <option value="4">500</option>
                            <option value="5">700</option>
                            <option value="6">1000</option>
                            <option value="7">1250</option>
                            <option value="8">1500</option>
                            <option value="9">1750</option>
                            <option value="10">2000</option>
					    </select>
                    </div>
                    <div class="form-group">
                        <label> Deadline: </label><br>
                        <div class="radio">
					    	<label>
					    		<input type="radio" name="deadline" value="3"><span class="circle" checked></span><span class="check"></span>
					    		In 3 days
					    	</label>
					    </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                              <input type="radio" aria-label="Radio button for following text input" name="deadline" value="3">
                            </span>
                            <input class="form-control" value="In 3 days" disabled>
                        </div>
                        <div class="form-group">
					    	<label>
					    		<input type="radio" name="deadline" value="5"><span class="circle"></span><span class="check"></span>
					    		In 5 days
					    	</label>
					    </div>
                    </div>
                    <div class="form-group">
                        <label> Upload instrucrions </label>
                        <button class="btn btn-primary btn-file">
                            <input type="file" name="file"> Choose File...
                        </button>
                    </div>
                    <div class="form-group">
                        <input type="text" name="keyword" class="form-control"  placeholder="Keywords (comma-separated)" >
					</div>
                    <div class="form-group">
                        <label> Description </label><br>
                        <textarea class="form-control" rows="6" name="description" type="text" placeholder="Request description"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="card">
	                    <div class="content">
                            <div class="text-center">
                                <span class="fa fa-file-text-o fa-3x service-icons" aria-hidden="true"></span>
                                <br>
                                <h4 class="card-title"> Total Price </h4>
                            </div>
                            <p class="card-description">
                                <b id="price"> $ Price <i name="price"></i></p>
                            </p>
	                        <div class="footer">
                                <button class="btn btn-primary" name="submit" type="submit" value="submit"> Check out </button>
	                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
    </div>
</div>
<form role="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 1</h3>
                <div class="form-group">
                    <label class="control-label">First Name</label>
                    <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Last Name</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                </div>
                <button class="btn btn-primary nextBtn btn-md pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 2</h3>
                <div class="form-group">
                    <label class="control-label">Company Name</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
                </div>
                <div class="form-group">
                    <label class="control-label">Company Address</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 3</h3>
                <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
            </div>
        </div>
    </div>
</form>
</div>
<?php include ('footer.php'); ?>