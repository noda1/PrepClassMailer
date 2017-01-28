<?php 
$string = "Good Day,\r\nI am a young, result driven, goal oriented software engineer with a passion for solving problems by providing inovative and intuitive solutions.\r\nI am passionate about ICT, a good team player and very patient with people. I have many more qualities that I'd like you to see for yourself when we meet in person.\r\nThank you for your time.\r\n\r\n****************  PS  *************** \r\n\r\nIf you reply to this email, it will be sent to my other email account (jasondev191@gmail.com) beacause of the 'Reply-To' Header.\r\n\r\nAlso, this mail might appear in your spam box because the 'From' Domain and actual domain are different.";

$message = wordwrap($string, 70, "\r\n");
$subject = "Chinonso Chukwuogor (About Me : Seniour Developer Applicant)";
// $to = "nonso4yoo@gmail.com, Jay Dev<jasondev191@gmail.com>";
$to = "riomachi@gmail.com, Doctor Fox <doctorfox29@yahoo.co.uk>, obanor.chukwuwezam@gmail.com";
$headers = 'From: nonso4yoo@gmail.com' . "\r\n" .
    'Reply-To: jasondev191@gmail.com' . "\r\n" .
    'cc: nonso4yoo@gmail.com' . "\r\n" .
    'bcc: CEO Prepclass <wezam@prepclassng.com>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
 
 ?>