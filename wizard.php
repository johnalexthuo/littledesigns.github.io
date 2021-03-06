<?php
$page_title="Home - AvantContent";
$page_description="Get original unique custom content fast from experienced writers";
$page="home";
include('header.php');
require(DIR_SYSTEM.'checkout/login.php');
?>  
<div style="padding-top: 100px;"></div>
<div class="container">
    <div class="row">
		<div class="col-sm-8 col-sm-offset-2">
		<!--      Wizard container        -->
		    <div class="wizard-container">
		        <div class="card wizard-card" data-color="red" id="wizard">
		            <form action="" method="" novalidate="novalidate">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->
                        <div class="wizard-header">
		                    <h3 class="wizard-title">
		                    	Book a Room
		                    </h3>
						    <h5>This information will let us know more about you.</h5>
		                </div>
						<div class="wizard-navigation">
							<ul class="nav nav-pills">
			                    <li style="width: 33.3333%;" class=""><a href="#details" data-toggle="tab" aria-expanded="false">Account</a></li>
			                    <li style="width: 33.3333%;" class=""><a href="#captain" data-toggle="tab" aria-expanded="false">Room Type</a></li>
			                    <li style="width: 33.3333%;" class="active"><a href="#description" data-toggle="tab" aria-expanded="true">Extra Details</a></li>
			                </ul>
							<div class="moving-tab">
                            </div> 
                        </div>
		                <div class="tab-content">
		                    <div class="tab-pane" id="details">
		                    	<div class="row">
			                    	<div class="col-sm-12">
			                        	<h4 class="info-text"> Let's start with the basic details.</h4>
			                    	</div>
		                            <div class="col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">email</i>
											</span>
											<div class="form-group label-floating is-empty">
			                                    <label class="control-label">Your Email</label>
			                                    <input name="name" type="text" class="form-control">
			                                    <span class="material-input"></span>
                                            </div>
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">lock_outline</i>
											</span>
											<div class="form-group label-floating is-empty">
			                                  	<label class="control-label">Your Password</label>
			                                  	<input name="name2" type="password" class="form-control">
			                                    <span class="material-input"></span>
                                            </div>
										</div>
		                            </div>
		                            <div class="col-sm-6">
		                            	<div class="form-group label-floating is-empty">
		                                	<label class="control-label">Country</label>
	                                		<select class="form-control">
									    		<option disabled="" selected=""></option>
	                                        	<option value="Afghanistan"> Afghanistan </option>
	                                        	<option value="Albania"> Albania </option>
	                                        	<option value="Algeria"> Algeria </option>
	                                        	<option value="American Samoa"> American Samoa </option>
	                                        	<option value="Andorra"> Andorra </option>
	                                        	<option value="Angola"> Angola </option>
	                                        	<option value="Anguilla"> Anguilla </option>
	                                        	<option value="Antarctica"> Antarctica </option>
	                                        	<option value="...">...</option>
		                                	</select>
		                            	    <span class="material-input"></span>
                                        </div>
										<div class="form-group label-floating is-empty">
		                                	<label class="control-label">Daily Budget</label>
	                                		<select class="form-control">
												<option disabled="" selected=""></option>
	                                        	<option value="Afghanistan"> &lt; $100 </option>
	                                        	<option value="Albania"> $100 - $499 </option>
	                                        	<option value="Algeria"> $499 - $999 </option>
	                                        	<option value="American Samoa"> $999+ </option>
		                                	</select>
		                            	    <span class="material-input"></span>
                                        </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="tab-pane" id="captain">
		                        <h4 class="info-text">What type of room would you want? </h4>
		                        <div class="row">
		                            <div class="col-sm-10 col-sm-offset-1">
		                                <div class="col-sm-4">
		                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="" data-original-title="This is good if you travel alone.">
		                                        <input type="radio" name="job" value="Design">
		                                        <div class="icon">
		                                            <i class="material-icons">weekend</i>
		                                        </div>
		                                        <h6>Single</h6>
		                                    </div>
		                                </div>
		                                <div class="col-sm-4">
		                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="" data-original-title="Select this room if you're traveling with your family.">
		                                        <input type="radio" name="job" value="Code">
		                                        <div class="icon">
		                                            <i class="material-icons">home</i>
		                                        </div>
		                                        <h6>Family</h6>
		                                    </div>
		                                </div>
										<div class="col-sm-4">
		                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="" data-original-title="Select this option if you are coming with your team.">
		                                        <input type="radio" name="job" value="Code">
		                                        <div class="icon">
		                                            <i class="material-icons">business</i>
		                                        </div>
		                                        <h6>Business</h6>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="tab-pane active" id="description">
		                        <div class="row">
		                            <h4 class="info-text"> Drop us a small description.</h4>
		                            <div class="col-sm-6 col-sm-offset-1">
	                            		<div class="form-group is-empty">
		                                    <label>Room description</label>
		                                    <textarea class="form-control" placeholder="" rows="6"></textarea>
		                                    <span class="material-input"></span></div>
		                                </div>
		                                <div class="col-sm-4">
		                                    <div class="form-group">
		                                        <label class="control-label">Example</label>
		                                        <p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
	                        <div class="wizard-footer">
	                        	<div class="pull-right">
	                                <input type="button" class="btn btn-next btn-fill btn-danger btn-wd disabled" name="next" value="Next" style="display: none;">
	                                <input type="button" class="btn btn-finish btn-fill btn-danger btn-wd" name="finish" value="Finish" style="display: inline-block;">
	                            </div>
	                            <div class="pull-left">
	                                <input type="button" class="btn btn-previous btn-fill btn-default btn-wd" name="previous" value="Previous">
						    		<div class="footer-checkbox" style="opacity: 0; visibility: hidden; position: absolute;">
						    			<div class="col-sm-12">
						    			    <div class="checkbox">
						    				    <label> 
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                    <span class="checkbox-material">
                                                        <span class="check"></span>
                                                    </span>
												</label>
												Subscribe to our newsletter
											</div>
										</div>
									</div>
	                            </div>
	                            <div class="clearfix"></div>
	                        </div>
		                </form>
		            </div>
		        </div> <!-- wizard container -->
		    </div>
	    </div> <!-- row -->
    </div>

<?php include ('footer.php'); ?>