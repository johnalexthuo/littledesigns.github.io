<?php
$page_title="Home - Little";
$page_description="Get original unique custom content fast from experienced writers";
$page="home";
include('header.php');
require(DIR_SYSTEM.'checkout/login.php');
?>  

 <!--Landing-->
<section class="landing" id="top">
    <div class="landing-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h1 id="heading"> We build beautifully crafted digital experiences </h1>
                    <p class="heading-description"> Our websites, apps, installations, Logos, VR & AR experiences are all meticulously crafted in house by a tightly integrated team of designers and developers. We consistently produce award winning products.</p>
                    <br>
                    <!-- <a href="#features" class="page-scroll">
                        <button id="btn" class="inverse"> Learn More </button>
                    </a> -->
                    <button class="btn btn-primary inverse">
                        <a href="#features" class="page-scroll"> Learn More </a>
                    </button>
                    <button class="btn btn-primary">
                        <a href="#services" class="page-scroll "> Get Started  </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why us -->
<div id="features"></div>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="features-header">
                    <h2> Why work with us ? </h2>
                    <br>
                    <p class="text-left"> We help our clients stand out in any crowded market. We specialize in best-of-breed brand identity through digital experiences, strategic design and web development driven by exemplary client service. Our main aim is to help our clients increase sales and attract new customers.</p>
                    <br>
                </div>
            </div>
            <div class="col-md-7 text-left">
                <div class="row features-grid">
                    <div class="col-sm-6 features-container">
                        <i class="material-icons md-48 pull-left">swap_vert</i>
                        <div class="clearfix">
                            <h4>Fast project turn-around</h4>
                            <p> As soon as you make an order, our developers work around the clock to ensure that it is delivered in good time.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 features-container">
                        <i class="material-icons md-48 pull-left">attach_money</i>
                        <div class="clearfix">
                            <h4>Affordable Pricing</h4>
                            <p> Our rates will make your accountant smile! We guarantee volume deals and other special discounts. </p>
                        </div>
                    </div>
                    <div class="col-sm-6 features-container">
                        <i class="material-icons md-48 pull-left">card_travel</i>
                        <div class="clearfix">
                            <h4>Tailor made products</h4>
                            <p> Whether it’s a website or graphic design, we come up with custom unique and elegant solutions for our clients.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 features-container">
                        <i class="material-icons md-48 pull-left">done_all</i>
                        <div class="clearfix">
                            <h4>Originality</h4>
                            <p> The content we provide is of top notch quality, thanks to our team of creative developers and designers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<div id="services"></div>
