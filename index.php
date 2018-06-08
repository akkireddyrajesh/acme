<!doctype html>
<html lang="en">
 <head>
	<!--Auther: Akkireddy Rajesh Kumar
	 	Version: ACMEV1.1b
		Rl Dt: 26.04.18    -->
<!--Meta File -->
<?php include( 'inc/meta.php') ?>
 <!-- headtag -->
<link rel="icon" href="images/g.png" type="image/png" sizes="16x16">
 <title>ACME  || Home</title>

 <!-- CSS Files -->
<?php include( 'inc/css.inc.php') ?>

<!-- JavaScript Files -->
<?php //include( 'inc/js.inc.php') ?>

</head>
<body>
	<div data-spy="affix" data-offset-top="10">
		<!--Header File -->
		<?php include('inc/header.inc.php'); ?>
	</div> 



<!-- mainpage.php Starts-->
<main class="container-fluid container-wrapper">

<!-- Slider -->
<section class="slider">
	<div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
			<li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
			<li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox">

			<!-- First Slide -->
			<div class="item active">

				<!-- Slide Background -->
				<img src="images\slider\slider1.jpg" alt="Bootstrap Touch Slider"  class="mepq-slide-1" height="100%"/>
				<div class="bs-slider-overlay"></div>

				<div class="container">
					<div class="row">
						<!-- Slide Text Layer -->
						<div class="slide-text slide_style_left">
							<h1 data-animation="animated zoomInRight">We Are Provoding Excellence in all that we do</h1>
							<p data-animation="animated fadeInLeft">ACME Business Solutioons Privatre Limited  is a company with highly skilled in consulting content content. </p>
							<a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">For More</a>
						<!--	<a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">select two</a> -->
						</div>
					</div>
				</div>
			</div>
			<!-- End of Slide -->

			<!-- Second Slide -->
			<div class="item">

				<!-- Slide Background -->
				<img src="images\slider\slider2.jpg" alt="Bootstrap Touch Slider"  class="mepq-image-2" height="100%"/>
				<div class="bs-slider-overlay"></div>
				<!-- Slide Text Layer -->
				<div class="slide-text slide_style_center">
					<h1 data-animation="animated flipInX">Objective</h1>
					<p data-animation="animated lightSpeedIn">To design and deliver quality Management Strategic Sourcing Service .</p>
					<a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">For More</a>
					
				</div>
			</div>
			<!-- End of Slide -->

			<!-- Third Slide -->
			<div class="item">

				<!-- Slide Background -->
				<img src="images\slider\slider3.jpg" alt="Bootstrap Touch Slider"  class="slide-image" height="100%"/>
				<div class="bs-slider-overlay"></div>
				<!-- Slide Text Layer -->
				<div class="slide-text slide_style_right">
					<h1 data-animation="animated zoomInLeft">We Offer</h1>
					<p data-animation="animated fadeInRight">ACME Business Solutions  offers a customized and flexible approach to resolving. </p>
					<a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">For More</a>
				
				</div>
			</div>
			<!-- End of Slide -->


		</div><!-- End of Wrapper For Slides -->

		<!-- Left Control -->
		<a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
			<span class="fa fa-angle-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<!-- Right Control -->
		<a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
			<span class="fa fa-angle-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>
<!-- /slider -->

<!-- about -->
<section class="container-fluid whoWeAre">    
	<article class="container about">
		<div class="row">
			<div class="col-md-5">
				<figure class="home_about_fig ">
					<img class="wow zoomIn" src="images/home_about.jpg" alt="SunSoft about" width="100%"/>
				</figure>
			</div>

			<div class="col-md-7">
				<div class="col-md-12 wow zoomIn">
					<h4 class="about-h">It’s Not Just a World of Things…</h4>
					<h4 class="about-h1">it’s 
						<span class="about-h_span">Who We Are</span>
					</h4>
					<p class="hLine col-sm-4"> </p>
					<p class="text-justify about-p col-sm-12">
						ACME Business Solutioons is an Information Technology Service and Solutions company based out of Vijayawada. 
						Our team is working to create IT solutions through services and software products every day. 
						Our developers and executives are creating new innovations for the future. 
						It is our goal not only to provide excellent products and services as a company, 
						but to collaborate with our clients to create value with their company, with their products and with their time. 
						Through our IT products and strategic applications it's possible that you can increase efficiency, 
						find workplace solutions and use technology to improve the way you live your life and the way you do business... 
						ACME consists of highly qualified technical and administrative staff to ensure exceptional performance on all projects and contracts. 
						ACME provide information technology services as well as providing highly qualified technical resources for short-term and long-team needs. 
						ACME have an outstanding reputation in the industry, but also an impressive record of customer satisfaction and the ability to 
						meet our client's challenges and deadlines.
					</p>
				</div>
			</div>
		</div>
	</article>
