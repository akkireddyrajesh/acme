<!DOCTYPE html>
<html>
<head>

<?php include( 'inc/meta.php') ?>
<!-- headtag -->
<link rel="icon" href="images/fav_icon.png" type="image/png" sizes="16x16">
<title>ACME  || Careers</title>

<!-- CSS Files -->
<?php include( 'inc/css.inc.php') ?>

<!-- JavaScript Files -->
<?php //include( 'inc/js.inc.php') ?>

</head>
<body class="text-justify">
<!-- header -->
<?php include('inc/header.inc.php'); ?>

<!-- banner -->
<section class="bannerGrid page-info-banner page_head banner_img banner_careers_img">
	<!-- banner-text -->
	<div class="services_img_text page-info-banner-text col-md-6">
		<p> </p>
		<p> </p><br/><br/>
		<p>This is where you <br/>graduate to being an expert! </p>
		<p> </p>
	</div>
	<!-- banner-text -->
</section>
<!-- //banner -->
<section class="contact-page container-fluid">
	<div class="container">
		<h3 class="tittle text-center">Career Opportunities</h3>
		<div class="row contact_row">
			<div class="col-md-12">
                <!-- <h3 class="title_sub">Sollutions</h3> -->
                <!-- <h4 class="title_sub_sub">At ACME we work to be the “employer of choice” for all IT professionals. Our experts are our pride and play a pivotal role in making us a success. We invest time, money and effort in helping to build your career.</h4>
                <ul class="text_content">
					<li><b>keeping you updated –</b>
					feed you with the latest trends in technology and help you upgrade your skills when needed
					<li><b>Focus on personality development  –</b>
					we work with you to constantly refine your soft skills and people skills. We all know how important these are to help you grow!
					</li>
				</ul> -->
				<h4>ACME Innovations speaks to a gathering of capable, accomplished, and decided experts that drive results. We heartily enroll experts who are innovative masterminds and results-driven cooperative people. Meet any of our colleagues and you will recognize promptly that we are:</h4>
				<ul class=" col-md-12 list-circle text_content">
					<li> Energetic experts </li>
					<li> Talented masterminds </li>
					<li> Successful issue solvers </li>
					<li> Ingenious and decided specialized masters </li>
					<li> Incredible cooperative people </li>

				</ul>
				<p>All positions require excellent communication skills. Strong analytical and problem solving abilities are essential. Kindly send your resume to <b>info@acmebs.net</b></p>
			</div>

			<div class="col-md-6">
				<button class="btn btn-jobDesc" data-toggle="collapse" data-target="#jobDescription">Open Positions</button>
				
				<?php
					echo "<br/>";
					//Careers Job Apply

					require 'PHPMailer/PHPMailerAutoload.php';

					try {
						//Pre Requisites
						$acme_email = "info@acmebs.net";
						$acme_Cc = "akkireddyrajesh@gmail.com,venkat.ync@gmail.com";

						if(isset($_POST['applyJobFormBtn'])) {

							$mail = new PHPMailer;

							$mail->From       = $_POST['email'];	
							$mail->FromName   = $_POST['name'];

							// $to_email = $_POST['email'];
							$to_email = acme_email;

							$mail->AddAddress($to_email);

							$mail->AddReplyTo($_POST['email']);

							$mail->Subject  = "New Job Application";

							$body = "<table rules='all' style='border-color: #666;' cellpadding='10'>

								<tr>

									<th colspan='2'>Candidate Data</th>

								</tr>

								<tr>

									<td>Name :</td>

									<td>".$_POST['name']."</td>

								</tr>
								<tr>

									<td>Qualification :</td>

									<td>".$_POST['qualification']."</td>

								</tr>
								<tr>

									<td>Mobile  :</td>

									<td>".$_POST['mobile']."</td>

								</tr>
								<tr>

								<td>E-mail : </td>

								<td>".$_POST['email']."</td>

								</tr>	

								<table>";

							$body = preg_replace('/\\\\/','', $body);

							$mail->MsgHTML($body);		

							$mail->IsSendmail();

							$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 

							$mail->WordWrap   = 80; 

							$mail->AddAttachment($_FILES['attach']['tmp_name'], $_FILES['attach']['name']);

							$mail->IsHTML(true);

							$mail->Send();

									
							echo '<div class="well bg-success well-lg">Applied Successfully ... <br/>Our Adminstrative will contact you soon...</div>';

						}

					} catch (phpmailerException $e) {

						echo $e->errorMessage();

					}

				?>				
				
				
				
				<div id="jobDescription" class="collapse">
					
					
					
					<h4>Location: Vijayawada</h4>
					<h5>Required Skills (Freshers):</h5>
					<ul class=" col-md-12 list-circle text_content">
						<li>Need to have excellent communication skills.</li>
						<li>Must be able to work in USA timings.</li>
						<li>Individual with passionate and choose their career in Recruiting Sector.</li>
						<li>Very passionate dealing with American Vendors or Clients.</li>
						<li>Must be able to commit for a long period (Not less than 2 years).</li>
					</ul>
					<!-- Trigger the modal with a button -->
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#applyJob">Apply Now</button>
					<br/>
					<br/>

					<h4>Role: Business Development Manager (US IT Staffing)</h4>
					<h4>Work Location: Hyderabad/Vijayawada</h4>
					<h4>DESCRIPTION: </h4>
					<p>ACME Business Solutions is in need of Senior Business Development Manager who is responsible getting client accounts. Desired candidate must have an existing client relationship and a proven track record of success in getting IT Clients. Your goal is to identify potential clients and interact with Hiring Managers of clients who regularly releasing contract and/or contract-to-hire IT Staff augmentation services. You will be responsible in materializing existing vendor/client accounts or contracts and build this network.
					</p>
					<h4>Required Skills:</h4>
					<ul class=" col-md-12 list-circle text_content">
						<li>Strong knowledge of Staffing Industry.</li>					
						<li>Must have a proven track record in getting new client acquisition and business development.</li>					
						<li>Identify Client requirements and maintain relationships to serve clients in a better way.</li>					
						<li>Leverage existing relationships and network to open new business
							Interact routinely with various levels of management, functional leads, other staff, and customers
							Ability to travel as required, based on negotiated work location.</li>					
						<li>Sole responsibility is to obtain new job orders for recruiters to fill.</li>					
						<li>Excellent presentation and written communication skills in consultative settings, interact with compliance/Hiring Managers and Business Owners.</li>					
						<li>Effectively present our services to new and existing clients.</li>					
					</ul>
					<!-- Trigger the modal with a button -->
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#applyJob">Apply Now</button>
					<br/>

				</div>
				
			</div>
			
		</div><!--row-->
	</div><!--container-->
</section>
<br/>


<!-- Modal starts-->
<div id="applyJob" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Apply For Job</h4>
		</div>
		<form id="applyJobForm" class="form-horizontal" enctype='multipart/form-data'>
			<div class="modal-body">
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Name:</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="qualification">Qualification:</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" name="qualification" id="qualification" placeholder="Enter Qualification">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="mobile">Mobile:</label>
					<div class="col-sm-10">
					<input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number">
					</div>
				</div>				
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Email:</label>
					<div class="col-sm-10">
					<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
					</div>
				</div>		
				<div class="form-group">
					<label class="control-label col-sm-2" for="attach">Upload Resume</label>
					<div class="col-sm-10">
					<input type="file" class="form-control" placeholder="File" name="attach" id="attach" />
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success"  name="applyJobFormBtn" id="applyJobFormBtn">Apply</button>
			</div>
		</form>
    </div>

  </div>
</div>
<!-- Modal Ends -->

<!--Footer File -->
<?php include( 'inc/footer.inc.php') ?>

<!-- JavaScript Files -->
<?php include( 'inc/js.inc.php') ?>

<!-- <script src="js/forms.js"></script> -->

</body>
</html>