<section class="services-main">
    <div class="container">
        <div class="services-header text-center">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2> Services </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container">
                            <div class="card">
                                <div class="front">
                                    <div class="icon">
                                        <i class="fa fa-file-text-o fa-3x service-icons" aria-hidden="true"></i>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <h3> Websites </h3>
                                            <p class="profession">Development & Design</p>
                                            <div class="description">
                                                <p class="text-center"> Impress your visitors with professional web content that earns their trust and helps them cross over to become royal customers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <button class="btn btn-simple" onclick="rotateCard(this)">
                                            <i class="fa fa-mail-forward"></i> More
                                        </button>
                                    </div>
                                </div> <!-- end front panel -->
                                <div class="back">
                                   <div class="header">
                                        <h4 class="motto">Take your Brand Online</h4>
                                    </div>
                                    
                                    <div class="content">
                                        <div class="main">
                                            <div class="prices">
                                                <p class="text-center"> FROM AS LOW AS
                                                <strong> $300 </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="footer">
                                        <button class="btn btn-primary inverse">
                                        <?php 
                                            if(is_logged_in()) 
                                                echo '<a href="system/checkout/checkout.php">';
                                            else 
                                                echo '<a data-toggle="modal" data-target=".bs-example-modal-sm">';
                                        ?>
                                            Get Started </a>
                                        </button>
                                        <br><br>
                                        <a rel="tooltip" title="" onclick="rotateCard(this)" data-original-title="Flip Card">
                                            <i class="fa fa-reply"></i> Back
                                        </a>
                                        
                                    </div>
                                </div> <!-- end back panel -->
                            </div> <!-- end card -->
                        </div> <!-- end card-container -->
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container">
                            <div class="card">
                                <div class="front">
                                    <div class="icon">
                                        <i class="fa fa-newspaper-o fa-3x service-icons"></i>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <h3> Graphics Design </h3>
                                            <p class="profession">Visualize Ideas</p>
                                            <div class="description">
                                                <p class="text-center">We are an industry leader in graphics design, printer and supplier of all in door and out door advertising & promotional materials.</p>
                                            </div>
                                            
                                        </div>
                                        <div class="footer">
                                            <button class="btn btn-simple" onclick="rotateCard(this)">
                                                <i class="fa fa-mail-forward"></i> More
                                            </button>
                                        </div>
                                    </div>
                                </div> <!-- end front panel -->
                                <div class="back">
                                    <div class="header">
                                        <h4 class="motto">Visualize Ideas</h4>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <div class="prices">
                                                <p class="text-center"> FROM AS LOW AS
                                                <strong> $40 </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <button class="btn btn-primary inverse">
                                           <a> Get Started </a>
                                        </button>
                                        <br><br>
                                        <a rel="tooltip" title="" onclick="rotateCard(this)" data-original-title="Flip Card">
                                            <i class="fa fa-reply"></i> Back
                                        </a>
                                    </div>
                                </div> <!-- end back panel -->
                            </div> <!-- end card -->
                        </div> <!-- end card-container -->
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container">
                            <div class="card">
                                <div class="front">
                                    <div class="icon">
                                       <i class="fa fa-files-o fa-3x service-icons" aria-hidden="true"></i>
                                        
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <h3> Web Redesign </h3>
                                            <p class="profession">presentable products</p>
                                            <div class="description">
                                                <p class="text-center">It's more than getting a new look. It's about having an all in one solution that gives your website visitors exactly what for when they need it.</p>
                                            </div>
                                            
                                        </div>
                                        <div class="footer">
                                            <button class="btn btn-simple" onclick="rotateCard(this)">
                                                <i class="fa fa-mail-forward"></i> More
                                            </button>
                                        </div>
                                    </div>
                                </div> <!-- end front panel -->
                                <div class="back">
                                    <div class="header">
                                        <h4 class="motto">Redesign Old Websites</h4>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <div class="prices">
                                                <p class="text-center"> FROM AS LOW AS 
                                                <strong> $200 </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <button class="btn btn-primary inverse">
                                           <a> Get Started </a>
                                        </button>
                                        <br><br>
                                        <a rel="tooltip" title="" onclick="rotateCard(this)" data-original-title="Flip Card">
                                            <i class="fa fa-reply"></i> Back
                                        </a>
                                    </div>
                                </div> <!-- end back panel -->
                            </div> <!-- end card -->
                        </div> <!-- end card-container -->
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container">
                            <div class="card">
                                <div class="front">
                                    <div class="icon">
                                        <i class="fa fa-keyboard-o fa-3x service-icons"></i>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <h3> Wordpress </h3>
                                            <p class="profession">Your Blog. Your Ideas</p>
                                            <div class="description">
                                                <p class="text-center">25% of the world's websites run on wordpress. With our help, yours can too. Our team will work beside you to create beautiful wordpress solutions</p>
                                            </div>
                                            
                                        </div>
                                        <div class="footer">
                                            <button class="btn btn-simple" onclick="rotateCard(this)">
                                                <i class="fa fa-mail-forward"></i> More
                                            </button>
                                        </div>
                                    </div>
                                </div> <!-- end front panel -->
                                <div class="back">
                                    <div class="header">
                                        <h4 class="motto">Wordpress</h4>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <div class="prices">
                                                <p class="text-center"> FROM AS LOW 
                                                <strong> $150 </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#services" class="page-scroll ">
                                            <button id="btn" class="btn btn-primary inverse">
                                                <a>Get Started</a>
                                            </button>
                                        </a><br><br>
                                        <a rel="tooltip" title="" onclick="rotateCard(this)" data-original-title="Flip Card">
                                            <i class="fa fa-reply"></i> Back
                                        </a>
                                    </div>
                                </div> <!-- end back panel -->
                            </div> <!-- end card -->
                        </div> <!-- end card-container -->
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container">
                            <div class="card">
                                <div class="front">
                                    <div class="icon">
                                        <i class="fa fa-facebook fa-3x service-icons"></i>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <h3> Internet Marketing </h3>
                                            <p class="profession">Online Influence</p>
                                            <div class="description">
                                                <p class="text-center">Our expert writers can grow your Social Media following, address the causes you stand for, and promote your product or service</p>
                                            </div>
                                           
                                        </div>
                                        <div class="footer">
                                            <button class="btn btn-simple" onclick="rotateCard(this)">
                                                <i class="fa fa-mail-forward"></i> More
                                            </button>
                                        </div>
                                    </div>
                                </div> <!-- end front panel -->
                                <div class="back">
                                    <div class="header">
                                        <h4 class="motto">Internet Marketing</h4>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <div class="prices">
                                                <p class="text-center"> FROM 
                                                <strong> $60 </strong><b>/</b> MONTH
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#services" class="page-scroll ">
                                            <button id="btn" class="btn btn-primary inverse">     <a>Get Started</a>
                                            </button>
                                        </a><br><br>
                                        <a rel="tooltip" title="" onclick="rotateCard(this)" data-original-title="Flip Card">
                                            <i class="fa fa-reply"></i> Back
                                        </a>
                                    </div>
                                </div> <!-- end back panel -->
                            </div> <!-- end card -->
                        </div> <!-- end card-container -->
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container">
                            <div class="card">
                                <div class="front">
                                    <div class="icon">
                                        <i class="fa fa-book fa-3x service-icons"></i>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <h3> Ebooks </h3>
                                            <p class="profession">best seller</p>
                                            <div class="description">
                                                <p class="text-center">EBooks ideally offer extensive content, and we will work with you every step of the way to ensure your vision is properly published online.</p>
                                            </div>
                                            
                                        </div>
                                        <div class="footer">
                                            <button class="btn btn-simple" onclick="rotateCard(this)">
                                                <i class="fa fa-mail-forward"></i> More
                                            </button>
                                        </div>
                                    </div>
                                </div> <!-- end front panel -->
                                <div class="back">
                                    <div class="header">
                                        <h4 class="motto">Ebook</h4>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <div class="prices">
                                                <p class="text-center"> FROM 
                                                <strong> $3 </strong><b>/ </b> PAGE
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#services" class="page-scroll ">
                                            <button id="btn" class="inverse"> Get Started </button>
                                        </a><br><br>
                                        <a rel="tooltip" title="" onclick="rotateCard(this)" data-original-title="Flip Card">
                                            <i class="fa fa-reply"></i> Back
                                        </a>
                                    </div>
                                </div> <!-- end back panel -->
                            </div> <!-- end card -->
                        </div> <!-- end card-container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 




 <!--hero-->
