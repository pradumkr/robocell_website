<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$host = "smtp.gmail.com";
$username = "swatikanchan707@gmail.com";
$password = "rahdekrnsa";

$to = $email;
$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
$headers = 'From: swatikanchan707@gmail.com' . "\r\n";
$headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
$smtp = Mail::factory('smtp',
	array (
		'host' => $host,
    	'auth' => true,
    	'username' => $username,
    	'password' => $password));
 
// if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
// { 
// 	// this line checks that we have a valid email address
// 	mail($to, $subject, $message, $headers); //This method sends the mail.
// 	echo "Your email was sent!"; // success message
// }
// else
// {
// 	echo "Invalid Email, please provide a correct email.";
// }
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail))
{
	echo("" . $mail->getMessage() . ""); 
}
else
{   
	echo("Message successfully sent!");  }

?>