<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
$d = date("m");
include "config.php";
$query = "Select * from student_profile";
$result=mysql_query($query);


$flag=0;
$count=0;

require 'PHPMail/PHPMailerAutoload.php';
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	
	$x = $row['timestamp_upd'];
	
	$splitx = explode("_",$x);
	$m=end($splitx);
    $y = date("m");
	$splitx = explode("/",$m);
	$f=$splitx[1];
	
	$sub = abs(intval($m)-intval($f));
	if($sub>=3){
		$count=$count+1;
		$flag=1;
	}
	
	
//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "pherwani37@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "nirbhay pherwani37";

//Set who the message is to be sent from
$mail->setFrom('pherwani37@gmail.com', 'Dream A Dream');

//Set an alternative reply-to address
$mail->addReplyTo('pherwani37@gmail.com', 'DAD');

//Set who the message is to be sent to
$mail->addAddress($row['email'], 'Admin');

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

$mail->msgHTML(file_get_contents('content.html'), dirname(__FILE__));
//Attach an image file

//send the message, check for errors
if ($flag==1) {
	$mail->send();
	$flag=0;
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}


}
