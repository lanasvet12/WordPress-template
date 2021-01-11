<?php
	// Include database connection file

	//include_once('dbconfig.php');

	if (isset($_POST['email'])) {

	    $name = strip_tags(trim($_POST["name"]));
	    $name = str_replace(array("\r","\n"),array(" "," "), $name);
	    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	    $subject = trim($_POST["subject"]);
	    $message = trim($_POST["message"]);

	    $query = "INSERT INTO contacts (name, email, subject, message) 
	              VALUES('$name','$email','$subject','$message')";
		
		$result = mysqli_query($con, $query);

		if ($result==true) {
		    sendMail($email, ucwords($subject),$message);
		}else{
		   return false;
		}	
	}


	// Create PHPMailder function for sent mail

	function sendMail($to, $subject, $message){

		require 'PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer(true);

		$mail->SMTPDebug = 3;                                 // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';   	              // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'YourEmailAddress';                 // SMTP username
		$mail->Password = 'YourEmailPassword';                // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom($to, 'Contact us');
		$mail->addAddress('YourEmailAddress', 'Contact us');  // Add a recipient
		$mail->addAddress('YourEmailAddress');                // Name is optional
		$mail->addReplyTo($to, 'Contact us');                 // Add reply to users

		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->SMTPOptions = array(
			'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
			)
		);                    
		
		$mail->Subject = $subject;
		$mail->Body    = $message;
		
		if($mail->send()) {
		   return true; 
		} else {
		   return false;
		}
	}

?>