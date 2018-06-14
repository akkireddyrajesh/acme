<?php 
include('header.php');
?>

<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/form_validation.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">

<div class="container">
	<h2>Example: Send Email with Attachment in PHP</h2>
	<div id='success_message' class='hidden'>		 
		 <h2>Your Mail Sent Successfully!</h2>
		 <p><strong>You will be in touch soon.</strong></p>		 
	</div>	
	<form action='email_send.php' class="form-email" method="post" id="email-form" enctype='multipart/form-data'>		
		<div id="error">
		</div>
		<div class="form-group">
			<input type="input" class="form-control" placeholder="Name" name="u_name" id="u_name" />
			<span id="check-e"></span>
		</div>
		<div class="form-group">
			<input type="email" class="form-control" placeholder="Email address" name="u_email" id="u_email" />
			<span id="check-e"></span>
		</div>
		
		<div class="form-group">
			<input type="file" class="form-control" placeholder="File" name="attach" id="attach" />
		</div>
		<div class="form-group">
			<textarea cols="60" rows="5"  id="message" name="message" placeholder='Message'></textarea>
		</div>
		<hr />
		<div class="form-group">
			<button type="submit" class="btn btn-default" name="email_send" id="email_send">
			Send Email
			</button> 
		</div> 
	</form>		
	<div style="margin:10px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/send-email-with-attachment-in-php/" title="">Back to Tutorial</a>			
	</div>		
</div>
<?php include('footer.php');?>