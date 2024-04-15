<?php
$name= &_POST['name'];
$visitor_email(obligatorisk) = &_POST['email'];
$subject = &_POST['subject'];
$message = &_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form submission';

$email_body = "User name: $name.\n".
               "User Email: $visitor_email.\n".
                "subject: $subject.\n".
                "User Message: $message.\n";

$to = 'Post@arkitekt-Jameson.no';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: kontakt oss.html")

?>