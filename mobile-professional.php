<?php

//require_once('includes/db.php');
//require_once('includes/common.php');
//require_once('includes/training.php');
/////////////////////////////////////////
//use Training\coupon as couponClass;
//use Training\getSeats as getSeatNum;
/////////////////////////////////////////
//// Set Course ID
//$_SESSION['course'] = 1;
/////////////////////////////////////////

//$ddates['my'] = date("F Y", strtotime("next month"));

//////////////////////////////////////////
//// If an agent is registering for a user
//if (!empty($_GET['agent'])) {
//if ($agent_id = get_agent($link, $_GET['agent'])) {
//$_SESSION['proxy'] = $_SESSION['agent'] = $agent_id;
//}
//} else if (!empty($_GET['ref'])) {  // If user is referred by an agent
//if ($agent_id = get_agent($link, "", $_GET['ref'])) {
//$_SESSION['agent'] = $agent_id;
//}
//}

//////////////////////////////////////////
//if (!empty($_GET['coupon'])) {
//$_SESSION['coupon'] = $_GET['coupon'];
//}

//if (!empty($_SESSION['coupon'])) {
//$discount = new couponClass($_SESSION['coupon']);
//$coupon = $discount->get_coupon($link);
//}
////////////////////////////////////////
// Get number of remaining seats
//$seatsClass = new getSeatNum;

//$seats = maxSeats - intval($seatsClass->seats($link, $day, $ddates['my']));

//// Force maximum number of seats if coupon covers less seats
//if (!empty($coupon['seats']) && $seats > $coupon['seats']){
//$seats = $coupon['seats'];
//}
$saturday = date("jS F Y", strtotime("saturday"));
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


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-7718160-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-7718160-1');
	</script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Samuel Anyaele">

	<title>Mobile Business Professional Training</title>



	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/modern-business.css" rel="stylesheet">

	<link href='//fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.html"><img src="assets/logo.jpg"></a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link" href="index.html">Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="training.html">Online Courses</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Page Content -->
	<div class="container py-5">

		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">Saturday <?php echo $saturday; ?> Live Class
		</h1>

		<ol class="breadcrumb bg-white">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="training.html">Online Courses</a>
			</li>

			<li class="breadcrumb-item active">Office 365</li>

		</ol>

		<!-- Portfolio Item Row -->
		<div class="row">

			<div class="col-md-8">
				<div class="row">
					<div>
						<iframe src="https://player.vimeo.com/video/130373341" width="640" height="360" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="row">
					<p class="firstp">
						The <strong class="text-primary">Mobile Professional Course</strong> is a business training program that enable teams to be more productive by combining the <strong>flexibility</strong> of accessing work documents from their mobile devices with the <strong>power of Cloud Computing</strong>.
						<div class="row p-3">
							<ul class="hidlist col-md-9 col-12">
								<li><i class="fa fa-check-square"></i> Make, edit, modify and share ALL documents.</li>
								<li><i class="fa fa-check-square"></i> Co-create, collaborate, and work with team on ALL documents</li>
								<li><i class="fa fa-check-square"></i> Power, prepare and present</li>
								<li><i class="fa fa-check-square"></i> Convert, go cloud</li>
								<li><i class="fa fa-check-square"></i> ALL from your phone. Anytime, anywhere.</li>
							</ul>
							<img src="assets/msoffice.jpeg" alt="Microsoft Office on Mobile" class="img-responsive col-md-3 col-8 offset-2 offset-md-0">
						</div>
					</p>

					<div data-toggle="modal" data-target="#payModal">
						<a href="https://paystack.com/pay/officemobile" target="pay_frame" class="btn btn-primary m-1">Register now</a>
					</div>
				</div>
				<div class="row rounded" style="background-color:#f6fbcc;">
					<div class="story col-md-12 p-3">
