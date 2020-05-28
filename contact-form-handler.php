<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['body'];

$email_from = 'alycolbar@gmail.com';
$email_subject = "New Form Submission";
$email_body = "User Name: $name.\n".
                "User mail: $visitor_email.\n".
                    "User Message: $message.\n";

$to = "palyncakes@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?>