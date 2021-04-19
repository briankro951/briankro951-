<?php
$name = $_POST['name']
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'brianmiles1221@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name : $name.\n".
                "User Email: $visitor_email.\n".
                    "User Message: $message.\n";

    $to = "briankro951@gmail.com";

    $header = "From: $email_from \r\n"
    $header .= "Reply-To: $visitor_email r\n";

    mail($tom$email_subject,$email_body,$header)
    header("Location: index.html");

?>