</section>
<!-- /about -->

<!-- vission -->
<section class="container-fluid sections_home vission">    
	<article class="container ">
		<div class="row">
			<div class="col-md-6 wow bounceInLeft">
				<div class="col-md-12">
					<p class="services_sub_head text-center text-uppercase">Our Vision</p>
					<p class="hLine col-sm-offset-5 col-sm-2"> </p>
				</div>
				<div class="col-md-12">
					<p class="col-md-offset-1 col-md-10 text-justify ">
					Our Vision is to be the global leader and provider of choice for Business Solutionsand consulting companies across the nation. We acknowledge the fact that cloud computing is revolutionizing the information technology sector and ACME aims to lead with solutions, trainings and consulting – providing an extensive range of cloud solutions, security and virtualization solutions.
					</p>
				</div>

			</div>
			<div class="col-md-6 wow bounceInRight">
				<div class="col-md-12">
					<p class="services_sub_head text-center text-uppercase">Our Mission</p>
					<p class="hLine col-sm-offset-5 col-sm-2"> </p>
				</div>
				<div class="col-md-12">
					<p class="col-md-offset-1 col-md-10 text-justify ">
					We are committed to deliver the most reliable and high-quality training and cloud consulting services to our distinguished clients. We are backed by a team of top class professionals, innovative technologies and user-friendly client engagement methodologies to provide the best quality solutions to our clients. ACME Business Solutions is always being an organization where it celebrates innovation, and sophistication in cloud computing technologies. We work as a team to offer best in class solutions to our customers and clients.We understand client needs and their issues facing Business Solutions today. We always ensure those needs are at the center of our decision-making process. 
					</p>
				</div>
			</div>
		</div>
	</article>
</section>
<!-- /vission -->


<!-- services1 -->
<section class="container-fluid sec_services">
	<article class="container services">
		<div class="row">
			<div class="col-md-12">
				<h4 class="text-center services-h">OUR OFFERINGS</h4>
				<!-- services1 -->
				<div class="col-md-4 services_1 rel text-center">
					<p class=""><img class="offerings_img" src="images\offerings\services_icon_cloud.png"/></p><!-- height="90px" width="90x" -->
					<p class="services_sub_head text-uppercase">Cloud</p>
					<p class="hLine col-sm-offset-5 col-sm-2"> </p>
					<div class="clearfix"></div>
					<p class="services-p wow slideInDown ">
						Achieve maximum cost savings and business agility. Ensure that your cloud-based resources are working optimally. We offer cloud computing technical services to our clients to fully realize their cloud initiatives including planning and migrating existing infrastructure and applications to IaaS or SaaS Cloud.
					</p>
				</div>
				<!-- services1 -->
				<!-- services2 -->
				<div class="col-md-4 services_2 wow slideInDown text-center">
					<p class=""><img class="offerings_img" src="images\offerings\services_icon_enterpriceSecurityServices.png"/></p>
					<p class="services_sub_head text-uppercase">Enterprise Security Services</p>
					<p class="hLine col-sm-offset-5 col-sm-2"> </p>
					<div class="clearfix"></div>
					<p class="services-p">
						Security is a crucial part of any organization. With our Identity Management services, we help an Organization to manage their Principle with respect to Authentication, Authorization, Privileges for individual system or across organization. Our goal is to provide maximum security with minimal cost and faster deployment.
					</p>
				</div>
				<!-- services2 -->
				<!-- services3 -->
				<div class="col-md-4 services_3 wow slideInDown text-center">
					<p class=""><img class="offerings_img" src="images\offerings\services_icon_businessIntelligence.png"/></p>
					<p class="services_sub_head text-uppercase">Business Intelligence</p>
					<p class="hLine col-sm-offset-5 col-sm-2"> </p>
					<div class="clearfix"></div>
					<p class="services-p">
						If your organization is struggling to make key business decisions, our BI practices can track and analyze your data to pinpoint the problem. We utilize only the best industry practices and technologies such as data analytics, business performance management, dashboards and KPIs to pinpoint solutions that can streamline your business.					
					</p>
				</div>


			</div><!-- col-12 -->
			
		</div><!-- row -->
	</article>
</section>
<!-- /services1 -->

