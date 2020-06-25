<?php
$target = $_GET['target'] ?? 'other';

if ($target == 'NG') {
	$master_cost = "N10,000";
	$bonus_cost = "N5,000";
	$flutter_link = "https://flutterwave.com/pay/marker";
	$home_img = "../assets/woman-smartphone.jpg";
	$contact = "https://wa.me/2348033954301";
} else {
	$master_cost = "$30";
	$bonus_cost = "$20";
	$flutter_link = "https://flutterwave.com/pay/testscores";
	$home_img = "../assets/woman-sitting.jpg";
	$contact = "mailto:info@themobileprof.com";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153265481-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-153265481-1');
	</script>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>TheMobileProf.com</title>

	<!-- Icon css link -->
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<link href="css/icofont.css" rel="stylesheet" />

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />

	<!-- Rev slider css -->
	<link href="vendors/revolution/css/settings.css" rel="stylesheet" />
	<link href="vendors/revolution/css/layers.css" rel="stylesheet" />
	<link href="vendors/revolution/css/navigation.css" rel="stylesheet" />
	<link href="vendors/animate-css/animate.css" rel="stylesheet" />

	<!-- Extra plugin css -->
	<link href="vendors/magnific-popup/magnific-popup.css" rel="stylesheet" />
	<link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet" />

	<link href="css/style.css" rel="stylesheet" />
	<link href="css/responsive.css" rel="stylesheet" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="120">
	<!--================Header Area =================-->
	<header class="main_header_area">
		<div class="main_menu_area">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html"><img src="img/themobileprof_logo.png" alt="" /></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->

					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</header>
	<!--================End Header Area =================-->

	<!--================Choose Us Area =================-->

	<!--================End Choose Us Area =================-->

	<!--================Satisfaction Area =================-->

	<!--================End Satisfaction Area =================-->

	<!--================Video Area =================-->

	<!--================End Video Area =================-->

	<!--================MacBook Mockup Area =================-->
	<section class="install_app_area" id="codecamp">
		<div class="col-md-6">
			<div class="row">
				<div class="install_mockup_img">
					<a href="#">
						<img src="<?php echo $home_img; ?>" alt="Web Development on Mobile" />
					</a>
					<div style="text-align: center; padding: 10px;">
						<img src="img/mosedes.jpg" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="install_left_content">
					<div class="left_title">
						<h2>
							Do you spend <strong>Hours</strong> grading student scores?
							<br>
							<small>Believe me there is a better way</small>
						</h2>
					</div>
					<div class="install_content">
						<h5>
							Teachers spend more time marking and planning than in the
							classroom
							<small style="color: blue;">
								-
								<a href="https://www.telegraph.co.uk/news/2019/07/21/teachers-spend-time-marking-planning-classroom-ofsted-survey/" target="_blank">The telegraph</a>
							</small>
						</h5>
						<p style="color: #000;">
							Most burn-out and fatigue is not because of the average 22 hours
							a week of teaching, but the 29 hours of "non-teaching tasks".
							<br />
							<br />
							Attend our
							<strong style="color: #f00;">Google Forms Master Class</strong>
							to learn how to create tests that are graded automatically while
							you use your new found time to ease back or get busy with
							something else.
							<br />
							Register for our Zoom online class as spaces are filling up
							rapidly.
							<strong style="color: #f00;">The Bonus Class is for the first 25 people to register. Hurry
								now!</strong>
						</p>
						<p style="font-size: 20px; color: #4f3f86;" class="p-4">
							<strong>Date:</strong> Saturday 27th June <br />

							<strong>Time:</strong> 15:00 - 17:00 GMT <br />
							<strong>Cost:</strong>
							<span class="text-danger"><?php echo $master_cost; ?>. Pay now!</span>
						</p>
						<a class="gradient_bg_btn" href="<?php echo $flutter_link; ?>" style="color: #000000;"><i class="fa fa-check-square-o" aria-hidden="true"></i>
							Register
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End MacBook Mockup Area =================-->

	<!--================App Screen Area =================-->
	<section class="app_screen_area" id="msoffice">
		<div class="container">
			<div class="main_title">
				<h2>Remote Classes</h2>
				<p style="max-width: 90%;">
					The need for remote classes is more pressing now than ever. Teachers
					and Trainers are learning tools that can ease their lives as they
					struggle to create remote classes and quality content for their
					students. Our Master class is a two days class targetted at trainers
					and teachers
				</p>
				<p class="h5" style="max-width: 70%;">
					<span class="text-danger"><strong><?php echo $master_cost; ?> Master Class</strong> Day 1 (Saturday, 27th June,
						2020):</span>
					Automated test grading with Google Forms <br />

					<span class="text-primary"><strong><strike class="text-muted"><?php echo $bonus_cost; ?></strike> Bonus Class</strong>
						Day 2 (Sunday, 28th June, 2020):</span>
					Class presentations with Google Slides *<br />
				</p>
				<p>
					<a class="btn btn-lg btn-danger" href="<?php echo $flutter_link; ?>"><i class="fa fa-check-square-o" aria-hidden="true"></i>
						Register Now for <?php echo $master_cost; ?>
					</a>
				</p>
			</div>

		</div>
	</section>
	<!--================End App Screen Area =================-->

	<!--================Pricing Table Area =================-->

	<!--================End Pricing Table Area =================-->

	<!--================Question Area =================-->
	<section class="question_area" id="faq">
		<div class="container">
			<div class="main_title">
				<h2>FREQUENTLY ASKED QUESTION</h2>
				<p>
					Here are some of our Frequently Asked Questions. If you have more
					enquiries, kindly
					<a href="<?php echo $contact; ?>" style="font-size: 19px; color: #F00;">contact us</a> for any
					additional clarifications
				</p>
			</div>
			<div class="row">
				<div class="col-md-7">
					<div class="left_question_inner">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											1. What will the Masterclass cover?
											<i class="fa fa-minus" aria-hidden="true"></i>
											<i class="fa fa-plus" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										The Masterclass will cover the following use cases for
										Google Forms: <br />
										<ul style="color: #000; list-style-type: circle;">
											<li>Setup and Quiz activation</li>
											<li>Sections and Section Navigations</li>
											<li>Setting Questions (Text, Pictures, and Videos)</li>
											<li>
												Setting Options (multichoice options, short answers,
												check boxes) and shuffle
											</li>
											<li>Setting answers for automation</li>
											<li>Sharing tests</li>
											<li>Exporting class results to a spreadsheet</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											2. Does the Cost cover the bonus class too?
											<i class="fa fa-minus" aria-hidden="true"></i>
											<i class="fa fa-plus" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										Yes, registration for the master class gives you
										provisional access to the bonus class too. However, it is
										only available for <b>free</b> to the first 25
										registrations, every other person pays the <?php echo $bonus_cost; ?> for the
										Presentation (Bonus) class.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											3. What does the bonus course cover?
											<i class="fa fa-minus" aria-hidden="true"></i>
											<i class="fa fa-plus" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										The bonus course covers how to setup simple slide
										presentations for your classes. This includes:
										<ul style="color: #000; list-style-type: circle;">
											<li>Working with Google Slides</li>
											<li>
												Getting Copyright free pictures and illustrations
											</li>
											<li>Presentation on Mobile</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingfour">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
											4. What time is the Masterclass?
											<i class="fa fa-minus" aria-hidden="true"></i>
											<i class="fa fa-plus" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
									<div class="panel-body">
										The Masterclass is by:
										<ul>
											<li>15:00 - 17:00 GMT (Greenwich Mean Time)</li>
											<li>8:00 - 10:00 PST (Pacific Standard Time)</li>
											<li>16:00 - 18:00 WAT (West African Time)</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingfour">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
											5. Will I get a Certificate?
											<i class="fa fa-minus" aria-hidden="true"></i>
											<i class="fa fa-plus" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
									<div class="panel-body">
										Yes, we issue a digital Certificate of Participation at
										the End of the Course. You can print and laminate this if
										you choose or post it on your LinkedIn profile.
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="text-align: center;">
							<a class="btn btn-lg btn-danger" href="<?php echo $flutter_link; ?>"><i class="fa fa-check-square-o" aria-hidden="true"></i>
								Register Now for <?php echo $master_cost; ?>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="right_question_img row">
						<p>Watch a sample video</p>
						<video class="embed-responsive-item" controls>
							<source src="sample.mp4 " frameborder="0" allowfullscreen />
						</video>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--================End Question Area =================-->

	<!--================Latest Blog Area =================-->

	<!--================End Latest Blog Area =================-->

	<!--================Footer Area =================-->
	<footer>
		<div class="footer_copy_right">
			<div class="container">
				<div class="pull-left">
					<p class="copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<script>
							document.write(new Date().getFullYear());
						</script>
						All rights reserved | This template is made with
						<i class="fa fa-heart-o" aria-hidden="true"></i> by
						<a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
				<div class="pull-right">
					<ul>
						<li><a href="#">Term & Condition</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="<?php echo $contact; ?>">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.2.4.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Rev slider js -->
	<script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<!-- Extra Plugin -->
	<script src="vendors/parallax/jquery.parallax-scroll.js"></script>
	<script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/counterup/waypoints.min.js"></script>
	<script src="vendors/counterup/jquery.counterup.min.js"></script>
	<script src="vendors/flexslider/flex-slider.js"></script>
	<script src="vendors/flexslider/mixitup.js"></script>
	<script src="vendors/swiper/js/swiper.min.js"></script>
	<script src="vendors/flipster-slider/jquery.flipster.min.js"></script>
	<script src="vendors/nice-selector/jquery.nice-select.min.js"></script>

	<script src="js/theme.js"></script>
</body>

</html>