<h2>Short Story Series</h2>
						<img src="images/presentation.jpeg" alt="Office Presentation" class="img-fluid rounded" style="width:100%; padding-bottom:15px;">
						<p> Mabel is heading to a meeting with two of her colleagues, this Prospect had been referred to them by their biggest Client. The light rain was pattering on her side of the car window, as the Uber cab they are riding slowly makes its way through a slightly flooded street in a section of Lekki with a few portholes littered throughout the length of the street. Why the construction crew has not finished repairing this road beats Mabel, they have been stuck on “repairing” this road since beginning of the year, now the rainy season is here, who knows how much longer this was going to take?
						</p>
						<p>
							“Juliet, did you copy the Powerpoint presentation from the computer?” Mabel asks.
						</p>
						<p>
							Juliet who was sitting on the passenger side beside the driver abruptly turns to look at Mabel with an enquiring look on her face, as she responds “I thought you already copied it”.
						</p>
						<p>
							“What?!” Mabel glared at Juliet “How could you have forgotten to copy the presentation? Something we developed on your desktop?” Mabel screamed, “What do we do now? If we head back to the office, we will definitely be late for the meeting, yet we cannot enter that meeting without a presentation”
						</p>
						<p>
							“I have the figures we used in the presentation stored on my Google Drive, it syncs on this phone too” Ada chips in, joining the conversation. The other two colleagues looked at her, suddenly realising that all is not lost … yet! Quickly whipping out her phone from her leather hand bag, Mabel opens up the Microsoft Powerpoint App, scrolls through the theme options, selects one with a beautiful blue rich background, and starts creating a new presentation. “Ada please send me the figures, thank you”, still glaring at Juliet “Send me the new logo, and while you’re at it, go to pexels.com and look for appropriate free pictures I’ll include in this slide, and hurry”
						</p>
						<p>
							“You’re such a nice man, thanks for giving us 5 more minutes in your car to finish our presentation. I’ll definitely rate you 5 stars”, Mabel waves slightly at the smiling Uber driver as he makes his way out of the close. The rain has stopped momentarily, but the clouds still look heavy, maybe it will rain again, who knows? …
						</p>
						<p>
							#MobileBusinessProductivity</p>
					</div>
				</div>


				<div id="details" class="row mt-4 mb-4">
					<div class="bg-primary col-md-12 text-white pt-3 mb-3 rounded-top">
						<h3 class="text-light">Intensive Office 365 Weekend Training</h3>
					</div>
					<div class="col-md-7">

						<img src="assets/office365.png" alt="Microsoft Word Excel Powerpoint" class="img-fluid">
					</div>
					<div class="benefits col-md-5">
						<h3> <small>Next Class:</small> <br>
							<?php echo $saturday; ?></h3>
						<div data-toggle="modal" data-target="#payModal">
							<a href="https://paystack.com/pay/officemobile" target="pay_frame" class="btn btn-danger m-1">Register now</a>
						</div>



					</div>


				</div>
<div class="card mt-3 story" style="background-color:#e2ccfb;">
<h3 class="p-3">Short Story Series</h3>
					<img src="images/man-on-computer.jpeg" alt="Working on Computer" class="img-fluid">
					<div class="card-body">
						<p>
							It’s 5.04pm on Friday, everyone is rearing to leave the office to begin their TGIF, suddenly a client calls asking for the proposal for an urgent job. The other two staffs needed to work on the proposal are already out of the office, so Eze quickly creates a rough draft of the proposal on his Microsoft Word document on his office Laptop and stores it in Dropbox, he notifies his colleagues of the saved document, and they connect to Dropbox on their mobile phones, and edited sections of the proposal using the Microsoft Word App.
						</p>
						<p>
							By 8pm, they are done with their editing and Eze reviews the documents and sends it to the client, eventually shutting the office door behind him by 8.15pm as he too heads home.
						</p>
						<p>
							#MobileBusinessProductivity</p>
					</div>
				</div>


<div id="details" class="row mt-4 mb-4">
					
					<div class="col-md-7">

						<img src="assets/office-365.png" alt="Microsoft Office" class="img-fluid">
					</div>
					<div class="benefits col-md-5 pt-5">
						<div data-toggle="modal" data-target="#payModal">
							<a href="https://paystack.com/pay/officemobile" target="pay_frame" class="btn btn-danger m-1">Register now</a>
						</div>



					</div>


				</div>


				<!-- Related Projects Row -->




			</div>

			<div class="col-md-4">
				
				<div class="card mt-2">
					<div class="card-header bg-primary">
						<h4 class="text-white pt-2">Benefits of the Course</h4>
					</div>

					<div class="card-body hidlist">
						<div><i class="fa fa-check-square text-primary"></i>Learn how to edit Documents on your Mobile phone using Microsoft Word or Google Docs</div>
						<div><i class="fa fa-check-square text-primary"></i>
							Collaborate with your Team mates on office documents from your mobile devices anywhere you are</div>
						<div><i class="fa fa-check-square text-primary"></i>Find productive use of your time in Lagos traffic</div>
						<div><i class="fa fa-check-square text-primary"></i>Be ready for business emergencies, have the tools required to respond to your customers requests immediately</div>
						<div><i class="fa fa-check-square text-primary"></i>Learn how to work with Cloud computing to make documents easy to share and backup</div>
						<div><i class="fa fa-check-square text-primary"></i>Develop and share Presentations from your phone even while on your way to the meeting</div>
						<div><i class="fa fa-check-square text-primary"></i>Master Excel and how to work with Spreadsheets from your Smartphone</div>
						<div><i class="fa fa-check-square text-primary"></i>Convert your documents to PDF on the go</div>
						<div><i class="fa fa-check-square text-primary"></i>And so many other benefits of using your Mobile phone efficiently with Cloud services</div>
					</div>
				</div>

			</div>

		</div>
		<!-- /.row -->


	</div>
	<!-- /.container -->

	<!-- Pay Modal-->
	<div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="payModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="payModalLabel">Class for <?php echo $saturday; ?></h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe src="" class="inframe" name="pay_frame" id="pay_frame" frameborder="0"></iframe>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; 2020. TheMobileProf.com</p>
		</div>
		<!-- /.container -->
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
