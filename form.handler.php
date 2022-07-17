<?php
$name= $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];


$email_from = 'info@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name:$Name.\n";
"User email: $visitor_email.\n".
" subject: $subject.\n".
"User message: $message.\n";


$to ='mdkazishakil5@gamil.com';

$headers = "from: $email_from\r\n";

$headers .= "Reply-To: $visitor_email\r\n";

mail($To,$email_subject,$email_body,$headers) ; 

header("location:contact.html");






?>