<!-- testmonial -->
<section class="container-fluid sec_testmonial">	
	<div id="tcb-testimonial-carousel" class="carousel slide testmonial" data-ride="carousel">
		
		<!-- Indicators -->
		<!-- <ol class="carousel-indicators">
			<li data-target="#tcb-testimonial-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#tcb-testimonial-carousel" data-slide-to="1"></li>
			<li data-target="#tcb-testimonial-carousel" data-slide-to="2"></li>
		</ol> -->
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<div class="row">
					<div class="col-xs-12">
						<figure class="clearfix">
							<div class="col-md-7 col-md-offset-3">
								<h3 class="text-center testmonial-h animated zoomIn">"ACME Business Solutions has provided excellent services by providing solid candidates very quickly. ACME is our go to vendor for security resources now. "</h3>
								<p class="text-center testmonial-p animated zoomIn">- Genesis10</p>
							</div>
						</figure>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="row">
					<div class="col-xs-12">
						<figure class="clearfix">
							<div class="col-md-7 col-md-offset-3">
								<h3 class="text-center testmonial-h animated zoomIn">"I have been working with ACME Business Solutions andit’s team members since 2012. ACME has continuously provided top notch quality resources to W3R and is listed internally as one of our premiere vendors to work with. "</h3>
								<p class="text-center testmonial-p animated zoomIn">– W3R Consulting</p>
							</div>
						</figure>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="row">
					<div class="col-xs-12">
						<figure class="clearfix">
							<div class="col-md-7 col-md-offset-3">
								<h3 class="text-center testmonial-h animated zoomIn">"ACME’S candidates are highly professional and have been of senior level. A good source for experienced corporate IT professionals."</h3>
								<p class="text-center testmonial-p animated zoomIn">- Fast Switch</p>
							</div>
						</figure>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="row">
					<div class="col-xs-12">
						<figure class="clearfix">
							<div class="col-md-7 col-md-offset-3">
								<h3 class="text-center testmonial-h animated zoomIn">"ACME Business Solutions is one of the best vendors we have worked with. They always helpus in finding rare skill sets in security and have excellent pool of resources."</h3>
								<p class="text-center testmonial-p animated zoomIn">- Randstad</p>
							</div>
						</figure>
					</div>
				</div>
			</div>

		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#tcb-testimonial-carousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
		<a class="right carousel-control" href="#tcb-testimonial-carousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>

		<!-- Follow Twitter -->
		<div class="col-sm-12 text-center">
			<a href="#" class="btn follow-btn">
				<span class="follow-btn_soc_icon" ><i class="fa fa-twitter" aria-hidden="true"></i></span>
				Follow @ACMESoftTweet
			</a>
		</div>

	</div>	
</section>
<!-- /testmonial -->

<!-- section_details -->
<section class="container-fluid section_details">
		<div class="container">
			<div class="row details_row text-center">
				<div class="col-md-3 details_col"> 
					<h1 class="details_head">2011</h1>
					<p class="details_text">Year Established</p>
				</div>
				<div class="col-md-3 details_col"> 
					<h1 class="details_head">2</h1>
					<p class="details_text">Global Locations</p>
				</div>
				<div class="col-md-3 details_col"> 
					<h1 class="details_head">120</h1>
					<p class="details_text">Contractors Appointed</p>
				</div>
				<div class="col-md-3 details_col"> 
					<h1 class="details_head">5</h1>
					<p class="details_text">Awards</p> 
				</div>
			</div>
		</div>
</section>
<!-- /section_details -->

<!-- clients -->
<section class="container-fluid sec_clients">
	<article class="container services">
		<div class="row">
			<div class="col-md-11"> 
				<div class="col-md-12">
					<h2 class="text-center sunSoft-head">OUR CLIENTS</h2>
					<div class="col-md-12 text-center"><p class="underline"></p></div>
					<!-- clients1 -->
					<div class="col-md-3 clients_1">
						<p class="clients-p wow slideInDown"><img src="images/client.png" class="client_img"  height="140px" width="200px"/></p>
					</div>
					<!-- clients1 -->
					<!-- clients2 -->
					<div class="col-md-3 clients_2 wow slideInDown">
						<p class="clients-p"><img src="images/client.png" class="client_img"  height="140px" width="200px"/></p>
					</div>
					<!-- clients2 -->
					<!-- clients3 -->
					<div class="col-md-3 clients_3 wow slideInDown">
						<p class="clients-p"><img src="images/client.png" class="client_img"  height="140px" width="200px"/></p>
					</div>
					<!-- clients3 -->
					<!-- clients4 -->
					<div class="col-md-3 clients_4 wow slideInDown">
						<p class="clients-p"><img src="images/client.png" class="client_img"  height="140px" width="200px" /></p>
					</div>
					<!-- clients4 -->
				</div><!--col-10-->
			</div><!-- col-10 -->
		</div><!-- row -->
	</article>
</section>
<!-- /clients -->

</main> <!--container-fluid -->
<!-- mainpage.php Ends-->

<!--Footer File -->
<?php include( 'inc/footer.inc.php') ?>



<!-- JavaScript Files -->
<?php include( 'inc/js.inc.php') ?>
</body>
</html>