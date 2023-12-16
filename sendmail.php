<?php
$to = 'nandusasikumar007@gmail.com';
$subject = 'Booking Confirmation';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: joelshibu100@gmail.com' . "\r\n";

//$message = file_get_contents('../PHP_Pages/template.html'); // Load the HTML template
$message="hello world";

$mail = mail($to, $subject, $message, $headers);
echo $mail;
print_r(error_get_last())

?>