<div class="hero" id="contactus">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 content">
                <h2>Do you have an idea in mind?</h2><br> 
                <h3>Give us a call</h3>
                <h4>+254/&nbsp 704408028</h4>
	            
                <br>
                <button class="btn btn-primary">
	                <a href="#talk" class="page-scroll"> Leave Message </a>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- contact -->
<section id="talk">
    <div class="contact container">
        <div class="row">
            <div class="col-sm-5 contact-left no-padding">
                <div class="contact-header">
                    <h2> Talk to us </h2>
                    <p> LittleDesigns INC is more than just a design agency. When hired, our main aim is to take your business to the top where your customers are.</p>
                    <p> As such we guide our clients and offer internet marketing guidance specific to their industry, take steps towards increasing their traffic and sales with search engine optimization, social media marketing and mobile web design.</p>
                    <p> In short, we treat your brand as if it was our own. Pay as well though. Money is our motivation </p>
                </div>
            </div>
            <div class="col-sm-7 contact-right no-padding">
                <div class="contact-form">
                    <form class="card-description" name="sentMessage" id="contactForm" role="form" novalidate>
                        <div class="row">
                            <div class="col-sm-6">
				                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="We need your name.">
				                	<p class="help-block text-danger"></p>
				                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control" required data-validation-required-message="Please enter your email address." placeholder="Email...">
					                    <p class="help-block text-danger"></p>
				                </div>
                            </div>
                        </div>
				        <div class="form-group">
                            <textarea id="message" class="form-control" rows="5" required data-validation-required-message="Please enter a message." placeholder="Your message..."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div id="success"></div>
	                    <div class="footer text-center">
	                        <button class="btn btn-primary" type="submit">
                                Send Message 
                            </button>
	                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
	    <div class="modal-content">
		    <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal">
				    <span aria-hidden="true">×</span>
				    <span class="sr-only">Close</span>
				</button>
				<h2 class="text-center"> Log in </h2>
		        <hr class="bold">
			</div>
			<div class="modal-body">
			    <form class="form" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				    <div class="error">
				    	<p><?php echo $error; ?></p>
				    </div>
				    <div class="form-group"><input type="email" name="email" class="form-control"   value="<?php echo $email; ?>" placeholder="Email..." required>
				    	<span class="material-input"></span>
				    </div>
				    <div class="form-group"><input type="password" name="password"  placeholder="Password..." class="form-control" required>
				    	<span class="material-input"></span>
				    </div>
				    <div class="footer text-center">
                        <button class="btn btn-primary" type="submit" name="submit"> Submit </button>
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

<footer id="footer">
	<div class="container">
        <div class="row">
            <div class="col-sm-3 inc">
                <a class="footer-brand" href="index.php">
                    <strong id="logo">littledesigns Inc.</strong>
                </a>
            </div>
            <div class="col-sm-6 statement">
                <ul class="list-inline footer-links">
                    <li> Home </li>
                    <li> Why us </li>
                    <li> services </li>
                    <li> contact </li>
                    <li> About us </li>
                </ul>
            </div>
            <div class="col-sm-3 footer-social-icons">
                <ul class="list-inline footer-social">
                    <li class="in-touch">Stay in touch : </li>
					<li><a href="01-comming-soon.html#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="01-comming-soon.html#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="01-comming-soon.html#"><i class="fab fa-google-plus-g"></i></a></li>
					<li><a href="01-comming-soon.html#"><i class="fab fa-instagram"></i></a></li>
					<li><a href="01-comming-soon.html#"><i class="fab fa-pinterest-p"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row copyright">
            <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
                <p style="font-size: 1.2rem; padding-top: 5px;">
        	        &copy; <?php echo date("Y")?> &nbsp;|&nbsp; littledesigns  
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="assets/scripts/live.js"></script>

<script src="assets/scripts/jquery.js"></script>
<script src="assets/scripts/jquery.easing.min.js"></script>
<script src="assets/style/dist/bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="assets/scripts/scroll.js"></script>
<script src="contact/jqBootstrapValidation.js"></script>
<script src="contact/contact_me.js"></script>
<script>
    function display_element($element_id){
        var $element = document.getElementById($element_id);
        $element.style.display="block";
    }    
</script>
<script src="assets/scripts/custom.js"></script>
	
</body>
</html>
