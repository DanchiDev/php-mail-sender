<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'mail sa kojeg ces dobiti pitanje';
    
    $email_subject = "Dobili ste novo pitanje";

    $email_body = "User Name: $name.\n".    
                    "User Email: $visitor_email.\n".
                    "User Message: $message.\n";


    $to = "mail na koji ces dobiti pitanje";

    $headers = "From: $email_from \r\n";

    $headers = "Reply To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>
