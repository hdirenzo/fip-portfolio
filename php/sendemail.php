<?php

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);

require_once "Mail.php";

$host = "smtp.ionos.com";
$username = "support@hannuccia.com";
$password = "_Pantone1999_9991";
$port = "587";
$to = "hmdirenzo@gmail.com";
$email_from = "support@hannuccia.com";
$email_subject = "Test Dev Message" ;
$email_body = "Development msg" ;
$email_address = "hmdirenzo@gmail.com";

$headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
$smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
$mail = $smtp->send($to, $headers, $email_body);


if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Message successfully sent!</p>");
}
?>