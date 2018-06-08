<!DOCTYPE html>
<html>
<head>

<?php include( 'inc/meta.php') ?>
<!-- headtag -->
<link rel="icon" href="images/fav_icon.png" type="image/png" sizes="16x16">
<title>ACME  || Contact us</title>

<!-- CSS Files -->
<?php include( 'inc/css.inc.php') ?>

<!-- JavaScript Files -->
<?php //include( 'inc/js.inc.php') ?>

</head>
<body class="text-justify">
<!-- header -->
<?php include('inc/header.inc.php'); ?>


<!-- banner -->
<section class="bannerGrid page-info-banner page_head banner_img banner_contactUs_img">
	<!-- banner-text -->
	<div class="services_img_text page-info-banner-text col-md-6">
		<p>Desire</p>
		<p>To Grow</p>
		<p>Ambition To Excel</p>
	</div>
	<!-- banner-text -->
</section>
<!-- //banner -->
<section class="contact-page container-fluid">
	<div class="container">
		<h3 class="tittle text-center">Contact Us</h3>
		<div class="row contact_row">
			<!-- contact_left -->
			<div class="col-md-6 contact_left">
				<form id="contactForm"  method="POST" enctype="multipart/form-data">
					<input type="hidden"  name="formname" value="contactForm"/>

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Enter Your Name" required>
					</div>
					<div class="form-group">
						<label for="mobile">Mobile Number</label>
						<input type="number" class="form-control" name="mobile" id="mobile"  placeholder="Enter Your Mobile No" required>
					</div>
					<div class="form-group">
						<label for="email">Email address</label>
						<input type="email" class="form-control" name="email" id="email"  placeholder="Enter Your email" required>
					</div>
					<div class="form-group">
						<label for="message">Your Message</label>
						<textarea class="form-control" name="message" id="message" rows="3"  placeholder="Enter Your Message" required > </textarea>
					</div>
					<button type="submit"  name="contactEmail" class="btn submit col-md-12">Submit</button>
				</form>
				<div id="mailSuccess" class="well bg-success hidden well-lg">Mail Sent Successfully ... <br/>Our Adminstrative will contact you soon...</div>
			</div>
			<!-- contact_right -->
			<div class="col-md-5 col-md-offset-1 contact_right">
				<p class="">"Feel free to Contact us."</p>
				<p class="contact-country">Corporate Headquarters</p>
				<ul class="contact-list">
					<li><span><i class="fa fa-building" aria-hidden="true"></i></span>D.No: 55-1-3, Plot No 3,</li>
					<li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>Road No 4, Industrial Estate, Autonagar,</li>
					<li><span><i class="fa fa-globe" aria-hidden="true"></i></span>Vijayawada-520007, Andhra Pradesh, India.</li>
					<li><span><i class="fa fa-phone" aria-hidden="true"></i></span>Phone: 9948915899 </li>
					<!-- <li><span><i class="fa fa-fax" aria-hidden="true"></i></span>Fax: 2012218510 </li> -->
				</ul>
				<!-- <p class="contact-country">Office in India</p>
				<ul class="contact-list">
					<li><span><i class="fa fa-building" aria-hidden="true"></i></span>Suite no - 604, Paigah Plaza</li>
					<li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>Basheerbagh, Hyderabad, </li>
					<li><span><i class="fa fa-globe" aria-hidden="true"></i></span>Andhra Pradesh, INDIA - 500063</li>
					<li><span><i class="fa fa-phone" aria-hidden="true"></i></span>Phone: 91-40-66365636 </li>
					<li><span><i class="fa fa-phone" aria-hidden="true"></i></span>Mobile: 09985706290</li>
				</ul> -->
			</div>
			<div class="col-md-12">
				<h4 class="title_sub_sub">General Information</h4>
                <p class="text_content">
                    For general information please send us an e-mail at <span class="highLight">accounts@acmebs.net</span>
				</p>
				<h4 class="title_sub_sub">Employment</h4>
                <p class="text_content">
                   For employment please contact our Human Resources department at <span class="highLight">venkat@acmebs.net</span>
                </p>
			</div>
		</div><!--row-->
		<h3 class="tittle row text-center">View On map</h3>
		<div class="row map">
			<iframe class="col-md-12" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0"></iframe>
		</div><!--row-->

	</div><!--container-->
</section>

<!--Footer File -->
<?php include( 'inc/footer.inc.php') ?>

<!-- JavaScript Files -->
<?php include( 'inc/js.inc.php') ?>

<script src="js/forms.js"></script>
</body>
</html>

