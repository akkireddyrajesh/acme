<!DOCTYPE html>
<html>
<head>

<?php include( 'inc/meta.php') ?>
<!-- headtag -->
<link rel="icon" href="images/fav_icon.png" type="image/png" sizes="16x16">
<title>ACME  || Services || Professional Staffing</title>

<!-- CSS Files -->
<?php include( 'inc/css.inc.php') ?>

<!-- JavaScript Files -->
<?php //include( 'inc/js.inc.php') ?>

</head>
<body class="text-justify">
<!-- header -->
<?php include('inc/header.inc.php'); ?>

<!-- banner -->
<section class="banner page_head page-info-banner header-below">
	<!-- banner-text -->
	<!-- <div class="services_img_text page-info-banner-text col-md-6">
		<p> </p>
		<p> </p><br/><br/>
		<p>Take your Business to the Next Level with our Solutions</p>
		<p> </p>
	</div> -->
	<!-- banner-text -->
</section>
<!-- //banner -->

<section class="container-fluid sec_services">
	<article class="container services">
		<div class="row">
			<h2> Professional Staffing </h2>
			<div class="col-md-12">
				<p>
					<b>Drive Your Staffing requirements to Meet Your Technical and Business Needs</b>
					<ul class="services_menu">
						<li>Information Technology</li>
						<li>Engineering & Technical</li>
					</ul>
				</p>

				<p><b>Information Technology</b></p>
				<p>As a part of our professional staffing services, we source and deploy highly skilled IT specialists in mainstream and niche technologies. These are designed to meet clients‘ temporary and permanent needs, as well as specific project needs to help navigate the fast-moving IT landscape.</p>
				<p>We address client staffing challenges with structured HR solutions:</p>
				<p>
					<ul class="services_menu">
						<li>Infrastructure management</li>
						<li>Testing services</li>
						<li>Recruitment process outsourcing</li>
						<li>Multi-language help desk.</li>
					</ul>
				</p>

				<p><b>Engineering & Technical</b></p>
				<p>
					Savantis provides appropriately skilled engineers and technical specialists for temporary, longer-term, and work package-based assignments. Major sectors of expertise include electronics, automotive, transportation, energy, oil and gas, utilities, medical products, aerospace, chemicals and raw materials.
				</p>

			</div>
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
