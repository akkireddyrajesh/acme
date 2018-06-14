<!DOCTYPE html>
<html>
<head>

<?php include( 'inc/meta.php') ?>
<!-- headtag -->
<link rel="icon" href="images/fav_icon.png" type="image/png" sizes="16x16">
<title>ACME  || Offerings</title>

<!-- CSS Files -->
<?php include( 'inc/css.inc.php') ?>

<!-- JavaScript Files -->
<?php //include( 'inc/js.inc.php') ?>

</head>
<body class="text-justify">
<!-- header -->
<?php include('inc/header.inc.php'); ?>

<!-- banner -->
<section class="bannerGrid page-info-banner page_head banner_img banner_offerings_img">
	<!-- banner-text -->
	<div class="services_img_text page-info-banner-text col-md-6">
		<!-- <p> </p> -->
		<!-- <p> </p><br/><br/> -->
		<p>Take your Business to the Next Level with our Solutions</p>
		<p> </p>
	</div>
	<!-- banner-text -->
</section>
<!-- //banner -->

<section class="container-fluid sec_services">
	<article class="container services">
		<div class="row">
			<div class="col-md-12">
				<h3 class="tittle text-center">PROFESSIONAL BUSINESS SOLUTIONS AND SERVICES</h3>
				
				<!-- <h4 class="text-center services-h">OUR SERVICES</h4> -->
				<!-- services1 -->
				<div class="col-md-4 services_1 rel text-center">
					<p class=""><img class="offerings_img" src="images/offerings/services_icon_cloud.png"/></p><!-- height="90px" width="90x" -->
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
					<p class=""><img class="offerings_img" src="images/offerings/services_icon_enterpriceSecurityServices.png"/></p>
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
					<p class=""><img class="offerings_img" src="images/offerings/services_icon_businessIntelligence.png"/></p>
					<p class="services_sub_head">Business Intelligence</p>
					<p class="hLine col-sm-offset-5 col-sm-2"> </p>
					<div class="clearfix"></div>
					<p class="services-p">
						If your organization is struggling to make key business decisions, our BI practices can track and analyze your data to pinpoint the problem. We utilize only the best industry practices and technologies such as data analytics, business performance management, dashboards and KPIs to pinpoint solutions that can streamline your business.					
					</p>
				</div>
				<!-- services3 -->
			</div><!-- col-12 -->
			<div class="col-md-12  services-grid2">
				<!-- <h4 class="text-center services-h">OUR SERVICES</h4> -->
				<!-- services1 -->
				<div class="col-md-4 services_1 rel text-center">
					<p class=""><img class="offerings_img" src="images/offerings/services_icon_enterpriceResourcePlanner.png"/></p><!-- height="90px" width="90x" -->
					<p class="services_sub_head">Enterprise Resource Planner</p>
					<p class="hLine col-sm-offset-5 col-sm-2"> </p>
					<div class="clearfix"></div>
					<p class="services-p wow slideInDown ">
					We provide Enterprise Resource Planning Services that utilize industry leading products by creating integrated view of real time business processes and allow organizations to share data across different departments/applications platforms.
					</p>
				</div>
				<!-- services1 -->
				<!-- services2 -->
				<div class="col-md-4 services_2 wow slideInDown text-center">
					<p class=""><img class="offerings_img" src="images/offerings/services_icon_middlewareIntegration.png"/></p>
					<p class="services_sub_head">Middleware Integration</p>
					<p class="hLine col-sm-offset-5 col-sm-2"> </p>
					<div class="clearfix"></div>
					<p class="services-p">
					Besides quality integration solutions, we also lower costs for our clients by offering agile solutions that utilize IBM and Oracle based products. Additionally, our expertise in middleware integration has allowed us to handle complex B2B, mainframe, application integration as well as system monitoring and business process management.
					</p>
				</div>
				<!-- services2 -->
				<!-- services3 -->
				<div class="col-md-4 services_2 wow slideInDown text-center">
					<p class=""><img class="offerings_img" src="images/offerings/services_icon_enterpricesApplicationDevelopment.png"/></p>
					<p class="services_sub_head">Enterprise Application Development</p>
					<p class="hLine col-sm-offset-5 col-sm-2"> </p>
					<div class="clearfix"></div>
					<p class="services-p">
					We provide enterprise application development services supporting Microsoft, Java, Open Source and Mobile development platforms by formulating and executing a tech strategy from design, development and deployment to BAU support.
					</p>
				</div>
				<!-- services3 -->				
			</div><!-- col-12 -->
		</div><!-- row -->
	</article>
</section>
<!-- /services1 -->

<!--Footer File -->
<?php include( 'inc/footer.inc.php') ?>

<!-- JavaScript Files -->
<?php include( 'inc/js.inc.php') ?>

<script>
	$( ".services_sub_head" ).addClass( "text-uppercase" );
	$( ".services-p" ).addClass( "text-justify" );
</script>

</body>
</html>
