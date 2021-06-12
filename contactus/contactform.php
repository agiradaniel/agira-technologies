<?php

	$error_message = "";

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];
	
	$mailTo = "admin@agiratechnologies.co.ke";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from".$name.".\n\n".$message;
	
	mail($mailTo, $subject, $txt, $headers);
	
	if(mail($mailTo, $subject, $txt, $headers)){
		
		$error_message = "Email was sent successfully";
		
	}else{
		
		$error_message = "Email was not sent ";
	}	
			
	
	header("Location: contactus.html?mailsend");
}




/*
	$name = "Daniel";
	$visitor_email = "danielkaranja@agiratechnologies.co.ke";
	$message = "Hello this is a trial message";

	$email_from = "danielagira@agiratechnologies.co.ke";

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name";
	$email_body .= "User Email: $visitor_email";
	$email_body .= "User Message: $message";
	

	$to = "danielkaranja65@gmail.com"; 

	$headers = "From: $email_from";
	$headers .= "Reply-To: $visitor_email";
	
	mail($to, $email_subject, $email_body, $headers);
	
	if(mail($to, $email_subject, $email_body, $headers)){
		
		echo "Email sent";
		
	}else{
		
		echo "Email not sent";
	}	
			
*/	
	
?>


