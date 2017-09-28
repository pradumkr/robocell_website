<html lang="en">

<head>

  <!-- Basic -->
  <title>Robocell | Mail</title>

  <!-- Define Charset -->
  <!-- <meta charset="utf-8"> -->

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="Swati" content="iThemesLab">
</head>
<body>


<?php
/* 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$host = "smtp.gmail.com";
$username = "swatikanchan707@gmail.com";
$password = "rahdekrsna";

$to = $email;
$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
$headers = 'From: swatikanchan707@gmail.com' . "\r\n";
$headers = array(
				'From' => $username,
				'To' => $to,
				'Subject' => $subject);
$smtp = Mail::factory('smtp',
	array(
		'host' => $host,
    	'auth' => true,
    	'username' => $username,
    	'password' => $password));
 
$mail = $smtp -> send($to, $headers, $body);
?>
	<div>
	<p>
<?php
if (PEAR::isError($mail))
{
	echo("" . $mail -> getMessage() . ""); 
}
else
{   
	echo("Message successfully sent!");  
}
?>
	</p>
	</div>
	*/
	// the message
	ini_set("SMTP","ssl://smtp.gmail.com"); 
	ini_set("smtp_port","465");
	$msg = "First line of text\nSecond line of text";

	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

	// send email
	mail("swatikanchan707@gmail.com","My subject",$msg);
	?>
</body>
</html>