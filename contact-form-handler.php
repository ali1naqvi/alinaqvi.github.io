<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $message_from = 'anon8014@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "Name : $name\n"."Email: $visitor_email\n"."Message: $message"

    $to = "alinaqvi8014@gmail.com";

    $headers = "From: $email_from \r\n";
    
    $headers = "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("location: index.html");

?>
