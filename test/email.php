<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
set_time_limit(0);

require './PHPMailer-master/PHPMailerAutoload.php';

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
$mail->Host = "mail.qq.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "1174955828@qq.com";
//Password to use for SMTP authentication
$mail->Password = "shan,20";
//Set who the message is to be sent from
$mail->setFrom('1174955828@qq.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('1174955828@qq.com', 'Fi1rst Las2t');
//Set who the message is to be sent to
$mail->addAddress('602238622@qq.com', 'John Doe');
//Set the subject line
$mail->Subject = '测试邮件';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('abc123', dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = '<h1>测试邮件111</h1>';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
