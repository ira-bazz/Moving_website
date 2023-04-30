<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone = $_POST['tel'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$date = $_POST['move-day'];


$email_from = 'info@carental.fi';

$email_subject = 'Tarjous Pyyntö';

$email_body = "User Name: $name .\n".
                "User Email: $visitor_email .\n".
                "User Phone: $visitor_phone .\n".
                "Subject: $subject .\n".
                "User Message: $message .\n";
                "Desired Moving Day: $date .\n";

$to = 'movingservicefinland@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>