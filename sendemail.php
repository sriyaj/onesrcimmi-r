<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>HTML Template | Contact</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header / Header Style One-->
    <header class="main-header header-style-one">
    	
        <!--Header-Upper-->
        <div class="header-upper">
        	<div class="clearfix">
                	
                <div class="pull-left logo-outer">
                    <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                </div>
                
                <div class="pull-right upper-right clearfix">
                    
                    <div class="nav-outer clearfix">
                		<!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About us</a></li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li class="dropdown"><a href="immigrate.html">Immigrate</a>
                                                    <ul>
                                                        <li><a href="federal-skilled-worker-class.html">Federal Skilled Worker Class</a></li>
                                                        <li><a href="federal-skilled-trade-class.html">Federal Skilled Trade Class</a></li>
                                                        <li><a href="canadian-express-entry.html">Canadian Express Entry</a></li>
                                                        <li><a href="provincial-nominee-program.html">Provincial Nominee Programs</a></li>
                                                        <li><a href="home-caregiver-pilot.html">Home Caregiver Pilot Program</a></li>
                                                    </ul>
                                                </li>   
                                                <li class="dropdown"><a href="family-all-sponsorship.html">Family Sponsorship</a>
                                                    <ul>
                                                        <li><a href="family-sponsorship.html">Family Sponsorship</a></li>
                                                        <li><a href="spousal-sponsorship.html">Spousal Sponsorship</a></li>
                                                        </ul>
                                                </li>
                                                <li class="dropdown"><a href="work-in-canada.html">Work in Canada</a>
                                                    <ul>
                                                        <li><a href="work-permit-inside.html">Work Permit Inside canada</a></li>
                                                        <li><a href="work-permit-outside.html">Work Permit Outside canada</a></li>
                                                        <li><a href="spousal-openwork-permit.html">Spousal Open Work Permit</a></li>
                                                    </ul>
                                                </li>
                                               <li class="dropdown"><a href="visit-canada.html">Visit</a>
                                                        <ul>
                                                            <li><a href="visitor-visa.html">Visitor Visa</a></li>
                                                            <li><a href="super-visa.html">Super Visa</a></li>
                                                        </ul>
                                                        </li>
                                                <li class="dropdown"><a href="business-immigration.html">Business Immigration</a>
                                                    <ul>
                                                        <li><a href="start-up-visa.html">Start Up Visa  </a></li>
                                                        <li><a href="self-employed-visa.html">Self Employed Visa  </a></li>
                                                        <li><a href="provincial-nominee-investor.html">Provincial Nominee Investor Program</a></li>                                                    
                                                        <li><a href="entrepreneur-visa.html">Entrepreneur Visa  </a></li>
                                                        <li><a href="investor-class.html">Investor class</a></li>                                                    
                                                                                                           </ul>
                                                   </li>
                                                <li><a href="citizenship.html">Citizenship</a></li>
                                                <li><a href="immigration-appeals.html">Visa Refusals & Immigration Appeals</a></li>
                                                <li><a href="visa-renewal.html">Visa Renewal</a></li>
                                                <li><a href="represent-fraud.html">Represent Fraud</a></li>
                                                <li><a href="all-services.html">All services</a></li>
                                            </ul>
                                        </li>
                                    <li><a href="faq.html">FAQs</a>
                                        <li><a href="contact-3.html">Assessment</a>
                                      <li><a href="contact.html">contact</a></li>
                                    </ul>
                            </div>
                        </nav>
                        
                        <!-- Main Menu End-->
                        <div class="outer-box">
                            <!--Search Box-->

                            <div class="number">+1 (416) 704-3632</div>
                        </div>
            		</div>
                    
                </div>
                    
            </div>
        </div>
        <!--End Header Upper-->
        
    </header>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/20.jpg)">
    	<div class="auto-container">
        	<h1>Contact Us</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Career Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<h2>Drop a Message</h2>
        	<div class="row clearfix">
            	<div class="form-column col-md-7 col-sm-12 col-xs-12">
                	<div class="inner-column">
					<!-- Contact Form Response-->
                    <?php
                        
                        $msg = "";

                        require "phpmailer/Exception.php";
                        require "phpmailer/PHPMailer.php";
                        require "phpmailer/SMTP.php";

                        function sendemail($to, $from, $fromName, $body, $attachment) {
                            try {

                                $mail = new PHPMailer\PHPMailer\PHPMailer();
                                $mail->setFrom($from, $fromName);
                                $mail->addAddress($to);

                                if(!empty($attachment)) {
                                    $mail->addAttachment($attachment);
                                }                                    

                                $mail->Subject = 'Email from customer';
                                $mail->Body =$body;
                                $mail->isSMTP(); 
                                $mail->isHTML(false);

                                return $mail->send();
                            } catch (Exception $e) {
                                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            }                                        
                        }

                        if (isset($_POST['submit'])) {

                            $name = $_POST['username'];
                            $email = $_POST['email'];
                            $body = $_POST['body'];

                            $file = "attachment/" . basename($_FILES['attachment']['name']);
                            // echo "<pre>";
                            // print_r($_FILES);

                            if(!empty($_FILES) && !empty($_FILES['tmp_name'])) {
                                move_uploaded_file($_FILES['attachment']['tmp_name'], $file);
                            }

                            if (sendemail('info@onesourceimmigration.com', $email, $name, $body, $file)) {
                                $msg = 'Thanks for your e-mail. We will respond to you shortly.';
                            } else
                                $msg = 'Email Failed!. Please retry later';
                            
                            echo $msg;
                        }
                    ?>
                    <!-- End Contact Form Response-->
                    </div>
                </div>
				<div class="info-column col-md-5 col-sm-12 col-xs-12">
					<div class="inner-column">
						<h3>Our Address</h3>
						<div class="text">ompletely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service.</div>
						<ul class="list-style-eight">
							<li>
								<span class="icon-box">
									<span class="icon flaticon-location-pin"></span>
								</span>
								<strong>Address :</strong>
								54B, Tailstoi Town 5238 MT, La city, IA 5224
							</li>
							<li>
								<span class="icon-box">
									<span class="icon flaticon-technology"></span>
								</span>
								<strong>Phone :</strong>
								+1 (416) 704-3632  /  1254 897 3654
							</li>
							<li>
								<span class="icon-box">
									<span class="icon flaticon-e-mail-envelope"></span>
								</span>
								<strong>Email :</strong>
								contact@Rabinos.co.in
							</li>
						</ul>
					</div>
				</div>
			</div>
        </div>
    </section>
    <!--End Career Section-->

    <!--Map Section-->
    <section class="map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4866.098244607565!2d-79.84143458547818!3d43.686952921705966!2m3!1f0!2f38.5419086029073!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x882b11559fbbd94b%3A0xdcea75c922b3a602!2s75%20Dolobram%20Trail%2C%20Brampton%2C%20ON%20L7A%200C7!5e1!3m2!1sen!2sca!4v1587537271548!5m2!1sen!2sca" 
                        width="100%" 
                        height="450"
                        frameborder="0" 
                        style="border:0;" 
                        allowfullscreen="" 
                        aria-hidden="false" 
                        tabindex="0">
                </iframe>
            </div>
        </div>
    </section>
    <!--End Map Section-->
    
       <!--Main Footer-->
       <footer class="main-footer">
		<div class="auto-container">
        
        	<!--Upper Box-->
        	<div class="upper-box">
            	<div class="row clearfix">
                	
                    <!--Column-->
                    <div class="column col-md-4 col-sm-6 col-xs-12">
                    	<ul class="info-list">
                        	<li><span class="icon flaticon-placeholder-2"></span>75 Dolobram Trail, Brampton <br> Ontario L7A 0C7</li>
                        </ul>
                    </div>
                    
                    <!--Column-->
                    <div class="column col-md-4 col-sm-6 col-xs-12">
                    	<ul class="info-list">
                        	<li><span class="icon flaticon-note"></span>Email us : <br> info@onesourceimmigration.com</li>
                        </ul>
                    </div>
                    
                    <!--Column-->
                    <div class="column col-md-4 col-sm-6 col-xs-12">
                    	<ul class="info-list">
                        	<li><span class="icon flaticon-phone-call"></span>Call us on : <br>+1 (416) 704-3632</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            
              
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index.html"><img src="images/logo.png" alt="" /></a>
                                    </div>
                                    <div class="text">OneSource Immigration Inc. is an Immigration Consultancy Firm, located in Brampton, Canada providing all immigration services to our clients from across the world.</div>                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                	<h2>Useful Links</h2>
                                    <div class="widget-content">
										<ul class="list">
                                        	<li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="#">Request Call Back</a></li>
                                            <li><a href="#">Testimonials</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
            


                <div class="info-column col-md-5 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<h3>Our Address</h3>
                        <div class="text">ompletely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service.</div>
                        <ul class="list-style-eight">
                        	<li>
                            	<span class="icon-box">
                                	<span class="icon flaticon-location-pin"></span>
                                </span>
                                <strong>Address :</strong>
                                54B, Tailstoi Town 5238 MT, La city, IA 5224
                            </li>
                            <li>
                            	<span class="icon-box">
                                	<span class="icon flaticon-technology"></span>
                                </span>
                                <strong>Phone :</strong>
                                +1 (416) 704-3632  /  1254 897 3654
                            </li>
                            <li>
                            	<span class="icon-box">
                                	<span class="icon flaticon-e-mail-envelope"></span>
                                </span>
                                <strong>Email :</strong>
                                contact@Rabinos.co.in
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--big column-->
<div class="big-column col-md-6 col-sm-12 col-xs-12">
    <div class="row clearfix">
    
        <!--Footer Column-->
        <div class="footer-column col-md-5 col-sm-6 col-xs-12">
            <div class="footer-widget links-widget">
                <h2>Services</h2>
                <div class="widget-content">
                    <ul class="list">
                        <li><a href="#">Immigrate</a></li>
                        <li><a href="#">Family</a></li>
                        <li><a href="#">Work In canada </a></li>
                        <li><a href="#">Visit</a></li>
                        <li><a href="#">Citizenship</a></li>

                    </ul>
                </div>
            </div>
        </div>
        
        <!--Footer Column-->
        <div class="footer-column col-md-7 col-sm-6 col-xs-12">
            <div class="footer-widget newsletter-widget">
                <h2>Newsletter</h2>
                <div class="widget-content">
                    <div class="text">Get latest updates and offers.</div>
                    <div class="emailed-form">
                        <form method="post" action="http://t.commonsupport.com/rabinos/contact.html">
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Enter your email address" required>
                                <button type="submit" class="theme-btn"><span class="flaticon-send-message-button"></span></button>
                            </div>
                        </form>
                    </div>
                    <ul class="social-icon-two">
                        <li><a href="https://www.facebook.com/nikitamehra1121/"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>

</div>
</div>
<!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="clearfix">
                    <div class="pull-left">
<div class="copyright">&copy;  Copyright OneSource Immigration 2020. All right reserved.</div>
                    </div>
                    <div class="pull-right">
                        <div class="created"></div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>