<?php
	//echo "/access-Denied <br/> Click Here to Go <a href='index.php'>Home</a>";

	//Contact Mail Function
	// if ( isset( $_POST['formname']) ) {
	if ( $_POST['formname']=='contactForm' ) {
		$contactFormData['name']=test_input($_POST['username']);
		$contactFormData['mobile']=test_input($_POST['mobile']);
		$contactFormData['email']=test_input($_POST['email']);
		$contactFormData['message']=test_input($_POST['message']);
		
		$subject1 = "ACME Consultency";
		$message = "You are Successfully Registered  with ACME Consultency.,"."<br/>"." Our Adminstrative will contact you soon..., Please wait for a little span of time";

		//$site_email = "info@acmebs.net,venkat.ync@gmail.com,akkireddyrajesh@gmail.com";
		$site_email = "info@acmebs.net";
		$Cc = "akkireddyrajesh@gmail.com,venkat.ync@gmail.com";
		$subject = "New Customer Requested Form";

		//HTML BODY
	 	$site_message = '<html><body>';
		$site_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		$site_message .= "<tr style='background: #eee;'><td><strong>Customer Name:</strong> </td><td>" . $contactFormData['name'] . "</td></tr>";
		$site_message .= "<tr><td><strong>Phone:</strong> </td><td>" . $contactFormData['mobile'] . "</td></tr>";
	 	$site_message .= "<tr><td><strong>Email:</strong> </td><td>" . $contactFormData['email'] . "</td></tr>";
		$site_message .= "<tr><td><strong>Message:</strong> </td><td>" . $contactFormData['message'] . "</td></tr>";
		$site_message .= "</table>";
			

		$headers = 'From: '.$site_email."\r\n".
					'Cc: '.$Cc."\r\n".
			 'Reply-To: '.$contactFormData['email']."\r\n"; 
		$headers .= "X-Mailer: PHP/". phpversion();
		$headers .= "X-Priority: 3 \n";
		$headers .= "MIME-version: 1.0\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\n";
		
		@mail($site_email, $subject, $site_message, $headers);
				
				   @mail($contactFormData['email'],$subject1,$message, "From:".$site_email."\r\n");		


	}


	//For input values handling
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	  }



	function contactMail(){

	}
	
?>

<?php
// $site_email = "akkireddyrajeshkumar@gmail.com";
// 			$subject = "Employer Registration";
// 			$subject1 = "AnimationSutra.com";
// 			$name= "akkireddyrajeshkumar@gmail";
// 		$message = "You are Successfully Registered as Employer with AnimationSutra.com,'</br>' You will be approved after verifying the details , Please wait for a little span of time,";
// 		 $site_message = '<html><body>';
			
// 			$site_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
// 			$site_message .= "<tr style='background: #eee;'><td><strong>Companyname:</strong> </td><td>" . $name . "</td></tr>";
// 	     $site_message .= "<tr><td><strong>Email:</strong> </td><td>" . $name . "</td></tr>";
// 			$site_message .= "<tr><td><strong>Address:</strong> </td><td>" . $name . "</td></tr>";
// 				$site_message .= "<tr><td><strong>City:</strong> </td><td>" . $name . "</td></tr>";
// 			$site_message .= "<tr><td><strong>Phone:</strong> </td><td>" . $name . "</td></tr>";
// 				$site_message .= "<tr><td><strong>Website:</strong> </td><td>" . $name . "</td></tr>";
// 			$site_message .= "<tr><td><strong>Company Profile:</strong> </td><td>" . $name . "</td></tr>";
// 				$site_message .= "</table>";
				

// 		$headers = 'From: '.$site_email."\r\n".
// 				 'Reply-To: '.$email."\r\n"; 
// 				 $headers .= "X-Mailer: PHP/". phpversion();
// 				 $headers .= "X-Priority: 3 \n";
// 				 $headers .= "MIME-version: 1.0\n";
// 				 $headers .= "Content-Type: text/html; charset=UTF-8\n";
			
// 			@mail($site_email, $subject, $site_message, $headers);
					
// 					   @mail($email,$subject1,$message, "From:".$site_email."\r\n");