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
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
<link rel="icon" href="images/logo.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script src="js/jquery.js"></script>
<script> 
$(function(){
  $("#header").load("include-header.html"); 
  $("#footer").load("include-footer.html"); 
});
</script> 
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header / Header Style One-->
    <div id="header"></div>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/background-1.jpg)">
    	<div class="auto-container">
        	<h1>Contact Us</h1>
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
    <div id="footer"></div>
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
<script src="//code.tidio.co/cxlvcaxbbdox4etyywzijqfee7ib3czp.js" async></script>
</body>
</html>